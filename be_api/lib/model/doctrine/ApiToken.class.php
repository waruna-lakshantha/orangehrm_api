<?php

/**
 * ApiToken
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    orangehrm_api
 * @subpackage model
 * @author     S W L Silva
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ApiToken extends BaseApiToken
{
    public function save(Doctrine_Connection $conn = null)
    {
      if (!$this->getToken())
      {
        $this->setToken(sha1($this->getToken().rand(11111, 99999)));
      }
   
      return parent::save($conn);
    }
}