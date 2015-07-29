<?php



/**
 * This class defines the structure of the 'qbc_sci_manual_close' table.
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
class QbcSciManualCloseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSciManualCloseTableMap';

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
        $this->setName('qbc_sci_manual_close');
        $this->setPhpName('QbcSciManualClose');
        $this->setClassname('QbcSciManualClose');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 11, null);
        $this->addColumn('campaign_id', 'CampaignId', 'INTEGER', true, 11, 0);
        $this->addColumn('value_sap', 'ValueSap', 'INTEGER', true, 11, 0);
        $this->addColumn('doc_sap', 'DocSap', 'VARCHAR', false, 50, null);
        $this->addColumn('date_sap', 'DateSap', 'TIMESTAMP', false, null, null);
        $this->addColumn('status', 'Status', 'INTEGER', true, 11, 0);
        $this->addColumn('type', 'Type', 'INTEGER', true, 11, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSciManualCloseTableMap
