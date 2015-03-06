<?php



/**
 * This class defines the structure of the 'enterprise_banner_content' table.
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
class EnterpriseBannerContentTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.EnterpriseBannerContentTableMap';

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
        $this->setName('enterprise_banner_content');
        $this->setPhpName('EnterpriseBannerContent');
        $this->setClassname('EnterpriseBannerContent');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('banner_id', 'BannerId', 'INTEGER' , 'enterprise_banner', 'banner_id', true, 10, 0);
        $this->addForeignPrimaryKey('store_id', 'StoreId', 'SMALLINT' , 'core_store', 'store_id', true, 5, 0);
        $this->addColumn('banner_content', 'BannerContent', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CoreStore', 'CoreStore', RelationMap::MANY_TO_ONE, array('store_id' => 'store_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EnterpriseBanner', 'EnterpriseBanner', RelationMap::MANY_TO_ONE, array('banner_id' => 'banner_id', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // EnterpriseBannerContentTableMap
