<?php
namespace RideSocial\UtilityBundle\Form\DataTransformer;

use Doctrine\Common\Persistence\ObjectRepository;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\PropertyAccess\PropertyAccess;

class EntityToIdentifierTransformer implements DataTransformerInterface
{
    /**
     * Repository.
     *
     * @var ObjectRepository
     */
    protected $repository;

    /**
     * Identifier.
     *
     * @var string
     */
    protected $identifier;

    /**
     * Constructor.
     *
     * @param ObjectRepository $repository
     * @param string           $identifier
     */
    public function __construct(ObjectRepository $repository, $identifier = 'id')
    {
        $this->repository = $repository;
        $this->identifier = $identifier;
    }

    /**
     * {@inheritdoc}
     */
    public function transform($value)
    {
        if (!$value) {
            return null;
        }

        if (null === $entity = $this->repository->findOneBy(array($this->identifier => $value))) {
            throw new TransformationFailedException(
                sprintf(
                    'Entity "%s" with identifier "%s"="%s" does not exist.',
                    $this->repository->getClassName(),
                    $this->identifier,
                    $value
                )
            );
        }

        return $entity;
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform($entity)
    {
        if (null === $entity) {
            return '';
        }

        $class = $this->repository->getClassName();

        if (!$entity instanceof $class) {
            throw new UnexpectedTypeException($entity, $class);
        }

        $accessor = PropertyAccess::createPropertyAccessor();

        return $accessor->getValue($entity, $this->identifier);
    }
}
