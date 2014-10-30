<?php


/**
 * Base class that represents a row from the 'sales_flat_order_item' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseSalesFlatOrderItem extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SalesFlatOrderItemPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SalesFlatOrderItemPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the item_id field.
     * @var        int
     */
    protected $item_id;

    /**
     * The value for the order_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $order_id;

    /**
     * The value for the parent_item_id field.
     * @var        int
     */
    protected $parent_item_id;

    /**
     * The value for the quote_item_id field.
     * @var        int
     */
    protected $quote_item_id;

    /**
     * The value for the store_id field.
     * @var        int
     */
    protected $store_id;

    /**
     * The value for the created_at field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $updated_at;

    /**
     * The value for the product_id field.
     * @var        int
     */
    protected $product_id;

    /**
     * The value for the product_type field.
     * @var        string
     */
    protected $product_type;

    /**
     * The value for the product_options field.
     * @var        string
     */
    protected $product_options;

    /**
     * The value for the weight field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $weight;

    /**
     * The value for the is_virtual field.
     * @var        int
     */
    protected $is_virtual;

    /**
     * The value for the sku field.
     * @var        string
     */
    protected $sku;

    /**
     * The value for the name field.
     * @var        string
     */
    protected $name;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the applied_rule_ids field.
     * @var        string
     */
    protected $applied_rule_ids;

    /**
     * The value for the additional_data field.
     * @var        string
     */
    protected $additional_data;

    /**
     * The value for the free_shipping field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $free_shipping;

    /**
     * The value for the is_qty_decimal field.
     * @var        int
     */
    protected $is_qty_decimal;

    /**
     * The value for the no_discount field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $no_discount;

    /**
     * The value for the qty_backordered field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $qty_backordered;

    /**
     * The value for the qty_canceled field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $qty_canceled;

    /**
     * The value for the qty_invoiced field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $qty_invoiced;

    /**
     * The value for the qty_ordered field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $qty_ordered;

    /**
     * The value for the qty_refunded field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $qty_refunded;

    /**
     * The value for the qty_shipped field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $qty_shipped;

    /**
     * The value for the base_cost field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $base_cost;

    /**
     * The value for the price field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $price;

    /**
     * The value for the base_price field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $base_price;

    /**
     * The value for the original_price field.
     * @var        string
     */
    protected $original_price;

    /**
     * The value for the base_original_price field.
     * @var        string
     */
    protected $base_original_price;

    /**
     * The value for the tax_percent field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $tax_percent;

    /**
     * The value for the tax_amount field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $tax_amount;

    /**
     * The value for the base_tax_amount field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $base_tax_amount;

    /**
     * The value for the tax_invoiced field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $tax_invoiced;

    /**
     * The value for the base_tax_invoiced field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $base_tax_invoiced;

    /**
     * The value for the discount_percent field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $discount_percent;

    /**
     * The value for the discount_amount field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $discount_amount;

    /**
     * The value for the base_discount_amount field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $base_discount_amount;

    /**
     * The value for the discount_invoiced field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $discount_invoiced;

    /**
     * The value for the base_discount_invoiced field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $base_discount_invoiced;

    /**
     * The value for the amount_refunded field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $amount_refunded;

    /**
     * The value for the base_amount_refunded field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $base_amount_refunded;

    /**
     * The value for the row_total field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $row_total;

    /**
     * The value for the base_row_total field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $base_row_total;

    /**
     * The value for the row_invoiced field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $row_invoiced;

    /**
     * The value for the base_row_invoiced field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $base_row_invoiced;

    /**
     * The value for the row_weight field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $row_weight;

    /**
     * The value for the base_tax_before_discount field.
     * @var        string
     */
    protected $base_tax_before_discount;

    /**
     * The value for the tax_before_discount field.
     * @var        string
     */
    protected $tax_before_discount;

    /**
     * The value for the ext_order_item_id field.
     * @var        string
     */
    protected $ext_order_item_id;

    /**
     * The value for the locked_do_invoice field.
     * @var        int
     */
    protected $locked_do_invoice;

    /**
     * The value for the locked_do_ship field.
     * @var        int
     */
    protected $locked_do_ship;

    /**
     * The value for the price_incl_tax field.
     * @var        string
     */
    protected $price_incl_tax;

    /**
     * The value for the base_price_incl_tax field.
     * @var        string
     */
    protected $base_price_incl_tax;

    /**
     * The value for the row_total_incl_tax field.
     * @var        string
     */
    protected $row_total_incl_tax;

    /**
     * The value for the base_row_total_incl_tax field.
     * @var        string
     */
    protected $base_row_total_incl_tax;

    /**
     * The value for the hidden_tax_amount field.
     * @var        string
     */
    protected $hidden_tax_amount;

    /**
     * The value for the base_hidden_tax_amount field.
     * @var        string
     */
    protected $base_hidden_tax_amount;

    /**
     * The value for the hidden_tax_invoiced field.
     * @var        string
     */
    protected $hidden_tax_invoiced;

    /**
     * The value for the base_hidden_tax_invoiced field.
     * @var        string
     */
    protected $base_hidden_tax_invoiced;

    /**
     * The value for the hidden_tax_refunded field.
     * @var        string
     */
    protected $hidden_tax_refunded;

    /**
     * The value for the base_hidden_tax_refunded field.
     * @var        string
     */
    protected $base_hidden_tax_refunded;

    /**
     * The value for the is_nominal field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $is_nominal;

    /**
     * The value for the tax_canceled field.
     * @var        string
     */
    protected $tax_canceled;

    /**
     * The value for the hidden_tax_canceled field.
     * @var        string
     */
    protected $hidden_tax_canceled;

    /**
     * The value for the tax_refunded field.
     * @var        string
     */
    protected $tax_refunded;

    /**
     * The value for the base_tax_refunded field.
     * @var        string
     */
    protected $base_tax_refunded;

    /**
     * The value for the discount_refunded field.
     * @var        string
     */
    protected $discount_refunded;

    /**
     * The value for the base_discount_refunded field.
     * @var        string
     */
    protected $base_discount_refunded;

    /**
     * The value for the gift_message_id field.
     * @var        int
     */
    protected $gift_message_id;

    /**
     * The value for the gift_message_available field.
     * @var        int
     */
    protected $gift_message_available;

    /**
     * The value for the base_weee_tax_applied_amount field.
     * @var        string
     */
    protected $base_weee_tax_applied_amount;

    /**
     * The value for the base_weee_tax_applied_row_amnt field.
     * @var        string
     */
    protected $base_weee_tax_applied_row_amnt;

    /**
     * The value for the weee_tax_applied_amount field.
     * @var        string
     */
    protected $weee_tax_applied_amount;

    /**
     * The value for the weee_tax_applied_row_amount field.
     * @var        string
     */
    protected $weee_tax_applied_row_amount;

    /**
     * The value for the weee_tax_applied field.
     * @var        string
     */
    protected $weee_tax_applied;

    /**
     * The value for the weee_tax_disposition field.
     * @var        string
     */
    protected $weee_tax_disposition;

    /**
     * The value for the weee_tax_row_disposition field.
     * @var        string
     */
    protected $weee_tax_row_disposition;

    /**
     * The value for the base_weee_tax_disposition field.
     * @var        string
     */
    protected $base_weee_tax_disposition;

    /**
     * The value for the base_weee_tax_row_disposition field.
     * @var        string
     */
    protected $base_weee_tax_row_disposition;

    /**
     * The value for the crc_id field.
     * @var        int
     */
    protected $crc_id;

    /**
     * The value for the event_id field.
     * @var        int
     */
    protected $event_id;

    /**
     * The value for the giftregistry_item_id field.
     * @var        int
     */
    protected $giftregistry_item_id;

    /**
     * The value for the gw_id field.
     * @var        int
     */
    protected $gw_id;

    /**
     * The value for the gw_base_price field.
     * @var        string
     */
    protected $gw_base_price;

    /**
     * The value for the gw_price field.
     * @var        string
     */
    protected $gw_price;

    /**
     * The value for the gw_base_tax_amount field.
     * @var        string
     */
    protected $gw_base_tax_amount;

    /**
     * The value for the gw_tax_amount field.
     * @var        string
     */
    protected $gw_tax_amount;

    /**
     * The value for the gw_base_price_invoiced field.
     * @var        string
     */
    protected $gw_base_price_invoiced;

    /**
     * The value for the gw_price_invoiced field.
     * @var        string
     */
    protected $gw_price_invoiced;

    /**
     * The value for the gw_base_tax_amount_invoiced field.
     * @var        string
     */
    protected $gw_base_tax_amount_invoiced;

    /**
     * The value for the gw_tax_amount_invoiced field.
     * @var        string
     */
    protected $gw_tax_amount_invoiced;

    /**
     * The value for the gw_base_price_refunded field.
     * @var        string
     */
    protected $gw_base_price_refunded;

    /**
     * The value for the gw_price_refunded field.
     * @var        string
     */
    protected $gw_price_refunded;

    /**
     * The value for the gw_base_tax_amount_refunded field.
     * @var        string
     */
    protected $gw_base_tax_amount_refunded;

    /**
     * The value for the gw_tax_amount_refunded field.
     * @var        string
     */
    protected $gw_tax_amount_refunded;

    /**
     * The value for the qty_returned field.
     * Note: this column has a database default value of: '0.0000'
     * @var        string
     */
    protected $qty_returned;

    /**
     * The value for the qty_redeemed field.
     * @var        string
     */
    protected $qty_redeemed;

    /**
     * The value for the consultant field.
     * @var        string
     */
    protected $consultant;

    /**
     * The value for the parent_product_id field.
     * @var        int
     */
    protected $parent_product_id;

    /**
     * The value for the qty_to_redeem field.
     * @var        int
     */
    protected $qty_to_redeem;

    /**
     * The value for the rewards_used_detail field.
     * @var        string
     */
    protected $rewards_used_detail;

    /**
     * @var        SalesFlatOrder
     */
    protected $aSalesFlatOrder;

    /**
     * @var        CoreStore
     */
    protected $aCoreStore;

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
        $this->order_id = 0;
        $this->created_at = NULL;
        $this->updated_at = NULL;
        $this->weight = '0.0000';
        $this->free_shipping = 0;
        $this->no_discount = 0;
        $this->qty_backordered = '0.0000';
        $this->qty_canceled = '0.0000';
        $this->qty_invoiced = '0.0000';
        $this->qty_ordered = '0.0000';
        $this->qty_refunded = '0.0000';
        $this->qty_shipped = '0.0000';
        $this->base_cost = '0.0000';
        $this->price = '0.0000';
        $this->base_price = '0.0000';
        $this->tax_percent = '0.0000';
        $this->tax_amount = '0.0000';
        $this->base_tax_amount = '0.0000';
        $this->tax_invoiced = '0.0000';
        $this->base_tax_invoiced = '0.0000';
        $this->discount_percent = '0.0000';
        $this->discount_amount = '0.0000';
        $this->base_discount_amount = '0.0000';
        $this->discount_invoiced = '0.0000';
        $this->base_discount_invoiced = '0.0000';
        $this->amount_refunded = '0.0000';
        $this->base_amount_refunded = '0.0000';
        $this->row_total = '0.0000';
        $this->base_row_total = '0.0000';
        $this->row_invoiced = '0.0000';
        $this->base_row_invoiced = '0.0000';
        $this->row_weight = '0.0000';
        $this->is_nominal = 0;
        $this->qty_returned = '0.0000';
    }

    /**
     * Initializes internal state of BaseSalesFlatOrderItem object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [item_id] column value.
     *
     * @return int
     */
    public function getItemId()
    {

        return $this->item_id;
    }

    /**
     * Get the [order_id] column value.
     *
     * @return int
     */
    public function getOrderId()
    {

        return $this->order_id;
    }

    /**
     * Get the [parent_item_id] column value.
     *
     * @return int
     */
    public function getParentItemId()
    {

        return $this->parent_item_id;
    }

    /**
     * Get the [quote_item_id] column value.
     *
     * @return int
     */
    public function getQuoteItemId()
    {

        return $this->quote_item_id;
    }

    /**
     * Get the [store_id] column value.
     *
     * @return int
     */
    public function getStoreId()
    {

        return $this->store_id;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->created_at === null) {
            return null;
        }

        if ($this->created_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
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
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->updated_at === null) {
            return null;
        }

        if ($this->updated_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->updated_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
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
     * Get the [product_id] column value.
     *
     * @return int
     */
    public function getProductId()
    {

        return $this->product_id;
    }

    /**
     * Get the [product_type] column value.
     *
     * @return string
     */
    public function getProductType()
    {

        return $this->product_type;
    }

    /**
     * Get the [product_options] column value.
     *
     * @return string
     */
    public function getProductOptions()
    {

        return $this->product_options;
    }

    /**
     * Get the [weight] column value.
     *
     * @return string
     */
    public function getWeight()
    {

        return $this->weight;
    }

    /**
     * Get the [is_virtual] column value.
     *
     * @return int
     */
    public function getIsVirtual()
    {

        return $this->is_virtual;
    }

    /**
     * Get the [sku] column value.
     *
     * @return string
     */
    public function getSku()
    {

        return $this->sku;
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
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {

        return $this->description;
    }

    /**
     * Get the [applied_rule_ids] column value.
     *
     * @return string
     */
    public function getAppliedRuleIds()
    {

        return $this->applied_rule_ids;
    }

    /**
     * Get the [additional_data] column value.
     *
     * @return string
     */
    public function getAdditionalData()
    {

        return $this->additional_data;
    }

    /**
     * Get the [free_shipping] column value.
     *
     * @return int
     */
    public function getFreeShipping()
    {

        return $this->free_shipping;
    }

    /**
     * Get the [is_qty_decimal] column value.
     *
     * @return int
     */
    public function getIsQtyDecimal()
    {

        return $this->is_qty_decimal;
    }

    /**
     * Get the [no_discount] column value.
     *
     * @return int
     */
    public function getNoDiscount()
    {

        return $this->no_discount;
    }

    /**
     * Get the [qty_backordered] column value.
     *
     * @return string
     */
    public function getQtyBackordered()
    {

        return $this->qty_backordered;
    }

    /**
     * Get the [qty_canceled] column value.
     *
     * @return string
     */
    public function getQtyCanceled()
    {

        return $this->qty_canceled;
    }

    /**
     * Get the [qty_invoiced] column value.
     *
     * @return string
     */
    public function getQtyInvoiced()
    {

        return $this->qty_invoiced;
    }

    /**
     * Get the [qty_ordered] column value.
     *
     * @return string
     */
    public function getQtyOrdered()
    {

        return $this->qty_ordered;
    }

    /**
     * Get the [qty_refunded] column value.
     *
     * @return string
     */
    public function getQtyRefunded()
    {

        return $this->qty_refunded;
    }

    /**
     * Get the [qty_shipped] column value.
     *
     * @return string
     */
    public function getQtyShipped()
    {

        return $this->qty_shipped;
    }

    /**
     * Get the [base_cost] column value.
     *
     * @return string
     */
    public function getBaseCost()
    {

        return $this->base_cost;
    }

    /**
     * Get the [price] column value.
     *
     * @return string
     */
    public function getPrice()
    {

        return $this->price;
    }

    /**
     * Get the [base_price] column value.
     *
     * @return string
     */
    public function getBasePrice()
    {

        return $this->base_price;
    }

    /**
     * Get the [original_price] column value.
     *
     * @return string
     */
    public function getOriginalPrice()
    {

        return $this->original_price;
    }

    /**
     * Get the [base_original_price] column value.
     *
     * @return string
     */
    public function getBaseOriginalPrice()
    {

        return $this->base_original_price;
    }

    /**
     * Get the [tax_percent] column value.
     *
     * @return string
     */
    public function getTaxPercent()
    {

        return $this->tax_percent;
    }

    /**
     * Get the [tax_amount] column value.
     *
     * @return string
     */
    public function getTaxAmount()
    {

        return $this->tax_amount;
    }

    /**
     * Get the [base_tax_amount] column value.
     *
     * @return string
     */
    public function getBaseTaxAmount()
    {

        return $this->base_tax_amount;
    }

    /**
     * Get the [tax_invoiced] column value.
     *
     * @return string
     */
    public function getTaxInvoiced()
    {

        return $this->tax_invoiced;
    }

    /**
     * Get the [base_tax_invoiced] column value.
     *
     * @return string
     */
    public function getBaseTaxInvoiced()
    {

        return $this->base_tax_invoiced;
    }

    /**
     * Get the [discount_percent] column value.
     *
     * @return string
     */
    public function getDiscountPercent()
    {

        return $this->discount_percent;
    }

    /**
     * Get the [discount_amount] column value.
     *
     * @return string
     */
    public function getDiscountAmount()
    {

        return $this->discount_amount;
    }

    /**
     * Get the [base_discount_amount] column value.
     *
     * @return string
     */
    public function getBaseDiscountAmount()
    {

        return $this->base_discount_amount;
    }

    /**
     * Get the [discount_invoiced] column value.
     *
     * @return string
     */
    public function getDiscountInvoiced()
    {

        return $this->discount_invoiced;
    }

    /**
     * Get the [base_discount_invoiced] column value.
     *
     * @return string
     */
    public function getBaseDiscountInvoiced()
    {

        return $this->base_discount_invoiced;
    }

    /**
     * Get the [amount_refunded] column value.
     *
     * @return string
     */
    public function getAmountRefunded()
    {

        return $this->amount_refunded;
    }

    /**
     * Get the [base_amount_refunded] column value.
     *
     * @return string
     */
    public function getBaseAmountRefunded()
    {

        return $this->base_amount_refunded;
    }

    /**
     * Get the [row_total] column value.
     *
     * @return string
     */
    public function getRowTotal()
    {

        return $this->row_total;
    }

    /**
     * Get the [base_row_total] column value.
     *
     * @return string
     */
    public function getBaseRowTotal()
    {

        return $this->base_row_total;
    }

    /**
     * Get the [row_invoiced] column value.
     *
     * @return string
     */
    public function getRowInvoiced()
    {

        return $this->row_invoiced;
    }

    /**
     * Get the [base_row_invoiced] column value.
     *
     * @return string
     */
    public function getBaseRowInvoiced()
    {

        return $this->base_row_invoiced;
    }

    /**
     * Get the [row_weight] column value.
     *
     * @return string
     */
    public function getRowWeight()
    {

        return $this->row_weight;
    }

    /**
     * Get the [base_tax_before_discount] column value.
     *
     * @return string
     */
    public function getBaseTaxBeforeDiscount()
    {

        return $this->base_tax_before_discount;
    }

    /**
     * Get the [tax_before_discount] column value.
     *
     * @return string
     */
    public function getTaxBeforeDiscount()
    {

        return $this->tax_before_discount;
    }

    /**
     * Get the [ext_order_item_id] column value.
     *
     * @return string
     */
    public function getExtOrderItemId()
    {

        return $this->ext_order_item_id;
    }

    /**
     * Get the [locked_do_invoice] column value.
     *
     * @return int
     */
    public function getLockedDoInvoice()
    {

        return $this->locked_do_invoice;
    }

    /**
     * Get the [locked_do_ship] column value.
     *
     * @return int
     */
    public function getLockedDoShip()
    {

        return $this->locked_do_ship;
    }

    /**
     * Get the [price_incl_tax] column value.
     *
     * @return string
     */
    public function getPriceInclTax()
    {

        return $this->price_incl_tax;
    }

    /**
     * Get the [base_price_incl_tax] column value.
     *
     * @return string
     */
    public function getBasePriceInclTax()
    {

        return $this->base_price_incl_tax;
    }

    /**
     * Get the [row_total_incl_tax] column value.
     *
     * @return string
     */
    public function getRowTotalInclTax()
    {

        return $this->row_total_incl_tax;
    }

    /**
     * Get the [base_row_total_incl_tax] column value.
     *
     * @return string
     */
    public function getBaseRowTotalInclTax()
    {

        return $this->base_row_total_incl_tax;
    }

    /**
     * Get the [hidden_tax_amount] column value.
     *
     * @return string
     */
    public function getHiddenTaxAmount()
    {

        return $this->hidden_tax_amount;
    }

    /**
     * Get the [base_hidden_tax_amount] column value.
     *
     * @return string
     */
    public function getBaseHiddenTaxAmount()
    {

        return $this->base_hidden_tax_amount;
    }

    /**
     * Get the [hidden_tax_invoiced] column value.
     *
     * @return string
     */
    public function getHiddenTaxInvoiced()
    {

        return $this->hidden_tax_invoiced;
    }

    /**
     * Get the [base_hidden_tax_invoiced] column value.
     *
     * @return string
     */
    public function getBaseHiddenTaxInvoiced()
    {

        return $this->base_hidden_tax_invoiced;
    }

    /**
     * Get the [hidden_tax_refunded] column value.
     *
     * @return string
     */
    public function getHiddenTaxRefunded()
    {

        return $this->hidden_tax_refunded;
    }

    /**
     * Get the [base_hidden_tax_refunded] column value.
     *
     * @return string
     */
    public function getBaseHiddenTaxRefunded()
    {

        return $this->base_hidden_tax_refunded;
    }

    /**
     * Get the [is_nominal] column value.
     *
     * @return int
     */
    public function getIsNominal()
    {

        return $this->is_nominal;
    }

    /**
     * Get the [tax_canceled] column value.
     *
     * @return string
     */
    public function getTaxCanceled()
    {

        return $this->tax_canceled;
    }

    /**
     * Get the [hidden_tax_canceled] column value.
     *
     * @return string
     */
    public function getHiddenTaxCanceled()
    {

        return $this->hidden_tax_canceled;
    }

    /**
     * Get the [tax_refunded] column value.
     *
     * @return string
     */
    public function getTaxRefunded()
    {

        return $this->tax_refunded;
    }

    /**
     * Get the [base_tax_refunded] column value.
     *
     * @return string
     */
    public function getBaseTaxRefunded()
    {

        return $this->base_tax_refunded;
    }

    /**
     * Get the [discount_refunded] column value.
     *
     * @return string
     */
    public function getDiscountRefunded()
    {

        return $this->discount_refunded;
    }

    /**
     * Get the [base_discount_refunded] column value.
     *
     * @return string
     */
    public function getBaseDiscountRefunded()
    {

        return $this->base_discount_refunded;
    }

    /**
     * Get the [gift_message_id] column value.
     *
     * @return int
     */
    public function getGiftMessageId()
    {

        return $this->gift_message_id;
    }

    /**
     * Get the [gift_message_available] column value.
     *
     * @return int
     */
    public function getGiftMessageAvailable()
    {

        return $this->gift_message_available;
    }

    /**
     * Get the [base_weee_tax_applied_amount] column value.
     *
     * @return string
     */
    public function getBaseWeeeTaxAppliedAmount()
    {

        return $this->base_weee_tax_applied_amount;
    }

    /**
     * Get the [base_weee_tax_applied_row_amnt] column value.
     *
     * @return string
     */
    public function getBaseWeeeTaxAppliedRowAmnt()
    {

        return $this->base_weee_tax_applied_row_amnt;
    }

    /**
     * Get the [weee_tax_applied_amount] column value.
     *
     * @return string
     */
    public function getWeeeTaxAppliedAmount()
    {

        return $this->weee_tax_applied_amount;
    }

    /**
     * Get the [weee_tax_applied_row_amount] column value.
     *
     * @return string
     */
    public function getWeeeTaxAppliedRowAmount()
    {

        return $this->weee_tax_applied_row_amount;
    }

    /**
     * Get the [weee_tax_applied] column value.
     *
     * @return string
     */
    public function getWeeeTaxApplied()
    {

        return $this->weee_tax_applied;
    }

    /**
     * Get the [weee_tax_disposition] column value.
     *
     * @return string
     */
    public function getWeeeTaxDisposition()
    {

        return $this->weee_tax_disposition;
    }

    /**
     * Get the [weee_tax_row_disposition] column value.
     *
     * @return string
     */
    public function getWeeeTaxRowDisposition()
    {

        return $this->weee_tax_row_disposition;
    }

    /**
     * Get the [base_weee_tax_disposition] column value.
     *
     * @return string
     */
    public function getBaseWeeeTaxDisposition()
    {

        return $this->base_weee_tax_disposition;
    }

    /**
     * Get the [base_weee_tax_row_disposition] column value.
     *
     * @return string
     */
    public function getBaseWeeeTaxRowDisposition()
    {

        return $this->base_weee_tax_row_disposition;
    }

    /**
     * Get the [crc_id] column value.
     *
     * @return int
     */
    public function getCrcId()
    {

        return $this->crc_id;
    }

    /**
     * Get the [event_id] column value.
     *
     * @return int
     */
    public function getEventId()
    {

        return $this->event_id;
    }

    /**
     * Get the [giftregistry_item_id] column value.
     *
     * @return int
     */
    public function getGiftregistryItemId()
    {

        return $this->giftregistry_item_id;
    }

    /**
     * Get the [gw_id] column value.
     *
     * @return int
     */
    public function getGwId()
    {

        return $this->gw_id;
    }

    /**
     * Get the [gw_base_price] column value.
     *
     * @return string
     */
    public function getGwBasePrice()
    {

        return $this->gw_base_price;
    }

    /**
     * Get the [gw_price] column value.
     *
     * @return string
     */
    public function getGwPrice()
    {

        return $this->gw_price;
    }

    /**
     * Get the [gw_base_tax_amount] column value.
     *
     * @return string
     */
    public function getGwBaseTaxAmount()
    {

        return $this->gw_base_tax_amount;
    }

    /**
     * Get the [gw_tax_amount] column value.
     *
     * @return string
     */
    public function getGwTaxAmount()
    {

        return $this->gw_tax_amount;
    }

    /**
     * Get the [gw_base_price_invoiced] column value.
     *
     * @return string
     */
    public function getGwBasePriceInvoiced()
    {

        return $this->gw_base_price_invoiced;
    }

    /**
     * Get the [gw_price_invoiced] column value.
     *
     * @return string
     */
    public function getGwPriceInvoiced()
    {

        return $this->gw_price_invoiced;
    }

    /**
     * Get the [gw_base_tax_amount_invoiced] column value.
     *
     * @return string
     */
    public function getGwBaseTaxAmountInvoiced()
    {

        return $this->gw_base_tax_amount_invoiced;
    }

    /**
     * Get the [gw_tax_amount_invoiced] column value.
     *
     * @return string
     */
    public function getGwTaxAmountInvoiced()
    {

        return $this->gw_tax_amount_invoiced;
    }

    /**
     * Get the [gw_base_price_refunded] column value.
     *
     * @return string
     */
    public function getGwBasePriceRefunded()
    {

        return $this->gw_base_price_refunded;
    }

    /**
     * Get the [gw_price_refunded] column value.
     *
     * @return string
     */
    public function getGwPriceRefunded()
    {

        return $this->gw_price_refunded;
    }

    /**
     * Get the [gw_base_tax_amount_refunded] column value.
     *
     * @return string
     */
    public function getGwBaseTaxAmountRefunded()
    {

        return $this->gw_base_tax_amount_refunded;
    }

    /**
     * Get the [gw_tax_amount_refunded] column value.
     *
     * @return string
     */
    public function getGwTaxAmountRefunded()
    {

        return $this->gw_tax_amount_refunded;
    }

    /**
     * Get the [qty_returned] column value.
     *
     * @return string
     */
    public function getQtyReturned()
    {

        return $this->qty_returned;
    }

    /**
     * Get the [qty_redeemed] column value.
     *
     * @return string
     */
    public function getQtyRedeemed()
    {

        return $this->qty_redeemed;
    }

    /**
     * Get the [consultant] column value.
     *
     * @return string
     */
    public function getConsultant()
    {

        return $this->consultant;
    }

    /**
     * Get the [parent_product_id] column value.
     *
     * @return int
     */
    public function getParentProductId()
    {

        return $this->parent_product_id;
    }

    /**
     * Get the [qty_to_redeem] column value.
     *
     * @return int
     */
    public function getQtyToRedeem()
    {

        return $this->qty_to_redeem;
    }

    /**
     * Get the [rewards_used_detail] column value.
     *
     * @return string
     */
    public function getRewardsUsedDetail()
    {

        return $this->rewards_used_detail;
    }

    /**
     * Set the value of [item_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setItemId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->item_id !== $v) {
            $this->item_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::ITEM_ID;
        }


        return $this;
    } // setItemId()

    /**
     * Set the value of [order_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setOrderId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->order_id !== $v) {
            $this->order_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::ORDER_ID;
        }

        if ($this->aSalesFlatOrder !== null && $this->aSalesFlatOrder->getEntityId() !== $v) {
            $this->aSalesFlatOrder = null;
        }


        return $this;
    } // setOrderId()

    /**
     * Set the value of [parent_item_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setParentItemId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->parent_item_id !== $v) {
            $this->parent_item_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::PARENT_ITEM_ID;
        }


        return $this;
    } // setParentItemId()

    /**
     * Set the value of [quote_item_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setQuoteItemId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->quote_item_id !== $v) {
            $this->quote_item_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::QUOTE_ITEM_ID;
        }


        return $this;
    } // setQuoteItemId()

    /**
     * Set the value of [store_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setStoreId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->store_id !== $v) {
            $this->store_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::STORE_ID;
        }

        if ($this->aCoreStore !== null && $this->aCoreStore->getStoreId() !== $v) {
            $this->aCoreStore = null;
        }


        return $this;
    } // setStoreId()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = SalesFlatOrderItemPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = SalesFlatOrderItemPeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Set the value of [product_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setProductId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->product_id !== $v) {
            $this->product_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::PRODUCT_ID;
        }


        return $this;
    } // setProductId()

    /**
     * Set the value of [product_type] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setProductType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->product_type !== $v) {
            $this->product_type = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::PRODUCT_TYPE;
        }


        return $this;
    } // setProductType()

    /**
     * Set the value of [product_options] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setProductOptions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->product_options !== $v) {
            $this->product_options = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::PRODUCT_OPTIONS;
        }


        return $this;
    } // setProductOptions()

    /**
     * Set the value of [weight] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setWeight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->weight !== $v) {
            $this->weight = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::WEIGHT;
        }


        return $this;
    } // setWeight()

    /**
     * Set the value of [is_virtual] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setIsVirtual($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_virtual !== $v) {
            $this->is_virtual = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::IS_VIRTUAL;
        }


        return $this;
    } // setIsVirtual()

    /**
     * Set the value of [sku] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setSku($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sku !== $v) {
            $this->sku = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::SKU;
        }


        return $this;
    } // setSku()

    /**
     * Set the value of [name] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::NAME;
        }


        return $this;
    } // setName()

    /**
     * Set the value of [description] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [applied_rule_ids] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setAppliedRuleIds($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->applied_rule_ids !== $v) {
            $this->applied_rule_ids = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::APPLIED_RULE_IDS;
        }


        return $this;
    } // setAppliedRuleIds()

    /**
     * Set the value of [additional_data] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setAdditionalData($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->additional_data !== $v) {
            $this->additional_data = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::ADDITIONAL_DATA;
        }


        return $this;
    } // setAdditionalData()

    /**
     * Set the value of [free_shipping] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setFreeShipping($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->free_shipping !== $v) {
            $this->free_shipping = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::FREE_SHIPPING;
        }


        return $this;
    } // setFreeShipping()

    /**
     * Set the value of [is_qty_decimal] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setIsQtyDecimal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_qty_decimal !== $v) {
            $this->is_qty_decimal = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::IS_QTY_DECIMAL;
        }


        return $this;
    } // setIsQtyDecimal()

    /**
     * Set the value of [no_discount] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setNoDiscount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->no_discount !== $v) {
            $this->no_discount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::NO_DISCOUNT;
        }


        return $this;
    } // setNoDiscount()

    /**
     * Set the value of [qty_backordered] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setQtyBackordered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qty_backordered !== $v) {
            $this->qty_backordered = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::QTY_BACKORDERED;
        }


        return $this;
    } // setQtyBackordered()

    /**
     * Set the value of [qty_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setQtyCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qty_canceled !== $v) {
            $this->qty_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::QTY_CANCELED;
        }


        return $this;
    } // setQtyCanceled()

    /**
     * Set the value of [qty_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setQtyInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qty_invoiced !== $v) {
            $this->qty_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::QTY_INVOICED;
        }


        return $this;
    } // setQtyInvoiced()

    /**
     * Set the value of [qty_ordered] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setQtyOrdered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qty_ordered !== $v) {
            $this->qty_ordered = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::QTY_ORDERED;
        }


        return $this;
    } // setQtyOrdered()

    /**
     * Set the value of [qty_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setQtyRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qty_refunded !== $v) {
            $this->qty_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::QTY_REFUNDED;
        }


        return $this;
    } // setQtyRefunded()

    /**
     * Set the value of [qty_shipped] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setQtyShipped($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qty_shipped !== $v) {
            $this->qty_shipped = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::QTY_SHIPPED;
        }


        return $this;
    } // setQtyShipped()

    /**
     * Set the value of [base_cost] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseCost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_cost !== $v) {
            $this->base_cost = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_COST;
        }


        return $this;
    } // setBaseCost()

    /**
     * Set the value of [price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->price !== $v) {
            $this->price = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::PRICE;
        }


        return $this;
    } // setPrice()

    /**
     * Set the value of [base_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBasePrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_price !== $v) {
            $this->base_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_PRICE;
        }


        return $this;
    } // setBasePrice()

    /**
     * Set the value of [original_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setOriginalPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->original_price !== $v) {
            $this->original_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::ORIGINAL_PRICE;
        }


        return $this;
    } // setOriginalPrice()

    /**
     * Set the value of [base_original_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseOriginalPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_original_price !== $v) {
            $this->base_original_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_ORIGINAL_PRICE;
        }


        return $this;
    } // setBaseOriginalPrice()

    /**
     * Set the value of [tax_percent] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setTaxPercent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tax_percent !== $v) {
            $this->tax_percent = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::TAX_PERCENT;
        }


        return $this;
    } // setTaxPercent()

    /**
     * Set the value of [tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tax_amount !== $v) {
            $this->tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::TAX_AMOUNT;
        }


        return $this;
    } // setTaxAmount()

    /**
     * Set the value of [base_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_tax_amount !== $v) {
            $this->base_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_TAX_AMOUNT;
        }


        return $this;
    } // setBaseTaxAmount()

    /**
     * Set the value of [tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tax_invoiced !== $v) {
            $this->tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::TAX_INVOICED;
        }


        return $this;
    } // setTaxInvoiced()

    /**
     * Set the value of [base_tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_tax_invoiced !== $v) {
            $this->base_tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_TAX_INVOICED;
        }


        return $this;
    } // setBaseTaxInvoiced()

    /**
     * Set the value of [discount_percent] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setDiscountPercent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->discount_percent !== $v) {
            $this->discount_percent = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::DISCOUNT_PERCENT;
        }


        return $this;
    } // setDiscountPercent()

    /**
     * Set the value of [discount_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setDiscountAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->discount_amount !== $v) {
            $this->discount_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::DISCOUNT_AMOUNT;
        }


        return $this;
    } // setDiscountAmount()

    /**
     * Set the value of [base_discount_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseDiscountAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_discount_amount !== $v) {
            $this->base_discount_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_DISCOUNT_AMOUNT;
        }


        return $this;
    } // setBaseDiscountAmount()

    /**
     * Set the value of [discount_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setDiscountInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->discount_invoiced !== $v) {
            $this->discount_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::DISCOUNT_INVOICED;
        }


        return $this;
    } // setDiscountInvoiced()

    /**
     * Set the value of [base_discount_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseDiscountInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_discount_invoiced !== $v) {
            $this->base_discount_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_DISCOUNT_INVOICED;
        }


        return $this;
    } // setBaseDiscountInvoiced()

    /**
     * Set the value of [amount_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setAmountRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->amount_refunded !== $v) {
            $this->amount_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::AMOUNT_REFUNDED;
        }


        return $this;
    } // setAmountRefunded()

    /**
     * Set the value of [base_amount_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseAmountRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_amount_refunded !== $v) {
            $this->base_amount_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_AMOUNT_REFUNDED;
        }


        return $this;
    } // setBaseAmountRefunded()

    /**
     * Set the value of [row_total] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setRowTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->row_total !== $v) {
            $this->row_total = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::ROW_TOTAL;
        }


        return $this;
    } // setRowTotal()

    /**
     * Set the value of [base_row_total] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseRowTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_row_total !== $v) {
            $this->base_row_total = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_ROW_TOTAL;
        }


        return $this;
    } // setBaseRowTotal()

    /**
     * Set the value of [row_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setRowInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->row_invoiced !== $v) {
            $this->row_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::ROW_INVOICED;
        }


        return $this;
    } // setRowInvoiced()

    /**
     * Set the value of [base_row_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseRowInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_row_invoiced !== $v) {
            $this->base_row_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_ROW_INVOICED;
        }


        return $this;
    } // setBaseRowInvoiced()

    /**
     * Set the value of [row_weight] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setRowWeight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->row_weight !== $v) {
            $this->row_weight = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::ROW_WEIGHT;
        }


        return $this;
    } // setRowWeight()

    /**
     * Set the value of [base_tax_before_discount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseTaxBeforeDiscount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_tax_before_discount !== $v) {
            $this->base_tax_before_discount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_TAX_BEFORE_DISCOUNT;
        }


        return $this;
    } // setBaseTaxBeforeDiscount()

    /**
     * Set the value of [tax_before_discount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setTaxBeforeDiscount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tax_before_discount !== $v) {
            $this->tax_before_discount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::TAX_BEFORE_DISCOUNT;
        }


        return $this;
    } // setTaxBeforeDiscount()

    /**
     * Set the value of [ext_order_item_id] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setExtOrderItemId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ext_order_item_id !== $v) {
            $this->ext_order_item_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::EXT_ORDER_ITEM_ID;
        }


        return $this;
    } // setExtOrderItemId()

    /**
     * Set the value of [locked_do_invoice] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setLockedDoInvoice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->locked_do_invoice !== $v) {
            $this->locked_do_invoice = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::LOCKED_DO_INVOICE;
        }


        return $this;
    } // setLockedDoInvoice()

    /**
     * Set the value of [locked_do_ship] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setLockedDoShip($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->locked_do_ship !== $v) {
            $this->locked_do_ship = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::LOCKED_DO_SHIP;
        }


        return $this;
    } // setLockedDoShip()

    /**
     * Set the value of [price_incl_tax] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setPriceInclTax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->price_incl_tax !== $v) {
            $this->price_incl_tax = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::PRICE_INCL_TAX;
        }


        return $this;
    } // setPriceInclTax()

    /**
     * Set the value of [base_price_incl_tax] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBasePriceInclTax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_price_incl_tax !== $v) {
            $this->base_price_incl_tax = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_PRICE_INCL_TAX;
        }


        return $this;
    } // setBasePriceInclTax()

    /**
     * Set the value of [row_total_incl_tax] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setRowTotalInclTax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->row_total_incl_tax !== $v) {
            $this->row_total_incl_tax = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::ROW_TOTAL_INCL_TAX;
        }


        return $this;
    } // setRowTotalInclTax()

    /**
     * Set the value of [base_row_total_incl_tax] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseRowTotalInclTax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_row_total_incl_tax !== $v) {
            $this->base_row_total_incl_tax = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_ROW_TOTAL_INCL_TAX;
        }


        return $this;
    } // setBaseRowTotalInclTax()

    /**
     * Set the value of [hidden_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setHiddenTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hidden_tax_amount !== $v) {
            $this->hidden_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::HIDDEN_TAX_AMOUNT;
        }


        return $this;
    } // setHiddenTaxAmount()

    /**
     * Set the value of [base_hidden_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseHiddenTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_hidden_tax_amount !== $v) {
            $this->base_hidden_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_AMOUNT;
        }


        return $this;
    } // setBaseHiddenTaxAmount()

    /**
     * Set the value of [hidden_tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setHiddenTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hidden_tax_invoiced !== $v) {
            $this->hidden_tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::HIDDEN_TAX_INVOICED;
        }


        return $this;
    } // setHiddenTaxInvoiced()

    /**
     * Set the value of [base_hidden_tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseHiddenTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_hidden_tax_invoiced !== $v) {
            $this->base_hidden_tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_INVOICED;
        }


        return $this;
    } // setBaseHiddenTaxInvoiced()

    /**
     * Set the value of [hidden_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setHiddenTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hidden_tax_refunded !== $v) {
            $this->hidden_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::HIDDEN_TAX_REFUNDED;
        }


        return $this;
    } // setHiddenTaxRefunded()

    /**
     * Set the value of [base_hidden_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseHiddenTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_hidden_tax_refunded !== $v) {
            $this->base_hidden_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_REFUNDED;
        }


        return $this;
    } // setBaseHiddenTaxRefunded()

    /**
     * Set the value of [is_nominal] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setIsNominal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_nominal !== $v) {
            $this->is_nominal = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::IS_NOMINAL;
        }


        return $this;
    } // setIsNominal()

    /**
     * Set the value of [tax_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setTaxCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tax_canceled !== $v) {
            $this->tax_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::TAX_CANCELED;
        }


        return $this;
    } // setTaxCanceled()

    /**
     * Set the value of [hidden_tax_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setHiddenTaxCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hidden_tax_canceled !== $v) {
            $this->hidden_tax_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::HIDDEN_TAX_CANCELED;
        }


        return $this;
    } // setHiddenTaxCanceled()

    /**
     * Set the value of [tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tax_refunded !== $v) {
            $this->tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::TAX_REFUNDED;
        }


        return $this;
    } // setTaxRefunded()

    /**
     * Set the value of [base_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_tax_refunded !== $v) {
            $this->base_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_TAX_REFUNDED;
        }


        return $this;
    } // setBaseTaxRefunded()

    /**
     * Set the value of [discount_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setDiscountRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->discount_refunded !== $v) {
            $this->discount_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::DISCOUNT_REFUNDED;
        }


        return $this;
    } // setDiscountRefunded()

    /**
     * Set the value of [base_discount_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseDiscountRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_discount_refunded !== $v) {
            $this->base_discount_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_DISCOUNT_REFUNDED;
        }


        return $this;
    } // setBaseDiscountRefunded()

    /**
     * Set the value of [gift_message_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGiftMessageId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gift_message_id !== $v) {
            $this->gift_message_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GIFT_MESSAGE_ID;
        }


        return $this;
    } // setGiftMessageId()

    /**
     * Set the value of [gift_message_available] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGiftMessageAvailable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gift_message_available !== $v) {
            $this->gift_message_available = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GIFT_MESSAGE_AVAILABLE;
        }


        return $this;
    } // setGiftMessageAvailable()

    /**
     * Set the value of [base_weee_tax_applied_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseWeeeTaxAppliedAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_weee_tax_applied_amount !== $v) {
            $this->base_weee_tax_applied_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_AMOUNT;
        }


        return $this;
    } // setBaseWeeeTaxAppliedAmount()

    /**
     * Set the value of [base_weee_tax_applied_row_amnt] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseWeeeTaxAppliedRowAmnt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_weee_tax_applied_row_amnt !== $v) {
            $this->base_weee_tax_applied_row_amnt = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_ROW_AMNT;
        }


        return $this;
    } // setBaseWeeeTaxAppliedRowAmnt()

    /**
     * Set the value of [weee_tax_applied_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setWeeeTaxAppliedAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->weee_tax_applied_amount !== $v) {
            $this->weee_tax_applied_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_AMOUNT;
        }


        return $this;
    } // setWeeeTaxAppliedAmount()

    /**
     * Set the value of [weee_tax_applied_row_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setWeeeTaxAppliedRowAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->weee_tax_applied_row_amount !== $v) {
            $this->weee_tax_applied_row_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_ROW_AMOUNT;
        }


        return $this;
    } // setWeeeTaxAppliedRowAmount()

    /**
     * Set the value of [weee_tax_applied] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setWeeeTaxApplied($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->weee_tax_applied !== $v) {
            $this->weee_tax_applied = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::WEEE_TAX_APPLIED;
        }


        return $this;
    } // setWeeeTaxApplied()

    /**
     * Set the value of [weee_tax_disposition] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setWeeeTaxDisposition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->weee_tax_disposition !== $v) {
            $this->weee_tax_disposition = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::WEEE_TAX_DISPOSITION;
        }


        return $this;
    } // setWeeeTaxDisposition()

    /**
     * Set the value of [weee_tax_row_disposition] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setWeeeTaxRowDisposition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->weee_tax_row_disposition !== $v) {
            $this->weee_tax_row_disposition = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::WEEE_TAX_ROW_DISPOSITION;
        }


        return $this;
    } // setWeeeTaxRowDisposition()

    /**
     * Set the value of [base_weee_tax_disposition] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseWeeeTaxDisposition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_weee_tax_disposition !== $v) {
            $this->base_weee_tax_disposition = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_WEEE_TAX_DISPOSITION;
        }


        return $this;
    } // setBaseWeeeTaxDisposition()

    /**
     * Set the value of [base_weee_tax_row_disposition] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setBaseWeeeTaxRowDisposition($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_weee_tax_row_disposition !== $v) {
            $this->base_weee_tax_row_disposition = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::BASE_WEEE_TAX_ROW_DISPOSITION;
        }


        return $this;
    } // setBaseWeeeTaxRowDisposition()

    /**
     * Set the value of [crc_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setCrcId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->crc_id !== $v) {
            $this->crc_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::CRC_ID;
        }


        return $this;
    } // setCrcId()

    /**
     * Set the value of [event_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setEventId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->event_id !== $v) {
            $this->event_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::EVENT_ID;
        }


        return $this;
    } // setEventId()

    /**
     * Set the value of [giftregistry_item_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGiftregistryItemId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->giftregistry_item_id !== $v) {
            $this->giftregistry_item_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GIFTREGISTRY_ITEM_ID;
        }


        return $this;
    } // setGiftregistryItemId()

    /**
     * Set the value of [gw_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gw_id !== $v) {
            $this->gw_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_ID;
        }


        return $this;
    } // setGwId()

    /**
     * Set the value of [gw_base_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwBasePrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_price !== $v) {
            $this->gw_base_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_BASE_PRICE;
        }


        return $this;
    } // setGwBasePrice()

    /**
     * Set the value of [gw_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_price !== $v) {
            $this->gw_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_PRICE;
        }


        return $this;
    } // setGwPrice()

    /**
     * Set the value of [gw_base_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwBaseTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_tax_amount !== $v) {
            $this->gw_base_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT;
        }


        return $this;
    } // setGwBaseTaxAmount()

    /**
     * Set the value of [gw_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_tax_amount !== $v) {
            $this->gw_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_TAX_AMOUNT;
        }


        return $this;
    } // setGwTaxAmount()

    /**
     * Set the value of [gw_base_price_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwBasePriceInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_price_invoiced !== $v) {
            $this->gw_base_price_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_BASE_PRICE_INVOICED;
        }


        return $this;
    } // setGwBasePriceInvoiced()

    /**
     * Set the value of [gw_price_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwPriceInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_price_invoiced !== $v) {
            $this->gw_price_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_PRICE_INVOICED;
        }


        return $this;
    } // setGwPriceInvoiced()

    /**
     * Set the value of [gw_base_tax_amount_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwBaseTaxAmountInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_tax_amount_invoiced !== $v) {
            $this->gw_base_tax_amount_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_INVOICED;
        }


        return $this;
    } // setGwBaseTaxAmountInvoiced()

    /**
     * Set the value of [gw_tax_amount_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwTaxAmountInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_tax_amount_invoiced !== $v) {
            $this->gw_tax_amount_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_TAX_AMOUNT_INVOICED;
        }


        return $this;
    } // setGwTaxAmountInvoiced()

    /**
     * Set the value of [gw_base_price_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwBasePriceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_price_refunded !== $v) {
            $this->gw_base_price_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_BASE_PRICE_REFUNDED;
        }


        return $this;
    } // setGwBasePriceRefunded()

    /**
     * Set the value of [gw_price_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwPriceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_price_refunded !== $v) {
            $this->gw_price_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_PRICE_REFUNDED;
        }


        return $this;
    } // setGwPriceRefunded()

    /**
     * Set the value of [gw_base_tax_amount_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwBaseTaxAmountRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_tax_amount_refunded !== $v) {
            $this->gw_base_tax_amount_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_REFUNDED;
        }


        return $this;
    } // setGwBaseTaxAmountRefunded()

    /**
     * Set the value of [gw_tax_amount_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setGwTaxAmountRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_tax_amount_refunded !== $v) {
            $this->gw_tax_amount_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::GW_TAX_AMOUNT_REFUNDED;
        }


        return $this;
    } // setGwTaxAmountRefunded()

    /**
     * Set the value of [qty_returned] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setQtyReturned($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qty_returned !== $v) {
            $this->qty_returned = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::QTY_RETURNED;
        }


        return $this;
    } // setQtyReturned()

    /**
     * Set the value of [qty_redeemed] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setQtyRedeemed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qty_redeemed !== $v) {
            $this->qty_redeemed = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::QTY_REDEEMED;
        }


        return $this;
    } // setQtyRedeemed()

    /**
     * Set the value of [consultant] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setConsultant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->consultant !== $v) {
            $this->consultant = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::CONSULTANT;
        }


        return $this;
    } // setConsultant()

    /**
     * Set the value of [parent_product_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setParentProductId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->parent_product_id !== $v) {
            $this->parent_product_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::PARENT_PRODUCT_ID;
        }


        return $this;
    } // setParentProductId()

    /**
     * Set the value of [qty_to_redeem] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setQtyToRedeem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->qty_to_redeem !== $v) {
            $this->qty_to_redeem = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::QTY_TO_REDEEM;
        }


        return $this;
    } // setQtyToRedeem()

    /**
     * Set the value of [rewards_used_detail] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrderItem The current object (for fluent API support)
     */
    public function setRewardsUsedDetail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rewards_used_detail !== $v) {
            $this->rewards_used_detail = $v;
            $this->modifiedColumns[] = SalesFlatOrderItemPeer::REWARDS_USED_DETAIL;
        }


        return $this;
    } // setRewardsUsedDetail()

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
            if ($this->order_id !== 0) {
                return false;
            }

            if ($this->created_at !== NULL) {
                return false;
            }

            if ($this->updated_at !== NULL) {
                return false;
            }

            if ($this->weight !== '0.0000') {
                return false;
            }

            if ($this->free_shipping !== 0) {
                return false;
            }

            if ($this->no_discount !== 0) {
                return false;
            }

            if ($this->qty_backordered !== '0.0000') {
                return false;
            }

            if ($this->qty_canceled !== '0.0000') {
                return false;
            }

            if ($this->qty_invoiced !== '0.0000') {
                return false;
            }

            if ($this->qty_ordered !== '0.0000') {
                return false;
            }

            if ($this->qty_refunded !== '0.0000') {
                return false;
            }

            if ($this->qty_shipped !== '0.0000') {
                return false;
            }

            if ($this->base_cost !== '0.0000') {
                return false;
            }

            if ($this->price !== '0.0000') {
                return false;
            }

            if ($this->base_price !== '0.0000') {
                return false;
            }

            if ($this->tax_percent !== '0.0000') {
                return false;
            }

            if ($this->tax_amount !== '0.0000') {
                return false;
            }

            if ($this->base_tax_amount !== '0.0000') {
                return false;
            }

            if ($this->tax_invoiced !== '0.0000') {
                return false;
            }

            if ($this->base_tax_invoiced !== '0.0000') {
                return false;
            }

            if ($this->discount_percent !== '0.0000') {
                return false;
            }

            if ($this->discount_amount !== '0.0000') {
                return false;
            }

            if ($this->base_discount_amount !== '0.0000') {
                return false;
            }

            if ($this->discount_invoiced !== '0.0000') {
                return false;
            }

            if ($this->base_discount_invoiced !== '0.0000') {
                return false;
            }

            if ($this->amount_refunded !== '0.0000') {
                return false;
            }

            if ($this->base_amount_refunded !== '0.0000') {
                return false;
            }

            if ($this->row_total !== '0.0000') {
                return false;
            }

            if ($this->base_row_total !== '0.0000') {
                return false;
            }

            if ($this->row_invoiced !== '0.0000') {
                return false;
            }

            if ($this->base_row_invoiced !== '0.0000') {
                return false;
            }

            if ($this->row_weight !== '0.0000') {
                return false;
            }

            if ($this->is_nominal !== 0) {
                return false;
            }

            if ($this->qty_returned !== '0.0000') {
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

            $this->item_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->order_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->parent_item_id = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->quote_item_id = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->store_id = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->created_at = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->updated_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->product_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->product_type = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->product_options = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->weight = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->is_virtual = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->sku = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->name = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->description = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->applied_rule_ids = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->additional_data = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->free_shipping = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->is_qty_decimal = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->no_discount = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->qty_backordered = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->qty_canceled = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->qty_invoiced = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->qty_ordered = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->qty_refunded = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->qty_shipped = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->base_cost = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->price = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->base_price = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->original_price = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->base_original_price = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->tax_percent = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->tax_amount = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->base_tax_amount = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->tax_invoiced = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->base_tax_invoiced = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->discount_percent = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->discount_amount = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->base_discount_amount = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->discount_invoiced = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->base_discount_invoiced = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->amount_refunded = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->base_amount_refunded = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->row_total = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->base_row_total = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->row_invoiced = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->base_row_invoiced = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->row_weight = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->base_tax_before_discount = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->tax_before_discount = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->ext_order_item_id = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->locked_do_invoice = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
            $this->locked_do_ship = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->price_incl_tax = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->base_price_incl_tax = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->row_total_incl_tax = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->base_row_total_incl_tax = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->hidden_tax_amount = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->base_hidden_tax_amount = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->hidden_tax_invoiced = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->base_hidden_tax_invoiced = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->hidden_tax_refunded = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->base_hidden_tax_refunded = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->is_nominal = ($row[$startcol + 63] !== null) ? (int) $row[$startcol + 63] : null;
            $this->tax_canceled = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->hidden_tax_canceled = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->tax_refunded = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->base_tax_refunded = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->discount_refunded = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->base_discount_refunded = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->gift_message_id = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->gift_message_available = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->base_weee_tax_applied_amount = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->base_weee_tax_applied_row_amnt = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->weee_tax_applied_amount = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->weee_tax_applied_row_amount = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->weee_tax_applied = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->weee_tax_disposition = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->weee_tax_row_disposition = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->base_weee_tax_disposition = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->base_weee_tax_row_disposition = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->crc_id = ($row[$startcol + 81] !== null) ? (int) $row[$startcol + 81] : null;
            $this->event_id = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->giftregistry_item_id = ($row[$startcol + 83] !== null) ? (int) $row[$startcol + 83] : null;
            $this->gw_id = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
            $this->gw_base_price = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->gw_price = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
            $this->gw_base_tax_amount = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->gw_tax_amount = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->gw_base_price_invoiced = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->gw_price_invoiced = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->gw_base_tax_amount_invoiced = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->gw_tax_amount_invoiced = ($row[$startcol + 92] !== null) ? (string) $row[$startcol + 92] : null;
            $this->gw_base_price_refunded = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->gw_price_refunded = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->gw_base_tax_amount_refunded = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->gw_tax_amount_refunded = ($row[$startcol + 96] !== null) ? (string) $row[$startcol + 96] : null;
            $this->qty_returned = ($row[$startcol + 97] !== null) ? (string) $row[$startcol + 97] : null;
            $this->qty_redeemed = ($row[$startcol + 98] !== null) ? (string) $row[$startcol + 98] : null;
            $this->consultant = ($row[$startcol + 99] !== null) ? (string) $row[$startcol + 99] : null;
            $this->parent_product_id = ($row[$startcol + 100] !== null) ? (int) $row[$startcol + 100] : null;
            $this->qty_to_redeem = ($row[$startcol + 101] !== null) ? (int) $row[$startcol + 101] : null;
            $this->rewards_used_detail = ($row[$startcol + 102] !== null) ? (string) $row[$startcol + 102] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 103; // 103 = SalesFlatOrderItemPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SalesFlatOrderItem object", $e);
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

        if ($this->aSalesFlatOrder !== null && $this->order_id !== $this->aSalesFlatOrder->getEntityId()) {
            $this->aSalesFlatOrder = null;
        }
        if ($this->aCoreStore !== null && $this->store_id !== $this->aCoreStore->getStoreId()) {
            $this->aCoreStore = null;
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
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SalesFlatOrderItemPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSalesFlatOrder = null;
            $this->aCoreStore = null;
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
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SalesFlatOrderItemQuery::create()
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
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SalesFlatOrderItemPeer::addInstanceToPool($this);
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

            if ($this->aSalesFlatOrder !== null) {
                if ($this->aSalesFlatOrder->isModified() || $this->aSalesFlatOrder->isNew()) {
                    $affectedRows += $this->aSalesFlatOrder->save($con);
                }
                $this->setSalesFlatOrder($this->aSalesFlatOrder);
            }

            if ($this->aCoreStore !== null) {
                if ($this->aCoreStore->isModified() || $this->aCoreStore->isNew()) {
                    $affectedRows += $this->aCoreStore->save($con);
                }
                $this->setCoreStore($this->aCoreStore);
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

        $this->modifiedColumns[] = SalesFlatOrderItemPeer::ITEM_ID;
        if (null !== $this->item_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SalesFlatOrderItemPeer::ITEM_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'item_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ORDER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'order_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PARENT_ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'parent_item_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QUOTE_ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'quote_item_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::STORE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'store_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PRODUCT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'product_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PRODUCT_TYPE)) {
            $modifiedColumns[':p' . $index++]  = 'product_type';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PRODUCT_OPTIONS)) {
            $modifiedColumns[':p' . $index++]  = 'product_options';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'weight';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::IS_VIRTUAL)) {
            $modifiedColumns[':p' . $index++]  = 'is_virtual';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::SKU)) {
            $modifiedColumns[':p' . $index++]  = 'sku';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::NAME)) {
            $modifiedColumns[':p' . $index++]  = 'name';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'description';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::APPLIED_RULE_IDS)) {
            $modifiedColumns[':p' . $index++]  = 'applied_rule_ids';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ADDITIONAL_DATA)) {
            $modifiedColumns[':p' . $index++]  = 'additional_data';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::FREE_SHIPPING)) {
            $modifiedColumns[':p' . $index++]  = 'free_shipping';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::IS_QTY_DECIMAL)) {
            $modifiedColumns[':p' . $index++]  = 'is_qty_decimal';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::NO_DISCOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'no_discount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_BACKORDERED)) {
            $modifiedColumns[':p' . $index++]  = 'qty_backordered';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'qty_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'qty_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_ORDERED)) {
            $modifiedColumns[':p' . $index++]  = 'qty_ordered';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'qty_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_SHIPPED)) {
            $modifiedColumns[':p' . $index++]  = 'qty_shipped';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_COST)) {
            $modifiedColumns[':p' . $index++]  = 'base_cost';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'price';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'base_price';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ORIGINAL_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'original_price';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_ORIGINAL_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'base_original_price';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_PERCENT)) {
            $modifiedColumns[':p' . $index++]  = 'tax_percent';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::DISCOUNT_PERCENT)) {
            $modifiedColumns[':p' . $index++]  = 'discount_percent';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::DISCOUNT_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'discount_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_DISCOUNT_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_discount_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::DISCOUNT_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'discount_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_DISCOUNT_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_discount_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::AMOUNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'amount_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_AMOUNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_amount_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ROW_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = 'row_total';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_ROW_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = 'base_row_total';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ROW_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'row_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_ROW_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_row_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ROW_WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'row_weight';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_TAX_BEFORE_DISCOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_tax_before_discount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_BEFORE_DISCOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'tax_before_discount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::EXT_ORDER_ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'ext_order_item_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::LOCKED_DO_INVOICE)) {
            $modifiedColumns[':p' . $index++]  = 'locked_do_invoice';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::LOCKED_DO_SHIP)) {
            $modifiedColumns[':p' . $index++]  = 'locked_do_ship';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PRICE_INCL_TAX)) {
            $modifiedColumns[':p' . $index++]  = 'price_incl_tax';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_PRICE_INCL_TAX)) {
            $modifiedColumns[':p' . $index++]  = 'base_price_incl_tax';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ROW_TOTAL_INCL_TAX)) {
            $modifiedColumns[':p' . $index++]  = 'row_total_incl_tax';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_ROW_TOTAL_INCL_TAX)) {
            $modifiedColumns[':p' . $index++]  = 'base_row_total_incl_tax';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::HIDDEN_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'hidden_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_hidden_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::HIDDEN_TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'hidden_tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_hidden_tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::HIDDEN_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'hidden_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_hidden_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::IS_NOMINAL)) {
            $modifiedColumns[':p' . $index++]  = 'is_nominal';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'tax_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::HIDDEN_TAX_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'hidden_tax_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::DISCOUNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'discount_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_DISCOUNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_discount_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GIFT_MESSAGE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'gift_message_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GIFT_MESSAGE_AVAILABLE)) {
            $modifiedColumns[':p' . $index++]  = 'gift_message_available';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_weee_tax_applied_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_ROW_AMNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_weee_tax_applied_row_amnt';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'weee_tax_applied_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_ROW_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'weee_tax_applied_row_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED)) {
            $modifiedColumns[':p' . $index++]  = 'weee_tax_applied';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEEE_TAX_DISPOSITION)) {
            $modifiedColumns[':p' . $index++]  = 'weee_tax_disposition';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEEE_TAX_ROW_DISPOSITION)) {
            $modifiedColumns[':p' . $index++]  = 'weee_tax_row_disposition';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_WEEE_TAX_DISPOSITION)) {
            $modifiedColumns[':p' . $index++]  = 'base_weee_tax_disposition';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_WEEE_TAX_ROW_DISPOSITION)) {
            $modifiedColumns[':p' . $index++]  = 'base_weee_tax_row_disposition';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::CRC_ID)) {
            $modifiedColumns[':p' . $index++]  = 'crc_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::EVENT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'event_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GIFTREGISTRY_ITEM_ID)) {
            $modifiedColumns[':p' . $index++]  = 'giftregistry_item_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_ID)) {
            $modifiedColumns[':p' . $index++]  = 'gw_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_price';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'gw_price';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'gw_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_PRICE_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_price_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_PRICE_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_price_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_tax_amount_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_tax_amount_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_PRICE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_price_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_PRICE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_price_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_tax_amount_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_tax_amount_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_RETURNED)) {
            $modifiedColumns[':p' . $index++]  = 'qty_returned';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_REDEEMED)) {
            $modifiedColumns[':p' . $index++]  = 'qty_redeemed';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::CONSULTANT)) {
            $modifiedColumns[':p' . $index++]  = 'consultant';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PARENT_PRODUCT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'parent_product_id';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_TO_REDEEM)) {
            $modifiedColumns[':p' . $index++]  = 'qty_to_redeem';
        }
        if ($this->isColumnModified(SalesFlatOrderItemPeer::REWARDS_USED_DETAIL)) {
            $modifiedColumns[':p' . $index++]  = 'rewards_used_detail';
        }

        $sql = sprintf(
            'INSERT INTO sales_flat_order_item (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'item_id':
                        $stmt->bindValue($identifier, $this->item_id, PDO::PARAM_INT);
                        break;
                    case 'order_id':
                        $stmt->bindValue($identifier, $this->order_id, PDO::PARAM_INT);
                        break;
                    case 'parent_item_id':
                        $stmt->bindValue($identifier, $this->parent_item_id, PDO::PARAM_INT);
                        break;
                    case 'quote_item_id':
                        $stmt->bindValue($identifier, $this->quote_item_id, PDO::PARAM_INT);
                        break;
                    case 'store_id':
                        $stmt->bindValue($identifier, $this->store_id, PDO::PARAM_INT);
                        break;
                    case 'created_at':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case 'updated_at':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
                        break;
                    case 'product_id':
                        $stmt->bindValue($identifier, $this->product_id, PDO::PARAM_INT);
                        break;
                    case 'product_type':
                        $stmt->bindValue($identifier, $this->product_type, PDO::PARAM_STR);
                        break;
                    case 'product_options':
                        $stmt->bindValue($identifier, $this->product_options, PDO::PARAM_STR);
                        break;
                    case 'weight':
                        $stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
                        break;
                    case 'is_virtual':
                        $stmt->bindValue($identifier, $this->is_virtual, PDO::PARAM_INT);
                        break;
                    case 'sku':
                        $stmt->bindValue($identifier, $this->sku, PDO::PARAM_STR);
                        break;
                    case 'name':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);
                        break;
                    case 'description':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case 'applied_rule_ids':
                        $stmt->bindValue($identifier, $this->applied_rule_ids, PDO::PARAM_STR);
                        break;
                    case 'additional_data':
                        $stmt->bindValue($identifier, $this->additional_data, PDO::PARAM_STR);
                        break;
                    case 'free_shipping':
                        $stmt->bindValue($identifier, $this->free_shipping, PDO::PARAM_INT);
                        break;
                    case 'is_qty_decimal':
                        $stmt->bindValue($identifier, $this->is_qty_decimal, PDO::PARAM_INT);
                        break;
                    case 'no_discount':
                        $stmt->bindValue($identifier, $this->no_discount, PDO::PARAM_INT);
                        break;
                    case 'qty_backordered':
                        $stmt->bindValue($identifier, $this->qty_backordered, PDO::PARAM_STR);
                        break;
                    case 'qty_canceled':
                        $stmt->bindValue($identifier, $this->qty_canceled, PDO::PARAM_STR);
                        break;
                    case 'qty_invoiced':
                        $stmt->bindValue($identifier, $this->qty_invoiced, PDO::PARAM_STR);
                        break;
                    case 'qty_ordered':
                        $stmt->bindValue($identifier, $this->qty_ordered, PDO::PARAM_STR);
                        break;
                    case 'qty_refunded':
                        $stmt->bindValue($identifier, $this->qty_refunded, PDO::PARAM_STR);
                        break;
                    case 'qty_shipped':
                        $stmt->bindValue($identifier, $this->qty_shipped, PDO::PARAM_STR);
                        break;
                    case 'base_cost':
                        $stmt->bindValue($identifier, $this->base_cost, PDO::PARAM_STR);
                        break;
                    case 'price':
                        $stmt->bindValue($identifier, $this->price, PDO::PARAM_STR);
                        break;
                    case 'base_price':
                        $stmt->bindValue($identifier, $this->base_price, PDO::PARAM_STR);
                        break;
                    case 'original_price':
                        $stmt->bindValue($identifier, $this->original_price, PDO::PARAM_STR);
                        break;
                    case 'base_original_price':
                        $stmt->bindValue($identifier, $this->base_original_price, PDO::PARAM_STR);
                        break;
                    case 'tax_percent':
                        $stmt->bindValue($identifier, $this->tax_percent, PDO::PARAM_STR);
                        break;
                    case 'tax_amount':
                        $stmt->bindValue($identifier, $this->tax_amount, PDO::PARAM_STR);
                        break;
                    case 'base_tax_amount':
                        $stmt->bindValue($identifier, $this->base_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'tax_invoiced':
                        $stmt->bindValue($identifier, $this->tax_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_tax_invoiced':
                        $stmt->bindValue($identifier, $this->base_tax_invoiced, PDO::PARAM_STR);
                        break;
                    case 'discount_percent':
                        $stmt->bindValue($identifier, $this->discount_percent, PDO::PARAM_STR);
                        break;
                    case 'discount_amount':
                        $stmt->bindValue($identifier, $this->discount_amount, PDO::PARAM_STR);
                        break;
                    case 'base_discount_amount':
                        $stmt->bindValue($identifier, $this->base_discount_amount, PDO::PARAM_STR);
                        break;
                    case 'discount_invoiced':
                        $stmt->bindValue($identifier, $this->discount_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_discount_invoiced':
                        $stmt->bindValue($identifier, $this->base_discount_invoiced, PDO::PARAM_STR);
                        break;
                    case 'amount_refunded':
                        $stmt->bindValue($identifier, $this->amount_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_amount_refunded':
                        $stmt->bindValue($identifier, $this->base_amount_refunded, PDO::PARAM_STR);
                        break;
                    case 'row_total':
                        $stmt->bindValue($identifier, $this->row_total, PDO::PARAM_STR);
                        break;
                    case 'base_row_total':
                        $stmt->bindValue($identifier, $this->base_row_total, PDO::PARAM_STR);
                        break;
                    case 'row_invoiced':
                        $stmt->bindValue($identifier, $this->row_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_row_invoiced':
                        $stmt->bindValue($identifier, $this->base_row_invoiced, PDO::PARAM_STR);
                        break;
                    case 'row_weight':
                        $stmt->bindValue($identifier, $this->row_weight, PDO::PARAM_STR);
                        break;
                    case 'base_tax_before_discount':
                        $stmt->bindValue($identifier, $this->base_tax_before_discount, PDO::PARAM_STR);
                        break;
                    case 'tax_before_discount':
                        $stmt->bindValue($identifier, $this->tax_before_discount, PDO::PARAM_STR);
                        break;
                    case 'ext_order_item_id':
                        $stmt->bindValue($identifier, $this->ext_order_item_id, PDO::PARAM_STR);
                        break;
                    case 'locked_do_invoice':
                        $stmt->bindValue($identifier, $this->locked_do_invoice, PDO::PARAM_INT);
                        break;
                    case 'locked_do_ship':
                        $stmt->bindValue($identifier, $this->locked_do_ship, PDO::PARAM_INT);
                        break;
                    case 'price_incl_tax':
                        $stmt->bindValue($identifier, $this->price_incl_tax, PDO::PARAM_STR);
                        break;
                    case 'base_price_incl_tax':
                        $stmt->bindValue($identifier, $this->base_price_incl_tax, PDO::PARAM_STR);
                        break;
                    case 'row_total_incl_tax':
                        $stmt->bindValue($identifier, $this->row_total_incl_tax, PDO::PARAM_STR);
                        break;
                    case 'base_row_total_incl_tax':
                        $stmt->bindValue($identifier, $this->base_row_total_incl_tax, PDO::PARAM_STR);
                        break;
                    case 'hidden_tax_amount':
                        $stmt->bindValue($identifier, $this->hidden_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'base_hidden_tax_amount':
                        $stmt->bindValue($identifier, $this->base_hidden_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'hidden_tax_invoiced':
                        $stmt->bindValue($identifier, $this->hidden_tax_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_hidden_tax_invoiced':
                        $stmt->bindValue($identifier, $this->base_hidden_tax_invoiced, PDO::PARAM_STR);
                        break;
                    case 'hidden_tax_refunded':
                        $stmt->bindValue($identifier, $this->hidden_tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_hidden_tax_refunded':
                        $stmt->bindValue($identifier, $this->base_hidden_tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'is_nominal':
                        $stmt->bindValue($identifier, $this->is_nominal, PDO::PARAM_INT);
                        break;
                    case 'tax_canceled':
                        $stmt->bindValue($identifier, $this->tax_canceled, PDO::PARAM_STR);
                        break;
                    case 'hidden_tax_canceled':
                        $stmt->bindValue($identifier, $this->hidden_tax_canceled, PDO::PARAM_STR);
                        break;
                    case 'tax_refunded':
                        $stmt->bindValue($identifier, $this->tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_tax_refunded':
                        $stmt->bindValue($identifier, $this->base_tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'discount_refunded':
                        $stmt->bindValue($identifier, $this->discount_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_discount_refunded':
                        $stmt->bindValue($identifier, $this->base_discount_refunded, PDO::PARAM_STR);
                        break;
                    case 'gift_message_id':
                        $stmt->bindValue($identifier, $this->gift_message_id, PDO::PARAM_INT);
                        break;
                    case 'gift_message_available':
                        $stmt->bindValue($identifier, $this->gift_message_available, PDO::PARAM_INT);
                        break;
                    case 'base_weee_tax_applied_amount':
                        $stmt->bindValue($identifier, $this->base_weee_tax_applied_amount, PDO::PARAM_STR);
                        break;
                    case 'base_weee_tax_applied_row_amnt':
                        $stmt->bindValue($identifier, $this->base_weee_tax_applied_row_amnt, PDO::PARAM_STR);
                        break;
                    case 'weee_tax_applied_amount':
                        $stmt->bindValue($identifier, $this->weee_tax_applied_amount, PDO::PARAM_STR);
                        break;
                    case 'weee_tax_applied_row_amount':
                        $stmt->bindValue($identifier, $this->weee_tax_applied_row_amount, PDO::PARAM_STR);
                        break;
                    case 'weee_tax_applied':
                        $stmt->bindValue($identifier, $this->weee_tax_applied, PDO::PARAM_STR);
                        break;
                    case 'weee_tax_disposition':
                        $stmt->bindValue($identifier, $this->weee_tax_disposition, PDO::PARAM_STR);
                        break;
                    case 'weee_tax_row_disposition':
                        $stmt->bindValue($identifier, $this->weee_tax_row_disposition, PDO::PARAM_STR);
                        break;
                    case 'base_weee_tax_disposition':
                        $stmt->bindValue($identifier, $this->base_weee_tax_disposition, PDO::PARAM_STR);
                        break;
                    case 'base_weee_tax_row_disposition':
                        $stmt->bindValue($identifier, $this->base_weee_tax_row_disposition, PDO::PARAM_STR);
                        break;
                    case 'crc_id':
                        $stmt->bindValue($identifier, $this->crc_id, PDO::PARAM_INT);
                        break;
                    case 'event_id':
                        $stmt->bindValue($identifier, $this->event_id, PDO::PARAM_INT);
                        break;
                    case 'giftregistry_item_id':
                        $stmt->bindValue($identifier, $this->giftregistry_item_id, PDO::PARAM_INT);
                        break;
                    case 'gw_id':
                        $stmt->bindValue($identifier, $this->gw_id, PDO::PARAM_INT);
                        break;
                    case 'gw_base_price':
                        $stmt->bindValue($identifier, $this->gw_base_price, PDO::PARAM_STR);
                        break;
                    case 'gw_price':
                        $stmt->bindValue($identifier, $this->gw_price, PDO::PARAM_STR);
                        break;
                    case 'gw_base_tax_amount':
                        $stmt->bindValue($identifier, $this->gw_base_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'gw_tax_amount':
                        $stmt->bindValue($identifier, $this->gw_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'gw_base_price_invoiced':
                        $stmt->bindValue($identifier, $this->gw_base_price_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_price_invoiced':
                        $stmt->bindValue($identifier, $this->gw_price_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_base_tax_amount_invoiced':
                        $stmt->bindValue($identifier, $this->gw_base_tax_amount_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_tax_amount_invoiced':
                        $stmt->bindValue($identifier, $this->gw_tax_amount_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_base_price_refunded':
                        $stmt->bindValue($identifier, $this->gw_base_price_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_price_refunded':
                        $stmt->bindValue($identifier, $this->gw_price_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_base_tax_amount_refunded':
                        $stmt->bindValue($identifier, $this->gw_base_tax_amount_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_tax_amount_refunded':
                        $stmt->bindValue($identifier, $this->gw_tax_amount_refunded, PDO::PARAM_STR);
                        break;
                    case 'qty_returned':
                        $stmt->bindValue($identifier, $this->qty_returned, PDO::PARAM_STR);
                        break;
                    case 'qty_redeemed':
                        $stmt->bindValue($identifier, $this->qty_redeemed, PDO::PARAM_STR);
                        break;
                    case 'consultant':
                        $stmt->bindValue($identifier, $this->consultant, PDO::PARAM_STR);
                        break;
                    case 'parent_product_id':
                        $stmt->bindValue($identifier, $this->parent_product_id, PDO::PARAM_INT);
                        break;
                    case 'qty_to_redeem':
                        $stmt->bindValue($identifier, $this->qty_to_redeem, PDO::PARAM_INT);
                        break;
                    case 'rewards_used_detail':
                        $stmt->bindValue($identifier, $this->rewards_used_detail, PDO::PARAM_STR);
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
        $this->setItemId($pk);

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

            if ($this->aSalesFlatOrder !== null) {
                if (!$this->aSalesFlatOrder->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSalesFlatOrder->getValidationFailures());
                }
            }

            if ($this->aCoreStore !== null) {
                if (!$this->aCoreStore->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCoreStore->getValidationFailures());
                }
            }


            if (($retval = SalesFlatOrderItemPeer::doValidate($this, $columns)) !== true) {
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
        $pos = SalesFlatOrderItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getItemId();
                break;
            case 1:
                return $this->getOrderId();
                break;
            case 2:
                return $this->getParentItemId();
                break;
            case 3:
                return $this->getQuoteItemId();
                break;
            case 4:
                return $this->getStoreId();
                break;
            case 5:
                return $this->getCreatedAt();
                break;
            case 6:
                return $this->getUpdatedAt();
                break;
            case 7:
                return $this->getProductId();
                break;
            case 8:
                return $this->getProductType();
                break;
            case 9:
                return $this->getProductOptions();
                break;
            case 10:
                return $this->getWeight();
                break;
            case 11:
                return $this->getIsVirtual();
                break;
            case 12:
                return $this->getSku();
                break;
            case 13:
                return $this->getName();
                break;
            case 14:
                return $this->getDescription();
                break;
            case 15:
                return $this->getAppliedRuleIds();
                break;
            case 16:
                return $this->getAdditionalData();
                break;
            case 17:
                return $this->getFreeShipping();
                break;
            case 18:
                return $this->getIsQtyDecimal();
                break;
            case 19:
                return $this->getNoDiscount();
                break;
            case 20:
                return $this->getQtyBackordered();
                break;
            case 21:
                return $this->getQtyCanceled();
                break;
            case 22:
                return $this->getQtyInvoiced();
                break;
            case 23:
                return $this->getQtyOrdered();
                break;
            case 24:
                return $this->getQtyRefunded();
                break;
            case 25:
                return $this->getQtyShipped();
                break;
            case 26:
                return $this->getBaseCost();
                break;
            case 27:
                return $this->getPrice();
                break;
            case 28:
                return $this->getBasePrice();
                break;
            case 29:
                return $this->getOriginalPrice();
                break;
            case 30:
                return $this->getBaseOriginalPrice();
                break;
            case 31:
                return $this->getTaxPercent();
                break;
            case 32:
                return $this->getTaxAmount();
                break;
            case 33:
                return $this->getBaseTaxAmount();
                break;
            case 34:
                return $this->getTaxInvoiced();
                break;
            case 35:
                return $this->getBaseTaxInvoiced();
                break;
            case 36:
                return $this->getDiscountPercent();
                break;
            case 37:
                return $this->getDiscountAmount();
                break;
            case 38:
                return $this->getBaseDiscountAmount();
                break;
            case 39:
                return $this->getDiscountInvoiced();
                break;
            case 40:
                return $this->getBaseDiscountInvoiced();
                break;
            case 41:
                return $this->getAmountRefunded();
                break;
            case 42:
                return $this->getBaseAmountRefunded();
                break;
            case 43:
                return $this->getRowTotal();
                break;
            case 44:
                return $this->getBaseRowTotal();
                break;
            case 45:
                return $this->getRowInvoiced();
                break;
            case 46:
                return $this->getBaseRowInvoiced();
                break;
            case 47:
                return $this->getRowWeight();
                break;
            case 48:
                return $this->getBaseTaxBeforeDiscount();
                break;
            case 49:
                return $this->getTaxBeforeDiscount();
                break;
            case 50:
                return $this->getExtOrderItemId();
                break;
            case 51:
                return $this->getLockedDoInvoice();
                break;
            case 52:
                return $this->getLockedDoShip();
                break;
            case 53:
                return $this->getPriceInclTax();
                break;
            case 54:
                return $this->getBasePriceInclTax();
                break;
            case 55:
                return $this->getRowTotalInclTax();
                break;
            case 56:
                return $this->getBaseRowTotalInclTax();
                break;
            case 57:
                return $this->getHiddenTaxAmount();
                break;
            case 58:
                return $this->getBaseHiddenTaxAmount();
                break;
            case 59:
                return $this->getHiddenTaxInvoiced();
                break;
            case 60:
                return $this->getBaseHiddenTaxInvoiced();
                break;
            case 61:
                return $this->getHiddenTaxRefunded();
                break;
            case 62:
                return $this->getBaseHiddenTaxRefunded();
                break;
            case 63:
                return $this->getIsNominal();
                break;
            case 64:
                return $this->getTaxCanceled();
                break;
            case 65:
                return $this->getHiddenTaxCanceled();
                break;
            case 66:
                return $this->getTaxRefunded();
                break;
            case 67:
                return $this->getBaseTaxRefunded();
                break;
            case 68:
                return $this->getDiscountRefunded();
                break;
            case 69:
                return $this->getBaseDiscountRefunded();
                break;
            case 70:
                return $this->getGiftMessageId();
                break;
            case 71:
                return $this->getGiftMessageAvailable();
                break;
            case 72:
                return $this->getBaseWeeeTaxAppliedAmount();
                break;
            case 73:
                return $this->getBaseWeeeTaxAppliedRowAmnt();
                break;
            case 74:
                return $this->getWeeeTaxAppliedAmount();
                break;
            case 75:
                return $this->getWeeeTaxAppliedRowAmount();
                break;
            case 76:
                return $this->getWeeeTaxApplied();
                break;
            case 77:
                return $this->getWeeeTaxDisposition();
                break;
            case 78:
                return $this->getWeeeTaxRowDisposition();
                break;
            case 79:
                return $this->getBaseWeeeTaxDisposition();
                break;
            case 80:
                return $this->getBaseWeeeTaxRowDisposition();
                break;
            case 81:
                return $this->getCrcId();
                break;
            case 82:
                return $this->getEventId();
                break;
            case 83:
                return $this->getGiftregistryItemId();
                break;
            case 84:
                return $this->getGwId();
                break;
            case 85:
                return $this->getGwBasePrice();
                break;
            case 86:
                return $this->getGwPrice();
                break;
            case 87:
                return $this->getGwBaseTaxAmount();
                break;
            case 88:
                return $this->getGwTaxAmount();
                break;
            case 89:
                return $this->getGwBasePriceInvoiced();
                break;
            case 90:
                return $this->getGwPriceInvoiced();
                break;
            case 91:
                return $this->getGwBaseTaxAmountInvoiced();
                break;
            case 92:
                return $this->getGwTaxAmountInvoiced();
                break;
            case 93:
                return $this->getGwBasePriceRefunded();
                break;
            case 94:
                return $this->getGwPriceRefunded();
                break;
            case 95:
                return $this->getGwBaseTaxAmountRefunded();
                break;
            case 96:
                return $this->getGwTaxAmountRefunded();
                break;
            case 97:
                return $this->getQtyReturned();
                break;
            case 98:
                return $this->getQtyRedeemed();
                break;
            case 99:
                return $this->getConsultant();
                break;
            case 100:
                return $this->getParentProductId();
                break;
            case 101:
                return $this->getQtyToRedeem();
                break;
            case 102:
                return $this->getRewardsUsedDetail();
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
        if (isset($alreadyDumpedObjects['SalesFlatOrderItem'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SalesFlatOrderItem'][$this->getPrimaryKey()] = true;
        $keys = SalesFlatOrderItemPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getItemId(),
            $keys[1] => $this->getOrderId(),
            $keys[2] => $this->getParentItemId(),
            $keys[3] => $this->getQuoteItemId(),
            $keys[4] => $this->getStoreId(),
            $keys[5] => $this->getCreatedAt(),
            $keys[6] => $this->getUpdatedAt(),
            $keys[7] => $this->getProductId(),
            $keys[8] => $this->getProductType(),
            $keys[9] => $this->getProductOptions(),
            $keys[10] => $this->getWeight(),
            $keys[11] => $this->getIsVirtual(),
            $keys[12] => $this->getSku(),
            $keys[13] => $this->getName(),
            $keys[14] => $this->getDescription(),
            $keys[15] => $this->getAppliedRuleIds(),
            $keys[16] => $this->getAdditionalData(),
            $keys[17] => $this->getFreeShipping(),
            $keys[18] => $this->getIsQtyDecimal(),
            $keys[19] => $this->getNoDiscount(),
            $keys[20] => $this->getQtyBackordered(),
            $keys[21] => $this->getQtyCanceled(),
            $keys[22] => $this->getQtyInvoiced(),
            $keys[23] => $this->getQtyOrdered(),
            $keys[24] => $this->getQtyRefunded(),
            $keys[25] => $this->getQtyShipped(),
            $keys[26] => $this->getBaseCost(),
            $keys[27] => $this->getPrice(),
            $keys[28] => $this->getBasePrice(),
            $keys[29] => $this->getOriginalPrice(),
            $keys[30] => $this->getBaseOriginalPrice(),
            $keys[31] => $this->getTaxPercent(),
            $keys[32] => $this->getTaxAmount(),
            $keys[33] => $this->getBaseTaxAmount(),
            $keys[34] => $this->getTaxInvoiced(),
            $keys[35] => $this->getBaseTaxInvoiced(),
            $keys[36] => $this->getDiscountPercent(),
            $keys[37] => $this->getDiscountAmount(),
            $keys[38] => $this->getBaseDiscountAmount(),
            $keys[39] => $this->getDiscountInvoiced(),
            $keys[40] => $this->getBaseDiscountInvoiced(),
            $keys[41] => $this->getAmountRefunded(),
            $keys[42] => $this->getBaseAmountRefunded(),
            $keys[43] => $this->getRowTotal(),
            $keys[44] => $this->getBaseRowTotal(),
            $keys[45] => $this->getRowInvoiced(),
            $keys[46] => $this->getBaseRowInvoiced(),
            $keys[47] => $this->getRowWeight(),
            $keys[48] => $this->getBaseTaxBeforeDiscount(),
            $keys[49] => $this->getTaxBeforeDiscount(),
            $keys[50] => $this->getExtOrderItemId(),
            $keys[51] => $this->getLockedDoInvoice(),
            $keys[52] => $this->getLockedDoShip(),
            $keys[53] => $this->getPriceInclTax(),
            $keys[54] => $this->getBasePriceInclTax(),
            $keys[55] => $this->getRowTotalInclTax(),
            $keys[56] => $this->getBaseRowTotalInclTax(),
            $keys[57] => $this->getHiddenTaxAmount(),
            $keys[58] => $this->getBaseHiddenTaxAmount(),
            $keys[59] => $this->getHiddenTaxInvoiced(),
            $keys[60] => $this->getBaseHiddenTaxInvoiced(),
            $keys[61] => $this->getHiddenTaxRefunded(),
            $keys[62] => $this->getBaseHiddenTaxRefunded(),
            $keys[63] => $this->getIsNominal(),
            $keys[64] => $this->getTaxCanceled(),
            $keys[65] => $this->getHiddenTaxCanceled(),
            $keys[66] => $this->getTaxRefunded(),
            $keys[67] => $this->getBaseTaxRefunded(),
            $keys[68] => $this->getDiscountRefunded(),
            $keys[69] => $this->getBaseDiscountRefunded(),
            $keys[70] => $this->getGiftMessageId(),
            $keys[71] => $this->getGiftMessageAvailable(),
            $keys[72] => $this->getBaseWeeeTaxAppliedAmount(),
            $keys[73] => $this->getBaseWeeeTaxAppliedRowAmnt(),
            $keys[74] => $this->getWeeeTaxAppliedAmount(),
            $keys[75] => $this->getWeeeTaxAppliedRowAmount(),
            $keys[76] => $this->getWeeeTaxApplied(),
            $keys[77] => $this->getWeeeTaxDisposition(),
            $keys[78] => $this->getWeeeTaxRowDisposition(),
            $keys[79] => $this->getBaseWeeeTaxDisposition(),
            $keys[80] => $this->getBaseWeeeTaxRowDisposition(),
            $keys[81] => $this->getCrcId(),
            $keys[82] => $this->getEventId(),
            $keys[83] => $this->getGiftregistryItemId(),
            $keys[84] => $this->getGwId(),
            $keys[85] => $this->getGwBasePrice(),
            $keys[86] => $this->getGwPrice(),
            $keys[87] => $this->getGwBaseTaxAmount(),
            $keys[88] => $this->getGwTaxAmount(),
            $keys[89] => $this->getGwBasePriceInvoiced(),
            $keys[90] => $this->getGwPriceInvoiced(),
            $keys[91] => $this->getGwBaseTaxAmountInvoiced(),
            $keys[92] => $this->getGwTaxAmountInvoiced(),
            $keys[93] => $this->getGwBasePriceRefunded(),
            $keys[94] => $this->getGwPriceRefunded(),
            $keys[95] => $this->getGwBaseTaxAmountRefunded(),
            $keys[96] => $this->getGwTaxAmountRefunded(),
            $keys[97] => $this->getQtyReturned(),
            $keys[98] => $this->getQtyRedeemed(),
            $keys[99] => $this->getConsultant(),
            $keys[100] => $this->getParentProductId(),
            $keys[101] => $this->getQtyToRedeem(),
            $keys[102] => $this->getRewardsUsedDetail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSalesFlatOrder) {
                $result['SalesFlatOrder'] = $this->aSalesFlatOrder->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCoreStore) {
                $result['CoreStore'] = $this->aCoreStore->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = SalesFlatOrderItemPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setItemId($value);
                break;
            case 1:
                $this->setOrderId($value);
                break;
            case 2:
                $this->setParentItemId($value);
                break;
            case 3:
                $this->setQuoteItemId($value);
                break;
            case 4:
                $this->setStoreId($value);
                break;
            case 5:
                $this->setCreatedAt($value);
                break;
            case 6:
                $this->setUpdatedAt($value);
                break;
            case 7:
                $this->setProductId($value);
                break;
            case 8:
                $this->setProductType($value);
                break;
            case 9:
                $this->setProductOptions($value);
                break;
            case 10:
                $this->setWeight($value);
                break;
            case 11:
                $this->setIsVirtual($value);
                break;
            case 12:
                $this->setSku($value);
                break;
            case 13:
                $this->setName($value);
                break;
            case 14:
                $this->setDescription($value);
                break;
            case 15:
                $this->setAppliedRuleIds($value);
                break;
            case 16:
                $this->setAdditionalData($value);
                break;
            case 17:
                $this->setFreeShipping($value);
                break;
            case 18:
                $this->setIsQtyDecimal($value);
                break;
            case 19:
                $this->setNoDiscount($value);
                break;
            case 20:
                $this->setQtyBackordered($value);
                break;
            case 21:
                $this->setQtyCanceled($value);
                break;
            case 22:
                $this->setQtyInvoiced($value);
                break;
            case 23:
                $this->setQtyOrdered($value);
                break;
            case 24:
                $this->setQtyRefunded($value);
                break;
            case 25:
                $this->setQtyShipped($value);
                break;
            case 26:
                $this->setBaseCost($value);
                break;
            case 27:
                $this->setPrice($value);
                break;
            case 28:
                $this->setBasePrice($value);
                break;
            case 29:
                $this->setOriginalPrice($value);
                break;
            case 30:
                $this->setBaseOriginalPrice($value);
                break;
            case 31:
                $this->setTaxPercent($value);
                break;
            case 32:
                $this->setTaxAmount($value);
                break;
            case 33:
                $this->setBaseTaxAmount($value);
                break;
            case 34:
                $this->setTaxInvoiced($value);
                break;
            case 35:
                $this->setBaseTaxInvoiced($value);
                break;
            case 36:
                $this->setDiscountPercent($value);
                break;
            case 37:
                $this->setDiscountAmount($value);
                break;
            case 38:
                $this->setBaseDiscountAmount($value);
                break;
            case 39:
                $this->setDiscountInvoiced($value);
                break;
            case 40:
                $this->setBaseDiscountInvoiced($value);
                break;
            case 41:
                $this->setAmountRefunded($value);
                break;
            case 42:
                $this->setBaseAmountRefunded($value);
                break;
            case 43:
                $this->setRowTotal($value);
                break;
            case 44:
                $this->setBaseRowTotal($value);
                break;
            case 45:
                $this->setRowInvoiced($value);
                break;
            case 46:
                $this->setBaseRowInvoiced($value);
                break;
            case 47:
                $this->setRowWeight($value);
                break;
            case 48:
                $this->setBaseTaxBeforeDiscount($value);
                break;
            case 49:
                $this->setTaxBeforeDiscount($value);
                break;
            case 50:
                $this->setExtOrderItemId($value);
                break;
            case 51:
                $this->setLockedDoInvoice($value);
                break;
            case 52:
                $this->setLockedDoShip($value);
                break;
            case 53:
                $this->setPriceInclTax($value);
                break;
            case 54:
                $this->setBasePriceInclTax($value);
                break;
            case 55:
                $this->setRowTotalInclTax($value);
                break;
            case 56:
                $this->setBaseRowTotalInclTax($value);
                break;
            case 57:
                $this->setHiddenTaxAmount($value);
                break;
            case 58:
                $this->setBaseHiddenTaxAmount($value);
                break;
            case 59:
                $this->setHiddenTaxInvoiced($value);
                break;
            case 60:
                $this->setBaseHiddenTaxInvoiced($value);
                break;
            case 61:
                $this->setHiddenTaxRefunded($value);
                break;
            case 62:
                $this->setBaseHiddenTaxRefunded($value);
                break;
            case 63:
                $this->setIsNominal($value);
                break;
            case 64:
                $this->setTaxCanceled($value);
                break;
            case 65:
                $this->setHiddenTaxCanceled($value);
                break;
            case 66:
                $this->setTaxRefunded($value);
                break;
            case 67:
                $this->setBaseTaxRefunded($value);
                break;
            case 68:
                $this->setDiscountRefunded($value);
                break;
            case 69:
                $this->setBaseDiscountRefunded($value);
                break;
            case 70:
                $this->setGiftMessageId($value);
                break;
            case 71:
                $this->setGiftMessageAvailable($value);
                break;
            case 72:
                $this->setBaseWeeeTaxAppliedAmount($value);
                break;
            case 73:
                $this->setBaseWeeeTaxAppliedRowAmnt($value);
                break;
            case 74:
                $this->setWeeeTaxAppliedAmount($value);
                break;
            case 75:
                $this->setWeeeTaxAppliedRowAmount($value);
                break;
            case 76:
                $this->setWeeeTaxApplied($value);
                break;
            case 77:
                $this->setWeeeTaxDisposition($value);
                break;
            case 78:
                $this->setWeeeTaxRowDisposition($value);
                break;
            case 79:
                $this->setBaseWeeeTaxDisposition($value);
                break;
            case 80:
                $this->setBaseWeeeTaxRowDisposition($value);
                break;
            case 81:
                $this->setCrcId($value);
                break;
            case 82:
                $this->setEventId($value);
                break;
            case 83:
                $this->setGiftregistryItemId($value);
                break;
            case 84:
                $this->setGwId($value);
                break;
            case 85:
                $this->setGwBasePrice($value);
                break;
            case 86:
                $this->setGwPrice($value);
                break;
            case 87:
                $this->setGwBaseTaxAmount($value);
                break;
            case 88:
                $this->setGwTaxAmount($value);
                break;
            case 89:
                $this->setGwBasePriceInvoiced($value);
                break;
            case 90:
                $this->setGwPriceInvoiced($value);
                break;
            case 91:
                $this->setGwBaseTaxAmountInvoiced($value);
                break;
            case 92:
                $this->setGwTaxAmountInvoiced($value);
                break;
            case 93:
                $this->setGwBasePriceRefunded($value);
                break;
            case 94:
                $this->setGwPriceRefunded($value);
                break;
            case 95:
                $this->setGwBaseTaxAmountRefunded($value);
                break;
            case 96:
                $this->setGwTaxAmountRefunded($value);
                break;
            case 97:
                $this->setQtyReturned($value);
                break;
            case 98:
                $this->setQtyRedeemed($value);
                break;
            case 99:
                $this->setConsultant($value);
                break;
            case 100:
                $this->setParentProductId($value);
                break;
            case 101:
                $this->setQtyToRedeem($value);
                break;
            case 102:
                $this->setRewardsUsedDetail($value);
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
        $keys = SalesFlatOrderItemPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setItemId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrderId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setParentItemId($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setQuoteItemId($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStoreId($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProductId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProductType($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProductOptions($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setWeight($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIsVirtual($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSku($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setName($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDescription($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAppliedRuleIds($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAdditionalData($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setFreeShipping($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIsQtyDecimal($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setNoDiscount($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setQtyBackordered($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setQtyCanceled($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setQtyInvoiced($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setQtyOrdered($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setQtyRefunded($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setQtyShipped($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setBaseCost($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setPrice($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setBasePrice($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setOriginalPrice($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setBaseOriginalPrice($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setTaxPercent($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTaxAmount($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setBaseTaxAmount($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setTaxInvoiced($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setBaseTaxInvoiced($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setDiscountPercent($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDiscountAmount($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setBaseDiscountAmount($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDiscountInvoiced($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setBaseDiscountInvoiced($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setAmountRefunded($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setBaseAmountRefunded($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setRowTotal($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setBaseRowTotal($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setRowInvoiced($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setBaseRowInvoiced($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setRowWeight($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setBaseTaxBeforeDiscount($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setTaxBeforeDiscount($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setExtOrderItemId($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setLockedDoInvoice($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setLockedDoShip($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setPriceInclTax($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setBasePriceInclTax($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setRowTotalInclTax($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setBaseRowTotalInclTax($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setHiddenTaxAmount($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setBaseHiddenTaxAmount($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setHiddenTaxInvoiced($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setBaseHiddenTaxInvoiced($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setHiddenTaxRefunded($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setBaseHiddenTaxRefunded($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setIsNominal($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setTaxCanceled($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setHiddenTaxCanceled($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setTaxRefunded($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setBaseTaxRefunded($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setDiscountRefunded($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setBaseDiscountRefunded($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setGiftMessageId($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setGiftMessageAvailable($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setBaseWeeeTaxAppliedAmount($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setBaseWeeeTaxAppliedRowAmnt($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setWeeeTaxAppliedAmount($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setWeeeTaxAppliedRowAmount($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setWeeeTaxApplied($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setWeeeTaxDisposition($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setWeeeTaxRowDisposition($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setBaseWeeeTaxDisposition($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setBaseWeeeTaxRowDisposition($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setCrcId($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setEventId($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setGiftregistryItemId($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setGwId($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setGwBasePrice($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setGwPrice($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setGwBaseTaxAmount($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setGwTaxAmount($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setGwBasePriceInvoiced($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setGwPriceInvoiced($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setGwBaseTaxAmountInvoiced($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setGwTaxAmountInvoiced($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setGwBasePriceRefunded($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setGwPriceRefunded($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setGwBaseTaxAmountRefunded($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setGwTaxAmountRefunded($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setQtyReturned($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setQtyRedeemed($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setConsultant($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setParentProductId($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setQtyToRedeem($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setRewardsUsedDetail($arr[$keys[102]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SalesFlatOrderItemPeer::DATABASE_NAME);

        if ($this->isColumnModified(SalesFlatOrderItemPeer::ITEM_ID)) $criteria->add(SalesFlatOrderItemPeer::ITEM_ID, $this->item_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ORDER_ID)) $criteria->add(SalesFlatOrderItemPeer::ORDER_ID, $this->order_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PARENT_ITEM_ID)) $criteria->add(SalesFlatOrderItemPeer::PARENT_ITEM_ID, $this->parent_item_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QUOTE_ITEM_ID)) $criteria->add(SalesFlatOrderItemPeer::QUOTE_ITEM_ID, $this->quote_item_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::STORE_ID)) $criteria->add(SalesFlatOrderItemPeer::STORE_ID, $this->store_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::CREATED_AT)) $criteria->add(SalesFlatOrderItemPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::UPDATED_AT)) $criteria->add(SalesFlatOrderItemPeer::UPDATED_AT, $this->updated_at);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PRODUCT_ID)) $criteria->add(SalesFlatOrderItemPeer::PRODUCT_ID, $this->product_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PRODUCT_TYPE)) $criteria->add(SalesFlatOrderItemPeer::PRODUCT_TYPE, $this->product_type);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PRODUCT_OPTIONS)) $criteria->add(SalesFlatOrderItemPeer::PRODUCT_OPTIONS, $this->product_options);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEIGHT)) $criteria->add(SalesFlatOrderItemPeer::WEIGHT, $this->weight);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::IS_VIRTUAL)) $criteria->add(SalesFlatOrderItemPeer::IS_VIRTUAL, $this->is_virtual);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::SKU)) $criteria->add(SalesFlatOrderItemPeer::SKU, $this->sku);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::NAME)) $criteria->add(SalesFlatOrderItemPeer::NAME, $this->name);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::DESCRIPTION)) $criteria->add(SalesFlatOrderItemPeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::APPLIED_RULE_IDS)) $criteria->add(SalesFlatOrderItemPeer::APPLIED_RULE_IDS, $this->applied_rule_ids);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ADDITIONAL_DATA)) $criteria->add(SalesFlatOrderItemPeer::ADDITIONAL_DATA, $this->additional_data);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::FREE_SHIPPING)) $criteria->add(SalesFlatOrderItemPeer::FREE_SHIPPING, $this->free_shipping);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::IS_QTY_DECIMAL)) $criteria->add(SalesFlatOrderItemPeer::IS_QTY_DECIMAL, $this->is_qty_decimal);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::NO_DISCOUNT)) $criteria->add(SalesFlatOrderItemPeer::NO_DISCOUNT, $this->no_discount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_BACKORDERED)) $criteria->add(SalesFlatOrderItemPeer::QTY_BACKORDERED, $this->qty_backordered);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_CANCELED)) $criteria->add(SalesFlatOrderItemPeer::QTY_CANCELED, $this->qty_canceled);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::QTY_INVOICED, $this->qty_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_ORDERED)) $criteria->add(SalesFlatOrderItemPeer::QTY_ORDERED, $this->qty_ordered);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::QTY_REFUNDED, $this->qty_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_SHIPPED)) $criteria->add(SalesFlatOrderItemPeer::QTY_SHIPPED, $this->qty_shipped);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_COST)) $criteria->add(SalesFlatOrderItemPeer::BASE_COST, $this->base_cost);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PRICE)) $criteria->add(SalesFlatOrderItemPeer::PRICE, $this->price);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_PRICE)) $criteria->add(SalesFlatOrderItemPeer::BASE_PRICE, $this->base_price);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ORIGINAL_PRICE)) $criteria->add(SalesFlatOrderItemPeer::ORIGINAL_PRICE, $this->original_price);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_ORIGINAL_PRICE)) $criteria->add(SalesFlatOrderItemPeer::BASE_ORIGINAL_PRICE, $this->base_original_price);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_PERCENT)) $criteria->add(SalesFlatOrderItemPeer::TAX_PERCENT, $this->tax_percent);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::TAX_AMOUNT, $this->tax_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_TAX_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::BASE_TAX_AMOUNT, $this->base_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::TAX_INVOICED, $this->tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_TAX_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::BASE_TAX_INVOICED, $this->base_tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::DISCOUNT_PERCENT)) $criteria->add(SalesFlatOrderItemPeer::DISCOUNT_PERCENT, $this->discount_percent);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::DISCOUNT_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::DISCOUNT_AMOUNT, $this->discount_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_DISCOUNT_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::BASE_DISCOUNT_AMOUNT, $this->base_discount_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::DISCOUNT_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::DISCOUNT_INVOICED, $this->discount_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_DISCOUNT_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::BASE_DISCOUNT_INVOICED, $this->base_discount_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::AMOUNT_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::AMOUNT_REFUNDED, $this->amount_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_AMOUNT_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::BASE_AMOUNT_REFUNDED, $this->base_amount_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ROW_TOTAL)) $criteria->add(SalesFlatOrderItemPeer::ROW_TOTAL, $this->row_total);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_ROW_TOTAL)) $criteria->add(SalesFlatOrderItemPeer::BASE_ROW_TOTAL, $this->base_row_total);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ROW_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::ROW_INVOICED, $this->row_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_ROW_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::BASE_ROW_INVOICED, $this->base_row_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ROW_WEIGHT)) $criteria->add(SalesFlatOrderItemPeer::ROW_WEIGHT, $this->row_weight);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_TAX_BEFORE_DISCOUNT)) $criteria->add(SalesFlatOrderItemPeer::BASE_TAX_BEFORE_DISCOUNT, $this->base_tax_before_discount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_BEFORE_DISCOUNT)) $criteria->add(SalesFlatOrderItemPeer::TAX_BEFORE_DISCOUNT, $this->tax_before_discount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::EXT_ORDER_ITEM_ID)) $criteria->add(SalesFlatOrderItemPeer::EXT_ORDER_ITEM_ID, $this->ext_order_item_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::LOCKED_DO_INVOICE)) $criteria->add(SalesFlatOrderItemPeer::LOCKED_DO_INVOICE, $this->locked_do_invoice);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::LOCKED_DO_SHIP)) $criteria->add(SalesFlatOrderItemPeer::LOCKED_DO_SHIP, $this->locked_do_ship);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PRICE_INCL_TAX)) $criteria->add(SalesFlatOrderItemPeer::PRICE_INCL_TAX, $this->price_incl_tax);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_PRICE_INCL_TAX)) $criteria->add(SalesFlatOrderItemPeer::BASE_PRICE_INCL_TAX, $this->base_price_incl_tax);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::ROW_TOTAL_INCL_TAX)) $criteria->add(SalesFlatOrderItemPeer::ROW_TOTAL_INCL_TAX, $this->row_total_incl_tax);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_ROW_TOTAL_INCL_TAX)) $criteria->add(SalesFlatOrderItemPeer::BASE_ROW_TOTAL_INCL_TAX, $this->base_row_total_incl_tax);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::HIDDEN_TAX_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::HIDDEN_TAX_AMOUNT, $this->hidden_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_AMOUNT, $this->base_hidden_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::HIDDEN_TAX_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::HIDDEN_TAX_INVOICED, $this->hidden_tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_INVOICED, $this->base_hidden_tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::HIDDEN_TAX_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::HIDDEN_TAX_REFUNDED, $this->hidden_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_REFUNDED, $this->base_hidden_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::IS_NOMINAL)) $criteria->add(SalesFlatOrderItemPeer::IS_NOMINAL, $this->is_nominal);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_CANCELED)) $criteria->add(SalesFlatOrderItemPeer::TAX_CANCELED, $this->tax_canceled);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::HIDDEN_TAX_CANCELED)) $criteria->add(SalesFlatOrderItemPeer::HIDDEN_TAX_CANCELED, $this->hidden_tax_canceled);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::TAX_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::TAX_REFUNDED, $this->tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_TAX_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::BASE_TAX_REFUNDED, $this->base_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::DISCOUNT_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::DISCOUNT_REFUNDED, $this->discount_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_DISCOUNT_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::BASE_DISCOUNT_REFUNDED, $this->base_discount_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GIFT_MESSAGE_ID)) $criteria->add(SalesFlatOrderItemPeer::GIFT_MESSAGE_ID, $this->gift_message_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GIFT_MESSAGE_AVAILABLE)) $criteria->add(SalesFlatOrderItemPeer::GIFT_MESSAGE_AVAILABLE, $this->gift_message_available);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_AMOUNT, $this->base_weee_tax_applied_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_ROW_AMNT)) $criteria->add(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_ROW_AMNT, $this->base_weee_tax_applied_row_amnt);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_AMOUNT, $this->weee_tax_applied_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_ROW_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_ROW_AMOUNT, $this->weee_tax_applied_row_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED)) $criteria->add(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED, $this->weee_tax_applied);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEEE_TAX_DISPOSITION)) $criteria->add(SalesFlatOrderItemPeer::WEEE_TAX_DISPOSITION, $this->weee_tax_disposition);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::WEEE_TAX_ROW_DISPOSITION)) $criteria->add(SalesFlatOrderItemPeer::WEEE_TAX_ROW_DISPOSITION, $this->weee_tax_row_disposition);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_WEEE_TAX_DISPOSITION)) $criteria->add(SalesFlatOrderItemPeer::BASE_WEEE_TAX_DISPOSITION, $this->base_weee_tax_disposition);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::BASE_WEEE_TAX_ROW_DISPOSITION)) $criteria->add(SalesFlatOrderItemPeer::BASE_WEEE_TAX_ROW_DISPOSITION, $this->base_weee_tax_row_disposition);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::CRC_ID)) $criteria->add(SalesFlatOrderItemPeer::CRC_ID, $this->crc_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::EVENT_ID)) $criteria->add(SalesFlatOrderItemPeer::EVENT_ID, $this->event_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GIFTREGISTRY_ITEM_ID)) $criteria->add(SalesFlatOrderItemPeer::GIFTREGISTRY_ITEM_ID, $this->giftregistry_item_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_ID)) $criteria->add(SalesFlatOrderItemPeer::GW_ID, $this->gw_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_PRICE)) $criteria->add(SalesFlatOrderItemPeer::GW_BASE_PRICE, $this->gw_base_price);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_PRICE)) $criteria->add(SalesFlatOrderItemPeer::GW_PRICE, $this->gw_price);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT, $this->gw_base_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_TAX_AMOUNT)) $criteria->add(SalesFlatOrderItemPeer::GW_TAX_AMOUNT, $this->gw_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_PRICE_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::GW_BASE_PRICE_INVOICED, $this->gw_base_price_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_PRICE_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::GW_PRICE_INVOICED, $this->gw_price_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_INVOICED, $this->gw_base_tax_amount_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_INVOICED)) $criteria->add(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_INVOICED, $this->gw_tax_amount_invoiced);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_PRICE_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::GW_BASE_PRICE_REFUNDED, $this->gw_base_price_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_PRICE_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::GW_PRICE_REFUNDED, $this->gw_price_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_REFUNDED, $this->gw_base_tax_amount_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_REFUNDED)) $criteria->add(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_REFUNDED, $this->gw_tax_amount_refunded);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_RETURNED)) $criteria->add(SalesFlatOrderItemPeer::QTY_RETURNED, $this->qty_returned);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_REDEEMED)) $criteria->add(SalesFlatOrderItemPeer::QTY_REDEEMED, $this->qty_redeemed);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::CONSULTANT)) $criteria->add(SalesFlatOrderItemPeer::CONSULTANT, $this->consultant);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::PARENT_PRODUCT_ID)) $criteria->add(SalesFlatOrderItemPeer::PARENT_PRODUCT_ID, $this->parent_product_id);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::QTY_TO_REDEEM)) $criteria->add(SalesFlatOrderItemPeer::QTY_TO_REDEEM, $this->qty_to_redeem);
        if ($this->isColumnModified(SalesFlatOrderItemPeer::REWARDS_USED_DETAIL)) $criteria->add(SalesFlatOrderItemPeer::REWARDS_USED_DETAIL, $this->rewards_used_detail);

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
        $criteria = new Criteria(SalesFlatOrderItemPeer::DATABASE_NAME);
        $criteria->add(SalesFlatOrderItemPeer::ITEM_ID, $this->item_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getItemId();
    }

    /**
     * Generic method to set the primary key (item_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setItemId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getItemId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SalesFlatOrderItem (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrderId($this->getOrderId());
        $copyObj->setParentItemId($this->getParentItemId());
        $copyObj->setQuoteItemId($this->getQuoteItemId());
        $copyObj->setStoreId($this->getStoreId());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());
        $copyObj->setProductId($this->getProductId());
        $copyObj->setProductType($this->getProductType());
        $copyObj->setProductOptions($this->getProductOptions());
        $copyObj->setWeight($this->getWeight());
        $copyObj->setIsVirtual($this->getIsVirtual());
        $copyObj->setSku($this->getSku());
        $copyObj->setName($this->getName());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setAppliedRuleIds($this->getAppliedRuleIds());
        $copyObj->setAdditionalData($this->getAdditionalData());
        $copyObj->setFreeShipping($this->getFreeShipping());
        $copyObj->setIsQtyDecimal($this->getIsQtyDecimal());
        $copyObj->setNoDiscount($this->getNoDiscount());
        $copyObj->setQtyBackordered($this->getQtyBackordered());
        $copyObj->setQtyCanceled($this->getQtyCanceled());
        $copyObj->setQtyInvoiced($this->getQtyInvoiced());
        $copyObj->setQtyOrdered($this->getQtyOrdered());
        $copyObj->setQtyRefunded($this->getQtyRefunded());
        $copyObj->setQtyShipped($this->getQtyShipped());
        $copyObj->setBaseCost($this->getBaseCost());
        $copyObj->setPrice($this->getPrice());
        $copyObj->setBasePrice($this->getBasePrice());
        $copyObj->setOriginalPrice($this->getOriginalPrice());
        $copyObj->setBaseOriginalPrice($this->getBaseOriginalPrice());
        $copyObj->setTaxPercent($this->getTaxPercent());
        $copyObj->setTaxAmount($this->getTaxAmount());
        $copyObj->setBaseTaxAmount($this->getBaseTaxAmount());
        $copyObj->setTaxInvoiced($this->getTaxInvoiced());
        $copyObj->setBaseTaxInvoiced($this->getBaseTaxInvoiced());
        $copyObj->setDiscountPercent($this->getDiscountPercent());
        $copyObj->setDiscountAmount($this->getDiscountAmount());
        $copyObj->setBaseDiscountAmount($this->getBaseDiscountAmount());
        $copyObj->setDiscountInvoiced($this->getDiscountInvoiced());
        $copyObj->setBaseDiscountInvoiced($this->getBaseDiscountInvoiced());
        $copyObj->setAmountRefunded($this->getAmountRefunded());
        $copyObj->setBaseAmountRefunded($this->getBaseAmountRefunded());
        $copyObj->setRowTotal($this->getRowTotal());
        $copyObj->setBaseRowTotal($this->getBaseRowTotal());
        $copyObj->setRowInvoiced($this->getRowInvoiced());
        $copyObj->setBaseRowInvoiced($this->getBaseRowInvoiced());
        $copyObj->setRowWeight($this->getRowWeight());
        $copyObj->setBaseTaxBeforeDiscount($this->getBaseTaxBeforeDiscount());
        $copyObj->setTaxBeforeDiscount($this->getTaxBeforeDiscount());
        $copyObj->setExtOrderItemId($this->getExtOrderItemId());
        $copyObj->setLockedDoInvoice($this->getLockedDoInvoice());
        $copyObj->setLockedDoShip($this->getLockedDoShip());
        $copyObj->setPriceInclTax($this->getPriceInclTax());
        $copyObj->setBasePriceInclTax($this->getBasePriceInclTax());
        $copyObj->setRowTotalInclTax($this->getRowTotalInclTax());
        $copyObj->setBaseRowTotalInclTax($this->getBaseRowTotalInclTax());
        $copyObj->setHiddenTaxAmount($this->getHiddenTaxAmount());
        $copyObj->setBaseHiddenTaxAmount($this->getBaseHiddenTaxAmount());
        $copyObj->setHiddenTaxInvoiced($this->getHiddenTaxInvoiced());
        $copyObj->setBaseHiddenTaxInvoiced($this->getBaseHiddenTaxInvoiced());
        $copyObj->setHiddenTaxRefunded($this->getHiddenTaxRefunded());
        $copyObj->setBaseHiddenTaxRefunded($this->getBaseHiddenTaxRefunded());
        $copyObj->setIsNominal($this->getIsNominal());
        $copyObj->setTaxCanceled($this->getTaxCanceled());
        $copyObj->setHiddenTaxCanceled($this->getHiddenTaxCanceled());
        $copyObj->setTaxRefunded($this->getTaxRefunded());
        $copyObj->setBaseTaxRefunded($this->getBaseTaxRefunded());
        $copyObj->setDiscountRefunded($this->getDiscountRefunded());
        $copyObj->setBaseDiscountRefunded($this->getBaseDiscountRefunded());
        $copyObj->setGiftMessageId($this->getGiftMessageId());
        $copyObj->setGiftMessageAvailable($this->getGiftMessageAvailable());
        $copyObj->setBaseWeeeTaxAppliedAmount($this->getBaseWeeeTaxAppliedAmount());
        $copyObj->setBaseWeeeTaxAppliedRowAmnt($this->getBaseWeeeTaxAppliedRowAmnt());
        $copyObj->setWeeeTaxAppliedAmount($this->getWeeeTaxAppliedAmount());
        $copyObj->setWeeeTaxAppliedRowAmount($this->getWeeeTaxAppliedRowAmount());
        $copyObj->setWeeeTaxApplied($this->getWeeeTaxApplied());
        $copyObj->setWeeeTaxDisposition($this->getWeeeTaxDisposition());
        $copyObj->setWeeeTaxRowDisposition($this->getWeeeTaxRowDisposition());
        $copyObj->setBaseWeeeTaxDisposition($this->getBaseWeeeTaxDisposition());
        $copyObj->setBaseWeeeTaxRowDisposition($this->getBaseWeeeTaxRowDisposition());
        $copyObj->setCrcId($this->getCrcId());
        $copyObj->setEventId($this->getEventId());
        $copyObj->setGiftregistryItemId($this->getGiftregistryItemId());
        $copyObj->setGwId($this->getGwId());
        $copyObj->setGwBasePrice($this->getGwBasePrice());
        $copyObj->setGwPrice($this->getGwPrice());
        $copyObj->setGwBaseTaxAmount($this->getGwBaseTaxAmount());
        $copyObj->setGwTaxAmount($this->getGwTaxAmount());
        $copyObj->setGwBasePriceInvoiced($this->getGwBasePriceInvoiced());
        $copyObj->setGwPriceInvoiced($this->getGwPriceInvoiced());
        $copyObj->setGwBaseTaxAmountInvoiced($this->getGwBaseTaxAmountInvoiced());
        $copyObj->setGwTaxAmountInvoiced($this->getGwTaxAmountInvoiced());
        $copyObj->setGwBasePriceRefunded($this->getGwBasePriceRefunded());
        $copyObj->setGwPriceRefunded($this->getGwPriceRefunded());
        $copyObj->setGwBaseTaxAmountRefunded($this->getGwBaseTaxAmountRefunded());
        $copyObj->setGwTaxAmountRefunded($this->getGwTaxAmountRefunded());
        $copyObj->setQtyReturned($this->getQtyReturned());
        $copyObj->setQtyRedeemed($this->getQtyRedeemed());
        $copyObj->setConsultant($this->getConsultant());
        $copyObj->setParentProductId($this->getParentProductId());
        $copyObj->setQtyToRedeem($this->getQtyToRedeem());
        $copyObj->setRewardsUsedDetail($this->getRewardsUsedDetail());

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
            $copyObj->setItemId(NULL); // this is a auto-increment column, so set to default value
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
     * @return SalesFlatOrderItem Clone of current object.
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
     * @return SalesFlatOrderItemPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SalesFlatOrderItemPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a SalesFlatOrder object.
     *
     * @param                  SalesFlatOrder $v
     * @return SalesFlatOrderItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSalesFlatOrder(SalesFlatOrder $v = null)
    {
        if ($v === null) {
            $this->setOrderId(0);
        } else {
            $this->setOrderId($v->getEntityId());
        }

        $this->aSalesFlatOrder = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SalesFlatOrder object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesFlatOrderItem($this);
        }


        return $this;
    }


    /**
     * Get the associated SalesFlatOrder object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return SalesFlatOrder The associated SalesFlatOrder object.
     * @throws PropelException
     */
    public function getSalesFlatOrder(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSalesFlatOrder === null && ($this->order_id !== null) && $doQuery) {
            $this->aSalesFlatOrder = SalesFlatOrderQuery::create()->findPk($this->order_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSalesFlatOrder->addSalesFlatOrderItems($this);
             */
        }

        return $this->aSalesFlatOrder;
    }

    /**
     * Declares an association between this object and a CoreStore object.
     *
     * @param                  CoreStore $v
     * @return SalesFlatOrderItem The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCoreStore(CoreStore $v = null)
    {
        if ($v === null) {
            $this->setStoreId(NULL);
        } else {
            $this->setStoreId($v->getStoreId());
        }

        $this->aCoreStore = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CoreStore object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesFlatOrderItem($this);
        }


        return $this;
    }


    /**
     * Get the associated CoreStore object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CoreStore The associated CoreStore object.
     * @throws PropelException
     */
    public function getCoreStore(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCoreStore === null && ($this->store_id !== null) && $doQuery) {
            $this->aCoreStore = CoreStoreQuery::create()->findPk($this->store_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCoreStore->addSalesFlatOrderItems($this);
             */
        }

        return $this->aCoreStore;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->item_id = null;
        $this->order_id = null;
        $this->parent_item_id = null;
        $this->quote_item_id = null;
        $this->store_id = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->product_id = null;
        $this->product_type = null;
        $this->product_options = null;
        $this->weight = null;
        $this->is_virtual = null;
        $this->sku = null;
        $this->name = null;
        $this->description = null;
        $this->applied_rule_ids = null;
        $this->additional_data = null;
        $this->free_shipping = null;
        $this->is_qty_decimal = null;
        $this->no_discount = null;
        $this->qty_backordered = null;
        $this->qty_canceled = null;
        $this->qty_invoiced = null;
        $this->qty_ordered = null;
        $this->qty_refunded = null;
        $this->qty_shipped = null;
        $this->base_cost = null;
        $this->price = null;
        $this->base_price = null;
        $this->original_price = null;
        $this->base_original_price = null;
        $this->tax_percent = null;
        $this->tax_amount = null;
        $this->base_tax_amount = null;
        $this->tax_invoiced = null;
        $this->base_tax_invoiced = null;
        $this->discount_percent = null;
        $this->discount_amount = null;
        $this->base_discount_amount = null;
        $this->discount_invoiced = null;
        $this->base_discount_invoiced = null;
        $this->amount_refunded = null;
        $this->base_amount_refunded = null;
        $this->row_total = null;
        $this->base_row_total = null;
        $this->row_invoiced = null;
        $this->base_row_invoiced = null;
        $this->row_weight = null;
        $this->base_tax_before_discount = null;
        $this->tax_before_discount = null;
        $this->ext_order_item_id = null;
        $this->locked_do_invoice = null;
        $this->locked_do_ship = null;
        $this->price_incl_tax = null;
        $this->base_price_incl_tax = null;
        $this->row_total_incl_tax = null;
        $this->base_row_total_incl_tax = null;
        $this->hidden_tax_amount = null;
        $this->base_hidden_tax_amount = null;
        $this->hidden_tax_invoiced = null;
        $this->base_hidden_tax_invoiced = null;
        $this->hidden_tax_refunded = null;
        $this->base_hidden_tax_refunded = null;
        $this->is_nominal = null;
        $this->tax_canceled = null;
        $this->hidden_tax_canceled = null;
        $this->tax_refunded = null;
        $this->base_tax_refunded = null;
        $this->discount_refunded = null;
        $this->base_discount_refunded = null;
        $this->gift_message_id = null;
        $this->gift_message_available = null;
        $this->base_weee_tax_applied_amount = null;
        $this->base_weee_tax_applied_row_amnt = null;
        $this->weee_tax_applied_amount = null;
        $this->weee_tax_applied_row_amount = null;
        $this->weee_tax_applied = null;
        $this->weee_tax_disposition = null;
        $this->weee_tax_row_disposition = null;
        $this->base_weee_tax_disposition = null;
        $this->base_weee_tax_row_disposition = null;
        $this->crc_id = null;
        $this->event_id = null;
        $this->giftregistry_item_id = null;
        $this->gw_id = null;
        $this->gw_base_price = null;
        $this->gw_price = null;
        $this->gw_base_tax_amount = null;
        $this->gw_tax_amount = null;
        $this->gw_base_price_invoiced = null;
        $this->gw_price_invoiced = null;
        $this->gw_base_tax_amount_invoiced = null;
        $this->gw_tax_amount_invoiced = null;
        $this->gw_base_price_refunded = null;
        $this->gw_price_refunded = null;
        $this->gw_base_tax_amount_refunded = null;
        $this->gw_tax_amount_refunded = null;
        $this->qty_returned = null;
        $this->qty_redeemed = null;
        $this->consultant = null;
        $this->parent_product_id = null;
        $this->qty_to_redeem = null;
        $this->rewards_used_detail = null;
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
            if ($this->aSalesFlatOrder instanceof Persistent) {
              $this->aSalesFlatOrder->clearAllReferences($deep);
            }
            if ($this->aCoreStore instanceof Persistent) {
              $this->aCoreStore->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aSalesFlatOrder = null;
        $this->aCoreStore = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SalesFlatOrderItemPeer::DEFAULT_STRING_FORMAT);
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
