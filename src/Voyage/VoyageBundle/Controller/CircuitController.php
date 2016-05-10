<?php

namespace Voyage\VoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CircuitController extends Controller {
    
    public function circuitAction(){
        return $this->render('VoyageBundle:Layout:circuit.html.twig');

    }
}
