<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\hotelRepository")
 */
class hotel
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
     * @var int
     *
     * @ORM\Column(name="nb_etoile", type="integer")
     */
    private $nbEtoile;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_chambre", type="integer")
     */
    private $nbChambre;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_nuit", type="integer")
     */
    private $nbNuit;

    /**
     * @var string
     *
     * @ORM\Column(name="description_hotel", type="string", length=255)
     */
    private $descriptionHotel;


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
     * Set nbEtoile
     *
     * @param integer $nbEtoile
     *
     * @return hotel
     */
    public function setNbEtoile($nbEtoile)
    {
        $this->nbEtoile = $nbEtoile;

        return $this;
    }

    /**
     * Get nbEtoile
     *
     * @return int
     */
    public function getNbEtoile()
    {
        return $this->nbEtoile;
    }

    /**
     * Set nbChambre
     *
     * @param integer $nbChambre
     *
     * @return hotel
     */
    public function setNbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    /**
     * Get nbChambre
     *
     * @return int
     */
    public function getNbChambre()
    {
        return $this->nbChambre;
    }

    /**
     * Set nbNuit
     *
     * @param integer $nbNuit
     *
     * @return hotel
     */
    public function setNbNuit($nbNuit)
    {
        $this->nbNuit = $nbNuit;

        return $this;
    }

    /**
     * Get nbNuit
     *
     * @return int
     */
    public function getNbNuit()
    {
        return $this->nbNuit;
    }

    /**
     * Set descriptionHotel
     *
     * @param string $descriptionHotel
     *
     * @return hotel
     */
    public function setDescriptionHotel($descriptionHotel)
    {
        $this->descriptionHotel = $descriptionHotel;

        return $this;
    }

    /**
     * Get descriptionHotel
     *
     * @return string
     */
    public function getDescriptionHotel()
    {
        return $this->descriptionHotel;
    }
}

