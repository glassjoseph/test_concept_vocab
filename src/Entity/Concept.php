<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConceptRepository")
 */
class Concept
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $deprecated = 'f';

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ConceptSource", mappedBy="concept", orphanRemoval=true)
     */
    private $conceptSources;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Term", mappedBy="concept", fetch="EAGER")
     */
    private $terms;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ConceptProperties", mappedBy="concept", orphanRemoval=true, fetch="EAGER")
     */
    private $conceptProperties;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category", inversedBy="concepts")
     */
    private $concept_category;

    public function __construct()
    {
        $this->conceptSources = new ArrayCollection();
        $this->terms = new ArrayCollection();
        $this->conceptProperties = new ArrayCollection();
        $this->concept_category = new ArrayCollection();
    }   // check to ensure defaults carry through

    public function getId()
    {
        return $this->id;
    }

    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }

    public function setDeprecated(bool $deprecated): self
    {
        $this->deprecated = $deprecated;

        return $this;
    }

    /**
     * @return Collection|ConceptSource[]
     */
    public function getConceptSources(): Collection
    {
        return $this->conceptSources;
    }

    public function addConceptSource(ConceptSource $conceptSource): self
    {
        if (!$this->conceptSources->contains($conceptSource)) {
            $this->conceptSources[] = $conceptSource;
            $conceptSource->setConcept($this);
        }

        return $this;
    }

    public function removeConceptSource(ConceptSource $conceptSource): self
    {
        if ($this->conceptSources->contains($conceptSource)) {
            $this->conceptSources->removeElement($conceptSource);
            // set the owning side to null (unless already changed)
            if ($conceptSource->getConcept() === $this) {
                $conceptSource->setConcept(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Term[]
     */
    public function getTerms(): Collection
    {
        return $this->terms;
    }

    public function addTerm(Term $term): self
    {
        if (!$this->terms->contains($term)) {
            $this->terms[] = $term;
            $term->setConcept($this);
        }

        return $this;
    }

    public function removeTerm(Term $term): self
    {
        if ($this->terms->contains($term)) {
            $this->terms->removeElement($term);
            // set the owning side to null (unless already changed)
            if ($term->getConcept() === $this) {
                $term->setConcept(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ConceptProperties[]
     */
    public function getConceptProperties(): Collection
    {
        return $this->conceptProperties;
    }

    public function addConceptProperty(ConceptProperties $conceptProperty): self
    {
        if (!$this->conceptProperties->contains($conceptProperty)) {
            $this->conceptProperties[] = $conceptProperty;
            $conceptProperty->setConcept($this);
        }

        return $this;
    }

    public function removeConceptProperty(ConceptProperties $conceptProperty): self
    {
        if ($this->conceptProperties->contains($conceptProperty)) {
            $this->conceptProperties->removeElement($conceptProperty);
            // set the owning side to null (unless already changed)
            if ($conceptProperty->getConcept() === $this) {
                $conceptProperty->setConcept(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getConceptCategory(): Collection
    {
        return $this->concept_category;
    }

    public function addConceptCategory(Category $conceptCategory): self
    {
        if (!$this->concept_category->contains($conceptCategory)) {
            $this->concept_category[] = $conceptCategory;
        }

        return $this;
    }

    public function removeConceptCategory(Category $conceptCategory): self
    {
        if ($this->concept_category->contains($conceptCategory)) {
            $this->concept_category->removeElement($conceptCategory);
        }

        return $this;
    }

    public function toArray() {
        $terms = [];
        foreach ($this->getTerms() as $term) {
            $terms[] = $term->toArray();
        }

        return array(
            "id" => $this->getID(),
            "deprecated" => $this->getDeprecated(),
            "terms" => $terms
        );
    }


}
