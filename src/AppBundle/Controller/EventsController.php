<?php
namespace AppBundle\Controller;
// We include the entity that we create in our Controller file
use AppBundle\Entity\Events;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route1;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

// Now we need some classes in our Controller because we need that in our form (for the inputs that we will create)
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class EventsController extends Controller
{

// ROUTES TO PAGES

	// to main page and get all the events entries to use
	

  /**
      * @Route("/events", name="events_list")
      */
     public function listAction(){
         $events = $this->getDoctrine()->getRepository('AppBundle:Events')->findById(array(1,2,3));

  
         // replace this example code with whatever you need
         return $this->render('events/index.html.twig', array('events'=>$events));
     }


   // to create entry

   /**
    * @Route("/events/create", name="events_create")
    */
   public function createAction(Request $request)
   {

      $event = new Events;


       $form = $this->createFormBuilder($event)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
       ->add('startDate', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
       ->add('image', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
      ->add('capacity', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
      ->add('contactEmail', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('contactPhoneNumber', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('streetName', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('streetNumber', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('zip', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('city', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('url', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('type', DateTimeType::class, array('attr' => array('style'=>'margin-bottom:15px')))
   ->add('save', SubmitType::class, array('label'=> 'Update Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-botton:15px')))
       ->getForm();
       $form->handleRequest($request);


       if($form->isSubmitted() && $form->isValid()){
   //         //fetching data
           $name = $form['name']->getData();
           $startDate = $form['startDate']->getData();
           $description = $form['description']->getData();
           $image = $form['image']->getData();
           $capacity = $form['capacity']->getData();
           $contactEmail = $form['contactEmail']->getData();
           $contactPhoneNumber = $form['contactPhoneNumber']->getData();
           $streetName = $form['streetName']->getData();
           $streetNumber = $form['streetNumber']->getData();
           $zip = $form['zip']->getData();
           $city = $form['city']->getData();
           $url = $form['url']->getData();
           $type = $form['type']->getData();

           $event->setName($name);
           $event->setStartDate($startDate);
           $event->setDescription($description);
           $event->setImage($image);
           $event->setCapacity($capacity);
           $event->setContactEmail($contactEmail);
           $event->setContactPhoneNumber($contactPhoneNumber);
           $event->setStreetName($streetName);
           $event->setStreetNumber($streetNumber);
           $event->setZip($streetNumber);
           $event->setCity($zip);
           $event->setUrl($city);
           $event->setType($type); 

           $entityManager = $this->getDoctrine()->getManager();
           $entityManager->persist($event);
           $entityManager->flush();

            $this->addFlash(
                   'notice',
                   'Events Added'
                   );
           return $this->redirectToRoute('events_list');
           } /*end of form valid and submitted*/

            return $this->render('events/create.html.twig', array('form' => $form->createView()));

   } /* End of the create function */ 


   // _________________________________________________________________________

   // to look at events details

    /**
    * @Route("/events/details/{id}", name="events_details")
    */
   public function detailsAction($id)
   {
      $event = $this->getDoctrine()->getManager()->getRepository('AppBundle:Events')->find($id);

       return $this->render('events/details.html.twig',array('event' => $event));
   }


	/**
    * @Route("/events/edit/{id}", name="events_edit")
    */
   public function editAction( $id, Request $request){

   $event = $this->getDoctrine()->getRepository('AppBundle:Events')->find($id);



           
           $event->setName($event->getName());
           $event->setStartDate($event->getStartDate());
           $event->setDescription($event->getDescription());
           $event->setImage($event->getImage());
           $event->setCapacity($event->getCapacity());
           $event->setContactEmail($event->getContactEmail());
           $event->setContactPhoneNumber($event->getContactPhoneNumber());
           $event->setStreetName($event->getStreetName());
           $event->setStreetNumber($event->getStreetNumber());
           $event->setZip($event->getZip());
           $event->setCity($event->getCity());
           $event->setUrl($event->getUrl());
           $event->setType($event->getType());
         



       $form = $this->createFormBuilder($event)->add('name', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
       ->add('startDate', TextType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-bottom:15px')))
       ->add('description', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
       ->add('image', TextareaType::class, array('attr' => array('class'=> 'form-control', 'style'=>'margin-botton:15px')))
      ->add('capacity', TextareaType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('contactEmail', TextareaType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('contactPhoneNumber', TextareaType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('streetName', TextareaType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('streetNumber', TextareaType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('zip', TextareaType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('city', TextareaType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('url', TextareaType::class, array('attr' => array('style'=>'margin-bottom:15px')))
      ->add('type', TextareaType::class, array('attr' => array('style'=>'margin-bottom:15px')))
   ->add('save', SubmitType::class, array('label'=> 'Update Event', 'attr' => array('class'=> 'btn-primary', 'style'=>'margin-botton:15px')))
       ->getForm();
       $form->handleRequest($request);

       if($form->isSubmitted() && $form->isValid()){
   //         //fetching data
           $name = $form['name']->getData();
           $startDate = $form['startDate']->getData();
           $description = $form['description']->getData();
           $image = $form['image']->getData();
           $capacity = $form['capacity']->getData();
           $contactEmail = $form['contactEmail']->getData();
           $contactPhoneNumber = $form['contactPhoneNumber']->getData();
           $streetName = $form['streetName']->getData();
           $streetNumber = $form['streetNumber']->getData();
           $zip = $form['zip']->getData();
           $city = $form['city']->getData();
           $url = $form['url']->getData();
           $type = $form['type']->getData();

           $event->setName($name);
           $event->setStartDate($startDate);
           $event->setDescription($description);
           $event->setImage($image);
           $event->setCapacity($capacity);
           $event->setContactEmail($contactEmail);
           $event->setContactPhoneNumber($contactPhoneNumber);
           $event->setStreetName($streetName);
           $event->setStreetNumber($streetNumber);
           $event->setZip($streetNumber);
           $event->setCity($zip);
           $event->setUrl($city);
           $event->setType($type); 

           $entityManager = $this->getDoctrine()->getManager();
           $entityManager->persist($event);
           $entityManager->flush();

            $this->addFlash(
                   'notice',
                   'Events Added'
                   );


           return $this->redirectToRoute('events_list');
           }

          return $this->render('events/edit.html.twig', array('form' => $form->createView()));

        }/*end of edit action */



         /**
    * @Route("/events/delete/{id}", name="todo_delete")
    */
   public function deleteAction($id){
                $em = $this->getDoctrine()->getManager();
           $event = $em->getRepository('AppBundle:Events')->find($id);
           $em->remove($event);
            $em->flush();
           $this->addFlash(
                   'notice',
                   'Event Removed'
                   );
            return $this->redirectToRoute('events_list');
   }






} /* end of the whole controller function */