<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// check
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;


// use Symfony\Bundle\FrameworkBundle\Controller\Controller; ?

use App\Form\ConceptType;
use App\Entity\Concept;
use App\Entity\Category;
use App\Entity\Term;
use App\Entity\ConceptSource;

use App\Repository\ConceptRepository;
use App\Repository\CategoryRepository;
use App\Repository\TermRepository;
use App\Repository\ConceptSourceRepository;

class ConceptController extends AbstractController {
    /**
     * @Route("/concepts", name="concepts")
     */
    public function index(ConceptRepository $concepts) {
        // $repository = $this->getDoctrine()->getRepository(Concept::class);
        $conceptArray =  [];
        foreach ($concepts->findAll() as $concept) {
            $term = $concept->getTerms()[0];
            $conceptArray[] = ['id' => $concept->getID(), 'term' => $term ? $term->getTermText() : null];
        }

        return $this->json([
            'message' => 'Welcome to the concept API!',
            'path' => 'src/Controller/ConceptController.php',
            'concepts' => $conceptArray,
        ]);
    }

    /**
     * @Route("/concepts_details", name="concepts_details")
     */
    public function index_details(ConceptRepository $concepts) {
        $conceptArray =  [];
        foreach ($concepts->findAll() as $concept) {
            $conceptArray[] = $concept->toArray();
        }

        return $this->json([
            'message' => 'Welcome to the concept API!',
            'path' => 'src/Controller/ConceptController.php',
            'concepts' => $conceptArray,
        ]);
    }



    /**
     * @Route("/concepts/new", methods={"GET"}, name="new_concept")
     */
    // * @Route("/concepts/new/{term_text}.{age}.{gender}", defaults={"term_text"="Americans", "preferred"=0}, methods={"GET"}, name="new_concept")
    public function new(Request $request) {
        $repository = $this->getDoctrine()->getRepository(Concept::class);

        $entityManager = $this->getDoctrine()->getManager();

        require('/Users/josephglass/.composer/vendor/autoload.php');
        \Psy\Shell::debug(get_defined_vars(), $this);



        $conceptID = $request->query->get('concept_id');
        $termText = $request->query->get('term_text');
        $preferred = $request->query->get('preferred') === 'true';
        $languageID = $request->query->get('language_id');


        // if there is a concept, find it, otherwise make it.
        if ($conceptID)
            $concept = $repository->find($conceptID);

        $concept = $concept ?? new Concept();

        // TODO: find or create new term
        $term = new Term();
        $term->setTermText($termText);
        $term->setPreferred($preferred);

        $concept->addTerm($term);
        $entityManager->persist($concept);
        $entityManager->persist($term);

        $entityManager->flush();

        return $this->redirectToRoute("concepts");
    }


    /**
     * @Route("/concepts/create", name="create_concept")
     */
    public function create() {
        $em = $this->getDoctrine()->getManager();
        $concepts = $this->getDoctrine()->getRepository(Concept::class);
        $conceptSources = $this->getDoctrine()->getRepository(ConceptSource::class);
        $categories = $this->getDoctrine()->getRepository(Category::class);
        $terms = $this->getDoctrine()->getRepository(Term::class);


        return $this->json([
            'message' => 'Welcome to the concept creation API!',
            'path' => 'src/Controller/ConceptController.php',
        ]);
    }

    /**
     * @Route("/concepts/{id}/delete", name="delete_concept")
     */
    // public function delete(Request $request, Concept $concept) {
    public function delete(Request $request, int $id) {

        $repository = $this->getDoctrine()->getRepository(Concept::class);
        $concept = $repository->find($id);

        if (!$concept)
            throw $this->createNotFoundException("The concept does not exist"); // if we change this to find concept by type hinting, how do we control 404 error?

        $em = $this->getDoctrine()->getManager();
        foreach ($concept->getTerms() as $term) {
            $em->remove($term);
        }
        $em->remove($concept);

        $em->flush();


        return $this->redirectToRoute('concepts');
    }

