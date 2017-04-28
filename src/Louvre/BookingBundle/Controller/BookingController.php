<?php

namespace Louvre\BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BookingController extends Controller
{
    public function homeAction()
    {
        return $this->render('LouvreBookingBundle:Booking:home.html.twig');
    }
}
