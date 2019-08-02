<?php
namespace AppBundle\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class EventsController extends Controller
{

// ROUTES TO PAGES

	// to main page
	
   /**
    * @Route("/events", name="events_list")
    */
   public function listAction(Request $request)
   {
       return $this->render('events/index.html.twig');
   }

   // to create entry

   /**
    * @Route("/events/create", name="events_create")
    */
   public function createAction(Request $request)
   {
       return $this->render('events/create.html.twig');
   }

   // to look at events details

    /**
    * @Route("/events/details/{id}", name="events_details")
    */
   public function detailsAction($id)
   {
       return $this->render('events/details.html.twig');
   }


	// to look at edit details   
  
           /**
    * @Route("/events/edit/{id}", name="events_edit")
    */
   public function editAction($id, Request $request)
   {
       return $this->render('events/edit.html.twig');
   }



} /* end of the whole controller function */