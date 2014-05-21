<?php


/**
 * This class adds structure of 'result' table to 'propel' DatabaseMap object.
 *
 *
 * This class was autogenerated by Propel 1.3.0-dev on:
 *
 * 05/20/14 10:53:24
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ResultMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ResultMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(ResultPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ResultPeer::TABLE_NAME);
		$tMap->setPhpName('Result');
		$tMap->setClassname('Result');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('RESULTID', 'Resultid', 'INTEGER', true, null);

		$tMap->addForeignKey('LESSONID', 'Lessonid', 'INTEGER', 'lesson', 'LESSONID', true, null);

		$tMap->addForeignKey('USERID', 'Userid', 'INTEGER', 'user', 'USERID', true, null);

		$tMap->addColumn('SCORE', 'Score', 'TINYINT', true, null);

		$tMap->addColumn('MAXSCORE', 'Maxscore', 'TINYINT', true, null);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null);

	} // doBuild()

} // ResultMapBuilder