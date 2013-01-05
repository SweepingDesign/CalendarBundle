<?php

namespace Rizza\CalendarBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Rizza\CalendarBundle\Form\DataTransformer\UsernameToUserTransformer;

class UsernameType extends AbstractType
{

    protected $usernameTransformer;

    public function __construct(UsernameToUserTransformer $usernameTransformer)
    {
        $this->usernameTransformer = $usernameTransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->appendClientTransformer($this->usernameTransformer);
    }

    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'rizza_calendar_username';
    }

}
