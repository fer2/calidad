<?php

/**
 * Guide form base class.
 *
 * @method Guide getObject() Returns the current form's model object
 *
 * @package    sitioCalidad
 * @subpackage form
 * @author     Fernando G. Panci
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGuideForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'code'        => new sfWidgetFormInputText(),
      'name'        => new sfWidgetFormInputText(),
      'url'         => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormInputText(),
      'tool_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tool'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'code'        => new sfValidatorString(array('max_length' => 255)),
      'name'        => new sfValidatorString(array('max_length' => 255)),
      'url'         => new sfValidatorString(array('max_length' => 255)),
      'description' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tool_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tool'), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Guide', 'column' => array('code'))),
        new sfValidatorDoctrineUnique(array('model' => 'Guide', 'column' => array('name'))),
      ))
    );

    $this->widgetSchema->setNameFormat('guide[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Guide';
  }

}
