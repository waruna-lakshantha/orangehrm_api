<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Employee', 'doctrine');

/**
 * BaseEmployee
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property Doctrine_Collection $User
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getFirstName()  Returns the current record's "first_name" value
 * @method string              getLastName()   Returns the current record's "last_name" value
 * @method string              getAddress()    Returns the current record's "address" value
 * @method Doctrine_Collection getUser()       Returns the current record's "User" collection
 * @method Employee            setId()         Sets the current record's "id" value
 * @method Employee            setFirstName()  Sets the current record's "first_name" value
 * @method Employee            setLastName()   Sets the current record's "last_name" value
 * @method Employee            setAddress()    Sets the current record's "address" value
 * @method Employee            setUser()       Sets the current record's "User" collection
 * 
 * @package    orangehrm_api
 * @subpackage model
 * @author     S W L Silva
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEmployee extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('employee');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('first_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('last_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('address', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('User', array(
             'local' => 'id',
             'foreign' => 'employee_id'));
    }
}