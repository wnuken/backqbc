<?php



/**
 * This class defines the structure of the 'qbc_sci_sell' table.
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
class QbcSciSellTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSciSellTableMap';

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
        $this->setName('qbc_sci_sell');
        $this->setPhpName('QbcSciSell');
        $this->setClassname('QbcSciSell');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('petition_id', 'PetitionId', 'VARCHAR', false, 50, null);
        $this->addColumn('order_id', 'OrderId', 'VARCHAR', false, 20, null);
        $this->addColumn('pos_number', 'PosNumber', 'VARCHAR', false, 20, null);
        $this->addColumn('pos_type', 'PosType', 'VARCHAR', false, 5, null);
        $this->addColumn('item_id', 'ItemId', 'VARCHAR', false, 20, null);
        $this->addColumn('giftcard', 'Giftcard', 'INTEGER', false, 1, 0);
        $this->addColumn('processed', 'Processed', 'INTEGER', false, 1, 0);
        $this->addColumn('unit', 'Unit', 'INTEGER', false, 10, 1);
        $this->addColumn('rewards_used', 'RewardsUsed', 'LONGVARCHAR', false, null, null);
        $this->addColumn('is_cancell', 'IsCancell', 'INTEGER', false, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSciSellTableMap
