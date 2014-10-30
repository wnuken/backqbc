<?php



/**
 * This class defines the structure of the 'merchant_bank_info' table.
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
class MerchantBankInfoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.MerchantBankInfoTableMap';

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
        $this->setName('merchant_bank_info');
        $this->setPhpName('MerchantBankInfo');
        $this->setClassname('MerchantBankInfo');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('info_id', 'InfoId', 'INTEGER', true, 10, null);
        $this->addColumn('bank_country', 'BankCountry', 'VARCHAR', false, 2, null);
        $this->addColumn('account_type', 'AccountType', 'VARCHAR', false, 255, null);
        $this->addColumn('holder', 'Holder', 'VARCHAR', false, 255, null);
        $this->addColumn('bank', 'Bank', 'VARCHAR', false, 255, null);
        $this->addColumn('account_number', 'AccountNumber', 'VARCHAR', false, 255, null);
        $this->addColumn('currency', 'Currency', 'VARCHAR', false, 3, null);
        $this->addColumn('is_fiduciary', 'IsFiduciary', 'INTEGER', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GroupdealsMerchants', 'GroupdealsMerchants', RelationMap::ONE_TO_MANY, array('info_id' => 'bank_info', ), null, null, 'GroupdealsMerchantss');
    } // buildRelations()

} // MerchantBankInfoTableMap
