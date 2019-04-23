<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BooksRepository")
 */
class Books
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $inStock;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $currency;

    /**
     * @var \DateTime
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * Books constructor.
     */
    public function __construct()
    {
        // Defaults
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Books
     */
    public function setTitle(string $title): Books
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Books
     */
    public function setDescription(string $description): Books
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * @param string $code
     * @return Books
     */
    public function setCode(string $code): Books
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }
    /**
     * @param null|string $author
     * @return Books
     */
    public function setAuthor(string $author): Books
    {
        $this->author = $author;
        return $this;
    }
    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return Books
     */
    public function setPrice(float $price): Books
    {
        $this->price = $price;
        return $this;
    }
    /**
     * @return string
     */
    public function getInStock(): string
    {
        return $this->inStock;
    }
    /**
     * @param string $inStock
     * @return Books
     */
    public function setInStock(string $inStock): Books
    {
        $this->inStock = $inStock;
        return $this;
    }
    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
    /**
     * @param string $currency
     * @return Books
     */
    public function setCurrency(string $currency): Books
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return Books
     */
    public function setCreatedAt(\DateTime $createdAt): Books
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return Books
     */
    public function setUpdatedAt(\DateTime $updatedAt): Books
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
