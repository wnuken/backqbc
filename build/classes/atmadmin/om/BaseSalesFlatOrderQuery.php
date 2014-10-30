<?php


/**
 * Base class that represents a query for the 'sales_flat_order' table.
 *
 *
 *
 * @method SalesFlatOrderQuery orderByEntityId($order = Criteria::ASC) Order by the entity_id column
 * @method SalesFlatOrderQuery orderByState($order = Criteria::ASC) Order by the state column
 * @method SalesFlatOrderQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method SalesFlatOrderQuery orderByCouponCode($order = Criteria::ASC) Order by the coupon_code column
 * @method SalesFlatOrderQuery orderByProtectCode($order = Criteria::ASC) Order by the protect_code column
 * @method SalesFlatOrderQuery orderByShippingDescription($order = Criteria::ASC) Order by the shipping_description column
 * @method SalesFlatOrderQuery orderByIsVirtual($order = Criteria::ASC) Order by the is_virtual column
 * @method SalesFlatOrderQuery orderByStoreId($order = Criteria::ASC) Order by the store_id column
 * @method SalesFlatOrderQuery orderByCustomerId($order = Criteria::ASC) Order by the customer_id column
 * @method SalesFlatOrderQuery orderByBaseDiscountAmount($order = Criteria::ASC) Order by the base_discount_amount column
 * @method SalesFlatOrderQuery orderByBaseDiscountCanceled($order = Criteria::ASC) Order by the base_discount_canceled column
 * @method SalesFlatOrderQuery orderByBaseDiscountInvoiced($order = Criteria::ASC) Order by the base_discount_invoiced column
 * @method SalesFlatOrderQuery orderByBaseDiscountRefunded($order = Criteria::ASC) Order by the base_discount_refunded column
 * @method SalesFlatOrderQuery orderByBaseGrandTotal($order = Criteria::ASC) Order by the base_grand_total column
 * @method SalesFlatOrderQuery orderByBaseShippingAmount($order = Criteria::ASC) Order by the base_shipping_amount column
 * @method SalesFlatOrderQuery orderByBaseShippingCanceled($order = Criteria::ASC) Order by the base_shipping_canceled column
 * @method SalesFlatOrderQuery orderByBaseShippingInvoiced($order = Criteria::ASC) Order by the base_shipping_invoiced column
 * @method SalesFlatOrderQuery orderByBaseShippingRefunded($order = Criteria::ASC) Order by the base_shipping_refunded column
 * @method SalesFlatOrderQuery orderByBaseShippingTaxAmount($order = Criteria::ASC) Order by the base_shipping_tax_amount column
 * @method SalesFlatOrderQuery orderByBaseShippingTaxRefunded($order = Criteria::ASC) Order by the base_shipping_tax_refunded column
 * @method SalesFlatOrderQuery orderByBaseSubtotal($order = Criteria::ASC) Order by the base_subtotal column
 * @method SalesFlatOrderQuery orderByBaseSubtotalCanceled($order = Criteria::ASC) Order by the base_subtotal_canceled column
 * @method SalesFlatOrderQuery orderByBaseSubtotalInvoiced($order = Criteria::ASC) Order by the base_subtotal_invoiced column
 * @method SalesFlatOrderQuery orderByBaseSubtotalRefunded($order = Criteria::ASC) Order by the base_subtotal_refunded column
 * @method SalesFlatOrderQuery orderByBaseTaxAmount($order = Criteria::ASC) Order by the base_tax_amount column
 * @method SalesFlatOrderQuery orderByBaseTaxCanceled($order = Criteria::ASC) Order by the base_tax_canceled column
 * @method SalesFlatOrderQuery orderByBaseTaxInvoiced($order = Criteria::ASC) Order by the base_tax_invoiced column
 * @method SalesFlatOrderQuery orderByBaseTaxRefunded($order = Criteria::ASC) Order by the base_tax_refunded column
 * @method SalesFlatOrderQuery orderByBaseToGlobalRate($order = Criteria::ASC) Order by the base_to_global_rate column
 * @method SalesFlatOrderQuery orderByBaseToOrderRate($order = Criteria::ASC) Order by the base_to_order_rate column
 * @method SalesFlatOrderQuery orderByBaseTotalCanceled($order = Criteria::ASC) Order by the base_total_canceled column
 * @method SalesFlatOrderQuery orderByBaseTotalInvoiced($order = Criteria::ASC) Order by the base_total_invoiced column
 * @method SalesFlatOrderQuery orderByBaseTotalInvoicedCost($order = Criteria::ASC) Order by the base_total_invoiced_cost column
 * @method SalesFlatOrderQuery orderByBaseTotalOfflineRefunded($order = Criteria::ASC) Order by the base_total_offline_refunded column
 * @method SalesFlatOrderQuery orderByBaseTotalOnlineRefunded($order = Criteria::ASC) Order by the base_total_online_refunded column
 * @method SalesFlatOrderQuery orderByBaseTotalPaid($order = Criteria::ASC) Order by the base_total_paid column
 * @method SalesFlatOrderQuery orderByBaseTotalQtyOrdered($order = Criteria::ASC) Order by the base_total_qty_ordered column
 * @method SalesFlatOrderQuery orderByBaseTotalRefunded($order = Criteria::ASC) Order by the base_total_refunded column
 * @method SalesFlatOrderQuery orderByDiscountAmount($order = Criteria::ASC) Order by the discount_amount column
 * @method SalesFlatOrderQuery orderByDiscountCanceled($order = Criteria::ASC) Order by the discount_canceled column
 * @method SalesFlatOrderQuery orderByDiscountInvoiced($order = Criteria::ASC) Order by the discount_invoiced column
 * @method SalesFlatOrderQuery orderByDiscountRefunded($order = Criteria::ASC) Order by the discount_refunded column
 * @method SalesFlatOrderQuery orderByGrandTotal($order = Criteria::ASC) Order by the grand_total column
 * @method SalesFlatOrderQuery orderByShippingAmount($order = Criteria::ASC) Order by the shipping_amount column
 * @method SalesFlatOrderQuery orderByShippingCanceled($order = Criteria::ASC) Order by the shipping_canceled column
 * @method SalesFlatOrderQuery orderByShippingInvoiced($order = Criteria::ASC) Order by the shipping_invoiced column
 * @method SalesFlatOrderQuery orderByShippingRefunded($order = Criteria::ASC) Order by the shipping_refunded column
 * @method SalesFlatOrderQuery orderByShippingTaxAmount($order = Criteria::ASC) Order by the shipping_tax_amount column
 * @method SalesFlatOrderQuery orderByShippingTaxRefunded($order = Criteria::ASC) Order by the shipping_tax_refunded column
 * @method SalesFlatOrderQuery orderByStoreToBaseRate($order = Criteria::ASC) Order by the store_to_base_rate column
 * @method SalesFlatOrderQuery orderByStoreToOrderRate($order = Criteria::ASC) Order by the store_to_order_rate column
 * @method SalesFlatOrderQuery orderBySubtotal($order = Criteria::ASC) Order by the subtotal column
 * @method SalesFlatOrderQuery orderBySubtotalCanceled($order = Criteria::ASC) Order by the subtotal_canceled column
 * @method SalesFlatOrderQuery orderBySubtotalInvoiced($order = Criteria::ASC) Order by the subtotal_invoiced column
 * @method SalesFlatOrderQuery orderBySubtotalRefunded($order = Criteria::ASC) Order by the subtotal_refunded column
 * @method SalesFlatOrderQuery orderByTaxAmount($order = Criteria::ASC) Order by the tax_amount column
 * @method SalesFlatOrderQuery orderByTaxCanceled($order = Criteria::ASC) Order by the tax_canceled column
 * @method SalesFlatOrderQuery orderByTaxInvoiced($order = Criteria::ASC) Order by the tax_invoiced column
 * @method SalesFlatOrderQuery orderByTaxRefunded($order = Criteria::ASC) Order by the tax_refunded column
 * @method SalesFlatOrderQuery orderByTotalCanceled($order = Criteria::ASC) Order by the total_canceled column
 * @method SalesFlatOrderQuery orderByTotalInvoiced($order = Criteria::ASC) Order by the total_invoiced column
 * @method SalesFlatOrderQuery orderByTotalOfflineRefunded($order = Criteria::ASC) Order by the total_offline_refunded column
 * @method SalesFlatOrderQuery orderByTotalOnlineRefunded($order = Criteria::ASC) Order by the total_online_refunded column
 * @method SalesFlatOrderQuery orderByTotalPaid($order = Criteria::ASC) Order by the total_paid column
 * @method SalesFlatOrderQuery orderByTotalQtyOrdered($order = Criteria::ASC) Order by the total_qty_ordered column
 * @method SalesFlatOrderQuery orderByTotalRefunded($order = Criteria::ASC) Order by the total_refunded column
 * @method SalesFlatOrderQuery orderByCanShipPartially($order = Criteria::ASC) Order by the can_ship_partially column
 * @method SalesFlatOrderQuery orderByCanShipPartiallyItem($order = Criteria::ASC) Order by the can_ship_partially_item column
 * @method SalesFlatOrderQuery orderByCustomerIsGuest($order = Criteria::ASC) Order by the customer_is_guest column
 * @method SalesFlatOrderQuery orderByCustomerNoteNotify($order = Criteria::ASC) Order by the customer_note_notify column
 * @method SalesFlatOrderQuery orderByBillingAddressId($order = Criteria::ASC) Order by the billing_address_id column
 * @method SalesFlatOrderQuery orderByCustomerGroupId($order = Criteria::ASC) Order by the customer_group_id column
 * @method SalesFlatOrderQuery orderByEditIncrement($order = Criteria::ASC) Order by the edit_increment column
 * @method SalesFlatOrderQuery orderByEmailSent($order = Criteria::ASC) Order by the email_sent column
 * @method SalesFlatOrderQuery orderByForcedShipmentWithInvoice($order = Criteria::ASC) Order by the forced_shipment_with_invoice column
 * @method SalesFlatOrderQuery orderByPaymentAuthExpiration($order = Criteria::ASC) Order by the payment_auth_expiration column
 * @method SalesFlatOrderQuery orderByQuoteAddressId($order = Criteria::ASC) Order by the quote_address_id column
 * @method SalesFlatOrderQuery orderByQuoteId($order = Criteria::ASC) Order by the quote_id column
 * @method SalesFlatOrderQuery orderByShippingAddressId($order = Criteria::ASC) Order by the shipping_address_id column
 * @method SalesFlatOrderQuery orderByAdjustmentNegative($order = Criteria::ASC) Order by the adjustment_negative column
 * @method SalesFlatOrderQuery orderByAdjustmentPositive($order = Criteria::ASC) Order by the adjustment_positive column
 * @method SalesFlatOrderQuery orderByBaseAdjustmentNegative($order = Criteria::ASC) Order by the base_adjustment_negative column
 * @method SalesFlatOrderQuery orderByBaseAdjustmentPositive($order = Criteria::ASC) Order by the base_adjustment_positive column
 * @method SalesFlatOrderQuery orderByBaseShippingDiscountAmount($order = Criteria::ASC) Order by the base_shipping_discount_amount column
 * @method SalesFlatOrderQuery orderByBaseSubtotalInclTax($order = Criteria::ASC) Order by the base_subtotal_incl_tax column
 * @method SalesFlatOrderQuery orderByBaseTotalDue($order = Criteria::ASC) Order by the base_total_due column
 * @method SalesFlatOrderQuery orderByPaymentAuthorizationAmount($order = Criteria::ASC) Order by the payment_authorization_amount column
 * @method SalesFlatOrderQuery orderByShippingDiscountAmount($order = Criteria::ASC) Order by the shipping_discount_amount column
 * @method SalesFlatOrderQuery orderBySubtotalInclTax($order = Criteria::ASC) Order by the subtotal_incl_tax column
 * @method SalesFlatOrderQuery orderByTotalDue($order = Criteria::ASC) Order by the total_due column
 * @method SalesFlatOrderQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method SalesFlatOrderQuery orderByCustomerDob($order = Criteria::ASC) Order by the customer_dob column
 * @method SalesFlatOrderQuery orderByIncrementId($order = Criteria::ASC) Order by the increment_id column
 * @method SalesFlatOrderQuery orderByAppliedRuleIds($order = Criteria::ASC) Order by the applied_rule_ids column
 * @method SalesFlatOrderQuery orderByBaseCurrencyCode($order = Criteria::ASC) Order by the base_currency_code column
 * @method SalesFlatOrderQuery orderByCustomerEmail($order = Criteria::ASC) Order by the customer_email column
 * @method SalesFlatOrderQuery orderByCustomerFirstname($order = Criteria::ASC) Order by the customer_firstname column
 * @method SalesFlatOrderQuery orderByCustomerLastname($order = Criteria::ASC) Order by the customer_lastname column
 * @method SalesFlatOrderQuery orderByCustomerMiddlename($order = Criteria::ASC) Order by the customer_middlename column
 * @method SalesFlatOrderQuery orderByCustomerPrefix($order = Criteria::ASC) Order by the customer_prefix column
 * @method SalesFlatOrderQuery orderByCustomerSuffix($order = Criteria::ASC) Order by the customer_suffix column
 * @method SalesFlatOrderQuery orderByCustomerTaxvat($order = Criteria::ASC) Order by the customer_taxvat column
 * @method SalesFlatOrderQuery orderByDiscountDescription($order = Criteria::ASC) Order by the discount_description column
 * @method SalesFlatOrderQuery orderByExtCustomerId($order = Criteria::ASC) Order by the ext_customer_id column
 * @method SalesFlatOrderQuery orderByExtOrderId($order = Criteria::ASC) Order by the ext_order_id column
 * @method SalesFlatOrderQuery orderByGlobalCurrencyCode($order = Criteria::ASC) Order by the global_currency_code column
 * @method SalesFlatOrderQuery orderByHoldBeforeState($order = Criteria::ASC) Order by the hold_before_state column
 * @method SalesFlatOrderQuery orderByHoldBeforeStatus($order = Criteria::ASC) Order by the hold_before_status column
 * @method SalesFlatOrderQuery orderByOrderCurrencyCode($order = Criteria::ASC) Order by the order_currency_code column
 * @method SalesFlatOrderQuery orderByOriginalIncrementId($order = Criteria::ASC) Order by the original_increment_id column
 * @method SalesFlatOrderQuery orderByRelationChildId($order = Criteria::ASC) Order by the relation_child_id column
 * @method SalesFlatOrderQuery orderByRelationChildRealId($order = Criteria::ASC) Order by the relation_child_real_id column
 * @method SalesFlatOrderQuery orderByRelationParentId($order = Criteria::ASC) Order by the relation_parent_id column
 * @method SalesFlatOrderQuery orderByRelationParentRealId($order = Criteria::ASC) Order by the relation_parent_real_id column
 * @method SalesFlatOrderQuery orderByRemoteIp($order = Criteria::ASC) Order by the remote_ip column
 * @method SalesFlatOrderQuery orderByShippingMethod($order = Criteria::ASC) Order by the shipping_method column
 * @method SalesFlatOrderQuery orderByStoreCurrencyCode($order = Criteria::ASC) Order by the store_currency_code column
 * @method SalesFlatOrderQuery orderByStoreName($order = Criteria::ASC) Order by the store_name column
 * @method SalesFlatOrderQuery orderByXForwardedFor($order = Criteria::ASC) Order by the x_forwarded_for column
 * @method SalesFlatOrderQuery orderByCustomerNote($order = Criteria::ASC) Order by the customer_note column
 * @method SalesFlatOrderQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method SalesFlatOrderQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method SalesFlatOrderQuery orderByTotalItemCount($order = Criteria::ASC) Order by the total_item_count column
 * @method SalesFlatOrderQuery orderByCustomerGender($order = Criteria::ASC) Order by the customer_gender column
 * @method SalesFlatOrderQuery orderByHiddenTaxAmount($order = Criteria::ASC) Order by the hidden_tax_amount column
 * @method SalesFlatOrderQuery orderByBaseHiddenTaxAmount($order = Criteria::ASC) Order by the base_hidden_tax_amount column
 * @method SalesFlatOrderQuery orderByShippingHiddenTaxAmount($order = Criteria::ASC) Order by the shipping_hidden_tax_amount column
 * @method SalesFlatOrderQuery orderByBaseShippingHiddenTaxAmnt($order = Criteria::ASC) Order by the base_shipping_hidden_tax_amnt column
 * @method SalesFlatOrderQuery orderByHiddenTaxInvoiced($order = Criteria::ASC) Order by the hidden_tax_invoiced column
 * @method SalesFlatOrderQuery orderByBaseHiddenTaxInvoiced($order = Criteria::ASC) Order by the base_hidden_tax_invoiced column
 * @method SalesFlatOrderQuery orderByHiddenTaxRefunded($order = Criteria::ASC) Order by the hidden_tax_refunded column
 * @method SalesFlatOrderQuery orderByBaseHiddenTaxRefunded($order = Criteria::ASC) Order by the base_hidden_tax_refunded column
 * @method SalesFlatOrderQuery orderByShippingInclTax($order = Criteria::ASC) Order by the shipping_incl_tax column
 * @method SalesFlatOrderQuery orderByBaseShippingInclTax($order = Criteria::ASC) Order by the base_shipping_incl_tax column
 * @method SalesFlatOrderQuery orderByCouponRuleName($order = Criteria::ASC) Order by the coupon_rule_name column
 * @method SalesFlatOrderQuery orderByPaypalIpnCustomerNotified($order = Criteria::ASC) Order by the paypal_ipn_customer_notified column
 * @method SalesFlatOrderQuery orderByGiftMessageId($order = Criteria::ASC) Order by the gift_message_id column
 * @method SalesFlatOrderQuery orderByGroupdealsCouponFrom($order = Criteria::ASC) Order by the groupdeals_coupon_from column
 * @method SalesFlatOrderQuery orderByGroupdealsCouponTo($order = Criteria::ASC) Order by the groupdeals_coupon_to column
 * @method SalesFlatOrderQuery orderByGroupdealsCouponToEmail($order = Criteria::ASC) Order by the groupdeals_coupon_to_email column
 * @method SalesFlatOrderQuery orderByGroupdealsCouponMessage($order = Criteria::ASC) Order by the groupdeals_coupon_message column
 * @method SalesFlatOrderQuery orderByBaseCustomerBalanceAmount($order = Criteria::ASC) Order by the base_customer_balance_amount column
 * @method SalesFlatOrderQuery orderByCustomerBalanceAmount($order = Criteria::ASC) Order by the customer_balance_amount column
 * @method SalesFlatOrderQuery orderByBaseCustomerBalanceInvoiced($order = Criteria::ASC) Order by the base_customer_balance_invoiced column
 * @method SalesFlatOrderQuery orderByCustomerBalanceInvoiced($order = Criteria::ASC) Order by the customer_balance_invoiced column
 * @method SalesFlatOrderQuery orderByBaseCustomerBalanceRefunded($order = Criteria::ASC) Order by the base_customer_balance_refunded column
 * @method SalesFlatOrderQuery orderByCustomerBalanceRefunded($order = Criteria::ASC) Order by the customer_balance_refunded column
 * @method SalesFlatOrderQuery orderByBsCustomerBalTotalRefunded($order = Criteria::ASC) Order by the bs_customer_bal_total_refunded column
 * @method SalesFlatOrderQuery orderByCustomerBalTotalRefunded($order = Criteria::ASC) Order by the customer_bal_total_refunded column
 * @method SalesFlatOrderQuery orderByGiftCards($order = Criteria::ASC) Order by the gift_cards column
 * @method SalesFlatOrderQuery orderByBaseGiftCardsAmount($order = Criteria::ASC) Order by the base_gift_cards_amount column
 * @method SalesFlatOrderQuery orderByGiftCardsAmount($order = Criteria::ASC) Order by the gift_cards_amount column
 * @method SalesFlatOrderQuery orderByBaseGiftCardsInvoiced($order = Criteria::ASC) Order by the base_gift_cards_invoiced column
 * @method SalesFlatOrderQuery orderByGiftCardsInvoiced($order = Criteria::ASC) Order by the gift_cards_invoiced column
 * @method SalesFlatOrderQuery orderByBaseGiftCardsRefunded($order = Criteria::ASC) Order by the base_gift_cards_refunded column
 * @method SalesFlatOrderQuery orderByGiftCardsRefunded($order = Criteria::ASC) Order by the gift_cards_refunded column
 * @method SalesFlatOrderQuery orderByGwId($order = Criteria::ASC) Order by the gw_id column
 * @method SalesFlatOrderQuery orderByGwAllowGiftReceipt($order = Criteria::ASC) Order by the gw_allow_gift_receipt column
 * @method SalesFlatOrderQuery orderByGwAddCard($order = Criteria::ASC) Order by the gw_add_card column
 * @method SalesFlatOrderQuery orderByGwBasePrice($order = Criteria::ASC) Order by the gw_base_price column
 * @method SalesFlatOrderQuery orderByGwPrice($order = Criteria::ASC) Order by the gw_price column
 * @method SalesFlatOrderQuery orderByGwItemsBasePrice($order = Criteria::ASC) Order by the gw_items_base_price column
 * @method SalesFlatOrderQuery orderByGwItemsPrice($order = Criteria::ASC) Order by the gw_items_price column
 * @method SalesFlatOrderQuery orderByGwCardBasePrice($order = Criteria::ASC) Order by the gw_card_base_price column
 * @method SalesFlatOrderQuery orderByGwCardPrice($order = Criteria::ASC) Order by the gw_card_price column
 * @method SalesFlatOrderQuery orderByGwBaseTaxAmount($order = Criteria::ASC) Order by the gw_base_tax_amount column
 * @method SalesFlatOrderQuery orderByGwTaxAmount($order = Criteria::ASC) Order by the gw_tax_amount column
 * @method SalesFlatOrderQuery orderByGwItemsBaseTaxAmount($order = Criteria::ASC) Order by the gw_items_base_tax_amount column
 * @method SalesFlatOrderQuery orderByGwItemsTaxAmount($order = Criteria::ASC) Order by the gw_items_tax_amount column
 * @method SalesFlatOrderQuery orderByGwCardBaseTaxAmount($order = Criteria::ASC) Order by the gw_card_base_tax_amount column
 * @method SalesFlatOrderQuery orderByGwCardTaxAmount($order = Criteria::ASC) Order by the gw_card_tax_amount column
 * @method SalesFlatOrderQuery orderByGwBasePriceInvoiced($order = Criteria::ASC) Order by the gw_base_price_invoiced column
 * @method SalesFlatOrderQuery orderByGwPriceInvoiced($order = Criteria::ASC) Order by the gw_price_invoiced column
 * @method SalesFlatOrderQuery orderByGwItemsBasePriceInvoiced($order = Criteria::ASC) Order by the gw_items_base_price_invoiced column
 * @method SalesFlatOrderQuery orderByGwItemsPriceInvoiced($order = Criteria::ASC) Order by the gw_items_price_invoiced column
 * @method SalesFlatOrderQuery orderByGwCardBasePriceInvoiced($order = Criteria::ASC) Order by the gw_card_base_price_invoiced column
 * @method SalesFlatOrderQuery orderByGwCardPriceInvoiced($order = Criteria::ASC) Order by the gw_card_price_invoiced column
 * @method SalesFlatOrderQuery orderByGwBaseTaxAmountInvoiced($order = Criteria::ASC) Order by the gw_base_tax_amount_invoiced column
 * @method SalesFlatOrderQuery orderByGwTaxAmountInvoiced($order = Criteria::ASC) Order by the gw_tax_amount_invoiced column
 * @method SalesFlatOrderQuery orderByGwItemsBaseTaxInvoiced($order = Criteria::ASC) Order by the gw_items_base_tax_invoiced column
 * @method SalesFlatOrderQuery orderByGwItemsTaxInvoiced($order = Criteria::ASC) Order by the gw_items_tax_invoiced column
 * @method SalesFlatOrderQuery orderByGwCardBaseTaxInvoiced($order = Criteria::ASC) Order by the gw_card_base_tax_invoiced column
 * @method SalesFlatOrderQuery orderByGwCardTaxInvoiced($order = Criteria::ASC) Order by the gw_card_tax_invoiced column
 * @method SalesFlatOrderQuery orderByGwBasePriceRefunded($order = Criteria::ASC) Order by the gw_base_price_refunded column
 * @method SalesFlatOrderQuery orderByGwPriceRefunded($order = Criteria::ASC) Order by the gw_price_refunded column
 * @method SalesFlatOrderQuery orderByGwItemsBasePriceRefunded($order = Criteria::ASC) Order by the gw_items_base_price_refunded column
 * @method SalesFlatOrderQuery orderByGwItemsPriceRefunded($order = Criteria::ASC) Order by the gw_items_price_refunded column
 * @method SalesFlatOrderQuery orderByGwCardBasePriceRefunded($order = Criteria::ASC) Order by the gw_card_base_price_refunded column
 * @method SalesFlatOrderQuery orderByGwCardPriceRefunded($order = Criteria::ASC) Order by the gw_card_price_refunded column
 * @method SalesFlatOrderQuery orderByGwBaseTaxAmountRefunded($order = Criteria::ASC) Order by the gw_base_tax_amount_refunded column
 * @method SalesFlatOrderQuery orderByGwTaxAmountRefunded($order = Criteria::ASC) Order by the gw_tax_amount_refunded column
 * @method SalesFlatOrderQuery orderByGwItemsBaseTaxRefunded($order = Criteria::ASC) Order by the gw_items_base_tax_refunded column
 * @method SalesFlatOrderQuery orderByGwItemsTaxRefunded($order = Criteria::ASC) Order by the gw_items_tax_refunded column
 * @method SalesFlatOrderQuery orderByGwCardBaseTaxRefunded($order = Criteria::ASC) Order by the gw_card_base_tax_refunded column
 * @method SalesFlatOrderQuery orderByGwCardTaxRefunded($order = Criteria::ASC) Order by the gw_card_tax_refunded column
 * @method SalesFlatOrderQuery orderByRewardPointsBalance($order = Criteria::ASC) Order by the reward_points_balance column
 * @method SalesFlatOrderQuery orderByBaseRewardCurrencyAmount($order = Criteria::ASC) Order by the base_reward_currency_amount column
 * @method SalesFlatOrderQuery orderByRewardCurrencyAmount($order = Criteria::ASC) Order by the reward_currency_amount column
 * @method SalesFlatOrderQuery orderByBaseRwrdCrrncyAmtInvoiced($order = Criteria::ASC) Order by the base_rwrd_crrncy_amt_invoiced column
 * @method SalesFlatOrderQuery orderByRwrdCurrencyAmountInvoiced($order = Criteria::ASC) Order by the rwrd_currency_amount_invoiced column
 * @method SalesFlatOrderQuery orderByBaseRwrdCrrncyAmntRefnded($order = Criteria::ASC) Order by the base_rwrd_crrncy_amnt_refnded column
 * @method SalesFlatOrderQuery orderByRwrdCrrncyAmntRefunded($order = Criteria::ASC) Order by the rwrd_crrncy_amnt_refunded column
 * @method SalesFlatOrderQuery orderByRewardPointsBalanceRefund($order = Criteria::ASC) Order by the reward_points_balance_refund column
 * @method SalesFlatOrderQuery orderByRewardPointsBalanceRefunded($order = Criteria::ASC) Order by the reward_points_balance_refunded column
 * @method SalesFlatOrderQuery orderByRewardSalesrulePoints($order = Criteria::ASC) Order by the reward_salesrule_points column
 * @method SalesFlatOrderQuery orderByVendorUsername($order = Criteria::ASC) Order by the vendor_username column
 * @method SalesFlatOrderQuery orderByVendorName($order = Criteria::ASC) Order by the vendor_name column
 * @method SalesFlatOrderQuery orderByVendorLastname($order = Criteria::ASC) Order by the vendor_lastname column
 * @method SalesFlatOrderQuery orderByVendorEmail($order = Criteria::ASC) Order by the vendor_email column
 * @method SalesFlatOrderQuery orderByPosId($order = Criteria::ASC) Order by the pos_id column
 * @method SalesFlatOrderQuery orderByPosOffice($order = Criteria::ASC) Order by the pos_office column
 * @method SalesFlatOrderQuery orderByPosCode($order = Criteria::ASC) Order by the pos_code column
 * @method SalesFlatOrderQuery orderByPosCountry($order = Criteria::ASC) Order by the pos_country column
 * @method SalesFlatOrderQuery orderByPosCity($order = Criteria::ASC) Order by the pos_city column
 * @method SalesFlatOrderQuery orderByPosPostalCode($order = Criteria::ASC) Order by the pos_postal_code column
 * @method SalesFlatOrderQuery orderByPosAddress($order = Criteria::ASC) Order by the pos_address column
 * @method SalesFlatOrderQuery orderByPosPhone($order = Criteria::ASC) Order by the pos_phone column
 * @method SalesFlatOrderQuery orderByCustomerIdentification($order = Criteria::ASC) Order by the customer_identification column
 * @method SalesFlatOrderQuery orderByIsGift($order = Criteria::ASC) Order by the is_gift column
 * @method SalesFlatOrderQuery orderByGiftFor($order = Criteria::ASC) Order by the gift_for column
 * @method SalesFlatOrderQuery orderByGiftEmail($order = Criteria::ASC) Order by the gift_email column
 * @method SalesFlatOrderQuery orderByGiftMessage($order = Criteria::ASC) Order by the gift_message column
 * @method SalesFlatOrderQuery orderByGiftCitydept($order = Criteria::ASC) Order by the gift_citydept column
 * @method SalesFlatOrderQuery orderByGiftShipping($order = Criteria::ASC) Order by the gift_shipping column
 * @method SalesFlatOrderQuery orderByWasPayed($order = Criteria::ASC) Order by the was_payed column
 * @method SalesFlatOrderQuery orderByGiftForLastname($order = Criteria::ASC) Order by the gift_for_lastname column
 * @method SalesFlatOrderQuery orderBySciPaymentMethods($order = Criteria::ASC) Order by the sci_payment_methods column
 * @method SalesFlatOrderQuery orderByDiscountApplied($order = Criteria::ASC) Order by the discount_applied column
 * @method SalesFlatOrderQuery orderByRewardsApplied($order = Criteria::ASC) Order by the rewards_applied column
 * @method SalesFlatOrderQuery orderByStockBeforePol($order = Criteria::ASC) Order by the stock_before_pol column
 *
 * @method SalesFlatOrderQuery groupByEntityId() Group by the entity_id column
 * @method SalesFlatOrderQuery groupByState() Group by the state column
 * @method SalesFlatOrderQuery groupByStatus() Group by the status column
 * @method SalesFlatOrderQuery groupByCouponCode() Group by the coupon_code column
 * @method SalesFlatOrderQuery groupByProtectCode() Group by the protect_code column
 * @method SalesFlatOrderQuery groupByShippingDescription() Group by the shipping_description column
 * @method SalesFlatOrderQuery groupByIsVirtual() Group by the is_virtual column
 * @method SalesFlatOrderQuery groupByStoreId() Group by the store_id column
 * @method SalesFlatOrderQuery groupByCustomerId() Group by the customer_id column
 * @method SalesFlatOrderQuery groupByBaseDiscountAmount() Group by the base_discount_amount column
 * @method SalesFlatOrderQuery groupByBaseDiscountCanceled() Group by the base_discount_canceled column
 * @method SalesFlatOrderQuery groupByBaseDiscountInvoiced() Group by the base_discount_invoiced column
 * @method SalesFlatOrderQuery groupByBaseDiscountRefunded() Group by the base_discount_refunded column
 * @method SalesFlatOrderQuery groupByBaseGrandTotal() Group by the base_grand_total column
 * @method SalesFlatOrderQuery groupByBaseShippingAmount() Group by the base_shipping_amount column
 * @method SalesFlatOrderQuery groupByBaseShippingCanceled() Group by the base_shipping_canceled column
 * @method SalesFlatOrderQuery groupByBaseShippingInvoiced() Group by the base_shipping_invoiced column
 * @method SalesFlatOrderQuery groupByBaseShippingRefunded() Group by the base_shipping_refunded column
 * @method SalesFlatOrderQuery groupByBaseShippingTaxAmount() Group by the base_shipping_tax_amount column
 * @method SalesFlatOrderQuery groupByBaseShippingTaxRefunded() Group by the base_shipping_tax_refunded column
 * @method SalesFlatOrderQuery groupByBaseSubtotal() Group by the base_subtotal column
 * @method SalesFlatOrderQuery groupByBaseSubtotalCanceled() Group by the base_subtotal_canceled column
 * @method SalesFlatOrderQuery groupByBaseSubtotalInvoiced() Group by the base_subtotal_invoiced column
 * @method SalesFlatOrderQuery groupByBaseSubtotalRefunded() Group by the base_subtotal_refunded column
 * @method SalesFlatOrderQuery groupByBaseTaxAmount() Group by the base_tax_amount column
 * @method SalesFlatOrderQuery groupByBaseTaxCanceled() Group by the base_tax_canceled column
 * @method SalesFlatOrderQuery groupByBaseTaxInvoiced() Group by the base_tax_invoiced column
 * @method SalesFlatOrderQuery groupByBaseTaxRefunded() Group by the base_tax_refunded column
 * @method SalesFlatOrderQuery groupByBaseToGlobalRate() Group by the base_to_global_rate column
 * @method SalesFlatOrderQuery groupByBaseToOrderRate() Group by the base_to_order_rate column
 * @method SalesFlatOrderQuery groupByBaseTotalCanceled() Group by the base_total_canceled column
 * @method SalesFlatOrderQuery groupByBaseTotalInvoiced() Group by the base_total_invoiced column
 * @method SalesFlatOrderQuery groupByBaseTotalInvoicedCost() Group by the base_total_invoiced_cost column
 * @method SalesFlatOrderQuery groupByBaseTotalOfflineRefunded() Group by the base_total_offline_refunded column
 * @method SalesFlatOrderQuery groupByBaseTotalOnlineRefunded() Group by the base_total_online_refunded column
 * @method SalesFlatOrderQuery groupByBaseTotalPaid() Group by the base_total_paid column
 * @method SalesFlatOrderQuery groupByBaseTotalQtyOrdered() Group by the base_total_qty_ordered column
 * @method SalesFlatOrderQuery groupByBaseTotalRefunded() Group by the base_total_refunded column
 * @method SalesFlatOrderQuery groupByDiscountAmount() Group by the discount_amount column
 * @method SalesFlatOrderQuery groupByDiscountCanceled() Group by the discount_canceled column
 * @method SalesFlatOrderQuery groupByDiscountInvoiced() Group by the discount_invoiced column
 * @method SalesFlatOrderQuery groupByDiscountRefunded() Group by the discount_refunded column
 * @method SalesFlatOrderQuery groupByGrandTotal() Group by the grand_total column
 * @method SalesFlatOrderQuery groupByShippingAmount() Group by the shipping_amount column
 * @method SalesFlatOrderQuery groupByShippingCanceled() Group by the shipping_canceled column
 * @method SalesFlatOrderQuery groupByShippingInvoiced() Group by the shipping_invoiced column
 * @method SalesFlatOrderQuery groupByShippingRefunded() Group by the shipping_refunded column
 * @method SalesFlatOrderQuery groupByShippingTaxAmount() Group by the shipping_tax_amount column
 * @method SalesFlatOrderQuery groupByShippingTaxRefunded() Group by the shipping_tax_refunded column
 * @method SalesFlatOrderQuery groupByStoreToBaseRate() Group by the store_to_base_rate column
 * @method SalesFlatOrderQuery groupByStoreToOrderRate() Group by the store_to_order_rate column
 * @method SalesFlatOrderQuery groupBySubtotal() Group by the subtotal column
 * @method SalesFlatOrderQuery groupBySubtotalCanceled() Group by the subtotal_canceled column
 * @method SalesFlatOrderQuery groupBySubtotalInvoiced() Group by the subtotal_invoiced column
 * @method SalesFlatOrderQuery groupBySubtotalRefunded() Group by the subtotal_refunded column
 * @method SalesFlatOrderQuery groupByTaxAmount() Group by the tax_amount column
 * @method SalesFlatOrderQuery groupByTaxCanceled() Group by the tax_canceled column
 * @method SalesFlatOrderQuery groupByTaxInvoiced() Group by the tax_invoiced column
 * @method SalesFlatOrderQuery groupByTaxRefunded() Group by the tax_refunded column
 * @method SalesFlatOrderQuery groupByTotalCanceled() Group by the total_canceled column
 * @method SalesFlatOrderQuery groupByTotalInvoiced() Group by the total_invoiced column
 * @method SalesFlatOrderQuery groupByTotalOfflineRefunded() Group by the total_offline_refunded column
 * @method SalesFlatOrderQuery groupByTotalOnlineRefunded() Group by the total_online_refunded column
 * @method SalesFlatOrderQuery groupByTotalPaid() Group by the total_paid column
 * @method SalesFlatOrderQuery groupByTotalQtyOrdered() Group by the total_qty_ordered column
 * @method SalesFlatOrderQuery groupByTotalRefunded() Group by the total_refunded column
 * @method SalesFlatOrderQuery groupByCanShipPartially() Group by the can_ship_partially column
 * @method SalesFlatOrderQuery groupByCanShipPartiallyItem() Group by the can_ship_partially_item column
 * @method SalesFlatOrderQuery groupByCustomerIsGuest() Group by the customer_is_guest column
 * @method SalesFlatOrderQuery groupByCustomerNoteNotify() Group by the customer_note_notify column
 * @method SalesFlatOrderQuery groupByBillingAddressId() Group by the billing_address_id column
 * @method SalesFlatOrderQuery groupByCustomerGroupId() Group by the customer_group_id column
 * @method SalesFlatOrderQuery groupByEditIncrement() Group by the edit_increment column
 * @method SalesFlatOrderQuery groupByEmailSent() Group by the email_sent column
 * @method SalesFlatOrderQuery groupByForcedShipmentWithInvoice() Group by the forced_shipment_with_invoice column
 * @method SalesFlatOrderQuery groupByPaymentAuthExpiration() Group by the payment_auth_expiration column
 * @method SalesFlatOrderQuery groupByQuoteAddressId() Group by the quote_address_id column
 * @method SalesFlatOrderQuery groupByQuoteId() Group by the quote_id column
 * @method SalesFlatOrderQuery groupByShippingAddressId() Group by the shipping_address_id column
 * @method SalesFlatOrderQuery groupByAdjustmentNegative() Group by the adjustment_negative column
 * @method SalesFlatOrderQuery groupByAdjustmentPositive() Group by the adjustment_positive column
 * @method SalesFlatOrderQuery groupByBaseAdjustmentNegative() Group by the base_adjustment_negative column
 * @method SalesFlatOrderQuery groupByBaseAdjustmentPositive() Group by the base_adjustment_positive column
 * @method SalesFlatOrderQuery groupByBaseShippingDiscountAmount() Group by the base_shipping_discount_amount column
 * @method SalesFlatOrderQuery groupByBaseSubtotalInclTax() Group by the base_subtotal_incl_tax column
 * @method SalesFlatOrderQuery groupByBaseTotalDue() Group by the base_total_due column
 * @method SalesFlatOrderQuery groupByPaymentAuthorizationAmount() Group by the payment_authorization_amount column
 * @method SalesFlatOrderQuery groupByShippingDiscountAmount() Group by the shipping_discount_amount column
 * @method SalesFlatOrderQuery groupBySubtotalInclTax() Group by the subtotal_incl_tax column
 * @method SalesFlatOrderQuery groupByTotalDue() Group by the total_due column
 * @method SalesFlatOrderQuery groupByWeight() Group by the weight column
 * @method SalesFlatOrderQuery groupByCustomerDob() Group by the customer_dob column
 * @method SalesFlatOrderQuery groupByIncrementId() Group by the increment_id column
 * @method SalesFlatOrderQuery groupByAppliedRuleIds() Group by the applied_rule_ids column
 * @method SalesFlatOrderQuery groupByBaseCurrencyCode() Group by the base_currency_code column
 * @method SalesFlatOrderQuery groupByCustomerEmail() Group by the customer_email column
 * @method SalesFlatOrderQuery groupByCustomerFirstname() Group by the customer_firstname column
 * @method SalesFlatOrderQuery groupByCustomerLastname() Group by the customer_lastname column
 * @method SalesFlatOrderQuery groupByCustomerMiddlename() Group by the customer_middlename column
 * @method SalesFlatOrderQuery groupByCustomerPrefix() Group by the customer_prefix column
 * @method SalesFlatOrderQuery groupByCustomerSuffix() Group by the customer_suffix column
 * @method SalesFlatOrderQuery groupByCustomerTaxvat() Group by the customer_taxvat column
 * @method SalesFlatOrderQuery groupByDiscountDescription() Group by the discount_description column
 * @method SalesFlatOrderQuery groupByExtCustomerId() Group by the ext_customer_id column
 * @method SalesFlatOrderQuery groupByExtOrderId() Group by the ext_order_id column
 * @method SalesFlatOrderQuery groupByGlobalCurrencyCode() Group by the global_currency_code column
 * @method SalesFlatOrderQuery groupByHoldBeforeState() Group by the hold_before_state column
 * @method SalesFlatOrderQuery groupByHoldBeforeStatus() Group by the hold_before_status column
 * @method SalesFlatOrderQuery groupByOrderCurrencyCode() Group by the order_currency_code column
 * @method SalesFlatOrderQuery groupByOriginalIncrementId() Group by the original_increment_id column
 * @method SalesFlatOrderQuery groupByRelationChildId() Group by the relation_child_id column
 * @method SalesFlatOrderQuery groupByRelationChildRealId() Group by the relation_child_real_id column
 * @method SalesFlatOrderQuery groupByRelationParentId() Group by the relation_parent_id column
 * @method SalesFlatOrderQuery groupByRelationParentRealId() Group by the relation_parent_real_id column
 * @method SalesFlatOrderQuery groupByRemoteIp() Group by the remote_ip column
 * @method SalesFlatOrderQuery groupByShippingMethod() Group by the shipping_method column
 * @method SalesFlatOrderQuery groupByStoreCurrencyCode() Group by the store_currency_code column
 * @method SalesFlatOrderQuery groupByStoreName() Group by the store_name column
 * @method SalesFlatOrderQuery groupByXForwardedFor() Group by the x_forwarded_for column
 * @method SalesFlatOrderQuery groupByCustomerNote() Group by the customer_note column
 * @method SalesFlatOrderQuery groupByCreatedAt() Group by the created_at column
 * @method SalesFlatOrderQuery groupByUpdatedAt() Group by the updated_at column
 * @method SalesFlatOrderQuery groupByTotalItemCount() Group by the total_item_count column
 * @method SalesFlatOrderQuery groupByCustomerGender() Group by the customer_gender column
 * @method SalesFlatOrderQuery groupByHiddenTaxAmount() Group by the hidden_tax_amount column
 * @method SalesFlatOrderQuery groupByBaseHiddenTaxAmount() Group by the base_hidden_tax_amount column
 * @method SalesFlatOrderQuery groupByShippingHiddenTaxAmount() Group by the shipping_hidden_tax_amount column
 * @method SalesFlatOrderQuery groupByBaseShippingHiddenTaxAmnt() Group by the base_shipping_hidden_tax_amnt column
 * @method SalesFlatOrderQuery groupByHiddenTaxInvoiced() Group by the hidden_tax_invoiced column
 * @method SalesFlatOrderQuery groupByBaseHiddenTaxInvoiced() Group by the base_hidden_tax_invoiced column
 * @method SalesFlatOrderQuery groupByHiddenTaxRefunded() Group by the hidden_tax_refunded column
 * @method SalesFlatOrderQuery groupByBaseHiddenTaxRefunded() Group by the base_hidden_tax_refunded column
 * @method SalesFlatOrderQuery groupByShippingInclTax() Group by the shipping_incl_tax column
 * @method SalesFlatOrderQuery groupByBaseShippingInclTax() Group by the base_shipping_incl_tax column
 * @method SalesFlatOrderQuery groupByCouponRuleName() Group by the coupon_rule_name column
 * @method SalesFlatOrderQuery groupByPaypalIpnCustomerNotified() Group by the paypal_ipn_customer_notified column
 * @method SalesFlatOrderQuery groupByGiftMessageId() Group by the gift_message_id column
 * @method SalesFlatOrderQuery groupByGroupdealsCouponFrom() Group by the groupdeals_coupon_from column
 * @method SalesFlatOrderQuery groupByGroupdealsCouponTo() Group by the groupdeals_coupon_to column
 * @method SalesFlatOrderQuery groupByGroupdealsCouponToEmail() Group by the groupdeals_coupon_to_email column
 * @method SalesFlatOrderQuery groupByGroupdealsCouponMessage() Group by the groupdeals_coupon_message column
 * @method SalesFlatOrderQuery groupByBaseCustomerBalanceAmount() Group by the base_customer_balance_amount column
 * @method SalesFlatOrderQuery groupByCustomerBalanceAmount() Group by the customer_balance_amount column
 * @method SalesFlatOrderQuery groupByBaseCustomerBalanceInvoiced() Group by the base_customer_balance_invoiced column
 * @method SalesFlatOrderQuery groupByCustomerBalanceInvoiced() Group by the customer_balance_invoiced column
 * @method SalesFlatOrderQuery groupByBaseCustomerBalanceRefunded() Group by the base_customer_balance_refunded column
 * @method SalesFlatOrderQuery groupByCustomerBalanceRefunded() Group by the customer_balance_refunded column
 * @method SalesFlatOrderQuery groupByBsCustomerBalTotalRefunded() Group by the bs_customer_bal_total_refunded column
 * @method SalesFlatOrderQuery groupByCustomerBalTotalRefunded() Group by the customer_bal_total_refunded column
 * @method SalesFlatOrderQuery groupByGiftCards() Group by the gift_cards column
 * @method SalesFlatOrderQuery groupByBaseGiftCardsAmount() Group by the base_gift_cards_amount column
 * @method SalesFlatOrderQuery groupByGiftCardsAmount() Group by the gift_cards_amount column
 * @method SalesFlatOrderQuery groupByBaseGiftCardsInvoiced() Group by the base_gift_cards_invoiced column
 * @method SalesFlatOrderQuery groupByGiftCardsInvoiced() Group by the gift_cards_invoiced column
 * @method SalesFlatOrderQuery groupByBaseGiftCardsRefunded() Group by the base_gift_cards_refunded column
 * @method SalesFlatOrderQuery groupByGiftCardsRefunded() Group by the gift_cards_refunded column
 * @method SalesFlatOrderQuery groupByGwId() Group by the gw_id column
 * @method SalesFlatOrderQuery groupByGwAllowGiftReceipt() Group by the gw_allow_gift_receipt column
 * @method SalesFlatOrderQuery groupByGwAddCard() Group by the gw_add_card column
 * @method SalesFlatOrderQuery groupByGwBasePrice() Group by the gw_base_price column
 * @method SalesFlatOrderQuery groupByGwPrice() Group by the gw_price column
 * @method SalesFlatOrderQuery groupByGwItemsBasePrice() Group by the gw_items_base_price column
 * @method SalesFlatOrderQuery groupByGwItemsPrice() Group by the gw_items_price column
 * @method SalesFlatOrderQuery groupByGwCardBasePrice() Group by the gw_card_base_price column
 * @method SalesFlatOrderQuery groupByGwCardPrice() Group by the gw_card_price column
 * @method SalesFlatOrderQuery groupByGwBaseTaxAmount() Group by the gw_base_tax_amount column
 * @method SalesFlatOrderQuery groupByGwTaxAmount() Group by the gw_tax_amount column
 * @method SalesFlatOrderQuery groupByGwItemsBaseTaxAmount() Group by the gw_items_base_tax_amount column
 * @method SalesFlatOrderQuery groupByGwItemsTaxAmount() Group by the gw_items_tax_amount column
 * @method SalesFlatOrderQuery groupByGwCardBaseTaxAmount() Group by the gw_card_base_tax_amount column
 * @method SalesFlatOrderQuery groupByGwCardTaxAmount() Group by the gw_card_tax_amount column
 * @method SalesFlatOrderQuery groupByGwBasePriceInvoiced() Group by the gw_base_price_invoiced column
 * @method SalesFlatOrderQuery groupByGwPriceInvoiced() Group by the gw_price_invoiced column
 * @method SalesFlatOrderQuery groupByGwItemsBasePriceInvoiced() Group by the gw_items_base_price_invoiced column
 * @method SalesFlatOrderQuery groupByGwItemsPriceInvoiced() Group by the gw_items_price_invoiced column
 * @method SalesFlatOrderQuery groupByGwCardBasePriceInvoiced() Group by the gw_card_base_price_invoiced column
 * @method SalesFlatOrderQuery groupByGwCardPriceInvoiced() Group by the gw_card_price_invoiced column
 * @method SalesFlatOrderQuery groupByGwBaseTaxAmountInvoiced() Group by the gw_base_tax_amount_invoiced column
 * @method SalesFlatOrderQuery groupByGwTaxAmountInvoiced() Group by the gw_tax_amount_invoiced column
 * @method SalesFlatOrderQuery groupByGwItemsBaseTaxInvoiced() Group by the gw_items_base_tax_invoiced column
 * @method SalesFlatOrderQuery groupByGwItemsTaxInvoiced() Group by the gw_items_tax_invoiced column
 * @method SalesFlatOrderQuery groupByGwCardBaseTaxInvoiced() Group by the gw_card_base_tax_invoiced column
 * @method SalesFlatOrderQuery groupByGwCardTaxInvoiced() Group by the gw_card_tax_invoiced column
 * @method SalesFlatOrderQuery groupByGwBasePriceRefunded() Group by the gw_base_price_refunded column
 * @method SalesFlatOrderQuery groupByGwPriceRefunded() Group by the gw_price_refunded column
 * @method SalesFlatOrderQuery groupByGwItemsBasePriceRefunded() Group by the gw_items_base_price_refunded column
 * @method SalesFlatOrderQuery groupByGwItemsPriceRefunded() Group by the gw_items_price_refunded column
 * @method SalesFlatOrderQuery groupByGwCardBasePriceRefunded() Group by the gw_card_base_price_refunded column
 * @method SalesFlatOrderQuery groupByGwCardPriceRefunded() Group by the gw_card_price_refunded column
 * @method SalesFlatOrderQuery groupByGwBaseTaxAmountRefunded() Group by the gw_base_tax_amount_refunded column
 * @method SalesFlatOrderQuery groupByGwTaxAmountRefunded() Group by the gw_tax_amount_refunded column
 * @method SalesFlatOrderQuery groupByGwItemsBaseTaxRefunded() Group by the gw_items_base_tax_refunded column
 * @method SalesFlatOrderQuery groupByGwItemsTaxRefunded() Group by the gw_items_tax_refunded column
 * @method SalesFlatOrderQuery groupByGwCardBaseTaxRefunded() Group by the gw_card_base_tax_refunded column
 * @method SalesFlatOrderQuery groupByGwCardTaxRefunded() Group by the gw_card_tax_refunded column
 * @method SalesFlatOrderQuery groupByRewardPointsBalance() Group by the reward_points_balance column
 * @method SalesFlatOrderQuery groupByBaseRewardCurrencyAmount() Group by the base_reward_currency_amount column
 * @method SalesFlatOrderQuery groupByRewardCurrencyAmount() Group by the reward_currency_amount column
 * @method SalesFlatOrderQuery groupByBaseRwrdCrrncyAmtInvoiced() Group by the base_rwrd_crrncy_amt_invoiced column
 * @method SalesFlatOrderQuery groupByRwrdCurrencyAmountInvoiced() Group by the rwrd_currency_amount_invoiced column
 * @method SalesFlatOrderQuery groupByBaseRwrdCrrncyAmntRefnded() Group by the base_rwrd_crrncy_amnt_refnded column
 * @method SalesFlatOrderQuery groupByRwrdCrrncyAmntRefunded() Group by the rwrd_crrncy_amnt_refunded column
 * @method SalesFlatOrderQuery groupByRewardPointsBalanceRefund() Group by the reward_points_balance_refund column
 * @method SalesFlatOrderQuery groupByRewardPointsBalanceRefunded() Group by the reward_points_balance_refunded column
 * @method SalesFlatOrderQuery groupByRewardSalesrulePoints() Group by the reward_salesrule_points column
 * @method SalesFlatOrderQuery groupByVendorUsername() Group by the vendor_username column
 * @method SalesFlatOrderQuery groupByVendorName() Group by the vendor_name column
 * @method SalesFlatOrderQuery groupByVendorLastname() Group by the vendor_lastname column
 * @method SalesFlatOrderQuery groupByVendorEmail() Group by the vendor_email column
 * @method SalesFlatOrderQuery groupByPosId() Group by the pos_id column
 * @method SalesFlatOrderQuery groupByPosOffice() Group by the pos_office column
 * @method SalesFlatOrderQuery groupByPosCode() Group by the pos_code column
 * @method SalesFlatOrderQuery groupByPosCountry() Group by the pos_country column
 * @method SalesFlatOrderQuery groupByPosCity() Group by the pos_city column
 * @method SalesFlatOrderQuery groupByPosPostalCode() Group by the pos_postal_code column
 * @method SalesFlatOrderQuery groupByPosAddress() Group by the pos_address column
 * @method SalesFlatOrderQuery groupByPosPhone() Group by the pos_phone column
 * @method SalesFlatOrderQuery groupByCustomerIdentification() Group by the customer_identification column
 * @method SalesFlatOrderQuery groupByIsGift() Group by the is_gift column
 * @method SalesFlatOrderQuery groupByGiftFor() Group by the gift_for column
 * @method SalesFlatOrderQuery groupByGiftEmail() Group by the gift_email column
 * @method SalesFlatOrderQuery groupByGiftMessage() Group by the gift_message column
 * @method SalesFlatOrderQuery groupByGiftCitydept() Group by the gift_citydept column
 * @method SalesFlatOrderQuery groupByGiftShipping() Group by the gift_shipping column
 * @method SalesFlatOrderQuery groupByWasPayed() Group by the was_payed column
 * @method SalesFlatOrderQuery groupByGiftForLastname() Group by the gift_for_lastname column
 * @method SalesFlatOrderQuery groupBySciPaymentMethods() Group by the sci_payment_methods column
 * @method SalesFlatOrderQuery groupByDiscountApplied() Group by the discount_applied column
 * @method SalesFlatOrderQuery groupByRewardsApplied() Group by the rewards_applied column
 * @method SalesFlatOrderQuery groupByStockBeforePol() Group by the stock_before_pol column
 *
 * @method SalesFlatOrderQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SalesFlatOrderQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SalesFlatOrderQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SalesFlatOrderQuery leftJoinCustomerEntity($relationAlias = null) Adds a LEFT JOIN clause to the query using the CustomerEntity relation
 * @method SalesFlatOrderQuery rightJoinCustomerEntity($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CustomerEntity relation
 * @method SalesFlatOrderQuery innerJoinCustomerEntity($relationAlias = null) Adds a INNER JOIN clause to the query using the CustomerEntity relation
 *
 * @method SalesFlatOrderQuery leftJoinCoreStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the CoreStore relation
 * @method SalesFlatOrderQuery rightJoinCoreStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CoreStore relation
 * @method SalesFlatOrderQuery innerJoinCoreStore($relationAlias = null) Adds a INNER JOIN clause to the query using the CoreStore relation
 *
 * @method SalesFlatOrderQuery leftJoinSalesFlatOrderItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesFlatOrderItem relation
 * @method SalesFlatOrderQuery rightJoinSalesFlatOrderItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesFlatOrderItem relation
 * @method SalesFlatOrderQuery innerJoinSalesFlatOrderItem($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesFlatOrderItem relation
 *
 * @method SalesFlatOrderQuery leftJoinCouponMapping($relationAlias = null) Adds a LEFT JOIN clause to the query using the CouponMapping relation
 * @method SalesFlatOrderQuery rightJoinCouponMapping($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CouponMapping relation
 * @method SalesFlatOrderQuery innerJoinCouponMapping($relationAlias = null) Adds a INNER JOIN clause to the query using the CouponMapping relation
 *
 * @method SalesFlatOrder findOne(PropelPDO $con = null) Return the first SalesFlatOrder matching the query
 * @method SalesFlatOrder findOneOrCreate(PropelPDO $con = null) Return the first SalesFlatOrder matching the query, or a new SalesFlatOrder object populated from the query conditions when no match is found
 *
 * @method SalesFlatOrder findOneByState(string $state) Return the first SalesFlatOrder filtered by the state column
 * @method SalesFlatOrder findOneByStatus(string $status) Return the first SalesFlatOrder filtered by the status column
 * @method SalesFlatOrder findOneByCouponCode(string $coupon_code) Return the first SalesFlatOrder filtered by the coupon_code column
 * @method SalesFlatOrder findOneByProtectCode(string $protect_code) Return the first SalesFlatOrder filtered by the protect_code column
 * @method SalesFlatOrder findOneByShippingDescription(string $shipping_description) Return the first SalesFlatOrder filtered by the shipping_description column
 * @method SalesFlatOrder findOneByIsVirtual(int $is_virtual) Return the first SalesFlatOrder filtered by the is_virtual column
 * @method SalesFlatOrder findOneByStoreId(int $store_id) Return the first SalesFlatOrder filtered by the store_id column
 * @method SalesFlatOrder findOneByCustomerId(int $customer_id) Return the first SalesFlatOrder filtered by the customer_id column
 * @method SalesFlatOrder findOneByBaseDiscountAmount(string $base_discount_amount) Return the first SalesFlatOrder filtered by the base_discount_amount column
 * @method SalesFlatOrder findOneByBaseDiscountCanceled(string $base_discount_canceled) Return the first SalesFlatOrder filtered by the base_discount_canceled column
 * @method SalesFlatOrder findOneByBaseDiscountInvoiced(string $base_discount_invoiced) Return the first SalesFlatOrder filtered by the base_discount_invoiced column
 * @method SalesFlatOrder findOneByBaseDiscountRefunded(string $base_discount_refunded) Return the first SalesFlatOrder filtered by the base_discount_refunded column
 * @method SalesFlatOrder findOneByBaseGrandTotal(string $base_grand_total) Return the first SalesFlatOrder filtered by the base_grand_total column
 * @method SalesFlatOrder findOneByBaseShippingAmount(string $base_shipping_amount) Return the first SalesFlatOrder filtered by the base_shipping_amount column
 * @method SalesFlatOrder findOneByBaseShippingCanceled(string $base_shipping_canceled) Return the first SalesFlatOrder filtered by the base_shipping_canceled column
 * @method SalesFlatOrder findOneByBaseShippingInvoiced(string $base_shipping_invoiced) Return the first SalesFlatOrder filtered by the base_shipping_invoiced column
 * @method SalesFlatOrder findOneByBaseShippingRefunded(string $base_shipping_refunded) Return the first SalesFlatOrder filtered by the base_shipping_refunded column
 * @method SalesFlatOrder findOneByBaseShippingTaxAmount(string $base_shipping_tax_amount) Return the first SalesFlatOrder filtered by the base_shipping_tax_amount column
 * @method SalesFlatOrder findOneByBaseShippingTaxRefunded(string $base_shipping_tax_refunded) Return the first SalesFlatOrder filtered by the base_shipping_tax_refunded column
 * @method SalesFlatOrder findOneByBaseSubtotal(string $base_subtotal) Return the first SalesFlatOrder filtered by the base_subtotal column
 * @method SalesFlatOrder findOneByBaseSubtotalCanceled(string $base_subtotal_canceled) Return the first SalesFlatOrder filtered by the base_subtotal_canceled column
 * @method SalesFlatOrder findOneByBaseSubtotalInvoiced(string $base_subtotal_invoiced) Return the first SalesFlatOrder filtered by the base_subtotal_invoiced column
 * @method SalesFlatOrder findOneByBaseSubtotalRefunded(string $base_subtotal_refunded) Return the first SalesFlatOrder filtered by the base_subtotal_refunded column
 * @method SalesFlatOrder findOneByBaseTaxAmount(string $base_tax_amount) Return the first SalesFlatOrder filtered by the base_tax_amount column
 * @method SalesFlatOrder findOneByBaseTaxCanceled(string $base_tax_canceled) Return the first SalesFlatOrder filtered by the base_tax_canceled column
 * @method SalesFlatOrder findOneByBaseTaxInvoiced(string $base_tax_invoiced) Return the first SalesFlatOrder filtered by the base_tax_invoiced column
 * @method SalesFlatOrder findOneByBaseTaxRefunded(string $base_tax_refunded) Return the first SalesFlatOrder filtered by the base_tax_refunded column
 * @method SalesFlatOrder findOneByBaseToGlobalRate(string $base_to_global_rate) Return the first SalesFlatOrder filtered by the base_to_global_rate column
 * @method SalesFlatOrder findOneByBaseToOrderRate(string $base_to_order_rate) Return the first SalesFlatOrder filtered by the base_to_order_rate column
 * @method SalesFlatOrder findOneByBaseTotalCanceled(string $base_total_canceled) Return the first SalesFlatOrder filtered by the base_total_canceled column
 * @method SalesFlatOrder findOneByBaseTotalInvoiced(string $base_total_invoiced) Return the first SalesFlatOrder filtered by the base_total_invoiced column
 * @method SalesFlatOrder findOneByBaseTotalInvoicedCost(string $base_total_invoiced_cost) Return the first SalesFlatOrder filtered by the base_total_invoiced_cost column
 * @method SalesFlatOrder findOneByBaseTotalOfflineRefunded(string $base_total_offline_refunded) Return the first SalesFlatOrder filtered by the base_total_offline_refunded column
 * @method SalesFlatOrder findOneByBaseTotalOnlineRefunded(string $base_total_online_refunded) Return the first SalesFlatOrder filtered by the base_total_online_refunded column
 * @method SalesFlatOrder findOneByBaseTotalPaid(string $base_total_paid) Return the first SalesFlatOrder filtered by the base_total_paid column
 * @method SalesFlatOrder findOneByBaseTotalQtyOrdered(string $base_total_qty_ordered) Return the first SalesFlatOrder filtered by the base_total_qty_ordered column
 * @method SalesFlatOrder findOneByBaseTotalRefunded(string $base_total_refunded) Return the first SalesFlatOrder filtered by the base_total_refunded column
 * @method SalesFlatOrder findOneByDiscountAmount(string $discount_amount) Return the first SalesFlatOrder filtered by the discount_amount column
 * @method SalesFlatOrder findOneByDiscountCanceled(string $discount_canceled) Return the first SalesFlatOrder filtered by the discount_canceled column
 * @method SalesFlatOrder findOneByDiscountInvoiced(string $discount_invoiced) Return the first SalesFlatOrder filtered by the discount_invoiced column
 * @method SalesFlatOrder findOneByDiscountRefunded(string $discount_refunded) Return the first SalesFlatOrder filtered by the discount_refunded column
 * @method SalesFlatOrder findOneByGrandTotal(string $grand_total) Return the first SalesFlatOrder filtered by the grand_total column
 * @method SalesFlatOrder findOneByShippingAmount(string $shipping_amount) Return the first SalesFlatOrder filtered by the shipping_amount column
 * @method SalesFlatOrder findOneByShippingCanceled(string $shipping_canceled) Return the first SalesFlatOrder filtered by the shipping_canceled column
 * @method SalesFlatOrder findOneByShippingInvoiced(string $shipping_invoiced) Return the first SalesFlatOrder filtered by the shipping_invoiced column
 * @method SalesFlatOrder findOneByShippingRefunded(string $shipping_refunded) Return the first SalesFlatOrder filtered by the shipping_refunded column
 * @method SalesFlatOrder findOneByShippingTaxAmount(string $shipping_tax_amount) Return the first SalesFlatOrder filtered by the shipping_tax_amount column
 * @method SalesFlatOrder findOneByShippingTaxRefunded(string $shipping_tax_refunded) Return the first SalesFlatOrder filtered by the shipping_tax_refunded column
 * @method SalesFlatOrder findOneByStoreToBaseRate(string $store_to_base_rate) Return the first SalesFlatOrder filtered by the store_to_base_rate column
 * @method SalesFlatOrder findOneByStoreToOrderRate(string $store_to_order_rate) Return the first SalesFlatOrder filtered by the store_to_order_rate column
 * @method SalesFlatOrder findOneBySubtotal(string $subtotal) Return the first SalesFlatOrder filtered by the subtotal column
 * @method SalesFlatOrder findOneBySubtotalCanceled(string $subtotal_canceled) Return the first SalesFlatOrder filtered by the subtotal_canceled column
 * @method SalesFlatOrder findOneBySubtotalInvoiced(string $subtotal_invoiced) Return the first SalesFlatOrder filtered by the subtotal_invoiced column
 * @method SalesFlatOrder findOneBySubtotalRefunded(string $subtotal_refunded) Return the first SalesFlatOrder filtered by the subtotal_refunded column
 * @method SalesFlatOrder findOneByTaxAmount(string $tax_amount) Return the first SalesFlatOrder filtered by the tax_amount column
 * @method SalesFlatOrder findOneByTaxCanceled(string $tax_canceled) Return the first SalesFlatOrder filtered by the tax_canceled column
 * @method SalesFlatOrder findOneByTaxInvoiced(string $tax_invoiced) Return the first SalesFlatOrder filtered by the tax_invoiced column
 * @method SalesFlatOrder findOneByTaxRefunded(string $tax_refunded) Return the first SalesFlatOrder filtered by the tax_refunded column
 * @method SalesFlatOrder findOneByTotalCanceled(string $total_canceled) Return the first SalesFlatOrder filtered by the total_canceled column
 * @method SalesFlatOrder findOneByTotalInvoiced(string $total_invoiced) Return the first SalesFlatOrder filtered by the total_invoiced column
 * @method SalesFlatOrder findOneByTotalOfflineRefunded(string $total_offline_refunded) Return the first SalesFlatOrder filtered by the total_offline_refunded column
 * @method SalesFlatOrder findOneByTotalOnlineRefunded(string $total_online_refunded) Return the first SalesFlatOrder filtered by the total_online_refunded column
 * @method SalesFlatOrder findOneByTotalPaid(string $total_paid) Return the first SalesFlatOrder filtered by the total_paid column
 * @method SalesFlatOrder findOneByTotalQtyOrdered(string $total_qty_ordered) Return the first SalesFlatOrder filtered by the total_qty_ordered column
 * @method SalesFlatOrder findOneByTotalRefunded(string $total_refunded) Return the first SalesFlatOrder filtered by the total_refunded column
 * @method SalesFlatOrder findOneByCanShipPartially(int $can_ship_partially) Return the first SalesFlatOrder filtered by the can_ship_partially column
 * @method SalesFlatOrder findOneByCanShipPartiallyItem(int $can_ship_partially_item) Return the first SalesFlatOrder filtered by the can_ship_partially_item column
 * @method SalesFlatOrder findOneByCustomerIsGuest(int $customer_is_guest) Return the first SalesFlatOrder filtered by the customer_is_guest column
 * @method SalesFlatOrder findOneByCustomerNoteNotify(int $customer_note_notify) Return the first SalesFlatOrder filtered by the customer_note_notify column
 * @method SalesFlatOrder findOneByBillingAddressId(int $billing_address_id) Return the first SalesFlatOrder filtered by the billing_address_id column
 * @method SalesFlatOrder findOneByCustomerGroupId(int $customer_group_id) Return the first SalesFlatOrder filtered by the customer_group_id column
 * @method SalesFlatOrder findOneByEditIncrement(int $edit_increment) Return the first SalesFlatOrder filtered by the edit_increment column
 * @method SalesFlatOrder findOneByEmailSent(int $email_sent) Return the first SalesFlatOrder filtered by the email_sent column
 * @method SalesFlatOrder findOneByForcedShipmentWithInvoice(int $forced_shipment_with_invoice) Return the first SalesFlatOrder filtered by the forced_shipment_with_invoice column
 * @method SalesFlatOrder findOneByPaymentAuthExpiration(int $payment_auth_expiration) Return the first SalesFlatOrder filtered by the payment_auth_expiration column
 * @method SalesFlatOrder findOneByQuoteAddressId(int $quote_address_id) Return the first SalesFlatOrder filtered by the quote_address_id column
 * @method SalesFlatOrder findOneByQuoteId(int $quote_id) Return the first SalesFlatOrder filtered by the quote_id column
 * @method SalesFlatOrder findOneByShippingAddressId(int $shipping_address_id) Return the first SalesFlatOrder filtered by the shipping_address_id column
 * @method SalesFlatOrder findOneByAdjustmentNegative(string $adjustment_negative) Return the first SalesFlatOrder filtered by the adjustment_negative column
 * @method SalesFlatOrder findOneByAdjustmentPositive(string $adjustment_positive) Return the first SalesFlatOrder filtered by the adjustment_positive column
 * @method SalesFlatOrder findOneByBaseAdjustmentNegative(string $base_adjustment_negative) Return the first SalesFlatOrder filtered by the base_adjustment_negative column
 * @method SalesFlatOrder findOneByBaseAdjustmentPositive(string $base_adjustment_positive) Return the first SalesFlatOrder filtered by the base_adjustment_positive column
 * @method SalesFlatOrder findOneByBaseShippingDiscountAmount(string $base_shipping_discount_amount) Return the first SalesFlatOrder filtered by the base_shipping_discount_amount column
 * @method SalesFlatOrder findOneByBaseSubtotalInclTax(string $base_subtotal_incl_tax) Return the first SalesFlatOrder filtered by the base_subtotal_incl_tax column
 * @method SalesFlatOrder findOneByBaseTotalDue(string $base_total_due) Return the first SalesFlatOrder filtered by the base_total_due column
 * @method SalesFlatOrder findOneByPaymentAuthorizationAmount(string $payment_authorization_amount) Return the first SalesFlatOrder filtered by the payment_authorization_amount column
 * @method SalesFlatOrder findOneByShippingDiscountAmount(string $shipping_discount_amount) Return the first SalesFlatOrder filtered by the shipping_discount_amount column
 * @method SalesFlatOrder findOneBySubtotalInclTax(string $subtotal_incl_tax) Return the first SalesFlatOrder filtered by the subtotal_incl_tax column
 * @method SalesFlatOrder findOneByTotalDue(string $total_due) Return the first SalesFlatOrder filtered by the total_due column
 * @method SalesFlatOrder findOneByWeight(string $weight) Return the first SalesFlatOrder filtered by the weight column
 * @method SalesFlatOrder findOneByCustomerDob(string $customer_dob) Return the first SalesFlatOrder filtered by the customer_dob column
 * @method SalesFlatOrder findOneByIncrementId(string $increment_id) Return the first SalesFlatOrder filtered by the increment_id column
 * @method SalesFlatOrder findOneByAppliedRuleIds(string $applied_rule_ids) Return the first SalesFlatOrder filtered by the applied_rule_ids column
 * @method SalesFlatOrder findOneByBaseCurrencyCode(string $base_currency_code) Return the first SalesFlatOrder filtered by the base_currency_code column
 * @method SalesFlatOrder findOneByCustomerEmail(string $customer_email) Return the first SalesFlatOrder filtered by the customer_email column
 * @method SalesFlatOrder findOneByCustomerFirstname(string $customer_firstname) Return the first SalesFlatOrder filtered by the customer_firstname column
 * @method SalesFlatOrder findOneByCustomerLastname(string $customer_lastname) Return the first SalesFlatOrder filtered by the customer_lastname column
 * @method SalesFlatOrder findOneByCustomerMiddlename(string $customer_middlename) Return the first SalesFlatOrder filtered by the customer_middlename column
 * @method SalesFlatOrder findOneByCustomerPrefix(string $customer_prefix) Return the first SalesFlatOrder filtered by the customer_prefix column
 * @method SalesFlatOrder findOneByCustomerSuffix(string $customer_suffix) Return the first SalesFlatOrder filtered by the customer_suffix column
 * @method SalesFlatOrder findOneByCustomerTaxvat(string $customer_taxvat) Return the first SalesFlatOrder filtered by the customer_taxvat column
 * @method SalesFlatOrder findOneByDiscountDescription(string $discount_description) Return the first SalesFlatOrder filtered by the discount_description column
 * @method SalesFlatOrder findOneByExtCustomerId(string $ext_customer_id) Return the first SalesFlatOrder filtered by the ext_customer_id column
 * @method SalesFlatOrder findOneByExtOrderId(string $ext_order_id) Return the first SalesFlatOrder filtered by the ext_order_id column
 * @method SalesFlatOrder findOneByGlobalCurrencyCode(string $global_currency_code) Return the first SalesFlatOrder filtered by the global_currency_code column
 * @method SalesFlatOrder findOneByHoldBeforeState(string $hold_before_state) Return the first SalesFlatOrder filtered by the hold_before_state column
 * @method SalesFlatOrder findOneByHoldBeforeStatus(string $hold_before_status) Return the first SalesFlatOrder filtered by the hold_before_status column
 * @method SalesFlatOrder findOneByOrderCurrencyCode(string $order_currency_code) Return the first SalesFlatOrder filtered by the order_currency_code column
 * @method SalesFlatOrder findOneByOriginalIncrementId(string $original_increment_id) Return the first SalesFlatOrder filtered by the original_increment_id column
 * @method SalesFlatOrder findOneByRelationChildId(string $relation_child_id) Return the first SalesFlatOrder filtered by the relation_child_id column
 * @method SalesFlatOrder findOneByRelationChildRealId(string $relation_child_real_id) Return the first SalesFlatOrder filtered by the relation_child_real_id column
 * @method SalesFlatOrder findOneByRelationParentId(string $relation_parent_id) Return the first SalesFlatOrder filtered by the relation_parent_id column
 * @method SalesFlatOrder findOneByRelationParentRealId(string $relation_parent_real_id) Return the first SalesFlatOrder filtered by the relation_parent_real_id column
 * @method SalesFlatOrder findOneByRemoteIp(string $remote_ip) Return the first SalesFlatOrder filtered by the remote_ip column
 * @method SalesFlatOrder findOneByShippingMethod(string $shipping_method) Return the first SalesFlatOrder filtered by the shipping_method column
 * @method SalesFlatOrder findOneByStoreCurrencyCode(string $store_currency_code) Return the first SalesFlatOrder filtered by the store_currency_code column
 * @method SalesFlatOrder findOneByStoreName(string $store_name) Return the first SalesFlatOrder filtered by the store_name column
 * @method SalesFlatOrder findOneByXForwardedFor(string $x_forwarded_for) Return the first SalesFlatOrder filtered by the x_forwarded_for column
 * @method SalesFlatOrder findOneByCustomerNote(string $customer_note) Return the first SalesFlatOrder filtered by the customer_note column
 * @method SalesFlatOrder findOneByCreatedAt(string $created_at) Return the first SalesFlatOrder filtered by the created_at column
 * @method SalesFlatOrder findOneByUpdatedAt(string $updated_at) Return the first SalesFlatOrder filtered by the updated_at column
 * @method SalesFlatOrder findOneByTotalItemCount(int $total_item_count) Return the first SalesFlatOrder filtered by the total_item_count column
 * @method SalesFlatOrder findOneByCustomerGender(int $customer_gender) Return the first SalesFlatOrder filtered by the customer_gender column
 * @method SalesFlatOrder findOneByHiddenTaxAmount(string $hidden_tax_amount) Return the first SalesFlatOrder filtered by the hidden_tax_amount column
 * @method SalesFlatOrder findOneByBaseHiddenTaxAmount(string $base_hidden_tax_amount) Return the first SalesFlatOrder filtered by the base_hidden_tax_amount column
 * @method SalesFlatOrder findOneByShippingHiddenTaxAmount(string $shipping_hidden_tax_amount) Return the first SalesFlatOrder filtered by the shipping_hidden_tax_amount column
 * @method SalesFlatOrder findOneByBaseShippingHiddenTaxAmnt(string $base_shipping_hidden_tax_amnt) Return the first SalesFlatOrder filtered by the base_shipping_hidden_tax_amnt column
 * @method SalesFlatOrder findOneByHiddenTaxInvoiced(string $hidden_tax_invoiced) Return the first SalesFlatOrder filtered by the hidden_tax_invoiced column
 * @method SalesFlatOrder findOneByBaseHiddenTaxInvoiced(string $base_hidden_tax_invoiced) Return the first SalesFlatOrder filtered by the base_hidden_tax_invoiced column
 * @method SalesFlatOrder findOneByHiddenTaxRefunded(string $hidden_tax_refunded) Return the first SalesFlatOrder filtered by the hidden_tax_refunded column
 * @method SalesFlatOrder findOneByBaseHiddenTaxRefunded(string $base_hidden_tax_refunded) Return the first SalesFlatOrder filtered by the base_hidden_tax_refunded column
 * @method SalesFlatOrder findOneByShippingInclTax(string $shipping_incl_tax) Return the first SalesFlatOrder filtered by the shipping_incl_tax column
 * @method SalesFlatOrder findOneByBaseShippingInclTax(string $base_shipping_incl_tax) Return the first SalesFlatOrder filtered by the base_shipping_incl_tax column
 * @method SalesFlatOrder findOneByCouponRuleName(string $coupon_rule_name) Return the first SalesFlatOrder filtered by the coupon_rule_name column
 * @method SalesFlatOrder findOneByPaypalIpnCustomerNotified(int $paypal_ipn_customer_notified) Return the first SalesFlatOrder filtered by the paypal_ipn_customer_notified column
 * @method SalesFlatOrder findOneByGiftMessageId(int $gift_message_id) Return the first SalesFlatOrder filtered by the gift_message_id column
 * @method SalesFlatOrder findOneByGroupdealsCouponFrom(string $groupdeals_coupon_from) Return the first SalesFlatOrder filtered by the groupdeals_coupon_from column
 * @method SalesFlatOrder findOneByGroupdealsCouponTo(string $groupdeals_coupon_to) Return the first SalesFlatOrder filtered by the groupdeals_coupon_to column
 * @method SalesFlatOrder findOneByGroupdealsCouponToEmail(string $groupdeals_coupon_to_email) Return the first SalesFlatOrder filtered by the groupdeals_coupon_to_email column
 * @method SalesFlatOrder findOneByGroupdealsCouponMessage(string $groupdeals_coupon_message) Return the first SalesFlatOrder filtered by the groupdeals_coupon_message column
 * @method SalesFlatOrder findOneByBaseCustomerBalanceAmount(string $base_customer_balance_amount) Return the first SalesFlatOrder filtered by the base_customer_balance_amount column
 * @method SalesFlatOrder findOneByCustomerBalanceAmount(string $customer_balance_amount) Return the first SalesFlatOrder filtered by the customer_balance_amount column
 * @method SalesFlatOrder findOneByBaseCustomerBalanceInvoiced(string $base_customer_balance_invoiced) Return the first SalesFlatOrder filtered by the base_customer_balance_invoiced column
 * @method SalesFlatOrder findOneByCustomerBalanceInvoiced(string $customer_balance_invoiced) Return the first SalesFlatOrder filtered by the customer_balance_invoiced column
 * @method SalesFlatOrder findOneByBaseCustomerBalanceRefunded(string $base_customer_balance_refunded) Return the first SalesFlatOrder filtered by the base_customer_balance_refunded column
 * @method SalesFlatOrder findOneByCustomerBalanceRefunded(string $customer_balance_refunded) Return the first SalesFlatOrder filtered by the customer_balance_refunded column
 * @method SalesFlatOrder findOneByBsCustomerBalTotalRefunded(string $bs_customer_bal_total_refunded) Return the first SalesFlatOrder filtered by the bs_customer_bal_total_refunded column
 * @method SalesFlatOrder findOneByCustomerBalTotalRefunded(string $customer_bal_total_refunded) Return the first SalesFlatOrder filtered by the customer_bal_total_refunded column
 * @method SalesFlatOrder findOneByGiftCards(string $gift_cards) Return the first SalesFlatOrder filtered by the gift_cards column
 * @method SalesFlatOrder findOneByBaseGiftCardsAmount(string $base_gift_cards_amount) Return the first SalesFlatOrder filtered by the base_gift_cards_amount column
 * @method SalesFlatOrder findOneByGiftCardsAmount(string $gift_cards_amount) Return the first SalesFlatOrder filtered by the gift_cards_amount column
 * @method SalesFlatOrder findOneByBaseGiftCardsInvoiced(string $base_gift_cards_invoiced) Return the first SalesFlatOrder filtered by the base_gift_cards_invoiced column
 * @method SalesFlatOrder findOneByGiftCardsInvoiced(string $gift_cards_invoiced) Return the first SalesFlatOrder filtered by the gift_cards_invoiced column
 * @method SalesFlatOrder findOneByBaseGiftCardsRefunded(string $base_gift_cards_refunded) Return the first SalesFlatOrder filtered by the base_gift_cards_refunded column
 * @method SalesFlatOrder findOneByGiftCardsRefunded(string $gift_cards_refunded) Return the first SalesFlatOrder filtered by the gift_cards_refunded column
 * @method SalesFlatOrder findOneByGwId(int $gw_id) Return the first SalesFlatOrder filtered by the gw_id column
 * @method SalesFlatOrder findOneByGwAllowGiftReceipt(int $gw_allow_gift_receipt) Return the first SalesFlatOrder filtered by the gw_allow_gift_receipt column
 * @method SalesFlatOrder findOneByGwAddCard(int $gw_add_card) Return the first SalesFlatOrder filtered by the gw_add_card column
 * @method SalesFlatOrder findOneByGwBasePrice(string $gw_base_price) Return the first SalesFlatOrder filtered by the gw_base_price column
 * @method SalesFlatOrder findOneByGwPrice(string $gw_price) Return the first SalesFlatOrder filtered by the gw_price column
 * @method SalesFlatOrder findOneByGwItemsBasePrice(string $gw_items_base_price) Return the first SalesFlatOrder filtered by the gw_items_base_price column
 * @method SalesFlatOrder findOneByGwItemsPrice(string $gw_items_price) Return the first SalesFlatOrder filtered by the gw_items_price column
 * @method SalesFlatOrder findOneByGwCardBasePrice(string $gw_card_base_price) Return the first SalesFlatOrder filtered by the gw_card_base_price column
 * @method SalesFlatOrder findOneByGwCardPrice(string $gw_card_price) Return the first SalesFlatOrder filtered by the gw_card_price column
 * @method SalesFlatOrder findOneByGwBaseTaxAmount(string $gw_base_tax_amount) Return the first SalesFlatOrder filtered by the gw_base_tax_amount column
 * @method SalesFlatOrder findOneByGwTaxAmount(string $gw_tax_amount) Return the first SalesFlatOrder filtered by the gw_tax_amount column
 * @method SalesFlatOrder findOneByGwItemsBaseTaxAmount(string $gw_items_base_tax_amount) Return the first SalesFlatOrder filtered by the gw_items_base_tax_amount column
 * @method SalesFlatOrder findOneByGwItemsTaxAmount(string $gw_items_tax_amount) Return the first SalesFlatOrder filtered by the gw_items_tax_amount column
 * @method SalesFlatOrder findOneByGwCardBaseTaxAmount(string $gw_card_base_tax_amount) Return the first SalesFlatOrder filtered by the gw_card_base_tax_amount column
 * @method SalesFlatOrder findOneByGwCardTaxAmount(string $gw_card_tax_amount) Return the first SalesFlatOrder filtered by the gw_card_tax_amount column
 * @method SalesFlatOrder findOneByGwBasePriceInvoiced(string $gw_base_price_invoiced) Return the first SalesFlatOrder filtered by the gw_base_price_invoiced column
 * @method SalesFlatOrder findOneByGwPriceInvoiced(string $gw_price_invoiced) Return the first SalesFlatOrder filtered by the gw_price_invoiced column
 * @method SalesFlatOrder findOneByGwItemsBasePriceInvoiced(string $gw_items_base_price_invoiced) Return the first SalesFlatOrder filtered by the gw_items_base_price_invoiced column
 * @method SalesFlatOrder findOneByGwItemsPriceInvoiced(string $gw_items_price_invoiced) Return the first SalesFlatOrder filtered by the gw_items_price_invoiced column
 * @method SalesFlatOrder findOneByGwCardBasePriceInvoiced(string $gw_card_base_price_invoiced) Return the first SalesFlatOrder filtered by the gw_card_base_price_invoiced column
 * @method SalesFlatOrder findOneByGwCardPriceInvoiced(string $gw_card_price_invoiced) Return the first SalesFlatOrder filtered by the gw_card_price_invoiced column
 * @method SalesFlatOrder findOneByGwBaseTaxAmountInvoiced(string $gw_base_tax_amount_invoiced) Return the first SalesFlatOrder filtered by the gw_base_tax_amount_invoiced column
 * @method SalesFlatOrder findOneByGwTaxAmountInvoiced(string $gw_tax_amount_invoiced) Return the first SalesFlatOrder filtered by the gw_tax_amount_invoiced column
 * @method SalesFlatOrder findOneByGwItemsBaseTaxInvoiced(string $gw_items_base_tax_invoiced) Return the first SalesFlatOrder filtered by the gw_items_base_tax_invoiced column
 * @method SalesFlatOrder findOneByGwItemsTaxInvoiced(string $gw_items_tax_invoiced) Return the first SalesFlatOrder filtered by the gw_items_tax_invoiced column
 * @method SalesFlatOrder findOneByGwCardBaseTaxInvoiced(string $gw_card_base_tax_invoiced) Return the first SalesFlatOrder filtered by the gw_card_base_tax_invoiced column
 * @method SalesFlatOrder findOneByGwCardTaxInvoiced(string $gw_card_tax_invoiced) Return the first SalesFlatOrder filtered by the gw_card_tax_invoiced column
 * @method SalesFlatOrder findOneByGwBasePriceRefunded(string $gw_base_price_refunded) Return the first SalesFlatOrder filtered by the gw_base_price_refunded column
 * @method SalesFlatOrder findOneByGwPriceRefunded(string $gw_price_refunded) Return the first SalesFlatOrder filtered by the gw_price_refunded column
 * @method SalesFlatOrder findOneByGwItemsBasePriceRefunded(string $gw_items_base_price_refunded) Return the first SalesFlatOrder filtered by the gw_items_base_price_refunded column
 * @method SalesFlatOrder findOneByGwItemsPriceRefunded(string $gw_items_price_refunded) Return the first SalesFlatOrder filtered by the gw_items_price_refunded column
 * @method SalesFlatOrder findOneByGwCardBasePriceRefunded(string $gw_card_base_price_refunded) Return the first SalesFlatOrder filtered by the gw_card_base_price_refunded column
 * @method SalesFlatOrder findOneByGwCardPriceRefunded(string $gw_card_price_refunded) Return the first SalesFlatOrder filtered by the gw_card_price_refunded column
 * @method SalesFlatOrder findOneByGwBaseTaxAmountRefunded(string $gw_base_tax_amount_refunded) Return the first SalesFlatOrder filtered by the gw_base_tax_amount_refunded column
 * @method SalesFlatOrder findOneByGwTaxAmountRefunded(string $gw_tax_amount_refunded) Return the first SalesFlatOrder filtered by the gw_tax_amount_refunded column
 * @method SalesFlatOrder findOneByGwItemsBaseTaxRefunded(string $gw_items_base_tax_refunded) Return the first SalesFlatOrder filtered by the gw_items_base_tax_refunded column
 * @method SalesFlatOrder findOneByGwItemsTaxRefunded(string $gw_items_tax_refunded) Return the first SalesFlatOrder filtered by the gw_items_tax_refunded column
 * @method SalesFlatOrder findOneByGwCardBaseTaxRefunded(string $gw_card_base_tax_refunded) Return the first SalesFlatOrder filtered by the gw_card_base_tax_refunded column
 * @method SalesFlatOrder findOneByGwCardTaxRefunded(string $gw_card_tax_refunded) Return the first SalesFlatOrder filtered by the gw_card_tax_refunded column
 * @method SalesFlatOrder findOneByRewardPointsBalance(int $reward_points_balance) Return the first SalesFlatOrder filtered by the reward_points_balance column
 * @method SalesFlatOrder findOneByBaseRewardCurrencyAmount(string $base_reward_currency_amount) Return the first SalesFlatOrder filtered by the base_reward_currency_amount column
 * @method SalesFlatOrder findOneByRewardCurrencyAmount(string $reward_currency_amount) Return the first SalesFlatOrder filtered by the reward_currency_amount column
 * @method SalesFlatOrder findOneByBaseRwrdCrrncyAmtInvoiced(string $base_rwrd_crrncy_amt_invoiced) Return the first SalesFlatOrder filtered by the base_rwrd_crrncy_amt_invoiced column
 * @method SalesFlatOrder findOneByRwrdCurrencyAmountInvoiced(string $rwrd_currency_amount_invoiced) Return the first SalesFlatOrder filtered by the rwrd_currency_amount_invoiced column
 * @method SalesFlatOrder findOneByBaseRwrdCrrncyAmntRefnded(string $base_rwrd_crrncy_amnt_refnded) Return the first SalesFlatOrder filtered by the base_rwrd_crrncy_amnt_refnded column
 * @method SalesFlatOrder findOneByRwrdCrrncyAmntRefunded(string $rwrd_crrncy_amnt_refunded) Return the first SalesFlatOrder filtered by the rwrd_crrncy_amnt_refunded column
 * @method SalesFlatOrder findOneByRewardPointsBalanceRefund(int $reward_points_balance_refund) Return the first SalesFlatOrder filtered by the reward_points_balance_refund column
 * @method SalesFlatOrder findOneByRewardPointsBalanceRefunded(int $reward_points_balance_refunded) Return the first SalesFlatOrder filtered by the reward_points_balance_refunded column
 * @method SalesFlatOrder findOneByRewardSalesrulePoints(int $reward_salesrule_points) Return the first SalesFlatOrder filtered by the reward_salesrule_points column
 * @method SalesFlatOrder findOneByVendorUsername(string $vendor_username) Return the first SalesFlatOrder filtered by the vendor_username column
 * @method SalesFlatOrder findOneByVendorName(string $vendor_name) Return the first SalesFlatOrder filtered by the vendor_name column
 * @method SalesFlatOrder findOneByVendorLastname(string $vendor_lastname) Return the first SalesFlatOrder filtered by the vendor_lastname column
 * @method SalesFlatOrder findOneByVendorEmail(string $vendor_email) Return the first SalesFlatOrder filtered by the vendor_email column
 * @method SalesFlatOrder findOneByPosId(string $pos_id) Return the first SalesFlatOrder filtered by the pos_id column
 * @method SalesFlatOrder findOneByPosOffice(string $pos_office) Return the first SalesFlatOrder filtered by the pos_office column
 * @method SalesFlatOrder findOneByPosCode(string $pos_code) Return the first SalesFlatOrder filtered by the pos_code column
 * @method SalesFlatOrder findOneByPosCountry(string $pos_country) Return the first SalesFlatOrder filtered by the pos_country column
 * @method SalesFlatOrder findOneByPosCity(string $pos_city) Return the first SalesFlatOrder filtered by the pos_city column
 * @method SalesFlatOrder findOneByPosPostalCode(string $pos_postal_code) Return the first SalesFlatOrder filtered by the pos_postal_code column
 * @method SalesFlatOrder findOneByPosAddress(string $pos_address) Return the first SalesFlatOrder filtered by the pos_address column
 * @method SalesFlatOrder findOneByPosPhone(string $pos_phone) Return the first SalesFlatOrder filtered by the pos_phone column
 * @method SalesFlatOrder findOneByCustomerIdentification(string $customer_identification) Return the first SalesFlatOrder filtered by the customer_identification column
 * @method SalesFlatOrder findOneByIsGift(int $is_gift) Return the first SalesFlatOrder filtered by the is_gift column
 * @method SalesFlatOrder findOneByGiftFor(string $gift_for) Return the first SalesFlatOrder filtered by the gift_for column
 * @method SalesFlatOrder findOneByGiftEmail(string $gift_email) Return the first SalesFlatOrder filtered by the gift_email column
 * @method SalesFlatOrder findOneByGiftMessage(string $gift_message) Return the first SalesFlatOrder filtered by the gift_message column
 * @method SalesFlatOrder findOneByGiftCitydept(string $gift_citydept) Return the first SalesFlatOrder filtered by the gift_citydept column
 * @method SalesFlatOrder findOneByGiftShipping(string $gift_shipping) Return the first SalesFlatOrder filtered by the gift_shipping column
 * @method SalesFlatOrder findOneByWasPayed(int $was_payed) Return the first SalesFlatOrder filtered by the was_payed column
 * @method SalesFlatOrder findOneByGiftForLastname(string $gift_for_lastname) Return the first SalesFlatOrder filtered by the gift_for_lastname column
 * @method SalesFlatOrder findOneBySciPaymentMethods(string $sci_payment_methods) Return the first SalesFlatOrder filtered by the sci_payment_methods column
 * @method SalesFlatOrder findOneByDiscountApplied(int $discount_applied) Return the first SalesFlatOrder filtered by the discount_applied column
 * @method SalesFlatOrder findOneByRewardsApplied(int $rewards_applied) Return the first SalesFlatOrder filtered by the rewards_applied column
 * @method SalesFlatOrder findOneByStockBeforePol(int $stock_before_pol) Return the first SalesFlatOrder filtered by the stock_before_pol column
 *
 * @method array findByEntityId(int $entity_id) Return SalesFlatOrder objects filtered by the entity_id column
 * @method array findByState(string $state) Return SalesFlatOrder objects filtered by the state column
 * @method array findByStatus(string $status) Return SalesFlatOrder objects filtered by the status column
 * @method array findByCouponCode(string $coupon_code) Return SalesFlatOrder objects filtered by the coupon_code column
 * @method array findByProtectCode(string $protect_code) Return SalesFlatOrder objects filtered by the protect_code column
 * @method array findByShippingDescription(string $shipping_description) Return SalesFlatOrder objects filtered by the shipping_description column
 * @method array findByIsVirtual(int $is_virtual) Return SalesFlatOrder objects filtered by the is_virtual column
 * @method array findByStoreId(int $store_id) Return SalesFlatOrder objects filtered by the store_id column
 * @method array findByCustomerId(int $customer_id) Return SalesFlatOrder objects filtered by the customer_id column
 * @method array findByBaseDiscountAmount(string $base_discount_amount) Return SalesFlatOrder objects filtered by the base_discount_amount column
 * @method array findByBaseDiscountCanceled(string $base_discount_canceled) Return SalesFlatOrder objects filtered by the base_discount_canceled column
 * @method array findByBaseDiscountInvoiced(string $base_discount_invoiced) Return SalesFlatOrder objects filtered by the base_discount_invoiced column
 * @method array findByBaseDiscountRefunded(string $base_discount_refunded) Return SalesFlatOrder objects filtered by the base_discount_refunded column
 * @method array findByBaseGrandTotal(string $base_grand_total) Return SalesFlatOrder objects filtered by the base_grand_total column
 * @method array findByBaseShippingAmount(string $base_shipping_amount) Return SalesFlatOrder objects filtered by the base_shipping_amount column
 * @method array findByBaseShippingCanceled(string $base_shipping_canceled) Return SalesFlatOrder objects filtered by the base_shipping_canceled column
 * @method array findByBaseShippingInvoiced(string $base_shipping_invoiced) Return SalesFlatOrder objects filtered by the base_shipping_invoiced column
 * @method array findByBaseShippingRefunded(string $base_shipping_refunded) Return SalesFlatOrder objects filtered by the base_shipping_refunded column
 * @method array findByBaseShippingTaxAmount(string $base_shipping_tax_amount) Return SalesFlatOrder objects filtered by the base_shipping_tax_amount column
 * @method array findByBaseShippingTaxRefunded(string $base_shipping_tax_refunded) Return SalesFlatOrder objects filtered by the base_shipping_tax_refunded column
 * @method array findByBaseSubtotal(string $base_subtotal) Return SalesFlatOrder objects filtered by the base_subtotal column
 * @method array findByBaseSubtotalCanceled(string $base_subtotal_canceled) Return SalesFlatOrder objects filtered by the base_subtotal_canceled column
 * @method array findByBaseSubtotalInvoiced(string $base_subtotal_invoiced) Return SalesFlatOrder objects filtered by the base_subtotal_invoiced column
 * @method array findByBaseSubtotalRefunded(string $base_subtotal_refunded) Return SalesFlatOrder objects filtered by the base_subtotal_refunded column
 * @method array findByBaseTaxAmount(string $base_tax_amount) Return SalesFlatOrder objects filtered by the base_tax_amount column
 * @method array findByBaseTaxCanceled(string $base_tax_canceled) Return SalesFlatOrder objects filtered by the base_tax_canceled column
 * @method array findByBaseTaxInvoiced(string $base_tax_invoiced) Return SalesFlatOrder objects filtered by the base_tax_invoiced column
 * @method array findByBaseTaxRefunded(string $base_tax_refunded) Return SalesFlatOrder objects filtered by the base_tax_refunded column
 * @method array findByBaseToGlobalRate(string $base_to_global_rate) Return SalesFlatOrder objects filtered by the base_to_global_rate column
 * @method array findByBaseToOrderRate(string $base_to_order_rate) Return SalesFlatOrder objects filtered by the base_to_order_rate column
 * @method array findByBaseTotalCanceled(string $base_total_canceled) Return SalesFlatOrder objects filtered by the base_total_canceled column
 * @method array findByBaseTotalInvoiced(string $base_total_invoiced) Return SalesFlatOrder objects filtered by the base_total_invoiced column
 * @method array findByBaseTotalInvoicedCost(string $base_total_invoiced_cost) Return SalesFlatOrder objects filtered by the base_total_invoiced_cost column
 * @method array findByBaseTotalOfflineRefunded(string $base_total_offline_refunded) Return SalesFlatOrder objects filtered by the base_total_offline_refunded column
 * @method array findByBaseTotalOnlineRefunded(string $base_total_online_refunded) Return SalesFlatOrder objects filtered by the base_total_online_refunded column
 * @method array findByBaseTotalPaid(string $base_total_paid) Return SalesFlatOrder objects filtered by the base_total_paid column
 * @method array findByBaseTotalQtyOrdered(string $base_total_qty_ordered) Return SalesFlatOrder objects filtered by the base_total_qty_ordered column
 * @method array findByBaseTotalRefunded(string $base_total_refunded) Return SalesFlatOrder objects filtered by the base_total_refunded column
 * @method array findByDiscountAmount(string $discount_amount) Return SalesFlatOrder objects filtered by the discount_amount column
 * @method array findByDiscountCanceled(string $discount_canceled) Return SalesFlatOrder objects filtered by the discount_canceled column
 * @method array findByDiscountInvoiced(string $discount_invoiced) Return SalesFlatOrder objects filtered by the discount_invoiced column
 * @method array findByDiscountRefunded(string $discount_refunded) Return SalesFlatOrder objects filtered by the discount_refunded column
 * @method array findByGrandTotal(string $grand_total) Return SalesFlatOrder objects filtered by the grand_total column
 * @method array findByShippingAmount(string $shipping_amount) Return SalesFlatOrder objects filtered by the shipping_amount column
 * @method array findByShippingCanceled(string $shipping_canceled) Return SalesFlatOrder objects filtered by the shipping_canceled column
 * @method array findByShippingInvoiced(string $shipping_invoiced) Return SalesFlatOrder objects filtered by the shipping_invoiced column
 * @method array findByShippingRefunded(string $shipping_refunded) Return SalesFlatOrder objects filtered by the shipping_refunded column
 * @method array findByShippingTaxAmount(string $shipping_tax_amount) Return SalesFlatOrder objects filtered by the shipping_tax_amount column
 * @method array findByShippingTaxRefunded(string $shipping_tax_refunded) Return SalesFlatOrder objects filtered by the shipping_tax_refunded column
 * @method array findByStoreToBaseRate(string $store_to_base_rate) Return SalesFlatOrder objects filtered by the store_to_base_rate column
 * @method array findByStoreToOrderRate(string $store_to_order_rate) Return SalesFlatOrder objects filtered by the store_to_order_rate column
 * @method array findBySubtotal(string $subtotal) Return SalesFlatOrder objects filtered by the subtotal column
 * @method array findBySubtotalCanceled(string $subtotal_canceled) Return SalesFlatOrder objects filtered by the subtotal_canceled column
 * @method array findBySubtotalInvoiced(string $subtotal_invoiced) Return SalesFlatOrder objects filtered by the subtotal_invoiced column
 * @method array findBySubtotalRefunded(string $subtotal_refunded) Return SalesFlatOrder objects filtered by the subtotal_refunded column
 * @method array findByTaxAmount(string $tax_amount) Return SalesFlatOrder objects filtered by the tax_amount column
 * @method array findByTaxCanceled(string $tax_canceled) Return SalesFlatOrder objects filtered by the tax_canceled column
 * @method array findByTaxInvoiced(string $tax_invoiced) Return SalesFlatOrder objects filtered by the tax_invoiced column
 * @method array findByTaxRefunded(string $tax_refunded) Return SalesFlatOrder objects filtered by the tax_refunded column
 * @method array findByTotalCanceled(string $total_canceled) Return SalesFlatOrder objects filtered by the total_canceled column
 * @method array findByTotalInvoiced(string $total_invoiced) Return SalesFlatOrder objects filtered by the total_invoiced column
 * @method array findByTotalOfflineRefunded(string $total_offline_refunded) Return SalesFlatOrder objects filtered by the total_offline_refunded column
 * @method array findByTotalOnlineRefunded(string $total_online_refunded) Return SalesFlatOrder objects filtered by the total_online_refunded column
 * @method array findByTotalPaid(string $total_paid) Return SalesFlatOrder objects filtered by the total_paid column
 * @method array findByTotalQtyOrdered(string $total_qty_ordered) Return SalesFlatOrder objects filtered by the total_qty_ordered column
 * @method array findByTotalRefunded(string $total_refunded) Return SalesFlatOrder objects filtered by the total_refunded column
 * @method array findByCanShipPartially(int $can_ship_partially) Return SalesFlatOrder objects filtered by the can_ship_partially column
 * @method array findByCanShipPartiallyItem(int $can_ship_partially_item) Return SalesFlatOrder objects filtered by the can_ship_partially_item column
 * @method array findByCustomerIsGuest(int $customer_is_guest) Return SalesFlatOrder objects filtered by the customer_is_guest column
 * @method array findByCustomerNoteNotify(int $customer_note_notify) Return SalesFlatOrder objects filtered by the customer_note_notify column
 * @method array findByBillingAddressId(int $billing_address_id) Return SalesFlatOrder objects filtered by the billing_address_id column
 * @method array findByCustomerGroupId(int $customer_group_id) Return SalesFlatOrder objects filtered by the customer_group_id column
 * @method array findByEditIncrement(int $edit_increment) Return SalesFlatOrder objects filtered by the edit_increment column
 * @method array findByEmailSent(int $email_sent) Return SalesFlatOrder objects filtered by the email_sent column
 * @method array findByForcedShipmentWithInvoice(int $forced_shipment_with_invoice) Return SalesFlatOrder objects filtered by the forced_shipment_with_invoice column
 * @method array findByPaymentAuthExpiration(int $payment_auth_expiration) Return SalesFlatOrder objects filtered by the payment_auth_expiration column
 * @method array findByQuoteAddressId(int $quote_address_id) Return SalesFlatOrder objects filtered by the quote_address_id column
 * @method array findByQuoteId(int $quote_id) Return SalesFlatOrder objects filtered by the quote_id column
 * @method array findByShippingAddressId(int $shipping_address_id) Return SalesFlatOrder objects filtered by the shipping_address_id column
 * @method array findByAdjustmentNegative(string $adjustment_negative) Return SalesFlatOrder objects filtered by the adjustment_negative column
 * @method array findByAdjustmentPositive(string $adjustment_positive) Return SalesFlatOrder objects filtered by the adjustment_positive column
 * @method array findByBaseAdjustmentNegative(string $base_adjustment_negative) Return SalesFlatOrder objects filtered by the base_adjustment_negative column
 * @method array findByBaseAdjustmentPositive(string $base_adjustment_positive) Return SalesFlatOrder objects filtered by the base_adjustment_positive column
 * @method array findByBaseShippingDiscountAmount(string $base_shipping_discount_amount) Return SalesFlatOrder objects filtered by the base_shipping_discount_amount column
 * @method array findByBaseSubtotalInclTax(string $base_subtotal_incl_tax) Return SalesFlatOrder objects filtered by the base_subtotal_incl_tax column
 * @method array findByBaseTotalDue(string $base_total_due) Return SalesFlatOrder objects filtered by the base_total_due column
 * @method array findByPaymentAuthorizationAmount(string $payment_authorization_amount) Return SalesFlatOrder objects filtered by the payment_authorization_amount column
 * @method array findByShippingDiscountAmount(string $shipping_discount_amount) Return SalesFlatOrder objects filtered by the shipping_discount_amount column
 * @method array findBySubtotalInclTax(string $subtotal_incl_tax) Return SalesFlatOrder objects filtered by the subtotal_incl_tax column
 * @method array findByTotalDue(string $total_due) Return SalesFlatOrder objects filtered by the total_due column
 * @method array findByWeight(string $weight) Return SalesFlatOrder objects filtered by the weight column
 * @method array findByCustomerDob(string $customer_dob) Return SalesFlatOrder objects filtered by the customer_dob column
 * @method array findByIncrementId(string $increment_id) Return SalesFlatOrder objects filtered by the increment_id column
 * @method array findByAppliedRuleIds(string $applied_rule_ids) Return SalesFlatOrder objects filtered by the applied_rule_ids column
 * @method array findByBaseCurrencyCode(string $base_currency_code) Return SalesFlatOrder objects filtered by the base_currency_code column
 * @method array findByCustomerEmail(string $customer_email) Return SalesFlatOrder objects filtered by the customer_email column
 * @method array findByCustomerFirstname(string $customer_firstname) Return SalesFlatOrder objects filtered by the customer_firstname column
 * @method array findByCustomerLastname(string $customer_lastname) Return SalesFlatOrder objects filtered by the customer_lastname column
 * @method array findByCustomerMiddlename(string $customer_middlename) Return SalesFlatOrder objects filtered by the customer_middlename column
 * @method array findByCustomerPrefix(string $customer_prefix) Return SalesFlatOrder objects filtered by the customer_prefix column
 * @method array findByCustomerSuffix(string $customer_suffix) Return SalesFlatOrder objects filtered by the customer_suffix column
 * @method array findByCustomerTaxvat(string $customer_taxvat) Return SalesFlatOrder objects filtered by the customer_taxvat column
 * @method array findByDiscountDescription(string $discount_description) Return SalesFlatOrder objects filtered by the discount_description column
 * @method array findByExtCustomerId(string $ext_customer_id) Return SalesFlatOrder objects filtered by the ext_customer_id column
 * @method array findByExtOrderId(string $ext_order_id) Return SalesFlatOrder objects filtered by the ext_order_id column
 * @method array findByGlobalCurrencyCode(string $global_currency_code) Return SalesFlatOrder objects filtered by the global_currency_code column
 * @method array findByHoldBeforeState(string $hold_before_state) Return SalesFlatOrder objects filtered by the hold_before_state column
 * @method array findByHoldBeforeStatus(string $hold_before_status) Return SalesFlatOrder objects filtered by the hold_before_status column
 * @method array findByOrderCurrencyCode(string $order_currency_code) Return SalesFlatOrder objects filtered by the order_currency_code column
 * @method array findByOriginalIncrementId(string $original_increment_id) Return SalesFlatOrder objects filtered by the original_increment_id column
 * @method array findByRelationChildId(string $relation_child_id) Return SalesFlatOrder objects filtered by the relation_child_id column
 * @method array findByRelationChildRealId(string $relation_child_real_id) Return SalesFlatOrder objects filtered by the relation_child_real_id column
 * @method array findByRelationParentId(string $relation_parent_id) Return SalesFlatOrder objects filtered by the relation_parent_id column
 * @method array findByRelationParentRealId(string $relation_parent_real_id) Return SalesFlatOrder objects filtered by the relation_parent_real_id column
 * @method array findByRemoteIp(string $remote_ip) Return SalesFlatOrder objects filtered by the remote_ip column
 * @method array findByShippingMethod(string $shipping_method) Return SalesFlatOrder objects filtered by the shipping_method column
 * @method array findByStoreCurrencyCode(string $store_currency_code) Return SalesFlatOrder objects filtered by the store_currency_code column
 * @method array findByStoreName(string $store_name) Return SalesFlatOrder objects filtered by the store_name column
 * @method array findByXForwardedFor(string $x_forwarded_for) Return SalesFlatOrder objects filtered by the x_forwarded_for column
 * @method array findByCustomerNote(string $customer_note) Return SalesFlatOrder objects filtered by the customer_note column
 * @method array findByCreatedAt(string $created_at) Return SalesFlatOrder objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return SalesFlatOrder objects filtered by the updated_at column
 * @method array findByTotalItemCount(int $total_item_count) Return SalesFlatOrder objects filtered by the total_item_count column
 * @method array findByCustomerGender(int $customer_gender) Return SalesFlatOrder objects filtered by the customer_gender column
 * @method array findByHiddenTaxAmount(string $hidden_tax_amount) Return SalesFlatOrder objects filtered by the hidden_tax_amount column
 * @method array findByBaseHiddenTaxAmount(string $base_hidden_tax_amount) Return SalesFlatOrder objects filtered by the base_hidden_tax_amount column
 * @method array findByShippingHiddenTaxAmount(string $shipping_hidden_tax_amount) Return SalesFlatOrder objects filtered by the shipping_hidden_tax_amount column
 * @method array findByBaseShippingHiddenTaxAmnt(string $base_shipping_hidden_tax_amnt) Return SalesFlatOrder objects filtered by the base_shipping_hidden_tax_amnt column
 * @method array findByHiddenTaxInvoiced(string $hidden_tax_invoiced) Return SalesFlatOrder objects filtered by the hidden_tax_invoiced column
 * @method array findByBaseHiddenTaxInvoiced(string $base_hidden_tax_invoiced) Return SalesFlatOrder objects filtered by the base_hidden_tax_invoiced column
 * @method array findByHiddenTaxRefunded(string $hidden_tax_refunded) Return SalesFlatOrder objects filtered by the hidden_tax_refunded column
 * @method array findByBaseHiddenTaxRefunded(string $base_hidden_tax_refunded) Return SalesFlatOrder objects filtered by the base_hidden_tax_refunded column
 * @method array findByShippingInclTax(string $shipping_incl_tax) Return SalesFlatOrder objects filtered by the shipping_incl_tax column
 * @method array findByBaseShippingInclTax(string $base_shipping_incl_tax) Return SalesFlatOrder objects filtered by the base_shipping_incl_tax column
 * @method array findByCouponRuleName(string $coupon_rule_name) Return SalesFlatOrder objects filtered by the coupon_rule_name column
 * @method array findByPaypalIpnCustomerNotified(int $paypal_ipn_customer_notified) Return SalesFlatOrder objects filtered by the paypal_ipn_customer_notified column
 * @method array findByGiftMessageId(int $gift_message_id) Return SalesFlatOrder objects filtered by the gift_message_id column
 * @method array findByGroupdealsCouponFrom(string $groupdeals_coupon_from) Return SalesFlatOrder objects filtered by the groupdeals_coupon_from column
 * @method array findByGroupdealsCouponTo(string $groupdeals_coupon_to) Return SalesFlatOrder objects filtered by the groupdeals_coupon_to column
 * @method array findByGroupdealsCouponToEmail(string $groupdeals_coupon_to_email) Return SalesFlatOrder objects filtered by the groupdeals_coupon_to_email column
 * @method array findByGroupdealsCouponMessage(string $groupdeals_coupon_message) Return SalesFlatOrder objects filtered by the groupdeals_coupon_message column
 * @method array findByBaseCustomerBalanceAmount(string $base_customer_balance_amount) Return SalesFlatOrder objects filtered by the base_customer_balance_amount column
 * @method array findByCustomerBalanceAmount(string $customer_balance_amount) Return SalesFlatOrder objects filtered by the customer_balance_amount column
 * @method array findByBaseCustomerBalanceInvoiced(string $base_customer_balance_invoiced) Return SalesFlatOrder objects filtered by the base_customer_balance_invoiced column
 * @method array findByCustomerBalanceInvoiced(string $customer_balance_invoiced) Return SalesFlatOrder objects filtered by the customer_balance_invoiced column
 * @method array findByBaseCustomerBalanceRefunded(string $base_customer_balance_refunded) Return SalesFlatOrder objects filtered by the base_customer_balance_refunded column
 * @method array findByCustomerBalanceRefunded(string $customer_balance_refunded) Return SalesFlatOrder objects filtered by the customer_balance_refunded column
 * @method array findByBsCustomerBalTotalRefunded(string $bs_customer_bal_total_refunded) Return SalesFlatOrder objects filtered by the bs_customer_bal_total_refunded column
 * @method array findByCustomerBalTotalRefunded(string $customer_bal_total_refunded) Return SalesFlatOrder objects filtered by the customer_bal_total_refunded column
 * @method array findByGiftCards(string $gift_cards) Return SalesFlatOrder objects filtered by the gift_cards column
 * @method array findByBaseGiftCardsAmount(string $base_gift_cards_amount) Return SalesFlatOrder objects filtered by the base_gift_cards_amount column
 * @method array findByGiftCardsAmount(string $gift_cards_amount) Return SalesFlatOrder objects filtered by the gift_cards_amount column
 * @method array findByBaseGiftCardsInvoiced(string $base_gift_cards_invoiced) Return SalesFlatOrder objects filtered by the base_gift_cards_invoiced column
 * @method array findByGiftCardsInvoiced(string $gift_cards_invoiced) Return SalesFlatOrder objects filtered by the gift_cards_invoiced column
 * @method array findByBaseGiftCardsRefunded(string $base_gift_cards_refunded) Return SalesFlatOrder objects filtered by the base_gift_cards_refunded column
 * @method array findByGiftCardsRefunded(string $gift_cards_refunded) Return SalesFlatOrder objects filtered by the gift_cards_refunded column
 * @method array findByGwId(int $gw_id) Return SalesFlatOrder objects filtered by the gw_id column
 * @method array findByGwAllowGiftReceipt(int $gw_allow_gift_receipt) Return SalesFlatOrder objects filtered by the gw_allow_gift_receipt column
 * @method array findByGwAddCard(int $gw_add_card) Return SalesFlatOrder objects filtered by the gw_add_card column
 * @method array findByGwBasePrice(string $gw_base_price) Return SalesFlatOrder objects filtered by the gw_base_price column
 * @method array findByGwPrice(string $gw_price) Return SalesFlatOrder objects filtered by the gw_price column
 * @method array findByGwItemsBasePrice(string $gw_items_base_price) Return SalesFlatOrder objects filtered by the gw_items_base_price column
 * @method array findByGwItemsPrice(string $gw_items_price) Return SalesFlatOrder objects filtered by the gw_items_price column
 * @method array findByGwCardBasePrice(string $gw_card_base_price) Return SalesFlatOrder objects filtered by the gw_card_base_price column
 * @method array findByGwCardPrice(string $gw_card_price) Return SalesFlatOrder objects filtered by the gw_card_price column
 * @method array findByGwBaseTaxAmount(string $gw_base_tax_amount) Return SalesFlatOrder objects filtered by the gw_base_tax_amount column
 * @method array findByGwTaxAmount(string $gw_tax_amount) Return SalesFlatOrder objects filtered by the gw_tax_amount column
 * @method array findByGwItemsBaseTaxAmount(string $gw_items_base_tax_amount) Return SalesFlatOrder objects filtered by the gw_items_base_tax_amount column
 * @method array findByGwItemsTaxAmount(string $gw_items_tax_amount) Return SalesFlatOrder objects filtered by the gw_items_tax_amount column
 * @method array findByGwCardBaseTaxAmount(string $gw_card_base_tax_amount) Return SalesFlatOrder objects filtered by the gw_card_base_tax_amount column
 * @method array findByGwCardTaxAmount(string $gw_card_tax_amount) Return SalesFlatOrder objects filtered by the gw_card_tax_amount column
 * @method array findByGwBasePriceInvoiced(string $gw_base_price_invoiced) Return SalesFlatOrder objects filtered by the gw_base_price_invoiced column
 * @method array findByGwPriceInvoiced(string $gw_price_invoiced) Return SalesFlatOrder objects filtered by the gw_price_invoiced column
 * @method array findByGwItemsBasePriceInvoiced(string $gw_items_base_price_invoiced) Return SalesFlatOrder objects filtered by the gw_items_base_price_invoiced column
 * @method array findByGwItemsPriceInvoiced(string $gw_items_price_invoiced) Return SalesFlatOrder objects filtered by the gw_items_price_invoiced column
 * @method array findByGwCardBasePriceInvoiced(string $gw_card_base_price_invoiced) Return SalesFlatOrder objects filtered by the gw_card_base_price_invoiced column
 * @method array findByGwCardPriceInvoiced(string $gw_card_price_invoiced) Return SalesFlatOrder objects filtered by the gw_card_price_invoiced column
 * @method array findByGwBaseTaxAmountInvoiced(string $gw_base_tax_amount_invoiced) Return SalesFlatOrder objects filtered by the gw_base_tax_amount_invoiced column
 * @method array findByGwTaxAmountInvoiced(string $gw_tax_amount_invoiced) Return SalesFlatOrder objects filtered by the gw_tax_amount_invoiced column
 * @method array findByGwItemsBaseTaxInvoiced(string $gw_items_base_tax_invoiced) Return SalesFlatOrder objects filtered by the gw_items_base_tax_invoiced column
 * @method array findByGwItemsTaxInvoiced(string $gw_items_tax_invoiced) Return SalesFlatOrder objects filtered by the gw_items_tax_invoiced column
 * @method array findByGwCardBaseTaxInvoiced(string $gw_card_base_tax_invoiced) Return SalesFlatOrder objects filtered by the gw_card_base_tax_invoiced column
 * @method array findByGwCardTaxInvoiced(string $gw_card_tax_invoiced) Return SalesFlatOrder objects filtered by the gw_card_tax_invoiced column
 * @method array findByGwBasePriceRefunded(string $gw_base_price_refunded) Return SalesFlatOrder objects filtered by the gw_base_price_refunded column
 * @method array findByGwPriceRefunded(string $gw_price_refunded) Return SalesFlatOrder objects filtered by the gw_price_refunded column
 * @method array findByGwItemsBasePriceRefunded(string $gw_items_base_price_refunded) Return SalesFlatOrder objects filtered by the gw_items_base_price_refunded column
 * @method array findByGwItemsPriceRefunded(string $gw_items_price_refunded) Return SalesFlatOrder objects filtered by the gw_items_price_refunded column
 * @method array findByGwCardBasePriceRefunded(string $gw_card_base_price_refunded) Return SalesFlatOrder objects filtered by the gw_card_base_price_refunded column
 * @method array findByGwCardPriceRefunded(string $gw_card_price_refunded) Return SalesFlatOrder objects filtered by the gw_card_price_refunded column
 * @method array findByGwBaseTaxAmountRefunded(string $gw_base_tax_amount_refunded) Return SalesFlatOrder objects filtered by the gw_base_tax_amount_refunded column
 * @method array findByGwTaxAmountRefunded(string $gw_tax_amount_refunded) Return SalesFlatOrder objects filtered by the gw_tax_amount_refunded column
 * @method array findByGwItemsBaseTaxRefunded(string $gw_items_base_tax_refunded) Return SalesFlatOrder objects filtered by the gw_items_base_tax_refunded column
 * @method array findByGwItemsTaxRefunded(string $gw_items_tax_refunded) Return SalesFlatOrder objects filtered by the gw_items_tax_refunded column
 * @method array findByGwCardBaseTaxRefunded(string $gw_card_base_tax_refunded) Return SalesFlatOrder objects filtered by the gw_card_base_tax_refunded column
 * @method array findByGwCardTaxRefunded(string $gw_card_tax_refunded) Return SalesFlatOrder objects filtered by the gw_card_tax_refunded column
 * @method array findByRewardPointsBalance(int $reward_points_balance) Return SalesFlatOrder objects filtered by the reward_points_balance column
 * @method array findByBaseRewardCurrencyAmount(string $base_reward_currency_amount) Return SalesFlatOrder objects filtered by the base_reward_currency_amount column
 * @method array findByRewardCurrencyAmount(string $reward_currency_amount) Return SalesFlatOrder objects filtered by the reward_currency_amount column
 * @method array findByBaseRwrdCrrncyAmtInvoiced(string $base_rwrd_crrncy_amt_invoiced) Return SalesFlatOrder objects filtered by the base_rwrd_crrncy_amt_invoiced column
 * @method array findByRwrdCurrencyAmountInvoiced(string $rwrd_currency_amount_invoiced) Return SalesFlatOrder objects filtered by the rwrd_currency_amount_invoiced column
 * @method array findByBaseRwrdCrrncyAmntRefnded(string $base_rwrd_crrncy_amnt_refnded) Return SalesFlatOrder objects filtered by the base_rwrd_crrncy_amnt_refnded column
 * @method array findByRwrdCrrncyAmntRefunded(string $rwrd_crrncy_amnt_refunded) Return SalesFlatOrder objects filtered by the rwrd_crrncy_amnt_refunded column
 * @method array findByRewardPointsBalanceRefund(int $reward_points_balance_refund) Return SalesFlatOrder objects filtered by the reward_points_balance_refund column
 * @method array findByRewardPointsBalanceRefunded(int $reward_points_balance_refunded) Return SalesFlatOrder objects filtered by the reward_points_balance_refunded column
 * @method array findByRewardSalesrulePoints(int $reward_salesrule_points) Return SalesFlatOrder objects filtered by the reward_salesrule_points column
 * @method array findByVendorUsername(string $vendor_username) Return SalesFlatOrder objects filtered by the vendor_username column
 * @method array findByVendorName(string $vendor_name) Return SalesFlatOrder objects filtered by the vendor_name column
 * @method array findByVendorLastname(string $vendor_lastname) Return SalesFlatOrder objects filtered by the vendor_lastname column
 * @method array findByVendorEmail(string $vendor_email) Return SalesFlatOrder objects filtered by the vendor_email column
 * @method array findByPosId(string $pos_id) Return SalesFlatOrder objects filtered by the pos_id column
 * @method array findByPosOffice(string $pos_office) Return SalesFlatOrder objects filtered by the pos_office column
 * @method array findByPosCode(string $pos_code) Return SalesFlatOrder objects filtered by the pos_code column
 * @method array findByPosCountry(string $pos_country) Return SalesFlatOrder objects filtered by the pos_country column
 * @method array findByPosCity(string $pos_city) Return SalesFlatOrder objects filtered by the pos_city column
 * @method array findByPosPostalCode(string $pos_postal_code) Return SalesFlatOrder objects filtered by the pos_postal_code column
 * @method array findByPosAddress(string $pos_address) Return SalesFlatOrder objects filtered by the pos_address column
 * @method array findByPosPhone(string $pos_phone) Return SalesFlatOrder objects filtered by the pos_phone column
 * @method array findByCustomerIdentification(string $customer_identification) Return SalesFlatOrder objects filtered by the customer_identification column
 * @method array findByIsGift(int $is_gift) Return SalesFlatOrder objects filtered by the is_gift column
 * @method array findByGiftFor(string $gift_for) Return SalesFlatOrder objects filtered by the gift_for column
 * @method array findByGiftEmail(string $gift_email) Return SalesFlatOrder objects filtered by the gift_email column
 * @method array findByGiftMessage(string $gift_message) Return SalesFlatOrder objects filtered by the gift_message column
 * @method array findByGiftCitydept(string $gift_citydept) Return SalesFlatOrder objects filtered by the gift_citydept column
 * @method array findByGiftShipping(string $gift_shipping) Return SalesFlatOrder objects filtered by the gift_shipping column
 * @method array findByWasPayed(int $was_payed) Return SalesFlatOrder objects filtered by the was_payed column
 * @method array findByGiftForLastname(string $gift_for_lastname) Return SalesFlatOrder objects filtered by the gift_for_lastname column
 * @method array findBySciPaymentMethods(string $sci_payment_methods) Return SalesFlatOrder objects filtered by the sci_payment_methods column
 * @method array findByDiscountApplied(int $discount_applied) Return SalesFlatOrder objects filtered by the discount_applied column
 * @method array findByRewardsApplied(int $rewards_applied) Return SalesFlatOrder objects filtered by the rewards_applied column
 * @method array findByStockBeforePol(int $stock_before_pol) Return SalesFlatOrder objects filtered by the stock_before_pol column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseSalesFlatOrderQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSalesFlatOrderQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'atmadmin';
        }
        if (null === $modelName) {
            $modelName = 'SalesFlatOrder';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SalesFlatOrderQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SalesFlatOrderQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SalesFlatOrderQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SalesFlatOrderQuery) {
            return $criteria;
        }
        $query = new SalesFlatOrderQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   SalesFlatOrder|SalesFlatOrder[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SalesFlatOrderPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 SalesFlatOrder A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByEntityId($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 SalesFlatOrder A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT entity_id, state, status, coupon_code, protect_code, shipping_description, is_virtual, store_id, customer_id, base_discount_amount, base_discount_canceled, base_discount_invoiced, base_discount_refunded, base_grand_total, base_shipping_amount, base_shipping_canceled, base_shipping_invoiced, base_shipping_refunded, base_shipping_tax_amount, base_shipping_tax_refunded, base_subtotal, base_subtotal_canceled, base_subtotal_invoiced, base_subtotal_refunded, base_tax_amount, base_tax_canceled, base_tax_invoiced, base_tax_refunded, base_to_global_rate, base_to_order_rate, base_total_canceled, base_total_invoiced, base_total_invoiced_cost, base_total_offline_refunded, base_total_online_refunded, base_total_paid, base_total_qty_ordered, base_total_refunded, discount_amount, discount_canceled, discount_invoiced, discount_refunded, grand_total, shipping_amount, shipping_canceled, shipping_invoiced, shipping_refunded, shipping_tax_amount, shipping_tax_refunded, store_to_base_rate, store_to_order_rate, subtotal, subtotal_canceled, subtotal_invoiced, subtotal_refunded, tax_amount, tax_canceled, tax_invoiced, tax_refunded, total_canceled, total_invoiced, total_offline_refunded, total_online_refunded, total_paid, total_qty_ordered, total_refunded, can_ship_partially, can_ship_partially_item, customer_is_guest, customer_note_notify, billing_address_id, customer_group_id, edit_increment, email_sent, forced_shipment_with_invoice, payment_auth_expiration, quote_address_id, quote_id, shipping_address_id, adjustment_negative, adjustment_positive, base_adjustment_negative, base_adjustment_positive, base_shipping_discount_amount, base_subtotal_incl_tax, base_total_due, payment_authorization_amount, shipping_discount_amount, subtotal_incl_tax, total_due, weight, customer_dob, increment_id, applied_rule_ids, base_currency_code, customer_email, customer_firstname, customer_lastname, customer_middlename, customer_prefix, customer_suffix, customer_taxvat, discount_description, ext_customer_id, ext_order_id, global_currency_code, hold_before_state, hold_before_status, order_currency_code, original_increment_id, relation_child_id, relation_child_real_id, relation_parent_id, relation_parent_real_id, remote_ip, shipping_method, store_currency_code, store_name, x_forwarded_for, customer_note, created_at, updated_at, total_item_count, customer_gender, hidden_tax_amount, base_hidden_tax_amount, shipping_hidden_tax_amount, base_shipping_hidden_tax_amnt, hidden_tax_invoiced, base_hidden_tax_invoiced, hidden_tax_refunded, base_hidden_tax_refunded, shipping_incl_tax, base_shipping_incl_tax, coupon_rule_name, paypal_ipn_customer_notified, gift_message_id, groupdeals_coupon_from, groupdeals_coupon_to, groupdeals_coupon_to_email, groupdeals_coupon_message, base_customer_balance_amount, customer_balance_amount, base_customer_balance_invoiced, customer_balance_invoiced, base_customer_balance_refunded, customer_balance_refunded, bs_customer_bal_total_refunded, customer_bal_total_refunded, gift_cards, base_gift_cards_amount, gift_cards_amount, base_gift_cards_invoiced, gift_cards_invoiced, base_gift_cards_refunded, gift_cards_refunded, gw_id, gw_allow_gift_receipt, gw_add_card, gw_base_price, gw_price, gw_items_base_price, gw_items_price, gw_card_base_price, gw_card_price, gw_base_tax_amount, gw_tax_amount, gw_items_base_tax_amount, gw_items_tax_amount, gw_card_base_tax_amount, gw_card_tax_amount, gw_base_price_invoiced, gw_price_invoiced, gw_items_base_price_invoiced, gw_items_price_invoiced, gw_card_base_price_invoiced, gw_card_price_invoiced, gw_base_tax_amount_invoiced, gw_tax_amount_invoiced, gw_items_base_tax_invoiced, gw_items_tax_invoiced, gw_card_base_tax_invoiced, gw_card_tax_invoiced, gw_base_price_refunded, gw_price_refunded, gw_items_base_price_refunded, gw_items_price_refunded, gw_card_base_price_refunded, gw_card_price_refunded, gw_base_tax_amount_refunded, gw_tax_amount_refunded, gw_items_base_tax_refunded, gw_items_tax_refunded, gw_card_base_tax_refunded, gw_card_tax_refunded, reward_points_balance, base_reward_currency_amount, reward_currency_amount, base_rwrd_crrncy_amt_invoiced, rwrd_currency_amount_invoiced, base_rwrd_crrncy_amnt_refnded, rwrd_crrncy_amnt_refunded, reward_points_balance_refund, reward_points_balance_refunded, reward_salesrule_points, vendor_username, vendor_name, vendor_lastname, vendor_email, pos_id, pos_office, pos_code, pos_country, pos_city, pos_postal_code, pos_address, pos_phone, customer_identification, is_gift, gift_for, gift_email, gift_message, gift_citydept, gift_shipping, was_payed, gift_for_lastname, sci_payment_methods, discount_applied, rewards_applied, stock_before_pol FROM sales_flat_order WHERE entity_id = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new SalesFlatOrder();
            $obj->hydrate($row);
            SalesFlatOrderPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return SalesFlatOrder|SalesFlatOrder[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|SalesFlatOrder[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SalesFlatOrderPeer::ENTITY_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SalesFlatOrderPeer::ENTITY_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the entity_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEntityId(1234); // WHERE entity_id = 1234
     * $query->filterByEntityId(array(12, 34)); // WHERE entity_id IN (12, 34)
     * $query->filterByEntityId(array('min' => 12)); // WHERE entity_id >= 12
     * $query->filterByEntityId(array('max' => 12)); // WHERE entity_id <= 12
     * </code>
     *
     * @param     mixed $entityId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByEntityId($entityId = null, $comparison = null)
    {
        if (is_array($entityId)) {
            $useMinMax = false;
            if (isset($entityId['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::ENTITY_ID, $entityId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entityId['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::ENTITY_ID, $entityId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::ENTITY_ID, $entityId, $comparison);
    }

    /**
     * Filter the query on the state column
     *
     * Example usage:
     * <code>
     * $query->filterByState('fooValue');   // WHERE state = 'fooValue'
     * $query->filterByState('%fooValue%'); // WHERE state LIKE '%fooValue%'
     * </code>
     *
     * @param     string $state The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByState($state = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($state)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $state)) {
                $state = str_replace('*', '%', $state);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::STATE, $state, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus('fooValue');   // WHERE status = 'fooValue'
     * $query->filterByStatus('%fooValue%'); // WHERE status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $status The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($status)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $status)) {
                $status = str_replace('*', '%', $status);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::STATUS, $status, $comparison);
    }

    /**
     * Filter the query on the coupon_code column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponCode('fooValue');   // WHERE coupon_code = 'fooValue'
     * $query->filterByCouponCode('%fooValue%'); // WHERE coupon_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $couponCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCouponCode($couponCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($couponCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $couponCode)) {
                $couponCode = str_replace('*', '%', $couponCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::COUPON_CODE, $couponCode, $comparison);
    }

    /**
     * Filter the query on the protect_code column
     *
     * Example usage:
     * <code>
     * $query->filterByProtectCode('fooValue');   // WHERE protect_code = 'fooValue'
     * $query->filterByProtectCode('%fooValue%'); // WHERE protect_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $protectCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByProtectCode($protectCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($protectCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $protectCode)) {
                $protectCode = str_replace('*', '%', $protectCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::PROTECT_CODE, $protectCode, $comparison);
    }

    /**
     * Filter the query on the shipping_description column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingDescription('fooValue');   // WHERE shipping_description = 'fooValue'
     * $query->filterByShippingDescription('%fooValue%'); // WHERE shipping_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shippingDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingDescription($shippingDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shippingDescription)) {
                $shippingDescription = str_replace('*', '%', $shippingDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_DESCRIPTION, $shippingDescription, $comparison);
    }

    /**
     * Filter the query on the is_virtual column
     *
     * Example usage:
     * <code>
     * $query->filterByIsVirtual(1234); // WHERE is_virtual = 1234
     * $query->filterByIsVirtual(array(12, 34)); // WHERE is_virtual IN (12, 34)
     * $query->filterByIsVirtual(array('min' => 12)); // WHERE is_virtual >= 12
     * $query->filterByIsVirtual(array('max' => 12)); // WHERE is_virtual <= 12
     * </code>
     *
     * @param     mixed $isVirtual The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByIsVirtual($isVirtual = null, $comparison = null)
    {
        if (is_array($isVirtual)) {
            $useMinMax = false;
            if (isset($isVirtual['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::IS_VIRTUAL, $isVirtual['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isVirtual['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::IS_VIRTUAL, $isVirtual['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::IS_VIRTUAL, $isVirtual, $comparison);
    }

    /**
     * Filter the query on the store_id column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreId(1234); // WHERE store_id = 1234
     * $query->filterByStoreId(array(12, 34)); // WHERE store_id IN (12, 34)
     * $query->filterByStoreId(array('min' => 12)); // WHERE store_id >= 12
     * $query->filterByStoreId(array('max' => 12)); // WHERE store_id <= 12
     * </code>
     *
     * @see       filterByCoreStore()
     *
     * @param     mixed $storeId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByStoreId($storeId = null, $comparison = null)
    {
        if (is_array($storeId)) {
            $useMinMax = false;
            if (isset($storeId['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::STORE_ID, $storeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($storeId['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::STORE_ID, $storeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::STORE_ID, $storeId, $comparison);
    }

    /**
     * Filter the query on the customer_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerId(1234); // WHERE customer_id = 1234
     * $query->filterByCustomerId(array(12, 34)); // WHERE customer_id IN (12, 34)
     * $query->filterByCustomerId(array('min' => 12)); // WHERE customer_id >= 12
     * $query->filterByCustomerId(array('max' => 12)); // WHERE customer_id <= 12
     * </code>
     *
     * @see       filterByCustomerEntity()
     *
     * @param     mixed $customerId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerId($customerId = null, $comparison = null)
    {
        if (is_array($customerId)) {
            $useMinMax = false;
            if (isset($customerId['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_ID, $customerId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerId['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_ID, $customerId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_ID, $customerId, $comparison);
    }

    /**
     * Filter the query on the base_discount_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseDiscountAmount(1234); // WHERE base_discount_amount = 1234
     * $query->filterByBaseDiscountAmount(array(12, 34)); // WHERE base_discount_amount IN (12, 34)
     * $query->filterByBaseDiscountAmount(array('min' => 12)); // WHERE base_discount_amount >= 12
     * $query->filterByBaseDiscountAmount(array('max' => 12)); // WHERE base_discount_amount <= 12
     * </code>
     *
     * @param     mixed $baseDiscountAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseDiscountAmount($baseDiscountAmount = null, $comparison = null)
    {
        if (is_array($baseDiscountAmount)) {
            $useMinMax = false;
            if (isset($baseDiscountAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_AMOUNT, $baseDiscountAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseDiscountAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_AMOUNT, $baseDiscountAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_AMOUNT, $baseDiscountAmount, $comparison);
    }

    /**
     * Filter the query on the base_discount_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseDiscountCanceled(1234); // WHERE base_discount_canceled = 1234
     * $query->filterByBaseDiscountCanceled(array(12, 34)); // WHERE base_discount_canceled IN (12, 34)
     * $query->filterByBaseDiscountCanceled(array('min' => 12)); // WHERE base_discount_canceled >= 12
     * $query->filterByBaseDiscountCanceled(array('max' => 12)); // WHERE base_discount_canceled <= 12
     * </code>
     *
     * @param     mixed $baseDiscountCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseDiscountCanceled($baseDiscountCanceled = null, $comparison = null)
    {
        if (is_array($baseDiscountCanceled)) {
            $useMinMax = false;
            if (isset($baseDiscountCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_CANCELED, $baseDiscountCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseDiscountCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_CANCELED, $baseDiscountCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_CANCELED, $baseDiscountCanceled, $comparison);
    }

    /**
     * Filter the query on the base_discount_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseDiscountInvoiced(1234); // WHERE base_discount_invoiced = 1234
     * $query->filterByBaseDiscountInvoiced(array(12, 34)); // WHERE base_discount_invoiced IN (12, 34)
     * $query->filterByBaseDiscountInvoiced(array('min' => 12)); // WHERE base_discount_invoiced >= 12
     * $query->filterByBaseDiscountInvoiced(array('max' => 12)); // WHERE base_discount_invoiced <= 12
     * </code>
     *
     * @param     mixed $baseDiscountInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseDiscountInvoiced($baseDiscountInvoiced = null, $comparison = null)
    {
        if (is_array($baseDiscountInvoiced)) {
            $useMinMax = false;
            if (isset($baseDiscountInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_INVOICED, $baseDiscountInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseDiscountInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_INVOICED, $baseDiscountInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_INVOICED, $baseDiscountInvoiced, $comparison);
    }

    /**
     * Filter the query on the base_discount_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseDiscountRefunded(1234); // WHERE base_discount_refunded = 1234
     * $query->filterByBaseDiscountRefunded(array(12, 34)); // WHERE base_discount_refunded IN (12, 34)
     * $query->filterByBaseDiscountRefunded(array('min' => 12)); // WHERE base_discount_refunded >= 12
     * $query->filterByBaseDiscountRefunded(array('max' => 12)); // WHERE base_discount_refunded <= 12
     * </code>
     *
     * @param     mixed $baseDiscountRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseDiscountRefunded($baseDiscountRefunded = null, $comparison = null)
    {
        if (is_array($baseDiscountRefunded)) {
            $useMinMax = false;
            if (isset($baseDiscountRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_REFUNDED, $baseDiscountRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseDiscountRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_REFUNDED, $baseDiscountRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_DISCOUNT_REFUNDED, $baseDiscountRefunded, $comparison);
    }

    /**
     * Filter the query on the base_grand_total column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseGrandTotal(1234); // WHERE base_grand_total = 1234
     * $query->filterByBaseGrandTotal(array(12, 34)); // WHERE base_grand_total IN (12, 34)
     * $query->filterByBaseGrandTotal(array('min' => 12)); // WHERE base_grand_total >= 12
     * $query->filterByBaseGrandTotal(array('max' => 12)); // WHERE base_grand_total <= 12
     * </code>
     *
     * @param     mixed $baseGrandTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseGrandTotal($baseGrandTotal = null, $comparison = null)
    {
        if (is_array($baseGrandTotal)) {
            $useMinMax = false;
            if (isset($baseGrandTotal['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_GRAND_TOTAL, $baseGrandTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseGrandTotal['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_GRAND_TOTAL, $baseGrandTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_GRAND_TOTAL, $baseGrandTotal, $comparison);
    }

    /**
     * Filter the query on the base_shipping_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseShippingAmount(1234); // WHERE base_shipping_amount = 1234
     * $query->filterByBaseShippingAmount(array(12, 34)); // WHERE base_shipping_amount IN (12, 34)
     * $query->filterByBaseShippingAmount(array('min' => 12)); // WHERE base_shipping_amount >= 12
     * $query->filterByBaseShippingAmount(array('max' => 12)); // WHERE base_shipping_amount <= 12
     * </code>
     *
     * @param     mixed $baseShippingAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseShippingAmount($baseShippingAmount = null, $comparison = null)
    {
        if (is_array($baseShippingAmount)) {
            $useMinMax = false;
            if (isset($baseShippingAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_AMOUNT, $baseShippingAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseShippingAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_AMOUNT, $baseShippingAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_AMOUNT, $baseShippingAmount, $comparison);
    }

    /**
     * Filter the query on the base_shipping_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseShippingCanceled(1234); // WHERE base_shipping_canceled = 1234
     * $query->filterByBaseShippingCanceled(array(12, 34)); // WHERE base_shipping_canceled IN (12, 34)
     * $query->filterByBaseShippingCanceled(array('min' => 12)); // WHERE base_shipping_canceled >= 12
     * $query->filterByBaseShippingCanceled(array('max' => 12)); // WHERE base_shipping_canceled <= 12
     * </code>
     *
     * @param     mixed $baseShippingCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseShippingCanceled($baseShippingCanceled = null, $comparison = null)
    {
        if (is_array($baseShippingCanceled)) {
            $useMinMax = false;
            if (isset($baseShippingCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_CANCELED, $baseShippingCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseShippingCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_CANCELED, $baseShippingCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_CANCELED, $baseShippingCanceled, $comparison);
    }

    /**
     * Filter the query on the base_shipping_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseShippingInvoiced(1234); // WHERE base_shipping_invoiced = 1234
     * $query->filterByBaseShippingInvoiced(array(12, 34)); // WHERE base_shipping_invoiced IN (12, 34)
     * $query->filterByBaseShippingInvoiced(array('min' => 12)); // WHERE base_shipping_invoiced >= 12
     * $query->filterByBaseShippingInvoiced(array('max' => 12)); // WHERE base_shipping_invoiced <= 12
     * </code>
     *
     * @param     mixed $baseShippingInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseShippingInvoiced($baseShippingInvoiced = null, $comparison = null)
    {
        if (is_array($baseShippingInvoiced)) {
            $useMinMax = false;
            if (isset($baseShippingInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_INVOICED, $baseShippingInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseShippingInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_INVOICED, $baseShippingInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_INVOICED, $baseShippingInvoiced, $comparison);
    }

    /**
     * Filter the query on the base_shipping_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseShippingRefunded(1234); // WHERE base_shipping_refunded = 1234
     * $query->filterByBaseShippingRefunded(array(12, 34)); // WHERE base_shipping_refunded IN (12, 34)
     * $query->filterByBaseShippingRefunded(array('min' => 12)); // WHERE base_shipping_refunded >= 12
     * $query->filterByBaseShippingRefunded(array('max' => 12)); // WHERE base_shipping_refunded <= 12
     * </code>
     *
     * @param     mixed $baseShippingRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseShippingRefunded($baseShippingRefunded = null, $comparison = null)
    {
        if (is_array($baseShippingRefunded)) {
            $useMinMax = false;
            if (isset($baseShippingRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_REFUNDED, $baseShippingRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseShippingRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_REFUNDED, $baseShippingRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_REFUNDED, $baseShippingRefunded, $comparison);
    }

    /**
     * Filter the query on the base_shipping_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseShippingTaxAmount(1234); // WHERE base_shipping_tax_amount = 1234
     * $query->filterByBaseShippingTaxAmount(array(12, 34)); // WHERE base_shipping_tax_amount IN (12, 34)
     * $query->filterByBaseShippingTaxAmount(array('min' => 12)); // WHERE base_shipping_tax_amount >= 12
     * $query->filterByBaseShippingTaxAmount(array('max' => 12)); // WHERE base_shipping_tax_amount <= 12
     * </code>
     *
     * @param     mixed $baseShippingTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseShippingTaxAmount($baseShippingTaxAmount = null, $comparison = null)
    {
        if (is_array($baseShippingTaxAmount)) {
            $useMinMax = false;
            if (isset($baseShippingTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_TAX_AMOUNT, $baseShippingTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseShippingTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_TAX_AMOUNT, $baseShippingTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_TAX_AMOUNT, $baseShippingTaxAmount, $comparison);
    }

    /**
     * Filter the query on the base_shipping_tax_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseShippingTaxRefunded(1234); // WHERE base_shipping_tax_refunded = 1234
     * $query->filterByBaseShippingTaxRefunded(array(12, 34)); // WHERE base_shipping_tax_refunded IN (12, 34)
     * $query->filterByBaseShippingTaxRefunded(array('min' => 12)); // WHERE base_shipping_tax_refunded >= 12
     * $query->filterByBaseShippingTaxRefunded(array('max' => 12)); // WHERE base_shipping_tax_refunded <= 12
     * </code>
     *
     * @param     mixed $baseShippingTaxRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseShippingTaxRefunded($baseShippingTaxRefunded = null, $comparison = null)
    {
        if (is_array($baseShippingTaxRefunded)) {
            $useMinMax = false;
            if (isset($baseShippingTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_TAX_REFUNDED, $baseShippingTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseShippingTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_TAX_REFUNDED, $baseShippingTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_TAX_REFUNDED, $baseShippingTaxRefunded, $comparison);
    }

    /**
     * Filter the query on the base_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseSubtotal(1234); // WHERE base_subtotal = 1234
     * $query->filterByBaseSubtotal(array(12, 34)); // WHERE base_subtotal IN (12, 34)
     * $query->filterByBaseSubtotal(array('min' => 12)); // WHERE base_subtotal >= 12
     * $query->filterByBaseSubtotal(array('max' => 12)); // WHERE base_subtotal <= 12
     * </code>
     *
     * @param     mixed $baseSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseSubtotal($baseSubtotal = null, $comparison = null)
    {
        if (is_array($baseSubtotal)) {
            $useMinMax = false;
            if (isset($baseSubtotal['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL, $baseSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseSubtotal['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL, $baseSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL, $baseSubtotal, $comparison);
    }

    /**
     * Filter the query on the base_subtotal_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseSubtotalCanceled(1234); // WHERE base_subtotal_canceled = 1234
     * $query->filterByBaseSubtotalCanceled(array(12, 34)); // WHERE base_subtotal_canceled IN (12, 34)
     * $query->filterByBaseSubtotalCanceled(array('min' => 12)); // WHERE base_subtotal_canceled >= 12
     * $query->filterByBaseSubtotalCanceled(array('max' => 12)); // WHERE base_subtotal_canceled <= 12
     * </code>
     *
     * @param     mixed $baseSubtotalCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseSubtotalCanceled($baseSubtotalCanceled = null, $comparison = null)
    {
        if (is_array($baseSubtotalCanceled)) {
            $useMinMax = false;
            if (isset($baseSubtotalCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_CANCELED, $baseSubtotalCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseSubtotalCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_CANCELED, $baseSubtotalCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_CANCELED, $baseSubtotalCanceled, $comparison);
    }

    /**
     * Filter the query on the base_subtotal_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseSubtotalInvoiced(1234); // WHERE base_subtotal_invoiced = 1234
     * $query->filterByBaseSubtotalInvoiced(array(12, 34)); // WHERE base_subtotal_invoiced IN (12, 34)
     * $query->filterByBaseSubtotalInvoiced(array('min' => 12)); // WHERE base_subtotal_invoiced >= 12
     * $query->filterByBaseSubtotalInvoiced(array('max' => 12)); // WHERE base_subtotal_invoiced <= 12
     * </code>
     *
     * @param     mixed $baseSubtotalInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseSubtotalInvoiced($baseSubtotalInvoiced = null, $comparison = null)
    {
        if (is_array($baseSubtotalInvoiced)) {
            $useMinMax = false;
            if (isset($baseSubtotalInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_INVOICED, $baseSubtotalInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseSubtotalInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_INVOICED, $baseSubtotalInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_INVOICED, $baseSubtotalInvoiced, $comparison);
    }

    /**
     * Filter the query on the base_subtotal_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseSubtotalRefunded(1234); // WHERE base_subtotal_refunded = 1234
     * $query->filterByBaseSubtotalRefunded(array(12, 34)); // WHERE base_subtotal_refunded IN (12, 34)
     * $query->filterByBaseSubtotalRefunded(array('min' => 12)); // WHERE base_subtotal_refunded >= 12
     * $query->filterByBaseSubtotalRefunded(array('max' => 12)); // WHERE base_subtotal_refunded <= 12
     * </code>
     *
     * @param     mixed $baseSubtotalRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseSubtotalRefunded($baseSubtotalRefunded = null, $comparison = null)
    {
        if (is_array($baseSubtotalRefunded)) {
            $useMinMax = false;
            if (isset($baseSubtotalRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_REFUNDED, $baseSubtotalRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseSubtotalRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_REFUNDED, $baseSubtotalRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_REFUNDED, $baseSubtotalRefunded, $comparison);
    }

    /**
     * Filter the query on the base_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTaxAmount(1234); // WHERE base_tax_amount = 1234
     * $query->filterByBaseTaxAmount(array(12, 34)); // WHERE base_tax_amount IN (12, 34)
     * $query->filterByBaseTaxAmount(array('min' => 12)); // WHERE base_tax_amount >= 12
     * $query->filterByBaseTaxAmount(array('max' => 12)); // WHERE base_tax_amount <= 12
     * </code>
     *
     * @param     mixed $baseTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTaxAmount($baseTaxAmount = null, $comparison = null)
    {
        if (is_array($baseTaxAmount)) {
            $useMinMax = false;
            if (isset($baseTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_AMOUNT, $baseTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_AMOUNT, $baseTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_AMOUNT, $baseTaxAmount, $comparison);
    }

    /**
     * Filter the query on the base_tax_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTaxCanceled(1234); // WHERE base_tax_canceled = 1234
     * $query->filterByBaseTaxCanceled(array(12, 34)); // WHERE base_tax_canceled IN (12, 34)
     * $query->filterByBaseTaxCanceled(array('min' => 12)); // WHERE base_tax_canceled >= 12
     * $query->filterByBaseTaxCanceled(array('max' => 12)); // WHERE base_tax_canceled <= 12
     * </code>
     *
     * @param     mixed $baseTaxCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTaxCanceled($baseTaxCanceled = null, $comparison = null)
    {
        if (is_array($baseTaxCanceled)) {
            $useMinMax = false;
            if (isset($baseTaxCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_CANCELED, $baseTaxCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTaxCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_CANCELED, $baseTaxCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_CANCELED, $baseTaxCanceled, $comparison);
    }

    /**
     * Filter the query on the base_tax_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTaxInvoiced(1234); // WHERE base_tax_invoiced = 1234
     * $query->filterByBaseTaxInvoiced(array(12, 34)); // WHERE base_tax_invoiced IN (12, 34)
     * $query->filterByBaseTaxInvoiced(array('min' => 12)); // WHERE base_tax_invoiced >= 12
     * $query->filterByBaseTaxInvoiced(array('max' => 12)); // WHERE base_tax_invoiced <= 12
     * </code>
     *
     * @param     mixed $baseTaxInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTaxInvoiced($baseTaxInvoiced = null, $comparison = null)
    {
        if (is_array($baseTaxInvoiced)) {
            $useMinMax = false;
            if (isset($baseTaxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_INVOICED, $baseTaxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTaxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_INVOICED, $baseTaxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_INVOICED, $baseTaxInvoiced, $comparison);
    }

    /**
     * Filter the query on the base_tax_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTaxRefunded(1234); // WHERE base_tax_refunded = 1234
     * $query->filterByBaseTaxRefunded(array(12, 34)); // WHERE base_tax_refunded IN (12, 34)
     * $query->filterByBaseTaxRefunded(array('min' => 12)); // WHERE base_tax_refunded >= 12
     * $query->filterByBaseTaxRefunded(array('max' => 12)); // WHERE base_tax_refunded <= 12
     * </code>
     *
     * @param     mixed $baseTaxRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTaxRefunded($baseTaxRefunded = null, $comparison = null)
    {
        if (is_array($baseTaxRefunded)) {
            $useMinMax = false;
            if (isset($baseTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_REFUNDED, $baseTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_REFUNDED, $baseTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TAX_REFUNDED, $baseTaxRefunded, $comparison);
    }

    /**
     * Filter the query on the base_to_global_rate column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseToGlobalRate(1234); // WHERE base_to_global_rate = 1234
     * $query->filterByBaseToGlobalRate(array(12, 34)); // WHERE base_to_global_rate IN (12, 34)
     * $query->filterByBaseToGlobalRate(array('min' => 12)); // WHERE base_to_global_rate >= 12
     * $query->filterByBaseToGlobalRate(array('max' => 12)); // WHERE base_to_global_rate <= 12
     * </code>
     *
     * @param     mixed $baseToGlobalRate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseToGlobalRate($baseToGlobalRate = null, $comparison = null)
    {
        if (is_array($baseToGlobalRate)) {
            $useMinMax = false;
            if (isset($baseToGlobalRate['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TO_GLOBAL_RATE, $baseToGlobalRate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseToGlobalRate['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TO_GLOBAL_RATE, $baseToGlobalRate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TO_GLOBAL_RATE, $baseToGlobalRate, $comparison);
    }

    /**
     * Filter the query on the base_to_order_rate column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseToOrderRate(1234); // WHERE base_to_order_rate = 1234
     * $query->filterByBaseToOrderRate(array(12, 34)); // WHERE base_to_order_rate IN (12, 34)
     * $query->filterByBaseToOrderRate(array('min' => 12)); // WHERE base_to_order_rate >= 12
     * $query->filterByBaseToOrderRate(array('max' => 12)); // WHERE base_to_order_rate <= 12
     * </code>
     *
     * @param     mixed $baseToOrderRate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseToOrderRate($baseToOrderRate = null, $comparison = null)
    {
        if (is_array($baseToOrderRate)) {
            $useMinMax = false;
            if (isset($baseToOrderRate['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TO_ORDER_RATE, $baseToOrderRate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseToOrderRate['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TO_ORDER_RATE, $baseToOrderRate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TO_ORDER_RATE, $baseToOrderRate, $comparison);
    }

    /**
     * Filter the query on the base_total_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTotalCanceled(1234); // WHERE base_total_canceled = 1234
     * $query->filterByBaseTotalCanceled(array(12, 34)); // WHERE base_total_canceled IN (12, 34)
     * $query->filterByBaseTotalCanceled(array('min' => 12)); // WHERE base_total_canceled >= 12
     * $query->filterByBaseTotalCanceled(array('max' => 12)); // WHERE base_total_canceled <= 12
     * </code>
     *
     * @param     mixed $baseTotalCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTotalCanceled($baseTotalCanceled = null, $comparison = null)
    {
        if (is_array($baseTotalCanceled)) {
            $useMinMax = false;
            if (isset($baseTotalCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_CANCELED, $baseTotalCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTotalCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_CANCELED, $baseTotalCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_CANCELED, $baseTotalCanceled, $comparison);
    }

    /**
     * Filter the query on the base_total_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTotalInvoiced(1234); // WHERE base_total_invoiced = 1234
     * $query->filterByBaseTotalInvoiced(array(12, 34)); // WHERE base_total_invoiced IN (12, 34)
     * $query->filterByBaseTotalInvoiced(array('min' => 12)); // WHERE base_total_invoiced >= 12
     * $query->filterByBaseTotalInvoiced(array('max' => 12)); // WHERE base_total_invoiced <= 12
     * </code>
     *
     * @param     mixed $baseTotalInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTotalInvoiced($baseTotalInvoiced = null, $comparison = null)
    {
        if (is_array($baseTotalInvoiced)) {
            $useMinMax = false;
            if (isset($baseTotalInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_INVOICED, $baseTotalInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTotalInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_INVOICED, $baseTotalInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_INVOICED, $baseTotalInvoiced, $comparison);
    }

    /**
     * Filter the query on the base_total_invoiced_cost column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTotalInvoicedCost(1234); // WHERE base_total_invoiced_cost = 1234
     * $query->filterByBaseTotalInvoicedCost(array(12, 34)); // WHERE base_total_invoiced_cost IN (12, 34)
     * $query->filterByBaseTotalInvoicedCost(array('min' => 12)); // WHERE base_total_invoiced_cost >= 12
     * $query->filterByBaseTotalInvoicedCost(array('max' => 12)); // WHERE base_total_invoiced_cost <= 12
     * </code>
     *
     * @param     mixed $baseTotalInvoicedCost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTotalInvoicedCost($baseTotalInvoicedCost = null, $comparison = null)
    {
        if (is_array($baseTotalInvoicedCost)) {
            $useMinMax = false;
            if (isset($baseTotalInvoicedCost['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_INVOICED_COST, $baseTotalInvoicedCost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTotalInvoicedCost['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_INVOICED_COST, $baseTotalInvoicedCost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_INVOICED_COST, $baseTotalInvoicedCost, $comparison);
    }

    /**
     * Filter the query on the base_total_offline_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTotalOfflineRefunded(1234); // WHERE base_total_offline_refunded = 1234
     * $query->filterByBaseTotalOfflineRefunded(array(12, 34)); // WHERE base_total_offline_refunded IN (12, 34)
     * $query->filterByBaseTotalOfflineRefunded(array('min' => 12)); // WHERE base_total_offline_refunded >= 12
     * $query->filterByBaseTotalOfflineRefunded(array('max' => 12)); // WHERE base_total_offline_refunded <= 12
     * </code>
     *
     * @param     mixed $baseTotalOfflineRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTotalOfflineRefunded($baseTotalOfflineRefunded = null, $comparison = null)
    {
        if (is_array($baseTotalOfflineRefunded)) {
            $useMinMax = false;
            if (isset($baseTotalOfflineRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_OFFLINE_REFUNDED, $baseTotalOfflineRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTotalOfflineRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_OFFLINE_REFUNDED, $baseTotalOfflineRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_OFFLINE_REFUNDED, $baseTotalOfflineRefunded, $comparison);
    }

    /**
     * Filter the query on the base_total_online_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTotalOnlineRefunded(1234); // WHERE base_total_online_refunded = 1234
     * $query->filterByBaseTotalOnlineRefunded(array(12, 34)); // WHERE base_total_online_refunded IN (12, 34)
     * $query->filterByBaseTotalOnlineRefunded(array('min' => 12)); // WHERE base_total_online_refunded >= 12
     * $query->filterByBaseTotalOnlineRefunded(array('max' => 12)); // WHERE base_total_online_refunded <= 12
     * </code>
     *
     * @param     mixed $baseTotalOnlineRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTotalOnlineRefunded($baseTotalOnlineRefunded = null, $comparison = null)
    {
        if (is_array($baseTotalOnlineRefunded)) {
            $useMinMax = false;
            if (isset($baseTotalOnlineRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_ONLINE_REFUNDED, $baseTotalOnlineRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTotalOnlineRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_ONLINE_REFUNDED, $baseTotalOnlineRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_ONLINE_REFUNDED, $baseTotalOnlineRefunded, $comparison);
    }

    /**
     * Filter the query on the base_total_paid column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTotalPaid(1234); // WHERE base_total_paid = 1234
     * $query->filterByBaseTotalPaid(array(12, 34)); // WHERE base_total_paid IN (12, 34)
     * $query->filterByBaseTotalPaid(array('min' => 12)); // WHERE base_total_paid >= 12
     * $query->filterByBaseTotalPaid(array('max' => 12)); // WHERE base_total_paid <= 12
     * </code>
     *
     * @param     mixed $baseTotalPaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTotalPaid($baseTotalPaid = null, $comparison = null)
    {
        if (is_array($baseTotalPaid)) {
            $useMinMax = false;
            if (isset($baseTotalPaid['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_PAID, $baseTotalPaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTotalPaid['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_PAID, $baseTotalPaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_PAID, $baseTotalPaid, $comparison);
    }

    /**
     * Filter the query on the base_total_qty_ordered column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTotalQtyOrdered(1234); // WHERE base_total_qty_ordered = 1234
     * $query->filterByBaseTotalQtyOrdered(array(12, 34)); // WHERE base_total_qty_ordered IN (12, 34)
     * $query->filterByBaseTotalQtyOrdered(array('min' => 12)); // WHERE base_total_qty_ordered >= 12
     * $query->filterByBaseTotalQtyOrdered(array('max' => 12)); // WHERE base_total_qty_ordered <= 12
     * </code>
     *
     * @param     mixed $baseTotalQtyOrdered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTotalQtyOrdered($baseTotalQtyOrdered = null, $comparison = null)
    {
        if (is_array($baseTotalQtyOrdered)) {
            $useMinMax = false;
            if (isset($baseTotalQtyOrdered['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_QTY_ORDERED, $baseTotalQtyOrdered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTotalQtyOrdered['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_QTY_ORDERED, $baseTotalQtyOrdered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_QTY_ORDERED, $baseTotalQtyOrdered, $comparison);
    }

    /**
     * Filter the query on the base_total_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTotalRefunded(1234); // WHERE base_total_refunded = 1234
     * $query->filterByBaseTotalRefunded(array(12, 34)); // WHERE base_total_refunded IN (12, 34)
     * $query->filterByBaseTotalRefunded(array('min' => 12)); // WHERE base_total_refunded >= 12
     * $query->filterByBaseTotalRefunded(array('max' => 12)); // WHERE base_total_refunded <= 12
     * </code>
     *
     * @param     mixed $baseTotalRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTotalRefunded($baseTotalRefunded = null, $comparison = null)
    {
        if (is_array($baseTotalRefunded)) {
            $useMinMax = false;
            if (isset($baseTotalRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_REFUNDED, $baseTotalRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTotalRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_REFUNDED, $baseTotalRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_REFUNDED, $baseTotalRefunded, $comparison);
    }

    /**
     * Filter the query on the discount_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscountAmount(1234); // WHERE discount_amount = 1234
     * $query->filterByDiscountAmount(array(12, 34)); // WHERE discount_amount IN (12, 34)
     * $query->filterByDiscountAmount(array('min' => 12)); // WHERE discount_amount >= 12
     * $query->filterByDiscountAmount(array('max' => 12)); // WHERE discount_amount <= 12
     * </code>
     *
     * @param     mixed $discountAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByDiscountAmount($discountAmount = null, $comparison = null)
    {
        if (is_array($discountAmount)) {
            $useMinMax = false;
            if (isset($discountAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_AMOUNT, $discountAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_AMOUNT, $discountAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_AMOUNT, $discountAmount, $comparison);
    }

    /**
     * Filter the query on the discount_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscountCanceled(1234); // WHERE discount_canceled = 1234
     * $query->filterByDiscountCanceled(array(12, 34)); // WHERE discount_canceled IN (12, 34)
     * $query->filterByDiscountCanceled(array('min' => 12)); // WHERE discount_canceled >= 12
     * $query->filterByDiscountCanceled(array('max' => 12)); // WHERE discount_canceled <= 12
     * </code>
     *
     * @param     mixed $discountCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByDiscountCanceled($discountCanceled = null, $comparison = null)
    {
        if (is_array($discountCanceled)) {
            $useMinMax = false;
            if (isset($discountCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_CANCELED, $discountCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_CANCELED, $discountCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_CANCELED, $discountCanceled, $comparison);
    }

    /**
     * Filter the query on the discount_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscountInvoiced(1234); // WHERE discount_invoiced = 1234
     * $query->filterByDiscountInvoiced(array(12, 34)); // WHERE discount_invoiced IN (12, 34)
     * $query->filterByDiscountInvoiced(array('min' => 12)); // WHERE discount_invoiced >= 12
     * $query->filterByDiscountInvoiced(array('max' => 12)); // WHERE discount_invoiced <= 12
     * </code>
     *
     * @param     mixed $discountInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByDiscountInvoiced($discountInvoiced = null, $comparison = null)
    {
        if (is_array($discountInvoiced)) {
            $useMinMax = false;
            if (isset($discountInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_INVOICED, $discountInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_INVOICED, $discountInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_INVOICED, $discountInvoiced, $comparison);
    }

    /**
     * Filter the query on the discount_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscountRefunded(1234); // WHERE discount_refunded = 1234
     * $query->filterByDiscountRefunded(array(12, 34)); // WHERE discount_refunded IN (12, 34)
     * $query->filterByDiscountRefunded(array('min' => 12)); // WHERE discount_refunded >= 12
     * $query->filterByDiscountRefunded(array('max' => 12)); // WHERE discount_refunded <= 12
     * </code>
     *
     * @param     mixed $discountRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByDiscountRefunded($discountRefunded = null, $comparison = null)
    {
        if (is_array($discountRefunded)) {
            $useMinMax = false;
            if (isset($discountRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_REFUNDED, $discountRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_REFUNDED, $discountRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_REFUNDED, $discountRefunded, $comparison);
    }

    /**
     * Filter the query on the grand_total column
     *
     * Example usage:
     * <code>
     * $query->filterByGrandTotal(1234); // WHERE grand_total = 1234
     * $query->filterByGrandTotal(array(12, 34)); // WHERE grand_total IN (12, 34)
     * $query->filterByGrandTotal(array('min' => 12)); // WHERE grand_total >= 12
     * $query->filterByGrandTotal(array('max' => 12)); // WHERE grand_total <= 12
     * </code>
     *
     * @param     mixed $grandTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGrandTotal($grandTotal = null, $comparison = null)
    {
        if (is_array($grandTotal)) {
            $useMinMax = false;
            if (isset($grandTotal['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GRAND_TOTAL, $grandTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($grandTotal['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GRAND_TOTAL, $grandTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GRAND_TOTAL, $grandTotal, $comparison);
    }

    /**
     * Filter the query on the shipping_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingAmount(1234); // WHERE shipping_amount = 1234
     * $query->filterByShippingAmount(array(12, 34)); // WHERE shipping_amount IN (12, 34)
     * $query->filterByShippingAmount(array('min' => 12)); // WHERE shipping_amount >= 12
     * $query->filterByShippingAmount(array('max' => 12)); // WHERE shipping_amount <= 12
     * </code>
     *
     * @param     mixed $shippingAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingAmount($shippingAmount = null, $comparison = null)
    {
        if (is_array($shippingAmount)) {
            $useMinMax = false;
            if (isset($shippingAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_AMOUNT, $shippingAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shippingAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_AMOUNT, $shippingAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_AMOUNT, $shippingAmount, $comparison);
    }

    /**
     * Filter the query on the shipping_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingCanceled(1234); // WHERE shipping_canceled = 1234
     * $query->filterByShippingCanceled(array(12, 34)); // WHERE shipping_canceled IN (12, 34)
     * $query->filterByShippingCanceled(array('min' => 12)); // WHERE shipping_canceled >= 12
     * $query->filterByShippingCanceled(array('max' => 12)); // WHERE shipping_canceled <= 12
     * </code>
     *
     * @param     mixed $shippingCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingCanceled($shippingCanceled = null, $comparison = null)
    {
        if (is_array($shippingCanceled)) {
            $useMinMax = false;
            if (isset($shippingCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_CANCELED, $shippingCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shippingCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_CANCELED, $shippingCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_CANCELED, $shippingCanceled, $comparison);
    }

    /**
     * Filter the query on the shipping_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingInvoiced(1234); // WHERE shipping_invoiced = 1234
     * $query->filterByShippingInvoiced(array(12, 34)); // WHERE shipping_invoiced IN (12, 34)
     * $query->filterByShippingInvoiced(array('min' => 12)); // WHERE shipping_invoiced >= 12
     * $query->filterByShippingInvoiced(array('max' => 12)); // WHERE shipping_invoiced <= 12
     * </code>
     *
     * @param     mixed $shippingInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingInvoiced($shippingInvoiced = null, $comparison = null)
    {
        if (is_array($shippingInvoiced)) {
            $useMinMax = false;
            if (isset($shippingInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_INVOICED, $shippingInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shippingInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_INVOICED, $shippingInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_INVOICED, $shippingInvoiced, $comparison);
    }

    /**
     * Filter the query on the shipping_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingRefunded(1234); // WHERE shipping_refunded = 1234
     * $query->filterByShippingRefunded(array(12, 34)); // WHERE shipping_refunded IN (12, 34)
     * $query->filterByShippingRefunded(array('min' => 12)); // WHERE shipping_refunded >= 12
     * $query->filterByShippingRefunded(array('max' => 12)); // WHERE shipping_refunded <= 12
     * </code>
     *
     * @param     mixed $shippingRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingRefunded($shippingRefunded = null, $comparison = null)
    {
        if (is_array($shippingRefunded)) {
            $useMinMax = false;
            if (isset($shippingRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_REFUNDED, $shippingRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shippingRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_REFUNDED, $shippingRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_REFUNDED, $shippingRefunded, $comparison);
    }

    /**
     * Filter the query on the shipping_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingTaxAmount(1234); // WHERE shipping_tax_amount = 1234
     * $query->filterByShippingTaxAmount(array(12, 34)); // WHERE shipping_tax_amount IN (12, 34)
     * $query->filterByShippingTaxAmount(array('min' => 12)); // WHERE shipping_tax_amount >= 12
     * $query->filterByShippingTaxAmount(array('max' => 12)); // WHERE shipping_tax_amount <= 12
     * </code>
     *
     * @param     mixed $shippingTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingTaxAmount($shippingTaxAmount = null, $comparison = null)
    {
        if (is_array($shippingTaxAmount)) {
            $useMinMax = false;
            if (isset($shippingTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_TAX_AMOUNT, $shippingTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shippingTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_TAX_AMOUNT, $shippingTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_TAX_AMOUNT, $shippingTaxAmount, $comparison);
    }

    /**
     * Filter the query on the shipping_tax_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingTaxRefunded(1234); // WHERE shipping_tax_refunded = 1234
     * $query->filterByShippingTaxRefunded(array(12, 34)); // WHERE shipping_tax_refunded IN (12, 34)
     * $query->filterByShippingTaxRefunded(array('min' => 12)); // WHERE shipping_tax_refunded >= 12
     * $query->filterByShippingTaxRefunded(array('max' => 12)); // WHERE shipping_tax_refunded <= 12
     * </code>
     *
     * @param     mixed $shippingTaxRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingTaxRefunded($shippingTaxRefunded = null, $comparison = null)
    {
        if (is_array($shippingTaxRefunded)) {
            $useMinMax = false;
            if (isset($shippingTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_TAX_REFUNDED, $shippingTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shippingTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_TAX_REFUNDED, $shippingTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_TAX_REFUNDED, $shippingTaxRefunded, $comparison);
    }

    /**
     * Filter the query on the store_to_base_rate column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreToBaseRate(1234); // WHERE store_to_base_rate = 1234
     * $query->filterByStoreToBaseRate(array(12, 34)); // WHERE store_to_base_rate IN (12, 34)
     * $query->filterByStoreToBaseRate(array('min' => 12)); // WHERE store_to_base_rate >= 12
     * $query->filterByStoreToBaseRate(array('max' => 12)); // WHERE store_to_base_rate <= 12
     * </code>
     *
     * @param     mixed $storeToBaseRate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByStoreToBaseRate($storeToBaseRate = null, $comparison = null)
    {
        if (is_array($storeToBaseRate)) {
            $useMinMax = false;
            if (isset($storeToBaseRate['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::STORE_TO_BASE_RATE, $storeToBaseRate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($storeToBaseRate['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::STORE_TO_BASE_RATE, $storeToBaseRate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::STORE_TO_BASE_RATE, $storeToBaseRate, $comparison);
    }

    /**
     * Filter the query on the store_to_order_rate column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreToOrderRate(1234); // WHERE store_to_order_rate = 1234
     * $query->filterByStoreToOrderRate(array(12, 34)); // WHERE store_to_order_rate IN (12, 34)
     * $query->filterByStoreToOrderRate(array('min' => 12)); // WHERE store_to_order_rate >= 12
     * $query->filterByStoreToOrderRate(array('max' => 12)); // WHERE store_to_order_rate <= 12
     * </code>
     *
     * @param     mixed $storeToOrderRate The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByStoreToOrderRate($storeToOrderRate = null, $comparison = null)
    {
        if (is_array($storeToOrderRate)) {
            $useMinMax = false;
            if (isset($storeToOrderRate['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::STORE_TO_ORDER_RATE, $storeToOrderRate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($storeToOrderRate['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::STORE_TO_ORDER_RATE, $storeToOrderRate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::STORE_TO_ORDER_RATE, $storeToOrderRate, $comparison);
    }

    /**
     * Filter the query on the subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtotal(1234); // WHERE subtotal = 1234
     * $query->filterBySubtotal(array(12, 34)); // WHERE subtotal IN (12, 34)
     * $query->filterBySubtotal(array('min' => 12)); // WHERE subtotal >= 12
     * $query->filterBySubtotal(array('max' => 12)); // WHERE subtotal <= 12
     * </code>
     *
     * @param     mixed $subtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterBySubtotal($subtotal = null, $comparison = null)
    {
        if (is_array($subtotal)) {
            $useMinMax = false;
            if (isset($subtotal['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL, $subtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotal['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL, $subtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL, $subtotal, $comparison);
    }

    /**
     * Filter the query on the subtotal_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtotalCanceled(1234); // WHERE subtotal_canceled = 1234
     * $query->filterBySubtotalCanceled(array(12, 34)); // WHERE subtotal_canceled IN (12, 34)
     * $query->filterBySubtotalCanceled(array('min' => 12)); // WHERE subtotal_canceled >= 12
     * $query->filterBySubtotalCanceled(array('max' => 12)); // WHERE subtotal_canceled <= 12
     * </code>
     *
     * @param     mixed $subtotalCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterBySubtotalCanceled($subtotalCanceled = null, $comparison = null)
    {
        if (is_array($subtotalCanceled)) {
            $useMinMax = false;
            if (isset($subtotalCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_CANCELED, $subtotalCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotalCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_CANCELED, $subtotalCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_CANCELED, $subtotalCanceled, $comparison);
    }

    /**
     * Filter the query on the subtotal_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtotalInvoiced(1234); // WHERE subtotal_invoiced = 1234
     * $query->filterBySubtotalInvoiced(array(12, 34)); // WHERE subtotal_invoiced IN (12, 34)
     * $query->filterBySubtotalInvoiced(array('min' => 12)); // WHERE subtotal_invoiced >= 12
     * $query->filterBySubtotalInvoiced(array('max' => 12)); // WHERE subtotal_invoiced <= 12
     * </code>
     *
     * @param     mixed $subtotalInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterBySubtotalInvoiced($subtotalInvoiced = null, $comparison = null)
    {
        if (is_array($subtotalInvoiced)) {
            $useMinMax = false;
            if (isset($subtotalInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_INVOICED, $subtotalInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotalInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_INVOICED, $subtotalInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_INVOICED, $subtotalInvoiced, $comparison);
    }

    /**
     * Filter the query on the subtotal_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtotalRefunded(1234); // WHERE subtotal_refunded = 1234
     * $query->filterBySubtotalRefunded(array(12, 34)); // WHERE subtotal_refunded IN (12, 34)
     * $query->filterBySubtotalRefunded(array('min' => 12)); // WHERE subtotal_refunded >= 12
     * $query->filterBySubtotalRefunded(array('max' => 12)); // WHERE subtotal_refunded <= 12
     * </code>
     *
     * @param     mixed $subtotalRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterBySubtotalRefunded($subtotalRefunded = null, $comparison = null)
    {
        if (is_array($subtotalRefunded)) {
            $useMinMax = false;
            if (isset($subtotalRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_REFUNDED, $subtotalRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotalRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_REFUNDED, $subtotalRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_REFUNDED, $subtotalRefunded, $comparison);
    }

    /**
     * Filter the query on the tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxAmount(1234); // WHERE tax_amount = 1234
     * $query->filterByTaxAmount(array(12, 34)); // WHERE tax_amount IN (12, 34)
     * $query->filterByTaxAmount(array('min' => 12)); // WHERE tax_amount >= 12
     * $query->filterByTaxAmount(array('max' => 12)); // WHERE tax_amount <= 12
     * </code>
     *
     * @param     mixed $taxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTaxAmount($taxAmount = null, $comparison = null)
    {
        if (is_array($taxAmount)) {
            $useMinMax = false;
            if (isset($taxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TAX_AMOUNT, $taxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TAX_AMOUNT, $taxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TAX_AMOUNT, $taxAmount, $comparison);
    }

    /**
     * Filter the query on the tax_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxCanceled(1234); // WHERE tax_canceled = 1234
     * $query->filterByTaxCanceled(array(12, 34)); // WHERE tax_canceled IN (12, 34)
     * $query->filterByTaxCanceled(array('min' => 12)); // WHERE tax_canceled >= 12
     * $query->filterByTaxCanceled(array('max' => 12)); // WHERE tax_canceled <= 12
     * </code>
     *
     * @param     mixed $taxCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTaxCanceled($taxCanceled = null, $comparison = null)
    {
        if (is_array($taxCanceled)) {
            $useMinMax = false;
            if (isset($taxCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TAX_CANCELED, $taxCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TAX_CANCELED, $taxCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TAX_CANCELED, $taxCanceled, $comparison);
    }

    /**
     * Filter the query on the tax_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxInvoiced(1234); // WHERE tax_invoiced = 1234
     * $query->filterByTaxInvoiced(array(12, 34)); // WHERE tax_invoiced IN (12, 34)
     * $query->filterByTaxInvoiced(array('min' => 12)); // WHERE tax_invoiced >= 12
     * $query->filterByTaxInvoiced(array('max' => 12)); // WHERE tax_invoiced <= 12
     * </code>
     *
     * @param     mixed $taxInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTaxInvoiced($taxInvoiced = null, $comparison = null)
    {
        if (is_array($taxInvoiced)) {
            $useMinMax = false;
            if (isset($taxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TAX_INVOICED, $taxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TAX_INVOICED, $taxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TAX_INVOICED, $taxInvoiced, $comparison);
    }

    /**
     * Filter the query on the tax_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxRefunded(1234); // WHERE tax_refunded = 1234
     * $query->filterByTaxRefunded(array(12, 34)); // WHERE tax_refunded IN (12, 34)
     * $query->filterByTaxRefunded(array('min' => 12)); // WHERE tax_refunded >= 12
     * $query->filterByTaxRefunded(array('max' => 12)); // WHERE tax_refunded <= 12
     * </code>
     *
     * @param     mixed $taxRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTaxRefunded($taxRefunded = null, $comparison = null)
    {
        if (is_array($taxRefunded)) {
            $useMinMax = false;
            if (isset($taxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TAX_REFUNDED, $taxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TAX_REFUNDED, $taxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TAX_REFUNDED, $taxRefunded, $comparison);
    }

    /**
     * Filter the query on the total_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalCanceled(1234); // WHERE total_canceled = 1234
     * $query->filterByTotalCanceled(array(12, 34)); // WHERE total_canceled IN (12, 34)
     * $query->filterByTotalCanceled(array('min' => 12)); // WHERE total_canceled >= 12
     * $query->filterByTotalCanceled(array('max' => 12)); // WHERE total_canceled <= 12
     * </code>
     *
     * @param     mixed $totalCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTotalCanceled($totalCanceled = null, $comparison = null)
    {
        if (is_array($totalCanceled)) {
            $useMinMax = false;
            if (isset($totalCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_CANCELED, $totalCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_CANCELED, $totalCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_CANCELED, $totalCanceled, $comparison);
    }

    /**
     * Filter the query on the total_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalInvoiced(1234); // WHERE total_invoiced = 1234
     * $query->filterByTotalInvoiced(array(12, 34)); // WHERE total_invoiced IN (12, 34)
     * $query->filterByTotalInvoiced(array('min' => 12)); // WHERE total_invoiced >= 12
     * $query->filterByTotalInvoiced(array('max' => 12)); // WHERE total_invoiced <= 12
     * </code>
     *
     * @param     mixed $totalInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTotalInvoiced($totalInvoiced = null, $comparison = null)
    {
        if (is_array($totalInvoiced)) {
            $useMinMax = false;
            if (isset($totalInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_INVOICED, $totalInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_INVOICED, $totalInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_INVOICED, $totalInvoiced, $comparison);
    }

    /**
     * Filter the query on the total_offline_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalOfflineRefunded(1234); // WHERE total_offline_refunded = 1234
     * $query->filterByTotalOfflineRefunded(array(12, 34)); // WHERE total_offline_refunded IN (12, 34)
     * $query->filterByTotalOfflineRefunded(array('min' => 12)); // WHERE total_offline_refunded >= 12
     * $query->filterByTotalOfflineRefunded(array('max' => 12)); // WHERE total_offline_refunded <= 12
     * </code>
     *
     * @param     mixed $totalOfflineRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTotalOfflineRefunded($totalOfflineRefunded = null, $comparison = null)
    {
        if (is_array($totalOfflineRefunded)) {
            $useMinMax = false;
            if (isset($totalOfflineRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_OFFLINE_REFUNDED, $totalOfflineRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalOfflineRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_OFFLINE_REFUNDED, $totalOfflineRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_OFFLINE_REFUNDED, $totalOfflineRefunded, $comparison);
    }

    /**
     * Filter the query on the total_online_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalOnlineRefunded(1234); // WHERE total_online_refunded = 1234
     * $query->filterByTotalOnlineRefunded(array(12, 34)); // WHERE total_online_refunded IN (12, 34)
     * $query->filterByTotalOnlineRefunded(array('min' => 12)); // WHERE total_online_refunded >= 12
     * $query->filterByTotalOnlineRefunded(array('max' => 12)); // WHERE total_online_refunded <= 12
     * </code>
     *
     * @param     mixed $totalOnlineRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTotalOnlineRefunded($totalOnlineRefunded = null, $comparison = null)
    {
        if (is_array($totalOnlineRefunded)) {
            $useMinMax = false;
            if (isset($totalOnlineRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_ONLINE_REFUNDED, $totalOnlineRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalOnlineRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_ONLINE_REFUNDED, $totalOnlineRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_ONLINE_REFUNDED, $totalOnlineRefunded, $comparison);
    }

    /**
     * Filter the query on the total_paid column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalPaid(1234); // WHERE total_paid = 1234
     * $query->filterByTotalPaid(array(12, 34)); // WHERE total_paid IN (12, 34)
     * $query->filterByTotalPaid(array('min' => 12)); // WHERE total_paid >= 12
     * $query->filterByTotalPaid(array('max' => 12)); // WHERE total_paid <= 12
     * </code>
     *
     * @param     mixed $totalPaid The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTotalPaid($totalPaid = null, $comparison = null)
    {
        if (is_array($totalPaid)) {
            $useMinMax = false;
            if (isset($totalPaid['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_PAID, $totalPaid['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalPaid['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_PAID, $totalPaid['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_PAID, $totalPaid, $comparison);
    }

    /**
     * Filter the query on the total_qty_ordered column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalQtyOrdered(1234); // WHERE total_qty_ordered = 1234
     * $query->filterByTotalQtyOrdered(array(12, 34)); // WHERE total_qty_ordered IN (12, 34)
     * $query->filterByTotalQtyOrdered(array('min' => 12)); // WHERE total_qty_ordered >= 12
     * $query->filterByTotalQtyOrdered(array('max' => 12)); // WHERE total_qty_ordered <= 12
     * </code>
     *
     * @param     mixed $totalQtyOrdered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTotalQtyOrdered($totalQtyOrdered = null, $comparison = null)
    {
        if (is_array($totalQtyOrdered)) {
            $useMinMax = false;
            if (isset($totalQtyOrdered['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_QTY_ORDERED, $totalQtyOrdered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalQtyOrdered['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_QTY_ORDERED, $totalQtyOrdered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_QTY_ORDERED, $totalQtyOrdered, $comparison);
    }

    /**
     * Filter the query on the total_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalRefunded(1234); // WHERE total_refunded = 1234
     * $query->filterByTotalRefunded(array(12, 34)); // WHERE total_refunded IN (12, 34)
     * $query->filterByTotalRefunded(array('min' => 12)); // WHERE total_refunded >= 12
     * $query->filterByTotalRefunded(array('max' => 12)); // WHERE total_refunded <= 12
     * </code>
     *
     * @param     mixed $totalRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTotalRefunded($totalRefunded = null, $comparison = null)
    {
        if (is_array($totalRefunded)) {
            $useMinMax = false;
            if (isset($totalRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_REFUNDED, $totalRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_REFUNDED, $totalRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_REFUNDED, $totalRefunded, $comparison);
    }

    /**
     * Filter the query on the can_ship_partially column
     *
     * Example usage:
     * <code>
     * $query->filterByCanShipPartially(1234); // WHERE can_ship_partially = 1234
     * $query->filterByCanShipPartially(array(12, 34)); // WHERE can_ship_partially IN (12, 34)
     * $query->filterByCanShipPartially(array('min' => 12)); // WHERE can_ship_partially >= 12
     * $query->filterByCanShipPartially(array('max' => 12)); // WHERE can_ship_partially <= 12
     * </code>
     *
     * @param     mixed $canShipPartially The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCanShipPartially($canShipPartially = null, $comparison = null)
    {
        if (is_array($canShipPartially)) {
            $useMinMax = false;
            if (isset($canShipPartially['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY, $canShipPartially['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($canShipPartially['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY, $canShipPartially['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY, $canShipPartially, $comparison);
    }

    /**
     * Filter the query on the can_ship_partially_item column
     *
     * Example usage:
     * <code>
     * $query->filterByCanShipPartiallyItem(1234); // WHERE can_ship_partially_item = 1234
     * $query->filterByCanShipPartiallyItem(array(12, 34)); // WHERE can_ship_partially_item IN (12, 34)
     * $query->filterByCanShipPartiallyItem(array('min' => 12)); // WHERE can_ship_partially_item >= 12
     * $query->filterByCanShipPartiallyItem(array('max' => 12)); // WHERE can_ship_partially_item <= 12
     * </code>
     *
     * @param     mixed $canShipPartiallyItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCanShipPartiallyItem($canShipPartiallyItem = null, $comparison = null)
    {
        if (is_array($canShipPartiallyItem)) {
            $useMinMax = false;
            if (isset($canShipPartiallyItem['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY_ITEM, $canShipPartiallyItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($canShipPartiallyItem['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY_ITEM, $canShipPartiallyItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CAN_SHIP_PARTIALLY_ITEM, $canShipPartiallyItem, $comparison);
    }

    /**
     * Filter the query on the customer_is_guest column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerIsGuest(1234); // WHERE customer_is_guest = 1234
     * $query->filterByCustomerIsGuest(array(12, 34)); // WHERE customer_is_guest IN (12, 34)
     * $query->filterByCustomerIsGuest(array('min' => 12)); // WHERE customer_is_guest >= 12
     * $query->filterByCustomerIsGuest(array('max' => 12)); // WHERE customer_is_guest <= 12
     * </code>
     *
     * @param     mixed $customerIsGuest The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerIsGuest($customerIsGuest = null, $comparison = null)
    {
        if (is_array($customerIsGuest)) {
            $useMinMax = false;
            if (isset($customerIsGuest['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_IS_GUEST, $customerIsGuest['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerIsGuest['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_IS_GUEST, $customerIsGuest['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_IS_GUEST, $customerIsGuest, $comparison);
    }

    /**
     * Filter the query on the customer_note_notify column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerNoteNotify(1234); // WHERE customer_note_notify = 1234
     * $query->filterByCustomerNoteNotify(array(12, 34)); // WHERE customer_note_notify IN (12, 34)
     * $query->filterByCustomerNoteNotify(array('min' => 12)); // WHERE customer_note_notify >= 12
     * $query->filterByCustomerNoteNotify(array('max' => 12)); // WHERE customer_note_notify <= 12
     * </code>
     *
     * @param     mixed $customerNoteNotify The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerNoteNotify($customerNoteNotify = null, $comparison = null)
    {
        if (is_array($customerNoteNotify)) {
            $useMinMax = false;
            if (isset($customerNoteNotify['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_NOTE_NOTIFY, $customerNoteNotify['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerNoteNotify['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_NOTE_NOTIFY, $customerNoteNotify['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_NOTE_NOTIFY, $customerNoteNotify, $comparison);
    }

    /**
     * Filter the query on the billing_address_id column
     *
     * Example usage:
     * <code>
     * $query->filterByBillingAddressId(1234); // WHERE billing_address_id = 1234
     * $query->filterByBillingAddressId(array(12, 34)); // WHERE billing_address_id IN (12, 34)
     * $query->filterByBillingAddressId(array('min' => 12)); // WHERE billing_address_id >= 12
     * $query->filterByBillingAddressId(array('max' => 12)); // WHERE billing_address_id <= 12
     * </code>
     *
     * @param     mixed $billingAddressId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBillingAddressId($billingAddressId = null, $comparison = null)
    {
        if (is_array($billingAddressId)) {
            $useMinMax = false;
            if (isset($billingAddressId['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BILLING_ADDRESS_ID, $billingAddressId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($billingAddressId['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BILLING_ADDRESS_ID, $billingAddressId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BILLING_ADDRESS_ID, $billingAddressId, $comparison);
    }

    /**
     * Filter the query on the customer_group_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerGroupId(1234); // WHERE customer_group_id = 1234
     * $query->filterByCustomerGroupId(array(12, 34)); // WHERE customer_group_id IN (12, 34)
     * $query->filterByCustomerGroupId(array('min' => 12)); // WHERE customer_group_id >= 12
     * $query->filterByCustomerGroupId(array('max' => 12)); // WHERE customer_group_id <= 12
     * </code>
     *
     * @param     mixed $customerGroupId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerGroupId($customerGroupId = null, $comparison = null)
    {
        if (is_array($customerGroupId)) {
            $useMinMax = false;
            if (isset($customerGroupId['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_GROUP_ID, $customerGroupId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerGroupId['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_GROUP_ID, $customerGroupId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_GROUP_ID, $customerGroupId, $comparison);
    }

    /**
     * Filter the query on the edit_increment column
     *
     * Example usage:
     * <code>
     * $query->filterByEditIncrement(1234); // WHERE edit_increment = 1234
     * $query->filterByEditIncrement(array(12, 34)); // WHERE edit_increment IN (12, 34)
     * $query->filterByEditIncrement(array('min' => 12)); // WHERE edit_increment >= 12
     * $query->filterByEditIncrement(array('max' => 12)); // WHERE edit_increment <= 12
     * </code>
     *
     * @param     mixed $editIncrement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByEditIncrement($editIncrement = null, $comparison = null)
    {
        if (is_array($editIncrement)) {
            $useMinMax = false;
            if (isset($editIncrement['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::EDIT_INCREMENT, $editIncrement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($editIncrement['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::EDIT_INCREMENT, $editIncrement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::EDIT_INCREMENT, $editIncrement, $comparison);
    }

    /**
     * Filter the query on the email_sent column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailSent(1234); // WHERE email_sent = 1234
     * $query->filterByEmailSent(array(12, 34)); // WHERE email_sent IN (12, 34)
     * $query->filterByEmailSent(array('min' => 12)); // WHERE email_sent >= 12
     * $query->filterByEmailSent(array('max' => 12)); // WHERE email_sent <= 12
     * </code>
     *
     * @param     mixed $emailSent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByEmailSent($emailSent = null, $comparison = null)
    {
        if (is_array($emailSent)) {
            $useMinMax = false;
            if (isset($emailSent['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::EMAIL_SENT, $emailSent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($emailSent['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::EMAIL_SENT, $emailSent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::EMAIL_SENT, $emailSent, $comparison);
    }

    /**
     * Filter the query on the forced_shipment_with_invoice column
     *
     * Example usage:
     * <code>
     * $query->filterByForcedShipmentWithInvoice(1234); // WHERE forced_shipment_with_invoice = 1234
     * $query->filterByForcedShipmentWithInvoice(array(12, 34)); // WHERE forced_shipment_with_invoice IN (12, 34)
     * $query->filterByForcedShipmentWithInvoice(array('min' => 12)); // WHERE forced_shipment_with_invoice >= 12
     * $query->filterByForcedShipmentWithInvoice(array('max' => 12)); // WHERE forced_shipment_with_invoice <= 12
     * </code>
     *
     * @param     mixed $forcedShipmentWithInvoice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByForcedShipmentWithInvoice($forcedShipmentWithInvoice = null, $comparison = null)
    {
        if (is_array($forcedShipmentWithInvoice)) {
            $useMinMax = false;
            if (isset($forcedShipmentWithInvoice['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::FORCED_SHIPMENT_WITH_INVOICE, $forcedShipmentWithInvoice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($forcedShipmentWithInvoice['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::FORCED_SHIPMENT_WITH_INVOICE, $forcedShipmentWithInvoice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::FORCED_SHIPMENT_WITH_INVOICE, $forcedShipmentWithInvoice, $comparison);
    }

    /**
     * Filter the query on the payment_auth_expiration column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentAuthExpiration(1234); // WHERE payment_auth_expiration = 1234
     * $query->filterByPaymentAuthExpiration(array(12, 34)); // WHERE payment_auth_expiration IN (12, 34)
     * $query->filterByPaymentAuthExpiration(array('min' => 12)); // WHERE payment_auth_expiration >= 12
     * $query->filterByPaymentAuthExpiration(array('max' => 12)); // WHERE payment_auth_expiration <= 12
     * </code>
     *
     * @param     mixed $paymentAuthExpiration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPaymentAuthExpiration($paymentAuthExpiration = null, $comparison = null)
    {
        if (is_array($paymentAuthExpiration)) {
            $useMinMax = false;
            if (isset($paymentAuthExpiration['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::PAYMENT_AUTH_EXPIRATION, $paymentAuthExpiration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentAuthExpiration['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::PAYMENT_AUTH_EXPIRATION, $paymentAuthExpiration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::PAYMENT_AUTH_EXPIRATION, $paymentAuthExpiration, $comparison);
    }

    /**
     * Filter the query on the quote_address_id column
     *
     * Example usage:
     * <code>
     * $query->filterByQuoteAddressId(1234); // WHERE quote_address_id = 1234
     * $query->filterByQuoteAddressId(array(12, 34)); // WHERE quote_address_id IN (12, 34)
     * $query->filterByQuoteAddressId(array('min' => 12)); // WHERE quote_address_id >= 12
     * $query->filterByQuoteAddressId(array('max' => 12)); // WHERE quote_address_id <= 12
     * </code>
     *
     * @param     mixed $quoteAddressId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByQuoteAddressId($quoteAddressId = null, $comparison = null)
    {
        if (is_array($quoteAddressId)) {
            $useMinMax = false;
            if (isset($quoteAddressId['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::QUOTE_ADDRESS_ID, $quoteAddressId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quoteAddressId['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::QUOTE_ADDRESS_ID, $quoteAddressId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::QUOTE_ADDRESS_ID, $quoteAddressId, $comparison);
    }

    /**
     * Filter the query on the quote_id column
     *
     * Example usage:
     * <code>
     * $query->filterByQuoteId(1234); // WHERE quote_id = 1234
     * $query->filterByQuoteId(array(12, 34)); // WHERE quote_id IN (12, 34)
     * $query->filterByQuoteId(array('min' => 12)); // WHERE quote_id >= 12
     * $query->filterByQuoteId(array('max' => 12)); // WHERE quote_id <= 12
     * </code>
     *
     * @param     mixed $quoteId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByQuoteId($quoteId = null, $comparison = null)
    {
        if (is_array($quoteId)) {
            $useMinMax = false;
            if (isset($quoteId['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::QUOTE_ID, $quoteId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quoteId['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::QUOTE_ID, $quoteId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::QUOTE_ID, $quoteId, $comparison);
    }

    /**
     * Filter the query on the shipping_address_id column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingAddressId(1234); // WHERE shipping_address_id = 1234
     * $query->filterByShippingAddressId(array(12, 34)); // WHERE shipping_address_id IN (12, 34)
     * $query->filterByShippingAddressId(array('min' => 12)); // WHERE shipping_address_id >= 12
     * $query->filterByShippingAddressId(array('max' => 12)); // WHERE shipping_address_id <= 12
     * </code>
     *
     * @param     mixed $shippingAddressId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingAddressId($shippingAddressId = null, $comparison = null)
    {
        if (is_array($shippingAddressId)) {
            $useMinMax = false;
            if (isset($shippingAddressId['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_ADDRESS_ID, $shippingAddressId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shippingAddressId['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_ADDRESS_ID, $shippingAddressId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_ADDRESS_ID, $shippingAddressId, $comparison);
    }

    /**
     * Filter the query on the adjustment_negative column
     *
     * Example usage:
     * <code>
     * $query->filterByAdjustmentNegative(1234); // WHERE adjustment_negative = 1234
     * $query->filterByAdjustmentNegative(array(12, 34)); // WHERE adjustment_negative IN (12, 34)
     * $query->filterByAdjustmentNegative(array('min' => 12)); // WHERE adjustment_negative >= 12
     * $query->filterByAdjustmentNegative(array('max' => 12)); // WHERE adjustment_negative <= 12
     * </code>
     *
     * @param     mixed $adjustmentNegative The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByAdjustmentNegative($adjustmentNegative = null, $comparison = null)
    {
        if (is_array($adjustmentNegative)) {
            $useMinMax = false;
            if (isset($adjustmentNegative['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::ADJUSTMENT_NEGATIVE, $adjustmentNegative['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adjustmentNegative['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::ADJUSTMENT_NEGATIVE, $adjustmentNegative['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::ADJUSTMENT_NEGATIVE, $adjustmentNegative, $comparison);
    }

    /**
     * Filter the query on the adjustment_positive column
     *
     * Example usage:
     * <code>
     * $query->filterByAdjustmentPositive(1234); // WHERE adjustment_positive = 1234
     * $query->filterByAdjustmentPositive(array(12, 34)); // WHERE adjustment_positive IN (12, 34)
     * $query->filterByAdjustmentPositive(array('min' => 12)); // WHERE adjustment_positive >= 12
     * $query->filterByAdjustmentPositive(array('max' => 12)); // WHERE adjustment_positive <= 12
     * </code>
     *
     * @param     mixed $adjustmentPositive The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByAdjustmentPositive($adjustmentPositive = null, $comparison = null)
    {
        if (is_array($adjustmentPositive)) {
            $useMinMax = false;
            if (isset($adjustmentPositive['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::ADJUSTMENT_POSITIVE, $adjustmentPositive['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($adjustmentPositive['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::ADJUSTMENT_POSITIVE, $adjustmentPositive['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::ADJUSTMENT_POSITIVE, $adjustmentPositive, $comparison);
    }

    /**
     * Filter the query on the base_adjustment_negative column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseAdjustmentNegative(1234); // WHERE base_adjustment_negative = 1234
     * $query->filterByBaseAdjustmentNegative(array(12, 34)); // WHERE base_adjustment_negative IN (12, 34)
     * $query->filterByBaseAdjustmentNegative(array('min' => 12)); // WHERE base_adjustment_negative >= 12
     * $query->filterByBaseAdjustmentNegative(array('max' => 12)); // WHERE base_adjustment_negative <= 12
     * </code>
     *
     * @param     mixed $baseAdjustmentNegative The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseAdjustmentNegative($baseAdjustmentNegative = null, $comparison = null)
    {
        if (is_array($baseAdjustmentNegative)) {
            $useMinMax = false;
            if (isset($baseAdjustmentNegative['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_ADJUSTMENT_NEGATIVE, $baseAdjustmentNegative['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseAdjustmentNegative['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_ADJUSTMENT_NEGATIVE, $baseAdjustmentNegative['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_ADJUSTMENT_NEGATIVE, $baseAdjustmentNegative, $comparison);
    }

    /**
     * Filter the query on the base_adjustment_positive column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseAdjustmentPositive(1234); // WHERE base_adjustment_positive = 1234
     * $query->filterByBaseAdjustmentPositive(array(12, 34)); // WHERE base_adjustment_positive IN (12, 34)
     * $query->filterByBaseAdjustmentPositive(array('min' => 12)); // WHERE base_adjustment_positive >= 12
     * $query->filterByBaseAdjustmentPositive(array('max' => 12)); // WHERE base_adjustment_positive <= 12
     * </code>
     *
     * @param     mixed $baseAdjustmentPositive The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseAdjustmentPositive($baseAdjustmentPositive = null, $comparison = null)
    {
        if (is_array($baseAdjustmentPositive)) {
            $useMinMax = false;
            if (isset($baseAdjustmentPositive['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_ADJUSTMENT_POSITIVE, $baseAdjustmentPositive['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseAdjustmentPositive['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_ADJUSTMENT_POSITIVE, $baseAdjustmentPositive['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_ADJUSTMENT_POSITIVE, $baseAdjustmentPositive, $comparison);
    }

    /**
     * Filter the query on the base_shipping_discount_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseShippingDiscountAmount(1234); // WHERE base_shipping_discount_amount = 1234
     * $query->filterByBaseShippingDiscountAmount(array(12, 34)); // WHERE base_shipping_discount_amount IN (12, 34)
     * $query->filterByBaseShippingDiscountAmount(array('min' => 12)); // WHERE base_shipping_discount_amount >= 12
     * $query->filterByBaseShippingDiscountAmount(array('max' => 12)); // WHERE base_shipping_discount_amount <= 12
     * </code>
     *
     * @param     mixed $baseShippingDiscountAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseShippingDiscountAmount($baseShippingDiscountAmount = null, $comparison = null)
    {
        if (is_array($baseShippingDiscountAmount)) {
            $useMinMax = false;
            if (isset($baseShippingDiscountAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_DISCOUNT_AMOUNT, $baseShippingDiscountAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseShippingDiscountAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_DISCOUNT_AMOUNT, $baseShippingDiscountAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_DISCOUNT_AMOUNT, $baseShippingDiscountAmount, $comparison);
    }

    /**
     * Filter the query on the base_subtotal_incl_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseSubtotalInclTax(1234); // WHERE base_subtotal_incl_tax = 1234
     * $query->filterByBaseSubtotalInclTax(array(12, 34)); // WHERE base_subtotal_incl_tax IN (12, 34)
     * $query->filterByBaseSubtotalInclTax(array('min' => 12)); // WHERE base_subtotal_incl_tax >= 12
     * $query->filterByBaseSubtotalInclTax(array('max' => 12)); // WHERE base_subtotal_incl_tax <= 12
     * </code>
     *
     * @param     mixed $baseSubtotalInclTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseSubtotalInclTax($baseSubtotalInclTax = null, $comparison = null)
    {
        if (is_array($baseSubtotalInclTax)) {
            $useMinMax = false;
            if (isset($baseSubtotalInclTax['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_INCL_TAX, $baseSubtotalInclTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseSubtotalInclTax['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_INCL_TAX, $baseSubtotalInclTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SUBTOTAL_INCL_TAX, $baseSubtotalInclTax, $comparison);
    }

    /**
     * Filter the query on the base_total_due column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTotalDue(1234); // WHERE base_total_due = 1234
     * $query->filterByBaseTotalDue(array(12, 34)); // WHERE base_total_due IN (12, 34)
     * $query->filterByBaseTotalDue(array('min' => 12)); // WHERE base_total_due >= 12
     * $query->filterByBaseTotalDue(array('max' => 12)); // WHERE base_total_due <= 12
     * </code>
     *
     * @param     mixed $baseTotalDue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseTotalDue($baseTotalDue = null, $comparison = null)
    {
        if (is_array($baseTotalDue)) {
            $useMinMax = false;
            if (isset($baseTotalDue['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_DUE, $baseTotalDue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTotalDue['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_DUE, $baseTotalDue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_TOTAL_DUE, $baseTotalDue, $comparison);
    }

    /**
     * Filter the query on the payment_authorization_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByPaymentAuthorizationAmount(1234); // WHERE payment_authorization_amount = 1234
     * $query->filterByPaymentAuthorizationAmount(array(12, 34)); // WHERE payment_authorization_amount IN (12, 34)
     * $query->filterByPaymentAuthorizationAmount(array('min' => 12)); // WHERE payment_authorization_amount >= 12
     * $query->filterByPaymentAuthorizationAmount(array('max' => 12)); // WHERE payment_authorization_amount <= 12
     * </code>
     *
     * @param     mixed $paymentAuthorizationAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPaymentAuthorizationAmount($paymentAuthorizationAmount = null, $comparison = null)
    {
        if (is_array($paymentAuthorizationAmount)) {
            $useMinMax = false;
            if (isset($paymentAuthorizationAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::PAYMENT_AUTHORIZATION_AMOUNT, $paymentAuthorizationAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paymentAuthorizationAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::PAYMENT_AUTHORIZATION_AMOUNT, $paymentAuthorizationAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::PAYMENT_AUTHORIZATION_AMOUNT, $paymentAuthorizationAmount, $comparison);
    }

    /**
     * Filter the query on the shipping_discount_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingDiscountAmount(1234); // WHERE shipping_discount_amount = 1234
     * $query->filterByShippingDiscountAmount(array(12, 34)); // WHERE shipping_discount_amount IN (12, 34)
     * $query->filterByShippingDiscountAmount(array('min' => 12)); // WHERE shipping_discount_amount >= 12
     * $query->filterByShippingDiscountAmount(array('max' => 12)); // WHERE shipping_discount_amount <= 12
     * </code>
     *
     * @param     mixed $shippingDiscountAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingDiscountAmount($shippingDiscountAmount = null, $comparison = null)
    {
        if (is_array($shippingDiscountAmount)) {
            $useMinMax = false;
            if (isset($shippingDiscountAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_DISCOUNT_AMOUNT, $shippingDiscountAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shippingDiscountAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_DISCOUNT_AMOUNT, $shippingDiscountAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_DISCOUNT_AMOUNT, $shippingDiscountAmount, $comparison);
    }

    /**
     * Filter the query on the subtotal_incl_tax column
     *
     * Example usage:
     * <code>
     * $query->filterBySubtotalInclTax(1234); // WHERE subtotal_incl_tax = 1234
     * $query->filterBySubtotalInclTax(array(12, 34)); // WHERE subtotal_incl_tax IN (12, 34)
     * $query->filterBySubtotalInclTax(array('min' => 12)); // WHERE subtotal_incl_tax >= 12
     * $query->filterBySubtotalInclTax(array('max' => 12)); // WHERE subtotal_incl_tax <= 12
     * </code>
     *
     * @param     mixed $subtotalInclTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterBySubtotalInclTax($subtotalInclTax = null, $comparison = null)
    {
        if (is_array($subtotalInclTax)) {
            $useMinMax = false;
            if (isset($subtotalInclTax['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_INCL_TAX, $subtotalInclTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($subtotalInclTax['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_INCL_TAX, $subtotalInclTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SUBTOTAL_INCL_TAX, $subtotalInclTax, $comparison);
    }

    /**
     * Filter the query on the total_due column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalDue(1234); // WHERE total_due = 1234
     * $query->filterByTotalDue(array(12, 34)); // WHERE total_due IN (12, 34)
     * $query->filterByTotalDue(array('min' => 12)); // WHERE total_due >= 12
     * $query->filterByTotalDue(array('max' => 12)); // WHERE total_due <= 12
     * </code>
     *
     * @param     mixed $totalDue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTotalDue($totalDue = null, $comparison = null)
    {
        if (is_array($totalDue)) {
            $useMinMax = false;
            if (isset($totalDue['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_DUE, $totalDue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalDue['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_DUE, $totalDue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_DUE, $totalDue, $comparison);
    }

    /**
     * Filter the query on the weight column
     *
     * Example usage:
     * <code>
     * $query->filterByWeight(1234); // WHERE weight = 1234
     * $query->filterByWeight(array(12, 34)); // WHERE weight IN (12, 34)
     * $query->filterByWeight(array('min' => 12)); // WHERE weight >= 12
     * $query->filterByWeight(array('max' => 12)); // WHERE weight <= 12
     * </code>
     *
     * @param     mixed $weight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::WEIGHT, $weight, $comparison);
    }

    /**
     * Filter the query on the customer_dob column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerDob('2011-03-14'); // WHERE customer_dob = '2011-03-14'
     * $query->filterByCustomerDob('now'); // WHERE customer_dob = '2011-03-14'
     * $query->filterByCustomerDob(array('max' => 'yesterday')); // WHERE customer_dob < '2011-03-13'
     * </code>
     *
     * @param     mixed $customerDob The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerDob($customerDob = null, $comparison = null)
    {
        if (is_array($customerDob)) {
            $useMinMax = false;
            if (isset($customerDob['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_DOB, $customerDob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerDob['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_DOB, $customerDob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_DOB, $customerDob, $comparison);
    }

    /**
     * Filter the query on the increment_id column
     *
     * Example usage:
     * <code>
     * $query->filterByIncrementId('fooValue');   // WHERE increment_id = 'fooValue'
     * $query->filterByIncrementId('%fooValue%'); // WHERE increment_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $incrementId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByIncrementId($incrementId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($incrementId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $incrementId)) {
                $incrementId = str_replace('*', '%', $incrementId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::INCREMENT_ID, $incrementId, $comparison);
    }

    /**
     * Filter the query on the applied_rule_ids column
     *
     * Example usage:
     * <code>
     * $query->filterByAppliedRuleIds('fooValue');   // WHERE applied_rule_ids = 'fooValue'
     * $query->filterByAppliedRuleIds('%fooValue%'); // WHERE applied_rule_ids LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appliedRuleIds The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByAppliedRuleIds($appliedRuleIds = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appliedRuleIds)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appliedRuleIds)) {
                $appliedRuleIds = str_replace('*', '%', $appliedRuleIds);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::APPLIED_RULE_IDS, $appliedRuleIds, $comparison);
    }

    /**
     * Filter the query on the base_currency_code column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseCurrencyCode('fooValue');   // WHERE base_currency_code = 'fooValue'
     * $query->filterByBaseCurrencyCode('%fooValue%'); // WHERE base_currency_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $baseCurrencyCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseCurrencyCode($baseCurrencyCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($baseCurrencyCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $baseCurrencyCode)) {
                $baseCurrencyCode = str_replace('*', '%', $baseCurrencyCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_CURRENCY_CODE, $baseCurrencyCode, $comparison);
    }

    /**
     * Filter the query on the customer_email column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerEmail('fooValue');   // WHERE customer_email = 'fooValue'
     * $query->filterByCustomerEmail('%fooValue%'); // WHERE customer_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $customerEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerEmail($customerEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($customerEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $customerEmail)) {
                $customerEmail = str_replace('*', '%', $customerEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_EMAIL, $customerEmail, $comparison);
    }

    /**
     * Filter the query on the customer_firstname column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerFirstname('fooValue');   // WHERE customer_firstname = 'fooValue'
     * $query->filterByCustomerFirstname('%fooValue%'); // WHERE customer_firstname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $customerFirstname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerFirstname($customerFirstname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($customerFirstname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $customerFirstname)) {
                $customerFirstname = str_replace('*', '%', $customerFirstname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_FIRSTNAME, $customerFirstname, $comparison);
    }

    /**
     * Filter the query on the customer_lastname column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerLastname('fooValue');   // WHERE customer_lastname = 'fooValue'
     * $query->filterByCustomerLastname('%fooValue%'); // WHERE customer_lastname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $customerLastname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerLastname($customerLastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($customerLastname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $customerLastname)) {
                $customerLastname = str_replace('*', '%', $customerLastname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_LASTNAME, $customerLastname, $comparison);
    }

    /**
     * Filter the query on the customer_middlename column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerMiddlename('fooValue');   // WHERE customer_middlename = 'fooValue'
     * $query->filterByCustomerMiddlename('%fooValue%'); // WHERE customer_middlename LIKE '%fooValue%'
     * </code>
     *
     * @param     string $customerMiddlename The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerMiddlename($customerMiddlename = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($customerMiddlename)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $customerMiddlename)) {
                $customerMiddlename = str_replace('*', '%', $customerMiddlename);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_MIDDLENAME, $customerMiddlename, $comparison);
    }

    /**
     * Filter the query on the customer_prefix column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerPrefix('fooValue');   // WHERE customer_prefix = 'fooValue'
     * $query->filterByCustomerPrefix('%fooValue%'); // WHERE customer_prefix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $customerPrefix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerPrefix($customerPrefix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($customerPrefix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $customerPrefix)) {
                $customerPrefix = str_replace('*', '%', $customerPrefix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_PREFIX, $customerPrefix, $comparison);
    }

    /**
     * Filter the query on the customer_suffix column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerSuffix('fooValue');   // WHERE customer_suffix = 'fooValue'
     * $query->filterByCustomerSuffix('%fooValue%'); // WHERE customer_suffix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $customerSuffix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerSuffix($customerSuffix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($customerSuffix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $customerSuffix)) {
                $customerSuffix = str_replace('*', '%', $customerSuffix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_SUFFIX, $customerSuffix, $comparison);
    }

    /**
     * Filter the query on the customer_taxvat column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerTaxvat('fooValue');   // WHERE customer_taxvat = 'fooValue'
     * $query->filterByCustomerTaxvat('%fooValue%'); // WHERE customer_taxvat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $customerTaxvat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerTaxvat($customerTaxvat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($customerTaxvat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $customerTaxvat)) {
                $customerTaxvat = str_replace('*', '%', $customerTaxvat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_TAXVAT, $customerTaxvat, $comparison);
    }

    /**
     * Filter the query on the discount_description column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscountDescription('fooValue');   // WHERE discount_description = 'fooValue'
     * $query->filterByDiscountDescription('%fooValue%'); // WHERE discount_description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $discountDescription The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByDiscountDescription($discountDescription = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($discountDescription)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $discountDescription)) {
                $discountDescription = str_replace('*', '%', $discountDescription);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_DESCRIPTION, $discountDescription, $comparison);
    }

    /**
     * Filter the query on the ext_customer_id column
     *
     * Example usage:
     * <code>
     * $query->filterByExtCustomerId('fooValue');   // WHERE ext_customer_id = 'fooValue'
     * $query->filterByExtCustomerId('%fooValue%'); // WHERE ext_customer_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extCustomerId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByExtCustomerId($extCustomerId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extCustomerId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extCustomerId)) {
                $extCustomerId = str_replace('*', '%', $extCustomerId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::EXT_CUSTOMER_ID, $extCustomerId, $comparison);
    }

    /**
     * Filter the query on the ext_order_id column
     *
     * Example usage:
     * <code>
     * $query->filterByExtOrderId('fooValue');   // WHERE ext_order_id = 'fooValue'
     * $query->filterByExtOrderId('%fooValue%'); // WHERE ext_order_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extOrderId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByExtOrderId($extOrderId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extOrderId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extOrderId)) {
                $extOrderId = str_replace('*', '%', $extOrderId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::EXT_ORDER_ID, $extOrderId, $comparison);
    }

    /**
     * Filter the query on the global_currency_code column
     *
     * Example usage:
     * <code>
     * $query->filterByGlobalCurrencyCode('fooValue');   // WHERE global_currency_code = 'fooValue'
     * $query->filterByGlobalCurrencyCode('%fooValue%'); // WHERE global_currency_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $globalCurrencyCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGlobalCurrencyCode($globalCurrencyCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($globalCurrencyCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $globalCurrencyCode)) {
                $globalCurrencyCode = str_replace('*', '%', $globalCurrencyCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GLOBAL_CURRENCY_CODE, $globalCurrencyCode, $comparison);
    }

    /**
     * Filter the query on the hold_before_state column
     *
     * Example usage:
     * <code>
     * $query->filterByHoldBeforeState('fooValue');   // WHERE hold_before_state = 'fooValue'
     * $query->filterByHoldBeforeState('%fooValue%'); // WHERE hold_before_state LIKE '%fooValue%'
     * </code>
     *
     * @param     string $holdBeforeState The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByHoldBeforeState($holdBeforeState = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($holdBeforeState)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $holdBeforeState)) {
                $holdBeforeState = str_replace('*', '%', $holdBeforeState);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::HOLD_BEFORE_STATE, $holdBeforeState, $comparison);
    }

    /**
     * Filter the query on the hold_before_status column
     *
     * Example usage:
     * <code>
     * $query->filterByHoldBeforeStatus('fooValue');   // WHERE hold_before_status = 'fooValue'
     * $query->filterByHoldBeforeStatus('%fooValue%'); // WHERE hold_before_status LIKE '%fooValue%'
     * </code>
     *
     * @param     string $holdBeforeStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByHoldBeforeStatus($holdBeforeStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($holdBeforeStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $holdBeforeStatus)) {
                $holdBeforeStatus = str_replace('*', '%', $holdBeforeStatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::HOLD_BEFORE_STATUS, $holdBeforeStatus, $comparison);
    }

    /**
     * Filter the query on the order_currency_code column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderCurrencyCode('fooValue');   // WHERE order_currency_code = 'fooValue'
     * $query->filterByOrderCurrencyCode('%fooValue%'); // WHERE order_currency_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $orderCurrencyCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByOrderCurrencyCode($orderCurrencyCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($orderCurrencyCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $orderCurrencyCode)) {
                $orderCurrencyCode = str_replace('*', '%', $orderCurrencyCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::ORDER_CURRENCY_CODE, $orderCurrencyCode, $comparison);
    }

    /**
     * Filter the query on the original_increment_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalIncrementId('fooValue');   // WHERE original_increment_id = 'fooValue'
     * $query->filterByOriginalIncrementId('%fooValue%'); // WHERE original_increment_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalIncrementId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByOriginalIncrementId($originalIncrementId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originalIncrementId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $originalIncrementId)) {
                $originalIncrementId = str_replace('*', '%', $originalIncrementId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::ORIGINAL_INCREMENT_ID, $originalIncrementId, $comparison);
    }

    /**
     * Filter the query on the relation_child_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelationChildId('fooValue');   // WHERE relation_child_id = 'fooValue'
     * $query->filterByRelationChildId('%fooValue%'); // WHERE relation_child_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relationChildId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRelationChildId($relationChildId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relationChildId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relationChildId)) {
                $relationChildId = str_replace('*', '%', $relationChildId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::RELATION_CHILD_ID, $relationChildId, $comparison);
    }

    /**
     * Filter the query on the relation_child_real_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelationChildRealId('fooValue');   // WHERE relation_child_real_id = 'fooValue'
     * $query->filterByRelationChildRealId('%fooValue%'); // WHERE relation_child_real_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relationChildRealId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRelationChildRealId($relationChildRealId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relationChildRealId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relationChildRealId)) {
                $relationChildRealId = str_replace('*', '%', $relationChildRealId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::RELATION_CHILD_REAL_ID, $relationChildRealId, $comparison);
    }

    /**
     * Filter the query on the relation_parent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelationParentId('fooValue');   // WHERE relation_parent_id = 'fooValue'
     * $query->filterByRelationParentId('%fooValue%'); // WHERE relation_parent_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relationParentId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRelationParentId($relationParentId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relationParentId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relationParentId)) {
                $relationParentId = str_replace('*', '%', $relationParentId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::RELATION_PARENT_ID, $relationParentId, $comparison);
    }

    /**
     * Filter the query on the relation_parent_real_id column
     *
     * Example usage:
     * <code>
     * $query->filterByRelationParentRealId('fooValue');   // WHERE relation_parent_real_id = 'fooValue'
     * $query->filterByRelationParentRealId('%fooValue%'); // WHERE relation_parent_real_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $relationParentRealId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRelationParentRealId($relationParentRealId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($relationParentRealId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $relationParentRealId)) {
                $relationParentRealId = str_replace('*', '%', $relationParentRealId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::RELATION_PARENT_REAL_ID, $relationParentRealId, $comparison);
    }

    /**
     * Filter the query on the remote_ip column
     *
     * Example usage:
     * <code>
     * $query->filterByRemoteIp('fooValue');   // WHERE remote_ip = 'fooValue'
     * $query->filterByRemoteIp('%fooValue%'); // WHERE remote_ip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $remoteIp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRemoteIp($remoteIp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($remoteIp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $remoteIp)) {
                $remoteIp = str_replace('*', '%', $remoteIp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::REMOTE_IP, $remoteIp, $comparison);
    }

    /**
     * Filter the query on the shipping_method column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingMethod('fooValue');   // WHERE shipping_method = 'fooValue'
     * $query->filterByShippingMethod('%fooValue%'); // WHERE shipping_method LIKE '%fooValue%'
     * </code>
     *
     * @param     string $shippingMethod The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingMethod($shippingMethod = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($shippingMethod)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $shippingMethod)) {
                $shippingMethod = str_replace('*', '%', $shippingMethod);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_METHOD, $shippingMethod, $comparison);
    }

    /**
     * Filter the query on the store_currency_code column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreCurrencyCode('fooValue');   // WHERE store_currency_code = 'fooValue'
     * $query->filterByStoreCurrencyCode('%fooValue%'); // WHERE store_currency_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storeCurrencyCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByStoreCurrencyCode($storeCurrencyCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storeCurrencyCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $storeCurrencyCode)) {
                $storeCurrencyCode = str_replace('*', '%', $storeCurrencyCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::STORE_CURRENCY_CODE, $storeCurrencyCode, $comparison);
    }

    /**
     * Filter the query on the store_name column
     *
     * Example usage:
     * <code>
     * $query->filterByStoreName('fooValue');   // WHERE store_name = 'fooValue'
     * $query->filterByStoreName('%fooValue%'); // WHERE store_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $storeName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByStoreName($storeName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($storeName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $storeName)) {
                $storeName = str_replace('*', '%', $storeName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::STORE_NAME, $storeName, $comparison);
    }

    /**
     * Filter the query on the x_forwarded_for column
     *
     * Example usage:
     * <code>
     * $query->filterByXForwardedFor('fooValue');   // WHERE x_forwarded_for = 'fooValue'
     * $query->filterByXForwardedFor('%fooValue%'); // WHERE x_forwarded_for LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xForwardedFor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByXForwardedFor($xForwardedFor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xForwardedFor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $xForwardedFor)) {
                $xForwardedFor = str_replace('*', '%', $xForwardedFor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::X_FORWARDED_FOR, $xForwardedFor, $comparison);
    }

    /**
     * Filter the query on the customer_note column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerNote('fooValue');   // WHERE customer_note = 'fooValue'
     * $query->filterByCustomerNote('%fooValue%'); // WHERE customer_note LIKE '%fooValue%'
     * </code>
     *
     * @param     string $customerNote The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerNote($customerNote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($customerNote)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $customerNote)) {
                $customerNote = str_replace('*', '%', $customerNote);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_NOTE, $customerNote, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at < '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the total_item_count column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalItemCount(1234); // WHERE total_item_count = 1234
     * $query->filterByTotalItemCount(array(12, 34)); // WHERE total_item_count IN (12, 34)
     * $query->filterByTotalItemCount(array('min' => 12)); // WHERE total_item_count >= 12
     * $query->filterByTotalItemCount(array('max' => 12)); // WHERE total_item_count <= 12
     * </code>
     *
     * @param     mixed $totalItemCount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByTotalItemCount($totalItemCount = null, $comparison = null)
    {
        if (is_array($totalItemCount)) {
            $useMinMax = false;
            if (isset($totalItemCount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_ITEM_COUNT, $totalItemCount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalItemCount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_ITEM_COUNT, $totalItemCount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::TOTAL_ITEM_COUNT, $totalItemCount, $comparison);
    }

    /**
     * Filter the query on the customer_gender column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerGender(1234); // WHERE customer_gender = 1234
     * $query->filterByCustomerGender(array(12, 34)); // WHERE customer_gender IN (12, 34)
     * $query->filterByCustomerGender(array('min' => 12)); // WHERE customer_gender >= 12
     * $query->filterByCustomerGender(array('max' => 12)); // WHERE customer_gender <= 12
     * </code>
     *
     * @param     mixed $customerGender The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerGender($customerGender = null, $comparison = null)
    {
        if (is_array($customerGender)) {
            $useMinMax = false;
            if (isset($customerGender['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_GENDER, $customerGender['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerGender['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_GENDER, $customerGender['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_GENDER, $customerGender, $comparison);
    }

    /**
     * Filter the query on the hidden_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByHiddenTaxAmount(1234); // WHERE hidden_tax_amount = 1234
     * $query->filterByHiddenTaxAmount(array(12, 34)); // WHERE hidden_tax_amount IN (12, 34)
     * $query->filterByHiddenTaxAmount(array('min' => 12)); // WHERE hidden_tax_amount >= 12
     * $query->filterByHiddenTaxAmount(array('max' => 12)); // WHERE hidden_tax_amount <= 12
     * </code>
     *
     * @param     mixed $hiddenTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByHiddenTaxAmount($hiddenTaxAmount = null, $comparison = null)
    {
        if (is_array($hiddenTaxAmount)) {
            $useMinMax = false;
            if (isset($hiddenTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::HIDDEN_TAX_AMOUNT, $hiddenTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hiddenTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::HIDDEN_TAX_AMOUNT, $hiddenTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::HIDDEN_TAX_AMOUNT, $hiddenTaxAmount, $comparison);
    }

    /**
     * Filter the query on the base_hidden_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseHiddenTaxAmount(1234); // WHERE base_hidden_tax_amount = 1234
     * $query->filterByBaseHiddenTaxAmount(array(12, 34)); // WHERE base_hidden_tax_amount IN (12, 34)
     * $query->filterByBaseHiddenTaxAmount(array('min' => 12)); // WHERE base_hidden_tax_amount >= 12
     * $query->filterByBaseHiddenTaxAmount(array('max' => 12)); // WHERE base_hidden_tax_amount <= 12
     * </code>
     *
     * @param     mixed $baseHiddenTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseHiddenTaxAmount($baseHiddenTaxAmount = null, $comparison = null)
    {
        if (is_array($baseHiddenTaxAmount)) {
            $useMinMax = false;
            if (isset($baseHiddenTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_HIDDEN_TAX_AMOUNT, $baseHiddenTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseHiddenTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_HIDDEN_TAX_AMOUNT, $baseHiddenTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_HIDDEN_TAX_AMOUNT, $baseHiddenTaxAmount, $comparison);
    }

    /**
     * Filter the query on the shipping_hidden_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingHiddenTaxAmount(1234); // WHERE shipping_hidden_tax_amount = 1234
     * $query->filterByShippingHiddenTaxAmount(array(12, 34)); // WHERE shipping_hidden_tax_amount IN (12, 34)
     * $query->filterByShippingHiddenTaxAmount(array('min' => 12)); // WHERE shipping_hidden_tax_amount >= 12
     * $query->filterByShippingHiddenTaxAmount(array('max' => 12)); // WHERE shipping_hidden_tax_amount <= 12
     * </code>
     *
     * @param     mixed $shippingHiddenTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingHiddenTaxAmount($shippingHiddenTaxAmount = null, $comparison = null)
    {
        if (is_array($shippingHiddenTaxAmount)) {
            $useMinMax = false;
            if (isset($shippingHiddenTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_HIDDEN_TAX_AMOUNT, $shippingHiddenTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shippingHiddenTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_HIDDEN_TAX_AMOUNT, $shippingHiddenTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_HIDDEN_TAX_AMOUNT, $shippingHiddenTaxAmount, $comparison);
    }

    /**
     * Filter the query on the base_shipping_hidden_tax_amnt column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseShippingHiddenTaxAmnt(1234); // WHERE base_shipping_hidden_tax_amnt = 1234
     * $query->filterByBaseShippingHiddenTaxAmnt(array(12, 34)); // WHERE base_shipping_hidden_tax_amnt IN (12, 34)
     * $query->filterByBaseShippingHiddenTaxAmnt(array('min' => 12)); // WHERE base_shipping_hidden_tax_amnt >= 12
     * $query->filterByBaseShippingHiddenTaxAmnt(array('max' => 12)); // WHERE base_shipping_hidden_tax_amnt <= 12
     * </code>
     *
     * @param     mixed $baseShippingHiddenTaxAmnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseShippingHiddenTaxAmnt($baseShippingHiddenTaxAmnt = null, $comparison = null)
    {
        if (is_array($baseShippingHiddenTaxAmnt)) {
            $useMinMax = false;
            if (isset($baseShippingHiddenTaxAmnt['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_HIDDEN_TAX_AMNT, $baseShippingHiddenTaxAmnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseShippingHiddenTaxAmnt['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_HIDDEN_TAX_AMNT, $baseShippingHiddenTaxAmnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_HIDDEN_TAX_AMNT, $baseShippingHiddenTaxAmnt, $comparison);
    }

    /**
     * Filter the query on the hidden_tax_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByHiddenTaxInvoiced(1234); // WHERE hidden_tax_invoiced = 1234
     * $query->filterByHiddenTaxInvoiced(array(12, 34)); // WHERE hidden_tax_invoiced IN (12, 34)
     * $query->filterByHiddenTaxInvoiced(array('min' => 12)); // WHERE hidden_tax_invoiced >= 12
     * $query->filterByHiddenTaxInvoiced(array('max' => 12)); // WHERE hidden_tax_invoiced <= 12
     * </code>
     *
     * @param     mixed $hiddenTaxInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByHiddenTaxInvoiced($hiddenTaxInvoiced = null, $comparison = null)
    {
        if (is_array($hiddenTaxInvoiced)) {
            $useMinMax = false;
            if (isset($hiddenTaxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::HIDDEN_TAX_INVOICED, $hiddenTaxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hiddenTaxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::HIDDEN_TAX_INVOICED, $hiddenTaxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::HIDDEN_TAX_INVOICED, $hiddenTaxInvoiced, $comparison);
    }

    /**
     * Filter the query on the base_hidden_tax_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseHiddenTaxInvoiced(1234); // WHERE base_hidden_tax_invoiced = 1234
     * $query->filterByBaseHiddenTaxInvoiced(array(12, 34)); // WHERE base_hidden_tax_invoiced IN (12, 34)
     * $query->filterByBaseHiddenTaxInvoiced(array('min' => 12)); // WHERE base_hidden_tax_invoiced >= 12
     * $query->filterByBaseHiddenTaxInvoiced(array('max' => 12)); // WHERE base_hidden_tax_invoiced <= 12
     * </code>
     *
     * @param     mixed $baseHiddenTaxInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseHiddenTaxInvoiced($baseHiddenTaxInvoiced = null, $comparison = null)
    {
        if (is_array($baseHiddenTaxInvoiced)) {
            $useMinMax = false;
            if (isset($baseHiddenTaxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_HIDDEN_TAX_INVOICED, $baseHiddenTaxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseHiddenTaxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_HIDDEN_TAX_INVOICED, $baseHiddenTaxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_HIDDEN_TAX_INVOICED, $baseHiddenTaxInvoiced, $comparison);
    }

    /**
     * Filter the query on the hidden_tax_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByHiddenTaxRefunded(1234); // WHERE hidden_tax_refunded = 1234
     * $query->filterByHiddenTaxRefunded(array(12, 34)); // WHERE hidden_tax_refunded IN (12, 34)
     * $query->filterByHiddenTaxRefunded(array('min' => 12)); // WHERE hidden_tax_refunded >= 12
     * $query->filterByHiddenTaxRefunded(array('max' => 12)); // WHERE hidden_tax_refunded <= 12
     * </code>
     *
     * @param     mixed $hiddenTaxRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByHiddenTaxRefunded($hiddenTaxRefunded = null, $comparison = null)
    {
        if (is_array($hiddenTaxRefunded)) {
            $useMinMax = false;
            if (isset($hiddenTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::HIDDEN_TAX_REFUNDED, $hiddenTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hiddenTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::HIDDEN_TAX_REFUNDED, $hiddenTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::HIDDEN_TAX_REFUNDED, $hiddenTaxRefunded, $comparison);
    }

    /**
     * Filter the query on the base_hidden_tax_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseHiddenTaxRefunded(1234); // WHERE base_hidden_tax_refunded = 1234
     * $query->filterByBaseHiddenTaxRefunded(array(12, 34)); // WHERE base_hidden_tax_refunded IN (12, 34)
     * $query->filterByBaseHiddenTaxRefunded(array('min' => 12)); // WHERE base_hidden_tax_refunded >= 12
     * $query->filterByBaseHiddenTaxRefunded(array('max' => 12)); // WHERE base_hidden_tax_refunded <= 12
     * </code>
     *
     * @param     mixed $baseHiddenTaxRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseHiddenTaxRefunded($baseHiddenTaxRefunded = null, $comparison = null)
    {
        if (is_array($baseHiddenTaxRefunded)) {
            $useMinMax = false;
            if (isset($baseHiddenTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_HIDDEN_TAX_REFUNDED, $baseHiddenTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseHiddenTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_HIDDEN_TAX_REFUNDED, $baseHiddenTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_HIDDEN_TAX_REFUNDED, $baseHiddenTaxRefunded, $comparison);
    }

    /**
     * Filter the query on the shipping_incl_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByShippingInclTax(1234); // WHERE shipping_incl_tax = 1234
     * $query->filterByShippingInclTax(array(12, 34)); // WHERE shipping_incl_tax IN (12, 34)
     * $query->filterByShippingInclTax(array('min' => 12)); // WHERE shipping_incl_tax >= 12
     * $query->filterByShippingInclTax(array('max' => 12)); // WHERE shipping_incl_tax <= 12
     * </code>
     *
     * @param     mixed $shippingInclTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByShippingInclTax($shippingInclTax = null, $comparison = null)
    {
        if (is_array($shippingInclTax)) {
            $useMinMax = false;
            if (isset($shippingInclTax['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_INCL_TAX, $shippingInclTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($shippingInclTax['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_INCL_TAX, $shippingInclTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SHIPPING_INCL_TAX, $shippingInclTax, $comparison);
    }

    /**
     * Filter the query on the base_shipping_incl_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseShippingInclTax(1234); // WHERE base_shipping_incl_tax = 1234
     * $query->filterByBaseShippingInclTax(array(12, 34)); // WHERE base_shipping_incl_tax IN (12, 34)
     * $query->filterByBaseShippingInclTax(array('min' => 12)); // WHERE base_shipping_incl_tax >= 12
     * $query->filterByBaseShippingInclTax(array('max' => 12)); // WHERE base_shipping_incl_tax <= 12
     * </code>
     *
     * @param     mixed $baseShippingInclTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseShippingInclTax($baseShippingInclTax = null, $comparison = null)
    {
        if (is_array($baseShippingInclTax)) {
            $useMinMax = false;
            if (isset($baseShippingInclTax['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_INCL_TAX, $baseShippingInclTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseShippingInclTax['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_INCL_TAX, $baseShippingInclTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_SHIPPING_INCL_TAX, $baseShippingInclTax, $comparison);
    }

    /**
     * Filter the query on the coupon_rule_name column
     *
     * Example usage:
     * <code>
     * $query->filterByCouponRuleName('fooValue');   // WHERE coupon_rule_name = 'fooValue'
     * $query->filterByCouponRuleName('%fooValue%'); // WHERE coupon_rule_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $couponRuleName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCouponRuleName($couponRuleName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($couponRuleName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $couponRuleName)) {
                $couponRuleName = str_replace('*', '%', $couponRuleName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::COUPON_RULE_NAME, $couponRuleName, $comparison);
    }

    /**
     * Filter the query on the paypal_ipn_customer_notified column
     *
     * Example usage:
     * <code>
     * $query->filterByPaypalIpnCustomerNotified(1234); // WHERE paypal_ipn_customer_notified = 1234
     * $query->filterByPaypalIpnCustomerNotified(array(12, 34)); // WHERE paypal_ipn_customer_notified IN (12, 34)
     * $query->filterByPaypalIpnCustomerNotified(array('min' => 12)); // WHERE paypal_ipn_customer_notified >= 12
     * $query->filterByPaypalIpnCustomerNotified(array('max' => 12)); // WHERE paypal_ipn_customer_notified <= 12
     * </code>
     *
     * @param     mixed $paypalIpnCustomerNotified The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPaypalIpnCustomerNotified($paypalIpnCustomerNotified = null, $comparison = null)
    {
        if (is_array($paypalIpnCustomerNotified)) {
            $useMinMax = false;
            if (isset($paypalIpnCustomerNotified['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::PAYPAL_IPN_CUSTOMER_NOTIFIED, $paypalIpnCustomerNotified['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paypalIpnCustomerNotified['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::PAYPAL_IPN_CUSTOMER_NOTIFIED, $paypalIpnCustomerNotified['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::PAYPAL_IPN_CUSTOMER_NOTIFIED, $paypalIpnCustomerNotified, $comparison);
    }

    /**
     * Filter the query on the gift_message_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftMessageId(1234); // WHERE gift_message_id = 1234
     * $query->filterByGiftMessageId(array(12, 34)); // WHERE gift_message_id IN (12, 34)
     * $query->filterByGiftMessageId(array('min' => 12)); // WHERE gift_message_id >= 12
     * $query->filterByGiftMessageId(array('max' => 12)); // WHERE gift_message_id <= 12
     * </code>
     *
     * @param     mixed $giftMessageId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftMessageId($giftMessageId = null, $comparison = null)
    {
        if (is_array($giftMessageId)) {
            $useMinMax = false;
            if (isset($giftMessageId['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GIFT_MESSAGE_ID, $giftMessageId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($giftMessageId['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GIFT_MESSAGE_ID, $giftMessageId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_MESSAGE_ID, $giftMessageId, $comparison);
    }

    /**
     * Filter the query on the groupdeals_coupon_from column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupdealsCouponFrom('fooValue');   // WHERE groupdeals_coupon_from = 'fooValue'
     * $query->filterByGroupdealsCouponFrom('%fooValue%'); // WHERE groupdeals_coupon_from LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groupdealsCouponFrom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGroupdealsCouponFrom($groupdealsCouponFrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupdealsCouponFrom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $groupdealsCouponFrom)) {
                $groupdealsCouponFrom = str_replace('*', '%', $groupdealsCouponFrom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GROUPDEALS_COUPON_FROM, $groupdealsCouponFrom, $comparison);
    }

    /**
     * Filter the query on the groupdeals_coupon_to column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupdealsCouponTo('fooValue');   // WHERE groupdeals_coupon_to = 'fooValue'
     * $query->filterByGroupdealsCouponTo('%fooValue%'); // WHERE groupdeals_coupon_to LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groupdealsCouponTo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGroupdealsCouponTo($groupdealsCouponTo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupdealsCouponTo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $groupdealsCouponTo)) {
                $groupdealsCouponTo = str_replace('*', '%', $groupdealsCouponTo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GROUPDEALS_COUPON_TO, $groupdealsCouponTo, $comparison);
    }

    /**
     * Filter the query on the groupdeals_coupon_to_email column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupdealsCouponToEmail('fooValue');   // WHERE groupdeals_coupon_to_email = 'fooValue'
     * $query->filterByGroupdealsCouponToEmail('%fooValue%'); // WHERE groupdeals_coupon_to_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groupdealsCouponToEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGroupdealsCouponToEmail($groupdealsCouponToEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupdealsCouponToEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $groupdealsCouponToEmail)) {
                $groupdealsCouponToEmail = str_replace('*', '%', $groupdealsCouponToEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GROUPDEALS_COUPON_TO_EMAIL, $groupdealsCouponToEmail, $comparison);
    }

    /**
     * Filter the query on the groupdeals_coupon_message column
     *
     * Example usage:
     * <code>
     * $query->filterByGroupdealsCouponMessage('fooValue');   // WHERE groupdeals_coupon_message = 'fooValue'
     * $query->filterByGroupdealsCouponMessage('%fooValue%'); // WHERE groupdeals_coupon_message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $groupdealsCouponMessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGroupdealsCouponMessage($groupdealsCouponMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($groupdealsCouponMessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $groupdealsCouponMessage)) {
                $groupdealsCouponMessage = str_replace('*', '%', $groupdealsCouponMessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GROUPDEALS_COUPON_MESSAGE, $groupdealsCouponMessage, $comparison);
    }

    /**
     * Filter the query on the base_customer_balance_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseCustomerBalanceAmount(1234); // WHERE base_customer_balance_amount = 1234
     * $query->filterByBaseCustomerBalanceAmount(array(12, 34)); // WHERE base_customer_balance_amount IN (12, 34)
     * $query->filterByBaseCustomerBalanceAmount(array('min' => 12)); // WHERE base_customer_balance_amount >= 12
     * $query->filterByBaseCustomerBalanceAmount(array('max' => 12)); // WHERE base_customer_balance_amount <= 12
     * </code>
     *
     * @param     mixed $baseCustomerBalanceAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseCustomerBalanceAmount($baseCustomerBalanceAmount = null, $comparison = null)
    {
        if (is_array($baseCustomerBalanceAmount)) {
            $useMinMax = false;
            if (isset($baseCustomerBalanceAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_AMOUNT, $baseCustomerBalanceAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseCustomerBalanceAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_AMOUNT, $baseCustomerBalanceAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_AMOUNT, $baseCustomerBalanceAmount, $comparison);
    }

    /**
     * Filter the query on the customer_balance_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerBalanceAmount(1234); // WHERE customer_balance_amount = 1234
     * $query->filterByCustomerBalanceAmount(array(12, 34)); // WHERE customer_balance_amount IN (12, 34)
     * $query->filterByCustomerBalanceAmount(array('min' => 12)); // WHERE customer_balance_amount >= 12
     * $query->filterByCustomerBalanceAmount(array('max' => 12)); // WHERE customer_balance_amount <= 12
     * </code>
     *
     * @param     mixed $customerBalanceAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerBalanceAmount($customerBalanceAmount = null, $comparison = null)
    {
        if (is_array($customerBalanceAmount)) {
            $useMinMax = false;
            if (isset($customerBalanceAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BALANCE_AMOUNT, $customerBalanceAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerBalanceAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BALANCE_AMOUNT, $customerBalanceAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BALANCE_AMOUNT, $customerBalanceAmount, $comparison);
    }

    /**
     * Filter the query on the base_customer_balance_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseCustomerBalanceInvoiced(1234); // WHERE base_customer_balance_invoiced = 1234
     * $query->filterByBaseCustomerBalanceInvoiced(array(12, 34)); // WHERE base_customer_balance_invoiced IN (12, 34)
     * $query->filterByBaseCustomerBalanceInvoiced(array('min' => 12)); // WHERE base_customer_balance_invoiced >= 12
     * $query->filterByBaseCustomerBalanceInvoiced(array('max' => 12)); // WHERE base_customer_balance_invoiced <= 12
     * </code>
     *
     * @param     mixed $baseCustomerBalanceInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseCustomerBalanceInvoiced($baseCustomerBalanceInvoiced = null, $comparison = null)
    {
        if (is_array($baseCustomerBalanceInvoiced)) {
            $useMinMax = false;
            if (isset($baseCustomerBalanceInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_INVOICED, $baseCustomerBalanceInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseCustomerBalanceInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_INVOICED, $baseCustomerBalanceInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_INVOICED, $baseCustomerBalanceInvoiced, $comparison);
    }

    /**
     * Filter the query on the customer_balance_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerBalanceInvoiced(1234); // WHERE customer_balance_invoiced = 1234
     * $query->filterByCustomerBalanceInvoiced(array(12, 34)); // WHERE customer_balance_invoiced IN (12, 34)
     * $query->filterByCustomerBalanceInvoiced(array('min' => 12)); // WHERE customer_balance_invoiced >= 12
     * $query->filterByCustomerBalanceInvoiced(array('max' => 12)); // WHERE customer_balance_invoiced <= 12
     * </code>
     *
     * @param     mixed $customerBalanceInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerBalanceInvoiced($customerBalanceInvoiced = null, $comparison = null)
    {
        if (is_array($customerBalanceInvoiced)) {
            $useMinMax = false;
            if (isset($customerBalanceInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BALANCE_INVOICED, $customerBalanceInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerBalanceInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BALANCE_INVOICED, $customerBalanceInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BALANCE_INVOICED, $customerBalanceInvoiced, $comparison);
    }

    /**
     * Filter the query on the base_customer_balance_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseCustomerBalanceRefunded(1234); // WHERE base_customer_balance_refunded = 1234
     * $query->filterByBaseCustomerBalanceRefunded(array(12, 34)); // WHERE base_customer_balance_refunded IN (12, 34)
     * $query->filterByBaseCustomerBalanceRefunded(array('min' => 12)); // WHERE base_customer_balance_refunded >= 12
     * $query->filterByBaseCustomerBalanceRefunded(array('max' => 12)); // WHERE base_customer_balance_refunded <= 12
     * </code>
     *
     * @param     mixed $baseCustomerBalanceRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseCustomerBalanceRefunded($baseCustomerBalanceRefunded = null, $comparison = null)
    {
        if (is_array($baseCustomerBalanceRefunded)) {
            $useMinMax = false;
            if (isset($baseCustomerBalanceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_REFUNDED, $baseCustomerBalanceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseCustomerBalanceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_REFUNDED, $baseCustomerBalanceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_CUSTOMER_BALANCE_REFUNDED, $baseCustomerBalanceRefunded, $comparison);
    }

    /**
     * Filter the query on the customer_balance_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerBalanceRefunded(1234); // WHERE customer_balance_refunded = 1234
     * $query->filterByCustomerBalanceRefunded(array(12, 34)); // WHERE customer_balance_refunded IN (12, 34)
     * $query->filterByCustomerBalanceRefunded(array('min' => 12)); // WHERE customer_balance_refunded >= 12
     * $query->filterByCustomerBalanceRefunded(array('max' => 12)); // WHERE customer_balance_refunded <= 12
     * </code>
     *
     * @param     mixed $customerBalanceRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerBalanceRefunded($customerBalanceRefunded = null, $comparison = null)
    {
        if (is_array($customerBalanceRefunded)) {
            $useMinMax = false;
            if (isset($customerBalanceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BALANCE_REFUNDED, $customerBalanceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerBalanceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BALANCE_REFUNDED, $customerBalanceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BALANCE_REFUNDED, $customerBalanceRefunded, $comparison);
    }

    /**
     * Filter the query on the bs_customer_bal_total_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBsCustomerBalTotalRefunded(1234); // WHERE bs_customer_bal_total_refunded = 1234
     * $query->filterByBsCustomerBalTotalRefunded(array(12, 34)); // WHERE bs_customer_bal_total_refunded IN (12, 34)
     * $query->filterByBsCustomerBalTotalRefunded(array('min' => 12)); // WHERE bs_customer_bal_total_refunded >= 12
     * $query->filterByBsCustomerBalTotalRefunded(array('max' => 12)); // WHERE bs_customer_bal_total_refunded <= 12
     * </code>
     *
     * @param     mixed $bsCustomerBalTotalRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBsCustomerBalTotalRefunded($bsCustomerBalTotalRefunded = null, $comparison = null)
    {
        if (is_array($bsCustomerBalTotalRefunded)) {
            $useMinMax = false;
            if (isset($bsCustomerBalTotalRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BS_CUSTOMER_BAL_TOTAL_REFUNDED, $bsCustomerBalTotalRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bsCustomerBalTotalRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BS_CUSTOMER_BAL_TOTAL_REFUNDED, $bsCustomerBalTotalRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BS_CUSTOMER_BAL_TOTAL_REFUNDED, $bsCustomerBalTotalRefunded, $comparison);
    }

    /**
     * Filter the query on the customer_bal_total_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerBalTotalRefunded(1234); // WHERE customer_bal_total_refunded = 1234
     * $query->filterByCustomerBalTotalRefunded(array(12, 34)); // WHERE customer_bal_total_refunded IN (12, 34)
     * $query->filterByCustomerBalTotalRefunded(array('min' => 12)); // WHERE customer_bal_total_refunded >= 12
     * $query->filterByCustomerBalTotalRefunded(array('max' => 12)); // WHERE customer_bal_total_refunded <= 12
     * </code>
     *
     * @param     mixed $customerBalTotalRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerBalTotalRefunded($customerBalTotalRefunded = null, $comparison = null)
    {
        if (is_array($customerBalTotalRefunded)) {
            $useMinMax = false;
            if (isset($customerBalTotalRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BAL_TOTAL_REFUNDED, $customerBalTotalRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($customerBalTotalRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BAL_TOTAL_REFUNDED, $customerBalTotalRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_BAL_TOTAL_REFUNDED, $customerBalTotalRefunded, $comparison);
    }

    /**
     * Filter the query on the gift_cards column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftCards('fooValue');   // WHERE gift_cards = 'fooValue'
     * $query->filterByGiftCards('%fooValue%'); // WHERE gift_cards LIKE '%fooValue%'
     * </code>
     *
     * @param     string $giftCards The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftCards($giftCards = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($giftCards)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $giftCards)) {
                $giftCards = str_replace('*', '%', $giftCards);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CARDS, $giftCards, $comparison);
    }

    /**
     * Filter the query on the base_gift_cards_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseGiftCardsAmount(1234); // WHERE base_gift_cards_amount = 1234
     * $query->filterByBaseGiftCardsAmount(array(12, 34)); // WHERE base_gift_cards_amount IN (12, 34)
     * $query->filterByBaseGiftCardsAmount(array('min' => 12)); // WHERE base_gift_cards_amount >= 12
     * $query->filterByBaseGiftCardsAmount(array('max' => 12)); // WHERE base_gift_cards_amount <= 12
     * </code>
     *
     * @param     mixed $baseGiftCardsAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseGiftCardsAmount($baseGiftCardsAmount = null, $comparison = null)
    {
        if (is_array($baseGiftCardsAmount)) {
            $useMinMax = false;
            if (isset($baseGiftCardsAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_GIFT_CARDS_AMOUNT, $baseGiftCardsAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseGiftCardsAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_GIFT_CARDS_AMOUNT, $baseGiftCardsAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_GIFT_CARDS_AMOUNT, $baseGiftCardsAmount, $comparison);
    }

    /**
     * Filter the query on the gift_cards_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftCardsAmount(1234); // WHERE gift_cards_amount = 1234
     * $query->filterByGiftCardsAmount(array(12, 34)); // WHERE gift_cards_amount IN (12, 34)
     * $query->filterByGiftCardsAmount(array('min' => 12)); // WHERE gift_cards_amount >= 12
     * $query->filterByGiftCardsAmount(array('max' => 12)); // WHERE gift_cards_amount <= 12
     * </code>
     *
     * @param     mixed $giftCardsAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftCardsAmount($giftCardsAmount = null, $comparison = null)
    {
        if (is_array($giftCardsAmount)) {
            $useMinMax = false;
            if (isset($giftCardsAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CARDS_AMOUNT, $giftCardsAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($giftCardsAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CARDS_AMOUNT, $giftCardsAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CARDS_AMOUNT, $giftCardsAmount, $comparison);
    }

    /**
     * Filter the query on the base_gift_cards_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseGiftCardsInvoiced(1234); // WHERE base_gift_cards_invoiced = 1234
     * $query->filterByBaseGiftCardsInvoiced(array(12, 34)); // WHERE base_gift_cards_invoiced IN (12, 34)
     * $query->filterByBaseGiftCardsInvoiced(array('min' => 12)); // WHERE base_gift_cards_invoiced >= 12
     * $query->filterByBaseGiftCardsInvoiced(array('max' => 12)); // WHERE base_gift_cards_invoiced <= 12
     * </code>
     *
     * @param     mixed $baseGiftCardsInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseGiftCardsInvoiced($baseGiftCardsInvoiced = null, $comparison = null)
    {
        if (is_array($baseGiftCardsInvoiced)) {
            $useMinMax = false;
            if (isset($baseGiftCardsInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_GIFT_CARDS_INVOICED, $baseGiftCardsInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseGiftCardsInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_GIFT_CARDS_INVOICED, $baseGiftCardsInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_GIFT_CARDS_INVOICED, $baseGiftCardsInvoiced, $comparison);
    }

    /**
     * Filter the query on the gift_cards_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftCardsInvoiced(1234); // WHERE gift_cards_invoiced = 1234
     * $query->filterByGiftCardsInvoiced(array(12, 34)); // WHERE gift_cards_invoiced IN (12, 34)
     * $query->filterByGiftCardsInvoiced(array('min' => 12)); // WHERE gift_cards_invoiced >= 12
     * $query->filterByGiftCardsInvoiced(array('max' => 12)); // WHERE gift_cards_invoiced <= 12
     * </code>
     *
     * @param     mixed $giftCardsInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftCardsInvoiced($giftCardsInvoiced = null, $comparison = null)
    {
        if (is_array($giftCardsInvoiced)) {
            $useMinMax = false;
            if (isset($giftCardsInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CARDS_INVOICED, $giftCardsInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($giftCardsInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CARDS_INVOICED, $giftCardsInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CARDS_INVOICED, $giftCardsInvoiced, $comparison);
    }

    /**
     * Filter the query on the base_gift_cards_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseGiftCardsRefunded(1234); // WHERE base_gift_cards_refunded = 1234
     * $query->filterByBaseGiftCardsRefunded(array(12, 34)); // WHERE base_gift_cards_refunded IN (12, 34)
     * $query->filterByBaseGiftCardsRefunded(array('min' => 12)); // WHERE base_gift_cards_refunded >= 12
     * $query->filterByBaseGiftCardsRefunded(array('max' => 12)); // WHERE base_gift_cards_refunded <= 12
     * </code>
     *
     * @param     mixed $baseGiftCardsRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseGiftCardsRefunded($baseGiftCardsRefunded = null, $comparison = null)
    {
        if (is_array($baseGiftCardsRefunded)) {
            $useMinMax = false;
            if (isset($baseGiftCardsRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_GIFT_CARDS_REFUNDED, $baseGiftCardsRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseGiftCardsRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_GIFT_CARDS_REFUNDED, $baseGiftCardsRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_GIFT_CARDS_REFUNDED, $baseGiftCardsRefunded, $comparison);
    }

    /**
     * Filter the query on the gift_cards_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftCardsRefunded(1234); // WHERE gift_cards_refunded = 1234
     * $query->filterByGiftCardsRefunded(array(12, 34)); // WHERE gift_cards_refunded IN (12, 34)
     * $query->filterByGiftCardsRefunded(array('min' => 12)); // WHERE gift_cards_refunded >= 12
     * $query->filterByGiftCardsRefunded(array('max' => 12)); // WHERE gift_cards_refunded <= 12
     * </code>
     *
     * @param     mixed $giftCardsRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftCardsRefunded($giftCardsRefunded = null, $comparison = null)
    {
        if (is_array($giftCardsRefunded)) {
            $useMinMax = false;
            if (isset($giftCardsRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CARDS_REFUNDED, $giftCardsRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($giftCardsRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CARDS_REFUNDED, $giftCardsRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CARDS_REFUNDED, $giftCardsRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGwId(1234); // WHERE gw_id = 1234
     * $query->filterByGwId(array(12, 34)); // WHERE gw_id IN (12, 34)
     * $query->filterByGwId(array('min' => 12)); // WHERE gw_id >= 12
     * $query->filterByGwId(array('max' => 12)); // WHERE gw_id <= 12
     * </code>
     *
     * @param     mixed $gwId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwId($gwId = null, $comparison = null)
    {
        if (is_array($gwId)) {
            $useMinMax = false;
            if (isset($gwId['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ID, $gwId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwId['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ID, $gwId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ID, $gwId, $comparison);
    }

    /**
     * Filter the query on the gw_allow_gift_receipt column
     *
     * Example usage:
     * <code>
     * $query->filterByGwAllowGiftReceipt(1234); // WHERE gw_allow_gift_receipt = 1234
     * $query->filterByGwAllowGiftReceipt(array(12, 34)); // WHERE gw_allow_gift_receipt IN (12, 34)
     * $query->filterByGwAllowGiftReceipt(array('min' => 12)); // WHERE gw_allow_gift_receipt >= 12
     * $query->filterByGwAllowGiftReceipt(array('max' => 12)); // WHERE gw_allow_gift_receipt <= 12
     * </code>
     *
     * @param     mixed $gwAllowGiftReceipt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwAllowGiftReceipt($gwAllowGiftReceipt = null, $comparison = null)
    {
        if (is_array($gwAllowGiftReceipt)) {
            $useMinMax = false;
            if (isset($gwAllowGiftReceipt['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ALLOW_GIFT_RECEIPT, $gwAllowGiftReceipt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwAllowGiftReceipt['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ALLOW_GIFT_RECEIPT, $gwAllowGiftReceipt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ALLOW_GIFT_RECEIPT, $gwAllowGiftReceipt, $comparison);
    }

    /**
     * Filter the query on the gw_add_card column
     *
     * Example usage:
     * <code>
     * $query->filterByGwAddCard(1234); // WHERE gw_add_card = 1234
     * $query->filterByGwAddCard(array(12, 34)); // WHERE gw_add_card IN (12, 34)
     * $query->filterByGwAddCard(array('min' => 12)); // WHERE gw_add_card >= 12
     * $query->filterByGwAddCard(array('max' => 12)); // WHERE gw_add_card <= 12
     * </code>
     *
     * @param     mixed $gwAddCard The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwAddCard($gwAddCard = null, $comparison = null)
    {
        if (is_array($gwAddCard)) {
            $useMinMax = false;
            if (isset($gwAddCard['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ADD_CARD, $gwAddCard['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwAddCard['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ADD_CARD, $gwAddCard['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ADD_CARD, $gwAddCard, $comparison);
    }

    /**
     * Filter the query on the gw_base_price column
     *
     * Example usage:
     * <code>
     * $query->filterByGwBasePrice(1234); // WHERE gw_base_price = 1234
     * $query->filterByGwBasePrice(array(12, 34)); // WHERE gw_base_price IN (12, 34)
     * $query->filterByGwBasePrice(array('min' => 12)); // WHERE gw_base_price >= 12
     * $query->filterByGwBasePrice(array('max' => 12)); // WHERE gw_base_price <= 12
     * </code>
     *
     * @param     mixed $gwBasePrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwBasePrice($gwBasePrice = null, $comparison = null)
    {
        if (is_array($gwBasePrice)) {
            $useMinMax = false;
            if (isset($gwBasePrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_PRICE, $gwBasePrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBasePrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_PRICE, $gwBasePrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_PRICE, $gwBasePrice, $comparison);
    }

    /**
     * Filter the query on the gw_price column
     *
     * Example usage:
     * <code>
     * $query->filterByGwPrice(1234); // WHERE gw_price = 1234
     * $query->filterByGwPrice(array(12, 34)); // WHERE gw_price IN (12, 34)
     * $query->filterByGwPrice(array('min' => 12)); // WHERE gw_price >= 12
     * $query->filterByGwPrice(array('max' => 12)); // WHERE gw_price <= 12
     * </code>
     *
     * @param     mixed $gwPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwPrice($gwPrice = null, $comparison = null)
    {
        if (is_array($gwPrice)) {
            $useMinMax = false;
            if (isset($gwPrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_PRICE, $gwPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwPrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_PRICE, $gwPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_PRICE, $gwPrice, $comparison);
    }

    /**
     * Filter the query on the gw_items_base_price column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsBasePrice(1234); // WHERE gw_items_base_price = 1234
     * $query->filterByGwItemsBasePrice(array(12, 34)); // WHERE gw_items_base_price IN (12, 34)
     * $query->filterByGwItemsBasePrice(array('min' => 12)); // WHERE gw_items_base_price >= 12
     * $query->filterByGwItemsBasePrice(array('max' => 12)); // WHERE gw_items_base_price <= 12
     * </code>
     *
     * @param     mixed $gwItemsBasePrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsBasePrice($gwItemsBasePrice = null, $comparison = null)
    {
        if (is_array($gwItemsBasePrice)) {
            $useMinMax = false;
            if (isset($gwItemsBasePrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE, $gwItemsBasePrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsBasePrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE, $gwItemsBasePrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE, $gwItemsBasePrice, $comparison);
    }

    /**
     * Filter the query on the gw_items_price column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsPrice(1234); // WHERE gw_items_price = 1234
     * $query->filterByGwItemsPrice(array(12, 34)); // WHERE gw_items_price IN (12, 34)
     * $query->filterByGwItemsPrice(array('min' => 12)); // WHERE gw_items_price >= 12
     * $query->filterByGwItemsPrice(array('max' => 12)); // WHERE gw_items_price <= 12
     * </code>
     *
     * @param     mixed $gwItemsPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsPrice($gwItemsPrice = null, $comparison = null)
    {
        if (is_array($gwItemsPrice)) {
            $useMinMax = false;
            if (isset($gwItemsPrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_PRICE, $gwItemsPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsPrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_PRICE, $gwItemsPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_PRICE, $gwItemsPrice, $comparison);
    }

    /**
     * Filter the query on the gw_card_base_price column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardBasePrice(1234); // WHERE gw_card_base_price = 1234
     * $query->filterByGwCardBasePrice(array(12, 34)); // WHERE gw_card_base_price IN (12, 34)
     * $query->filterByGwCardBasePrice(array('min' => 12)); // WHERE gw_card_base_price >= 12
     * $query->filterByGwCardBasePrice(array('max' => 12)); // WHERE gw_card_base_price <= 12
     * </code>
     *
     * @param     mixed $gwCardBasePrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardBasePrice($gwCardBasePrice = null, $comparison = null)
    {
        if (is_array($gwCardBasePrice)) {
            $useMinMax = false;
            if (isset($gwCardBasePrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_PRICE, $gwCardBasePrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardBasePrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_PRICE, $gwCardBasePrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_PRICE, $gwCardBasePrice, $comparison);
    }

    /**
     * Filter the query on the gw_card_price column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardPrice(1234); // WHERE gw_card_price = 1234
     * $query->filterByGwCardPrice(array(12, 34)); // WHERE gw_card_price IN (12, 34)
     * $query->filterByGwCardPrice(array('min' => 12)); // WHERE gw_card_price >= 12
     * $query->filterByGwCardPrice(array('max' => 12)); // WHERE gw_card_price <= 12
     * </code>
     *
     * @param     mixed $gwCardPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardPrice($gwCardPrice = null, $comparison = null)
    {
        if (is_array($gwCardPrice)) {
            $useMinMax = false;
            if (isset($gwCardPrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_PRICE, $gwCardPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardPrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_PRICE, $gwCardPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_PRICE, $gwCardPrice, $comparison);
    }

    /**
     * Filter the query on the gw_base_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByGwBaseTaxAmount(1234); // WHERE gw_base_tax_amount = 1234
     * $query->filterByGwBaseTaxAmount(array(12, 34)); // WHERE gw_base_tax_amount IN (12, 34)
     * $query->filterByGwBaseTaxAmount(array('min' => 12)); // WHERE gw_base_tax_amount >= 12
     * $query->filterByGwBaseTaxAmount(array('max' => 12)); // WHERE gw_base_tax_amount <= 12
     * </code>
     *
     * @param     mixed $gwBaseTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwBaseTaxAmount($gwBaseTaxAmount = null, $comparison = null)
    {
        if (is_array($gwBaseTaxAmount)) {
            $useMinMax = false;
            if (isset($gwBaseTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT, $gwBaseTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBaseTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT, $gwBaseTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT, $gwBaseTaxAmount, $comparison);
    }

    /**
     * Filter the query on the gw_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByGwTaxAmount(1234); // WHERE gw_tax_amount = 1234
     * $query->filterByGwTaxAmount(array(12, 34)); // WHERE gw_tax_amount IN (12, 34)
     * $query->filterByGwTaxAmount(array('min' => 12)); // WHERE gw_tax_amount >= 12
     * $query->filterByGwTaxAmount(array('max' => 12)); // WHERE gw_tax_amount <= 12
     * </code>
     *
     * @param     mixed $gwTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwTaxAmount($gwTaxAmount = null, $comparison = null)
    {
        if (is_array($gwTaxAmount)) {
            $useMinMax = false;
            if (isset($gwTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_TAX_AMOUNT, $gwTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_TAX_AMOUNT, $gwTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_TAX_AMOUNT, $gwTaxAmount, $comparison);
    }

    /**
     * Filter the query on the gw_items_base_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsBaseTaxAmount(1234); // WHERE gw_items_base_tax_amount = 1234
     * $query->filterByGwItemsBaseTaxAmount(array(12, 34)); // WHERE gw_items_base_tax_amount IN (12, 34)
     * $query->filterByGwItemsBaseTaxAmount(array('min' => 12)); // WHERE gw_items_base_tax_amount >= 12
     * $query->filterByGwItemsBaseTaxAmount(array('max' => 12)); // WHERE gw_items_base_tax_amount <= 12
     * </code>
     *
     * @param     mixed $gwItemsBaseTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsBaseTaxAmount($gwItemsBaseTaxAmount = null, $comparison = null)
    {
        if (is_array($gwItemsBaseTaxAmount)) {
            $useMinMax = false;
            if (isset($gwItemsBaseTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_AMOUNT, $gwItemsBaseTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsBaseTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_AMOUNT, $gwItemsBaseTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_AMOUNT, $gwItemsBaseTaxAmount, $comparison);
    }

    /**
     * Filter the query on the gw_items_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsTaxAmount(1234); // WHERE gw_items_tax_amount = 1234
     * $query->filterByGwItemsTaxAmount(array(12, 34)); // WHERE gw_items_tax_amount IN (12, 34)
     * $query->filterByGwItemsTaxAmount(array('min' => 12)); // WHERE gw_items_tax_amount >= 12
     * $query->filterByGwItemsTaxAmount(array('max' => 12)); // WHERE gw_items_tax_amount <= 12
     * </code>
     *
     * @param     mixed $gwItemsTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsTaxAmount($gwItemsTaxAmount = null, $comparison = null)
    {
        if (is_array($gwItemsTaxAmount)) {
            $useMinMax = false;
            if (isset($gwItemsTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_TAX_AMOUNT, $gwItemsTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_TAX_AMOUNT, $gwItemsTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_TAX_AMOUNT, $gwItemsTaxAmount, $comparison);
    }

    /**
     * Filter the query on the gw_card_base_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardBaseTaxAmount(1234); // WHERE gw_card_base_tax_amount = 1234
     * $query->filterByGwCardBaseTaxAmount(array(12, 34)); // WHERE gw_card_base_tax_amount IN (12, 34)
     * $query->filterByGwCardBaseTaxAmount(array('min' => 12)); // WHERE gw_card_base_tax_amount >= 12
     * $query->filterByGwCardBaseTaxAmount(array('max' => 12)); // WHERE gw_card_base_tax_amount <= 12
     * </code>
     *
     * @param     mixed $gwCardBaseTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardBaseTaxAmount($gwCardBaseTaxAmount = null, $comparison = null)
    {
        if (is_array($gwCardBaseTaxAmount)) {
            $useMinMax = false;
            if (isset($gwCardBaseTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_TAX_AMOUNT, $gwCardBaseTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardBaseTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_TAX_AMOUNT, $gwCardBaseTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_TAX_AMOUNT, $gwCardBaseTaxAmount, $comparison);
    }

    /**
     * Filter the query on the gw_card_tax_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardTaxAmount(1234); // WHERE gw_card_tax_amount = 1234
     * $query->filterByGwCardTaxAmount(array(12, 34)); // WHERE gw_card_tax_amount IN (12, 34)
     * $query->filterByGwCardTaxAmount(array('min' => 12)); // WHERE gw_card_tax_amount >= 12
     * $query->filterByGwCardTaxAmount(array('max' => 12)); // WHERE gw_card_tax_amount <= 12
     * </code>
     *
     * @param     mixed $gwCardTaxAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardTaxAmount($gwCardTaxAmount = null, $comparison = null)
    {
        if (is_array($gwCardTaxAmount)) {
            $useMinMax = false;
            if (isset($gwCardTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_TAX_AMOUNT, $gwCardTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_TAX_AMOUNT, $gwCardTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_TAX_AMOUNT, $gwCardTaxAmount, $comparison);
    }

    /**
     * Filter the query on the gw_base_price_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwBasePriceInvoiced(1234); // WHERE gw_base_price_invoiced = 1234
     * $query->filterByGwBasePriceInvoiced(array(12, 34)); // WHERE gw_base_price_invoiced IN (12, 34)
     * $query->filterByGwBasePriceInvoiced(array('min' => 12)); // WHERE gw_base_price_invoiced >= 12
     * $query->filterByGwBasePriceInvoiced(array('max' => 12)); // WHERE gw_base_price_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwBasePriceInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwBasePriceInvoiced($gwBasePriceInvoiced = null, $comparison = null)
    {
        if (is_array($gwBasePriceInvoiced)) {
            $useMinMax = false;
            if (isset($gwBasePriceInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_PRICE_INVOICED, $gwBasePriceInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBasePriceInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_PRICE_INVOICED, $gwBasePriceInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_PRICE_INVOICED, $gwBasePriceInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_price_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwPriceInvoiced(1234); // WHERE gw_price_invoiced = 1234
     * $query->filterByGwPriceInvoiced(array(12, 34)); // WHERE gw_price_invoiced IN (12, 34)
     * $query->filterByGwPriceInvoiced(array('min' => 12)); // WHERE gw_price_invoiced >= 12
     * $query->filterByGwPriceInvoiced(array('max' => 12)); // WHERE gw_price_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwPriceInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwPriceInvoiced($gwPriceInvoiced = null, $comparison = null)
    {
        if (is_array($gwPriceInvoiced)) {
            $useMinMax = false;
            if (isset($gwPriceInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_PRICE_INVOICED, $gwPriceInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwPriceInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_PRICE_INVOICED, $gwPriceInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_PRICE_INVOICED, $gwPriceInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_items_base_price_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsBasePriceInvoiced(1234); // WHERE gw_items_base_price_invoiced = 1234
     * $query->filterByGwItemsBasePriceInvoiced(array(12, 34)); // WHERE gw_items_base_price_invoiced IN (12, 34)
     * $query->filterByGwItemsBasePriceInvoiced(array('min' => 12)); // WHERE gw_items_base_price_invoiced >= 12
     * $query->filterByGwItemsBasePriceInvoiced(array('max' => 12)); // WHERE gw_items_base_price_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwItemsBasePriceInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsBasePriceInvoiced($gwItemsBasePriceInvoiced = null, $comparison = null)
    {
        if (is_array($gwItemsBasePriceInvoiced)) {
            $useMinMax = false;
            if (isset($gwItemsBasePriceInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_INVOICED, $gwItemsBasePriceInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsBasePriceInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_INVOICED, $gwItemsBasePriceInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_INVOICED, $gwItemsBasePriceInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_items_price_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsPriceInvoiced(1234); // WHERE gw_items_price_invoiced = 1234
     * $query->filterByGwItemsPriceInvoiced(array(12, 34)); // WHERE gw_items_price_invoiced IN (12, 34)
     * $query->filterByGwItemsPriceInvoiced(array('min' => 12)); // WHERE gw_items_price_invoiced >= 12
     * $query->filterByGwItemsPriceInvoiced(array('max' => 12)); // WHERE gw_items_price_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwItemsPriceInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsPriceInvoiced($gwItemsPriceInvoiced = null, $comparison = null)
    {
        if (is_array($gwItemsPriceInvoiced)) {
            $useMinMax = false;
            if (isset($gwItemsPriceInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_PRICE_INVOICED, $gwItemsPriceInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsPriceInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_PRICE_INVOICED, $gwItemsPriceInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_PRICE_INVOICED, $gwItemsPriceInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_card_base_price_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardBasePriceInvoiced(1234); // WHERE gw_card_base_price_invoiced = 1234
     * $query->filterByGwCardBasePriceInvoiced(array(12, 34)); // WHERE gw_card_base_price_invoiced IN (12, 34)
     * $query->filterByGwCardBasePriceInvoiced(array('min' => 12)); // WHERE gw_card_base_price_invoiced >= 12
     * $query->filterByGwCardBasePriceInvoiced(array('max' => 12)); // WHERE gw_card_base_price_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwCardBasePriceInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardBasePriceInvoiced($gwCardBasePriceInvoiced = null, $comparison = null)
    {
        if (is_array($gwCardBasePriceInvoiced)) {
            $useMinMax = false;
            if (isset($gwCardBasePriceInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_INVOICED, $gwCardBasePriceInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardBasePriceInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_INVOICED, $gwCardBasePriceInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_INVOICED, $gwCardBasePriceInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_card_price_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardPriceInvoiced(1234); // WHERE gw_card_price_invoiced = 1234
     * $query->filterByGwCardPriceInvoiced(array(12, 34)); // WHERE gw_card_price_invoiced IN (12, 34)
     * $query->filterByGwCardPriceInvoiced(array('min' => 12)); // WHERE gw_card_price_invoiced >= 12
     * $query->filterByGwCardPriceInvoiced(array('max' => 12)); // WHERE gw_card_price_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwCardPriceInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardPriceInvoiced($gwCardPriceInvoiced = null, $comparison = null)
    {
        if (is_array($gwCardPriceInvoiced)) {
            $useMinMax = false;
            if (isset($gwCardPriceInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_PRICE_INVOICED, $gwCardPriceInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardPriceInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_PRICE_INVOICED, $gwCardPriceInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_PRICE_INVOICED, $gwCardPriceInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_base_tax_amount_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwBaseTaxAmountInvoiced(1234); // WHERE gw_base_tax_amount_invoiced = 1234
     * $query->filterByGwBaseTaxAmountInvoiced(array(12, 34)); // WHERE gw_base_tax_amount_invoiced IN (12, 34)
     * $query->filterByGwBaseTaxAmountInvoiced(array('min' => 12)); // WHERE gw_base_tax_amount_invoiced >= 12
     * $query->filterByGwBaseTaxAmountInvoiced(array('max' => 12)); // WHERE gw_base_tax_amount_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwBaseTaxAmountInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwBaseTaxAmountInvoiced($gwBaseTaxAmountInvoiced = null, $comparison = null)
    {
        if (is_array($gwBaseTaxAmountInvoiced)) {
            $useMinMax = false;
            if (isset($gwBaseTaxAmountInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_INVOICED, $gwBaseTaxAmountInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBaseTaxAmountInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_INVOICED, $gwBaseTaxAmountInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_INVOICED, $gwBaseTaxAmountInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_tax_amount_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwTaxAmountInvoiced(1234); // WHERE gw_tax_amount_invoiced = 1234
     * $query->filterByGwTaxAmountInvoiced(array(12, 34)); // WHERE gw_tax_amount_invoiced IN (12, 34)
     * $query->filterByGwTaxAmountInvoiced(array('min' => 12)); // WHERE gw_tax_amount_invoiced >= 12
     * $query->filterByGwTaxAmountInvoiced(array('max' => 12)); // WHERE gw_tax_amount_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwTaxAmountInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwTaxAmountInvoiced($gwTaxAmountInvoiced = null, $comparison = null)
    {
        if (is_array($gwTaxAmountInvoiced)) {
            $useMinMax = false;
            if (isset($gwTaxAmountInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_TAX_AMOUNT_INVOICED, $gwTaxAmountInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwTaxAmountInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_TAX_AMOUNT_INVOICED, $gwTaxAmountInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_TAX_AMOUNT_INVOICED, $gwTaxAmountInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_items_base_tax_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsBaseTaxInvoiced(1234); // WHERE gw_items_base_tax_invoiced = 1234
     * $query->filterByGwItemsBaseTaxInvoiced(array(12, 34)); // WHERE gw_items_base_tax_invoiced IN (12, 34)
     * $query->filterByGwItemsBaseTaxInvoiced(array('min' => 12)); // WHERE gw_items_base_tax_invoiced >= 12
     * $query->filterByGwItemsBaseTaxInvoiced(array('max' => 12)); // WHERE gw_items_base_tax_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwItemsBaseTaxInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsBaseTaxInvoiced($gwItemsBaseTaxInvoiced = null, $comparison = null)
    {
        if (is_array($gwItemsBaseTaxInvoiced)) {
            $useMinMax = false;
            if (isset($gwItemsBaseTaxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_INVOICED, $gwItemsBaseTaxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsBaseTaxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_INVOICED, $gwItemsBaseTaxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_INVOICED, $gwItemsBaseTaxInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_items_tax_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsTaxInvoiced(1234); // WHERE gw_items_tax_invoiced = 1234
     * $query->filterByGwItemsTaxInvoiced(array(12, 34)); // WHERE gw_items_tax_invoiced IN (12, 34)
     * $query->filterByGwItemsTaxInvoiced(array('min' => 12)); // WHERE gw_items_tax_invoiced >= 12
     * $query->filterByGwItemsTaxInvoiced(array('max' => 12)); // WHERE gw_items_tax_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwItemsTaxInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsTaxInvoiced($gwItemsTaxInvoiced = null, $comparison = null)
    {
        if (is_array($gwItemsTaxInvoiced)) {
            $useMinMax = false;
            if (isset($gwItemsTaxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_TAX_INVOICED, $gwItemsTaxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsTaxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_TAX_INVOICED, $gwItemsTaxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_TAX_INVOICED, $gwItemsTaxInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_card_base_tax_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardBaseTaxInvoiced(1234); // WHERE gw_card_base_tax_invoiced = 1234
     * $query->filterByGwCardBaseTaxInvoiced(array(12, 34)); // WHERE gw_card_base_tax_invoiced IN (12, 34)
     * $query->filterByGwCardBaseTaxInvoiced(array('min' => 12)); // WHERE gw_card_base_tax_invoiced >= 12
     * $query->filterByGwCardBaseTaxInvoiced(array('max' => 12)); // WHERE gw_card_base_tax_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwCardBaseTaxInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardBaseTaxInvoiced($gwCardBaseTaxInvoiced = null, $comparison = null)
    {
        if (is_array($gwCardBaseTaxInvoiced)) {
            $useMinMax = false;
            if (isset($gwCardBaseTaxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_TAX_INVOICED, $gwCardBaseTaxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardBaseTaxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_TAX_INVOICED, $gwCardBaseTaxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_TAX_INVOICED, $gwCardBaseTaxInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_card_tax_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardTaxInvoiced(1234); // WHERE gw_card_tax_invoiced = 1234
     * $query->filterByGwCardTaxInvoiced(array(12, 34)); // WHERE gw_card_tax_invoiced IN (12, 34)
     * $query->filterByGwCardTaxInvoiced(array('min' => 12)); // WHERE gw_card_tax_invoiced >= 12
     * $query->filterByGwCardTaxInvoiced(array('max' => 12)); // WHERE gw_card_tax_invoiced <= 12
     * </code>
     *
     * @param     mixed $gwCardTaxInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardTaxInvoiced($gwCardTaxInvoiced = null, $comparison = null)
    {
        if (is_array($gwCardTaxInvoiced)) {
            $useMinMax = false;
            if (isset($gwCardTaxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_TAX_INVOICED, $gwCardTaxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardTaxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_TAX_INVOICED, $gwCardTaxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_TAX_INVOICED, $gwCardTaxInvoiced, $comparison);
    }

    /**
     * Filter the query on the gw_base_price_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwBasePriceRefunded(1234); // WHERE gw_base_price_refunded = 1234
     * $query->filterByGwBasePriceRefunded(array(12, 34)); // WHERE gw_base_price_refunded IN (12, 34)
     * $query->filterByGwBasePriceRefunded(array('min' => 12)); // WHERE gw_base_price_refunded >= 12
     * $query->filterByGwBasePriceRefunded(array('max' => 12)); // WHERE gw_base_price_refunded <= 12
     * </code>
     *
     * @param     mixed $gwBasePriceRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwBasePriceRefunded($gwBasePriceRefunded = null, $comparison = null)
    {
        if (is_array($gwBasePriceRefunded)) {
            $useMinMax = false;
            if (isset($gwBasePriceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_PRICE_REFUNDED, $gwBasePriceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBasePriceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_PRICE_REFUNDED, $gwBasePriceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_PRICE_REFUNDED, $gwBasePriceRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_price_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwPriceRefunded(1234); // WHERE gw_price_refunded = 1234
     * $query->filterByGwPriceRefunded(array(12, 34)); // WHERE gw_price_refunded IN (12, 34)
     * $query->filterByGwPriceRefunded(array('min' => 12)); // WHERE gw_price_refunded >= 12
     * $query->filterByGwPriceRefunded(array('max' => 12)); // WHERE gw_price_refunded <= 12
     * </code>
     *
     * @param     mixed $gwPriceRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwPriceRefunded($gwPriceRefunded = null, $comparison = null)
    {
        if (is_array($gwPriceRefunded)) {
            $useMinMax = false;
            if (isset($gwPriceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_PRICE_REFUNDED, $gwPriceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwPriceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_PRICE_REFUNDED, $gwPriceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_PRICE_REFUNDED, $gwPriceRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_items_base_price_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsBasePriceRefunded(1234); // WHERE gw_items_base_price_refunded = 1234
     * $query->filterByGwItemsBasePriceRefunded(array(12, 34)); // WHERE gw_items_base_price_refunded IN (12, 34)
     * $query->filterByGwItemsBasePriceRefunded(array('min' => 12)); // WHERE gw_items_base_price_refunded >= 12
     * $query->filterByGwItemsBasePriceRefunded(array('max' => 12)); // WHERE gw_items_base_price_refunded <= 12
     * </code>
     *
     * @param     mixed $gwItemsBasePriceRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsBasePriceRefunded($gwItemsBasePriceRefunded = null, $comparison = null)
    {
        if (is_array($gwItemsBasePriceRefunded)) {
            $useMinMax = false;
            if (isset($gwItemsBasePriceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_REFUNDED, $gwItemsBasePriceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsBasePriceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_REFUNDED, $gwItemsBasePriceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_PRICE_REFUNDED, $gwItemsBasePriceRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_items_price_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsPriceRefunded(1234); // WHERE gw_items_price_refunded = 1234
     * $query->filterByGwItemsPriceRefunded(array(12, 34)); // WHERE gw_items_price_refunded IN (12, 34)
     * $query->filterByGwItemsPriceRefunded(array('min' => 12)); // WHERE gw_items_price_refunded >= 12
     * $query->filterByGwItemsPriceRefunded(array('max' => 12)); // WHERE gw_items_price_refunded <= 12
     * </code>
     *
     * @param     mixed $gwItemsPriceRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsPriceRefunded($gwItemsPriceRefunded = null, $comparison = null)
    {
        if (is_array($gwItemsPriceRefunded)) {
            $useMinMax = false;
            if (isset($gwItemsPriceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_PRICE_REFUNDED, $gwItemsPriceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsPriceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_PRICE_REFUNDED, $gwItemsPriceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_PRICE_REFUNDED, $gwItemsPriceRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_card_base_price_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardBasePriceRefunded(1234); // WHERE gw_card_base_price_refunded = 1234
     * $query->filterByGwCardBasePriceRefunded(array(12, 34)); // WHERE gw_card_base_price_refunded IN (12, 34)
     * $query->filterByGwCardBasePriceRefunded(array('min' => 12)); // WHERE gw_card_base_price_refunded >= 12
     * $query->filterByGwCardBasePriceRefunded(array('max' => 12)); // WHERE gw_card_base_price_refunded <= 12
     * </code>
     *
     * @param     mixed $gwCardBasePriceRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardBasePriceRefunded($gwCardBasePriceRefunded = null, $comparison = null)
    {
        if (is_array($gwCardBasePriceRefunded)) {
            $useMinMax = false;
            if (isset($gwCardBasePriceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_REFUNDED, $gwCardBasePriceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardBasePriceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_REFUNDED, $gwCardBasePriceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_PRICE_REFUNDED, $gwCardBasePriceRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_card_price_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardPriceRefunded(1234); // WHERE gw_card_price_refunded = 1234
     * $query->filterByGwCardPriceRefunded(array(12, 34)); // WHERE gw_card_price_refunded IN (12, 34)
     * $query->filterByGwCardPriceRefunded(array('min' => 12)); // WHERE gw_card_price_refunded >= 12
     * $query->filterByGwCardPriceRefunded(array('max' => 12)); // WHERE gw_card_price_refunded <= 12
     * </code>
     *
     * @param     mixed $gwCardPriceRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardPriceRefunded($gwCardPriceRefunded = null, $comparison = null)
    {
        if (is_array($gwCardPriceRefunded)) {
            $useMinMax = false;
            if (isset($gwCardPriceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_PRICE_REFUNDED, $gwCardPriceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardPriceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_PRICE_REFUNDED, $gwCardPriceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_PRICE_REFUNDED, $gwCardPriceRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_base_tax_amount_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwBaseTaxAmountRefunded(1234); // WHERE gw_base_tax_amount_refunded = 1234
     * $query->filterByGwBaseTaxAmountRefunded(array(12, 34)); // WHERE gw_base_tax_amount_refunded IN (12, 34)
     * $query->filterByGwBaseTaxAmountRefunded(array('min' => 12)); // WHERE gw_base_tax_amount_refunded >= 12
     * $query->filterByGwBaseTaxAmountRefunded(array('max' => 12)); // WHERE gw_base_tax_amount_refunded <= 12
     * </code>
     *
     * @param     mixed $gwBaseTaxAmountRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwBaseTaxAmountRefunded($gwBaseTaxAmountRefunded = null, $comparison = null)
    {
        if (is_array($gwBaseTaxAmountRefunded)) {
            $useMinMax = false;
            if (isset($gwBaseTaxAmountRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_REFUNDED, $gwBaseTaxAmountRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBaseTaxAmountRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_REFUNDED, $gwBaseTaxAmountRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_BASE_TAX_AMOUNT_REFUNDED, $gwBaseTaxAmountRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_tax_amount_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwTaxAmountRefunded(1234); // WHERE gw_tax_amount_refunded = 1234
     * $query->filterByGwTaxAmountRefunded(array(12, 34)); // WHERE gw_tax_amount_refunded IN (12, 34)
     * $query->filterByGwTaxAmountRefunded(array('min' => 12)); // WHERE gw_tax_amount_refunded >= 12
     * $query->filterByGwTaxAmountRefunded(array('max' => 12)); // WHERE gw_tax_amount_refunded <= 12
     * </code>
     *
     * @param     mixed $gwTaxAmountRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwTaxAmountRefunded($gwTaxAmountRefunded = null, $comparison = null)
    {
        if (is_array($gwTaxAmountRefunded)) {
            $useMinMax = false;
            if (isset($gwTaxAmountRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_TAX_AMOUNT_REFUNDED, $gwTaxAmountRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwTaxAmountRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_TAX_AMOUNT_REFUNDED, $gwTaxAmountRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_TAX_AMOUNT_REFUNDED, $gwTaxAmountRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_items_base_tax_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsBaseTaxRefunded(1234); // WHERE gw_items_base_tax_refunded = 1234
     * $query->filterByGwItemsBaseTaxRefunded(array(12, 34)); // WHERE gw_items_base_tax_refunded IN (12, 34)
     * $query->filterByGwItemsBaseTaxRefunded(array('min' => 12)); // WHERE gw_items_base_tax_refunded >= 12
     * $query->filterByGwItemsBaseTaxRefunded(array('max' => 12)); // WHERE gw_items_base_tax_refunded <= 12
     * </code>
     *
     * @param     mixed $gwItemsBaseTaxRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsBaseTaxRefunded($gwItemsBaseTaxRefunded = null, $comparison = null)
    {
        if (is_array($gwItemsBaseTaxRefunded)) {
            $useMinMax = false;
            if (isset($gwItemsBaseTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_REFUNDED, $gwItemsBaseTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsBaseTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_REFUNDED, $gwItemsBaseTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_BASE_TAX_REFUNDED, $gwItemsBaseTaxRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_items_tax_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwItemsTaxRefunded(1234); // WHERE gw_items_tax_refunded = 1234
     * $query->filterByGwItemsTaxRefunded(array(12, 34)); // WHERE gw_items_tax_refunded IN (12, 34)
     * $query->filterByGwItemsTaxRefunded(array('min' => 12)); // WHERE gw_items_tax_refunded >= 12
     * $query->filterByGwItemsTaxRefunded(array('max' => 12)); // WHERE gw_items_tax_refunded <= 12
     * </code>
     *
     * @param     mixed $gwItemsTaxRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwItemsTaxRefunded($gwItemsTaxRefunded = null, $comparison = null)
    {
        if (is_array($gwItemsTaxRefunded)) {
            $useMinMax = false;
            if (isset($gwItemsTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_TAX_REFUNDED, $gwItemsTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwItemsTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_TAX_REFUNDED, $gwItemsTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_ITEMS_TAX_REFUNDED, $gwItemsTaxRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_card_base_tax_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardBaseTaxRefunded(1234); // WHERE gw_card_base_tax_refunded = 1234
     * $query->filterByGwCardBaseTaxRefunded(array(12, 34)); // WHERE gw_card_base_tax_refunded IN (12, 34)
     * $query->filterByGwCardBaseTaxRefunded(array('min' => 12)); // WHERE gw_card_base_tax_refunded >= 12
     * $query->filterByGwCardBaseTaxRefunded(array('max' => 12)); // WHERE gw_card_base_tax_refunded <= 12
     * </code>
     *
     * @param     mixed $gwCardBaseTaxRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardBaseTaxRefunded($gwCardBaseTaxRefunded = null, $comparison = null)
    {
        if (is_array($gwCardBaseTaxRefunded)) {
            $useMinMax = false;
            if (isset($gwCardBaseTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_TAX_REFUNDED, $gwCardBaseTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardBaseTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_TAX_REFUNDED, $gwCardBaseTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_BASE_TAX_REFUNDED, $gwCardBaseTaxRefunded, $comparison);
    }

    /**
     * Filter the query on the gw_card_tax_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByGwCardTaxRefunded(1234); // WHERE gw_card_tax_refunded = 1234
     * $query->filterByGwCardTaxRefunded(array(12, 34)); // WHERE gw_card_tax_refunded IN (12, 34)
     * $query->filterByGwCardTaxRefunded(array('min' => 12)); // WHERE gw_card_tax_refunded >= 12
     * $query->filterByGwCardTaxRefunded(array('max' => 12)); // WHERE gw_card_tax_refunded <= 12
     * </code>
     *
     * @param     mixed $gwCardTaxRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGwCardTaxRefunded($gwCardTaxRefunded = null, $comparison = null)
    {
        if (is_array($gwCardTaxRefunded)) {
            $useMinMax = false;
            if (isset($gwCardTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_TAX_REFUNDED, $gwCardTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwCardTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_TAX_REFUNDED, $gwCardTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GW_CARD_TAX_REFUNDED, $gwCardTaxRefunded, $comparison);
    }

    /**
     * Filter the query on the reward_points_balance column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardPointsBalance(1234); // WHERE reward_points_balance = 1234
     * $query->filterByRewardPointsBalance(array(12, 34)); // WHERE reward_points_balance IN (12, 34)
     * $query->filterByRewardPointsBalance(array('min' => 12)); // WHERE reward_points_balance >= 12
     * $query->filterByRewardPointsBalance(array('max' => 12)); // WHERE reward_points_balance <= 12
     * </code>
     *
     * @param     mixed $rewardPointsBalance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRewardPointsBalance($rewardPointsBalance = null, $comparison = null)
    {
        if (is_array($rewardPointsBalance)) {
            $useMinMax = false;
            if (isset($rewardPointsBalance['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARD_POINTS_BALANCE, $rewardPointsBalance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rewardPointsBalance['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARD_POINTS_BALANCE, $rewardPointsBalance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::REWARD_POINTS_BALANCE, $rewardPointsBalance, $comparison);
    }

    /**
     * Filter the query on the base_reward_currency_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseRewardCurrencyAmount(1234); // WHERE base_reward_currency_amount = 1234
     * $query->filterByBaseRewardCurrencyAmount(array(12, 34)); // WHERE base_reward_currency_amount IN (12, 34)
     * $query->filterByBaseRewardCurrencyAmount(array('min' => 12)); // WHERE base_reward_currency_amount >= 12
     * $query->filterByBaseRewardCurrencyAmount(array('max' => 12)); // WHERE base_reward_currency_amount <= 12
     * </code>
     *
     * @param     mixed $baseRewardCurrencyAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseRewardCurrencyAmount($baseRewardCurrencyAmount = null, $comparison = null)
    {
        if (is_array($baseRewardCurrencyAmount)) {
            $useMinMax = false;
            if (isset($baseRewardCurrencyAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_REWARD_CURRENCY_AMOUNT, $baseRewardCurrencyAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseRewardCurrencyAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_REWARD_CURRENCY_AMOUNT, $baseRewardCurrencyAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_REWARD_CURRENCY_AMOUNT, $baseRewardCurrencyAmount, $comparison);
    }

    /**
     * Filter the query on the reward_currency_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardCurrencyAmount(1234); // WHERE reward_currency_amount = 1234
     * $query->filterByRewardCurrencyAmount(array(12, 34)); // WHERE reward_currency_amount IN (12, 34)
     * $query->filterByRewardCurrencyAmount(array('min' => 12)); // WHERE reward_currency_amount >= 12
     * $query->filterByRewardCurrencyAmount(array('max' => 12)); // WHERE reward_currency_amount <= 12
     * </code>
     *
     * @param     mixed $rewardCurrencyAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRewardCurrencyAmount($rewardCurrencyAmount = null, $comparison = null)
    {
        if (is_array($rewardCurrencyAmount)) {
            $useMinMax = false;
            if (isset($rewardCurrencyAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARD_CURRENCY_AMOUNT, $rewardCurrencyAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rewardCurrencyAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARD_CURRENCY_AMOUNT, $rewardCurrencyAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::REWARD_CURRENCY_AMOUNT, $rewardCurrencyAmount, $comparison);
    }

    /**
     * Filter the query on the base_rwrd_crrncy_amt_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseRwrdCrrncyAmtInvoiced(1234); // WHERE base_rwrd_crrncy_amt_invoiced = 1234
     * $query->filterByBaseRwrdCrrncyAmtInvoiced(array(12, 34)); // WHERE base_rwrd_crrncy_amt_invoiced IN (12, 34)
     * $query->filterByBaseRwrdCrrncyAmtInvoiced(array('min' => 12)); // WHERE base_rwrd_crrncy_amt_invoiced >= 12
     * $query->filterByBaseRwrdCrrncyAmtInvoiced(array('max' => 12)); // WHERE base_rwrd_crrncy_amt_invoiced <= 12
     * </code>
     *
     * @param     mixed $baseRwrdCrrncyAmtInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseRwrdCrrncyAmtInvoiced($baseRwrdCrrncyAmtInvoiced = null, $comparison = null)
    {
        if (is_array($baseRwrdCrrncyAmtInvoiced)) {
            $useMinMax = false;
            if (isset($baseRwrdCrrncyAmtInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMT_INVOICED, $baseRwrdCrrncyAmtInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseRwrdCrrncyAmtInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMT_INVOICED, $baseRwrdCrrncyAmtInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMT_INVOICED, $baseRwrdCrrncyAmtInvoiced, $comparison);
    }

    /**
     * Filter the query on the rwrd_currency_amount_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByRwrdCurrencyAmountInvoiced(1234); // WHERE rwrd_currency_amount_invoiced = 1234
     * $query->filterByRwrdCurrencyAmountInvoiced(array(12, 34)); // WHERE rwrd_currency_amount_invoiced IN (12, 34)
     * $query->filterByRwrdCurrencyAmountInvoiced(array('min' => 12)); // WHERE rwrd_currency_amount_invoiced >= 12
     * $query->filterByRwrdCurrencyAmountInvoiced(array('max' => 12)); // WHERE rwrd_currency_amount_invoiced <= 12
     * </code>
     *
     * @param     mixed $rwrdCurrencyAmountInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRwrdCurrencyAmountInvoiced($rwrdCurrencyAmountInvoiced = null, $comparison = null)
    {
        if (is_array($rwrdCurrencyAmountInvoiced)) {
            $useMinMax = false;
            if (isset($rwrdCurrencyAmountInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::RWRD_CURRENCY_AMOUNT_INVOICED, $rwrdCurrencyAmountInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rwrdCurrencyAmountInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::RWRD_CURRENCY_AMOUNT_INVOICED, $rwrdCurrencyAmountInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::RWRD_CURRENCY_AMOUNT_INVOICED, $rwrdCurrencyAmountInvoiced, $comparison);
    }

    /**
     * Filter the query on the base_rwrd_crrncy_amnt_refnded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseRwrdCrrncyAmntRefnded(1234); // WHERE base_rwrd_crrncy_amnt_refnded = 1234
     * $query->filterByBaseRwrdCrrncyAmntRefnded(array(12, 34)); // WHERE base_rwrd_crrncy_amnt_refnded IN (12, 34)
     * $query->filterByBaseRwrdCrrncyAmntRefnded(array('min' => 12)); // WHERE base_rwrd_crrncy_amnt_refnded >= 12
     * $query->filterByBaseRwrdCrrncyAmntRefnded(array('max' => 12)); // WHERE base_rwrd_crrncy_amnt_refnded <= 12
     * </code>
     *
     * @param     mixed $baseRwrdCrrncyAmntRefnded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByBaseRwrdCrrncyAmntRefnded($baseRwrdCrrncyAmntRefnded = null, $comparison = null)
    {
        if (is_array($baseRwrdCrrncyAmntRefnded)) {
            $useMinMax = false;
            if (isset($baseRwrdCrrncyAmntRefnded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMNT_REFNDED, $baseRwrdCrrncyAmntRefnded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseRwrdCrrncyAmntRefnded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMNT_REFNDED, $baseRwrdCrrncyAmntRefnded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::BASE_RWRD_CRRNCY_AMNT_REFNDED, $baseRwrdCrrncyAmntRefnded, $comparison);
    }

    /**
     * Filter the query on the rwrd_crrncy_amnt_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByRwrdCrrncyAmntRefunded(1234); // WHERE rwrd_crrncy_amnt_refunded = 1234
     * $query->filterByRwrdCrrncyAmntRefunded(array(12, 34)); // WHERE rwrd_crrncy_amnt_refunded IN (12, 34)
     * $query->filterByRwrdCrrncyAmntRefunded(array('min' => 12)); // WHERE rwrd_crrncy_amnt_refunded >= 12
     * $query->filterByRwrdCrrncyAmntRefunded(array('max' => 12)); // WHERE rwrd_crrncy_amnt_refunded <= 12
     * </code>
     *
     * @param     mixed $rwrdCrrncyAmntRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRwrdCrrncyAmntRefunded($rwrdCrrncyAmntRefunded = null, $comparison = null)
    {
        if (is_array($rwrdCrrncyAmntRefunded)) {
            $useMinMax = false;
            if (isset($rwrdCrrncyAmntRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::RWRD_CRRNCY_AMNT_REFUNDED, $rwrdCrrncyAmntRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rwrdCrrncyAmntRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::RWRD_CRRNCY_AMNT_REFUNDED, $rwrdCrrncyAmntRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::RWRD_CRRNCY_AMNT_REFUNDED, $rwrdCrrncyAmntRefunded, $comparison);
    }

    /**
     * Filter the query on the reward_points_balance_refund column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardPointsBalanceRefund(1234); // WHERE reward_points_balance_refund = 1234
     * $query->filterByRewardPointsBalanceRefund(array(12, 34)); // WHERE reward_points_balance_refund IN (12, 34)
     * $query->filterByRewardPointsBalanceRefund(array('min' => 12)); // WHERE reward_points_balance_refund >= 12
     * $query->filterByRewardPointsBalanceRefund(array('max' => 12)); // WHERE reward_points_balance_refund <= 12
     * </code>
     *
     * @param     mixed $rewardPointsBalanceRefund The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRewardPointsBalanceRefund($rewardPointsBalanceRefund = null, $comparison = null)
    {
        if (is_array($rewardPointsBalanceRefund)) {
            $useMinMax = false;
            if (isset($rewardPointsBalanceRefund['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUND, $rewardPointsBalanceRefund['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rewardPointsBalanceRefund['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUND, $rewardPointsBalanceRefund['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUND, $rewardPointsBalanceRefund, $comparison);
    }

    /**
     * Filter the query on the reward_points_balance_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardPointsBalanceRefunded(1234); // WHERE reward_points_balance_refunded = 1234
     * $query->filterByRewardPointsBalanceRefunded(array(12, 34)); // WHERE reward_points_balance_refunded IN (12, 34)
     * $query->filterByRewardPointsBalanceRefunded(array('min' => 12)); // WHERE reward_points_balance_refunded >= 12
     * $query->filterByRewardPointsBalanceRefunded(array('max' => 12)); // WHERE reward_points_balance_refunded <= 12
     * </code>
     *
     * @param     mixed $rewardPointsBalanceRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRewardPointsBalanceRefunded($rewardPointsBalanceRefunded = null, $comparison = null)
    {
        if (is_array($rewardPointsBalanceRefunded)) {
            $useMinMax = false;
            if (isset($rewardPointsBalanceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUNDED, $rewardPointsBalanceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rewardPointsBalanceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUNDED, $rewardPointsBalanceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::REWARD_POINTS_BALANCE_REFUNDED, $rewardPointsBalanceRefunded, $comparison);
    }

    /**
     * Filter the query on the reward_salesrule_points column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardSalesrulePoints(1234); // WHERE reward_salesrule_points = 1234
     * $query->filterByRewardSalesrulePoints(array(12, 34)); // WHERE reward_salesrule_points IN (12, 34)
     * $query->filterByRewardSalesrulePoints(array('min' => 12)); // WHERE reward_salesrule_points >= 12
     * $query->filterByRewardSalesrulePoints(array('max' => 12)); // WHERE reward_salesrule_points <= 12
     * </code>
     *
     * @param     mixed $rewardSalesrulePoints The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRewardSalesrulePoints($rewardSalesrulePoints = null, $comparison = null)
    {
        if (is_array($rewardSalesrulePoints)) {
            $useMinMax = false;
            if (isset($rewardSalesrulePoints['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARD_SALESRULE_POINTS, $rewardSalesrulePoints['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rewardSalesrulePoints['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARD_SALESRULE_POINTS, $rewardSalesrulePoints['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::REWARD_SALESRULE_POINTS, $rewardSalesrulePoints, $comparison);
    }

    /**
     * Filter the query on the vendor_username column
     *
     * Example usage:
     * <code>
     * $query->filterByVendorUsername('fooValue');   // WHERE vendor_username = 'fooValue'
     * $query->filterByVendorUsername('%fooValue%'); // WHERE vendor_username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vendorUsername The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByVendorUsername($vendorUsername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vendorUsername)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vendorUsername)) {
                $vendorUsername = str_replace('*', '%', $vendorUsername);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::VENDOR_USERNAME, $vendorUsername, $comparison);
    }

    /**
     * Filter the query on the vendor_name column
     *
     * Example usage:
     * <code>
     * $query->filterByVendorName('fooValue');   // WHERE vendor_name = 'fooValue'
     * $query->filterByVendorName('%fooValue%'); // WHERE vendor_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vendorName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByVendorName($vendorName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vendorName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vendorName)) {
                $vendorName = str_replace('*', '%', $vendorName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::VENDOR_NAME, $vendorName, $comparison);
    }

    /**
     * Filter the query on the vendor_lastname column
     *
     * Example usage:
     * <code>
     * $query->filterByVendorLastname('fooValue');   // WHERE vendor_lastname = 'fooValue'
     * $query->filterByVendorLastname('%fooValue%'); // WHERE vendor_lastname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vendorLastname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByVendorLastname($vendorLastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vendorLastname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vendorLastname)) {
                $vendorLastname = str_replace('*', '%', $vendorLastname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::VENDOR_LASTNAME, $vendorLastname, $comparison);
    }

    /**
     * Filter the query on the vendor_email column
     *
     * Example usage:
     * <code>
     * $query->filterByVendorEmail('fooValue');   // WHERE vendor_email = 'fooValue'
     * $query->filterByVendorEmail('%fooValue%'); // WHERE vendor_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vendorEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByVendorEmail($vendorEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vendorEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vendorEmail)) {
                $vendorEmail = str_replace('*', '%', $vendorEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::VENDOR_EMAIL, $vendorEmail, $comparison);
    }

    /**
     * Filter the query on the pos_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPosId('fooValue');   // WHERE pos_id = 'fooValue'
     * $query->filterByPosId('%fooValue%'); // WHERE pos_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPosId($posId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posId)) {
                $posId = str_replace('*', '%', $posId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::POS_ID, $posId, $comparison);
    }

    /**
     * Filter the query on the pos_office column
     *
     * Example usage:
     * <code>
     * $query->filterByPosOffice('fooValue');   // WHERE pos_office = 'fooValue'
     * $query->filterByPosOffice('%fooValue%'); // WHERE pos_office LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posOffice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPosOffice($posOffice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posOffice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posOffice)) {
                $posOffice = str_replace('*', '%', $posOffice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::POS_OFFICE, $posOffice, $comparison);
    }

    /**
     * Filter the query on the pos_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPosCode('fooValue');   // WHERE pos_code = 'fooValue'
     * $query->filterByPosCode('%fooValue%'); // WHERE pos_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPosCode($posCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posCode)) {
                $posCode = str_replace('*', '%', $posCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::POS_CODE, $posCode, $comparison);
    }

    /**
     * Filter the query on the pos_country column
     *
     * Example usage:
     * <code>
     * $query->filterByPosCountry('fooValue');   // WHERE pos_country = 'fooValue'
     * $query->filterByPosCountry('%fooValue%'); // WHERE pos_country LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posCountry The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPosCountry($posCountry = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posCountry)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posCountry)) {
                $posCountry = str_replace('*', '%', $posCountry);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::POS_COUNTRY, $posCountry, $comparison);
    }

    /**
     * Filter the query on the pos_city column
     *
     * Example usage:
     * <code>
     * $query->filterByPosCity('fooValue');   // WHERE pos_city = 'fooValue'
     * $query->filterByPosCity('%fooValue%'); // WHERE pos_city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posCity The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPosCity($posCity = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posCity)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posCity)) {
                $posCity = str_replace('*', '%', $posCity);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::POS_CITY, $posCity, $comparison);
    }

    /**
     * Filter the query on the pos_postal_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPosPostalCode('fooValue');   // WHERE pos_postal_code = 'fooValue'
     * $query->filterByPosPostalCode('%fooValue%'); // WHERE pos_postal_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posPostalCode The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPosPostalCode($posPostalCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posPostalCode)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posPostalCode)) {
                $posPostalCode = str_replace('*', '%', $posPostalCode);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::POS_POSTAL_CODE, $posPostalCode, $comparison);
    }

    /**
     * Filter the query on the pos_address column
     *
     * Example usage:
     * <code>
     * $query->filterByPosAddress('fooValue');   // WHERE pos_address = 'fooValue'
     * $query->filterByPosAddress('%fooValue%'); // WHERE pos_address LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posAddress The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPosAddress($posAddress = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posAddress)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posAddress)) {
                $posAddress = str_replace('*', '%', $posAddress);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::POS_ADDRESS, $posAddress, $comparison);
    }

    /**
     * Filter the query on the pos_phone column
     *
     * Example usage:
     * <code>
     * $query->filterByPosPhone('fooValue');   // WHERE pos_phone = 'fooValue'
     * $query->filterByPosPhone('%fooValue%'); // WHERE pos_phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $posPhone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByPosPhone($posPhone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($posPhone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $posPhone)) {
                $posPhone = str_replace('*', '%', $posPhone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::POS_PHONE, $posPhone, $comparison);
    }

    /**
     * Filter the query on the customer_identification column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerIdentification('fooValue');   // WHERE customer_identification = 'fooValue'
     * $query->filterByCustomerIdentification('%fooValue%'); // WHERE customer_identification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $customerIdentification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByCustomerIdentification($customerIdentification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($customerIdentification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $customerIdentification)) {
                $customerIdentification = str_replace('*', '%', $customerIdentification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_IDENTIFICATION, $customerIdentification, $comparison);
    }

    /**
     * Filter the query on the is_gift column
     *
     * Example usage:
     * <code>
     * $query->filterByIsGift(1234); // WHERE is_gift = 1234
     * $query->filterByIsGift(array(12, 34)); // WHERE is_gift IN (12, 34)
     * $query->filterByIsGift(array('min' => 12)); // WHERE is_gift >= 12
     * $query->filterByIsGift(array('max' => 12)); // WHERE is_gift <= 12
     * </code>
     *
     * @param     mixed $isGift The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByIsGift($isGift = null, $comparison = null)
    {
        if (is_array($isGift)) {
            $useMinMax = false;
            if (isset($isGift['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::IS_GIFT, $isGift['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isGift['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::IS_GIFT, $isGift['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::IS_GIFT, $isGift, $comparison);
    }

    /**
     * Filter the query on the gift_for column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftFor('fooValue');   // WHERE gift_for = 'fooValue'
     * $query->filterByGiftFor('%fooValue%'); // WHERE gift_for LIKE '%fooValue%'
     * </code>
     *
     * @param     string $giftFor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftFor($giftFor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($giftFor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $giftFor)) {
                $giftFor = str_replace('*', '%', $giftFor);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_FOR, $giftFor, $comparison);
    }

    /**
     * Filter the query on the gift_email column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftEmail('fooValue');   // WHERE gift_email = 'fooValue'
     * $query->filterByGiftEmail('%fooValue%'); // WHERE gift_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $giftEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftEmail($giftEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($giftEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $giftEmail)) {
                $giftEmail = str_replace('*', '%', $giftEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_EMAIL, $giftEmail, $comparison);
    }

    /**
     * Filter the query on the gift_message column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftMessage('fooValue');   // WHERE gift_message = 'fooValue'
     * $query->filterByGiftMessage('%fooValue%'); // WHERE gift_message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $giftMessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftMessage($giftMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($giftMessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $giftMessage)) {
                $giftMessage = str_replace('*', '%', $giftMessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_MESSAGE, $giftMessage, $comparison);
    }

    /**
     * Filter the query on the gift_citydept column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftCitydept('fooValue');   // WHERE gift_citydept = 'fooValue'
     * $query->filterByGiftCitydept('%fooValue%'); // WHERE gift_citydept LIKE '%fooValue%'
     * </code>
     *
     * @param     string $giftCitydept The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftCitydept($giftCitydept = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($giftCitydept)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $giftCitydept)) {
                $giftCitydept = str_replace('*', '%', $giftCitydept);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_CITYDEPT, $giftCitydept, $comparison);
    }

    /**
     * Filter the query on the gift_shipping column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftShipping('fooValue');   // WHERE gift_shipping = 'fooValue'
     * $query->filterByGiftShipping('%fooValue%'); // WHERE gift_shipping LIKE '%fooValue%'
     * </code>
     *
     * @param     string $giftShipping The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftShipping($giftShipping = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($giftShipping)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $giftShipping)) {
                $giftShipping = str_replace('*', '%', $giftShipping);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_SHIPPING, $giftShipping, $comparison);
    }

    /**
     * Filter the query on the was_payed column
     *
     * Example usage:
     * <code>
     * $query->filterByWasPayed(1234); // WHERE was_payed = 1234
     * $query->filterByWasPayed(array(12, 34)); // WHERE was_payed IN (12, 34)
     * $query->filterByWasPayed(array('min' => 12)); // WHERE was_payed >= 12
     * $query->filterByWasPayed(array('max' => 12)); // WHERE was_payed <= 12
     * </code>
     *
     * @param     mixed $wasPayed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByWasPayed($wasPayed = null, $comparison = null)
    {
        if (is_array($wasPayed)) {
            $useMinMax = false;
            if (isset($wasPayed['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::WAS_PAYED, $wasPayed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($wasPayed['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::WAS_PAYED, $wasPayed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::WAS_PAYED, $wasPayed, $comparison);
    }

    /**
     * Filter the query on the gift_for_lastname column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftForLastname('fooValue');   // WHERE gift_for_lastname = 'fooValue'
     * $query->filterByGiftForLastname('%fooValue%'); // WHERE gift_for_lastname LIKE '%fooValue%'
     * </code>
     *
     * @param     string $giftForLastname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByGiftForLastname($giftForLastname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($giftForLastname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $giftForLastname)) {
                $giftForLastname = str_replace('*', '%', $giftForLastname);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::GIFT_FOR_LASTNAME, $giftForLastname, $comparison);
    }

    /**
     * Filter the query on the sci_payment_methods column
     *
     * Example usage:
     * <code>
     * $query->filterBySciPaymentMethods('fooValue');   // WHERE sci_payment_methods = 'fooValue'
     * $query->filterBySciPaymentMethods('%fooValue%'); // WHERE sci_payment_methods LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sciPaymentMethods The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterBySciPaymentMethods($sciPaymentMethods = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sciPaymentMethods)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sciPaymentMethods)) {
                $sciPaymentMethods = str_replace('*', '%', $sciPaymentMethods);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::SCI_PAYMENT_METHODS, $sciPaymentMethods, $comparison);
    }

    /**
     * Filter the query on the discount_applied column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscountApplied(1234); // WHERE discount_applied = 1234
     * $query->filterByDiscountApplied(array(12, 34)); // WHERE discount_applied IN (12, 34)
     * $query->filterByDiscountApplied(array('min' => 12)); // WHERE discount_applied >= 12
     * $query->filterByDiscountApplied(array('max' => 12)); // WHERE discount_applied <= 12
     * </code>
     *
     * @param     mixed $discountApplied The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByDiscountApplied($discountApplied = null, $comparison = null)
    {
        if (is_array($discountApplied)) {
            $useMinMax = false;
            if (isset($discountApplied['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_APPLIED, $discountApplied['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountApplied['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_APPLIED, $discountApplied['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::DISCOUNT_APPLIED, $discountApplied, $comparison);
    }

    /**
     * Filter the query on the rewards_applied column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardsApplied(1234); // WHERE rewards_applied = 1234
     * $query->filterByRewardsApplied(array(12, 34)); // WHERE rewards_applied IN (12, 34)
     * $query->filterByRewardsApplied(array('min' => 12)); // WHERE rewards_applied >= 12
     * $query->filterByRewardsApplied(array('max' => 12)); // WHERE rewards_applied <= 12
     * </code>
     *
     * @param     mixed $rewardsApplied The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByRewardsApplied($rewardsApplied = null, $comparison = null)
    {
        if (is_array($rewardsApplied)) {
            $useMinMax = false;
            if (isset($rewardsApplied['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARDS_APPLIED, $rewardsApplied['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rewardsApplied['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::REWARDS_APPLIED, $rewardsApplied['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::REWARDS_APPLIED, $rewardsApplied, $comparison);
    }

    /**
     * Filter the query on the stock_before_pol column
     *
     * Example usage:
     * <code>
     * $query->filterByStockBeforePol(1234); // WHERE stock_before_pol = 1234
     * $query->filterByStockBeforePol(array(12, 34)); // WHERE stock_before_pol IN (12, 34)
     * $query->filterByStockBeforePol(array('min' => 12)); // WHERE stock_before_pol >= 12
     * $query->filterByStockBeforePol(array('max' => 12)); // WHERE stock_before_pol <= 12
     * </code>
     *
     * @param     mixed $stockBeforePol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function filterByStockBeforePol($stockBeforePol = null, $comparison = null)
    {
        if (is_array($stockBeforePol)) {
            $useMinMax = false;
            if (isset($stockBeforePol['min'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::STOCK_BEFORE_POL, $stockBeforePol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($stockBeforePol['max'])) {
                $this->addUsingAlias(SalesFlatOrderPeer::STOCK_BEFORE_POL, $stockBeforePol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderPeer::STOCK_BEFORE_POL, $stockBeforePol, $comparison);
    }

    /**
     * Filter the query by a related CustomerEntity object
     *
     * @param   CustomerEntity|PropelObjectCollection $customerEntity The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesFlatOrderQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomerEntity($customerEntity, $comparison = null)
    {
        if ($customerEntity instanceof CustomerEntity) {
            return $this
                ->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_ID, $customerEntity->getEntityId(), $comparison);
        } elseif ($customerEntity instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesFlatOrderPeer::CUSTOMER_ID, $customerEntity->toKeyValue('PrimaryKey', 'EntityId'), $comparison);
        } else {
            throw new PropelException('filterByCustomerEntity() only accepts arguments of type CustomerEntity or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CustomerEntity relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function joinCustomerEntity($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CustomerEntity');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CustomerEntity');
        }

        return $this;
    }

    /**
     * Use the CustomerEntity relation CustomerEntity object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CustomerEntityQuery A secondary query class using the current class as primary query
     */
    public function useCustomerEntityQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCustomerEntity($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CustomerEntity', 'CustomerEntityQuery');
    }

    /**
     * Filter the query by a related CoreStore object
     *
     * @param   CoreStore|PropelObjectCollection $coreStore The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesFlatOrderQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCoreStore($coreStore, $comparison = null)
    {
        if ($coreStore instanceof CoreStore) {
            return $this
                ->addUsingAlias(SalesFlatOrderPeer::STORE_ID, $coreStore->getStoreId(), $comparison);
        } elseif ($coreStore instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesFlatOrderPeer::STORE_ID, $coreStore->toKeyValue('PrimaryKey', 'StoreId'), $comparison);
        } else {
            throw new PropelException('filterByCoreStore() only accepts arguments of type CoreStore or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CoreStore relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function joinCoreStore($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CoreStore');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CoreStore');
        }

        return $this;
    }

    /**
     * Use the CoreStore relation CoreStore object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CoreStoreQuery A secondary query class using the current class as primary query
     */
    public function useCoreStoreQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCoreStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CoreStore', 'CoreStoreQuery');
    }

    /**
     * Filter the query by a related SalesFlatOrderItem object
     *
     * @param   SalesFlatOrderItem|PropelObjectCollection $salesFlatOrderItem  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesFlatOrderQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySalesFlatOrderItem($salesFlatOrderItem, $comparison = null)
    {
        if ($salesFlatOrderItem instanceof SalesFlatOrderItem) {
            return $this
                ->addUsingAlias(SalesFlatOrderPeer::ENTITY_ID, $salesFlatOrderItem->getOrderId(), $comparison);
        } elseif ($salesFlatOrderItem instanceof PropelObjectCollection) {
            return $this
                ->useSalesFlatOrderItemQuery()
                ->filterByPrimaryKeys($salesFlatOrderItem->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySalesFlatOrderItem() only accepts arguments of type SalesFlatOrderItem or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesFlatOrderItem relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function joinSalesFlatOrderItem($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesFlatOrderItem');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'SalesFlatOrderItem');
        }

        return $this;
    }

    /**
     * Use the SalesFlatOrderItem relation SalesFlatOrderItem object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SalesFlatOrderItemQuery A secondary query class using the current class as primary query
     */
    public function useSalesFlatOrderItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesFlatOrderItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesFlatOrderItem', 'SalesFlatOrderItemQuery');
    }

    /**
     * Filter the query by a related CouponMapping object
     *
     * @param   CouponMapping|PropelObjectCollection $couponMapping  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesFlatOrderQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCouponMapping($couponMapping, $comparison = null)
    {
        if ($couponMapping instanceof CouponMapping) {
            return $this
                ->addUsingAlias(SalesFlatOrderPeer::INCREMENT_ID, $couponMapping->getIncrementId(), $comparison);
        } elseif ($couponMapping instanceof PropelObjectCollection) {
            return $this
                ->useCouponMappingQuery()
                ->filterByPrimaryKeys($couponMapping->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCouponMapping() only accepts arguments of type CouponMapping or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CouponMapping relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function joinCouponMapping($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CouponMapping');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CouponMapping');
        }

        return $this;
    }

    /**
     * Use the CouponMapping relation CouponMapping object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CouponMappingQuery A secondary query class using the current class as primary query
     */
    public function useCouponMappingQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCouponMapping($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CouponMapping', 'CouponMappingQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   SalesFlatOrder $salesFlatOrder Object to remove from the list of results
     *
     * @return SalesFlatOrderQuery The current query, for fluid interface
     */
    public function prune($salesFlatOrder = null)
    {
        if ($salesFlatOrder) {
            $this->addUsingAlias(SalesFlatOrderPeer::ENTITY_ID, $salesFlatOrder->getEntityId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
