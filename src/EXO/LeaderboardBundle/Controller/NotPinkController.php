<?php

namespace EXO\LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Response;

class NotPinkController extends Controller
{
    public function crimzonCloverAction($vaisseau)
    {
        if ($vaisseau == 'type1') {
            $src = "https://www.youtube.com/embed/bmTHw9vL3Vs";
        } else if ($vaisseau == 'type3') {
            $src = "https://www.youtube.com/embed/foDTJceKio8";
        } else {
            $src = "https://www.youtube.com/embed/dFgb1vrF-F8";
        }
        return $this->render('LeaderboardBundle:crimzonClover.html.twig',
            array('vaisseau' => $vaisseau,
                'src' => $src)
        );
    }

    public function ikarugaAction($backgroundColor)
    {
        if ($backgroundColor == 'black') {
            $textColor = 'white';
        } else {
            $backgroundColor = "white";
            $textColor = 'black';
        }
        return $this->render(
            'LeaderboardBundle:ikaruga.html.twig',
            array('backgroundColor' => $backgroundColor,
                'textColor' => $textColor)
        );
    }
}
