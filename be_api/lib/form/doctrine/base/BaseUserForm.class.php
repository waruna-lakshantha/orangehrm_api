<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    orangehrm_api
 * @subpackage form
 * @author     S W L Silva
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_name'   => new sfWidgetFormInputHidden(),
      'password'    => new sfWidgetFormInputText(),
      'employee_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Employee'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'user_name'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_name')), 'empty_value' => $this->getObject()->get('user_name'), 'required' => false)),
      'password'    => new sfValidatorString(array('max_length' => 255)),
      'employee_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Employee'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
