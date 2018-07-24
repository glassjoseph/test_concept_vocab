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


    /**
     * Concepts have related Concepts
     * @ORM\ManyToMany(targetEntity="App\Entity\Concept", mappedBy="relatedConcepts")
     *
     *
     */
     private $myRelatedConcepts;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Concept", inversedBy="myRelatedConcepts")
     * @ORM\JoinTable(name="related_concept",
     *      joinColumns={@ORM\JoinColumn(name="concept_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="related_id", referencedColumnName="id")}
     *      )
     */
     private $relatedConcepts;

     /**
      * @ORM\ManyToMany(targetEntity="App\Entity\Concept")
      * @ORM\JoinTable(name="broader_concept",
      *     joinColumns={@ORM\JoinColumn(name="narrower_id", referencedColumnName="id")},
      *     inverseJoinColumns={@ORM\JoinColumn(name="broader_id", referencedColumnName="id")})
      */
     private $broaderConcepts;

     /**
      * @ORM\ManyToMany(targetEntity="App\Entity\Concept")
      * @ORM\JoinTable(name="broader_concept",
      *     joinColumns={@ORM\JoinColumn(name="broader_id", referencedColumnName="id")},
      *     inverseJoinColumns={@ORM\JoinColumn(name="narrower_id", referencedColumnName="id")})
      */
     private $narrowerConcepts;

     // not needed for narrower?
     // * @ORM\JoinTable(name="broader_concept",
     // *     joinColumns={@ORM\JoinColumn(name="narrower_id", referencedColumnName="id")},
     // *     inverseJoinColumns={@ORM\JoinColumn(name="broader_id", referencedColumnName="id")})

    public function __construct() {
        $this->conceptSources = new ArrayCollection();
        $this->terms = new ArrayCollection();
        $this->conceptProperties = new ArrayCollection();
        $this->concept_category = new ArrayCollection();
        $this->relatedConcepts = new ArrayCollection();
        $this->broaderConcepts = new ArrayCollection();
    }   // check to ensure defaults carry through

    public function getId() {
        return $this->id;
    }

    public function getDeprecated(): ?bool {
        return $this->deprecated;
    }

    public function setDeprecated(bool $deprecated): self {
        $this->deprecated = $deprecated;

        return $this;
    }

    /**
     * @return Collection|ConceptSource[]
     */
    public function getConceptSources(): Collection {
        return $this->conceptSources;
    }

    public function addConceptSource(ConceptSource $conceptSource): self {
        if (!$this->conceptSources->contains($conceptSource)) {
            $this->conceptSources[] = $conceptSource;
            $conceptSource->setConcept($this);
        }

        return $this;
    }

    public function removeConceptSource(ConceptSource $conceptSource): self {
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
    public function getTerms(): Collection {
        return $this->terms;
    }

    public function addTerm(Term $term): self {
        if (!$this->terms->contains($term)) {
            $this->terms[] = $term;
            $term->setConcept($this);
        }

        return $this;
    }

    public function removeTerm(Term $term): self {
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
    public function getConceptProperties(): Collection {
        return $this->conceptProperties;
    }

    public function addConceptProperty(ConceptProperties $conceptProperty): self {
        if (!$this->conceptProperties->contains($conceptProperty)) {
            $this->conceptProperties[] = $conceptProperty;
            $conceptProperty->setConcept($this);
        }

        return $this;
    }

    public function removeConceptProperty(ConceptProperties $conceptProperty): self {
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
    public function getConceptCategory(): Collection {
        return $this->concept_category;
    }

    public function addConceptCategory(Category $conceptCategory): self {
        if (!$this->concept_category->contains($conceptCategory)) {
            $this->concept_category[] = $conceptCategory;
        }

        return $this;
    }

    public function removeConceptCategory(Category $conceptCategory): self {
        if ($this->concept_category->contains($conceptCategory)) {
            $this->concept_category->removeElement($conceptCategory);
        }

        return $this;
    }

    public function toArray($includeRelated=false): array {
        $terms = [];
        foreach ($this->getTerms() as $term) {
            $terms[] = $term->toArray();
        }

        $array = [
            "id" => $this->getID(),
            "deprecated" => $this->getDeprecated(),
            "terms" => $terms,

        ];

        if ($includeRelated) {
            $relatedConcepts = [];
            $broaderConcepts = [];
            $narrowerConcepts = [];

            foreach ($this->getRelatedConcepts() as $relatedConcept) {
                $relatedConcepts[] = $relatedConcept->toArray();  // will probably want preferred term
            }
            foreach ($this->getBroaderConcepts() as $broaderConcept) {
                $broaderConcepts[] = $broaderConcept->toArray();
            }
            foreach ($this->getNarrowerConcepts() as $narrowerConcept) {
                $narrowerConcepts[] = $narrowerConcept->toArray();
            }


            $array["related_concepts"] = $relatedConcepts;
            $array["broader_concepts"] = $broaderConcepts;
            $array["narrower_concepts"] = $narrowerConcepts;
        }

        return $array;
    }

    /**
     * @return Collection|Concept[]
     */
    public function getRelatedConcepts(): Collection {
        return $this->relatedConcepts;
    }

    public function addRelatedConcept(Concept $relatedConcept): self {
        if (!$this->relatedConcepts->contains($relatedConcept)) {
            $this->relatedConcepts[] = $relatedConcept;
            $relatedConcept->addRelatedConcept($this);
        }

        return $this;
    }

    public function removeRelatedConcept(Concept $relatedConcept): self {
        if ($this->relatedConcepts->contains($relatedConcept)) {
            $this->relatedConcepts->removeElement($relatedConcept);
            $relatedConcept->removeRelatedConcept($this);
        }

        return $this;
    }

    /**
     * @return Collection|Concept[]
     */
     // TODO: Can we have multiple broader concepts? If yes, rename
    public function getBroaderConcepts(): Collection {
        return $this->broaderConcepts;
    }

    public function addBroaderConcept(Concept $broaderConcept): self {
        if (!$this->broaderConcepts->contains($broaderConcept)) {
            $this->broaderConcepts[] = $broaderConcept;
            // $broaderConcept->addNarrowerConcept($this);
        }

        return $this;
    }

    public function removeBroaderConcept(Concept $broaderConcept): self {
        if ($this->broaderConcepts->contains($broaderConcept)) {
            $this->broaderConcepts->removeElement($broaderConcept);
            $broaderConcept->removeBroaderConcept($this);
        }

        return $this;
    }

    public function getNarrowerConcepts(): Collection {
        return $this->narrowerConcepts;
    }

    public function addNarrowerConcept(Concept $narrowerConcept): self {
        if (!$this->narrowerConcepts->contains($narrowerConcept)) {
            $this->narrowerConcepts[] = $narrowerConcept;
            // $narrowerConcept->addBroaderConcept($this);
        }

        return $this;
    }

    public function removeNarrowerConcept(Concept $narrowerConcept): self {
        if ($this->narrowerConcepts->contains($narrowerConcept)) {
            $this->narrowerConcepts->removeElement($narrowerConcept);
            $narrowerConcept->removeBroaderConcept($this);
        }

        return $this;
    }


}
