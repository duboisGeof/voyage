<?php

namespace Voyage\VoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller {
    
    public function searchAction(){
        return $this->render('VoyageBundle:Layout:search.html.twig');

    }
}
