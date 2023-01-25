<?php

/**
 * Employee filter form base class.
 *
 * @package    orangehrm_api
 * @subpackage filter
 * @author     S W L Silva
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmployeeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'first_name' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_name'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'address'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'first_name' => new sfValidatorPass(array('required' => false)),
      'last_name'  => new sfValidatorPass(array('required' => false)),
      'address'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('employee_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Employee';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'first_name' => 'Text',
      'last_name'  => 'Text',
      'address'    => 'Text',
    );
  }
}
