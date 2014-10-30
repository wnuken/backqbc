<?php



/**
 * This class defines the structure of the 'qbc_merchants_commercial_names' table.
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
class QbcMerchantsCommercialNamesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcMerchantsCommercialNamesTableMap';

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
        $this->setName('qbc_merchants_commercial_names');
        $this->setPhpName('QbcMerchantsCommercialNames');
        $this->setClassname('QbcMerchantsCommercialNames');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('commercial_name_id', 'CommercialNameId', 'INTEGER', true, 10, null);
        $this->addForeignKey('merchants_id', 'MerchantsId', 'INTEGER', 'groupdeals_merchants', 'merchants_id', true, null, null);
        $this->addColumn('commercial_name', 'CommercialName', 'VARCHAR', true, 255, '');
        $this->addColumn('nit', 'Nit', 'VARCHAR', false, 100, null);
        $this->addColumn('use_parent_nit', 'UseParentNit', 'BOOLEAN', true, 1, false);
        $this->addColumn('bank_account_number', 'BankAccountNumber', 'VARCHAR', false, 100, null);
        $this->addColumn('use_parent_bank_account', 'UseParentBankAccount', 'BOOLEAN', true, 1, false);
        $this->addColumn('company_description', 'CompanyDescription', 'LONGVARCHAR', false, null, null);
        $this->addColumn('logo', 'Logo', 'VARCHAR', false, 255, '');
        $this->addColumn('email', 'Email', 'VARCHAR', false, 255, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GroupdealsMerchants', 'GroupdealsMerchants', RelationMap::MANY_TO_ONE, array('merchants_id' => 'merchants_id', ), 'CASCADE', null);
        $this->addRelation('QbcMerchantsLocations', 'QbcMerchantsLocations', RelationMap::ONE_TO_MANY, array('commercial_name_id' => 'commercial_name_id', ), 'CASCADE', null, 'QbcMerchantsLocationss');
    } // buildRelations()

} // QbcMerchantsCommercialNamesTableMap
