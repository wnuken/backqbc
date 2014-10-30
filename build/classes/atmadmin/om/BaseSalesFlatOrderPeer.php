<?php


/**
 * Base static class for performing query and update operations on the 'sales_flat_order' table.
 *
 *
 *
 * @package propel.generator.atmadmin.om
 */
abstract class BaseSalesFlatOrderPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'atmadmin';

    /** the table name for this class */
    const TABLE_NAME = 'sales_flat_order';

    /** the related Propel class for this table */
    const OM_CLASS = 'SalesFlatOrder';

    /** the related TableMap class for this table */
    const TM_CLASS = 'SalesFlatOrderTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 230;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 230;

    /** the column name for the entity_id field */
    const ENTITY_ID = 'sales_flat_order.entity_id';

    /** the column name for the state field */
    const STATE = 'sales_flat_order.state';

    /** the column name for the status field */
    const STATUS = 'sales_flat_order.status';

    /** the column name for the coupon_code field */
    const COUPON_CODE = 'sales_flat_order.coupon_code';

    /** the column name for the protect_code field */
    const PROTECT_CODE = 'sales_flat_order.protect_code';

    /** the column name for the shipping_description field */
    const SHIPPING_DESCRIPTION = 'sales_flat_order.shipping_description';

    /** the column name for the is_virtual field */
    const IS_VIRTUAL = 'sales_flat_order.is_virtual';

    /** the column name for the store_id field */
    const STORE_ID = 'sales_flat_order.store_id';

    /** the column name for the customer_id field */
    const CUSTOMER_ID = 'sales_flat_order.customer_id';

    /** the column name for the base_discount_amount field */
    const BASE_DISCOUNT_AMOUNT = 'sales_flat_order.base_discount_amount';

    /** the column name for the base_discount_canceled field */
    const BASE_DISCOUNT_CANCELED = 'sales_flat_order.base_discount_canceled';

    /** the column name for the base_discount_invoiced field */
    const BASE_DISCOUNT_INVOICED = 'sales_flat_order.base_discount_invoiced';

    /** the column name for the base_discount_refunded field */
    const BASE_DISCOUNT_REFUNDED = 'sales_flat_order.base_discount_refunded';

    /** the column name for the base_grand_total field */
    const BASE_GRAND_TOTAL = 'sales_flat_order.base_grand_total';

    /** the column name for the base_shipping_amount field */
    const BASE_SHIPPING_AMOUNT = 'sales_flat_order.base_shipping_amount';

    /** the column name for the base_shipping_canceled field */
    const BASE_SHIPPING_CANCELED = 'sales_flat_order.base_shipping_canceled';

    /** the column name for the base_shipping_invoiced field */
    const BASE_SHIPPING_INVOICED = 'sales_flat_order.base_shipping_invoiced';

    /** the column name for the base_shipping_refunded field */
    const BASE_SHIPPING_REFUNDED = 'sales_flat_order.base_shipping_refunded';

    /** the column name for the base_shipping_tax_amount field */
    const BASE_SHIPPING_TAX_AMOUNT = 'sales_flat_order.base_shipping_tax_amount';

    /** the column name for the base_shipping_tax_refunded field */
    const BASE_SHIPPING_TAX_REFUNDED = 'sales_flat_order.base_shipping_tax_refunded';

    /** the column name for the base_subtotal field */
    const BASE_SUBTOTAL = 'sales_flat_order.base_subtotal';

    /** the column name for the base_subtotal_canceled field */
    const BASE_SUBTOTAL_CANCELED = 'sales_flat_order.base_subtotal_canceled';

    /** the column name for the base_subtotal_invoiced field */
    const BASE_SUBTOTAL_INVOICED = 'sales_flat_order.base_subtotal_invoiced';

    /** the column name for the base_subtotal_refunded field */
    const BASE_SUBTOTAL_REFUNDED = 'sales_flat_order.base_subtotal_refunded';

    /** the column name for the base_tax_amount field */
    const BASE_TAX_AMOUNT = 'sales_flat_order.base_tax_amount';

    /** the column name for the base_tax_canceled field */
    const BASE_TAX_CANCELED = 'sales_flat_order.base_tax_canceled';

    /** the column name for the base_tax_invoiced field */
    const BASE_TAX_INVOICED = 'sales_flat_order.base_tax_invoiced';

    /** the column name for the base_tax_refunded field */
    const BASE_TAX_REFUNDED = 'sales_flat_order.base_tax_refunded';

    /** the column name for the base_to_global_rate field */
    const BASE_TO_GLOBAL_RATE = 'sales_flat_order.base_to_global_rate';

    /** the column name for the base_to_order_rate field */
    const BASE_TO_ORDER_RATE = 'sales_flat_order.base_to_order_rate';

    /** the column name for the base_total_canceled field */
    const BASE_TOTAL_CANCELED = 'sales_flat_order.base_total_canceled';

    /** the column name for the base_total_invoiced field */
    const BASE_TOTAL_INVOICED = 'sales_flat_order.base_total_invoiced';

    /** the column name for the base_total_invoiced_cost field */
    const BASE_TOTAL_INVOICED_COST = 'sales_flat_order.base_total_invoiced_cost';

    /** the column name for the base_total_offline_refunded field */
    const BASE_TOTAL_OFFLINE_REFUNDED = 'sales_flat_order.base_total_offline_refunded';

    /** the column name for the base_total_online_refunded field */
    const BASE_TOTAL_ONLINE_REFUNDED = 'sales_flat_order.base_total_online_refunded';

    /** the column name for the base_total_paid field */
    const BASE_TOTAL_PAID = 'sales_flat_order.base_total_paid';

    /** the column name for the base_total_qty_ordered field */
    const BASE_TOTAL_QTY_ORDERED = 'sales_flat_order.base_total_qty_ordered';

    /** the column name for the base_total_refunded field */
    const BASE_TOTAL_REFUNDED = 'sales_flat_order.base_total_refunded';

    /** the column name for the discount_amount field */
    const DISCOUNT_AMOUNT = 'sales_flat_order.discount_amount';

    /** the column name for the discount_canceled field */
    const DISCOUNT_CANCELED = 'sales_flat_order.discount_canceled';

    /** the column name for the discount_invoiced field */
    const DISCOUNT_INVOICED = 'sales_flat_order.discount_invoiced';

    /** the column name for the discount_refunded field */
    const DISCOUNT_REFUNDED = 'sales_flat_order.discount_refunded';

    /** the column name for the grand_total field */
    const GRAND_TOTAL = 'sales_flat_order.grand_total';

    /** the column name for the shipping_amount field */
    const SHIPPING_AMOUNT = 'sales_flat_order.shipping_amount';

    /** the column name for the shipping_canceled field */
    const SHIPPING_CANCELED = 'sales_flat_order.shipping_canceled';

    /** the column name for the shipping_invoiced field */
    const SHIPPING_INVOICED = 'sales_flat_order.shipping_invoiced';

    /** the column name for the shipping_refunded field */
    const SHIPPING_REFUNDED = 'sales_flat_order.shipping_refunded';

    /** the column name for the shipping_tax_amount field */
    const SHIPPING_TAX_AMOUNT = 'sales_flat_order.shipping_tax_amount';

    /** the column name for the shipping_tax_refunded field */
    const SHIPPING_TAX_REFUNDED = 'sales_flat_order.shipping_tax_refunded';

    /** the column name for the store_to_base_rate field */
    const STORE_TO_BASE_RATE = 'sales_flat_order.store_to_base_rate';

    /** the column name for the store_to_order_rate field */
    const STORE_TO_ORDER_RATE = 'sales_flat_order.store_to_order_rate';

    /** the column name for the subtotal field */
    const SUBTOTAL = 'sales_flat_order.subtotal';

    /** the column name for the subtotal_canceled field */
    const SUBTOTAL_CANCELED = 'sales_flat_order.subtotal_canceled';

    /** the column name for the subtotal_invoiced field */
    const SUBTOTAL_INVOICED = 'sales_flat_order.subtotal_invoiced';

    /** the column name for the subtotal_refunded field */
    const SUBTOTAL_REFUNDED = 'sales_flat_order.subtotal_refunded';

    /** the column name for the tax_amount field */
    const TAX_AMOUNT = 'sales_flat_order.tax_amount';

    /** the column name for the tax_canceled field */
    const TAX_CANCELED = 'sales_flat_order.tax_canceled';

    /** the column name for the tax_invoiced field */
    const TAX_INVOICED = 'sales_flat_order.tax_invoiced';

    /** the column name for the tax_refunded field */
    const TAX_REFUNDED = 'sales_flat_order.tax_refunded';

    /** the column name for the total_canceled field */
    const TOTAL_CANCELED = 'sales_flat_order.total_canceled';

    /** the column name for the total_invoiced field */
    const TOTAL_INVOICED = 'sales_flat_order.total_invoiced';

    /** the column name for the total_offline_refunded field */
    const TOTAL_OFFLINE_REFUNDED = 'sales_flat_order.total_offline_refunded';

    /** the column name for the total_online_refunded field */
    const TOTAL_ONLINE_REFUNDED = 'sales_flat_order.total_online_refunded';

    /** the column name for the total_paid field */
    const TOTAL_PAID = 'sales_flat_order.total_paid';

    /** the column name for the total_qty_ordered field */
    const TOTAL_QTY_ORDERED = 'sales_flat_order.total_qty_ordered';

    /** the column name for the total_refunded field */
    const TOTAL_REFUNDED = 'sales_flat_order.total_refunded';

    /** the column name for the can_ship_partially field */
    const CAN_SHIP_PARTIALLY = 'sales_flat_order.can_ship_partially';

    /** the column name for the can_ship_partially_item field */
    const CAN_SHIP_PARTIALLY_ITEM = 'sales_flat_order.can_ship_partially_item';

    /** the column name for the customer_is_guest field */
    const CUSTOMER_IS_GUEST = 'sales_flat_order.customer_is_guest';

    /** the column name for the customer_note_notify field */
    const CUSTOMER_NOTE_NOTIFY = 'sales_flat_order.customer_note_notify';

    /** the column name for the billing_address_id field */
    const BILLING_ADDRESS_ID = 'sales_flat_order.billing_address_id';

    /** the column name for the customer_group_id field */
    const CUSTOMER_GROUP_ID = 'sales_flat_order.customer_group_id';

    /** the column name for the edit_increment field */
    const EDIT_INCREMENT = 'sales_flat_order.edit_increment';

    /** the column name for the email_sent field */
    const EMAIL_SENT = 'sales_flat_order.email_sent';

    /** the column name for the forced_shipment_with_invoice field */
    const FORCED_SHIPMENT_WITH_INVOICE = 'sales_flat_order.forced_shipment_with_invoice';

    /** the column name for the payment_auth_expiration field */
    const PAYMENT_AUTH_EXPIRATION = 'sales_flat_order.payment_auth_expiration';

    /** the column name for the quote_address_id field */
    const QUOTE_ADDRESS_ID = 'sales_flat_order.quote_address_id';

    /** the column name for the quote_id field */
    const QUOTE_ID = 'sales_flat_order.quote_id';

    /** the column name for the shipping_address_id field */
    const SHIPPING_ADDRESS_ID = 'sales_flat_order.shipping_address_id';

    /** the column name for the adjustment_negative field */
    const ADJUSTMENT_NEGATIVE = 'sales_flat_order.adjustment_negative';

    /** the column name for the adjustment_positive field */
    const ADJUSTMENT_POSITIVE = 'sales_flat_order.adjustment_positive';

    /** the column name for the base_adjustment_negative field */
    const BASE_ADJUSTMENT_NEGATIVE = 'sales_flat_order.base_adjustment_negative';

    /** the column name for the base_adjustment_positive field */
    const BASE_ADJUSTMENT_POSITIVE = 'sales_flat_order.base_adjustment_positive';

    /** the column name for the base_shipping_discount_amount field */
    const BASE_SHIPPING_DISCOUNT_AMOUNT = 'sales_flat_order.base_shipping_discount_amount';

    /** the column name for the base_subtotal_incl_tax field */
    const BASE_SUBTOTAL_INCL_TAX = 'sales_flat_order.base_subtotal_incl_tax';

    /** the column name for the base_total_due field */
    const BASE_TOTAL_DUE = 'sales_flat_order.base_total_due';

    /** the column name for the payment_authorization_amount field */
    const PAYMENT_AUTHORIZATION_AMOUNT = 'sales_flat_order.payment_authorization_amount';

    /** the column name for the shipping_discount_amount field */
    const SHIPPING_DISCOUNT_AMOUNT = 'sales_flat_order.shipping_discount_amount';

    /** the column name for the subtotal_incl_tax field */
    const SUBTOTAL_INCL_TAX = 'sales_flat_order.subtotal_incl_tax';

    /** the column name for the total_due field */
    const TOTAL_DUE = 'sales_flat_order.total_due';

    /** the column name for the weight field */
    const WEIGHT = 'sales_flat_order.weight';

    /** the column name for the customer_dob field */
    const CUSTOMER_DOB = 'sales_flat_order.customer_dob';

    /** the column name for the increment_id field */
    const INCREMENT_ID = 'sales_flat_order.increment_id';

    /** the column name for the applied_rule_ids field */
    const APPLIED_RULE_IDS = 'sales_flat_order.applied_rule_ids';

    /** the column name for the base_currency_code field */
    const BASE_CURRENCY_CODE = 'sales_flat_order.base_currency_code';

    /** the column name for the customer_email field */
    const CUSTOMER_EMAIL = 'sales_flat_order.customer_email';

    /** the column name for the customer_firstname field */
    const CUSTOMER_FIRSTNAME = 'sales_flat_order.customer_firstname';

    /** the column name for the customer_lastname field */
    const CUSTOMER_LASTNAME = 'sales_flat_order.customer_lastname';

    /** the column name for the customer_middlename field */
    const CUSTOMER_MIDDLENAME = 'sales_flat_order.customer_middlename';

    /** the column name for the customer_prefix field */
    const CUSTOMER_PREFIX = 'sales_flat_order.customer_prefix';

    /** the column name for the customer_suffix field */
    const CUSTOMER_SUFFIX = 'sales_flat_order.customer_suffix';

    /** the column name for the customer_taxvat field */
    const CUSTOMER_TAXVAT = 'sales_flat_order.customer_taxvat';

    /** the column name for the discount_description field */
    const DISCOUNT_DESCRIPTION = 'sales_flat_order.discount_description';

    /** the column name for the ext_customer_id field */
    const EXT_CUSTOMER_ID = 'sales_flat_order.ext_customer_id';

    /** the column name for the ext_order_id field */
    const EXT_ORDER_ID = 'sales_flat_order.ext_order_id';

    /** the column name for the global_currency_code field */
    const GLOBAL_CURRENCY_CODE = 'sales_flat_order.global_currency_code';

    /** the column name for the hold_before_state field */
    const HOLD_BEFORE_STATE = 'sales_flat_order.hold_before_state';

    /** the column name for the hold_before_status field */
    const HOLD_BEFORE_STATUS = 'sales_flat_order.hold_before_status';

    /** the column name for the order_currency_code field */
    const ORDER_CURRENCY_CODE = 'sales_flat_order.order_currency_code';

    /** the column name for the original_increment_id field */
    const ORIGINAL_INCREMENT_ID = 'sales_flat_order.original_increment_id';

    /** the column name for the relation_child_id field */
    const RELATION_CHILD_ID = 'sales_flat_order.relation_child_id';

    /** the column name for the relation_child_real_id field */
    const RELATION_CHILD_REAL_ID = 'sales_flat_order.relation_child_real_id';

    /** the column name for the relation_parent_id field */
    const RELATION_PARENT_ID = 'sales_flat_order.relation_parent_id';

    /** the column name for the relation_parent_real_id field */
    const RELATION_PARENT_REAL_ID = 'sales_flat_order.relation_parent_real_id';

    /** the column name for the remote_ip field */
    const REMOTE_IP = 'sales_flat_order.remote_ip';

    /** the column name for the shipping_method field */
    const SHIPPING_METHOD = 'sales_flat_order.shipping_method';

    /** the column name for the store_currency_code field */
    const STORE_CURRENCY_CODE = 'sales_flat_order.store_currency_code';

    /** the column name for the store_name field */
    const STORE_NAME = 'sales_flat_order.store_name';

    /** the column name for the x_forwarded_for field */
    const X_FORWARDED_FOR = 'sales_flat_order.x_forwarded_for';

    /** the column name for the customer_note field */
    const CUSTOMER_NOTE = 'sales_flat_order.customer_note';

    /** the column name for the created_at field */
    const CREATED_AT = 'sales_flat_order.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'sales_flat_order.updated_at';

    /** the column name for the total_item_count field */
    const TOTAL_ITEM_COUNT = 'sales_flat_order.total_item_count';

    /** the column name for the customer_gender field */
    const CUSTOMER_GENDER = 'sales_flat_order.customer_gender';

    /** the column name for the hidden_tax_amount field */
    const HIDDEN_TAX_AMOUNT = 'sales_flat_order.hidden_tax_amount';

    /** the column name for the base_hidden_tax_amount field */
    const BASE_HIDDEN_TAX_AMOUNT = 'sales_flat_order.base_hidden_tax_amount';

    /** the column name for the shipping_hidden_tax_amount field */
    const SHIPPING_HIDDEN_TAX_AMOUNT = 'sales_flat_order.shipping_hidden_tax_amount';

    /** the column name for the base_shipping_hidden_tax_amnt field */
    const BASE_SHIPPING_HIDDEN_TAX_AMNT = 'sales_flat_order.base_shipping_hidden_tax_amnt';

    /** the column name for the hidden_tax_invoiced field */
    const HIDDEN_TAX_INVOICED = 'sales_flat_order.hidden_tax_invoiced';

    /** the column name for the base_hidden_tax_invoiced field */
    const BASE_HIDDEN_TAX_INVOICED = 'sales_flat_order.base_hidden_tax_invoiced';

    /** the column name for the hidden_tax_refunded field */
    const HIDDEN_TAX_REFUNDED = 'sales_flat_order.hidden_tax_refunded';

    /** the column name for the base_hidden_tax_refunded field */
    const BASE_HIDDEN_TAX_REFUNDED = 'sales_flat_order.base_hidden_tax_refunded';

    /** the column name for the shipping_incl_tax field */
    const SHIPPING_INCL_TAX = 'sales_flat_order.shipping_incl_tax';

    /** the column name for the base_shipping_incl_tax field */
    const BASE_SHIPPING_INCL_TAX = 'sales_flat_order.base_shipping_incl_tax';

    /** the column name for the coupon_rule_name field */
    const COUPON_RULE_NAME = 'sales_flat_order.coupon_rule_name';

    /** the column name for the paypal_ipn_customer_notified field */
    const PAYPAL_IPN_CUSTOMER_NOTIFIED = 'sales_flat_order.paypal_ipn_customer_notified';

    /** the column name for the gift_message_id field */
    const GIFT_MESSAGE_ID = 'sales_flat_order.gift_message_id';

    /** the column name for the groupdeals_coupon_from field */
    const GROUPDEALS_COUPON_FROM = 'sales_flat_order.groupdeals_coupon_from';

    /** the column name for the groupdeals_coupon_to field */
    const GROUPDEALS_COUPON_TO = 'sales_flat_order.groupdeals_coupon_to';

    /** the column name for the groupdeals_coupon_to_email field */
    const GROUPDEALS_COUPON_TO_EMAIL = 'sales_flat_order.groupdeals_coupon_to_email';

    /** the column name for the groupdeals_coupon_message field */
    const GROUPDEALS_COUPON_MESSAGE = 'sales_flat_order.groupdeals_coupon_message';

    /** the column name for the base_customer_balance_amount field */
    const BASE_CUSTOMER_BALANCE_AMOUNT = 'sales_flat_order.base_customer_balance_amount';

    /** the column name for the customer_balance_amount field */
    const CUSTOMER_BALANCE_AMOUNT = 'sales_flat_order.customer_balance_amount';

    /** the column name for the base_customer_balance_invoiced field */
    const BASE_CUSTOMER_BALANCE_INVOICED = 'sales_flat_order.base_customer_balance_invoiced';

    /** the column name for the customer_balance_invoiced field */
    const CUSTOMER_BALANCE_INVOICED = 'sales_flat_order.customer_balance_invoiced';

    /** the column name for the base_customer_balance_refunded field */
    const BASE_CUSTOMER_BALANCE_REFUNDED = 'sales_flat_order.base_customer_balance_refunded';

    /** the column name for the customer_balance_refunded field */
    const CUSTOMER_BALANCE_REFUNDED = 'sales_flat_order.customer_balance_refunded';

    /** the column name for the bs_customer_bal_total_refunded field */
    const BS_CUSTOMER_BAL_TOTAL_REFUNDED = 'sales_flat_order.bs_customer_bal_total_refunded';

    /** the column name for the customer_bal_total_refunded field */
    const CUSTOMER_BAL_TOTAL_REFUNDED = 'sales_flat_order.customer_bal_total_refunded';

    /** the column name for the gift_cards field */
    const GIFT_CARDS = 'sales_flat_order.gift_cards';

    /** the column name for the base_gift_cards_amount field */
    const BASE_GIFT_CARDS_AMOUNT = 'sales_flat_order.base_gift_cards_amount';

    /** the column name for the gift_cards_amount field */
    const GIFT_CARDS_AMOUNT = 'sales_flat_order.gift_cards_amount';

    /** the column name for the base_gift_cards_invoiced field */
    const BASE_GIFT_CARDS_INVOICED = 'sales_flat_order.base_gift_cards_invoiced';

    /** the column name for the gift_cards_invoiced field */
    const GIFT_CARDS_INVOICED = 'sales_flat_order.gift_cards_invoiced';

    /** the column name for the base_gift_cards_refunded field */
    const BASE_GIFT_CARDS_REFUNDED = 'sales_flat_order.base_gift_cards_refunded';

    /** the column name for the gift_cards_refunded field */
    const GIFT_CARDS_REFUNDED = 'sales_flat_order.gift_cards_refunded';

    /** the column name for the gw_id field */
    const GW_ID = 'sales_flat_order.gw_id';

    /** the column name for the gw_allow_gift_receipt field */
    const GW_ALLOW_GIFT_RECEIPT = 'sales_flat_order.gw_allow_gift_receipt';

    /** the column name for the gw_add_card field */
    const GW_ADD_CARD = 'sales_flat_order.gw_add_card';

    /** the column name for the gw_base_price field */
    const GW_BASE_PRICE = 'sales_flat_order.gw_base_price';

    /** the column name for the gw_price field */
    const GW_PRICE = 'sales_flat_order.gw_price';

    /** the column name for the gw_items_base_price field */
    const GW_ITEMS_BASE_PRICE = 'sales_flat_order.gw_items_base_price';

    /** the column name for the gw_items_price field */
    const GW_ITEMS_PRICE = 'sales_flat_order.gw_items_price';

    /** the column name for the gw_card_base_price field */
    const GW_CARD_BASE_PRICE = 'sales_flat_order.gw_card_base_price';

    /** the column name for the gw_card_price field */
    const GW_CARD_PRICE = 'sales_flat_order.gw_card_price';

    /** the column name for the gw_base_tax_amount field */
    const GW_BASE_TAX_AMOUNT = 'sales_flat_order.gw_base_tax_amount';

    /** the column name for the gw_tax_amount field */
    const GW_TAX_AMOUNT = 'sales_flat_order.gw_tax_amount';

    /** the column name for the gw_items_base_tax_amount field */
    const GW_ITEMS_BASE_TAX_AMOUNT = 'sales_flat_order.gw_items_base_tax_amount';

    /** the column name for the gw_items_tax_amount field */
    const GW_ITEMS_TAX_AMOUNT = 'sales_flat_order.gw_items_tax_amount';

    /** the column name for the gw_card_base_tax_amount field */
    const GW_CARD_BASE_TAX_AMOUNT = 'sales_flat_order.gw_card_base_tax_amount';

    /** the column name for the gw_card_tax_amount field */
    const GW_CARD_TAX_AMOUNT = 'sales_flat_order.gw_card_tax_amount';

    /** the column name for the gw_base_price_invoiced field */
    const GW_BASE_PRICE_INVOICED = 'sales_flat_order.gw_base_price_invoiced';

    /** the column name for the gw_price_invoiced field */
    const GW_PRICE_INVOICED = 'sales_flat_order.gw_price_invoiced';

    /** the column name for the gw_items_base_price_invoiced field */
    const GW_ITEMS_BASE_PRICE_INVOICED = 'sales_flat_order.gw_items_base_price_invoiced';

    /** the column name for the gw_items_price_invoiced field */
    const GW_ITEMS_PRICE_INVOICED = 'sales_flat_order.gw_items_price_invoiced';

    /** the column name for the gw_card_base_price_invoiced field */
    const GW_CARD_BASE_PRICE_INVOICED = 'sales_flat_order.gw_card_base_price_invoiced';

    /** the column name for the gw_card_price_invoiced field */
    const GW_CARD_PRICE_INVOICED = 'sales_flat_order.gw_card_price_invoiced';

    /** the column name for the gw_base_tax_amount_invoiced field */
    const GW_BASE_TAX_AMOUNT_INVOICED = 'sales_flat_order.gw_base_tax_amount_invoiced';

    /** the column name for the gw_tax_amount_invoiced field */
    const GW_TAX_AMOUNT_INVOICED = 'sales_flat_order.gw_tax_amount_invoiced';

    /** the column name for the gw_items_base_tax_invoiced field */
    const GW_ITEMS_BASE_TAX_INVOICED = 'sales_flat_order.gw_items_base_tax_invoiced';

    /** the column name for the gw_items_tax_invoiced field */
    const GW_ITEMS_TAX_INVOICED = 'sales_flat_order.gw_items_tax_invoiced';

    /** the column name for the gw_card_base_tax_invoiced field */
    const GW_CARD_BASE_TAX_INVOICED = 'sales_flat_order.gw_card_base_tax_invoiced';

    /** the column name for the gw_card_tax_invoiced field */
    const GW_CARD_TAX_INVOICED = 'sales_flat_order.gw_card_tax_invoiced';

    /** the column name for the gw_base_price_refunded field */
    const GW_BASE_PRICE_REFUNDED = 'sales_flat_order.gw_base_price_refunded';

    /** the column name for the gw_price_refunded field */
    const GW_PRICE_REFUNDED = 'sales_flat_order.gw_price_refunded';

    /** the column name for the gw_items_base_price_refunded field */
    const GW_ITEMS_BASE_PRICE_REFUNDED = 'sales_flat_order.gw_items_base_price_refunded';

    /** the column name for the gw_items_price_refunded field */
    const GW_ITEMS_PRICE_REFUNDED = 'sales_flat_order.gw_items_price_refunded';

    /** the column name for the gw_card_base_price_refunded field */
    const GW_CARD_BASE_PRICE_REFUNDED = 'sales_flat_order.gw_card_base_price_refunded';

    /** the column name for the gw_card_price_refunded field */
    const GW_CARD_PRICE_REFUNDED = 'sales_flat_order.gw_card_price_refunded';

    /** the column name for the gw_base_tax_amount_refunded field */
    const GW_BASE_TAX_AMOUNT_REFUNDED = 'sales_flat_order.gw_base_tax_amount_refunded';

    /** the column name for the gw_tax_amount_refunded field */
    const GW_TAX_AMOUNT_REFUNDED = 'sales_flat_order.gw_tax_amount_refunded';

    /** the column name for the gw_items_base_tax_refunded field */
    const GW_ITEMS_BASE_TAX_REFUNDED = 'sales_flat_order.gw_items_base_tax_refunded';

    /** the column name for the gw_items_tax_refunded field */
    const GW_ITEMS_TAX_REFUNDED = 'sales_flat_order.gw_items_tax_refunded';

    /** the column name for the gw_card_base_tax_refunded field */
    const GW_CARD_BASE_TAX_REFUNDED = 'sales_flat_order.gw_card_base_tax_refunded';

    /** the column name for the gw_card_tax_refunded field */
    const GW_CARD_TAX_REFUNDED = 'sales_flat_order.gw_card_tax_refunded';

    /** the column name for the reward_points_balance field */
    const REWARD_POINTS_BALANCE = 'sales_flat_order.reward_points_balance';

    /** the column name for the base_reward_currency_amount field */
    const BASE_REWARD_CURRENCY_AMOUNT = 'sales_flat_order.base_reward_currency_amount';

    /** the column name for the reward_currency_amount field */
    const REWARD_CURRENCY_AMOUNT = 'sales_flat_order.reward_currency_amount';

    /** the column name for the base_rwrd_crrncy_amt_invoiced field */
    const BASE_RWRD_CRRNCY_AMT_INVOICED = 'sales_flat_order.base_rwrd_crrncy_amt_invoiced';

    /** the column name for the rwrd_currency_amount_invoiced field */
    const RWRD_CURRENCY_AMOUNT_INVOICED = 'sales_flat_order.rwrd_currency_amount_invoiced';

    /** the column name for the base_rwrd_crrncy_amnt_refnded field */
    const BASE_RWRD_CRRNCY_AMNT_REFNDED = 'sales_flat_order.base_rwrd_crrncy_amnt_refnded';

    /** the column name for the rwrd_crrncy_amnt_refunded field */
    const RWRD_CRRNCY_AMNT_REFUNDED = 'sales_flat_order.rwrd_crrncy_amnt_refunded';

    /** the column name for the reward_points_balance_refund field */
    const REWARD_POINTS_BALANCE_REFUND = 'sales_flat_order.reward_points_balance_refund';

    /** the column name for the reward_points_balance_refunded field */
    const REWARD_POINTS_BALANCE_REFUNDED = 'sales_flat_order.reward_points_balance_refunded';

    /** the column name for the reward_salesrule_points field */
    const REWARD_SALESRULE_POINTS = 'sales_flat_order.reward_salesrule_points';

    /** the column name for the vendor_username field */
    const VENDOR_USERNAME = 'sales_flat_order.vendor_username';

    /** the column name for the vendor_name field */
    const VENDOR_NAME = 'sales_flat_order.vendor_name';

    /** the column name for the vendor_lastname field */
    const VENDOR_LASTNAME = 'sales_flat_order.vendor_lastname';

    /** the column name for the vendor_email field */
    const VENDOR_EMAIL = 'sales_flat_order.vendor_email';

    /** the column name for the pos_id field */
    const POS_ID = 'sales_flat_order.pos_id';

    /** the column name for the pos_office field */
    const POS_OFFICE = 'sales_flat_order.pos_office';

    /** the column name for the pos_code field */
    const POS_CODE = 'sales_flat_order.pos_code';

    /** the column name for the pos_country field */
    const POS_COUNTRY = 'sales_flat_order.pos_country';

    /** the column name for the pos_city field */
    const POS_CITY = 'sales_flat_order.pos_city';

    /** the column name for the pos_postal_code field */
    const POS_POSTAL_CODE = 'sales_flat_order.pos_postal_code';

    /** the column name for the pos_address field */
    const POS_ADDRESS = 'sales_flat_order.pos_address';

    /** the column name for the pos_phone field */
    const POS_PHONE = 'sales_flat_order.pos_phone';

    /** the column name for the customer_identification field */
    const CUSTOMER_IDENTIFICATION = 'sales_flat_order.customer_identification';

    /** the column name for the is_gift field */
    const IS_GIFT = 'sales_flat_order.is_gift';

    /** the column name for the gift_for field */
    const GIFT_FOR = 'sales_flat_order.gift_for';

    /** the column name for the gift_email field */
    const GIFT_EMAIL = 'sales_flat_order.gift_email';

    /** the column name for the gift_message field */
    const GIFT_MESSAGE = 'sales_flat_order.gift_message';

    /** the column name for the gift_citydept field */
    const GIFT_CITYDEPT = 'sales_flat_order.gift_citydept';

    /** the column name for the gift_shipping field */
    const GIFT_SHIPPING = 'sales_flat_order.gift_shipping';

    /** the column name for the was_payed field */
    const WAS_PAYED = 'sales_flat_order.was_payed';

    /** the column name for the gift_for_lastname field */
    const GIFT_FOR_LASTNAME = 'sales_flat_order.gift_for_lastname';

    /** the column name for the sci_payment_methods field */
    const SCI_PAYMENT_METHODS = 'sales_flat_order.sci_payment_methods';

    /** the column name for the discount_applied field */
    const DISCOUNT_APPLIED = 'sales_flat_order.discount_applied';

    /** the column name for the rewards_applied field */
    const REWARDS_APPLIED = 'sales_flat_order.rewards_applied';

    /** the column name for the stock_before_pol field */
    const STOCK_BEFORE_POL = 'sales_flat_order.stock_before_pol';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of SalesFlatOrder objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array SalesFlatOrder[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. SalesFlatOrderPeer::$fieldNames[SalesFlatOrderPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('EntityId', 'State', 'Status', 'CouponCode', 'ProtectCode', 'ShippingDescription', 'IsVirtual', 'StoreId', 'CustomerId', 'BaseDiscountAmount', 'BaseDiscountCanceled', 'BaseDiscountInvoiced', 'BaseDiscountRefunded', 'BaseGrandTotal', 'BaseShippingAmount', 'BaseShippingCanceled', 'BaseShippingInvoiced', 'BaseShippingRefunded', 'BaseShippingTaxAmount', 'BaseShippingTaxRefunded', 'BaseSubtotal', 'BaseSubtotalCanceled', 'BaseSubtotalInvoiced', 'BaseSubtotalRefunded', 'BaseTaxAmount', 'BaseTaxCanceled', 'BaseTaxInvoiced', 'BaseTaxRefunded', 'BaseToGlobalRate', 'BaseToOrderRate', 'BaseTotalCanceled', 'BaseTotalInvoiced', 'BaseTotalInvoicedCost', 'BaseTotalOfflineRefunded', 'BaseTotalOnlineRefunded', 'BaseTotalPaid', 'BaseTotalQtyOrdered', 'BaseTotalRefunded', 'DiscountAmount', 'DiscountCanceled', 'DiscountInvoiced', 'DiscountRefunded', 'GrandTotal', 'ShippingAmount', 'ShippingCanceled', 'ShippingInvoiced', 'ShippingRefunded', 'ShippingTaxAmount', 'ShippingTaxRefunded', 'StoreToBaseRate', 'StoreToOrderRate', 'Subtotal', 'SubtotalCanceled', 'SubtotalInvoiced', 'SubtotalRefunded', 'TaxAmount', 'TaxCanceled', 'TaxInvoiced', 'TaxRefunded', 'TotalCanceled', 'TotalInvoiced', 'TotalOfflineRefunded', 'TotalOnlineRefunded', 'TotalPaid', 'TotalQtyOrdered', 'TotalRefunded', 'CanShipPartially', 'CanShipPartiallyItem', 'CustomerIsGuest', 'CustomerNoteNotify', 'BillingAddressId', 'CustomerGroupId', 'EditIncrement', 'EmailSent', 'ForcedShipmentWithInvoice', 'PaymentAuthExpiration', 'QuoteAddressId', 'QuoteId', 'ShippingAddressId', 'AdjustmentNegative', 'AdjustmentPositive', 'BaseAdjustmentNegative', 'BaseAdjustmentPositive', 'BaseShippingDiscountAmount', 'BaseSubtotalInclTax', 'BaseTotalDue', 'PaymentAuthorizationAmount', 'ShippingDiscountAmount', 'SubtotalInclTax', 'TotalDue', 'Weight', 'CustomerDob', 'IncrementId', 'AppliedRuleIds', 'BaseCurrencyCode', 'CustomerEmail', 'CustomerFirstname', 'CustomerLastname', 'CustomerMiddlename', 'CustomerPrefix', 'CustomerSuffix', 'CustomerTaxvat', 'DiscountDescription', 'ExtCustomerId', 'ExtOrderId', 'GlobalCurrencyCode', 'HoldBeforeState', 'HoldBeforeStatus', 'OrderCurrencyCode', 'OriginalIncrementId', 'RelationChildId', 'RelationChildRealId', 'RelationParentId', 'RelationParentRealId', 'RemoteIp', 'ShippingMethod', 'StoreCurrencyCode', 'StoreName', 'XForwardedFor', 'CustomerNote', 'CreatedAt', 'UpdatedAt', 'TotalItemCount', 'CustomerGender', 'HiddenTaxAmount', 'BaseHiddenTaxAmount', 'ShippingHiddenTaxAmount', 'BaseShippingHiddenTaxAmnt', 'HiddenTaxInvoiced', 'BaseHiddenTaxInvoiced', 'HiddenTaxRefunded', 'BaseHiddenTaxRefunded', 'ShippingInclTax', 'BaseShippingInclTax', 'CouponRuleName', 'PaypalIpnCustomerNotified', 'GiftMessageId', 'GroupdealsCouponFrom', 'GroupdealsCouponTo', 'GroupdealsCouponToEmail', 'GroupdealsCouponMessage', 'BaseCustomerBalanceAmount', 'CustomerBalanceAmount', 'BaseCustomerBalanceInvoiced', 'CustomerBalanceInvoiced', 'BaseCustomerBalanceRefunded', 'CustomerBalanceRefunded', 'BsCustomerBalTotalRefunded', 'CustomerBalTotalRefunded', 'GiftCards', 'BaseGiftCardsAmount', 'GiftCardsAmount', 'BaseGiftCardsInvoiced', 'GiftCardsInvoiced', 'BaseGiftCardsRefunded', 'GiftCardsRefunded', 'GwId', 'GwAllowGiftReceipt', 'GwAddCard', 'GwBasePrice', 'GwPrice', 'GwItemsBasePrice', 'GwItemsPrice', 'GwCardBasePrice', 'GwCardPrice', 'GwBaseTaxAmount', 'GwTaxAmount', 'GwItemsBaseTaxAmount', 'GwItemsTaxAmount', 'GwCardBaseTaxAmount', 'GwCardTaxAmount', 'GwBasePriceInvoiced', 'GwPriceInvoiced', 'GwItemsBasePriceInvoiced', 'GwItemsPriceInvoiced', 'GwCardBasePriceInvoiced', 'GwCardPriceInvoiced', 'GwBaseTaxAmountInvoiced', 'GwTaxAmountInvoiced', 'GwItemsBaseTaxInvoiced', 'GwItemsTaxInvoiced', 'GwCardBaseTaxInvoiced', 'GwCardTaxInvoiced', 'GwBasePriceRefunded', 'GwPriceRefunded', 'GwItemsBasePriceRefunded', 'GwItemsPriceRefunded', 'GwCardBasePriceRefunded', 'GwCardPriceRefunded', 'GwBaseTaxAmountRefunded', 'GwTaxAmountRefunded', 'GwItemsBaseTaxRefunded', 'GwItemsTaxRefunded', 'GwCardBaseTaxRefunded', 'GwCardTaxRefunded', 'RewardPointsBalance', 'BaseRewardCurrencyAmount', 'RewardCurrencyAmount', 'BaseRwrdCrrncyAmtInvoiced', 'RwrdCurrencyAmountInvoiced', 'BaseRwrdCrrncyAmntRefnded', 'RwrdCrrncyAmntRefunded', 'RewardPointsBalanceRefund', 'RewardPointsBalanceRefunded', 'RewardSalesrulePoints', 'VendorUsername', 'VendorName', 'VendorLastname', 'VendorEmail', 'PosId', 'PosOffice', 'PosCode', 'PosCountry', 'PosCity', 'PosPostalCode', 'PosAddress', 'PosPhone', 'CustomerIdentification', 'IsGift', 'GiftFor', 'GiftEmail', 'GiftMessage', 'GiftCitydept', 'GiftShipping', 'WasPayed', 'GiftForLastname', 'SciPaymentMethods', 'DiscountApplied', 'RewardsApplied', 'StockBeforePol', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('entityId', 'state', 'status', 'couponCode', 'protectCode', 'shippingDescription', 'isVirtual', 'storeId', 'customerId', 'baseDiscountAmount', 'baseDiscountCanceled', 'baseDiscountInvoiced', 'baseDiscountRefunded', 'baseGrandTotal', 'baseShippingAmount', 'baseShippingCanceled', 'baseShippingInvoiced', 'baseShippingRefunded', 'baseShippingTaxAmount', 'baseShippingTaxRefunded', 'baseSubtotal', 'baseSubtotalCanceled', 'baseSubtotalInvoiced', 'baseSubtotalRefunded', 'baseTaxAmount', 'baseTaxCanceled', 'baseTaxInvoiced', 'baseTaxRefunded', 'baseToGlobalRate', 'baseToOrderRate', 'baseTotalCanceled', 'baseTotalInvoiced', 'baseTotalInvoicedCost', 'baseTotalOfflineRefunded', 'baseTotalOnlineRefunded', 'baseTotalPaid', 'baseTotalQtyOrdered', 'baseTotalRefunded', 'discountAmount', 'discountCanceled', 'discountInvoiced', 'discountRefunded', 'grandTotal', 'shippingAmount', 'shippingCanceled', 'shippingInvoiced', 'shippingRefunded', 'shippingTaxAmount', 'shippingTaxRefunded', 'storeToBaseRate', 'storeToOrderRate', 'subtotal', 'subtotalCanceled', 'subtotalInvoiced', 'subtotalRefunded', 'taxAmount', 'taxCanceled', 'taxInvoiced', 'taxRefunded', 'totalCanceled', 'totalInvoiced', 'totalOfflineRefunded', 'totalOnlineRefunded', 'totalPaid', 'totalQtyOrdered', 'totalRefunded', 'canShipPartially', 'canShipPartiallyItem', 'customerIsGuest', 'customerNoteNotify', 'billingAddressId', 'customerGroupId', 'editIncrement', 'emailSent', 'forcedShipmentWithInvoice', 'paymentAuthExpiration', 'quoteAddressId', 'quoteId', 'shippingAddressId', 'adjustmentNegative', 'adjustmentPositive', 'baseAdjustmentNegative', 'baseAdjustmentPositive', 'baseShippingDiscountAmount', 'baseSubtotalInclTax', 'baseTotalDue', 'paymentAuthorizationAmount', 'shippingDiscountAmount', 'subtotalInclTax', 'totalDue', 'weight', 'customerDob', 'incrementId', 'appliedRuleIds', 'baseCurrencyCode', 'customerEmail', 'customerFirstname', 'customerLastname', 'customerMiddlename', 'customerPrefix', 'customerSuffix', 'customerTaxvat', 'discountDescription', 'extCustomerId', 'extOrderId', 'globalCurrencyCode', 'holdBeforeState', 'holdBeforeStatus', 'orderCurrencyCode', 'originalIncrementId', 'relationChildId', 'relationChildRealId', 'relationParentId', 'relationParentRealId', 'remoteIp', 'shippingMethod', 'storeCurrencyCode', 'storeName', 'xForwardedFor', 'customerNote', 'createdAt', 'updatedAt', 'totalItemCount', 'customerGender', 'hiddenTaxAmount', 'baseHiddenTaxAmount', 'shippingHiddenTaxAmount', 'baseShippingHiddenTaxAmnt', 'hiddenTaxInvoiced', 'baseHiddenTaxInvoiced', 'hiddenTaxRefunded', 'baseHiddenTaxRefunded', 'shippingInclTax', 'baseShippingInclTax', 'couponRuleName', 'paypalIpnCustomerNotified', 'giftMessageId', 'groupdealsCouponFrom', 'groupdealsCouponTo', 'groupdealsCouponToEmail', 'groupdealsCouponMessage', 'baseCustomerBalanceAmount', 'customerBalanceAmount', 'baseCustomerBalanceInvoiced', 'customerBalanceInvoiced', 'baseCustomerBalanceRefunded', 'customerBalanceRefunded', 'bsCustomerBalTotalRefunded', 'customerBalTotalRefunded', 'giftCards', 'baseGiftCardsAmount', 'giftCardsAmount', 'baseGiftCardsInvoiced', 'giftCardsInvoiced', 'baseGiftCardsRefunded', 'giftCardsRefunded', 'gwId', 'gwAllowGiftReceipt', 'gwAddCard', 'gwBasePrice', 'gwPrice', 'gwItemsBasePrice', 'gwItemsPrice', 'gwCardBasePrice', 'gwCardPrice', 'gwBaseTaxAmount', 'gwTaxAmount', 'gwItemsBaseTaxAmount', 'gwItemsTaxAmount', 'gwCardBaseTaxAmount', 'gwCardTaxAmount', 'gwBasePriceInvoiced', 'gwPriceInvoiced', 'gwItemsBasePriceInvoiced', 'gwItemsPriceInvoiced', 'gwCardBasePriceInvoiced', 'gwCardPriceInvoiced', 'gwBaseTaxAmountInvoiced', 'gwTaxAmountInvoiced', 'gwItemsBaseTaxInvoiced', 'gwItemsTaxInvoiced', 'gwCardBaseTaxInvoiced', 'gwCardTaxInvoiced', 'gwBasePriceRefunded', 'gwPriceRefunded', 'gwItemsBasePriceRefunded', 'gwItemsPriceRefunded', 'gwCardBasePriceRefunded', 'gwCardPriceRefunded', 'gwBaseTaxAmountRefunded', 'gwTaxAmountRefunded', 'gwItemsBaseTaxRefunded', 'gwItemsTaxRefunded', 'gwCardBaseTaxRefunded', 'gwCardTaxRefunded', 'rewardPointsBalance', 'baseRewardCurrencyAmount', 'rewardCurrencyAmount', 'baseRwrdCrrncyAmtInvoiced', 'rwrdCurrencyAmountInvoiced', 'baseRwrdCrrncyAmntRefnded', 'rwrdCrrncyAmntRefunded', 'rewardPointsBalanceRefund', 'rewardPointsBalanceRefunded', 'rewardSalesrulePoints', 'vendorUsername', 'vendorName', 'vendorLastname', 'vendorEmail', 'posId', 'posOffice', 'posCode', 'posCountry', 'posCity', 'posPostalCode', 'posAddress', 'posPhone', 'customerIdentification', 'isGift', 'giftFor', 'giftEmail', 'giftMessage', 'giftCitydept', 'giftShipping', 'wasPayed', 'giftForLastname', 'sciPaymentMethods', 'discountApplied', 'rewardsApplied', 'stockBeforePol', ),
        BasePeer::TYPE_COLNAME => array (SalesFlatOrderPeer::ENTITY_ID, SalesFlatOrderPeer::STATE, SalesFlatOrderPeer::STATUS, SalesFlatOrderPeer::COUPON_CODE, SalesFlatOrderPeer::PROTECT_CODE, SalesFlatOrderPeer::SHIPPING_DESCRIPTION, SalesFlatOrderPeer::IS_VIRTUAL, SalesFlatOrderPeer::STORE_ID, SalesFlatOrderPeer::CUSTOMER_ID, SalesFlatOrderPeer::BASE_DISCOUNT_AMOUNT, SalesFlatOrderPeer::BASE_DISCOUNT_CANCELED, SalesFlatOrderPeer::BASE_DISCOUNT_INVOICED, SalesFlatOrderPeer::BASE_DISCOUNT_REFUNDED, SalesFlatOrderPeer::BASE_GRAND_TOTAL, SalesFlatOrderPeer::BASE_SHIPPING_AMOUNT, SalesFlatOrderPeer::BASE_SHIPPING_CANCELED, SalesFlatOrderPeer::BASE_SHIPPING_INVOICED, SalesFlatOrderPeer::BASE_SHIPPING_REFUNDED, SalesFlatOrderPeer::BASE_SHIPPING_TAX_AMOUNT, SalesFlatOrderPeer::BASE_SHIPPING_TAX_REFUNDED, SalesFlatOrderPeer::BASE_SUBTOTAL, SalesFlatOrderPeer::BASE_SUBTOTAL_CANCELED, SalesFlatOrderPeer::BASE_SUBTOTAL_INVOICED, SalesFlatOrderPeer::BASE_SUBTOTAL_REFUNDED, SalesFlatOrderPeer::BASE_TAX_AMOUNT, SalesFlatOrderPeer::BASE_TAX_CANCELED, SalesFlatOrderPeer::BASE_TAX_INVOICED, SalesFlatOrderPeer::BASE_TAX_REFUNDED, SalesFlatOrderPeer::BASE_TO_GLOBAL_RATE, SalesFlatOrderPeer::BASE_TO_ORDER_RATE, SalesFlatOrderPeer::BASE_TOTAL_CANCELED, SalesFlatOrderPeer::BASE_TOTAL_INVOICED, SalesFlatOrderPeer::BASE_TOTAL_INVOICED_COST, SalesFlatOrderPeer::BASE_TOTAL_OFFLINE_REFUNDED, SalesFlatOrderPeer::BASE_TOTAL_ONLINE_REFUNDED, SalesFlatOrderPeer::BASE_TOTAL_PAID, SalesFlatOrderPeer::BASE_TOTAL_QTY_ORDERED, SalesFlatOrderPeer::BASE_TOTAL_REFUNDED, SalesFlatOrderPeer::DISCOUNT_AMOUNT, SalesFlatOrderPeer::DISCOUNT_CANCELED, SalesFlatOrderPeer::DISCOUNT_INVOICED, SalesFlatOrderPeer::DISCOUNT_REFUNDED, SalesFlatOrderPeer::GRAND_TOTAL, SalesFlatOrderPeer::SHIPPING_AMOUNT, SalesFlatOrderPeer::SHIPPING_CANCELED, SalesFlatOrderPeer::SHIPPING_INVOICED, SalesFlatOrderPeer::SHIPPING_REFUNDED, SalesFlatOrderPeer::SHIPPING_TAX_AMOUNT, SalesFlatOrderPeer::SHIPPING_TAX_REFUNDED, SalesFlatOrderPeer::STORE_TO_BASE_RATE, SalesFlatOrderPeer::STORE_TO_ORDER_RATE, SalesFlatOrderPeer::SUBTOTAL, SalesFlatOrderPeer::SUBTOTAL_CANCELED, SalesFlatOrderPeer::SUBTOTAL_INVOICED, SalesFlatOrderPeer::SUBTOTAL_REFUNDED, SalesFlatOrderPeer::TAX_AMOUNT, SalesFlatOrderPeer::TAX_CANCELED, SalesFlatOrderPeer::TAX_INVOICED, SalesFlatOrderPeer::TAX_REFUNDED, SalesFlatOrderPeer::TOTAL_CANCELED, SalesFlatOrderPeer::TOTAL_INVOICED, SalesFlatOrderPeer::TOTAL_OFFLINE_REFUNDED, SalesFlatOrderPeer::TOTAL_ONLINE_REFUNDED, SalesFlatOrderPeer::TOTAL_PAID, SalesFlatOrderPeer::TOTAL_QTY_ORDERED, SalesFlatOrderPeer::TOTAL_REFUNDED, SalesFlatOrderPeer::CAN_SHIP_PARTIALLY, SalesFlatOrderPeer::CAN_SHIP_PARTIALLY_ITEM, SalesFlatOrderPeer::CUSTOMER_IS_GUEST, SalesFlatOrderPeer::CUSTOMER_NOTE_NOTIFY, SalesFlatOrderPeer::BILLING_ADDRESS_ID, SalesFlatOrderPeer::CUSTOMER_GROUP_ID, SalesFlatOrderPeer::EDIT_INCREMENT, SalesFlatOrderPeer::EMAIL_SENT, SalesFlatOrderPeer::FORCED_SHIPMENT_WITH_INVOICE, SalesFlatOrderPeer::PAYMENT_AUTH_EXPIRATION, SalesFlatOrderPeer::QUOTE_ADDRESS_ID, SalesFlatOrderPeer::QUOTE_ID, SalesFlatOrderPeer::SHIPPING_ADDRESS_ID, SalesFlatOrderPeer::ADJUSTMENT_NEGATIVE, SalesFlatOrderPeer::ADJUSTMENT_POSITIVE, SalesFlatOrderPeer::BASE_ADJUSTMENT_NEGATIVE, SalesFlatOrderPeer::BASE_ADJUSTMENT_POSITIVE, SalesFlatOrderPeer::BASE_SHIPPING_DISCOUNT_AMOUNT, SalesFlatOrderPeer::BASE_SUBTOTAL_INCL_TAX, SalesFlatOrderPeer::BASE_TOTAL_DUE, SalesFlatOrderPeer::PAYMENT_AUTHORIZATION_AMOUNT, SalesFlatOrderPeer::SHIPPING_DISCOUNT_AMOUNT, SalesFlatOrderPeer::SUBTOTAL_INCL_TAX, SalesFlatOrderPeer::TOTAL_DUE, SalesFlatOrderPeer::WEIGHT, SalesFlatOrderPeer::CUSTOMER_DOB, SalesFlatOrderPeer::INCREMENT_ID, SalesFlatOrderPeer::APPLIED_RULE_IDS, SalesFlatOrderPeer::BASE_CURRENCY_CODE, SalesFlatOrderPeer::CUSTOMER_EMAIL, SalesFlatOrderPeer::CUSTOMER_FIRSTNAME, SalesFlatOrderPeer::CUSTOMER_LASTNAME, SalesFlatOrderPeer::CUSTOMER_MIDDLENAME, SalesFlatOrderPeer::CUSTOMER_PREFIX, SalesFlatOrderPeer::CUSTOMER_SUFFIX, SalesFlatOrderPeer::CUSTOMER_TAXVAT, SalesFlatOrderPeer::DISCOUNT_DESCRIPTION, SalesFlatOrderPeer::EXT_CUSTOMER_ID, SalesFlatOrderPeer::EXT_ORDER_ID, SalesFlatOrderPeer::GLOBAL_CURRENCY_CODE, SalesFlatOrderPeer::HOLD_BEFORE_STATE, SalesFlatOrderPeer::HOLD_BEFORE_STATUS, SalesFlatOrderPeer::ORDER_CURRENCY_CODE, SalesFlatOrderPeer::ORIGINAL_INCREMENT_ID, SalesFlatOrderPeer::RELATION_CHILD_ID, SalesFlatOrderPeer::RELATION_CHILD_REAL_ID, SalesFlatOrderPeer::RELATION_PARENT_ID, SalesFlatOrderPeer::RELATION_PARENT_REAL_ID, SalesFlatOrderPeer::REMOTE_IP, SalesFlatOrderPeer::SHIPPING_METHOD, SalesFlatOrderPeer::STORE_CURRENCY_CODE, SalesFlatOrderPeer::STORE_NAME, SalesFlatOrderPeer::X_FORWARDED_FOR, SalesFlatOrderPeer::CUSTOMER_NOTE, SalesFlatOrderPeer::CREATED_AT, SalesFlatOrderPeer::UPDATED_AT, SalesFlatOrderPeer::TOTAL_ITEM_COUNT, SalesFlatOrderPeer::CUSTOMER_GENDER, SalesFlatOrderPeer::HIDDEN_TAX_AMOUNT, SalesFlatOrderPeer::BASE_HIDDEN_TAX_AMOUNT, SalesFlatOrderPeer::SHIPPING_HIDDEN_TAX_AMOUNT, SalesFlatOrderPeer::BASE_SHIPPING_HIDDEN_TAX_AMNT, SalesFlatOrderPeer::HIDDEN_TAX_INVOICED, SalesFlatOrderPeer::BASE_HIDDEN_TAX_INVOICED, SalesFlatOrderPeer::HIDDEN_TAX_REFUNDED, SalesFlatOrderPeer::BASE_HIDDEN_TAX_REFUNDED, SalesFlatOrderPeer::SHIPPING_INCL_TAX, SalesFlatOrderPeer::BASE_SHIPPING_INCL_TAX, SalesFlatOrderPeer::COUPON_RULE_NAME, SalesFlatOrderPeer::PAYPAL_IPN_CUSTOMER_NOTIFIED, SalesFlatOrderPeer::GIFT_MESSAGE_ID, SalesFlatOrderPeer::GROUPDEALS_COUPON_FROM, SalesFlatOrderPeer::GROUPDEALS_COUPON_TO, SalesFlatOrderPeer::GROUPDEALS_COUPON_TO_EMAIL, SalesFlatOrderPeer::GROUPDEALS_COUPON_MESSAGE, SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_AMOUNT, SalesFlatOrderPeer::CUSTOMER_BALANCE_AMOUNT, SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_INVOICED, SalesFlatOrderPeer::CUSTOMER_BALANCE_INVOICED, SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_REFUNDED, SalesFlatOrderPeer::CUSTOMER_BALANCE_REFUNDED, SalesFlatOrderPeer::BS_CUSTOMER_BAL_TOTAL_REFUNDED, SalesFlatOrderPeer::CUSTOMER_BAL_TOTAL_REFUNDED, SalesFlatOrderPeer::GIFT_CARDS, SalesFlatOrderPeer::BASE_GIFT_CARDS_AMOUNT, SalesFlatOrderPeer::GIFT_CARDS_AMOUNT, SalesFlatOrderPeer::BASE_GIFT_CARDS_INVOICED, SalesFlatOrderPeer::GIFT_CARDS_INVOICED, SalesFlatOrderPeer::BASE_GIFT_CARDS_REFUNDED, SalesFlatOrderPeer::GIFT_CARDS_REFUNDED, SalesFlatOrderPeer::GW_ID, SalesFlatOrderPeer::GW_ALLOW_GIFT_RECEIPT, SalesFlatOrderPeer::GW_ADD_CARD, SalesFlatOrderPeer::GW_BASE_PRICE, SalesFlatOrderPeer::GW_PRICE, SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE, SalesFlatOrderPeer::GW_ITEMS_PRICE, SalesFlatOrderPeer::GW_CARD_BASE_PRICE, SalesFlatOrderPeer::GW_CARD_PRICE, SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT, SalesFlatOrderPeer::GW_TAX_AMOUNT, SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_AMOUNT, SalesFlatOrderPeer::GW_ITEMS_TAX_AMOUNT, SalesFlatOrderPeer::GW_CARD_BASE_TAX_AMOUNT, SalesFlatOrderPeer::GW_CARD_TAX_AMOUNT, SalesFlatOrderPeer::GW_BASE_PRICE_INVOICED, SalesFlatOrderPeer::GW_PRICE_INVOICED, SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_INVOICED, SalesFlatOrderPeer::GW_ITEMS_PRICE_INVOICED, SalesFlatOrderPeer::GW_CARD_BASE_PRICE_INVOICED, SalesFlatOrderPeer::GW_CARD_PRICE_INVOICED, SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_INVOICED, SalesFlatOrderPeer::GW_TAX_AMOUNT_INVOICED, SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_INVOICED, SalesFlatOrderPeer::GW_ITEMS_TAX_INVOICED, SalesFlatOrderPeer::GW_CARD_BASE_TAX_INVOICED, SalesFlatOrderPeer::GW_CARD_TAX_INVOICED, SalesFlatOrderPeer::GW_BASE_PRICE_REFUNDED, SalesFlatOrderPeer::GW_PRICE_REFUNDED, SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_REFUNDED, SalesFlatOrderPeer::GW_ITEMS_PRICE_REFUNDED, SalesFlatOrderPeer::GW_CARD_BASE_PRICE_REFUNDED, SalesFlatOrderPeer::GW_CARD_PRICE_REFUNDED, SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_REFUNDED, SalesFlatOrderPeer::GW_TAX_AMOUNT_REFUNDED, SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_REFUNDED, SalesFlatOrderPeer::GW_ITEMS_TAX_REFUNDED, SalesFlatOrderPeer::GW_CARD_BASE_TAX_REFUNDED, SalesFlatOrderPeer::GW_CARD_TAX_REFUNDED, SalesFlatOrderPeer::REWARD_POINTS_BALANCE, SalesFlatOrderPeer::BASE_REWARD_CURRENCY_AMOUNT, SalesFlatOrderPeer::REWARD_CURRENCY_AMOUNT, SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMT_INVOICED, SalesFlatOrderPeer::RWRD_CURRENCY_AMOUNT_INVOICED, SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMNT_REFNDED, SalesFlatOrderPeer::RWRD_CRRNCY_AMNT_REFUNDED, SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUND, SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUNDED, SalesFlatOrderPeer::REWARD_SALESRULE_POINTS, SalesFlatOrderPeer::VENDOR_USERNAME, SalesFlatOrderPeer::VENDOR_NAME, SalesFlatOrderPeer::VENDOR_LASTNAME, SalesFlatOrderPeer::VENDOR_EMAIL, SalesFlatOrderPeer::POS_ID, SalesFlatOrderPeer::POS_OFFICE, SalesFlatOrderPeer::POS_CODE, SalesFlatOrderPeer::POS_COUNTRY, SalesFlatOrderPeer::POS_CITY, SalesFlatOrderPeer::POS_POSTAL_CODE, SalesFlatOrderPeer::POS_ADDRESS, SalesFlatOrderPeer::POS_PHONE, SalesFlatOrderPeer::CUSTOMER_IDENTIFICATION, SalesFlatOrderPeer::IS_GIFT, SalesFlatOrderPeer::GIFT_FOR, SalesFlatOrderPeer::GIFT_EMAIL, SalesFlatOrderPeer::GIFT_MESSAGE, SalesFlatOrderPeer::GIFT_CITYDEPT, SalesFlatOrderPeer::GIFT_SHIPPING, SalesFlatOrderPeer::WAS_PAYED, SalesFlatOrderPeer::GIFT_FOR_LASTNAME, SalesFlatOrderPeer::SCI_PAYMENT_METHODS, SalesFlatOrderPeer::DISCOUNT_APPLIED, SalesFlatOrderPeer::REWARDS_APPLIED, SalesFlatOrderPeer::STOCK_BEFORE_POL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ENTITY_ID', 'STATE', 'STATUS', 'COUPON_CODE', 'PROTECT_CODE', 'SHIPPING_DESCRIPTION', 'IS_VIRTUAL', 'STORE_ID', 'CUSTOMER_ID', 'BASE_DISCOUNT_AMOUNT', 'BASE_DISCOUNT_CANCELED', 'BASE_DISCOUNT_INVOICED', 'BASE_DISCOUNT_REFUNDED', 'BASE_GRAND_TOTAL', 'BASE_SHIPPING_AMOUNT', 'BASE_SHIPPING_CANCELED', 'BASE_SHIPPING_INVOICED', 'BASE_SHIPPING_REFUNDED', 'BASE_SHIPPING_TAX_AMOUNT', 'BASE_SHIPPING_TAX_REFUNDED', 'BASE_SUBTOTAL', 'BASE_SUBTOTAL_CANCELED', 'BASE_SUBTOTAL_INVOICED', 'BASE_SUBTOTAL_REFUNDED', 'BASE_TAX_AMOUNT', 'BASE_TAX_CANCELED', 'BASE_TAX_INVOICED', 'BASE_TAX_REFUNDED', 'BASE_TO_GLOBAL_RATE', 'BASE_TO_ORDER_RATE', 'BASE_TOTAL_CANCELED', 'BASE_TOTAL_INVOICED', 'BASE_TOTAL_INVOICED_COST', 'BASE_TOTAL_OFFLINE_REFUNDED', 'BASE_TOTAL_ONLINE_REFUNDED', 'BASE_TOTAL_PAID', 'BASE_TOTAL_QTY_ORDERED', 'BASE_TOTAL_REFUNDED', 'DISCOUNT_AMOUNT', 'DISCOUNT_CANCELED', 'DISCOUNT_INVOICED', 'DISCOUNT_REFUNDED', 'GRAND_TOTAL', 'SHIPPING_AMOUNT', 'SHIPPING_CANCELED', 'SHIPPING_INVOICED', 'SHIPPING_REFUNDED', 'SHIPPING_TAX_AMOUNT', 'SHIPPING_TAX_REFUNDED', 'STORE_TO_BASE_RATE', 'STORE_TO_ORDER_RATE', 'SUBTOTAL', 'SUBTOTAL_CANCELED', 'SUBTOTAL_INVOICED', 'SUBTOTAL_REFUNDED', 'TAX_AMOUNT', 'TAX_CANCELED', 'TAX_INVOICED', 'TAX_REFUNDED', 'TOTAL_CANCELED', 'TOTAL_INVOICED', 'TOTAL_OFFLINE_REFUNDED', 'TOTAL_ONLINE_REFUNDED', 'TOTAL_PAID', 'TOTAL_QTY_ORDERED', 'TOTAL_REFUNDED', 'CAN_SHIP_PARTIALLY', 'CAN_SHIP_PARTIALLY_ITEM', 'CUSTOMER_IS_GUEST', 'CUSTOMER_NOTE_NOTIFY', 'BILLING_ADDRESS_ID', 'CUSTOMER_GROUP_ID', 'EDIT_INCREMENT', 'EMAIL_SENT', 'FORCED_SHIPMENT_WITH_INVOICE', 'PAYMENT_AUTH_EXPIRATION', 'QUOTE_ADDRESS_ID', 'QUOTE_ID', 'SHIPPING_ADDRESS_ID', 'ADJUSTMENT_NEGATIVE', 'ADJUSTMENT_POSITIVE', 'BASE_ADJUSTMENT_NEGATIVE', 'BASE_ADJUSTMENT_POSITIVE', 'BASE_SHIPPING_DISCOUNT_AMOUNT', 'BASE_SUBTOTAL_INCL_TAX', 'BASE_TOTAL_DUE', 'PAYMENT_AUTHORIZATION_AMOUNT', 'SHIPPING_DISCOUNT_AMOUNT', 'SUBTOTAL_INCL_TAX', 'TOTAL_DUE', 'WEIGHT', 'CUSTOMER_DOB', 'INCREMENT_ID', 'APPLIED_RULE_IDS', 'BASE_CURRENCY_CODE', 'CUSTOMER_EMAIL', 'CUSTOMER_FIRSTNAME', 'CUSTOMER_LASTNAME', 'CUSTOMER_MIDDLENAME', 'CUSTOMER_PREFIX', 'CUSTOMER_SUFFIX', 'CUSTOMER_TAXVAT', 'DISCOUNT_DESCRIPTION', 'EXT_CUSTOMER_ID', 'EXT_ORDER_ID', 'GLOBAL_CURRENCY_CODE', 'HOLD_BEFORE_STATE', 'HOLD_BEFORE_STATUS', 'ORDER_CURRENCY_CODE', 'ORIGINAL_INCREMENT_ID', 'RELATION_CHILD_ID', 'RELATION_CHILD_REAL_ID', 'RELATION_PARENT_ID', 'RELATION_PARENT_REAL_ID', 'REMOTE_IP', 'SHIPPING_METHOD', 'STORE_CURRENCY_CODE', 'STORE_NAME', 'X_FORWARDED_FOR', 'CUSTOMER_NOTE', 'CREATED_AT', 'UPDATED_AT', 'TOTAL_ITEM_COUNT', 'CUSTOMER_GENDER', 'HIDDEN_TAX_AMOUNT', 'BASE_HIDDEN_TAX_AMOUNT', 'SHIPPING_HIDDEN_TAX_AMOUNT', 'BASE_SHIPPING_HIDDEN_TAX_AMNT', 'HIDDEN_TAX_INVOICED', 'BASE_HIDDEN_TAX_INVOICED', 'HIDDEN_TAX_REFUNDED', 'BASE_HIDDEN_TAX_REFUNDED', 'SHIPPING_INCL_TAX', 'BASE_SHIPPING_INCL_TAX', 'COUPON_RULE_NAME', 'PAYPAL_IPN_CUSTOMER_NOTIFIED', 'GIFT_MESSAGE_ID', 'GROUPDEALS_COUPON_FROM', 'GROUPDEALS_COUPON_TO', 'GROUPDEALS_COUPON_TO_EMAIL', 'GROUPDEALS_COUPON_MESSAGE', 'BASE_CUSTOMER_BALANCE_AMOUNT', 'CUSTOMER_BALANCE_AMOUNT', 'BASE_CUSTOMER_BALANCE_INVOICED', 'CUSTOMER_BALANCE_INVOICED', 'BASE_CUSTOMER_BALANCE_REFUNDED', 'CUSTOMER_BALANCE_REFUNDED', 'BS_CUSTOMER_BAL_TOTAL_REFUNDED', 'CUSTOMER_BAL_TOTAL_REFUNDED', 'GIFT_CARDS', 'BASE_GIFT_CARDS_AMOUNT', 'GIFT_CARDS_AMOUNT', 'BASE_GIFT_CARDS_INVOICED', 'GIFT_CARDS_INVOICED', 'BASE_GIFT_CARDS_REFUNDED', 'GIFT_CARDS_REFUNDED', 'GW_ID', 'GW_ALLOW_GIFT_RECEIPT', 'GW_ADD_CARD', 'GW_BASE_PRICE', 'GW_PRICE', 'GW_ITEMS_BASE_PRICE', 'GW_ITEMS_PRICE', 'GW_CARD_BASE_PRICE', 'GW_CARD_PRICE', 'GW_BASE_TAX_AMOUNT', 'GW_TAX_AMOUNT', 'GW_ITEMS_BASE_TAX_AMOUNT', 'GW_ITEMS_TAX_AMOUNT', 'GW_CARD_BASE_TAX_AMOUNT', 'GW_CARD_TAX_AMOUNT', 'GW_BASE_PRICE_INVOICED', 'GW_PRICE_INVOICED', 'GW_ITEMS_BASE_PRICE_INVOICED', 'GW_ITEMS_PRICE_INVOICED', 'GW_CARD_BASE_PRICE_INVOICED', 'GW_CARD_PRICE_INVOICED', 'GW_BASE_TAX_AMOUNT_INVOICED', 'GW_TAX_AMOUNT_INVOICED', 'GW_ITEMS_BASE_TAX_INVOICED', 'GW_ITEMS_TAX_INVOICED', 'GW_CARD_BASE_TAX_INVOICED', 'GW_CARD_TAX_INVOICED', 'GW_BASE_PRICE_REFUNDED', 'GW_PRICE_REFUNDED', 'GW_ITEMS_BASE_PRICE_REFUNDED', 'GW_ITEMS_PRICE_REFUNDED', 'GW_CARD_BASE_PRICE_REFUNDED', 'GW_CARD_PRICE_REFUNDED', 'GW_BASE_TAX_AMOUNT_REFUNDED', 'GW_TAX_AMOUNT_REFUNDED', 'GW_ITEMS_BASE_TAX_REFUNDED', 'GW_ITEMS_TAX_REFUNDED', 'GW_CARD_BASE_TAX_REFUNDED', 'GW_CARD_TAX_REFUNDED', 'REWARD_POINTS_BALANCE', 'BASE_REWARD_CURRENCY_AMOUNT', 'REWARD_CURRENCY_AMOUNT', 'BASE_RWRD_CRRNCY_AMT_INVOICED', 'RWRD_CURRENCY_AMOUNT_INVOICED', 'BASE_RWRD_CRRNCY_AMNT_REFNDED', 'RWRD_CRRNCY_AMNT_REFUNDED', 'REWARD_POINTS_BALANCE_REFUND', 'REWARD_POINTS_BALANCE_REFUNDED', 'REWARD_SALESRULE_POINTS', 'VENDOR_USERNAME', 'VENDOR_NAME', 'VENDOR_LASTNAME', 'VENDOR_EMAIL', 'POS_ID', 'POS_OFFICE', 'POS_CODE', 'POS_COUNTRY', 'POS_CITY', 'POS_POSTAL_CODE', 'POS_ADDRESS', 'POS_PHONE', 'CUSTOMER_IDENTIFICATION', 'IS_GIFT', 'GIFT_FOR', 'GIFT_EMAIL', 'GIFT_MESSAGE', 'GIFT_CITYDEPT', 'GIFT_SHIPPING', 'WAS_PAYED', 'GIFT_FOR_LASTNAME', 'SCI_PAYMENT_METHODS', 'DISCOUNT_APPLIED', 'REWARDS_APPLIED', 'STOCK_BEFORE_POL', ),
        BasePeer::TYPE_FIELDNAME => array ('entity_id', 'state', 'status', 'coupon_code', 'protect_code', 'shipping_description', 'is_virtual', 'store_id', 'customer_id', 'base_discount_amount', 'base_discount_canceled', 'base_discount_invoiced', 'base_discount_refunded', 'base_grand_total', 'base_shipping_amount', 'base_shipping_canceled', 'base_shipping_invoiced', 'base_shipping_refunded', 'base_shipping_tax_amount', 'base_shipping_tax_refunded', 'base_subtotal', 'base_subtotal_canceled', 'base_subtotal_invoiced', 'base_subtotal_refunded', 'base_tax_amount', 'base_tax_canceled', 'base_tax_invoiced', 'base_tax_refunded', 'base_to_global_rate', 'base_to_order_rate', 'base_total_canceled', 'base_total_invoiced', 'base_total_invoiced_cost', 'base_total_offline_refunded', 'base_total_online_refunded', 'base_total_paid', 'base_total_qty_ordered', 'base_total_refunded', 'discount_amount', 'discount_canceled', 'discount_invoiced', 'discount_refunded', 'grand_total', 'shipping_amount', 'shipping_canceled', 'shipping_invoiced', 'shipping_refunded', 'shipping_tax_amount', 'shipping_tax_refunded', 'store_to_base_rate', 'store_to_order_rate', 'subtotal', 'subtotal_canceled', 'subtotal_invoiced', 'subtotal_refunded', 'tax_amount', 'tax_canceled', 'tax_invoiced', 'tax_refunded', 'total_canceled', 'total_invoiced', 'total_offline_refunded', 'total_online_refunded', 'total_paid', 'total_qty_ordered', 'total_refunded', 'can_ship_partially', 'can_ship_partially_item', 'customer_is_guest', 'customer_note_notify', 'billing_address_id', 'customer_group_id', 'edit_increment', 'email_sent', 'forced_shipment_with_invoice', 'payment_auth_expiration', 'quote_address_id', 'quote_id', 'shipping_address_id', 'adjustment_negative', 'adjustment_positive', 'base_adjustment_negative', 'base_adjustment_positive', 'base_shipping_discount_amount', 'base_subtotal_incl_tax', 'base_total_due', 'payment_authorization_amount', 'shipping_discount_amount', 'subtotal_incl_tax', 'total_due', 'weight', 'customer_dob', 'increment_id', 'applied_rule_ids', 'base_currency_code', 'customer_email', 'customer_firstname', 'customer_lastname', 'customer_middlename', 'customer_prefix', 'customer_suffix', 'customer_taxvat', 'discount_description', 'ext_customer_id', 'ext_order_id', 'global_currency_code', 'hold_before_state', 'hold_before_status', 'order_currency_code', 'original_increment_id', 'relation_child_id', 'relation_child_real_id', 'relation_parent_id', 'relation_parent_real_id', 'remote_ip', 'shipping_method', 'store_currency_code', 'store_name', 'x_forwarded_for', 'customer_note', 'created_at', 'updated_at', 'total_item_count', 'customer_gender', 'hidden_tax_amount', 'base_hidden_tax_amount', 'shipping_hidden_tax_amount', 'base_shipping_hidden_tax_amnt', 'hidden_tax_invoiced', 'base_hidden_tax_invoiced', 'hidden_tax_refunded', 'base_hidden_tax_refunded', 'shipping_incl_tax', 'base_shipping_incl_tax', 'coupon_rule_name', 'paypal_ipn_customer_notified', 'gift_message_id', 'groupdeals_coupon_from', 'groupdeals_coupon_to', 'groupdeals_coupon_to_email', 'groupdeals_coupon_message', 'base_customer_balance_amount', 'customer_balance_amount', 'base_customer_balance_invoiced', 'customer_balance_invoiced', 'base_customer_balance_refunded', 'customer_balance_refunded', 'bs_customer_bal_total_refunded', 'customer_bal_total_refunded', 'gift_cards', 'base_gift_cards_amount', 'gift_cards_amount', 'base_gift_cards_invoiced', 'gift_cards_invoiced', 'base_gift_cards_refunded', 'gift_cards_refunded', 'gw_id', 'gw_allow_gift_receipt', 'gw_add_card', 'gw_base_price', 'gw_price', 'gw_items_base_price', 'gw_items_price', 'gw_card_base_price', 'gw_card_price', 'gw_base_tax_amount', 'gw_tax_amount', 'gw_items_base_tax_amount', 'gw_items_tax_amount', 'gw_card_base_tax_amount', 'gw_card_tax_amount', 'gw_base_price_invoiced', 'gw_price_invoiced', 'gw_items_base_price_invoiced', 'gw_items_price_invoiced', 'gw_card_base_price_invoiced', 'gw_card_price_invoiced', 'gw_base_tax_amount_invoiced', 'gw_tax_amount_invoiced', 'gw_items_base_tax_invoiced', 'gw_items_tax_invoiced', 'gw_card_base_tax_invoiced', 'gw_card_tax_invoiced', 'gw_base_price_refunded', 'gw_price_refunded', 'gw_items_base_price_refunded', 'gw_items_price_refunded', 'gw_card_base_price_refunded', 'gw_card_price_refunded', 'gw_base_tax_amount_refunded', 'gw_tax_amount_refunded', 'gw_items_base_tax_refunded', 'gw_items_tax_refunded', 'gw_card_base_tax_refunded', 'gw_card_tax_refunded', 'reward_points_balance', 'base_reward_currency_amount', 'reward_currency_amount', 'base_rwrd_crrncy_amt_invoiced', 'rwrd_currency_amount_invoiced', 'base_rwrd_crrncy_amnt_refnded', 'rwrd_crrncy_amnt_refunded', 'reward_points_balance_refund', 'reward_points_balance_refunded', 'reward_salesrule_points', 'vendor_username', 'vendor_name', 'vendor_lastname', 'vendor_email', 'pos_id', 'pos_office', 'pos_code', 'pos_country', 'pos_city', 'pos_postal_code', 'pos_address', 'pos_phone', 'customer_identification', 'is_gift', 'gift_for', 'gift_email', 'gift_message', 'gift_citydept', 'gift_shipping', 'was_payed', 'gift_for_lastname', 'sci_payment_methods', 'discount_applied', 'rewards_applied', 'stock_before_pol', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. SalesFlatOrderPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('EntityId' => 0, 'State' => 1, 'Status' => 2, 'CouponCode' => 3, 'ProtectCode' => 4, 'ShippingDescription' => 5, 'IsVirtual' => 6, 'StoreId' => 7, 'CustomerId' => 8, 'BaseDiscountAmount' => 9, 'BaseDiscountCanceled' => 10, 'BaseDiscountInvoiced' => 11, 'BaseDiscountRefunded' => 12, 'BaseGrandTotal' => 13, 'BaseShippingAmount' => 14, 'BaseShippingCanceled' => 15, 'BaseShippingInvoiced' => 16, 'BaseShippingRefunded' => 17, 'BaseShippingTaxAmount' => 18, 'BaseShippingTaxRefunded' => 19, 'BaseSubtotal' => 20, 'BaseSubtotalCanceled' => 21, 'BaseSubtotalInvoiced' => 22, 'BaseSubtotalRefunded' => 23, 'BaseTaxAmount' => 24, 'BaseTaxCanceled' => 25, 'BaseTaxInvoiced' => 26, 'BaseTaxRefunded' => 27, 'BaseToGlobalRate' => 28, 'BaseToOrderRate' => 29, 'BaseTotalCanceled' => 30, 'BaseTotalInvoiced' => 31, 'BaseTotalInvoicedCost' => 32, 'BaseTotalOfflineRefunded' => 33, 'BaseTotalOnlineRefunded' => 34, 'BaseTotalPaid' => 35, 'BaseTotalQtyOrdered' => 36, 'BaseTotalRefunded' => 37, 'DiscountAmount' => 38, 'DiscountCanceled' => 39, 'DiscountInvoiced' => 40, 'DiscountRefunded' => 41, 'GrandTotal' => 42, 'ShippingAmount' => 43, 'ShippingCanceled' => 44, 'ShippingInvoiced' => 45, 'ShippingRefunded' => 46, 'ShippingTaxAmount' => 47, 'ShippingTaxRefunded' => 48, 'StoreToBaseRate' => 49, 'StoreToOrderRate' => 50, 'Subtotal' => 51, 'SubtotalCanceled' => 52, 'SubtotalInvoiced' => 53, 'SubtotalRefunded' => 54, 'TaxAmount' => 55, 'TaxCanceled' => 56, 'TaxInvoiced' => 57, 'TaxRefunded' => 58, 'TotalCanceled' => 59, 'TotalInvoiced' => 60, 'TotalOfflineRefunded' => 61, 'TotalOnlineRefunded' => 62, 'TotalPaid' => 63, 'TotalQtyOrdered' => 64, 'TotalRefunded' => 65, 'CanShipPartially' => 66, 'CanShipPartiallyItem' => 67, 'CustomerIsGuest' => 68, 'CustomerNoteNotify' => 69, 'BillingAddressId' => 70, 'CustomerGroupId' => 71, 'EditIncrement' => 72, 'EmailSent' => 73, 'ForcedShipmentWithInvoice' => 74, 'PaymentAuthExpiration' => 75, 'QuoteAddressId' => 76, 'QuoteId' => 77, 'ShippingAddressId' => 78, 'AdjustmentNegative' => 79, 'AdjustmentPositive' => 80, 'BaseAdjustmentNegative' => 81, 'BaseAdjustmentPositive' => 82, 'BaseShippingDiscountAmount' => 83, 'BaseSubtotalInclTax' => 84, 'BaseTotalDue' => 85, 'PaymentAuthorizationAmount' => 86, 'ShippingDiscountAmount' => 87, 'SubtotalInclTax' => 88, 'TotalDue' => 89, 'Weight' => 90, 'CustomerDob' => 91, 'IncrementId' => 92, 'AppliedRuleIds' => 93, 'BaseCurrencyCode' => 94, 'CustomerEmail' => 95, 'CustomerFirstname' => 96, 'CustomerLastname' => 97, 'CustomerMiddlename' => 98, 'CustomerPrefix' => 99, 'CustomerSuffix' => 100, 'CustomerTaxvat' => 101, 'DiscountDescription' => 102, 'ExtCustomerId' => 103, 'ExtOrderId' => 104, 'GlobalCurrencyCode' => 105, 'HoldBeforeState' => 106, 'HoldBeforeStatus' => 107, 'OrderCurrencyCode' => 108, 'OriginalIncrementId' => 109, 'RelationChildId' => 110, 'RelationChildRealId' => 111, 'RelationParentId' => 112, 'RelationParentRealId' => 113, 'RemoteIp' => 114, 'ShippingMethod' => 115, 'StoreCurrencyCode' => 116, 'StoreName' => 117, 'XForwardedFor' => 118, 'CustomerNote' => 119, 'CreatedAt' => 120, 'UpdatedAt' => 121, 'TotalItemCount' => 122, 'CustomerGender' => 123, 'HiddenTaxAmount' => 124, 'BaseHiddenTaxAmount' => 125, 'ShippingHiddenTaxAmount' => 126, 'BaseShippingHiddenTaxAmnt' => 127, 'HiddenTaxInvoiced' => 128, 'BaseHiddenTaxInvoiced' => 129, 'HiddenTaxRefunded' => 130, 'BaseHiddenTaxRefunded' => 131, 'ShippingInclTax' => 132, 'BaseShippingInclTax' => 133, 'CouponRuleName' => 134, 'PaypalIpnCustomerNotified' => 135, 'GiftMessageId' => 136, 'GroupdealsCouponFrom' => 137, 'GroupdealsCouponTo' => 138, 'GroupdealsCouponToEmail' => 139, 'GroupdealsCouponMessage' => 140, 'BaseCustomerBalanceAmount' => 141, 'CustomerBalanceAmount' => 142, 'BaseCustomerBalanceInvoiced' => 143, 'CustomerBalanceInvoiced' => 144, 'BaseCustomerBalanceRefunded' => 145, 'CustomerBalanceRefunded' => 146, 'BsCustomerBalTotalRefunded' => 147, 'CustomerBalTotalRefunded' => 148, 'GiftCards' => 149, 'BaseGiftCardsAmount' => 150, 'GiftCardsAmount' => 151, 'BaseGiftCardsInvoiced' => 152, 'GiftCardsInvoiced' => 153, 'BaseGiftCardsRefunded' => 154, 'GiftCardsRefunded' => 155, 'GwId' => 156, 'GwAllowGiftReceipt' => 157, 'GwAddCard' => 158, 'GwBasePrice' => 159, 'GwPrice' => 160, 'GwItemsBasePrice' => 161, 'GwItemsPrice' => 162, 'GwCardBasePrice' => 163, 'GwCardPrice' => 164, 'GwBaseTaxAmount' => 165, 'GwTaxAmount' => 166, 'GwItemsBaseTaxAmount' => 167, 'GwItemsTaxAmount' => 168, 'GwCardBaseTaxAmount' => 169, 'GwCardTaxAmount' => 170, 'GwBasePriceInvoiced' => 171, 'GwPriceInvoiced' => 172, 'GwItemsBasePriceInvoiced' => 173, 'GwItemsPriceInvoiced' => 174, 'GwCardBasePriceInvoiced' => 175, 'GwCardPriceInvoiced' => 176, 'GwBaseTaxAmountInvoiced' => 177, 'GwTaxAmountInvoiced' => 178, 'GwItemsBaseTaxInvoiced' => 179, 'GwItemsTaxInvoiced' => 180, 'GwCardBaseTaxInvoiced' => 181, 'GwCardTaxInvoiced' => 182, 'GwBasePriceRefunded' => 183, 'GwPriceRefunded' => 184, 'GwItemsBasePriceRefunded' => 185, 'GwItemsPriceRefunded' => 186, 'GwCardBasePriceRefunded' => 187, 'GwCardPriceRefunded' => 188, 'GwBaseTaxAmountRefunded' => 189, 'GwTaxAmountRefunded' => 190, 'GwItemsBaseTaxRefunded' => 191, 'GwItemsTaxRefunded' => 192, 'GwCardBaseTaxRefunded' => 193, 'GwCardTaxRefunded' => 194, 'RewardPointsBalance' => 195, 'BaseRewardCurrencyAmount' => 196, 'RewardCurrencyAmount' => 197, 'BaseRwrdCrrncyAmtInvoiced' => 198, 'RwrdCurrencyAmountInvoiced' => 199, 'BaseRwrdCrrncyAmntRefnded' => 200, 'RwrdCrrncyAmntRefunded' => 201, 'RewardPointsBalanceRefund' => 202, 'RewardPointsBalanceRefunded' => 203, 'RewardSalesrulePoints' => 204, 'VendorUsername' => 205, 'VendorName' => 206, 'VendorLastname' => 207, 'VendorEmail' => 208, 'PosId' => 209, 'PosOffice' => 210, 'PosCode' => 211, 'PosCountry' => 212, 'PosCity' => 213, 'PosPostalCode' => 214, 'PosAddress' => 215, 'PosPhone' => 216, 'CustomerIdentification' => 217, 'IsGift' => 218, 'GiftFor' => 219, 'GiftEmail' => 220, 'GiftMessage' => 221, 'GiftCitydept' => 222, 'GiftShipping' => 223, 'WasPayed' => 224, 'GiftForLastname' => 225, 'SciPaymentMethods' => 226, 'DiscountApplied' => 227, 'RewardsApplied' => 228, 'StockBeforePol' => 229, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('entityId' => 0, 'state' => 1, 'status' => 2, 'couponCode' => 3, 'protectCode' => 4, 'shippingDescription' => 5, 'isVirtual' => 6, 'storeId' => 7, 'customerId' => 8, 'baseDiscountAmount' => 9, 'baseDiscountCanceled' => 10, 'baseDiscountInvoiced' => 11, 'baseDiscountRefunded' => 12, 'baseGrandTotal' => 13, 'baseShippingAmount' => 14, 'baseShippingCanceled' => 15, 'baseShippingInvoiced' => 16, 'baseShippingRefunded' => 17, 'baseShippingTaxAmount' => 18, 'baseShippingTaxRefunded' => 19, 'baseSubtotal' => 20, 'baseSubtotalCanceled' => 21, 'baseSubtotalInvoiced' => 22, 'baseSubtotalRefunded' => 23, 'baseTaxAmount' => 24, 'baseTaxCanceled' => 25, 'baseTaxInvoiced' => 26, 'baseTaxRefunded' => 27, 'baseToGlobalRate' => 28, 'baseToOrderRate' => 29, 'baseTotalCanceled' => 30, 'baseTotalInvoiced' => 31, 'baseTotalInvoicedCost' => 32, 'baseTotalOfflineRefunded' => 33, 'baseTotalOnlineRefunded' => 34, 'baseTotalPaid' => 35, 'baseTotalQtyOrdered' => 36, 'baseTotalRefunded' => 37, 'discountAmount' => 38, 'discountCanceled' => 39, 'discountInvoiced' => 40, 'discountRefunded' => 41, 'grandTotal' => 42, 'shippingAmount' => 43, 'shippingCanceled' => 44, 'shippingInvoiced' => 45, 'shippingRefunded' => 46, 'shippingTaxAmount' => 47, 'shippingTaxRefunded' => 48, 'storeToBaseRate' => 49, 'storeToOrderRate' => 50, 'subtotal' => 51, 'subtotalCanceled' => 52, 'subtotalInvoiced' => 53, 'subtotalRefunded' => 54, 'taxAmount' => 55, 'taxCanceled' => 56, 'taxInvoiced' => 57, 'taxRefunded' => 58, 'totalCanceled' => 59, 'totalInvoiced' => 60, 'totalOfflineRefunded' => 61, 'totalOnlineRefunded' => 62, 'totalPaid' => 63, 'totalQtyOrdered' => 64, 'totalRefunded' => 65, 'canShipPartially' => 66, 'canShipPartiallyItem' => 67, 'customerIsGuest' => 68, 'customerNoteNotify' => 69, 'billingAddressId' => 70, 'customerGroupId' => 71, 'editIncrement' => 72, 'emailSent' => 73, 'forcedShipmentWithInvoice' => 74, 'paymentAuthExpiration' => 75, 'quoteAddressId' => 76, 'quoteId' => 77, 'shippingAddressId' => 78, 'adjustmentNegative' => 79, 'adjustmentPositive' => 80, 'baseAdjustmentNegative' => 81, 'baseAdjustmentPositive' => 82, 'baseShippingDiscountAmount' => 83, 'baseSubtotalInclTax' => 84, 'baseTotalDue' => 85, 'paymentAuthorizationAmount' => 86, 'shippingDiscountAmount' => 87, 'subtotalInclTax' => 88, 'totalDue' => 89, 'weight' => 90, 'customerDob' => 91, 'incrementId' => 92, 'appliedRuleIds' => 93, 'baseCurrencyCode' => 94, 'customerEmail' => 95, 'customerFirstname' => 96, 'customerLastname' => 97, 'customerMiddlename' => 98, 'customerPrefix' => 99, 'customerSuffix' => 100, 'customerTaxvat' => 101, 'discountDescription' => 102, 'extCustomerId' => 103, 'extOrderId' => 104, 'globalCurrencyCode' => 105, 'holdBeforeState' => 106, 'holdBeforeStatus' => 107, 'orderCurrencyCode' => 108, 'originalIncrementId' => 109, 'relationChildId' => 110, 'relationChildRealId' => 111, 'relationParentId' => 112, 'relationParentRealId' => 113, 'remoteIp' => 114, 'shippingMethod' => 115, 'storeCurrencyCode' => 116, 'storeName' => 117, 'xForwardedFor' => 118, 'customerNote' => 119, 'createdAt' => 120, 'updatedAt' => 121, 'totalItemCount' => 122, 'customerGender' => 123, 'hiddenTaxAmount' => 124, 'baseHiddenTaxAmount' => 125, 'shippingHiddenTaxAmount' => 126, 'baseShippingHiddenTaxAmnt' => 127, 'hiddenTaxInvoiced' => 128, 'baseHiddenTaxInvoiced' => 129, 'hiddenTaxRefunded' => 130, 'baseHiddenTaxRefunded' => 131, 'shippingInclTax' => 132, 'baseShippingInclTax' => 133, 'couponRuleName' => 134, 'paypalIpnCustomerNotified' => 135, 'giftMessageId' => 136, 'groupdealsCouponFrom' => 137, 'groupdealsCouponTo' => 138, 'groupdealsCouponToEmail' => 139, 'groupdealsCouponMessage' => 140, 'baseCustomerBalanceAmount' => 141, 'customerBalanceAmount' => 142, 'baseCustomerBalanceInvoiced' => 143, 'customerBalanceInvoiced' => 144, 'baseCustomerBalanceRefunded' => 145, 'customerBalanceRefunded' => 146, 'bsCustomerBalTotalRefunded' => 147, 'customerBalTotalRefunded' => 148, 'giftCards' => 149, 'baseGiftCardsAmount' => 150, 'giftCardsAmount' => 151, 'baseGiftCardsInvoiced' => 152, 'giftCardsInvoiced' => 153, 'baseGiftCardsRefunded' => 154, 'giftCardsRefunded' => 155, 'gwId' => 156, 'gwAllowGiftReceipt' => 157, 'gwAddCard' => 158, 'gwBasePrice' => 159, 'gwPrice' => 160, 'gwItemsBasePrice' => 161, 'gwItemsPrice' => 162, 'gwCardBasePrice' => 163, 'gwCardPrice' => 164, 'gwBaseTaxAmount' => 165, 'gwTaxAmount' => 166, 'gwItemsBaseTaxAmount' => 167, 'gwItemsTaxAmount' => 168, 'gwCardBaseTaxAmount' => 169, 'gwCardTaxAmount' => 170, 'gwBasePriceInvoiced' => 171, 'gwPriceInvoiced' => 172, 'gwItemsBasePriceInvoiced' => 173, 'gwItemsPriceInvoiced' => 174, 'gwCardBasePriceInvoiced' => 175, 'gwCardPriceInvoiced' => 176, 'gwBaseTaxAmountInvoiced' => 177, 'gwTaxAmountInvoiced' => 178, 'gwItemsBaseTaxInvoiced' => 179, 'gwItemsTaxInvoiced' => 180, 'gwCardBaseTaxInvoiced' => 181, 'gwCardTaxInvoiced' => 182, 'gwBasePriceRefunded' => 183, 'gwPriceRefunded' => 184, 'gwItemsBasePriceRefunded' => 185, 'gwItemsPriceRefunded' => 186, 'gwCardBasePriceRefunded' => 187, 'gwCardPriceRefunded' => 188, 'gwBaseTaxAmountRefunded' => 189, 'gwTaxAmountRefunded' => 190, 'gwItemsBaseTaxRefunded' => 191, 'gwItemsTaxRefunded' => 192, 'gwCardBaseTaxRefunded' => 193, 'gwCardTaxRefunded' => 194, 'rewardPointsBalance' => 195, 'baseRewardCurrencyAmount' => 196, 'rewardCurrencyAmount' => 197, 'baseRwrdCrrncyAmtInvoiced' => 198, 'rwrdCurrencyAmountInvoiced' => 199, 'baseRwrdCrrncyAmntRefnded' => 200, 'rwrdCrrncyAmntRefunded' => 201, 'rewardPointsBalanceRefund' => 202, 'rewardPointsBalanceRefunded' => 203, 'rewardSalesrulePoints' => 204, 'vendorUsername' => 205, 'vendorName' => 206, 'vendorLastname' => 207, 'vendorEmail' => 208, 'posId' => 209, 'posOffice' => 210, 'posCode' => 211, 'posCountry' => 212, 'posCity' => 213, 'posPostalCode' => 214, 'posAddress' => 215, 'posPhone' => 216, 'customerIdentification' => 217, 'isGift' => 218, 'giftFor' => 219, 'giftEmail' => 220, 'giftMessage' => 221, 'giftCitydept' => 222, 'giftShipping' => 223, 'wasPayed' => 224, 'giftForLastname' => 225, 'sciPaymentMethods' => 226, 'discountApplied' => 227, 'rewardsApplied' => 228, 'stockBeforePol' => 229, ),
        BasePeer::TYPE_COLNAME => array (SalesFlatOrderPeer::ENTITY_ID => 0, SalesFlatOrderPeer::STATE => 1, SalesFlatOrderPeer::STATUS => 2, SalesFlatOrderPeer::COUPON_CODE => 3, SalesFlatOrderPeer::PROTECT_CODE => 4, SalesFlatOrderPeer::SHIPPING_DESCRIPTION => 5, SalesFlatOrderPeer::IS_VIRTUAL => 6, SalesFlatOrderPeer::STORE_ID => 7, SalesFlatOrderPeer::CUSTOMER_ID => 8, SalesFlatOrderPeer::BASE_DISCOUNT_AMOUNT => 9, SalesFlatOrderPeer::BASE_DISCOUNT_CANCELED => 10, SalesFlatOrderPeer::BASE_DISCOUNT_INVOICED => 11, SalesFlatOrderPeer::BASE_DISCOUNT_REFUNDED => 12, SalesFlatOrderPeer::BASE_GRAND_TOTAL => 13, SalesFlatOrderPeer::BASE_SHIPPING_AMOUNT => 14, SalesFlatOrderPeer::BASE_SHIPPING_CANCELED => 15, SalesFlatOrderPeer::BASE_SHIPPING_INVOICED => 16, SalesFlatOrderPeer::BASE_SHIPPING_REFUNDED => 17, SalesFlatOrderPeer::BASE_SHIPPING_TAX_AMOUNT => 18, SalesFlatOrderPeer::BASE_SHIPPING_TAX_REFUNDED => 19, SalesFlatOrderPeer::BASE_SUBTOTAL => 20, SalesFlatOrderPeer::BASE_SUBTOTAL_CANCELED => 21, SalesFlatOrderPeer::BASE_SUBTOTAL_INVOICED => 22, SalesFlatOrderPeer::BASE_SUBTOTAL_REFUNDED => 23, SalesFlatOrderPeer::BASE_TAX_AMOUNT => 24, SalesFlatOrderPeer::BASE_TAX_CANCELED => 25, SalesFlatOrderPeer::BASE_TAX_INVOICED => 26, SalesFlatOrderPeer::BASE_TAX_REFUNDED => 27, SalesFlatOrderPeer::BASE_TO_GLOBAL_RATE => 28, SalesFlatOrderPeer::BASE_TO_ORDER_RATE => 29, SalesFlatOrderPeer::BASE_TOTAL_CANCELED => 30, SalesFlatOrderPeer::BASE_TOTAL_INVOICED => 31, SalesFlatOrderPeer::BASE_TOTAL_INVOICED_COST => 32, SalesFlatOrderPeer::BASE_TOTAL_OFFLINE_REFUNDED => 33, SalesFlatOrderPeer::BASE_TOTAL_ONLINE_REFUNDED => 34, SalesFlatOrderPeer::BASE_TOTAL_PAID => 35, SalesFlatOrderPeer::BASE_TOTAL_QTY_ORDERED => 36, SalesFlatOrderPeer::BASE_TOTAL_REFUNDED => 37, SalesFlatOrderPeer::DISCOUNT_AMOUNT => 38, SalesFlatOrderPeer::DISCOUNT_CANCELED => 39, SalesFlatOrderPeer::DISCOUNT_INVOICED => 40, SalesFlatOrderPeer::DISCOUNT_REFUNDED => 41, SalesFlatOrderPeer::GRAND_TOTAL => 42, SalesFlatOrderPeer::SHIPPING_AMOUNT => 43, SalesFlatOrderPeer::SHIPPING_CANCELED => 44, SalesFlatOrderPeer::SHIPPING_INVOICED => 45, SalesFlatOrderPeer::SHIPPING_REFUNDED => 46, SalesFlatOrderPeer::SHIPPING_TAX_AMOUNT => 47, SalesFlatOrderPeer::SHIPPING_TAX_REFUNDED => 48, SalesFlatOrderPeer::STORE_TO_BASE_RATE => 49, SalesFlatOrderPeer::STORE_TO_ORDER_RATE => 50, SalesFlatOrderPeer::SUBTOTAL => 51, SalesFlatOrderPeer::SUBTOTAL_CANCELED => 52, SalesFlatOrderPeer::SUBTOTAL_INVOICED => 53, SalesFlatOrderPeer::SUBTOTAL_REFUNDED => 54, SalesFlatOrderPeer::TAX_AMOUNT => 55, SalesFlatOrderPeer::TAX_CANCELED => 56, SalesFlatOrderPeer::TAX_INVOICED => 57, SalesFlatOrderPeer::TAX_REFUNDED => 58, SalesFlatOrderPeer::TOTAL_CANCELED => 59, SalesFlatOrderPeer::TOTAL_INVOICED => 60, SalesFlatOrderPeer::TOTAL_OFFLINE_REFUNDED => 61, SalesFlatOrderPeer::TOTAL_ONLINE_REFUNDED => 62, SalesFlatOrderPeer::TOTAL_PAID => 63, SalesFlatOrderPeer::TOTAL_QTY_ORDERED => 64, SalesFlatOrderPeer::TOTAL_REFUNDED => 65, SalesFlatOrderPeer::CAN_SHIP_PARTIALLY => 66, SalesFlatOrderPeer::CAN_SHIP_PARTIALLY_ITEM => 67, SalesFlatOrderPeer::CUSTOMER_IS_GUEST => 68, SalesFlatOrderPeer::CUSTOMER_NOTE_NOTIFY => 69, SalesFlatOrderPeer::BILLING_ADDRESS_ID => 70, SalesFlatOrderPeer::CUSTOMER_GROUP_ID => 71, SalesFlatOrderPeer::EDIT_INCREMENT => 72, SalesFlatOrderPeer::EMAIL_SENT => 73, SalesFlatOrderPeer::FORCED_SHIPMENT_WITH_INVOICE => 74, SalesFlatOrderPeer::PAYMENT_AUTH_EXPIRATION => 75, SalesFlatOrderPeer::QUOTE_ADDRESS_ID => 76, SalesFlatOrderPeer::QUOTE_ID => 77, SalesFlatOrderPeer::SHIPPING_ADDRESS_ID => 78, SalesFlatOrderPeer::ADJUSTMENT_NEGATIVE => 79, SalesFlatOrderPeer::ADJUSTMENT_POSITIVE => 80, SalesFlatOrderPeer::BASE_ADJUSTMENT_NEGATIVE => 81, SalesFlatOrderPeer::BASE_ADJUSTMENT_POSITIVE => 82, SalesFlatOrderPeer::BASE_SHIPPING_DISCOUNT_AMOUNT => 83, SalesFlatOrderPeer::BASE_SUBTOTAL_INCL_TAX => 84, SalesFlatOrderPeer::BASE_TOTAL_DUE => 85, SalesFlatOrderPeer::PAYMENT_AUTHORIZATION_AMOUNT => 86, SalesFlatOrderPeer::SHIPPING_DISCOUNT_AMOUNT => 87, SalesFlatOrderPeer::SUBTOTAL_INCL_TAX => 88, SalesFlatOrderPeer::TOTAL_DUE => 89, SalesFlatOrderPeer::WEIGHT => 90, SalesFlatOrderPeer::CUSTOMER_DOB => 91, SalesFlatOrderPeer::INCREMENT_ID => 92, SalesFlatOrderPeer::APPLIED_RULE_IDS => 93, SalesFlatOrderPeer::BASE_CURRENCY_CODE => 94, SalesFlatOrderPeer::CUSTOMER_EMAIL => 95, SalesFlatOrderPeer::CUSTOMER_FIRSTNAME => 96, SalesFlatOrderPeer::CUSTOMER_LASTNAME => 97, SalesFlatOrderPeer::CUSTOMER_MIDDLENAME => 98, SalesFlatOrderPeer::CUSTOMER_PREFIX => 99, SalesFlatOrderPeer::CUSTOMER_SUFFIX => 100, SalesFlatOrderPeer::CUSTOMER_TAXVAT => 101, SalesFlatOrderPeer::DISCOUNT_DESCRIPTION => 102, SalesFlatOrderPeer::EXT_CUSTOMER_ID => 103, SalesFlatOrderPeer::EXT_ORDER_ID => 104, SalesFlatOrderPeer::GLOBAL_CURRENCY_CODE => 105, SalesFlatOrderPeer::HOLD_BEFORE_STATE => 106, SalesFlatOrderPeer::HOLD_BEFORE_STATUS => 107, SalesFlatOrderPeer::ORDER_CURRENCY_CODE => 108, SalesFlatOrderPeer::ORIGINAL_INCREMENT_ID => 109, SalesFlatOrderPeer::RELATION_CHILD_ID => 110, SalesFlatOrderPeer::RELATION_CHILD_REAL_ID => 111, SalesFlatOrderPeer::RELATION_PARENT_ID => 112, SalesFlatOrderPeer::RELATION_PARENT_REAL_ID => 113, SalesFlatOrderPeer::REMOTE_IP => 114, SalesFlatOrderPeer::SHIPPING_METHOD => 115, SalesFlatOrderPeer::STORE_CURRENCY_CODE => 116, SalesFlatOrderPeer::STORE_NAME => 117, SalesFlatOrderPeer::X_FORWARDED_FOR => 118, SalesFlatOrderPeer::CUSTOMER_NOTE => 119, SalesFlatOrderPeer::CREATED_AT => 120, SalesFlatOrderPeer::UPDATED_AT => 121, SalesFlatOrderPeer::TOTAL_ITEM_COUNT => 122, SalesFlatOrderPeer::CUSTOMER_GENDER => 123, SalesFlatOrderPeer::HIDDEN_TAX_AMOUNT => 124, SalesFlatOrderPeer::BASE_HIDDEN_TAX_AMOUNT => 125, SalesFlatOrderPeer::SHIPPING_HIDDEN_TAX_AMOUNT => 126, SalesFlatOrderPeer::BASE_SHIPPING_HIDDEN_TAX_AMNT => 127, SalesFlatOrderPeer::HIDDEN_TAX_INVOICED => 128, SalesFlatOrderPeer::BASE_HIDDEN_TAX_INVOICED => 129, SalesFlatOrderPeer::HIDDEN_TAX_REFUNDED => 130, SalesFlatOrderPeer::BASE_HIDDEN_TAX_REFUNDED => 131, SalesFlatOrderPeer::SHIPPING_INCL_TAX => 132, SalesFlatOrderPeer::BASE_SHIPPING_INCL_TAX => 133, SalesFlatOrderPeer::COUPON_RULE_NAME => 134, SalesFlatOrderPeer::PAYPAL_IPN_CUSTOMER_NOTIFIED => 135, SalesFlatOrderPeer::GIFT_MESSAGE_ID => 136, SalesFlatOrderPeer::GROUPDEALS_COUPON_FROM => 137, SalesFlatOrderPeer::GROUPDEALS_COUPON_TO => 138, SalesFlatOrderPeer::GROUPDEALS_COUPON_TO_EMAIL => 139, SalesFlatOrderPeer::GROUPDEALS_COUPON_MESSAGE => 140, SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_AMOUNT => 141, SalesFlatOrderPeer::CUSTOMER_BALANCE_AMOUNT => 142, SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_INVOICED => 143, SalesFlatOrderPeer::CUSTOMER_BALANCE_INVOICED => 144, SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_REFUNDED => 145, SalesFlatOrderPeer::CUSTOMER_BALANCE_REFUNDED => 146, SalesFlatOrderPeer::BS_CUSTOMER_BAL_TOTAL_REFUNDED => 147, SalesFlatOrderPeer::CUSTOMER_BAL_TOTAL_REFUNDED => 148, SalesFlatOrderPeer::GIFT_CARDS => 149, SalesFlatOrderPeer::BASE_GIFT_CARDS_AMOUNT => 150, SalesFlatOrderPeer::GIFT_CARDS_AMOUNT => 151, SalesFlatOrderPeer::BASE_GIFT_CARDS_INVOICED => 152, SalesFlatOrderPeer::GIFT_CARDS_INVOICED => 153, SalesFlatOrderPeer::BASE_GIFT_CARDS_REFUNDED => 154, SalesFlatOrderPeer::GIFT_CARDS_REFUNDED => 155, SalesFlatOrderPeer::GW_ID => 156, SalesFlatOrderPeer::GW_ALLOW_GIFT_RECEIPT => 157, SalesFlatOrderPeer::GW_ADD_CARD => 158, SalesFlatOrderPeer::GW_BASE_PRICE => 159, SalesFlatOrderPeer::GW_PRICE => 160, SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE => 161, SalesFlatOrderPeer::GW_ITEMS_PRICE => 162, SalesFlatOrderPeer::GW_CARD_BASE_PRICE => 163, SalesFlatOrderPeer::GW_CARD_PRICE => 164, SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT => 165, SalesFlatOrderPeer::GW_TAX_AMOUNT => 166, SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_AMOUNT => 167, SalesFlatOrderPeer::GW_ITEMS_TAX_AMOUNT => 168, SalesFlatOrderPeer::GW_CARD_BASE_TAX_AMOUNT => 169, SalesFlatOrderPeer::GW_CARD_TAX_AMOUNT => 170, SalesFlatOrderPeer::GW_BASE_PRICE_INVOICED => 171, SalesFlatOrderPeer::GW_PRICE_INVOICED => 172, SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_INVOICED => 173, SalesFlatOrderPeer::GW_ITEMS_PRICE_INVOICED => 174, SalesFlatOrderPeer::GW_CARD_BASE_PRICE_INVOICED => 175, SalesFlatOrderPeer::GW_CARD_PRICE_INVOICED => 176, SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_INVOICED => 177, SalesFlatOrderPeer::GW_TAX_AMOUNT_INVOICED => 178, SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_INVOICED => 179, SalesFlatOrderPeer::GW_ITEMS_TAX_INVOICED => 180, SalesFlatOrderPeer::GW_CARD_BASE_TAX_INVOICED => 181, SalesFlatOrderPeer::GW_CARD_TAX_INVOICED => 182, SalesFlatOrderPeer::GW_BASE_PRICE_REFUNDED => 183, SalesFlatOrderPeer::GW_PRICE_REFUNDED => 184, SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_REFUNDED => 185, SalesFlatOrderPeer::GW_ITEMS_PRICE_REFUNDED => 186, SalesFlatOrderPeer::GW_CARD_BASE_PRICE_REFUNDED => 187, SalesFlatOrderPeer::GW_CARD_PRICE_REFUNDED => 188, SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_REFUNDED => 189, SalesFlatOrderPeer::GW_TAX_AMOUNT_REFUNDED => 190, SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_REFUNDED => 191, SalesFlatOrderPeer::GW_ITEMS_TAX_REFUNDED => 192, SalesFlatOrderPeer::GW_CARD_BASE_TAX_REFUNDED => 193, SalesFlatOrderPeer::GW_CARD_TAX_REFUNDED => 194, SalesFlatOrderPeer::REWARD_POINTS_BALANCE => 195, SalesFlatOrderPeer::BASE_REWARD_CURRENCY_AMOUNT => 196, SalesFlatOrderPeer::REWARD_CURRENCY_AMOUNT => 197, SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMT_INVOICED => 198, SalesFlatOrderPeer::RWRD_CURRENCY_AMOUNT_INVOICED => 199, SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMNT_REFNDED => 200, SalesFlatOrderPeer::RWRD_CRRNCY_AMNT_REFUNDED => 201, SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUND => 202, SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUNDED => 203, SalesFlatOrderPeer::REWARD_SALESRULE_POINTS => 204, SalesFlatOrderPeer::VENDOR_USERNAME => 205, SalesFlatOrderPeer::VENDOR_NAME => 206, SalesFlatOrderPeer::VENDOR_LASTNAME => 207, SalesFlatOrderPeer::VENDOR_EMAIL => 208, SalesFlatOrderPeer::POS_ID => 209, SalesFlatOrderPeer::POS_OFFICE => 210, SalesFlatOrderPeer::POS_CODE => 211, SalesFlatOrderPeer::POS_COUNTRY => 212, SalesFlatOrderPeer::POS_CITY => 213, SalesFlatOrderPeer::POS_POSTAL_CODE => 214, SalesFlatOrderPeer::POS_ADDRESS => 215, SalesFlatOrderPeer::POS_PHONE => 216, SalesFlatOrderPeer::CUSTOMER_IDENTIFICATION => 217, SalesFlatOrderPeer::IS_GIFT => 218, SalesFlatOrderPeer::GIFT_FOR => 219, SalesFlatOrderPeer::GIFT_EMAIL => 220, SalesFlatOrderPeer::GIFT_MESSAGE => 221, SalesFlatOrderPeer::GIFT_CITYDEPT => 222, SalesFlatOrderPeer::GIFT_SHIPPING => 223, SalesFlatOrderPeer::WAS_PAYED => 224, SalesFlatOrderPeer::GIFT_FOR_LASTNAME => 225, SalesFlatOrderPeer::SCI_PAYMENT_METHODS => 226, SalesFlatOrderPeer::DISCOUNT_APPLIED => 227, SalesFlatOrderPeer::REWARDS_APPLIED => 228, SalesFlatOrderPeer::STOCK_BEFORE_POL => 229, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ENTITY_ID' => 0, 'STATE' => 1, 'STATUS' => 2, 'COUPON_CODE' => 3, 'PROTECT_CODE' => 4, 'SHIPPING_DESCRIPTION' => 5, 'IS_VIRTUAL' => 6, 'STORE_ID' => 7, 'CUSTOMER_ID' => 8, 'BASE_DISCOUNT_AMOUNT' => 9, 'BASE_DISCOUNT_CANCELED' => 10, 'BASE_DISCOUNT_INVOICED' => 11, 'BASE_DISCOUNT_REFUNDED' => 12, 'BASE_GRAND_TOTAL' => 13, 'BASE_SHIPPING_AMOUNT' => 14, 'BASE_SHIPPING_CANCELED' => 15, 'BASE_SHIPPING_INVOICED' => 16, 'BASE_SHIPPING_REFUNDED' => 17, 'BASE_SHIPPING_TAX_AMOUNT' => 18, 'BASE_SHIPPING_TAX_REFUNDED' => 19, 'BASE_SUBTOTAL' => 20, 'BASE_SUBTOTAL_CANCELED' => 21, 'BASE_SUBTOTAL_INVOICED' => 22, 'BASE_SUBTOTAL_REFUNDED' => 23, 'BASE_TAX_AMOUNT' => 24, 'BASE_TAX_CANCELED' => 25, 'BASE_TAX_INVOICED' => 26, 'BASE_TAX_REFUNDED' => 27, 'BASE_TO_GLOBAL_RATE' => 28, 'BASE_TO_ORDER_RATE' => 29, 'BASE_TOTAL_CANCELED' => 30, 'BASE_TOTAL_INVOICED' => 31, 'BASE_TOTAL_INVOICED_COST' => 32, 'BASE_TOTAL_OFFLINE_REFUNDED' => 33, 'BASE_TOTAL_ONLINE_REFUNDED' => 34, 'BASE_TOTAL_PAID' => 35, 'BASE_TOTAL_QTY_ORDERED' => 36, 'BASE_TOTAL_REFUNDED' => 37, 'DISCOUNT_AMOUNT' => 38, 'DISCOUNT_CANCELED' => 39, 'DISCOUNT_INVOICED' => 40, 'DISCOUNT_REFUNDED' => 41, 'GRAND_TOTAL' => 42, 'SHIPPING_AMOUNT' => 43, 'SHIPPING_CANCELED' => 44, 'SHIPPING_INVOICED' => 45, 'SHIPPING_REFUNDED' => 46, 'SHIPPING_TAX_AMOUNT' => 47, 'SHIPPING_TAX_REFUNDED' => 48, 'STORE_TO_BASE_RATE' => 49, 'STORE_TO_ORDER_RATE' => 50, 'SUBTOTAL' => 51, 'SUBTOTAL_CANCELED' => 52, 'SUBTOTAL_INVOICED' => 53, 'SUBTOTAL_REFUNDED' => 54, 'TAX_AMOUNT' => 55, 'TAX_CANCELED' => 56, 'TAX_INVOICED' => 57, 'TAX_REFUNDED' => 58, 'TOTAL_CANCELED' => 59, 'TOTAL_INVOICED' => 60, 'TOTAL_OFFLINE_REFUNDED' => 61, 'TOTAL_ONLINE_REFUNDED' => 62, 'TOTAL_PAID' => 63, 'TOTAL_QTY_ORDERED' => 64, 'TOTAL_REFUNDED' => 65, 'CAN_SHIP_PARTIALLY' => 66, 'CAN_SHIP_PARTIALLY_ITEM' => 67, 'CUSTOMER_IS_GUEST' => 68, 'CUSTOMER_NOTE_NOTIFY' => 69, 'BILLING_ADDRESS_ID' => 70, 'CUSTOMER_GROUP_ID' => 71, 'EDIT_INCREMENT' => 72, 'EMAIL_SENT' => 73, 'FORCED_SHIPMENT_WITH_INVOICE' => 74, 'PAYMENT_AUTH_EXPIRATION' => 75, 'QUOTE_ADDRESS_ID' => 76, 'QUOTE_ID' => 77, 'SHIPPING_ADDRESS_ID' => 78, 'ADJUSTMENT_NEGATIVE' => 79, 'ADJUSTMENT_POSITIVE' => 80, 'BASE_ADJUSTMENT_NEGATIVE' => 81, 'BASE_ADJUSTMENT_POSITIVE' => 82, 'BASE_SHIPPING_DISCOUNT_AMOUNT' => 83, 'BASE_SUBTOTAL_INCL_TAX' => 84, 'BASE_TOTAL_DUE' => 85, 'PAYMENT_AUTHORIZATION_AMOUNT' => 86, 'SHIPPING_DISCOUNT_AMOUNT' => 87, 'SUBTOTAL_INCL_TAX' => 88, 'TOTAL_DUE' => 89, 'WEIGHT' => 90, 'CUSTOMER_DOB' => 91, 'INCREMENT_ID' => 92, 'APPLIED_RULE_IDS' => 93, 'BASE_CURRENCY_CODE' => 94, 'CUSTOMER_EMAIL' => 95, 'CUSTOMER_FIRSTNAME' => 96, 'CUSTOMER_LASTNAME' => 97, 'CUSTOMER_MIDDLENAME' => 98, 'CUSTOMER_PREFIX' => 99, 'CUSTOMER_SUFFIX' => 100, 'CUSTOMER_TAXVAT' => 101, 'DISCOUNT_DESCRIPTION' => 102, 'EXT_CUSTOMER_ID' => 103, 'EXT_ORDER_ID' => 104, 'GLOBAL_CURRENCY_CODE' => 105, 'HOLD_BEFORE_STATE' => 106, 'HOLD_BEFORE_STATUS' => 107, 'ORDER_CURRENCY_CODE' => 108, 'ORIGINAL_INCREMENT_ID' => 109, 'RELATION_CHILD_ID' => 110, 'RELATION_CHILD_REAL_ID' => 111, 'RELATION_PARENT_ID' => 112, 'RELATION_PARENT_REAL_ID' => 113, 'REMOTE_IP' => 114, 'SHIPPING_METHOD' => 115, 'STORE_CURRENCY_CODE' => 116, 'STORE_NAME' => 117, 'X_FORWARDED_FOR' => 118, 'CUSTOMER_NOTE' => 119, 'CREATED_AT' => 120, 'UPDATED_AT' => 121, 'TOTAL_ITEM_COUNT' => 122, 'CUSTOMER_GENDER' => 123, 'HIDDEN_TAX_AMOUNT' => 124, 'BASE_HIDDEN_TAX_AMOUNT' => 125, 'SHIPPING_HIDDEN_TAX_AMOUNT' => 126, 'BASE_SHIPPING_HIDDEN_TAX_AMNT' => 127, 'HIDDEN_TAX_INVOICED' => 128, 'BASE_HIDDEN_TAX_INVOICED' => 129, 'HIDDEN_TAX_REFUNDED' => 130, 'BASE_HIDDEN_TAX_REFUNDED' => 131, 'SHIPPING_INCL_TAX' => 132, 'BASE_SHIPPING_INCL_TAX' => 133, 'COUPON_RULE_NAME' => 134, 'PAYPAL_IPN_CUSTOMER_NOTIFIED' => 135, 'GIFT_MESSAGE_ID' => 136, 'GROUPDEALS_COUPON_FROM' => 137, 'GROUPDEALS_COUPON_TO' => 138, 'GROUPDEALS_COUPON_TO_EMAIL' => 139, 'GROUPDEALS_COUPON_MESSAGE' => 140, 'BASE_CUSTOMER_BALANCE_AMOUNT' => 141, 'CUSTOMER_BALANCE_AMOUNT' => 142, 'BASE_CUSTOMER_BALANCE_INVOICED' => 143, 'CUSTOMER_BALANCE_INVOICED' => 144, 'BASE_CUSTOMER_BALANCE_REFUNDED' => 145, 'CUSTOMER_BALANCE_REFUNDED' => 146, 'BS_CUSTOMER_BAL_TOTAL_REFUNDED' => 147, 'CUSTOMER_BAL_TOTAL_REFUNDED' => 148, 'GIFT_CARDS' => 149, 'BASE_GIFT_CARDS_AMOUNT' => 150, 'GIFT_CARDS_AMOUNT' => 151, 'BASE_GIFT_CARDS_INVOICED' => 152, 'GIFT_CARDS_INVOICED' => 153, 'BASE_GIFT_CARDS_REFUNDED' => 154, 'GIFT_CARDS_REFUNDED' => 155, 'GW_ID' => 156, 'GW_ALLOW_GIFT_RECEIPT' => 157, 'GW_ADD_CARD' => 158, 'GW_BASE_PRICE' => 159, 'GW_PRICE' => 160, 'GW_ITEMS_BASE_PRICE' => 161, 'GW_ITEMS_PRICE' => 162, 'GW_CARD_BASE_PRICE' => 163, 'GW_CARD_PRICE' => 164, 'GW_BASE_TAX_AMOUNT' => 165, 'GW_TAX_AMOUNT' => 166, 'GW_ITEMS_BASE_TAX_AMOUNT' => 167, 'GW_ITEMS_TAX_AMOUNT' => 168, 'GW_CARD_BASE_TAX_AMOUNT' => 169, 'GW_CARD_TAX_AMOUNT' => 170, 'GW_BASE_PRICE_INVOICED' => 171, 'GW_PRICE_INVOICED' => 172, 'GW_ITEMS_BASE_PRICE_INVOICED' => 173, 'GW_ITEMS_PRICE_INVOICED' => 174, 'GW_CARD_BASE_PRICE_INVOICED' => 175, 'GW_CARD_PRICE_INVOICED' => 176, 'GW_BASE_TAX_AMOUNT_INVOICED' => 177, 'GW_TAX_AMOUNT_INVOICED' => 178, 'GW_ITEMS_BASE_TAX_INVOICED' => 179, 'GW_ITEMS_TAX_INVOICED' => 180, 'GW_CARD_BASE_TAX_INVOICED' => 181, 'GW_CARD_TAX_INVOICED' => 182, 'GW_BASE_PRICE_REFUNDED' => 183, 'GW_PRICE_REFUNDED' => 184, 'GW_ITEMS_BASE_PRICE_REFUNDED' => 185, 'GW_ITEMS_PRICE_REFUNDED' => 186, 'GW_CARD_BASE_PRICE_REFUNDED' => 187, 'GW_CARD_PRICE_REFUNDED' => 188, 'GW_BASE_TAX_AMOUNT_REFUNDED' => 189, 'GW_TAX_AMOUNT_REFUNDED' => 190, 'GW_ITEMS_BASE_TAX_REFUNDED' => 191, 'GW_ITEMS_TAX_REFUNDED' => 192, 'GW_CARD_BASE_TAX_REFUNDED' => 193, 'GW_CARD_TAX_REFUNDED' => 194, 'REWARD_POINTS_BALANCE' => 195, 'BASE_REWARD_CURRENCY_AMOUNT' => 196, 'REWARD_CURRENCY_AMOUNT' => 197, 'BASE_RWRD_CRRNCY_AMT_INVOICED' => 198, 'RWRD_CURRENCY_AMOUNT_INVOICED' => 199, 'BASE_RWRD_CRRNCY_AMNT_REFNDED' => 200, 'RWRD_CRRNCY_AMNT_REFUNDED' => 201, 'REWARD_POINTS_BALANCE_REFUND' => 202, 'REWARD_POINTS_BALANCE_REFUNDED' => 203, 'REWARD_SALESRULE_POINTS' => 204, 'VENDOR_USERNAME' => 205, 'VENDOR_NAME' => 206, 'VENDOR_LASTNAME' => 207, 'VENDOR_EMAIL' => 208, 'POS_ID' => 209, 'POS_OFFICE' => 210, 'POS_CODE' => 211, 'POS_COUNTRY' => 212, 'POS_CITY' => 213, 'POS_POSTAL_CODE' => 214, 'POS_ADDRESS' => 215, 'POS_PHONE' => 216, 'CUSTOMER_IDENTIFICATION' => 217, 'IS_GIFT' => 218, 'GIFT_FOR' => 219, 'GIFT_EMAIL' => 220, 'GIFT_MESSAGE' => 221, 'GIFT_CITYDEPT' => 222, 'GIFT_SHIPPING' => 223, 'WAS_PAYED' => 224, 'GIFT_FOR_LASTNAME' => 225, 'SCI_PAYMENT_METHODS' => 226, 'DISCOUNT_APPLIED' => 227, 'REWARDS_APPLIED' => 228, 'STOCK_BEFORE_POL' => 229, ),
        BasePeer::TYPE_FIELDNAME => array ('entity_id' => 0, 'state' => 1, 'status' => 2, 'coupon_code' => 3, 'protect_code' => 4, 'shipping_description' => 5, 'is_virtual' => 6, 'store_id' => 7, 'customer_id' => 8, 'base_discount_amount' => 9, 'base_discount_canceled' => 10, 'base_discount_invoiced' => 11, 'base_discount_refunded' => 12, 'base_grand_total' => 13, 'base_shipping_amount' => 14, 'base_shipping_canceled' => 15, 'base_shipping_invoiced' => 16, 'base_shipping_refunded' => 17, 'base_shipping_tax_amount' => 18, 'base_shipping_tax_refunded' => 19, 'base_subtotal' => 20, 'base_subtotal_canceled' => 21, 'base_subtotal_invoiced' => 22, 'base_subtotal_refunded' => 23, 'base_tax_amount' => 24, 'base_tax_canceled' => 25, 'base_tax_invoiced' => 26, 'base_tax_refunded' => 27, 'base_to_global_rate' => 28, 'base_to_order_rate' => 29, 'base_total_canceled' => 30, 'base_total_invoiced' => 31, 'base_total_invoiced_cost' => 32, 'base_total_offline_refunded' => 33, 'base_total_online_refunded' => 34, 'base_total_paid' => 35, 'base_total_qty_ordered' => 36, 'base_total_refunded' => 37, 'discount_amount' => 38, 'discount_canceled' => 39, 'discount_invoiced' => 40, 'discount_refunded' => 41, 'grand_total' => 42, 'shipping_amount' => 43, 'shipping_canceled' => 44, 'shipping_invoiced' => 45, 'shipping_refunded' => 46, 'shipping_tax_amount' => 47, 'shipping_tax_refunded' => 48, 'store_to_base_rate' => 49, 'store_to_order_rate' => 50, 'subtotal' => 51, 'subtotal_canceled' => 52, 'subtotal_invoiced' => 53, 'subtotal_refunded' => 54, 'tax_amount' => 55, 'tax_canceled' => 56, 'tax_invoiced' => 57, 'tax_refunded' => 58, 'total_canceled' => 59, 'total_invoiced' => 60, 'total_offline_refunded' => 61, 'total_online_refunded' => 62, 'total_paid' => 63, 'total_qty_ordered' => 64, 'total_refunded' => 65, 'can_ship_partially' => 66, 'can_ship_partially_item' => 67, 'customer_is_guest' => 68, 'customer_note_notify' => 69, 'billing_address_id' => 70, 'customer_group_id' => 71, 'edit_increment' => 72, 'email_sent' => 73, 'forced_shipment_with_invoice' => 74, 'payment_auth_expiration' => 75, 'quote_address_id' => 76, 'quote_id' => 77, 'shipping_address_id' => 78, 'adjustment_negative' => 79, 'adjustment_positive' => 80, 'base_adjustment_negative' => 81, 'base_adjustment_positive' => 82, 'base_shipping_discount_amount' => 83, 'base_subtotal_incl_tax' => 84, 'base_total_due' => 85, 'payment_authorization_amount' => 86, 'shipping_discount_amount' => 87, 'subtotal_incl_tax' => 88, 'total_due' => 89, 'weight' => 90, 'customer_dob' => 91, 'increment_id' => 92, 'applied_rule_ids' => 93, 'base_currency_code' => 94, 'customer_email' => 95, 'customer_firstname' => 96, 'customer_lastname' => 97, 'customer_middlename' => 98, 'customer_prefix' => 99, 'customer_suffix' => 100, 'customer_taxvat' => 101, 'discount_description' => 102, 'ext_customer_id' => 103, 'ext_order_id' => 104, 'global_currency_code' => 105, 'hold_before_state' => 106, 'hold_before_status' => 107, 'order_currency_code' => 108, 'original_increment_id' => 109, 'relation_child_id' => 110, 'relation_child_real_id' => 111, 'relation_parent_id' => 112, 'relation_parent_real_id' => 113, 'remote_ip' => 114, 'shipping_method' => 115, 'store_currency_code' => 116, 'store_name' => 117, 'x_forwarded_for' => 118, 'customer_note' => 119, 'created_at' => 120, 'updated_at' => 121, 'total_item_count' => 122, 'customer_gender' => 123, 'hidden_tax_amount' => 124, 'base_hidden_tax_amount' => 125, 'shipping_hidden_tax_amount' => 126, 'base_shipping_hidden_tax_amnt' => 127, 'hidden_tax_invoiced' => 128, 'base_hidden_tax_invoiced' => 129, 'hidden_tax_refunded' => 130, 'base_hidden_tax_refunded' => 131, 'shipping_incl_tax' => 132, 'base_shipping_incl_tax' => 133, 'coupon_rule_name' => 134, 'paypal_ipn_customer_notified' => 135, 'gift_message_id' => 136, 'groupdeals_coupon_from' => 137, 'groupdeals_coupon_to' => 138, 'groupdeals_coupon_to_email' => 139, 'groupdeals_coupon_message' => 140, 'base_customer_balance_amount' => 141, 'customer_balance_amount' => 142, 'base_customer_balance_invoiced' => 143, 'customer_balance_invoiced' => 144, 'base_customer_balance_refunded' => 145, 'customer_balance_refunded' => 146, 'bs_customer_bal_total_refunded' => 147, 'customer_bal_total_refunded' => 148, 'gift_cards' => 149, 'base_gift_cards_amount' => 150, 'gift_cards_amount' => 151, 'base_gift_cards_invoiced' => 152, 'gift_cards_invoiced' => 153, 'base_gift_cards_refunded' => 154, 'gift_cards_refunded' => 155, 'gw_id' => 156, 'gw_allow_gift_receipt' => 157, 'gw_add_card' => 158, 'gw_base_price' => 159, 'gw_price' => 160, 'gw_items_base_price' => 161, 'gw_items_price' => 162, 'gw_card_base_price' => 163, 'gw_card_price' => 164, 'gw_base_tax_amount' => 165, 'gw_tax_amount' => 166, 'gw_items_base_tax_amount' => 167, 'gw_items_tax_amount' => 168, 'gw_card_base_tax_amount' => 169, 'gw_card_tax_amount' => 170, 'gw_base_price_invoiced' => 171, 'gw_price_invoiced' => 172, 'gw_items_base_price_invoiced' => 173, 'gw_items_price_invoiced' => 174, 'gw_card_base_price_invoiced' => 175, 'gw_card_price_invoiced' => 176, 'gw_base_tax_amount_invoiced' => 177, 'gw_tax_amount_invoiced' => 178, 'gw_items_base_tax_invoiced' => 179, 'gw_items_tax_invoiced' => 180, 'gw_card_base_tax_invoiced' => 181, 'gw_card_tax_invoiced' => 182, 'gw_base_price_refunded' => 183, 'gw_price_refunded' => 184, 'gw_items_base_price_refunded' => 185, 'gw_items_price_refunded' => 186, 'gw_card_base_price_refunded' => 187, 'gw_card_price_refunded' => 188, 'gw_base_tax_amount_refunded' => 189, 'gw_tax_amount_refunded' => 190, 'gw_items_base_tax_refunded' => 191, 'gw_items_tax_refunded' => 192, 'gw_card_base_tax_refunded' => 193, 'gw_card_tax_refunded' => 194, 'reward_points_balance' => 195, 'base_reward_currency_amount' => 196, 'reward_currency_amount' => 197, 'base_rwrd_crrncy_amt_invoiced' => 198, 'rwrd_currency_amount_invoiced' => 199, 'base_rwrd_crrncy_amnt_refnded' => 200, 'rwrd_crrncy_amnt_refunded' => 201, 'reward_points_balance_refund' => 202, 'reward_points_balance_refunded' => 203, 'reward_salesrule_points' => 204, 'vendor_username' => 205, 'vendor_name' => 206, 'vendor_lastname' => 207, 'vendor_email' => 208, 'pos_id' => 209, 'pos_office' => 210, 'pos_code' => 211, 'pos_country' => 212, 'pos_city' => 213, 'pos_postal_code' => 214, 'pos_address' => 215, 'pos_phone' => 216, 'customer_identification' => 217, 'is_gift' => 218, 'gift_for' => 219, 'gift_email' => 220, 'gift_message' => 221, 'gift_citydept' => 222, 'gift_shipping' => 223, 'was_payed' => 224, 'gift_for_lastname' => 225, 'sci_payment_methods' => 226, 'discount_applied' => 227, 'rewards_applied' => 228, 'stock_before_pol' => 229, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, 228, 229, )
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
        $toNames = SalesFlatOrderPeer::getFieldNames($toType);
        $key = isset(SalesFlatOrderPeer::$fieldKeys[$fromType][$name]) ? SalesFlatOrderPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(SalesFlatOrderPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, SalesFlatOrderPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return SalesFlatOrderPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. SalesFlatOrderPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(SalesFlatOrderPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(SalesFlatOrderPeer::ENTITY_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::STATE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::STATUS);
            $criteria->addSelectColumn(SalesFlatOrderPeer::COUPON_CODE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::PROTECT_CODE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_DESCRIPTION);
            $criteria->addSelectColumn(SalesFlatOrderPeer::IS_VIRTUAL);
            $criteria->addSelectColumn(SalesFlatOrderPeer::STORE_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_DISCOUNT_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_DISCOUNT_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_DISCOUNT_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_DISCOUNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_GRAND_TOTAL);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SHIPPING_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SHIPPING_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SHIPPING_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SHIPPING_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SHIPPING_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SHIPPING_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SUBTOTAL);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SUBTOTAL_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SUBTOTAL_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SUBTOTAL_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TAX_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TO_GLOBAL_RATE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TO_ORDER_RATE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TOTAL_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TOTAL_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TOTAL_INVOICED_COST);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TOTAL_OFFLINE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TOTAL_ONLINE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TOTAL_PAID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TOTAL_QTY_ORDERED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TOTAL_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::DISCOUNT_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::DISCOUNT_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::DISCOUNT_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::DISCOUNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GRAND_TOTAL);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::STORE_TO_BASE_RATE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::STORE_TO_ORDER_RATE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SUBTOTAL);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SUBTOTAL_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SUBTOTAL_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SUBTOTAL_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TAX_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TOTAL_CANCELED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TOTAL_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TOTAL_OFFLINE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TOTAL_ONLINE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TOTAL_PAID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TOTAL_QTY_ORDERED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TOTAL_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY_ITEM);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_IS_GUEST);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_NOTE_NOTIFY);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BILLING_ADDRESS_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_GROUP_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::EDIT_INCREMENT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::EMAIL_SENT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::FORCED_SHIPMENT_WITH_INVOICE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::PAYMENT_AUTH_EXPIRATION);
            $criteria->addSelectColumn(SalesFlatOrderPeer::QUOTE_ADDRESS_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::QUOTE_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_ADDRESS_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::ADJUSTMENT_NEGATIVE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::ADJUSTMENT_POSITIVE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_ADJUSTMENT_NEGATIVE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_ADJUSTMENT_POSITIVE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SHIPPING_DISCOUNT_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SUBTOTAL_INCL_TAX);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_TOTAL_DUE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::PAYMENT_AUTHORIZATION_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_DISCOUNT_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SUBTOTAL_INCL_TAX);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TOTAL_DUE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::WEIGHT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_DOB);
            $criteria->addSelectColumn(SalesFlatOrderPeer::INCREMENT_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::APPLIED_RULE_IDS);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_CURRENCY_CODE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_EMAIL);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_FIRSTNAME);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_LASTNAME);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_MIDDLENAME);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_PREFIX);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_SUFFIX);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_TAXVAT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::DISCOUNT_DESCRIPTION);
            $criteria->addSelectColumn(SalesFlatOrderPeer::EXT_CUSTOMER_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::EXT_ORDER_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GLOBAL_CURRENCY_CODE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::HOLD_BEFORE_STATE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::HOLD_BEFORE_STATUS);
            $criteria->addSelectColumn(SalesFlatOrderPeer::ORDER_CURRENCY_CODE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::ORIGINAL_INCREMENT_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::RELATION_CHILD_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::RELATION_CHILD_REAL_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::RELATION_PARENT_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::RELATION_PARENT_REAL_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::REMOTE_IP);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_METHOD);
            $criteria->addSelectColumn(SalesFlatOrderPeer::STORE_CURRENCY_CODE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::STORE_NAME);
            $criteria->addSelectColumn(SalesFlatOrderPeer::X_FORWARDED_FOR);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_NOTE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CREATED_AT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::UPDATED_AT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::TOTAL_ITEM_COUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_GENDER);
            $criteria->addSelectColumn(SalesFlatOrderPeer::HIDDEN_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_HIDDEN_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_HIDDEN_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SHIPPING_HIDDEN_TAX_AMNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::HIDDEN_TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_HIDDEN_TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::HIDDEN_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_HIDDEN_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SHIPPING_INCL_TAX);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_SHIPPING_INCL_TAX);
            $criteria->addSelectColumn(SalesFlatOrderPeer::COUPON_RULE_NAME);
            $criteria->addSelectColumn(SalesFlatOrderPeer::PAYPAL_IPN_CUSTOMER_NOTIFIED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_MESSAGE_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GROUPDEALS_COUPON_FROM);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GROUPDEALS_COUPON_TO);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GROUPDEALS_COUPON_TO_EMAIL);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GROUPDEALS_COUPON_MESSAGE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_BALANCE_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_BALANCE_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_BALANCE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BS_CUSTOMER_BAL_TOTAL_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_BAL_TOTAL_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_CARDS);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_GIFT_CARDS_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_CARDS_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_GIFT_CARDS_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_CARDS_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_GIFT_CARDS_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_CARDS_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ALLOW_GIFT_RECEIPT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ADD_CARD);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_BASE_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_BASE_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_PRICE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_BASE_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_TAX_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_BASE_PRICE_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_PRICE_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_PRICE_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_PRICE_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_TAX_AMOUNT_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_BASE_TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_TAX_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_BASE_PRICE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_PRICE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_PRICE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_PRICE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_TAX_AMOUNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_ITEMS_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_BASE_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GW_CARD_TAX_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::REWARD_POINTS_BALANCE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_REWARD_CURRENCY_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::REWARD_CURRENCY_AMOUNT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMT_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::RWRD_CURRENCY_AMOUNT_INVOICED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMNT_REFNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::RWRD_CRRNCY_AMNT_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUND);
            $criteria->addSelectColumn(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUNDED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::REWARD_SALESRULE_POINTS);
            $criteria->addSelectColumn(SalesFlatOrderPeer::VENDOR_USERNAME);
            $criteria->addSelectColumn(SalesFlatOrderPeer::VENDOR_NAME);
            $criteria->addSelectColumn(SalesFlatOrderPeer::VENDOR_LASTNAME);
            $criteria->addSelectColumn(SalesFlatOrderPeer::VENDOR_EMAIL);
            $criteria->addSelectColumn(SalesFlatOrderPeer::POS_ID);
            $criteria->addSelectColumn(SalesFlatOrderPeer::POS_OFFICE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::POS_CODE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::POS_COUNTRY);
            $criteria->addSelectColumn(SalesFlatOrderPeer::POS_CITY);
            $criteria->addSelectColumn(SalesFlatOrderPeer::POS_POSTAL_CODE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::POS_ADDRESS);
            $criteria->addSelectColumn(SalesFlatOrderPeer::POS_PHONE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::CUSTOMER_IDENTIFICATION);
            $criteria->addSelectColumn(SalesFlatOrderPeer::IS_GIFT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_FOR);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_EMAIL);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_MESSAGE);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_CITYDEPT);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_SHIPPING);
            $criteria->addSelectColumn(SalesFlatOrderPeer::WAS_PAYED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::GIFT_FOR_LASTNAME);
            $criteria->addSelectColumn(SalesFlatOrderPeer::SCI_PAYMENT_METHODS);
            $criteria->addSelectColumn(SalesFlatOrderPeer::DISCOUNT_APPLIED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::REWARDS_APPLIED);
            $criteria->addSelectColumn(SalesFlatOrderPeer::STOCK_BEFORE_POL);
        } else {
            $criteria->addSelectColumn($alias . '.entity_id');
            $criteria->addSelectColumn($alias . '.state');
            $criteria->addSelectColumn($alias . '.status');
            $criteria->addSelectColumn($alias . '.coupon_code');
            $criteria->addSelectColumn($alias . '.protect_code');
            $criteria->addSelectColumn($alias . '.shipping_description');
            $criteria->addSelectColumn($alias . '.is_virtual');
            $criteria->addSelectColumn($alias . '.store_id');
            $criteria->addSelectColumn($alias . '.customer_id');
            $criteria->addSelectColumn($alias . '.base_discount_amount');
            $criteria->addSelectColumn($alias . '.base_discount_canceled');
            $criteria->addSelectColumn($alias . '.base_discount_invoiced');
            $criteria->addSelectColumn($alias . '.base_discount_refunded');
            $criteria->addSelectColumn($alias . '.base_grand_total');
            $criteria->addSelectColumn($alias . '.base_shipping_amount');
            $criteria->addSelectColumn($alias . '.base_shipping_canceled');
            $criteria->addSelectColumn($alias . '.base_shipping_invoiced');
            $criteria->addSelectColumn($alias . '.base_shipping_refunded');
            $criteria->addSelectColumn($alias . '.base_shipping_tax_amount');
            $criteria->addSelectColumn($alias . '.base_shipping_tax_refunded');
            $criteria->addSelectColumn($alias . '.base_subtotal');
            $criteria->addSelectColumn($alias . '.base_subtotal_canceled');
            $criteria->addSelectColumn($alias . '.base_subtotal_invoiced');
            $criteria->addSelectColumn($alias . '.base_subtotal_refunded');
            $criteria->addSelectColumn($alias . '.base_tax_amount');
            $criteria->addSelectColumn($alias . '.base_tax_canceled');
            $criteria->addSelectColumn($alias . '.base_tax_invoiced');
            $criteria->addSelectColumn($alias . '.base_tax_refunded');
            $criteria->addSelectColumn($alias . '.base_to_global_rate');
            $criteria->addSelectColumn($alias . '.base_to_order_rate');
            $criteria->addSelectColumn($alias . '.base_total_canceled');
            $criteria->addSelectColumn($alias . '.base_total_invoiced');
            $criteria->addSelectColumn($alias . '.base_total_invoiced_cost');
            $criteria->addSelectColumn($alias . '.base_total_offline_refunded');
            $criteria->addSelectColumn($alias . '.base_total_online_refunded');
            $criteria->addSelectColumn($alias . '.base_total_paid');
            $criteria->addSelectColumn($alias . '.base_total_qty_ordered');
            $criteria->addSelectColumn($alias . '.base_total_refunded');
            $criteria->addSelectColumn($alias . '.discount_amount');
            $criteria->addSelectColumn($alias . '.discount_canceled');
            $criteria->addSelectColumn($alias . '.discount_invoiced');
            $criteria->addSelectColumn($alias . '.discount_refunded');
            $criteria->addSelectColumn($alias . '.grand_total');
            $criteria->addSelectColumn($alias . '.shipping_amount');
            $criteria->addSelectColumn($alias . '.shipping_canceled');
            $criteria->addSelectColumn($alias . '.shipping_invoiced');
            $criteria->addSelectColumn($alias . '.shipping_refunded');
            $criteria->addSelectColumn($alias . '.shipping_tax_amount');
            $criteria->addSelectColumn($alias . '.shipping_tax_refunded');
            $criteria->addSelectColumn($alias . '.store_to_base_rate');
            $criteria->addSelectColumn($alias . '.store_to_order_rate');
            $criteria->addSelectColumn($alias . '.subtotal');
            $criteria->addSelectColumn($alias . '.subtotal_canceled');
            $criteria->addSelectColumn($alias . '.subtotal_invoiced');
            $criteria->addSelectColumn($alias . '.subtotal_refunded');
            $criteria->addSelectColumn($alias . '.tax_amount');
            $criteria->addSelectColumn($alias . '.tax_canceled');
            $criteria->addSelectColumn($alias . '.tax_invoiced');
            $criteria->addSelectColumn($alias . '.tax_refunded');
            $criteria->addSelectColumn($alias . '.total_canceled');
            $criteria->addSelectColumn($alias . '.total_invoiced');
            $criteria->addSelectColumn($alias . '.total_offline_refunded');
            $criteria->addSelectColumn($alias . '.total_online_refunded');
            $criteria->addSelectColumn($alias . '.total_paid');
            $criteria->addSelectColumn($alias . '.total_qty_ordered');
            $criteria->addSelectColumn($alias . '.total_refunded');
            $criteria->addSelectColumn($alias . '.can_ship_partially');
            $criteria->addSelectColumn($alias . '.can_ship_partially_item');
            $criteria->addSelectColumn($alias . '.customer_is_guest');
            $criteria->addSelectColumn($alias . '.customer_note_notify');
            $criteria->addSelectColumn($alias . '.billing_address_id');
            $criteria->addSelectColumn($alias . '.customer_group_id');
            $criteria->addSelectColumn($alias . '.edit_increment');
            $criteria->addSelectColumn($alias . '.email_sent');
            $criteria->addSelectColumn($alias . '.forced_shipment_with_invoice');
            $criteria->addSelectColumn($alias . '.payment_auth_expiration');
            $criteria->addSelectColumn($alias . '.quote_address_id');
            $criteria->addSelectColumn($alias . '.quote_id');
            $criteria->addSelectColumn($alias . '.shipping_address_id');
            $criteria->addSelectColumn($alias . '.adjustment_negative');
            $criteria->addSelectColumn($alias . '.adjustment_positive');
            $criteria->addSelectColumn($alias . '.base_adjustment_negative');
            $criteria->addSelectColumn($alias . '.base_adjustment_positive');
            $criteria->addSelectColumn($alias . '.base_shipping_discount_amount');
            $criteria->addSelectColumn($alias . '.base_subtotal_incl_tax');
            $criteria->addSelectColumn($alias . '.base_total_due');
            $criteria->addSelectColumn($alias . '.payment_authorization_amount');
            $criteria->addSelectColumn($alias . '.shipping_discount_amount');
            $criteria->addSelectColumn($alias . '.subtotal_incl_tax');
            $criteria->addSelectColumn($alias . '.total_due');
            $criteria->addSelectColumn($alias . '.weight');
            $criteria->addSelectColumn($alias . '.customer_dob');
            $criteria->addSelectColumn($alias . '.increment_id');
            $criteria->addSelectColumn($alias . '.applied_rule_ids');
            $criteria->addSelectColumn($alias . '.base_currency_code');
            $criteria->addSelectColumn($alias . '.customer_email');
            $criteria->addSelectColumn($alias . '.customer_firstname');
            $criteria->addSelectColumn($alias . '.customer_lastname');
            $criteria->addSelectColumn($alias . '.customer_middlename');
            $criteria->addSelectColumn($alias . '.customer_prefix');
            $criteria->addSelectColumn($alias . '.customer_suffix');
            $criteria->addSelectColumn($alias . '.customer_taxvat');
            $criteria->addSelectColumn($alias . '.discount_description');
            $criteria->addSelectColumn($alias . '.ext_customer_id');
            $criteria->addSelectColumn($alias . '.ext_order_id');
            $criteria->addSelectColumn($alias . '.global_currency_code');
            $criteria->addSelectColumn($alias . '.hold_before_state');
            $criteria->addSelectColumn($alias . '.hold_before_status');
            $criteria->addSelectColumn($alias . '.order_currency_code');
            $criteria->addSelectColumn($alias . '.original_increment_id');
            $criteria->addSelectColumn($alias . '.relation_child_id');
            $criteria->addSelectColumn($alias . '.relation_child_real_id');
            $criteria->addSelectColumn($alias . '.relation_parent_id');
            $criteria->addSelectColumn($alias . '.relation_parent_real_id');
            $criteria->addSelectColumn($alias . '.remote_ip');
            $criteria->addSelectColumn($alias . '.shipping_method');
            $criteria->addSelectColumn($alias . '.store_currency_code');
            $criteria->addSelectColumn($alias . '.store_name');
            $criteria->addSelectColumn($alias . '.x_forwarded_for');
            $criteria->addSelectColumn($alias . '.customer_note');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.total_item_count');
            $criteria->addSelectColumn($alias . '.customer_gender');
            $criteria->addSelectColumn($alias . '.hidden_tax_amount');
            $criteria->addSelectColumn($alias . '.base_hidden_tax_amount');
            $criteria->addSelectColumn($alias . '.shipping_hidden_tax_amount');
            $criteria->addSelectColumn($alias . '.base_shipping_hidden_tax_amnt');
            $criteria->addSelectColumn($alias . '.hidden_tax_invoiced');
            $criteria->addSelectColumn($alias . '.base_hidden_tax_invoiced');
            $criteria->addSelectColumn($alias . '.hidden_tax_refunded');
            $criteria->addSelectColumn($alias . '.base_hidden_tax_refunded');
            $criteria->addSelectColumn($alias . '.shipping_incl_tax');
            $criteria->addSelectColumn($alias . '.base_shipping_incl_tax');
            $criteria->addSelectColumn($alias . '.coupon_rule_name');
            $criteria->addSelectColumn($alias . '.paypal_ipn_customer_notified');
            $criteria->addSelectColumn($alias . '.gift_message_id');
            $criteria->addSelectColumn($alias . '.groupdeals_coupon_from');
            $criteria->addSelectColumn($alias . '.groupdeals_coupon_to');
            $criteria->addSelectColumn($alias . '.groupdeals_coupon_to_email');
            $criteria->addSelectColumn($alias . '.groupdeals_coupon_message');
            $criteria->addSelectColumn($alias . '.base_customer_balance_amount');
            $criteria->addSelectColumn($alias . '.customer_balance_amount');
            $criteria->addSelectColumn($alias . '.base_customer_balance_invoiced');
            $criteria->addSelectColumn($alias . '.customer_balance_invoiced');
            $criteria->addSelectColumn($alias . '.base_customer_balance_refunded');
            $criteria->addSelectColumn($alias . '.customer_balance_refunded');
            $criteria->addSelectColumn($alias . '.bs_customer_bal_total_refunded');
            $criteria->addSelectColumn($alias . '.customer_bal_total_refunded');
            $criteria->addSelectColumn($alias . '.gift_cards');
            $criteria->addSelectColumn($alias . '.base_gift_cards_amount');
            $criteria->addSelectColumn($alias . '.gift_cards_amount');
            $criteria->addSelectColumn($alias . '.base_gift_cards_invoiced');
            $criteria->addSelectColumn($alias . '.gift_cards_invoiced');
            $criteria->addSelectColumn($alias . '.base_gift_cards_refunded');
            $criteria->addSelectColumn($alias . '.gift_cards_refunded');
            $criteria->addSelectColumn($alias . '.gw_id');
            $criteria->addSelectColumn($alias . '.gw_allow_gift_receipt');
            $criteria->addSelectColumn($alias . '.gw_add_card');
            $criteria->addSelectColumn($alias . '.gw_base_price');
            $criteria->addSelectColumn($alias . '.gw_price');
            $criteria->addSelectColumn($alias . '.gw_items_base_price');
            $criteria->addSelectColumn($alias . '.gw_items_price');
            $criteria->addSelectColumn($alias . '.gw_card_base_price');
            $criteria->addSelectColumn($alias . '.gw_card_price');
            $criteria->addSelectColumn($alias . '.gw_base_tax_amount');
            $criteria->addSelectColumn($alias . '.gw_tax_amount');
            $criteria->addSelectColumn($alias . '.gw_items_base_tax_amount');
            $criteria->addSelectColumn($alias . '.gw_items_tax_amount');
            $criteria->addSelectColumn($alias . '.gw_card_base_tax_amount');
            $criteria->addSelectColumn($alias . '.gw_card_tax_amount');
            $criteria->addSelectColumn($alias . '.gw_base_price_invoiced');
            $criteria->addSelectColumn($alias . '.gw_price_invoiced');
            $criteria->addSelectColumn($alias . '.gw_items_base_price_invoiced');
            $criteria->addSelectColumn($alias . '.gw_items_price_invoiced');
            $criteria->addSelectColumn($alias . '.gw_card_base_price_invoiced');
            $criteria->addSelectColumn($alias . '.gw_card_price_invoiced');
            $criteria->addSelectColumn($alias . '.gw_base_tax_amount_invoiced');
            $criteria->addSelectColumn($alias . '.gw_tax_amount_invoiced');
            $criteria->addSelectColumn($alias . '.gw_items_base_tax_invoiced');
            $criteria->addSelectColumn($alias . '.gw_items_tax_invoiced');
            $criteria->addSelectColumn($alias . '.gw_card_base_tax_invoiced');
            $criteria->addSelectColumn($alias . '.gw_card_tax_invoiced');
            $criteria->addSelectColumn($alias . '.gw_base_price_refunded');
            $criteria->addSelectColumn($alias . '.gw_price_refunded');
            $criteria->addSelectColumn($alias . '.gw_items_base_price_refunded');
            $criteria->addSelectColumn($alias . '.gw_items_price_refunded');
            $criteria->addSelectColumn($alias . '.gw_card_base_price_refunded');
            $criteria->addSelectColumn($alias . '.gw_card_price_refunded');
            $criteria->addSelectColumn($alias . '.gw_base_tax_amount_refunded');
            $criteria->addSelectColumn($alias . '.gw_tax_amount_refunded');
            $criteria->addSelectColumn($alias . '.gw_items_base_tax_refunded');
            $criteria->addSelectColumn($alias . '.gw_items_tax_refunded');
            $criteria->addSelectColumn($alias . '.gw_card_base_tax_refunded');
            $criteria->addSelectColumn($alias . '.gw_card_tax_refunded');
            $criteria->addSelectColumn($alias . '.reward_points_balance');
            $criteria->addSelectColumn($alias . '.base_reward_currency_amount');
            $criteria->addSelectColumn($alias . '.reward_currency_amount');
            $criteria->addSelectColumn($alias . '.base_rwrd_crrncy_amt_invoiced');
            $criteria->addSelectColumn($alias . '.rwrd_currency_amount_invoiced');
            $criteria->addSelectColumn($alias . '.base_rwrd_crrncy_amnt_refnded');
            $criteria->addSelectColumn($alias . '.rwrd_crrncy_amnt_refunded');
            $criteria->addSelectColumn($alias . '.reward_points_balance_refund');
            $criteria->addSelectColumn($alias . '.reward_points_balance_refunded');
            $criteria->addSelectColumn($alias . '.reward_salesrule_points');
            $criteria->addSelectColumn($alias . '.vendor_username');
            $criteria->addSelectColumn($alias . '.vendor_name');
            $criteria->addSelectColumn($alias . '.vendor_lastname');
            $criteria->addSelectColumn($alias . '.vendor_email');
            $criteria->addSelectColumn($alias . '.pos_id');
            $criteria->addSelectColumn($alias . '.pos_office');
            $criteria->addSelectColumn($alias . '.pos_code');
            $criteria->addSelectColumn($alias . '.pos_country');
            $criteria->addSelectColumn($alias . '.pos_city');
            $criteria->addSelectColumn($alias . '.pos_postal_code');
            $criteria->addSelectColumn($alias . '.pos_address');
            $criteria->addSelectColumn($alias . '.pos_phone');
            $criteria->addSelectColumn($alias . '.customer_identification');
            $criteria->addSelectColumn($alias . '.is_gift');
            $criteria->addSelectColumn($alias . '.gift_for');
            $criteria->addSelectColumn($alias . '.gift_email');
            $criteria->addSelectColumn($alias . '.gift_message');
            $criteria->addSelectColumn($alias . '.gift_citydept');
            $criteria->addSelectColumn($alias . '.gift_shipping');
            $criteria->addSelectColumn($alias . '.was_payed');
            $criteria->addSelectColumn($alias . '.gift_for_lastname');
            $criteria->addSelectColumn($alias . '.sci_payment_methods');
            $criteria->addSelectColumn($alias . '.discount_applied');
            $criteria->addSelectColumn($alias . '.rewards_applied');
            $criteria->addSelectColumn($alias . '.stock_before_pol');
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
        $criteria->setPrimaryTableName(SalesFlatOrderPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return SalesFlatOrder
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = SalesFlatOrderPeer::doSelect($critcopy, $con);
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
        return SalesFlatOrderPeer::populateObjects(SalesFlatOrderPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            SalesFlatOrderPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);

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
     * @param SalesFlatOrder $obj A SalesFlatOrder object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getEntityId();
            } // if key === null
            SalesFlatOrderPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A SalesFlatOrder object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof SalesFlatOrder) {
                $key = (string) $value->getEntityId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or SalesFlatOrder object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(SalesFlatOrderPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return SalesFlatOrder Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(SalesFlatOrderPeer::$instances[$key])) {
                return SalesFlatOrderPeer::$instances[$key];
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
        foreach (SalesFlatOrderPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        SalesFlatOrderPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to sales_flat_order
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in SalesFlatOrderItemPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SalesFlatOrderItemPeer::clearInstancePool();
        // Invalidate objects in CouponMappingPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CouponMappingPeer::clearInstancePool();
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
        $cls = SalesFlatOrderPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = SalesFlatOrderPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SalesFlatOrderPeer::addInstanceToPool($obj, $key);
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
     * @return array (SalesFlatOrder object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = SalesFlatOrderPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SalesFlatOrderPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            SalesFlatOrderPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CustomerEntity table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCustomerEntity(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SalesFlatOrderPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SalesFlatOrderPeer::CUSTOMER_ID, CustomerEntityPeer::ENTITY_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(SalesFlatOrderPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SalesFlatOrderPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);

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
     * Selects a collection of SalesFlatOrder objects pre-filled with their CustomerEntity objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of SalesFlatOrder objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCustomerEntity(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);
        }

        SalesFlatOrderPeer::addSelectColumns($criteria);
        $startcol = SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS;
        CustomerEntityPeer::addSelectColumns($criteria);

        $criteria->addJoin(SalesFlatOrderPeer::CUSTOMER_ID, CustomerEntityPeer::ENTITY_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SalesFlatOrderPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SalesFlatOrderPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SalesFlatOrderPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CustomerEntityPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CustomerEntityPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CustomerEntityPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CustomerEntityPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (SalesFlatOrder) to $obj2 (CustomerEntity)
                $obj2->addSalesFlatOrder($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of SalesFlatOrder objects pre-filled with their CoreStore objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of SalesFlatOrder objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCoreStore(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);
        }

        SalesFlatOrderPeer::addSelectColumns($criteria);
        $startcol = SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS;
        CoreStorePeer::addSelectColumns($criteria);

        $criteria->addJoin(SalesFlatOrderPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SalesFlatOrderPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = SalesFlatOrderPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SalesFlatOrderPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (SalesFlatOrder) to $obj2 (CoreStore)
                $obj2->addSalesFlatOrder($obj1);

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
        $criteria->setPrimaryTableName(SalesFlatOrderPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SalesFlatOrderPeer::CUSTOMER_ID, CustomerEntityPeer::ENTITY_ID, $join_behavior);

        $criteria->addJoin(SalesFlatOrderPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);

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
     * Selects a collection of SalesFlatOrder objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of SalesFlatOrder objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);
        }

        SalesFlatOrderPeer::addSelectColumns($criteria);
        $startcol2 = SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS;

        CustomerEntityPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerEntityPeer::NUM_HYDRATE_COLUMNS;

        CoreStorePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CoreStorePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SalesFlatOrderPeer::CUSTOMER_ID, CustomerEntityPeer::ENTITY_ID, $join_behavior);

        $criteria->addJoin(SalesFlatOrderPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SalesFlatOrderPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SalesFlatOrderPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SalesFlatOrderPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CustomerEntity rows

            $key2 = CustomerEntityPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CustomerEntityPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CustomerEntityPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CustomerEntityPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (SalesFlatOrder) to the collection in $obj2 (CustomerEntity)
                $obj2->addSalesFlatOrder($obj1);
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

                // Add the $obj1 (SalesFlatOrder) to the collection in $obj3 (CoreStore)
                $obj3->addSalesFlatOrder($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CustomerEntity table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCustomerEntity(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(SalesFlatOrderPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SalesFlatOrderPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);

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
        $criteria->setPrimaryTableName(SalesFlatOrderPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            SalesFlatOrderPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(SalesFlatOrderPeer::CUSTOMER_ID, CustomerEntityPeer::ENTITY_ID, $join_behavior);

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
     * Selects a collection of SalesFlatOrder objects pre-filled with all related objects except CustomerEntity.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of SalesFlatOrder objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCustomerEntity(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);
        }

        SalesFlatOrderPeer::addSelectColumns($criteria);
        $startcol2 = SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS;

        CoreStorePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CoreStorePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SalesFlatOrderPeer::STORE_ID, CoreStorePeer::STORE_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SalesFlatOrderPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SalesFlatOrderPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SalesFlatOrderPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (SalesFlatOrder) to the collection in $obj2 (CoreStore)
                $obj2->addSalesFlatOrder($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of SalesFlatOrder objects pre-filled with all related objects except CoreStore.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of SalesFlatOrder objects.
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
            $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);
        }

        SalesFlatOrderPeer::addSelectColumns($criteria);
        $startcol2 = SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS;

        CustomerEntityPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CustomerEntityPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(SalesFlatOrderPeer::CUSTOMER_ID, CustomerEntityPeer::ENTITY_ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = SalesFlatOrderPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = SalesFlatOrderPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = SalesFlatOrderPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                SalesFlatOrderPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CustomerEntity rows

                $key2 = CustomerEntityPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CustomerEntityPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CustomerEntityPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CustomerEntityPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (SalesFlatOrder) to the collection in $obj2 (CustomerEntity)
                $obj2->addSalesFlatOrder($obj1);

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
        return Propel::getDatabaseMap(SalesFlatOrderPeer::DATABASE_NAME)->getTable(SalesFlatOrderPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseSalesFlatOrderPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseSalesFlatOrderPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \SalesFlatOrderTableMap());
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
        return SalesFlatOrderPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a SalesFlatOrder or Criteria object.
     *
     * @param      mixed $values Criteria or SalesFlatOrder object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from SalesFlatOrder object
        }

        if ($criteria->containsKey(SalesFlatOrderPeer::ENTITY_ID) && $criteria->keyContainsValue(SalesFlatOrderPeer::ENTITY_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SalesFlatOrderPeer::ENTITY_ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a SalesFlatOrder or Criteria object.
     *
     * @param      mixed $values Criteria or SalesFlatOrder object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(SalesFlatOrderPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(SalesFlatOrderPeer::ENTITY_ID);
            $value = $criteria->remove(SalesFlatOrderPeer::ENTITY_ID);
            if ($value) {
                $selectCriteria->add(SalesFlatOrderPeer::ENTITY_ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(SalesFlatOrderPeer::TABLE_NAME);
            }

        } else { // $values is SalesFlatOrder object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the sales_flat_order table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(SalesFlatOrderPeer::TABLE_NAME, $con, SalesFlatOrderPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SalesFlatOrderPeer::clearInstancePool();
            SalesFlatOrderPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a SalesFlatOrder or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or SalesFlatOrder object or primary key or array of primary keys
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
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            SalesFlatOrderPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof SalesFlatOrder) { // it's a model object
            // invalidate the cache for this single object
            SalesFlatOrderPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SalesFlatOrderPeer::DATABASE_NAME);
            $criteria->add(SalesFlatOrderPeer::ENTITY_ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                SalesFlatOrderPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(SalesFlatOrderPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            SalesFlatOrderPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given SalesFlatOrder object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param SalesFlatOrder $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(SalesFlatOrderPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(SalesFlatOrderPeer::TABLE_NAME);

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

        return BasePeer::doValidate(SalesFlatOrderPeer::DATABASE_NAME, SalesFlatOrderPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return SalesFlatOrder
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = SalesFlatOrderPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(SalesFlatOrderPeer::DATABASE_NAME);
        $criteria->add(SalesFlatOrderPeer::ENTITY_ID, $pk);

        $v = SalesFlatOrderPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return SalesFlatOrder[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(SalesFlatOrderPeer::DATABASE_NAME);
            $criteria->add(SalesFlatOrderPeer::ENTITY_ID, $pks, Criteria::IN);
            $objs = SalesFlatOrderPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseSalesFlatOrderPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseSalesFlatOrderPeer::buildTableMap();

