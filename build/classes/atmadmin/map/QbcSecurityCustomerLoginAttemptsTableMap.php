<?php



/**
 * This class defines the structure of the 'qbc_security_customer_login_attempts' table.
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
class QbcSecurityCustomerLoginAttemptsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSecurityCustomerLoginAttemptsTableMap';

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
        $this->setName('qbc_security_customer_login_attempts');
        $this->setPhpName('QbcSecurityCustomerLoginAttempts');
        $this->setClassname('QbcSecurityCustomerLoginAttempts');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('username', 'Username', 'VARCHAR', true, 256, null);
        $this->addColumn('attempts', 'Attempts', 'INTEGER', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSecurityCustomerLoginAttemptsTableMap
