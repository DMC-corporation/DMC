<?php

namespace DMC\ProfilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use DMC\CategorieBundle\Entity\Categorie;
use DMC\ProfilBundle\Entity\Profil;

/**
 * DMC\ProfilBundle\Entity\Profil
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DMC\ProfilBundle\Entity\ProfilRepository")
 */
class Profil
{

    /**
     * @ORM\OneToMany(targetEntity="DMC\ProfilBundle\Entity\LienProfilCategorie", mappedBy="profil_id", cascade={"remove", "persist"})
     */
    private $liensProfilCategorie;

    /**
     * @ORM\OneToMany(targetEntity="DMC\ProfilBundle\Entity\LienProfilReponse", mappedBy="profil_id", cascade={"remove", "persist"})
     */
    private $liensProfilReponse;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var integer $type
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
     * Set type
     *
     * @param integer $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }
    public function __construct()
    {
        $this->liensProfilCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    $this->liensProfilReponse = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add liensProfilCategorie
     *
     * @param DMC\ProfilBundle\Entity\LienProfilCategorie $liensProfilCategorie
     */
    public function addLienProfilCategorie(\DMC\ProfilBundle\Entity\LienProfilCategorie $liensProfilCategorie)
    {
        $this->liensProfilCategorie[] = $liensProfilCategorie;
    }

    /**
     * Get liensProfilCategorie
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLiensProfilCategorie()
    {
        return $this->liensProfilCategorie;
    }

    /**
     * Add liensProfilReponse
     *
     * @param DMC\ProfilBundle\Entity\LienProfilReponse $liensProfilReponse
     */
    public function addLienProfilReponse(\DMC\ProfilBundle\Entity\LienProfilReponse $liensProfilReponse)
    {
        $this->liensProfilReponse[] = $liensProfilReponse;
    }

    /**
     * Get liensProfilReponse
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLiensProfilReponse()
    {
        return $this->liensProfilReponse;
    }

    public function __toString()
    {
        return $this->getNom();
    }
}