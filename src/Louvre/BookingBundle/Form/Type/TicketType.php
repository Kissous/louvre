<?php

namespace Louvre\BookingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
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
                    'Journée' => 'journee',
                    'Demi-journée' => 'demi_journee',
                ),
            ))
            ->add('guests', CollectionType::class, array(
                'entry_type'   => UserType::class,
                'allow_add'    => true,
                'allow_delete' => true,
            ))
            ->add('date_visite', TextType::class, ['required' => true])
            ->add('valider', SubmitType::class)
            ->getForm()
        ;
    }
}