<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Category;

class CategoryController extends Controller
{
    /**
     * @Route("/categories", name="category")
     */
    public function index()
    {
        $categories = $this->getDoctrine()->getRepository(Category::class)->findAll();

        $categoryArray = [];

        foreach ($categories as $category) {
            $categoryArray[] = $category->toArray();
        }

        // require('/Users/josephglass/.composer/vendor/autoload.php');
        // \Psy\Shell::debug(get_defined_vars(), $this);


        return $this->json([
            'message' => 'Welcome to your category index!',
            'path' => 'src/Controller/CategoryController.php',
            'categories' => $categoryArray

        ]);


    }


    /**
     * @Route("/category/new", name="category_new")
     */
    public function new()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $category = new Category();
        $category->setValue("ethnicity");
        $category->setDescription("An ethnicity");
        $entityManager->persist($category);

        $category2 = new Category();
        $category2->setValue("religion");
        $category2->setDescription("A religion");
        $entityManager->persist($category2);

        $category3 = new Category();
        $category3->setValue("nationality");
        $category3->setDescription("A nationality");
        $entityManager->persist($category3);

        $category4 = new Category();
        $category4->setValue("occupation");
        $category4->setDescription("A occupation");
        $entityManager->persist($category4);

        $category5 = new Category();
        $category5->setValue("not a category");
        $category5->setDescription("not a category");

        $entityManager->flush();

        return $this->json([
            'message' => 'Welcome to your category create!',
            'path' => 'src/Controller/CategoryController.php',
            'value1' => $category->getValue(),
            'description1' => $category->getDescription(),
            'value2' => $category2->getValue(),
            'description2' => $category2->getDescription()
        ]);
    }
}
