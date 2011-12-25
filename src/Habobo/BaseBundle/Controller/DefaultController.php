<?php

namespace Habobo\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
	
    
    public function indexAction()
    {
        $message ="Habobo !";
        return $this->render('HaboboBaseBundle:Default:index.html.twig'
                , array('message'=> $message));
		
    }
}
