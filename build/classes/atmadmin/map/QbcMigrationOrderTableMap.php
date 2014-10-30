<?php



/**
 * This class defines the structure of the 'qbc_migration_order' table.
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
class QbcMigrationOrderTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcMigrationOrderTableMap';

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
        $this->setName('qbc_migration_order');
        $this->setPhpName('QbcMigrationOrder');
        $this->setClassname('QbcMigrationOrder');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('ammount', 'Ammount', 'DECIMAL', false, 18, null);
        $this->addColumn('credits_used', 'CreditsUsed', 'DECIMAL', false, 18, null);
        $this->addColumn('netto_ammount', 'NettoAmmount', 'DECIMAL', false, 18, null);
        $this->addColumn('status', 'Status', 'VARCHAR', false, 50, null);
        $this->addColumn('payment_method', 'PaymentMethod', 'VARCHAR', false, 50, null);
        $this->addColumn('created_datetime', 'CreatedDatetime', 'DATE', false, null, null);
        $this->addColumn('document_number', 'DocumentNumber', 'INTEGER', false, 10, null);
        $this->addColumn('code', 'Code', 'VARCHAR', false, 20, null);
        $this->addColumn('coupon_status', 'CouponStatus', 'VARCHAR', false, 50, null);
        $this->addColumn('campaign_sku', 'CampaignSku', 'VARCHAR', false, 20, null);
        $this->addColumn('customer_id', 'CustomerId', 'INTEGER', false, 10, null);
        $this->addColumn('redeemed', 'Redeemed', 'INTEGER', false, 1, 0);
        $this->addColumn('expired_datetime', 'ExpiredDatetime', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcMigrationOrderTableMap
