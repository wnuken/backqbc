<?php



/**
 * This class defines the structure of the 'sales_flat_order' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.atmadmin.map
 */
class SalesFlatOrderTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.SalesFlatOrderTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('sales_flat_order');
        $this->setPhpName('SalesFlatOrder');
        $this->setClassname('SalesFlatOrder');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('entity_id', 'EntityId', 'INTEGER', true, 10, null);
        $this->addColumn('state', 'State', 'VARCHAR', false, 32, null);
        $this->addColumn('status', 'Status', 'VARCHAR', false, 32, null);
        $this->addColumn('coupon_code', 'CouponCode', 'VARCHAR', false, 255, null);
        $this->addColumn('protect_code', 'ProtectCode', 'VARCHAR', false, 255, null);
        $this->addColumn('shipping_description', 'ShippingDescription', 'VARCHAR', false, 255, null);
        $this->addColumn('is_virtual', 'IsVirtual', 'SMALLINT', false, 5, null);
        $this->addForeignKey('store_id', 'StoreId', 'SMALLINT', 'core_store', 'store_id', false, 5, null);
        $this->addForeignKey('customer_id', 'CustomerId', 'INTEGER', 'customer_entity', 'entity_id', false, 10, null);
        $this->addColumn('base_discount_amount', 'BaseDiscountAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_discount_canceled', 'BaseDiscountCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('base_discount_invoiced', 'BaseDiscountInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('base_discount_refunded', 'BaseDiscountRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_grand_total', 'BaseGrandTotal', 'DECIMAL', false, 12, null);
        $this->addColumn('base_shipping_amount', 'BaseShippingAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_shipping_canceled', 'BaseShippingCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('base_shipping_invoiced', 'BaseShippingInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('base_shipping_refunded', 'BaseShippingRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_shipping_tax_amount', 'BaseShippingTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_shipping_tax_refunded', 'BaseShippingTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_subtotal', 'BaseSubtotal', 'DECIMAL', false, 12, null);
        $this->addColumn('base_subtotal_canceled', 'BaseSubtotalCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('base_subtotal_invoiced', 'BaseSubtotalInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('base_subtotal_refunded', 'BaseSubtotalRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_tax_amount', 'BaseTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_tax_canceled', 'BaseTaxCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('base_tax_invoiced', 'BaseTaxInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('base_tax_refunded', 'BaseTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_to_global_rate', 'BaseToGlobalRate', 'DECIMAL', false, 12, null);
        $this->addColumn('base_to_order_rate', 'BaseToOrderRate', 'DECIMAL', false, 12, null);
        $this->addColumn('base_total_canceled', 'BaseTotalCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('base_total_invoiced', 'BaseTotalInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('base_total_invoiced_cost', 'BaseTotalInvoicedCost', 'DECIMAL', false, 12, null);
        $this->addColumn('base_total_offline_refunded', 'BaseTotalOfflineRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_total_online_refunded', 'BaseTotalOnlineRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_total_paid', 'BaseTotalPaid', 'DECIMAL', false, 12, null);
        $this->addColumn('base_total_qty_ordered', 'BaseTotalQtyOrdered', 'DECIMAL', false, 12, null);
        $this->addColumn('base_total_refunded', 'BaseTotalRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('discount_amount', 'DiscountAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('discount_canceled', 'DiscountCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('discount_invoiced', 'DiscountInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('discount_refunded', 'DiscountRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('grand_total', 'GrandTotal', 'DECIMAL', false, 12, null);
        $this->addColumn('shipping_amount', 'ShippingAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('shipping_canceled', 'ShippingCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('shipping_invoiced', 'ShippingInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('shipping_refunded', 'ShippingRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('shipping_tax_amount', 'ShippingTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('shipping_tax_refunded', 'ShippingTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('store_to_base_rate', 'StoreToBaseRate', 'DECIMAL', false, 12, null);
        $this->addColumn('store_to_order_rate', 'StoreToOrderRate', 'DECIMAL', false, 12, null);
        $this->addColumn('subtotal', 'Subtotal', 'DECIMAL', false, 12, null);
        $this->addColumn('subtotal_canceled', 'SubtotalCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('subtotal_invoiced', 'SubtotalInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('subtotal_refunded', 'SubtotalRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('tax_amount', 'TaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('tax_canceled', 'TaxCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('tax_invoiced', 'TaxInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('tax_refunded', 'TaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('total_canceled', 'TotalCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('total_invoiced', 'TotalInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('total_offline_refunded', 'TotalOfflineRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('total_online_refunded', 'TotalOnlineRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('total_paid', 'TotalPaid', 'DECIMAL', false, 12, null);
        $this->addColumn('total_qty_ordered', 'TotalQtyOrdered', 'DECIMAL', false, 12, null);
        $this->addColumn('total_refunded', 'TotalRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('can_ship_partially', 'CanShipPartially', 'SMALLINT', false, 5, null);
        $this->addColumn('can_ship_partially_item', 'CanShipPartiallyItem', 'SMALLINT', false, 5, null);
        $this->addColumn('customer_is_guest', 'CustomerIsGuest', 'SMALLINT', false, 5, null);
        $this->addColumn('customer_note_notify', 'CustomerNoteNotify', 'SMALLINT', false, 5, null);
        $this->addColumn('billing_address_id', 'BillingAddressId', 'INTEGER', false, null, null);
        $this->addColumn('customer_group_id', 'CustomerGroupId', 'SMALLINT', false, null, null);
        $this->addColumn('edit_increment', 'EditIncrement', 'INTEGER', false, null, null);
        $this->addColumn('email_sent', 'EmailSent', 'SMALLINT', false, 5, null);
        $this->addColumn('forced_shipment_with_invoice', 'ForcedShipmentWithInvoice', 'SMALLINT', false, 5, null);
        $this->addColumn('payment_auth_expiration', 'PaymentAuthExpiration', 'INTEGER', false, null, null);
        $this->addColumn('quote_address_id', 'QuoteAddressId', 'INTEGER', false, null, null);
        $this->addColumn('quote_id', 'QuoteId', 'INTEGER', false, null, null);
        $this->addColumn('shipping_address_id', 'ShippingAddressId', 'INTEGER', false, null, null);
        $this->addColumn('adjustment_negative', 'AdjustmentNegative', 'DECIMAL', false, 12, null);
        $this->addColumn('adjustment_positive', 'AdjustmentPositive', 'DECIMAL', false, 12, null);
        $this->addColumn('base_adjustment_negative', 'BaseAdjustmentNegative', 'DECIMAL', false, 12, null);
        $this->addColumn('base_adjustment_positive', 'BaseAdjustmentPositive', 'DECIMAL', false, 12, null);
        $this->addColumn('base_shipping_discount_amount', 'BaseShippingDiscountAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_subtotal_incl_tax', 'BaseSubtotalInclTax', 'DECIMAL', false, 12, null);
        $this->addColumn('base_total_due', 'BaseTotalDue', 'DECIMAL', false, 12, null);
        $this->addColumn('payment_authorization_amount', 'PaymentAuthorizationAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('shipping_discount_amount', 'ShippingDiscountAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('subtotal_incl_tax', 'SubtotalInclTax', 'DECIMAL', false, 12, null);
        $this->addColumn('total_due', 'TotalDue', 'DECIMAL', false, 12, null);
        $this->addColumn('weight', 'Weight', 'DECIMAL', false, 12, null);
        $this->addColumn('customer_dob', 'CustomerDob', 'TIMESTAMP', false, null, null);
        $this->addColumn('increment_id', 'IncrementId', 'VARCHAR', false, 50, null);
        $this->addColumn('applied_rule_ids', 'AppliedRuleIds', 'VARCHAR', false, 255, null);
        $this->addColumn('base_currency_code', 'BaseCurrencyCode', 'VARCHAR', false, 3, null);
        $this->addColumn('customer_email', 'CustomerEmail', 'VARCHAR', false, 255, null);
        $this->addColumn('customer_firstname', 'CustomerFirstname', 'VARCHAR', false, 255, null);
        $this->addColumn('customer_lastname', 'CustomerLastname', 'VARCHAR', false, 255, null);
        $this->addColumn('customer_middlename', 'CustomerMiddlename', 'VARCHAR', false, 255, null);
        $this->addColumn('customer_prefix', 'CustomerPrefix', 'VARCHAR', false, 255, null);
        $this->addColumn('customer_suffix', 'CustomerSuffix', 'VARCHAR', false, 255, null);
        $this->addColumn('customer_taxvat', 'CustomerTaxvat', 'VARCHAR', false, 255, null);
        $this->addColumn('discount_description', 'DiscountDescription', 'VARCHAR', false, 255, null);
        $this->addColumn('ext_customer_id', 'ExtCustomerId', 'VARCHAR', false, 255, null);
        $this->addColumn('ext_order_id', 'ExtOrderId', 'VARCHAR', false, 255, null);
        $this->addColumn('global_currency_code', 'GlobalCurrencyCode', 'VARCHAR', false, 3, null);
        $this->addColumn('hold_before_state', 'HoldBeforeState', 'VARCHAR', false, 255, null);
        $this->addColumn('hold_before_status', 'HoldBeforeStatus', 'VARCHAR', false, 255, null);
        $this->addColumn('order_currency_code', 'OrderCurrencyCode', 'VARCHAR', false, 255, null);
        $this->addColumn('original_increment_id', 'OriginalIncrementId', 'VARCHAR', false, 50, null);
        $this->addColumn('relation_child_id', 'RelationChildId', 'VARCHAR', false, 32, null);
        $this->addColumn('relation_child_real_id', 'RelationChildRealId', 'VARCHAR', false, 32, null);
        $this->addColumn('relation_parent_id', 'RelationParentId', 'VARCHAR', false, 32, null);
        $this->addColumn('relation_parent_real_id', 'RelationParentRealId', 'VARCHAR', false, 32, null);
        $this->addColumn('remote_ip', 'RemoteIp', 'VARCHAR', false, 255, null);
        $this->addColumn('shipping_method', 'ShippingMethod', 'VARCHAR', false, 255, null);
        $this->addColumn('store_currency_code', 'StoreCurrencyCode', 'VARCHAR', false, 3, null);
        $this->addColumn('store_name', 'StoreName', 'VARCHAR', false, 255, null);
        $this->addColumn('x_forwarded_for', 'XForwardedFor', 'VARCHAR', false, 255, null);
        $this->addColumn('customer_note', 'CustomerNote', 'LONGVARCHAR', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('total_item_count', 'TotalItemCount', 'SMALLINT', true, 5, 0);
        $this->addColumn('customer_gender', 'CustomerGender', 'INTEGER', false, null, null);
        $this->addColumn('hidden_tax_amount', 'HiddenTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_hidden_tax_amount', 'BaseHiddenTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('shipping_hidden_tax_amount', 'ShippingHiddenTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_shipping_hidden_tax_amnt', 'BaseShippingHiddenTaxAmnt', 'DECIMAL', false, 12, null);
        $this->addColumn('hidden_tax_invoiced', 'HiddenTaxInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('base_hidden_tax_invoiced', 'BaseHiddenTaxInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('hidden_tax_refunded', 'HiddenTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_hidden_tax_refunded', 'BaseHiddenTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('shipping_incl_tax', 'ShippingInclTax', 'DECIMAL', false, 12, null);
        $this->addColumn('base_shipping_incl_tax', 'BaseShippingInclTax', 'DECIMAL', false, 12, null);
        $this->addColumn('coupon_rule_name', 'CouponRuleName', 'VARCHAR', false, 255, null);
        $this->addColumn('paypal_ipn_customer_notified', 'PaypalIpnCustomerNotified', 'INTEGER', false, null, 0);
        $this->addColumn('gift_message_id', 'GiftMessageId', 'INTEGER', false, null, null);
        $this->addColumn('groupdeals_coupon_from', 'GroupdealsCouponFrom', 'VARCHAR', false, 255, null);
        $this->addColumn('groupdeals_coupon_to', 'GroupdealsCouponTo', 'VARCHAR', false, 255, null);
        $this->addColumn('groupdeals_coupon_to_email', 'GroupdealsCouponToEmail', 'VARCHAR', false, 255, null);
        $this->addColumn('groupdeals_coupon_message', 'GroupdealsCouponMessage', 'VARCHAR', false, 255, null);
        $this->addColumn('base_customer_balance_amount', 'BaseCustomerBalanceAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('customer_balance_amount', 'CustomerBalanceAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_customer_balance_invoiced', 'BaseCustomerBalanceInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('customer_balance_invoiced', 'CustomerBalanceInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('base_customer_balance_refunded', 'BaseCustomerBalanceRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('customer_balance_refunded', 'CustomerBalanceRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('bs_customer_bal_total_refunded', 'BsCustomerBalTotalRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('customer_bal_total_refunded', 'CustomerBalTotalRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gift_cards', 'GiftCards', 'LONGVARCHAR', false, null, null);
        $this->addColumn('base_gift_cards_amount', 'BaseGiftCardsAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('gift_cards_amount', 'GiftCardsAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_gift_cards_invoiced', 'BaseGiftCardsInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gift_cards_invoiced', 'GiftCardsInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('base_gift_cards_refunded', 'BaseGiftCardsRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gift_cards_refunded', 'GiftCardsRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_id', 'GwId', 'INTEGER', false, null, null);
        $this->addColumn('gw_allow_gift_receipt', 'GwAllowGiftReceipt', 'INTEGER', false, null, null);
        $this->addColumn('gw_add_card', 'GwAddCard', 'INTEGER', false, null, null);
        $this->addColumn('gw_base_price', 'GwBasePrice', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_price', 'GwPrice', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_base_price', 'GwItemsBasePrice', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_price', 'GwItemsPrice', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_base_price', 'GwCardBasePrice', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_price', 'GwCardPrice', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_base_tax_amount', 'GwBaseTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_tax_amount', 'GwTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_base_tax_amount', 'GwItemsBaseTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_tax_amount', 'GwItemsTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_base_tax_amount', 'GwCardBaseTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_tax_amount', 'GwCardTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_base_price_invoiced', 'GwBasePriceInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_price_invoiced', 'GwPriceInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_base_price_invoiced', 'GwItemsBasePriceInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_price_invoiced', 'GwItemsPriceInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_base_price_invoiced', 'GwCardBasePriceInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_price_invoiced', 'GwCardPriceInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_base_tax_amount_invoiced', 'GwBaseTaxAmountInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_tax_amount_invoiced', 'GwTaxAmountInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_base_tax_invoiced', 'GwItemsBaseTaxInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_tax_invoiced', 'GwItemsTaxInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_base_tax_invoiced', 'GwCardBaseTaxInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_tax_invoiced', 'GwCardTaxInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_base_price_refunded', 'GwBasePriceRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_price_refunded', 'GwPriceRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_base_price_refunded', 'GwItemsBasePriceRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_price_refunded', 'GwItemsPriceRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_base_price_refunded', 'GwCardBasePriceRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_price_refunded', 'GwCardPriceRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_base_tax_amount_refunded', 'GwBaseTaxAmountRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_tax_amount_refunded', 'GwTaxAmountRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_base_tax_refunded', 'GwItemsBaseTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_items_tax_refunded', 'GwItemsTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_base_tax_refunded', 'GwCardBaseTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_card_tax_refunded', 'GwCardTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('reward_points_balance', 'RewardPointsBalance', 'INTEGER', false, null, null);
        $this->addColumn('base_reward_currency_amount', 'BaseRewardCurrencyAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('reward_currency_amount', 'RewardCurrencyAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_rwrd_crrncy_amt_invoiced', 'BaseRwrdCrrncyAmtInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('rwrd_currency_amount_invoiced', 'RwrdCurrencyAmountInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('base_rwrd_crrncy_amnt_refnded', 'BaseRwrdCrrncyAmntRefnded', 'DECIMAL', false, 12, null);
        $this->addColumn('rwrd_crrncy_amnt_refunded', 'RwrdCrrncyAmntRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('reward_points_balance_refund', 'RewardPointsBalanceRefund', 'INTEGER', false, null, null);
        $this->addColumn('reward_points_balance_refunded', 'RewardPointsBalanceRefunded', 'INTEGER', false, null, null);
        $this->addColumn('reward_salesrule_points', 'RewardSalesrulePoints', 'INTEGER', false, null, null);
        $this->addColumn('vendor_username', 'VendorUsername', 'VARCHAR', false, 120, null);
        $this->addColumn('vendor_name', 'VendorName', 'VARCHAR', false, 120, null);
        $this->addColumn('vendor_lastname', 'VendorLastname', 'VARCHAR', false, 120, null);
        $this->addColumn('vendor_email', 'VendorEmail', 'VARCHAR', false, 120, null);
        $this->addColumn('pos_id', 'PosId', 'VARCHAR', false, 120, null);
        $this->addColumn('pos_office', 'PosOffice', 'VARCHAR', false, 120, null);
        $this->addColumn('pos_code', 'PosCode', 'VARCHAR', false, 120, null);
        $this->addColumn('pos_country', 'PosCountry', 'VARCHAR', false, 120, null);
        $this->addColumn('pos_city', 'PosCity', 'VARCHAR', false, 120, null);
        $this->addColumn('pos_postal_code', 'PosPostalCode', 'VARCHAR', false, 120, null);
        $this->addColumn('pos_address', 'PosAddress', 'VARCHAR', false, 120, null);
        $this->addColumn('pos_phone', 'PosPhone', 'VARCHAR', false, 120, null);
        $this->addColumn('customer_identification', 'CustomerIdentification', 'VARCHAR', false, 20, null);
        $this->addColumn('is_gift', 'IsGift', 'INTEGER', true, null, null);
        $this->addColumn('gift_for', 'GiftFor', 'VARCHAR', false, 255, null);
        $this->addColumn('gift_email', 'GiftEmail', 'VARCHAR', false, 255, null);
        $this->addColumn('gift_message', 'GiftMessage', 'LONGVARCHAR', false, null, null);
        $this->addColumn('gift_citydept', 'GiftCitydept', 'VARCHAR', false, 255, null);
        $this->addColumn('gift_shipping', 'GiftShipping', 'VARCHAR', false, 255, null);
        $this->addColumn('was_payed', 'WasPayed', 'INTEGER', false, null, 0);
        $this->addColumn('gift_for_lastname', 'GiftForLastname', 'VARCHAR', false, 255, null);
        $this->addColumn('sci_payment_methods', 'SciPaymentMethods', 'VARCHAR', false, 20, null);
        $this->addColumn('discount_applied', 'DiscountApplied', 'INTEGER', false, 1, 0);
        $this->addColumn('rewards_applied', 'RewardsApplied', 'INTEGER', false, 10, 0);
        $this->addColumn('stock_before_pol', 'StockBeforePol', 'INTEGER', false, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CustomerEntity', 'CustomerEntity', RelationMap::MANY_TO_ONE, array('customer_id' => 'entity_id', ), 'SET NULL', 'CASCADE');
        $this->addRelation('CoreStore', 'CoreStore', RelationMap::MANY_TO_ONE, array('store_id' => 'store_id', ), 'SET NULL', 'CASCADE');
        $this->addRelation('SalesFlatOrderItem', 'SalesFlatOrderItem', RelationMap::ONE_TO_MANY, array('entity_id' => 'order_id', ), 'CASCADE', 'CASCADE', 'SalesFlatOrderItems');
        $this->addRelation('CouponMapping', 'CouponMapping', RelationMap::ONE_TO_MANY, array('increment_id' => 'increment_id', ), 'CASCADE', null, 'CouponMappings');
    } // buildRelations()

} // SalesFlatOrderTableMap
