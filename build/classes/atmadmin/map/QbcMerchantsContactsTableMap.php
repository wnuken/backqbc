<?php



/**
 * This class defines the structure of the 'qbc_merchants_contacts' table.
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
class QbcMerchantsContactsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcMerchantsContactsTableMap';

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
        $this->setName('qbc_merchants_contacts');
        $this->setPhpName('QbcMerchantsContacts');
        $this->setClassname('QbcMerchantsContacts');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('contact_id', 'ContactId', 'INTEGER', true, 10, null);
        $this->addForeignKey('merchants_id', 'MerchantsId', 'INTEGER', 'groupdeals_merchants', 'merchants_id', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('surname', 'Surname', 'VARCHAR', false, 255, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 255, null);
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 255, null);
        $this->addColumn('job_title', 'JobTitle', 'VARCHAR', false, 255, null);
        $this->addColumn('office_address', 'OfficeAddress', 'VARCHAR', false, 255, null);
        $this->addColumn('cell_phone', 'CellPhone', 'VARCHAR', false, 255, null);
        $this->addColumn('first_contact', 'FirstContact', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GroupdealsMerchants', 'GroupdealsMerchants', RelationMap::MANY_TO_ONE, array('merchants_id' => 'merchants_id', ), 'CASCADE', null);
    } // buildRelations()

} // QbcMerchantsContactsTableMap
