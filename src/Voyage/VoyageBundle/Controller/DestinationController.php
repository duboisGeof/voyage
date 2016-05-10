<?php

namespace Voyage\VoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DestinationController extends Controller {
    
    public function destinationAction(){
        return $this->render('VoyageBundle:Layout:destination.html.twig');

    }
}
