<?php



/**
 * This class defines the structure of the 'qbc_sci_closure' table.
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
class QbcSciClosureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcSciClosureTableMap';

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
        $this->setName('qbc_sci_closure');
        $this->setPhpName('QbcSciClosure');
        $this->setClassname('QbcSciClosure');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('Id', 'Id', 'INTEGER', true, 20, null);
        $this->addColumn('NitAliado', 'Nitaliado', 'VARCHAR', false, 50, null);
        $this->addColumn('CampanaId', 'Campanaid', 'VARCHAR', false, 50, null);
        $this->addColumn('Venta', 'Venta', 'VARCHAR', false, 50, null);
        $this->addColumn('FechaV', 'Fechav', 'DATE', false, null, null);
        $this->addColumn('ValorV', 'Valorv', 'DECIMAL', false, 10, null);
        $this->addColumn('Devolucion', 'Devolucion', 'VARCHAR', false, 50, null);
        $this->addColumn('FechaD', 'Fechad', 'DATE', false, null, null);
        $this->addColumn('ValorD', 'Valord', 'DECIMAL', false, 10, null);
        $this->addColumn('PagoAliado', 'Pagoaliado', 'VARCHAR', false, 100, null);
        $this->addColumn('PorcentajeComision', 'Porcentajecomision', 'DECIMAL', false, 18, null);
        $this->addColumn('PorcentajeIVAComision', 'Porcentajeivacomision', 'DECIMAL', false, 18, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcSciClosureTableMap
