<?php



/**
 * This class defines the structure of the 'qbc_sci_annulment' table.
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
class QbcSciAnnulmentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSciAnnulmentTableMap';

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
        $this->setName('qbc_sci_annulment');
        $this->setPhpName('QbcSciAnnulment');
        $this->setClassname('QbcSciAnnulment');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('petition_id', 'PetitionId', 'VARCHAR', false, 50, null);
        $this->addColumn('campaign_id', 'CampaignId', 'INTEGER', false, 10, null);
        $this->addColumn('sell_document', 'SellDocument', 'VARCHAR', false, 20, null);
        $this->addColumn('order_item', 'OrderItem', 'INTEGER', false, 10, null);
        $this->addColumn('order_id', 'OrderId', 'INTEGER', false, 10, null);
        $this->addColumn('credits', 'Credits', 'DECIMAL', false, 18, null);
        $this->addColumn('cash', 'Cash', 'DECIMAL', false, 18, null);
        $this->addColumn('unit', 'Unit', 'INTEGER', false, 5, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSciAnnulmentTableMap
