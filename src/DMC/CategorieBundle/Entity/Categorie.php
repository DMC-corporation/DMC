<?php

namespace DMC\CategorieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DMC\CategorieBundle\Entity\Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="DMC\CategorieBundle\Entity\CategorieRepository")
 */
class Categorie
{

	/**
	 * @ORM\ManyToMany(targetEntity="Article", mappedBy="categories")
	 */
	private $articles;
	
	
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
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var text $mots_cles
     *
     * @ORM\Column(name="mots_cles", type="text")
     */
    private $mots_cles;
	
	
	public function __construct() {
		$this->articles = new \Doctrine\Common\Collections\ArrayCollection();
	}

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
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set mots_cles
     *
     * @param text $motsCles
     */
    public function setMotsCles($motsCles)
    {
        $this->mots_cles = $motsCles;
    }

    /**
     * Get mots_cles
     *
     * @return text 
     */
    public function getMotsCles()
    {
        return $this->mots_cles;
    }
}