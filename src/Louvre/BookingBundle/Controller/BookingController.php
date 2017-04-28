<?php

namespace Louvre\BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class BookingController extends Controller
{
    public function homeAction()
    {
        return $this->render('LouvreBookingBundle:Booking:home.html.twig');
    }
    public function forgetAction(){
        return $this->render('LouvreBookingBundle:Booking:forget.html.twig');
    }
    public function ticketAction(){
        return $this->render('LouvreBookingBundle:Booking:ticket.html.twig');
    }
    public function userAction(){
        return $this->render('LouvreBookingBundle:Booking:user.html.twig');
    }

}
