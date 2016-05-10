<?php

namespace Voyage\VoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller {
    
    public function contactAction(){
        return $this->render('VoyageBundle:Layout:contact.html.twig');
    }
}
