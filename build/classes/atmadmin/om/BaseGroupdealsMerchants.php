<?php


/**
 * Base class that represents a row from the 'groupdeals_merchants' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseGroupdealsMerchants extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'GroupdealsMerchantsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GroupdealsMerchantsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the merchants_id field.
     * @var        int
     */
    protected $merchants_id;

    /**
     * The value for the user_id field.
     * @var        int
     */
    protected $user_id;

    /**
     * The value for the permissions field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $permissions;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the merchant_logo field.
     * @var        string
     */
    protected $merchant_logo;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the website field.
     * @var        string
     */
    protected $website;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the facebook field.
     * @var        string
     */
    protected $facebook;

    /**
     * The value for the twitter field.
     * @var        string
     */
    protected $twitter;

    /**
     * The value for the phone field.
     * @var        string
     */
    protected $phone;

    /**
     * The value for the mobile field.
     * @var        string
     */
    protected $mobile;

    /**
     * The value for the business_hours field.
     * @var        string
     */
    protected $business_hours;

    /**
     * The value for the address field.
     * @var        string
     */
    protected $address;

    /**
     * The value for the redeem field.
     * @var        string
     */
    protected $redeem;

    /**
     * The value for the paypal_email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $paypal_email;

    /**
     * The value for the authorize_info field.
     * @var        string
     */
    protected $authorize_info;

    /**
     * The value for the bank_info field.
     * @var        int
     */
    protected $bank_info;

    /**
     * The value for the other field.
     * @var        string
     */
    protected $other;

    /**
     * The value for the status field.
     * @var        int
     */
    protected $status;

    /**
     * The value for the nit_number field.
     * @var        string
     */
    protected $nit_number;

    /**
     * The value for the agent field.
     * @var        string
     */
    protected $agent;

    /**
     * The value for the service_provided field.
     * @var        string
     */
    protected $service_provided;

    /**
     * The value for the city field.
     * @var        string
     */
    protected $city;

    /**
     * The value for the country field.
     * @var        string
     */
    protected $country;

    /**
     * The value for the primary_contact field.
     * @var        string
     */
    protected $primary_contact;

    /**
     * The value for the secondary_contact field.
     * @var        string
     */
    protected $secondary_contact;

    /**
     * The value for the legal_name field.
     * @var        string
     */
    protected $legal_name;

    /**
     * The value for the branch field.
     * @var        int
     */
    protected $branch;

    /**
     * @var        MerchantBankInfo
     */
    protected $aMerchantBankInfo;

    /**
     * @var        PropelObjectCollection|QbcMerchantsCommercialNames[] Collection to store aggregation of QbcMerchantsCommercialNames objects.
     */
    protected $collQbcMerchantsCommercialNamess;
    protected $collQbcMerchantsCommercialNamessPartial;

    /**
     * @var        PropelObjectCollection|QbcMerchantsContacts[] Collection to store aggregation of QbcMerchantsContacts objects.
     */
    protected $collQbcMerchantsContactss;
    protected $collQbcMerchantsContactssPartial;

    /**
     * @var        PropelObjectCollection|AdminUser[] Collection to store aggregation of AdminUser objects.
     */
    protected $collAdminUsers;
    protected $collAdminUsersPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $qbcMerchantsCommercialNamessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $qbcMerchantsContactssScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $adminUsersScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->permissions = '';
        $this->paypal_email = '';
    }

    /**
     * Initializes internal state of BaseGroupdealsMerchants object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [merchants_id] column value.
     *
     * @return int
     */
    public function getMerchantsId()
    {

        return $this->merchants_id;
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
     * Get the [permissions] column value.
     *
     * @return string
     */
    public function getPermissions()
    {

        return $this->permissions;
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Get the [merchant_logo] column value.
     *
     * @return string
     */
    public function getMerchantLogo()
    {

        return $this->merchant_logo;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [website] column value.
     *
     * @return string
     */
    public function getWebsite()
    {

        return $this->website;
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
     * Get the [facebook] column value.
     *
     * @return string
     */
    public function getFacebook()
    {

        return $this->facebook;
    }

    /**
     * Get the [twitter] column value.
     *
     * @return string
     */
    public function getTwitter()
    {

        return $this->twitter;
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
     * Get the [mobile] column value.
     *
     * @return string
     */
    public function getMobile()
    {

        return $this->mobile;
    }

    /**
     * Get the [business_hours] column value.
     *
     * @return string
     */
    public function getBusinessHours()
    {

        return $this->business_hours;
    }

    /**
     * Get the [address] column value.
     *
     * @return string
     */
    public function getAddress()
    {

        return $this->address;
    }

    /**
     * Get the [redeem] column value.
     *
     * @return string
     */
    public function getRedeem()
    {

        return $this->redeem;
    }

    /**
     * Get the [paypal_email] column value.
     *
     * @return string
     */
    public function getPaypalEmail()
    {

        return $this->paypal_email;
    }

    /**
     * Get the [authorize_info] column value.
     *
     * @return string
     */
    public function getAuthorizeInfo()
    {

        return $this->authorize_info;
    }

    /**
     * Get the [bank_info] column value.
     *
     * @return int
     */
    public function getBankInfo()
    {

        return $this->bank_info;
    }

    /**
     * Get the [other] column value.
     *
     * @return string
     */
    public function getOther()
    {

        return $this->other;
    }

    /**
     * Get the [status] column value.
     *
     * @return int
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [nit_number] column value.
     *
     * @return string
     */
    public function getNitNumber()
    {

        return $this->nit_number;
    }

    /**
     * Get the [agent] column value.
     *
     * @return string
     */
    public function getAgent()
    {

        return $this->agent;
    }

    /**
     * Get the [service_provided] column value.
     *
     * @return string
     */
    public function getServiceProvided()
    {

        return $this->service_provided;
    }

    /**
     * Get the [city] column value.
     *
     * @return string
     */
    public function getCity()
    {

        return $this->city;
    }

    /**
     * Get the [country] column value.
     *
     * @return string
     */
    public function getCountry()
    {

        return $this->country;
    }

    /**
     * Get the [primary_contact] column value.
     *
     * @return string
     */
    public function getPrimaryContact()
    {

        return $this->primary_contact;
    }

    /**
     * Get the [secondary_contact] column value.
     *
     * @return string
     */
    public function getSecondaryContact()
    {

        return $this->secondary_contact;
    }

    /**
     * Get the [legal_name] column value.
     *
     * @return string
     */
    public function getLegalName()
    {

        return $this->legal_name;
    }

    /**
     * Get the [branch] column value.
     *
     * @return int
     */
    public function getBranch()
    {

        return $this->branch;
    }

    /**
     * Set the value of [merchants_id] column.
     *
     * @param  int $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setMerchantsId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->merchants_id !== $v) {
            $this->merchants_id = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::MERCHANTS_ID;
        }


        return $this;
    } // setMerchantsId()

    /**
     * Set the value of [user_id] column.
     *
     * @param  int $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setUserId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->user_id !== $v) {
            $this->user_id = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::USER_ID;
        }


        return $this;
    } // setUserId()

    /**
     * Set the value of [permissions] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setPermissions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->permissions !== $v) {
            $this->permissions = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::PERMISSIONS;
        }


        return $this;
    } // setPermissions()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [merchant_logo] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setMerchantLogo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->merchant_logo !== $v) {
            $this->merchant_logo = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::MERCHANT_LOGO;
        }


        return $this;
    } // setMerchantLogo()

    /**
     * Set the value of [description] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [website] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setWebsite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->website !== $v) {
            $this->website = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::WEBSITE;
        }


        return $this;
    } // setWebsite()

    /**
     * Set the value of [email] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [facebook] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setFacebook($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->facebook !== $v) {
            $this->facebook = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::FACEBOOK;
        }


        return $this;
    } // setFacebook()

    /**
     * Set the value of [twitter] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setTwitter($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->twitter !== $v) {
            $this->twitter = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::TWITTER;
        }


        return $this;
    } // setTwitter()

    /**
     * Set the value of [phone] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setPhone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->phone !== $v) {
            $this->phone = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::PHONE;
        }


        return $this;
    } // setPhone()

    /**
     * Set the value of [mobile] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setMobile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mobile !== $v) {
            $this->mobile = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::MOBILE;
        }


        return $this;
    } // setMobile()

    /**
     * Set the value of [business_hours] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setBusinessHours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->business_hours !== $v) {
            $this->business_hours = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::BUSINESS_HOURS;
        }


        return $this;
    } // setBusinessHours()

    /**
     * Set the value of [address] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->address !== $v) {
            $this->address = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::ADDRESS;
        }


        return $this;
    } // setAddress()

    /**
     * Set the value of [redeem] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setRedeem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->redeem !== $v) {
            $this->redeem = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::REDEEM;
        }


        return $this;
    } // setRedeem()

    /**
     * Set the value of [paypal_email] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setPaypalEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->paypal_email !== $v) {
            $this->paypal_email = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::PAYPAL_EMAIL;
        }


        return $this;
    } // setPaypalEmail()

    /**
     * Set the value of [authorize_info] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setAuthorizeInfo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->authorize_info !== $v) {
            $this->authorize_info = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::AUTHORIZE_INFO;
        }


        return $this;
    } // setAuthorizeInfo()

    /**
     * Set the value of [bank_info] column.
     *
     * @param  int $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setBankInfo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->bank_info !== $v) {
            $this->bank_info = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::BANK_INFO;
        }

        if ($this->aMerchantBankInfo !== null && $this->aMerchantBankInfo->getInfoId() !== $v) {
            $this->aMerchantBankInfo = null;
        }


        return $this;
    } // setBankInfo()

    /**
     * Set the value of [other] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setOther($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->other !== $v) {
            $this->other = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::OTHER;
        }


        return $this;
    } // setOther()

    /**
     * Set the value of [status] column.
     *
     * @param  int $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [nit_number] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setNitNumber($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nit_number !== $v) {
            $this->nit_number = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::NIT_NUMBER;
        }


        return $this;
    } // setNitNumber()

    /**
     * Set the value of [agent] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agent !== $v) {
            $this->agent = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::AGENT;
        }


        return $this;
    } // setAgent()

    /**
     * Set the value of [service_provided] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setServiceProvided($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->service_provided !== $v) {
            $this->service_provided = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::SERVICE_PROVIDED;
        }


        return $this;
    } // setServiceProvided()

    /**
     * Set the value of [city] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->city !== $v) {
            $this->city = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::CITY;
        }


        return $this;
    } // setCity()

    /**
     * Set the value of [country] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->country !== $v) {
            $this->country = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::COUNTRY;
        }


        return $this;
    } // setCountry()

    /**
     * Set the value of [primary_contact] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setPrimaryContact($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->primary_contact !== $v) {
            $this->primary_contact = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::PRIMARY_CONTACT;
        }


        return $this;
    } // setPrimaryContact()

    /**
     * Set the value of [secondary_contact] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setSecondaryContact($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->secondary_contact !== $v) {
            $this->secondary_contact = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::SECONDARY_CONTACT;
        }


        return $this;
    } // setSecondaryContact()

    /**
     * Set the value of [legal_name] column.
     *
     * @param  string $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setLegalName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->legal_name !== $v) {
            $this->legal_name = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::LEGAL_NAME;
        }


        return $this;
    } // setLegalName()

    /**
     * Set the value of [branch] column.
     *
     * @param  int $v new value
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setBranch($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->branch !== $v) {
            $this->branch = $v;
            $this->modifiedColumns[] = GroupdealsMerchantsPeer::BRANCH;
        }


        return $this;
    } // setBranch()

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
            if ($this->permissions !== '') {
                return false;
            }

            if ($this->paypal_email !== '') {
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

            $this->merchants_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->user_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->permissions = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->merchant_logo = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->description = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->website = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->email = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->facebook = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->twitter = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->phone = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->mobile = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->business_hours = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->address = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->redeem = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->paypal_email = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->authorize_info = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->bank_info = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->other = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->status = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->nit_number = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->agent = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->service_provided = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->city = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->country = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->primary_contact = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->secondary_contact = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->legal_name = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->branch = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 29; // 29 = GroupdealsMerchantsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating GroupdealsMerchants object", $e);
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

        if ($this->aMerchantBankInfo !== null && $this->bank_info !== $this->aMerchantBankInfo->getInfoId()) {
            $this->aMerchantBankInfo = null;
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
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GroupdealsMerchantsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aMerchantBankInfo = null;
            $this->collQbcMerchantsCommercialNamess = null;

            $this->collQbcMerchantsContactss = null;

            $this->collAdminUsers = null;

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
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GroupdealsMerchantsQuery::create()
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
            $con = Propel::getConnection(GroupdealsMerchantsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GroupdealsMerchantsPeer::addInstanceToPool($this);
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

            if ($this->aMerchantBankInfo !== null) {
                if ($this->aMerchantBankInfo->isModified() || $this->aMerchantBankInfo->isNew()) {
                    $affectedRows += $this->aMerchantBankInfo->save($con);
                }
                $this->setMerchantBankInfo($this->aMerchantBankInfo);
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

            if ($this->qbcMerchantsCommercialNamessScheduledForDeletion !== null) {
                if (!$this->qbcMerchantsCommercialNamessScheduledForDeletion->isEmpty()) {
                    QbcMerchantsCommercialNamesQuery::create()
                        ->filterByPrimaryKeys($this->qbcMerchantsCommercialNamessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->qbcMerchantsCommercialNamessScheduledForDeletion = null;
                }
            }

            if ($this->collQbcMerchantsCommercialNamess !== null) {
                foreach ($this->collQbcMerchantsCommercialNamess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->qbcMerchantsContactssScheduledForDeletion !== null) {
                if (!$this->qbcMerchantsContactssScheduledForDeletion->isEmpty()) {
                    QbcMerchantsContactsQuery::create()
                        ->filterByPrimaryKeys($this->qbcMerchantsContactssScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->qbcMerchantsContactssScheduledForDeletion = null;
                }
            }

            if ($this->collQbcMerchantsContactss !== null) {
                foreach ($this->collQbcMerchantsContactss as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->adminUsersScheduledForDeletion !== null) {
                if (!$this->adminUsersScheduledForDeletion->isEmpty()) {
                    AdminUserQuery::create()
                        ->filterByPrimaryKeys($this->adminUsersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->adminUsersScheduledForDeletion = null;
                }
            }

            if ($this->collAdminUsers !== null) {
                foreach ($this->collAdminUsers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = GroupdealsMerchantsPeer::MERCHANTS_ID;
        if (null !== $this->merchants_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . GroupdealsMerchantsPeer::MERCHANTS_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GroupdealsMerchantsPeer::MERCHANTS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'merchants_id';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::USER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'user_id';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::PERMISSIONS)) {
            $modifiedColumns[':p' . $index++]  = 'permissions';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::MERCHANT_LOGO)) {
            $modifiedColumns[':p' . $index++]  = 'merchant_logo';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'description';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::WEBSITE)) {
            $modifiedColumns[':p' . $index++]  = 'website';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'email';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::FACEBOOK)) {
            $modifiedColumns[':p' . $index++]  = 'facebook';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::TWITTER)) {
            $modifiedColumns[':p' . $index++]  = 'twitter';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'phone';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::MOBILE)) {
            $modifiedColumns[':p' . $index++]  = 'mobile';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::BUSINESS_HOURS)) {
            $modifiedColumns[':p' . $index++]  = 'business_hours';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = 'address';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::REDEEM)) {
            $modifiedColumns[':p' . $index++]  = 'redeem';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::PAYPAL_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'paypal_email';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::AUTHORIZE_INFO)) {
            $modifiedColumns[':p' . $index++]  = 'authorize_info';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::BANK_INFO)) {
            $modifiedColumns[':p' . $index++]  = 'bank_info';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::OTHER)) {
            $modifiedColumns[':p' . $index++]  = 'other';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::NIT_NUMBER)) {
            $modifiedColumns[':p' . $index++]  = 'nit_number';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::AGENT)) {
            $modifiedColumns[':p' . $index++]  = 'agent';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::SERVICE_PROVIDED)) {
            $modifiedColumns[':p' . $index++]  = 'service_provided';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::CITY)) {
            $modifiedColumns[':p' . $index++]  = 'city';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = 'country';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::PRIMARY_CONTACT)) {
            $modifiedColumns[':p' . $index++]  = 'primary_contact';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::SECONDARY_CONTACT)) {
            $modifiedColumns[':p' . $index++]  = 'secondary_contact';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::LEGAL_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'legal_name';
        }
        if ($this->isColumnModified(GroupdealsMerchantsPeer::BRANCH)) {
            $modifiedColumns[':p' . $index++]  = 'branch';
        }

        $sql = sprintf(
            'INSERT INTO groupdeals_merchants (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'merchants_id':
                        $stmt->bindValue($identifier, $this->merchants_id, PDO::PARAM_INT);
                        break;
                    case 'user_id':
                        $stmt->bindValue($identifier, $this->user_id, PDO::PARAM_INT);
                        break;
                    case 'permissions':
                        $stmt->bindValue($identifier, $this->permissions, PDO::PARAM_STR);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'merchant_logo':
                        $stmt->bindValue($identifier, $this->merchant_logo, PDO::PARAM_STR);
                        break;
                    case 'description':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case 'website':
                        $stmt->bindValue($identifier, $this->website, PDO::PARAM_STR);
                        break;
                    case 'email':
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case 'facebook':
                        $stmt->bindValue($identifier, $this->facebook, PDO::PARAM_STR);
                        break;
                    case 'twitter':
                        $stmt->bindValue($identifier, $this->twitter, PDO::PARAM_STR);
                        break;
                    case 'phone':
                        $stmt->bindValue($identifier, $this->phone, PDO::PARAM_STR);
                        break;
                    case 'mobile':
                        $stmt->bindValue($identifier, $this->mobile, PDO::PARAM_STR);
                        break;
                    case 'business_hours':
                        $stmt->bindValue($identifier, $this->business_hours, PDO::PARAM_STR);
                        break;
                    case 'address':
                        $stmt->bindValue($identifier, $this->address, PDO::PARAM_STR);
                        break;
                    case 'redeem':
                        $stmt->bindValue($identifier, $this->redeem, PDO::PARAM_STR);
                        break;
                    case 'paypal_email':
                        $stmt->bindValue($identifier, $this->paypal_email, PDO::PARAM_STR);
                        break;
                    case 'authorize_info':
                        $stmt->bindValue($identifier, $this->authorize_info, PDO::PARAM_STR);
                        break;
                    case 'bank_info':
                        $stmt->bindValue($identifier, $this->bank_info, PDO::PARAM_INT);
                        break;
                    case 'other':
                        $stmt->bindValue($identifier, $this->other, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_INT);
                        break;
                    case 'nit_number':
                        $stmt->bindValue($identifier, $this->nit_number, PDO::PARAM_STR);
                        break;
                    case 'agent':
                        $stmt->bindValue($identifier, $this->agent, PDO::PARAM_STR);
                        break;
                    case 'service_provided':
                        $stmt->bindValue($identifier, $this->service_provided, PDO::PARAM_STR);
                        break;
                    case 'city':
                        $stmt->bindValue($identifier, $this->city, PDO::PARAM_STR);
                        break;
                    case 'country':
                        $stmt->bindValue($identifier, $this->country, PDO::PARAM_STR);
                        break;
                    case 'primary_contact':
                        $stmt->bindValue($identifier, $this->primary_contact, PDO::PARAM_STR);
                        break;
                    case 'secondary_contact':
                        $stmt->bindValue($identifier, $this->secondary_contact, PDO::PARAM_STR);
                        break;
                    case 'legal_name':
                        $stmt->bindValue($identifier, $this->legal_name, PDO::PARAM_STR);
                        break;
                    case 'branch':
                        $stmt->bindValue($identifier, $this->branch, PDO::PARAM_INT);
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
        $this->setMerchantsId($pk);

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

            if ($this->aMerchantBankInfo !== null) {
                if (!$this->aMerchantBankInfo->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMerchantBankInfo->getValidationFailures());
                }
            }


            if (($retval = GroupdealsMerchantsPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collQbcMerchantsCommercialNamess !== null) {
                    foreach ($this->collQbcMerchantsCommercialNamess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collQbcMerchantsContactss !== null) {
                    foreach ($this->collQbcMerchantsContactss as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collAdminUsers !== null) {
                    foreach ($this->collAdminUsers as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = GroupdealsMerchantsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getMerchantsId();
                break;
            case 1:
                return $this->getUserId();
                break;
            case 2:
                return $this->getPermissions();
                break;
            case 3:
                return $this->getName();
                break;
            case 4:
                return $this->getMerchantLogo();
                break;
            case 5:
                return $this->getDescription();
                break;
            case 6:
                return $this->getWebsite();
                break;
            case 7:
                return $this->getEmail();
                break;
            case 8:
                return $this->getFacebook();
                break;
            case 9:
                return $this->getTwitter();
                break;
            case 10:
                return $this->getPhone();
                break;
            case 11:
                return $this->getMobile();
                break;
            case 12:
                return $this->getBusinessHours();
                break;
            case 13:
                return $this->getAddress();
                break;
            case 14:
                return $this->getRedeem();
                break;
            case 15:
                return $this->getPaypalEmail();
                break;
            case 16:
                return $this->getAuthorizeInfo();
                break;
            case 17:
                return $this->getBankInfo();
                break;
            case 18:
                return $this->getOther();
                break;
            case 19:
                return $this->getStatus();
                break;
            case 20:
                return $this->getNitNumber();
                break;
            case 21:
                return $this->getAgent();
                break;
            case 22:
                return $this->getServiceProvided();
                break;
            case 23:
                return $this->getCity();
                break;
            case 24:
                return $this->getCountry();
                break;
            case 25:
                return $this->getPrimaryContact();
                break;
            case 26:
                return $this->getSecondaryContact();
                break;
            case 27:
                return $this->getLegalName();
                break;
            case 28:
                return $this->getBranch();
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
        if (isset($alreadyDumpedObjects['GroupdealsMerchants'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['GroupdealsMerchants'][$this->getPrimaryKey()] = true;
        $keys = GroupdealsMerchantsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getMerchantsId(),
            $keys[1] => $this->getUserId(),
            $keys[2] => $this->getPermissions(),
            $keys[3] => $this->getName(),
            $keys[4] => $this->getMerchantLogo(),
            $keys[5] => $this->getDescription(),
            $keys[6] => $this->getWebsite(),
            $keys[7] => $this->getEmail(),
            $keys[8] => $this->getFacebook(),
            $keys[9] => $this->getTwitter(),
            $keys[10] => $this->getPhone(),
            $keys[11] => $this->getMobile(),
            $keys[12] => $this->getBusinessHours(),
            $keys[13] => $this->getAddress(),
            $keys[14] => $this->getRedeem(),
            $keys[15] => $this->getPaypalEmail(),
            $keys[16] => $this->getAuthorizeInfo(),
            $keys[17] => $this->getBankInfo(),
            $keys[18] => $this->getOther(),
            $keys[19] => $this->getStatus(),
            $keys[20] => $this->getNitNumber(),
            $keys[21] => $this->getAgent(),
            $keys[22] => $this->getServiceProvided(),
            $keys[23] => $this->getCity(),
            $keys[24] => $this->getCountry(),
            $keys[25] => $this->getPrimaryContact(),
            $keys[26] => $this->getSecondaryContact(),
            $keys[27] => $this->getLegalName(),
            $keys[28] => $this->getBranch(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aMerchantBankInfo) {
                $result['MerchantBankInfo'] = $this->aMerchantBankInfo->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collQbcMerchantsCommercialNamess) {
                $result['QbcMerchantsCommercialNamess'] = $this->collQbcMerchantsCommercialNamess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collQbcMerchantsContactss) {
                $result['QbcMerchantsContactss'] = $this->collQbcMerchantsContactss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collAdminUsers) {
                $result['AdminUsers'] = $this->collAdminUsers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = GroupdealsMerchantsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setMerchantsId($value);
                break;
            case 1:
                $this->setUserId($value);
                break;
            case 2:
                $this->setPermissions($value);
                break;
            case 3:
                $this->setName($value);
                break;
            case 4:
                $this->setMerchantLogo($value);
                break;
            case 5:
                $this->setDescription($value);
                break;
            case 6:
                $this->setWebsite($value);
                break;
            case 7:
                $this->setEmail($value);
                break;
            case 8:
                $this->setFacebook($value);
                break;
            case 9:
                $this->setTwitter($value);
                break;
            case 10:
                $this->setPhone($value);
                break;
            case 11:
                $this->setMobile($value);
                break;
            case 12:
                $this->setBusinessHours($value);
                break;
            case 13:
                $this->setAddress($value);
                break;
            case 14:
                $this->setRedeem($value);
                break;
            case 15:
                $this->setPaypalEmail($value);
                break;
            case 16:
                $this->setAuthorizeInfo($value);
                break;
            case 17:
                $this->setBankInfo($value);
                break;
            case 18:
                $this->setOther($value);
                break;
            case 19:
                $this->setStatus($value);
                break;
            case 20:
                $this->setNitNumber($value);
                break;
            case 21:
                $this->setAgent($value);
                break;
            case 22:
                $this->setServiceProvided($value);
                break;
            case 23:
                $this->setCity($value);
                break;
            case 24:
                $this->setCountry($value);
                break;
            case 25:
                $this->setPrimaryContact($value);
                break;
            case 26:
                $this->setSecondaryContact($value);
                break;
            case 27:
                $this->setLegalName($value);
                break;
            case 28:
                $this->setBranch($value);
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
        $keys = GroupdealsMerchantsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setMerchantsId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setUserId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPermissions($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setName($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMerchantLogo($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDescription($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setWebsite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEmail($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setFacebook($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTwitter($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPhone($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMobile($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setBusinessHours($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAddress($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRedeem($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPaypalEmail($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAuthorizeInfo($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setBankInfo($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOther($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setStatus($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setNitNumber($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAgent($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setServiceProvided($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setCity($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setCountry($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPrimaryContact($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSecondaryContact($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setLegalName($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setBranch($arr[$keys[28]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GroupdealsMerchantsPeer::DATABASE_NAME);

        if ($this->isColumnModified(GroupdealsMerchantsPeer::MERCHANTS_ID)) $criteria->add(GroupdealsMerchantsPeer::MERCHANTS_ID, $this->merchants_id);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::USER_ID)) $criteria->add(GroupdealsMerchantsPeer::USER_ID, $this->user_id);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::PERMISSIONS)) $criteria->add(GroupdealsMerchantsPeer::PERMISSIONS, $this->permissions);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::NAME)) $criteria->add(GroupdealsMerchantsPeer::NAME, $this->name);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::MERCHANT_LOGO)) $criteria->add(GroupdealsMerchantsPeer::MERCHANT_LOGO, $this->merchant_logo);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::DESCRIPTION)) $criteria->add(GroupdealsMerchantsPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::WEBSITE)) $criteria->add(GroupdealsMerchantsPeer::WEBSITE, $this->website);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::EMAIL)) $criteria->add(GroupdealsMerchantsPeer::EMAIL, $this->email);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::FACEBOOK)) $criteria->add(GroupdealsMerchantsPeer::FACEBOOK, $this->facebook);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::TWITTER)) $criteria->add(GroupdealsMerchantsPeer::TWITTER, $this->twitter);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::PHONE)) $criteria->add(GroupdealsMerchantsPeer::PHONE, $this->phone);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::MOBILE)) $criteria->add(GroupdealsMerchantsPeer::MOBILE, $this->mobile);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::BUSINESS_HOURS)) $criteria->add(GroupdealsMerchantsPeer::BUSINESS_HOURS, $this->business_hours);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::ADDRESS)) $criteria->add(GroupdealsMerchantsPeer::ADDRESS, $this->address);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::REDEEM)) $criteria->add(GroupdealsMerchantsPeer::REDEEM, $this->redeem);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::PAYPAL_EMAIL)) $criteria->add(GroupdealsMerchantsPeer::PAYPAL_EMAIL, $this->paypal_email);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::AUTHORIZE_INFO)) $criteria->add(GroupdealsMerchantsPeer::AUTHORIZE_INFO, $this->authorize_info);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::BANK_INFO)) $criteria->add(GroupdealsMerchantsPeer::BANK_INFO, $this->bank_info);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::OTHER)) $criteria->add(GroupdealsMerchantsPeer::OTHER, $this->other);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::STATUS)) $criteria->add(GroupdealsMerchantsPeer::STATUS, $this->status);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::NIT_NUMBER)) $criteria->add(GroupdealsMerchantsPeer::NIT_NUMBER, $this->nit_number);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::AGENT)) $criteria->add(GroupdealsMerchantsPeer::AGENT, $this->agent);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::SERVICE_PROVIDED)) $criteria->add(GroupdealsMerchantsPeer::SERVICE_PROVIDED, $this->service_provided);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::CITY)) $criteria->add(GroupdealsMerchantsPeer::CITY, $this->city);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::COUNTRY)) $criteria->add(GroupdealsMerchantsPeer::COUNTRY, $this->country);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::PRIMARY_CONTACT)) $criteria->add(GroupdealsMerchantsPeer::PRIMARY_CONTACT, $this->primary_contact);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::SECONDARY_CONTACT)) $criteria->add(GroupdealsMerchantsPeer::SECONDARY_CONTACT, $this->secondary_contact);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::LEGAL_NAME)) $criteria->add(GroupdealsMerchantsPeer::LEGAL_NAME, $this->legal_name);
        if ($this->isColumnModified(GroupdealsMerchantsPeer::BRANCH)) $criteria->add(GroupdealsMerchantsPeer::BRANCH, $this->branch);

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
        $criteria = new Criteria(GroupdealsMerchantsPeer::DATABASE_NAME);
        $criteria->add(GroupdealsMerchantsPeer::MERCHANTS_ID, $this->merchants_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getMerchantsId();
    }

    /**
     * Generic method to set the primary key (merchants_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setMerchantsId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getMerchantsId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of GroupdealsMerchants (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setUserId($this->getUserId());
        $copyObj->setPermissions($this->getPermissions());
        $copyObj->setName($this->getName());
        $copyObj->setMerchantLogo($this->getMerchantLogo());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setWebsite($this->getWebsite());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setFacebook($this->getFacebook());
        $copyObj->setTwitter($this->getTwitter());
        $copyObj->setPhone($this->getPhone());
        $copyObj->setMobile($this->getMobile());
        $copyObj->setBusinessHours($this->getBusinessHours());
        $copyObj->setAddress($this->getAddress());
        $copyObj->setRedeem($this->getRedeem());
        $copyObj->setPaypalEmail($this->getPaypalEmail());
        $copyObj->setAuthorizeInfo($this->getAuthorizeInfo());
        $copyObj->setBankInfo($this->getBankInfo());
        $copyObj->setOther($this->getOther());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setNitNumber($this->getNitNumber());
        $copyObj->setAgent($this->getAgent());
        $copyObj->setServiceProvided($this->getServiceProvided());
        $copyObj->setCity($this->getCity());
        $copyObj->setCountry($this->getCountry());
        $copyObj->setPrimaryContact($this->getPrimaryContact());
        $copyObj->setSecondaryContact($this->getSecondaryContact());
        $copyObj->setLegalName($this->getLegalName());
        $copyObj->setBranch($this->getBranch());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getQbcMerchantsCommercialNamess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addQbcMerchantsCommercialNames($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getQbcMerchantsContactss() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addQbcMerchantsContacts($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getAdminUsers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addAdminUser($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setMerchantsId(NULL); // this is a auto-increment column, so set to default value
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
     * @return GroupdealsMerchants Clone of current object.
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
     * @return GroupdealsMerchantsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GroupdealsMerchantsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a MerchantBankInfo object.
     *
     * @param                  MerchantBankInfo $v
     * @return GroupdealsMerchants The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMerchantBankInfo(MerchantBankInfo $v = null)
    {
        if ($v === null) {
            $this->setBankInfo(NULL);
        } else {
            $this->setBankInfo($v->getInfoId());
        }

        $this->aMerchantBankInfo = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the MerchantBankInfo object, it will not be re-added.
        if ($v !== null) {
            $v->addGroupdealsMerchants($this);
        }


        return $this;
    }


    /**
     * Get the associated MerchantBankInfo object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return MerchantBankInfo The associated MerchantBankInfo object.
     * @throws PropelException
     */
    public function getMerchantBankInfo(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aMerchantBankInfo === null && ($this->bank_info !== null) && $doQuery) {
            $this->aMerchantBankInfo = MerchantBankInfoQuery::create()->findPk($this->bank_info, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMerchantBankInfo->addGroupdealsMerchantss($this);
             */
        }

        return $this->aMerchantBankInfo;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('QbcMerchantsCommercialNames' == $relationName) {
            $this->initQbcMerchantsCommercialNamess();
        }
        if ('QbcMerchantsContacts' == $relationName) {
            $this->initQbcMerchantsContactss();
        }
        if ('AdminUser' == $relationName) {
            $this->initAdminUsers();
        }
    }

    /**
     * Clears out the collQbcMerchantsCommercialNamess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GroupdealsMerchants The current object (for fluent API support)
     * @see        addQbcMerchantsCommercialNamess()
     */
    public function clearQbcMerchantsCommercialNamess()
    {
        $this->collQbcMerchantsCommercialNamess = null; // important to set this to null since that means it is uninitialized
        $this->collQbcMerchantsCommercialNamessPartial = null;

        return $this;
    }

    /**
     * reset is the collQbcMerchantsCommercialNamess collection loaded partially
     *
     * @return void
     */
    public function resetPartialQbcMerchantsCommercialNamess($v = true)
    {
        $this->collQbcMerchantsCommercialNamessPartial = $v;
    }

    /**
     * Initializes the collQbcMerchantsCommercialNamess collection.
     *
     * By default this just sets the collQbcMerchantsCommercialNamess collection to an empty array (like clearcollQbcMerchantsCommercialNamess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initQbcMerchantsCommercialNamess($overrideExisting = true)
    {
        if (null !== $this->collQbcMerchantsCommercialNamess && !$overrideExisting) {
            return;
        }
        $this->collQbcMerchantsCommercialNamess = new PropelObjectCollection();
        $this->collQbcMerchantsCommercialNamess->setModel('QbcMerchantsCommercialNames');
    }

    /**
     * Gets an array of QbcMerchantsCommercialNames objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GroupdealsMerchants is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|QbcMerchantsCommercialNames[] List of QbcMerchantsCommercialNames objects
     * @throws PropelException
     */
    public function getQbcMerchantsCommercialNamess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collQbcMerchantsCommercialNamessPartial && !$this->isNew();
        if (null === $this->collQbcMerchantsCommercialNamess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collQbcMerchantsCommercialNamess) {
                // return empty collection
                $this->initQbcMerchantsCommercialNamess();
            } else {
                $collQbcMerchantsCommercialNamess = QbcMerchantsCommercialNamesQuery::create(null, $criteria)
                    ->filterByGroupdealsMerchants($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collQbcMerchantsCommercialNamessPartial && count($collQbcMerchantsCommercialNamess)) {
                      $this->initQbcMerchantsCommercialNamess(false);

                      foreach ($collQbcMerchantsCommercialNamess as $obj) {
                        if (false == $this->collQbcMerchantsCommercialNamess->contains($obj)) {
                          $this->collQbcMerchantsCommercialNamess->append($obj);
                        }
                      }

                      $this->collQbcMerchantsCommercialNamessPartial = true;
                    }

                    $collQbcMerchantsCommercialNamess->getInternalIterator()->rewind();

                    return $collQbcMerchantsCommercialNamess;
                }

                if ($partial && $this->collQbcMerchantsCommercialNamess) {
                    foreach ($this->collQbcMerchantsCommercialNamess as $obj) {
                        if ($obj->isNew()) {
                            $collQbcMerchantsCommercialNamess[] = $obj;
                        }
                    }
                }

                $this->collQbcMerchantsCommercialNamess = $collQbcMerchantsCommercialNamess;
                $this->collQbcMerchantsCommercialNamessPartial = false;
            }
        }

        return $this->collQbcMerchantsCommercialNamess;
    }

    /**
     * Sets a collection of QbcMerchantsCommercialNames objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $qbcMerchantsCommercialNamess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setQbcMerchantsCommercialNamess(PropelCollection $qbcMerchantsCommercialNamess, PropelPDO $con = null)
    {
        $qbcMerchantsCommercialNamessToDelete = $this->getQbcMerchantsCommercialNamess(new Criteria(), $con)->diff($qbcMerchantsCommercialNamess);


        $this->qbcMerchantsCommercialNamessScheduledForDeletion = $qbcMerchantsCommercialNamessToDelete;

        foreach ($qbcMerchantsCommercialNamessToDelete as $qbcMerchantsCommercialNamesRemoved) {
            $qbcMerchantsCommercialNamesRemoved->setGroupdealsMerchants(null);
        }

        $this->collQbcMerchantsCommercialNamess = null;
        foreach ($qbcMerchantsCommercialNamess as $qbcMerchantsCommercialNames) {
            $this->addQbcMerchantsCommercialNames($qbcMerchantsCommercialNames);
        }

        $this->collQbcMerchantsCommercialNamess = $qbcMerchantsCommercialNamess;
        $this->collQbcMerchantsCommercialNamessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related QbcMerchantsCommercialNames objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related QbcMerchantsCommercialNames objects.
     * @throws PropelException
     */
    public function countQbcMerchantsCommercialNamess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collQbcMerchantsCommercialNamessPartial && !$this->isNew();
        if (null === $this->collQbcMerchantsCommercialNamess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collQbcMerchantsCommercialNamess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getQbcMerchantsCommercialNamess());
            }
            $query = QbcMerchantsCommercialNamesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGroupdealsMerchants($this)
                ->count($con);
        }

        return count($this->collQbcMerchantsCommercialNamess);
    }

    /**
     * Method called to associate a QbcMerchantsCommercialNames object to this object
     * through the QbcMerchantsCommercialNames foreign key attribute.
     *
     * @param    QbcMerchantsCommercialNames $l QbcMerchantsCommercialNames
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function addQbcMerchantsCommercialNames(QbcMerchantsCommercialNames $l)
    {
        if ($this->collQbcMerchantsCommercialNamess === null) {
            $this->initQbcMerchantsCommercialNamess();
            $this->collQbcMerchantsCommercialNamessPartial = true;
        }

        if (!in_array($l, $this->collQbcMerchantsCommercialNamess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddQbcMerchantsCommercialNames($l);

            if ($this->qbcMerchantsCommercialNamessScheduledForDeletion and $this->qbcMerchantsCommercialNamessScheduledForDeletion->contains($l)) {
                $this->qbcMerchantsCommercialNamessScheduledForDeletion->remove($this->qbcMerchantsCommercialNamessScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	QbcMerchantsCommercialNames $qbcMerchantsCommercialNames The qbcMerchantsCommercialNames object to add.
     */
    protected function doAddQbcMerchantsCommercialNames($qbcMerchantsCommercialNames)
    {
        $this->collQbcMerchantsCommercialNamess[]= $qbcMerchantsCommercialNames;
        $qbcMerchantsCommercialNames->setGroupdealsMerchants($this);
    }

    /**
     * @param	QbcMerchantsCommercialNames $qbcMerchantsCommercialNames The qbcMerchantsCommercialNames object to remove.
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function removeQbcMerchantsCommercialNames($qbcMerchantsCommercialNames)
    {
        if ($this->getQbcMerchantsCommercialNamess()->contains($qbcMerchantsCommercialNames)) {
            $this->collQbcMerchantsCommercialNamess->remove($this->collQbcMerchantsCommercialNamess->search($qbcMerchantsCommercialNames));
            if (null === $this->qbcMerchantsCommercialNamessScheduledForDeletion) {
                $this->qbcMerchantsCommercialNamessScheduledForDeletion = clone $this->collQbcMerchantsCommercialNamess;
                $this->qbcMerchantsCommercialNamessScheduledForDeletion->clear();
            }
            $this->qbcMerchantsCommercialNamessScheduledForDeletion[]= clone $qbcMerchantsCommercialNames;
            $qbcMerchantsCommercialNames->setGroupdealsMerchants(null);
        }

        return $this;
    }

    /**
     * Clears out the collQbcMerchantsContactss collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GroupdealsMerchants The current object (for fluent API support)
     * @see        addQbcMerchantsContactss()
     */
    public function clearQbcMerchantsContactss()
    {
        $this->collQbcMerchantsContactss = null; // important to set this to null since that means it is uninitialized
        $this->collQbcMerchantsContactssPartial = null;

        return $this;
    }

    /**
     * reset is the collQbcMerchantsContactss collection loaded partially
     *
     * @return void
     */
    public function resetPartialQbcMerchantsContactss($v = true)
    {
        $this->collQbcMerchantsContactssPartial = $v;
    }

    /**
     * Initializes the collQbcMerchantsContactss collection.
     *
     * By default this just sets the collQbcMerchantsContactss collection to an empty array (like clearcollQbcMerchantsContactss());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initQbcMerchantsContactss($overrideExisting = true)
    {
        if (null !== $this->collQbcMerchantsContactss && !$overrideExisting) {
            return;
        }
        $this->collQbcMerchantsContactss = new PropelObjectCollection();
        $this->collQbcMerchantsContactss->setModel('QbcMerchantsContacts');
    }

    /**
     * Gets an array of QbcMerchantsContacts objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GroupdealsMerchants is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|QbcMerchantsContacts[] List of QbcMerchantsContacts objects
     * @throws PropelException
     */
    public function getQbcMerchantsContactss($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collQbcMerchantsContactssPartial && !$this->isNew();
        if (null === $this->collQbcMerchantsContactss || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collQbcMerchantsContactss) {
                // return empty collection
                $this->initQbcMerchantsContactss();
            } else {
                $collQbcMerchantsContactss = QbcMerchantsContactsQuery::create(null, $criteria)
                    ->filterByGroupdealsMerchants($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collQbcMerchantsContactssPartial && count($collQbcMerchantsContactss)) {
                      $this->initQbcMerchantsContactss(false);

                      foreach ($collQbcMerchantsContactss as $obj) {
                        if (false == $this->collQbcMerchantsContactss->contains($obj)) {
                          $this->collQbcMerchantsContactss->append($obj);
                        }
                      }

                      $this->collQbcMerchantsContactssPartial = true;
                    }

                    $collQbcMerchantsContactss->getInternalIterator()->rewind();

                    return $collQbcMerchantsContactss;
                }

                if ($partial && $this->collQbcMerchantsContactss) {
                    foreach ($this->collQbcMerchantsContactss as $obj) {
                        if ($obj->isNew()) {
                            $collQbcMerchantsContactss[] = $obj;
                        }
                    }
                }

                $this->collQbcMerchantsContactss = $collQbcMerchantsContactss;
                $this->collQbcMerchantsContactssPartial = false;
            }
        }

        return $this->collQbcMerchantsContactss;
    }

    /**
     * Sets a collection of QbcMerchantsContacts objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $qbcMerchantsContactss A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setQbcMerchantsContactss(PropelCollection $qbcMerchantsContactss, PropelPDO $con = null)
    {
        $qbcMerchantsContactssToDelete = $this->getQbcMerchantsContactss(new Criteria(), $con)->diff($qbcMerchantsContactss);


        $this->qbcMerchantsContactssScheduledForDeletion = $qbcMerchantsContactssToDelete;

        foreach ($qbcMerchantsContactssToDelete as $qbcMerchantsContactsRemoved) {
            $qbcMerchantsContactsRemoved->setGroupdealsMerchants(null);
        }

        $this->collQbcMerchantsContactss = null;
        foreach ($qbcMerchantsContactss as $qbcMerchantsContacts) {
            $this->addQbcMerchantsContacts($qbcMerchantsContacts);
        }

        $this->collQbcMerchantsContactss = $qbcMerchantsContactss;
        $this->collQbcMerchantsContactssPartial = false;

        return $this;
    }

    /**
     * Returns the number of related QbcMerchantsContacts objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related QbcMerchantsContacts objects.
     * @throws PropelException
     */
    public function countQbcMerchantsContactss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collQbcMerchantsContactssPartial && !$this->isNew();
        if (null === $this->collQbcMerchantsContactss || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collQbcMerchantsContactss) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getQbcMerchantsContactss());
            }
            $query = QbcMerchantsContactsQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGroupdealsMerchants($this)
                ->count($con);
        }

        return count($this->collQbcMerchantsContactss);
    }

    /**
     * Method called to associate a QbcMerchantsContacts object to this object
     * through the QbcMerchantsContacts foreign key attribute.
     *
     * @param    QbcMerchantsContacts $l QbcMerchantsContacts
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function addQbcMerchantsContacts(QbcMerchantsContacts $l)
    {
        if ($this->collQbcMerchantsContactss === null) {
            $this->initQbcMerchantsContactss();
            $this->collQbcMerchantsContactssPartial = true;
        }

        if (!in_array($l, $this->collQbcMerchantsContactss->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddQbcMerchantsContacts($l);

            if ($this->qbcMerchantsContactssScheduledForDeletion and $this->qbcMerchantsContactssScheduledForDeletion->contains($l)) {
                $this->qbcMerchantsContactssScheduledForDeletion->remove($this->qbcMerchantsContactssScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	QbcMerchantsContacts $qbcMerchantsContacts The qbcMerchantsContacts object to add.
     */
    protected function doAddQbcMerchantsContacts($qbcMerchantsContacts)
    {
        $this->collQbcMerchantsContactss[]= $qbcMerchantsContacts;
        $qbcMerchantsContacts->setGroupdealsMerchants($this);
    }

    /**
     * @param	QbcMerchantsContacts $qbcMerchantsContacts The qbcMerchantsContacts object to remove.
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function removeQbcMerchantsContacts($qbcMerchantsContacts)
    {
        if ($this->getQbcMerchantsContactss()->contains($qbcMerchantsContacts)) {
            $this->collQbcMerchantsContactss->remove($this->collQbcMerchantsContactss->search($qbcMerchantsContacts));
            if (null === $this->qbcMerchantsContactssScheduledForDeletion) {
                $this->qbcMerchantsContactssScheduledForDeletion = clone $this->collQbcMerchantsContactss;
                $this->qbcMerchantsContactssScheduledForDeletion->clear();
            }
            $this->qbcMerchantsContactssScheduledForDeletion[]= clone $qbcMerchantsContacts;
            $qbcMerchantsContacts->setGroupdealsMerchants(null);
        }

        return $this;
    }

    /**
     * Clears out the collAdminUsers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return GroupdealsMerchants The current object (for fluent API support)
     * @see        addAdminUsers()
     */
    public function clearAdminUsers()
    {
        $this->collAdminUsers = null; // important to set this to null since that means it is uninitialized
        $this->collAdminUsersPartial = null;

        return $this;
    }

    /**
     * reset is the collAdminUsers collection loaded partially
     *
     * @return void
     */
    public function resetPartialAdminUsers($v = true)
    {
        $this->collAdminUsersPartial = $v;
    }

    /**
     * Initializes the collAdminUsers collection.
     *
     * By default this just sets the collAdminUsers collection to an empty array (like clearcollAdminUsers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initAdminUsers($overrideExisting = true)
    {
        if (null !== $this->collAdminUsers && !$overrideExisting) {
            return;
        }
        $this->collAdminUsers = new PropelObjectCollection();
        $this->collAdminUsers->setModel('AdminUser');
    }

    /**
     * Gets an array of AdminUser objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this GroupdealsMerchants is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|AdminUser[] List of AdminUser objects
     * @throws PropelException
     */
    public function getAdminUsers($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collAdminUsersPartial && !$this->isNew();
        if (null === $this->collAdminUsers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collAdminUsers) {
                // return empty collection
                $this->initAdminUsers();
            } else {
                $collAdminUsers = AdminUserQuery::create(null, $criteria)
                    ->filterByGroupdealsMerchants($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collAdminUsersPartial && count($collAdminUsers)) {
                      $this->initAdminUsers(false);

                      foreach ($collAdminUsers as $obj) {
                        if (false == $this->collAdminUsers->contains($obj)) {
                          $this->collAdminUsers->append($obj);
                        }
                      }

                      $this->collAdminUsersPartial = true;
                    }

                    $collAdminUsers->getInternalIterator()->rewind();

                    return $collAdminUsers;
                }

                if ($partial && $this->collAdminUsers) {
                    foreach ($this->collAdminUsers as $obj) {
                        if ($obj->isNew()) {
                            $collAdminUsers[] = $obj;
                        }
                    }
                }

                $this->collAdminUsers = $collAdminUsers;
                $this->collAdminUsersPartial = false;
            }
        }

        return $this->collAdminUsers;
    }

    /**
     * Sets a collection of AdminUser objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $adminUsers A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function setAdminUsers(PropelCollection $adminUsers, PropelPDO $con = null)
    {
        $adminUsersToDelete = $this->getAdminUsers(new Criteria(), $con)->diff($adminUsers);


        $this->adminUsersScheduledForDeletion = $adminUsersToDelete;

        foreach ($adminUsersToDelete as $adminUserRemoved) {
            $adminUserRemoved->setGroupdealsMerchants(null);
        }

        $this->collAdminUsers = null;
        foreach ($adminUsers as $adminUser) {
            $this->addAdminUser($adminUser);
        }

        $this->collAdminUsers = $adminUsers;
        $this->collAdminUsersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related AdminUser objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related AdminUser objects.
     * @throws PropelException
     */
    public function countAdminUsers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collAdminUsersPartial && !$this->isNew();
        if (null === $this->collAdminUsers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collAdminUsers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getAdminUsers());
            }
            $query = AdminUserQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByGroupdealsMerchants($this)
                ->count($con);
        }

        return count($this->collAdminUsers);
    }

    /**
     * Method called to associate a AdminUser object to this object
     * through the AdminUser foreign key attribute.
     *
     * @param    AdminUser $l AdminUser
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function addAdminUser(AdminUser $l)
    {
        if ($this->collAdminUsers === null) {
            $this->initAdminUsers();
            $this->collAdminUsersPartial = true;
        }

        if (!in_array($l, $this->collAdminUsers->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddAdminUser($l);

            if ($this->adminUsersScheduledForDeletion and $this->adminUsersScheduledForDeletion->contains($l)) {
                $this->adminUsersScheduledForDeletion->remove($this->adminUsersScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	AdminUser $adminUser The adminUser object to add.
     */
    protected function doAddAdminUser($adminUser)
    {
        $this->collAdminUsers[]= $adminUser;
        $adminUser->setGroupdealsMerchants($this);
    }

    /**
     * @param	AdminUser $adminUser The adminUser object to remove.
     * @return GroupdealsMerchants The current object (for fluent API support)
     */
    public function removeAdminUser($adminUser)
    {
        if ($this->getAdminUsers()->contains($adminUser)) {
            $this->collAdminUsers->remove($this->collAdminUsers->search($adminUser));
            if (null === $this->adminUsersScheduledForDeletion) {
                $this->adminUsersScheduledForDeletion = clone $this->collAdminUsers;
                $this->adminUsersScheduledForDeletion->clear();
            }
            $this->adminUsersScheduledForDeletion[]= $adminUser;
            $adminUser->setGroupdealsMerchants(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this GroupdealsMerchants is new, it will return
     * an empty collection; or if this GroupdealsMerchants has previously
     * been saved, it will retrieve related AdminUsers from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in GroupdealsMerchants.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|AdminUser[] List of AdminUser objects
     */
    public function getAdminUsersJoinQbcPos($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = AdminUserQuery::create(null, $criteria);
        $query->joinWith('QbcPos', $join_behavior);

        return $this->getAdminUsers($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->merchants_id = null;
        $this->user_id = null;
        $this->permissions = null;
        $this->name = null;
        $this->merchant_logo = null;
        $this->description = null;
        $this->website = null;
        $this->email = null;
        $this->facebook = null;
        $this->twitter = null;
        $this->phone = null;
        $this->mobile = null;
        $this->business_hours = null;
        $this->address = null;
        $this->redeem = null;
        $this->paypal_email = null;
        $this->authorize_info = null;
        $this->bank_info = null;
        $this->other = null;
        $this->status = null;
        $this->nit_number = null;
        $this->agent = null;
        $this->service_provided = null;
        $this->city = null;
        $this->country = null;
        $this->primary_contact = null;
        $this->secondary_contact = null;
        $this->legal_name = null;
        $this->branch = null;
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
            if ($this->collQbcMerchantsCommercialNamess) {
                foreach ($this->collQbcMerchantsCommercialNamess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collQbcMerchantsContactss) {
                foreach ($this->collQbcMerchantsContactss as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collAdminUsers) {
                foreach ($this->collAdminUsers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aMerchantBankInfo instanceof Persistent) {
              $this->aMerchantBankInfo->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collQbcMerchantsCommercialNamess instanceof PropelCollection) {
            $this->collQbcMerchantsCommercialNamess->clearIterator();
        }
        $this->collQbcMerchantsCommercialNamess = null;
        if ($this->collQbcMerchantsContactss instanceof PropelCollection) {
            $this->collQbcMerchantsContactss->clearIterator();
        }
        $this->collQbcMerchantsContactss = null;
        if ($this->collAdminUsers instanceof PropelCollection) {
            $this->collAdminUsers->clearIterator();
        }
        $this->collAdminUsers = null;
        $this->aMerchantBankInfo = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GroupdealsMerchantsPeer::DEFAULT_STRING_FORMAT);
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
