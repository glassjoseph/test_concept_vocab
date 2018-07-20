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

use App\Repository\ConceptRepository;
use App\Repository\CategoryRepository;
use App\Repository\TermRepository;

class ConceptController extends AbstractController
{
    /**
     * @Route("/concepts", name="concepts")
     */
    public function index(ConceptRepository $concepts)
    {
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
    public function index_details(ConceptRepository $concepts)
    {
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
    // public function new(Request $request, Concept $concept)  Try with Concept $concept, and services.yml?
    public function new(Request $request) {
        $repository = $this->getDoctrine()->getRepository(Concept::class);

        $entityManager = $this->getDoctrine()->getManager();

        // require('/Users/josephglass/.composer/vendor/autoload.php');
        // \Psy\Shell::debug(get_defined_vars(), $this);



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
    public function create()
    {
        require('/Users/josephglass/.composer/vendor/autoload.php');
        \Psy\Shell::debug(get_defined_vars(), $this);
        $entityManager = $this->getDoctrine()->getManager();



        return $this->json([
            'message' => 'Welcome to the concept API!',
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
            throw $this->createNotFoundException("The concept does not exist");

        $em = $this->getDoctrine()->getManager();
        $em->remove($concept);
        $em->flush();


        return $this->redirectToRoute('concepts');
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




        //dg2015060859
        //"preferred": "Blacks"



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
    * @Route("/concepts/{id}", name="concept")
    */
    public function show(Concept $concept) {
        $repository = $this->getDoctrine()->getRepository(Concept::class);
        $entityManager = $this->getDoctrine()->getManager();

        // require('/Users/josephglass/.composer/vendor/autoload.php');
        // \Psy\Shell::debug(get_defined_vars(), $this);
        //
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
