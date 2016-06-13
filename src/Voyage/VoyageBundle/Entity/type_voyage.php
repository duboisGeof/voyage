<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * type_voyage
 *
 * @ORM\Table(name="type_voyage")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\type_voyageRepository")
 */
class type_voyage
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
     * @ORM\Column(name="type_voyage", type="string", length=20)
     */
    private $typeVoyage;
    
    /**
     * @ORM\ManyToMany(targetEntity="Voyage\VoyageBundle\Entity\client", cascade={"persist"})
     */
    private $clients;
    
    public function addClient(client $client){
        $this->clients[] = $client;
        return $this;
    }
    
    public function removeClient(client $client){
        $this->clients->removeElement($client);
    }
    
    public function getClients(){
        return $this->clients;
    }
    
    /**
     * @ORM\ManyToMany(targetEntity="Voyage\VoyageBundle\Entity\ville", cascade={"persist"})
     */
    private $villes;
    
    public function addVille(ville $ville){
        $this->villes[] = $ville;
        return $this;
    }
    
    public function removeVille(ville $ville){
        $this->villes->removeElement($ville);
    }
    
    public function getVilles(){
        return $this->villes;
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
     * Set typeVoyage
     *
     * @param string $typeVoyage
     *
     * @return type_voyage
     */
    public function setTypeVoyage($typeVoyage)
    {
        $this->typeVoyage = $typeVoyage;

        return $this;
    }

    /**
     * Get typeVoyage
     *
     * @return string
     */
    public function getTypeVoyage()
    {
        return $this->typeVoyage;
    }
}

