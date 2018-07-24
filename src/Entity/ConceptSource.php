<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConceptSourceRepository")
 */
class ConceptSource
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Concept", inversedBy="conceptSources")
     * @ORM\JoinColumn(nullable=false)
     */
    private $concept;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $citation;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $url;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $found_data;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $note;

    public function getId() {
        return $this->id;
    }

    public function getConcept(): ?Concept {
        return $this->concept;
    }

    public function setConcept(?Concept $concept): self {
        $this->concept = $concept;

        return $this;
    }

    public function getCitation(): ?string {
        return $this->citation;
    }

    public function setCitation(?string $citation): self {
        $this->citation = $citation;

        return $this;
    }

    public function getUrl(): ?string {
        return $this->url;
    }

    public function setUrl(?string $url): self {
        $this->url = $url;

        return $this;
    }

    public function getFoundData(): ?string {
        return $this->found_data;
    }

    public function setFoundData(?string $found_data): self {
        $this->found_data = $found_data;

        return $this;
    }

    public function getNote(): ?string {
        return $this->note;
    }

    public function setNote(?string $note): self {
        $this->note = $note;

        return $this;
    }
}
