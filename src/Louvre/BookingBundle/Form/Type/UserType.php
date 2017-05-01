<?php

namespace Louvre\BookingBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    public function BuildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, ['required' => true])
            ->add('prenom', TextType::class, ['required' => true])
            ->add('date_nais', TextType::class, ['required' => true])
            ->add('pays', ChoiceType::class, array(
                'choices'  => array(
                    'Choisir un pays' => null,
                    'Afghanistan' => 'Afghanistan',
                    'Afrique du Sud' => 'Afrique du Sud',
                    'Albanie' => 'Albanie',
                    'Algérie' => 'Algérie',
                    'Allemagne' => 'Allemagne',
                    'Andorre' => 'Andorre',
                    'Angola' => 'Angola',
                    'Anguilla' => 'Anguilla',
                    'Antigua-et-Barbuda' => 'Antigua-et-Barbuda',
                    'Antilles Néerlandaises' => 'Antilles Néerlandaises',
                    'Arabie Saoudite' => 'Arabie Saoudite',
                    'Argentine' => 'Argentine',
                    'Arménie' => 'Arménie',
                    'Aruba' => 'Aruba',
                    'Australie' => 'Australie',
                    'Autriche' => 'Autriche',
                    'Azerbaïdjan' => 'Azerbaïdjan',
                    'Bahamas' => 'Bahamas',
                    'Bahreïn' => 'Bahreïn',
                    'Bangladesh' => 'Bangladesh',
                    'Barbade' => 'Barbade',
                    'Belgique' => 'Belgique',
                    'Belize' => 'Belize',
                    'Bénin' => 'Bénin',
                    'Bermudes' => 'Bermudes',
                    'Bhoutan' => 'Bhoutan',
                    'Biélorussie' => 'Biélorussie',
                    'Birmanie (Myanmar)' => 'Birmanie (Myanmar)',
                    'Bolivie' => 'Bolivie',
                    'Bosnie-Herzégovine' => 'Bosnie-Herzégovine',
                    'Botswana' => 'Botswana',
                    'Brésil' => 'Brésil',
                    'Brunei' => 'Brunei',
                    'Bulgarie' => 'Bulgarie',
                    'Burkina Faso' => 'Burkina Faso',
                    'Burundi' => 'Burundi',
                    'Cambodge' => 'Cambodge',
                    'Cameroun' => 'Cameroun',
                    'Canada' => 'Canada',
                    'Cap-vert' => 'Cap-vert',
                    'Chili' => 'Chili',
                )
            ))
            ->add('tarif_reduit', CheckboxType::class, ['required' => true])
            ->getForm()
        ;
    }
}