<?php



/**
 * This class defines the structure of the 'qbc_sales_pfr' table.
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
class QbcSalesPfrTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSalesPfrTableMap';

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
        $this->setName('qbc_sales_pfr');
        $this->setPhpName('QbcSalesPfr');
        $this->setClassname('QbcSalesPfr');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('order_id', 'OrderId', 'INTEGER', true, 10, null);
        $this->addColumn('sate', 'Sate', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSalesPfrTableMap
