<?php

namespace EXO\LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PinkController extends Controller
{
    public function deathsmilesAction()
    {
        return $this->render('LeaderboardBundle:deathsmiles.html.twig');
    }

    public function mushihimesamaAction()
    {
        return $this->render('LeaderboardBundle:mushihimesama.html.twig');
    }
}
