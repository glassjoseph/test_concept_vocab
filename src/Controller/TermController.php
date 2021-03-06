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

class TermController extends AbstractController {
    /**
     * @Route("/terms", name="terms")
     */
    public function index(TermRepository $terms) {
        $termArray =  [];
        foreach ($terms->findAll() as $term) {
            $termArray[] = $term->toArray();
        }


        return $this->json([
            'path' => 'src/Controller/TermController.php',
            'terms' => $termArray,
        ]);

    }

    /**
     * @Route("/terms_details", name="terms_details")
     */
    public function index_details(TermRepository $terms) {
        $termArray =  [];
        foreach ($terms->findAll() as $term) {
            $termArray[] = $term->toArray();
        }

        return $this->json([
            'path' => 'src/Controller/TermController.php',
            'terms' => $termArray,
        ]);
    }



    /**
     * @Route("/terms/new", methods={"GET"}, name="new_term")
     */
    public function new(Request $request) {
        $repository = $this->getDoctrine()->getRepository(Term::class);

        $entityManager = $this->getDoctrine()->getManager();

        require('/Users/josephglass/.composer/vendor/autoload.php');
        \Psy\Shell::debug(get_defined_vars(), $this);



        $termID = $request->query->get('concept_id');
        $value = $request->query->get('value');
        $preferred = $request->query->get('preferred') === 'true';
        $languageID = $request->query->get('language_id');


        // TODO: find or create new term
        $term = new Term();
        $term->setValue($value);
        $term->setPreferred($preferred);

        $term->addTerm($term);
        $entityManager->persist($term);
        $entityManager->persist($term);

        $entityManager->flush();

        return $this->redirectToRoute("terms");
    }


    /**
     * @Route("/terms/create", name="create_term")
     */
    public function create() {
        require('/Users/josephglass/.composer/vendor/autoload.php');
        \Psy\Shell::debug(get_defined_vars(), $this);
        $entityManager = $this->getDoctrine()->getManager();



        return $this->json([
            'path' => 'src/Controller/TermController.php',
        ]);
    }

    /**
     * @Route("/terms/{id}/delete", name="delete_term")
     */
    public function delete(Term $term) {
        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($term);
        $em->flush();
    }

    /**
     * @Route("/terms/{id}/edit", name="edit_term")
     */
    public function edit(Request $request,Term $term) {

        $repository = $this->getDoctrine()->getRepository(Term::class);

        // $termID = $request->query->get('concept_id');

        $value = $request->query->get('value');
        $preferred = $request->query->get('preferred');
        $languageID = $request->query->get('language_id');


        // TODO: find or create new term
        $term = new Term();
        $term->setValue($value);
        $term->setPreferred($preferred);
        $term->addTerm($term);
        $entityManager->persist($term);
        $entityManager->persist($term);

        $entityManager->flush();

        return $this->redirectToRoute("term");
    }


    /**
    * @Route("/terms/search", name="term_search")
    */
    public function search(Request $request, TermRepository $terms) {
        $q = $request->query->get('q');
        // require('/Users/josephglass/.composer/vendor/autoload.php');
        // \Psy\Shell::debug(get_defined_vars(), $this);

        $termArray = [];
        foreach ($terms->findByText($q) as $term) {
            $termArray[] = $term->toArray();
        }

        return $this->json([
            'path' => 'src/Controller/TermController.php',
            // 'term' => $term->toArray(true),
            'terms' => $termArray
        ]);
    }

    /**
    * @Route("/terms/{id}", name="term")
    */
    public function show(Term $term) {

        return $this->json([
            'path' => 'src/Controller/TermController.php',
            'term' => $term->toArray(true),
        ]);
    }

}
