<?php



/**
 * This class defines the structure of the 'qbc_security_reset_password_history' table.
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
class QbcSecurityResetPasswordHistoryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSecurityResetPasswordHistoryTableMap';

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
        $this->setName('qbc_security_reset_password_history');
        $this->setPhpName('QbcSecurityResetPasswordHistory');
        $this->setClassname('QbcSecurityResetPasswordHistory');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('mail', 'Mail', 'VARCHAR', true, 256, null);
        $this->addColumn('last_send', 'LastSend', 'VARCHAR', false, 50, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSecurityResetPasswordHistoryTableMap
