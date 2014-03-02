<?php
namespace RideSocial\UtilityBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use RideSocial\UtilityBundle\Controller\UtilityController as Controller;

class HomepageController extends Controller
{
    /**
     * @Template("RideSocialUtilityBundle:Homepage:index.html.twig")
     */
    public function indexAction()
    {
        // Carousel
        $carousel = $this->getDoctrine()
            ->getRepository('RideSocialUtilityBundle:Carousel')
            ->findOneBySlug('splash');
    

        // last username entered by the user
        $lastUsername = (!$this->securityContext->isGranted('ROLE_USER')) ? '' : $this->securityContext->get(SecurityContext::LAST_USERNAME);

        $csrfToken = $this->container->has('form.csrf_provider')
            ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate')
            : null;

        return array(
            'carousel' => $carousel,
            'csrf_token' => $csrfToken,
            'last_username' => $lastUsername
        );
    }

    public function aboutAction()
    {
        return $this->render('RideSocialUtilityBundle:Homepage:about.html.twig');
    }

    public function helpAction()
    {
        return $this->render('RideSocialUtilityBundle:Homepage:help.html.twig');
    }

    public function contactAction()
    {
        return $this->render('RideSocialUtilityBundle:Homepage:contact.html.twig');
    }
}
