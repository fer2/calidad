<?php

/**
 * Tool form base class.
 *
 * @method Tool getObject() Returns the current form's model object
 *
 * @package    sitioCalidad
 * @subpackage form
 * @author     Fernando G. Panci
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseToolForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'code'          => new sfWidgetFormInputText(),
      'name'          => new sfWidgetFormInputText(),
      'url'           => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormInputText(),
      'projects_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Project')),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'code'          => new sfValidatorString(array('max_length' => 255)),
      'name'          => new sfValidatorString(array('max_length' => 255)),
      'url'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'description'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'projects_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Project', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'Tool', 'column' => array('code'))),
        new sfValidatorDoctrineUnique(array('model' => 'Tool', 'column' => array('name'))),
      ))
    );

    $this->widgetSchema->setNameFormat('tool[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tool';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['projects_list']))
    {
      $this->setDefault('projects_list', $this->object->Projects->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveProjectsList($con);

    parent::doSave($con);
  }

  public function saveProjectsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['projects_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Projects->getPrimaryKeys();
    $values = $this->getValue('projects_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Projects', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Projects', array_values($link));
    }
  }

}
