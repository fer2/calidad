<?php

/**
 * ProjectTool form base class.
 *
 * @method ProjectTool getObject() Returns the current form's model object
 *
 * @package    sitioCalidad
 * @subpackage form
 * @author     Fernando G. Panci
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProjectToolForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'project_id' => new sfWidgetFormInputHidden(),
      'tool_id'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'project_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('project_id')), 'empty_value' => $this->getObject()->get('project_id'), 'required' => false)),
      'tool_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tool_id')), 'empty_value' => $this->getObject()->get('tool_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('project_tool[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ProjectTool';
  }

}
