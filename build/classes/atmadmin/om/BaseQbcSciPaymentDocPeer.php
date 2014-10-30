<?php


/**
 * Base static class for performing query and update operations on the 'qbc_sci_payment_doc' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseQbcSciPaymentDocPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'qbc_sci_payment_doc';

    /** the related Propel class for this table */
    const OM_CLASS = 'QbcSciPaymentDoc';

    /** the related TableMap class for this table */
    const TM_CLASS = 'QbcSciPaymentDocTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 15;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 15;

    /** the column name for the id field */
    const ID = 'qbc_sci_payment_doc.id';

    /** the column name for the petition_id field */
    const PETITION_ID = 'qbc_sci_payment_doc.petition_id';

    /** the column name for the state field */
    const STATE = 'qbc_sci_payment_doc.state';

    /** the column name for the detail field */
    const DETAIL = 'qbc_sci_payment_doc.detail';

    /** the column name for the request_invoice_number field */
    const REQUEST_INVOICE_NUMBER = 'qbc_sci_payment_doc.request_invoice_number';

    /** the column name for the request_invoice_position field */
    const REQUEST_INVOICE_POSITION = 'qbc_sci_payment_doc.request_invoice_position';

    /** the column name for the request_invoice_date field */
    const REQUEST_INVOICE_DATE = 'qbc_sci_payment_doc.request_invoice_date';

    /** the column name for the request_invoice_value field */
    const REQUEST_INVOICE_VALUE = 'qbc_sci_payment_doc.request_invoice_value';

    /** the column name for the financial_document field */
    const FINANCIAL_DOCUMENT = 'qbc_sci_payment_doc.financial_document';

    /** the column name for the commission_payment_number field */
    const COMMISSION_PAYMENT_NUMBER = 'qbc_sci_payment_doc.commission_payment_number';

    /** the column name for the compensation_number field */
    const COMPENSATION_NUMBER = 'qbc_sci_payment_doc.compensation_number';

    /** the column name for the document_id field */
    const DOCUMENT_ID = 'qbc_sci_payment_doc.document_id';

    /** the column name for the doc_position field */
    const DOC_POSITION = 'qbc_sci_payment_doc.doc_position';

    /** the column name for the doc_value field */
    const DOC_VALUE = 'qbc_sci_payment_doc.doc_value';

    /** the column name for the doc_date field */
    const DOC_DATE = 'qbc_sci_payment_doc.doc_date';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of QbcSciPaymentDoc objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array QbcSciPaymentDoc[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. QbcSciPaymentDocPeer::$fieldNames[QbcSciPaymentDocPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'PetitionId', 'State', 'Detail', 'RequestInvoiceNumber', 'RequestInvoicePosition', 'RequestInvoiceDate', 'RequestInvoiceValue', 'FinancialDocument', 'CommissionPaymentNumber', 'CompensationNumber', 'DocumentId', 'DocPosition', 'DocValue', 'DocDate', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'petitionId', 'state', 'detail', 'requestInvoiceNumber', 'requestInvoicePosition', 'requestInvoiceDate', 'requestInvoiceValue', 'financialDocument', 'commissionPaymentNumber', 'compensationNumber', 'documentId', 'docPosition', 'docValue', 'docDate', ),
        BasePeer::TYPE_COLNAME => array (QbcSciPaymentDocPeer::ID, QbcSciPaymentDocPeer::PETITION_ID, QbcSciPaymentDocPeer::STATE, QbcSciPaymentDocPeer::DETAIL, QbcSciPaymentDocPeer::REQUEST_INVOICE_NUMBER, QbcSciPaymentDocPeer::REQUEST_INVOICE_POSITION, QbcSciPaymentDocPeer::REQUEST_INVOICE_DATE, QbcSciPaymentDocPeer::REQUEST_INVOICE_VALUE, QbcSciPaymentDocPeer::FINANCIAL_DOCUMENT, QbcSciPaymentDocPeer::COMMISSION_PAYMENT_NUMBER, QbcSciPaymentDocPeer::COMPENSATION_NUMBER, QbcSciPaymentDocPeer::DOCUMENT_ID, QbcSciPaymentDocPeer::DOC_POSITION, QbcSciPaymentDocPeer::DOC_VALUE, QbcSciPaymentDocPeer::DOC_DATE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'PETITION_ID', 'STATE', 'DETAIL', 'REQUEST_INVOICE_NUMBER', 'REQUEST_INVOICE_POSITION', 'REQUEST_INVOICE_DATE', 'REQUEST_INVOICE_VALUE', 'FINANCIAL_DOCUMENT', 'COMMISSION_PAYMENT_NUMBER', 'COMPENSATION_NUMBER', 'DOCUMENT_ID', 'DOC_POSITION', 'DOC_VALUE', 'DOC_DATE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'petition_id', 'state', 'detail', 'request_invoice_number', 'request_invoice_position', 'request_invoice_date', 'request_invoice_value', 'financial_document', 'commission_payment_number', 'compensation_number', 'document_id', 'doc_position', 'doc_value', 'doc_date', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. QbcSciPaymentDocPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PetitionId' => 1, 'State' => 2, 'Detail' => 3, 'RequestInvoiceNumber' => 4, 'RequestInvoicePosition' => 5, 'RequestInvoiceDate' => 6, 'RequestInvoiceValue' => 7, 'FinancialDocument' => 8, 'CommissionPaymentNumber' => 9, 'CompensationNumber' => 10, 'DocumentId' => 11, 'DocPosition' => 12, 'DocValue' => 13, 'DocDate' => 14, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'petitionId' => 1, 'state' => 2, 'detail' => 3, 'requestInvoiceNumber' => 4, 'requestInvoicePosition' => 5, 'requestInvoiceDate' => 6, 'requestInvoiceValue' => 7, 'financialDocument' => 8, 'commissionPaymentNumber' => 9, 'compensationNumber' => 10, 'documentId' => 11, 'docPosition' => 12, 'docValue' => 13, 'docDate' => 14, ),
        BasePeer::TYPE_COLNAME => array (QbcSciPaymentDocPeer::ID => 0, QbcSciPaymentDocPeer::PETITION_ID => 1, QbcSciPaymentDocPeer::STATE => 2, QbcSciPaymentDocPeer::DETAIL => 3, QbcSciPaymentDocPeer::REQUEST_INVOICE_NUMBER => 4, QbcSciPaymentDocPeer::REQUEST_INVOICE_POSITION => 5, QbcSciPaymentDocPeer::REQUEST_INVOICE_DATE => 6, QbcSciPaymentDocPeer::REQUEST_INVOICE_VALUE => 7, QbcSciPaymentDocPeer::FINANCIAL_DOCUMENT => 8, QbcSciPaymentDocPeer::COMMISSION_PAYMENT_NUMBER => 9, QbcSciPaymentDocPeer::COMPENSATION_NUMBER => 10, QbcSciPaymentDocPeer::DOCUMENT_ID => 11, QbcSciPaymentDocPeer::DOC_POSITION => 12, QbcSciPaymentDocPeer::DOC_VALUE => 13, QbcSciPaymentDocPeer::DOC_DATE => 14, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'PETITION_ID' => 1, 'STATE' => 2, 'DETAIL' => 3, 'REQUEST_INVOICE_NUMBER' => 4, 'REQUEST_INVOICE_POSITION' => 5, 'REQUEST_INVOICE_DATE' => 6, 'REQUEST_INVOICE_VALUE' => 7, 'FINANCIAL_DOCUMENT' => 8, 'COMMISSION_PAYMENT_NUMBER' => 9, 'COMPENSATION_NUMBER' => 10, 'DOCUMENT_ID' => 11, 'DOC_POSITION' => 12, 'DOC_VALUE' => 13, 'DOC_DATE' => 14, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'petition_id' => 1, 'state' => 2, 'detail' => 3, 'request_invoice_number' => 4, 'request_invoice_position' => 5, 'request_invoice_date' => 6, 'request_invoice_value' => 7, 'financial_document' => 8, 'commission_payment_number' => 9, 'compensation_number' => 10, 'document_id' => 11, 'doc_position' => 12, 'doc_value' => 13, 'doc_date' => 14, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = QbcSciPaymentDocPeer::getFieldNames($toType);
        $key = isset(QbcSciPaymentDocPeer::$fieldKeys[$fromType][$name]) ? QbcSciPaymentDocPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(QbcSciPaymentDocPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, QbcSciPaymentDocPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return QbcSciPaymentDocPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. QbcSciPaymentDocPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(QbcSciPaymentDocPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::ID);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::PETITION_ID);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::STATE);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::DETAIL);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::REQUEST_INVOICE_NUMBER);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::REQUEST_INVOICE_POSITION);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::REQUEST_INVOICE_DATE);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::REQUEST_INVOICE_VALUE);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::FINANCIAL_DOCUMENT);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::COMMISSION_PAYMENT_NUMBER);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::COMPENSATION_NUMBER);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::DOCUMENT_ID);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::DOC_POSITION);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::DOC_VALUE);
            $criteria->addSelectColumn(QbcSciPaymentDocPeer::DOC_DATE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.petition_id');
            $criteria->addSelectColumn($alias . '.state');
            $criteria->addSelectColumn($alias . '.detail');
            $criteria->addSelectColumn($alias . '.request_invoice_number');
            $criteria->addSelectColumn($alias . '.request_invoice_position');
            $criteria->addSelectColumn($alias . '.request_invoice_date');
            $criteria->addSelectColumn($alias . '.request_invoice_value');
            $criteria->addSelectColumn($alias . '.financial_document');
            $criteria->addSelectColumn($alias . '.commission_payment_number');
            $criteria->addSelectColumn($alias . '.compensation_number');
            $criteria->addSelectColumn($alias . '.document_id');
            $criteria->addSelectColumn($alias . '.doc_position');
            $criteria->addSelectColumn($alias . '.doc_value');
            $criteria->addSelectColumn($alias . '.doc_date');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(QbcSciPaymentDocPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            QbcSciPaymentDocPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(QbcSciPaymentDocPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return QbcSciPaymentDoc
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = QbcSciPaymentDocPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return QbcSciPaymentDocPeer::populateObjects(QbcSciPaymentDocPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            QbcSciPaymentDocPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(QbcSciPaymentDocPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param QbcSciPaymentDoc $obj A QbcSciPaymentDoc object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            QbcSciPaymentDocPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A QbcSciPaymentDoc object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof QbcSciPaymentDoc) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or QbcSciPaymentDoc object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(QbcSciPaymentDocPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return QbcSciPaymentDoc Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(QbcSciPaymentDocPeer::$instances[$key])) {
                return QbcSciPaymentDocPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (QbcSciPaymentDocPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        QbcSciPaymentDocPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to qbc_sci_payment_doc
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = QbcSciPaymentDocPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = QbcSciPaymentDocPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = QbcSciPaymentDocPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                QbcSciPaymentDocPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (QbcSciPaymentDoc object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = QbcSciPaymentDocPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = QbcSciPaymentDocPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + QbcSciPaymentDocPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = QbcSciPaymentDocPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            QbcSciPaymentDocPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(QbcSciPaymentDocPeer::DATABASE_NAME)->getTable(QbcSciPaymentDocPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseQbcSciPaymentDocPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseQbcSciPaymentDocPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \QbcSciPaymentDocTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return QbcSciPaymentDocPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a QbcSciPaymentDoc or Criteria object.
     *
     * @param      mixed $values Criteria or QbcSciPaymentDoc object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from QbcSciPaymentDoc object
        }

        if ($criteria->containsKey(QbcSciPaymentDocPeer::ID) && $criteria->keyContainsValue(QbcSciPaymentDocPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.QbcSciPaymentDocPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(QbcSciPaymentDocPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a QbcSciPaymentDoc or Criteria object.
     *
     * @param      mixed $values Criteria or QbcSciPaymentDoc object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(QbcSciPaymentDocPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(QbcSciPaymentDocPeer::ID);
            $value = $criteria->remove(QbcSciPaymentDocPeer::ID);
            if ($value) {
                $selectCriteria->add(QbcSciPaymentDocPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(QbcSciPaymentDocPeer::TABLE_NAME);
            }

        } else { // $values is QbcSciPaymentDoc object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(QbcSciPaymentDocPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the qbc_sci_payment_doc table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(QbcSciPaymentDocPeer::TABLE_NAME, $con, QbcSciPaymentDocPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            QbcSciPaymentDocPeer::clearInstancePool();
            QbcSciPaymentDocPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a QbcSciPaymentDoc or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or QbcSciPaymentDoc object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            QbcSciPaymentDocPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof QbcSciPaymentDoc) { // it's a model object
            // invalidate the cache for this single object
            QbcSciPaymentDocPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(QbcSciPaymentDocPeer::DATABASE_NAME);
            $criteria->add(QbcSciPaymentDocPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                QbcSciPaymentDocPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(QbcSciPaymentDocPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            QbcSciPaymentDocPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given QbcSciPaymentDoc object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param QbcSciPaymentDoc $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(QbcSciPaymentDocPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(QbcSciPaymentDocPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(QbcSciPaymentDocPeer::DATABASE_NAME, QbcSciPaymentDocPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return QbcSciPaymentDoc
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = QbcSciPaymentDocPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(QbcSciPaymentDocPeer::DATABASE_NAME);
        $criteria->add(QbcSciPaymentDocPeer::ID, $pk);

        $v = QbcSciPaymentDocPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return QbcSciPaymentDoc[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(QbcSciPaymentDocPeer::DATABASE_NAME);
            $criteria->add(QbcSciPaymentDocPeer::ID, $pks, Criteria::IN);
            $objs = QbcSciPaymentDocPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseQbcSciPaymentDocPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseQbcSciPaymentDocPeer::buildTableMap();

