<?php
namespace RideSocial\UtilityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UtilityController extends Controller
{
    /**
     * @var Configuration
     */
    protected $config;
    
    /**
     * @var SecurityContext
     */
    protected $securityContext;
    
    public function __construct(Configuration $config = null)
    {
        $this->config = $config;
    }

    public function getConfiguration()
    {
        return $this->config;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        parent::setContainer($container);
        
        $this->securityContext = $this->container->get('security.context');
    }
}
