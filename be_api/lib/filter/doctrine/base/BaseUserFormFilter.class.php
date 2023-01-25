<?php

/**
 * User filter form base class.
 *
 * @package    orangehrm_api
 * @subpackage filter
 * @author     S W L Silva
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'password'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'employee_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Employee'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'password'    => new sfValidatorPass(array('required' => false)),
      'employee_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Employee'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'user_name'   => 'Text',
      'password'    => 'Text',
      'employee_id' => 'ForeignKey',
    );
  }
}
