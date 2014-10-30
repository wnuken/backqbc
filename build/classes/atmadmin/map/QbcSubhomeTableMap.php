<?php



/**
 * This class defines the structure of the 'qbc_subhome' table.
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
class QbcSubhomeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSubhomeTableMap';

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
        $this->setName('qbc_subhome');
        $this->setPhpName('QbcSubhome');
        $this->setClassname('QbcSubhome');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('entity_id', 'EntityId', 'INTEGER', true, 10, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addColumn('color', 'Color', 'VARCHAR', true, 255, 'default');
        $this->addColumn('identifier', 'Identifier', 'VARCHAR', true, 255, 'default');
        $this->addColumn('page_id', 'PageId', 'VARCHAR', true, 255, '1');
        $this->addColumn('option_id', 'OptionId', 'VARCHAR', false, 255, null);
        $this->addColumn('is_visible', 'IsVisible', 'INTEGER', false, 10, null);
        $this->addColumn('image', 'Image', 'VARCHAR', false, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSubhomeTableMap
