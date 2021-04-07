<?php

namespace App\Entity;

use App\Repository\ShortnerUrlRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ShortnerUrlRepository::class)
 */
class ShortnerUrl
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=50)
     */
    private $hash;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $originalUrl;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createDate;

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getOriginalUrl(): ?string
    {
        return $this->originalUrl;
    }

    public function setOriginalUrl(string $originalUrl): self
    {
        $this->originalUrl = $originalUrl;

        return $this;
    }

    public function getCreateDate(): ?\DateTimeInterface
    {
        return $this->createDate;
    }

    public function setCreateDate(\DateTimeInterface $createDate): self
    {
        $this->createDate = $createDate;

        return $this;
    }
}
