<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\paysRepository")
 */
class pays
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
     * @ORM\Column(name="nom_pays", type="string", length=100)
     */
    private $nomPays;
    
    /**
     * @ORM\ManyToOne (targetEntity="Voyage\VoyageBundle\Entity\ville")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ville;
    
    public function setVille(ville $ville){
        $this->ville = $ville;
        return $this;
    }
    
    public function getPays(){
        return $this->ville;
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
     * Set nomPays
     *
     * @param string $nomPays
     *
     * @return pays
     */
    public function setNomPays($nomPays)
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    /**
     * Get nomPays
     *
     * @return string
     */
    public function getNomPays()
    {
        return $this->nomPays;
    }
}

