<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use AppBundle\Entity\Review;

/**
 * Review controller.
 *
 * @Route("review")
 */
class ReviewController extends Controller
{
    /**
     * List all review entities
     *
     * @Route("/", name="review_index")
     * @Method("GET")
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reviews = $em->getRepository("AppBundle:Review")->findAll();

        return $this->render("review/index.html.twig", array(
            'reviews'=>$reviews
        ));
    }

    /**
     * Create a new review entity
     *
     * @Route("/new", name="review_new")
     * @Method({"GET", "POST"})
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reviews = $em->getRepository("AppBundle:Review")->findAll();

        return $this->render("review/new.html.twig", array(
            'reviews'=>$reviews
        ));
    }
}
