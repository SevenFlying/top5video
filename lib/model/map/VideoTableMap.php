<?php


/**
 * This class defines the structure of the 'video' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 11/21/13 07:32:36
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class VideoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.VideoTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('video');
		$this->setPhpName('Video');
		$this->setClassname('Video');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('AUTHOR_ID', 'AuthorId', 'INTEGER', 'author', 'ID', true, null, null);
		$this->addForeignKey('CATEGORY_ID', 'CategoryId', 'INTEGER', 'category', 'ID', true, null, null);
		$this->addColumn('TITLE', 'Title', 'VARCHAR', true, 255, null);
		$this->addColumn('DESC', 'Desc', 'LONGVARCHAR', true, null, null);
		$this->addColumn('UPLOAD_DATE', 'UploadDate', 'DATE', true, null, null);
		$this->addColumn('URL', 'Url', 'VARCHAR', true, 255, null);
		$this->addColumn('SLUG', 'Slug', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Author', 'Author', RelationMap::MANY_TO_ONE, array('author_id' => 'id', ), null, null);
    $this->addRelation('Category', 'Category', RelationMap::MANY_TO_ONE, array('category_id' => 'id', ), null, null);
    $this->addRelation('Score', 'Score', RelationMap::ONE_TO_MANY, array('id' => 'video_id', ), null, null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // VideoTableMap
