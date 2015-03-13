<?php



/**
 * This class defines the structure of the 'admin_role' table.
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
class AdminRoleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.AdminRoleTableMap';

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
        $this->setName('admin_role');
        $this->setPhpName('AdminRole');
        $this->setClassname('AdminRole');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('role_id', 'RoleId', 'INTEGER', true, 10, null);
        $this->addColumn('parent_id', 'ParentId', 'INTEGER', true, 10, 0);
        $this->addColumn('tree_level', 'TreeLevel', 'SMALLINT', true, 5, 0);
        $this->addColumn('sort_order', 'SortOrder', 'SMALLINT', true, 5, 0);
        $this->addColumn('role_type', 'RoleType', 'VARCHAR', true, 1, '0');
        $this->addColumn('user_id', 'UserId', 'INTEGER', true, 10, 0);
        $this->addColumn('role_name', 'RoleName', 'VARCHAR', false, 50, null);
        $this->addColumn('gws_is_all', 'GwsIsAll', 'INTEGER', true, null, 1);
        $this->addColumn('gws_websites', 'GwsWebsites', 'VARCHAR', false, 255, null);
        $this->addColumn('gws_store_groups', 'GwsStoreGroups', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // AdminRoleTableMap
