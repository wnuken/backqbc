<?php



/**
 * This class defines the structure of the 'treasury_types' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.atmadmin.map
 */
class TreasuryTypesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.TreasuryTypesTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('treasury_types');
        $this->setPhpName('TreasuryTypes');
        $this->setClassname('TreasuryTypes');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('code', 'Code', 'VARCHAR', true, 256, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 256, null);
        $this->addColumn('iva', 'Iva', 'INTEGER', true, 10, null);
        $this->addColumn('ica', 'Ica', 'DECIMAL', true, 8, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Groupdeals', 'Groupdeals', RelationMap::ONE_TO_MANY, array('id' => 'treasury_type', ), null, null, 'Groupdealss');
    } // buildRelations()

} // TreasuryTypesTableMap
