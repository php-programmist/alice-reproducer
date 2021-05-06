<?php

namespace App\Entity;

use App\Repository\AbstractAccessTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AbstractAccessTypeRepository::class)
 * @ORM\Table(name="access_type")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type",type="string",length=50)
 * @ORM\DiscriminatorMap({
 *     ApiKeyAccessType::TYPE = "ApiKeyAccessType",
 *     Oauth2AccessType::TYPE = "Oauth2AccessType"
 * })
 */
abstract class AbstractAccessType
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
     * @ORM\OneToOne(targetEntity=Service::class, inversedBy="accessType", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

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

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(Service $service): self
    {
        $this->service = $service;

        return $this;
    }
}
