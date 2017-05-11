<?php

namespace Louvre\BookingBundle\Controller;

use Louvre\BookingBundle\Form\Type\ForgetType;
use Louvre\BookingBundle\Form\Type\TicketType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
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
            $validator = $this->get('validator');
            $listErrors = $validator->validate($form);
            $session = $request->getSession();
            if(count($listErrors) > 0) {
                $session->getFlashBag()->add('info', $listErrors);
            } else {
                //return $this->redirectToRoute('louvre_booking_checkout');
                $data = $form->getData();
                dump($data);
                return $this->render('LouvreBookingBundle:Booking:checkout.html.twig', array(
                    'guests'  => $data['guests'],
                    'data' => $data,
                ));
            }
        }else{
            return $this->render('LouvreBookingBundle:Booking:ticket.html.twig', [
                    'form' => $form -> createView(),
                ]
            );
        }
    }

    public function checkoutAction()
    {
        return $this->render('LouvreBookingBundle:Booking:checkout.html.twig', array(

        ));
    }
}
