<?php


/**
 * Base static class for performing query and update operations on the 'sales_flat_order_item' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseSalesFlatOrderItemPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'sales_flat_order_item';

    /** the related Propel class for this table */
    const OM_CLASS = 'SalesFlatOrderItem';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SalesFlatOrderItemTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 103;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 103;

    /** the column name for the item_id field */
    const ITEM_ID = 'sales_flat_order_item.item_id';

    /** the column name for the order_id field */
    const ORDER_ID = 'sales_flat_order_item.order_id';

    /** the column name for the parent_item_id field */
    const PARENT_ITEM_ID = 'sales_flat_order_item.parent_item_id';

    /** the column name for the quote_item_id field */
    const QUOTE_ITEM_ID = 'sales_flat_order_item.quote_item_id';

    /** the column name for the store_id field */
    const STORE_ID = 'sales_flat_order_item.store_id';

    /** the column name for the created_at field */
    const CREATED_AT = 'sales_flat_order_item.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'sales_flat_order_item.updated_at';

    /** the column name for the product_id field */
    const PRODUCT_ID = 'sales_flat_order_item.product_id';

    /** the column name for the product_type field */
    const PRODUCT_TYPE = 'sales_flat_order_item.product_type';

    /** the column name for the product_options field */
    const PRODUCT_OPTIONS = 'sales_flat_order_item.product_options';

    /** the column name for the weight field */
    const WEIGHT = 'sales_flat_order_item.weight';

    /** the column name for the is_virtual field */
    const IS_VIRTUAL = 'sales_flat_order_item.is_virtual';

    /** the column name for the sku field */
    const SKU = 'sales_flat_order_item.sku';

    /** the column name for the name field */
    const NAME = 'sales_flat_order_item.name';

    /** the column name for the description field */
    const DESCRIPTION = 'sales_flat_order_item.description';

    /** the column name for the applied_rule_ids field */
    const APPLIED_RULE_IDS = 'sales_flat_order_item.applied_rule_ids';

    /** the column name for the additional_data field */
    const ADDITIONAL_DATA = 'sales_flat_order_item.additional_data';

    /** the column name for the free_shipping field */
    const FREE_SHIPPING = 'sales_flat_order_item.free_shipping';

    /** the column name for the is_qty_decimal field */
    const IS_QTY_DECIMAL = 'sales_flat_order_item.is_qty_decimal';

    /** the column name for the no_discount field */
    const NO_DISCOUNT = 'sales_flat_order_item.no_discount';

    /** the column name for the qty_backordered field */
    const QTY_BACKORDERED = 'sales_flat_order_item.qty_backordered';

    /** the column name for the qty_canceled field */
    const QTY_CANCELED = 'sales_flat_order_item.qty_canceled';

    /** the column name for the qty_invoiced field */
    const QTY_INVOICED = 'sales_flat_order_item.qty_invoiced';

    /** the column name for the qty_ordered field */
    const QTY_ORDERED = 'sales_flat_order_item.qty_ordered';

    /** the column name for the qty_refunded field */
    const QTY_REFUNDED = 'sales_flat_order_item.qty_refunded';

    /** the column name for the qty_shipped field */
    const QTY_SHIPPED = 'sales_flat_order_item.qty_shipped';

    /** the column name for the base_cost field */
    const BASE_COST = 'sales_flat_order_item.base_cost';

    /** the column name for the price field */
    const PRICE = 'sales_flat_order_item.price';

    /** the column name for the base_price field */
    const BASE_PRICE = 'sales_flat_order_item.base_price';

    /** the column name for the original_price field */
    const ORIGINAL_PRICE = 'sales_flat_order_item.original_price';

    /** the column name for the base_original_price field */
    const BASE_ORIGINAL_PRICE = 'sales_flat_order_item.base_original_price';

    /** the column name for the tax_percent field */
    const TAX_PERCENT = 'sales_flat_order_item.tax_percent';

    /** the column name for the tax_amount field */
    const TAX_AMOUNT = 'sales_flat_order_item.tax_amount';

    /** the column name for the base_tax_amount field */
    const BASE_TAX_AMOUNT = 'sales_flat_order_item.base_tax_amount';

    /** the column name for the tax_invoiced field */
    const TAX_INVOICED = 'sales_flat_order_item.tax_invoiced';

    /** the column name for the base_tax_invoiced field */
    const BASE_TAX_INVOICED = 'sales_flat_order_item.base_tax_invoiced';

    /** the column name for the discount_percent field */
    const DISCOUNT_PERCENT = 'sales_flat_order_item.discount_percent';

    /** the column name for the discount_amount field */
    const DISCOUNT_AMOUNT = 'sales_flat_order_item.discount_amount';

    /** the column name for the base_discount_amount field */
    const BASE_DISCOUNT_AMOUNT = 'sales_flat_order_item.base_discount_amount';

    /** the column name for the discount_invoiced field */
    const DISCOUNT_INVOICED = 'sales_flat_order_item.discount_invoiced';

    /** the column name for the base_discount_invoiced field */
    const BASE_DISCOUNT_INVOICED = 'sales_flat_order_item.base_discount_invoiced';

    /** the column name for the amount_refunded field */
    const AMOUNT_REFUNDED = 'sales_flat_order_item.amount_refunded';

    /** the column name for the base_amount_refunded field */
    const BASE_AMOUNT_REFUNDED = 'sales_flat_order_item.base_amount_refunded';

    /** the column name for the row_total field */
    const ROW_TOTAL = 'sales_flat_order_item.row_total';

    /** the column name for the base_row_total field */
    const BASE_ROW_TOTAL = 'sales_flat_order_item.base_row_total';

    /** the column name for the row_invoiced field */
    const ROW_INVOICED = 'sales_flat_order_item.row_invoiced';

    /** the column name for the base_row_invoiced field */
    const BASE_ROW_INVOICED = 'sales_flat_order_item.base_row_invoiced';

    /** the column name for the row_weight field */
    const ROW_WEIGHT = 'sales_flat_order_item.row_weight';

    /** the column name for the base_tax_before_discount field */
    const BASE_TAX_BEFORE_DISCOUNT = 'sales_flat_order_item.base_tax_before_discount';

    /** the column name for the tax_before_discount field */
    const TAX_BEFORE_DISCOUNT = 'sales_flat_order_item.tax_before_discount';

    /** the column name for the ext_order_item_id field */
    const EXT_ORDER_ITEM_ID = 'sales_flat_order_item.ext_order_item_id';

    /** the column name for the locked_do_invoice field */
    const LOCKED_DO_INVOICE = 'sales_flat_order_item.locked_do_invoice';

    /** the column name for the locked_do_ship field */
    const LOCKED_DO_SHIP = 'sales_flat_order_item.locked_do_ship';

    /** the column name for the price_incl_tax field */
    const PRICE_INCL_TAX = 'sales_flat_order_item.price_incl_tax';

    /** the column name for the base_price_incl_tax field */
    const BASE_PRICE_INCL_TAX = 'sales_flat_order_item.base_price_incl_tax';

    /** the column name for the row_total_incl_tax field */
    const ROW_TOTAL_INCL_TAX = 'sales_flat_order_item.row_total_incl_tax';

    /** the column name for the base_row_total_incl_tax field */
    const BASE_ROW_TOTAL_INCL_TAX = 'sales_flat_order_item.base_row_total_incl_tax';

    /** the column name for the hidden_tax_amount field */
    const HIDDEN_TAX_AMOUNT = 'sales_flat_order_item.hidden_tax_amount';

    /** the column name for the base_hidden_tax_amount field */
    const BASE_HIDDEN_TAX_AMOUNT = 'sales_flat_order_item.base_hidden_tax_amount';

    /** the column name for the hidden_tax_invoiced field */
    const HIDDEN_TAX_INVOICED = 'sales_flat_order_item.hidden_tax_invoiced';

    /** the column name for the base_hidden_tax_invoiced field */
    const BASE_HIDDEN_TAX_INVOICED = 'sales_flat_order_item.base_hidden_tax_invoiced';

    /** the column name for the hidden_tax_refunded field */
    const HIDDEN_TAX_REFUNDED = 'sales_flat_order_item.hidden_tax_refunded';

    /** the column name for the base_hidden_tax_refunded field */
    const BASE_HIDDEN_TAX_REFUNDED = 'sales_flat_order_item.base_hidden_tax_refunded';

    /** the column name for the is_nominal field */
    const IS_NOMINAL = 'sales_flat_order_item.is_nominal';

    /** the column name for the tax_canceled field */
    const TAX_CANCELED = 'sales_flat_order_item.tax_canceled';

    /** the column name for the hidden_tax_canceled field */
    const HIDDEN_TAX_CANCELED = 'sales_flat_order_item.hidden_tax_canceled';

    /** the column name for the tax_refunded field */
    const TAX_REFUNDED = 'sales_flat_order_item.tax_refunded';

    /** the column name for the base_tax_refunded field */
    const BASE_TAX_REFUNDED = 'sales_flat_order_item.base_tax_refunded';

    /** the column name for the discount_refunded field */
    const DISCOUNT_REFUNDED = 'sales_flat_order_item.discount_refunded';

    /** the column name for the base_discount_refunded field */
    const BASE_DISCOUNT_REFUNDED = 'sales_flat_order_item.base_discount_refunded';

    /** the column name for the gift_message_id field */
    const GIFT_MESSAGE_ID = 'sales_flat_order_item.gift_message_id';

    /** the column name for the gift_message_available field */
    const GIFT_MESSAGE_AVAILABLE = 'sales_flat_order_item.gift_message_available';

    /** the column name for the base_weee_tax_applied_amount field */
    const BASE_WEEE_TAX_APPLIED_AMOUNT = 'sales_flat_order_item.base_weee_tax_applied_amount';

    /** the column name for the base_weee_tax_applied_row_amnt field */
    const BASE_WEEE_TAX_APPLIED_ROW_AMNT = 'sales_flat_order_item.base_weee_tax_applied_row_amnt';

    /** the column name for the weee_tax_applied_amount field */
    const WEEE_TAX_APPLIED_AMOUNT = 'sales_flat_order_item.weee_tax_applied_amount';

    /** the column name for the weee_tax_applied_row_amount field */
    const WEEE_TAX_APPLIED_ROW_AMOUNT = 'sales_flat_order_item.weee_tax_applied_row_amount';

    /** the column name for the weee_tax_applied field */
    const WEEE_TAX_APPLIED = 'sales_flat_order_item.weee_tax_applied';

    /** the column name for the weee_tax_disposition field */
    const WEEE_TAX_DISPOSITION = 'sales_flat_order_item.weee_tax_disposition';

    /** the column name for the weee_tax_row_disposition field */
    const WEEE_TAX_ROW_DISPOSITION = 'sales_flat_order_item.weee_tax_row_disposition';

    /** the column name for the base_weee_tax_disposition field */
    const BASE_WEEE_TAX_DISPOSITION = 'sales_flat_order_item.base_weee_tax_disposition';

    /** the column name for the base_weee_tax_row_disposition field */
    const BASE_WEEE_TAX_ROW_DISPOSITION = 'sales_flat_order_item.base_weee_tax_row_disposition';

    /** the column name for the crc_id field */
    const CRC_ID = 'sales_flat_order_item.crc_id';

    /** the column name for the event_id field */
    const EVENT_ID = 'sales_flat_order_item.event_id';

    /** the column name for the giftregistry_item_id field */
    const GIFTREGISTRY_ITEM_ID = 'sales_flat_order_item.giftregistry_item_id';

    /** the column name for the gw_id field */
    const GW_ID = 'sales_flat_order_item.gw_id';

    /** the column name for the gw_base_price field */
    const GW_BASE_PRICE = 'sales_flat_order_item.gw_base_price';

    /** the column name for the gw_price field */
    const GW_PRICE = 'sales_flat_order_item.gw_price';

    /** the column name for the gw_base_tax_amount field */
    const GW_BASE_TAX_AMOUNT = 'sales_flat_order_item.gw_base_tax_amount';

    /** the column name for the gw_tax_amount field */
    const GW_TAX_AMOUNT = 'sales_flat_order_item.gw_tax_amount';

    /** the column name for the gw_base_price_invoiced field */
    const GW_BASE_PRICE_INVOICED = 'sales_flat_order_item.gw_base_price_invoiced';

    /** the column name for the gw_price_invoiced field */
    const GW_PRICE_INVOICED = 'sales_flat_order_item.gw_price_invoiced';

    /** the column name for the gw_base_tax_amount_invoiced field */
    const GW_BASE_TAX_AMOUNT_INVOICED = 'sales_flat_order_item.gw_base_tax_amount_invoiced';

    /** the column name for the gw_tax_amount_invoiced field */
    const GW_TAX_AMOUNT_INVOICED = 'sales_flat_order_item.gw_tax_amount_invoiced';

    /** the column name for the gw_base_price_refunded field */
    const GW_BASE_PRICE_REFUNDED = 'sales_flat_order_item.gw_base_price_refunded';

    /** the column name for the gw_price_refunded field */
    const GW_PRICE_REFUNDED = 'sales_flat_order_item.gw_price_refunded';

    /** the column name for the gw_base_tax_amount_refunded field */
    const GW_BASE_TAX_AMOUNT_REFUNDED = 'sales_flat_order_item.gw_base_tax_amount_refunded';

    /** the column name for the gw_tax_amount_refunded field */
    const GW_TAX_AMOUNT_REFUNDED = 'sales_flat_order_item.gw_tax_amount_refunded';

    /** the column name for the qty_returned field */
    const QTY_RETURNED = 'sales_flat_order_item.qty_returned';

    /** the column name for the qty_redeemed field */
    const QTY_REDEEMED = 'sales_flat_order_item.qty_redeemed';

    /** the column name for the consultant field */
    const CONSULTANT = 'sales_flat_order_item.consultant';

    /** the column name for the parent_product_id field */
    const PARENT_PRODUCT_ID = 'sales_flat_order_item.parent_product_id';

    /** the column name for the qty_to_redeem field */
    const QTY_TO_REDEEM = 'sales_flat_order_item.qty_to_redeem';

    /** the column name for the rewards_used_detail field */
    const REWARDS_USED_DETAIL = 'sales_flat_order_item.rewards_used_detail';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of SalesFlatOrderItem objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SalesFlatOrderItem[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SalesFlatOrderItemPeer::$fieldNames[SalesFlatOrderItemPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ItemId', 'OrderId', 'ParentItemId', 'QuoteItemId', 'StoreId', 'CreatedAt', 'UpdatedAt', 'ProductId', 'ProductType', 'ProductOptions', 'Weight', 'IsVirtual', 'Sku', 'Name', 'Description', 'AppliedRuleIds', 'AdditionalData', 'FreeShipping', 'IsQtyDecimal', 'NoDiscount', 'QtyBackordered', 'QtyCanceled', 'QtyInvoiced', 'QtyOrdered', 'QtyRefunded', 'QtyShipped', 'BaseCost', 'Price', 'BasePrice', 'OriginalPrice', 'BaseOriginalPrice', 'TaxPercent', 'TaxAmount', 'BaseTaxAmount', 'TaxInvoiced', 'BaseTaxInvoiced', 'DiscountPercent', 'DiscountAmount', 'BaseDiscountAmount', 'DiscountInvoiced', 'BaseDiscountInvoiced', 'AmountRefunded', 'BaseAmountRefunded', 'RowTotal', 'BaseRowTotal', 'RowInvoiced', 'BaseRowInvoiced', 'RowWeight', 'BaseTaxBeforeDiscount', 'TaxBeforeDiscount', 'ExtOrderItemId', 'LockedDoInvoice', 'LockedDoShip', 'PriceInclTax', 'BasePriceInclTax', 'RowTotalInclTax', 'BaseRowTotalInclTax', 'HiddenTaxAmount', 'BaseHiddenTaxAmount', 'HiddenTaxInvoiced', 'BaseHiddenTaxInvoiced', 'HiddenTaxRefunded', 'BaseHiddenTaxRefunded', 'IsNominal', 'TaxCanceled', 'HiddenTaxCanceled', 'TaxRefunded', 'BaseTaxRefunded', 'DiscountRefunded', 'BaseDiscountRefunded', 'GiftMessageId', 'GiftMessageAvailable', 'BaseWeeeTaxAppliedAmount', 'BaseWeeeTaxAppliedRowAmnt', 'WeeeTaxAppliedAmount', 'WeeeTaxAppliedRowAmount', 'WeeeTaxApplied', 'WeeeTaxDisposition', 'WeeeTaxRowDisposition', 'BaseWeeeTaxDisposition', 'BaseWeeeTaxRowDisposition', 'CrcId', 'EventId', 'GiftregistryItemId', 'GwId', 'GwBasePrice', 'GwPrice', 'GwBaseTaxAmount', 'GwTaxAmount', 'GwBasePriceInvoiced', 'GwPriceInvoiced', 'GwBaseTaxAmountInvoiced', 'GwTaxAmountInvoiced', 'GwBasePriceRefunded', 'GwPriceRefunded', 'GwBaseTaxAmountRefunded', 'GwTaxAmountRefunded', 'QtyReturned', 'QtyRedeemed', 'Consultant', 'ParentProductId', 'QtyToRedeem', 'RewardsUsedDetail', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('itemId', 'orderId', 'parentItemId', 'quoteItemId', 'storeId', 'createdAt', 'updatedAt', 'productId', 'productType', 'productOptions', 'weight', 'isVirtual', 'sku', 'name', 'description', 'appliedRuleIds', 'additionalData', 'freeShipping', 'isQtyDecimal', 'noDiscount', 'qtyBackordered', 'qtyCanceled', 'qtyInvoiced', 'qtyOrdered', 'qtyRefunded', 'qtyShipped', 'baseCost', 'price', 'basePrice', 'originalPrice', 'baseOriginalPrice', 'taxPercent', 'taxAmount', 'baseTaxAmount', 'taxInvoiced', 'baseTaxInvoiced', 'discountPercent', 'discountAmount', 'baseDiscountAmount', 'discountInvoiced', 'baseDiscountInvoiced', 'amountRefunded', 'baseAmountRefunded', 'rowTotal', 'baseRowTotal', 'rowInvoiced', 'baseRowInvoiced', 'rowWeight', 'baseTaxBeforeDiscount', 'taxBeforeDiscount', 'extOrderItemId', 'lockedDoInvoice', 'lockedDoShip', 'priceInclTax', 'basePriceInclTax', 'rowTotalInclTax', 'baseRowTotalInclTax', 'hiddenTaxAmount', 'baseHiddenTaxAmount', 'hiddenTaxInvoiced', 'baseHiddenTaxInvoiced', 'hiddenTaxRefunded', 'baseHiddenTaxRefunded', 'isNominal', 'taxCanceled', 'hiddenTaxCanceled', 'taxRefunded', 'baseTaxRefunded', 'discountRefunded', 'baseDiscountRefunded', 'giftMessageId', 'giftMessageAvailable', 'baseWeeeTaxAppliedAmount', 'baseWeeeTaxAppliedRowAmnt', 'weeeTaxAppliedAmount', 'weeeTaxAppliedRowAmount', 'weeeTaxApplied', 'weeeTaxDisposition', 'weeeTaxRowDisposition', 'baseWeeeTaxDisposition', 'baseWeeeTaxRowDisposition', 'crcId', 'eventId', 'giftregistryItemId', 'gwId', 'gwBasePrice', 'gwPrice', 'gwBaseTaxAmount', 'gwTaxAmount', 'gwBasePriceInvoiced', 'gwPriceInvoiced', 'gwBaseTaxAmountInvoiced', 'gwTaxAmountInvoiced', 'gwBasePriceRefunded', 'gwPriceRefunded', 'gwBaseTaxAmountRefunded', 'gwTaxAmountRefunded', 'qtyReturned', 'qtyRedeemed', 'consultant', 'parentProductId', 'qtyToRedeem', 'rewardsUsedDetail', ),
        BasePeer::TYPE_COLNAME => array (SalesFlatOrderItemPeer::ITEM_ID, SalesFlatOrderItemPeer::ORDER_ID, SalesFlatOrderItemPeer::PARENT_ITEM_ID, SalesFlatOrderItemPeer::QUOTE_ITEM_ID, SalesFlatOrderItemPeer::STORE_ID, SalesFlatOrderItemPeer::CREATED_AT, SalesFlatOrderItemPeer::UPDATED_AT, SalesFlatOrderItemPeer::PRODUCT_ID, SalesFlatOrderItemPeer::PRODUCT_TYPE, SalesFlatOrderItemPeer::PRODUCT_OPTIONS, SalesFlatOrderItemPeer::WEIGHT, SalesFlatOrderItemPeer::IS_VIRTUAL, SalesFlatOrderItemPeer::SKU, SalesFlatOrderItemPeer::NAME, SalesFlatOrderItemPeer::DESCRIPTION, SalesFlatOrderItemPeer::APPLIED_RULE_IDS, SalesFlatOrderItemPeer::ADDITIONAL_DATA, SalesFlatOrderItemPeer::FREE_SHIPPING, SalesFlatOrderItemPeer::IS_QTY_DECIMAL, SalesFlatOrderItemPeer::NO_DISCOUNT, SalesFlatOrderItemPeer::QTY_BACKORDERED, SalesFlatOrderItemPeer::QTY_CANCELED, SalesFlatOrderItemPeer::QTY_INVOICED, SalesFlatOrderItemPeer::QTY_ORDERED, SalesFlatOrderItemPeer::QTY_REFUNDED, SalesFlatOrderItemPeer::QTY_SHIPPED, SalesFlatOrderItemPeer::BASE_COST, SalesFlatOrderItemPeer::PRICE, SalesFlatOrderItemPeer::BASE_PRICE, SalesFlatOrderItemPeer::ORIGINAL_PRICE, SalesFlatOrderItemPeer::BASE_ORIGINAL_PRICE, SalesFlatOrderItemPeer::TAX_PERCENT, SalesFlatOrderItemPeer::TAX_AMOUNT, SalesFlatOrderItemPeer::BASE_TAX_AMOUNT, SalesFlatOrderItemPeer::TAX_INVOICED, SalesFlatOrderItemPeer::BASE_TAX_INVOICED, SalesFlatOrderItemPeer::DISCOUNT_PERCENT, SalesFlatOrderItemPeer::DISCOUNT_AMOUNT, SalesFlatOrderItemPeer::BASE_DISCOUNT_AMOUNT, SalesFlatOrderItemPeer::DISCOUNT_INVOICED, SalesFlatOrderItemPeer::BASE_DISCOUNT_INVOICED, SalesFlatOrderItemPeer::AMOUNT_REFUNDED, SalesFlatOrderItemPeer::BASE_AMOUNT_REFUNDED, SalesFlatOrderItemPeer::ROW_TOTAL, SalesFlatOrderItemPeer::BASE_ROW_TOTAL, SalesFlatOrderItemPeer::ROW_INVOICED, SalesFlatOrderItemPeer::BASE_ROW_INVOICED, SalesFlatOrderItemPeer::ROW_WEIGHT, SalesFlatOrderItemPeer::BASE_TAX_BEFORE_DISCOUNT, SalesFlatOrderItemPeer::TAX_BEFORE_DISCOUNT, SalesFlatOrderItemPeer::EXT_ORDER_ITEM_ID, SalesFlatOrderItemPeer::LOCKED_DO_INVOICE, SalesFlatOrderItemPeer::LOCKED_DO_SHIP, SalesFlatOrderItemPeer::PRICE_INCL_TAX, SalesFlatOrderItemPeer::BASE_PRICE_INCL_TAX, SalesFlatOrderItemPeer::ROW_TOTAL_INCL_TAX, SalesFlatOrderItemPeer::BASE_ROW_TOTAL_INCL_TAX, SalesFlatOrderItemPeer::HIDDEN_TAX_AMOUNT, SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_AMOUNT, SalesFlatOrderItemPeer::HIDDEN_TAX_INVOICED, SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_INVOICED, SalesFlatOrderItemPeer::HIDDEN_TAX_REFUNDED, SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_REFUNDED, SalesFlatOrderItemPeer::IS_NOMINAL, SalesFlatOrderItemPeer::TAX_CANCELED, SalesFlatOrderItemPeer::HIDDEN_TAX_CANCELED, SalesFlatOrderItemPeer::TAX_REFUNDED, SalesFlatOrderItemPeer::BASE_TAX_REFUNDED, SalesFlatOrderItemPeer::DISCOUNT_REFUNDED, SalesFlatOrderItemPeer::BASE_DISCOUNT_REFUNDED, SalesFlatOrderItemPeer::GIFT_MESSAGE_ID, SalesFlatOrderItemPeer::GIFT_MESSAGE_AVAILABLE, SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_AMOUNT, SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_ROW_AMNT, SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_AMOUNT, SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_ROW_AMOUNT, SalesFlatOrderItemPeer::WEEE_TAX_APPLIED, SalesFlatOrderItemPeer::WEEE_TAX_DISPOSITION, SalesFlatOrderItemPeer::WEEE_TAX_ROW_DISPOSITION, SalesFlatOrderItemPeer::BASE_WEEE_TAX_DISPOSITION, SalesFlatOrderItemPeer::BASE_WEEE_TAX_ROW_DISPOSITION, SalesFlatOrderItemPeer::CRC_ID, SalesFlatOrderItemPeer::EVENT_ID, SalesFlatOrderItemPeer::GIFTREGISTRY_ITEM_ID, SalesFlatOrderItemPeer::GW_ID, SalesFlatOrderItemPeer::GW_BASE_PRICE, SalesFlatOrderItemPeer::GW_PRICE, SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT, SalesFlatOrderItemPeer::GW_TAX_AMOUNT, SalesFlatOrderItemPeer::GW_BASE_PRICE_INVOICED, SalesFlatOrderItemPeer::GW_PRICE_INVOICED, SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_INVOICED, SalesFlatOrderItemPeer::GW_TAX_AMOUNT_INVOICED, SalesFlatOrderItemPeer::GW_BASE_PRICE_REFUNDED, SalesFlatOrderItemPeer::GW_PRICE_REFUNDED, SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_REFUNDED, SalesFlatOrderItemPeer::GW_TAX_AMOUNT_REFUNDED, SalesFlatOrderItemPeer::QTY_RETURNED, SalesFlatOrderItemPeer::QTY_REDEEMED, SalesFlatOrderItemPeer::CONSULTANT, SalesFlatOrderItemPeer::PARENT_PRODUCT_ID, SalesFlatOrderItemPeer::QTY_TO_REDEEM, SalesFlatOrderItemPeer::REWARDS_USED_DETAIL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ITEM_ID', 'ORDER_ID', 'PARENT_ITEM_ID', 'QUOTE_ITEM_ID', 'STORE_ID', 'CREATED_AT', 'UPDATED_AT', 'PRODUCT_ID', 'PRODUCT_TYPE', 'PRODUCT_OPTIONS', 'WEIGHT', 'IS_VIRTUAL', 'SKU', 'NAME', 'DESCRIPTION', 'APPLIED_RULE_IDS', 'ADDITIONAL_DATA', 'FREE_SHIPPING', 'IS_QTY_DECIMAL', 'NO_DISCOUNT', 'QTY_BACKORDERED', 'QTY_CANCELED', 'QTY_INVOICED', 'QTY_ORDERED', 'QTY_REFUNDED', 'QTY_SHIPPED', 'BASE_COST', 'PRICE', 'BASE_PRICE', 'ORIGINAL_PRICE', 'BASE_ORIGINAL_PRICE', 'TAX_PERCENT', 'TAX_AMOUNT', 'BASE_TAX_AMOUNT', 'TAX_INVOICED', 'BASE_TAX_INVOICED', 'DISCOUNT_PERCENT', 'DISCOUNT_AMOUNT', 'BASE_DISCOUNT_AMOUNT', 'DISCOUNT_INVOICED', 'BASE_DISCOUNT_INVOICED', 'AMOUNT_REFUNDED', 'BASE_AMOUNT_REFUNDED', 'ROW_TOTAL', 'BASE_ROW_TOTAL', 'ROW_INVOICED', 'BASE_ROW_INVOICED', 'ROW_WEIGHT', 'BASE_TAX_BEFORE_DISCOUNT', 'TAX_BEFORE_DISCOUNT', 'EXT_ORDER_ITEM_ID', 'LOCKED_DO_INVOICE', 'LOCKED_DO_SHIP', 'PRICE_INCL_TAX', 'BASE_PRICE_INCL_TAX', 'ROW_TOTAL_INCL_TAX', 'BASE_ROW_TOTAL_INCL_TAX', 'HIDDEN_TAX_AMOUNT', 'BASE_HIDDEN_TAX_AMOUNT', 'HIDDEN_TAX_INVOICED', 'BASE_HIDDEN_TAX_INVOICED', 'HIDDEN_TAX_REFUNDED', 'BASE_HIDDEN_TAX_REFUNDED', 'IS_NOMINAL', 'TAX_CANCELED', 'HIDDEN_TAX_CANCELED', 'TAX_REFUNDED', 'BASE_TAX_REFUNDED', 'DISCOUNT_REFUNDED', 'BASE_DISCOUNT_REFUNDED', 'GIFT_MESSAGE_ID', 'GIFT_MESSAGE_AVAILABLE', 'BASE_WEEE_TAX_APPLIED_AMOUNT', 'BASE_WEEE_TAX_APPLIED_ROW_AMNT', 'WEEE_TAX_APPLIED_AMOUNT', 'WEEE_TAX_APPLIED_ROW_AMOUNT', 'WEEE_TAX_APPLIED', 'WEEE_TAX_DISPOSITION', 'WEEE_TAX_ROW_DISPOSITION', 'BASE_WEEE_TAX_DISPOSITION', 'BASE_WEEE_TAX_ROW_DISPOSITION', 'CRC_ID', 'EVENT_ID', 'GIFTREGISTRY_ITEM_ID', 'GW_ID', 'GW_BASE_PRICE', 'GW_PRICE', 'GW_BASE_TAX_AMOUNT', 'GW_TAX_AMOUNT', 'GW_BASE_PRICE_INVOICED', 'GW_PRICE_INVOICED', 'GW_BASE_TAX_AMOUNT_INVOICED', 'GW_TAX_AMOUNT_INVOICED', 'GW_BASE_PRICE_REFUNDED', 'GW_PRICE_REFUNDED', 'GW_BASE_TAX_AMOUNT_REFUNDED', 'GW_TAX_AMOUNT_REFUNDED', 'QTY_RETURNED', 'QTY_REDEEMED', 'CONSULTANT', 'PARENT_PRODUCT_ID', 'QTY_TO_REDEEM', 'REWARDS_USED_DETAIL', ),
        BasePeer::TYPE_FIELDNAME => array ('item_id', 'order_id', 'parent_item_id', 'quote_item_id', 'store_id', 'created_at', 'updated_at', 'product_id', 'product_type', 'product_options', 'weight', 'is_virtual', 'sku', 'name', 'description', 'applied_rule_ids', 'additional_data', 'free_shipping', 'is_qty_decimal', 'no_discount', 'qty_backordered', 'qty_canceled', 'qty_invoiced', 'qty_ordered', 'qty_refunded', 'qty_shipped', 'base_cost', 'price', 'base_price', 'original_price', 'base_original_price', 'tax_percent', 'tax_amount', 'base_tax_amount', 'tax_invoiced', 'base_tax_invoiced', 'discount_percent', 'discount_amount', 'base_discount_amount', 'discount_invoiced', 'base_discount_invoiced', 'amount_refunded', 'base_amount_refunded', 'row_total', 'base_row_total', 'row_invoiced', 'base_row_invoiced', 'row_weight', 'base_tax_before_discount', 'tax_before_discount', 'ext_order_item_id', 'locked_do_invoice', 'locked_do_ship', 'price_incl_tax', 'base_price_incl_tax', 'row_total_incl_tax', 'base_row_total_incl_tax', 'hidden_tax_amount', 'base_hidden_tax_amount', 'hidden_tax_invoiced', 'base_hidden_tax_invoiced', 'hidden_tax_refunded', 'base_hidden_tax_refunded', 'is_nominal', 'tax_canceled', 'hidden_tax_canceled', 'tax_refunded', 'base_tax_refunded', 'discount_refunded', 'base_discount_refunded', 'gift_message_id', 'gift_message_available', 'base_weee_tax_applied_amount', 'base_weee_tax_applied_row_amnt', 'weee_tax_applied_amount', 'weee_tax_applied_row_amount', 'weee_tax_applied', 'weee_tax_disposition', 'weee_tax_row_disposition', 'base_weee_tax_disposition', 'base_weee_tax_row_disposition', 'crc_id', 'event_id', 'giftregistry_item_id', 'gw_id', 'gw_base_price', 'gw_price', 'gw_base_tax_amount', 'gw_tax_amount', 'gw_base_price_invoiced', 'gw_price_invoiced', 'gw_base_tax_amount_invoiced', 'gw_tax_amount_invoiced', 'gw_base_price_refunded', 'gw_price_refunded', 'gw_base_tax_amount_refunded', 'gw_tax_amount_refunded', 'qty_returned', 'qty_redeemed', 'consultant', 'parent_product_id', 'qty_to_redeem', 'rewards_used_detail', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SalesFlatOrderItemPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ItemId' => 0, 'OrderId' => 1, 'ParentItemId' => 2, 'QuoteItemId' => 3, 'StoreId' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, 'ProductId' => 7, 'ProductType' => 8, 'ProductOptions' => 9, 'Weight' => 10, 'IsVirtual' => 11, 'Sku' => 12, 'Name' => 13, 'Description' => 14, 'AppliedRuleIds' => 15, 'AdditionalData' => 16, 'FreeShipping' => 17, 'IsQtyDecimal' => 18, 'NoDiscount' => 19, 'QtyBackordered' => 20, 'QtyCanceled' => 21, 'QtyInvoiced' => 22, 'QtyOrdered' => 23, 'QtyRefunded' => 24, 'QtyShipped' => 25, 'BaseCost' => 26, 'Price' => 27, 'BasePrice' => 28, 'OriginalPrice' => 29, 'BaseOriginalPrice' => 30, 'TaxPercent' => 31, 'TaxAmount' => 32, 'BaseTaxAmount' => 33, 'TaxInvoiced' => 34, 'BaseTaxInvoiced' => 35, 'DiscountPercent' => 36, 'DiscountAmount' => 37, 'BaseDiscountAmount' => 38, 'DiscountInvoiced' => 39, 'BaseDiscountInvoiced' => 40, 'AmountRefunded' => 41, 'BaseAmountRefunded' => 42, 'RowTotal' => 43, 'BaseRowTotal' => 44, 'RowInvoiced' => 45, 'BaseRowInvoiced' => 46, 'RowWeight' => 47, 'BaseTaxBeforeDiscount' => 48, 'TaxBeforeDiscount' => 49, 'ExtOrderItemId' => 50, 'LockedDoInvoice' => 51, 'LockedDoShip' => 52, 'PriceInclTax' => 53, 'BasePriceInclTax' => 54, 'RowTotalInclTax' => 55, 'BaseRowTotalInclTax' => 56, 'HiddenTaxAmount' => 57, 'BaseHiddenTaxAmount' => 58, 'HiddenTaxInvoiced' => 59, 'BaseHiddenTaxInvoiced' => 60, 'HiddenTaxRefunded' => 61, 'BaseHiddenTaxRefunded' => 62, 'IsNominal' => 63, 'TaxCanceled' => 64, 'HiddenTaxCanceled' => 65, 'TaxRefunded' => 66, 'BaseTaxRefunded' => 67, 'DiscountRefunded' => 68, 'BaseDiscountRefunded' => 69, 'GiftMessageId' => 70, 'GiftMessageAvailable' => 71, 'BaseWeeeTaxAppliedAmount' => 72, 'BaseWeeeTaxAppliedRowAmnt' => 73, 'WeeeTaxAppliedAmount' => 74, 'WeeeTaxAppliedRowAmount' => 75, 'WeeeTaxApplied' => 76, 'WeeeTaxDisposition' => 77, 'WeeeTaxRowDisposition' => 78, 'BaseWeeeTaxDisposition' => 79, 'BaseWeeeTaxRowDisposition' => 80, 'CrcId' => 81, 'EventId' => 82, 'GiftregistryItemId' => 83, 'GwId' => 84, 'GwBasePrice' => 85, 'GwPrice' => 86, 'GwBaseTaxAmount' => 87, 'GwTaxAmount' => 88, 'GwBasePriceInvoiced' => 89, 'GwPriceInvoiced' => 90, 'GwBaseTaxAmountInvoiced' => 91, 'GwTaxAmountInvoiced' => 92, 'GwBasePriceRefunded' => 93, 'GwPriceRefunded' => 94, 'GwBaseTaxAmountRefunded' => 95, 'GwTaxAmountRefunded' => 96, 'QtyReturned' => 97, 'QtyRedeemed' => 98, 'Consultant' => 99, 'ParentProductId' => 100, 'QtyToRedeem' => 101, 'RewardsUsedDetail' => 102, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('itemId' => 0, 'orderId' => 1, 'parentItemId' => 2, 'quoteItemId' => 3, 'storeId' => 4, 'createdAt' => 5, 'updatedAt' => 6, 'productId' => 7, 'productType' => 8, 'productOptions' => 9, 'weight' => 10, 'isVirtual' => 11, 'sku' => 12, 'name' => 13, 'description' => 14, 'appliedRuleIds' => 15, 'additionalData' => 16, 'freeShipping' => 17, 'isQtyDecimal' => 18, 'noDiscount' => 19, 'qtyBackordered' => 20, 'qtyCanceled' => 21, 'qtyInvoiced' => 22, 'qtyOrdered' => 23, 'qtyRefunded' => 24, 'qtyShipped' => 25, 'baseCost' => 26, 'price' => 27, 'basePrice' => 28, 'originalPrice' => 29, 'baseOriginalPrice' => 30, 'taxPercent' => 31, 'taxAmount' => 32, 'baseTaxAmount' => 33, 'taxInvoiced' => 34, 'baseTaxInvoiced' => 35, 'discountPercent' => 36, 'discountAmount' => 37, 'baseDiscountAmount' => 38, 'discountInvoiced' => 39, 'baseDiscountInvoiced' => 40, 'amountRefunded' => 41, 'baseAmountRefunded' => 42, 'rowTotal' => 43, 'baseRowTotal' => 44, 'rowInvoiced' => 45, 'baseRowInvoiced' => 46, 'rowWeight' => 47, 'baseTaxBeforeDiscount' => 48, 'taxBeforeDiscount' => 49, 'extOrderItemId' => 50, 'lockedDoInvoice' => 51, 'lockedDoShip' => 52, 'priceInclTax' => 53, 'basePriceInclTax' => 54, 'rowTotalInclTax' => 55, 'baseRowTotalInclTax' => 56, 'hiddenTaxAmount' => 57, 'baseHiddenTaxAmount' => 58, 'hiddenTaxInvoiced' => 59, 'baseHiddenTaxInvoiced' => 60, 'hiddenTaxRefunded' => 61, 'baseHiddenTaxRefunded' => 62, 'isNominal' => 63, 'taxCanceled' => 64, 'hiddenTaxCanceled' => 65, 'taxRefunded' => 66, 'baseTaxRefunded' => 67, 'discountRefunded' => 68, 'baseDiscountRefunded' => 69, 'giftMessageId' => 70, 'giftMessageAvailable' => 71, 'baseWeeeTaxAppliedAmount' => 72, 'baseWeeeTaxAppliedRowAmnt' => 73, 'weeeTaxAppliedAmount' => 74, 'weeeTaxAppliedRowAmount' => 75, 'weeeTaxApplied' => 76, 'weeeTaxDisposition' => 77, 'weeeTaxRowDisposition' => 78, 'baseWeeeTaxDisposition' => 79, 'baseWeeeTaxRowDisposition' => 80, 'crcId' => 81, 'eventId' => 82, 'giftregistryItemId' => 83, 'gwId' => 84, 'gwBasePrice' => 85, 'gwPrice' => 86, 'gwBaseTaxAmount' => 87, 'gwTaxAmount' => 88, 'gwBasePriceInvoiced' => 89, 'gwPriceInvoiced' => 90, 'gwBaseTaxAmountInvoiced' => 91, 'gwTaxAmountInvoiced' => 92, 'gwBasePriceRefunded' => 93, 'gwPriceRefunded' => 94, 'gwBaseTaxAmountRefunded' => 95, 'gwTaxAmountRefunded' => 96, 'qtyReturned' => 97, 'qtyRedeemed' => 98, 'consultant' => 99, 'parentProductId' => 100, 'qtyToRedeem' => 101, 'rewardsUsedDetail' => 102, ),
        BasePeer::TYPE_COLNAME => array (SalesFlatOrderItemPeer::ITEM_ID => 0, SalesFlatOrderItemPeer::ORDER_ID => 1, SalesFlatOrderItemPeer::PARENT_ITEM_ID => 2, SalesFlatOrderItemPeer::QUOTE_ITEM_ID => 3, SalesFlatOrderItemPeer::STORE_ID => 4, SalesFlatOrderItemPeer::CREATED_AT => 5, SalesFlatOrderItemPeer::UPDATED_AT => 6, SalesFlatOrderItemPeer::PRODUCT_ID => 7, SalesFlatOrderItemPeer::PRODUCT_TYPE => 8, SalesFlatOrderItemPeer::PRODUCT_OPTIONS => 9, SalesFlatOrderItemPeer::WEIGHT => 10, SalesFlatOrderItemPeer::IS_VIRTUAL => 11, SalesFlatOrderItemPeer::SKU => 12, SalesFlatOrderItemPeer::NAME => 13, SalesFlatOrderItemPeer::DESCRIPTION => 14, SalesFlatOrderItemPeer::APPLIED_RULE_IDS => 15, SalesFlatOrderItemPeer::ADDITIONAL_DATA => 16, SalesFlatOrderItemPeer::FREE_SHIPPING => 17, SalesFlatOrderItemPeer::IS_QTY_DECIMAL => 18, SalesFlatOrderItemPeer::NO_DISCOUNT => 19, SalesFlatOrderItemPeer::QTY_BACKORDERED => 20, SalesFlatOrderItemPeer::QTY_CANCELED => 21, SalesFlatOrderItemPeer::QTY_INVOICED => 22, SalesFlatOrderItemPeer::QTY_ORDERED => 23, SalesFlatOrderItemPeer::QTY_REFUNDED => 24, SalesFlatOrderItemPeer::QTY_SHIPPED => 25, SalesFlatOrderItemPeer::BASE_COST => 26, SalesFlatOrderItemPeer::PRICE => 27, SalesFlatOrderItemPeer::BASE_PRICE => 28, SalesFlatOrderItemPeer::ORIGINAL_PRICE => 29, SalesFlatOrderItemPeer::BASE_ORIGINAL_PRICE => 30, SalesFlatOrderItemPeer::TAX_PERCENT => 31, SalesFlatOrderItemPeer::TAX_AMOUNT => 32, SalesFlatOrderItemPeer::BASE_TAX_AMOUNT => 33, SalesFlatOrderItemPeer::TAX_INVOICED => 34, SalesFlatOrderItemPeer::BASE_TAX_INVOICED => 35, SalesFlatOrderItemPeer::DISCOUNT_PERCENT => 36, SalesFlatOrderItemPeer::DISCOUNT_AMOUNT => 37, SalesFlatOrderItemPeer::BASE_DISCOUNT_AMOUNT => 38, SalesFlatOrderItemPeer::DISCOUNT_INVOICED => 39, SalesFlatOrderItemPeer::BASE_DISCOUNT_INVOICED => 40, SalesFlatOrderItemPeer::AMOUNT_REFUNDED => 41, SalesFlatOrderItemPeer::BASE_AMOUNT_REFUNDED => 42, SalesFlatOrderItemPeer::ROW_TOTAL => 43, SalesFlatOrderItemPeer::BASE_ROW_TOTAL => 44, SalesFlatOrderItemPeer::ROW_INVOICED => 45, SalesFlatOrderItemPeer::BASE_ROW_INVOICED => 46, SalesFlatOrderItemPeer::ROW_WEIGHT => 47, SalesFlatOrderItemPeer::BASE_TAX_BEFORE_DISCOUNT => 48, SalesFlatOrderItemPeer::TAX_BEFORE_DISCOUNT => 49, SalesFlatOrderItemPeer::EXT_ORDER_ITEM_ID => 50, SalesFlatOrderItemPeer::LOCKED_DO_INVOICE => 51, SalesFlatOrderItemPeer::LOCKED_DO_SHIP => 52, SalesFlatOrderItemPeer::PRICE_INCL_TAX => 53, SalesFlatOrderItemPeer::BASE_PRICE_INCL_TAX => 54, SalesFlatOrderItemPeer::ROW_TOTAL_INCL_TAX => 55, SalesFlatOrderItemPeer::BASE_ROW_TOTAL_INCL_TAX => 56, SalesFlatOrderItemPeer::HIDDEN_TAX_AMOUNT => 57, SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_AMOUNT => 58, SalesFlatOrderItemPeer::HIDDEN_TAX_INVOICED => 59, SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_INVOICED => 60, SalesFlatOrderItemPeer::HIDDEN_TAX_REFUNDED => 61, SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_REFUNDED => 62, SalesFlatOrderItemPeer::IS_NOMINAL => 63, SalesFlatOrderItemPeer::TAX_CANCELED => 64, SalesFlatOrderItemPeer::HIDDEN_TAX_CANCELED => 65, SalesFlatOrderItemPeer::TAX_REFUNDED => 66, SalesFlatOrderItemPeer::BASE_TAX_REFUNDED => 67, SalesFlatOrderItemPeer::DISCOUNT_REFUNDED => 68, SalesFlatOrderItemPeer::BASE_DISCOUNT_REFUNDED => 69, SalesFlatOrderItemPeer::GIFT_MESSAGE_ID => 70, SalesFlatOrderItemPeer::GIFT_MESSAGE_AVAILABLE => 71, SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_AMOUNT => 72, SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_ROW_AMNT => 73, SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_AMOUNT => 74, SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_ROW_AMOUNT => 75, SalesFlatOrderItemPeer::WEEE_TAX_APPLIED => 76, SalesFlatOrderItemPeer::WEEE_TAX_DISPOSITION => 77, SalesFlatOrderItemPeer::WEEE_TAX_ROW_DISPOSITION => 78, SalesFlatOrderItemPeer::BASE_WEEE_TAX_DISPOSITION => 79, SalesFlatOrderItemPeer::BASE_WEEE_TAX_ROW_DISPOSITION => 80, SalesFlatOrderItemPeer::CRC_ID => 81, SalesFlatOrderItemPeer::EVENT_ID => 82, SalesFlatOrderItemPeer::GIFTREGISTRY_ITEM_ID => 83, SalesFlatOrderItemPeer::GW_ID => 84, SalesFlatOrderItemPeer::GW_BASE_PRICE => 85, SalesFlatOrderItemPeer::GW_PRICE => 86, SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT => 87, SalesFlatOrderItemPeer::GW_TAX_AMOUNT => 88, SalesFlatOrderItemPeer::GW_BASE_PRICE_INVOICED => 89, SalesFlatOrderItemPeer::GW_PRICE_INVOICED => 90, SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_INVOICED => 91, SalesFlatOrderItemPeer::GW_TAX_AMOUNT_INVOICED => 92, SalesFlatOrderItemPeer::GW_BASE_PRICE_REFUNDED => 93, SalesFlatOrderItemPeer::GW_PRICE_REFUNDED => 94, SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_REFUNDED => 95, SalesFlatOrderItemPeer::GW_TAX_AMOUNT_REFUNDED => 96, SalesFlatOrderItemPeer::QTY_RETURNED => 97, SalesFlatOrderItemPeer::QTY_REDEEMED => 98, SalesFlatOrderItemPeer::CONSULTANT => 99, SalesFlatOrderItemPeer::PARENT_PRODUCT_ID => 100, SalesFlatOrderItemPeer::QTY_TO_REDEEM => 101, SalesFlatOrderItemPeer::REWARDS_USED_DETAIL => 102, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ITEM_ID' => 0, 'ORDER_ID' => 1, 'PARENT_ITEM_ID' => 2, 'QUOTE_ITEM_ID' => 3, 'STORE_ID' => 4, 'CREATED_AT' => 5, 'UPDATED_AT' => 6, 'PRODUCT_ID' => 7, 'PRODUCT_TYPE' => 8, 'PRODUCT_OPTIONS' => 9, 'WEIGHT' => 10, 'IS_VIRTUAL' => 11, 'SKU' => 12, 'NAME' => 13, 'DESCRIPTION' => 14, 'APPLIED_RULE_IDS' => 15, 'ADDITIONAL_DATA' => 16, 'FREE_SHIPPING' => 17, 'IS_QTY_DECIMAL' => 18, 'NO_DISCOUNT' => 19, 'QTY_BACKORDERED' => 20, 'QTY_CANCELED' => 21, 'QTY_INVOICED' => 22, 'QTY_ORDERED' => 23, 'QTY_REFUNDED' => 24, 'QTY_SHIPPED' => 25, 'BASE_COST' => 26, 'PRICE' => 27, 'BASE_PRICE' => 28, 'ORIGINAL_PRICE' => 29, 'BASE_ORIGINAL_PRICE' => 30, 'TAX_PERCENT' => 31, 'TAX_AMOUNT' => 32, 'BASE_TAX_AMOUNT' => 33, 'TAX_INVOICED' => 34, 'BASE_TAX_INVOICED' => 35, 'DISCOUNT_PERCENT' => 36, 'DISCOUNT_AMOUNT' => 37, 'BASE_DISCOUNT_AMOUNT' => 38, 'DISCOUNT_INVOICED' => 39, 'BASE_DISCOUNT_INVOICED' => 40, 'AMOUNT_REFUNDED' => 41, 'BASE_AMOUNT_REFUNDED' => 42, 'ROW_TOTAL' => 43, 'BASE_ROW_TOTAL' => 44, 'ROW_INVOICED' => 45, 'BASE_ROW_INVOICED' => 46, 'ROW_WEIGHT' => 47, 'BASE_TAX_BEFORE_DISCOUNT' => 48, 'TAX_BEFORE_DISCOUNT' => 49, 'EXT_ORDER_ITEM_ID' => 50, 'LOCKED_DO_INVOICE' => 51, 'LOCKED_DO_SHIP' => 52, 'PRICE_INCL_TAX' => 53, 'BASE_PRICE_INCL_TAX' => 54, 'ROW_TOTAL_INCL_TAX' => 55, 'BASE_ROW_TOTAL_INCL_TAX' => 56, 'HIDDEN_TAX_AMOUNT' => 57, 'BASE_HIDDEN_TAX_AMOUNT' => 58, 'HIDDEN_TAX_INVOICED' => 59, 'BASE_HIDDEN_TAX_INVOICED' => 60, 'HIDDEN_TAX_REFUNDED' => 61, 'BASE_HIDDEN_TAX_REFUNDED' => 62, 'IS_NOMINAL' => 63, 'TAX_CANCELED' => 64, 'HIDDEN_TAX_CANCELED' => 65, 'TAX_REFUNDED' => 66, 'BASE_TAX_REFUNDED' => 67, 'DISCOUNT_REFUNDED' => 68, 'BASE_DISCOUNT_REFUNDED' => 69, 'GIFT_MESSAGE_ID' => 70, 'GIFT_MESSAGE_AVAILABLE' => 71, 'BASE_WEEE_TAX_APPLIED_AMOUNT' => 72, 'BASE_WEEE_TAX_APPLIED_ROW_AMNT' => 73, 'WEEE_TAX_APPLIED_AMOUNT' => 74, 'WEEE_TAX_APPLIED_ROW_AMOUNT' => 75, 'WEEE_TAX_APPLIED' => 76, 'WEEE_TAX_DISPOSITION' => 77, 'WEEE_TAX_ROW_DISPOSITION' => 78, 'BASE_WEEE_TAX_DISPOSITION' => 79, 'BASE_WEEE_TAX_ROW_DISPOSITION' => 80, 'CRC_ID' => 81, 'EVENT_ID' => 82, 'GIFTREGISTRY_ITEM_ID' => 83, 'GW_ID' => 84, 'GW_BASE_PRICE' => 85, 'GW_PRICE' => 86, 'GW_BASE_TAX_AMOUNT' => 87, 'GW_TAX_AMOUNT' => 88, 'GW_BASE_PRICE_INVOICED' => 89, 'GW_PRICE_INVOICED' => 90, 'GW_BASE_TAX_AMOUNT_INVOICED' => 91, 'GW_TAX_AMOUNT_INVOICED' => 92, 'GW_BASE_PRICE_REFUNDED' => 93, 'GW_PRICE_REFUNDED' => 94, 'GW_BASE_TAX_AMOUNT_REFUNDED' => 95, 'GW_TAX_AMOUNT_REFUNDED' => 96, 'QTY_RETURNED' => 97, 'QTY_REDEEMED' => 98, 'CONSULTANT' => 99, 'PARENT_PRODUCT_ID' => 100, 'QTY_TO_REDEEM' => 101, 'REWARDS_USED_DETAIL' => 102, ),
        BasePeer::TYPE_FIELDNAME => array ('item_id' => 0, 'order_id' => 1, 'parent_item_id' => 2, 'quote_item_id' => 3, 'store_id' => 4, 'created_at' => 5, 'updated_at' => 6, 'product_id' => 7, 'product_type' => 8, 'product_options' => 9, 'weight' => 10, 'is_virtual' => 11, 'sku' => 12, 'name' => 13, 'description' => 14, 'applied_rule_ids' => 15, 'additional_data' => 16, 'free_shipping' => 17, 'is_qty_decimal' => 18, 'no_discount' => 19, 'qty_backordered' => 20, 'qty_canceled' => 21, 'qty_invoiced' => 22, 'qty_ordered' => 23, 'qty_refunded' => 24, 'qty_shipped' => 25, 'base_cost' => 26, 'price' => 27, 'base_price' => 28, 'original_price' => 29, 'base_original_price' => 30, 'tax_percent' => 31, 'tax_amount' => 32, 'base_tax_amount' => 33, 'tax_invoiced' => 34, 'base_tax_invoiced' => 35, 'discount_percent' => 36, 'discount_amount' => 37, 'base_discount_amount' => 38, 'discount_invoiced' => 39, 'base_discount_invoiced' => 40, 'amount_refunded' => 41, 'base_amount_refunded' => 42, 'row_total' => 43, 'base_row_total' => 44, 'row_invoiced' => 45, 'base_row_invoiced' => 46, 'row_weight' => 47, 'base_tax_before_discount' => 48, 'tax_before_discount' => 49, 'ext_order_item_id' => 50, 'locked_do_invoice' => 51, 'locked_do_ship' => 52, 'price_incl_tax' => 53, 'base_price_incl_tax' => 54, 'row_total_incl_tax' => 55, 'base_row_total_incl_tax' => 56, 'hidden_tax_amount' => 57, 'base_hidden_tax_amount' => 58, 'hidden_tax_invoiced' => 59, 'base_hidden_tax_invoiced' => 60, 'hidden_tax_refunded' => 61, 'base_hidden_tax_refunded' => 62, 'is_nominal' => 63, 'tax_canceled' => 64, 'hidden_tax_canceled' => 65, 'tax_refunded' => 66, 'base_tax_refunded' => 67, 'discount_refunded' => 68, 'base_discount_refunded' => 69, 'gift_message_id' => 70, 'gift_message_available' => 71, 'base_weee_tax_applied_amount' => 72, 'base_weee_tax_applied_row_amnt' => 73, 'weee_tax_applied_amount' => 74, 'weee_tax_applied_row_amount' => 75, 'weee_tax_applied' => 76, 'weee_tax_disposition' => 77, 'weee_tax_row_disposition' => 78, 'base_weee_tax_disposition' => 79, 'base_weee_tax_row_disposition' => 80, 'crc_id' => 81, 'event_id' => 82, 'giftregistry_item_id' => 83, 'gw_id' => 84, 'gw_base_price' => 85, 'gw_price' => 86, 'gw_base_tax_amount' => 87, 'gw_tax_amount' => 88, 'gw_base_price_invoiced' => 89, 'gw_price_invoiced' => 90, 'gw_base_tax_amount_invoiced' => 91, 'gw_tax_amount_invoiced' => 92, 'gw_base_price_refunded' => 93, 'gw_price_refunded' => 94, 'gw_base_tax_amount_refunded' => 95, 'gw_tax_amount_refunded' => 96, 'qty_returned' => 97, 'qty_redeemed' => 98, 'consultant' => 99, 'parent_product_id' => 100, 'qty_to_redeem' => 101, 'rewards_used_detail' => 102, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, )
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
        $toNames = SalesFlatOrderItemPeer::getFieldNames($toType);
        $key = isset(SalesFlatOrderItemPeer::$fieldKeys[$fromType][$name]) ? SalesFlatOrderItemPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SalesFlatOrderItemPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SalesFlatOrderItemPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SalesFlatOrderItemPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SalesFlatOrderItemPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SalesFlatOrderItemPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::ITEM_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::ORDER_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::PARENT_ITEM_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::QUOTE_ITEM_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::STORE_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::CREATED_AT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::UPDATED_AT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::PRODUCT_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::PRODUCT_TYPE);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::PRODUCT_OPTIONS);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::WEIGHT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::IS_VIRTUAL);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::SKU);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::NAME);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::DESCRIPTION);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::APPLIED_RULE_IDS);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::ADDITIONAL_DATA);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::FREE_SHIPPING);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::IS_QTY_DECIMAL);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::NO_DISCOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::QTY_BACKORDERED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::QTY_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::QTY_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::QTY_ORDERED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::QTY_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::QTY_SHIPPED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_COST);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::PRICE);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::ORIGINAL_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_ORIGINAL_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::TAX_PERCENT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::DISCOUNT_PERCENT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::DISCOUNT_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_DISCOUNT_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::DISCOUNT_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_DISCOUNT_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::AMOUNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_AMOUNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::ROW_TOTAL);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_ROW_TOTAL);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::ROW_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_ROW_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::ROW_WEIGHT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_TAX_BEFORE_DISCOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::TAX_BEFORE_DISCOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::EXT_ORDER_ITEM_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::LOCKED_DO_INVOICE);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::LOCKED_DO_SHIP);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::PRICE_INCL_TAX);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_PRICE_INCL_TAX);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::ROW_TOTAL_INCL_TAX);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_ROW_TOTAL_INCL_TAX);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::HIDDEN_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::HIDDEN_TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::HIDDEN_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::IS_NOMINAL);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::TAX_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::HIDDEN_TAX_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::DISCOUNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_DISCOUNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GIFT_MESSAGE_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GIFT_MESSAGE_AVAILABLE);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_ROW_AMNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_ROW_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::WEEE_TAX_DISPOSITION);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::WEEE_TAX_ROW_DISPOSITION);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_WEEE_TAX_DISPOSITION);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::BASE_WEEE_TAX_ROW_DISPOSITION);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::CRC_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::EVENT_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GIFTREGISTRY_ITEM_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_BASE_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_BASE_PRICE_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_PRICE_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_BASE_PRICE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_PRICE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::QTY_RETURNED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::QTY_REDEEMED);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::CONSULTANT);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::PARENT_PRODUCT_ID);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::QTY_TO_REDEEM);
            $criteria->addSelectColumn(SalesFlatOrderItemPeer::REWARDS_USED_DETAIL);
        } else {
            $criteria->addSelectColumn($alias . '.item_id');
            $criteria->addSelectColumn($alias . '.order_id');
            $criteria->addSelectColumn($alias . '.parent_item_id');
            $criteria->addSelectColumn($alias . '.quote_item_id');
            $criteria->addSelectColumn($alias . '.store_id');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.product_id');
            $criteria->addSelectColumn($alias . '.product_type');
            $criteria->addSelectColumn($alias . '.product_options');
            $criteria->addSelectColumn($alias . '.weight');
            $criteria->addSelectColumn($alias . '.is_virtual');
            $criteria->addSelectColumn($alias . '.sku');
            $criteria->addSelectColumn($alias . '.name');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.applied_rule_ids');
            $criteria->addSelectColumn($alias . '.additional_data');
            $criteria->addSelectColumn($alias . '.free_shipping');
            $criteria->addSelectColumn($alias . '.is_qty_decimal');
            $criteria->addSelectColumn($alias . '.no_discount');
            $criteria->addSelectColumn($alias . '.qty_backordered');
            $criteria->addSelectColumn($alias . '.qty_canceled');
            $criteria->addSelectColumn($alias . '.qty_invoiced');
            $criteria->addSelectColumn($alias . '.qty_ordered');
            $criteria->addSelectColumn($alias . '.qty_refunded');
            $criteria->addSelectColumn($alias . '.qty_shipped');
            $criteria->addSelectColumn($alias . '.base_cost');
            $criteria->addSelectColumn($alias . '.price');
            $criteria->addSelectColumn($alias . '.base_price');
            $criteria->addSelectColumn($alias . '.original_price');
            $criteria->addSelectColumn($alias . '.base_original_price');
            $criteria->addSelectColumn($alias . '.tax_percent');
            $criteria->addSelectColumn($alias . '.tax_amount');
            $criteria->addSelectColumn($alias . '.base_tax_amount');
            $criteria->addSelectColumn($alias . '.tax_invoiced');
            $criteria->addSelectColumn($alias . '.base_tax_invoiced');
            $criteria->addSelectColumn($alias . '.discount_percent');
            $criteria->addSelectColumn($alias . '.discount_amount');
            $criteria->addSelectColumn($alias . '.base_discount_amount');
            $criteria->addSelectColumn($alias . '.discount_invoiced');
            $criteria->addSelectColumn($alias . '.base_discount_invoiced');
            $criteria->addSelectColumn($alias . '.amount_refunded');
            $criteria->addSelectColumn($alias . '.base_amount_refunded');
            $criteria->addSelectColumn($alias . '.row_total');
            $criteria->addSelectColumn($alias . '.base_row_total');
            $criteria->addSelectColumn($alias . '.row_invoiced');
            $criteria->addSelectColumn($alias . '.base_row_invoiced');
            $criteria->addSelectColumn($alias . '.row_weight');
            $criteria->addSelectColumn($alias . '.base_tax_before_discount');
            $criteria->addSelectColumn($alias . '.tax_before_discount');
            $criteria->addSelectColumn($alias . '.ext_order_item_id');
            $criteria->addSelectColumn($alias . '.locked_do_invoice');
            $criteria->addSelectColumn($alias . '.locked_do_ship');
            $criteria->addSelectColumn($alias . '.price_incl_tax');
            $criteria->addSelectColumn($alias . '.base_price_incl_tax');
            $criteria->addSelectColumn($alias . '.row_total_incl_tax');
            $criteria->addSelectColumn($alias . '.base_row_total_incl_tax');
            $criteria->addSelectColumn($alias . '.hidden_tax_amount');
            $criteria->addSelectColumn($alias . '.base_hidden_tax_amount');
            $criteria->addSelectColumn($alias . '.hidden_tax_invoiced');
            $criteria->addSelectColumn($alias . '.base_hidden_tax_invoiced');
            $criteria->addSelectColumn($alias . '.hidden_tax_refunded');
            $criteria->addSelectColumn($alias . '.base_hidden_tax_refunded');
            $criteria->addSelectColumn($alias . '.is_nominal');
            $criteria->addSelectColumn($alias . '.tax_canceled');
            $criteria->addSelectColumn($alias . '.hidden_tax_canceled');
            $criteria->addSelectColumn($alias . '.tax_refunded');
            $criteria->addSelectColumn($alias . '.base_tax_refunded');
            $criteria->addSelectColumn($alias . '.discount_refunded');
            $criteria->addSelectColumn($alias . '.base_discount_refunded');
            $criteria->addSelectColumn($alias . '.gift_message_id');
            $criteria->addSelectColumn($alias . '.gift_message_available');
            $criteria->addSelectColumn($alias . '.base_weee_tax_applied_amount');
            $criteria->addSelectColumn($alias . '.base_weee_tax_applied_row_amnt');
            $criteria->addSelectColumn($alias . '.weee_tax_applied_amount');
            $criteria->addSelectColumn($alias . '.weee_tax_applied_row_amount');
            $criteria->addSelectColumn($alias . '.weee_tax_applied');
            $criteria->addSelectColumn($alias . '.weee_tax_disposition');
            $criteria->addSelectColumn($alias . '.weee_tax_row_disposition');
            $criteria->addSelectColumn($alias . '.base_weee_tax_disposition');
            $criteria->addSelectColumn($alias . '.base_weee_tax_row_disposition');
            $criteria->addSelectColumn($alias . '.crc_id');
            $criteria->addSelectColumn($alias . '.event_id');
            $criteria->addSelectColumn($alias . '.giftregistry_item_id');
            $criteria->addSelectColumn($alias . '.gw_id');
            $criteria->addSelectColumn($alias . '.gw_base_price');
            $criteria->addSelectColumn($alias . '.gw_price');
            $criteria->addSelectColumn($alias . '.gw_base_tax_amount');
            $criteria->addSelectColumn($alias . '.gw_tax_amount');
            $criteria->addSelectColumn($alias . '.gw_base_price_invoiced');
            $criteria->addSelectColumn($alias . '.gw_price_invoiced');
            $criteria->addSelectColumn($alias . '.gw_base_tax_amount_invoiced');
            $criteria->addSelectColumn($alias . '.gw_tax_amount_invoiced');
            $criteria->addSelectColumn($alias . '.gw_base_price_refunded');
            $criteria->addSelectColumn($alias . '.gw_price_refunded');
            $criteria->addSelectColumn($alias . '.gw_base_tax_amount_refunded');
            $criteria->addSelectColumn($alias . '.gw_tax_amount_refunded');
            $criteria->addSelectColumn($alias . '.qty_returned');
            $criteria->addSelectColumn($alias . '.qty_redeemed');
            $criteria->addSelectColumn($alias . '.consultant');
            $criteria->addSelectColumn($alias . '.parent_product_id');
            $criteria->addSelectColumn($alias . '.qty_to_redeem');
            $criteria->addSelectColumn($alias . '.rewards_used_detail');
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
        $criteria->setPrimaryTableName(SalesFlatOrderItemPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderItemPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return SalesFlatOrderItem
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SalesFlatOrderItemPeer::doSelect($critcopy, $con);
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
        return SalesFlatOrderItemPeer::populateObjects(SalesFlatOrderItemPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SalesFlatOrderItemPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);

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
     * @param SalesFlatOrderItem $obj A SalesFlatOrderItem object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getItemId();
            } // if key === null
            SalesFlatOrderItemPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A SalesFlatOrderItem object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SalesFlatOrderItem) {
                $key = (string) $value->getItemId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SalesFlatOrderItem object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SalesFlatOrderItemPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return SalesFlatOrderItem Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SalesFlatOrderItemPeer::$instances[$key])) {
                return SalesFlatOrderItemPeer::$instances[$key];
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
        foreach (SalesFlatOrderItemPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SalesFlatOrderItemPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to sales_flat_order_item
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
        $cls = SalesFlatOrderItemPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SalesFlatOrderItemPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SalesFlatOrderItemPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesFlatOrderItemPeer::addInstanceToPool($obj, $key);
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
     * @return array (SalesFlatOrderItem object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SalesFlatOrderItemPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SalesFlatOrderItemPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SalesFlatOrderItemPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesFlatOrderItemPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SalesFlatOrderItemPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related SalesFlatOrder table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSalesFlatOrder(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SalesFlatOrderItemPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderItemPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SalesFlatOrderItemPeer::ORDER_ID, SalesFlatOrderPeer::ENTITY_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CoreStore table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCoreStore(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SalesFlatOrderItemPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderItemPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SalesFlatOrderItemPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);

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
     * Selects a collection of SalesFlatOrderItem objects pre-filled with their SalesFlatOrder objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of SalesFlatOrderItem objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSalesFlatOrder(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);
        }

        SalesFlatOrderItemPeer::addSelectColumns($criteria);
        $startcol = SalesFlatOrderItemPeer::NUM_HYDRATE_COLUMNS;
        SalesFlatOrderPeer::addSelectColumns($criteria);

        $criteria->addJoin(SalesFlatOrderItemPeer::ORDER_ID, SalesFlatOrderPeer::ENTITY_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SalesFlatOrderItemPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SalesFlatOrderItemPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SalesFlatOrderItemPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SalesFlatOrderItemPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SalesFlatOrderPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SalesFlatOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SalesFlatOrderPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (SalesFlatOrderItem) to $obj2 (SalesFlatOrder)
                $obj2->addSalesFlatOrderItem($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of SalesFlatOrderItem objects pre-filled with their CoreStore objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of SalesFlatOrderItem objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCoreStore(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);
        }

        SalesFlatOrderItemPeer::addSelectColumns($criteria);
        $startcol = SalesFlatOrderItemPeer::NUM_HYDRATE_COLUMNS;
        CoreStorePeer::addSelectColumns($criteria);

        $criteria->addJoin(SalesFlatOrderItemPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SalesFlatOrderItemPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SalesFlatOrderItemPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SalesFlatOrderItemPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SalesFlatOrderItemPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CoreStorePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CoreStorePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CoreStorePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CoreStorePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (SalesFlatOrderItem) to $obj2 (CoreStore)
                $obj2->addSalesFlatOrderItem($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SalesFlatOrderItemPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderItemPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SalesFlatOrderItemPeer::ORDER_ID, SalesFlatOrderPeer::ENTITY_ID, $join_behavior);

        $criteria->addJoin(SalesFlatOrderItemPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);

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
     * Selects a collection of SalesFlatOrderItem objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of SalesFlatOrderItem objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);
        }

        SalesFlatOrderItemPeer::addSelectColumns($criteria);
        $startcol2 = SalesFlatOrderItemPeer::NUM_HYDRATE_COLUMNS;

        SalesFlatOrderPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS;

        CoreStorePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CoreStorePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SalesFlatOrderItemPeer::ORDER_ID, SalesFlatOrderPeer::ENTITY_ID, $join_behavior);

        $criteria->addJoin(SalesFlatOrderItemPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SalesFlatOrderItemPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SalesFlatOrderItemPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SalesFlatOrderItemPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SalesFlatOrderItemPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined SalesFlatOrder rows

            $key2 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = SalesFlatOrderPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SalesFlatOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SalesFlatOrderPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (SalesFlatOrderItem) to the collection in $obj2 (SalesFlatOrder)
                $obj2->addSalesFlatOrderItem($obj1);
            } // if joined row not null

            // Add objects for joined CoreStore rows

            $key3 = CoreStorePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CoreStorePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CoreStorePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CoreStorePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (SalesFlatOrderItem) to the collection in $obj3 (CoreStore)
                $obj3->addSalesFlatOrderItem($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related SalesFlatOrder table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSalesFlatOrder(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SalesFlatOrderItemPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderItemPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SalesFlatOrderItemPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CoreStore table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCoreStore(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SalesFlatOrderItemPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderItemPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SalesFlatOrderItemPeer::ORDER_ID, SalesFlatOrderPeer::ENTITY_ID, $join_behavior);

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
     * Selects a collection of SalesFlatOrderItem objects pre-filled with all related objects except SalesFlatOrder.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of SalesFlatOrderItem objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSalesFlatOrder(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);
        }

        SalesFlatOrderItemPeer::addSelectColumns($criteria);
        $startcol2 = SalesFlatOrderItemPeer::NUM_HYDRATE_COLUMNS;

        CoreStorePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CoreStorePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SalesFlatOrderItemPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SalesFlatOrderItemPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SalesFlatOrderItemPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SalesFlatOrderItemPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SalesFlatOrderItemPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CoreStore rows

                $key2 = CoreStorePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CoreStorePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CoreStorePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CoreStorePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (SalesFlatOrderItem) to the collection in $obj2 (CoreStore)
                $obj2->addSalesFlatOrderItem($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of SalesFlatOrderItem objects pre-filled with all related objects except CoreStore.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of SalesFlatOrderItem objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCoreStore(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);
        }

        SalesFlatOrderItemPeer::addSelectColumns($criteria);
        $startcol2 = SalesFlatOrderItemPeer::NUM_HYDRATE_COLUMNS;

        SalesFlatOrderPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SalesFlatOrderItemPeer::ORDER_ID, SalesFlatOrderPeer::ENTITY_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SalesFlatOrderItemPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SalesFlatOrderItemPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SalesFlatOrderItemPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SalesFlatOrderItemPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined SalesFlatOrder rows

                $key2 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = SalesFlatOrderPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = SalesFlatOrderPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SalesFlatOrderPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (SalesFlatOrderItem) to the collection in $obj2 (SalesFlatOrder)
                $obj2->addSalesFlatOrderItem($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        return Propel::getDatabaseMap(SalesFlatOrderItemPeer::DATABASE_NAME)->getTable(SalesFlatOrderItemPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSalesFlatOrderItemPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSalesFlatOrderItemPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SalesFlatOrderItemTableMap());
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
        return SalesFlatOrderItemPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SalesFlatOrderItem or Criteria object.
     *
     * @param      mixed $values Criteria or SalesFlatOrderItem object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SalesFlatOrderItem object
        }

        if ($criteria->containsKey(SalesFlatOrderItemPeer::ITEM_ID) && $criteria->keyContainsValue(SalesFlatOrderItemPeer::ITEM_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SalesFlatOrderItemPeer::ITEM_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a SalesFlatOrderItem or Criteria object.
     *
     * @param      mixed $values Criteria or SalesFlatOrderItem object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SalesFlatOrderItemPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SalesFlatOrderItemPeer::ITEM_ID);
            $value = $criteria->remove(SalesFlatOrderItemPeer::ITEM_ID);
            if ($value) {
                $selectCriteria->add(SalesFlatOrderItemPeer::ITEM_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SalesFlatOrderItemPeer::TABLE_NAME);
            }

        } else { // $values is SalesFlatOrderItem object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the sales_flat_order_item table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SalesFlatOrderItemPeer::TABLE_NAME, $con, SalesFlatOrderItemPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesFlatOrderItemPeer::clearInstancePool();
            SalesFlatOrderItemPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesFlatOrderItem or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SalesFlatOrderItem object or primary key or array of primary keys
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
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SalesFlatOrderItemPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SalesFlatOrderItem) { // it's a model object
            // invalidate the cache for this single object
            SalesFlatOrderItemPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesFlatOrderItemPeer::DATABASE_NAME);
            $criteria->add(SalesFlatOrderItemPeer::ITEM_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SalesFlatOrderItemPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderItemPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SalesFlatOrderItemPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SalesFlatOrderItem object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param SalesFlatOrderItem $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SalesFlatOrderItemPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SalesFlatOrderItemPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SalesFlatOrderItemPeer::DATABASE_NAME, SalesFlatOrderItemPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return SalesFlatOrderItem
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SalesFlatOrderItemPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SalesFlatOrderItemPeer::DATABASE_NAME);
        $criteria->add(SalesFlatOrderItemPeer::ITEM_ID, $pk);

        $v = SalesFlatOrderItemPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return SalesFlatOrderItem[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SalesFlatOrderItemPeer::DATABASE_NAME);
            $criteria->add(SalesFlatOrderItemPeer::ITEM_ID, $pks, Criteria::IN);
            $objs = SalesFlatOrderItemPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSalesFlatOrderItemPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSalesFlatOrderItemPeer::buildTableMap();

