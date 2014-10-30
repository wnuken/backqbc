<?php


/**
 * Base class that represents a row from the 'sales_flat_order' table.
 *
 *
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseSalesFlatOrder extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SalesFlatOrderPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SalesFlatOrderPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the entity_id field.
     * @var        int
     */
    protected $entity_id;

    /**
     * The value for the state field.
     * @var        string
     */
    protected $state;

    /**
     * The value for the status field.
     * @var        string
     */
    protected $status;

    /**
     * The value for the coupon_code field.
     * @var        string
     */
    protected $coupon_code;

    /**
     * The value for the protect_code field.
     * @var        string
     */
    protected $protect_code;

    /**
     * The value for the shipping_description field.
     * @var        string
     */
    protected $shipping_description;

    /**
     * The value for the is_virtual field.
     * @var        int
     */
    protected $is_virtual;

    /**
     * The value for the store_id field.
     * @var        int
     */
    protected $store_id;

    /**
     * The value for the customer_id field.
     * @var        int
     */
    protected $customer_id;

    /**
     * The value for the base_discount_amount field.
     * @var        string
     */
    protected $base_discount_amount;

    /**
     * The value for the base_discount_canceled field.
     * @var        string
     */
    protected $base_discount_canceled;

    /**
     * The value for the base_discount_invoiced field.
     * @var        string
     */
    protected $base_discount_invoiced;

    /**
     * The value for the base_discount_refunded field.
     * @var        string
     */
    protected $base_discount_refunded;

    /**
     * The value for the base_grand_total field.
     * @var        string
     */
    protected $base_grand_total;

    /**
     * The value for the base_shipping_amount field.
     * @var        string
     */
    protected $base_shipping_amount;

    /**
     * The value for the base_shipping_canceled field.
     * @var        string
     */
    protected $base_shipping_canceled;

    /**
     * The value for the base_shipping_invoiced field.
     * @var        string
     */
    protected $base_shipping_invoiced;

    /**
     * The value for the base_shipping_refunded field.
     * @var        string
     */
    protected $base_shipping_refunded;

    /**
     * The value for the base_shipping_tax_amount field.
     * @var        string
     */
    protected $base_shipping_tax_amount;

    /**
     * The value for the base_shipping_tax_refunded field.
     * @var        string
     */
    protected $base_shipping_tax_refunded;

    /**
     * The value for the base_subtotal field.
     * @var        string
     */
    protected $base_subtotal;

    /**
     * The value for the base_subtotal_canceled field.
     * @var        string
     */
    protected $base_subtotal_canceled;

    /**
     * The value for the base_subtotal_invoiced field.
     * @var        string
     */
    protected $base_subtotal_invoiced;

    /**
     * The value for the base_subtotal_refunded field.
     * @var        string
     */
    protected $base_subtotal_refunded;

    /**
     * The value for the base_tax_amount field.
     * @var        string
     */
    protected $base_tax_amount;

    /**
     * The value for the base_tax_canceled field.
     * @var        string
     */
    protected $base_tax_canceled;

    /**
     * The value for the base_tax_invoiced field.
     * @var        string
     */
    protected $base_tax_invoiced;

    /**
     * The value for the base_tax_refunded field.
     * @var        string
     */
    protected $base_tax_refunded;

    /**
     * The value for the base_to_global_rate field.
     * @var        string
     */
    protected $base_to_global_rate;

    /**
     * The value for the base_to_order_rate field.
     * @var        string
     */
    protected $base_to_order_rate;

    /**
     * The value for the base_total_canceled field.
     * @var        string
     */
    protected $base_total_canceled;

    /**
     * The value for the base_total_invoiced field.
     * @var        string
     */
    protected $base_total_invoiced;

    /**
     * The value for the base_total_invoiced_cost field.
     * @var        string
     */
    protected $base_total_invoiced_cost;

    /**
     * The value for the base_total_offline_refunded field.
     * @var        string
     */
    protected $base_total_offline_refunded;

    /**
     * The value for the base_total_online_refunded field.
     * @var        string
     */
    protected $base_total_online_refunded;

    /**
     * The value for the base_total_paid field.
     * @var        string
     */
    protected $base_total_paid;

    /**
     * The value for the base_total_qty_ordered field.
     * @var        string
     */
    protected $base_total_qty_ordered;

    /**
     * The value for the base_total_refunded field.
     * @var        string
     */
    protected $base_total_refunded;

    /**
     * The value for the discount_amount field.
     * @var        string
     */
    protected $discount_amount;

    /**
     * The value for the discount_canceled field.
     * @var        string
     */
    protected $discount_canceled;

    /**
     * The value for the discount_invoiced field.
     * @var        string
     */
    protected $discount_invoiced;

    /**
     * The value for the discount_refunded field.
     * @var        string
     */
    protected $discount_refunded;

    /**
     * The value for the grand_total field.
     * @var        string
     */
    protected $grand_total;

    /**
     * The value for the shipping_amount field.
     * @var        string
     */
    protected $shipping_amount;

    /**
     * The value for the shipping_canceled field.
     * @var        string
     */
    protected $shipping_canceled;

    /**
     * The value for the shipping_invoiced field.
     * @var        string
     */
    protected $shipping_invoiced;

    /**
     * The value for the shipping_refunded field.
     * @var        string
     */
    protected $shipping_refunded;

    /**
     * The value for the shipping_tax_amount field.
     * @var        string
     */
    protected $shipping_tax_amount;

    /**
     * The value for the shipping_tax_refunded field.
     * @var        string
     */
    protected $shipping_tax_refunded;

    /**
     * The value for the store_to_base_rate field.
     * @var        string
     */
    protected $store_to_base_rate;

    /**
     * The value for the store_to_order_rate field.
     * @var        string
     */
    protected $store_to_order_rate;

    /**
     * The value for the subtotal field.
     * @var        string
     */
    protected $subtotal;

    /**
     * The value for the subtotal_canceled field.
     * @var        string
     */
    protected $subtotal_canceled;

    /**
     * The value for the subtotal_invoiced field.
     * @var        string
     */
    protected $subtotal_invoiced;

    /**
     * The value for the subtotal_refunded field.
     * @var        string
     */
    protected $subtotal_refunded;

    /**
     * The value for the tax_amount field.
     * @var        string
     */
    protected $tax_amount;

    /**
     * The value for the tax_canceled field.
     * @var        string
     */
    protected $tax_canceled;

    /**
     * The value for the tax_invoiced field.
     * @var        string
     */
    protected $tax_invoiced;

    /**
     * The value for the tax_refunded field.
     * @var        string
     */
    protected $tax_refunded;

    /**
     * The value for the total_canceled field.
     * @var        string
     */
    protected $total_canceled;

    /**
     * The value for the total_invoiced field.
     * @var        string
     */
    protected $total_invoiced;

    /**
     * The value for the total_offline_refunded field.
     * @var        string
     */
    protected $total_offline_refunded;

    /**
     * The value for the total_online_refunded field.
     * @var        string
     */
    protected $total_online_refunded;

    /**
     * The value for the total_paid field.
     * @var        string
     */
    protected $total_paid;

    /**
     * The value for the total_qty_ordered field.
     * @var        string
     */
    protected $total_qty_ordered;

    /**
     * The value for the total_refunded field.
     * @var        string
     */
    protected $total_refunded;

    /**
     * The value for the can_ship_partially field.
     * @var        int
     */
    protected $can_ship_partially;

    /**
     * The value for the can_ship_partially_item field.
     * @var        int
     */
    protected $can_ship_partially_item;

    /**
     * The value for the customer_is_guest field.
     * @var        int
     */
    protected $customer_is_guest;

    /**
     * The value for the customer_note_notify field.
     * @var        int
     */
    protected $customer_note_notify;

    /**
     * The value for the billing_address_id field.
     * @var        int
     */
    protected $billing_address_id;

    /**
     * The value for the customer_group_id field.
     * @var        int
     */
    protected $customer_group_id;

    /**
     * The value for the edit_increment field.
     * @var        int
     */
    protected $edit_increment;

    /**
     * The value for the email_sent field.
     * @var        int
     */
    protected $email_sent;

    /**
     * The value for the forced_shipment_with_invoice field.
     * @var        int
     */
    protected $forced_shipment_with_invoice;

    /**
     * The value for the payment_auth_expiration field.
     * @var        int
     */
    protected $payment_auth_expiration;

    /**
     * The value for the quote_address_id field.
     * @var        int
     */
    protected $quote_address_id;

    /**
     * The value for the quote_id field.
     * @var        int
     */
    protected $quote_id;

    /**
     * The value for the shipping_address_id field.
     * @var        int
     */
    protected $shipping_address_id;

    /**
     * The value for the adjustment_negative field.
     * @var        string
     */
    protected $adjustment_negative;

    /**
     * The value for the adjustment_positive field.
     * @var        string
     */
    protected $adjustment_positive;

    /**
     * The value for the base_adjustment_negative field.
     * @var        string
     */
    protected $base_adjustment_negative;

    /**
     * The value for the base_adjustment_positive field.
     * @var        string
     */
    protected $base_adjustment_positive;

    /**
     * The value for the base_shipping_discount_amount field.
     * @var        string
     */
    protected $base_shipping_discount_amount;

    /**
     * The value for the base_subtotal_incl_tax field.
     * @var        string
     */
    protected $base_subtotal_incl_tax;

    /**
     * The value for the base_total_due field.
     * @var        string
     */
    protected $base_total_due;

    /**
     * The value for the payment_authorization_amount field.
     * @var        string
     */
    protected $payment_authorization_amount;

    /**
     * The value for the shipping_discount_amount field.
     * @var        string
     */
    protected $shipping_discount_amount;

    /**
     * The value for the subtotal_incl_tax field.
     * @var        string
     */
    protected $subtotal_incl_tax;

    /**
     * The value for the total_due field.
     * @var        string
     */
    protected $total_due;

    /**
     * The value for the weight field.
     * @var        string
     */
    protected $weight;

    /**
     * The value for the customer_dob field.
     * @var        string
     */
    protected $customer_dob;

    /**
     * The value for the increment_id field.
     * @var        string
     */
    protected $increment_id;

    /**
     * The value for the applied_rule_ids field.
     * @var        string
     */
    protected $applied_rule_ids;

    /**
     * The value for the base_currency_code field.
     * @var        string
     */
    protected $base_currency_code;

    /**
     * The value for the customer_email field.
     * @var        string
     */
    protected $customer_email;

    /**
     * The value for the customer_firstname field.
     * @var        string
     */
    protected $customer_firstname;

    /**
     * The value for the customer_lastname field.
     * @var        string
     */
    protected $customer_lastname;

    /**
     * The value for the customer_middlename field.
     * @var        string
     */
    protected $customer_middlename;

    /**
     * The value for the customer_prefix field.
     * @var        string
     */
    protected $customer_prefix;

    /**
     * The value for the customer_suffix field.
     * @var        string
     */
    protected $customer_suffix;

    /**
     * The value for the customer_taxvat field.
     * @var        string
     */
    protected $customer_taxvat;

    /**
     * The value for the discount_description field.
     * @var        string
     */
    protected $discount_description;

    /**
     * The value for the ext_customer_id field.
     * @var        string
     */
    protected $ext_customer_id;

    /**
     * The value for the ext_order_id field.
     * @var        string
     */
    protected $ext_order_id;

    /**
     * The value for the global_currency_code field.
     * @var        string
     */
    protected $global_currency_code;

    /**
     * The value for the hold_before_state field.
     * @var        string
     */
    protected $hold_before_state;

    /**
     * The value for the hold_before_status field.
     * @var        string
     */
    protected $hold_before_status;

    /**
     * The value for the order_currency_code field.
     * @var        string
     */
    protected $order_currency_code;

    /**
     * The value for the original_increment_id field.
     * @var        string
     */
    protected $original_increment_id;

    /**
     * The value for the relation_child_id field.
     * @var        string
     */
    protected $relation_child_id;

    /**
     * The value for the relation_child_real_id field.
     * @var        string
     */
    protected $relation_child_real_id;

    /**
     * The value for the relation_parent_id field.
     * @var        string
     */
    protected $relation_parent_id;

    /**
     * The value for the relation_parent_real_id field.
     * @var        string
     */
    protected $relation_parent_real_id;

    /**
     * The value for the remote_ip field.
     * @var        string
     */
    protected $remote_ip;

    /**
     * The value for the shipping_method field.
     * @var        string
     */
    protected $shipping_method;

    /**
     * The value for the store_currency_code field.
     * @var        string
     */
    protected $store_currency_code;

    /**
     * The value for the store_name field.
     * @var        string
     */
    protected $store_name;

    /**
     * The value for the x_forwarded_for field.
     * @var        string
     */
    protected $x_forwarded_for;

    /**
     * The value for the customer_note field.
     * @var        string
     */
    protected $customer_note;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * The value for the total_item_count field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $total_item_count;

    /**
     * The value for the customer_gender field.
     * @var        int
     */
    protected $customer_gender;

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
     * The value for the shipping_hidden_tax_amount field.
     * @var        string
     */
    protected $shipping_hidden_tax_amount;

    /**
     * The value for the base_shipping_hidden_tax_amnt field.
     * @var        string
     */
    protected $base_shipping_hidden_tax_amnt;

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
     * The value for the shipping_incl_tax field.
     * @var        string
     */
    protected $shipping_incl_tax;

    /**
     * The value for the base_shipping_incl_tax field.
     * @var        string
     */
    protected $base_shipping_incl_tax;

    /**
     * The value for the coupon_rule_name field.
     * @var        string
     */
    protected $coupon_rule_name;

    /**
     * The value for the paypal_ipn_customer_notified field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $paypal_ipn_customer_notified;

    /**
     * The value for the gift_message_id field.
     * @var        int
     */
    protected $gift_message_id;

    /**
     * The value for the groupdeals_coupon_from field.
     * @var        string
     */
    protected $groupdeals_coupon_from;

    /**
     * The value for the groupdeals_coupon_to field.
     * @var        string
     */
    protected $groupdeals_coupon_to;

    /**
     * The value for the groupdeals_coupon_to_email field.
     * @var        string
     */
    protected $groupdeals_coupon_to_email;

    /**
     * The value for the groupdeals_coupon_message field.
     * @var        string
     */
    protected $groupdeals_coupon_message;

    /**
     * The value for the base_customer_balance_amount field.
     * @var        string
     */
    protected $base_customer_balance_amount;

    /**
     * The value for the customer_balance_amount field.
     * @var        string
     */
    protected $customer_balance_amount;

    /**
     * The value for the base_customer_balance_invoiced field.
     * @var        string
     */
    protected $base_customer_balance_invoiced;

    /**
     * The value for the customer_balance_invoiced field.
     * @var        string
     */
    protected $customer_balance_invoiced;

    /**
     * The value for the base_customer_balance_refunded field.
     * @var        string
     */
    protected $base_customer_balance_refunded;

    /**
     * The value for the customer_balance_refunded field.
     * @var        string
     */
    protected $customer_balance_refunded;

    /**
     * The value for the bs_customer_bal_total_refunded field.
     * @var        string
     */
    protected $bs_customer_bal_total_refunded;

    /**
     * The value for the customer_bal_total_refunded field.
     * @var        string
     */
    protected $customer_bal_total_refunded;

    /**
     * The value for the gift_cards field.
     * @var        string
     */
    protected $gift_cards;

    /**
     * The value for the base_gift_cards_amount field.
     * @var        string
     */
    protected $base_gift_cards_amount;

    /**
     * The value for the gift_cards_amount field.
     * @var        string
     */
    protected $gift_cards_amount;

    /**
     * The value for the base_gift_cards_invoiced field.
     * @var        string
     */
    protected $base_gift_cards_invoiced;

    /**
     * The value for the gift_cards_invoiced field.
     * @var        string
     */
    protected $gift_cards_invoiced;

    /**
     * The value for the base_gift_cards_refunded field.
     * @var        string
     */
    protected $base_gift_cards_refunded;

    /**
     * The value for the gift_cards_refunded field.
     * @var        string
     */
    protected $gift_cards_refunded;

    /**
     * The value for the gw_id field.
     * @var        int
     */
    protected $gw_id;

    /**
     * The value for the gw_allow_gift_receipt field.
     * @var        int
     */
    protected $gw_allow_gift_receipt;

    /**
     * The value for the gw_add_card field.
     * @var        int
     */
    protected $gw_add_card;

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
     * The value for the gw_items_base_price field.
     * @var        string
     */
    protected $gw_items_base_price;

    /**
     * The value for the gw_items_price field.
     * @var        string
     */
    protected $gw_items_price;

    /**
     * The value for the gw_card_base_price field.
     * @var        string
     */
    protected $gw_card_base_price;

    /**
     * The value for the gw_card_price field.
     * @var        string
     */
    protected $gw_card_price;

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
     * The value for the gw_items_base_tax_amount field.
     * @var        string
     */
    protected $gw_items_base_tax_amount;

    /**
     * The value for the gw_items_tax_amount field.
     * @var        string
     */
    protected $gw_items_tax_amount;

    /**
     * The value for the gw_card_base_tax_amount field.
     * @var        string
     */
    protected $gw_card_base_tax_amount;

    /**
     * The value for the gw_card_tax_amount field.
     * @var        string
     */
    protected $gw_card_tax_amount;

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
     * The value for the gw_items_base_price_invoiced field.
     * @var        string
     */
    protected $gw_items_base_price_invoiced;

    /**
     * The value for the gw_items_price_invoiced field.
     * @var        string
     */
    protected $gw_items_price_invoiced;

    /**
     * The value for the gw_card_base_price_invoiced field.
     * @var        string
     */
    protected $gw_card_base_price_invoiced;

    /**
     * The value for the gw_card_price_invoiced field.
     * @var        string
     */
    protected $gw_card_price_invoiced;

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
     * The value for the gw_items_base_tax_invoiced field.
     * @var        string
     */
    protected $gw_items_base_tax_invoiced;

    /**
     * The value for the gw_items_tax_invoiced field.
     * @var        string
     */
    protected $gw_items_tax_invoiced;

    /**
     * The value for the gw_card_base_tax_invoiced field.
     * @var        string
     */
    protected $gw_card_base_tax_invoiced;

    /**
     * The value for the gw_card_tax_invoiced field.
     * @var        string
     */
    protected $gw_card_tax_invoiced;

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
     * The value for the gw_items_base_price_refunded field.
     * @var        string
     */
    protected $gw_items_base_price_refunded;

    /**
     * The value for the gw_items_price_refunded field.
     * @var        string
     */
    protected $gw_items_price_refunded;

    /**
     * The value for the gw_card_base_price_refunded field.
     * @var        string
     */
    protected $gw_card_base_price_refunded;

    /**
     * The value for the gw_card_price_refunded field.
     * @var        string
     */
    protected $gw_card_price_refunded;

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
     * The value for the gw_items_base_tax_refunded field.
     * @var        string
     */
    protected $gw_items_base_tax_refunded;

    /**
     * The value for the gw_items_tax_refunded field.
     * @var        string
     */
    protected $gw_items_tax_refunded;

    /**
     * The value for the gw_card_base_tax_refunded field.
     * @var        string
     */
    protected $gw_card_base_tax_refunded;

    /**
     * The value for the gw_card_tax_refunded field.
     * @var        string
     */
    protected $gw_card_tax_refunded;

    /**
     * The value for the reward_points_balance field.
     * @var        int
     */
    protected $reward_points_balance;

    /**
     * The value for the base_reward_currency_amount field.
     * @var        string
     */
    protected $base_reward_currency_amount;

    /**
     * The value for the reward_currency_amount field.
     * @var        string
     */
    protected $reward_currency_amount;

    /**
     * The value for the base_rwrd_crrncy_amt_invoiced field.
     * @var        string
     */
    protected $base_rwrd_crrncy_amt_invoiced;

    /**
     * The value for the rwrd_currency_amount_invoiced field.
     * @var        string
     */
    protected $rwrd_currency_amount_invoiced;

    /**
     * The value for the base_rwrd_crrncy_amnt_refnded field.
     * @var        string
     */
    protected $base_rwrd_crrncy_amnt_refnded;

    /**
     * The value for the rwrd_crrncy_amnt_refunded field.
     * @var        string
     */
    protected $rwrd_crrncy_amnt_refunded;

    /**
     * The value for the reward_points_balance_refund field.
     * @var        int
     */
    protected $reward_points_balance_refund;

    /**
     * The value for the reward_points_balance_refunded field.
     * @var        int
     */
    protected $reward_points_balance_refunded;

    /**
     * The value for the reward_salesrule_points field.
     * @var        int
     */
    protected $reward_salesrule_points;

    /**
     * The value for the vendor_username field.
     * @var        string
     */
    protected $vendor_username;

    /**
     * The value for the vendor_name field.
     * @var        string
     */
    protected $vendor_name;

    /**
     * The value for the vendor_lastname field.
     * @var        string
     */
    protected $vendor_lastname;

    /**
     * The value for the vendor_email field.
     * @var        string
     */
    protected $vendor_email;

    /**
     * The value for the pos_id field.
     * @var        string
     */
    protected $pos_id;

    /**
     * The value for the pos_office field.
     * @var        string
     */
    protected $pos_office;

    /**
     * The value for the pos_code field.
     * @var        string
     */
    protected $pos_code;

    /**
     * The value for the pos_country field.
     * @var        string
     */
    protected $pos_country;

    /**
     * The value for the pos_city field.
     * @var        string
     */
    protected $pos_city;

    /**
     * The value for the pos_postal_code field.
     * @var        string
     */
    protected $pos_postal_code;

    /**
     * The value for the pos_address field.
     * @var        string
     */
    protected $pos_address;

    /**
     * The value for the pos_phone field.
     * @var        string
     */
    protected $pos_phone;

    /**
     * The value for the customer_identification field.
     * @var        string
     */
    protected $customer_identification;

    /**
     * The value for the is_gift field.
     * @var        int
     */
    protected $is_gift;

    /**
     * The value for the gift_for field.
     * @var        string
     */
    protected $gift_for;

    /**
     * The value for the gift_email field.
     * @var        string
     */
    protected $gift_email;

    /**
     * The value for the gift_message field.
     * @var        string
     */
    protected $gift_message;

    /**
     * The value for the gift_citydept field.
     * @var        string
     */
    protected $gift_citydept;

    /**
     * The value for the gift_shipping field.
     * @var        string
     */
    protected $gift_shipping;

    /**
     * The value for the was_payed field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $was_payed;

    /**
     * The value for the gift_for_lastname field.
     * @var        string
     */
    protected $gift_for_lastname;

    /**
     * The value for the sci_payment_methods field.
     * @var        string
     */
    protected $sci_payment_methods;

    /**
     * The value for the discount_applied field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $discount_applied;

    /**
     * The value for the rewards_applied field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $rewards_applied;

    /**
     * The value for the stock_before_pol field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $stock_before_pol;

    /**
     * @var        CustomerEntity
     */
    protected $aCustomerEntity;

    /**
     * @var        CoreStore
     */
    protected $aCoreStore;

    /**
     * @var        PropelObjectCollection|SalesFlatOrderItem[] Collection to store aggregation of SalesFlatOrderItem objects.
     */
    protected $collSalesFlatOrderItems;
    protected $collSalesFlatOrderItemsPartial;

    /**
     * @var        PropelObjectCollection|CouponMapping[] Collection to store aggregation of CouponMapping objects.
     */
    protected $collCouponMappings;
    protected $collCouponMappingsPartial;

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
    protected $salesFlatOrderItemsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $couponMappingsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->total_item_count = 0;
        $this->paypal_ipn_customer_notified = 0;
        $this->was_payed = 0;
        $this->discount_applied = 0;
        $this->rewards_applied = 0;
        $this->stock_before_pol = 0;
    }

    /**
     * Initializes internal state of BaseSalesFlatOrder object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [entity_id] column value.
     *
     * @return int
     */
    public function getEntityId()
    {

        return $this->entity_id;
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
     * Get the [status] column value.
     *
     * @return string
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [coupon_code] column value.
     *
     * @return string
     */
    public function getCouponCode()
    {

        return $this->coupon_code;
    }

    /**
     * Get the [protect_code] column value.
     *
     * @return string
     */
    public function getProtectCode()
    {

        return $this->protect_code;
    }

    /**
     * Get the [shipping_description] column value.
     *
     * @return string
     */
    public function getShippingDescription()
    {

        return $this->shipping_description;
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
     * Get the [store_id] column value.
     *
     * @return int
     */
    public function getStoreId()
    {

        return $this->store_id;
    }

    /**
     * Get the [customer_id] column value.
     *
     * @return int
     */
    public function getCustomerId()
    {

        return $this->customer_id;
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
     * Get the [base_discount_canceled] column value.
     *
     * @return string
     */
    public function getBaseDiscountCanceled()
    {

        return $this->base_discount_canceled;
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
     * Get the [base_discount_refunded] column value.
     *
     * @return string
     */
    public function getBaseDiscountRefunded()
    {

        return $this->base_discount_refunded;
    }

    /**
     * Get the [base_grand_total] column value.
     *
     * @return string
     */
    public function getBaseGrandTotal()
    {

        return $this->base_grand_total;
    }

    /**
     * Get the [base_shipping_amount] column value.
     *
     * @return string
     */
    public function getBaseShippingAmount()
    {

        return $this->base_shipping_amount;
    }

    /**
     * Get the [base_shipping_canceled] column value.
     *
     * @return string
     */
    public function getBaseShippingCanceled()
    {

        return $this->base_shipping_canceled;
    }

    /**
     * Get the [base_shipping_invoiced] column value.
     *
     * @return string
     */
    public function getBaseShippingInvoiced()
    {

        return $this->base_shipping_invoiced;
    }

    /**
     * Get the [base_shipping_refunded] column value.
     *
     * @return string
     */
    public function getBaseShippingRefunded()
    {

        return $this->base_shipping_refunded;
    }

    /**
     * Get the [base_shipping_tax_amount] column value.
     *
     * @return string
     */
    public function getBaseShippingTaxAmount()
    {

        return $this->base_shipping_tax_amount;
    }

    /**
     * Get the [base_shipping_tax_refunded] column value.
     *
     * @return string
     */
    public function getBaseShippingTaxRefunded()
    {

        return $this->base_shipping_tax_refunded;
    }

    /**
     * Get the [base_subtotal] column value.
     *
     * @return string
     */
    public function getBaseSubtotal()
    {

        return $this->base_subtotal;
    }

    /**
     * Get the [base_subtotal_canceled] column value.
     *
     * @return string
     */
    public function getBaseSubtotalCanceled()
    {

        return $this->base_subtotal_canceled;
    }

    /**
     * Get the [base_subtotal_invoiced] column value.
     *
     * @return string
     */
    public function getBaseSubtotalInvoiced()
    {

        return $this->base_subtotal_invoiced;
    }

    /**
     * Get the [base_subtotal_refunded] column value.
     *
     * @return string
     */
    public function getBaseSubtotalRefunded()
    {

        return $this->base_subtotal_refunded;
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
     * Get the [base_tax_canceled] column value.
     *
     * @return string
     */
    public function getBaseTaxCanceled()
    {

        return $this->base_tax_canceled;
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
     * Get the [base_tax_refunded] column value.
     *
     * @return string
     */
    public function getBaseTaxRefunded()
    {

        return $this->base_tax_refunded;
    }

    /**
     * Get the [base_to_global_rate] column value.
     *
     * @return string
     */
    public function getBaseToGlobalRate()
    {

        return $this->base_to_global_rate;
    }

    /**
     * Get the [base_to_order_rate] column value.
     *
     * @return string
     */
    public function getBaseToOrderRate()
    {

        return $this->base_to_order_rate;
    }

    /**
     * Get the [base_total_canceled] column value.
     *
     * @return string
     */
    public function getBaseTotalCanceled()
    {

        return $this->base_total_canceled;
    }

    /**
     * Get the [base_total_invoiced] column value.
     *
     * @return string
     */
    public function getBaseTotalInvoiced()
    {

        return $this->base_total_invoiced;
    }

    /**
     * Get the [base_total_invoiced_cost] column value.
     *
     * @return string
     */
    public function getBaseTotalInvoicedCost()
    {

        return $this->base_total_invoiced_cost;
    }

    /**
     * Get the [base_total_offline_refunded] column value.
     *
     * @return string
     */
    public function getBaseTotalOfflineRefunded()
    {

        return $this->base_total_offline_refunded;
    }

    /**
     * Get the [base_total_online_refunded] column value.
     *
     * @return string
     */
    public function getBaseTotalOnlineRefunded()
    {

        return $this->base_total_online_refunded;
    }

    /**
     * Get the [base_total_paid] column value.
     *
     * @return string
     */
    public function getBaseTotalPaid()
    {

        return $this->base_total_paid;
    }

    /**
     * Get the [base_total_qty_ordered] column value.
     *
     * @return string
     */
    public function getBaseTotalQtyOrdered()
    {

        return $this->base_total_qty_ordered;
    }

    /**
     * Get the [base_total_refunded] column value.
     *
     * @return string
     */
    public function getBaseTotalRefunded()
    {

        return $this->base_total_refunded;
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
     * Get the [discount_canceled] column value.
     *
     * @return string
     */
    public function getDiscountCanceled()
    {

        return $this->discount_canceled;
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
     * Get the [discount_refunded] column value.
     *
     * @return string
     */
    public function getDiscountRefunded()
    {

        return $this->discount_refunded;
    }

    /**
     * Get the [grand_total] column value.
     *
     * @return string
     */
    public function getGrandTotal()
    {

        return $this->grand_total;
    }

    /**
     * Get the [shipping_amount] column value.
     *
     * @return string
     */
    public function getShippingAmount()
    {

        return $this->shipping_amount;
    }

    /**
     * Get the [shipping_canceled] column value.
     *
     * @return string
     */
    public function getShippingCanceled()
    {

        return $this->shipping_canceled;
    }

    /**
     * Get the [shipping_invoiced] column value.
     *
     * @return string
     */
    public function getShippingInvoiced()
    {

        return $this->shipping_invoiced;
    }

    /**
     * Get the [shipping_refunded] column value.
     *
     * @return string
     */
    public function getShippingRefunded()
    {

        return $this->shipping_refunded;
    }

    /**
     * Get the [shipping_tax_amount] column value.
     *
     * @return string
     */
    public function getShippingTaxAmount()
    {

        return $this->shipping_tax_amount;
    }

    /**
     * Get the [shipping_tax_refunded] column value.
     *
     * @return string
     */
    public function getShippingTaxRefunded()
    {

        return $this->shipping_tax_refunded;
    }

    /**
     * Get the [store_to_base_rate] column value.
     *
     * @return string
     */
    public function getStoreToBaseRate()
    {

        return $this->store_to_base_rate;
    }

    /**
     * Get the [store_to_order_rate] column value.
     *
     * @return string
     */
    public function getStoreToOrderRate()
    {

        return $this->store_to_order_rate;
    }

    /**
     * Get the [subtotal] column value.
     *
     * @return string
     */
    public function getSubtotal()
    {

        return $this->subtotal;
    }

    /**
     * Get the [subtotal_canceled] column value.
     *
     * @return string
     */
    public function getSubtotalCanceled()
    {

        return $this->subtotal_canceled;
    }

    /**
     * Get the [subtotal_invoiced] column value.
     *
     * @return string
     */
    public function getSubtotalInvoiced()
    {

        return $this->subtotal_invoiced;
    }

    /**
     * Get the [subtotal_refunded] column value.
     *
     * @return string
     */
    public function getSubtotalRefunded()
    {

        return $this->subtotal_refunded;
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
     * Get the [tax_canceled] column value.
     *
     * @return string
     */
    public function getTaxCanceled()
    {

        return $this->tax_canceled;
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
     * Get the [tax_refunded] column value.
     *
     * @return string
     */
    public function getTaxRefunded()
    {

        return $this->tax_refunded;
    }

    /**
     * Get the [total_canceled] column value.
     *
     * @return string
     */
    public function getTotalCanceled()
    {

        return $this->total_canceled;
    }

    /**
     * Get the [total_invoiced] column value.
     *
     * @return string
     */
    public function getTotalInvoiced()
    {

        return $this->total_invoiced;
    }

    /**
     * Get the [total_offline_refunded] column value.
     *
     * @return string
     */
    public function getTotalOfflineRefunded()
    {

        return $this->total_offline_refunded;
    }

    /**
     * Get the [total_online_refunded] column value.
     *
     * @return string
     */
    public function getTotalOnlineRefunded()
    {

        return $this->total_online_refunded;
    }

    /**
     * Get the [total_paid] column value.
     *
     * @return string
     */
    public function getTotalPaid()
    {

        return $this->total_paid;
    }

    /**
     * Get the [total_qty_ordered] column value.
     *
     * @return string
     */
    public function getTotalQtyOrdered()
    {

        return $this->total_qty_ordered;
    }

    /**
     * Get the [total_refunded] column value.
     *
     * @return string
     */
    public function getTotalRefunded()
    {

        return $this->total_refunded;
    }

    /**
     * Get the [can_ship_partially] column value.
     *
     * @return int
     */
    public function getCanShipPartially()
    {

        return $this->can_ship_partially;
    }

    /**
     * Get the [can_ship_partially_item] column value.
     *
     * @return int
     */
    public function getCanShipPartiallyItem()
    {

        return $this->can_ship_partially_item;
    }

    /**
     * Get the [customer_is_guest] column value.
     *
     * @return int
     */
    public function getCustomerIsGuest()
    {

        return $this->customer_is_guest;
    }

    /**
     * Get the [customer_note_notify] column value.
     *
     * @return int
     */
    public function getCustomerNoteNotify()
    {

        return $this->customer_note_notify;
    }

    /**
     * Get the [billing_address_id] column value.
     *
     * @return int
     */
    public function getBillingAddressId()
    {

        return $this->billing_address_id;
    }

    /**
     * Get the [customer_group_id] column value.
     *
     * @return int
     */
    public function getCustomerGroupId()
    {

        return $this->customer_group_id;
    }

    /**
     * Get the [edit_increment] column value.
     *
     * @return int
     */
    public function getEditIncrement()
    {

        return $this->edit_increment;
    }

    /**
     * Get the [email_sent] column value.
     *
     * @return int
     */
    public function getEmailSent()
    {

        return $this->email_sent;
    }

    /**
     * Get the [forced_shipment_with_invoice] column value.
     *
     * @return int
     */
    public function getForcedShipmentWithInvoice()
    {

        return $this->forced_shipment_with_invoice;
    }

    /**
     * Get the [payment_auth_expiration] column value.
     *
     * @return int
     */
    public function getPaymentAuthExpiration()
    {

        return $this->payment_auth_expiration;
    }

    /**
     * Get the [quote_address_id] column value.
     *
     * @return int
     */
    public function getQuoteAddressId()
    {

        return $this->quote_address_id;
    }

    /**
     * Get the [quote_id] column value.
     *
     * @return int
     */
    public function getQuoteId()
    {

        return $this->quote_id;
    }

    /**
     * Get the [shipping_address_id] column value.
     *
     * @return int
     */
    public function getShippingAddressId()
    {

        return $this->shipping_address_id;
    }

    /**
     * Get the [adjustment_negative] column value.
     *
     * @return string
     */
    public function getAdjustmentNegative()
    {

        return $this->adjustment_negative;
    }

    /**
     * Get the [adjustment_positive] column value.
     *
     * @return string
     */
    public function getAdjustmentPositive()
    {

        return $this->adjustment_positive;
    }

    /**
     * Get the [base_adjustment_negative] column value.
     *
     * @return string
     */
    public function getBaseAdjustmentNegative()
    {

        return $this->base_adjustment_negative;
    }

    /**
     * Get the [base_adjustment_positive] column value.
     *
     * @return string
     */
    public function getBaseAdjustmentPositive()
    {

        return $this->base_adjustment_positive;
    }

    /**
     * Get the [base_shipping_discount_amount] column value.
     *
     * @return string
     */
    public function getBaseShippingDiscountAmount()
    {

        return $this->base_shipping_discount_amount;
    }

    /**
     * Get the [base_subtotal_incl_tax] column value.
     *
     * @return string
     */
    public function getBaseSubtotalInclTax()
    {

        return $this->base_subtotal_incl_tax;
    }

    /**
     * Get the [base_total_due] column value.
     *
     * @return string
     */
    public function getBaseTotalDue()
    {

        return $this->base_total_due;
    }

    /**
     * Get the [payment_authorization_amount] column value.
     *
     * @return string
     */
    public function getPaymentAuthorizationAmount()
    {

        return $this->payment_authorization_amount;
    }

    /**
     * Get the [shipping_discount_amount] column value.
     *
     * @return string
     */
    public function getShippingDiscountAmount()
    {

        return $this->shipping_discount_amount;
    }

    /**
     * Get the [subtotal_incl_tax] column value.
     *
     * @return string
     */
    public function getSubtotalInclTax()
    {

        return $this->subtotal_incl_tax;
    }

    /**
     * Get the [total_due] column value.
     *
     * @return string
     */
    public function getTotalDue()
    {

        return $this->total_due;
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
     * Get the [optionally formatted] temporal [customer_dob] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCustomerDob($format = 'Y-m-d H:i:s')
    {
        if ($this->customer_dob === null) {
            return null;
        }

        if ($this->customer_dob === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->customer_dob);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->customer_dob, true), $x);
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
     * Get the [increment_id] column value.
     *
     * @return string
     */
    public function getIncrementId()
    {

        return $this->increment_id;
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
     * Get the [base_currency_code] column value.
     *
     * @return string
     */
    public function getBaseCurrencyCode()
    {

        return $this->base_currency_code;
    }

    /**
     * Get the [customer_email] column value.
     *
     * @return string
     */
    public function getCustomerEmail()
    {

        return $this->customer_email;
    }

    /**
     * Get the [customer_firstname] column value.
     *
     * @return string
     */
    public function getCustomerFirstname()
    {

        return $this->customer_firstname;
    }

    /**
     * Get the [customer_lastname] column value.
     *
     * @return string
     */
    public function getCustomerLastname()
    {

        return $this->customer_lastname;
    }

    /**
     * Get the [customer_middlename] column value.
     *
     * @return string
     */
    public function getCustomerMiddlename()
    {

        return $this->customer_middlename;
    }

    /**
     * Get the [customer_prefix] column value.
     *
     * @return string
     */
    public function getCustomerPrefix()
    {

        return $this->customer_prefix;
    }

    /**
     * Get the [customer_suffix] column value.
     *
     * @return string
     */
    public function getCustomerSuffix()
    {

        return $this->customer_suffix;
    }

    /**
     * Get the [customer_taxvat] column value.
     *
     * @return string
     */
    public function getCustomerTaxvat()
    {

        return $this->customer_taxvat;
    }

    /**
     * Get the [discount_description] column value.
     *
     * @return string
     */
    public function getDiscountDescription()
    {

        return $this->discount_description;
    }

    /**
     * Get the [ext_customer_id] column value.
     *
     * @return string
     */
    public function getExtCustomerId()
    {

        return $this->ext_customer_id;
    }

    /**
     * Get the [ext_order_id] column value.
     *
     * @return string
     */
    public function getExtOrderId()
    {

        return $this->ext_order_id;
    }

    /**
     * Get the [global_currency_code] column value.
     *
     * @return string
     */
    public function getGlobalCurrencyCode()
    {

        return $this->global_currency_code;
    }

    /**
     * Get the [hold_before_state] column value.
     *
     * @return string
     */
    public function getHoldBeforeState()
    {

        return $this->hold_before_state;
    }

    /**
     * Get the [hold_before_status] column value.
     *
     * @return string
     */
    public function getHoldBeforeStatus()
    {

        return $this->hold_before_status;
    }

    /**
     * Get the [order_currency_code] column value.
     *
     * @return string
     */
    public function getOrderCurrencyCode()
    {

        return $this->order_currency_code;
    }

    /**
     * Get the [original_increment_id] column value.
     *
     * @return string
     */
    public function getOriginalIncrementId()
    {

        return $this->original_increment_id;
    }

    /**
     * Get the [relation_child_id] column value.
     *
     * @return string
     */
    public function getRelationChildId()
    {

        return $this->relation_child_id;
    }

    /**
     * Get the [relation_child_real_id] column value.
     *
     * @return string
     */
    public function getRelationChildRealId()
    {

        return $this->relation_child_real_id;
    }

    /**
     * Get the [relation_parent_id] column value.
     *
     * @return string
     */
    public function getRelationParentId()
    {

        return $this->relation_parent_id;
    }

    /**
     * Get the [relation_parent_real_id] column value.
     *
     * @return string
     */
    public function getRelationParentRealId()
    {

        return $this->relation_parent_real_id;
    }

    /**
     * Get the [remote_ip] column value.
     *
     * @return string
     */
    public function getRemoteIp()
    {

        return $this->remote_ip;
    }

    /**
     * Get the [shipping_method] column value.
     *
     * @return string
     */
    public function getShippingMethod()
    {

        return $this->shipping_method;
    }

    /**
     * Get the [store_currency_code] column value.
     *
     * @return string
     */
    public function getStoreCurrencyCode()
    {

        return $this->store_currency_code;
    }

    /**
     * Get the [store_name] column value.
     *
     * @return string
     */
    public function getStoreName()
    {

        return $this->store_name;
    }

    /**
     * Get the [x_forwarded_for] column value.
     *
     * @return string
     */
    public function getXForwardedFor()
    {

        return $this->x_forwarded_for;
    }

    /**
     * Get the [customer_note] column value.
     *
     * @return string
     */
    public function getCustomerNote()
    {

        return $this->customer_note;
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
     * Get the [total_item_count] column value.
     *
     * @return int
     */
    public function getTotalItemCount()
    {

        return $this->total_item_count;
    }

    /**
     * Get the [customer_gender] column value.
     *
     * @return int
     */
    public function getCustomerGender()
    {

        return $this->customer_gender;
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
     * Get the [shipping_hidden_tax_amount] column value.
     *
     * @return string
     */
    public function getShippingHiddenTaxAmount()
    {

        return $this->shipping_hidden_tax_amount;
    }

    /**
     * Get the [base_shipping_hidden_tax_amnt] column value.
     *
     * @return string
     */
    public function getBaseShippingHiddenTaxAmnt()
    {

        return $this->base_shipping_hidden_tax_amnt;
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
     * Get the [shipping_incl_tax] column value.
     *
     * @return string
     */
    public function getShippingInclTax()
    {

        return $this->shipping_incl_tax;
    }

    /**
     * Get the [base_shipping_incl_tax] column value.
     *
     * @return string
     */
    public function getBaseShippingInclTax()
    {

        return $this->base_shipping_incl_tax;
    }

    /**
     * Get the [coupon_rule_name] column value.
     *
     * @return string
     */
    public function getCouponRuleName()
    {

        return $this->coupon_rule_name;
    }

    /**
     * Get the [paypal_ipn_customer_notified] column value.
     *
     * @return int
     */
    public function getPaypalIpnCustomerNotified()
    {

        return $this->paypal_ipn_customer_notified;
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
     * Get the [groupdeals_coupon_from] column value.
     *
     * @return string
     */
    public function getGroupdealsCouponFrom()
    {

        return $this->groupdeals_coupon_from;
    }

    /**
     * Get the [groupdeals_coupon_to] column value.
     *
     * @return string
     */
    public function getGroupdealsCouponTo()
    {

        return $this->groupdeals_coupon_to;
    }

    /**
     * Get the [groupdeals_coupon_to_email] column value.
     *
     * @return string
     */
    public function getGroupdealsCouponToEmail()
    {

        return $this->groupdeals_coupon_to_email;
    }

    /**
     * Get the [groupdeals_coupon_message] column value.
     *
     * @return string
     */
    public function getGroupdealsCouponMessage()
    {

        return $this->groupdeals_coupon_message;
    }

    /**
     * Get the [base_customer_balance_amount] column value.
     *
     * @return string
     */
    public function getBaseCustomerBalanceAmount()
    {

        return $this->base_customer_balance_amount;
    }

    /**
     * Get the [customer_balance_amount] column value.
     *
     * @return string
     */
    public function getCustomerBalanceAmount()
    {

        return $this->customer_balance_amount;
    }

    /**
     * Get the [base_customer_balance_invoiced] column value.
     *
     * @return string
     */
    public function getBaseCustomerBalanceInvoiced()
    {

        return $this->base_customer_balance_invoiced;
    }

    /**
     * Get the [customer_balance_invoiced] column value.
     *
     * @return string
     */
    public function getCustomerBalanceInvoiced()
    {

        return $this->customer_balance_invoiced;
    }

    /**
     * Get the [base_customer_balance_refunded] column value.
     *
     * @return string
     */
    public function getBaseCustomerBalanceRefunded()
    {

        return $this->base_customer_balance_refunded;
    }

    /**
     * Get the [customer_balance_refunded] column value.
     *
     * @return string
     */
    public function getCustomerBalanceRefunded()
    {

        return $this->customer_balance_refunded;
    }

    /**
     * Get the [bs_customer_bal_total_refunded] column value.
     *
     * @return string
     */
    public function getBsCustomerBalTotalRefunded()
    {

        return $this->bs_customer_bal_total_refunded;
    }

    /**
     * Get the [customer_bal_total_refunded] column value.
     *
     * @return string
     */
    public function getCustomerBalTotalRefunded()
    {

        return $this->customer_bal_total_refunded;
    }

    /**
     * Get the [gift_cards] column value.
     *
     * @return string
     */
    public function getGiftCards()
    {

        return $this->gift_cards;
    }

    /**
     * Get the [base_gift_cards_amount] column value.
     *
     * @return string
     */
    public function getBaseGiftCardsAmount()
    {

        return $this->base_gift_cards_amount;
    }

    /**
     * Get the [gift_cards_amount] column value.
     *
     * @return string
     */
    public function getGiftCardsAmount()
    {

        return $this->gift_cards_amount;
    }

    /**
     * Get the [base_gift_cards_invoiced] column value.
     *
     * @return string
     */
    public function getBaseGiftCardsInvoiced()
    {

        return $this->base_gift_cards_invoiced;
    }

    /**
     * Get the [gift_cards_invoiced] column value.
     *
     * @return string
     */
    public function getGiftCardsInvoiced()
    {

        return $this->gift_cards_invoiced;
    }

    /**
     * Get the [base_gift_cards_refunded] column value.
     *
     * @return string
     */
    public function getBaseGiftCardsRefunded()
    {

        return $this->base_gift_cards_refunded;
    }

    /**
     * Get the [gift_cards_refunded] column value.
     *
     * @return string
     */
    public function getGiftCardsRefunded()
    {

        return $this->gift_cards_refunded;
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
     * Get the [gw_allow_gift_receipt] column value.
     *
     * @return int
     */
    public function getGwAllowGiftReceipt()
    {

        return $this->gw_allow_gift_receipt;
    }

    /**
     * Get the [gw_add_card] column value.
     *
     * @return int
     */
    public function getGwAddCard()
    {

        return $this->gw_add_card;
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
     * Get the [gw_items_base_price] column value.
     *
     * @return string
     */
    public function getGwItemsBasePrice()
    {

        return $this->gw_items_base_price;
    }

    /**
     * Get the [gw_items_price] column value.
     *
     * @return string
     */
    public function getGwItemsPrice()
    {

        return $this->gw_items_price;
    }

    /**
     * Get the [gw_card_base_price] column value.
     *
     * @return string
     */
    public function getGwCardBasePrice()
    {

        return $this->gw_card_base_price;
    }

    /**
     * Get the [gw_card_price] column value.
     *
     * @return string
     */
    public function getGwCardPrice()
    {

        return $this->gw_card_price;
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
     * Get the [gw_items_base_tax_amount] column value.
     *
     * @return string
     */
    public function getGwItemsBaseTaxAmount()
    {

        return $this->gw_items_base_tax_amount;
    }

    /**
     * Get the [gw_items_tax_amount] column value.
     *
     * @return string
     */
    public function getGwItemsTaxAmount()
    {

        return $this->gw_items_tax_amount;
    }

    /**
     * Get the [gw_card_base_tax_amount] column value.
     *
     * @return string
     */
    public function getGwCardBaseTaxAmount()
    {

        return $this->gw_card_base_tax_amount;
    }

    /**
     * Get the [gw_card_tax_amount] column value.
     *
     * @return string
     */
    public function getGwCardTaxAmount()
    {

        return $this->gw_card_tax_amount;
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
     * Get the [gw_items_base_price_invoiced] column value.
     *
     * @return string
     */
    public function getGwItemsBasePriceInvoiced()
    {

        return $this->gw_items_base_price_invoiced;
    }

    /**
     * Get the [gw_items_price_invoiced] column value.
     *
     * @return string
     */
    public function getGwItemsPriceInvoiced()
    {

        return $this->gw_items_price_invoiced;
    }

    /**
     * Get the [gw_card_base_price_invoiced] column value.
     *
     * @return string
     */
    public function getGwCardBasePriceInvoiced()
    {

        return $this->gw_card_base_price_invoiced;
    }

    /**
     * Get the [gw_card_price_invoiced] column value.
     *
     * @return string
     */
    public function getGwCardPriceInvoiced()
    {

        return $this->gw_card_price_invoiced;
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
     * Get the [gw_items_base_tax_invoiced] column value.
     *
     * @return string
     */
    public function getGwItemsBaseTaxInvoiced()
    {

        return $this->gw_items_base_tax_invoiced;
    }

    /**
     * Get the [gw_items_tax_invoiced] column value.
     *
     * @return string
     */
    public function getGwItemsTaxInvoiced()
    {

        return $this->gw_items_tax_invoiced;
    }

    /**
     * Get the [gw_card_base_tax_invoiced] column value.
     *
     * @return string
     */
    public function getGwCardBaseTaxInvoiced()
    {

        return $this->gw_card_base_tax_invoiced;
    }

    /**
     * Get the [gw_card_tax_invoiced] column value.
     *
     * @return string
     */
    public function getGwCardTaxInvoiced()
    {

        return $this->gw_card_tax_invoiced;
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
     * Get the [gw_items_base_price_refunded] column value.
     *
     * @return string
     */
    public function getGwItemsBasePriceRefunded()
    {

        return $this->gw_items_base_price_refunded;
    }

    /**
     * Get the [gw_items_price_refunded] column value.
     *
     * @return string
     */
    public function getGwItemsPriceRefunded()
    {

        return $this->gw_items_price_refunded;
    }

    /**
     * Get the [gw_card_base_price_refunded] column value.
     *
     * @return string
     */
    public function getGwCardBasePriceRefunded()
    {

        return $this->gw_card_base_price_refunded;
    }

    /**
     * Get the [gw_card_price_refunded] column value.
     *
     * @return string
     */
    public function getGwCardPriceRefunded()
    {

        return $this->gw_card_price_refunded;
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
     * Get the [gw_items_base_tax_refunded] column value.
     *
     * @return string
     */
    public function getGwItemsBaseTaxRefunded()
    {

        return $this->gw_items_base_tax_refunded;
    }

    /**
     * Get the [gw_items_tax_refunded] column value.
     *
     * @return string
     */
    public function getGwItemsTaxRefunded()
    {

        return $this->gw_items_tax_refunded;
    }

    /**
     * Get the [gw_card_base_tax_refunded] column value.
     *
     * @return string
     */
    public function getGwCardBaseTaxRefunded()
    {

        return $this->gw_card_base_tax_refunded;
    }

    /**
     * Get the [gw_card_tax_refunded] column value.
     *
     * @return string
     */
    public function getGwCardTaxRefunded()
    {

        return $this->gw_card_tax_refunded;
    }

    /**
     * Get the [reward_points_balance] column value.
     *
     * @return int
     */
    public function getRewardPointsBalance()
    {

        return $this->reward_points_balance;
    }

    /**
     * Get the [base_reward_currency_amount] column value.
     *
     * @return string
     */
    public function getBaseRewardCurrencyAmount()
    {

        return $this->base_reward_currency_amount;
    }

    /**
     * Get the [reward_currency_amount] column value.
     *
     * @return string
     */
    public function getRewardCurrencyAmount()
    {

        return $this->reward_currency_amount;
    }

    /**
     * Get the [base_rwrd_crrncy_amt_invoiced] column value.
     *
     * @return string
     */
    public function getBaseRwrdCrrncyAmtInvoiced()
    {

        return $this->base_rwrd_crrncy_amt_invoiced;
    }

    /**
     * Get the [rwrd_currency_amount_invoiced] column value.
     *
     * @return string
     */
    public function getRwrdCurrencyAmountInvoiced()
    {

        return $this->rwrd_currency_amount_invoiced;
    }

    /**
     * Get the [base_rwrd_crrncy_amnt_refnded] column value.
     *
     * @return string
     */
    public function getBaseRwrdCrrncyAmntRefnded()
    {

        return $this->base_rwrd_crrncy_amnt_refnded;
    }

    /**
     * Get the [rwrd_crrncy_amnt_refunded] column value.
     *
     * @return string
     */
    public function getRwrdCrrncyAmntRefunded()
    {

        return $this->rwrd_crrncy_amnt_refunded;
    }

    /**
     * Get the [reward_points_balance_refund] column value.
     *
     * @return int
     */
    public function getRewardPointsBalanceRefund()
    {

        return $this->reward_points_balance_refund;
    }

    /**
     * Get the [reward_points_balance_refunded] column value.
     *
     * @return int
     */
    public function getRewardPointsBalanceRefunded()
    {

        return $this->reward_points_balance_refunded;
    }

    /**
     * Get the [reward_salesrule_points] column value.
     *
     * @return int
     */
    public function getRewardSalesrulePoints()
    {

        return $this->reward_salesrule_points;
    }

    /**
     * Get the [vendor_username] column value.
     *
     * @return string
     */
    public function getVendorUsername()
    {

        return $this->vendor_username;
    }

    /**
     * Get the [vendor_name] column value.
     *
     * @return string
     */
    public function getVendorName()
    {

        return $this->vendor_name;
    }

    /**
     * Get the [vendor_lastname] column value.
     *
     * @return string
     */
    public function getVendorLastname()
    {

        return $this->vendor_lastname;
    }

    /**
     * Get the [vendor_email] column value.
     *
     * @return string
     */
    public function getVendorEmail()
    {

        return $this->vendor_email;
    }

    /**
     * Get the [pos_id] column value.
     *
     * @return string
     */
    public function getPosId()
    {

        return $this->pos_id;
    }

    /**
     * Get the [pos_office] column value.
     *
     * @return string
     */
    public function getPosOffice()
    {

        return $this->pos_office;
    }

    /**
     * Get the [pos_code] column value.
     *
     * @return string
     */
    public function getPosCode()
    {

        return $this->pos_code;
    }

    /**
     * Get the [pos_country] column value.
     *
     * @return string
     */
    public function getPosCountry()
    {

        return $this->pos_country;
    }

    /**
     * Get the [pos_city] column value.
     *
     * @return string
     */
    public function getPosCity()
    {

        return $this->pos_city;
    }

    /**
     * Get the [pos_postal_code] column value.
     *
     * @return string
     */
    public function getPosPostalCode()
    {

        return $this->pos_postal_code;
    }

    /**
     * Get the [pos_address] column value.
     *
     * @return string
     */
    public function getPosAddress()
    {

        return $this->pos_address;
    }

    /**
     * Get the [pos_phone] column value.
     *
     * @return string
     */
    public function getPosPhone()
    {

        return $this->pos_phone;
    }

    /**
     * Get the [customer_identification] column value.
     *
     * @return string
     */
    public function getCustomerIdentification()
    {

        return $this->customer_identification;
    }

    /**
     * Get the [is_gift] column value.
     *
     * @return int
     */
    public function getIsGift()
    {

        return $this->is_gift;
    }

    /**
     * Get the [gift_for] column value.
     *
     * @return string
     */
    public function getGiftFor()
    {

        return $this->gift_for;
    }

    /**
     * Get the [gift_email] column value.
     *
     * @return string
     */
    public function getGiftEmail()
    {

        return $this->gift_email;
    }

    /**
     * Get the [gift_message] column value.
     *
     * @return string
     */
    public function getGiftMessage()
    {

        return $this->gift_message;
    }

    /**
     * Get the [gift_citydept] column value.
     *
     * @return string
     */
    public function getGiftCitydept()
    {

        return $this->gift_citydept;
    }

    /**
     * Get the [gift_shipping] column value.
     *
     * @return string
     */
    public function getGiftShipping()
    {

        return $this->gift_shipping;
    }

    /**
     * Get the [was_payed] column value.
     *
     * @return int
     */
    public function getWasPayed()
    {

        return $this->was_payed;
    }

    /**
     * Get the [gift_for_lastname] column value.
     *
     * @return string
     */
    public function getGiftForLastname()
    {

        return $this->gift_for_lastname;
    }

    /**
     * Get the [sci_payment_methods] column value.
     *
     * @return string
     */
    public function getSciPaymentMethods()
    {

        return $this->sci_payment_methods;
    }

    /**
     * Get the [discount_applied] column value.
     *
     * @return int
     */
    public function getDiscountApplied()
    {

        return $this->discount_applied;
    }

    /**
     * Get the [rewards_applied] column value.
     *
     * @return int
     */
    public function getRewardsApplied()
    {

        return $this->rewards_applied;
    }

    /**
     * Get the [stock_before_pol] column value.
     *
     * @return int
     */
    public function getStockBeforePol()
    {

        return $this->stock_before_pol;
    }

    /**
     * Set the value of [entity_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setEntityId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entity_id !== $v) {
            $this->entity_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::ENTITY_ID;
        }


        return $this;
    } // setEntityId()

    /**
     * Set the value of [state] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setState($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->state !== $v) {
            $this->state = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::STATE;
        }


        return $this;
    } // setState()

    /**
     * Set the value of [status] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [coupon_code] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCouponCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->coupon_code !== $v) {
            $this->coupon_code = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::COUPON_CODE;
        }


        return $this;
    } // setCouponCode()

    /**
     * Set the value of [protect_code] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setProtectCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->protect_code !== $v) {
            $this->protect_code = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::PROTECT_CODE;
        }


        return $this;
    } // setProtectCode()

    /**
     * Set the value of [shipping_description] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_description !== $v) {
            $this->shipping_description = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_DESCRIPTION;
        }


        return $this;
    } // setShippingDescription()

    /**
     * Set the value of [is_virtual] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setIsVirtual($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_virtual !== $v) {
            $this->is_virtual = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::IS_VIRTUAL;
        }


        return $this;
    } // setIsVirtual()

    /**
     * Set the value of [store_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setStoreId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->store_id !== $v) {
            $this->store_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::STORE_ID;
        }

        if ($this->aCoreStore !== null && $this->aCoreStore->getStoreId() !== $v) {
            $this->aCoreStore = null;
        }


        return $this;
    } // setStoreId()

    /**
     * Set the value of [customer_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customer_id !== $v) {
            $this->customer_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_ID;
        }

        if ($this->aCustomerEntity !== null && $this->aCustomerEntity->getEntityId() !== $v) {
            $this->aCustomerEntity = null;
        }


        return $this;
    } // setCustomerId()

    /**
     * Set the value of [base_discount_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseDiscountAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_discount_amount !== $v) {
            $this->base_discount_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_DISCOUNT_AMOUNT;
        }


        return $this;
    } // setBaseDiscountAmount()

    /**
     * Set the value of [base_discount_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseDiscountCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_discount_canceled !== $v) {
            $this->base_discount_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_DISCOUNT_CANCELED;
        }


        return $this;
    } // setBaseDiscountCanceled()

    /**
     * Set the value of [base_discount_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseDiscountInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_discount_invoiced !== $v) {
            $this->base_discount_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_DISCOUNT_INVOICED;
        }


        return $this;
    } // setBaseDiscountInvoiced()

    /**
     * Set the value of [base_discount_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseDiscountRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_discount_refunded !== $v) {
            $this->base_discount_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_DISCOUNT_REFUNDED;
        }


        return $this;
    } // setBaseDiscountRefunded()

    /**
     * Set the value of [base_grand_total] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseGrandTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_grand_total !== $v) {
            $this->base_grand_total = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_GRAND_TOTAL;
        }


        return $this;
    } // setBaseGrandTotal()

    /**
     * Set the value of [base_shipping_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseShippingAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_shipping_amount !== $v) {
            $this->base_shipping_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SHIPPING_AMOUNT;
        }


        return $this;
    } // setBaseShippingAmount()

    /**
     * Set the value of [base_shipping_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseShippingCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_shipping_canceled !== $v) {
            $this->base_shipping_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SHIPPING_CANCELED;
        }


        return $this;
    } // setBaseShippingCanceled()

    /**
     * Set the value of [base_shipping_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseShippingInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_shipping_invoiced !== $v) {
            $this->base_shipping_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SHIPPING_INVOICED;
        }


        return $this;
    } // setBaseShippingInvoiced()

    /**
     * Set the value of [base_shipping_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseShippingRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_shipping_refunded !== $v) {
            $this->base_shipping_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SHIPPING_REFUNDED;
        }


        return $this;
    } // setBaseShippingRefunded()

    /**
     * Set the value of [base_shipping_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseShippingTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_shipping_tax_amount !== $v) {
            $this->base_shipping_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SHIPPING_TAX_AMOUNT;
        }


        return $this;
    } // setBaseShippingTaxAmount()

    /**
     * Set the value of [base_shipping_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseShippingTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_shipping_tax_refunded !== $v) {
            $this->base_shipping_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SHIPPING_TAX_REFUNDED;
        }


        return $this;
    } // setBaseShippingTaxRefunded()

    /**
     * Set the value of [base_subtotal] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseSubtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_subtotal !== $v) {
            $this->base_subtotal = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SUBTOTAL;
        }


        return $this;
    } // setBaseSubtotal()

    /**
     * Set the value of [base_subtotal_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseSubtotalCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_subtotal_canceled !== $v) {
            $this->base_subtotal_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SUBTOTAL_CANCELED;
        }


        return $this;
    } // setBaseSubtotalCanceled()

    /**
     * Set the value of [base_subtotal_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseSubtotalInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_subtotal_invoiced !== $v) {
            $this->base_subtotal_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SUBTOTAL_INVOICED;
        }


        return $this;
    } // setBaseSubtotalInvoiced()

    /**
     * Set the value of [base_subtotal_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseSubtotalRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_subtotal_refunded !== $v) {
            $this->base_subtotal_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SUBTOTAL_REFUNDED;
        }


        return $this;
    } // setBaseSubtotalRefunded()

    /**
     * Set the value of [base_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_tax_amount !== $v) {
            $this->base_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TAX_AMOUNT;
        }


        return $this;
    } // setBaseTaxAmount()

    /**
     * Set the value of [base_tax_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTaxCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_tax_canceled !== $v) {
            $this->base_tax_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TAX_CANCELED;
        }


        return $this;
    } // setBaseTaxCanceled()

    /**
     * Set the value of [base_tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_tax_invoiced !== $v) {
            $this->base_tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TAX_INVOICED;
        }


        return $this;
    } // setBaseTaxInvoiced()

    /**
     * Set the value of [base_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_tax_refunded !== $v) {
            $this->base_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TAX_REFUNDED;
        }


        return $this;
    } // setBaseTaxRefunded()

    /**
     * Set the value of [base_to_global_rate] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseToGlobalRate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_to_global_rate !== $v) {
            $this->base_to_global_rate = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TO_GLOBAL_RATE;
        }


        return $this;
    } // setBaseToGlobalRate()

    /**
     * Set the value of [base_to_order_rate] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseToOrderRate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_to_order_rate !== $v) {
            $this->base_to_order_rate = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TO_ORDER_RATE;
        }


        return $this;
    } // setBaseToOrderRate()

    /**
     * Set the value of [base_total_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTotalCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_total_canceled !== $v) {
            $this->base_total_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TOTAL_CANCELED;
        }


        return $this;
    } // setBaseTotalCanceled()

    /**
     * Set the value of [base_total_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTotalInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_total_invoiced !== $v) {
            $this->base_total_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TOTAL_INVOICED;
        }


        return $this;
    } // setBaseTotalInvoiced()

    /**
     * Set the value of [base_total_invoiced_cost] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTotalInvoicedCost($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_total_invoiced_cost !== $v) {
            $this->base_total_invoiced_cost = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TOTAL_INVOICED_COST;
        }


        return $this;
    } // setBaseTotalInvoicedCost()

    /**
     * Set the value of [base_total_offline_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTotalOfflineRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_total_offline_refunded !== $v) {
            $this->base_total_offline_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TOTAL_OFFLINE_REFUNDED;
        }


        return $this;
    } // setBaseTotalOfflineRefunded()

    /**
     * Set the value of [base_total_online_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTotalOnlineRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_total_online_refunded !== $v) {
            $this->base_total_online_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TOTAL_ONLINE_REFUNDED;
        }


        return $this;
    } // setBaseTotalOnlineRefunded()

    /**
     * Set the value of [base_total_paid] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTotalPaid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_total_paid !== $v) {
            $this->base_total_paid = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TOTAL_PAID;
        }


        return $this;
    } // setBaseTotalPaid()

    /**
     * Set the value of [base_total_qty_ordered] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTotalQtyOrdered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_total_qty_ordered !== $v) {
            $this->base_total_qty_ordered = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TOTAL_QTY_ORDERED;
        }


        return $this;
    } // setBaseTotalQtyOrdered()

    /**
     * Set the value of [base_total_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTotalRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_total_refunded !== $v) {
            $this->base_total_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TOTAL_REFUNDED;
        }


        return $this;
    } // setBaseTotalRefunded()

    /**
     * Set the value of [discount_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setDiscountAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->discount_amount !== $v) {
            $this->discount_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::DISCOUNT_AMOUNT;
        }


        return $this;
    } // setDiscountAmount()

    /**
     * Set the value of [discount_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setDiscountCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->discount_canceled !== $v) {
            $this->discount_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::DISCOUNT_CANCELED;
        }


        return $this;
    } // setDiscountCanceled()

    /**
     * Set the value of [discount_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setDiscountInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->discount_invoiced !== $v) {
            $this->discount_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::DISCOUNT_INVOICED;
        }


        return $this;
    } // setDiscountInvoiced()

    /**
     * Set the value of [discount_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setDiscountRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->discount_refunded !== $v) {
            $this->discount_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::DISCOUNT_REFUNDED;
        }


        return $this;
    } // setDiscountRefunded()

    /**
     * Set the value of [grand_total] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGrandTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->grand_total !== $v) {
            $this->grand_total = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GRAND_TOTAL;
        }


        return $this;
    } // setGrandTotal()

    /**
     * Set the value of [shipping_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_amount !== $v) {
            $this->shipping_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_AMOUNT;
        }


        return $this;
    } // setShippingAmount()

    /**
     * Set the value of [shipping_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_canceled !== $v) {
            $this->shipping_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_CANCELED;
        }


        return $this;
    } // setShippingCanceled()

    /**
     * Set the value of [shipping_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_invoiced !== $v) {
            $this->shipping_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_INVOICED;
        }


        return $this;
    } // setShippingInvoiced()

    /**
     * Set the value of [shipping_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_refunded !== $v) {
            $this->shipping_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_REFUNDED;
        }


        return $this;
    } // setShippingRefunded()

    /**
     * Set the value of [shipping_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_tax_amount !== $v) {
            $this->shipping_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_TAX_AMOUNT;
        }


        return $this;
    } // setShippingTaxAmount()

    /**
     * Set the value of [shipping_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_tax_refunded !== $v) {
            $this->shipping_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_TAX_REFUNDED;
        }


        return $this;
    } // setShippingTaxRefunded()

    /**
     * Set the value of [store_to_base_rate] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setStoreToBaseRate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->store_to_base_rate !== $v) {
            $this->store_to_base_rate = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::STORE_TO_BASE_RATE;
        }


        return $this;
    } // setStoreToBaseRate()

    /**
     * Set the value of [store_to_order_rate] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setStoreToOrderRate($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->store_to_order_rate !== $v) {
            $this->store_to_order_rate = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::STORE_TO_ORDER_RATE;
        }


        return $this;
    } // setStoreToOrderRate()

    /**
     * Set the value of [subtotal] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setSubtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subtotal !== $v) {
            $this->subtotal = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SUBTOTAL;
        }


        return $this;
    } // setSubtotal()

    /**
     * Set the value of [subtotal_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setSubtotalCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subtotal_canceled !== $v) {
            $this->subtotal_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SUBTOTAL_CANCELED;
        }


        return $this;
    } // setSubtotalCanceled()

    /**
     * Set the value of [subtotal_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setSubtotalInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subtotal_invoiced !== $v) {
            $this->subtotal_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SUBTOTAL_INVOICED;
        }


        return $this;
    } // setSubtotalInvoiced()

    /**
     * Set the value of [subtotal_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setSubtotalRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subtotal_refunded !== $v) {
            $this->subtotal_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SUBTOTAL_REFUNDED;
        }


        return $this;
    } // setSubtotalRefunded()

    /**
     * Set the value of [tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tax_amount !== $v) {
            $this->tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TAX_AMOUNT;
        }


        return $this;
    } // setTaxAmount()

    /**
     * Set the value of [tax_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTaxCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tax_canceled !== $v) {
            $this->tax_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TAX_CANCELED;
        }


        return $this;
    } // setTaxCanceled()

    /**
     * Set the value of [tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tax_invoiced !== $v) {
            $this->tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TAX_INVOICED;
        }


        return $this;
    } // setTaxInvoiced()

    /**
     * Set the value of [tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tax_refunded !== $v) {
            $this->tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TAX_REFUNDED;
        }


        return $this;
    } // setTaxRefunded()

    /**
     * Set the value of [total_canceled] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTotalCanceled($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->total_canceled !== $v) {
            $this->total_canceled = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TOTAL_CANCELED;
        }


        return $this;
    } // setTotalCanceled()

    /**
     * Set the value of [total_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTotalInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->total_invoiced !== $v) {
            $this->total_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TOTAL_INVOICED;
        }


        return $this;
    } // setTotalInvoiced()

    /**
     * Set the value of [total_offline_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTotalOfflineRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->total_offline_refunded !== $v) {
            $this->total_offline_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TOTAL_OFFLINE_REFUNDED;
        }


        return $this;
    } // setTotalOfflineRefunded()

    /**
     * Set the value of [total_online_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTotalOnlineRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->total_online_refunded !== $v) {
            $this->total_online_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TOTAL_ONLINE_REFUNDED;
        }


        return $this;
    } // setTotalOnlineRefunded()

    /**
     * Set the value of [total_paid] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTotalPaid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->total_paid !== $v) {
            $this->total_paid = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TOTAL_PAID;
        }


        return $this;
    } // setTotalPaid()

    /**
     * Set the value of [total_qty_ordered] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTotalQtyOrdered($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->total_qty_ordered !== $v) {
            $this->total_qty_ordered = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TOTAL_QTY_ORDERED;
        }


        return $this;
    } // setTotalQtyOrdered()

    /**
     * Set the value of [total_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTotalRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->total_refunded !== $v) {
            $this->total_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TOTAL_REFUNDED;
        }


        return $this;
    } // setTotalRefunded()

    /**
     * Set the value of [can_ship_partially] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCanShipPartially($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->can_ship_partially !== $v) {
            $this->can_ship_partially = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CAN_SHIP_PARTIALLY;
        }


        return $this;
    } // setCanShipPartially()

    /**
     * Set the value of [can_ship_partially_item] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCanShipPartiallyItem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->can_ship_partially_item !== $v) {
            $this->can_ship_partially_item = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CAN_SHIP_PARTIALLY_ITEM;
        }


        return $this;
    } // setCanShipPartiallyItem()

    /**
     * Set the value of [customer_is_guest] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerIsGuest($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customer_is_guest !== $v) {
            $this->customer_is_guest = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_IS_GUEST;
        }


        return $this;
    } // setCustomerIsGuest()

    /**
     * Set the value of [customer_note_notify] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerNoteNotify($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customer_note_notify !== $v) {
            $this->customer_note_notify = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_NOTE_NOTIFY;
        }


        return $this;
    } // setCustomerNoteNotify()

    /**
     * Set the value of [billing_address_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBillingAddressId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->billing_address_id !== $v) {
            $this->billing_address_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BILLING_ADDRESS_ID;
        }


        return $this;
    } // setBillingAddressId()

    /**
     * Set the value of [customer_group_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerGroupId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customer_group_id !== $v) {
            $this->customer_group_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_GROUP_ID;
        }


        return $this;
    } // setCustomerGroupId()

    /**
     * Set the value of [edit_increment] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setEditIncrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->edit_increment !== $v) {
            $this->edit_increment = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::EDIT_INCREMENT;
        }


        return $this;
    } // setEditIncrement()

    /**
     * Set the value of [email_sent] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setEmailSent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->email_sent !== $v) {
            $this->email_sent = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::EMAIL_SENT;
        }


        return $this;
    } // setEmailSent()

    /**
     * Set the value of [forced_shipment_with_invoice] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setForcedShipmentWithInvoice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->forced_shipment_with_invoice !== $v) {
            $this->forced_shipment_with_invoice = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::FORCED_SHIPMENT_WITH_INVOICE;
        }


        return $this;
    } // setForcedShipmentWithInvoice()

    /**
     * Set the value of [payment_auth_expiration] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPaymentAuthExpiration($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->payment_auth_expiration !== $v) {
            $this->payment_auth_expiration = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::PAYMENT_AUTH_EXPIRATION;
        }


        return $this;
    } // setPaymentAuthExpiration()

    /**
     * Set the value of [quote_address_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setQuoteAddressId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->quote_address_id !== $v) {
            $this->quote_address_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::QUOTE_ADDRESS_ID;
        }


        return $this;
    } // setQuoteAddressId()

    /**
     * Set the value of [quote_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setQuoteId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->quote_id !== $v) {
            $this->quote_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::QUOTE_ID;
        }


        return $this;
    } // setQuoteId()

    /**
     * Set the value of [shipping_address_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingAddressId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->shipping_address_id !== $v) {
            $this->shipping_address_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_ADDRESS_ID;
        }


        return $this;
    } // setShippingAddressId()

    /**
     * Set the value of [adjustment_negative] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setAdjustmentNegative($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adjustment_negative !== $v) {
            $this->adjustment_negative = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::ADJUSTMENT_NEGATIVE;
        }


        return $this;
    } // setAdjustmentNegative()

    /**
     * Set the value of [adjustment_positive] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setAdjustmentPositive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adjustment_positive !== $v) {
            $this->adjustment_positive = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::ADJUSTMENT_POSITIVE;
        }


        return $this;
    } // setAdjustmentPositive()

    /**
     * Set the value of [base_adjustment_negative] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseAdjustmentNegative($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_adjustment_negative !== $v) {
            $this->base_adjustment_negative = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_ADJUSTMENT_NEGATIVE;
        }


        return $this;
    } // setBaseAdjustmentNegative()

    /**
     * Set the value of [base_adjustment_positive] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseAdjustmentPositive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_adjustment_positive !== $v) {
            $this->base_adjustment_positive = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_ADJUSTMENT_POSITIVE;
        }


        return $this;
    } // setBaseAdjustmentPositive()

    /**
     * Set the value of [base_shipping_discount_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseShippingDiscountAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_shipping_discount_amount !== $v) {
            $this->base_shipping_discount_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SHIPPING_DISCOUNT_AMOUNT;
        }


        return $this;
    } // setBaseShippingDiscountAmount()

    /**
     * Set the value of [base_subtotal_incl_tax] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseSubtotalInclTax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_subtotal_incl_tax !== $v) {
            $this->base_subtotal_incl_tax = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SUBTOTAL_INCL_TAX;
        }


        return $this;
    } // setBaseSubtotalInclTax()

    /**
     * Set the value of [base_total_due] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseTotalDue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_total_due !== $v) {
            $this->base_total_due = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_TOTAL_DUE;
        }


        return $this;
    } // setBaseTotalDue()

    /**
     * Set the value of [payment_authorization_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPaymentAuthorizationAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->payment_authorization_amount !== $v) {
            $this->payment_authorization_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::PAYMENT_AUTHORIZATION_AMOUNT;
        }


        return $this;
    } // setPaymentAuthorizationAmount()

    /**
     * Set the value of [shipping_discount_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingDiscountAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_discount_amount !== $v) {
            $this->shipping_discount_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_DISCOUNT_AMOUNT;
        }


        return $this;
    } // setShippingDiscountAmount()

    /**
     * Set the value of [subtotal_incl_tax] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setSubtotalInclTax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->subtotal_incl_tax !== $v) {
            $this->subtotal_incl_tax = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SUBTOTAL_INCL_TAX;
        }


        return $this;
    } // setSubtotalInclTax()

    /**
     * Set the value of [total_due] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTotalDue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->total_due !== $v) {
            $this->total_due = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TOTAL_DUE;
        }


        return $this;
    } // setTotalDue()

    /**
     * Set the value of [weight] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setWeight($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->weight !== $v) {
            $this->weight = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::WEIGHT;
        }


        return $this;
    } // setWeight()

    /**
     * Sets the value of [customer_dob] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerDob($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->customer_dob !== null || $dt !== null) {
            $currentDateAsString = ($this->customer_dob !== null && $tmpDt = new DateTime($this->customer_dob)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->customer_dob = $newDateAsString;
                $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_DOB;
            }
        } // if either are not null


        return $this;
    } // setCustomerDob()

    /**
     * Set the value of [increment_id] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setIncrementId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->increment_id !== $v) {
            $this->increment_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::INCREMENT_ID;
        }


        return $this;
    } // setIncrementId()

    /**
     * Set the value of [applied_rule_ids] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setAppliedRuleIds($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->applied_rule_ids !== $v) {
            $this->applied_rule_ids = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::APPLIED_RULE_IDS;
        }


        return $this;
    } // setAppliedRuleIds()

    /**
     * Set the value of [base_currency_code] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseCurrencyCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_currency_code !== $v) {
            $this->base_currency_code = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_CURRENCY_CODE;
        }


        return $this;
    } // setBaseCurrencyCode()

    /**
     * Set the value of [customer_email] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_email !== $v) {
            $this->customer_email = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_EMAIL;
        }


        return $this;
    } // setCustomerEmail()

    /**
     * Set the value of [customer_firstname] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerFirstname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_firstname !== $v) {
            $this->customer_firstname = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_FIRSTNAME;
        }


        return $this;
    } // setCustomerFirstname()

    /**
     * Set the value of [customer_lastname] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerLastname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_lastname !== $v) {
            $this->customer_lastname = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_LASTNAME;
        }


        return $this;
    } // setCustomerLastname()

    /**
     * Set the value of [customer_middlename] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerMiddlename($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_middlename !== $v) {
            $this->customer_middlename = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_MIDDLENAME;
        }


        return $this;
    } // setCustomerMiddlename()

    /**
     * Set the value of [customer_prefix] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerPrefix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_prefix !== $v) {
            $this->customer_prefix = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_PREFIX;
        }


        return $this;
    } // setCustomerPrefix()

    /**
     * Set the value of [customer_suffix] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerSuffix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_suffix !== $v) {
            $this->customer_suffix = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_SUFFIX;
        }


        return $this;
    } // setCustomerSuffix()

    /**
     * Set the value of [customer_taxvat] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerTaxvat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_taxvat !== $v) {
            $this->customer_taxvat = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_TAXVAT;
        }


        return $this;
    } // setCustomerTaxvat()

    /**
     * Set the value of [discount_description] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setDiscountDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->discount_description !== $v) {
            $this->discount_description = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::DISCOUNT_DESCRIPTION;
        }


        return $this;
    } // setDiscountDescription()

    /**
     * Set the value of [ext_customer_id] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setExtCustomerId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ext_customer_id !== $v) {
            $this->ext_customer_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::EXT_CUSTOMER_ID;
        }


        return $this;
    } // setExtCustomerId()

    /**
     * Set the value of [ext_order_id] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setExtOrderId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ext_order_id !== $v) {
            $this->ext_order_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::EXT_ORDER_ID;
        }


        return $this;
    } // setExtOrderId()

    /**
     * Set the value of [global_currency_code] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGlobalCurrencyCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->global_currency_code !== $v) {
            $this->global_currency_code = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GLOBAL_CURRENCY_CODE;
        }


        return $this;
    } // setGlobalCurrencyCode()

    /**
     * Set the value of [hold_before_state] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setHoldBeforeState($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hold_before_state !== $v) {
            $this->hold_before_state = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::HOLD_BEFORE_STATE;
        }


        return $this;
    } // setHoldBeforeState()

    /**
     * Set the value of [hold_before_status] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setHoldBeforeStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hold_before_status !== $v) {
            $this->hold_before_status = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::HOLD_BEFORE_STATUS;
        }


        return $this;
    } // setHoldBeforeStatus()

    /**
     * Set the value of [order_currency_code] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setOrderCurrencyCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->order_currency_code !== $v) {
            $this->order_currency_code = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::ORDER_CURRENCY_CODE;
        }


        return $this;
    } // setOrderCurrencyCode()

    /**
     * Set the value of [original_increment_id] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setOriginalIncrementId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->original_increment_id !== $v) {
            $this->original_increment_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::ORIGINAL_INCREMENT_ID;
        }


        return $this;
    } // setOriginalIncrementId()

    /**
     * Set the value of [relation_child_id] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRelationChildId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->relation_child_id !== $v) {
            $this->relation_child_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::RELATION_CHILD_ID;
        }


        return $this;
    } // setRelationChildId()

    /**
     * Set the value of [relation_child_real_id] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRelationChildRealId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->relation_child_real_id !== $v) {
            $this->relation_child_real_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::RELATION_CHILD_REAL_ID;
        }


        return $this;
    } // setRelationChildRealId()

    /**
     * Set the value of [relation_parent_id] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRelationParentId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->relation_parent_id !== $v) {
            $this->relation_parent_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::RELATION_PARENT_ID;
        }


        return $this;
    } // setRelationParentId()

    /**
     * Set the value of [relation_parent_real_id] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRelationParentRealId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->relation_parent_real_id !== $v) {
            $this->relation_parent_real_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::RELATION_PARENT_REAL_ID;
        }


        return $this;
    } // setRelationParentRealId()

    /**
     * Set the value of [remote_ip] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRemoteIp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->remote_ip !== $v) {
            $this->remote_ip = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::REMOTE_IP;
        }


        return $this;
    } // setRemoteIp()

    /**
     * Set the value of [shipping_method] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingMethod($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_method !== $v) {
            $this->shipping_method = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_METHOD;
        }


        return $this;
    } // setShippingMethod()

    /**
     * Set the value of [store_currency_code] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setStoreCurrencyCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->store_currency_code !== $v) {
            $this->store_currency_code = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::STORE_CURRENCY_CODE;
        }


        return $this;
    } // setStoreCurrencyCode()

    /**
     * Set the value of [store_name] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setStoreName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->store_name !== $v) {
            $this->store_name = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::STORE_NAME;
        }


        return $this;
    } // setStoreName()

    /**
     * Set the value of [x_forwarded_for] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setXForwardedFor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->x_forwarded_for !== $v) {
            $this->x_forwarded_for = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::X_FORWARDED_FOR;
        }


        return $this;
    } // setXForwardedFor()

    /**
     * Set the value of [customer_note] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerNote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_note !== $v) {
            $this->customer_note = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_NOTE;
        }


        return $this;
    } // setCustomerNote()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = SalesFlatOrderPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = SalesFlatOrderPeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Set the value of [total_item_count] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setTotalItemCount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->total_item_count !== $v) {
            $this->total_item_count = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::TOTAL_ITEM_COUNT;
        }


        return $this;
    } // setTotalItemCount()

    /**
     * Set the value of [customer_gender] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerGender($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->customer_gender !== $v) {
            $this->customer_gender = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_GENDER;
        }


        return $this;
    } // setCustomerGender()

    /**
     * Set the value of [hidden_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setHiddenTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hidden_tax_amount !== $v) {
            $this->hidden_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::HIDDEN_TAX_AMOUNT;
        }


        return $this;
    } // setHiddenTaxAmount()

    /**
     * Set the value of [base_hidden_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseHiddenTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_hidden_tax_amount !== $v) {
            $this->base_hidden_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_HIDDEN_TAX_AMOUNT;
        }


        return $this;
    } // setBaseHiddenTaxAmount()

    /**
     * Set the value of [shipping_hidden_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingHiddenTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_hidden_tax_amount !== $v) {
            $this->shipping_hidden_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_HIDDEN_TAX_AMOUNT;
        }


        return $this;
    } // setShippingHiddenTaxAmount()

    /**
     * Set the value of [base_shipping_hidden_tax_amnt] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseShippingHiddenTaxAmnt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_shipping_hidden_tax_amnt !== $v) {
            $this->base_shipping_hidden_tax_amnt = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SHIPPING_HIDDEN_TAX_AMNT;
        }


        return $this;
    } // setBaseShippingHiddenTaxAmnt()

    /**
     * Set the value of [hidden_tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setHiddenTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hidden_tax_invoiced !== $v) {
            $this->hidden_tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::HIDDEN_TAX_INVOICED;
        }


        return $this;
    } // setHiddenTaxInvoiced()

    /**
     * Set the value of [base_hidden_tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseHiddenTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_hidden_tax_invoiced !== $v) {
            $this->base_hidden_tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_HIDDEN_TAX_INVOICED;
        }


        return $this;
    } // setBaseHiddenTaxInvoiced()

    /**
     * Set the value of [hidden_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setHiddenTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hidden_tax_refunded !== $v) {
            $this->hidden_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::HIDDEN_TAX_REFUNDED;
        }


        return $this;
    } // setHiddenTaxRefunded()

    /**
     * Set the value of [base_hidden_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseHiddenTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_hidden_tax_refunded !== $v) {
            $this->base_hidden_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_HIDDEN_TAX_REFUNDED;
        }


        return $this;
    } // setBaseHiddenTaxRefunded()

    /**
     * Set the value of [shipping_incl_tax] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setShippingInclTax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->shipping_incl_tax !== $v) {
            $this->shipping_incl_tax = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SHIPPING_INCL_TAX;
        }


        return $this;
    } // setShippingInclTax()

    /**
     * Set the value of [base_shipping_incl_tax] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseShippingInclTax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_shipping_incl_tax !== $v) {
            $this->base_shipping_incl_tax = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_SHIPPING_INCL_TAX;
        }


        return $this;
    } // setBaseShippingInclTax()

    /**
     * Set the value of [coupon_rule_name] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCouponRuleName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->coupon_rule_name !== $v) {
            $this->coupon_rule_name = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::COUPON_RULE_NAME;
        }


        return $this;
    } // setCouponRuleName()

    /**
     * Set the value of [paypal_ipn_customer_notified] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPaypalIpnCustomerNotified($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->paypal_ipn_customer_notified !== $v) {
            $this->paypal_ipn_customer_notified = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::PAYPAL_IPN_CUSTOMER_NOTIFIED;
        }


        return $this;
    } // setPaypalIpnCustomerNotified()

    /**
     * Set the value of [gift_message_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftMessageId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gift_message_id !== $v) {
            $this->gift_message_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_MESSAGE_ID;
        }


        return $this;
    } // setGiftMessageId()

    /**
     * Set the value of [groupdeals_coupon_from] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGroupdealsCouponFrom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->groupdeals_coupon_from !== $v) {
            $this->groupdeals_coupon_from = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GROUPDEALS_COUPON_FROM;
        }


        return $this;
    } // setGroupdealsCouponFrom()

    /**
     * Set the value of [groupdeals_coupon_to] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGroupdealsCouponTo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->groupdeals_coupon_to !== $v) {
            $this->groupdeals_coupon_to = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GROUPDEALS_COUPON_TO;
        }


        return $this;
    } // setGroupdealsCouponTo()

    /**
     * Set the value of [groupdeals_coupon_to_email] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGroupdealsCouponToEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->groupdeals_coupon_to_email !== $v) {
            $this->groupdeals_coupon_to_email = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GROUPDEALS_COUPON_TO_EMAIL;
        }


        return $this;
    } // setGroupdealsCouponToEmail()

    /**
     * Set the value of [groupdeals_coupon_message] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGroupdealsCouponMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->groupdeals_coupon_message !== $v) {
            $this->groupdeals_coupon_message = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GROUPDEALS_COUPON_MESSAGE;
        }


        return $this;
    } // setGroupdealsCouponMessage()

    /**
     * Set the value of [base_customer_balance_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseCustomerBalanceAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_customer_balance_amount !== $v) {
            $this->base_customer_balance_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_AMOUNT;
        }


        return $this;
    } // setBaseCustomerBalanceAmount()

    /**
     * Set the value of [customer_balance_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerBalanceAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_balance_amount !== $v) {
            $this->customer_balance_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_BALANCE_AMOUNT;
        }


        return $this;
    } // setCustomerBalanceAmount()

    /**
     * Set the value of [base_customer_balance_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseCustomerBalanceInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_customer_balance_invoiced !== $v) {
            $this->base_customer_balance_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_INVOICED;
        }


        return $this;
    } // setBaseCustomerBalanceInvoiced()

    /**
     * Set the value of [customer_balance_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerBalanceInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_balance_invoiced !== $v) {
            $this->customer_balance_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_BALANCE_INVOICED;
        }


        return $this;
    } // setCustomerBalanceInvoiced()

    /**
     * Set the value of [base_customer_balance_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseCustomerBalanceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_customer_balance_refunded !== $v) {
            $this->base_customer_balance_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_REFUNDED;
        }


        return $this;
    } // setBaseCustomerBalanceRefunded()

    /**
     * Set the value of [customer_balance_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerBalanceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_balance_refunded !== $v) {
            $this->customer_balance_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_BALANCE_REFUNDED;
        }


        return $this;
    } // setCustomerBalanceRefunded()

    /**
     * Set the value of [bs_customer_bal_total_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBsCustomerBalTotalRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bs_customer_bal_total_refunded !== $v) {
            $this->bs_customer_bal_total_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BS_CUSTOMER_BAL_TOTAL_REFUNDED;
        }


        return $this;
    } // setBsCustomerBalTotalRefunded()

    /**
     * Set the value of [customer_bal_total_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerBalTotalRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_bal_total_refunded !== $v) {
            $this->customer_bal_total_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_BAL_TOTAL_REFUNDED;
        }


        return $this;
    } // setCustomerBalTotalRefunded()

    /**
     * Set the value of [gift_cards] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftCards($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gift_cards !== $v) {
            $this->gift_cards = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_CARDS;
        }


        return $this;
    } // setGiftCards()

    /**
     * Set the value of [base_gift_cards_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseGiftCardsAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_gift_cards_amount !== $v) {
            $this->base_gift_cards_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_GIFT_CARDS_AMOUNT;
        }


        return $this;
    } // setBaseGiftCardsAmount()

    /**
     * Set the value of [gift_cards_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftCardsAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gift_cards_amount !== $v) {
            $this->gift_cards_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_CARDS_AMOUNT;
        }


        return $this;
    } // setGiftCardsAmount()

    /**
     * Set the value of [base_gift_cards_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseGiftCardsInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_gift_cards_invoiced !== $v) {
            $this->base_gift_cards_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_GIFT_CARDS_INVOICED;
        }


        return $this;
    } // setBaseGiftCardsInvoiced()

    /**
     * Set the value of [gift_cards_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftCardsInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gift_cards_invoiced !== $v) {
            $this->gift_cards_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_CARDS_INVOICED;
        }


        return $this;
    } // setGiftCardsInvoiced()

    /**
     * Set the value of [base_gift_cards_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseGiftCardsRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_gift_cards_refunded !== $v) {
            $this->base_gift_cards_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_GIFT_CARDS_REFUNDED;
        }


        return $this;
    } // setBaseGiftCardsRefunded()

    /**
     * Set the value of [gift_cards_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftCardsRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gift_cards_refunded !== $v) {
            $this->gift_cards_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_CARDS_REFUNDED;
        }


        return $this;
    } // setGiftCardsRefunded()

    /**
     * Set the value of [gw_id] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gw_id !== $v) {
            $this->gw_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ID;
        }


        return $this;
    } // setGwId()

    /**
     * Set the value of [gw_allow_gift_receipt] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwAllowGiftReceipt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gw_allow_gift_receipt !== $v) {
            $this->gw_allow_gift_receipt = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ALLOW_GIFT_RECEIPT;
        }


        return $this;
    } // setGwAllowGiftReceipt()

    /**
     * Set the value of [gw_add_card] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwAddCard($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->gw_add_card !== $v) {
            $this->gw_add_card = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ADD_CARD;
        }


        return $this;
    } // setGwAddCard()

    /**
     * Set the value of [gw_base_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwBasePrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_price !== $v) {
            $this->gw_base_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_BASE_PRICE;
        }


        return $this;
    } // setGwBasePrice()

    /**
     * Set the value of [gw_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_price !== $v) {
            $this->gw_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_PRICE;
        }


        return $this;
    } // setGwPrice()

    /**
     * Set the value of [gw_items_base_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsBasePrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_base_price !== $v) {
            $this->gw_items_base_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE;
        }


        return $this;
    } // setGwItemsBasePrice()

    /**
     * Set the value of [gw_items_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_price !== $v) {
            $this->gw_items_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_PRICE;
        }


        return $this;
    } // setGwItemsPrice()

    /**
     * Set the value of [gw_card_base_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardBasePrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_base_price !== $v) {
            $this->gw_card_base_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_BASE_PRICE;
        }


        return $this;
    } // setGwCardBasePrice()

    /**
     * Set the value of [gw_card_price] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardPrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_price !== $v) {
            $this->gw_card_price = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_PRICE;
        }


        return $this;
    } // setGwCardPrice()

    /**
     * Set the value of [gw_base_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwBaseTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_tax_amount !== $v) {
            $this->gw_base_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT;
        }


        return $this;
    } // setGwBaseTaxAmount()

    /**
     * Set the value of [gw_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_tax_amount !== $v) {
            $this->gw_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_TAX_AMOUNT;
        }


        return $this;
    } // setGwTaxAmount()

    /**
     * Set the value of [gw_items_base_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsBaseTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_base_tax_amount !== $v) {
            $this->gw_items_base_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_AMOUNT;
        }


        return $this;
    } // setGwItemsBaseTaxAmount()

    /**
     * Set the value of [gw_items_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_tax_amount !== $v) {
            $this->gw_items_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_TAX_AMOUNT;
        }


        return $this;
    } // setGwItemsTaxAmount()

    /**
     * Set the value of [gw_card_base_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardBaseTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_base_tax_amount !== $v) {
            $this->gw_card_base_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_BASE_TAX_AMOUNT;
        }


        return $this;
    } // setGwCardBaseTaxAmount()

    /**
     * Set the value of [gw_card_tax_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardTaxAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_tax_amount !== $v) {
            $this->gw_card_tax_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_TAX_AMOUNT;
        }


        return $this;
    } // setGwCardTaxAmount()

    /**
     * Set the value of [gw_base_price_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwBasePriceInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_price_invoiced !== $v) {
            $this->gw_base_price_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_BASE_PRICE_INVOICED;
        }


        return $this;
    } // setGwBasePriceInvoiced()

    /**
     * Set the value of [gw_price_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwPriceInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_price_invoiced !== $v) {
            $this->gw_price_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_PRICE_INVOICED;
        }


        return $this;
    } // setGwPriceInvoiced()

    /**
     * Set the value of [gw_items_base_price_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsBasePriceInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_base_price_invoiced !== $v) {
            $this->gw_items_base_price_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_INVOICED;
        }


        return $this;
    } // setGwItemsBasePriceInvoiced()

    /**
     * Set the value of [gw_items_price_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsPriceInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_price_invoiced !== $v) {
            $this->gw_items_price_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_PRICE_INVOICED;
        }


        return $this;
    } // setGwItemsPriceInvoiced()

    /**
     * Set the value of [gw_card_base_price_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardBasePriceInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_base_price_invoiced !== $v) {
            $this->gw_card_base_price_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_BASE_PRICE_INVOICED;
        }


        return $this;
    } // setGwCardBasePriceInvoiced()

    /**
     * Set the value of [gw_card_price_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardPriceInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_price_invoiced !== $v) {
            $this->gw_card_price_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_PRICE_INVOICED;
        }


        return $this;
    } // setGwCardPriceInvoiced()

    /**
     * Set the value of [gw_base_tax_amount_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwBaseTaxAmountInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_tax_amount_invoiced !== $v) {
            $this->gw_base_tax_amount_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_INVOICED;
        }


        return $this;
    } // setGwBaseTaxAmountInvoiced()

    /**
     * Set the value of [gw_tax_amount_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwTaxAmountInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_tax_amount_invoiced !== $v) {
            $this->gw_tax_amount_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_TAX_AMOUNT_INVOICED;
        }


        return $this;
    } // setGwTaxAmountInvoiced()

    /**
     * Set the value of [gw_items_base_tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsBaseTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_base_tax_invoiced !== $v) {
            $this->gw_items_base_tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_INVOICED;
        }


        return $this;
    } // setGwItemsBaseTaxInvoiced()

    /**
     * Set the value of [gw_items_tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_tax_invoiced !== $v) {
            $this->gw_items_tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_TAX_INVOICED;
        }


        return $this;
    } // setGwItemsTaxInvoiced()

    /**
     * Set the value of [gw_card_base_tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardBaseTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_base_tax_invoiced !== $v) {
            $this->gw_card_base_tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_BASE_TAX_INVOICED;
        }


        return $this;
    } // setGwCardBaseTaxInvoiced()

    /**
     * Set the value of [gw_card_tax_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardTaxInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_tax_invoiced !== $v) {
            $this->gw_card_tax_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_TAX_INVOICED;
        }


        return $this;
    } // setGwCardTaxInvoiced()

    /**
     * Set the value of [gw_base_price_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwBasePriceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_price_refunded !== $v) {
            $this->gw_base_price_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_BASE_PRICE_REFUNDED;
        }


        return $this;
    } // setGwBasePriceRefunded()

    /**
     * Set the value of [gw_price_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwPriceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_price_refunded !== $v) {
            $this->gw_price_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_PRICE_REFUNDED;
        }


        return $this;
    } // setGwPriceRefunded()

    /**
     * Set the value of [gw_items_base_price_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsBasePriceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_base_price_refunded !== $v) {
            $this->gw_items_base_price_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_REFUNDED;
        }


        return $this;
    } // setGwItemsBasePriceRefunded()

    /**
     * Set the value of [gw_items_price_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsPriceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_price_refunded !== $v) {
            $this->gw_items_price_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_PRICE_REFUNDED;
        }


        return $this;
    } // setGwItemsPriceRefunded()

    /**
     * Set the value of [gw_card_base_price_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardBasePriceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_base_price_refunded !== $v) {
            $this->gw_card_base_price_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_BASE_PRICE_REFUNDED;
        }


        return $this;
    } // setGwCardBasePriceRefunded()

    /**
     * Set the value of [gw_card_price_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardPriceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_price_refunded !== $v) {
            $this->gw_card_price_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_PRICE_REFUNDED;
        }


        return $this;
    } // setGwCardPriceRefunded()

    /**
     * Set the value of [gw_base_tax_amount_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwBaseTaxAmountRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_base_tax_amount_refunded !== $v) {
            $this->gw_base_tax_amount_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_REFUNDED;
        }


        return $this;
    } // setGwBaseTaxAmountRefunded()

    /**
     * Set the value of [gw_tax_amount_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwTaxAmountRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_tax_amount_refunded !== $v) {
            $this->gw_tax_amount_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_TAX_AMOUNT_REFUNDED;
        }


        return $this;
    } // setGwTaxAmountRefunded()

    /**
     * Set the value of [gw_items_base_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsBaseTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_base_tax_refunded !== $v) {
            $this->gw_items_base_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_REFUNDED;
        }


        return $this;
    } // setGwItemsBaseTaxRefunded()

    /**
     * Set the value of [gw_items_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwItemsTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_items_tax_refunded !== $v) {
            $this->gw_items_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_ITEMS_TAX_REFUNDED;
        }


        return $this;
    } // setGwItemsTaxRefunded()

    /**
     * Set the value of [gw_card_base_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardBaseTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_base_tax_refunded !== $v) {
            $this->gw_card_base_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_BASE_TAX_REFUNDED;
        }


        return $this;
    } // setGwCardBaseTaxRefunded()

    /**
     * Set the value of [gw_card_tax_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGwCardTaxRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gw_card_tax_refunded !== $v) {
            $this->gw_card_tax_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GW_CARD_TAX_REFUNDED;
        }


        return $this;
    } // setGwCardTaxRefunded()

    /**
     * Set the value of [reward_points_balance] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRewardPointsBalance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reward_points_balance !== $v) {
            $this->reward_points_balance = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::REWARD_POINTS_BALANCE;
        }


        return $this;
    } // setRewardPointsBalance()

    /**
     * Set the value of [base_reward_currency_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseRewardCurrencyAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_reward_currency_amount !== $v) {
            $this->base_reward_currency_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_REWARD_CURRENCY_AMOUNT;
        }


        return $this;
    } // setBaseRewardCurrencyAmount()

    /**
     * Set the value of [reward_currency_amount] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRewardCurrencyAmount($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reward_currency_amount !== $v) {
            $this->reward_currency_amount = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::REWARD_CURRENCY_AMOUNT;
        }


        return $this;
    } // setRewardCurrencyAmount()

    /**
     * Set the value of [base_rwrd_crrncy_amt_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseRwrdCrrncyAmtInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_rwrd_crrncy_amt_invoiced !== $v) {
            $this->base_rwrd_crrncy_amt_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMT_INVOICED;
        }


        return $this;
    } // setBaseRwrdCrrncyAmtInvoiced()

    /**
     * Set the value of [rwrd_currency_amount_invoiced] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRwrdCurrencyAmountInvoiced($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rwrd_currency_amount_invoiced !== $v) {
            $this->rwrd_currency_amount_invoiced = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::RWRD_CURRENCY_AMOUNT_INVOICED;
        }


        return $this;
    } // setRwrdCurrencyAmountInvoiced()

    /**
     * Set the value of [base_rwrd_crrncy_amnt_refnded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setBaseRwrdCrrncyAmntRefnded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->base_rwrd_crrncy_amnt_refnded !== $v) {
            $this->base_rwrd_crrncy_amnt_refnded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMNT_REFNDED;
        }


        return $this;
    } // setBaseRwrdCrrncyAmntRefnded()

    /**
     * Set the value of [rwrd_crrncy_amnt_refunded] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRwrdCrrncyAmntRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rwrd_crrncy_amnt_refunded !== $v) {
            $this->rwrd_crrncy_amnt_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::RWRD_CRRNCY_AMNT_REFUNDED;
        }


        return $this;
    } // setRwrdCrrncyAmntRefunded()

    /**
     * Set the value of [reward_points_balance_refund] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRewardPointsBalanceRefund($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reward_points_balance_refund !== $v) {
            $this->reward_points_balance_refund = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUND;
        }


        return $this;
    } // setRewardPointsBalanceRefund()

    /**
     * Set the value of [reward_points_balance_refunded] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRewardPointsBalanceRefunded($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reward_points_balance_refunded !== $v) {
            $this->reward_points_balance_refunded = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUNDED;
        }


        return $this;
    } // setRewardPointsBalanceRefunded()

    /**
     * Set the value of [reward_salesrule_points] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRewardSalesrulePoints($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reward_salesrule_points !== $v) {
            $this->reward_salesrule_points = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::REWARD_SALESRULE_POINTS;
        }


        return $this;
    } // setRewardSalesrulePoints()

    /**
     * Set the value of [vendor_username] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setVendorUsername($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vendor_username !== $v) {
            $this->vendor_username = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::VENDOR_USERNAME;
        }


        return $this;
    } // setVendorUsername()

    /**
     * Set the value of [vendor_name] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setVendorName($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vendor_name !== $v) {
            $this->vendor_name = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::VENDOR_NAME;
        }


        return $this;
    } // setVendorName()

    /**
     * Set the value of [vendor_lastname] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setVendorLastname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vendor_lastname !== $v) {
            $this->vendor_lastname = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::VENDOR_LASTNAME;
        }


        return $this;
    } // setVendorLastname()

    /**
     * Set the value of [vendor_email] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setVendorEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->vendor_email !== $v) {
            $this->vendor_email = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::VENDOR_EMAIL;
        }


        return $this;
    } // setVendorEmail()

    /**
     * Set the value of [pos_id] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPosId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_id !== $v) {
            $this->pos_id = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::POS_ID;
        }


        return $this;
    } // setPosId()

    /**
     * Set the value of [pos_office] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPosOffice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_office !== $v) {
            $this->pos_office = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::POS_OFFICE;
        }


        return $this;
    } // setPosOffice()

    /**
     * Set the value of [pos_code] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPosCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_code !== $v) {
            $this->pos_code = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::POS_CODE;
        }


        return $this;
    } // setPosCode()

    /**
     * Set the value of [pos_country] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPosCountry($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_country !== $v) {
            $this->pos_country = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::POS_COUNTRY;
        }


        return $this;
    } // setPosCountry()

    /**
     * Set the value of [pos_city] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPosCity($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_city !== $v) {
            $this->pos_city = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::POS_CITY;
        }


        return $this;
    } // setPosCity()

    /**
     * Set the value of [pos_postal_code] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPosPostalCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_postal_code !== $v) {
            $this->pos_postal_code = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::POS_POSTAL_CODE;
        }


        return $this;
    } // setPosPostalCode()

    /**
     * Set the value of [pos_address] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPosAddress($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_address !== $v) {
            $this->pos_address = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::POS_ADDRESS;
        }


        return $this;
    } // setPosAddress()

    /**
     * Set the value of [pos_phone] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setPosPhone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pos_phone !== $v) {
            $this->pos_phone = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::POS_PHONE;
        }


        return $this;
    } // setPosPhone()

    /**
     * Set the value of [customer_identification] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCustomerIdentification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->customer_identification !== $v) {
            $this->customer_identification = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::CUSTOMER_IDENTIFICATION;
        }


        return $this;
    } // setCustomerIdentification()

    /**
     * Set the value of [is_gift] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setIsGift($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_gift !== $v) {
            $this->is_gift = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::IS_GIFT;
        }


        return $this;
    } // setIsGift()

    /**
     * Set the value of [gift_for] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftFor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gift_for !== $v) {
            $this->gift_for = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_FOR;
        }


        return $this;
    } // setGiftFor()

    /**
     * Set the value of [gift_email] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gift_email !== $v) {
            $this->gift_email = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_EMAIL;
        }


        return $this;
    } // setGiftEmail()

    /**
     * Set the value of [gift_message] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gift_message !== $v) {
            $this->gift_message = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_MESSAGE;
        }


        return $this;
    } // setGiftMessage()

    /**
     * Set the value of [gift_citydept] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftCitydept($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gift_citydept !== $v) {
            $this->gift_citydept = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_CITYDEPT;
        }


        return $this;
    } // setGiftCitydept()

    /**
     * Set the value of [gift_shipping] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftShipping($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gift_shipping !== $v) {
            $this->gift_shipping = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_SHIPPING;
        }


        return $this;
    } // setGiftShipping()

    /**
     * Set the value of [was_payed] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setWasPayed($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->was_payed !== $v) {
            $this->was_payed = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::WAS_PAYED;
        }


        return $this;
    } // setWasPayed()

    /**
     * Set the value of [gift_for_lastname] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setGiftForLastname($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->gift_for_lastname !== $v) {
            $this->gift_for_lastname = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::GIFT_FOR_LASTNAME;
        }


        return $this;
    } // setGiftForLastname()

    /**
     * Set the value of [sci_payment_methods] column.
     *
     * @param  string $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setSciPaymentMethods($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sci_payment_methods !== $v) {
            $this->sci_payment_methods = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::SCI_PAYMENT_METHODS;
        }


        return $this;
    } // setSciPaymentMethods()

    /**
     * Set the value of [discount_applied] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setDiscountApplied($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->discount_applied !== $v) {
            $this->discount_applied = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::DISCOUNT_APPLIED;
        }


        return $this;
    } // setDiscountApplied()

    /**
     * Set the value of [rewards_applied] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setRewardsApplied($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->rewards_applied !== $v) {
            $this->rewards_applied = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::REWARDS_APPLIED;
        }


        return $this;
    } // setRewardsApplied()

    /**
     * Set the value of [stock_before_pol] column.
     *
     * @param  int $v new value
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setStockBeforePol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->stock_before_pol !== $v) {
            $this->stock_before_pol = $v;
            $this->modifiedColumns[] = SalesFlatOrderPeer::STOCK_BEFORE_POL;
        }


        return $this;
    } // setStockBeforePol()

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
            if ($this->total_item_count !== 0) {
                return false;
            }

            if ($this->paypal_ipn_customer_notified !== 0) {
                return false;
            }

            if ($this->was_payed !== 0) {
                return false;
            }

            if ($this->discount_applied !== 0) {
                return false;
            }

            if ($this->rewards_applied !== 0) {
                return false;
            }

            if ($this->stock_before_pol !== 0) {
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

            $this->entity_id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->state = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->status = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->coupon_code = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->protect_code = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->shipping_description = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->is_virtual = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->store_id = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->customer_id = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->base_discount_amount = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->base_discount_canceled = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->base_discount_invoiced = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->base_discount_refunded = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->base_grand_total = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->base_shipping_amount = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->base_shipping_canceled = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->base_shipping_invoiced = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->base_shipping_refunded = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->base_shipping_tax_amount = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->base_shipping_tax_refunded = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->base_subtotal = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->base_subtotal_canceled = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->base_subtotal_invoiced = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->base_subtotal_refunded = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->base_tax_amount = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->base_tax_canceled = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->base_tax_invoiced = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->base_tax_refunded = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->base_to_global_rate = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->base_to_order_rate = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->base_total_canceled = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->base_total_invoiced = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->base_total_invoiced_cost = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->base_total_offline_refunded = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->base_total_online_refunded = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->base_total_paid = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->base_total_qty_ordered = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->base_total_refunded = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->discount_amount = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->discount_canceled = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->discount_invoiced = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->discount_refunded = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->grand_total = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->shipping_amount = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->shipping_canceled = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->shipping_invoiced = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->shipping_refunded = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->shipping_tax_amount = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->shipping_tax_refunded = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->store_to_base_rate = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->store_to_order_rate = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->subtotal = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->subtotal_canceled = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->subtotal_invoiced = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->subtotal_refunded = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->tax_amount = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->tax_canceled = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->tax_invoiced = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->tax_refunded = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->total_canceled = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->total_invoiced = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->total_offline_refunded = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->total_online_refunded = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->total_paid = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->total_qty_ordered = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->total_refunded = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->can_ship_partially = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->can_ship_partially_item = ($row[$startcol + 67] !== null) ? (int) $row[$startcol + 67] : null;
            $this->customer_is_guest = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->customer_note_notify = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
            $this->billing_address_id = ($row[$startcol + 70] !== null) ? (int) $row[$startcol + 70] : null;
            $this->customer_group_id = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
            $this->edit_increment = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
            $this->email_sent = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
            $this->forced_shipment_with_invoice = ($row[$startcol + 74] !== null) ? (int) $row[$startcol + 74] : null;
            $this->payment_auth_expiration = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
            $this->quote_address_id = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->quote_id = ($row[$startcol + 77] !== null) ? (int) $row[$startcol + 77] : null;
            $this->shipping_address_id = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
            $this->adjustment_negative = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->adjustment_positive = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->base_adjustment_negative = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->base_adjustment_positive = ($row[$startcol + 82] !== null) ? (string) $row[$startcol + 82] : null;
            $this->base_shipping_discount_amount = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->base_subtotal_incl_tax = ($row[$startcol + 84] !== null) ? (string) $row[$startcol + 84] : null;
            $this->base_total_due = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
            $this->payment_authorization_amount = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
            $this->shipping_discount_amount = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->subtotal_incl_tax = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->total_due = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->weight = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->customer_dob = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->increment_id = ($row[$startcol + 92] !== null) ? (string) $row[$startcol + 92] : null;
            $this->applied_rule_ids = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->base_currency_code = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->customer_email = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->customer_firstname = ($row[$startcol + 96] !== null) ? (string) $row[$startcol + 96] : null;
            $this->customer_lastname = ($row[$startcol + 97] !== null) ? (string) $row[$startcol + 97] : null;
            $this->customer_middlename = ($row[$startcol + 98] !== null) ? (string) $row[$startcol + 98] : null;
            $this->customer_prefix = ($row[$startcol + 99] !== null) ? (string) $row[$startcol + 99] : null;
            $this->customer_suffix = ($row[$startcol + 100] !== null) ? (string) $row[$startcol + 100] : null;
            $this->customer_taxvat = ($row[$startcol + 101] !== null) ? (string) $row[$startcol + 101] : null;
            $this->discount_description = ($row[$startcol + 102] !== null) ? (string) $row[$startcol + 102] : null;
            $this->ext_customer_id = ($row[$startcol + 103] !== null) ? (string) $row[$startcol + 103] : null;
            $this->ext_order_id = ($row[$startcol + 104] !== null) ? (string) $row[$startcol + 104] : null;
            $this->global_currency_code = ($row[$startcol + 105] !== null) ? (string) $row[$startcol + 105] : null;
            $this->hold_before_state = ($row[$startcol + 106] !== null) ? (string) $row[$startcol + 106] : null;
            $this->hold_before_status = ($row[$startcol + 107] !== null) ? (string) $row[$startcol + 107] : null;
            $this->order_currency_code = ($row[$startcol + 108] !== null) ? (string) $row[$startcol + 108] : null;
            $this->original_increment_id = ($row[$startcol + 109] !== null) ? (string) $row[$startcol + 109] : null;
            $this->relation_child_id = ($row[$startcol + 110] !== null) ? (string) $row[$startcol + 110] : null;
            $this->relation_child_real_id = ($row[$startcol + 111] !== null) ? (string) $row[$startcol + 111] : null;
            $this->relation_parent_id = ($row[$startcol + 112] !== null) ? (string) $row[$startcol + 112] : null;
            $this->relation_parent_real_id = ($row[$startcol + 113] !== null) ? (string) $row[$startcol + 113] : null;
            $this->remote_ip = ($row[$startcol + 114] !== null) ? (string) $row[$startcol + 114] : null;
            $this->shipping_method = ($row[$startcol + 115] !== null) ? (string) $row[$startcol + 115] : null;
            $this->store_currency_code = ($row[$startcol + 116] !== null) ? (string) $row[$startcol + 116] : null;
            $this->store_name = ($row[$startcol + 117] !== null) ? (string) $row[$startcol + 117] : null;
            $this->x_forwarded_for = ($row[$startcol + 118] !== null) ? (string) $row[$startcol + 118] : null;
            $this->customer_note = ($row[$startcol + 119] !== null) ? (string) $row[$startcol + 119] : null;
            $this->created_at = ($row[$startcol + 120] !== null) ? (string) $row[$startcol + 120] : null;
            $this->updated_at = ($row[$startcol + 121] !== null) ? (string) $row[$startcol + 121] : null;
            $this->total_item_count = ($row[$startcol + 122] !== null) ? (int) $row[$startcol + 122] : null;
            $this->customer_gender = ($row[$startcol + 123] !== null) ? (int) $row[$startcol + 123] : null;
            $this->hidden_tax_amount = ($row[$startcol + 124] !== null) ? (string) $row[$startcol + 124] : null;
            $this->base_hidden_tax_amount = ($row[$startcol + 125] !== null) ? (string) $row[$startcol + 125] : null;
            $this->shipping_hidden_tax_amount = ($row[$startcol + 126] !== null) ? (string) $row[$startcol + 126] : null;
            $this->base_shipping_hidden_tax_amnt = ($row[$startcol + 127] !== null) ? (string) $row[$startcol + 127] : null;
            $this->hidden_tax_invoiced = ($row[$startcol + 128] !== null) ? (string) $row[$startcol + 128] : null;
            $this->base_hidden_tax_invoiced = ($row[$startcol + 129] !== null) ? (string) $row[$startcol + 129] : null;
            $this->hidden_tax_refunded = ($row[$startcol + 130] !== null) ? (string) $row[$startcol + 130] : null;
            $this->base_hidden_tax_refunded = ($row[$startcol + 131] !== null) ? (string) $row[$startcol + 131] : null;
            $this->shipping_incl_tax = ($row[$startcol + 132] !== null) ? (string) $row[$startcol + 132] : null;
            $this->base_shipping_incl_tax = ($row[$startcol + 133] !== null) ? (string) $row[$startcol + 133] : null;
            $this->coupon_rule_name = ($row[$startcol + 134] !== null) ? (string) $row[$startcol + 134] : null;
            $this->paypal_ipn_customer_notified = ($row[$startcol + 135] !== null) ? (int) $row[$startcol + 135] : null;
            $this->gift_message_id = ($row[$startcol + 136] !== null) ? (int) $row[$startcol + 136] : null;
            $this->groupdeals_coupon_from = ($row[$startcol + 137] !== null) ? (string) $row[$startcol + 137] : null;
            $this->groupdeals_coupon_to = ($row[$startcol + 138] !== null) ? (string) $row[$startcol + 138] : null;
            $this->groupdeals_coupon_to_email = ($row[$startcol + 139] !== null) ? (string) $row[$startcol + 139] : null;
            $this->groupdeals_coupon_message = ($row[$startcol + 140] !== null) ? (string) $row[$startcol + 140] : null;
            $this->base_customer_balance_amount = ($row[$startcol + 141] !== null) ? (string) $row[$startcol + 141] : null;
            $this->customer_balance_amount = ($row[$startcol + 142] !== null) ? (string) $row[$startcol + 142] : null;
            $this->base_customer_balance_invoiced = ($row[$startcol + 143] !== null) ? (string) $row[$startcol + 143] : null;
            $this->customer_balance_invoiced = ($row[$startcol + 144] !== null) ? (string) $row[$startcol + 144] : null;
            $this->base_customer_balance_refunded = ($row[$startcol + 145] !== null) ? (string) $row[$startcol + 145] : null;
            $this->customer_balance_refunded = ($row[$startcol + 146] !== null) ? (string) $row[$startcol + 146] : null;
            $this->bs_customer_bal_total_refunded = ($row[$startcol + 147] !== null) ? (string) $row[$startcol + 147] : null;
            $this->customer_bal_total_refunded = ($row[$startcol + 148] !== null) ? (string) $row[$startcol + 148] : null;
            $this->gift_cards = ($row[$startcol + 149] !== null) ? (string) $row[$startcol + 149] : null;
            $this->base_gift_cards_amount = ($row[$startcol + 150] !== null) ? (string) $row[$startcol + 150] : null;
            $this->gift_cards_amount = ($row[$startcol + 151] !== null) ? (string) $row[$startcol + 151] : null;
            $this->base_gift_cards_invoiced = ($row[$startcol + 152] !== null) ? (string) $row[$startcol + 152] : null;
            $this->gift_cards_invoiced = ($row[$startcol + 153] !== null) ? (string) $row[$startcol + 153] : null;
            $this->base_gift_cards_refunded = ($row[$startcol + 154] !== null) ? (string) $row[$startcol + 154] : null;
            $this->gift_cards_refunded = ($row[$startcol + 155] !== null) ? (string) $row[$startcol + 155] : null;
            $this->gw_id = ($row[$startcol + 156] !== null) ? (int) $row[$startcol + 156] : null;
            $this->gw_allow_gift_receipt = ($row[$startcol + 157] !== null) ? (int) $row[$startcol + 157] : null;
            $this->gw_add_card = ($row[$startcol + 158] !== null) ? (int) $row[$startcol + 158] : null;
            $this->gw_base_price = ($row[$startcol + 159] !== null) ? (string) $row[$startcol + 159] : null;
            $this->gw_price = ($row[$startcol + 160] !== null) ? (string) $row[$startcol + 160] : null;
            $this->gw_items_base_price = ($row[$startcol + 161] !== null) ? (string) $row[$startcol + 161] : null;
            $this->gw_items_price = ($row[$startcol + 162] !== null) ? (string) $row[$startcol + 162] : null;
            $this->gw_card_base_price = ($row[$startcol + 163] !== null) ? (string) $row[$startcol + 163] : null;
            $this->gw_card_price = ($row[$startcol + 164] !== null) ? (string) $row[$startcol + 164] : null;
            $this->gw_base_tax_amount = ($row[$startcol + 165] !== null) ? (string) $row[$startcol + 165] : null;
            $this->gw_tax_amount = ($row[$startcol + 166] !== null) ? (string) $row[$startcol + 166] : null;
            $this->gw_items_base_tax_amount = ($row[$startcol + 167] !== null) ? (string) $row[$startcol + 167] : null;
            $this->gw_items_tax_amount = ($row[$startcol + 168] !== null) ? (string) $row[$startcol + 168] : null;
            $this->gw_card_base_tax_amount = ($row[$startcol + 169] !== null) ? (string) $row[$startcol + 169] : null;
            $this->gw_card_tax_amount = ($row[$startcol + 170] !== null) ? (string) $row[$startcol + 170] : null;
            $this->gw_base_price_invoiced = ($row[$startcol + 171] !== null) ? (string) $row[$startcol + 171] : null;
            $this->gw_price_invoiced = ($row[$startcol + 172] !== null) ? (string) $row[$startcol + 172] : null;
            $this->gw_items_base_price_invoiced = ($row[$startcol + 173] !== null) ? (string) $row[$startcol + 173] : null;
            $this->gw_items_price_invoiced = ($row[$startcol + 174] !== null) ? (string) $row[$startcol + 174] : null;
            $this->gw_card_base_price_invoiced = ($row[$startcol + 175] !== null) ? (string) $row[$startcol + 175] : null;
            $this->gw_card_price_invoiced = ($row[$startcol + 176] !== null) ? (string) $row[$startcol + 176] : null;
            $this->gw_base_tax_amount_invoiced = ($row[$startcol + 177] !== null) ? (string) $row[$startcol + 177] : null;
            $this->gw_tax_amount_invoiced = ($row[$startcol + 178] !== null) ? (string) $row[$startcol + 178] : null;
            $this->gw_items_base_tax_invoiced = ($row[$startcol + 179] !== null) ? (string) $row[$startcol + 179] : null;
            $this->gw_items_tax_invoiced = ($row[$startcol + 180] !== null) ? (string) $row[$startcol + 180] : null;
            $this->gw_card_base_tax_invoiced = ($row[$startcol + 181] !== null) ? (string) $row[$startcol + 181] : null;
            $this->gw_card_tax_invoiced = ($row[$startcol + 182] !== null) ? (string) $row[$startcol + 182] : null;
            $this->gw_base_price_refunded = ($row[$startcol + 183] !== null) ? (string) $row[$startcol + 183] : null;
            $this->gw_price_refunded = ($row[$startcol + 184] !== null) ? (string) $row[$startcol + 184] : null;
            $this->gw_items_base_price_refunded = ($row[$startcol + 185] !== null) ? (string) $row[$startcol + 185] : null;
            $this->gw_items_price_refunded = ($row[$startcol + 186] !== null) ? (string) $row[$startcol + 186] : null;
            $this->gw_card_base_price_refunded = ($row[$startcol + 187] !== null) ? (string) $row[$startcol + 187] : null;
            $this->gw_card_price_refunded = ($row[$startcol + 188] !== null) ? (string) $row[$startcol + 188] : null;
            $this->gw_base_tax_amount_refunded = ($row[$startcol + 189] !== null) ? (string) $row[$startcol + 189] : null;
            $this->gw_tax_amount_refunded = ($row[$startcol + 190] !== null) ? (string) $row[$startcol + 190] : null;
            $this->gw_items_base_tax_refunded = ($row[$startcol + 191] !== null) ? (string) $row[$startcol + 191] : null;
            $this->gw_items_tax_refunded = ($row[$startcol + 192] !== null) ? (string) $row[$startcol + 192] : null;
            $this->gw_card_base_tax_refunded = ($row[$startcol + 193] !== null) ? (string) $row[$startcol + 193] : null;
            $this->gw_card_tax_refunded = ($row[$startcol + 194] !== null) ? (string) $row[$startcol + 194] : null;
            $this->reward_points_balance = ($row[$startcol + 195] !== null) ? (int) $row[$startcol + 195] : null;
            $this->base_reward_currency_amount = ($row[$startcol + 196] !== null) ? (string) $row[$startcol + 196] : null;
            $this->reward_currency_amount = ($row[$startcol + 197] !== null) ? (string) $row[$startcol + 197] : null;
            $this->base_rwrd_crrncy_amt_invoiced = ($row[$startcol + 198] !== null) ? (string) $row[$startcol + 198] : null;
            $this->rwrd_currency_amount_invoiced = ($row[$startcol + 199] !== null) ? (string) $row[$startcol + 199] : null;
            $this->base_rwrd_crrncy_amnt_refnded = ($row[$startcol + 200] !== null) ? (string) $row[$startcol + 200] : null;
            $this->rwrd_crrncy_amnt_refunded = ($row[$startcol + 201] !== null) ? (string) $row[$startcol + 201] : null;
            $this->reward_points_balance_refund = ($row[$startcol + 202] !== null) ? (int) $row[$startcol + 202] : null;
            $this->reward_points_balance_refunded = ($row[$startcol + 203] !== null) ? (int) $row[$startcol + 203] : null;
            $this->reward_salesrule_points = ($row[$startcol + 204] !== null) ? (int) $row[$startcol + 204] : null;
            $this->vendor_username = ($row[$startcol + 205] !== null) ? (string) $row[$startcol + 205] : null;
            $this->vendor_name = ($row[$startcol + 206] !== null) ? (string) $row[$startcol + 206] : null;
            $this->vendor_lastname = ($row[$startcol + 207] !== null) ? (string) $row[$startcol + 207] : null;
            $this->vendor_email = ($row[$startcol + 208] !== null) ? (string) $row[$startcol + 208] : null;
            $this->pos_id = ($row[$startcol + 209] !== null) ? (string) $row[$startcol + 209] : null;
            $this->pos_office = ($row[$startcol + 210] !== null) ? (string) $row[$startcol + 210] : null;
            $this->pos_code = ($row[$startcol + 211] !== null) ? (string) $row[$startcol + 211] : null;
            $this->pos_country = ($row[$startcol + 212] !== null) ? (string) $row[$startcol + 212] : null;
            $this->pos_city = ($row[$startcol + 213] !== null) ? (string) $row[$startcol + 213] : null;
            $this->pos_postal_code = ($row[$startcol + 214] !== null) ? (string) $row[$startcol + 214] : null;
            $this->pos_address = ($row[$startcol + 215] !== null) ? (string) $row[$startcol + 215] : null;
            $this->pos_phone = ($row[$startcol + 216] !== null) ? (string) $row[$startcol + 216] : null;
            $this->customer_identification = ($row[$startcol + 217] !== null) ? (string) $row[$startcol + 217] : null;
            $this->is_gift = ($row[$startcol + 218] !== null) ? (int) $row[$startcol + 218] : null;
            $this->gift_for = ($row[$startcol + 219] !== null) ? (string) $row[$startcol + 219] : null;
            $this->gift_email = ($row[$startcol + 220] !== null) ? (string) $row[$startcol + 220] : null;
            $this->gift_message = ($row[$startcol + 221] !== null) ? (string) $row[$startcol + 221] : null;
            $this->gift_citydept = ($row[$startcol + 222] !== null) ? (string) $row[$startcol + 222] : null;
            $this->gift_shipping = ($row[$startcol + 223] !== null) ? (string) $row[$startcol + 223] : null;
            $this->was_payed = ($row[$startcol + 224] !== null) ? (int) $row[$startcol + 224] : null;
            $this->gift_for_lastname = ($row[$startcol + 225] !== null) ? (string) $row[$startcol + 225] : null;
            $this->sci_payment_methods = ($row[$startcol + 226] !== null) ? (string) $row[$startcol + 226] : null;
            $this->discount_applied = ($row[$startcol + 227] !== null) ? (int) $row[$startcol + 227] : null;
            $this->rewards_applied = ($row[$startcol + 228] !== null) ? (int) $row[$startcol + 228] : null;
            $this->stock_before_pol = ($row[$startcol + 229] !== null) ? (int) $row[$startcol + 229] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 230; // 230 = SalesFlatOrderPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating SalesFlatOrder object", $e);
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

        if ($this->aCoreStore !== null && $this->store_id !== $this->aCoreStore->getStoreId()) {
            $this->aCoreStore = null;
        }
        if ($this->aCustomerEntity !== null && $this->customer_id !== $this->aCustomerEntity->getEntityId()) {
            $this->aCustomerEntity = null;
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
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SalesFlatOrderPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCustomerEntity = null;
            $this->aCoreStore = null;
            $this->collSalesFlatOrderItems = null;

            $this->collCouponMappings = null;

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
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SalesFlatOrderQuery::create()
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
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SalesFlatOrderPeer::addInstanceToPool($this);
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

            if ($this->aCustomerEntity !== null) {
                if ($this->aCustomerEntity->isModified() || $this->aCustomerEntity->isNew()) {
                    $affectedRows += $this->aCustomerEntity->save($con);
                }
                $this->setCustomerEntity($this->aCustomerEntity);
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

            if ($this->salesFlatOrderItemsScheduledForDeletion !== null) {
                if (!$this->salesFlatOrderItemsScheduledForDeletion->isEmpty()) {
                    SalesFlatOrderItemQuery::create()
                        ->filterByPrimaryKeys($this->salesFlatOrderItemsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->salesFlatOrderItemsScheduledForDeletion = null;
                }
            }

            if ($this->collSalesFlatOrderItems !== null) {
                foreach ($this->collSalesFlatOrderItems as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->couponMappingsScheduledForDeletion !== null) {
                if (!$this->couponMappingsScheduledForDeletion->isEmpty()) {
                    CouponMappingQuery::create()
                        ->filterByPrimaryKeys($this->couponMappingsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->couponMappingsScheduledForDeletion = null;
                }
            }

            if ($this->collCouponMappings !== null) {
                foreach ($this->collCouponMappings as $referrerFK) {
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

        $this->modifiedColumns[] = SalesFlatOrderPeer::ENTITY_ID;
        if (null !== $this->entity_id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SalesFlatOrderPeer::ENTITY_ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SalesFlatOrderPeer::ENTITY_ID)) {
            $modifiedColumns[':p' . $index++]  = 'entity_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::STATE)) {
            $modifiedColumns[':p' . $index++]  = 'state';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'status';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::COUPON_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_code';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::PROTECT_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'protect_code';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_description';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::IS_VIRTUAL)) {
            $modifiedColumns[':p' . $index++]  = 'is_virtual';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::STORE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'store_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'customer_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_DISCOUNT_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_discount_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_DISCOUNT_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'base_discount_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_DISCOUNT_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_discount_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_DISCOUNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_discount_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_GRAND_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = 'base_grand_total';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_shipping_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'base_shipping_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_shipping_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_shipping_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_shipping_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_shipping_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SUBTOTAL)) {
            $modifiedColumns[':p' . $index++]  = 'base_subtotal';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SUBTOTAL_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'base_subtotal_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SUBTOTAL_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_subtotal_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SUBTOTAL_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_subtotal_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TAX_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'base_tax_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TO_GLOBAL_RATE)) {
            $modifiedColumns[':p' . $index++]  = 'base_to_global_rate';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TO_ORDER_RATE)) {
            $modifiedColumns[':p' . $index++]  = 'base_to_order_rate';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'base_total_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_total_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_INVOICED_COST)) {
            $modifiedColumns[':p' . $index++]  = 'base_total_invoiced_cost';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_OFFLINE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_total_offline_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_ONLINE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_total_online_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_PAID)) {
            $modifiedColumns[':p' . $index++]  = 'base_total_paid';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_QTY_ORDERED)) {
            $modifiedColumns[':p' . $index++]  = 'base_total_qty_ordered';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_total_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'discount_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'discount_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'discount_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'discount_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GRAND_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = 'grand_total';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::STORE_TO_BASE_RATE)) {
            $modifiedColumns[':p' . $index++]  = 'store_to_base_rate';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::STORE_TO_ORDER_RATE)) {
            $modifiedColumns[':p' . $index++]  = 'store_to_order_rate';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SUBTOTAL)) {
            $modifiedColumns[':p' . $index++]  = 'subtotal';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SUBTOTAL_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'subtotal_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SUBTOTAL_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'subtotal_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SUBTOTAL_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'subtotal_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TAX_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'tax_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_CANCELED)) {
            $modifiedColumns[':p' . $index++]  = 'total_canceled';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'total_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_OFFLINE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'total_offline_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_ONLINE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'total_online_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_PAID)) {
            $modifiedColumns[':p' . $index++]  = 'total_paid';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_QTY_ORDERED)) {
            $modifiedColumns[':p' . $index++]  = 'total_qty_ordered';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'total_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY)) {
            $modifiedColumns[':p' . $index++]  = 'can_ship_partially';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY_ITEM)) {
            $modifiedColumns[':p' . $index++]  = 'can_ship_partially_item';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_IS_GUEST)) {
            $modifiedColumns[':p' . $index++]  = 'customer_is_guest';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_NOTE_NOTIFY)) {
            $modifiedColumns[':p' . $index++]  = 'customer_note_notify';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BILLING_ADDRESS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'billing_address_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_GROUP_ID)) {
            $modifiedColumns[':p' . $index++]  = 'customer_group_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::EDIT_INCREMENT)) {
            $modifiedColumns[':p' . $index++]  = 'edit_increment';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::EMAIL_SENT)) {
            $modifiedColumns[':p' . $index++]  = 'email_sent';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::FORCED_SHIPMENT_WITH_INVOICE)) {
            $modifiedColumns[':p' . $index++]  = 'forced_shipment_with_invoice';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::PAYMENT_AUTH_EXPIRATION)) {
            $modifiedColumns[':p' . $index++]  = 'payment_auth_expiration';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::QUOTE_ADDRESS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'quote_address_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::QUOTE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'quote_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_ADDRESS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_address_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::ADJUSTMENT_NEGATIVE)) {
            $modifiedColumns[':p' . $index++]  = 'adjustment_negative';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::ADJUSTMENT_POSITIVE)) {
            $modifiedColumns[':p' . $index++]  = 'adjustment_positive';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_ADJUSTMENT_NEGATIVE)) {
            $modifiedColumns[':p' . $index++]  = 'base_adjustment_negative';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_ADJUSTMENT_POSITIVE)) {
            $modifiedColumns[':p' . $index++]  = 'base_adjustment_positive';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_DISCOUNT_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_shipping_discount_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SUBTOTAL_INCL_TAX)) {
            $modifiedColumns[':p' . $index++]  = 'base_subtotal_incl_tax';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_DUE)) {
            $modifiedColumns[':p' . $index++]  = 'base_total_due';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::PAYMENT_AUTHORIZATION_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'payment_authorization_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_DISCOUNT_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_discount_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SUBTOTAL_INCL_TAX)) {
            $modifiedColumns[':p' . $index++]  = 'subtotal_incl_tax';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_DUE)) {
            $modifiedColumns[':p' . $index++]  = 'total_due';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::WEIGHT)) {
            $modifiedColumns[':p' . $index++]  = 'weight';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_DOB)) {
            $modifiedColumns[':p' . $index++]  = 'customer_dob';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::INCREMENT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'increment_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::APPLIED_RULE_IDS)) {
            $modifiedColumns[':p' . $index++]  = 'applied_rule_ids';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_CURRENCY_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'base_currency_code';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'customer_email';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_FIRSTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'customer_firstname';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_LASTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'customer_lastname';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_MIDDLENAME)) {
            $modifiedColumns[':p' . $index++]  = 'customer_middlename';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_PREFIX)) {
            $modifiedColumns[':p' . $index++]  = 'customer_prefix';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_SUFFIX)) {
            $modifiedColumns[':p' . $index++]  = 'customer_suffix';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_TAXVAT)) {
            $modifiedColumns[':p' . $index++]  = 'customer_taxvat';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = 'discount_description';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::EXT_CUSTOMER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'ext_customer_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::EXT_ORDER_ID)) {
            $modifiedColumns[':p' . $index++]  = 'ext_order_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GLOBAL_CURRENCY_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'global_currency_code';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::HOLD_BEFORE_STATE)) {
            $modifiedColumns[':p' . $index++]  = 'hold_before_state';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::HOLD_BEFORE_STATUS)) {
            $modifiedColumns[':p' . $index++]  = 'hold_before_status';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::ORDER_CURRENCY_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'order_currency_code';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::ORIGINAL_INCREMENT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'original_increment_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::RELATION_CHILD_ID)) {
            $modifiedColumns[':p' . $index++]  = 'relation_child_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::RELATION_CHILD_REAL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'relation_child_real_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::RELATION_PARENT_ID)) {
            $modifiedColumns[':p' . $index++]  = 'relation_parent_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::RELATION_PARENT_REAL_ID)) {
            $modifiedColumns[':p' . $index++]  = 'relation_parent_real_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::REMOTE_IP)) {
            $modifiedColumns[':p' . $index++]  = 'remote_ip';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_METHOD)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_method';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::STORE_CURRENCY_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'store_currency_code';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::STORE_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'store_name';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::X_FORWARDED_FOR)) {
            $modifiedColumns[':p' . $index++]  = 'x_forwarded_for';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_NOTE)) {
            $modifiedColumns[':p' . $index++]  = 'customer_note';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_ITEM_COUNT)) {
            $modifiedColumns[':p' . $index++]  = 'total_item_count';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_GENDER)) {
            $modifiedColumns[':p' . $index++]  = 'customer_gender';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::HIDDEN_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'hidden_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_HIDDEN_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_hidden_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_HIDDEN_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_hidden_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_HIDDEN_TAX_AMNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_shipping_hidden_tax_amnt';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::HIDDEN_TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'hidden_tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_HIDDEN_TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_hidden_tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::HIDDEN_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'hidden_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_HIDDEN_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_hidden_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_INCL_TAX)) {
            $modifiedColumns[':p' . $index++]  = 'shipping_incl_tax';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_INCL_TAX)) {
            $modifiedColumns[':p' . $index++]  = 'base_shipping_incl_tax';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::COUPON_RULE_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'coupon_rule_name';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::PAYPAL_IPN_CUSTOMER_NOTIFIED)) {
            $modifiedColumns[':p' . $index++]  = 'paypal_ipn_customer_notified';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_MESSAGE_ID)) {
            $modifiedColumns[':p' . $index++]  = 'gift_message_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GROUPDEALS_COUPON_FROM)) {
            $modifiedColumns[':p' . $index++]  = 'groupdeals_coupon_from';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GROUPDEALS_COUPON_TO)) {
            $modifiedColumns[':p' . $index++]  = 'groupdeals_coupon_to';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GROUPDEALS_COUPON_TO_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'groupdeals_coupon_to_email';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GROUPDEALS_COUPON_MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = 'groupdeals_coupon_message';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_customer_balance_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_BALANCE_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'customer_balance_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_customer_balance_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_BALANCE_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'customer_balance_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_customer_balance_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_BALANCE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'customer_balance_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BS_CUSTOMER_BAL_TOTAL_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'bs_customer_bal_total_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_BAL_TOTAL_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'customer_bal_total_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_CARDS)) {
            $modifiedColumns[':p' . $index++]  = 'gift_cards';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_GIFT_CARDS_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_gift_cards_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_CARDS_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'gift_cards_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_GIFT_CARDS_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_gift_cards_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_CARDS_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gift_cards_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_GIFT_CARDS_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_gift_cards_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_CARDS_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gift_cards_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ID)) {
            $modifiedColumns[':p' . $index++]  = 'gw_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ALLOW_GIFT_RECEIPT)) {
            $modifiedColumns[':p' . $index++]  = 'gw_allow_gift_receipt';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ADD_CARD)) {
            $modifiedColumns[':p' . $index++]  = 'gw_add_card';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_price';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'gw_price';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_base_price';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_price';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_base_price';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_PRICE)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_price';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'gw_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_base_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_base_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_TAX_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_tax_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_PRICE_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_price_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_PRICE_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_price_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_base_price_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_PRICE_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_price_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_base_price_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_PRICE_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_price_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_tax_amount_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_TAX_AMOUNT_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_tax_amount_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_base_tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_base_tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_TAX_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_tax_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_PRICE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_price_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_PRICE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_price_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_base_price_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_PRICE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_price_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_base_price_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_PRICE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_price_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_base_tax_amount_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_TAX_AMOUNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_tax_amount_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_base_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_items_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_base_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_TAX_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'gw_card_tax_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARD_POINTS_BALANCE)) {
            $modifiedColumns[':p' . $index++]  = 'reward_points_balance';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_REWARD_CURRENCY_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'base_reward_currency_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARD_CURRENCY_AMOUNT)) {
            $modifiedColumns[':p' . $index++]  = 'reward_currency_amount';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMT_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'base_rwrd_crrncy_amt_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::RWRD_CURRENCY_AMOUNT_INVOICED)) {
            $modifiedColumns[':p' . $index++]  = 'rwrd_currency_amount_invoiced';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMNT_REFNDED)) {
            $modifiedColumns[':p' . $index++]  = 'base_rwrd_crrncy_amnt_refnded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::RWRD_CRRNCY_AMNT_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'rwrd_crrncy_amnt_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUND)) {
            $modifiedColumns[':p' . $index++]  = 'reward_points_balance_refund';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUNDED)) {
            $modifiedColumns[':p' . $index++]  = 'reward_points_balance_refunded';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARD_SALESRULE_POINTS)) {
            $modifiedColumns[':p' . $index++]  = 'reward_salesrule_points';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::VENDOR_USERNAME)) {
            $modifiedColumns[':p' . $index++]  = 'vendor_username';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::VENDOR_NAME)) {
            $modifiedColumns[':p' . $index++]  = 'vendor_name';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::VENDOR_LASTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'vendor_lastname';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::VENDOR_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'vendor_email';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_ID)) {
            $modifiedColumns[':p' . $index++]  = 'pos_id';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_OFFICE)) {
            $modifiedColumns[':p' . $index++]  = 'pos_office';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'pos_code';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_COUNTRY)) {
            $modifiedColumns[':p' . $index++]  = 'pos_country';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_CITY)) {
            $modifiedColumns[':p' . $index++]  = 'pos_city';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_POSTAL_CODE)) {
            $modifiedColumns[':p' . $index++]  = 'pos_postal_code';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_ADDRESS)) {
            $modifiedColumns[':p' . $index++]  = 'pos_address';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_PHONE)) {
            $modifiedColumns[':p' . $index++]  = 'pos_phone';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_IDENTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = 'customer_identification';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::IS_GIFT)) {
            $modifiedColumns[':p' . $index++]  = 'is_gift';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_FOR)) {
            $modifiedColumns[':p' . $index++]  = 'gift_for';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = 'gift_email';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = 'gift_message';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_CITYDEPT)) {
            $modifiedColumns[':p' . $index++]  = 'gift_citydept';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_SHIPPING)) {
            $modifiedColumns[':p' . $index++]  = 'gift_shipping';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::WAS_PAYED)) {
            $modifiedColumns[':p' . $index++]  = 'was_payed';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_FOR_LASTNAME)) {
            $modifiedColumns[':p' . $index++]  = 'gift_for_lastname';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::SCI_PAYMENT_METHODS)) {
            $modifiedColumns[':p' . $index++]  = 'sci_payment_methods';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_APPLIED)) {
            $modifiedColumns[':p' . $index++]  = 'discount_applied';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARDS_APPLIED)) {
            $modifiedColumns[':p' . $index++]  = 'rewards_applied';
        }
        if ($this->isColumnModified(SalesFlatOrderPeer::STOCK_BEFORE_POL)) {
            $modifiedColumns[':p' . $index++]  = 'stock_before_pol';
        }

        $sql = sprintf(
            'INSERT INTO sales_flat_order (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'entity_id':
                        $stmt->bindValue($identifier, $this->entity_id, PDO::PARAM_INT);
                        break;
                    case 'state':
                        $stmt->bindValue($identifier, $this->state, PDO::PARAM_STR);
                        break;
                    case 'status':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case 'coupon_code':
                        $stmt->bindValue($identifier, $this->coupon_code, PDO::PARAM_STR);
                        break;
                    case 'protect_code':
                        $stmt->bindValue($identifier, $this->protect_code, PDO::PARAM_STR);
                        break;
                    case 'shipping_description':
                        $stmt->bindValue($identifier, $this->shipping_description, PDO::PARAM_STR);
                        break;
                    case 'is_virtual':
                        $stmt->bindValue($identifier, $this->is_virtual, PDO::PARAM_INT);
                        break;
                    case 'store_id':
                        $stmt->bindValue($identifier, $this->store_id, PDO::PARAM_INT);
                        break;
                    case 'customer_id':
                        $stmt->bindValue($identifier, $this->customer_id, PDO::PARAM_INT);
                        break;
                    case 'base_discount_amount':
                        $stmt->bindValue($identifier, $this->base_discount_amount, PDO::PARAM_STR);
                        break;
                    case 'base_discount_canceled':
                        $stmt->bindValue($identifier, $this->base_discount_canceled, PDO::PARAM_STR);
                        break;
                    case 'base_discount_invoiced':
                        $stmt->bindValue($identifier, $this->base_discount_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_discount_refunded':
                        $stmt->bindValue($identifier, $this->base_discount_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_grand_total':
                        $stmt->bindValue($identifier, $this->base_grand_total, PDO::PARAM_STR);
                        break;
                    case 'base_shipping_amount':
                        $stmt->bindValue($identifier, $this->base_shipping_amount, PDO::PARAM_STR);
                        break;
                    case 'base_shipping_canceled':
                        $stmt->bindValue($identifier, $this->base_shipping_canceled, PDO::PARAM_STR);
                        break;
                    case 'base_shipping_invoiced':
                        $stmt->bindValue($identifier, $this->base_shipping_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_shipping_refunded':
                        $stmt->bindValue($identifier, $this->base_shipping_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_shipping_tax_amount':
                        $stmt->bindValue($identifier, $this->base_shipping_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'base_shipping_tax_refunded':
                        $stmt->bindValue($identifier, $this->base_shipping_tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_subtotal':
                        $stmt->bindValue($identifier, $this->base_subtotal, PDO::PARAM_STR);
                        break;
                    case 'base_subtotal_canceled':
                        $stmt->bindValue($identifier, $this->base_subtotal_canceled, PDO::PARAM_STR);
                        break;
                    case 'base_subtotal_invoiced':
                        $stmt->bindValue($identifier, $this->base_subtotal_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_subtotal_refunded':
                        $stmt->bindValue($identifier, $this->base_subtotal_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_tax_amount':
                        $stmt->bindValue($identifier, $this->base_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'base_tax_canceled':
                        $stmt->bindValue($identifier, $this->base_tax_canceled, PDO::PARAM_STR);
                        break;
                    case 'base_tax_invoiced':
                        $stmt->bindValue($identifier, $this->base_tax_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_tax_refunded':
                        $stmt->bindValue($identifier, $this->base_tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_to_global_rate':
                        $stmt->bindValue($identifier, $this->base_to_global_rate, PDO::PARAM_STR);
                        break;
                    case 'base_to_order_rate':
                        $stmt->bindValue($identifier, $this->base_to_order_rate, PDO::PARAM_STR);
                        break;
                    case 'base_total_canceled':
                        $stmt->bindValue($identifier, $this->base_total_canceled, PDO::PARAM_STR);
                        break;
                    case 'base_total_invoiced':
                        $stmt->bindValue($identifier, $this->base_total_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_total_invoiced_cost':
                        $stmt->bindValue($identifier, $this->base_total_invoiced_cost, PDO::PARAM_STR);
                        break;
                    case 'base_total_offline_refunded':
                        $stmt->bindValue($identifier, $this->base_total_offline_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_total_online_refunded':
                        $stmt->bindValue($identifier, $this->base_total_online_refunded, PDO::PARAM_STR);
                        break;
                    case 'base_total_paid':
                        $stmt->bindValue($identifier, $this->base_total_paid, PDO::PARAM_STR);
                        break;
                    case 'base_total_qty_ordered':
                        $stmt->bindValue($identifier, $this->base_total_qty_ordered, PDO::PARAM_STR);
                        break;
                    case 'base_total_refunded':
                        $stmt->bindValue($identifier, $this->base_total_refunded, PDO::PARAM_STR);
                        break;
                    case 'discount_amount':
                        $stmt->bindValue($identifier, $this->discount_amount, PDO::PARAM_STR);
                        break;
                    case 'discount_canceled':
                        $stmt->bindValue($identifier, $this->discount_canceled, PDO::PARAM_STR);
                        break;
                    case 'discount_invoiced':
                        $stmt->bindValue($identifier, $this->discount_invoiced, PDO::PARAM_STR);
                        break;
                    case 'discount_refunded':
                        $stmt->bindValue($identifier, $this->discount_refunded, PDO::PARAM_STR);
                        break;
                    case 'grand_total':
                        $stmt->bindValue($identifier, $this->grand_total, PDO::PARAM_STR);
                        break;
                    case 'shipping_amount':
                        $stmt->bindValue($identifier, $this->shipping_amount, PDO::PARAM_STR);
                        break;
                    case 'shipping_canceled':
                        $stmt->bindValue($identifier, $this->shipping_canceled, PDO::PARAM_STR);
                        break;
                    case 'shipping_invoiced':
                        $stmt->bindValue($identifier, $this->shipping_invoiced, PDO::PARAM_STR);
                        break;
                    case 'shipping_refunded':
                        $stmt->bindValue($identifier, $this->shipping_refunded, PDO::PARAM_STR);
                        break;
                    case 'shipping_tax_amount':
                        $stmt->bindValue($identifier, $this->shipping_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'shipping_tax_refunded':
                        $stmt->bindValue($identifier, $this->shipping_tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'store_to_base_rate':
                        $stmt->bindValue($identifier, $this->store_to_base_rate, PDO::PARAM_STR);
                        break;
                    case 'store_to_order_rate':
                        $stmt->bindValue($identifier, $this->store_to_order_rate, PDO::PARAM_STR);
                        break;
                    case 'subtotal':
                        $stmt->bindValue($identifier, $this->subtotal, PDO::PARAM_STR);
                        break;
                    case 'subtotal_canceled':
                        $stmt->bindValue($identifier, $this->subtotal_canceled, PDO::PARAM_STR);
                        break;
                    case 'subtotal_invoiced':
                        $stmt->bindValue($identifier, $this->subtotal_invoiced, PDO::PARAM_STR);
                        break;
                    case 'subtotal_refunded':
                        $stmt->bindValue($identifier, $this->subtotal_refunded, PDO::PARAM_STR);
                        break;
                    case 'tax_amount':
                        $stmt->bindValue($identifier, $this->tax_amount, PDO::PARAM_STR);
                        break;
                    case 'tax_canceled':
                        $stmt->bindValue($identifier, $this->tax_canceled, PDO::PARAM_STR);
                        break;
                    case 'tax_invoiced':
                        $stmt->bindValue($identifier, $this->tax_invoiced, PDO::PARAM_STR);
                        break;
                    case 'tax_refunded':
                        $stmt->bindValue($identifier, $this->tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'total_canceled':
                        $stmt->bindValue($identifier, $this->total_canceled, PDO::PARAM_STR);
                        break;
                    case 'total_invoiced':
                        $stmt->bindValue($identifier, $this->total_invoiced, PDO::PARAM_STR);
                        break;
                    case 'total_offline_refunded':
                        $stmt->bindValue($identifier, $this->total_offline_refunded, PDO::PARAM_STR);
                        break;
                    case 'total_online_refunded':
                        $stmt->bindValue($identifier, $this->total_online_refunded, PDO::PARAM_STR);
                        break;
                    case 'total_paid':
                        $stmt->bindValue($identifier, $this->total_paid, PDO::PARAM_STR);
                        break;
                    case 'total_qty_ordered':
                        $stmt->bindValue($identifier, $this->total_qty_ordered, PDO::PARAM_STR);
                        break;
                    case 'total_refunded':
                        $stmt->bindValue($identifier, $this->total_refunded, PDO::PARAM_STR);
                        break;
                    case 'can_ship_partially':
                        $stmt->bindValue($identifier, $this->can_ship_partially, PDO::PARAM_INT);
                        break;
                    case 'can_ship_partially_item':
                        $stmt->bindValue($identifier, $this->can_ship_partially_item, PDO::PARAM_INT);
                        break;
                    case 'customer_is_guest':
                        $stmt->bindValue($identifier, $this->customer_is_guest, PDO::PARAM_INT);
                        break;
                    case 'customer_note_notify':
                        $stmt->bindValue($identifier, $this->customer_note_notify, PDO::PARAM_INT);
                        break;
                    case 'billing_address_id':
                        $stmt->bindValue($identifier, $this->billing_address_id, PDO::PARAM_INT);
                        break;
                    case 'customer_group_id':
                        $stmt->bindValue($identifier, $this->customer_group_id, PDO::PARAM_INT);
                        break;
                    case 'edit_increment':
                        $stmt->bindValue($identifier, $this->edit_increment, PDO::PARAM_INT);
                        break;
                    case 'email_sent':
                        $stmt->bindValue($identifier, $this->email_sent, PDO::PARAM_INT);
                        break;
                    case 'forced_shipment_with_invoice':
                        $stmt->bindValue($identifier, $this->forced_shipment_with_invoice, PDO::PARAM_INT);
                        break;
                    case 'payment_auth_expiration':
                        $stmt->bindValue($identifier, $this->payment_auth_expiration, PDO::PARAM_INT);
                        break;
                    case 'quote_address_id':
                        $stmt->bindValue($identifier, $this->quote_address_id, PDO::PARAM_INT);
                        break;
                    case 'quote_id':
                        $stmt->bindValue($identifier, $this->quote_id, PDO::PARAM_INT);
                        break;
                    case 'shipping_address_id':
                        $stmt->bindValue($identifier, $this->shipping_address_id, PDO::PARAM_INT);
                        break;
                    case 'adjustment_negative':
                        $stmt->bindValue($identifier, $this->adjustment_negative, PDO::PARAM_STR);
                        break;
                    case 'adjustment_positive':
                        $stmt->bindValue($identifier, $this->adjustment_positive, PDO::PARAM_STR);
                        break;
                    case 'base_adjustment_negative':
                        $stmt->bindValue($identifier, $this->base_adjustment_negative, PDO::PARAM_STR);
                        break;
                    case 'base_adjustment_positive':
                        $stmt->bindValue($identifier, $this->base_adjustment_positive, PDO::PARAM_STR);
                        break;
                    case 'base_shipping_discount_amount':
                        $stmt->bindValue($identifier, $this->base_shipping_discount_amount, PDO::PARAM_STR);
                        break;
                    case 'base_subtotal_incl_tax':
                        $stmt->bindValue($identifier, $this->base_subtotal_incl_tax, PDO::PARAM_STR);
                        break;
                    case 'base_total_due':
                        $stmt->bindValue($identifier, $this->base_total_due, PDO::PARAM_STR);
                        break;
                    case 'payment_authorization_amount':
                        $stmt->bindValue($identifier, $this->payment_authorization_amount, PDO::PARAM_STR);
                        break;
                    case 'shipping_discount_amount':
                        $stmt->bindValue($identifier, $this->shipping_discount_amount, PDO::PARAM_STR);
                        break;
                    case 'subtotal_incl_tax':
                        $stmt->bindValue($identifier, $this->subtotal_incl_tax, PDO::PARAM_STR);
                        break;
                    case 'total_due':
                        $stmt->bindValue($identifier, $this->total_due, PDO::PARAM_STR);
                        break;
                    case 'weight':
                        $stmt->bindValue($identifier, $this->weight, PDO::PARAM_STR);
                        break;
                    case 'customer_dob':
                        $stmt->bindValue($identifier, $this->customer_dob, PDO::PARAM_STR);
                        break;
                    case 'increment_id':
                        $stmt->bindValue($identifier, $this->increment_id, PDO::PARAM_STR);
                        break;
                    case 'applied_rule_ids':
                        $stmt->bindValue($identifier, $this->applied_rule_ids, PDO::PARAM_STR);
                        break;
                    case 'base_currency_code':
                        $stmt->bindValue($identifier, $this->base_currency_code, PDO::PARAM_STR);
                        break;
                    case 'customer_email':
                        $stmt->bindValue($identifier, $this->customer_email, PDO::PARAM_STR);
                        break;
                    case 'customer_firstname':
                        $stmt->bindValue($identifier, $this->customer_firstname, PDO::PARAM_STR);
                        break;
                    case 'customer_lastname':
                        $stmt->bindValue($identifier, $this->customer_lastname, PDO::PARAM_STR);
                        break;
                    case 'customer_middlename':
                        $stmt->bindValue($identifier, $this->customer_middlename, PDO::PARAM_STR);
                        break;
                    case 'customer_prefix':
                        $stmt->bindValue($identifier, $this->customer_prefix, PDO::PARAM_STR);
                        break;
                    case 'customer_suffix':
                        $stmt->bindValue($identifier, $this->customer_suffix, PDO::PARAM_STR);
                        break;
                    case 'customer_taxvat':
                        $stmt->bindValue($identifier, $this->customer_taxvat, PDO::PARAM_STR);
                        break;
                    case 'discount_description':
                        $stmt->bindValue($identifier, $this->discount_description, PDO::PARAM_STR);
                        break;
                    case 'ext_customer_id':
                        $stmt->bindValue($identifier, $this->ext_customer_id, PDO::PARAM_STR);
                        break;
                    case 'ext_order_id':
                        $stmt->bindValue($identifier, $this->ext_order_id, PDO::PARAM_STR);
                        break;
                    case 'global_currency_code':
                        $stmt->bindValue($identifier, $this->global_currency_code, PDO::PARAM_STR);
                        break;
                    case 'hold_before_state':
                        $stmt->bindValue($identifier, $this->hold_before_state, PDO::PARAM_STR);
                        break;
                    case 'hold_before_status':
                        $stmt->bindValue($identifier, $this->hold_before_status, PDO::PARAM_STR);
                        break;
                    case 'order_currency_code':
                        $stmt->bindValue($identifier, $this->order_currency_code, PDO::PARAM_STR);
                        break;
                    case 'original_increment_id':
                        $stmt->bindValue($identifier, $this->original_increment_id, PDO::PARAM_STR);
                        break;
                    case 'relation_child_id':
                        $stmt->bindValue($identifier, $this->relation_child_id, PDO::PARAM_STR);
                        break;
                    case 'relation_child_real_id':
                        $stmt->bindValue($identifier, $this->relation_child_real_id, PDO::PARAM_STR);
                        break;
                    case 'relation_parent_id':
                        $stmt->bindValue($identifier, $this->relation_parent_id, PDO::PARAM_STR);
                        break;
                    case 'relation_parent_real_id':
                        $stmt->bindValue($identifier, $this->relation_parent_real_id, PDO::PARAM_STR);
                        break;
                    case 'remote_ip':
                        $stmt->bindValue($identifier, $this->remote_ip, PDO::PARAM_STR);
                        break;
                    case 'shipping_method':
                        $stmt->bindValue($identifier, $this->shipping_method, PDO::PARAM_STR);
                        break;
                    case 'store_currency_code':
                        $stmt->bindValue($identifier, $this->store_currency_code, PDO::PARAM_STR);
                        break;
                    case 'store_name':
                        $stmt->bindValue($identifier, $this->store_name, PDO::PARAM_STR);
                        break;
                    case 'x_forwarded_for':
                        $stmt->bindValue($identifier, $this->x_forwarded_for, PDO::PARAM_STR);
                        break;
                    case 'customer_note':
                        $stmt->bindValue($identifier, $this->customer_note, PDO::PARAM_STR);
                        break;
                    case 'created_at':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case 'updated_at':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
                        break;
                    case 'total_item_count':
                        $stmt->bindValue($identifier, $this->total_item_count, PDO::PARAM_INT);
                        break;
                    case 'customer_gender':
                        $stmt->bindValue($identifier, $this->customer_gender, PDO::PARAM_INT);
                        break;
                    case 'hidden_tax_amount':
                        $stmt->bindValue($identifier, $this->hidden_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'base_hidden_tax_amount':
                        $stmt->bindValue($identifier, $this->base_hidden_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'shipping_hidden_tax_amount':
                        $stmt->bindValue($identifier, $this->shipping_hidden_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'base_shipping_hidden_tax_amnt':
                        $stmt->bindValue($identifier, $this->base_shipping_hidden_tax_amnt, PDO::PARAM_STR);
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
                    case 'shipping_incl_tax':
                        $stmt->bindValue($identifier, $this->shipping_incl_tax, PDO::PARAM_STR);
                        break;
                    case 'base_shipping_incl_tax':
                        $stmt->bindValue($identifier, $this->base_shipping_incl_tax, PDO::PARAM_STR);
                        break;
                    case 'coupon_rule_name':
                        $stmt->bindValue($identifier, $this->coupon_rule_name, PDO::PARAM_STR);
                        break;
                    case 'paypal_ipn_customer_notified':
                        $stmt->bindValue($identifier, $this->paypal_ipn_customer_notified, PDO::PARAM_INT);
                        break;
                    case 'gift_message_id':
                        $stmt->bindValue($identifier, $this->gift_message_id, PDO::PARAM_INT);
                        break;
                    case 'groupdeals_coupon_from':
                        $stmt->bindValue($identifier, $this->groupdeals_coupon_from, PDO::PARAM_STR);
                        break;
                    case 'groupdeals_coupon_to':
                        $stmt->bindValue($identifier, $this->groupdeals_coupon_to, PDO::PARAM_STR);
                        break;
                    case 'groupdeals_coupon_to_email':
                        $stmt->bindValue($identifier, $this->groupdeals_coupon_to_email, PDO::PARAM_STR);
                        break;
                    case 'groupdeals_coupon_message':
                        $stmt->bindValue($identifier, $this->groupdeals_coupon_message, PDO::PARAM_STR);
                        break;
                    case 'base_customer_balance_amount':
                        $stmt->bindValue($identifier, $this->base_customer_balance_amount, PDO::PARAM_STR);
                        break;
                    case 'customer_balance_amount':
                        $stmt->bindValue($identifier, $this->customer_balance_amount, PDO::PARAM_STR);
                        break;
                    case 'base_customer_balance_invoiced':
                        $stmt->bindValue($identifier, $this->base_customer_balance_invoiced, PDO::PARAM_STR);
                        break;
                    case 'customer_balance_invoiced':
                        $stmt->bindValue($identifier, $this->customer_balance_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_customer_balance_refunded':
                        $stmt->bindValue($identifier, $this->base_customer_balance_refunded, PDO::PARAM_STR);
                        break;
                    case 'customer_balance_refunded':
                        $stmt->bindValue($identifier, $this->customer_balance_refunded, PDO::PARAM_STR);
                        break;
                    case 'bs_customer_bal_total_refunded':
                        $stmt->bindValue($identifier, $this->bs_customer_bal_total_refunded, PDO::PARAM_STR);
                        break;
                    case 'customer_bal_total_refunded':
                        $stmt->bindValue($identifier, $this->customer_bal_total_refunded, PDO::PARAM_STR);
                        break;
                    case 'gift_cards':
                        $stmt->bindValue($identifier, $this->gift_cards, PDO::PARAM_STR);
                        break;
                    case 'base_gift_cards_amount':
                        $stmt->bindValue($identifier, $this->base_gift_cards_amount, PDO::PARAM_STR);
                        break;
                    case 'gift_cards_amount':
                        $stmt->bindValue($identifier, $this->gift_cards_amount, PDO::PARAM_STR);
                        break;
                    case 'base_gift_cards_invoiced':
                        $stmt->bindValue($identifier, $this->base_gift_cards_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gift_cards_invoiced':
                        $stmt->bindValue($identifier, $this->gift_cards_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_gift_cards_refunded':
                        $stmt->bindValue($identifier, $this->base_gift_cards_refunded, PDO::PARAM_STR);
                        break;
                    case 'gift_cards_refunded':
                        $stmt->bindValue($identifier, $this->gift_cards_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_id':
                        $stmt->bindValue($identifier, $this->gw_id, PDO::PARAM_INT);
                        break;
                    case 'gw_allow_gift_receipt':
                        $stmt->bindValue($identifier, $this->gw_allow_gift_receipt, PDO::PARAM_INT);
                        break;
                    case 'gw_add_card':
                        $stmt->bindValue($identifier, $this->gw_add_card, PDO::PARAM_INT);
                        break;
                    case 'gw_base_price':
                        $stmt->bindValue($identifier, $this->gw_base_price, PDO::PARAM_STR);
                        break;
                    case 'gw_price':
                        $stmt->bindValue($identifier, $this->gw_price, PDO::PARAM_STR);
                        break;
                    case 'gw_items_base_price':
                        $stmt->bindValue($identifier, $this->gw_items_base_price, PDO::PARAM_STR);
                        break;
                    case 'gw_items_price':
                        $stmt->bindValue($identifier, $this->gw_items_price, PDO::PARAM_STR);
                        break;
                    case 'gw_card_base_price':
                        $stmt->bindValue($identifier, $this->gw_card_base_price, PDO::PARAM_STR);
                        break;
                    case 'gw_card_price':
                        $stmt->bindValue($identifier, $this->gw_card_price, PDO::PARAM_STR);
                        break;
                    case 'gw_base_tax_amount':
                        $stmt->bindValue($identifier, $this->gw_base_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'gw_tax_amount':
                        $stmt->bindValue($identifier, $this->gw_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'gw_items_base_tax_amount':
                        $stmt->bindValue($identifier, $this->gw_items_base_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'gw_items_tax_amount':
                        $stmt->bindValue($identifier, $this->gw_items_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'gw_card_base_tax_amount':
                        $stmt->bindValue($identifier, $this->gw_card_base_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'gw_card_tax_amount':
                        $stmt->bindValue($identifier, $this->gw_card_tax_amount, PDO::PARAM_STR);
                        break;
                    case 'gw_base_price_invoiced':
                        $stmt->bindValue($identifier, $this->gw_base_price_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_price_invoiced':
                        $stmt->bindValue($identifier, $this->gw_price_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_items_base_price_invoiced':
                        $stmt->bindValue($identifier, $this->gw_items_base_price_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_items_price_invoiced':
                        $stmt->bindValue($identifier, $this->gw_items_price_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_card_base_price_invoiced':
                        $stmt->bindValue($identifier, $this->gw_card_base_price_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_card_price_invoiced':
                        $stmt->bindValue($identifier, $this->gw_card_price_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_base_tax_amount_invoiced':
                        $stmt->bindValue($identifier, $this->gw_base_tax_amount_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_tax_amount_invoiced':
                        $stmt->bindValue($identifier, $this->gw_tax_amount_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_items_base_tax_invoiced':
                        $stmt->bindValue($identifier, $this->gw_items_base_tax_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_items_tax_invoiced':
                        $stmt->bindValue($identifier, $this->gw_items_tax_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_card_base_tax_invoiced':
                        $stmt->bindValue($identifier, $this->gw_card_base_tax_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_card_tax_invoiced':
                        $stmt->bindValue($identifier, $this->gw_card_tax_invoiced, PDO::PARAM_STR);
                        break;
                    case 'gw_base_price_refunded':
                        $stmt->bindValue($identifier, $this->gw_base_price_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_price_refunded':
                        $stmt->bindValue($identifier, $this->gw_price_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_items_base_price_refunded':
                        $stmt->bindValue($identifier, $this->gw_items_base_price_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_items_price_refunded':
                        $stmt->bindValue($identifier, $this->gw_items_price_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_card_base_price_refunded':
                        $stmt->bindValue($identifier, $this->gw_card_base_price_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_card_price_refunded':
                        $stmt->bindValue($identifier, $this->gw_card_price_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_base_tax_amount_refunded':
                        $stmt->bindValue($identifier, $this->gw_base_tax_amount_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_tax_amount_refunded':
                        $stmt->bindValue($identifier, $this->gw_tax_amount_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_items_base_tax_refunded':
                        $stmt->bindValue($identifier, $this->gw_items_base_tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_items_tax_refunded':
                        $stmt->bindValue($identifier, $this->gw_items_tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_card_base_tax_refunded':
                        $stmt->bindValue($identifier, $this->gw_card_base_tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'gw_card_tax_refunded':
                        $stmt->bindValue($identifier, $this->gw_card_tax_refunded, PDO::PARAM_STR);
                        break;
                    case 'reward_points_balance':
                        $stmt->bindValue($identifier, $this->reward_points_balance, PDO::PARAM_INT);
                        break;
                    case 'base_reward_currency_amount':
                        $stmt->bindValue($identifier, $this->base_reward_currency_amount, PDO::PARAM_STR);
                        break;
                    case 'reward_currency_amount':
                        $stmt->bindValue($identifier, $this->reward_currency_amount, PDO::PARAM_STR);
                        break;
                    case 'base_rwrd_crrncy_amt_invoiced':
                        $stmt->bindValue($identifier, $this->base_rwrd_crrncy_amt_invoiced, PDO::PARAM_STR);
                        break;
                    case 'rwrd_currency_amount_invoiced':
                        $stmt->bindValue($identifier, $this->rwrd_currency_amount_invoiced, PDO::PARAM_STR);
                        break;
                    case 'base_rwrd_crrncy_amnt_refnded':
                        $stmt->bindValue($identifier, $this->base_rwrd_crrncy_amnt_refnded, PDO::PARAM_STR);
                        break;
                    case 'rwrd_crrncy_amnt_refunded':
                        $stmt->bindValue($identifier, $this->rwrd_crrncy_amnt_refunded, PDO::PARAM_STR);
                        break;
                    case 'reward_points_balance_refund':
                        $stmt->bindValue($identifier, $this->reward_points_balance_refund, PDO::PARAM_INT);
                        break;
                    case 'reward_points_balance_refunded':
                        $stmt->bindValue($identifier, $this->reward_points_balance_refunded, PDO::PARAM_INT);
                        break;
                    case 'reward_salesrule_points':
                        $stmt->bindValue($identifier, $this->reward_salesrule_points, PDO::PARAM_INT);
                        break;
                    case 'vendor_username':
                        $stmt->bindValue($identifier, $this->vendor_username, PDO::PARAM_STR);
                        break;
                    case 'vendor_name':
                        $stmt->bindValue($identifier, $this->vendor_name, PDO::PARAM_STR);
                        break;
                    case 'vendor_lastname':
                        $stmt->bindValue($identifier, $this->vendor_lastname, PDO::PARAM_STR);
                        break;
                    case 'vendor_email':
                        $stmt->bindValue($identifier, $this->vendor_email, PDO::PARAM_STR);
                        break;
                    case 'pos_id':
                        $stmt->bindValue($identifier, $this->pos_id, PDO::PARAM_STR);
                        break;
                    case 'pos_office':
                        $stmt->bindValue($identifier, $this->pos_office, PDO::PARAM_STR);
                        break;
                    case 'pos_code':
                        $stmt->bindValue($identifier, $this->pos_code, PDO::PARAM_STR);
                        break;
                    case 'pos_country':
                        $stmt->bindValue($identifier, $this->pos_country, PDO::PARAM_STR);
                        break;
                    case 'pos_city':
                        $stmt->bindValue($identifier, $this->pos_city, PDO::PARAM_STR);
                        break;
                    case 'pos_postal_code':
                        $stmt->bindValue($identifier, $this->pos_postal_code, PDO::PARAM_STR);
                        break;
                    case 'pos_address':
                        $stmt->bindValue($identifier, $this->pos_address, PDO::PARAM_STR);
                        break;
                    case 'pos_phone':
                        $stmt->bindValue($identifier, $this->pos_phone, PDO::PARAM_STR);
                        break;
                    case 'customer_identification':
                        $stmt->bindValue($identifier, $this->customer_identification, PDO::PARAM_STR);
                        break;
                    case 'is_gift':
                        $stmt->bindValue($identifier, $this->is_gift, PDO::PARAM_INT);
                        break;
                    case 'gift_for':
                        $stmt->bindValue($identifier, $this->gift_for, PDO::PARAM_STR);
                        break;
                    case 'gift_email':
                        $stmt->bindValue($identifier, $this->gift_email, PDO::PARAM_STR);
                        break;
                    case 'gift_message':
                        $stmt->bindValue($identifier, $this->gift_message, PDO::PARAM_STR);
                        break;
                    case 'gift_citydept':
                        $stmt->bindValue($identifier, $this->gift_citydept, PDO::PARAM_STR);
                        break;
                    case 'gift_shipping':
                        $stmt->bindValue($identifier, $this->gift_shipping, PDO::PARAM_STR);
                        break;
                    case 'was_payed':
                        $stmt->bindValue($identifier, $this->was_payed, PDO::PARAM_INT);
                        break;
                    case 'gift_for_lastname':
                        $stmt->bindValue($identifier, $this->gift_for_lastname, PDO::PARAM_STR);
                        break;
                    case 'sci_payment_methods':
                        $stmt->bindValue($identifier, $this->sci_payment_methods, PDO::PARAM_STR);
                        break;
                    case 'discount_applied':
                        $stmt->bindValue($identifier, $this->discount_applied, PDO::PARAM_INT);
                        break;
                    case 'rewards_applied':
                        $stmt->bindValue($identifier, $this->rewards_applied, PDO::PARAM_INT);
                        break;
                    case 'stock_before_pol':
                        $stmt->bindValue($identifier, $this->stock_before_pol, PDO::PARAM_INT);
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
        $this->setEntityId($pk);

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

            if ($this->aCustomerEntity !== null) {
                if (!$this->aCustomerEntity->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCustomerEntity->getValidationFailures());
                }
            }

            if ($this->aCoreStore !== null) {
                if (!$this->aCoreStore->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCoreStore->getValidationFailures());
                }
            }


            if (($retval = SalesFlatOrderPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collSalesFlatOrderItems !== null) {
                    foreach ($this->collSalesFlatOrderItems as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCouponMappings !== null) {
                    foreach ($this->collCouponMappings as $referrerFK) {
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
        $pos = SalesFlatOrderPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getEntityId();
                break;
            case 1:
                return $this->getState();
                break;
            case 2:
                return $this->getStatus();
                break;
            case 3:
                return $this->getCouponCode();
                break;
            case 4:
                return $this->getProtectCode();
                break;
            case 5:
                return $this->getShippingDescription();
                break;
            case 6:
                return $this->getIsVirtual();
                break;
            case 7:
                return $this->getStoreId();
                break;
            case 8:
                return $this->getCustomerId();
                break;
            case 9:
                return $this->getBaseDiscountAmount();
                break;
            case 10:
                return $this->getBaseDiscountCanceled();
                break;
            case 11:
                return $this->getBaseDiscountInvoiced();
                break;
            case 12:
                return $this->getBaseDiscountRefunded();
                break;
            case 13:
                return $this->getBaseGrandTotal();
                break;
            case 14:
                return $this->getBaseShippingAmount();
                break;
            case 15:
                return $this->getBaseShippingCanceled();
                break;
            case 16:
                return $this->getBaseShippingInvoiced();
                break;
            case 17:
                return $this->getBaseShippingRefunded();
                break;
            case 18:
                return $this->getBaseShippingTaxAmount();
                break;
            case 19:
                return $this->getBaseShippingTaxRefunded();
                break;
            case 20:
                return $this->getBaseSubtotal();
                break;
            case 21:
                return $this->getBaseSubtotalCanceled();
                break;
            case 22:
                return $this->getBaseSubtotalInvoiced();
                break;
            case 23:
                return $this->getBaseSubtotalRefunded();
                break;
            case 24:
                return $this->getBaseTaxAmount();
                break;
            case 25:
                return $this->getBaseTaxCanceled();
                break;
            case 26:
                return $this->getBaseTaxInvoiced();
                break;
            case 27:
                return $this->getBaseTaxRefunded();
                break;
            case 28:
                return $this->getBaseToGlobalRate();
                break;
            case 29:
                return $this->getBaseToOrderRate();
                break;
            case 30:
                return $this->getBaseTotalCanceled();
                break;
            case 31:
                return $this->getBaseTotalInvoiced();
                break;
            case 32:
                return $this->getBaseTotalInvoicedCost();
                break;
            case 33:
                return $this->getBaseTotalOfflineRefunded();
                break;
            case 34:
                return $this->getBaseTotalOnlineRefunded();
                break;
            case 35:
                return $this->getBaseTotalPaid();
                break;
            case 36:
                return $this->getBaseTotalQtyOrdered();
                break;
            case 37:
                return $this->getBaseTotalRefunded();
                break;
            case 38:
                return $this->getDiscountAmount();
                break;
            case 39:
                return $this->getDiscountCanceled();
                break;
            case 40:
                return $this->getDiscountInvoiced();
                break;
            case 41:
                return $this->getDiscountRefunded();
                break;
            case 42:
                return $this->getGrandTotal();
                break;
            case 43:
                return $this->getShippingAmount();
                break;
            case 44:
                return $this->getShippingCanceled();
                break;
            case 45:
                return $this->getShippingInvoiced();
                break;
            case 46:
                return $this->getShippingRefunded();
                break;
            case 47:
                return $this->getShippingTaxAmount();
                break;
            case 48:
                return $this->getShippingTaxRefunded();
                break;
            case 49:
                return $this->getStoreToBaseRate();
                break;
            case 50:
                return $this->getStoreToOrderRate();
                break;
            case 51:
                return $this->getSubtotal();
                break;
            case 52:
                return $this->getSubtotalCanceled();
                break;
            case 53:
                return $this->getSubtotalInvoiced();
                break;
            case 54:
                return $this->getSubtotalRefunded();
                break;
            case 55:
                return $this->getTaxAmount();
                break;
            case 56:
                return $this->getTaxCanceled();
                break;
            case 57:
                return $this->getTaxInvoiced();
                break;
            case 58:
                return $this->getTaxRefunded();
                break;
            case 59:
                return $this->getTotalCanceled();
                break;
            case 60:
                return $this->getTotalInvoiced();
                break;
            case 61:
                return $this->getTotalOfflineRefunded();
                break;
            case 62:
                return $this->getTotalOnlineRefunded();
                break;
            case 63:
                return $this->getTotalPaid();
                break;
            case 64:
                return $this->getTotalQtyOrdered();
                break;
            case 65:
                return $this->getTotalRefunded();
                break;
            case 66:
                return $this->getCanShipPartially();
                break;
            case 67:
                return $this->getCanShipPartiallyItem();
                break;
            case 68:
                return $this->getCustomerIsGuest();
                break;
            case 69:
                return $this->getCustomerNoteNotify();
                break;
            case 70:
                return $this->getBillingAddressId();
                break;
            case 71:
                return $this->getCustomerGroupId();
                break;
            case 72:
                return $this->getEditIncrement();
                break;
            case 73:
                return $this->getEmailSent();
                break;
            case 74:
                return $this->getForcedShipmentWithInvoice();
                break;
            case 75:
                return $this->getPaymentAuthExpiration();
                break;
            case 76:
                return $this->getQuoteAddressId();
                break;
            case 77:
                return $this->getQuoteId();
                break;
            case 78:
                return $this->getShippingAddressId();
                break;
            case 79:
                return $this->getAdjustmentNegative();
                break;
            case 80:
                return $this->getAdjustmentPositive();
                break;
            case 81:
                return $this->getBaseAdjustmentNegative();
                break;
            case 82:
                return $this->getBaseAdjustmentPositive();
                break;
            case 83:
                return $this->getBaseShippingDiscountAmount();
                break;
            case 84:
                return $this->getBaseSubtotalInclTax();
                break;
            case 85:
                return $this->getBaseTotalDue();
                break;
            case 86:
                return $this->getPaymentAuthorizationAmount();
                break;
            case 87:
                return $this->getShippingDiscountAmount();
                break;
            case 88:
                return $this->getSubtotalInclTax();
                break;
            case 89:
                return $this->getTotalDue();
                break;
            case 90:
                return $this->getWeight();
                break;
            case 91:
                return $this->getCustomerDob();
                break;
            case 92:
                return $this->getIncrementId();
                break;
            case 93:
                return $this->getAppliedRuleIds();
                break;
            case 94:
                return $this->getBaseCurrencyCode();
                break;
            case 95:
                return $this->getCustomerEmail();
                break;
            case 96:
                return $this->getCustomerFirstname();
                break;
            case 97:
                return $this->getCustomerLastname();
                break;
            case 98:
                return $this->getCustomerMiddlename();
                break;
            case 99:
                return $this->getCustomerPrefix();
                break;
            case 100:
                return $this->getCustomerSuffix();
                break;
            case 101:
                return $this->getCustomerTaxvat();
                break;
            case 102:
                return $this->getDiscountDescription();
                break;
            case 103:
                return $this->getExtCustomerId();
                break;
            case 104:
                return $this->getExtOrderId();
                break;
            case 105:
                return $this->getGlobalCurrencyCode();
                break;
            case 106:
                return $this->getHoldBeforeState();
                break;
            case 107:
                return $this->getHoldBeforeStatus();
                break;
            case 108:
                return $this->getOrderCurrencyCode();
                break;
            case 109:
                return $this->getOriginalIncrementId();
                break;
            case 110:
                return $this->getRelationChildId();
                break;
            case 111:
                return $this->getRelationChildRealId();
                break;
            case 112:
                return $this->getRelationParentId();
                break;
            case 113:
                return $this->getRelationParentRealId();
                break;
            case 114:
                return $this->getRemoteIp();
                break;
            case 115:
                return $this->getShippingMethod();
                break;
            case 116:
                return $this->getStoreCurrencyCode();
                break;
            case 117:
                return $this->getStoreName();
                break;
            case 118:
                return $this->getXForwardedFor();
                break;
            case 119:
                return $this->getCustomerNote();
                break;
            case 120:
                return $this->getCreatedAt();
                break;
            case 121:
                return $this->getUpdatedAt();
                break;
            case 122:
                return $this->getTotalItemCount();
                break;
            case 123:
                return $this->getCustomerGender();
                break;
            case 124:
                return $this->getHiddenTaxAmount();
                break;
            case 125:
                return $this->getBaseHiddenTaxAmount();
                break;
            case 126:
                return $this->getShippingHiddenTaxAmount();
                break;
            case 127:
                return $this->getBaseShippingHiddenTaxAmnt();
                break;
            case 128:
                return $this->getHiddenTaxInvoiced();
                break;
            case 129:
                return $this->getBaseHiddenTaxInvoiced();
                break;
            case 130:
                return $this->getHiddenTaxRefunded();
                break;
            case 131:
                return $this->getBaseHiddenTaxRefunded();
                break;
            case 132:
                return $this->getShippingInclTax();
                break;
            case 133:
                return $this->getBaseShippingInclTax();
                break;
            case 134:
                return $this->getCouponRuleName();
                break;
            case 135:
                return $this->getPaypalIpnCustomerNotified();
                break;
            case 136:
                return $this->getGiftMessageId();
                break;
            case 137:
                return $this->getGroupdealsCouponFrom();
                break;
            case 138:
                return $this->getGroupdealsCouponTo();
                break;
            case 139:
                return $this->getGroupdealsCouponToEmail();
                break;
            case 140:
                return $this->getGroupdealsCouponMessage();
                break;
            case 141:
                return $this->getBaseCustomerBalanceAmount();
                break;
            case 142:
                return $this->getCustomerBalanceAmount();
                break;
            case 143:
                return $this->getBaseCustomerBalanceInvoiced();
                break;
            case 144:
                return $this->getCustomerBalanceInvoiced();
                break;
            case 145:
                return $this->getBaseCustomerBalanceRefunded();
                break;
            case 146:
                return $this->getCustomerBalanceRefunded();
                break;
            case 147:
                return $this->getBsCustomerBalTotalRefunded();
                break;
            case 148:
                return $this->getCustomerBalTotalRefunded();
                break;
            case 149:
                return $this->getGiftCards();
                break;
            case 150:
                return $this->getBaseGiftCardsAmount();
                break;
            case 151:
                return $this->getGiftCardsAmount();
                break;
            case 152:
                return $this->getBaseGiftCardsInvoiced();
                break;
            case 153:
                return $this->getGiftCardsInvoiced();
                break;
            case 154:
                return $this->getBaseGiftCardsRefunded();
                break;
            case 155:
                return $this->getGiftCardsRefunded();
                break;
            case 156:
                return $this->getGwId();
                break;
            case 157:
                return $this->getGwAllowGiftReceipt();
                break;
            case 158:
                return $this->getGwAddCard();
                break;
            case 159:
                return $this->getGwBasePrice();
                break;
            case 160:
                return $this->getGwPrice();
                break;
            case 161:
                return $this->getGwItemsBasePrice();
                break;
            case 162:
                return $this->getGwItemsPrice();
                break;
            case 163:
                return $this->getGwCardBasePrice();
                break;
            case 164:
                return $this->getGwCardPrice();
                break;
            case 165:
                return $this->getGwBaseTaxAmount();
                break;
            case 166:
                return $this->getGwTaxAmount();
                break;
            case 167:
                return $this->getGwItemsBaseTaxAmount();
                break;
            case 168:
                return $this->getGwItemsTaxAmount();
                break;
            case 169:
                return $this->getGwCardBaseTaxAmount();
                break;
            case 170:
                return $this->getGwCardTaxAmount();
                break;
            case 171:
                return $this->getGwBasePriceInvoiced();
                break;
            case 172:
                return $this->getGwPriceInvoiced();
                break;
            case 173:
                return $this->getGwItemsBasePriceInvoiced();
                break;
            case 174:
                return $this->getGwItemsPriceInvoiced();
                break;
            case 175:
                return $this->getGwCardBasePriceInvoiced();
                break;
            case 176:
                return $this->getGwCardPriceInvoiced();
                break;
            case 177:
                return $this->getGwBaseTaxAmountInvoiced();
                break;
            case 178:
                return $this->getGwTaxAmountInvoiced();
                break;
            case 179:
                return $this->getGwItemsBaseTaxInvoiced();
                break;
            case 180:
                return $this->getGwItemsTaxInvoiced();
                break;
            case 181:
                return $this->getGwCardBaseTaxInvoiced();
                break;
            case 182:
                return $this->getGwCardTaxInvoiced();
                break;
            case 183:
                return $this->getGwBasePriceRefunded();
                break;
            case 184:
                return $this->getGwPriceRefunded();
                break;
            case 185:
                return $this->getGwItemsBasePriceRefunded();
                break;
            case 186:
                return $this->getGwItemsPriceRefunded();
                break;
            case 187:
                return $this->getGwCardBasePriceRefunded();
                break;
            case 188:
                return $this->getGwCardPriceRefunded();
                break;
            case 189:
                return $this->getGwBaseTaxAmountRefunded();
                break;
            case 190:
                return $this->getGwTaxAmountRefunded();
                break;
            case 191:
                return $this->getGwItemsBaseTaxRefunded();
                break;
            case 192:
                return $this->getGwItemsTaxRefunded();
                break;
            case 193:
                return $this->getGwCardBaseTaxRefunded();
                break;
            case 194:
                return $this->getGwCardTaxRefunded();
                break;
            case 195:
                return $this->getRewardPointsBalance();
                break;
            case 196:
                return $this->getBaseRewardCurrencyAmount();
                break;
            case 197:
                return $this->getRewardCurrencyAmount();
                break;
            case 198:
                return $this->getBaseRwrdCrrncyAmtInvoiced();
                break;
            case 199:
                return $this->getRwrdCurrencyAmountInvoiced();
                break;
            case 200:
                return $this->getBaseRwrdCrrncyAmntRefnded();
                break;
            case 201:
                return $this->getRwrdCrrncyAmntRefunded();
                break;
            case 202:
                return $this->getRewardPointsBalanceRefund();
                break;
            case 203:
                return $this->getRewardPointsBalanceRefunded();
                break;
            case 204:
                return $this->getRewardSalesrulePoints();
                break;
            case 205:
                return $this->getVendorUsername();
                break;
            case 206:
                return $this->getVendorName();
                break;
            case 207:
                return $this->getVendorLastname();
                break;
            case 208:
                return $this->getVendorEmail();
                break;
            case 209:
                return $this->getPosId();
                break;
            case 210:
                return $this->getPosOffice();
                break;
            case 211:
                return $this->getPosCode();
                break;
            case 212:
                return $this->getPosCountry();
                break;
            case 213:
                return $this->getPosCity();
                break;
            case 214:
                return $this->getPosPostalCode();
                break;
            case 215:
                return $this->getPosAddress();
                break;
            case 216:
                return $this->getPosPhone();
                break;
            case 217:
                return $this->getCustomerIdentification();
                break;
            case 218:
                return $this->getIsGift();
                break;
            case 219:
                return $this->getGiftFor();
                break;
            case 220:
                return $this->getGiftEmail();
                break;
            case 221:
                return $this->getGiftMessage();
                break;
            case 222:
                return $this->getGiftCitydept();
                break;
            case 223:
                return $this->getGiftShipping();
                break;
            case 224:
                return $this->getWasPayed();
                break;
            case 225:
                return $this->getGiftForLastname();
                break;
            case 226:
                return $this->getSciPaymentMethods();
                break;
            case 227:
                return $this->getDiscountApplied();
                break;
            case 228:
                return $this->getRewardsApplied();
                break;
            case 229:
                return $this->getStockBeforePol();
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
        if (isset($alreadyDumpedObjects['SalesFlatOrder'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['SalesFlatOrder'][$this->getPrimaryKey()] = true;
        $keys = SalesFlatOrderPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getEntityId(),
            $keys[1] => $this->getState(),
            $keys[2] => $this->getStatus(),
            $keys[3] => $this->getCouponCode(),
            $keys[4] => $this->getProtectCode(),
            $keys[5] => $this->getShippingDescription(),
            $keys[6] => $this->getIsVirtual(),
            $keys[7] => $this->getStoreId(),
            $keys[8] => $this->getCustomerId(),
            $keys[9] => $this->getBaseDiscountAmount(),
            $keys[10] => $this->getBaseDiscountCanceled(),
            $keys[11] => $this->getBaseDiscountInvoiced(),
            $keys[12] => $this->getBaseDiscountRefunded(),
            $keys[13] => $this->getBaseGrandTotal(),
            $keys[14] => $this->getBaseShippingAmount(),
            $keys[15] => $this->getBaseShippingCanceled(),
            $keys[16] => $this->getBaseShippingInvoiced(),
            $keys[17] => $this->getBaseShippingRefunded(),
            $keys[18] => $this->getBaseShippingTaxAmount(),
            $keys[19] => $this->getBaseShippingTaxRefunded(),
            $keys[20] => $this->getBaseSubtotal(),
            $keys[21] => $this->getBaseSubtotalCanceled(),
            $keys[22] => $this->getBaseSubtotalInvoiced(),
            $keys[23] => $this->getBaseSubtotalRefunded(),
            $keys[24] => $this->getBaseTaxAmount(),
            $keys[25] => $this->getBaseTaxCanceled(),
            $keys[26] => $this->getBaseTaxInvoiced(),
            $keys[27] => $this->getBaseTaxRefunded(),
            $keys[28] => $this->getBaseToGlobalRate(),
            $keys[29] => $this->getBaseToOrderRate(),
            $keys[30] => $this->getBaseTotalCanceled(),
            $keys[31] => $this->getBaseTotalInvoiced(),
            $keys[32] => $this->getBaseTotalInvoicedCost(),
            $keys[33] => $this->getBaseTotalOfflineRefunded(),
            $keys[34] => $this->getBaseTotalOnlineRefunded(),
            $keys[35] => $this->getBaseTotalPaid(),
            $keys[36] => $this->getBaseTotalQtyOrdered(),
            $keys[37] => $this->getBaseTotalRefunded(),
            $keys[38] => $this->getDiscountAmount(),
            $keys[39] => $this->getDiscountCanceled(),
            $keys[40] => $this->getDiscountInvoiced(),
            $keys[41] => $this->getDiscountRefunded(),
            $keys[42] => $this->getGrandTotal(),
            $keys[43] => $this->getShippingAmount(),
            $keys[44] => $this->getShippingCanceled(),
            $keys[45] => $this->getShippingInvoiced(),
            $keys[46] => $this->getShippingRefunded(),
            $keys[47] => $this->getShippingTaxAmount(),
            $keys[48] => $this->getShippingTaxRefunded(),
            $keys[49] => $this->getStoreToBaseRate(),
            $keys[50] => $this->getStoreToOrderRate(),
            $keys[51] => $this->getSubtotal(),
            $keys[52] => $this->getSubtotalCanceled(),
            $keys[53] => $this->getSubtotalInvoiced(),
            $keys[54] => $this->getSubtotalRefunded(),
            $keys[55] => $this->getTaxAmount(),
            $keys[56] => $this->getTaxCanceled(),
            $keys[57] => $this->getTaxInvoiced(),
            $keys[58] => $this->getTaxRefunded(),
            $keys[59] => $this->getTotalCanceled(),
            $keys[60] => $this->getTotalInvoiced(),
            $keys[61] => $this->getTotalOfflineRefunded(),
            $keys[62] => $this->getTotalOnlineRefunded(),
            $keys[63] => $this->getTotalPaid(),
            $keys[64] => $this->getTotalQtyOrdered(),
            $keys[65] => $this->getTotalRefunded(),
            $keys[66] => $this->getCanShipPartially(),
            $keys[67] => $this->getCanShipPartiallyItem(),
            $keys[68] => $this->getCustomerIsGuest(),
            $keys[69] => $this->getCustomerNoteNotify(),
            $keys[70] => $this->getBillingAddressId(),
            $keys[71] => $this->getCustomerGroupId(),
            $keys[72] => $this->getEditIncrement(),
            $keys[73] => $this->getEmailSent(),
            $keys[74] => $this->getForcedShipmentWithInvoice(),
            $keys[75] => $this->getPaymentAuthExpiration(),
            $keys[76] => $this->getQuoteAddressId(),
            $keys[77] => $this->getQuoteId(),
            $keys[78] => $this->getShippingAddressId(),
            $keys[79] => $this->getAdjustmentNegative(),
            $keys[80] => $this->getAdjustmentPositive(),
            $keys[81] => $this->getBaseAdjustmentNegative(),
            $keys[82] => $this->getBaseAdjustmentPositive(),
            $keys[83] => $this->getBaseShippingDiscountAmount(),
            $keys[84] => $this->getBaseSubtotalInclTax(),
            $keys[85] => $this->getBaseTotalDue(),
            $keys[86] => $this->getPaymentAuthorizationAmount(),
            $keys[87] => $this->getShippingDiscountAmount(),
            $keys[88] => $this->getSubtotalInclTax(),
            $keys[89] => $this->getTotalDue(),
            $keys[90] => $this->getWeight(),
            $keys[91] => $this->getCustomerDob(),
            $keys[92] => $this->getIncrementId(),
            $keys[93] => $this->getAppliedRuleIds(),
            $keys[94] => $this->getBaseCurrencyCode(),
            $keys[95] => $this->getCustomerEmail(),
            $keys[96] => $this->getCustomerFirstname(),
            $keys[97] => $this->getCustomerLastname(),
            $keys[98] => $this->getCustomerMiddlename(),
            $keys[99] => $this->getCustomerPrefix(),
            $keys[100] => $this->getCustomerSuffix(),
            $keys[101] => $this->getCustomerTaxvat(),
            $keys[102] => $this->getDiscountDescription(),
            $keys[103] => $this->getExtCustomerId(),
            $keys[104] => $this->getExtOrderId(),
            $keys[105] => $this->getGlobalCurrencyCode(),
            $keys[106] => $this->getHoldBeforeState(),
            $keys[107] => $this->getHoldBeforeStatus(),
            $keys[108] => $this->getOrderCurrencyCode(),
            $keys[109] => $this->getOriginalIncrementId(),
            $keys[110] => $this->getRelationChildId(),
            $keys[111] => $this->getRelationChildRealId(),
            $keys[112] => $this->getRelationParentId(),
            $keys[113] => $this->getRelationParentRealId(),
            $keys[114] => $this->getRemoteIp(),
            $keys[115] => $this->getShippingMethod(),
            $keys[116] => $this->getStoreCurrencyCode(),
            $keys[117] => $this->getStoreName(),
            $keys[118] => $this->getXForwardedFor(),
            $keys[119] => $this->getCustomerNote(),
            $keys[120] => $this->getCreatedAt(),
            $keys[121] => $this->getUpdatedAt(),
            $keys[122] => $this->getTotalItemCount(),
            $keys[123] => $this->getCustomerGender(),
            $keys[124] => $this->getHiddenTaxAmount(),
            $keys[125] => $this->getBaseHiddenTaxAmount(),
            $keys[126] => $this->getShippingHiddenTaxAmount(),
            $keys[127] => $this->getBaseShippingHiddenTaxAmnt(),
            $keys[128] => $this->getHiddenTaxInvoiced(),
            $keys[129] => $this->getBaseHiddenTaxInvoiced(),
            $keys[130] => $this->getHiddenTaxRefunded(),
            $keys[131] => $this->getBaseHiddenTaxRefunded(),
            $keys[132] => $this->getShippingInclTax(),
            $keys[133] => $this->getBaseShippingInclTax(),
            $keys[134] => $this->getCouponRuleName(),
            $keys[135] => $this->getPaypalIpnCustomerNotified(),
            $keys[136] => $this->getGiftMessageId(),
            $keys[137] => $this->getGroupdealsCouponFrom(),
            $keys[138] => $this->getGroupdealsCouponTo(),
            $keys[139] => $this->getGroupdealsCouponToEmail(),
            $keys[140] => $this->getGroupdealsCouponMessage(),
            $keys[141] => $this->getBaseCustomerBalanceAmount(),
            $keys[142] => $this->getCustomerBalanceAmount(),
            $keys[143] => $this->getBaseCustomerBalanceInvoiced(),
            $keys[144] => $this->getCustomerBalanceInvoiced(),
            $keys[145] => $this->getBaseCustomerBalanceRefunded(),
            $keys[146] => $this->getCustomerBalanceRefunded(),
            $keys[147] => $this->getBsCustomerBalTotalRefunded(),
            $keys[148] => $this->getCustomerBalTotalRefunded(),
            $keys[149] => $this->getGiftCards(),
            $keys[150] => $this->getBaseGiftCardsAmount(),
            $keys[151] => $this->getGiftCardsAmount(),
            $keys[152] => $this->getBaseGiftCardsInvoiced(),
            $keys[153] => $this->getGiftCardsInvoiced(),
            $keys[154] => $this->getBaseGiftCardsRefunded(),
            $keys[155] => $this->getGiftCardsRefunded(),
            $keys[156] => $this->getGwId(),
            $keys[157] => $this->getGwAllowGiftReceipt(),
            $keys[158] => $this->getGwAddCard(),
            $keys[159] => $this->getGwBasePrice(),
            $keys[160] => $this->getGwPrice(),
            $keys[161] => $this->getGwItemsBasePrice(),
            $keys[162] => $this->getGwItemsPrice(),
            $keys[163] => $this->getGwCardBasePrice(),
            $keys[164] => $this->getGwCardPrice(),
            $keys[165] => $this->getGwBaseTaxAmount(),
            $keys[166] => $this->getGwTaxAmount(),
            $keys[167] => $this->getGwItemsBaseTaxAmount(),
            $keys[168] => $this->getGwItemsTaxAmount(),
            $keys[169] => $this->getGwCardBaseTaxAmount(),
            $keys[170] => $this->getGwCardTaxAmount(),
            $keys[171] => $this->getGwBasePriceInvoiced(),
            $keys[172] => $this->getGwPriceInvoiced(),
            $keys[173] => $this->getGwItemsBasePriceInvoiced(),
            $keys[174] => $this->getGwItemsPriceInvoiced(),
            $keys[175] => $this->getGwCardBasePriceInvoiced(),
            $keys[176] => $this->getGwCardPriceInvoiced(),
            $keys[177] => $this->getGwBaseTaxAmountInvoiced(),
            $keys[178] => $this->getGwTaxAmountInvoiced(),
            $keys[179] => $this->getGwItemsBaseTaxInvoiced(),
            $keys[180] => $this->getGwItemsTaxInvoiced(),
            $keys[181] => $this->getGwCardBaseTaxInvoiced(),
            $keys[182] => $this->getGwCardTaxInvoiced(),
            $keys[183] => $this->getGwBasePriceRefunded(),
            $keys[184] => $this->getGwPriceRefunded(),
            $keys[185] => $this->getGwItemsBasePriceRefunded(),
            $keys[186] => $this->getGwItemsPriceRefunded(),
            $keys[187] => $this->getGwCardBasePriceRefunded(),
            $keys[188] => $this->getGwCardPriceRefunded(),
            $keys[189] => $this->getGwBaseTaxAmountRefunded(),
            $keys[190] => $this->getGwTaxAmountRefunded(),
            $keys[191] => $this->getGwItemsBaseTaxRefunded(),
            $keys[192] => $this->getGwItemsTaxRefunded(),
            $keys[193] => $this->getGwCardBaseTaxRefunded(),
            $keys[194] => $this->getGwCardTaxRefunded(),
            $keys[195] => $this->getRewardPointsBalance(),
            $keys[196] => $this->getBaseRewardCurrencyAmount(),
            $keys[197] => $this->getRewardCurrencyAmount(),
            $keys[198] => $this->getBaseRwrdCrrncyAmtInvoiced(),
            $keys[199] => $this->getRwrdCurrencyAmountInvoiced(),
            $keys[200] => $this->getBaseRwrdCrrncyAmntRefnded(),
            $keys[201] => $this->getRwrdCrrncyAmntRefunded(),
            $keys[202] => $this->getRewardPointsBalanceRefund(),
            $keys[203] => $this->getRewardPointsBalanceRefunded(),
            $keys[204] => $this->getRewardSalesrulePoints(),
            $keys[205] => $this->getVendorUsername(),
            $keys[206] => $this->getVendorName(),
            $keys[207] => $this->getVendorLastname(),
            $keys[208] => $this->getVendorEmail(),
            $keys[209] => $this->getPosId(),
            $keys[210] => $this->getPosOffice(),
            $keys[211] => $this->getPosCode(),
            $keys[212] => $this->getPosCountry(),
            $keys[213] => $this->getPosCity(),
            $keys[214] => $this->getPosPostalCode(),
            $keys[215] => $this->getPosAddress(),
            $keys[216] => $this->getPosPhone(),
            $keys[217] => $this->getCustomerIdentification(),
            $keys[218] => $this->getIsGift(),
            $keys[219] => $this->getGiftFor(),
            $keys[220] => $this->getGiftEmail(),
            $keys[221] => $this->getGiftMessage(),
            $keys[222] => $this->getGiftCitydept(),
            $keys[223] => $this->getGiftShipping(),
            $keys[224] => $this->getWasPayed(),
            $keys[225] => $this->getGiftForLastname(),
            $keys[226] => $this->getSciPaymentMethods(),
            $keys[227] => $this->getDiscountApplied(),
            $keys[228] => $this->getRewardsApplied(),
            $keys[229] => $this->getStockBeforePol(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach($virtualColumns as $key => $virtualColumn)
        {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCustomerEntity) {
                $result['CustomerEntity'] = $this->aCustomerEntity->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCoreStore) {
                $result['CoreStore'] = $this->aCoreStore->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collSalesFlatOrderItems) {
                $result['SalesFlatOrderItems'] = $this->collSalesFlatOrderItems->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCouponMappings) {
                $result['CouponMappings'] = $this->collCouponMappings->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SalesFlatOrderPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setEntityId($value);
                break;
            case 1:
                $this->setState($value);
                break;
            case 2:
                $this->setStatus($value);
                break;
            case 3:
                $this->setCouponCode($value);
                break;
            case 4:
                $this->setProtectCode($value);
                break;
            case 5:
                $this->setShippingDescription($value);
                break;
            case 6:
                $this->setIsVirtual($value);
                break;
            case 7:
                $this->setStoreId($value);
                break;
            case 8:
                $this->setCustomerId($value);
                break;
            case 9:
                $this->setBaseDiscountAmount($value);
                break;
            case 10:
                $this->setBaseDiscountCanceled($value);
                break;
            case 11:
                $this->setBaseDiscountInvoiced($value);
                break;
            case 12:
                $this->setBaseDiscountRefunded($value);
                break;
            case 13:
                $this->setBaseGrandTotal($value);
                break;
            case 14:
                $this->setBaseShippingAmount($value);
                break;
            case 15:
                $this->setBaseShippingCanceled($value);
                break;
            case 16:
                $this->setBaseShippingInvoiced($value);
                break;
            case 17:
                $this->setBaseShippingRefunded($value);
                break;
            case 18:
                $this->setBaseShippingTaxAmount($value);
                break;
            case 19:
                $this->setBaseShippingTaxRefunded($value);
                break;
            case 20:
                $this->setBaseSubtotal($value);
                break;
            case 21:
                $this->setBaseSubtotalCanceled($value);
                break;
            case 22:
                $this->setBaseSubtotalInvoiced($value);
                break;
            case 23:
                $this->setBaseSubtotalRefunded($value);
                break;
            case 24:
                $this->setBaseTaxAmount($value);
                break;
            case 25:
                $this->setBaseTaxCanceled($value);
                break;
            case 26:
                $this->setBaseTaxInvoiced($value);
                break;
            case 27:
                $this->setBaseTaxRefunded($value);
                break;
            case 28:
                $this->setBaseToGlobalRate($value);
                break;
            case 29:
                $this->setBaseToOrderRate($value);
                break;
            case 30:
                $this->setBaseTotalCanceled($value);
                break;
            case 31:
                $this->setBaseTotalInvoiced($value);
                break;
            case 32:
                $this->setBaseTotalInvoicedCost($value);
                break;
            case 33:
                $this->setBaseTotalOfflineRefunded($value);
                break;
            case 34:
                $this->setBaseTotalOnlineRefunded($value);
                break;
            case 35:
                $this->setBaseTotalPaid($value);
                break;
            case 36:
                $this->setBaseTotalQtyOrdered($value);
                break;
            case 37:
                $this->setBaseTotalRefunded($value);
                break;
            case 38:
                $this->setDiscountAmount($value);
                break;
            case 39:
                $this->setDiscountCanceled($value);
                break;
            case 40:
                $this->setDiscountInvoiced($value);
                break;
            case 41:
                $this->setDiscountRefunded($value);
                break;
            case 42:
                $this->setGrandTotal($value);
                break;
            case 43:
                $this->setShippingAmount($value);
                break;
            case 44:
                $this->setShippingCanceled($value);
                break;
            case 45:
                $this->setShippingInvoiced($value);
                break;
            case 46:
                $this->setShippingRefunded($value);
                break;
            case 47:
                $this->setShippingTaxAmount($value);
                break;
            case 48:
                $this->setShippingTaxRefunded($value);
                break;
            case 49:
                $this->setStoreToBaseRate($value);
                break;
            case 50:
                $this->setStoreToOrderRate($value);
                break;
            case 51:
                $this->setSubtotal($value);
                break;
            case 52:
                $this->setSubtotalCanceled($value);
                break;
            case 53:
                $this->setSubtotalInvoiced($value);
                break;
            case 54:
                $this->setSubtotalRefunded($value);
                break;
            case 55:
                $this->setTaxAmount($value);
                break;
            case 56:
                $this->setTaxCanceled($value);
                break;
            case 57:
                $this->setTaxInvoiced($value);
                break;
            case 58:
                $this->setTaxRefunded($value);
                break;
            case 59:
                $this->setTotalCanceled($value);
                break;
            case 60:
                $this->setTotalInvoiced($value);
                break;
            case 61:
                $this->setTotalOfflineRefunded($value);
                break;
            case 62:
                $this->setTotalOnlineRefunded($value);
                break;
            case 63:
                $this->setTotalPaid($value);
                break;
            case 64:
                $this->setTotalQtyOrdered($value);
                break;
            case 65:
                $this->setTotalRefunded($value);
                break;
            case 66:
                $this->setCanShipPartially($value);
                break;
            case 67:
                $this->setCanShipPartiallyItem($value);
                break;
            case 68:
                $this->setCustomerIsGuest($value);
                break;
            case 69:
                $this->setCustomerNoteNotify($value);
                break;
            case 70:
                $this->setBillingAddressId($value);
                break;
            case 71:
                $this->setCustomerGroupId($value);
                break;
            case 72:
                $this->setEditIncrement($value);
                break;
            case 73:
                $this->setEmailSent($value);
                break;
            case 74:
                $this->setForcedShipmentWithInvoice($value);
                break;
            case 75:
                $this->setPaymentAuthExpiration($value);
                break;
            case 76:
                $this->setQuoteAddressId($value);
                break;
            case 77:
                $this->setQuoteId($value);
                break;
            case 78:
                $this->setShippingAddressId($value);
                break;
            case 79:
                $this->setAdjustmentNegative($value);
                break;
            case 80:
                $this->setAdjustmentPositive($value);
                break;
            case 81:
                $this->setBaseAdjustmentNegative($value);
                break;
            case 82:
                $this->setBaseAdjustmentPositive($value);
                break;
            case 83:
                $this->setBaseShippingDiscountAmount($value);
                break;
            case 84:
                $this->setBaseSubtotalInclTax($value);
                break;
            case 85:
                $this->setBaseTotalDue($value);
                break;
            case 86:
                $this->setPaymentAuthorizationAmount($value);
                break;
            case 87:
                $this->setShippingDiscountAmount($value);
                break;
            case 88:
                $this->setSubtotalInclTax($value);
                break;
            case 89:
                $this->setTotalDue($value);
                break;
            case 90:
                $this->setWeight($value);
                break;
            case 91:
                $this->setCustomerDob($value);
                break;
            case 92:
                $this->setIncrementId($value);
                break;
            case 93:
                $this->setAppliedRuleIds($value);
                break;
            case 94:
                $this->setBaseCurrencyCode($value);
                break;
            case 95:
                $this->setCustomerEmail($value);
                break;
            case 96:
                $this->setCustomerFirstname($value);
                break;
            case 97:
                $this->setCustomerLastname($value);
                break;
            case 98:
                $this->setCustomerMiddlename($value);
                break;
            case 99:
                $this->setCustomerPrefix($value);
                break;
            case 100:
                $this->setCustomerSuffix($value);
                break;
            case 101:
                $this->setCustomerTaxvat($value);
                break;
            case 102:
                $this->setDiscountDescription($value);
                break;
            case 103:
                $this->setExtCustomerId($value);
                break;
            case 104:
                $this->setExtOrderId($value);
                break;
            case 105:
                $this->setGlobalCurrencyCode($value);
                break;
            case 106:
                $this->setHoldBeforeState($value);
                break;
            case 107:
                $this->setHoldBeforeStatus($value);
                break;
            case 108:
                $this->setOrderCurrencyCode($value);
                break;
            case 109:
                $this->setOriginalIncrementId($value);
                break;
            case 110:
                $this->setRelationChildId($value);
                break;
            case 111:
                $this->setRelationChildRealId($value);
                break;
            case 112:
                $this->setRelationParentId($value);
                break;
            case 113:
                $this->setRelationParentRealId($value);
                break;
            case 114:
                $this->setRemoteIp($value);
                break;
            case 115:
                $this->setShippingMethod($value);
                break;
            case 116:
                $this->setStoreCurrencyCode($value);
                break;
            case 117:
                $this->setStoreName($value);
                break;
            case 118:
                $this->setXForwardedFor($value);
                break;
            case 119:
                $this->setCustomerNote($value);
                break;
            case 120:
                $this->setCreatedAt($value);
                break;
            case 121:
                $this->setUpdatedAt($value);
                break;
            case 122:
                $this->setTotalItemCount($value);
                break;
            case 123:
                $this->setCustomerGender($value);
                break;
            case 124:
                $this->setHiddenTaxAmount($value);
                break;
            case 125:
                $this->setBaseHiddenTaxAmount($value);
                break;
            case 126:
                $this->setShippingHiddenTaxAmount($value);
                break;
            case 127:
                $this->setBaseShippingHiddenTaxAmnt($value);
                break;
            case 128:
                $this->setHiddenTaxInvoiced($value);
                break;
            case 129:
                $this->setBaseHiddenTaxInvoiced($value);
                break;
            case 130:
                $this->setHiddenTaxRefunded($value);
                break;
            case 131:
                $this->setBaseHiddenTaxRefunded($value);
                break;
            case 132:
                $this->setShippingInclTax($value);
                break;
            case 133:
                $this->setBaseShippingInclTax($value);
                break;
            case 134:
                $this->setCouponRuleName($value);
                break;
            case 135:
                $this->setPaypalIpnCustomerNotified($value);
                break;
            case 136:
                $this->setGiftMessageId($value);
                break;
            case 137:
                $this->setGroupdealsCouponFrom($value);
                break;
            case 138:
                $this->setGroupdealsCouponTo($value);
                break;
            case 139:
                $this->setGroupdealsCouponToEmail($value);
                break;
            case 140:
                $this->setGroupdealsCouponMessage($value);
                break;
            case 141:
                $this->setBaseCustomerBalanceAmount($value);
                break;
            case 142:
                $this->setCustomerBalanceAmount($value);
                break;
            case 143:
                $this->setBaseCustomerBalanceInvoiced($value);
                break;
            case 144:
                $this->setCustomerBalanceInvoiced($value);
                break;
            case 145:
                $this->setBaseCustomerBalanceRefunded($value);
                break;
            case 146:
                $this->setCustomerBalanceRefunded($value);
                break;
            case 147:
                $this->setBsCustomerBalTotalRefunded($value);
                break;
            case 148:
                $this->setCustomerBalTotalRefunded($value);
                break;
            case 149:
                $this->setGiftCards($value);
                break;
            case 150:
                $this->setBaseGiftCardsAmount($value);
                break;
            case 151:
                $this->setGiftCardsAmount($value);
                break;
            case 152:
                $this->setBaseGiftCardsInvoiced($value);
                break;
            case 153:
                $this->setGiftCardsInvoiced($value);
                break;
            case 154:
                $this->setBaseGiftCardsRefunded($value);
                break;
            case 155:
                $this->setGiftCardsRefunded($value);
                break;
            case 156:
                $this->setGwId($value);
                break;
            case 157:
                $this->setGwAllowGiftReceipt($value);
                break;
            case 158:
                $this->setGwAddCard($value);
                break;
            case 159:
                $this->setGwBasePrice($value);
                break;
            case 160:
                $this->setGwPrice($value);
                break;
            case 161:
                $this->setGwItemsBasePrice($value);
                break;
            case 162:
                $this->setGwItemsPrice($value);
                break;
            case 163:
                $this->setGwCardBasePrice($value);
                break;
            case 164:
                $this->setGwCardPrice($value);
                break;
            case 165:
                $this->setGwBaseTaxAmount($value);
                break;
            case 166:
                $this->setGwTaxAmount($value);
                break;
            case 167:
                $this->setGwItemsBaseTaxAmount($value);
                break;
            case 168:
                $this->setGwItemsTaxAmount($value);
                break;
            case 169:
                $this->setGwCardBaseTaxAmount($value);
                break;
            case 170:
                $this->setGwCardTaxAmount($value);
                break;
            case 171:
                $this->setGwBasePriceInvoiced($value);
                break;
            case 172:
                $this->setGwPriceInvoiced($value);
                break;
            case 173:
                $this->setGwItemsBasePriceInvoiced($value);
                break;
            case 174:
                $this->setGwItemsPriceInvoiced($value);
                break;
            case 175:
                $this->setGwCardBasePriceInvoiced($value);
                break;
            case 176:
                $this->setGwCardPriceInvoiced($value);
                break;
            case 177:
                $this->setGwBaseTaxAmountInvoiced($value);
                break;
            case 178:
                $this->setGwTaxAmountInvoiced($value);
                break;
            case 179:
                $this->setGwItemsBaseTaxInvoiced($value);
                break;
            case 180:
                $this->setGwItemsTaxInvoiced($value);
                break;
            case 181:
                $this->setGwCardBaseTaxInvoiced($value);
                break;
            case 182:
                $this->setGwCardTaxInvoiced($value);
                break;
            case 183:
                $this->setGwBasePriceRefunded($value);
                break;
            case 184:
                $this->setGwPriceRefunded($value);
                break;
            case 185:
                $this->setGwItemsBasePriceRefunded($value);
                break;
            case 186:
                $this->setGwItemsPriceRefunded($value);
                break;
            case 187:
                $this->setGwCardBasePriceRefunded($value);
                break;
            case 188:
                $this->setGwCardPriceRefunded($value);
                break;
            case 189:
                $this->setGwBaseTaxAmountRefunded($value);
                break;
            case 190:
                $this->setGwTaxAmountRefunded($value);
                break;
            case 191:
                $this->setGwItemsBaseTaxRefunded($value);
                break;
            case 192:
                $this->setGwItemsTaxRefunded($value);
                break;
            case 193:
                $this->setGwCardBaseTaxRefunded($value);
                break;
            case 194:
                $this->setGwCardTaxRefunded($value);
                break;
            case 195:
                $this->setRewardPointsBalance($value);
                break;
            case 196:
                $this->setBaseRewardCurrencyAmount($value);
                break;
            case 197:
                $this->setRewardCurrencyAmount($value);
                break;
            case 198:
                $this->setBaseRwrdCrrncyAmtInvoiced($value);
                break;
            case 199:
                $this->setRwrdCurrencyAmountInvoiced($value);
                break;
            case 200:
                $this->setBaseRwrdCrrncyAmntRefnded($value);
                break;
            case 201:
                $this->setRwrdCrrncyAmntRefunded($value);
                break;
            case 202:
                $this->setRewardPointsBalanceRefund($value);
                break;
            case 203:
                $this->setRewardPointsBalanceRefunded($value);
                break;
            case 204:
                $this->setRewardSalesrulePoints($value);
                break;
            case 205:
                $this->setVendorUsername($value);
                break;
            case 206:
                $this->setVendorName($value);
                break;
            case 207:
                $this->setVendorLastname($value);
                break;
            case 208:
                $this->setVendorEmail($value);
                break;
            case 209:
                $this->setPosId($value);
                break;
            case 210:
                $this->setPosOffice($value);
                break;
            case 211:
                $this->setPosCode($value);
                break;
            case 212:
                $this->setPosCountry($value);
                break;
            case 213:
                $this->setPosCity($value);
                break;
            case 214:
                $this->setPosPostalCode($value);
                break;
            case 215:
                $this->setPosAddress($value);
                break;
            case 216:
                $this->setPosPhone($value);
                break;
            case 217:
                $this->setCustomerIdentification($value);
                break;
            case 218:
                $this->setIsGift($value);
                break;
            case 219:
                $this->setGiftFor($value);
                break;
            case 220:
                $this->setGiftEmail($value);
                break;
            case 221:
                $this->setGiftMessage($value);
                break;
            case 222:
                $this->setGiftCitydept($value);
                break;
            case 223:
                $this->setGiftShipping($value);
                break;
            case 224:
                $this->setWasPayed($value);
                break;
            case 225:
                $this->setGiftForLastname($value);
                break;
            case 226:
                $this->setSciPaymentMethods($value);
                break;
            case 227:
                $this->setDiscountApplied($value);
                break;
            case 228:
                $this->setRewardsApplied($value);
                break;
            case 229:
                $this->setStockBeforePol($value);
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
        $keys = SalesFlatOrderPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setEntityId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setState($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setStatus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCouponCode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProtectCode($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setShippingDescription($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIsVirtual($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStoreId($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCustomerId($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setBaseDiscountAmount($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setBaseDiscountCanceled($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setBaseDiscountInvoiced($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setBaseDiscountRefunded($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setBaseGrandTotal($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setBaseShippingAmount($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setBaseShippingCanceled($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setBaseShippingInvoiced($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setBaseShippingRefunded($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setBaseShippingTaxAmount($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setBaseShippingTaxRefunded($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setBaseSubtotal($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setBaseSubtotalCanceled($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setBaseSubtotalInvoiced($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setBaseSubtotalRefunded($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setBaseTaxAmount($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setBaseTaxCanceled($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setBaseTaxInvoiced($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setBaseTaxRefunded($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setBaseToGlobalRate($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setBaseToOrderRate($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setBaseTotalCanceled($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setBaseTotalInvoiced($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setBaseTotalInvoicedCost($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setBaseTotalOfflineRefunded($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setBaseTotalOnlineRefunded($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setBaseTotalPaid($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setBaseTotalQtyOrdered($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setBaseTotalRefunded($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDiscountAmount($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDiscountCanceled($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDiscountInvoiced($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDiscountRefunded($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setGrandTotal($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setShippingAmount($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setShippingCanceled($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setShippingInvoiced($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setShippingRefunded($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setShippingTaxAmount($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setShippingTaxRefunded($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setStoreToBaseRate($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setStoreToOrderRate($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setSubtotal($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setSubtotalCanceled($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setSubtotalInvoiced($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setSubtotalRefunded($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setTaxAmount($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setTaxCanceled($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setTaxInvoiced($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setTaxRefunded($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setTotalCanceled($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setTotalInvoiced($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setTotalOfflineRefunded($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setTotalOnlineRefunded($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setTotalPaid($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setTotalQtyOrdered($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setTotalRefunded($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setCanShipPartially($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setCanShipPartiallyItem($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setCustomerIsGuest($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setCustomerNoteNotify($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setBillingAddressId($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setCustomerGroupId($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setEditIncrement($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setEmailSent($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setForcedShipmentWithInvoice($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setPaymentAuthExpiration($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setQuoteAddressId($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setQuoteId($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setShippingAddressId($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setAdjustmentNegative($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setAdjustmentPositive($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setBaseAdjustmentNegative($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setBaseAdjustmentPositive($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setBaseShippingDiscountAmount($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setBaseSubtotalInclTax($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setBaseTotalDue($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setPaymentAuthorizationAmount($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setShippingDiscountAmount($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setSubtotalInclTax($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setTotalDue($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setWeight($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setCustomerDob($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setIncrementId($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setAppliedRuleIds($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setBaseCurrencyCode($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setCustomerEmail($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setCustomerFirstname($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setCustomerLastname($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setCustomerMiddlename($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setCustomerPrefix($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setCustomerSuffix($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setCustomerTaxvat($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setDiscountDescription($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setExtCustomerId($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setExtOrderId($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setGlobalCurrencyCode($arr[$keys[105]]);
        if (array_key_exists($keys[106], $arr)) $this->setHoldBeforeState($arr[$keys[106]]);
        if (array_key_exists($keys[107], $arr)) $this->setHoldBeforeStatus($arr[$keys[107]]);
        if (array_key_exists($keys[108], $arr)) $this->setOrderCurrencyCode($arr[$keys[108]]);
        if (array_key_exists($keys[109], $arr)) $this->setOriginalIncrementId($arr[$keys[109]]);
        if (array_key_exists($keys[110], $arr)) $this->setRelationChildId($arr[$keys[110]]);
        if (array_key_exists($keys[111], $arr)) $this->setRelationChildRealId($arr[$keys[111]]);
        if (array_key_exists($keys[112], $arr)) $this->setRelationParentId($arr[$keys[112]]);
        if (array_key_exists($keys[113], $arr)) $this->setRelationParentRealId($arr[$keys[113]]);
        if (array_key_exists($keys[114], $arr)) $this->setRemoteIp($arr[$keys[114]]);
        if (array_key_exists($keys[115], $arr)) $this->setShippingMethod($arr[$keys[115]]);
        if (array_key_exists($keys[116], $arr)) $this->setStoreCurrencyCode($arr[$keys[116]]);
        if (array_key_exists($keys[117], $arr)) $this->setStoreName($arr[$keys[117]]);
        if (array_key_exists($keys[118], $arr)) $this->setXForwardedFor($arr[$keys[118]]);
        if (array_key_exists($keys[119], $arr)) $this->setCustomerNote($arr[$keys[119]]);
        if (array_key_exists($keys[120], $arr)) $this->setCreatedAt($arr[$keys[120]]);
        if (array_key_exists($keys[121], $arr)) $this->setUpdatedAt($arr[$keys[121]]);
        if (array_key_exists($keys[122], $arr)) $this->setTotalItemCount($arr[$keys[122]]);
        if (array_key_exists($keys[123], $arr)) $this->setCustomerGender($arr[$keys[123]]);
        if (array_key_exists($keys[124], $arr)) $this->setHiddenTaxAmount($arr[$keys[124]]);
        if (array_key_exists($keys[125], $arr)) $this->setBaseHiddenTaxAmount($arr[$keys[125]]);
        if (array_key_exists($keys[126], $arr)) $this->setShippingHiddenTaxAmount($arr[$keys[126]]);
        if (array_key_exists($keys[127], $arr)) $this->setBaseShippingHiddenTaxAmnt($arr[$keys[127]]);
        if (array_key_exists($keys[128], $arr)) $this->setHiddenTaxInvoiced($arr[$keys[128]]);
        if (array_key_exists($keys[129], $arr)) $this->setBaseHiddenTaxInvoiced($arr[$keys[129]]);
        if (array_key_exists($keys[130], $arr)) $this->setHiddenTaxRefunded($arr[$keys[130]]);
        if (array_key_exists($keys[131], $arr)) $this->setBaseHiddenTaxRefunded($arr[$keys[131]]);
        if (array_key_exists($keys[132], $arr)) $this->setShippingInclTax($arr[$keys[132]]);
        if (array_key_exists($keys[133], $arr)) $this->setBaseShippingInclTax($arr[$keys[133]]);
        if (array_key_exists($keys[134], $arr)) $this->setCouponRuleName($arr[$keys[134]]);
        if (array_key_exists($keys[135], $arr)) $this->setPaypalIpnCustomerNotified($arr[$keys[135]]);
        if (array_key_exists($keys[136], $arr)) $this->setGiftMessageId($arr[$keys[136]]);
        if (array_key_exists($keys[137], $arr)) $this->setGroupdealsCouponFrom($arr[$keys[137]]);
        if (array_key_exists($keys[138], $arr)) $this->setGroupdealsCouponTo($arr[$keys[138]]);
        if (array_key_exists($keys[139], $arr)) $this->setGroupdealsCouponToEmail($arr[$keys[139]]);
        if (array_key_exists($keys[140], $arr)) $this->setGroupdealsCouponMessage($arr[$keys[140]]);
        if (array_key_exists($keys[141], $arr)) $this->setBaseCustomerBalanceAmount($arr[$keys[141]]);
        if (array_key_exists($keys[142], $arr)) $this->setCustomerBalanceAmount($arr[$keys[142]]);
        if (array_key_exists($keys[143], $arr)) $this->setBaseCustomerBalanceInvoiced($arr[$keys[143]]);
        if (array_key_exists($keys[144], $arr)) $this->setCustomerBalanceInvoiced($arr[$keys[144]]);
        if (array_key_exists($keys[145], $arr)) $this->setBaseCustomerBalanceRefunded($arr[$keys[145]]);
        if (array_key_exists($keys[146], $arr)) $this->setCustomerBalanceRefunded($arr[$keys[146]]);
        if (array_key_exists($keys[147], $arr)) $this->setBsCustomerBalTotalRefunded($arr[$keys[147]]);
        if (array_key_exists($keys[148], $arr)) $this->setCustomerBalTotalRefunded($arr[$keys[148]]);
        if (array_key_exists($keys[149], $arr)) $this->setGiftCards($arr[$keys[149]]);
        if (array_key_exists($keys[150], $arr)) $this->setBaseGiftCardsAmount($arr[$keys[150]]);
        if (array_key_exists($keys[151], $arr)) $this->setGiftCardsAmount($arr[$keys[151]]);
        if (array_key_exists($keys[152], $arr)) $this->setBaseGiftCardsInvoiced($arr[$keys[152]]);
        if (array_key_exists($keys[153], $arr)) $this->setGiftCardsInvoiced($arr[$keys[153]]);
        if (array_key_exists($keys[154], $arr)) $this->setBaseGiftCardsRefunded($arr[$keys[154]]);
        if (array_key_exists($keys[155], $arr)) $this->setGiftCardsRefunded($arr[$keys[155]]);
        if (array_key_exists($keys[156], $arr)) $this->setGwId($arr[$keys[156]]);
        if (array_key_exists($keys[157], $arr)) $this->setGwAllowGiftReceipt($arr[$keys[157]]);
        if (array_key_exists($keys[158], $arr)) $this->setGwAddCard($arr[$keys[158]]);
        if (array_key_exists($keys[159], $arr)) $this->setGwBasePrice($arr[$keys[159]]);
        if (array_key_exists($keys[160], $arr)) $this->setGwPrice($arr[$keys[160]]);
        if (array_key_exists($keys[161], $arr)) $this->setGwItemsBasePrice($arr[$keys[161]]);
        if (array_key_exists($keys[162], $arr)) $this->setGwItemsPrice($arr[$keys[162]]);
        if (array_key_exists($keys[163], $arr)) $this->setGwCardBasePrice($arr[$keys[163]]);
        if (array_key_exists($keys[164], $arr)) $this->setGwCardPrice($arr[$keys[164]]);
        if (array_key_exists($keys[165], $arr)) $this->setGwBaseTaxAmount($arr[$keys[165]]);
        if (array_key_exists($keys[166], $arr)) $this->setGwTaxAmount($arr[$keys[166]]);
        if (array_key_exists($keys[167], $arr)) $this->setGwItemsBaseTaxAmount($arr[$keys[167]]);
        if (array_key_exists($keys[168], $arr)) $this->setGwItemsTaxAmount($arr[$keys[168]]);
        if (array_key_exists($keys[169], $arr)) $this->setGwCardBaseTaxAmount($arr[$keys[169]]);
        if (array_key_exists($keys[170], $arr)) $this->setGwCardTaxAmount($arr[$keys[170]]);
        if (array_key_exists($keys[171], $arr)) $this->setGwBasePriceInvoiced($arr[$keys[171]]);
        if (array_key_exists($keys[172], $arr)) $this->setGwPriceInvoiced($arr[$keys[172]]);
        if (array_key_exists($keys[173], $arr)) $this->setGwItemsBasePriceInvoiced($arr[$keys[173]]);
        if (array_key_exists($keys[174], $arr)) $this->setGwItemsPriceInvoiced($arr[$keys[174]]);
        if (array_key_exists($keys[175], $arr)) $this->setGwCardBasePriceInvoiced($arr[$keys[175]]);
        if (array_key_exists($keys[176], $arr)) $this->setGwCardPriceInvoiced($arr[$keys[176]]);
        if (array_key_exists($keys[177], $arr)) $this->setGwBaseTaxAmountInvoiced($arr[$keys[177]]);
        if (array_key_exists($keys[178], $arr)) $this->setGwTaxAmountInvoiced($arr[$keys[178]]);
        if (array_key_exists($keys[179], $arr)) $this->setGwItemsBaseTaxInvoiced($arr[$keys[179]]);
        if (array_key_exists($keys[180], $arr)) $this->setGwItemsTaxInvoiced($arr[$keys[180]]);
        if (array_key_exists($keys[181], $arr)) $this->setGwCardBaseTaxInvoiced($arr[$keys[181]]);
        if (array_key_exists($keys[182], $arr)) $this->setGwCardTaxInvoiced($arr[$keys[182]]);
        if (array_key_exists($keys[183], $arr)) $this->setGwBasePriceRefunded($arr[$keys[183]]);
        if (array_key_exists($keys[184], $arr)) $this->setGwPriceRefunded($arr[$keys[184]]);
        if (array_key_exists($keys[185], $arr)) $this->setGwItemsBasePriceRefunded($arr[$keys[185]]);
        if (array_key_exists($keys[186], $arr)) $this->setGwItemsPriceRefunded($arr[$keys[186]]);
        if (array_key_exists($keys[187], $arr)) $this->setGwCardBasePriceRefunded($arr[$keys[187]]);
        if (array_key_exists($keys[188], $arr)) $this->setGwCardPriceRefunded($arr[$keys[188]]);
        if (array_key_exists($keys[189], $arr)) $this->setGwBaseTaxAmountRefunded($arr[$keys[189]]);
        if (array_key_exists($keys[190], $arr)) $this->setGwTaxAmountRefunded($arr[$keys[190]]);
        if (array_key_exists($keys[191], $arr)) $this->setGwItemsBaseTaxRefunded($arr[$keys[191]]);
        if (array_key_exists($keys[192], $arr)) $this->setGwItemsTaxRefunded($arr[$keys[192]]);
        if (array_key_exists($keys[193], $arr)) $this->setGwCardBaseTaxRefunded($arr[$keys[193]]);
        if (array_key_exists($keys[194], $arr)) $this->setGwCardTaxRefunded($arr[$keys[194]]);
        if (array_key_exists($keys[195], $arr)) $this->setRewardPointsBalance($arr[$keys[195]]);
        if (array_key_exists($keys[196], $arr)) $this->setBaseRewardCurrencyAmount($arr[$keys[196]]);
        if (array_key_exists($keys[197], $arr)) $this->setRewardCurrencyAmount($arr[$keys[197]]);
        if (array_key_exists($keys[198], $arr)) $this->setBaseRwrdCrrncyAmtInvoiced($arr[$keys[198]]);
        if (array_key_exists($keys[199], $arr)) $this->setRwrdCurrencyAmountInvoiced($arr[$keys[199]]);
        if (array_key_exists($keys[200], $arr)) $this->setBaseRwrdCrrncyAmntRefnded($arr[$keys[200]]);
        if (array_key_exists($keys[201], $arr)) $this->setRwrdCrrncyAmntRefunded($arr[$keys[201]]);
        if (array_key_exists($keys[202], $arr)) $this->setRewardPointsBalanceRefund($arr[$keys[202]]);
        if (array_key_exists($keys[203], $arr)) $this->setRewardPointsBalanceRefunded($arr[$keys[203]]);
        if (array_key_exists($keys[204], $arr)) $this->setRewardSalesrulePoints($arr[$keys[204]]);
        if (array_key_exists($keys[205], $arr)) $this->setVendorUsername($arr[$keys[205]]);
        if (array_key_exists($keys[206], $arr)) $this->setVendorName($arr[$keys[206]]);
        if (array_key_exists($keys[207], $arr)) $this->setVendorLastname($arr[$keys[207]]);
        if (array_key_exists($keys[208], $arr)) $this->setVendorEmail($arr[$keys[208]]);
        if (array_key_exists($keys[209], $arr)) $this->setPosId($arr[$keys[209]]);
        if (array_key_exists($keys[210], $arr)) $this->setPosOffice($arr[$keys[210]]);
        if (array_key_exists($keys[211], $arr)) $this->setPosCode($arr[$keys[211]]);
        if (array_key_exists($keys[212], $arr)) $this->setPosCountry($arr[$keys[212]]);
        if (array_key_exists($keys[213], $arr)) $this->setPosCity($arr[$keys[213]]);
        if (array_key_exists($keys[214], $arr)) $this->setPosPostalCode($arr[$keys[214]]);
        if (array_key_exists($keys[215], $arr)) $this->setPosAddress($arr[$keys[215]]);
        if (array_key_exists($keys[216], $arr)) $this->setPosPhone($arr[$keys[216]]);
        if (array_key_exists($keys[217], $arr)) $this->setCustomerIdentification($arr[$keys[217]]);
        if (array_key_exists($keys[218], $arr)) $this->setIsGift($arr[$keys[218]]);
        if (array_key_exists($keys[219], $arr)) $this->setGiftFor($arr[$keys[219]]);
        if (array_key_exists($keys[220], $arr)) $this->setGiftEmail($arr[$keys[220]]);
        if (array_key_exists($keys[221], $arr)) $this->setGiftMessage($arr[$keys[221]]);
        if (array_key_exists($keys[222], $arr)) $this->setGiftCitydept($arr[$keys[222]]);
        if (array_key_exists($keys[223], $arr)) $this->setGiftShipping($arr[$keys[223]]);
        if (array_key_exists($keys[224], $arr)) $this->setWasPayed($arr[$keys[224]]);
        if (array_key_exists($keys[225], $arr)) $this->setGiftForLastname($arr[$keys[225]]);
        if (array_key_exists($keys[226], $arr)) $this->setSciPaymentMethods($arr[$keys[226]]);
        if (array_key_exists($keys[227], $arr)) $this->setDiscountApplied($arr[$keys[227]]);
        if (array_key_exists($keys[228], $arr)) $this->setRewardsApplied($arr[$keys[228]]);
        if (array_key_exists($keys[229], $arr)) $this->setStockBeforePol($arr[$keys[229]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SalesFlatOrderPeer::DATABASE_NAME);

        if ($this->isColumnModified(SalesFlatOrderPeer::ENTITY_ID)) $criteria->add(SalesFlatOrderPeer::ENTITY_ID, $this->entity_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::STATE)) $criteria->add(SalesFlatOrderPeer::STATE, $this->state);
        if ($this->isColumnModified(SalesFlatOrderPeer::STATUS)) $criteria->add(SalesFlatOrderPeer::STATUS, $this->status);
        if ($this->isColumnModified(SalesFlatOrderPeer::COUPON_CODE)) $criteria->add(SalesFlatOrderPeer::COUPON_CODE, $this->coupon_code);
        if ($this->isColumnModified(SalesFlatOrderPeer::PROTECT_CODE)) $criteria->add(SalesFlatOrderPeer::PROTECT_CODE, $this->protect_code);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_DESCRIPTION)) $criteria->add(SalesFlatOrderPeer::SHIPPING_DESCRIPTION, $this->shipping_description);
        if ($this->isColumnModified(SalesFlatOrderPeer::IS_VIRTUAL)) $criteria->add(SalesFlatOrderPeer::IS_VIRTUAL, $this->is_virtual);
        if ($this->isColumnModified(SalesFlatOrderPeer::STORE_ID)) $criteria->add(SalesFlatOrderPeer::STORE_ID, $this->store_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_ID)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_ID, $this->customer_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_DISCOUNT_AMOUNT)) $criteria->add(SalesFlatOrderPeer::BASE_DISCOUNT_AMOUNT, $this->base_discount_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_DISCOUNT_CANCELED)) $criteria->add(SalesFlatOrderPeer::BASE_DISCOUNT_CANCELED, $this->base_discount_canceled);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_DISCOUNT_INVOICED)) $criteria->add(SalesFlatOrderPeer::BASE_DISCOUNT_INVOICED, $this->base_discount_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_DISCOUNT_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_DISCOUNT_REFUNDED, $this->base_discount_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_GRAND_TOTAL)) $criteria->add(SalesFlatOrderPeer::BASE_GRAND_TOTAL, $this->base_grand_total);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_AMOUNT)) $criteria->add(SalesFlatOrderPeer::BASE_SHIPPING_AMOUNT, $this->base_shipping_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_CANCELED)) $criteria->add(SalesFlatOrderPeer::BASE_SHIPPING_CANCELED, $this->base_shipping_canceled);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_INVOICED)) $criteria->add(SalesFlatOrderPeer::BASE_SHIPPING_INVOICED, $this->base_shipping_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_SHIPPING_REFUNDED, $this->base_shipping_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::BASE_SHIPPING_TAX_AMOUNT, $this->base_shipping_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_TAX_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_SHIPPING_TAX_REFUNDED, $this->base_shipping_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SUBTOTAL)) $criteria->add(SalesFlatOrderPeer::BASE_SUBTOTAL, $this->base_subtotal);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SUBTOTAL_CANCELED)) $criteria->add(SalesFlatOrderPeer::BASE_SUBTOTAL_CANCELED, $this->base_subtotal_canceled);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SUBTOTAL_INVOICED)) $criteria->add(SalesFlatOrderPeer::BASE_SUBTOTAL_INVOICED, $this->base_subtotal_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SUBTOTAL_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_SUBTOTAL_REFUNDED, $this->base_subtotal_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::BASE_TAX_AMOUNT, $this->base_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TAX_CANCELED)) $criteria->add(SalesFlatOrderPeer::BASE_TAX_CANCELED, $this->base_tax_canceled);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TAX_INVOICED)) $criteria->add(SalesFlatOrderPeer::BASE_TAX_INVOICED, $this->base_tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TAX_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_TAX_REFUNDED, $this->base_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TO_GLOBAL_RATE)) $criteria->add(SalesFlatOrderPeer::BASE_TO_GLOBAL_RATE, $this->base_to_global_rate);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TO_ORDER_RATE)) $criteria->add(SalesFlatOrderPeer::BASE_TO_ORDER_RATE, $this->base_to_order_rate);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_CANCELED)) $criteria->add(SalesFlatOrderPeer::BASE_TOTAL_CANCELED, $this->base_total_canceled);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_INVOICED)) $criteria->add(SalesFlatOrderPeer::BASE_TOTAL_INVOICED, $this->base_total_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_INVOICED_COST)) $criteria->add(SalesFlatOrderPeer::BASE_TOTAL_INVOICED_COST, $this->base_total_invoiced_cost);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_OFFLINE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_TOTAL_OFFLINE_REFUNDED, $this->base_total_offline_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_ONLINE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_TOTAL_ONLINE_REFUNDED, $this->base_total_online_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_PAID)) $criteria->add(SalesFlatOrderPeer::BASE_TOTAL_PAID, $this->base_total_paid);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_QTY_ORDERED)) $criteria->add(SalesFlatOrderPeer::BASE_TOTAL_QTY_ORDERED, $this->base_total_qty_ordered);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_TOTAL_REFUNDED, $this->base_total_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_AMOUNT)) $criteria->add(SalesFlatOrderPeer::DISCOUNT_AMOUNT, $this->discount_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_CANCELED)) $criteria->add(SalesFlatOrderPeer::DISCOUNT_CANCELED, $this->discount_canceled);
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_INVOICED)) $criteria->add(SalesFlatOrderPeer::DISCOUNT_INVOICED, $this->discount_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_REFUNDED)) $criteria->add(SalesFlatOrderPeer::DISCOUNT_REFUNDED, $this->discount_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GRAND_TOTAL)) $criteria->add(SalesFlatOrderPeer::GRAND_TOTAL, $this->grand_total);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_AMOUNT)) $criteria->add(SalesFlatOrderPeer::SHIPPING_AMOUNT, $this->shipping_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_CANCELED)) $criteria->add(SalesFlatOrderPeer::SHIPPING_CANCELED, $this->shipping_canceled);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_INVOICED)) $criteria->add(SalesFlatOrderPeer::SHIPPING_INVOICED, $this->shipping_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_REFUNDED)) $criteria->add(SalesFlatOrderPeer::SHIPPING_REFUNDED, $this->shipping_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::SHIPPING_TAX_AMOUNT, $this->shipping_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_TAX_REFUNDED)) $criteria->add(SalesFlatOrderPeer::SHIPPING_TAX_REFUNDED, $this->shipping_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::STORE_TO_BASE_RATE)) $criteria->add(SalesFlatOrderPeer::STORE_TO_BASE_RATE, $this->store_to_base_rate);
        if ($this->isColumnModified(SalesFlatOrderPeer::STORE_TO_ORDER_RATE)) $criteria->add(SalesFlatOrderPeer::STORE_TO_ORDER_RATE, $this->store_to_order_rate);
        if ($this->isColumnModified(SalesFlatOrderPeer::SUBTOTAL)) $criteria->add(SalesFlatOrderPeer::SUBTOTAL, $this->subtotal);
        if ($this->isColumnModified(SalesFlatOrderPeer::SUBTOTAL_CANCELED)) $criteria->add(SalesFlatOrderPeer::SUBTOTAL_CANCELED, $this->subtotal_canceled);
        if ($this->isColumnModified(SalesFlatOrderPeer::SUBTOTAL_INVOICED)) $criteria->add(SalesFlatOrderPeer::SUBTOTAL_INVOICED, $this->subtotal_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::SUBTOTAL_REFUNDED)) $criteria->add(SalesFlatOrderPeer::SUBTOTAL_REFUNDED, $this->subtotal_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::TAX_AMOUNT, $this->tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::TAX_CANCELED)) $criteria->add(SalesFlatOrderPeer::TAX_CANCELED, $this->tax_canceled);
        if ($this->isColumnModified(SalesFlatOrderPeer::TAX_INVOICED)) $criteria->add(SalesFlatOrderPeer::TAX_INVOICED, $this->tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::TAX_REFUNDED)) $criteria->add(SalesFlatOrderPeer::TAX_REFUNDED, $this->tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_CANCELED)) $criteria->add(SalesFlatOrderPeer::TOTAL_CANCELED, $this->total_canceled);
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_INVOICED)) $criteria->add(SalesFlatOrderPeer::TOTAL_INVOICED, $this->total_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_OFFLINE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::TOTAL_OFFLINE_REFUNDED, $this->total_offline_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_ONLINE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::TOTAL_ONLINE_REFUNDED, $this->total_online_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_PAID)) $criteria->add(SalesFlatOrderPeer::TOTAL_PAID, $this->total_paid);
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_QTY_ORDERED)) $criteria->add(SalesFlatOrderPeer::TOTAL_QTY_ORDERED, $this->total_qty_ordered);
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_REFUNDED)) $criteria->add(SalesFlatOrderPeer::TOTAL_REFUNDED, $this->total_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY)) $criteria->add(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY, $this->can_ship_partially);
        if ($this->isColumnModified(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY_ITEM)) $criteria->add(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY_ITEM, $this->can_ship_partially_item);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_IS_GUEST)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_IS_GUEST, $this->customer_is_guest);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_NOTE_NOTIFY)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_NOTE_NOTIFY, $this->customer_note_notify);
        if ($this->isColumnModified(SalesFlatOrderPeer::BILLING_ADDRESS_ID)) $criteria->add(SalesFlatOrderPeer::BILLING_ADDRESS_ID, $this->billing_address_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_GROUP_ID)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_GROUP_ID, $this->customer_group_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::EDIT_INCREMENT)) $criteria->add(SalesFlatOrderPeer::EDIT_INCREMENT, $this->edit_increment);
        if ($this->isColumnModified(SalesFlatOrderPeer::EMAIL_SENT)) $criteria->add(SalesFlatOrderPeer::EMAIL_SENT, $this->email_sent);
        if ($this->isColumnModified(SalesFlatOrderPeer::FORCED_SHIPMENT_WITH_INVOICE)) $criteria->add(SalesFlatOrderPeer::FORCED_SHIPMENT_WITH_INVOICE, $this->forced_shipment_with_invoice);
        if ($this->isColumnModified(SalesFlatOrderPeer::PAYMENT_AUTH_EXPIRATION)) $criteria->add(SalesFlatOrderPeer::PAYMENT_AUTH_EXPIRATION, $this->payment_auth_expiration);
        if ($this->isColumnModified(SalesFlatOrderPeer::QUOTE_ADDRESS_ID)) $criteria->add(SalesFlatOrderPeer::QUOTE_ADDRESS_ID, $this->quote_address_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::QUOTE_ID)) $criteria->add(SalesFlatOrderPeer::QUOTE_ID, $this->quote_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_ADDRESS_ID)) $criteria->add(SalesFlatOrderPeer::SHIPPING_ADDRESS_ID, $this->shipping_address_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::ADJUSTMENT_NEGATIVE)) $criteria->add(SalesFlatOrderPeer::ADJUSTMENT_NEGATIVE, $this->adjustment_negative);
        if ($this->isColumnModified(SalesFlatOrderPeer::ADJUSTMENT_POSITIVE)) $criteria->add(SalesFlatOrderPeer::ADJUSTMENT_POSITIVE, $this->adjustment_positive);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_ADJUSTMENT_NEGATIVE)) $criteria->add(SalesFlatOrderPeer::BASE_ADJUSTMENT_NEGATIVE, $this->base_adjustment_negative);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_ADJUSTMENT_POSITIVE)) $criteria->add(SalesFlatOrderPeer::BASE_ADJUSTMENT_POSITIVE, $this->base_adjustment_positive);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_DISCOUNT_AMOUNT)) $criteria->add(SalesFlatOrderPeer::BASE_SHIPPING_DISCOUNT_AMOUNT, $this->base_shipping_discount_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SUBTOTAL_INCL_TAX)) $criteria->add(SalesFlatOrderPeer::BASE_SUBTOTAL_INCL_TAX, $this->base_subtotal_incl_tax);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_TOTAL_DUE)) $criteria->add(SalesFlatOrderPeer::BASE_TOTAL_DUE, $this->base_total_due);
        if ($this->isColumnModified(SalesFlatOrderPeer::PAYMENT_AUTHORIZATION_AMOUNT)) $criteria->add(SalesFlatOrderPeer::PAYMENT_AUTHORIZATION_AMOUNT, $this->payment_authorization_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_DISCOUNT_AMOUNT)) $criteria->add(SalesFlatOrderPeer::SHIPPING_DISCOUNT_AMOUNT, $this->shipping_discount_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::SUBTOTAL_INCL_TAX)) $criteria->add(SalesFlatOrderPeer::SUBTOTAL_INCL_TAX, $this->subtotal_incl_tax);
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_DUE)) $criteria->add(SalesFlatOrderPeer::TOTAL_DUE, $this->total_due);
        if ($this->isColumnModified(SalesFlatOrderPeer::WEIGHT)) $criteria->add(SalesFlatOrderPeer::WEIGHT, $this->weight);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_DOB)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_DOB, $this->customer_dob);
        if ($this->isColumnModified(SalesFlatOrderPeer::INCREMENT_ID)) $criteria->add(SalesFlatOrderPeer::INCREMENT_ID, $this->increment_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::APPLIED_RULE_IDS)) $criteria->add(SalesFlatOrderPeer::APPLIED_RULE_IDS, $this->applied_rule_ids);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_CURRENCY_CODE)) $criteria->add(SalesFlatOrderPeer::BASE_CURRENCY_CODE, $this->base_currency_code);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_EMAIL)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_EMAIL, $this->customer_email);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_FIRSTNAME)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_FIRSTNAME, $this->customer_firstname);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_LASTNAME)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_LASTNAME, $this->customer_lastname);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_MIDDLENAME)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_MIDDLENAME, $this->customer_middlename);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_PREFIX)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_PREFIX, $this->customer_prefix);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_SUFFIX)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_SUFFIX, $this->customer_suffix);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_TAXVAT)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_TAXVAT, $this->customer_taxvat);
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_DESCRIPTION)) $criteria->add(SalesFlatOrderPeer::DISCOUNT_DESCRIPTION, $this->discount_description);
        if ($this->isColumnModified(SalesFlatOrderPeer::EXT_CUSTOMER_ID)) $criteria->add(SalesFlatOrderPeer::EXT_CUSTOMER_ID, $this->ext_customer_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::EXT_ORDER_ID)) $criteria->add(SalesFlatOrderPeer::EXT_ORDER_ID, $this->ext_order_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::GLOBAL_CURRENCY_CODE)) $criteria->add(SalesFlatOrderPeer::GLOBAL_CURRENCY_CODE, $this->global_currency_code);
        if ($this->isColumnModified(SalesFlatOrderPeer::HOLD_BEFORE_STATE)) $criteria->add(SalesFlatOrderPeer::HOLD_BEFORE_STATE, $this->hold_before_state);
        if ($this->isColumnModified(SalesFlatOrderPeer::HOLD_BEFORE_STATUS)) $criteria->add(SalesFlatOrderPeer::HOLD_BEFORE_STATUS, $this->hold_before_status);
        if ($this->isColumnModified(SalesFlatOrderPeer::ORDER_CURRENCY_CODE)) $criteria->add(SalesFlatOrderPeer::ORDER_CURRENCY_CODE, $this->order_currency_code);
        if ($this->isColumnModified(SalesFlatOrderPeer::ORIGINAL_INCREMENT_ID)) $criteria->add(SalesFlatOrderPeer::ORIGINAL_INCREMENT_ID, $this->original_increment_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::RELATION_CHILD_ID)) $criteria->add(SalesFlatOrderPeer::RELATION_CHILD_ID, $this->relation_child_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::RELATION_CHILD_REAL_ID)) $criteria->add(SalesFlatOrderPeer::RELATION_CHILD_REAL_ID, $this->relation_child_real_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::RELATION_PARENT_ID)) $criteria->add(SalesFlatOrderPeer::RELATION_PARENT_ID, $this->relation_parent_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::RELATION_PARENT_REAL_ID)) $criteria->add(SalesFlatOrderPeer::RELATION_PARENT_REAL_ID, $this->relation_parent_real_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::REMOTE_IP)) $criteria->add(SalesFlatOrderPeer::REMOTE_IP, $this->remote_ip);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_METHOD)) $criteria->add(SalesFlatOrderPeer::SHIPPING_METHOD, $this->shipping_method);
        if ($this->isColumnModified(SalesFlatOrderPeer::STORE_CURRENCY_CODE)) $criteria->add(SalesFlatOrderPeer::STORE_CURRENCY_CODE, $this->store_currency_code);
        if ($this->isColumnModified(SalesFlatOrderPeer::STORE_NAME)) $criteria->add(SalesFlatOrderPeer::STORE_NAME, $this->store_name);
        if ($this->isColumnModified(SalesFlatOrderPeer::X_FORWARDED_FOR)) $criteria->add(SalesFlatOrderPeer::X_FORWARDED_FOR, $this->x_forwarded_for);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_NOTE)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_NOTE, $this->customer_note);
        if ($this->isColumnModified(SalesFlatOrderPeer::CREATED_AT)) $criteria->add(SalesFlatOrderPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(SalesFlatOrderPeer::UPDATED_AT)) $criteria->add(SalesFlatOrderPeer::UPDATED_AT, $this->updated_at);
        if ($this->isColumnModified(SalesFlatOrderPeer::TOTAL_ITEM_COUNT)) $criteria->add(SalesFlatOrderPeer::TOTAL_ITEM_COUNT, $this->total_item_count);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_GENDER)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_GENDER, $this->customer_gender);
        if ($this->isColumnModified(SalesFlatOrderPeer::HIDDEN_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::HIDDEN_TAX_AMOUNT, $this->hidden_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_HIDDEN_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::BASE_HIDDEN_TAX_AMOUNT, $this->base_hidden_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_HIDDEN_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::SHIPPING_HIDDEN_TAX_AMOUNT, $this->shipping_hidden_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_HIDDEN_TAX_AMNT)) $criteria->add(SalesFlatOrderPeer::BASE_SHIPPING_HIDDEN_TAX_AMNT, $this->base_shipping_hidden_tax_amnt);
        if ($this->isColumnModified(SalesFlatOrderPeer::HIDDEN_TAX_INVOICED)) $criteria->add(SalesFlatOrderPeer::HIDDEN_TAX_INVOICED, $this->hidden_tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_HIDDEN_TAX_INVOICED)) $criteria->add(SalesFlatOrderPeer::BASE_HIDDEN_TAX_INVOICED, $this->base_hidden_tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::HIDDEN_TAX_REFUNDED)) $criteria->add(SalesFlatOrderPeer::HIDDEN_TAX_REFUNDED, $this->hidden_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_HIDDEN_TAX_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_HIDDEN_TAX_REFUNDED, $this->base_hidden_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::SHIPPING_INCL_TAX)) $criteria->add(SalesFlatOrderPeer::SHIPPING_INCL_TAX, $this->shipping_incl_tax);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_SHIPPING_INCL_TAX)) $criteria->add(SalesFlatOrderPeer::BASE_SHIPPING_INCL_TAX, $this->base_shipping_incl_tax);
        if ($this->isColumnModified(SalesFlatOrderPeer::COUPON_RULE_NAME)) $criteria->add(SalesFlatOrderPeer::COUPON_RULE_NAME, $this->coupon_rule_name);
        if ($this->isColumnModified(SalesFlatOrderPeer::PAYPAL_IPN_CUSTOMER_NOTIFIED)) $criteria->add(SalesFlatOrderPeer::PAYPAL_IPN_CUSTOMER_NOTIFIED, $this->paypal_ipn_customer_notified);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_MESSAGE_ID)) $criteria->add(SalesFlatOrderPeer::GIFT_MESSAGE_ID, $this->gift_message_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::GROUPDEALS_COUPON_FROM)) $criteria->add(SalesFlatOrderPeer::GROUPDEALS_COUPON_FROM, $this->groupdeals_coupon_from);
        if ($this->isColumnModified(SalesFlatOrderPeer::GROUPDEALS_COUPON_TO)) $criteria->add(SalesFlatOrderPeer::GROUPDEALS_COUPON_TO, $this->groupdeals_coupon_to);
        if ($this->isColumnModified(SalesFlatOrderPeer::GROUPDEALS_COUPON_TO_EMAIL)) $criteria->add(SalesFlatOrderPeer::GROUPDEALS_COUPON_TO_EMAIL, $this->groupdeals_coupon_to_email);
        if ($this->isColumnModified(SalesFlatOrderPeer::GROUPDEALS_COUPON_MESSAGE)) $criteria->add(SalesFlatOrderPeer::GROUPDEALS_COUPON_MESSAGE, $this->groupdeals_coupon_message);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_AMOUNT)) $criteria->add(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_AMOUNT, $this->base_customer_balance_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_BALANCE_AMOUNT)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_BALANCE_AMOUNT, $this->customer_balance_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_INVOICED)) $criteria->add(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_INVOICED, $this->base_customer_balance_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_BALANCE_INVOICED)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_BALANCE_INVOICED, $this->customer_balance_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_REFUNDED, $this->base_customer_balance_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_BALANCE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_BALANCE_REFUNDED, $this->customer_balance_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::BS_CUSTOMER_BAL_TOTAL_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BS_CUSTOMER_BAL_TOTAL_REFUNDED, $this->bs_customer_bal_total_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_BAL_TOTAL_REFUNDED)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_BAL_TOTAL_REFUNDED, $this->customer_bal_total_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_CARDS)) $criteria->add(SalesFlatOrderPeer::GIFT_CARDS, $this->gift_cards);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_GIFT_CARDS_AMOUNT)) $criteria->add(SalesFlatOrderPeer::BASE_GIFT_CARDS_AMOUNT, $this->base_gift_cards_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_CARDS_AMOUNT)) $criteria->add(SalesFlatOrderPeer::GIFT_CARDS_AMOUNT, $this->gift_cards_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_GIFT_CARDS_INVOICED)) $criteria->add(SalesFlatOrderPeer::BASE_GIFT_CARDS_INVOICED, $this->base_gift_cards_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_CARDS_INVOICED)) $criteria->add(SalesFlatOrderPeer::GIFT_CARDS_INVOICED, $this->gift_cards_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_GIFT_CARDS_REFUNDED)) $criteria->add(SalesFlatOrderPeer::BASE_GIFT_CARDS_REFUNDED, $this->base_gift_cards_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_CARDS_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GIFT_CARDS_REFUNDED, $this->gift_cards_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ID)) $criteria->add(SalesFlatOrderPeer::GW_ID, $this->gw_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ALLOW_GIFT_RECEIPT)) $criteria->add(SalesFlatOrderPeer::GW_ALLOW_GIFT_RECEIPT, $this->gw_allow_gift_receipt);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ADD_CARD)) $criteria->add(SalesFlatOrderPeer::GW_ADD_CARD, $this->gw_add_card);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_PRICE)) $criteria->add(SalesFlatOrderPeer::GW_BASE_PRICE, $this->gw_base_price);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_PRICE)) $criteria->add(SalesFlatOrderPeer::GW_PRICE, $this->gw_price);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE, $this->gw_items_base_price);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_PRICE)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_PRICE, $this->gw_items_price);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_PRICE)) $criteria->add(SalesFlatOrderPeer::GW_CARD_BASE_PRICE, $this->gw_card_base_price);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_PRICE)) $criteria->add(SalesFlatOrderPeer::GW_CARD_PRICE, $this->gw_card_price);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT, $this->gw_base_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::GW_TAX_AMOUNT, $this->gw_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_AMOUNT, $this->gw_items_base_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_TAX_AMOUNT, $this->gw_items_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::GW_CARD_BASE_TAX_AMOUNT, $this->gw_card_base_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_TAX_AMOUNT)) $criteria->add(SalesFlatOrderPeer::GW_CARD_TAX_AMOUNT, $this->gw_card_tax_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_PRICE_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_BASE_PRICE_INVOICED, $this->gw_base_price_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_PRICE_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_PRICE_INVOICED, $this->gw_price_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_INVOICED, $this->gw_items_base_price_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_PRICE_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_PRICE_INVOICED, $this->gw_items_price_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_INVOICED, $this->gw_card_base_price_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_PRICE_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_CARD_PRICE_INVOICED, $this->gw_card_price_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_INVOICED, $this->gw_base_tax_amount_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_TAX_AMOUNT_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_TAX_AMOUNT_INVOICED, $this->gw_tax_amount_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_INVOICED, $this->gw_items_base_tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_TAX_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_TAX_INVOICED, $this->gw_items_tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_TAX_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_CARD_BASE_TAX_INVOICED, $this->gw_card_base_tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_TAX_INVOICED)) $criteria->add(SalesFlatOrderPeer::GW_CARD_TAX_INVOICED, $this->gw_card_tax_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_PRICE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_BASE_PRICE_REFUNDED, $this->gw_base_price_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_PRICE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_PRICE_REFUNDED, $this->gw_price_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_REFUNDED, $this->gw_items_base_price_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_PRICE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_PRICE_REFUNDED, $this->gw_items_price_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_REFUNDED, $this->gw_card_base_price_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_PRICE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_CARD_PRICE_REFUNDED, $this->gw_card_price_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_REFUNDED, $this->gw_base_tax_amount_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_TAX_AMOUNT_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_TAX_AMOUNT_REFUNDED, $this->gw_tax_amount_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_REFUNDED, $this->gw_items_base_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_ITEMS_TAX_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_ITEMS_TAX_REFUNDED, $this->gw_items_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_BASE_TAX_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_CARD_BASE_TAX_REFUNDED, $this->gw_card_base_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::GW_CARD_TAX_REFUNDED)) $criteria->add(SalesFlatOrderPeer::GW_CARD_TAX_REFUNDED, $this->gw_card_tax_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARD_POINTS_BALANCE)) $criteria->add(SalesFlatOrderPeer::REWARD_POINTS_BALANCE, $this->reward_points_balance);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_REWARD_CURRENCY_AMOUNT)) $criteria->add(SalesFlatOrderPeer::BASE_REWARD_CURRENCY_AMOUNT, $this->base_reward_currency_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARD_CURRENCY_AMOUNT)) $criteria->add(SalesFlatOrderPeer::REWARD_CURRENCY_AMOUNT, $this->reward_currency_amount);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMT_INVOICED)) $criteria->add(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMT_INVOICED, $this->base_rwrd_crrncy_amt_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::RWRD_CURRENCY_AMOUNT_INVOICED)) $criteria->add(SalesFlatOrderPeer::RWRD_CURRENCY_AMOUNT_INVOICED, $this->rwrd_currency_amount_invoiced);
        if ($this->isColumnModified(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMNT_REFNDED)) $criteria->add(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMNT_REFNDED, $this->base_rwrd_crrncy_amnt_refnded);
        if ($this->isColumnModified(SalesFlatOrderPeer::RWRD_CRRNCY_AMNT_REFUNDED)) $criteria->add(SalesFlatOrderPeer::RWRD_CRRNCY_AMNT_REFUNDED, $this->rwrd_crrncy_amnt_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUND)) $criteria->add(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUND, $this->reward_points_balance_refund);
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUNDED)) $criteria->add(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUNDED, $this->reward_points_balance_refunded);
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARD_SALESRULE_POINTS)) $criteria->add(SalesFlatOrderPeer::REWARD_SALESRULE_POINTS, $this->reward_salesrule_points);
        if ($this->isColumnModified(SalesFlatOrderPeer::VENDOR_USERNAME)) $criteria->add(SalesFlatOrderPeer::VENDOR_USERNAME, $this->vendor_username);
        if ($this->isColumnModified(SalesFlatOrderPeer::VENDOR_NAME)) $criteria->add(SalesFlatOrderPeer::VENDOR_NAME, $this->vendor_name);
        if ($this->isColumnModified(SalesFlatOrderPeer::VENDOR_LASTNAME)) $criteria->add(SalesFlatOrderPeer::VENDOR_LASTNAME, $this->vendor_lastname);
        if ($this->isColumnModified(SalesFlatOrderPeer::VENDOR_EMAIL)) $criteria->add(SalesFlatOrderPeer::VENDOR_EMAIL, $this->vendor_email);
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_ID)) $criteria->add(SalesFlatOrderPeer::POS_ID, $this->pos_id);
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_OFFICE)) $criteria->add(SalesFlatOrderPeer::POS_OFFICE, $this->pos_office);
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_CODE)) $criteria->add(SalesFlatOrderPeer::POS_CODE, $this->pos_code);
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_COUNTRY)) $criteria->add(SalesFlatOrderPeer::POS_COUNTRY, $this->pos_country);
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_CITY)) $criteria->add(SalesFlatOrderPeer::POS_CITY, $this->pos_city);
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_POSTAL_CODE)) $criteria->add(SalesFlatOrderPeer::POS_POSTAL_CODE, $this->pos_postal_code);
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_ADDRESS)) $criteria->add(SalesFlatOrderPeer::POS_ADDRESS, $this->pos_address);
        if ($this->isColumnModified(SalesFlatOrderPeer::POS_PHONE)) $criteria->add(SalesFlatOrderPeer::POS_PHONE, $this->pos_phone);
        if ($this->isColumnModified(SalesFlatOrderPeer::CUSTOMER_IDENTIFICATION)) $criteria->add(SalesFlatOrderPeer::CUSTOMER_IDENTIFICATION, $this->customer_identification);
        if ($this->isColumnModified(SalesFlatOrderPeer::IS_GIFT)) $criteria->add(SalesFlatOrderPeer::IS_GIFT, $this->is_gift);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_FOR)) $criteria->add(SalesFlatOrderPeer::GIFT_FOR, $this->gift_for);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_EMAIL)) $criteria->add(SalesFlatOrderPeer::GIFT_EMAIL, $this->gift_email);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_MESSAGE)) $criteria->add(SalesFlatOrderPeer::GIFT_MESSAGE, $this->gift_message);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_CITYDEPT)) $criteria->add(SalesFlatOrderPeer::GIFT_CITYDEPT, $this->gift_citydept);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_SHIPPING)) $criteria->add(SalesFlatOrderPeer::GIFT_SHIPPING, $this->gift_shipping);
        if ($this->isColumnModified(SalesFlatOrderPeer::WAS_PAYED)) $criteria->add(SalesFlatOrderPeer::WAS_PAYED, $this->was_payed);
        if ($this->isColumnModified(SalesFlatOrderPeer::GIFT_FOR_LASTNAME)) $criteria->add(SalesFlatOrderPeer::GIFT_FOR_LASTNAME, $this->gift_for_lastname);
        if ($this->isColumnModified(SalesFlatOrderPeer::SCI_PAYMENT_METHODS)) $criteria->add(SalesFlatOrderPeer::SCI_PAYMENT_METHODS, $this->sci_payment_methods);
        if ($this->isColumnModified(SalesFlatOrderPeer::DISCOUNT_APPLIED)) $criteria->add(SalesFlatOrderPeer::DISCOUNT_APPLIED, $this->discount_applied);
        if ($this->isColumnModified(SalesFlatOrderPeer::REWARDS_APPLIED)) $criteria->add(SalesFlatOrderPeer::REWARDS_APPLIED, $this->rewards_applied);
        if ($this->isColumnModified(SalesFlatOrderPeer::STOCK_BEFORE_POL)) $criteria->add(SalesFlatOrderPeer::STOCK_BEFORE_POL, $this->stock_before_pol);

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
        $criteria = new Criteria(SalesFlatOrderPeer::DATABASE_NAME);
        $criteria->add(SalesFlatOrderPeer::ENTITY_ID, $this->entity_id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getEntityId();
    }

    /**
     * Generic method to set the primary key (entity_id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setEntityId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getEntityId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of SalesFlatOrder (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setState($this->getState());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setCouponCode($this->getCouponCode());
        $copyObj->setProtectCode($this->getProtectCode());
        $copyObj->setShippingDescription($this->getShippingDescription());
        $copyObj->setIsVirtual($this->getIsVirtual());
        $copyObj->setStoreId($this->getStoreId());
        $copyObj->setCustomerId($this->getCustomerId());
        $copyObj->setBaseDiscountAmount($this->getBaseDiscountAmount());
        $copyObj->setBaseDiscountCanceled($this->getBaseDiscountCanceled());
        $copyObj->setBaseDiscountInvoiced($this->getBaseDiscountInvoiced());
        $copyObj->setBaseDiscountRefunded($this->getBaseDiscountRefunded());
        $copyObj->setBaseGrandTotal($this->getBaseGrandTotal());
        $copyObj->setBaseShippingAmount($this->getBaseShippingAmount());
        $copyObj->setBaseShippingCanceled($this->getBaseShippingCanceled());
        $copyObj->setBaseShippingInvoiced($this->getBaseShippingInvoiced());
        $copyObj->setBaseShippingRefunded($this->getBaseShippingRefunded());
        $copyObj->setBaseShippingTaxAmount($this->getBaseShippingTaxAmount());
        $copyObj->setBaseShippingTaxRefunded($this->getBaseShippingTaxRefunded());
        $copyObj->setBaseSubtotal($this->getBaseSubtotal());
        $copyObj->setBaseSubtotalCanceled($this->getBaseSubtotalCanceled());
        $copyObj->setBaseSubtotalInvoiced($this->getBaseSubtotalInvoiced());
        $copyObj->setBaseSubtotalRefunded($this->getBaseSubtotalRefunded());
        $copyObj->setBaseTaxAmount($this->getBaseTaxAmount());
        $copyObj->setBaseTaxCanceled($this->getBaseTaxCanceled());
        $copyObj->setBaseTaxInvoiced($this->getBaseTaxInvoiced());
        $copyObj->setBaseTaxRefunded($this->getBaseTaxRefunded());
        $copyObj->setBaseToGlobalRate($this->getBaseToGlobalRate());
        $copyObj->setBaseToOrderRate($this->getBaseToOrderRate());
        $copyObj->setBaseTotalCanceled($this->getBaseTotalCanceled());
        $copyObj->setBaseTotalInvoiced($this->getBaseTotalInvoiced());
        $copyObj->setBaseTotalInvoicedCost($this->getBaseTotalInvoicedCost());
        $copyObj->setBaseTotalOfflineRefunded($this->getBaseTotalOfflineRefunded());
        $copyObj->setBaseTotalOnlineRefunded($this->getBaseTotalOnlineRefunded());
        $copyObj->setBaseTotalPaid($this->getBaseTotalPaid());
        $copyObj->setBaseTotalQtyOrdered($this->getBaseTotalQtyOrdered());
        $copyObj->setBaseTotalRefunded($this->getBaseTotalRefunded());
        $copyObj->setDiscountAmount($this->getDiscountAmount());
        $copyObj->setDiscountCanceled($this->getDiscountCanceled());
        $copyObj->setDiscountInvoiced($this->getDiscountInvoiced());
        $copyObj->setDiscountRefunded($this->getDiscountRefunded());
        $copyObj->setGrandTotal($this->getGrandTotal());
        $copyObj->setShippingAmount($this->getShippingAmount());
        $copyObj->setShippingCanceled($this->getShippingCanceled());
        $copyObj->setShippingInvoiced($this->getShippingInvoiced());
        $copyObj->setShippingRefunded($this->getShippingRefunded());
        $copyObj->setShippingTaxAmount($this->getShippingTaxAmount());
        $copyObj->setShippingTaxRefunded($this->getShippingTaxRefunded());
        $copyObj->setStoreToBaseRate($this->getStoreToBaseRate());
        $copyObj->setStoreToOrderRate($this->getStoreToOrderRate());
        $copyObj->setSubtotal($this->getSubtotal());
        $copyObj->setSubtotalCanceled($this->getSubtotalCanceled());
        $copyObj->setSubtotalInvoiced($this->getSubtotalInvoiced());
        $copyObj->setSubtotalRefunded($this->getSubtotalRefunded());
        $copyObj->setTaxAmount($this->getTaxAmount());
        $copyObj->setTaxCanceled($this->getTaxCanceled());
        $copyObj->setTaxInvoiced($this->getTaxInvoiced());
        $copyObj->setTaxRefunded($this->getTaxRefunded());
        $copyObj->setTotalCanceled($this->getTotalCanceled());
        $copyObj->setTotalInvoiced($this->getTotalInvoiced());
        $copyObj->setTotalOfflineRefunded($this->getTotalOfflineRefunded());
        $copyObj->setTotalOnlineRefunded($this->getTotalOnlineRefunded());
        $copyObj->setTotalPaid($this->getTotalPaid());
        $copyObj->setTotalQtyOrdered($this->getTotalQtyOrdered());
        $copyObj->setTotalRefunded($this->getTotalRefunded());
        $copyObj->setCanShipPartially($this->getCanShipPartially());
        $copyObj->setCanShipPartiallyItem($this->getCanShipPartiallyItem());
        $copyObj->setCustomerIsGuest($this->getCustomerIsGuest());
        $copyObj->setCustomerNoteNotify($this->getCustomerNoteNotify());
        $copyObj->setBillingAddressId($this->getBillingAddressId());
        $copyObj->setCustomerGroupId($this->getCustomerGroupId());
        $copyObj->setEditIncrement($this->getEditIncrement());
        $copyObj->setEmailSent($this->getEmailSent());
        $copyObj->setForcedShipmentWithInvoice($this->getForcedShipmentWithInvoice());
        $copyObj->setPaymentAuthExpiration($this->getPaymentAuthExpiration());
        $copyObj->setQuoteAddressId($this->getQuoteAddressId());
        $copyObj->setQuoteId($this->getQuoteId());
        $copyObj->setShippingAddressId($this->getShippingAddressId());
        $copyObj->setAdjustmentNegative($this->getAdjustmentNegative());
        $copyObj->setAdjustmentPositive($this->getAdjustmentPositive());
        $copyObj->setBaseAdjustmentNegative($this->getBaseAdjustmentNegative());
        $copyObj->setBaseAdjustmentPositive($this->getBaseAdjustmentPositive());
        $copyObj->setBaseShippingDiscountAmount($this->getBaseShippingDiscountAmount());
        $copyObj->setBaseSubtotalInclTax($this->getBaseSubtotalInclTax());
        $copyObj->setBaseTotalDue($this->getBaseTotalDue());
        $copyObj->setPaymentAuthorizationAmount($this->getPaymentAuthorizationAmount());
        $copyObj->setShippingDiscountAmount($this->getShippingDiscountAmount());
        $copyObj->setSubtotalInclTax($this->getSubtotalInclTax());
        $copyObj->setTotalDue($this->getTotalDue());
        $copyObj->setWeight($this->getWeight());
        $copyObj->setCustomerDob($this->getCustomerDob());
        $copyObj->setIncrementId($this->getIncrementId());
        $copyObj->setAppliedRuleIds($this->getAppliedRuleIds());
        $copyObj->setBaseCurrencyCode($this->getBaseCurrencyCode());
        $copyObj->setCustomerEmail($this->getCustomerEmail());
        $copyObj->setCustomerFirstname($this->getCustomerFirstname());
        $copyObj->setCustomerLastname($this->getCustomerLastname());
        $copyObj->setCustomerMiddlename($this->getCustomerMiddlename());
        $copyObj->setCustomerPrefix($this->getCustomerPrefix());
        $copyObj->setCustomerSuffix($this->getCustomerSuffix());
        $copyObj->setCustomerTaxvat($this->getCustomerTaxvat());
        $copyObj->setDiscountDescription($this->getDiscountDescription());
        $copyObj->setExtCustomerId($this->getExtCustomerId());
        $copyObj->setExtOrderId($this->getExtOrderId());
        $copyObj->setGlobalCurrencyCode($this->getGlobalCurrencyCode());
        $copyObj->setHoldBeforeState($this->getHoldBeforeState());
        $copyObj->setHoldBeforeStatus($this->getHoldBeforeStatus());
        $copyObj->setOrderCurrencyCode($this->getOrderCurrencyCode());
        $copyObj->setOriginalIncrementId($this->getOriginalIncrementId());
        $copyObj->setRelationChildId($this->getRelationChildId());
        $copyObj->setRelationChildRealId($this->getRelationChildRealId());
        $copyObj->setRelationParentId($this->getRelationParentId());
        $copyObj->setRelationParentRealId($this->getRelationParentRealId());
        $copyObj->setRemoteIp($this->getRemoteIp());
        $copyObj->setShippingMethod($this->getShippingMethod());
        $copyObj->setStoreCurrencyCode($this->getStoreCurrencyCode());
        $copyObj->setStoreName($this->getStoreName());
        $copyObj->setXForwardedFor($this->getXForwardedFor());
        $copyObj->setCustomerNote($this->getCustomerNote());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());
        $copyObj->setTotalItemCount($this->getTotalItemCount());
        $copyObj->setCustomerGender($this->getCustomerGender());
        $copyObj->setHiddenTaxAmount($this->getHiddenTaxAmount());
        $copyObj->setBaseHiddenTaxAmount($this->getBaseHiddenTaxAmount());
        $copyObj->setShippingHiddenTaxAmount($this->getShippingHiddenTaxAmount());
        $copyObj->setBaseShippingHiddenTaxAmnt($this->getBaseShippingHiddenTaxAmnt());
        $copyObj->setHiddenTaxInvoiced($this->getHiddenTaxInvoiced());
        $copyObj->setBaseHiddenTaxInvoiced($this->getBaseHiddenTaxInvoiced());
        $copyObj->setHiddenTaxRefunded($this->getHiddenTaxRefunded());
        $copyObj->setBaseHiddenTaxRefunded($this->getBaseHiddenTaxRefunded());
        $copyObj->setShippingInclTax($this->getShippingInclTax());
        $copyObj->setBaseShippingInclTax($this->getBaseShippingInclTax());
        $copyObj->setCouponRuleName($this->getCouponRuleName());
        $copyObj->setPaypalIpnCustomerNotified($this->getPaypalIpnCustomerNotified());
        $copyObj->setGiftMessageId($this->getGiftMessageId());
        $copyObj->setGroupdealsCouponFrom($this->getGroupdealsCouponFrom());
        $copyObj->setGroupdealsCouponTo($this->getGroupdealsCouponTo());
        $copyObj->setGroupdealsCouponToEmail($this->getGroupdealsCouponToEmail());
        $copyObj->setGroupdealsCouponMessage($this->getGroupdealsCouponMessage());
        $copyObj->setBaseCustomerBalanceAmount($this->getBaseCustomerBalanceAmount());
        $copyObj->setCustomerBalanceAmount($this->getCustomerBalanceAmount());
        $copyObj->setBaseCustomerBalanceInvoiced($this->getBaseCustomerBalanceInvoiced());
        $copyObj->setCustomerBalanceInvoiced($this->getCustomerBalanceInvoiced());
        $copyObj->setBaseCustomerBalanceRefunded($this->getBaseCustomerBalanceRefunded());
        $copyObj->setCustomerBalanceRefunded($this->getCustomerBalanceRefunded());
        $copyObj->setBsCustomerBalTotalRefunded($this->getBsCustomerBalTotalRefunded());
        $copyObj->setCustomerBalTotalRefunded($this->getCustomerBalTotalRefunded());
        $copyObj->setGiftCards($this->getGiftCards());
        $copyObj->setBaseGiftCardsAmount($this->getBaseGiftCardsAmount());
        $copyObj->setGiftCardsAmount($this->getGiftCardsAmount());
        $copyObj->setBaseGiftCardsInvoiced($this->getBaseGiftCardsInvoiced());
        $copyObj->setGiftCardsInvoiced($this->getGiftCardsInvoiced());
        $copyObj->setBaseGiftCardsRefunded($this->getBaseGiftCardsRefunded());
        $copyObj->setGiftCardsRefunded($this->getGiftCardsRefunded());
        $copyObj->setGwId($this->getGwId());
        $copyObj->setGwAllowGiftReceipt($this->getGwAllowGiftReceipt());
        $copyObj->setGwAddCard($this->getGwAddCard());
        $copyObj->setGwBasePrice($this->getGwBasePrice());
        $copyObj->setGwPrice($this->getGwPrice());
        $copyObj->setGwItemsBasePrice($this->getGwItemsBasePrice());
        $copyObj->setGwItemsPrice($this->getGwItemsPrice());
        $copyObj->setGwCardBasePrice($this->getGwCardBasePrice());
        $copyObj->setGwCardPrice($this->getGwCardPrice());
        $copyObj->setGwBaseTaxAmount($this->getGwBaseTaxAmount());
        $copyObj->setGwTaxAmount($this->getGwTaxAmount());
        $copyObj->setGwItemsBaseTaxAmount($this->getGwItemsBaseTaxAmount());
        $copyObj->setGwItemsTaxAmount($this->getGwItemsTaxAmount());
        $copyObj->setGwCardBaseTaxAmount($this->getGwCardBaseTaxAmount());
        $copyObj->setGwCardTaxAmount($this->getGwCardTaxAmount());
        $copyObj->setGwBasePriceInvoiced($this->getGwBasePriceInvoiced());
        $copyObj->setGwPriceInvoiced($this->getGwPriceInvoiced());
        $copyObj->setGwItemsBasePriceInvoiced($this->getGwItemsBasePriceInvoiced());
        $copyObj->setGwItemsPriceInvoiced($this->getGwItemsPriceInvoiced());
        $copyObj->setGwCardBasePriceInvoiced($this->getGwCardBasePriceInvoiced());
        $copyObj->setGwCardPriceInvoiced($this->getGwCardPriceInvoiced());
        $copyObj->setGwBaseTaxAmountInvoiced($this->getGwBaseTaxAmountInvoiced());
        $copyObj->setGwTaxAmountInvoiced($this->getGwTaxAmountInvoiced());
        $copyObj->setGwItemsBaseTaxInvoiced($this->getGwItemsBaseTaxInvoiced());
        $copyObj->setGwItemsTaxInvoiced($this->getGwItemsTaxInvoiced());
        $copyObj->setGwCardBaseTaxInvoiced($this->getGwCardBaseTaxInvoiced());
        $copyObj->setGwCardTaxInvoiced($this->getGwCardTaxInvoiced());
        $copyObj->setGwBasePriceRefunded($this->getGwBasePriceRefunded());
        $copyObj->setGwPriceRefunded($this->getGwPriceRefunded());
        $copyObj->setGwItemsBasePriceRefunded($this->getGwItemsBasePriceRefunded());
        $copyObj->setGwItemsPriceRefunded($this->getGwItemsPriceRefunded());
        $copyObj->setGwCardBasePriceRefunded($this->getGwCardBasePriceRefunded());
        $copyObj->setGwCardPriceRefunded($this->getGwCardPriceRefunded());
        $copyObj->setGwBaseTaxAmountRefunded($this->getGwBaseTaxAmountRefunded());
        $copyObj->setGwTaxAmountRefunded($this->getGwTaxAmountRefunded());
        $copyObj->setGwItemsBaseTaxRefunded($this->getGwItemsBaseTaxRefunded());
        $copyObj->setGwItemsTaxRefunded($this->getGwItemsTaxRefunded());
        $copyObj->setGwCardBaseTaxRefunded($this->getGwCardBaseTaxRefunded());
        $copyObj->setGwCardTaxRefunded($this->getGwCardTaxRefunded());
        $copyObj->setRewardPointsBalance($this->getRewardPointsBalance());
        $copyObj->setBaseRewardCurrencyAmount($this->getBaseRewardCurrencyAmount());
        $copyObj->setRewardCurrencyAmount($this->getRewardCurrencyAmount());
        $copyObj->setBaseRwrdCrrncyAmtInvoiced($this->getBaseRwrdCrrncyAmtInvoiced());
        $copyObj->setRwrdCurrencyAmountInvoiced($this->getRwrdCurrencyAmountInvoiced());
        $copyObj->setBaseRwrdCrrncyAmntRefnded($this->getBaseRwrdCrrncyAmntRefnded());
        $copyObj->setRwrdCrrncyAmntRefunded($this->getRwrdCrrncyAmntRefunded());
        $copyObj->setRewardPointsBalanceRefund($this->getRewardPointsBalanceRefund());
        $copyObj->setRewardPointsBalanceRefunded($this->getRewardPointsBalanceRefunded());
        $copyObj->setRewardSalesrulePoints($this->getRewardSalesrulePoints());
        $copyObj->setVendorUsername($this->getVendorUsername());
        $copyObj->setVendorName($this->getVendorName());
        $copyObj->setVendorLastname($this->getVendorLastname());
        $copyObj->setVendorEmail($this->getVendorEmail());
        $copyObj->setPosId($this->getPosId());
        $copyObj->setPosOffice($this->getPosOffice());
        $copyObj->setPosCode($this->getPosCode());
        $copyObj->setPosCountry($this->getPosCountry());
        $copyObj->setPosCity($this->getPosCity());
        $copyObj->setPosPostalCode($this->getPosPostalCode());
        $copyObj->setPosAddress($this->getPosAddress());
        $copyObj->setPosPhone($this->getPosPhone());
        $copyObj->setCustomerIdentification($this->getCustomerIdentification());
        $copyObj->setIsGift($this->getIsGift());
        $copyObj->setGiftFor($this->getGiftFor());
        $copyObj->setGiftEmail($this->getGiftEmail());
        $copyObj->setGiftMessage($this->getGiftMessage());
        $copyObj->setGiftCitydept($this->getGiftCitydept());
        $copyObj->setGiftShipping($this->getGiftShipping());
        $copyObj->setWasPayed($this->getWasPayed());
        $copyObj->setGiftForLastname($this->getGiftForLastname());
        $copyObj->setSciPaymentMethods($this->getSciPaymentMethods());
        $copyObj->setDiscountApplied($this->getDiscountApplied());
        $copyObj->setRewardsApplied($this->getRewardsApplied());
        $copyObj->setStockBeforePol($this->getStockBeforePol());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getSalesFlatOrderItems() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSalesFlatOrderItem($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCouponMappings() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCouponMapping($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setEntityId(NULL); // this is a auto-increment column, so set to default value
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
     * @return SalesFlatOrder Clone of current object.
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
     * @return SalesFlatOrderPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SalesFlatOrderPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CustomerEntity object.
     *
     * @param                  CustomerEntity $v
     * @return SalesFlatOrder The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomerEntity(CustomerEntity $v = null)
    {
        if ($v === null) {
            $this->setCustomerId(NULL);
        } else {
            $this->setCustomerId($v->getEntityId());
        }

        $this->aCustomerEntity = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CustomerEntity object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesFlatOrder($this);
        }


        return $this;
    }


    /**
     * Get the associated CustomerEntity object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CustomerEntity The associated CustomerEntity object.
     * @throws PropelException
     */
    public function getCustomerEntity(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCustomerEntity === null && ($this->customer_id !== null) && $doQuery) {
            $this->aCustomerEntity = CustomerEntityQuery::create()->findPk($this->customer_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomerEntity->addSalesFlatOrders($this);
             */
        }

        return $this->aCustomerEntity;
    }

    /**
     * Declares an association between this object and a CoreStore object.
     *
     * @param                  CoreStore $v
     * @return SalesFlatOrder The current object (for fluent API support)
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
            $v->addSalesFlatOrder($this);
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
                $this->aCoreStore->addSalesFlatOrders($this);
             */
        }

        return $this->aCoreStore;
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
        if ('SalesFlatOrderItem' == $relationName) {
            $this->initSalesFlatOrderItems();
        }
        if ('CouponMapping' == $relationName) {
            $this->initCouponMappings();
        }
    }

    /**
     * Clears out the collSalesFlatOrderItems collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return SalesFlatOrder The current object (for fluent API support)
     * @see        addSalesFlatOrderItems()
     */
    public function clearSalesFlatOrderItems()
    {
        $this->collSalesFlatOrderItems = null; // important to set this to null since that means it is uninitialized
        $this->collSalesFlatOrderItemsPartial = null;

        return $this;
    }

    /**
     * reset is the collSalesFlatOrderItems collection loaded partially
     *
     * @return void
     */
    public function resetPartialSalesFlatOrderItems($v = true)
    {
        $this->collSalesFlatOrderItemsPartial = $v;
    }

    /**
     * Initializes the collSalesFlatOrderItems collection.
     *
     * By default this just sets the collSalesFlatOrderItems collection to an empty array (like clearcollSalesFlatOrderItems());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSalesFlatOrderItems($overrideExisting = true)
    {
        if (null !== $this->collSalesFlatOrderItems && !$overrideExisting) {
            return;
        }
        $this->collSalesFlatOrderItems = new PropelObjectCollection();
        $this->collSalesFlatOrderItems->setModel('SalesFlatOrderItem');
    }

    /**
     * Gets an array of SalesFlatOrderItem objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this SalesFlatOrder is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|SalesFlatOrderItem[] List of SalesFlatOrderItem objects
     * @throws PropelException
     */
    public function getSalesFlatOrderItems($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSalesFlatOrderItemsPartial && !$this->isNew();
        if (null === $this->collSalesFlatOrderItems || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSalesFlatOrderItems) {
                // return empty collection
                $this->initSalesFlatOrderItems();
            } else {
                $collSalesFlatOrderItems = SalesFlatOrderItemQuery::create(null, $criteria)
                    ->filterBySalesFlatOrder($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSalesFlatOrderItemsPartial && count($collSalesFlatOrderItems)) {
                      $this->initSalesFlatOrderItems(false);

                      foreach ($collSalesFlatOrderItems as $obj) {
                        if (false == $this->collSalesFlatOrderItems->contains($obj)) {
                          $this->collSalesFlatOrderItems->append($obj);
                        }
                      }

                      $this->collSalesFlatOrderItemsPartial = true;
                    }

                    $collSalesFlatOrderItems->getInternalIterator()->rewind();

                    return $collSalesFlatOrderItems;
                }

                if ($partial && $this->collSalesFlatOrderItems) {
                    foreach ($this->collSalesFlatOrderItems as $obj) {
                        if ($obj->isNew()) {
                            $collSalesFlatOrderItems[] = $obj;
                        }
                    }
                }

                $this->collSalesFlatOrderItems = $collSalesFlatOrderItems;
                $this->collSalesFlatOrderItemsPartial = false;
            }
        }

        return $this->collSalesFlatOrderItems;
    }

    /**
     * Sets a collection of SalesFlatOrderItem objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $salesFlatOrderItems A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setSalesFlatOrderItems(PropelCollection $salesFlatOrderItems, PropelPDO $con = null)
    {
        $salesFlatOrderItemsToDelete = $this->getSalesFlatOrderItems(new Criteria(), $con)->diff($salesFlatOrderItems);


        $this->salesFlatOrderItemsScheduledForDeletion = $salesFlatOrderItemsToDelete;

        foreach ($salesFlatOrderItemsToDelete as $salesFlatOrderItemRemoved) {
            $salesFlatOrderItemRemoved->setSalesFlatOrder(null);
        }

        $this->collSalesFlatOrderItems = null;
        foreach ($salesFlatOrderItems as $salesFlatOrderItem) {
            $this->addSalesFlatOrderItem($salesFlatOrderItem);
        }

        $this->collSalesFlatOrderItems = $salesFlatOrderItems;
        $this->collSalesFlatOrderItemsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SalesFlatOrderItem objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related SalesFlatOrderItem objects.
     * @throws PropelException
     */
    public function countSalesFlatOrderItems(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSalesFlatOrderItemsPartial && !$this->isNew();
        if (null === $this->collSalesFlatOrderItems || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSalesFlatOrderItems) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSalesFlatOrderItems());
            }
            $query = SalesFlatOrderItemQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySalesFlatOrder($this)
                ->count($con);
        }

        return count($this->collSalesFlatOrderItems);
    }

    /**
     * Method called to associate a SalesFlatOrderItem object to this object
     * through the SalesFlatOrderItem foreign key attribute.
     *
     * @param    SalesFlatOrderItem $l SalesFlatOrderItem
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function addSalesFlatOrderItem(SalesFlatOrderItem $l)
    {
        if ($this->collSalesFlatOrderItems === null) {
            $this->initSalesFlatOrderItems();
            $this->collSalesFlatOrderItemsPartial = true;
        }

        if (!in_array($l, $this->collSalesFlatOrderItems->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSalesFlatOrderItem($l);

            if ($this->salesFlatOrderItemsScheduledForDeletion and $this->salesFlatOrderItemsScheduledForDeletion->contains($l)) {
                $this->salesFlatOrderItemsScheduledForDeletion->remove($this->salesFlatOrderItemsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	SalesFlatOrderItem $salesFlatOrderItem The salesFlatOrderItem object to add.
     */
    protected function doAddSalesFlatOrderItem($salesFlatOrderItem)
    {
        $this->collSalesFlatOrderItems[]= $salesFlatOrderItem;
        $salesFlatOrderItem->setSalesFlatOrder($this);
    }

    /**
     * @param	SalesFlatOrderItem $salesFlatOrderItem The salesFlatOrderItem object to remove.
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function removeSalesFlatOrderItem($salesFlatOrderItem)
    {
        if ($this->getSalesFlatOrderItems()->contains($salesFlatOrderItem)) {
            $this->collSalesFlatOrderItems->remove($this->collSalesFlatOrderItems->search($salesFlatOrderItem));
            if (null === $this->salesFlatOrderItemsScheduledForDeletion) {
                $this->salesFlatOrderItemsScheduledForDeletion = clone $this->collSalesFlatOrderItems;
                $this->salesFlatOrderItemsScheduledForDeletion->clear();
            }
            $this->salesFlatOrderItemsScheduledForDeletion[]= clone $salesFlatOrderItem;
            $salesFlatOrderItem->setSalesFlatOrder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesFlatOrder is new, it will return
     * an empty collection; or if this SalesFlatOrder has previously
     * been saved, it will retrieve related SalesFlatOrderItems from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesFlatOrder.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|SalesFlatOrderItem[] List of SalesFlatOrderItem objects
     */
    public function getSalesFlatOrderItemsJoinCoreStore($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SalesFlatOrderItemQuery::create(null, $criteria);
        $query->joinWith('CoreStore', $join_behavior);

        return $this->getSalesFlatOrderItems($query, $con);
    }

    /**
     * Clears out the collCouponMappings collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return SalesFlatOrder The current object (for fluent API support)
     * @see        addCouponMappings()
     */
    public function clearCouponMappings()
    {
        $this->collCouponMappings = null; // important to set this to null since that means it is uninitialized
        $this->collCouponMappingsPartial = null;

        return $this;
    }

    /**
     * reset is the collCouponMappings collection loaded partially
     *
     * @return void
     */
    public function resetPartialCouponMappings($v = true)
    {
        $this->collCouponMappingsPartial = $v;
    }

    /**
     * Initializes the collCouponMappings collection.
     *
     * By default this just sets the collCouponMappings collection to an empty array (like clearcollCouponMappings());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCouponMappings($overrideExisting = true)
    {
        if (null !== $this->collCouponMappings && !$overrideExisting) {
            return;
        }
        $this->collCouponMappings = new PropelObjectCollection();
        $this->collCouponMappings->setModel('CouponMapping');
    }

    /**
     * Gets an array of CouponMapping objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this SalesFlatOrder is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CouponMapping[] List of CouponMapping objects
     * @throws PropelException
     */
    public function getCouponMappings($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCouponMappingsPartial && !$this->isNew();
        if (null === $this->collCouponMappings || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCouponMappings) {
                // return empty collection
                $this->initCouponMappings();
            } else {
                $collCouponMappings = CouponMappingQuery::create(null, $criteria)
                    ->filterBySalesFlatOrder($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCouponMappingsPartial && count($collCouponMappings)) {
                      $this->initCouponMappings(false);

                      foreach ($collCouponMappings as $obj) {
                        if (false == $this->collCouponMappings->contains($obj)) {
                          $this->collCouponMappings->append($obj);
                        }
                      }

                      $this->collCouponMappingsPartial = true;
                    }

                    $collCouponMappings->getInternalIterator()->rewind();

                    return $collCouponMappings;
                }

                if ($partial && $this->collCouponMappings) {
                    foreach ($this->collCouponMappings as $obj) {
                        if ($obj->isNew()) {
                            $collCouponMappings[] = $obj;
                        }
                    }
                }

                $this->collCouponMappings = $collCouponMappings;
                $this->collCouponMappingsPartial = false;
            }
        }

        return $this->collCouponMappings;
    }

    /**
     * Sets a collection of CouponMapping objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $couponMappings A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function setCouponMappings(PropelCollection $couponMappings, PropelPDO $con = null)
    {
        $couponMappingsToDelete = $this->getCouponMappings(new Criteria(), $con)->diff($couponMappings);


        $this->couponMappingsScheduledForDeletion = $couponMappingsToDelete;

        foreach ($couponMappingsToDelete as $couponMappingRemoved) {
            $couponMappingRemoved->setSalesFlatOrder(null);
        }

        $this->collCouponMappings = null;
        foreach ($couponMappings as $couponMapping) {
            $this->addCouponMapping($couponMapping);
        }

        $this->collCouponMappings = $couponMappings;
        $this->collCouponMappingsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CouponMapping objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CouponMapping objects.
     * @throws PropelException
     */
    public function countCouponMappings(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCouponMappingsPartial && !$this->isNew();
        if (null === $this->collCouponMappings || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCouponMappings) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCouponMappings());
            }
            $query = CouponMappingQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySalesFlatOrder($this)
                ->count($con);
        }

        return count($this->collCouponMappings);
    }

    /**
     * Method called to associate a CouponMapping object to this object
     * through the CouponMapping foreign key attribute.
     *
     * @param    CouponMapping $l CouponMapping
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function addCouponMapping(CouponMapping $l)
    {
        if ($this->collCouponMappings === null) {
            $this->initCouponMappings();
            $this->collCouponMappingsPartial = true;
        }

        if (!in_array($l, $this->collCouponMappings->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCouponMapping($l);

            if ($this->couponMappingsScheduledForDeletion and $this->couponMappingsScheduledForDeletion->contains($l)) {
                $this->couponMappingsScheduledForDeletion->remove($this->couponMappingsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	CouponMapping $couponMapping The couponMapping object to add.
     */
    protected function doAddCouponMapping($couponMapping)
    {
        $this->collCouponMappings[]= $couponMapping;
        $couponMapping->setSalesFlatOrder($this);
    }

    /**
     * @param	CouponMapping $couponMapping The couponMapping object to remove.
     * @return SalesFlatOrder The current object (for fluent API support)
     */
    public function removeCouponMapping($couponMapping)
    {
        if ($this->getCouponMappings()->contains($couponMapping)) {
            $this->collCouponMappings->remove($this->collCouponMappings->search($couponMapping));
            if (null === $this->couponMappingsScheduledForDeletion) {
                $this->couponMappingsScheduledForDeletion = clone $this->collCouponMappings;
                $this->couponMappingsScheduledForDeletion->clear();
            }
            $this->couponMappingsScheduledForDeletion[]= $couponMapping;
            $couponMapping->setSalesFlatOrder(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SalesFlatOrder is new, it will return
     * an empty collection; or if this SalesFlatOrder has previously
     * been saved, it will retrieve related CouponMappings from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SalesFlatOrder.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CouponMapping[] List of CouponMapping objects
     */
    public function getCouponMappingsJoinPersonalizedCoupons($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CouponMappingQuery::create(null, $criteria);
        $query->joinWith('PersonalizedCoupons', $join_behavior);

        return $this->getCouponMappings($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->entity_id = null;
        $this->state = null;
        $this->status = null;
        $this->coupon_code = null;
        $this->protect_code = null;
        $this->shipping_description = null;
        $this->is_virtual = null;
        $this->store_id = null;
        $this->customer_id = null;
        $this->base_discount_amount = null;
        $this->base_discount_canceled = null;
        $this->base_discount_invoiced = null;
        $this->base_discount_refunded = null;
        $this->base_grand_total = null;
        $this->base_shipping_amount = null;
        $this->base_shipping_canceled = null;
        $this->base_shipping_invoiced = null;
        $this->base_shipping_refunded = null;
        $this->base_shipping_tax_amount = null;
        $this->base_shipping_tax_refunded = null;
        $this->base_subtotal = null;
        $this->base_subtotal_canceled = null;
        $this->base_subtotal_invoiced = null;
        $this->base_subtotal_refunded = null;
        $this->base_tax_amount = null;
        $this->base_tax_canceled = null;
        $this->base_tax_invoiced = null;
        $this->base_tax_refunded = null;
        $this->base_to_global_rate = null;
        $this->base_to_order_rate = null;
        $this->base_total_canceled = null;
        $this->base_total_invoiced = null;
        $this->base_total_invoiced_cost = null;
        $this->base_total_offline_refunded = null;
        $this->base_total_online_refunded = null;
        $this->base_total_paid = null;
        $this->base_total_qty_ordered = null;
        $this->base_total_refunded = null;
        $this->discount_amount = null;
        $this->discount_canceled = null;
        $this->discount_invoiced = null;
        $this->discount_refunded = null;
        $this->grand_total = null;
        $this->shipping_amount = null;
        $this->shipping_canceled = null;
        $this->shipping_invoiced = null;
        $this->shipping_refunded = null;
        $this->shipping_tax_amount = null;
        $this->shipping_tax_refunded = null;
        $this->store_to_base_rate = null;
        $this->store_to_order_rate = null;
        $this->subtotal = null;
        $this->subtotal_canceled = null;
        $this->subtotal_invoiced = null;
        $this->subtotal_refunded = null;
        $this->tax_amount = null;
        $this->tax_canceled = null;
        $this->tax_invoiced = null;
        $this->tax_refunded = null;
        $this->total_canceled = null;
        $this->total_invoiced = null;
        $this->total_offline_refunded = null;
        $this->total_online_refunded = null;
        $this->total_paid = null;
        $this->total_qty_ordered = null;
        $this->total_refunded = null;
        $this->can_ship_partially = null;
        $this->can_ship_partially_item = null;
        $this->customer_is_guest = null;
        $this->customer_note_notify = null;
        $this->billing_address_id = null;
        $this->customer_group_id = null;
        $this->edit_increment = null;
        $this->email_sent = null;
        $this->forced_shipment_with_invoice = null;
        $this->payment_auth_expiration = null;
        $this->quote_address_id = null;
        $this->quote_id = null;
        $this->shipping_address_id = null;
        $this->adjustment_negative = null;
        $this->adjustment_positive = null;
        $this->base_adjustment_negative = null;
        $this->base_adjustment_positive = null;
        $this->base_shipping_discount_amount = null;
        $this->base_subtotal_incl_tax = null;
        $this->base_total_due = null;
        $this->payment_authorization_amount = null;
        $this->shipping_discount_amount = null;
        $this->subtotal_incl_tax = null;
        $this->total_due = null;
        $this->weight = null;
        $this->customer_dob = null;
        $this->increment_id = null;
        $this->applied_rule_ids = null;
        $this->base_currency_code = null;
        $this->customer_email = null;
        $this->customer_firstname = null;
        $this->customer_lastname = null;
        $this->customer_middlename = null;
        $this->customer_prefix = null;
        $this->customer_suffix = null;
        $this->customer_taxvat = null;
        $this->discount_description = null;
        $this->ext_customer_id = null;
        $this->ext_order_id = null;
        $this->global_currency_code = null;
        $this->hold_before_state = null;
        $this->hold_before_status = null;
        $this->order_currency_code = null;
        $this->original_increment_id = null;
        $this->relation_child_id = null;
        $this->relation_child_real_id = null;
        $this->relation_parent_id = null;
        $this->relation_parent_real_id = null;
        $this->remote_ip = null;
        $this->shipping_method = null;
        $this->store_currency_code = null;
        $this->store_name = null;
        $this->x_forwarded_for = null;
        $this->customer_note = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->total_item_count = null;
        $this->customer_gender = null;
        $this->hidden_tax_amount = null;
        $this->base_hidden_tax_amount = null;
        $this->shipping_hidden_tax_amount = null;
        $this->base_shipping_hidden_tax_amnt = null;
        $this->hidden_tax_invoiced = null;
        $this->base_hidden_tax_invoiced = null;
        $this->hidden_tax_refunded = null;
        $this->base_hidden_tax_refunded = null;
        $this->shipping_incl_tax = null;
        $this->base_shipping_incl_tax = null;
        $this->coupon_rule_name = null;
        $this->paypal_ipn_customer_notified = null;
        $this->gift_message_id = null;
        $this->groupdeals_coupon_from = null;
        $this->groupdeals_coupon_to = null;
        $this->groupdeals_coupon_to_email = null;
        $this->groupdeals_coupon_message = null;
        $this->base_customer_balance_amount = null;
        $this->customer_balance_amount = null;
        $this->base_customer_balance_invoiced = null;
        $this->customer_balance_invoiced = null;
        $this->base_customer_balance_refunded = null;
        $this->customer_balance_refunded = null;
        $this->bs_customer_bal_total_refunded = null;
        $this->customer_bal_total_refunded = null;
        $this->gift_cards = null;
        $this->base_gift_cards_amount = null;
        $this->gift_cards_amount = null;
        $this->base_gift_cards_invoiced = null;
        $this->gift_cards_invoiced = null;
        $this->base_gift_cards_refunded = null;
        $this->gift_cards_refunded = null;
        $this->gw_id = null;
        $this->gw_allow_gift_receipt = null;
        $this->gw_add_card = null;
        $this->gw_base_price = null;
        $this->gw_price = null;
        $this->gw_items_base_price = null;
        $this->gw_items_price = null;
        $this->gw_card_base_price = null;
        $this->gw_card_price = null;
        $this->gw_base_tax_amount = null;
        $this->gw_tax_amount = null;
        $this->gw_items_base_tax_amount = null;
        $this->gw_items_tax_amount = null;
        $this->gw_card_base_tax_amount = null;
        $this->gw_card_tax_amount = null;
        $this->gw_base_price_invoiced = null;
        $this->gw_price_invoiced = null;
        $this->gw_items_base_price_invoiced = null;
        $this->gw_items_price_invoiced = null;
        $this->gw_card_base_price_invoiced = null;
        $this->gw_card_price_invoiced = null;
        $this->gw_base_tax_amount_invoiced = null;
        $this->gw_tax_amount_invoiced = null;
        $this->gw_items_base_tax_invoiced = null;
        $this->gw_items_tax_invoiced = null;
        $this->gw_card_base_tax_invoiced = null;
        $this->gw_card_tax_invoiced = null;
        $this->gw_base_price_refunded = null;
        $this->gw_price_refunded = null;
        $this->gw_items_base_price_refunded = null;
        $this->gw_items_price_refunded = null;
        $this->gw_card_base_price_refunded = null;
        $this->gw_card_price_refunded = null;
        $this->gw_base_tax_amount_refunded = null;
        $this->gw_tax_amount_refunded = null;
        $this->gw_items_base_tax_refunded = null;
        $this->gw_items_tax_refunded = null;
        $this->gw_card_base_tax_refunded = null;
        $this->gw_card_tax_refunded = null;
        $this->reward_points_balance = null;
        $this->base_reward_currency_amount = null;
        $this->reward_currency_amount = null;
        $this->base_rwrd_crrncy_amt_invoiced = null;
        $this->rwrd_currency_amount_invoiced = null;
        $this->base_rwrd_crrncy_amnt_refnded = null;
        $this->rwrd_crrncy_amnt_refunded = null;
        $this->reward_points_balance_refund = null;
        $this->reward_points_balance_refunded = null;
        $this->reward_salesrule_points = null;
        $this->vendor_username = null;
        $this->vendor_name = null;
        $this->vendor_lastname = null;
        $this->vendor_email = null;
        $this->pos_id = null;
        $this->pos_office = null;
        $this->pos_code = null;
        $this->pos_country = null;
        $this->pos_city = null;
        $this->pos_postal_code = null;
        $this->pos_address = null;
        $this->pos_phone = null;
        $this->customer_identification = null;
        $this->is_gift = null;
        $this->gift_for = null;
        $this->gift_email = null;
        $this->gift_message = null;
        $this->gift_citydept = null;
        $this->gift_shipping = null;
        $this->was_payed = null;
        $this->gift_for_lastname = null;
        $this->sci_payment_methods = null;
        $this->discount_applied = null;
        $this->rewards_applied = null;
        $this->stock_before_pol = null;
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
            if ($this->collSalesFlatOrderItems) {
                foreach ($this->collSalesFlatOrderItems as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCouponMappings) {
                foreach ($this->collCouponMappings as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCustomerEntity instanceof Persistent) {
              $this->aCustomerEntity->clearAllReferences($deep);
            }
            if ($this->aCoreStore instanceof Persistent) {
              $this->aCoreStore->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collSalesFlatOrderItems instanceof PropelCollection) {
            $this->collSalesFlatOrderItems->clearIterator();
        }
        $this->collSalesFlatOrderItems = null;
        if ($this->collCouponMappings instanceof PropelCollection) {
            $this->collCouponMappings->clearIterator();
        }
        $this->collCouponMappings = null;
        $this->aCustomerEntity = null;
        $this->aCoreStore = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SalesFlatOrderPeer::DEFAULT_STRING_FORMAT);
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
