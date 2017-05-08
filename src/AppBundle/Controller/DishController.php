<?php
/**
 * Created by PhpStorm.
 * User: hubert
 * Date: 08.05.17
 * Time: 18:55
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class DishController extends Controller
{
    /**
     * @Route("recipes/scrambledeggs")
     */
    public function DishAction()
    {
        $ingredients=['3 jajka','200g boczku','szczypiorek','sól','pieprz'];
        return $this->render('recipes/scrambledeggs.html.twig',['ingredients'=>$ingredients]);
    }
}