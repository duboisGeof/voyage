<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * vol
 *
 * @ORM\Table(name="vol")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\volRepository")
 */
class vol
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="compagnie", type="string", length=255)
     */
    private $compagnie;

    /**
     * @var string
     *
     * @ORM\Column(name="nb_place", type="string", length=255)
     */
    private $nbPlace;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set compagnie
     *
     * @param string $compagnie
     *
     * @return vol
     */
    public function setCompagnie($compagnie)
    {
        $this->compagnie = $compagnie;

        return $this;
    }

    /**
     * Get compagnie
     *
     * @return string
     */
    public function getCompagnie()
    {
        return $this->compagnie;
    }

    /**
     * Set nbPlace
     *
     * @param string $nbPlace
     *
     * @return vol
     */
    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    /**
     * Get nbPlace
     *
     * @return string
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }
}

