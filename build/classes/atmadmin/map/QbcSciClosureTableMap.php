<?php



/**
 * This class defines the structure of the 'qbc_sci_closure' table.
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
class QbcSciClosureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSciClosureTableMap';

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
        $this->setName('qbc_sci_closure');
        $this->setPhpName('QbcSciClosure');
        $this->setClassname('QbcSciClosure');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('Id', 'Id', 'INTEGER', true, 20, null);
        $this->addColumn('nit_aliado', 'NitAliado', 'VARCHAR', false, 50, null);
        $this->addColumn('campaign_id', 'CampaignId', 'VARCHAR', false, 50, null);
        $this->addColumn('sell_doc', 'SellDoc', 'VARCHAR', false, 50, null);
        $this->addColumn('sell_date', 'SellDate', 'DATE', false, null, null);
        $this->addColumn('sell_value', 'SellValue', 'DECIMAL', false, 10, null);
        $this->addColumn('dev_doc', 'DevDoc', 'VARCHAR', false, 50, null);
        $this->addColumn('dev_date', 'DevDate', 'DATE', false, null, null);
        $this->addColumn('dev_value', 'DevValue', 'DECIMAL', false, 10, null);
        $this->addColumn('pay_id', 'PayId', 'VARCHAR', false, 100, null);
        $this->addColumn('porcentaje_comision', 'PorcentajeComision', 'DECIMAL', false, 18, null);
        $this->addColumn('porcentaje_iva', 'PorcentajeIva', 'DECIMAL', false, 18, null);
        $this->addColumn('status', 'Status', 'INTEGER', true, 10, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSciClosureTableMap
