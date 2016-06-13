<?php

namespace Voyage\VoyageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * poste
 *
 * @ORM\Table(name="poste")
 * @ORM\Entity(repositoryClass="Voyage\VoyageBundle\Repository\posteRepository")
 */
class poste
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
     * @ORM\Column(name="nom_poste", type="string", length=50)
     */
    private $nomPoste;


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
     * Set nomPoste
     *
     * @param string $nomPoste
     *
     * @return poste
     */
    public function setNomPoste($nomPoste)
    {
        $this->nomPoste = $nomPoste;

        return $this;
    }

    /**
     * Get nomPoste
     *
     * @return string
     */
    public function getNomPoste()
    {
        return $this->nomPoste;
    }
}

