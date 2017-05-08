<?php
/**
 * Created by PhpStorm.
 * User: hubert
 * Date: 08.05.17
 * Time: 15:57
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RecipeController extends Controller
{
    /**
     * @Route("/recipes")
     */
    public function showAction()
    {
        $recipes=['Jajecznica','Spaghetti','Pizza'];
        // zrobic w folderze var/catch - mark directory as Exluded
        /* Można przekazać też tak:
        $templating=$this->container->get('templating');
        $html=$templating->render('recipes/show.html.twig');
        return new Response($html);
        */
        return $this->render('recipes/show.html.twig',['recipes'=>$recipes]);
    }
}