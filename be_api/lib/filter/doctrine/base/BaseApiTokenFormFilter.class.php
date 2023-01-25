<?php

/**
 * ApiToken filter form base class.
 *
 * @package    orangehrm_api
 * @subpackage filter
 * @author     S W L Silva
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseApiTokenFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'token' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'token' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('api_token_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ApiToken';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'token' => 'Text',
    );
  }
}
