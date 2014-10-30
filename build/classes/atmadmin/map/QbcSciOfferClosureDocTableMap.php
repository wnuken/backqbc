<?php



/**
 * This class defines the structure of the 'qbc_sci_offer_closure_doc' table.
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
class QbcSciOfferClosureDocTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSciOfferClosureDocTableMap';

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
        $this->setName('qbc_sci_offer_closure_doc');
        $this->setPhpName('QbcSciOfferClosureDoc');
        $this->setClassname('QbcSciOfferClosureDoc');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 10, null);
        $this->addColumn('petition_id', 'PetitionId', 'VARCHAR', false, 50, null);
        $this->addColumn('state', 'State', 'VARCHAR', false, 20, null);
        $this->addColumn('detail', 'Detail', 'LONGVARCHAR', false, null, null);
        $this->addColumn('document_id', 'DocumentId', 'VARCHAR', false, 10, null);
        $this->addColumn('doc_position', 'DocPosition', 'INTEGER', false, 2, null);
        $this->addColumn('doc_value', 'DocValue', 'DECIMAL', false, 18, null);
        $this->addColumn('doc_date', 'DocDate', 'VARCHAR', false, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSciOfferClosureDocTableMap
