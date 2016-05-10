<?php

namespace Voyage\VoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SejourController extends Controller {
    
    public function sejourAction(){
        return $this->render('VoyageBundle:Layout:sejour.html.twig');

    }
}
