<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * prix
 *
 * @ORM\Table(name="prix")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\prixRepository")
 */
class prix
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
     * @var float
     *
     * @ORM\Column(name="pht", type="float")
     */
    private $pht;

    /**
     * @var float
     *
     * @ORM\Column(name="pttc", type="float")
     */
    private $pttc;
    
    /**
     * @ORM\ManyToOne(targetEntity="Voyage\VoyageBundle\Entity\promotion")
     */
    private $promotion;
    
    public function setPromotion(promotion $promotion){
        $this->promotion =$promotion;
        return $this;
    }
    
    public function getPromotion(){
        return $this->promotion;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="Voyage\VoyageBundle\Entity\assurance")
     */
    private $assurance;
    
    public function setAssurance(assurance $assurance){
        $this->assurance =$assurance;
        return $this;
    }
    
    public function getAssurance(){
        return $this->assurance;
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
     * Set pht
     *
     * @param float $pht
     *
     * @return prix
     */
    public function setPht($pht)
    {
        $this->pht = $pht;

        return $this;
    }

    /**
     * Get pht
     *
     * @return float
     */
    public function getPht()
    {
        return $this->pht;
    }

    /**
     * Set pttc
     *
     * @param float $pttc
     *
     * @return prix
     */
    public function setPttc($pttc)
    {
        $this->pttc = $pttc;

        return $this;
    }

    /**
     * Get pttc
     *
     * @return float
     */
    public function getPttc()
    {
        return $this->pttc;
    }
}

