<?php

namespace DMC\CategorieBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prix', 'money', array('currency' => 'EUR', 'precision' => 2))
            ->add('type')
            ->add('date_sortie', 'date')
            ->add('date_validite')
            ->add('date_maj')
            ->add('creation_date')
            ->add('update_date')
        ;
    }
	
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'DMC\CategorieBundle\Entity\Article',
        );
    }

    public function getName()
    {
        return 'dmc_categoriebundle_articletype';
    }
}
