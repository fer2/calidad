<?php

/**
 * BaseCompany
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property boolean $is_active
 * @property integer $country_id
 * @property Country $Country
 * @property Application $Application
 * @property Doctrine_Collection $Projects
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getName()        Returns the current record's "name" value
 * @method boolean             getIsActive()    Returns the current record's "is_active" value
 * @method integer             getCountryId()   Returns the current record's "country_id" value
 * @method Country             getCountry()     Returns the current record's "Country" value
 * @method Application         getApplication() Returns the current record's "Application" value
 * @method Doctrine_Collection getProjects()    Returns the current record's "Projects" collection
 * @method Company             setId()          Sets the current record's "id" value
 * @method Company             setName()        Sets the current record's "name" value
 * @method Company             setIsActive()    Sets the current record's "is_active" value
 * @method Company             setCountryId()   Sets the current record's "country_id" value
 * @method Company             setCountry()     Sets the current record's "Country" value
 * @method Company             setApplication() Sets the current record's "Application" value
 * @method Company             setProjects()    Sets the current record's "Projects" collection
 * 
 * @package    sitioCalidad
 * @subpackage model
 * @author     Fernando G. Panci
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCompany extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('company');
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
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('country_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Country', array(
             'local' => 'country_id',
             'foreign' => 'id'));

        $this->hasOne('Application', array(
             'local' => 'id',
             'foreign' => 'company_id'));

        $this->hasMany('Project as Projects', array(
             'local' => 'id',
             'foreign' => 'company_id'));
    }
}