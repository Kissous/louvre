<?php

namespace Louvre\BookingBundle\Controller;

use Louvre\BookingBundle\Entity\Billet;
use Louvre\BookingBundle\Form\Type\ForgetType;
use Louvre\BookingBundle\Form\Type\TicketType;
use Louvre\BookingBundle\Form\Type\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class BookingController extends Controller
{
    public function homeAction()
    {
        return $this->render('LouvreBookingBundle:Booking:home.html.twig');
    }

    public function forgetAction(Request $request)
    {
        $form = $this->createForm(ForgetType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->getData()["email"];
            $repository = $this->getDoctrine()->getRepository('LouvreBookingBundle:Billet');
            $billet = $repository->findByEmail($email);
            dump($form);
        }
        return $this->render('LouvreBookingBundle:Booking:forget.html.twig', [
                'form' => $form -> createView()
            ]
        );
    }

    public function ticketAction(Request $request)
    {
        $form = $this->createForm(TicketType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump($form);
        }
        return $this->render('LouvreBookingBundle:Booking:ticket.html.twig', [
                'form' => $form -> createView(),
            ]
        );
    }

    public function userAction(Request $request)
    {
        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            dump($form);
        }
        return $this->render('LouvreBookingBundle:Booking:user.html.twig', [
                'form' => $form -> createView()
            ]
        );
    }
}
