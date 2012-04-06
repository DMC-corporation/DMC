<?php

namespace DMC\CategorieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DMC\CategorieBundle\Entity\Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="DMC\CategorieBundle\Entity\ArticleRepository")
 */
class Article
{

	/**
	 * @ORM\ManyToMany(targetEntity="Categorie", inversedBy="articles")
	 * @ORM\JoinTable(name="categorie_article")
	 */
	private $categories;

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
     * @var float $prix
     *
     * @ORM\Column(name="prix", type="float", nullable=true)
     */
    private $prix;

    /**
     * @var integer $type
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var datetime $date_sortie
     *
     * @ORM\Column(name="date_sortie", type="datetime")
     */
    private $date_sortie;

    /**
     * @var datetime $date_validite
     *
     * @ORM\Column(name="date_validite", type="datetime", nullable=true)
     */
    private $date_validite;

    /**
     * @var datetime $date_maj
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $date_maj;

    /**
     * @var datetime $creation_date
     *
     * @ORM\Column(name="creation_date", type="datetime")
     */
    private $creation_date;

    /**
     * @var datetime $update_date
     *
     * @ORM\Column(name="update_date", type="datetime", nullable=true)
     */
    private $update_date;
	
	
	
	public function __construct() {
		$this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set prix
     *
     * @param float $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
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

    /**
     * Set date_sortie
     *
     * @param datetime $dateSortie
     */
    public function setDateSortie($dateSortie)
    {
        $this->date_sortie = $dateSortie;
    }

    /**
     * Get date_sortie
     *
     * @return datetime 
     */
    public function getDateSortie()
    {
        return $this->date_sortie;
    }

    /**
     * Set date_validite
     *
     * @param datetime $dateValidite
     */
    public function setDateValidite($dateValidite)
    {
        $this->date_validite = $dateValidite;
    }

    /**
     * Get date_validite
     *
     * @return datetime 
     */
    public function getDateValidite()
    {
        return $this->date_validite;
    }

    /**
     * Set date_maj
     *
     * @param datetime $dateMaj
     */
    public function setDateMaj($dateMaj)
    {
        $this->date_maj = $dateMaj;
    }

    /**
     * Get date_maj
     *
     * @return datetime 
     */
    public function getDateMaj()
    {
        return $this->date_maj;
    }

    /**
     * Set creation_date
     *
     * @param datetime $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creation_date = $creationDate;
    }

    /**
     * Get creation_date
     *
     * @return datetime 
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Set update_date
     *
     * @param datetime $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->update_date = $updateDate;
    }

    /**
     * Get update_date
     *
     * @return datetime 
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }
	
	/**
     * add categorie
     *
     * @param Categorie $categorie
     */
    public function addCategorie(\DMC\CategorieBundle\Entity\Categorie $categorie)
    {
        $this->categories[] = $categorie;
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getCategories()
    {
        return $this->categories;
    }
}