<?php



/**
 * This class defines the structure of the 'qbc_merchants_locations' table.
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
class QbcMerchantsLocationsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcMerchantsLocationsTableMap';

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
        $this->setName('qbc_merchants_locations');
        $this->setPhpName('QbcMerchantsLocations');
        $this->setClassname('QbcMerchantsLocations');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('location_id', 'LocationId', 'INTEGER', true, 10, null);
        $this->addForeignKey('commercial_name_id', 'CommercialNameId', 'INTEGER', 'qbc_merchants_commercial_names', 'commercial_name_id', true, 10, null);
        $this->addColumn('address', 'Address', 'VARCHAR', true, 100, '');
        $this->addColumn('city', 'City', 'VARCHAR', true, 50, '');
        $this->addColumn('phone', 'Phone', 'VARCHAR', false, 20, null);
        $this->addColumn('mobile_phone', 'MobilePhone', 'VARCHAR', false, 20, null);
        $this->addColumn('image', 'Image', 'VARCHAR', false, 255, null);
        $this->addColumn('status', 'Status', 'BOOLEAN', true, 1, false);
        $this->addColumn('contact_name', 'ContactName', 'VARCHAR', true, 100, '');
        $this->addColumn('google_map_lat', 'GoogleMapLat', 'VARCHAR', true, 30, '4.598071');
        $this->addColumn('google_map_log', 'GoogleMapLog', 'VARCHAR', true, 30, '-74.075832');
        $this->addColumn('service_hour', 'ServiceHour', 'VARCHAR', false, 120, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('QbcMerchantsCommercialNames', 'QbcMerchantsCommercialNames', RelationMap::MANY_TO_ONE, array('commercial_name_id' => 'commercial_name_id', ), 'CASCADE', null);
    } // buildRelations()

} // QbcMerchantsLocationsTableMap