    /**
     * @Route("/concepts/{id}/edit", name="edit_concept")
     */
    public function edit(Request $request, Concept $concept) {

        $repository = $this->getDoctrine()->getRepository(Concept::class);

        // $conceptID = $request->query->get('concept_id');

        $termText = $request->query->get('term_text');
        $preferred = $request->query->get('preferred');
        $languageID = $request->query->get('language_id');


        // TODO: find or create new term
        $term = new Term();
        $term->setTermText($termText);
        $term->setPreferred($preferred);

        $concept->addTerm($term);
        $entityManager->persist($concept);
        $entityManager->persist($term);

        $entityManager->flush();

        return $this->redirectToRoute("concepts/{$id}");

    }

    /**
     * @Route("/concepts/{id}/add_related", methods={"GET"}, name="add_related")
     */
    public function addRelated(Request $request, Concept $concept) {
        $repository = $this->getDoctrine()->getRepository(Concept::class);
        $entityManager = $this->getDoctrine()->getManager();


        // $conceptID = $request->query->get('concept_id');
        $relatedID = $request->query->get('related_id');


        $relatedConcept = $repository->find($relatedID);

        require('/Users/josephglass/.composer/vendor/autoload.php');
        \Psy\Shell::debug(get_defined_vars(), $this);

        $concept->addRelatedConcept($relatedConcept);
        // $entityManager->persist($concept);
        // $entityManager->persist($relatedConcept);
        // // Check: Are both necessary? Or only have to persist one?
        // $entityManager->flush();

        return $this->json([
            'message' => 'Welcome to the concept API!',
            'path' => 'src/Controller/ConceptController.php',
            'concept' => $concept->toArray()
        ]);


        // $termText = $request->query->get('term_text');
        // $preferred = (bool) $request->query->get('preferred');
        // $languageID = $request->query->get('language_id');
        // $conceptID = $request->query->get('concept_id');
        //
        //
        // // if there is a concept, find it, otherwise make it.
        // if ($conceptID)
        //     $concept = $repository->find($conceptID);
        //
        // $concept = $concept ?? new Concept();
        //
        // $term = new Term();
        // $term->setTermText($termText);
        // $term->setPreferred($preferred);
        //
        // $concept->addTerm($term);
        // $entityManager->persist($concept);
        // $entityManager->persist($term);
        //
        // $entityManager->flush();
        //
        // return $this->redirectToRoute("concepts");
        //
        // //
        // // return $this->json([
        // //     'message' => 'Welcome to the concept API!',
        // //     'path' => 'src/Controller/ConceptController.php',
        // // ]);
    }

    /**
     * @Route("/concepts/{id}/add_broader", methods={"GET"}, name="add_broader")
     */
    public function addBroader(Request $request, Concept $concept) {
        $repository = $this->getDoctrine()->getRepository(Concept::class);
        $entityManager = $this->getDoctrine()->getManager();

        $broaderID = $request->query->get('broader_id');

        $broaderConcept = $repository->find($broaderID);

        $concept->addBroaderConcept($broaderConcept);

        $entityManager->flush();

        $broaders = [];

        foreach ($concept->getBroaderConcepts() as $bconcept) {
            $broaders[] = $bconcept->toArray();
        }
        return $this->json([
            'message' => 'Welcome to addBroader!',
            'path' => 'src/Controller/ConceptController.php',
            'concept' => $concept->toArray(),
            'broaders' => $broaders
        ]);

    }

    /**
    * @Route("/concepts/{id}", name="concept")
    */
    public function show(Concept $concept) {
        $repository = $this->getDoctrine()->getRepository(Concept::class);
        $entityManager = $this->getDoctrine()->getManager();

        require('/Users/josephglass/.composer/vendor/autoload.php');
        \Psy\Shell::debug(get_defined_vars(), $this);

        // $terms = [];
        // foreach ($concept->getTerms() as $term) {
        //     $terms[] = $term->toArray();
        // }

        // $relatedConcepts = [];
        // foreach ($concept->getRelatedConcepts() as $relatedConcept) {
        //     $relatedConcepts[] = [$relatedConcept->getTerms()->first()->getID() => $relatedConcept->getTerms()->first()->getTermText()];  // will probably want preferred term
        // }

        return $this->json([
            'message' => 'Welcome to the concept API!',
            'path' => 'src/Controller/ConceptController.php',
            'concept' => $concept->toArray(true),
            // 'relatedConcepts' => $relatedConcepts
        ]);
    }



}
