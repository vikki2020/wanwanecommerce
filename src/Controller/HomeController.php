<?php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/",name="home")
     */
    public function index()
    {
        $products = $this->entityManager->getRepository(Product::class)->findByIsBest(1);
        return $this->render('home/index.html.twig', [
            'products' => $products
        ]);
    }
}
