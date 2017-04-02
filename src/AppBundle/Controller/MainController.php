<?php
/**
 * Created by PhpStorm.
 * User: Speedy
 * Date: 01.04.2017
 * Time: 00:26
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction(){
        return $this->render('main/homepage.html.twig');
    }
}