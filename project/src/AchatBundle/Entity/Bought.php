<?php

namespace AchatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bought
 *
 * @ORM\Table(name="bought")
 * @ORM\Entity
 */
class Bought
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="book_id", type="integer", nullable=true)
     */
    private $bookId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchase_date", type="date", nullable=true)
     */
    private $purchaseDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */

    private $type;
    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */

    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity="LivreBundle\Entity\Livres")
     * @ORM\JoinColumn(name="b_id", referencedColumnName="id")
     */
    private $bId;

    /**
     * @ORM\ManyToOne(targetEntity="userBundle\Entity\User")
     * @ORM\JoinColumn(name="u_id", referencedColumnName="id")
     */
    private $uId;



    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * @param mixed $bookId
     */
    public function setBookId($bookId)
    {
        $this->bookId = $bookId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * @param \DateTime $purchaseDate
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }


    /**
     * @return mixed
     */
    public function getBId()
    {
        return $this->bId;
    }

    /**
     * @param mixed $bId
     */
    public function setBId($bId)
    {
        $this->bId = $bId;
    }

    /**
     * @return mixed
     */
    public function getUId()
    {
        return $this->uId;
    }

    /**
     * @param mixed $uId
     */
    public function setUId($uId)
    {
        $this->uId = $uId;
    }



}