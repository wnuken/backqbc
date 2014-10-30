<?php



/**
 * This class defines the structure of the 'groupdeals_merchants' table.
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
class GroupdealsMerchantsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.GroupdealsMerchantsTableMap';

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
        $this->setName('groupdeals_merchants');
        $this->setPhpName('GroupdealsMerchants');
        $this->setClassname('GroupdealsMerchants');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('merchants_id', 'MerchantsId', 'INTEGER', true, null, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', true, null, null);
        $this->addColumn('permissions', 'Permissions', 'VARCHAR', true, 255, '');
        $this->addColumn('name', 'Name', 'LONGVARCHAR', true, null, null);
        $this->addColumn('merchant_logo', 'MerchantLogo', 'LONGVARCHAR', true, null, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', true, null, null);
        $this->addColumn('website', 'Website', 'LONGVARCHAR', true, null, null);
        $this->addColumn('email', 'Email', 'LONGVARCHAR', true, null, null);
        $this->addColumn('facebook', 'Facebook', 'LONGVARCHAR', true, null, null);
        $this->addColumn('twitter', 'Twitter', 'LONGVARCHAR', true, null, null);
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 14, null);
        $this->addColumn('mobile', 'Mobile', 'LONGVARCHAR', true, null, null);
        $this->addColumn('business_hours', 'BusinessHours', 'LONGVARCHAR', true, null, null);
        $this->addColumn('address', 'Address', 'LONGVARCHAR', true, null, null);
        $this->addColumn('redeem', 'Redeem', 'LONGVARCHAR', true, null, null);
        $this->addColumn('paypal_email', 'PaypalEmail', 'VARCHAR', true, 255, '');
        $this->addColumn('authorize_info', 'AuthorizeInfo', 'LONGVARCHAR', true, null, null);
        $this->addForeignKey('bank_info', 'BankInfo', 'INTEGER', 'merchant_bank_info', 'info_id', false, 10, null);
        $this->addColumn('other', 'Other', 'LONGVARCHAR', true, null, null);
        $this->addColumn('status', 'Status', 'INTEGER', true, null, null);
        $this->addColumn('nit_number', 'NitNumber', 'VARCHAR', false, 20, null);
        $this->addColumn('agent', 'Agent', 'VARCHAR', false, 255, null);
        $this->addColumn('service_provided', 'ServiceProvided', 'VARCHAR', false, 255, null);
        $this->addColumn('city', 'City', 'VARCHAR', false, 255, null);
        $this->addColumn('country', 'Country', 'VARCHAR', false, 2, null);
        $this->addColumn('primary_contact', 'PrimaryContact', 'LONGVARCHAR', true, null, null);
        $this->addColumn('secondary_contact', 'SecondaryContact', 'LONGVARCHAR', true, null, null);
        $this->addColumn('legal_name', 'LegalName', 'VARCHAR', true, 255, null);
        $this->addColumn('branch', 'Branch', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('MerchantBankInfo', 'MerchantBankInfo', RelationMap::MANY_TO_ONE, array('bank_info' => 'info_id', ), null, null);
        $this->addRelation('QbcMerchantsCommercialNames', 'QbcMerchantsCommercialNames', RelationMap::ONE_TO_MANY, array('merchants_id' => 'merchants_id', ), 'CASCADE', null, 'QbcMerchantsCommercialNamess');
        $this->addRelation('QbcMerchantsContacts', 'QbcMerchantsContacts', RelationMap::ONE_TO_MANY, array('merchants_id' => 'merchants_id', ), 'CASCADE', null, 'QbcMerchantsContactss');
    } // buildRelations()

} // GroupdealsMerchantsTableMap
