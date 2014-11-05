<?php


/**
 * Base class that represents a row from the 'qbc_sci_closure' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseQbcSciClosure extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'QbcSciClosurePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        QbcSciClosurePeer
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
     * The value for the nitaliado field.
     * @var        string
     */
    protected $nitaliado;

    /**
     * The value for the campanaid field.
     * @var        string
     */
    protected $campanaid;

    /**
     * The value for the venta field.
     * @var        string
     */
    protected $venta;

    /**
     * The value for the fechav field.
     * @var        string
     */
    protected $fechav;

    /**
     * The value for the valorv field.
     * @var        string
     */
    protected $valorv;

    /**
     * The value for the devolucion field.
     * @var        string
     */
    protected $devolucion;

    /**
     * The value for the fechad field.
     * @var        string
     */
    protected $fechad;

    /**
     * The value for the valord field.
     * @var        string
     */
    protected $valord;

    /**
     * The value for the pagoaliado field.
     * @var        string
     */
    protected $pagoaliado;

    /**
     * The value for the porcentajecomision field.
     * @var        string
     */
    protected $porcentajecomision;

    /**
     * The value for the porcentajeivacomision field.
     * @var        string
     */
    protected $porcentajeivacomision;

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
     * Get the [nitaliado] column value.
     *
     * @return string
     */
    public function getNitaliado()
    {

        return $this->nitaliado;
    }

    /**
     * Get the [campanaid] column value.
     *
     * @return string
     */
    public function getCampanaid()
    {

        return $this->campanaid;
    }

    /**
     * Get the [venta] column value.
     *
     * @return string
     */
    public function getVenta()
    {

        return $this->venta;
    }

    /**
     * Get the [optionally formatted] temporal [fechav] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechav($format = '%x')
    {
        if ($this->fechav === null) {
            return null;
        }

        if ($this->fechav === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->fechav);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fechav, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [valorv] column value.
     *
     * @return string
     */
    public function getValorv()
    {

        return $this->valorv;
    }

    /**
     * Get the [devolucion] column value.
     *
     * @return string
     */
    public function getDevolucion()
    {

        return $this->devolucion;
    }

    /**
     * Get the [optionally formatted] temporal [fechad] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFechad($format = '%x')
    {
        if ($this->fechad === null) {
            return null;
        }

        if ($this->fechad === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->fechad);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->fechad, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [valord] column value.
     *
     * @return string
     */
    public function getValord()
    {

        return $this->valord;
    }

    /**
     * Get the [pagoaliado] column value.
     *
     * @return string
     */
    public function getPagoaliado()
    {

        return $this->pagoaliado;
    }

    /**
     * Get the [porcentajecomision] column value.
     *
     * @return string
     */
    public function getPorcentajecomision()
    {

        return $this->porcentajecomision;
    }

    /**
     * Get the [porcentajeivacomision] column value.
     *
     * @return string
     */
    public function getPorcentajeivacomision()
    {

        return $this->porcentajeivacomision;
    }

    /**
     * Set the value of [id] column.
     *
     * @param  int $v new value
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = QbcSciClosurePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [nitaliado] column.
     *
     * @param  string $v new value
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setNitaliado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nitaliado !== $v) {
            $this->nitaliado = $v;
            $this->modifiedColumns[] = QbcSciClosurePeer::NITALIADO;
        }


        return $this;
    } // setNitaliado()

    /**
     * Set the value of [campanaid] column.
     *
     * @param  string $v new value
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setCampanaid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->campanaid !== $v) {
            $this->campanaid = $v;
            $this->modifiedColumns[] = QbcSciClosurePeer::CAMPANAID;
        }


        return $this;
    } // setCampanaid()

    /**
     * Set the value of [venta] column.
     *
     * @param  string $v new value
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setVenta($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->venta !== $v) {
            $this->venta = $v;
            $this->modifiedColumns[] = QbcSciClosurePeer::VENTA;
        }


        return $this;
    } // setVenta()

    /**
     * Sets the value of [fechav] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setFechav($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fechav !== null || $dt !== null) {
            $currentDateAsString = ($this->fechav !== null && $tmpDt = new DateTime($this->fechav)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fechav = $newDateAsString;
                $this->modifiedColumns[] = QbcSciClosurePeer::FECHAV;
            }
        } // if either are not null


        return $this;
    } // setFechav()

    /**
     * Set the value of [valorv] column.
     *
     * @param  string $v new value
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setValorv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valorv !== $v) {
            $this->valorv = $v;
            $this->modifiedColumns[] = QbcSciClosurePeer::VALORV;
        }


        return $this;
    } // setValorv()

    /**
     * Set the value of [devolucion] column.
     *
     * @param  string $v new value
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setDevolucion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->devolucion !== $v) {
            $this->devolucion = $v;
            $this->modifiedColumns[] = QbcSciClosurePeer::DEVOLUCION;
        }


        return $this;
    } // setDevolucion()

    /**
     * Sets the value of [fechad] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setFechad($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->fechad !== null || $dt !== null) {
            $currentDateAsString = ($this->fechad !== null && $tmpDt = new DateTime($this->fechad)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->fechad = $newDateAsString;
                $this->modifiedColumns[] = QbcSciClosurePeer::FECHAD;
            }
        } // if either are not null


        return $this;
    } // setFechad()

    /**
     * Set the value of [valord] column.
     *
     * @param  string $v new value
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setValord($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->valord !== $v) {
            $this->valord = $v;
            $this->modifiedColumns[] = QbcSciClosurePeer::VALORD;
        }


        return $this;
    } // setValord()

    /**
     * Set the value of [pagoaliado] column.
     *
     * @param  string $v new value
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setPagoaliado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pagoaliado !== $v) {
            $this->pagoaliado = $v;
            $this->modifiedColumns[] = QbcSciClosurePeer::PAGOALIADO;
        }


        return $this;
    } // setPagoaliado()

    /**
     * Set the value of [porcentajecomision] column.
     *
     * @param  string $v new value
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setPorcentajecomision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->porcentajecomision !== $v) {
            $this->porcentajecomision = $v;
            $this->modifiedColumns[] = QbcSciClosurePeer::PORCENTAJECOMISION;
        }


        return $this;
    } // setPorcentajecomision()

    /**
     * Set the value of [porcentajeivacomision] column.
     *
     * @param  string $v new value
     * @return QbcSciClosure The current object (for fluent API support)
     */
    public function setPorcentajeivacomision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->porcentajeivacomision !== $v) {
            $this->porcentajeivacomision = $v;
            $this->modifiedColumns[] = QbcSciClosurePeer::PORCENTAJEIVACOMISION;
        }


        return $this;
    } // setPorcentajeivacomision()

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
            $this->nitaliado = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->campanaid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->venta = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->fechav = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->valorv = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->devolucion = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->fechad = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->valord = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->pagoaliado = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->porcentajecomision = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->porcentajeivacomision = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = QbcSciClosurePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating QbcSciClosure object", $e);
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
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = QbcSciClosurePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = QbcSciClosureQuery::create()
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
            $con = Propel::getConnection(QbcSciClosurePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                QbcSciClosurePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = QbcSciClosurePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . QbcSciClosurePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(QbcSciClosurePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = 'Id';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::NITALIADO)) {
            $modifiedColumns[':p' . $index++]  = 'NitAliado';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::CAMPANAID)) {
            $modifiedColumns[':p' . $index++]  = 'CampanaId';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::VENTA)) {
            $modifiedColumns[':p' . $index++]  = 'Venta';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::FECHAV)) {
            $modifiedColumns[':p' . $index++]  = 'FechaV';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::VALORV)) {
            $modifiedColumns[':p' . $index++]  = 'ValorV';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::DEVOLUCION)) {
            $modifiedColumns[':p' . $index++]  = 'Devolucion';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::FECHAD)) {
            $modifiedColumns[':p' . $index++]  = 'FechaD';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::VALORD)) {
            $modifiedColumns[':p' . $index++]  = 'ValorD';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::PAGOALIADO)) {
            $modifiedColumns[':p' . $index++]  = 'PagoAliado';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::PORCENTAJECOMISION)) {
            $modifiedColumns[':p' . $index++]  = 'PorcentajeComision';
        }
        if ($this->isColumnModified(QbcSciClosurePeer::PORCENTAJEIVACOMISION)) {
            $modifiedColumns[':p' . $index++]  = 'PorcentajeIVAComision';
        }

        $sql = sprintf(
            'INSERT INTO qbc_sci_closure (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'Id':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case 'NitAliado':
                        $stmt->bindValue($identifier, $this->nitaliado, PDO::PARAM_STR);
                        break;
                    case 'CampanaId':
                        $stmt->bindValue($identifier, $this->campanaid, PDO::PARAM_STR);
                        break;
                    case 'Venta':
                        $stmt->bindValue($identifier, $this->venta, PDO::PARAM_STR);
                        break;
                    case 'FechaV':
                        $stmt->bindValue($identifier, $this->fechav, PDO::PARAM_STR);
                        break;
                    case 'ValorV':
                        $stmt->bindValue($identifier, $this->valorv, PDO::PARAM_STR);
                        break;
                    case 'Devolucion':
                        $stmt->bindValue($identifier, $this->devolucion, PDO::PARAM_STR);
                        break;
                    case 'FechaD':
                        $stmt->bindValue($identifier, $this->fechad, PDO::PARAM_STR);
                        break;
                    case 'ValorD':
                        $stmt->bindValue($identifier, $this->valord, PDO::PARAM_STR);
                        break;
                    case 'PagoAliado':
                        $stmt->bindValue($identifier, $this->pagoaliado, PDO::PARAM_STR);
                        break;
                    case 'PorcentajeComision':
                        $stmt->bindValue($identifier, $this->porcentajecomision, PDO::PARAM_STR);
                        break;
                    case 'PorcentajeIVAComision':
                        $stmt->bindValue($identifier, $this->porcentajeivacomision, PDO::PARAM_STR);
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


            if (($retval = QbcSciClosurePeer::doValidate($this, $columns)) !== true) {
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
        $pos = QbcSciClosurePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNitaliado();
                break;
            case 2:
                return $this->getCampanaid();
                break;
            case 3:
                return $this->getVenta();
                break;
            case 4:
                return $this->getFechav();
                break;
            case 5:
                return $this->getValorv();
                break;
            case 6:
                return $this->getDevolucion();
                break;
            case 7:
                return $this->getFechad();
                break;
            case 8:
                return $this->getValord();
                break;
            case 9:
                return $this->getPagoaliado();
                break;
            case 10:
                return $this->getPorcentajecomision();
                break;
            case 11:
                return $this->getPorcentajeivacomision();
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
        if (isset($alreadyDumpedObjects['QbcSciClosure'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['QbcSciClosure'][$this->getPrimaryKey()] = true;
        $keys = QbcSciClosurePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNitaliado(),
            $keys[2] => $this->getCampanaid(),
            $keys[3] => $this->getVenta(),
            $keys[4] => $this->getFechav(),
            $keys[5] => $this->getValorv(),
            $keys[6] => $this->getDevolucion(),
            $keys[7] => $this->getFechad(),
            $keys[8] => $this->getValord(),
            $keys[9] => $this->getPagoaliado(),
            $keys[10] => $this->getPorcentajecomision(),
            $keys[11] => $this->getPorcentajeivacomision(),
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
        $pos = QbcSciClosurePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNitaliado($value);
                break;
            case 2:
                $this->setCampanaid($value);
                break;
            case 3:
                $this->setVenta($value);
                break;
            case 4:
                $this->setFechav($value);
                break;
            case 5:
                $this->setValorv($value);
                break;
            case 6:
                $this->setDevolucion($value);
                break;
            case 7:
                $this->setFechad($value);
                break;
            case 8:
                $this->setValord($value);
                break;
            case 9:
                $this->setPagoaliado($value);
                break;
            case 10:
                $this->setPorcentajecomision($value);
                break;
            case 11:
                $this->setPorcentajeivacomision($value);
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
        $keys = QbcSciClosurePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNitaliado($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCampanaid($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setVenta($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setFechav($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setValorv($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDevolucion($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setFechad($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setValord($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setPagoaliado($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPorcentajecomision($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setPorcentajeivacomision($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(QbcSciClosurePeer::DATABASE_NAME);

        if ($this->isColumnModified(QbcSciClosurePeer::ID)) $criteria->add(QbcSciClosurePeer::ID, $this->id);
        if ($this->isColumnModified(QbcSciClosurePeer::NITALIADO)) $criteria->add(QbcSciClosurePeer::NITALIADO, $this->nitaliado);
        if ($this->isColumnModified(QbcSciClosurePeer::CAMPANAID)) $criteria->add(QbcSciClosurePeer::CAMPANAID, $this->campanaid);
        if ($this->isColumnModified(QbcSciClosurePeer::VENTA)) $criteria->add(QbcSciClosurePeer::VENTA, $this->venta);
        if ($this->isColumnModified(QbcSciClosurePeer::FECHAV)) $criteria->add(QbcSciClosurePeer::FECHAV, $this->fechav);
        if ($this->isColumnModified(QbcSciClosurePeer::VALORV)) $criteria->add(QbcSciClosurePeer::VALORV, $this->valorv);
        if ($this->isColumnModified(QbcSciClosurePeer::DEVOLUCION)) $criteria->add(QbcSciClosurePeer::DEVOLUCION, $this->devolucion);
        if ($this->isColumnModified(QbcSciClosurePeer::FECHAD)) $criteria->add(QbcSciClosurePeer::FECHAD, $this->fechad);
        if ($this->isColumnModified(QbcSciClosurePeer::VALORD)) $criteria->add(QbcSciClosurePeer::VALORD, $this->valord);
        if ($this->isColumnModified(QbcSciClosurePeer::PAGOALIADO)) $criteria->add(QbcSciClosurePeer::PAGOALIADO, $this->pagoaliado);
        if ($this->isColumnModified(QbcSciClosurePeer::PORCENTAJECOMISION)) $criteria->add(QbcSciClosurePeer::PORCENTAJECOMISION, $this->porcentajecomision);
        if ($this->isColumnModified(QbcSciClosurePeer::PORCENTAJEIVACOMISION)) $criteria->add(QbcSciClosurePeer::PORCENTAJEIVACOMISION, $this->porcentajeivacomision);

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
        $criteria = new Criteria(QbcSciClosurePeer::DATABASE_NAME);
        $criteria->add(QbcSciClosurePeer::ID, $this->id);

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
     * @param object $copyObj An object of QbcSciClosure (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNitaliado($this->getNitaliado());
        $copyObj->setCampanaid($this->getCampanaid());
        $copyObj->setVenta($this->getVenta());
        $copyObj->setFechav($this->getFechav());
        $copyObj->setValorv($this->getValorv());
        $copyObj->setDevolucion($this->getDevolucion());
        $copyObj->setFechad($this->getFechad());
        $copyObj->setValord($this->getValord());
        $copyObj->setPagoaliado($this->getPagoaliado());
        $copyObj->setPorcentajecomision($this->getPorcentajecomision());
        $copyObj->setPorcentajeivacomision($this->getPorcentajeivacomision());
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
     * @return QbcSciClosure Clone of current object.
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
     * @return QbcSciClosurePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new QbcSciClosurePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nitaliado = null;
        $this->campanaid = null;
        $this->venta = null;
        $this->fechav = null;
        $this->valorv = null;
        $this->devolucion = null;
        $this->fechad = null;
        $this->valord = null;
        $this->pagoaliado = null;
        $this->porcentajecomision = null;
        $this->porcentajeivacomision = null;
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
        return (string) $this->exportTo(QbcSciClosurePeer::DEFAULT_STRING_FORMAT);
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
