<?php

/**
 * BaseApplication
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property enum $state
 * @property blob $description
 * @property integer $company_id
 * @property Company $Company
 * 
 * @method integer     getId()          Returns the current record's "id" value
 * @method string      getName()        Returns the current record's "name" value
 * @method enum        getState()       Returns the current record's "state" value
 * @method blob        getDescription() Returns the current record's "description" value
 * @method integer     getCompanyId()   Returns the current record's "company_id" value
 * @method Company     getCompany()     Returns the current record's "Company" value
 * @method Application setId()          Sets the current record's "id" value
 * @method Application setName()        Sets the current record's "name" value
 * @method Application setState()       Sets the current record's "state" value
 * @method Application setDescription() Sets the current record's "description" value
 * @method Application setCompanyId()   Sets the current record's "company_id" value
 * @method Application setCompany()     Sets the current record's "Company" value
 * 
 * @package    sitioCalidad
 * @subpackage model
 * @author     Fernando G. Panci
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseApplication extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('application');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('state', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'pendiente',
              1 => 'aprobada',
              2 => 'desaprobada',
             ),
             ));
        $this->hasColumn('description', 'blob', null, array(
             'type' => 'blob',
             ));
        $this->hasColumn('company_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Company', array(
             'local' => 'company_id',
             'foreign' => 'id'));
    }
}