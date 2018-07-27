<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TermRepository")
 */
class Term {
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Concept", inversedBy="terms")
     * @ORM\JoinColumn(nullable=false)
     */
    private $concept;

    /**
     * @ORM\Column(type="text")
     */
    private $value;

    /**
     * @ORM\Column(type="boolean")
     */
    private $preferred;

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

    public function getValue(): ?string {
        return $this->value;
    }

    public function setValue(string $value): self {
        $this->value = $value;

        return $this;
    }

    public function getPreferred(): ?bool {
        return $this->preferred;
    }

    public function setPreferred(bool $preferred): self {
        $this->preferred = $preferred;

        return $this;
    }

    public function toArray(): array {
        $concept = $this->concept;
        $concept = $concept ? $concept->getID() : null;
        return array(
            "id" => $this->getID(),
            "value" => $this->value,
            "concept" => $concept,
            "preferred" => $this->preferred
        );
    }
}
