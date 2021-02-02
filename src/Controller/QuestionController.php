<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment) {
        return $this->render('question/homepage.html.twig');

        /*
        //Using the twig service directly
        $html = $twigEnvironment->render('question/homepage.html.twig');

        return new Response($html);
        */
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public function show($slug) {

        $answers = [
            'Dexter is hungry',
            'Dexter is sleeping',
            'Dexter is meowing',
        ];

        dump($this);
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
        ]);


    }
}