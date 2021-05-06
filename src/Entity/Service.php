<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ServiceRepository::class)
 */
class Service
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity=AbstractAccessType::class, mappedBy="service", cascade={"persist", "remove"})
     */
    private $accessType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAccessType(): ?AbstractAccessType
    {
        return $this->accessType;
    }

    public function setAccessType(AbstractAccessType $accessType): self
    {
        // set the owning side of the relation if necessary
        if ($accessType->getService() !== $this) {
            $accessType->setService($this);
        }

        $this->accessType = $accessType;

        return $this;
    }
}
