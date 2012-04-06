<?php

namespace DMC\QuestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('libelle_masculin')
            ->add('libelle_feminin')
            ->add('type')
            ->add('creation_date')
            ->add('update_date')
        ;
    }

    public function getName()
    {
        return 'dmc_questionbundle_reponsetype';
    }
}
