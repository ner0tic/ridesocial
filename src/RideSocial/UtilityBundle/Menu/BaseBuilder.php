<?php
namespace RideSocial\UtilityBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\SecurityContextInterface;
use JMS\TranslationBundle\Annotation\Ignore;

/**
 * Abstract menu builder.
*/
abstract class BaseBuilder
{
    /**
     * Menu factory.
     *
     * @var FactoryInterface
     */
    protected $factory;

    /**
     * Security context.
     *
     * @var SecurityContextInterface
     */
    protected $securityContext;

    /**
     * Translator instance.
     *
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * Request.
     *
     * @var Request
     */
    protected $request;

    /**
     * Constructor.
     *
     * @param FactoryInterface         $factory
     * @param SecurityContextInterface $securityContext
     * @param TranslatorInterface      $translator
     */
    public function __construct(FactoryInterface $factory, SecurityContextInterface $securityContext, TranslatorInterface $translator)
    {
        $this->factory = $factory;
        $this->securityContext = $securityContext;
        $this->translator = $translator;
    }

    /**
     * Sets the request the service
     *
     * @param Request $request
     */
    public function setRequest(Request $request = null)
    {
        $this->request = $request;
    }

    /**
     * Translate label.
     *
     * @param string $label
     * @param array  $parameters
     *
     * @return string
     */
    protected function translate($label, $parameters = array())
    {
        return $this->translator->trans(/** @Ignore */ $label, $parameters, 'menu');
    }
}
