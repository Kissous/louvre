<?php

namespace Louvre\BookingBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class ForgetType extends AbstractType
{
    public function BuildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('envoyer', SubmitType::class)
            ->getForm()
        ;
    }
}