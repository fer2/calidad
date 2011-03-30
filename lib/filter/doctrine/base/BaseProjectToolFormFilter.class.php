<?php

/**
 * ProjectTool filter form base class.
 *
 * @package    sitioCalidad
 * @subpackage filter
 * @author     Fernando G. Panci
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProjectToolFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('project_tool_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProjectTool';
  }

  public function getFields()
  {
    return array(
      'project_id' => 'Number',
      'tool_id'    => 'Number',
    );
  }
}
