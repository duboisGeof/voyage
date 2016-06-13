<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * type_personne
 *
 * @ORM\Table(name="type_personne")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\type_personneRepository")
 */
class type_personne
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;
    
    /**
     * @ORM\OneToOne(targetEntity="Voyage\VoyageBundle\Entity\client", cascade={"persist"})
     */
    private $client;
    
    public function setClient (client $client){
        $this->client = $client;
    }
    
    public function getClient(){
        return $this->client;
    }
    
    /**
     * @ORM\OneToOne(targetEntity="Voyage\VoyageBundle\Entity\employe", cascade={"persist"})
     */
    private $employe;
    
    public function setEmploye (employe $employe){
        $this->employe = $employe;
    }
    
    public function getEmploye(){
        return $this->employe;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return type_personne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return type_personne
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
}

