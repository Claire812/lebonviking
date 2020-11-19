<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $products = [
            1 => [
                'name' => 'thermomix',
                'img' => '/assets/images/thermomix.jpg',
                'price' => 'Price: 4cows, 5 rabbit, 1 sword',
                'description' => 'Robot for cooking stolen in Palestine 5 days ago perfect condition, just used to make a good big fish.',
            ],
            2 => [
                'name' => 'Induction hob',
                'img' => '/assets/images/plaque.jpg',
                'price' => 'Price: your wife',
                'description' => 'A table to replace the fire and cook food without the need to start a fire.'
            ],
            3 => [
                'name' => 'Matches',
                'img' => '/assets/images/allumettes.jpg',
                'price' => 'Price: 6 mouses',
                'description' => 'If you have the knack in one go start your fire. There are only 10 shots left.'
            ],

        ];

        return $this->twig->render('Home/index.html.twig');
    }
}
