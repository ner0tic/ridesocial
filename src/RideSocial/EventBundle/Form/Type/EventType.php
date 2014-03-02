<?php
  // src/RideSocial/EventBundle/Form/Type/EventType.php
  namespace RideSocial\EventBundle\Form\Type;
  
  use Symfony\Component\Form\AbstractType;
  use Symfony\Component\Form\FormBuilderInterface;
  
  class EventType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, Array $options) {
      $builder->add('name')
              ->add('venue_name')
              ->add('start', null, array('widget' =>  'single_text'));     
    }
    public function getName() { return 'event'; }
  }