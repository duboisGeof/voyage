<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\villeRepository")
 */
class ville
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
     * @ORM\Column(name="nom_ville", type="string", length=255)
     */
    private $nomVille;
    
    /**
     * @ORM\ManyToOne (targetEntity="Voyage\VoyageBundle\Entity\client")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;
    
    public function setClient(client $client){
        $this->client = $client;
        return $this;
    }
    
    public function getClient(){
        return $this->client;
    }
    
    /**
     * @ORM\ManyToMany(targetEntity="Voyage\VoyageBundle\Entity\vol", cascade={"persist"})
     */
    private $vols;
    
    public function addVol(vol $vol){
        $this->vols[] = $vol;
        return $this;
    }
    
    public function removeVol(vol $vol){
        $this->vols->removeElement($vol);
    }
    
    public function getVols(){
        return $this->vols;
    }
    
     /**
     * @ORM\ManyToOne(targetEntity="Voyage\VoyageBundle\Entity\hotel")
     */
    private $hotel;
    
    public function setHotel(hotel $hotel){
        $this->hotel = $hotel;
        return $this;
    }
    
    public function getHotel(){
        return $this->hotel;
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
     * Set nomVille
     *
     * @param string $nomVille
     *
     * @return ville
     */
    public function setNomVille($nomVille)
    {
        $this->nomVille = $nomVille;

        return $this;
    }

    /**
     * Get nomVille
     *
     * @return string
     */
    public function getNomVille()
    {
        return $this->nomVille;
    }
}

