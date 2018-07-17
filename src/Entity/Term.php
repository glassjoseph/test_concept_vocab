<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TermRepository")
 */
class Term
{
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
    private $term_text;

    /**
     * @ORM\Column(type="boolean")
     */
    private $preferred;

    public function getId()
    {
        return $this->id;
    }

    public function getConcept(): ?Concept
    {
        return $this->concept;
    }

    public function setConcept(?Concept $concept): self
    {
        $this->concept = $concept;

        return $this;
    }

    public function getTermText(): ?string
    {
        return $this->term_text;
    }

    public function setTermText(string $term_text): self
    {
        $this->term_text = $term_text;

        return $this;
    }

    public function getPreferred(): ?bool
    {
        return $this->preferred;
    }

    public function setPreferred(bool $preferred): self
    {
        $this->preferred = $preferred;

        return $this;
    }

    public function toArray() {
        $concept = $this->concept;
        $concept = $concept ? $concept->getID() : null;
        return array(
            "term_text" => $this->term_text,
            "concept" => $concept,
            "preferred" => $this->preferred
        );
    }
}
