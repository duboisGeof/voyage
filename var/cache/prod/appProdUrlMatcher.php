<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/Voyage')) {
            // Voyage_accueil
            if (rtrim($pathinfo, '/') === '/Voyage') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Voyage_accueil');
                }

                return array (  '_controller' => 'Voyage\\VoyageBundle\\Controller\\AccueilController::accueilAction',  '_route' => 'Voyage_accueil',);
            }

            // Voyage_destination
            if ($pathinfo === '/Voyage/destination') {
                return array (  '_controller' => 'Voyage\\VoyageBundle\\Controller\\DestinationController::destinationAction',  '_route' => 'Voyage_destination',);
            }

            // Voyage_circuit
            if ($pathinfo === '/Voyage/circuit') {
                return array (  '_controller' => 'Voyage\\VoyageBundle\\Controller\\CircuitController::circuitAction',  '_route' => 'Voyage_circuit',);
            }

            // Voyage_sejour
            if ($pathinfo === '/Voyage/sejour') {
                return array (  '_controller' => 'Voyage\\VoyageBundle\\Controller\\SejourController::sejourAction',  '_route' => 'Voyage_sejour',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
