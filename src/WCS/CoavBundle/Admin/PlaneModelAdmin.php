<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 08/11/16
 * Time: 11:25
 */

namespace WCS\CoavBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PlaneModelAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('model')
            ->add('manufacturer')
            ->add('cruiseSpeed')
            ->add('nbSeats')
            ->add('status')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('model')
            ->add('manufacturer')
            ->add('cruiseSpeed')
            ->add('nbSeats')
            ->add('status')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('model')
            ->add('manufacturer')
            ->add('cruiseSpeed')
            ->add('nbSeats')
            ->add('status')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('model')
            ->add('manufacturer')
            ->add('cruiseSpeed')
            ->add('nbSeats')
            ->add('status')
            ;
    }
}