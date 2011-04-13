<?php

/**
 * Application filter form base class.
 *
 * @package    sitioCalidad
 * @subpackage filter
 * @author     Fernando G. Panci
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseApplicationFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'state'       => new sfWidgetFormChoice(array('choices' => array('' => '', 'pendiente' => 'pendiente', 'aprobada' => 'aprobada', 'desaprobada' => 'desaprobada'))),
      'description' => new sfWidgetFormFilterInput(),
      'company_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Company'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorPass(array('required' => false)),
      'state'       => new sfValidatorChoice(array('required' => false, 'choices' => array('pendiente' => 'pendiente', 'aprobada' => 'aprobada', 'desaprobada' => 'desaprobada'))),
      'description' => new sfValidatorPass(array('required' => false)),
      'company_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Company'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('application_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Application';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'name'        => 'Text',
      'state'       => 'Enum',
      'description' => 'Text',
      'company_id'  => 'ForeignKey',
    );
  }
}
