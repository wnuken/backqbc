<?php


/**
 * Base class that represents a row from the 'admin_user' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseAdminUser extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AdminUserPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AdminUserPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the firstname field.
     * @var        string
     */
    protected $firstname;

    /**
     * The value for the lastname field.
     * @var        string
     */
    protected $lastname;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the username field.
     * @var        string
     */
    protected $username;

    /**
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * The value for the created field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $created;

    /**
     * The value for the modified field.
     * @var        string
     */
    protected $modified;

    /**
     * The value for the logdate field.
     * @var        string
     */
    protected $logdate;

    /**
     * The value for the lognum field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lognum;

    /**
     * The value for the reload_acl_flag field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $reload_acl_flag;

    /**
     * The value for the is_active field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $is_active;

    /**
     * The value for the extra field.
     * @var        string
     */
    protected $extra;

    /**
     * The value for the rp_token field.
     * @var        string
     */
    protected $rp_token;

    /**
     * The value for the rp_token_created_at field.
     * @var        string
     */
    protected $rp_token_created_at;

    /**
     * The value for the failures_num field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $failures_num;

    /**
     * The value for the first_failure field.
     * @var        string
     */
    protected $first_failure;

    /**
     * The value for the lock_expires field.
     * @var        string
     */
    protected $lock_expires;

    /**
     * The value for the movil field.
     * @var        string
     */
    protected $movil;

    /**
     * The value for the id_employee field.
     * @var        string
     */
    protected $id_employee;

    /**
     * The value for the position field.
     * @var        string
     */
    protected $position;

    /**
     * The value for the merchant_id field.
     * @var        int
     */
    protected $merchant_id;

    /**
     * The value for the dob field.
     * @var        string
     */
    protected $dob;

    /**
     * The value for the phone field.
     * @var        string
     */
    protected $phone;

    /**
     * The value for the workmovil field.
     * @var        string
     */
    protected $workmovil;

    /**
     * The value for the pos_id field.
     * @var        int
     */
    protected $pos_id;

    /**
     * @var        GroupdealsMerchants
     */
    protected $aGroupdealsMerchants;

    /**
     * @var        QbcPos
     */
    protected $aQbcPos;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->created = NULL;
        $this->lognum = 0;
        $this->reload_acl_flag = 0;
        $this->is_active = 1;
        $this->failures_num = 0;
    }

    /**
     * Initializes internal state of BaseAdminUser object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [user_id] column value.
     *
     * @return int
     */
    public function getUserId()
    {

        return $this->user_id;
    }

    /**
     * Get the [firstname] column value.
     *
     * @return string
     */
    public function getFirstname()
    {

        return $this->firstname;
    }

    /**
     * Get the [lastname] column value.
     *
     * @return string
     */
    public function getLastname()
    {

        return $this->lastname;
    }

    /**
     * Get the [email] column value.
     *
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [username] column value.
     *
     * @return string
     */
    public function getUsername()
    {

        return $this->username;
    }

    /**
     * Get the [password] column value.
     *
     * @return string
     */
    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Get the [optionally formatted] temporal [created] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreated($format = 'Y-m-d H:i:s')
    {
        if ($this->created === null) {
            return null;
        }

        if ($this->created === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created, true), $x);
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
     * Get the [optionally formatted] temporal [modified] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getModified($format = 'Y-m-d H:i:s')
    {
        if ($this->modified === null) {
            return null;
        }

        if ($this->modified === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->modified);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->modified, true), $x);
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
     * Get the [optionally formatted] temporal [logdate] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLogdate($format = 'Y-m-d H:i:s')
    {
        if ($this->logdate === null) {
            return null;
        }

        if ($this->logdate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->logdate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->logdate, true), $x);
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
     * Get the [lognum] column value.
     *
     * @return int
     */
    public function getLognum()
    {

        return $this->lognum;
    }

    /**
     * Get the [reload_acl_flag] column value.
     *
     * @return int
     */
    public function getReloadAclFlag()
    {

        return $this->reload_acl_flag;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return int
     */
    public function getIsActive()
    {

        return $this->is_active;
    }

    /**
     * Get the [extra] column value.
     *
     * @return string
     */
    public function getExtra()
    {

        return $this->extra;
    }

    /**
     * Get the [rp_token] column value.
     *
     * @return string
     */
    public function getRpToken()
    {

        return $this->rp_token;
    }

    /**
     * Get the [optionally formatted] temporal [rp_token_created_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getRpTokenCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->rp_token_created_at === null) {
            return null;
        }

        if ($this->rp_token_created_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->rp_token_created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->rp_token_created_at, true), $x);
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
     * Get the [failures_num] column value.
     *
     * @return int
     */
    public function getFailuresNum()
    {

        return $this->failures_num;
    }

    /**
     * Get the [optionally formatted] temporal [first_failure] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getFirstFailure($format = 'Y-m-d H:i:s')
    {
        if ($this->first_failure === null) {
            return null;
        }

        if ($this->first_failure === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->first_failure);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->first_failure, true), $x);
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
     * Get the [optionally formatted] temporal [lock_expires] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getLockExpires($format = 'Y-m-d H:i:s')
    {
        if ($this->lock_expires === null) {
            return null;
        }

        if ($this->lock_expires === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->lock_expires);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->lock_expires, true), $x);
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
     * Get the [movil] column value.
     *
     * @return string
     */
    public function getMovil()
    {

        return $this->movil;
    }

    /**
     * Get the [id_employee] column value.
     *
     * @return string
     */
    public function getIdEmployee()
    {

        return $this->id_employee;
    }

    /**
     * Get the [position] column value.
     *
     * @return string
     */
    public function getPosition()
    {

        return $this->position;
    }

    /**
     * Get the [merchant_id] column value.
     *
     * @return int
     */
    public function getMerchantId()
    {

        return $this->merchant_id;
    }

    /**
     * Get the [dob] column value.
     *
     * @return string
     */
    public function getDob()
    {

        return $this->dob;
    }

    /**
     * Get the [phone] column value.
     *
     * @return string
     */
    public function getPhone()
    {

        return $this->phone;
    }

    /**
     * Get the [workmovil] column value.
     *
     * @return string
     */
    public function getWorkmovil()
    {

        return $this->workmovil;
    }

    /**
     * Get the [pos_id] column value.
     *
     * @return int
     */
    public function getPosId()
    {

        return $this->pos_id;
    }

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[] = AdminUserPeer::USER_ID;
        }


        return $this;
    } // setUserId()

    /**
     * Set the value of [firstname] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setFirstname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->firstname !== $v) {
            $this->firstname = $v;
            $this->modifiedColumns[] = AdminUserPeer::FIRSTNAME;
        }


        return $this;
    } // setFirstname()

    /**
     * Set the value of [lastname] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setLastname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lastname !== $v) {
            $this->lastname = $v;
            $this->modifiedColumns[] = AdminUserPeer::LASTNAME;
        }


        return $this;
    } // setLastname()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = AdminUserPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [username] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setUsername($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->username !== $v) {
            $this->username = $v;
            $this->modifiedColumns[] = AdminUserPeer::USERNAME;
        }


        return $this;
    } // setUsername()

    /**
     * Set the value of [password] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = AdminUserPeer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Sets the value of [created] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return AdminUser The current object (for fluent API support)
     */
    public function setCreated($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created !== null || $dt !== null) {
            $currentDateAsString = ($this->created !== null && $tmpDt = new DateTime($this->created)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->created = $newDateAsString;
                $this->modifiedColumns[] = AdminUserPeer::CREATED;
            }
        } // if either are not null


        return $this;
    } // setCreated()

    /**
     * Sets the value of [modified] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return AdminUser The current object (for fluent API support)
     */
    public function setModified($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->modified !== null || $dt !== null) {
            $currentDateAsString = ($this->modified !== null && $tmpDt = new DateTime($this->modified)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->modified = $newDateAsString;
                $this->modifiedColumns[] = AdminUserPeer::MODIFIED;
            }
        } // if either are not null


        return $this;
    } // setModified()

    /**
     * Sets the value of [logdate] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return AdminUser The current object (for fluent API support)
     */
    public function setLogdate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->logdate !== null || $dt !== null) {
            $currentDateAsString = ($this->logdate !== null && $tmpDt = new DateTime($this->logdate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->logdate = $newDateAsString;
                $this->modifiedColumns[] = AdminUserPeer::LOGDATE;
            }
        } // if either are not null


        return $this;
    } // setLogdate()

    /**
     * Set the value of [lognum] column.
     *
     * @param  int $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setLognum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lognum !== $v) {
            $this->lognum = $v;
            $this->modifiedColumns[] = AdminUserPeer::LOGNUM;
        }


        return $this;
    } // setLognum()

    /**
     * Set the value of [reload_acl_flag] column.
     *
     * @param  int $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setReloadAclFlag($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reload_acl_flag !== $v) {
            $this->reload_acl_flag = $v;
            $this->modifiedColumns[] = AdminUserPeer::RELOAD_ACL_FLAG;
        }


        return $this;
    } // setReloadAclFlag()

    /**
     * Set the value of [is_active] column.
     *
     * @param  int $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setIsActive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_active !== $v) {
            $this->is_active = $v;
            $this->modifiedColumns[] = AdminUserPeer::IS_ACTIVE;
        }


        return $this;
    } // setIsActive()

    /**
     * Set the value of [extra] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setExtra($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->extra !== $v) {
            $this->extra = $v;
            $this->modifiedColumns[] = AdminUserPeer::EXTRA;
        }


        return $this;
    } // setExtra()

    /**
     * Set the value of [rp_token] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setRpToken($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rp_token !== $v) {
            $this->rp_token = $v;
            $this->modifiedColumns[] = AdminUserPeer::RP_TOKEN;
        }


        return $this;
    } // setRpToken()

    /**
     * Sets the value of [rp_token_created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return AdminUser The current object (for fluent API support)
     */
    public function setRpTokenCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->rp_token_created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->rp_token_created_at !== null && $tmpDt = new DateTime($this->rp_token_created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->rp_token_created_at = $newDateAsString;
                $this->modifiedColumns[] = AdminUserPeer::RP_TOKEN_CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setRpTokenCreatedAt()

    /**
     * Set the value of [failures_num] column.
     *
     * @param  int $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setFailuresNum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->failures_num !== $v) {
            $this->failures_num = $v;
            $this->modifiedColumns[] = AdminUserPeer::FAILURES_NUM;
        }


        return $this;
    } // setFailuresNum()

    /**
     * Sets the value of [first_failure] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return AdminUser The current object (for fluent API support)
     */
    public function setFirstFailure($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->first_failure !== null || $dt !== null) {
            $currentDateAsString = ($this->first_failure !== null && $tmpDt = new DateTime($this->first_failure)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->first_failure = $newDateAsString;
                $this->modifiedColumns[] = AdminUserPeer::FIRST_FAILURE;
            }
        } // if either are not null


        return $this;
    } // setFirstFailure()

    /**
     * Sets the value of [lock_expires] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return AdminUser The current object (for fluent API support)
     */
    public function setLockExpires($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->lock_expires !== null || $dt !== null) {
            $currentDateAsString = ($this->lock_expires !== null && $tmpDt = new DateTime($this->lock_expires)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->lock_expires = $newDateAsString;
                $this->modifiedColumns[] = AdminUserPeer::LOCK_EXPIRES;
            }
        } // if either are not null


        return $this;
    } // setLockExpires()

    /**
     * Set the value of [movil] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setMovil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->movil !== $v) {
            $this->movil = $v;
            $this->modifiedColumns[] = AdminUserPeer::MOVIL;
        }


        return $this;
    } // setMovil()

    /**
     * Set the value of [id_employee] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setIdEmployee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_employee !== $v) {
            $this->id_employee = $v;
            $this->modifiedColumns[] = AdminUserPeer::ID_EMPLOYEE;
        }


        return $this;
    } // setIdEmployee()

    /**
     * Set the value of [position] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setPosition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->position !== $v) {
            $this->position = $v;
            $this->modifiedColumns[] = AdminUserPeer::POSITION;
        }


        return $this;
    } // setPosition()

    /**
     * Set the value of [merchant_id] column.
     *
     * @param  int $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setMerchantId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->merchant_id !== $v) {
            $this->merchant_id = $v;
            $this->modifiedColumns[] = AdminUserPeer::MERCHANT_ID;
        }

        if ($this->aGroupdealsMerchants !== null && $this->aGroupdealsMerchants->getMerchantsId() !== $v) {
            $this->aGroupdealsMerchants = null;
        }


        return $this;
    } // setMerchantId()

    /**
     * Set the value of [dob] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setDob($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dob !== $v) {
            $this->dob = $v;
            $this->modifiedColumns[] = AdminUserPeer::DOB;
        }


        return $this;
    } // setDob()

    /**
     * Set the value of [phone] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setPhone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phone !== $v) {
            $this->phone = $v;
            $this->modifiedColumns[] = AdminUserPeer::PHONE;
        }


        return $this;
    } // setPhone()

    /**
     * Set the value of [workmovil] column.
     *
     * @param  string $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setWorkmovil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->workmovil !== $v) {
            $this->workmovil = $v;
            $this->modifiedColumns[] = AdminUserPeer::WORKMOVIL;
        }


        return $this;
    } // setWorkmovil()

    /**
     * Set the value of [pos_id] column.
     *
     * @param  int $v new value
     * @return AdminUser The current object (for fluent API support)
     */
    public function setPosId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pos_id !== $v) {
            $this->pos_id = $v;
            $this->modifiedColumns[] = AdminUserPeer::POS_ID;
        }

        if ($this->aQbcPos !== null && $this->aQbcPos->getId() !== $v) {
            $this->aQbcPos = null;
        }


        return $this;
    } // setPosId()

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
            if ($this->created !== NULL) {
                return false;
            }

            if ($this->lognum !== 0) {
                return false;
            }

            if ($this->reload_acl_flag !== 0) {
                return false;
            }

            if ($this->is_active !== 1) {
                return false;
            }

            if ($this->failures_num !== 0) {
                return false;
            }

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

            $this->user_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->firstname = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->lastname = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->email = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->username = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->password = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->created = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->modified = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->logdate = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->lognum = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->reload_acl_flag = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->is_active = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->extra = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->rp_token = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->rp_token_created_at = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->failures_num = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->first_failure = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->lock_expires = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->movil = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->id_employee = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->position = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->merchant_id = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->dob = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->phone = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->workmovil = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->pos_id = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 26; // 26 = AdminUserPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating AdminUser object", $e);
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

        if ($this->aGroupdealsMerchants !== null && $this->merchant_id !== $this->aGroupdealsMerchants->getMerchantsId()) {
            $this->aGroupdealsMerchants = null;
        }
        if ($this->aQbcPos !== null && $this->pos_id !== $this->aQbcPos->getId()) {
            $this->aQbcPos = null;
        }
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
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AdminUserPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aGroupdealsMerchants = null;
            $this->aQbcPos = null;
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
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AdminUserQuery::create()
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
            $con = Propel::getConnection(AdminUserPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AdminUserPeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aGroupdealsMerchants !== null) {
                if ($this->aGroupdealsMerchants->isModified() || $this->aGroupdealsMerchants->isNew()) {
                    $affectedRows += $this->aGroupdealsMerchants->save($con);
                }
                $this->setGroupdealsMerchants($this->aGroupdealsMerchants);
            }

            if ($this->aQbcPos !== null) {
                if ($this->aQbcPos->isModified() || $this->aQbcPos->isNew()) {
                    $affectedRows += $this->aQbcPos->save($con);
                }
                $this->setQbcPos($this->aQbcPos);
            }

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

        $this->modifiedColumns[] = AdminUserPeer::USER_ID;
        if (null !== $this->user_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AdminUserPeer::USER_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AdminUserPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'user_id';
        }
        if ($this->isColumnModified(AdminUserPeer::FIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'firstname';
        }
        if ($this->isColumnModified(AdminUserPeer::LASTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'lastname';
        }
        if ($this->isColumnModified(AdminUserPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'email';
        }
        if ($this->isColumnModified(AdminUserPeer::USERNAME)) {
            $modifiedColumns[':p' . $index++]  = 'username';
        }
        if ($this->isColumnModified(AdminUserPeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = 'password';
        }
        if ($this->isColumnModified(AdminUserPeer::CREATED)) {
            $modifiedColumns[':p' . $index++]  = 'created';
        }
        if ($this->isColumnModified(AdminUserPeer::MODIFIED)) {
            $modifiedColumns[':p' . $index++]  = 'modified';
        }
        if ($this->isColumnModified(AdminUserPeer::LOGDATE)) {
            $modifiedColumns[':p' . $index++]  = 'logdate';
        }
        if ($this->isColumnModified(AdminUserPeer::LOGNUM)) {
            $modifiedColumns[':p' . $index++]  = 'lognum';
        }
        if ($this->isColumnModified(AdminUserPeer::RELOAD_ACL_FLAG)) {
            $modifiedColumns[':p' . $index++]  = 'reload_acl_flag';
        }
        if ($this->isColumnModified(AdminUserPeer::IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = 'is_active';
        }
        if ($this->isColumnModified(AdminUserPeer::EXTRA)) {
            $modifiedColumns[':p' . $index++]  = 'extra';
        }
        if ($this->isColumnModified(AdminUserPeer::RP_TOKEN)) {
            $modifiedColumns[':p' . $index++]  = 'rp_token';
        }
        if ($this->isColumnModified(AdminUserPeer::RP_TOKEN_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'rp_token_created_at';
        }
        if ($this->isColumnModified(AdminUserPeer::FAILURES_NUM)) {
            $modifiedColumns[':p' . $index++]  = 'failures_num';
        }
        if ($this->isColumnModified(AdminUserPeer::FIRST_FAILURE)) {
            $modifiedColumns[':p' . $index++]  = 'first_failure';
        }
        if ($this->isColumnModified(AdminUserPeer::LOCK_EXPIRES)) {
            $modifiedColumns[':p' . $index++]  = 'lock_expires';
        }
        if ($this->isColumnModified(AdminUserPeer::MOVIL)) {
            $modifiedColumns[':p' . $index++]  = 'movil';
        }
        if ($this->isColumnModified(AdminUserPeer::ID_EMPLOYEE)) {
            $modifiedColumns[':p' . $index++]  = 'id_employee';
        }
        if ($this->isColumnModified(AdminUserPeer::POSITION)) {
            $modifiedColumns[':p' . $index++]  = 'position';
        }
        if ($this->isColumnModified(AdminUserPeer::MERCHANT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'merchant_id';
        }
        if ($this->isColumnModified(AdminUserPeer::DOB)) {
            $modifiedColumns[':p' . $index++]  = 'dob';
        }
        if ($this->isColumnModified(AdminUserPeer::PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'phone';
        }
        if ($this->isColumnModified(AdminUserPeer::WORKMOVIL)) {
            $modifiedColumns[':p' . $index++]  = 'workmovil';
        }
        if ($this->isColumnModified(AdminUserPeer::POS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'pos_id';
        }

        $sql = sprintf(
            'INSERT INTO admin_user (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'user_id':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case 'firstname':
                        $stmt->bindValue($identifier, $this->firstname, PDO::PARAM_STR);
                        break;
                    case 'lastname':
                        $stmt->bindValue($identifier, $this->lastname, PDO::PARAM_STR);
                        break;
                    case 'email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case 'username':
                        $stmt->bindValue($identifier, $this->username, PDO::PARAM_STR);
                        break;
                    case 'password':
                        $stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case 'created':
                        $stmt->bindValue($identifier, $this->created, PDO::PARAM_STR);
                        break;
                    case 'modified':
                        $stmt->bindValue($identifier, $this->modified, PDO::PARAM_STR);
                        break;
                    case 'logdate':
                        $stmt->bindValue($identifier, $this->logdate, PDO::PARAM_STR);
                        break;
                    case 'lognum':
                        $stmt->bindValue($identifier, $this->lognum, PDO::PARAM_INT);
                        break;
                    case 'reload_acl_flag':
                        $stmt->bindValue($identifier, $this->reload_acl_flag, PDO::PARAM_INT);
                        break;
                    case 'is_active':
                        $stmt->bindValue($identifier, $this->is_active, PDO::PARAM_INT);
                        break;
                    case 'extra':
                        $stmt->bindValue($identifier, $this->extra, PDO::PARAM_STR);
                        break;
                    case 'rp_token':
                        $stmt->bindValue($identifier, $this->rp_token, PDO::PARAM_STR);
                        break;
                    case 'rp_token_created_at':
                        $stmt->bindValue($identifier, $this->rp_token_created_at, PDO::PARAM_STR);
                        break;
                    case 'failures_num':
                        $stmt->bindValue($identifier, $this->failures_num, PDO::PARAM_INT);
                        break;
                    case 'first_failure':
                        $stmt->bindValue($identifier, $this->first_failure, PDO::PARAM_STR);
                        break;
                    case 'lock_expires':
                        $stmt->bindValue($identifier, $this->lock_expires, PDO::PARAM_STR);
                        break;
                    case 'movil':
                        $stmt->bindValue($identifier, $this->movil, PDO::PARAM_STR);
                        break;
                    case 'id_employee':
                        $stmt->bindValue($identifier, $this->id_employee, PDO::PARAM_STR);
                        break;
                    case 'position':
                        $stmt->bindValue($identifier, $this->position, PDO::PARAM_STR);
                        break;
                    case 'merchant_id':
                        $stmt->bindValue($identifier, $this->merchant_id, PDO::PARAM_INT);
                        break;
                    case 'dob':
                        $stmt->bindValue($identifier, $this->dob, PDO::PARAM_STR);
                        break;
                    case 'phone':
                        $stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
                        break;
                    case 'workmovil':
                        $stmt->bindValue($identifier, $this->workmovil, PDO::PARAM_STR);
                        break;
                    case 'pos_id':
                        $stmt->bindValue($identifier, $this->pos_id, PDO::PARAM_INT);
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
        $this->setUserId($pk);

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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aGroupdealsMerchants !== null) {
                if (!$this->aGroupdealsMerchants->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aGroupdealsMerchants->getValidationFailures());
                }
            }

            if ($this->aQbcPos !== null) {
                if (!$this->aQbcPos->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aQbcPos->getValidationFailures());
                }
            }


            if (($retval = AdminUserPeer::doValidate($this, $columns)) !== true) {
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
        $pos = AdminUserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getUserId();
                break;
            case 1:
                return $this->getFirstname();
                break;
            case 2:
                return $this->getLastname();
                break;
            case 3:
                return $this->getEmail();
                break;
            case 4:
                return $this->getUsername();
                break;
            case 5:
                return $this->getPassword();
                break;
            case 6:
                return $this->getCreated();
                break;
            case 7:
                return $this->getModified();
                break;
            case 8:
                return $this->getLogdate();
                break;
            case 9:
                return $this->getLognum();
                break;
            case 10:
                return $this->getReloadAclFlag();
                break;
            case 11:
                return $this->getIsActive();
                break;
            case 12:
                return $this->getExtra();
                break;
            case 13:
                return $this->getRpToken();
                break;
            case 14:
                return $this->getRpTokenCreatedAt();
                break;
            case 15:
                return $this->getFailuresNum();
                break;
            case 16:
                return $this->getFirstFailure();
                break;
            case 17:
                return $this->getLockExpires();
                break;
            case 18:
                return $this->getMovil();
                break;
            case 19:
                return $this->getIdEmployee();
                break;
            case 20:
                return $this->getPosition();
                break;
            case 21:
                return $this->getMerchantId();
                break;
            case 22:
                return $this->getDob();
                break;
            case 23:
                return $this->getPhone();
                break;
            case 24:
                return $this->getWorkmovil();
                break;
            case 25:
                return $this->getPosId();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['AdminUser'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['AdminUser'][$this->getPrimaryKey()] = true;
        $keys = AdminUserPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getUserId(),
            $keys[1] => $this->getFirstname(),
            $keys[2] => $this->getLastname(),
            $keys[3] => $this->getEmail(),
            $keys[4] => $this->getUsername(),
            $keys[5] => $this->getPassword(),
            $keys[6] => $this->getCreated(),
            $keys[7] => $this->getModified(),
            $keys[8] => $this->getLogdate(),
            $keys[9] => $this->getLognum(),
            $keys[10] => $this->getReloadAclFlag(),
            $keys[11] => $this->getIsActive(),
            $keys[12] => $this->getExtra(),
            $keys[13] => $this->getRpToken(),
            $keys[14] => $this->getRpTokenCreatedAt(),
            $keys[15] => $this->getFailuresNum(),
            $keys[16] => $this->getFirstFailure(),
            $keys[17] => $this->getLockExpires(),
            $keys[18] => $this->getMovil(),
            $keys[19] => $this->getIdEmployee(),
            $keys[20] => $this->getPosition(),
            $keys[21] => $this->getMerchantId(),
            $keys[22] => $this->getDob(),
            $keys[23] => $this->getPhone(),
            $keys[24] => $this->getWorkmovil(),
            $keys[25] => $this->getPosId(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aGroupdealsMerchants) {
                $result['GroupdealsMerchants'] = $this->aGroupdealsMerchants->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aQbcPos) {
                $result['QbcPos'] = $this->aQbcPos->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
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
        $pos = AdminUserPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setUserId($value);
                break;
            case 1:
                $this->setFirstname($value);
                break;
            case 2:
                $this->setLastname($value);
                break;
            case 3:
                $this->setEmail($value);
                break;
            case 4:
                $this->setUsername($value);
                break;
            case 5:
                $this->setPassword($value);
                break;
            case 6:
                $this->setCreated($value);
                break;
            case 7:
                $this->setModified($value);
                break;
            case 8:
                $this->setLogdate($value);
                break;
            case 9:
                $this->setLognum($value);
                break;
            case 10:
                $this->setReloadAclFlag($value);
                break;
            case 11:
                $this->setIsActive($value);
                break;
            case 12:
                $this->setExtra($value);
                break;
            case 13:
                $this->setRpToken($value);
                break;
            case 14:
                $this->setRpTokenCreatedAt($value);
                break;
            case 15:
                $this->setFailuresNum($value);
                break;
            case 16:
                $this->setFirstFailure($value);
                break;
            case 17:
                $this->setLockExpires($value);
                break;
            case 18:
                $this->setMovil($value);
                break;
            case 19:
                $this->setIdEmployee($value);
                break;
            case 20:
                $this->setPosition($value);
                break;
            case 21:
                $this->setMerchantId($value);
                break;
            case 22:
                $this->setDob($value);
                break;
            case 23:
                $this->setPhone($value);
                break;
            case 24:
                $this->setWorkmovil($value);
                break;
            case 25:
                $this->setPosId($value);
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
        $keys = AdminUserPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setUserId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFirstname($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLastname($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setUsername($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPassword($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCreated($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setModified($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLogdate($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLognum($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setReloadAclFlag($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIsActive($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setExtra($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setRpToken($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRpTokenCreatedAt($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setFailuresNum($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setFirstFailure($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLockExpires($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMovil($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setIdEmployee($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPosition($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setMerchantId($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDob($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setPhone($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setWorkmovil($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPosId($arr[$keys[25]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AdminUserPeer::DATABASE_NAME);

        if ($this->isColumnModified(AdminUserPeer::USER_ID)) $criteria->add(AdminUserPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(AdminUserPeer::FIRSTNAME)) $criteria->add(AdminUserPeer::FIRSTNAME, $this->firstname);
        if ($this->isColumnModified(AdminUserPeer::LASTNAME)) $criteria->add(AdminUserPeer::LASTNAME, $this->lastname);
        if ($this->isColumnModified(AdminUserPeer::EMAIL)) $criteria->add(AdminUserPeer::EMAIL, $this->email);
        if ($this->isColumnModified(AdminUserPeer::USERNAME)) $criteria->add(AdminUserPeer::USERNAME, $this->username);
        if ($this->isColumnModified(AdminUserPeer::PASSWORD)) $criteria->add(AdminUserPeer::PASSWORD, $this->password);
        if ($this->isColumnModified(AdminUserPeer::CREATED)) $criteria->add(AdminUserPeer::CREATED, $this->created);
        if ($this->isColumnModified(AdminUserPeer::MODIFIED)) $criteria->add(AdminUserPeer::MODIFIED, $this->modified);
        if ($this->isColumnModified(AdminUserPeer::LOGDATE)) $criteria->add(AdminUserPeer::LOGDATE, $this->logdate);
        if ($this->isColumnModified(AdminUserPeer::LOGNUM)) $criteria->add(AdminUserPeer::LOGNUM, $this->lognum);
        if ($this->isColumnModified(AdminUserPeer::RELOAD_ACL_FLAG)) $criteria->add(AdminUserPeer::RELOAD_ACL_FLAG, $this->reload_acl_flag);
        if ($this->isColumnModified(AdminUserPeer::IS_ACTIVE)) $criteria->add(AdminUserPeer::IS_ACTIVE, $this->is_active);
        if ($this->isColumnModified(AdminUserPeer::EXTRA)) $criteria->add(AdminUserPeer::EXTRA, $this->extra);
        if ($this->isColumnModified(AdminUserPeer::RP_TOKEN)) $criteria->add(AdminUserPeer::RP_TOKEN, $this->rp_token);
        if ($this->isColumnModified(AdminUserPeer::RP_TOKEN_CREATED_AT)) $criteria->add(AdminUserPeer::RP_TOKEN_CREATED_AT, $this->rp_token_created_at);
        if ($this->isColumnModified(AdminUserPeer::FAILURES_NUM)) $criteria->add(AdminUserPeer::FAILURES_NUM, $this->failures_num);
        if ($this->isColumnModified(AdminUserPeer::FIRST_FAILURE)) $criteria->add(AdminUserPeer::FIRST_FAILURE, $this->first_failure);
        if ($this->isColumnModified(AdminUserPeer::LOCK_EXPIRES)) $criteria->add(AdminUserPeer::LOCK_EXPIRES, $this->lock_expires);
        if ($this->isColumnModified(AdminUserPeer::MOVIL)) $criteria->add(AdminUserPeer::MOVIL, $this->movil);
        if ($this->isColumnModified(AdminUserPeer::ID_EMPLOYEE)) $criteria->add(AdminUserPeer::ID_EMPLOYEE, $this->id_employee);
        if ($this->isColumnModified(AdminUserPeer::POSITION)) $criteria->add(AdminUserPeer::POSITION, $this->position);
        if ($this->isColumnModified(AdminUserPeer::MERCHANT_ID)) $criteria->add(AdminUserPeer::MERCHANT_ID, $this->merchant_id);
        if ($this->isColumnModified(AdminUserPeer::DOB)) $criteria->add(AdminUserPeer::DOB, $this->dob);
        if ($this->isColumnModified(AdminUserPeer::PHONE)) $criteria->add(AdminUserPeer::PHONE, $this->phone);
        if ($this->isColumnModified(AdminUserPeer::WORKMOVIL)) $criteria->add(AdminUserPeer::WORKMOVIL, $this->workmovil);
        if ($this->isColumnModified(AdminUserPeer::POS_ID)) $criteria->add(AdminUserPeer::POS_ID, $this->pos_id);

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
        $criteria = new Criteria(AdminUserPeer::DATABASE_NAME);
        $criteria->add(AdminUserPeer::USER_ID, $this->user_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getUserId();
    }

    /**
     * Generic method to set the primary key (user_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setUserId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getUserId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of AdminUser (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFirstname($this->getFirstname());
        $copyObj->setLastname($this->getLastname());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setUsername($this->getUsername());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setCreated($this->getCreated());
        $copyObj->setModified($this->getModified());
        $copyObj->setLogdate($this->getLogdate());
        $copyObj->setLognum($this->getLognum());
        $copyObj->setReloadAclFlag($this->getReloadAclFlag());
        $copyObj->setIsActive($this->getIsActive());
        $copyObj->setExtra($this->getExtra());
        $copyObj->setRpToken($this->getRpToken());
        $copyObj->setRpTokenCreatedAt($this->getRpTokenCreatedAt());
        $copyObj->setFailuresNum($this->getFailuresNum());
        $copyObj->setFirstFailure($this->getFirstFailure());
        $copyObj->setLockExpires($this->getLockExpires());
        $copyObj->setMovil($this->getMovil());
        $copyObj->setIdEmployee($this->getIdEmployee());
        $copyObj->setPosition($this->getPosition());
        $copyObj->setMerchantId($this->getMerchantId());
        $copyObj->setDob($this->getDob());
        $copyObj->setPhone($this->getPhone());
        $copyObj->setWorkmovil($this->getWorkmovil());
        $copyObj->setPosId($this->getPosId());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setUserId(NULL); // this is a auto-increment column, so set to default value
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
     * @return AdminUser Clone of current object.
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
     * @return AdminUserPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AdminUserPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a GroupdealsMerchants object.
     *
     * @param                  GroupdealsMerchants $v
     * @return AdminUser The current object (for fluent API support)
     * @throws PropelException
     */
    public function setGroupdealsMerchants(GroupdealsMerchants $v = null)
    {
        if ($v === null) {
            $this->setMerchantId(NULL);
        } else {
            $this->setMerchantId($v->getMerchantsId());
        }

        $this->aGroupdealsMerchants = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the GroupdealsMerchants object, it will not be re-added.
        if ($v !== null) {
            $v->addAdminUser($this);
        }


        return $this;
    }


    /**
     * Get the associated GroupdealsMerchants object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return GroupdealsMerchants The associated GroupdealsMerchants object.
     * @throws PropelException
     */
    public function getGroupdealsMerchants(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aGroupdealsMerchants === null && ($this->merchant_id !== null) && $doQuery) {
            $this->aGroupdealsMerchants = GroupdealsMerchantsQuery::create()->findPk($this->merchant_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aGroupdealsMerchants->addAdminUsers($this);
             */
        }

        return $this->aGroupdealsMerchants;
    }

    /**
     * Declares an association between this object and a QbcPos object.
     *
     * @param                  QbcPos $v
     * @return AdminUser The current object (for fluent API support)
     * @throws PropelException
     */
    public function setQbcPos(QbcPos $v = null)
    {
        if ($v === null) {
            $this->setPosId(NULL);
        } else {
            $this->setPosId($v->getId());
        }

        $this->aQbcPos = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the QbcPos object, it will not be re-added.
        if ($v !== null) {
            $v->addAdminUser($this);
        }


        return $this;
    }


    /**
     * Get the associated QbcPos object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return QbcPos The associated QbcPos object.
     * @throws PropelException
     */
    public function getQbcPos(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aQbcPos === null && ($this->pos_id !== null) && $doQuery) {
            $this->aQbcPos = QbcPosQuery::create()->findPk($this->pos_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aQbcPos->addAdminUsers($this);
             */
        }

        return $this->aQbcPos;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->user_id = null;
        $this->firstname = null;
        $this->lastname = null;
        $this->email = null;
        $this->username = null;
        $this->password = null;
        $this->created = null;
        $this->modified = null;
        $this->logdate = null;
        $this->lognum = null;
        $this->reload_acl_flag = null;
        $this->is_active = null;
        $this->extra = null;
        $this->rp_token = null;
        $this->rp_token_created_at = null;
        $this->failures_num = null;
        $this->first_failure = null;
        $this->lock_expires = null;
        $this->movil = null;
        $this->id_employee = null;
        $this->position = null;
        $this->merchant_id = null;
        $this->dob = null;
        $this->phone = null;
        $this->workmovil = null;
        $this->pos_id = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->aGroupdealsMerchants instanceof Persistent) {
              $this->aGroupdealsMerchants->clearAllReferences($deep);
            }
            if ($this->aQbcPos instanceof Persistent) {
              $this->aQbcPos->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aGroupdealsMerchants = null;
        $this->aQbcPos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AdminUserPeer::DEFAULT_STRING_FORMAT);
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
