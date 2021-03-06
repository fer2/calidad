<?php

/**
 * BaseGuide
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $url
 * @property blob $description
 * @property integer $tool_id
 * @property Tool $Tool
 * 
 * @method integer getId()          Returns the current record's "id" value
 * @method string  getCode()        Returns the current record's "code" value
 * @method string  getName()        Returns the current record's "name" value
 * @method string  getUrl()         Returns the current record's "url" value
 * @method blob    getDescription() Returns the current record's "description" value
 * @method integer getToolId()      Returns the current record's "tool_id" value
 * @method Tool    getTool()        Returns the current record's "Tool" value
 * @method Guide   setId()          Sets the current record's "id" value
 * @method Guide   setCode()        Sets the current record's "code" value
 * @method Guide   setName()        Sets the current record's "name" value
 * @method Guide   setUrl()         Sets the current record's "url" value
 * @method Guide   setDescription() Sets the current record's "description" value
 * @method Guide   setToolId()      Sets the current record's "tool_id" value
 * @method Guide   setTool()        Sets the current record's "Tool" value
 * 
 * @package    sitioCalidad
 * @subpackage model
 * @author     Fernando G. Panci
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGuide extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('guide');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('code', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'blob', null, array(
             'type' => 'blob',
             ));
        $this->hasColumn('tool_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Tool', array(
             'local' => 'tool_id',
             'foreign' => 'id'));
    }
}