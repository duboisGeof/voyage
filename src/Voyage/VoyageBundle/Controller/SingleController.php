<?php

namespace Voyage\VoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SingleController extends Controller {
    
    public function singleAction(){
        return $this->render('VoyageBundle:Layout:single.html.twig');

    }
}
