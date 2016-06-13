<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * date
 *
 * @ORM\Table(name="date")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\dateRepository")
 */
class date
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_depart", type="date")
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_retour", type="date")
     */
    private $dateRetour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_depart", type="time")
     */
    private $heureDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heure_retour", type="time")
     */
    private $heureRetour;
    
    /**
     * @ORM\ManyToOne (targetEntity="Voyage\VoyageBundle\Entity\vol")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vol;
    
    public function setVol(vol $vol){
        $this->vol = $vol;
        return $this;
    }
    
    public function getVol(){
        return $this->vol;
    }
    
    /**
     * @ORM\ManyToMany(targetEntity="Voyage\VoyageBundle\Entity\client", cascade={"persist"})
     */
    private $hotels;
    
    public function addHotel(hotel $hotel){
        $this->hotels[] = $hotel;
        return $this;
    }
    
    public function removeHotel(hotel $hotel){
        $this->hotels->removeElement($hotel);
    }
    
    public function getHotels(){
        return $this->hotels;
    }
    
     /**
     * @ORM\ManyToOne(targetEntity="Voyage\VoyageBundle\Entity\prix")
     */
    private $prix;
    
    public function setPrix(prix $prix){
        $this->prix = $prix;
        return $this;
    }
    
    public function getPrix(){
        return $this->prix;
    }


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
     * Set dateDepart
     *
     * @param \DateTime $dateDepart
     *
     * @return date
     */
    public function setDateDepart($dateDepart)
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    /**
     * Get dateDepart
     *
     * @return \DateTime
     */
    public function getDateDepart()
    {
        return $this->dateDepart;
    }

    /**
     * Set dateRetour
     *
     * @param \DateTime $dateRetour
     *
     * @return date
     */
    public function setDateRetour($dateRetour)
    {
        $this->dateRetour = $dateRetour;

        return $this;
    }

    /**
     * Get dateRetour
     *
     * @return \DateTime
     */
    public function getDateRetour()
    {
        return $this->dateRetour;
    }

    /**
     * Set heureDepart
     *
     * @param \DateTime $heureDepart
     *
     * @return date
     */
    public function setHeureDepart($heureDepart)
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    /**
     * Get heureDepart
     *
     * @return \DateTime
     */
    public function getHeureDepart()
    {
        return $this->heureDepart;
    }

    /**
     * Set heureRetour
     *
     * @param \DateTime $heureRetour
     *
     * @return date
     */
    public function setHeureRetour($heureRetour)
    {
        $this->heureRetour = $heureRetour;

        return $this;
    }

    /**
     * Get heureRetour
     *
     * @return \DateTime
     */
    public function getHeureRetour()
    {
        return $this->heureRetour;
    }
}

