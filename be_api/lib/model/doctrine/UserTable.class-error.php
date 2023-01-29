<?php

/**
 * UserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class UserTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object UserTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('User');
    }

    public function getForToken(array $parameters)
    {
      $apitoken = Doctrine_Core::getTable('ApiToken') ->findOneByToken($parameters['token']);
      //if (!$apitoken || !$apitoken->getIsActive()) We can implement IsActive column as well
      if (!$apitoken)
      {
        throw new sfError404Exception(sprintf('client with token "%s" does not exist or is not activated.', $parameters['token']));
      }
   
      $q = Doctrine_Query::create()
      ->from('User u')
      ->where('u.user_name = ?', $parameters['user_name'])
      ->andWhere('u.password = ?', $parameters['password']);

      $user = $q->fetchOne();

      if (!$user)
      {
        throw new sfError404Exception(sprintf('invalid username or password.', $parameters['user_name']));
      }      

      $q = Doctrine_Query::create()
      ->from('Employee e')
      ->where('e.id = ?', $user->getEmployee_Id());

      $employee = $q->fetchOne();

      if (!$employee)
      {
        throw new sfError404Exception(sprintf('employee details not found.', $parameters['user_name']));
      }        

      return $employee;
    }    
}