<?php



/**
 * This class defines the structure of the 'admin_user' table.
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
class AdminUserTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.AdminUserTableMap';

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
        $this->setName('admin_user');
        $this->setPhpName('AdminUser');
        $this->setClassname('AdminUser');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('user_id', 'UserId', 'INTEGER', true, 10, null);
        $this->addColumn('firstname', 'Firstname', 'VARCHAR', false, 32, null);
        $this->addColumn('lastname', 'Lastname', 'VARCHAR', false, 32, null);
        $this->addColumn('email', 'Email', 'VARCHAR', false, 128, null);
        $this->addColumn('username', 'Username', 'VARCHAR', false, 40, null);
        $this->addColumn('password', 'Password', 'VARCHAR', false, 100, null);
        $this->addColumn('created', 'Created', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('modified', 'Modified', 'TIMESTAMP', false, null, null);
        $this->addColumn('logdate', 'Logdate', 'TIMESTAMP', false, null, null);
        $this->addColumn('lognum', 'Lognum', 'SMALLINT', true, 5, 0);
        $this->addColumn('reload_acl_flag', 'ReloadAclFlag', 'SMALLINT', true, null, 0);
        $this->addColumn('is_active', 'IsActive', 'SMALLINT', true, null, 1);
        $this->addColumn('extra', 'Extra', 'LONGVARCHAR', false, null, null);
        $this->addColumn('rp_token', 'RpToken', 'LONGVARCHAR', false, null, null);
        $this->addColumn('rp_token_created_at', 'RpTokenCreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('failures_num', 'FailuresNum', 'SMALLINT', false, null, 0);
        $this->addColumn('first_failure', 'FirstFailure', 'TIMESTAMP', false, null, null);
        $this->addColumn('lock_expires', 'LockExpires', 'TIMESTAMP', false, null, null);
        $this->addColumn('movil', 'Movil', 'VARCHAR', false, 255, null);
        $this->addColumn('id_employee', 'IdEmployee', 'VARCHAR', false, 255, null);
        $this->addColumn('position', 'Position', 'VARCHAR', false, 255, null);
        $this->addForeignKey('merchant_id', 'MerchantId', 'INTEGER', 'groupdeals_merchants', 'merchants_id', false, null, null);
        $this->addColumn('dob', 'Dob', 'VARCHAR', false, 20, null);
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 20, null);
        $this->addColumn('workmovil', 'Workmovil', 'VARCHAR', false, 20, null);
        $this->addForeignKey('pos_id', 'PosId', 'INTEGER', 'qbc_pos', 'id', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('GroupdealsMerchants', 'GroupdealsMerchants', RelationMap::MANY_TO_ONE, array('merchant_id' => 'merchants_id', ), 'CASCADE', null);
        $this->addRelation('QbcPos', 'QbcPos', RelationMap::MANY_TO_ONE, array('pos_id' => 'id', ), 'SET NULL', null);
    } // buildRelations()

} // AdminUserTableMap
