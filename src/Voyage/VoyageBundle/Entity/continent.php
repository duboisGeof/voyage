<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * continent
 *
 * @ORM\Table(name="continent")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\continentRepository")
 */
class continent
{
    /**
     * @var int
     *
     * @ORM\Column(name="code_continent", type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_continent", type="string", length=100)
     */
    private $nomContinent;
    
    /**
     * @ORM\ManyToOne (targetEntity="Voyage\VoyageBundle\Entity\pays")
     * @ORM\JoinColumn(nullable=false)
     */
    private $pays;
    
    public function setPays(pays $pays){
        $this->pays = $pays;
        return $this;
    }
    
    public function getPays(){
        return $this->pays;
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
     * Set nomContinent
     *
     * @param string $nomContinent
     *
     * @return continent
     */
    public function setNomContinent($nomContinent)
    {
        $this->nomContinent = $nomContinent;

        return $this;
    }

    /**
     * Get nomContinent
     *
     * @return string
     */
    public function getNomContinent()
    {
        return $this->nomContinent;
    }
}

