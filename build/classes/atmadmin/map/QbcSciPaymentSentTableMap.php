<?php



/**
 * This class defines the structure of the 'qbc_sci_payment_sent' table.
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
class QbcSciPaymentSentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSciPaymentSentTableMap';

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
        $this->setName('qbc_sci_payment_sent');
        $this->setPhpName('QbcSciPaymentSent');
        $this->setClassname('QbcSciPaymentSent');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('petition_id', 'PetitionId', 'VARCHAR', false, 50, null);
        $this->addColumn('gd_id', 'GdId', 'VARCHAR', false, 50, null);
        $this->addColumn('process_date', 'ProcessDate', 'DATE', false, null, null);
        $this->addColumn('sent_date', 'SentDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('update_date', 'UpdateDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('status', 'Status', 'LONGVARCHAR', false, null, null);
        $this->addColumn('resend', 'Resend', 'INTEGER', false, 5, null);
        $this->addColumn('sap_doc', 'SapDoc', 'VARCHAR', false, 50, null);
        $this->addColumn('sell_date', 'SellDate', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSciPaymentSentTableMap
