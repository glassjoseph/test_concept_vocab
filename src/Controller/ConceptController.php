<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


// use Symfony\Bundle\FrameworkBundle\Controller\Controller; ?

use App\Form\ConceptType;
use App\Entity\Concept;
use App\Entity\Category;
use App\Entity\Term;

class ConceptController extends AbstractController
{
    /**
     * @Route("/concepts", name="concepts")
     */
    public function index()
    {

        $repository = $this->getDoctrine()->getRepository(Concept::class);

        $entityManager = $this->getDoctrine()->getManager();
        $concepts = $repository->findAll();

        $conceptArray =  [];
        foreach ($concepts as $concept) {
            $conceptArray[] = $concept->toArray();
        }

        // $concept = new Concept();
        // $concept->setDeprecated(false);


        return $this->json([
            'message' => 'Welcome to the concept API!',
            'path' => 'src/Controller/ConceptController.php',
            'concepts' => $conceptArray,
            // 'deprecated' => $concept->getDeprecated(),
            // 'categories' => $concept->getConceptCategory(),
            // 'properties' => $concept->getConceptProperties()

        ]);
    }


    /**
     * @Route("/concepts/new", methods={"GET"}, name="new_concept")
     */


     // * @Route("/concepts/new/{term_text}.{age}.{gender}", defaults={"term_text"="Americans", "preferred"=0}, methods={"GET"}, name="new_concept")
    public function new(Request $request)

    {
        $repository = $this->getDoctrine()->getRepository(Concept::class);

        $entityManager = $this->getDoctrine()->getManager();

        require('/Users/josephglass/.composer/vendor/autoload.php');
        \Psy\Shell::debug(get_defined_vars(), $this);



        $termText = $request->query->get('term_text');
        $preferred = (bool) $request->query->get('preferred');
        $languageID = $request->query->get('language_id');
        $conceptID = $request->query->get('concept_id');


        // if there is a concept, find it, otherwise make it.
        // if ($repository )
        if ($conceptID) {
            $concept = $repository->find($conceptID);
        } else {
            $concept = new Concept();
        }

        $term = new Term();
        $term->setTermText($termText);
        $term->setPreferred($preferred);

        $concept->addTerm($term);
        $entityManager->persist($concept);
        $entityManager->persist($term);

        $entityManager->flush();

        return $this->redirectToRoute("concepts");

        //
        // // $form = $this->createForm(ConceptType::class, $concept);
        //
        // // handle submit (on POST only)
        // $form->handleRequest($request);
        // if ($form->isSubmitted() && $form->isValid()) {
        //     $entityManager = $this->getDoctrine()->getManager();
        //     $entityManager->persist($concept);
        //     $entityManager->flush();
        //
        //     return $this->redirectToRoute("concepts");
        // }
        //
        //
        //
        //
        // // $formFactory = Forms::createFormFactory();
        //
        // return $this->render(
        //     'concept_form.html.twig',
        //     array('form' => $form->createView())
        // );
        //
        // return $this->json([
        //     'message' => 'Welcome to the concept API!',
        //     'path' => 'src/Controller/ConceptController.php',
        // ]);
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




}
