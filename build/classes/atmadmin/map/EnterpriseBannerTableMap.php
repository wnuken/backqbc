<?php



/**
 * This class defines the structure of the 'enterprise_banner' table.
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
class EnterpriseBannerTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.EnterpriseBannerTableMap';

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
        $this->setName('enterprise_banner');
        $this->setPhpName('EnterpriseBanner');
        $this->setClassname('EnterpriseBanner');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('banner_id', 'BannerId', 'INTEGER', true, 10, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('is_enabled', 'IsEnabled', 'INTEGER', true, null, null);
        $this->addColumn('types', 'Types', 'VARCHAR', false, 255, null);
        $this->addColumn('subhome', 'Subhome', 'VARCHAR', false, 255, null);
        $this->addColumn('start_date', 'StartDate', 'TIMESTAMP', false, null, null);
        $this->addColumn('end_date', 'EndDate', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EnterpriseBannerContent', 'EnterpriseBannerContent', RelationMap::ONE_TO_MANY, array('banner_id' => 'banner_id', ), 'CASCADE', 'CASCADE', 'EnterpriseBannerContents');
    } // buildRelations()

} // EnterpriseBannerTableMap
