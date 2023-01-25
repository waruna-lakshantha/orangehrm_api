<?php

/**
 * api actions.
 *
 * @package    orangehrm_api
 * @subpackage api
 * @author     S W L Silva
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions
{
  public function executeAuth(sfWebRequest $request)
  {
    //$employee = $this->getRoute()->getObjects();

    if(!$request->isMethod(sfRequest::POST)){
      throw new sfError404Exception(sprintf('invalid requeust.', 'orangehrm'));
    }    

    $this->employees = array();
    foreach ($this->getRoute()->getObjects() as $employee)
    {
      $this->employees[$employee->getId()] = $employee->asArray($request->getParameter('user_name'));
    }
  }
}