<?php

namespace DMC\CategorieBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('motsCles')
        ;
    }
	
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'DMC\CategorieBundle\Entity\Categorie',
        );
    }

    public function getName()
    {
        return 'dmc_categoriebundle_categorietype';
    }
}
