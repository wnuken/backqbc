<?php


/**
 * Base class that represents a row from the 'groupdeals' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseGroupdeals extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'GroupdealsPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        GroupdealsPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the groupdeals_id field.
     * @var        int
     */
    protected $groupdeals_id;

    /**
     * The value for the product_id field.
     * @var        int
     */
    protected $product_id;

    /**
     * The value for the merchant_id field.
     * @var        int
     */
    protected $merchant_id;

    /**
     * The value for the minimum_qty field.
     * @var        int
     */
    protected $minimum_qty;

    /**
     * The value for the maximum_qty field.
     * @var        int
     */
    protected $maximum_qty;

    /**
     * The value for the target_met_email field.
     * @var        int
     */
    protected $target_met_email;

    /**
     * The value for the coupon_barcode field.
     * @var        string
     */
    protected $coupon_barcode;

    /**
     * The value for the coupon_merchant_address field.
     * @var        int
     */
    protected $coupon_merchant_address;

    /**
     * The value for the coupon_merchant_contact field.
     * @var        int
     */
    protected $coupon_merchant_contact;

    /**
     * The value for the coupon_expiration_date field.
     * @var        string
     */
    protected $coupon_expiration_date;

    /**
     * The value for the coupon_price field.
     * @var        int
     */
    protected $coupon_price;

    /**
     * The value for the coupon_fine_print field.
     * @var        int
     */
    protected $coupon_fine_print;

    /**
     * The value for the coupon_highlights field.
     * @var        int
     */
    protected $coupon_highlights;

    /**
     * The value for the coupon_merchant_description field.
     * @var        int
     */
    protected $coupon_merchant_description;

    /**
     * The value for the coupon_business_hours field.
     * @var        int
     */
    protected $coupon_business_hours;

    /**
     * The value for the coupon_merchant_logo field.
     * @var        int
     */
    protected $coupon_merchant_logo;

    /**
     * The value for the coupon_additional_info field.
     * @var        string
     */
    protected $coupon_additional_info;

    /**
     * The value for the position field.
     * @var        int
     */
    protected $position;

    /**
     * The value for the title_long field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $title_long;

    /**
     * The value for the title_midium field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $title_midium;

    /**
     * The value for the title_short field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $title_short;

    /**
     * The value for the beneffits field.
     * @var        string
     */
    protected $beneffits;

    /**
     * The value for the deal_instructions field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $deal_instructions;

    /**
     * The value for the conditions field.
     * @var        string
     */
    protected $conditions;

    /**
     * The value for the edition_state field.
     * @var        int
     */
    protected $edition_state;

    /**
     * The value for the publication_state field.
     * @var        int
     */
    protected $publication_state;

    /**
     * The value for the product_type field.
     * @var        int
     */
    protected $product_type;

    /**
     * The value for the expiration_date field.
     * @var        string
     */
    protected $expiration_date;

    /**
     * The value for the tcc field.
     * @var        int
     */
    protected $tcc;

    /**
     * The value for the negociation_type field.
     * @var        int
     */
    protected $negociation_type;

    /**
     * The value for the agreement_type field.
     * @var        int
     */
    protected $agreement_type;

    /**
     * The value for the buys_per_user field.
     * @var        int
     */
    protected $buys_per_user;

    /**
     * The value for the video_html5 field.
     * @var        string
     */
    protected $video_html5;

    /**
     * The value for the video_flash field.
     * @var        string
     */
    protected $video_flash;

    /**
     * The value for the reference field.
     * @var        int
     */
    protected $reference;

    /**
     * The value for the payment_id field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $payment_id;

    /**
     * The value for the boost_sales field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $boost_sales;

    /**
     * The value for the locations field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $locations;

    /**
     * The value for the et_gain field.
     * @var        double
     */
    protected $et_gain;

    /**
     * The value for the active_date field.
     * @var        string
     */
    protected $active_date;

    /**
     * The value for the treasury_type field.
     * @var        int
     */
    protected $treasury_type;

    /**
     * The value for the commercial_name_id field.
     * @var        int
     */
    protected $commercial_name_id;

    /**
     * The value for the orders_count field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $orders_count;

    /**
     * The value for the active_offer field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $active_offer;

    /**
     * The value for the is_closed field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_closed;

    /**
     * The value for the qty_sold field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $qty_sold;

    /**
     * The value for the init_stock field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $init_stock;

    /**
     * The value for the with_personalized_coupons field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $with_personalized_coupons;

    /**
     * The value for the code_type field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $code_type;

    /**
     * @var        TreasuryTypes
     */
    protected $aTreasuryTypes;

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
        $this->title_long = '';
        $this->title_midium = '';
        $this->title_short = '';
        $this->deal_instructions = '';
        $this->payment_id = '';
        $this->boost_sales = 0;
        $this->locations = '';
        $this->orders_count = 0;
        $this->active_offer = 1;
        $this->is_closed = 0;
        $this->qty_sold = 0;
        $this->init_stock = 0;
        $this->with_personalized_coupons = 0;
        $this->code_type = 0;
    }

    /**
     * Initializes internal state of BaseGroupdeals object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [groupdeals_id] column value.
     *
     * @return int
     */
    public function getGroupdealsId()
    {

        return $this->groupdeals_id;
    }

    /**
     * Get the [product_id] column value.
     *
     * @return int
     */
    public function getProductId()
    {

        return $this->product_id;
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
     * Get the [minimum_qty] column value.
     *
     * @return int
     */
    public function getMinimumQty()
    {

        return $this->minimum_qty;
    }

    /**
     * Get the [maximum_qty] column value.
     *
     * @return int
     */
    public function getMaximumQty()
    {

        return $this->maximum_qty;
    }

    /**
     * Get the [target_met_email] column value.
     *
     * @return int
     */
    public function getTargetMetEmail()
    {

        return $this->target_met_email;
    }

    /**
     * Get the [coupon_barcode] column value.
     *
     * @return string
     */
    public function getCouponBarcode()
    {

        return $this->coupon_barcode;
    }

    /**
     * Get the [coupon_merchant_address] column value.
     *
     * @return int
     */
    public function getCouponMerchantAddress()
    {

        return $this->coupon_merchant_address;
    }

    /**
     * Get the [coupon_merchant_contact] column value.
     *
     * @return int
     */
    public function getCouponMerchantContact()
    {

        return $this->coupon_merchant_contact;
    }

    /**
     * Get the [optionally formatted] temporal [coupon_expiration_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCouponExpirationDate($format = '%x')
    {
        if ($this->coupon_expiration_date === null) {
            return null;
        }

        if ($this->coupon_expiration_date === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->coupon_expiration_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->coupon_expiration_date, true), $x);
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
     * Get the [coupon_price] column value.
     *
     * @return int
     */
    public function getCouponPrice()
    {

        return $this->coupon_price;
    }

    /**
     * Get the [coupon_fine_print] column value.
     *
     * @return int
     */
    public function getCouponFinePrint()
    {

        return $this->coupon_fine_print;
    }

    /**
     * Get the [coupon_highlights] column value.
     *
     * @return int
     */
    public function getCouponHighlights()
    {

        return $this->coupon_highlights;
    }

    /**
     * Get the [coupon_merchant_description] column value.
     *
     * @return int
     */
    public function getCouponMerchantDescription()
    {

        return $this->coupon_merchant_description;
    }

    /**
     * Get the [coupon_business_hours] column value.
     *
     * @return int
     */
    public function getCouponBusinessHours()
    {

        return $this->coupon_business_hours;
    }

    /**
     * Get the [coupon_merchant_logo] column value.
     *
     * @return int
     */
    public function getCouponMerchantLogo()
    {

        return $this->coupon_merchant_logo;
    }

    /**
     * Get the [coupon_additional_info] column value.
     *
     * @return string
     */
    public function getCouponAdditionalInfo()
    {

        return $this->coupon_additional_info;
    }

    /**
     * Get the [position] column value.
     *
     * @return int
     */
    public function getPosition()
    {

        return $this->position;
    }

    /**
     * Get the [title_long] column value.
     *
     * @return string
     */
    public function getTitleLong()
    {

        return $this->title_long;
    }

    /**
     * Get the [title_midium] column value.
     *
     * @return string
     */
    public function getTitleMidium()
    {

        return $this->title_midium;
    }

    /**
     * Get the [title_short] column value.
     *
     * @return string
     */
    public function getTitleShort()
    {

        return $this->title_short;
    }

    /**
     * Get the [beneffits] column value.
     *
     * @return string
     */
    public function getBeneffits()
    {

        return $this->beneffits;
    }

    /**
     * Get the [deal_instructions] column value.
     *
     * @return string
     */
    public function getDealInstructions()
    {

        return $this->deal_instructions;
    }

    /**
     * Get the [conditions] column value.
     *
     * @return string
     */
    public function getConditions()
    {

        return $this->conditions;
    }

    /**
     * Get the [edition_state] column value.
     *
     * @return int
     */
    public function getEditionState()
    {

        return $this->edition_state;
    }

    /**
     * Get the [publication_state] column value.
     *
     * @return int
     */
    public function getPublicationState()
    {

        return $this->publication_state;
    }

    /**
     * Get the [product_type] column value.
     *
     * @return int
     */
    public function getProductType()
    {

        return $this->product_type;
    }

    /**
     * Get the [expiration_date] column value.
     *
     * @return string
     */
    public function getExpirationDate()
    {

        return $this->expiration_date;
    }

    /**
     * Get the [tcc] column value.
     *
     * @return int
     */
    public function getTcc()
    {

        return $this->tcc;
    }

    /**
     * Get the [negociation_type] column value.
     *
     * @return int
     */
    public function getNegociationType()
    {

        return $this->negociation_type;
    }

    /**
     * Get the [agreement_type] column value.
     *
     * @return int
     */
    public function getAgreementType()
    {

        return $this->agreement_type;
    }

    /**
     * Get the [buys_per_user] column value.
     *
     * @return int
     */
    public function getBuysPerUser()
    {

        return $this->buys_per_user;
    }

    /**
     * Get the [video_html5] column value.
     *
     * @return string
     */
    public function getVideoHtml5()
    {

        return $this->video_html5;
    }

    /**
     * Get the [video_flash] column value.
     *
     * @return string
     */
    public function getVideoFlash()
    {

        return $this->video_flash;
    }

    /**
     * Get the [reference] column value.
     *
     * @return int
     */
    public function getReference()
    {

        return $this->reference;
    }

    /**
     * Get the [payment_id] column value.
     *
     * @return string
     */
    public function getPaymentId()
    {

        return $this->payment_id;
    }

    /**
     * Get the [boost_sales] column value.
     *
     * @return int
     */
    public function getBoostSales()
    {

        return $this->boost_sales;
    }

    /**
     * Get the [locations] column value.
     *
     * @return string
     */
    public function getLocations()
    {

        return $this->locations;
    }

    /**
     * Get the [et_gain] column value.
     *
     * @return double
     */
    public function getEtGain()
    {

        return $this->et_gain;
    }

    /**
     * Get the [optionally formatted] temporal [active_date] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getActiveDate($format = 'Y-m-d H:i:s')
    {
        if ($this->active_date === null) {
            return null;
        }

        if ($this->active_date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->active_date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->active_date, true), $x);
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
     * Get the [treasury_type] column value.
     *
     * @return int
     */
    public function getTreasuryType()
    {

        return $this->treasury_type;
    }

    /**
     * Get the [commercial_name_id] column value.
     *
     * @return int
     */
    public function getCommercialNameId()
    {

        return $this->commercial_name_id;
    }

    /**
     * Get the [orders_count] column value.
     *
     * @return int
     */
    public function getOrdersCount()
    {

        return $this->orders_count;
    }

    /**
     * Get the [active_offer] column value.
     *
     * @return int
     */
    public function getActiveOffer()
    {

        return $this->active_offer;
    }

    /**
     * Get the [is_closed] column value.
     *
     * @return int
     */
    public function getIsClosed()
    {

        return $this->is_closed;
    }

    /**
     * Get the [qty_sold] column value.
     *
     * @return int
     */
    public function getQtySold()
    {

        return $this->qty_sold;
    }

    /**
     * Get the [init_stock] column value.
     *
     * @return int
     */
    public function getInitStock()
    {

        return $this->init_stock;
    }

    /**
     * Get the [with_personalized_coupons] column value.
     *
     * @return int
     */
    public function getWithPersonalizedCoupons()
    {

        return $this->with_personalized_coupons;
    }

    /**
     * Get the [code_type] column value.
     *
     * @return int
     */
    public function getCodeType()
    {

        return $this->code_type;
    }

    /**
     * Set the value of [groupdeals_id] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setGroupdealsId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->groupdeals_id !== $v) {
            $this->groupdeals_id = $v;
            $this->modifiedColumns[] = GroupdealsPeer::GROUPDEALS_ID;
        }


        return $this;
    } // setGroupdealsId()

    /**
     * Set the value of [product_id] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setProductId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->product_id !== $v) {
            $this->product_id = $v;
            $this->modifiedColumns[] = GroupdealsPeer::PRODUCT_ID;
        }


        return $this;
    } // setProductId()

    /**
     * Set the value of [merchant_id] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setMerchantId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->merchant_id !== $v) {
            $this->merchant_id = $v;
            $this->modifiedColumns[] = GroupdealsPeer::MERCHANT_ID;
        }


        return $this;
    } // setMerchantId()

    /**
     * Set the value of [minimum_qty] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setMinimumQty($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->minimum_qty !== $v) {
            $this->minimum_qty = $v;
            $this->modifiedColumns[] = GroupdealsPeer::MINIMUM_QTY;
        }


        return $this;
    } // setMinimumQty()

    /**
     * Set the value of [maximum_qty] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setMaximumQty($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->maximum_qty !== $v) {
            $this->maximum_qty = $v;
            $this->modifiedColumns[] = GroupdealsPeer::MAXIMUM_QTY;
        }


        return $this;
    } // setMaximumQty()

    /**
     * Set the value of [target_met_email] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setTargetMetEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->target_met_email !== $v) {
            $this->target_met_email = $v;
            $this->modifiedColumns[] = GroupdealsPeer::TARGET_MET_EMAIL;
        }


        return $this;
    } // setTargetMetEmail()

    /**
     * Set the value of [coupon_barcode] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponBarcode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->coupon_barcode !== $v) {
            $this->coupon_barcode = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COUPON_BARCODE;
        }


        return $this;
    } // setCouponBarcode()

    /**
     * Set the value of [coupon_merchant_address] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponMerchantAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coupon_merchant_address !== $v) {
            $this->coupon_merchant_address = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COUPON_MERCHANT_ADDRESS;
        }


        return $this;
    } // setCouponMerchantAddress()

    /**
     * Set the value of [coupon_merchant_contact] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponMerchantContact($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coupon_merchant_contact !== $v) {
            $this->coupon_merchant_contact = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COUPON_MERCHANT_CONTACT;
        }


        return $this;
    } // setCouponMerchantContact()

    /**
     * Sets the value of [coupon_expiration_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponExpirationDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->coupon_expiration_date !== null || $dt !== null) {
            $currentDateAsString = ($this->coupon_expiration_date !== null && $tmpDt = new DateTime($this->coupon_expiration_date)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->coupon_expiration_date = $newDateAsString;
                $this->modifiedColumns[] = GroupdealsPeer::COUPON_EXPIRATION_DATE;
            }
        } // if either are not null


        return $this;
    } // setCouponExpirationDate()

    /**
     * Set the value of [coupon_price] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coupon_price !== $v) {
            $this->coupon_price = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COUPON_PRICE;
        }


        return $this;
    } // setCouponPrice()

    /**
     * Set the value of [coupon_fine_print] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponFinePrint($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coupon_fine_print !== $v) {
            $this->coupon_fine_print = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COUPON_FINE_PRINT;
        }


        return $this;
    } // setCouponFinePrint()

    /**
     * Set the value of [coupon_highlights] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponHighlights($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coupon_highlights !== $v) {
            $this->coupon_highlights = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COUPON_HIGHLIGHTS;
        }


        return $this;
    } // setCouponHighlights()

    /**
     * Set the value of [coupon_merchant_description] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponMerchantDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coupon_merchant_description !== $v) {
            $this->coupon_merchant_description = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COUPON_MERCHANT_DESCRIPTION;
        }


        return $this;
    } // setCouponMerchantDescription()

    /**
     * Set the value of [coupon_business_hours] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponBusinessHours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coupon_business_hours !== $v) {
            $this->coupon_business_hours = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COUPON_BUSINESS_HOURS;
        }


        return $this;
    } // setCouponBusinessHours()

    /**
     * Set the value of [coupon_merchant_logo] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponMerchantLogo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->coupon_merchant_logo !== $v) {
            $this->coupon_merchant_logo = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COUPON_MERCHANT_LOGO;
        }


        return $this;
    } // setCouponMerchantLogo()

    /**
     * Set the value of [coupon_additional_info] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCouponAdditionalInfo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->coupon_additional_info !== $v) {
            $this->coupon_additional_info = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COUPON_ADDITIONAL_INFO;
        }


        return $this;
    } // setCouponAdditionalInfo()

    /**
     * Set the value of [position] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setPosition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->position !== $v) {
            $this->position = $v;
            $this->modifiedColumns[] = GroupdealsPeer::POSITION;
        }


        return $this;
    } // setPosition()

    /**
     * Set the value of [title_long] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setTitleLong($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title_long !== $v) {
            $this->title_long = $v;
            $this->modifiedColumns[] = GroupdealsPeer::TITLE_LONG;
        }


        return $this;
    } // setTitleLong()

    /**
     * Set the value of [title_midium] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setTitleMidium($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title_midium !== $v) {
            $this->title_midium = $v;
            $this->modifiedColumns[] = GroupdealsPeer::TITLE_MIDIUM;
        }


        return $this;
    } // setTitleMidium()

    /**
     * Set the value of [title_short] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setTitleShort($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->title_short !== $v) {
            $this->title_short = $v;
            $this->modifiedColumns[] = GroupdealsPeer::TITLE_SHORT;
        }


        return $this;
    } // setTitleShort()

    /**
     * Set the value of [beneffits] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setBeneffits($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->beneffits !== $v) {
            $this->beneffits = $v;
            $this->modifiedColumns[] = GroupdealsPeer::BENEFFITS;
        }


        return $this;
    } // setBeneffits()

    /**
     * Set the value of [deal_instructions] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setDealInstructions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->deal_instructions !== $v) {
            $this->deal_instructions = $v;
            $this->modifiedColumns[] = GroupdealsPeer::DEAL_INSTRUCTIONS;
        }


        return $this;
    } // setDealInstructions()

    /**
     * Set the value of [conditions] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setConditions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->conditions !== $v) {
            $this->conditions = $v;
            $this->modifiedColumns[] = GroupdealsPeer::CONDITIONS;
        }


        return $this;
    } // setConditions()

    /**
     * Set the value of [edition_state] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setEditionState($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->edition_state !== $v) {
            $this->edition_state = $v;
            $this->modifiedColumns[] = GroupdealsPeer::EDITION_STATE;
        }


        return $this;
    } // setEditionState()

    /**
     * Set the value of [publication_state] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setPublicationState($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->publication_state !== $v) {
            $this->publication_state = $v;
            $this->modifiedColumns[] = GroupdealsPeer::PUBLICATION_STATE;
        }


        return $this;
    } // setPublicationState()

    /**
     * Set the value of [product_type] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setProductType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->product_type !== $v) {
            $this->product_type = $v;
            $this->modifiedColumns[] = GroupdealsPeer::PRODUCT_TYPE;
        }


        return $this;
    } // setProductType()

    /**
     * Set the value of [expiration_date] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setExpirationDate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->expiration_date !== $v) {
            $this->expiration_date = $v;
            $this->modifiedColumns[] = GroupdealsPeer::EXPIRATION_DATE;
        }


        return $this;
    } // setExpirationDate()

    /**
     * Set the value of [tcc] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setTcc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tcc !== $v) {
            $this->tcc = $v;
            $this->modifiedColumns[] = GroupdealsPeer::TCC;
        }


        return $this;
    } // setTcc()

    /**
     * Set the value of [negociation_type] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setNegociationType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->negociation_type !== $v) {
            $this->negociation_type = $v;
            $this->modifiedColumns[] = GroupdealsPeer::NEGOCIATION_TYPE;
        }


        return $this;
    } // setNegociationType()

    /**
     * Set the value of [agreement_type] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setAgreementType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agreement_type !== $v) {
            $this->agreement_type = $v;
            $this->modifiedColumns[] = GroupdealsPeer::AGREEMENT_TYPE;
        }


        return $this;
    } // setAgreementType()

    /**
     * Set the value of [buys_per_user] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setBuysPerUser($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->buys_per_user !== $v) {
            $this->buys_per_user = $v;
            $this->modifiedColumns[] = GroupdealsPeer::BUYS_PER_USER;
        }


        return $this;
    } // setBuysPerUser()

    /**
     * Set the value of [video_html5] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setVideoHtml5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->video_html5 !== $v) {
            $this->video_html5 = $v;
            $this->modifiedColumns[] = GroupdealsPeer::VIDEO_HTML5;
        }


        return $this;
    } // setVideoHtml5()

    /**
     * Set the value of [video_flash] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setVideoFlash($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->video_flash !== $v) {
            $this->video_flash = $v;
            $this->modifiedColumns[] = GroupdealsPeer::VIDEO_FLASH;
        }


        return $this;
    } // setVideoFlash()

    /**
     * Set the value of [reference] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reference !== $v) {
            $this->reference = $v;
            $this->modifiedColumns[] = GroupdealsPeer::REFERENCE;
        }


        return $this;
    } // setReference()

    /**
     * Set the value of [payment_id] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setPaymentId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment_id !== $v) {
            $this->payment_id = $v;
            $this->modifiedColumns[] = GroupdealsPeer::PAYMENT_ID;
        }


        return $this;
    } // setPaymentId()

    /**
     * Set the value of [boost_sales] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setBoostSales($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->boost_sales !== $v) {
            $this->boost_sales = $v;
            $this->modifiedColumns[] = GroupdealsPeer::BOOST_SALES;
        }


        return $this;
    } // setBoostSales()

    /**
     * Set the value of [locations] column.
     *
     * @param  string $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setLocations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->locations !== $v) {
            $this->locations = $v;
            $this->modifiedColumns[] = GroupdealsPeer::LOCATIONS;
        }


        return $this;
    } // setLocations()

    /**
     * Set the value of [et_gain] column.
     *
     * @param  double $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setEtGain($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->et_gain !== $v) {
            $this->et_gain = $v;
            $this->modifiedColumns[] = GroupdealsPeer::ET_GAIN;
        }


        return $this;
    } // setEtGain()

    /**
     * Sets the value of [active_date] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setActiveDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->active_date !== null || $dt !== null) {
            $currentDateAsString = ($this->active_date !== null && $tmpDt = new DateTime($this->active_date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->active_date = $newDateAsString;
                $this->modifiedColumns[] = GroupdealsPeer::ACTIVE_DATE;
            }
        } // if either are not null


        return $this;
    } // setActiveDate()

    /**
     * Set the value of [treasury_type] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setTreasuryType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->treasury_type !== $v) {
            $this->treasury_type = $v;
            $this->modifiedColumns[] = GroupdealsPeer::TREASURY_TYPE;
        }

        if ($this->aTreasuryTypes !== null && $this->aTreasuryTypes->getId() !== $v) {
            $this->aTreasuryTypes = null;
        }


        return $this;
    } // setTreasuryType()

    /**
     * Set the value of [commercial_name_id] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCommercialNameId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->commercial_name_id !== $v) {
            $this->commercial_name_id = $v;
            $this->modifiedColumns[] = GroupdealsPeer::COMMERCIAL_NAME_ID;
        }


        return $this;
    } // setCommercialNameId()

    /**
     * Set the value of [orders_count] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setOrdersCount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->orders_count !== $v) {
            $this->orders_count = $v;
            $this->modifiedColumns[] = GroupdealsPeer::ORDERS_COUNT;
        }


        return $this;
    } // setOrdersCount()

    /**
     * Set the value of [active_offer] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setActiveOffer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->active_offer !== $v) {
            $this->active_offer = $v;
            $this->modifiedColumns[] = GroupdealsPeer::ACTIVE_OFFER;
        }


        return $this;
    } // setActiveOffer()

    /**
     * Set the value of [is_closed] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setIsClosed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_closed !== $v) {
            $this->is_closed = $v;
            $this->modifiedColumns[] = GroupdealsPeer::IS_CLOSED;
        }


        return $this;
    } // setIsClosed()

    /**
     * Set the value of [qty_sold] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setQtySold($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->qty_sold !== $v) {
            $this->qty_sold = $v;
            $this->modifiedColumns[] = GroupdealsPeer::QTY_SOLD;
        }


        return $this;
    } // setQtySold()

    /**
     * Set the value of [init_stock] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setInitStock($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->init_stock !== $v) {
            $this->init_stock = $v;
            $this->modifiedColumns[] = GroupdealsPeer::INIT_STOCK;
        }


        return $this;
    } // setInitStock()

    /**
     * Set the value of [with_personalized_coupons] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setWithPersonalizedCoupons($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->with_personalized_coupons !== $v) {
            $this->with_personalized_coupons = $v;
            $this->modifiedColumns[] = GroupdealsPeer::WITH_PERSONALIZED_COUPONS;
        }


        return $this;
    } // setWithPersonalizedCoupons()

    /**
     * Set the value of [code_type] column.
     *
     * @param  int $v new value
     * @return Groupdeals The current object (for fluent API support)
     */
    public function setCodeType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->code_type !== $v) {
            $this->code_type = $v;
            $this->modifiedColumns[] = GroupdealsPeer::CODE_TYPE;
        }


        return $this;
    } // setCodeType()

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
            if ($this->title_long !== '') {
                return false;
            }

            if ($this->title_midium !== '') {
                return false;
            }

            if ($this->title_short !== '') {
                return false;
            }

            if ($this->deal_instructions !== '') {
                return false;
            }

            if ($this->payment_id !== '') {
                return false;
            }

            if ($this->boost_sales !== 0) {
                return false;
            }

            if ($this->locations !== '') {
                return false;
            }

            if ($this->orders_count !== 0) {
                return false;
            }

            if ($this->active_offer !== 1) {
                return false;
            }

            if ($this->is_closed !== 0) {
                return false;
            }

            if ($this->qty_sold !== 0) {
                return false;
            }

            if ($this->init_stock !== 0) {
                return false;
            }

            if ($this->with_personalized_coupons !== 0) {
                return false;
            }

            if ($this->code_type !== 0) {
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

            $this->groupdeals_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->product_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->merchant_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->minimum_qty = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->maximum_qty = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->target_met_email = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->coupon_barcode = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->coupon_merchant_address = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->coupon_merchant_contact = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->coupon_expiration_date = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->coupon_price = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->coupon_fine_print = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->coupon_highlights = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->coupon_merchant_description = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->coupon_business_hours = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->coupon_merchant_logo = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->coupon_additional_info = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->position = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->title_long = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->title_midium = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->title_short = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->beneffits = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->deal_instructions = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->conditions = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->edition_state = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->publication_state = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->product_type = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->expiration_date = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->tcc = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->negociation_type = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->agreement_type = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->buys_per_user = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->video_html5 = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->video_flash = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->reference = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->payment_id = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->boost_sales = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->locations = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->et_gain = ($row[$startcol + 38] !== null) ? (double) $row[$startcol + 38] : null;
            $this->active_date = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->treasury_type = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->commercial_name_id = ($row[$startcol + 41] !== null) ? (int) $row[$startcol + 41] : null;
            $this->orders_count = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->active_offer = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->is_closed = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->qty_sold = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->init_stock = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->with_personalized_coupons = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->code_type = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 49; // 49 = GroupdealsPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Groupdeals object", $e);
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

        if ($this->aTreasuryTypes !== null && $this->treasury_type !== $this->aTreasuryTypes->getId()) {
            $this->aTreasuryTypes = null;
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
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = GroupdealsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aTreasuryTypes = null;
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
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = GroupdealsQuery::create()
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
            $con = Propel::getConnection(GroupdealsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                GroupdealsPeer::addInstanceToPool($this);
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

            if ($this->aTreasuryTypes !== null) {
                if ($this->aTreasuryTypes->isModified() || $this->aTreasuryTypes->isNew()) {
                    $affectedRows += $this->aTreasuryTypes->save($con);
                }
                $this->setTreasuryTypes($this->aTreasuryTypes);
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

        $this->modifiedColumns[] = GroupdealsPeer::GROUPDEALS_ID;
        if (null !== $this->groupdeals_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . GroupdealsPeer::GROUPDEALS_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(GroupdealsPeer::GROUPDEALS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'groupdeals_id';
        }
        if ($this->isColumnModified(GroupdealsPeer::PRODUCT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'product_id';
        }
        if ($this->isColumnModified(GroupdealsPeer::MERCHANT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'merchant_id';
        }
        if ($this->isColumnModified(GroupdealsPeer::MINIMUM_QTY)) {
            $modifiedColumns[':p' . $index++]  = 'minimum_qty';
        }
        if ($this->isColumnModified(GroupdealsPeer::MAXIMUM_QTY)) {
            $modifiedColumns[':p' . $index++]  = 'maximum_qty';
        }
        if ($this->isColumnModified(GroupdealsPeer::TARGET_MET_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'target_met_email';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_BARCODE)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_barcode';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_MERCHANT_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_merchant_address';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_MERCHANT_CONTACT)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_merchant_contact';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_EXPIRATION_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_expiration_date';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_price';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_FINE_PRINT)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_fine_print';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_HIGHLIGHTS)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_highlights';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_MERCHANT_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_merchant_description';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_BUSINESS_HOURS)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_business_hours';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_MERCHANT_LOGO)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_merchant_logo';
        }
        if ($this->isColumnModified(GroupdealsPeer::COUPON_ADDITIONAL_INFO)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_additional_info';
        }
        if ($this->isColumnModified(GroupdealsPeer::POSITION)) {
            $modifiedColumns[':p' . $index++]  = 'position';
        }
        if ($this->isColumnModified(GroupdealsPeer::TITLE_LONG)) {
            $modifiedColumns[':p' . $index++]  = 'title_long';
        }
        if ($this->isColumnModified(GroupdealsPeer::TITLE_MIDIUM)) {
            $modifiedColumns[':p' . $index++]  = 'title_midium';
        }
        if ($this->isColumnModified(GroupdealsPeer::TITLE_SHORT)) {
            $modifiedColumns[':p' . $index++]  = 'title_short';
        }
        if ($this->isColumnModified(GroupdealsPeer::BENEFFITS)) {
            $modifiedColumns[':p' . $index++]  = 'beneffits';
        }
        if ($this->isColumnModified(GroupdealsPeer::DEAL_INSTRUCTIONS)) {
            $modifiedColumns[':p' . $index++]  = 'deal_instructions';
        }
        if ($this->isColumnModified(GroupdealsPeer::CONDITIONS)) {
            $modifiedColumns[':p' . $index++]  = 'conditions';
        }
        if ($this->isColumnModified(GroupdealsPeer::EDITION_STATE)) {
            $modifiedColumns[':p' . $index++]  = 'edition_state';
        }
        if ($this->isColumnModified(GroupdealsPeer::PUBLICATION_STATE)) {
            $modifiedColumns[':p' . $index++]  = 'publication_state';
        }
        if ($this->isColumnModified(GroupdealsPeer::PRODUCT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'product_type';
        }
        if ($this->isColumnModified(GroupdealsPeer::EXPIRATION_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'expiration_date';
        }
        if ($this->isColumnModified(GroupdealsPeer::TCC)) {
            $modifiedColumns[':p' . $index++]  = 'tcc';
        }
        if ($this->isColumnModified(GroupdealsPeer::NEGOCIATION_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'negociation_type';
        }
        if ($this->isColumnModified(GroupdealsPeer::AGREEMENT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'agreement_type';
        }
        if ($this->isColumnModified(GroupdealsPeer::BUYS_PER_USER)) {
            $modifiedColumns[':p' . $index++]  = 'buys_per_user';
        }
        if ($this->isColumnModified(GroupdealsPeer::VIDEO_HTML5)) {
            $modifiedColumns[':p' . $index++]  = 'video_html5';
        }
        if ($this->isColumnModified(GroupdealsPeer::VIDEO_FLASH)) {
            $modifiedColumns[':p' . $index++]  = 'video_flash';
        }
        if ($this->isColumnModified(GroupdealsPeer::REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = 'reference';
        }
        if ($this->isColumnModified(GroupdealsPeer::PAYMENT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'payment_id';
        }
        if ($this->isColumnModified(GroupdealsPeer::BOOST_SALES)) {
            $modifiedColumns[':p' . $index++]  = 'boost_sales';
        }
        if ($this->isColumnModified(GroupdealsPeer::LOCATIONS)) {
            $modifiedColumns[':p' . $index++]  = 'locations';
        }
        if ($this->isColumnModified(GroupdealsPeer::ET_GAIN)) {
            $modifiedColumns[':p' . $index++]  = 'et_gain';
        }
        if ($this->isColumnModified(GroupdealsPeer::ACTIVE_DATE)) {
            $modifiedColumns[':p' . $index++]  = 'active_date';
        }
        if ($this->isColumnModified(GroupdealsPeer::TREASURY_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'treasury_type';
        }
        if ($this->isColumnModified(GroupdealsPeer::COMMERCIAL_NAME_ID)) {
            $modifiedColumns[':p' . $index++]  = 'commercial_name_id';
        }
        if ($this->isColumnModified(GroupdealsPeer::ORDERS_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'orders_count';
        }
        if ($this->isColumnModified(GroupdealsPeer::ACTIVE_OFFER)) {
            $modifiedColumns[':p' . $index++]  = 'active_offer';
        }
        if ($this->isColumnModified(GroupdealsPeer::IS_CLOSED)) {
            $modifiedColumns[':p' . $index++]  = 'is_closed';
        }
        if ($this->isColumnModified(GroupdealsPeer::QTY_SOLD)) {
            $modifiedColumns[':p' . $index++]  = 'qty_sold';
        }
        if ($this->isColumnModified(GroupdealsPeer::INIT_STOCK)) {
            $modifiedColumns[':p' . $index++]  = 'init_stock';
        }
        if ($this->isColumnModified(GroupdealsPeer::WITH_PERSONALIZED_COUPONS)) {
            $modifiedColumns[':p' . $index++]  = 'with_personalized_coupons';
        }
        if ($this->isColumnModified(GroupdealsPeer::CODE_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'code_type';
        }

        $sql = sprintf(
            'INSERT INTO groupdeals (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'groupdeals_id':
                        $stmt->bindValue($identifier, $this->groupdeals_id, PDO::PARAM_INT);
                        break;
                    case 'product_id':
                        $stmt->bindValue($identifier, $this->product_id, PDO::PARAM_INT);
                        break;
                    case 'merchant_id':
                        $stmt->bindValue($identifier, $this->merchant_id, PDO::PARAM_INT);
                        break;
                    case 'minimum_qty':
                        $stmt->bindValue($identifier, $this->minimum_qty, PDO::PARAM_INT);
                        break;
                    case 'maximum_qty':
                        $stmt->bindValue($identifier, $this->maximum_qty, PDO::PARAM_INT);
                        break;
                    case 'target_met_email':
                        $stmt->bindValue($identifier, $this->target_met_email, PDO::PARAM_INT);
                        break;
                    case 'coupon_barcode':
                        $stmt->bindValue($identifier, $this->coupon_barcode, PDO::PARAM_STR);
                        break;
                    case 'coupon_merchant_address':
                        $stmt->bindValue($identifier, $this->coupon_merchant_address, PDO::PARAM_INT);
                        break;
                    case 'coupon_merchant_contact':
                        $stmt->bindValue($identifier, $this->coupon_merchant_contact, PDO::PARAM_INT);
                        break;
                    case 'coupon_expiration_date':
                        $stmt->bindValue($identifier, $this->coupon_expiration_date, PDO::PARAM_STR);
                        break;
                    case 'coupon_price':
                        $stmt->bindValue($identifier, $this->coupon_price, PDO::PARAM_INT);
                        break;
                    case 'coupon_fine_print':
                        $stmt->bindValue($identifier, $this->coupon_fine_print, PDO::PARAM_INT);
                        break;
                    case 'coupon_highlights':
                        $stmt->bindValue($identifier, $this->coupon_highlights, PDO::PARAM_INT);
                        break;
                    case 'coupon_merchant_description':
                        $stmt->bindValue($identifier, $this->coupon_merchant_description, PDO::PARAM_INT);
                        break;
                    case 'coupon_business_hours':
                        $stmt->bindValue($identifier, $this->coupon_business_hours, PDO::PARAM_INT);
                        break;
                    case 'coupon_merchant_logo':
                        $stmt->bindValue($identifier, $this->coupon_merchant_logo, PDO::PARAM_INT);
                        break;
                    case 'coupon_additional_info':
                        $stmt->bindValue($identifier, $this->coupon_additional_info, PDO::PARAM_STR);
                        break;
                    case 'position':
                        $stmt->bindValue($identifier, $this->position, PDO::PARAM_INT);
                        break;
                    case 'title_long':
                        $stmt->bindValue($identifier, $this->title_long, PDO::PARAM_STR);
                        break;
                    case 'title_midium':
                        $stmt->bindValue($identifier, $this->title_midium, PDO::PARAM_STR);
                        break;
                    case 'title_short':
                        $stmt->bindValue($identifier, $this->title_short, PDO::PARAM_STR);
                        break;
                    case 'beneffits':
                        $stmt->bindValue($identifier, $this->beneffits, PDO::PARAM_STR);
                        break;
                    case 'deal_instructions':
                        $stmt->bindValue($identifier, $this->deal_instructions, PDO::PARAM_STR);
                        break;
                    case 'conditions':
                        $stmt->bindValue($identifier, $this->conditions, PDO::PARAM_STR);
                        break;
                    case 'edition_state':
                        $stmt->bindValue($identifier, $this->edition_state, PDO::PARAM_INT);
                        break;
                    case 'publication_state':
                        $stmt->bindValue($identifier, $this->publication_state, PDO::PARAM_INT);
                        break;
                    case 'product_type':
                        $stmt->bindValue($identifier, $this->product_type, PDO::PARAM_INT);
                        break;
                    case 'expiration_date':
                        $stmt->bindValue($identifier, $this->expiration_date, PDO::PARAM_STR);
                        break;
                    case 'tcc':
                        $stmt->bindValue($identifier, $this->tcc, PDO::PARAM_INT);
                        break;
                    case 'negociation_type':
                        $stmt->bindValue($identifier, $this->negociation_type, PDO::PARAM_INT);
                        break;
                    case 'agreement_type':
                        $stmt->bindValue($identifier, $this->agreement_type, PDO::PARAM_INT);
                        break;
                    case 'buys_per_user':
                        $stmt->bindValue($identifier, $this->buys_per_user, PDO::PARAM_INT);
                        break;
                    case 'video_html5':
                        $stmt->bindValue($identifier, $this->video_html5, PDO::PARAM_STR);
                        break;
                    case 'video_flash':
                        $stmt->bindValue($identifier, $this->video_flash, PDO::PARAM_STR);
                        break;
                    case 'reference':
                        $stmt->bindValue($identifier, $this->reference, PDO::PARAM_INT);
                        break;
                    case 'payment_id':
                        $stmt->bindValue($identifier, $this->payment_id, PDO::PARAM_STR);
                        break;
                    case 'boost_sales':
                        $stmt->bindValue($identifier, $this->boost_sales, PDO::PARAM_INT);
                        break;
                    case 'locations':
                        $stmt->bindValue($identifier, $this->locations, PDO::PARAM_STR);
                        break;
                    case 'et_gain':
                        $stmt->bindValue($identifier, $this->et_gain, PDO::PARAM_STR);
                        break;
                    case 'active_date':
                        $stmt->bindValue($identifier, $this->active_date, PDO::PARAM_STR);
                        break;
                    case 'treasury_type':
                        $stmt->bindValue($identifier, $this->treasury_type, PDO::PARAM_INT);
                        break;
                    case 'commercial_name_id':
                        $stmt->bindValue($identifier, $this->commercial_name_id, PDO::PARAM_INT);
                        break;
                    case 'orders_count':
                        $stmt->bindValue($identifier, $this->orders_count, PDO::PARAM_INT);
                        break;
                    case 'active_offer':
                        $stmt->bindValue($identifier, $this->active_offer, PDO::PARAM_INT);
                        break;
                    case 'is_closed':
                        $stmt->bindValue($identifier, $this->is_closed, PDO::PARAM_INT);
                        break;
                    case 'qty_sold':
                        $stmt->bindValue($identifier, $this->qty_sold, PDO::PARAM_INT);
                        break;
                    case 'init_stock':
                        $stmt->bindValue($identifier, $this->init_stock, PDO::PARAM_INT);
                        break;
                    case 'with_personalized_coupons':
                        $stmt->bindValue($identifier, $this->with_personalized_coupons, PDO::PARAM_INT);
                        break;
                    case 'code_type':
                        $stmt->bindValue($identifier, $this->code_type, PDO::PARAM_INT);
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
        $this->setGroupdealsId($pk);

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

            if ($this->aTreasuryTypes !== null) {
                if (!$this->aTreasuryTypes->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTreasuryTypes->getValidationFailures());
                }
            }


            if (($retval = GroupdealsPeer::doValidate($this, $columns)) !== true) {
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
        $pos = GroupdealsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getGroupdealsId();
                break;
            case 1:
                return $this->getProductId();
                break;
            case 2:
                return $this->getMerchantId();
                break;
            case 3:
                return $this->getMinimumQty();
                break;
            case 4:
                return $this->getMaximumQty();
                break;
            case 5:
                return $this->getTargetMetEmail();
                break;
            case 6:
                return $this->getCouponBarcode();
                break;
            case 7:
                return $this->getCouponMerchantAddress();
                break;
            case 8:
                return $this->getCouponMerchantContact();
                break;
            case 9:
                return $this->getCouponExpirationDate();
                break;
            case 10:
                return $this->getCouponPrice();
                break;
            case 11:
                return $this->getCouponFinePrint();
                break;
            case 12:
                return $this->getCouponHighlights();
                break;
            case 13:
                return $this->getCouponMerchantDescription();
                break;
            case 14:
                return $this->getCouponBusinessHours();
                break;
            case 15:
                return $this->getCouponMerchantLogo();
                break;
            case 16:
                return $this->getCouponAdditionalInfo();
                break;
            case 17:
                return $this->getPosition();
                break;
            case 18:
                return $this->getTitleLong();
                break;
            case 19:
                return $this->getTitleMidium();
                break;
            case 20:
                return $this->getTitleShort();
                break;
            case 21:
                return $this->getBeneffits();
                break;
            case 22:
                return $this->getDealInstructions();
                break;
            case 23:
                return $this->getConditions();
                break;
            case 24:
                return $this->getEditionState();
                break;
            case 25:
                return $this->getPublicationState();
                break;
            case 26:
                return $this->getProductType();
                break;
            case 27:
                return $this->getExpirationDate();
                break;
            case 28:
                return $this->getTcc();
                break;
            case 29:
                return $this->getNegociationType();
                break;
            case 30:
                return $this->getAgreementType();
                break;
            case 31:
                return $this->getBuysPerUser();
                break;
            case 32:
                return $this->getVideoHtml5();
                break;
            case 33:
                return $this->getVideoFlash();
                break;
            case 34:
                return $this->getReference();
                break;
            case 35:
                return $this->getPaymentId();
                break;
            case 36:
                return $this->getBoostSales();
                break;
            case 37:
                return $this->getLocations();
                break;
            case 38:
                return $this->getEtGain();
                break;
            case 39:
                return $this->getActiveDate();
                break;
            case 40:
                return $this->getTreasuryType();
                break;
            case 41:
                return $this->getCommercialNameId();
                break;
            case 42:
                return $this->getOrdersCount();
                break;
            case 43:
                return $this->getActiveOffer();
                break;
            case 44:
                return $this->getIsClosed();
                break;
            case 45:
                return $this->getQtySold();
                break;
            case 46:
                return $this->getInitStock();
                break;
            case 47:
                return $this->getWithPersonalizedCoupons();
                break;
            case 48:
                return $this->getCodeType();
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
        if (isset($alreadyDumpedObjects['Groupdeals'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Groupdeals'][$this->getPrimaryKey()] = true;
        $keys = GroupdealsPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getGroupdealsId(),
            $keys[1] => $this->getProductId(),
            $keys[2] => $this->getMerchantId(),
            $keys[3] => $this->getMinimumQty(),
            $keys[4] => $this->getMaximumQty(),
            $keys[5] => $this->getTargetMetEmail(),
            $keys[6] => $this->getCouponBarcode(),
            $keys[7] => $this->getCouponMerchantAddress(),
            $keys[8] => $this->getCouponMerchantContact(),
            $keys[9] => $this->getCouponExpirationDate(),
            $keys[10] => $this->getCouponPrice(),
            $keys[11] => $this->getCouponFinePrint(),
            $keys[12] => $this->getCouponHighlights(),
            $keys[13] => $this->getCouponMerchantDescription(),
            $keys[14] => $this->getCouponBusinessHours(),
            $keys[15] => $this->getCouponMerchantLogo(),
            $keys[16] => $this->getCouponAdditionalInfo(),
            $keys[17] => $this->getPosition(),
            $keys[18] => $this->getTitleLong(),
            $keys[19] => $this->getTitleMidium(),
            $keys[20] => $this->getTitleShort(),
            $keys[21] => $this->getBeneffits(),
            $keys[22] => $this->getDealInstructions(),
            $keys[23] => $this->getConditions(),
            $keys[24] => $this->getEditionState(),
            $keys[25] => $this->getPublicationState(),
            $keys[26] => $this->getProductType(),
            $keys[27] => $this->getExpirationDate(),
            $keys[28] => $this->getTcc(),
            $keys[29] => $this->getNegociationType(),
            $keys[30] => $this->getAgreementType(),
            $keys[31] => $this->getBuysPerUser(),
            $keys[32] => $this->getVideoHtml5(),
            $keys[33] => $this->getVideoFlash(),
            $keys[34] => $this->getReference(),
            $keys[35] => $this->getPaymentId(),
            $keys[36] => $this->getBoostSales(),
            $keys[37] => $this->getLocations(),
            $keys[38] => $this->getEtGain(),
            $keys[39] => $this->getActiveDate(),
            $keys[40] => $this->getTreasuryType(),
            $keys[41] => $this->getCommercialNameId(),
            $keys[42] => $this->getOrdersCount(),
            $keys[43] => $this->getActiveOffer(),
            $keys[44] => $this->getIsClosed(),
            $keys[45] => $this->getQtySold(),
            $keys[46] => $this->getInitStock(),
            $keys[47] => $this->getWithPersonalizedCoupons(),
            $keys[48] => $this->getCodeType(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aTreasuryTypes) {
                $result['TreasuryTypes'] = $this->aTreasuryTypes->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = GroupdealsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setGroupdealsId($value);
                break;
            case 1:
                $this->setProductId($value);
                break;
            case 2:
                $this->setMerchantId($value);
                break;
            case 3:
                $this->setMinimumQty($value);
                break;
            case 4:
                $this->setMaximumQty($value);
                break;
            case 5:
                $this->setTargetMetEmail($value);
                break;
            case 6:
                $this->setCouponBarcode($value);
                break;
            case 7:
                $this->setCouponMerchantAddress($value);
                break;
            case 8:
                $this->setCouponMerchantContact($value);
                break;
            case 9:
                $this->setCouponExpirationDate($value);
                break;
            case 10:
                $this->setCouponPrice($value);
                break;
            case 11:
                $this->setCouponFinePrint($value);
                break;
            case 12:
                $this->setCouponHighlights($value);
                break;
            case 13:
                $this->setCouponMerchantDescription($value);
                break;
            case 14:
                $this->setCouponBusinessHours($value);
                break;
            case 15:
                $this->setCouponMerchantLogo($value);
                break;
            case 16:
                $this->setCouponAdditionalInfo($value);
                break;
            case 17:
                $this->setPosition($value);
                break;
            case 18:
                $this->setTitleLong($value);
                break;
            case 19:
                $this->setTitleMidium($value);
                break;
            case 20:
                $this->setTitleShort($value);
                break;
            case 21:
                $this->setBeneffits($value);
                break;
            case 22:
                $this->setDealInstructions($value);
                break;
            case 23:
                $this->setConditions($value);
                break;
            case 24:
                $this->setEditionState($value);
                break;
            case 25:
                $this->setPublicationState($value);
                break;
            case 26:
                $this->setProductType($value);
                break;
            case 27:
                $this->setExpirationDate($value);
                break;
            case 28:
                $this->setTcc($value);
                break;
            case 29:
                $this->setNegociationType($value);
                break;
            case 30:
                $this->setAgreementType($value);
                break;
            case 31:
                $this->setBuysPerUser($value);
                break;
            case 32:
                $this->setVideoHtml5($value);
                break;
            case 33:
                $this->setVideoFlash($value);
                break;
            case 34:
                $this->setReference($value);
                break;
            case 35:
                $this->setPaymentId($value);
                break;
            case 36:
                $this->setBoostSales($value);
                break;
            case 37:
                $this->setLocations($value);
                break;
            case 38:
                $this->setEtGain($value);
                break;
            case 39:
                $this->setActiveDate($value);
                break;
            case 40:
                $this->setTreasuryType($value);
                break;
            case 41:
                $this->setCommercialNameId($value);
                break;
            case 42:
                $this->setOrdersCount($value);
                break;
            case 43:
                $this->setActiveOffer($value);
                break;
            case 44:
                $this->setIsClosed($value);
                break;
            case 45:
                $this->setQtySold($value);
                break;
            case 46:
                $this->setInitStock($value);
                break;
            case 47:
                $this->setWithPersonalizedCoupons($value);
                break;
            case 48:
                $this->setCodeType($value);
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
        $keys = GroupdealsPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setGroupdealsId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setProductId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMerchantId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMinimumQty($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMaximumQty($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTargetMetEmail($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCouponBarcode($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCouponMerchantAddress($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCouponMerchantContact($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCouponExpirationDate($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCouponPrice($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCouponFinePrint($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCouponHighlights($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCouponMerchantDescription($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setCouponBusinessHours($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCouponMerchantLogo($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setCouponAdditionalInfo($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPosition($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTitleLong($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTitleMidium($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTitleShort($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setBeneffits($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDealInstructions($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setConditions($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setEditionState($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPublicationState($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setProductType($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setExpirationDate($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTcc($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setNegociationType($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAgreementType($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setBuysPerUser($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setVideoHtml5($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setVideoFlash($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setReference($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setPaymentId($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setBoostSales($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setLocations($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setEtGain($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setActiveDate($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setTreasuryType($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setCommercialNameId($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setOrdersCount($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setActiveOffer($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setIsClosed($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setQtySold($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setInitStock($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setWithPersonalizedCoupons($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setCodeType($arr[$keys[48]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(GroupdealsPeer::DATABASE_NAME);

        if ($this->isColumnModified(GroupdealsPeer::GROUPDEALS_ID)) $criteria->add(GroupdealsPeer::GROUPDEALS_ID, $this->groupdeals_id);
        if ($this->isColumnModified(GroupdealsPeer::PRODUCT_ID)) $criteria->add(GroupdealsPeer::PRODUCT_ID, $this->product_id);
        if ($this->isColumnModified(GroupdealsPeer::MERCHANT_ID)) $criteria->add(GroupdealsPeer::MERCHANT_ID, $this->merchant_id);
        if ($this->isColumnModified(GroupdealsPeer::MINIMUM_QTY)) $criteria->add(GroupdealsPeer::MINIMUM_QTY, $this->minimum_qty);
        if ($this->isColumnModified(GroupdealsPeer::MAXIMUM_QTY)) $criteria->add(GroupdealsPeer::MAXIMUM_QTY, $this->maximum_qty);
        if ($this->isColumnModified(GroupdealsPeer::TARGET_MET_EMAIL)) $criteria->add(GroupdealsPeer::TARGET_MET_EMAIL, $this->target_met_email);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_BARCODE)) $criteria->add(GroupdealsPeer::COUPON_BARCODE, $this->coupon_barcode);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_MERCHANT_ADDRESS)) $criteria->add(GroupdealsPeer::COUPON_MERCHANT_ADDRESS, $this->coupon_merchant_address);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_MERCHANT_CONTACT)) $criteria->add(GroupdealsPeer::COUPON_MERCHANT_CONTACT, $this->coupon_merchant_contact);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_EXPIRATION_DATE)) $criteria->add(GroupdealsPeer::COUPON_EXPIRATION_DATE, $this->coupon_expiration_date);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_PRICE)) $criteria->add(GroupdealsPeer::COUPON_PRICE, $this->coupon_price);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_FINE_PRINT)) $criteria->add(GroupdealsPeer::COUPON_FINE_PRINT, $this->coupon_fine_print);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_HIGHLIGHTS)) $criteria->add(GroupdealsPeer::COUPON_HIGHLIGHTS, $this->coupon_highlights);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_MERCHANT_DESCRIPTION)) $criteria->add(GroupdealsPeer::COUPON_MERCHANT_DESCRIPTION, $this->coupon_merchant_description);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_BUSINESS_HOURS)) $criteria->add(GroupdealsPeer::COUPON_BUSINESS_HOURS, $this->coupon_business_hours);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_MERCHANT_LOGO)) $criteria->add(GroupdealsPeer::COUPON_MERCHANT_LOGO, $this->coupon_merchant_logo);
        if ($this->isColumnModified(GroupdealsPeer::COUPON_ADDITIONAL_INFO)) $criteria->add(GroupdealsPeer::COUPON_ADDITIONAL_INFO, $this->coupon_additional_info);
        if ($this->isColumnModified(GroupdealsPeer::POSITION)) $criteria->add(GroupdealsPeer::POSITION, $this->position);
        if ($this->isColumnModified(GroupdealsPeer::TITLE_LONG)) $criteria->add(GroupdealsPeer::TITLE_LONG, $this->title_long);
        if ($this->isColumnModified(GroupdealsPeer::TITLE_MIDIUM)) $criteria->add(GroupdealsPeer::TITLE_MIDIUM, $this->title_midium);
        if ($this->isColumnModified(GroupdealsPeer::TITLE_SHORT)) $criteria->add(GroupdealsPeer::TITLE_SHORT, $this->title_short);
        if ($this->isColumnModified(GroupdealsPeer::BENEFFITS)) $criteria->add(GroupdealsPeer::BENEFFITS, $this->beneffits);
        if ($this->isColumnModified(GroupdealsPeer::DEAL_INSTRUCTIONS)) $criteria->add(GroupdealsPeer::DEAL_INSTRUCTIONS, $this->deal_instructions);
        if ($this->isColumnModified(GroupdealsPeer::CONDITIONS)) $criteria->add(GroupdealsPeer::CONDITIONS, $this->conditions);
        if ($this->isColumnModified(GroupdealsPeer::EDITION_STATE)) $criteria->add(GroupdealsPeer::EDITION_STATE, $this->edition_state);
        if ($this->isColumnModified(GroupdealsPeer::PUBLICATION_STATE)) $criteria->add(GroupdealsPeer::PUBLICATION_STATE, $this->publication_state);
        if ($this->isColumnModified(GroupdealsPeer::PRODUCT_TYPE)) $criteria->add(GroupdealsPeer::PRODUCT_TYPE, $this->product_type);
        if ($this->isColumnModified(GroupdealsPeer::EXPIRATION_DATE)) $criteria->add(GroupdealsPeer::EXPIRATION_DATE, $this->expiration_date);
        if ($this->isColumnModified(GroupdealsPeer::TCC)) $criteria->add(GroupdealsPeer::TCC, $this->tcc);
        if ($this->isColumnModified(GroupdealsPeer::NEGOCIATION_TYPE)) $criteria->add(GroupdealsPeer::NEGOCIATION_TYPE, $this->negociation_type);
        if ($this->isColumnModified(GroupdealsPeer::AGREEMENT_TYPE)) $criteria->add(GroupdealsPeer::AGREEMENT_TYPE, $this->agreement_type);
        if ($this->isColumnModified(GroupdealsPeer::BUYS_PER_USER)) $criteria->add(GroupdealsPeer::BUYS_PER_USER, $this->buys_per_user);
        if ($this->isColumnModified(GroupdealsPeer::VIDEO_HTML5)) $criteria->add(GroupdealsPeer::VIDEO_HTML5, $this->video_html5);
        if ($this->isColumnModified(GroupdealsPeer::VIDEO_FLASH)) $criteria->add(GroupdealsPeer::VIDEO_FLASH, $this->video_flash);
        if ($this->isColumnModified(GroupdealsPeer::REFERENCE)) $criteria->add(GroupdealsPeer::REFERENCE, $this->reference);
        if ($this->isColumnModified(GroupdealsPeer::PAYMENT_ID)) $criteria->add(GroupdealsPeer::PAYMENT_ID, $this->payment_id);
        if ($this->isColumnModified(GroupdealsPeer::BOOST_SALES)) $criteria->add(GroupdealsPeer::BOOST_SALES, $this->boost_sales);
        if ($this->isColumnModified(GroupdealsPeer::LOCATIONS)) $criteria->add(GroupdealsPeer::LOCATIONS, $this->locations);
        if ($this->isColumnModified(GroupdealsPeer::ET_GAIN)) $criteria->add(GroupdealsPeer::ET_GAIN, $this->et_gain);
        if ($this->isColumnModified(GroupdealsPeer::ACTIVE_DATE)) $criteria->add(GroupdealsPeer::ACTIVE_DATE, $this->active_date);
        if ($this->isColumnModified(GroupdealsPeer::TREASURY_TYPE)) $criteria->add(GroupdealsPeer::TREASURY_TYPE, $this->treasury_type);
        if ($this->isColumnModified(GroupdealsPeer::COMMERCIAL_NAME_ID)) $criteria->add(GroupdealsPeer::COMMERCIAL_NAME_ID, $this->commercial_name_id);
        if ($this->isColumnModified(GroupdealsPeer::ORDERS_COUNT)) $criteria->add(GroupdealsPeer::ORDERS_COUNT, $this->orders_count);
        if ($this->isColumnModified(GroupdealsPeer::ACTIVE_OFFER)) $criteria->add(GroupdealsPeer::ACTIVE_OFFER, $this->active_offer);
        if ($this->isColumnModified(GroupdealsPeer::IS_CLOSED)) $criteria->add(GroupdealsPeer::IS_CLOSED, $this->is_closed);
        if ($this->isColumnModified(GroupdealsPeer::QTY_SOLD)) $criteria->add(GroupdealsPeer::QTY_SOLD, $this->qty_sold);
        if ($this->isColumnModified(GroupdealsPeer::INIT_STOCK)) $criteria->add(GroupdealsPeer::INIT_STOCK, $this->init_stock);
        if ($this->isColumnModified(GroupdealsPeer::WITH_PERSONALIZED_COUPONS)) $criteria->add(GroupdealsPeer::WITH_PERSONALIZED_COUPONS, $this->with_personalized_coupons);
        if ($this->isColumnModified(GroupdealsPeer::CODE_TYPE)) $criteria->add(GroupdealsPeer::CODE_TYPE, $this->code_type);

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
        $criteria = new Criteria(GroupdealsPeer::DATABASE_NAME);
        $criteria->add(GroupdealsPeer::GROUPDEALS_ID, $this->groupdeals_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getGroupdealsId();
    }

    /**
     * Generic method to set the primary key (groupdeals_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setGroupdealsId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getGroupdealsId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Groupdeals (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProductId($this->getProductId());
        $copyObj->setMerchantId($this->getMerchantId());
        $copyObj->setMinimumQty($this->getMinimumQty());
        $copyObj->setMaximumQty($this->getMaximumQty());
        $copyObj->setTargetMetEmail($this->getTargetMetEmail());
        $copyObj->setCouponBarcode($this->getCouponBarcode());
        $copyObj->setCouponMerchantAddress($this->getCouponMerchantAddress());
        $copyObj->setCouponMerchantContact($this->getCouponMerchantContact());
        $copyObj->setCouponExpirationDate($this->getCouponExpirationDate());
        $copyObj->setCouponPrice($this->getCouponPrice());
        $copyObj->setCouponFinePrint($this->getCouponFinePrint());
        $copyObj->setCouponHighlights($this->getCouponHighlights());
        $copyObj->setCouponMerchantDescription($this->getCouponMerchantDescription());
        $copyObj->setCouponBusinessHours($this->getCouponBusinessHours());
        $copyObj->setCouponMerchantLogo($this->getCouponMerchantLogo());
        $copyObj->setCouponAdditionalInfo($this->getCouponAdditionalInfo());
        $copyObj->setPosition($this->getPosition());
        $copyObj->setTitleLong($this->getTitleLong());
        $copyObj->setTitleMidium($this->getTitleMidium());
        $copyObj->setTitleShort($this->getTitleShort());
        $copyObj->setBeneffits($this->getBeneffits());
        $copyObj->setDealInstructions($this->getDealInstructions());
        $copyObj->setConditions($this->getConditions());
        $copyObj->setEditionState($this->getEditionState());
        $copyObj->setPublicationState($this->getPublicationState());
        $copyObj->setProductType($this->getProductType());
        $copyObj->setExpirationDate($this->getExpirationDate());
        $copyObj->setTcc($this->getTcc());
        $copyObj->setNegociationType($this->getNegociationType());
        $copyObj->setAgreementType($this->getAgreementType());
        $copyObj->setBuysPerUser($this->getBuysPerUser());
        $copyObj->setVideoHtml5($this->getVideoHtml5());
        $copyObj->setVideoFlash($this->getVideoFlash());
        $copyObj->setReference($this->getReference());
        $copyObj->setPaymentId($this->getPaymentId());
        $copyObj->setBoostSales($this->getBoostSales());
        $copyObj->setLocations($this->getLocations());
        $copyObj->setEtGain($this->getEtGain());
        $copyObj->setActiveDate($this->getActiveDate());
        $copyObj->setTreasuryType($this->getTreasuryType());
        $copyObj->setCommercialNameId($this->getCommercialNameId());
        $copyObj->setOrdersCount($this->getOrdersCount());
        $copyObj->setActiveOffer($this->getActiveOffer());
        $copyObj->setIsClosed($this->getIsClosed());
        $copyObj->setQtySold($this->getQtySold());
        $copyObj->setInitStock($this->getInitStock());
        $copyObj->setWithPersonalizedCoupons($this->getWithPersonalizedCoupons());
        $copyObj->setCodeType($this->getCodeType());

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
            $copyObj->setGroupdealsId(NULL); // this is a auto-increment column, so set to default value
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
     * @return Groupdeals Clone of current object.
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
     * @return GroupdealsPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new GroupdealsPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a TreasuryTypes object.
     *
     * @param                  TreasuryTypes $v
     * @return Groupdeals The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTreasuryTypes(TreasuryTypes $v = null)
    {
        if ($v === null) {
            $this->setTreasuryType(NULL);
        } else {
            $this->setTreasuryType($v->getId());
        }

        $this->aTreasuryTypes = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the TreasuryTypes object, it will not be re-added.
        if ($v !== null) {
            $v->addGroupdeals($this);
        }


        return $this;
    }


    /**
     * Get the associated TreasuryTypes object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return TreasuryTypes The associated TreasuryTypes object.
     * @throws PropelException
     */
    public function getTreasuryTypes(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTreasuryTypes === null && ($this->treasury_type !== null) && $doQuery) {
            $this->aTreasuryTypes = TreasuryTypesQuery::create()->findPk($this->treasury_type, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTreasuryTypes->addGroupdealss($this);
             */
        }

        return $this->aTreasuryTypes;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->groupdeals_id = null;
        $this->product_id = null;
        $this->merchant_id = null;
        $this->minimum_qty = null;
        $this->maximum_qty = null;
        $this->target_met_email = null;
        $this->coupon_barcode = null;
        $this->coupon_merchant_address = null;
        $this->coupon_merchant_contact = null;
        $this->coupon_expiration_date = null;
        $this->coupon_price = null;
        $this->coupon_fine_print = null;
        $this->coupon_highlights = null;
        $this->coupon_merchant_description = null;
        $this->coupon_business_hours = null;
        $this->coupon_merchant_logo = null;
        $this->coupon_additional_info = null;
        $this->position = null;
        $this->title_long = null;
        $this->title_midium = null;
        $this->title_short = null;
        $this->beneffits = null;
        $this->deal_instructions = null;
        $this->conditions = null;
        $this->edition_state = null;
        $this->publication_state = null;
        $this->product_type = null;
        $this->expiration_date = null;
        $this->tcc = null;
        $this->negociation_type = null;
        $this->agreement_type = null;
        $this->buys_per_user = null;
        $this->video_html5 = null;
        $this->video_flash = null;
        $this->reference = null;
        $this->payment_id = null;
        $this->boost_sales = null;
        $this->locations = null;
        $this->et_gain = null;
        $this->active_date = null;
        $this->treasury_type = null;
        $this->commercial_name_id = null;
        $this->orders_count = null;
        $this->active_offer = null;
        $this->is_closed = null;
        $this->qty_sold = null;
        $this->init_stock = null;
        $this->with_personalized_coupons = null;
        $this->code_type = null;
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
            if ($this->aTreasuryTypes instanceof Persistent) {
              $this->aTreasuryTypes->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aTreasuryTypes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(GroupdealsPeer::DEFAULT_STRING_FORMAT);
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
