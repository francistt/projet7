<?php

namespace App\Controller;

use App\Repository\AdRepository;
use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController {


    /**
     * @Route("/", name="homepage")
     */
    public function home(AdRepository $adRepo, UserRepository $userRepo){

        return $this->render(
            'home.html.twig',
            [
                'ads' => $adRepo->findLastAds(3)
            ]
        );
    }

    /**
     * @Route("/hosting", name="hosting")
     *
     * @return void
     */
    public function hosting()
    {
        return $this->render(
            'hosting.html.twig'
        );
    }

    /**
     * @Route("/us", name="us")
     *
     * @return void
     */
    public function us()
    {
        return $this->render(
            'us.html.twig'
        );
    }
}

?>