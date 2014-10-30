<?php



/**
 * This class defines the structure of the 'qbc_pos' table.
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
class QbcPosTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcPosTableMap';

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
        $this->setName('qbc_pos');
        $this->setPhpName('QbcPos');
        $this->setClassname('QbcPos');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('pos_id', 'PosId', 'VARCHAR', true, 20, null);
        $this->addColumn('office', 'Office', 'VARCHAR', false, 50, null);
        $this->addColumn('code', 'Code', 'VARCHAR', false, 10, null);
        $this->addColumn('country', 'Country', 'VARCHAR', false, 2, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 255, null);
        $this->addColumn('postal_code', 'PostalCode', 'INTEGER', false, 10, null);
        $this->addColumn('address', 'Address', 'VARCHAR', false, 500, null);
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcPosTableMap
