<?php


/**
 * Base class that represents a row from the 'qbc_sci_payment_doc' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciPaymentDoc extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'QbcSciPaymentDocPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        QbcSciPaymentDocPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the petition_id field.
     * @var        string
     */
    protected $petition_id;

    /**
     * The value for the state field.
     * @var        string
     */
    protected $state;

    /**
     * The value for the detail field.
     * @var        string
     */
    protected $detail;

    /**
     * The value for the request_invoice_number field.
     * @var        string
     */
    protected $request_invoice_number;

    /**
     * The value for the request_invoice_position field.
     * @var        int
     */
    protected $request_invoice_position;

    /**
     * The value for the request_invoice_date field.
     * @var        string
     */
    protected $request_invoice_date;

    /**
     * The value for the request_invoice_value field.
     * @var        string
     */
    protected $request_invoice_value;

    /**
     * The value for the financial_document field.
     * @var        string
     */
    protected $financial_document;

    /**
     * The value for the commission_payment_number field.
     * @var        string
     */
    protected $commission_payment_number;

    /**
     * The value for the compensation_number field.
     * @var        string
     */
    protected $compensation_number;

    /**
     * The value for the document_id field.
     * @var        string
     */
    protected $document_id;

    /**
     * The value for the doc_position field.
     * @var        int
     */
    protected $doc_position;

    /**
     * The value for the doc_value field.
     * @var        string
     */
    protected $doc_value;

    /**
     * The value for the doc_date field.
     * @var        string
     */
    protected $doc_date;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [petition_id] column value.
     *
     * @return string
     */
    public function getPetitionId()
    {

        return $this->petition_id;
    }

    /**
     * Get the [state] column value.
     *
     * @return string
     */
    public function getState()
    {

        return $this->state;
    }

    /**
     * Get the [detail] column value.
     *
     * @return string
     */
    public function getDetail()
    {

        return $this->detail;
    }

    /**
     * Get the [request_invoice_number] column value.
     *
     * @return string
     */
    public function getRequestInvoiceNumber()
    {

        return $this->request_invoice_number;
    }

    /**
     * Get the [request_invoice_position] column value.
     *
     * @return int
     */
    public function getRequestInvoicePosition()
    {

        return $this->request_invoice_position;
    }

    /**
     * Get the [request_invoice_date] column value.
     *
     * @return string
     */
    public function getRequestInvoiceDate()
    {

        return $this->request_invoice_date;
    }

    /**
     * Get the [request_invoice_value] column value.
     *
     * @return string
     */
    public function getRequestInvoiceValue()
    {

        return $this->request_invoice_value;
    }

    /**
     * Get the [financial_document] column value.
     *
     * @return string
     */
    public function getFinancialDocument()
    {

        return $this->financial_document;
    }

    /**
     * Get the [commission_payment_number] column value.
     *
     * @return string
     */
    public function getCommissionPaymentNumber()
    {

        return $this->commission_payment_number;
    }

    /**
     * Get the [compensation_number] column value.
     *
     * @return string
     */
    public function getCompensationNumber()
    {

        return $this->compensation_number;
    }

    /**
     * Get the [document_id] column value.
     *
     * @return string
     */
    public function getDocumentId()
    {

        return $this->document_id;
    }

    /**
     * Get the [doc_position] column value.
     *
     * @return int
     */
    public function getDocPosition()
    {

        return $this->doc_position;
    }

    /**
     * Get the [doc_value] column value.
     *
     * @return string
     */
    public function getDocValue()
    {

        return $this->doc_value;
    }

    /**
     * Get the [doc_date] column value.
     *
     * @return string
     */
    public function getDocDate()
    {

        return $this->doc_date;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [petition_id] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setPetitionId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->petition_id !== $v) {
            $this->petition_id = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::PETITION_ID;
        }


        return $this;
    } // setPetitionId()

    /**
     * Set the value of [state] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setState($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->state !== $v) {
            $this->state = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::STATE;
        }


        return $this;
    } // setState()

    /**
     * Set the value of [detail] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setDetail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->detail !== $v) {
            $this->detail = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::DETAIL;
        }


        return $this;
    } // setDetail()

    /**
     * Set the value of [request_invoice_number] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setRequestInvoiceNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->request_invoice_number !== $v) {
            $this->request_invoice_number = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::REQUEST_INVOICE_NUMBER;
        }


        return $this;
    } // setRequestInvoiceNumber()

    /**
     * Set the value of [request_invoice_position] column.
     *
     * @param  int $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setRequestInvoicePosition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->request_invoice_position !== $v) {
            $this->request_invoice_position = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::REQUEST_INVOICE_POSITION;
        }


        return $this;
    } // setRequestInvoicePosition()

    /**
     * Set the value of [request_invoice_date] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setRequestInvoiceDate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->request_invoice_date !== $v) {
            $this->request_invoice_date = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::REQUEST_INVOICE_DATE;
        }


        return $this;
    } // setRequestInvoiceDate()

    /**
     * Set the value of [request_invoice_value] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setRequestInvoiceValue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->request_invoice_value !== $v) {
            $this->request_invoice_value = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::REQUEST_INVOICE_VALUE;
        }


        return $this;
    } // setRequestInvoiceValue()

    /**
     * Set the value of [financial_document] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setFinancialDocument($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->financial_document !== $v) {
            $this->financial_document = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::FINANCIAL_DOCUMENT;
        }


        return $this;
    } // setFinancialDocument()

    /**
     * Set the value of [commission_payment_number] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setCommissionPaymentNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commission_payment_number !== $v) {
            $this->commission_payment_number = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::COMMISSION_PAYMENT_NUMBER;
        }


        return $this;
    } // setCommissionPaymentNumber()

    /**
     * Set the value of [compensation_number] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setCompensationNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compensation_number !== $v) {
            $this->compensation_number = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::COMPENSATION_NUMBER;
        }


        return $this;
    } // setCompensationNumber()

    /**
     * Set the value of [document_id] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setDocumentId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->document_id !== $v) {
            $this->document_id = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::DOCUMENT_ID;
        }


        return $this;
    } // setDocumentId()

    /**
     * Set the value of [doc_position] column.
     *
     * @param  int $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setDocPosition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->doc_position !== $v) {
            $this->doc_position = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::DOC_POSITION;
        }


        return $this;
    } // setDocPosition()

    /**
     * Set the value of [doc_value] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setDocValue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->doc_value !== $v) {
            $this->doc_value = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::DOC_VALUE;
        }


        return $this;
    } // setDocValue()

    /**
     * Set the value of [doc_date] column.
     *
     * @param  string $v new value
     * @return QbcSciPaymentDoc The current object (for fluent API support)
     */
    public function setDocDate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->doc_date !== $v) {
            $this->doc_date = $v;
            $this->modifiedColumns[] = QbcSciPaymentDocPeer::DOC_DATE;
        }


        return $this;
    } // setDocDate()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->petition_id = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->state = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->detail = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->request_invoice_number = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->request_invoice_position = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->request_invoice_date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->request_invoice_value = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->financial_document = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->commission_payment_number = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->compensation_number = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->document_id = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->doc_position = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->doc_value = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->doc_date = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = QbcSciPaymentDocPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating QbcSciPaymentDoc object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = QbcSciPaymentDocPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = QbcSciPaymentDocQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(QbcSciPaymentDocPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                QbcSciPaymentDocPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = QbcSciPaymentDocPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . QbcSciPaymentDocPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(QbcSciPaymentDocPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = 'id';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::PETITION_ID)) {
            $modifiedColumns[':p' . $index++]  = 'petition_id';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::STATE)) {
            $modifiedColumns[':p' . $index++]  = 'state';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::DETAIL)) {
            $modifiedColumns[':p' . $index++]  = 'detail';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::REQUEST_INVOICE_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'request_invoice_number';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::REQUEST_INVOICE_POSITION)) {
            $modifiedColumns[':p' . $index++]  = 'request_invoice_position';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::REQUEST_INVOICE_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'request_invoice_date';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::REQUEST_INVOICE_VALUE)) {
            $modifiedColumns[':p' . $index++]  = 'request_invoice_value';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::FINANCIAL_DOCUMENT)) {
            $modifiedColumns[':p' . $index++]  = 'financial_document';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::COMMISSION_PAYMENT_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'commission_payment_number';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::COMPENSATION_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'compensation_number';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::DOCUMENT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'document_id';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::DOC_POSITION)) {
            $modifiedColumns[':p' . $index++]  = 'doc_position';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::DOC_VALUE)) {
            $modifiedColumns[':p' . $index++]  = 'doc_value';
        }
        if ($this->isColumnModified(QbcSciPaymentDocPeer::DOC_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'doc_date';
        }

        $sql = sprintf(
            'INSERT INTO qbc_sci_payment_doc (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'petition_id':
                        $stmt->bindValue($identifier, $this->petition_id, PDO::PARAM_STR);
                        break;
                    case 'state':
                        $stmt->bindValue($identifier, $this->state, PDO::PARAM_STR);
                        break;
                    case 'detail':
                        $stmt->bindValue($identifier, $this->detail, PDO::PARAM_STR);
                        break;
                    case 'request_invoice_number':
                        $stmt->bindValue($identifier, $this->request_invoice_number, PDO::PARAM_STR);
                        break;
                    case 'request_invoice_position':
                        $stmt->bindValue($identifier, $this->request_invoice_position, PDO::PARAM_INT);
                        break;
                    case 'request_invoice_date':
                        $stmt->bindValue($identifier, $this->request_invoice_date, PDO::PARAM_STR);
                        break;
                    case 'request_invoice_value':
                        $stmt->bindValue($identifier, $this->request_invoice_value, PDO::PARAM_STR);
                        break;
                    case 'financial_document':
                        $stmt->bindValue($identifier, $this->financial_document, PDO::PARAM_STR);
                        break;
                    case 'commission_payment_number':
                        $stmt->bindValue($identifier, $this->commission_payment_number, PDO::PARAM_STR);
                        break;
                    case 'compensation_number':
                        $stmt->bindValue($identifier, $this->compensation_number, PDO::PARAM_STR);
                        break;
                    case 'document_id':
                        $stmt->bindValue($identifier, $this->document_id, PDO::PARAM_STR);
                        break;
                    case 'doc_position':
                        $stmt->bindValue($identifier, $this->doc_position, PDO::PARAM_INT);
                        break;
                    case 'doc_value':
                        $stmt->bindValue($identifier, $this->doc_value, PDO::PARAM_STR);
                        break;
                    case 'doc_date':
                        $stmt->bindValue($identifier, $this->doc_date, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = QbcSciPaymentDocPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = QbcSciPaymentDocPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getPetitionId();
                break;
            case 2:
                return $this->getState();
                break;
            case 3:
                return $this->getDetail();
                break;
            case 4:
                return $this->getRequestInvoiceNumber();
                break;
            case 5:
                return $this->getRequestInvoicePosition();
                break;
            case 6:
                return $this->getRequestInvoiceDate();
                break;
            case 7:
                return $this->getRequestInvoiceValue();
                break;
            case 8:
                return $this->getFinancialDocument();
                break;
            case 9:
                return $this->getCommissionPaymentNumber();
                break;
            case 10:
                return $this->getCompensationNumber();
                break;
            case 11:
                return $this->getDocumentId();
                break;
            case 12:
                return $this->getDocPosition();
                break;
            case 13:
                return $this->getDocValue();
                break;
            case 14:
                return $this->getDocDate();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['QbcSciPaymentDoc'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QbcSciPaymentDoc'][$this->getPrimaryKey()] = true;
        $keys = QbcSciPaymentDocPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getPetitionId(),
            $keys[2] => $this->getState(),
            $keys[3] => $this->getDetail(),
            $keys[4] => $this->getRequestInvoiceNumber(),
            $keys[5] => $this->getRequestInvoicePosition(),
            $keys[6] => $this->getRequestInvoiceDate(),
            $keys[7] => $this->getRequestInvoiceValue(),
            $keys[8] => $this->getFinancialDocument(),
            $keys[9] => $this->getCommissionPaymentNumber(),
            $keys[10] => $this->getCompensationNumber(),
            $keys[11] => $this->getDocumentId(),
            $keys[12] => $this->getDocPosition(),
            $keys[13] => $this->getDocValue(),
            $keys[14] => $this->getDocDate(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }


        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = QbcSciPaymentDocPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setPetitionId($value);
                break;
            case 2:
                $this->setState($value);
                break;
            case 3:
                $this->setDetail($value);
                break;
            case 4:
                $this->setRequestInvoiceNumber($value);
                break;
            case 5:
                $this->setRequestInvoicePosition($value);
                break;
            case 6:
                $this->setRequestInvoiceDate($value);
                break;
            case 7:
                $this->setRequestInvoiceValue($value);
                break;
            case 8:
                $this->setFinancialDocument($value);
                break;
            case 9:
                $this->setCommissionPaymentNumber($value);
                break;
            case 10:
                $this->setCompensationNumber($value);
                break;
            case 11:
                $this->setDocumentId($value);
                break;
            case 12:
                $this->setDocPosition($value);
                break;
            case 13:
                $this->setDocValue($value);
                break;
            case 14:
                $this->setDocDate($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = QbcSciPaymentDocPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPetitionId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setState($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDetail($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRequestInvoiceNumber($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setRequestInvoicePosition($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRequestInvoiceDate($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setRequestInvoiceValue($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFinancialDocument($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCommissionPaymentNumber($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCompensationNumber($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDocumentId($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDocPosition($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDocValue($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDocDate($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(QbcSciPaymentDocPeer::DATABASE_NAME);

        if ($this->isColumnModified(QbcSciPaymentDocPeer::ID)) $criteria->add(QbcSciPaymentDocPeer::ID, $this->id);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::PETITION_ID)) $criteria->add(QbcSciPaymentDocPeer::PETITION_ID, $this->petition_id);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::STATE)) $criteria->add(QbcSciPaymentDocPeer::STATE, $this->state);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::DETAIL)) $criteria->add(QbcSciPaymentDocPeer::DETAIL, $this->detail);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::REQUEST_INVOICE_NUMBER)) $criteria->add(QbcSciPaymentDocPeer::REQUEST_INVOICE_NUMBER, $this->request_invoice_number);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::REQUEST_INVOICE_POSITION)) $criteria->add(QbcSciPaymentDocPeer::REQUEST_INVOICE_POSITION, $this->request_invoice_position);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::REQUEST_INVOICE_DATE)) $criteria->add(QbcSciPaymentDocPeer::REQUEST_INVOICE_DATE, $this->request_invoice_date);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::REQUEST_INVOICE_VALUE)) $criteria->add(QbcSciPaymentDocPeer::REQUEST_INVOICE_VALUE, $this->request_invoice_value);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::FINANCIAL_DOCUMENT)) $criteria->add(QbcSciPaymentDocPeer::FINANCIAL_DOCUMENT, $this->financial_document);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::COMMISSION_PAYMENT_NUMBER)) $criteria->add(QbcSciPaymentDocPeer::COMMISSION_PAYMENT_NUMBER, $this->commission_payment_number);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::COMPENSATION_NUMBER)) $criteria->add(QbcSciPaymentDocPeer::COMPENSATION_NUMBER, $this->compensation_number);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::DOCUMENT_ID)) $criteria->add(QbcSciPaymentDocPeer::DOCUMENT_ID, $this->document_id);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::DOC_POSITION)) $criteria->add(QbcSciPaymentDocPeer::DOC_POSITION, $this->doc_position);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::DOC_VALUE)) $criteria->add(QbcSciPaymentDocPeer::DOC_VALUE, $this->doc_value);
        if ($this->isColumnModified(QbcSciPaymentDocPeer::DOC_DATE)) $criteria->add(QbcSciPaymentDocPeer::DOC_DATE, $this->doc_date);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(QbcSciPaymentDocPeer::DATABASE_NAME);
        $criteria->add(QbcSciPaymentDocPeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of QbcSciPaymentDoc (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPetitionId($this->getPetitionId());
        $copyObj->setState($this->getState());
        $copyObj->setDetail($this->getDetail());
        $copyObj->setRequestInvoiceNumber($this->getRequestInvoiceNumber());
        $copyObj->setRequestInvoicePosition($this->getRequestInvoicePosition());
        $copyObj->setRequestInvoiceDate($this->getRequestInvoiceDate());
        $copyObj->setRequestInvoiceValue($this->getRequestInvoiceValue());
        $copyObj->setFinancialDocument($this->getFinancialDocument());
        $copyObj->setCommissionPaymentNumber($this->getCommissionPaymentNumber());
        $copyObj->setCompensationNumber($this->getCompensationNumber());
        $copyObj->setDocumentId($this->getDocumentId());
        $copyObj->setDocPosition($this->getDocPosition());
        $copyObj->setDocValue($this->getDocValue());
        $copyObj->setDocDate($this->getDocDate());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return QbcSciPaymentDoc Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return QbcSciPaymentDocPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new QbcSciPaymentDocPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->petition_id = null;
        $this->state = null;
        $this->detail = null;
        $this->request_invoice_number = null;
        $this->request_invoice_position = null;
        $this->request_invoice_date = null;
        $this->request_invoice_value = null;
        $this->financial_document = null;
        $this->commission_payment_number = null;
        $this->compensation_number = null;
        $this->document_id = null;
        $this->doc_position = null;
        $this->doc_value = null;
        $this->doc_date = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(QbcSciPaymentDocPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
