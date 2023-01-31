<?php
use PHPUnit\Framework\TestCase;

class UserTableTest_Error extends TestCase
{
    public function testLoginSuccess()
    {
        $para = array("token"=>"hrm_api", "user_name"=>"waruna", "password"=>"Waruna123");

        $instantiator = new \Doctrine\Instantiator\Instantiator();

        $UserTable = $instantiator->instantiate('UserTable::class');

        $empAct = $UserTable->getForToken($para);

        $q = Doctrine_Query::create()
        ->from('Employee e')
        ->where('e.id = ?', 1);
  
        $empExpected = $q->fetchOne();        

        $this->assertEquals($empExpected, $empAct);
    }
}