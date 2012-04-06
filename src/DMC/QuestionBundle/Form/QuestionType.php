<?php

namespace DMC\QuestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('libelle_masculin')
            ->add('libelle_feminin')
        ;
    }

    public function getName()
    {
        return 'dmc_questionbundle_questiontype';
    }
}
