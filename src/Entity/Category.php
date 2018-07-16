<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $value;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $domain;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $range;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Concept", mappedBy="concept_category")
     */
    private $concepts;

    public function __construct()
    {
        $this->concepts = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getRange(): ?string
    {
        return $this->range;
    }

    public function setRange(?string $range): self
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @return Collection|Concept[]
     */
    public function getConcepts(): Collection
    {
        return $this->concepts;
    }

    public function addConcept(Concept $concept): self
    {
        if (!$this->concepts->contains($concept)) {
            $this->concepts[] = $concept;
            $concept->addConceptCategory($this);
        }

        return $this;
    }

    public function removeConcept(Concept $concept): self
    {
        if ($this->concepts->contains($concept)) {
            $this->concepts->removeElement($concept);
            $concept->removeConceptCategory($this);
        }

        return $this;
    }

    public function toArray() {
        return array(
            "value" => $this->value,
            "description" => $this->description
        );
    }
}
