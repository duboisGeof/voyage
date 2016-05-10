<?php

namespace Voyage\VoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller {
    
    public function accueilAction(){
        return $this->render('VoyageBundle:Layout:accueil.html.twig');

    }
}
