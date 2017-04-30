<?php

namespace Louvre\BookingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class TicketType extends AbstractType
{
    public function BuildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('qnt', NumberType::class, ['required' => true])
            ->add('email', EmailType::class, ['required' => true])
            ->add('type_billet', ChoiceType::class, array(
                'choices'  => array(
                    'Choisir un billet' => null,
                        'Demi-journée' => 'demi_journee',
                        'Journée' => 'journee',
                ),
            ))
            ->add('date_visite', TextType::class, ['required' => true])
            ->add('valider', SubmitType::class)
            ->getForm()
        ;
    }
}