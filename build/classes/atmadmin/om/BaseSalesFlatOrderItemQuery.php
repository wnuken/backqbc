<?php


/**
 * Base class that represents a query for the 'sales_flat_order_item' table.
 *
 *
 *
 * @method SalesFlatOrderItemQuery orderByItemId($order = Criteria::ASC) Order by the item_id column
 * @method SalesFlatOrderItemQuery orderByOrderId($order = Criteria::ASC) Order by the order_id column
 * @method SalesFlatOrderItemQuery orderByParentItemId($order = Criteria::ASC) Order by the parent_item_id column
 * @method SalesFlatOrderItemQuery orderByQuoteItemId($order = Criteria::ASC) Order by the quote_item_id column
 * @method SalesFlatOrderItemQuery orderByStoreId($order = Criteria::ASC) Order by the store_id column
 * @method SalesFlatOrderItemQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method SalesFlatOrderItemQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method SalesFlatOrderItemQuery orderByProductId($order = Criteria::ASC) Order by the product_id column
 * @method SalesFlatOrderItemQuery orderByProductType($order = Criteria::ASC) Order by the product_type column
 * @method SalesFlatOrderItemQuery orderByProductOptions($order = Criteria::ASC) Order by the product_options column
 * @method SalesFlatOrderItemQuery orderByWeight($order = Criteria::ASC) Order by the weight column
 * @method SalesFlatOrderItemQuery orderByIsVirtual($order = Criteria::ASC) Order by the is_virtual column
 * @method SalesFlatOrderItemQuery orderBySku($order = Criteria::ASC) Order by the sku column
 * @method SalesFlatOrderItemQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method SalesFlatOrderItemQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method SalesFlatOrderItemQuery orderByAppliedRuleIds($order = Criteria::ASC) Order by the applied_rule_ids column
 * @method SalesFlatOrderItemQuery orderByAdditionalData($order = Criteria::ASC) Order by the additional_data column
 * @method SalesFlatOrderItemQuery orderByFreeShipping($order = Criteria::ASC) Order by the free_shipping column
 * @method SalesFlatOrderItemQuery orderByIsQtyDecimal($order = Criteria::ASC) Order by the is_qty_decimal column
 * @method SalesFlatOrderItemQuery orderByNoDiscount($order = Criteria::ASC) Order by the no_discount column
 * @method SalesFlatOrderItemQuery orderByQtyBackordered($order = Criteria::ASC) Order by the qty_backordered column
 * @method SalesFlatOrderItemQuery orderByQtyCanceled($order = Criteria::ASC) Order by the qty_canceled column
 * @method SalesFlatOrderItemQuery orderByQtyInvoiced($order = Criteria::ASC) Order by the qty_invoiced column
 * @method SalesFlatOrderItemQuery orderByQtyOrdered($order = Criteria::ASC) Order by the qty_ordered column
 * @method SalesFlatOrderItemQuery orderByQtyRefunded($order = Criteria::ASC) Order by the qty_refunded column
 * @method SalesFlatOrderItemQuery orderByQtyShipped($order = Criteria::ASC) Order by the qty_shipped column
 * @method SalesFlatOrderItemQuery orderByBaseCost($order = Criteria::ASC) Order by the base_cost column
 * @method SalesFlatOrderItemQuery orderByPrice($order = Criteria::ASC) Order by the price column
 * @method SalesFlatOrderItemQuery orderByBasePrice($order = Criteria::ASC) Order by the base_price column
 * @method SalesFlatOrderItemQuery orderByOriginalPrice($order = Criteria::ASC) Order by the original_price column
 * @method SalesFlatOrderItemQuery orderByBaseOriginalPrice($order = Criteria::ASC) Order by the base_original_price column
 * @method SalesFlatOrderItemQuery orderByTaxPercent($order = Criteria::ASC) Order by the tax_percent column
 * @method SalesFlatOrderItemQuery orderByTaxAmount($order = Criteria::ASC) Order by the tax_amount column
 * @method SalesFlatOrderItemQuery orderByBaseTaxAmount($order = Criteria::ASC) Order by the base_tax_amount column
 * @method SalesFlatOrderItemQuery orderByTaxInvoiced($order = Criteria::ASC) Order by the tax_invoiced column
 * @method SalesFlatOrderItemQuery orderByBaseTaxInvoiced($order = Criteria::ASC) Order by the base_tax_invoiced column
 * @method SalesFlatOrderItemQuery orderByDiscountPercent($order = Criteria::ASC) Order by the discount_percent column
 * @method SalesFlatOrderItemQuery orderByDiscountAmount($order = Criteria::ASC) Order by the discount_amount column
 * @method SalesFlatOrderItemQuery orderByBaseDiscountAmount($order = Criteria::ASC) Order by the base_discount_amount column
 * @method SalesFlatOrderItemQuery orderByDiscountInvoiced($order = Criteria::ASC) Order by the discount_invoiced column
 * @method SalesFlatOrderItemQuery orderByBaseDiscountInvoiced($order = Criteria::ASC) Order by the base_discount_invoiced column
 * @method SalesFlatOrderItemQuery orderByAmountRefunded($order = Criteria::ASC) Order by the amount_refunded column
 * @method SalesFlatOrderItemQuery orderByBaseAmountRefunded($order = Criteria::ASC) Order by the base_amount_refunded column
 * @method SalesFlatOrderItemQuery orderByRowTotal($order = Criteria::ASC) Order by the row_total column
 * @method SalesFlatOrderItemQuery orderByBaseRowTotal($order = Criteria::ASC) Order by the base_row_total column
 * @method SalesFlatOrderItemQuery orderByRowInvoiced($order = Criteria::ASC) Order by the row_invoiced column
 * @method SalesFlatOrderItemQuery orderByBaseRowInvoiced($order = Criteria::ASC) Order by the base_row_invoiced column
 * @method SalesFlatOrderItemQuery orderByRowWeight($order = Criteria::ASC) Order by the row_weight column
 * @method SalesFlatOrderItemQuery orderByBaseTaxBeforeDiscount($order = Criteria::ASC) Order by the base_tax_before_discount column
 * @method SalesFlatOrderItemQuery orderByTaxBeforeDiscount($order = Criteria::ASC) Order by the tax_before_discount column
 * @method SalesFlatOrderItemQuery orderByExtOrderItemId($order = Criteria::ASC) Order by the ext_order_item_id column
 * @method SalesFlatOrderItemQuery orderByLockedDoInvoice($order = Criteria::ASC) Order by the locked_do_invoice column
 * @method SalesFlatOrderItemQuery orderByLockedDoShip($order = Criteria::ASC) Order by the locked_do_ship column
 * @method SalesFlatOrderItemQuery orderByPriceInclTax($order = Criteria::ASC) Order by the price_incl_tax column
 * @method SalesFlatOrderItemQuery orderByBasePriceInclTax($order = Criteria::ASC) Order by the base_price_incl_tax column
 * @method SalesFlatOrderItemQuery orderByRowTotalInclTax($order = Criteria::ASC) Order by the row_total_incl_tax column
 * @method SalesFlatOrderItemQuery orderByBaseRowTotalInclTax($order = Criteria::ASC) Order by the base_row_total_incl_tax column
 * @method SalesFlatOrderItemQuery orderByHiddenTaxAmount($order = Criteria::ASC) Order by the hidden_tax_amount column
 * @method SalesFlatOrderItemQuery orderByBaseHiddenTaxAmount($order = Criteria::ASC) Order by the base_hidden_tax_amount column
 * @method SalesFlatOrderItemQuery orderByHiddenTaxInvoiced($order = Criteria::ASC) Order by the hidden_tax_invoiced column
 * @method SalesFlatOrderItemQuery orderByBaseHiddenTaxInvoiced($order = Criteria::ASC) Order by the base_hidden_tax_invoiced column
 * @method SalesFlatOrderItemQuery orderByHiddenTaxRefunded($order = Criteria::ASC) Order by the hidden_tax_refunded column
 * @method SalesFlatOrderItemQuery orderByBaseHiddenTaxRefunded($order = Criteria::ASC) Order by the base_hidden_tax_refunded column
 * @method SalesFlatOrderItemQuery orderByIsNominal($order = Criteria::ASC) Order by the is_nominal column
 * @method SalesFlatOrderItemQuery orderByTaxCanceled($order = Criteria::ASC) Order by the tax_canceled column
 * @method SalesFlatOrderItemQuery orderByHiddenTaxCanceled($order = Criteria::ASC) Order by the hidden_tax_canceled column
 * @method SalesFlatOrderItemQuery orderByTaxRefunded($order = Criteria::ASC) Order by the tax_refunded column
 * @method SalesFlatOrderItemQuery orderByBaseTaxRefunded($order = Criteria::ASC) Order by the base_tax_refunded column
 * @method SalesFlatOrderItemQuery orderByDiscountRefunded($order = Criteria::ASC) Order by the discount_refunded column
 * @method SalesFlatOrderItemQuery orderByBaseDiscountRefunded($order = Criteria::ASC) Order by the base_discount_refunded column
 * @method SalesFlatOrderItemQuery orderByGiftMessageId($order = Criteria::ASC) Order by the gift_message_id column
 * @method SalesFlatOrderItemQuery orderByGiftMessageAvailable($order = Criteria::ASC) Order by the gift_message_available column
 * @method SalesFlatOrderItemQuery orderByBaseWeeeTaxAppliedAmount($order = Criteria::ASC) Order by the base_weee_tax_applied_amount column
 * @method SalesFlatOrderItemQuery orderByBaseWeeeTaxAppliedRowAmnt($order = Criteria::ASC) Order by the base_weee_tax_applied_row_amnt column
 * @method SalesFlatOrderItemQuery orderByWeeeTaxAppliedAmount($order = Criteria::ASC) Order by the weee_tax_applied_amount column
 * @method SalesFlatOrderItemQuery orderByWeeeTaxAppliedRowAmount($order = Criteria::ASC) Order by the weee_tax_applied_row_amount column
 * @method SalesFlatOrderItemQuery orderByWeeeTaxApplied($order = Criteria::ASC) Order by the weee_tax_applied column
 * @method SalesFlatOrderItemQuery orderByWeeeTaxDisposition($order = Criteria::ASC) Order by the weee_tax_disposition column
 * @method SalesFlatOrderItemQuery orderByWeeeTaxRowDisposition($order = Criteria::ASC) Order by the weee_tax_row_disposition column
 * @method SalesFlatOrderItemQuery orderByBaseWeeeTaxDisposition($order = Criteria::ASC) Order by the base_weee_tax_disposition column
 * @method SalesFlatOrderItemQuery orderByBaseWeeeTaxRowDisposition($order = Criteria::ASC) Order by the base_weee_tax_row_disposition column
 * @method SalesFlatOrderItemQuery orderByCrcId($order = Criteria::ASC) Order by the crc_id column
 * @method SalesFlatOrderItemQuery orderByEventId($order = Criteria::ASC) Order by the event_id column
 * @method SalesFlatOrderItemQuery orderByGiftregistryItemId($order = Criteria::ASC) Order by the giftregistry_item_id column
 * @method SalesFlatOrderItemQuery orderByGwId($order = Criteria::ASC) Order by the gw_id column
 * @method SalesFlatOrderItemQuery orderByGwBasePrice($order = Criteria::ASC) Order by the gw_base_price column
 * @method SalesFlatOrderItemQuery orderByGwPrice($order = Criteria::ASC) Order by the gw_price column
 * @method SalesFlatOrderItemQuery orderByGwBaseTaxAmount($order = Criteria::ASC) Order by the gw_base_tax_amount column
 * @method SalesFlatOrderItemQuery orderByGwTaxAmount($order = Criteria::ASC) Order by the gw_tax_amount column
 * @method SalesFlatOrderItemQuery orderByGwBasePriceInvoiced($order = Criteria::ASC) Order by the gw_base_price_invoiced column
 * @method SalesFlatOrderItemQuery orderByGwPriceInvoiced($order = Criteria::ASC) Order by the gw_price_invoiced column
 * @method SalesFlatOrderItemQuery orderByGwBaseTaxAmountInvoiced($order = Criteria::ASC) Order by the gw_base_tax_amount_invoiced column
 * @method SalesFlatOrderItemQuery orderByGwTaxAmountInvoiced($order = Criteria::ASC) Order by the gw_tax_amount_invoiced column
 * @method SalesFlatOrderItemQuery orderByGwBasePriceRefunded($order = Criteria::ASC) Order by the gw_base_price_refunded column
 * @method SalesFlatOrderItemQuery orderByGwPriceRefunded($order = Criteria::ASC) Order by the gw_price_refunded column
 * @method SalesFlatOrderItemQuery orderByGwBaseTaxAmountRefunded($order = Criteria::ASC) Order by the gw_base_tax_amount_refunded column
 * @method SalesFlatOrderItemQuery orderByGwTaxAmountRefunded($order = Criteria::ASC) Order by the gw_tax_amount_refunded column
 * @method SalesFlatOrderItemQuery orderByQtyReturned($order = Criteria::ASC) Order by the qty_returned column
 * @method SalesFlatOrderItemQuery orderByQtyRedeemed($order = Criteria::ASC) Order by the qty_redeemed column
 * @method SalesFlatOrderItemQuery orderByConsultant($order = Criteria::ASC) Order by the consultant column
 * @method SalesFlatOrderItemQuery orderByParentProductId($order = Criteria::ASC) Order by the parent_product_id column
 * @method SalesFlatOrderItemQuery orderByQtyToRedeem($order = Criteria::ASC) Order by the qty_to_redeem column
 * @method SalesFlatOrderItemQuery orderByRewardsUsedDetail($order = Criteria::ASC) Order by the rewards_used_detail column
 *
 * @method SalesFlatOrderItemQuery groupByItemId() Group by the item_id column
 * @method SalesFlatOrderItemQuery groupByOrderId() Group by the order_id column
 * @method SalesFlatOrderItemQuery groupByParentItemId() Group by the parent_item_id column
 * @method SalesFlatOrderItemQuery groupByQuoteItemId() Group by the quote_item_id column
 * @method SalesFlatOrderItemQuery groupByStoreId() Group by the store_id column
 * @method SalesFlatOrderItemQuery groupByCreatedAt() Group by the created_at column
 * @method SalesFlatOrderItemQuery groupByUpdatedAt() Group by the updated_at column
 * @method SalesFlatOrderItemQuery groupByProductId() Group by the product_id column
 * @method SalesFlatOrderItemQuery groupByProductType() Group by the product_type column
 * @method SalesFlatOrderItemQuery groupByProductOptions() Group by the product_options column
 * @method SalesFlatOrderItemQuery groupByWeight() Group by the weight column
 * @method SalesFlatOrderItemQuery groupByIsVirtual() Group by the is_virtual column
 * @method SalesFlatOrderItemQuery groupBySku() Group by the sku column
 * @method SalesFlatOrderItemQuery groupByName() Group by the name column
 * @method SalesFlatOrderItemQuery groupByDescription() Group by the description column
 * @method SalesFlatOrderItemQuery groupByAppliedRuleIds() Group by the applied_rule_ids column
 * @method SalesFlatOrderItemQuery groupByAdditionalData() Group by the additional_data column
 * @method SalesFlatOrderItemQuery groupByFreeShipping() Group by the free_shipping column
 * @method SalesFlatOrderItemQuery groupByIsQtyDecimal() Group by the is_qty_decimal column
 * @method SalesFlatOrderItemQuery groupByNoDiscount() Group by the no_discount column
 * @method SalesFlatOrderItemQuery groupByQtyBackordered() Group by the qty_backordered column
 * @method SalesFlatOrderItemQuery groupByQtyCanceled() Group by the qty_canceled column
 * @method SalesFlatOrderItemQuery groupByQtyInvoiced() Group by the qty_invoiced column
 * @method SalesFlatOrderItemQuery groupByQtyOrdered() Group by the qty_ordered column
 * @method SalesFlatOrderItemQuery groupByQtyRefunded() Group by the qty_refunded column
 * @method SalesFlatOrderItemQuery groupByQtyShipped() Group by the qty_shipped column
 * @method SalesFlatOrderItemQuery groupByBaseCost() Group by the base_cost column
 * @method SalesFlatOrderItemQuery groupByPrice() Group by the price column
 * @method SalesFlatOrderItemQuery groupByBasePrice() Group by the base_price column
 * @method SalesFlatOrderItemQuery groupByOriginalPrice() Group by the original_price column
 * @method SalesFlatOrderItemQuery groupByBaseOriginalPrice() Group by the base_original_price column
 * @method SalesFlatOrderItemQuery groupByTaxPercent() Group by the tax_percent column
 * @method SalesFlatOrderItemQuery groupByTaxAmount() Group by the tax_amount column
 * @method SalesFlatOrderItemQuery groupByBaseTaxAmount() Group by the base_tax_amount column
 * @method SalesFlatOrderItemQuery groupByTaxInvoiced() Group by the tax_invoiced column
 * @method SalesFlatOrderItemQuery groupByBaseTaxInvoiced() Group by the base_tax_invoiced column
 * @method SalesFlatOrderItemQuery groupByDiscountPercent() Group by the discount_percent column
 * @method SalesFlatOrderItemQuery groupByDiscountAmount() Group by the discount_amount column
 * @method SalesFlatOrderItemQuery groupByBaseDiscountAmount() Group by the base_discount_amount column
 * @method SalesFlatOrderItemQuery groupByDiscountInvoiced() Group by the discount_invoiced column
 * @method SalesFlatOrderItemQuery groupByBaseDiscountInvoiced() Group by the base_discount_invoiced column
 * @method SalesFlatOrderItemQuery groupByAmountRefunded() Group by the amount_refunded column
 * @method SalesFlatOrderItemQuery groupByBaseAmountRefunded() Group by the base_amount_refunded column
 * @method SalesFlatOrderItemQuery groupByRowTotal() Group by the row_total column
 * @method SalesFlatOrderItemQuery groupByBaseRowTotal() Group by the base_row_total column
 * @method SalesFlatOrderItemQuery groupByRowInvoiced() Group by the row_invoiced column
 * @method SalesFlatOrderItemQuery groupByBaseRowInvoiced() Group by the base_row_invoiced column
 * @method SalesFlatOrderItemQuery groupByRowWeight() Group by the row_weight column
 * @method SalesFlatOrderItemQuery groupByBaseTaxBeforeDiscount() Group by the base_tax_before_discount column
 * @method SalesFlatOrderItemQuery groupByTaxBeforeDiscount() Group by the tax_before_discount column
 * @method SalesFlatOrderItemQuery groupByExtOrderItemId() Group by the ext_order_item_id column
 * @method SalesFlatOrderItemQuery groupByLockedDoInvoice() Group by the locked_do_invoice column
 * @method SalesFlatOrderItemQuery groupByLockedDoShip() Group by the locked_do_ship column
 * @method SalesFlatOrderItemQuery groupByPriceInclTax() Group by the price_incl_tax column
 * @method SalesFlatOrderItemQuery groupByBasePriceInclTax() Group by the base_price_incl_tax column
 * @method SalesFlatOrderItemQuery groupByRowTotalInclTax() Group by the row_total_incl_tax column
 * @method SalesFlatOrderItemQuery groupByBaseRowTotalInclTax() Group by the base_row_total_incl_tax column
 * @method SalesFlatOrderItemQuery groupByHiddenTaxAmount() Group by the hidden_tax_amount column
 * @method SalesFlatOrderItemQuery groupByBaseHiddenTaxAmount() Group by the base_hidden_tax_amount column
 * @method SalesFlatOrderItemQuery groupByHiddenTaxInvoiced() Group by the hidden_tax_invoiced column
 * @method SalesFlatOrderItemQuery groupByBaseHiddenTaxInvoiced() Group by the base_hidden_tax_invoiced column
 * @method SalesFlatOrderItemQuery groupByHiddenTaxRefunded() Group by the hidden_tax_refunded column
 * @method SalesFlatOrderItemQuery groupByBaseHiddenTaxRefunded() Group by the base_hidden_tax_refunded column
 * @method SalesFlatOrderItemQuery groupByIsNominal() Group by the is_nominal column
 * @method SalesFlatOrderItemQuery groupByTaxCanceled() Group by the tax_canceled column
 * @method SalesFlatOrderItemQuery groupByHiddenTaxCanceled() Group by the hidden_tax_canceled column
 * @method SalesFlatOrderItemQuery groupByTaxRefunded() Group by the tax_refunded column
 * @method SalesFlatOrderItemQuery groupByBaseTaxRefunded() Group by the base_tax_refunded column
 * @method SalesFlatOrderItemQuery groupByDiscountRefunded() Group by the discount_refunded column
 * @method SalesFlatOrderItemQuery groupByBaseDiscountRefunded() Group by the base_discount_refunded column
 * @method SalesFlatOrderItemQuery groupByGiftMessageId() Group by the gift_message_id column
 * @method SalesFlatOrderItemQuery groupByGiftMessageAvailable() Group by the gift_message_available column
 * @method SalesFlatOrderItemQuery groupByBaseWeeeTaxAppliedAmount() Group by the base_weee_tax_applied_amount column
 * @method SalesFlatOrderItemQuery groupByBaseWeeeTaxAppliedRowAmnt() Group by the base_weee_tax_applied_row_amnt column
 * @method SalesFlatOrderItemQuery groupByWeeeTaxAppliedAmount() Group by the weee_tax_applied_amount column
 * @method SalesFlatOrderItemQuery groupByWeeeTaxAppliedRowAmount() Group by the weee_tax_applied_row_amount column
 * @method SalesFlatOrderItemQuery groupByWeeeTaxApplied() Group by the weee_tax_applied column
 * @method SalesFlatOrderItemQuery groupByWeeeTaxDisposition() Group by the weee_tax_disposition column
 * @method SalesFlatOrderItemQuery groupByWeeeTaxRowDisposition() Group by the weee_tax_row_disposition column
 * @method SalesFlatOrderItemQuery groupByBaseWeeeTaxDisposition() Group by the base_weee_tax_disposition column
 * @method SalesFlatOrderItemQuery groupByBaseWeeeTaxRowDisposition() Group by the base_weee_tax_row_disposition column
 * @method SalesFlatOrderItemQuery groupByCrcId() Group by the crc_id column
 * @method SalesFlatOrderItemQuery groupByEventId() Group by the event_id column
 * @method SalesFlatOrderItemQuery groupByGiftregistryItemId() Group by the giftregistry_item_id column
 * @method SalesFlatOrderItemQuery groupByGwId() Group by the gw_id column
 * @method SalesFlatOrderItemQuery groupByGwBasePrice() Group by the gw_base_price column
 * @method SalesFlatOrderItemQuery groupByGwPrice() Group by the gw_price column
 * @method SalesFlatOrderItemQuery groupByGwBaseTaxAmount() Group by the gw_base_tax_amount column
 * @method SalesFlatOrderItemQuery groupByGwTaxAmount() Group by the gw_tax_amount column
 * @method SalesFlatOrderItemQuery groupByGwBasePriceInvoiced() Group by the gw_base_price_invoiced column
 * @method SalesFlatOrderItemQuery groupByGwPriceInvoiced() Group by the gw_price_invoiced column
 * @method SalesFlatOrderItemQuery groupByGwBaseTaxAmountInvoiced() Group by the gw_base_tax_amount_invoiced column
 * @method SalesFlatOrderItemQuery groupByGwTaxAmountInvoiced() Group by the gw_tax_amount_invoiced column
 * @method SalesFlatOrderItemQuery groupByGwBasePriceRefunded() Group by the gw_base_price_refunded column
 * @method SalesFlatOrderItemQuery groupByGwPriceRefunded() Group by the gw_price_refunded column
 * @method SalesFlatOrderItemQuery groupByGwBaseTaxAmountRefunded() Group by the gw_base_tax_amount_refunded column
 * @method SalesFlatOrderItemQuery groupByGwTaxAmountRefunded() Group by the gw_tax_amount_refunded column
 * @method SalesFlatOrderItemQuery groupByQtyReturned() Group by the qty_returned column
 * @method SalesFlatOrderItemQuery groupByQtyRedeemed() Group by the qty_redeemed column
 * @method SalesFlatOrderItemQuery groupByConsultant() Group by the consultant column
 * @method SalesFlatOrderItemQuery groupByParentProductId() Group by the parent_product_id column
 * @method SalesFlatOrderItemQuery groupByQtyToRedeem() Group by the qty_to_redeem column
 * @method SalesFlatOrderItemQuery groupByRewardsUsedDetail() Group by the rewards_used_detail column
 *
 * @method SalesFlatOrderItemQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SalesFlatOrderItemQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SalesFlatOrderItemQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SalesFlatOrderItemQuery leftJoinSalesFlatOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the SalesFlatOrder relation
 * @method SalesFlatOrderItemQuery rightJoinSalesFlatOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SalesFlatOrder relation
 * @method SalesFlatOrderItemQuery innerJoinSalesFlatOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the SalesFlatOrder relation
 *
 * @method SalesFlatOrderItemQuery leftJoinCoreStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the CoreStore relation
 * @method SalesFlatOrderItemQuery rightJoinCoreStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CoreStore relation
 * @method SalesFlatOrderItemQuery innerJoinCoreStore($relationAlias = null) Adds a INNER JOIN clause to the query using the CoreStore relation
 *
 * @method SalesFlatOrderItem findOne(PropelPDO $con = null) Return the first SalesFlatOrderItem matching the query
 * @method SalesFlatOrderItem findOneOrCreate(PropelPDO $con = null) Return the first SalesFlatOrderItem matching the query, or a new SalesFlatOrderItem object populated from the query conditions when no match is found
 *
 * @method SalesFlatOrderItem findOneByOrderId(int $order_id) Return the first SalesFlatOrderItem filtered by the order_id column
 * @method SalesFlatOrderItem findOneByParentItemId(int $parent_item_id) Return the first SalesFlatOrderItem filtered by the parent_item_id column
 * @method SalesFlatOrderItem findOneByQuoteItemId(int $quote_item_id) Return the first SalesFlatOrderItem filtered by the quote_item_id column
 * @method SalesFlatOrderItem findOneByStoreId(int $store_id) Return the first SalesFlatOrderItem filtered by the store_id column
 * @method SalesFlatOrderItem findOneByCreatedAt(string $created_at) Return the first SalesFlatOrderItem filtered by the created_at column
 * @method SalesFlatOrderItem findOneByUpdatedAt(string $updated_at) Return the first SalesFlatOrderItem filtered by the updated_at column
 * @method SalesFlatOrderItem findOneByProductId(int $product_id) Return the first SalesFlatOrderItem filtered by the product_id column
 * @method SalesFlatOrderItem findOneByProductType(string $product_type) Return the first SalesFlatOrderItem filtered by the product_type column
 * @method SalesFlatOrderItem findOneByProductOptions(string $product_options) Return the first SalesFlatOrderItem filtered by the product_options column
 * @method SalesFlatOrderItem findOneByWeight(string $weight) Return the first SalesFlatOrderItem filtered by the weight column
 * @method SalesFlatOrderItem findOneByIsVirtual(int $is_virtual) Return the first SalesFlatOrderItem filtered by the is_virtual column
 * @method SalesFlatOrderItem findOneBySku(string $sku) Return the first SalesFlatOrderItem filtered by the sku column
 * @method SalesFlatOrderItem findOneByName(string $name) Return the first SalesFlatOrderItem filtered by the name column
 * @method SalesFlatOrderItem findOneByDescription(string $description) Return the first SalesFlatOrderItem filtered by the description column
 * @method SalesFlatOrderItem findOneByAppliedRuleIds(string $applied_rule_ids) Return the first SalesFlatOrderItem filtered by the applied_rule_ids column
 * @method SalesFlatOrderItem findOneByAdditionalData(string $additional_data) Return the first SalesFlatOrderItem filtered by the additional_data column
 * @method SalesFlatOrderItem findOneByFreeShipping(int $free_shipping) Return the first SalesFlatOrderItem filtered by the free_shipping column
 * @method SalesFlatOrderItem findOneByIsQtyDecimal(int $is_qty_decimal) Return the first SalesFlatOrderItem filtered by the is_qty_decimal column
 * @method SalesFlatOrderItem findOneByNoDiscount(int $no_discount) Return the first SalesFlatOrderItem filtered by the no_discount column
 * @method SalesFlatOrderItem findOneByQtyBackordered(string $qty_backordered) Return the first SalesFlatOrderItem filtered by the qty_backordered column
 * @method SalesFlatOrderItem findOneByQtyCanceled(string $qty_canceled) Return the first SalesFlatOrderItem filtered by the qty_canceled column
 * @method SalesFlatOrderItem findOneByQtyInvoiced(string $qty_invoiced) Return the first SalesFlatOrderItem filtered by the qty_invoiced column
 * @method SalesFlatOrderItem findOneByQtyOrdered(string $qty_ordered) Return the first SalesFlatOrderItem filtered by the qty_ordered column
 * @method SalesFlatOrderItem findOneByQtyRefunded(string $qty_refunded) Return the first SalesFlatOrderItem filtered by the qty_refunded column
 * @method SalesFlatOrderItem findOneByQtyShipped(string $qty_shipped) Return the first SalesFlatOrderItem filtered by the qty_shipped column
 * @method SalesFlatOrderItem findOneByBaseCost(string $base_cost) Return the first SalesFlatOrderItem filtered by the base_cost column
 * @method SalesFlatOrderItem findOneByPrice(string $price) Return the first SalesFlatOrderItem filtered by the price column
 * @method SalesFlatOrderItem findOneByBasePrice(string $base_price) Return the first SalesFlatOrderItem filtered by the base_price column
 * @method SalesFlatOrderItem findOneByOriginalPrice(string $original_price) Return the first SalesFlatOrderItem filtered by the original_price column
 * @method SalesFlatOrderItem findOneByBaseOriginalPrice(string $base_original_price) Return the first SalesFlatOrderItem filtered by the base_original_price column
 * @method SalesFlatOrderItem findOneByTaxPercent(string $tax_percent) Return the first SalesFlatOrderItem filtered by the tax_percent column
 * @method SalesFlatOrderItem findOneByTaxAmount(string $tax_amount) Return the first SalesFlatOrderItem filtered by the tax_amount column
 * @method SalesFlatOrderItem findOneByBaseTaxAmount(string $base_tax_amount) Return the first SalesFlatOrderItem filtered by the base_tax_amount column
 * @method SalesFlatOrderItem findOneByTaxInvoiced(string $tax_invoiced) Return the first SalesFlatOrderItem filtered by the tax_invoiced column
 * @method SalesFlatOrderItem findOneByBaseTaxInvoiced(string $base_tax_invoiced) Return the first SalesFlatOrderItem filtered by the base_tax_invoiced column
 * @method SalesFlatOrderItem findOneByDiscountPercent(string $discount_percent) Return the first SalesFlatOrderItem filtered by the discount_percent column
 * @method SalesFlatOrderItem findOneByDiscountAmount(string $discount_amount) Return the first SalesFlatOrderItem filtered by the discount_amount column
 * @method SalesFlatOrderItem findOneByBaseDiscountAmount(string $base_discount_amount) Return the first SalesFlatOrderItem filtered by the base_discount_amount column
 * @method SalesFlatOrderItem findOneByDiscountInvoiced(string $discount_invoiced) Return the first SalesFlatOrderItem filtered by the discount_invoiced column
 * @method SalesFlatOrderItem findOneByBaseDiscountInvoiced(string $base_discount_invoiced) Return the first SalesFlatOrderItem filtered by the base_discount_invoiced column
 * @method SalesFlatOrderItem findOneByAmountRefunded(string $amount_refunded) Return the first SalesFlatOrderItem filtered by the amount_refunded column
 * @method SalesFlatOrderItem findOneByBaseAmountRefunded(string $base_amount_refunded) Return the first SalesFlatOrderItem filtered by the base_amount_refunded column
 * @method SalesFlatOrderItem findOneByRowTotal(string $row_total) Return the first SalesFlatOrderItem filtered by the row_total column
 * @method SalesFlatOrderItem findOneByBaseRowTotal(string $base_row_total) Return the first SalesFlatOrderItem filtered by the base_row_total column
 * @method SalesFlatOrderItem findOneByRowInvoiced(string $row_invoiced) Return the first SalesFlatOrderItem filtered by the row_invoiced column
 * @method SalesFlatOrderItem findOneByBaseRowInvoiced(string $base_row_invoiced) Return the first SalesFlatOrderItem filtered by the base_row_invoiced column
 * @method SalesFlatOrderItem findOneByRowWeight(string $row_weight) Return the first SalesFlatOrderItem filtered by the row_weight column
 * @method SalesFlatOrderItem findOneByBaseTaxBeforeDiscount(string $base_tax_before_discount) Return the first SalesFlatOrderItem filtered by the base_tax_before_discount column
 * @method SalesFlatOrderItem findOneByTaxBeforeDiscount(string $tax_before_discount) Return the first SalesFlatOrderItem filtered by the tax_before_discount column
 * @method SalesFlatOrderItem findOneByExtOrderItemId(string $ext_order_item_id) Return the first SalesFlatOrderItem filtered by the ext_order_item_id column
 * @method SalesFlatOrderItem findOneByLockedDoInvoice(int $locked_do_invoice) Return the first SalesFlatOrderItem filtered by the locked_do_invoice column
 * @method SalesFlatOrderItem findOneByLockedDoShip(int $locked_do_ship) Return the first SalesFlatOrderItem filtered by the locked_do_ship column
 * @method SalesFlatOrderItem findOneByPriceInclTax(string $price_incl_tax) Return the first SalesFlatOrderItem filtered by the price_incl_tax column
 * @method SalesFlatOrderItem findOneByBasePriceInclTax(string $base_price_incl_tax) Return the first SalesFlatOrderItem filtered by the base_price_incl_tax column
 * @method SalesFlatOrderItem findOneByRowTotalInclTax(string $row_total_incl_tax) Return the first SalesFlatOrderItem filtered by the row_total_incl_tax column
 * @method SalesFlatOrderItem findOneByBaseRowTotalInclTax(string $base_row_total_incl_tax) Return the first SalesFlatOrderItem filtered by the base_row_total_incl_tax column
 * @method SalesFlatOrderItem findOneByHiddenTaxAmount(string $hidden_tax_amount) Return the first SalesFlatOrderItem filtered by the hidden_tax_amount column
 * @method SalesFlatOrderItem findOneByBaseHiddenTaxAmount(string $base_hidden_tax_amount) Return the first SalesFlatOrderItem filtered by the base_hidden_tax_amount column
 * @method SalesFlatOrderItem findOneByHiddenTaxInvoiced(string $hidden_tax_invoiced) Return the first SalesFlatOrderItem filtered by the hidden_tax_invoiced column
 * @method SalesFlatOrderItem findOneByBaseHiddenTaxInvoiced(string $base_hidden_tax_invoiced) Return the first SalesFlatOrderItem filtered by the base_hidden_tax_invoiced column
 * @method SalesFlatOrderItem findOneByHiddenTaxRefunded(string $hidden_tax_refunded) Return the first SalesFlatOrderItem filtered by the hidden_tax_refunded column
 * @method SalesFlatOrderItem findOneByBaseHiddenTaxRefunded(string $base_hidden_tax_refunded) Return the first SalesFlatOrderItem filtered by the base_hidden_tax_refunded column
 * @method SalesFlatOrderItem findOneByIsNominal(int $is_nominal) Return the first SalesFlatOrderItem filtered by the is_nominal column
 * @method SalesFlatOrderItem findOneByTaxCanceled(string $tax_canceled) Return the first SalesFlatOrderItem filtered by the tax_canceled column
 * @method SalesFlatOrderItem findOneByHiddenTaxCanceled(string $hidden_tax_canceled) Return the first SalesFlatOrderItem filtered by the hidden_tax_canceled column
 * @method SalesFlatOrderItem findOneByTaxRefunded(string $tax_refunded) Return the first SalesFlatOrderItem filtered by the tax_refunded column
 * @method SalesFlatOrderItem findOneByBaseTaxRefunded(string $base_tax_refunded) Return the first SalesFlatOrderItem filtered by the base_tax_refunded column
 * @method SalesFlatOrderItem findOneByDiscountRefunded(string $discount_refunded) Return the first SalesFlatOrderItem filtered by the discount_refunded column
 * @method SalesFlatOrderItem findOneByBaseDiscountRefunded(string $base_discount_refunded) Return the first SalesFlatOrderItem filtered by the base_discount_refunded column
 * @method SalesFlatOrderItem findOneByGiftMessageId(int $gift_message_id) Return the first SalesFlatOrderItem filtered by the gift_message_id column
 * @method SalesFlatOrderItem findOneByGiftMessageAvailable(int $gift_message_available) Return the first SalesFlatOrderItem filtered by the gift_message_available column
 * @method SalesFlatOrderItem findOneByBaseWeeeTaxAppliedAmount(string $base_weee_tax_applied_amount) Return the first SalesFlatOrderItem filtered by the base_weee_tax_applied_amount column
 * @method SalesFlatOrderItem findOneByBaseWeeeTaxAppliedRowAmnt(string $base_weee_tax_applied_row_amnt) Return the first SalesFlatOrderItem filtered by the base_weee_tax_applied_row_amnt column
 * @method SalesFlatOrderItem findOneByWeeeTaxAppliedAmount(string $weee_tax_applied_amount) Return the first SalesFlatOrderItem filtered by the weee_tax_applied_amount column
 * @method SalesFlatOrderItem findOneByWeeeTaxAppliedRowAmount(string $weee_tax_applied_row_amount) Return the first SalesFlatOrderItem filtered by the weee_tax_applied_row_amount column
 * @method SalesFlatOrderItem findOneByWeeeTaxApplied(string $weee_tax_applied) Return the first SalesFlatOrderItem filtered by the weee_tax_applied column
 * @method SalesFlatOrderItem findOneByWeeeTaxDisposition(string $weee_tax_disposition) Return the first SalesFlatOrderItem filtered by the weee_tax_disposition column
 * @method SalesFlatOrderItem findOneByWeeeTaxRowDisposition(string $weee_tax_row_disposition) Return the first SalesFlatOrderItem filtered by the weee_tax_row_disposition column
 * @method SalesFlatOrderItem findOneByBaseWeeeTaxDisposition(string $base_weee_tax_disposition) Return the first SalesFlatOrderItem filtered by the base_weee_tax_disposition column
 * @method SalesFlatOrderItem findOneByBaseWeeeTaxRowDisposition(string $base_weee_tax_row_disposition) Return the first SalesFlatOrderItem filtered by the base_weee_tax_row_disposition column
 * @method SalesFlatOrderItem findOneByCrcId(int $crc_id) Return the first SalesFlatOrderItem filtered by the crc_id column
 * @method SalesFlatOrderItem findOneByEventId(int $event_id) Return the first SalesFlatOrderItem filtered by the event_id column
 * @method SalesFlatOrderItem findOneByGiftregistryItemId(int $giftregistry_item_id) Return the first SalesFlatOrderItem filtered by the giftregistry_item_id column
 * @method SalesFlatOrderItem findOneByGwId(int $gw_id) Return the first SalesFlatOrderItem filtered by the gw_id column
 * @method SalesFlatOrderItem findOneByGwBasePrice(string $gw_base_price) Return the first SalesFlatOrderItem filtered by the gw_base_price column
 * @method SalesFlatOrderItem findOneByGwPrice(string $gw_price) Return the first SalesFlatOrderItem filtered by the gw_price column
 * @method SalesFlatOrderItem findOneByGwBaseTaxAmount(string $gw_base_tax_amount) Return the first SalesFlatOrderItem filtered by the gw_base_tax_amount column
 * @method SalesFlatOrderItem findOneByGwTaxAmount(string $gw_tax_amount) Return the first SalesFlatOrderItem filtered by the gw_tax_amount column
 * @method SalesFlatOrderItem findOneByGwBasePriceInvoiced(string $gw_base_price_invoiced) Return the first SalesFlatOrderItem filtered by the gw_base_price_invoiced column
 * @method SalesFlatOrderItem findOneByGwPriceInvoiced(string $gw_price_invoiced) Return the first SalesFlatOrderItem filtered by the gw_price_invoiced column
 * @method SalesFlatOrderItem findOneByGwBaseTaxAmountInvoiced(string $gw_base_tax_amount_invoiced) Return the first SalesFlatOrderItem filtered by the gw_base_tax_amount_invoiced column
 * @method SalesFlatOrderItem findOneByGwTaxAmountInvoiced(string $gw_tax_amount_invoiced) Return the first SalesFlatOrderItem filtered by the gw_tax_amount_invoiced column
 * @method SalesFlatOrderItem findOneByGwBasePriceRefunded(string $gw_base_price_refunded) Return the first SalesFlatOrderItem filtered by the gw_base_price_refunded column
 * @method SalesFlatOrderItem findOneByGwPriceRefunded(string $gw_price_refunded) Return the first SalesFlatOrderItem filtered by the gw_price_refunded column
 * @method SalesFlatOrderItem findOneByGwBaseTaxAmountRefunded(string $gw_base_tax_amount_refunded) Return the first SalesFlatOrderItem filtered by the gw_base_tax_amount_refunded column
 * @method SalesFlatOrderItem findOneByGwTaxAmountRefunded(string $gw_tax_amount_refunded) Return the first SalesFlatOrderItem filtered by the gw_tax_amount_refunded column
 * @method SalesFlatOrderItem findOneByQtyReturned(string $qty_returned) Return the first SalesFlatOrderItem filtered by the qty_returned column
 * @method SalesFlatOrderItem findOneByQtyRedeemed(string $qty_redeemed) Return the first SalesFlatOrderItem filtered by the qty_redeemed column
 * @method SalesFlatOrderItem findOneByConsultant(string $consultant) Return the first SalesFlatOrderItem filtered by the consultant column
 * @method SalesFlatOrderItem findOneByParentProductId(int $parent_product_id) Return the first SalesFlatOrderItem filtered by the parent_product_id column
 * @method SalesFlatOrderItem findOneByQtyToRedeem(int $qty_to_redeem) Return the first SalesFlatOrderItem filtered by the qty_to_redeem column
 * @method SalesFlatOrderItem findOneByRewardsUsedDetail(string $rewards_used_detail) Return the first SalesFlatOrderItem filtered by the rewards_used_detail column
 *
 * @method array findByItemId(int $item_id) Return SalesFlatOrderItem objects filtered by the item_id column
 * @method array findByOrderId(int $order_id) Return SalesFlatOrderItem objects filtered by the order_id column
 * @method array findByParentItemId(int $parent_item_id) Return SalesFlatOrderItem objects filtered by the parent_item_id column
 * @method array findByQuoteItemId(int $quote_item_id) Return SalesFlatOrderItem objects filtered by the quote_item_id column
 * @method array findByStoreId(int $store_id) Return SalesFlatOrderItem objects filtered by the store_id column
 * @method array findByCreatedAt(string $created_at) Return SalesFlatOrderItem objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return SalesFlatOrderItem objects filtered by the updated_at column
 * @method array findByProductId(int $product_id) Return SalesFlatOrderItem objects filtered by the product_id column
 * @method array findByProductType(string $product_type) Return SalesFlatOrderItem objects filtered by the product_type column
 * @method array findByProductOptions(string $product_options) Return SalesFlatOrderItem objects filtered by the product_options column
 * @method array findByWeight(string $weight) Return SalesFlatOrderItem objects filtered by the weight column
 * @method array findByIsVirtual(int $is_virtual) Return SalesFlatOrderItem objects filtered by the is_virtual column
 * @method array findBySku(string $sku) Return SalesFlatOrderItem objects filtered by the sku column
 * @method array findByName(string $name) Return SalesFlatOrderItem objects filtered by the name column
 * @method array findByDescription(string $description) Return SalesFlatOrderItem objects filtered by the description column
 * @method array findByAppliedRuleIds(string $applied_rule_ids) Return SalesFlatOrderItem objects filtered by the applied_rule_ids column
 * @method array findByAdditionalData(string $additional_data) Return SalesFlatOrderItem objects filtered by the additional_data column
 * @method array findByFreeShipping(int $free_shipping) Return SalesFlatOrderItem objects filtered by the free_shipping column
 * @method array findByIsQtyDecimal(int $is_qty_decimal) Return SalesFlatOrderItem objects filtered by the is_qty_decimal column
 * @method array findByNoDiscount(int $no_discount) Return SalesFlatOrderItem objects filtered by the no_discount column
 * @method array findByQtyBackordered(string $qty_backordered) Return SalesFlatOrderItem objects filtered by the qty_backordered column
 * @method array findByQtyCanceled(string $qty_canceled) Return SalesFlatOrderItem objects filtered by the qty_canceled column
 * @method array findByQtyInvoiced(string $qty_invoiced) Return SalesFlatOrderItem objects filtered by the qty_invoiced column
 * @method array findByQtyOrdered(string $qty_ordered) Return SalesFlatOrderItem objects filtered by the qty_ordered column
 * @method array findByQtyRefunded(string $qty_refunded) Return SalesFlatOrderItem objects filtered by the qty_refunded column
 * @method array findByQtyShipped(string $qty_shipped) Return SalesFlatOrderItem objects filtered by the qty_shipped column
 * @method array findByBaseCost(string $base_cost) Return SalesFlatOrderItem objects filtered by the base_cost column
 * @method array findByPrice(string $price) Return SalesFlatOrderItem objects filtered by the price column
 * @method array findByBasePrice(string $base_price) Return SalesFlatOrderItem objects filtered by the base_price column
 * @method array findByOriginalPrice(string $original_price) Return SalesFlatOrderItem objects filtered by the original_price column
 * @method array findByBaseOriginalPrice(string $base_original_price) Return SalesFlatOrderItem objects filtered by the base_original_price column
 * @method array findByTaxPercent(string $tax_percent) Return SalesFlatOrderItem objects filtered by the tax_percent column
 * @method array findByTaxAmount(string $tax_amount) Return SalesFlatOrderItem objects filtered by the tax_amount column
 * @method array findByBaseTaxAmount(string $base_tax_amount) Return SalesFlatOrderItem objects filtered by the base_tax_amount column
 * @method array findByTaxInvoiced(string $tax_invoiced) Return SalesFlatOrderItem objects filtered by the tax_invoiced column
 * @method array findByBaseTaxInvoiced(string $base_tax_invoiced) Return SalesFlatOrderItem objects filtered by the base_tax_invoiced column
 * @method array findByDiscountPercent(string $discount_percent) Return SalesFlatOrderItem objects filtered by the discount_percent column
 * @method array findByDiscountAmount(string $discount_amount) Return SalesFlatOrderItem objects filtered by the discount_amount column
 * @method array findByBaseDiscountAmount(string $base_discount_amount) Return SalesFlatOrderItem objects filtered by the base_discount_amount column
 * @method array findByDiscountInvoiced(string $discount_invoiced) Return SalesFlatOrderItem objects filtered by the discount_invoiced column
 * @method array findByBaseDiscountInvoiced(string $base_discount_invoiced) Return SalesFlatOrderItem objects filtered by the base_discount_invoiced column
 * @method array findByAmountRefunded(string $amount_refunded) Return SalesFlatOrderItem objects filtered by the amount_refunded column
 * @method array findByBaseAmountRefunded(string $base_amount_refunded) Return SalesFlatOrderItem objects filtered by the base_amount_refunded column
 * @method array findByRowTotal(string $row_total) Return SalesFlatOrderItem objects filtered by the row_total column
 * @method array findByBaseRowTotal(string $base_row_total) Return SalesFlatOrderItem objects filtered by the base_row_total column
 * @method array findByRowInvoiced(string $row_invoiced) Return SalesFlatOrderItem objects filtered by the row_invoiced column
 * @method array findByBaseRowInvoiced(string $base_row_invoiced) Return SalesFlatOrderItem objects filtered by the base_row_invoiced column
 * @method array findByRowWeight(string $row_weight) Return SalesFlatOrderItem objects filtered by the row_weight column
 * @method array findByBaseTaxBeforeDiscount(string $base_tax_before_discount) Return SalesFlatOrderItem objects filtered by the base_tax_before_discount column
 * @method array findByTaxBeforeDiscount(string $tax_before_discount) Return SalesFlatOrderItem objects filtered by the tax_before_discount column
 * @method array findByExtOrderItemId(string $ext_order_item_id) Return SalesFlatOrderItem objects filtered by the ext_order_item_id column
 * @method array findByLockedDoInvoice(int $locked_do_invoice) Return SalesFlatOrderItem objects filtered by the locked_do_invoice column
 * @method array findByLockedDoShip(int $locked_do_ship) Return SalesFlatOrderItem objects filtered by the locked_do_ship column
 * @method array findByPriceInclTax(string $price_incl_tax) Return SalesFlatOrderItem objects filtered by the price_incl_tax column
 * @method array findByBasePriceInclTax(string $base_price_incl_tax) Return SalesFlatOrderItem objects filtered by the base_price_incl_tax column
 * @method array findByRowTotalInclTax(string $row_total_incl_tax) Return SalesFlatOrderItem objects filtered by the row_total_incl_tax column
 * @method array findByBaseRowTotalInclTax(string $base_row_total_incl_tax) Return SalesFlatOrderItem objects filtered by the base_row_total_incl_tax column
 * @method array findByHiddenTaxAmount(string $hidden_tax_amount) Return SalesFlatOrderItem objects filtered by the hidden_tax_amount column
 * @method array findByBaseHiddenTaxAmount(string $base_hidden_tax_amount) Return SalesFlatOrderItem objects filtered by the base_hidden_tax_amount column
 * @method array findByHiddenTaxInvoiced(string $hidden_tax_invoiced) Return SalesFlatOrderItem objects filtered by the hidden_tax_invoiced column
 * @method array findByBaseHiddenTaxInvoiced(string $base_hidden_tax_invoiced) Return SalesFlatOrderItem objects filtered by the base_hidden_tax_invoiced column
 * @method array findByHiddenTaxRefunded(string $hidden_tax_refunded) Return SalesFlatOrderItem objects filtered by the hidden_tax_refunded column
 * @method array findByBaseHiddenTaxRefunded(string $base_hidden_tax_refunded) Return SalesFlatOrderItem objects filtered by the base_hidden_tax_refunded column
 * @method array findByIsNominal(int $is_nominal) Return SalesFlatOrderItem objects filtered by the is_nominal column
 * @method array findByTaxCanceled(string $tax_canceled) Return SalesFlatOrderItem objects filtered by the tax_canceled column
 * @method array findByHiddenTaxCanceled(string $hidden_tax_canceled) Return SalesFlatOrderItem objects filtered by the hidden_tax_canceled column
 * @method array findByTaxRefunded(string $tax_refunded) Return SalesFlatOrderItem objects filtered by the tax_refunded column
 * @method array findByBaseTaxRefunded(string $base_tax_refunded) Return SalesFlatOrderItem objects filtered by the base_tax_refunded column
 * @method array findByDiscountRefunded(string $discount_refunded) Return SalesFlatOrderItem objects filtered by the discount_refunded column
 * @method array findByBaseDiscountRefunded(string $base_discount_refunded) Return SalesFlatOrderItem objects filtered by the base_discount_refunded column
 * @method array findByGiftMessageId(int $gift_message_id) Return SalesFlatOrderItem objects filtered by the gift_message_id column
 * @method array findByGiftMessageAvailable(int $gift_message_available) Return SalesFlatOrderItem objects filtered by the gift_message_available column
 * @method array findByBaseWeeeTaxAppliedAmount(string $base_weee_tax_applied_amount) Return SalesFlatOrderItem objects filtered by the base_weee_tax_applied_amount column
 * @method array findByBaseWeeeTaxAppliedRowAmnt(string $base_weee_tax_applied_row_amnt) Return SalesFlatOrderItem objects filtered by the base_weee_tax_applied_row_amnt column
 * @method array findByWeeeTaxAppliedAmount(string $weee_tax_applied_amount) Return SalesFlatOrderItem objects filtered by the weee_tax_applied_amount column
 * @method array findByWeeeTaxAppliedRowAmount(string $weee_tax_applied_row_amount) Return SalesFlatOrderItem objects filtered by the weee_tax_applied_row_amount column
 * @method array findByWeeeTaxApplied(string $weee_tax_applied) Return SalesFlatOrderItem objects filtered by the weee_tax_applied column
 * @method array findByWeeeTaxDisposition(string $weee_tax_disposition) Return SalesFlatOrderItem objects filtered by the weee_tax_disposition column
 * @method array findByWeeeTaxRowDisposition(string $weee_tax_row_disposition) Return SalesFlatOrderItem objects filtered by the weee_tax_row_disposition column
 * @method array findByBaseWeeeTaxDisposition(string $base_weee_tax_disposition) Return SalesFlatOrderItem objects filtered by the base_weee_tax_disposition column
 * @method array findByBaseWeeeTaxRowDisposition(string $base_weee_tax_row_disposition) Return SalesFlatOrderItem objects filtered by the base_weee_tax_row_disposition column
 * @method array findByCrcId(int $crc_id) Return SalesFlatOrderItem objects filtered by the crc_id column
 * @method array findByEventId(int $event_id) Return SalesFlatOrderItem objects filtered by the event_id column
 * @method array findByGiftregistryItemId(int $giftregistry_item_id) Return SalesFlatOrderItem objects filtered by the giftregistry_item_id column
 * @method array findByGwId(int $gw_id) Return SalesFlatOrderItem objects filtered by the gw_id column
 * @method array findByGwBasePrice(string $gw_base_price) Return SalesFlatOrderItem objects filtered by the gw_base_price column
 * @method array findByGwPrice(string $gw_price) Return SalesFlatOrderItem objects filtered by the gw_price column
 * @method array findByGwBaseTaxAmount(string $gw_base_tax_amount) Return SalesFlatOrderItem objects filtered by the gw_base_tax_amount column
 * @method array findByGwTaxAmount(string $gw_tax_amount) Return SalesFlatOrderItem objects filtered by the gw_tax_amount column
 * @method array findByGwBasePriceInvoiced(string $gw_base_price_invoiced) Return SalesFlatOrderItem objects filtered by the gw_base_price_invoiced column
 * @method array findByGwPriceInvoiced(string $gw_price_invoiced) Return SalesFlatOrderItem objects filtered by the gw_price_invoiced column
 * @method array findByGwBaseTaxAmountInvoiced(string $gw_base_tax_amount_invoiced) Return SalesFlatOrderItem objects filtered by the gw_base_tax_amount_invoiced column
 * @method array findByGwTaxAmountInvoiced(string $gw_tax_amount_invoiced) Return SalesFlatOrderItem objects filtered by the gw_tax_amount_invoiced column
 * @method array findByGwBasePriceRefunded(string $gw_base_price_refunded) Return SalesFlatOrderItem objects filtered by the gw_base_price_refunded column
 * @method array findByGwPriceRefunded(string $gw_price_refunded) Return SalesFlatOrderItem objects filtered by the gw_price_refunded column
 * @method array findByGwBaseTaxAmountRefunded(string $gw_base_tax_amount_refunded) Return SalesFlatOrderItem objects filtered by the gw_base_tax_amount_refunded column
 * @method array findByGwTaxAmountRefunded(string $gw_tax_amount_refunded) Return SalesFlatOrderItem objects filtered by the gw_tax_amount_refunded column
 * @method array findByQtyReturned(string $qty_returned) Return SalesFlatOrderItem objects filtered by the qty_returned column
 * @method array findByQtyRedeemed(string $qty_redeemed) Return SalesFlatOrderItem objects filtered by the qty_redeemed column
 * @method array findByConsultant(string $consultant) Return SalesFlatOrderItem objects filtered by the consultant column
 * @method array findByParentProductId(int $parent_product_id) Return SalesFlatOrderItem objects filtered by the parent_product_id column
 * @method array findByQtyToRedeem(int $qty_to_redeem) Return SalesFlatOrderItem objects filtered by the qty_to_redeem column
 * @method array findByRewardsUsedDetail(string $rewards_used_detail) Return SalesFlatOrderItem objects filtered by the rewards_used_detail column
 *
 * @package    propel.generator.atmadmin.om
 */
abstract class BaseSalesFlatOrderItemQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSalesFlatOrderItemQuery object.
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
            $modelName = 'SalesFlatOrderItem';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SalesFlatOrderItemQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SalesFlatOrderItemQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SalesFlatOrderItemQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SalesFlatOrderItemQuery) {
            return $criteria;
        }
        $query = new SalesFlatOrderItemQuery(null, null, $modelAlias);

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
     * @return   SalesFlatOrderItem|SalesFlatOrderItem[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SalesFlatOrderItemPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SalesFlatOrderItemPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 SalesFlatOrderItem A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByItemId($key, $con = null)
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
     * @return                 SalesFlatOrderItem A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT item_id, order_id, parent_item_id, quote_item_id, store_id, created_at, updated_at, product_id, product_type, product_options, weight, is_virtual, sku, name, description, applied_rule_ids, additional_data, free_shipping, is_qty_decimal, no_discount, qty_backordered, qty_canceled, qty_invoiced, qty_ordered, qty_refunded, qty_shipped, base_cost, price, base_price, original_price, base_original_price, tax_percent, tax_amount, base_tax_amount, tax_invoiced, base_tax_invoiced, discount_percent, discount_amount, base_discount_amount, discount_invoiced, base_discount_invoiced, amount_refunded, base_amount_refunded, row_total, base_row_total, row_invoiced, base_row_invoiced, row_weight, base_tax_before_discount, tax_before_discount, ext_order_item_id, locked_do_invoice, locked_do_ship, price_incl_tax, base_price_incl_tax, row_total_incl_tax, base_row_total_incl_tax, hidden_tax_amount, base_hidden_tax_amount, hidden_tax_invoiced, base_hidden_tax_invoiced, hidden_tax_refunded, base_hidden_tax_refunded, is_nominal, tax_canceled, hidden_tax_canceled, tax_refunded, base_tax_refunded, discount_refunded, base_discount_refunded, gift_message_id, gift_message_available, base_weee_tax_applied_amount, base_weee_tax_applied_row_amnt, weee_tax_applied_amount, weee_tax_applied_row_amount, weee_tax_applied, weee_tax_disposition, weee_tax_row_disposition, base_weee_tax_disposition, base_weee_tax_row_disposition, crc_id, event_id, giftregistry_item_id, gw_id, gw_base_price, gw_price, gw_base_tax_amount, gw_tax_amount, gw_base_price_invoiced, gw_price_invoiced, gw_base_tax_amount_invoiced, gw_tax_amount_invoiced, gw_base_price_refunded, gw_price_refunded, gw_base_tax_amount_refunded, gw_tax_amount_refunded, qty_returned, qty_redeemed, consultant, parent_product_id, qty_to_redeem, rewards_used_detail FROM sales_flat_order_item WHERE item_id = :p0';
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
            $obj = new SalesFlatOrderItem();
            $obj->hydrate($row);
            SalesFlatOrderItemPeer::addInstanceToPool($obj, (string) $key);
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
     * @return SalesFlatOrderItem|SalesFlatOrderItem[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|SalesFlatOrderItem[]|mixed the list of results, formatted by the current formatter
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SalesFlatOrderItemPeer::ITEM_ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SalesFlatOrderItemPeer::ITEM_ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByItemId(1234); // WHERE item_id = 1234
     * $query->filterByItemId(array(12, 34)); // WHERE item_id IN (12, 34)
     * $query->filterByItemId(array('min' => 12)); // WHERE item_id >= 12
     * $query->filterByItemId(array('max' => 12)); // WHERE item_id <= 12
     * </code>
     *
     * @param     mixed $itemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByItemId($itemId = null, $comparison = null)
    {
        if (is_array($itemId)) {
            $useMinMax = false;
            if (isset($itemId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ITEM_ID, $itemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($itemId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ITEM_ID, $itemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::ITEM_ID, $itemId, $comparison);
    }

    /**
     * Filter the query on the order_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOrderId(1234); // WHERE order_id = 1234
     * $query->filterByOrderId(array(12, 34)); // WHERE order_id IN (12, 34)
     * $query->filterByOrderId(array('min' => 12)); // WHERE order_id >= 12
     * $query->filterByOrderId(array('max' => 12)); // WHERE order_id <= 12
     * </code>
     *
     * @see       filterBySalesFlatOrder()
     *
     * @param     mixed $orderId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByOrderId($orderId = null, $comparison = null)
    {
        if (is_array($orderId)) {
            $useMinMax = false;
            if (isset($orderId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ORDER_ID, $orderId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($orderId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ORDER_ID, $orderId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::ORDER_ID, $orderId, $comparison);
    }

    /**
     * Filter the query on the parent_item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByParentItemId(1234); // WHERE parent_item_id = 1234
     * $query->filterByParentItemId(array(12, 34)); // WHERE parent_item_id IN (12, 34)
     * $query->filterByParentItemId(array('min' => 12)); // WHERE parent_item_id >= 12
     * $query->filterByParentItemId(array('max' => 12)); // WHERE parent_item_id <= 12
     * </code>
     *
     * @param     mixed $parentItemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByParentItemId($parentItemId = null, $comparison = null)
    {
        if (is_array($parentItemId)) {
            $useMinMax = false;
            if (isset($parentItemId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::PARENT_ITEM_ID, $parentItemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parentItemId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::PARENT_ITEM_ID, $parentItemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::PARENT_ITEM_ID, $parentItemId, $comparison);
    }

    /**
     * Filter the query on the quote_item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByQuoteItemId(1234); // WHERE quote_item_id = 1234
     * $query->filterByQuoteItemId(array(12, 34)); // WHERE quote_item_id IN (12, 34)
     * $query->filterByQuoteItemId(array('min' => 12)); // WHERE quote_item_id >= 12
     * $query->filterByQuoteItemId(array('max' => 12)); // WHERE quote_item_id <= 12
     * </code>
     *
     * @param     mixed $quoteItemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByQuoteItemId($quoteItemId = null, $comparison = null)
    {
        if (is_array($quoteItemId)) {
            $useMinMax = false;
            if (isset($quoteItemId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QUOTE_ITEM_ID, $quoteItemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quoteItemId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QUOTE_ITEM_ID, $quoteItemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::QUOTE_ITEM_ID, $quoteItemId, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByStoreId($storeId = null, $comparison = null)
    {
        if (is_array($storeId)) {
            $useMinMax = false;
            if (isset($storeId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::STORE_ID, $storeId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($storeId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::STORE_ID, $storeId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::STORE_ID, $storeId, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the product_id column
     *
     * Example usage:
     * <code>
     * $query->filterByProductId(1234); // WHERE product_id = 1234
     * $query->filterByProductId(array(12, 34)); // WHERE product_id IN (12, 34)
     * $query->filterByProductId(array('min' => 12)); // WHERE product_id >= 12
     * $query->filterByProductId(array('max' => 12)); // WHERE product_id <= 12
     * </code>
     *
     * @param     mixed $productId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByProductId($productId = null, $comparison = null)
    {
        if (is_array($productId)) {
            $useMinMax = false;
            if (isset($productId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::PRODUCT_ID, $productId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::PRODUCT_ID, $productId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::PRODUCT_ID, $productId, $comparison);
    }

    /**
     * Filter the query on the product_type column
     *
     * Example usage:
     * <code>
     * $query->filterByProductType('fooValue');   // WHERE product_type = 'fooValue'
     * $query->filterByProductType('%fooValue%'); // WHERE product_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByProductType($productType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productType)) {
                $productType = str_replace('*', '%', $productType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::PRODUCT_TYPE, $productType, $comparison);
    }

    /**
     * Filter the query on the product_options column
     *
     * Example usage:
     * <code>
     * $query->filterByProductOptions('fooValue');   // WHERE product_options = 'fooValue'
     * $query->filterByProductOptions('%fooValue%'); // WHERE product_options LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productOptions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByProductOptions($productOptions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productOptions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productOptions)) {
                $productOptions = str_replace('*', '%', $productOptions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::PRODUCT_OPTIONS, $productOptions, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByWeight($weight = null, $comparison = null)
    {
        if (is_array($weight)) {
            $useMinMax = false;
            if (isset($weight['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::WEIGHT, $weight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weight['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::WEIGHT, $weight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::WEIGHT, $weight, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByIsVirtual($isVirtual = null, $comparison = null)
    {
        if (is_array($isVirtual)) {
            $useMinMax = false;
            if (isset($isVirtual['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::IS_VIRTUAL, $isVirtual['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isVirtual['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::IS_VIRTUAL, $isVirtual['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::IS_VIRTUAL, $isVirtual, $comparison);
    }

    /**
     * Filter the query on the sku column
     *
     * Example usage:
     * <code>
     * $query->filterBySku('fooValue');   // WHERE sku = 'fooValue'
     * $query->filterBySku('%fooValue%'); // WHERE sku LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sku The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterBySku($sku = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sku)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sku)) {
                $sku = str_replace('*', '%', $sku);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::SKU, $sku, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::DESCRIPTION, $description, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
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

        return $this->addUsingAlias(SalesFlatOrderItemPeer::APPLIED_RULE_IDS, $appliedRuleIds, $comparison);
    }

    /**
     * Filter the query on the additional_data column
     *
     * Example usage:
     * <code>
     * $query->filterByAdditionalData('fooValue');   // WHERE additional_data = 'fooValue'
     * $query->filterByAdditionalData('%fooValue%'); // WHERE additional_data LIKE '%fooValue%'
     * </code>
     *
     * @param     string $additionalData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByAdditionalData($additionalData = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($additionalData)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $additionalData)) {
                $additionalData = str_replace('*', '%', $additionalData);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::ADDITIONAL_DATA, $additionalData, $comparison);
    }

    /**
     * Filter the query on the free_shipping column
     *
     * Example usage:
     * <code>
     * $query->filterByFreeShipping(1234); // WHERE free_shipping = 1234
     * $query->filterByFreeShipping(array(12, 34)); // WHERE free_shipping IN (12, 34)
     * $query->filterByFreeShipping(array('min' => 12)); // WHERE free_shipping >= 12
     * $query->filterByFreeShipping(array('max' => 12)); // WHERE free_shipping <= 12
     * </code>
     *
     * @param     mixed $freeShipping The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByFreeShipping($freeShipping = null, $comparison = null)
    {
        if (is_array($freeShipping)) {
            $useMinMax = false;
            if (isset($freeShipping['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::FREE_SHIPPING, $freeShipping['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($freeShipping['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::FREE_SHIPPING, $freeShipping['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::FREE_SHIPPING, $freeShipping, $comparison);
    }

    /**
     * Filter the query on the is_qty_decimal column
     *
     * Example usage:
     * <code>
     * $query->filterByIsQtyDecimal(1234); // WHERE is_qty_decimal = 1234
     * $query->filterByIsQtyDecimal(array(12, 34)); // WHERE is_qty_decimal IN (12, 34)
     * $query->filterByIsQtyDecimal(array('min' => 12)); // WHERE is_qty_decimal >= 12
     * $query->filterByIsQtyDecimal(array('max' => 12)); // WHERE is_qty_decimal <= 12
     * </code>
     *
     * @param     mixed $isQtyDecimal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByIsQtyDecimal($isQtyDecimal = null, $comparison = null)
    {
        if (is_array($isQtyDecimal)) {
            $useMinMax = false;
            if (isset($isQtyDecimal['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::IS_QTY_DECIMAL, $isQtyDecimal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isQtyDecimal['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::IS_QTY_DECIMAL, $isQtyDecimal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::IS_QTY_DECIMAL, $isQtyDecimal, $comparison);
    }

    /**
     * Filter the query on the no_discount column
     *
     * Example usage:
     * <code>
     * $query->filterByNoDiscount(1234); // WHERE no_discount = 1234
     * $query->filterByNoDiscount(array(12, 34)); // WHERE no_discount IN (12, 34)
     * $query->filterByNoDiscount(array('min' => 12)); // WHERE no_discount >= 12
     * $query->filterByNoDiscount(array('max' => 12)); // WHERE no_discount <= 12
     * </code>
     *
     * @param     mixed $noDiscount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByNoDiscount($noDiscount = null, $comparison = null)
    {
        if (is_array($noDiscount)) {
            $useMinMax = false;
            if (isset($noDiscount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::NO_DISCOUNT, $noDiscount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($noDiscount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::NO_DISCOUNT, $noDiscount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::NO_DISCOUNT, $noDiscount, $comparison);
    }

    /**
     * Filter the query on the qty_backordered column
     *
     * Example usage:
     * <code>
     * $query->filterByQtyBackordered(1234); // WHERE qty_backordered = 1234
     * $query->filterByQtyBackordered(array(12, 34)); // WHERE qty_backordered IN (12, 34)
     * $query->filterByQtyBackordered(array('min' => 12)); // WHERE qty_backordered >= 12
     * $query->filterByQtyBackordered(array('max' => 12)); // WHERE qty_backordered <= 12
     * </code>
     *
     * @param     mixed $qtyBackordered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByQtyBackordered($qtyBackordered = null, $comparison = null)
    {
        if (is_array($qtyBackordered)) {
            $useMinMax = false;
            if (isset($qtyBackordered['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_BACKORDERED, $qtyBackordered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtyBackordered['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_BACKORDERED, $qtyBackordered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_BACKORDERED, $qtyBackordered, $comparison);
    }

    /**
     * Filter the query on the qty_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByQtyCanceled(1234); // WHERE qty_canceled = 1234
     * $query->filterByQtyCanceled(array(12, 34)); // WHERE qty_canceled IN (12, 34)
     * $query->filterByQtyCanceled(array('min' => 12)); // WHERE qty_canceled >= 12
     * $query->filterByQtyCanceled(array('max' => 12)); // WHERE qty_canceled <= 12
     * </code>
     *
     * @param     mixed $qtyCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByQtyCanceled($qtyCanceled = null, $comparison = null)
    {
        if (is_array($qtyCanceled)) {
            $useMinMax = false;
            if (isset($qtyCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_CANCELED, $qtyCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtyCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_CANCELED, $qtyCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_CANCELED, $qtyCanceled, $comparison);
    }

    /**
     * Filter the query on the qty_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByQtyInvoiced(1234); // WHERE qty_invoiced = 1234
     * $query->filterByQtyInvoiced(array(12, 34)); // WHERE qty_invoiced IN (12, 34)
     * $query->filterByQtyInvoiced(array('min' => 12)); // WHERE qty_invoiced >= 12
     * $query->filterByQtyInvoiced(array('max' => 12)); // WHERE qty_invoiced <= 12
     * </code>
     *
     * @param     mixed $qtyInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByQtyInvoiced($qtyInvoiced = null, $comparison = null)
    {
        if (is_array($qtyInvoiced)) {
            $useMinMax = false;
            if (isset($qtyInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_INVOICED, $qtyInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtyInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_INVOICED, $qtyInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_INVOICED, $qtyInvoiced, $comparison);
    }

    /**
     * Filter the query on the qty_ordered column
     *
     * Example usage:
     * <code>
     * $query->filterByQtyOrdered(1234); // WHERE qty_ordered = 1234
     * $query->filterByQtyOrdered(array(12, 34)); // WHERE qty_ordered IN (12, 34)
     * $query->filterByQtyOrdered(array('min' => 12)); // WHERE qty_ordered >= 12
     * $query->filterByQtyOrdered(array('max' => 12)); // WHERE qty_ordered <= 12
     * </code>
     *
     * @param     mixed $qtyOrdered The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByQtyOrdered($qtyOrdered = null, $comparison = null)
    {
        if (is_array($qtyOrdered)) {
            $useMinMax = false;
            if (isset($qtyOrdered['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_ORDERED, $qtyOrdered['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtyOrdered['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_ORDERED, $qtyOrdered['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_ORDERED, $qtyOrdered, $comparison);
    }

    /**
     * Filter the query on the qty_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByQtyRefunded(1234); // WHERE qty_refunded = 1234
     * $query->filterByQtyRefunded(array(12, 34)); // WHERE qty_refunded IN (12, 34)
     * $query->filterByQtyRefunded(array('min' => 12)); // WHERE qty_refunded >= 12
     * $query->filterByQtyRefunded(array('max' => 12)); // WHERE qty_refunded <= 12
     * </code>
     *
     * @param     mixed $qtyRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByQtyRefunded($qtyRefunded = null, $comparison = null)
    {
        if (is_array($qtyRefunded)) {
            $useMinMax = false;
            if (isset($qtyRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_REFUNDED, $qtyRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtyRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_REFUNDED, $qtyRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_REFUNDED, $qtyRefunded, $comparison);
    }

    /**
     * Filter the query on the qty_shipped column
     *
     * Example usage:
     * <code>
     * $query->filterByQtyShipped(1234); // WHERE qty_shipped = 1234
     * $query->filterByQtyShipped(array(12, 34)); // WHERE qty_shipped IN (12, 34)
     * $query->filterByQtyShipped(array('min' => 12)); // WHERE qty_shipped >= 12
     * $query->filterByQtyShipped(array('max' => 12)); // WHERE qty_shipped <= 12
     * </code>
     *
     * @param     mixed $qtyShipped The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByQtyShipped($qtyShipped = null, $comparison = null)
    {
        if (is_array($qtyShipped)) {
            $useMinMax = false;
            if (isset($qtyShipped['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_SHIPPED, $qtyShipped['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtyShipped['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_SHIPPED, $qtyShipped['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_SHIPPED, $qtyShipped, $comparison);
    }

    /**
     * Filter the query on the base_cost column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseCost(1234); // WHERE base_cost = 1234
     * $query->filterByBaseCost(array(12, 34)); // WHERE base_cost IN (12, 34)
     * $query->filterByBaseCost(array('min' => 12)); // WHERE base_cost >= 12
     * $query->filterByBaseCost(array('max' => 12)); // WHERE base_cost <= 12
     * </code>
     *
     * @param     mixed $baseCost The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseCost($baseCost = null, $comparison = null)
    {
        if (is_array($baseCost)) {
            $useMinMax = false;
            if (isset($baseCost['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_COST, $baseCost['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseCost['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_COST, $baseCost['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_COST, $baseCost, $comparison);
    }

    /**
     * Filter the query on the price column
     *
     * Example usage:
     * <code>
     * $query->filterByPrice(1234); // WHERE price = 1234
     * $query->filterByPrice(array(12, 34)); // WHERE price IN (12, 34)
     * $query->filterByPrice(array('min' => 12)); // WHERE price >= 12
     * $query->filterByPrice(array('max' => 12)); // WHERE price <= 12
     * </code>
     *
     * @param     mixed $price The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByPrice($price = null, $comparison = null)
    {
        if (is_array($price)) {
            $useMinMax = false;
            if (isset($price['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::PRICE, $price['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($price['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::PRICE, $price['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::PRICE, $price, $comparison);
    }

    /**
     * Filter the query on the base_price column
     *
     * Example usage:
     * <code>
     * $query->filterByBasePrice(1234); // WHERE base_price = 1234
     * $query->filterByBasePrice(array(12, 34)); // WHERE base_price IN (12, 34)
     * $query->filterByBasePrice(array('min' => 12)); // WHERE base_price >= 12
     * $query->filterByBasePrice(array('max' => 12)); // WHERE base_price <= 12
     * </code>
     *
     * @param     mixed $basePrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBasePrice($basePrice = null, $comparison = null)
    {
        if (is_array($basePrice)) {
            $useMinMax = false;
            if (isset($basePrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_PRICE, $basePrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basePrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_PRICE, $basePrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_PRICE, $basePrice, $comparison);
    }

    /**
     * Filter the query on the original_price column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalPrice(1234); // WHERE original_price = 1234
     * $query->filterByOriginalPrice(array(12, 34)); // WHERE original_price IN (12, 34)
     * $query->filterByOriginalPrice(array('min' => 12)); // WHERE original_price >= 12
     * $query->filterByOriginalPrice(array('max' => 12)); // WHERE original_price <= 12
     * </code>
     *
     * @param     mixed $originalPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByOriginalPrice($originalPrice = null, $comparison = null)
    {
        if (is_array($originalPrice)) {
            $useMinMax = false;
            if (isset($originalPrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ORIGINAL_PRICE, $originalPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($originalPrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ORIGINAL_PRICE, $originalPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::ORIGINAL_PRICE, $originalPrice, $comparison);
    }

    /**
     * Filter the query on the base_original_price column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseOriginalPrice(1234); // WHERE base_original_price = 1234
     * $query->filterByBaseOriginalPrice(array(12, 34)); // WHERE base_original_price IN (12, 34)
     * $query->filterByBaseOriginalPrice(array('min' => 12)); // WHERE base_original_price >= 12
     * $query->filterByBaseOriginalPrice(array('max' => 12)); // WHERE base_original_price <= 12
     * </code>
     *
     * @param     mixed $baseOriginalPrice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseOriginalPrice($baseOriginalPrice = null, $comparison = null)
    {
        if (is_array($baseOriginalPrice)) {
            $useMinMax = false;
            if (isset($baseOriginalPrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ORIGINAL_PRICE, $baseOriginalPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseOriginalPrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ORIGINAL_PRICE, $baseOriginalPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ORIGINAL_PRICE, $baseOriginalPrice, $comparison);
    }

    /**
     * Filter the query on the tax_percent column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxPercent(1234); // WHERE tax_percent = 1234
     * $query->filterByTaxPercent(array(12, 34)); // WHERE tax_percent IN (12, 34)
     * $query->filterByTaxPercent(array('min' => 12)); // WHERE tax_percent >= 12
     * $query->filterByTaxPercent(array('max' => 12)); // WHERE tax_percent <= 12
     * </code>
     *
     * @param     mixed $taxPercent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByTaxPercent($taxPercent = null, $comparison = null)
    {
        if (is_array($taxPercent)) {
            $useMinMax = false;
            if (isset($taxPercent['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_PERCENT, $taxPercent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxPercent['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_PERCENT, $taxPercent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_PERCENT, $taxPercent, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByTaxAmount($taxAmount = null, $comparison = null)
    {
        if (is_array($taxAmount)) {
            $useMinMax = false;
            if (isset($taxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_AMOUNT, $taxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_AMOUNT, $taxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_AMOUNT, $taxAmount, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseTaxAmount($baseTaxAmount = null, $comparison = null)
    {
        if (is_array($baseTaxAmount)) {
            $useMinMax = false;
            if (isset($baseTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_AMOUNT, $baseTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_AMOUNT, $baseTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_AMOUNT, $baseTaxAmount, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByTaxInvoiced($taxInvoiced = null, $comparison = null)
    {
        if (is_array($taxInvoiced)) {
            $useMinMax = false;
            if (isset($taxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_INVOICED, $taxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_INVOICED, $taxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_INVOICED, $taxInvoiced, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseTaxInvoiced($baseTaxInvoiced = null, $comparison = null)
    {
        if (is_array($baseTaxInvoiced)) {
            $useMinMax = false;
            if (isset($baseTaxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_INVOICED, $baseTaxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTaxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_INVOICED, $baseTaxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_INVOICED, $baseTaxInvoiced, $comparison);
    }

    /**
     * Filter the query on the discount_percent column
     *
     * Example usage:
     * <code>
     * $query->filterByDiscountPercent(1234); // WHERE discount_percent = 1234
     * $query->filterByDiscountPercent(array(12, 34)); // WHERE discount_percent IN (12, 34)
     * $query->filterByDiscountPercent(array('min' => 12)); // WHERE discount_percent >= 12
     * $query->filterByDiscountPercent(array('max' => 12)); // WHERE discount_percent <= 12
     * </code>
     *
     * @param     mixed $discountPercent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByDiscountPercent($discountPercent = null, $comparison = null)
    {
        if (is_array($discountPercent)) {
            $useMinMax = false;
            if (isset($discountPercent['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_PERCENT, $discountPercent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountPercent['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_PERCENT, $discountPercent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_PERCENT, $discountPercent, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByDiscountAmount($discountAmount = null, $comparison = null)
    {
        if (is_array($discountAmount)) {
            $useMinMax = false;
            if (isset($discountAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_AMOUNT, $discountAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_AMOUNT, $discountAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_AMOUNT, $discountAmount, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseDiscountAmount($baseDiscountAmount = null, $comparison = null)
    {
        if (is_array($baseDiscountAmount)) {
            $useMinMax = false;
            if (isset($baseDiscountAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_DISCOUNT_AMOUNT, $baseDiscountAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseDiscountAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_DISCOUNT_AMOUNT, $baseDiscountAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_DISCOUNT_AMOUNT, $baseDiscountAmount, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByDiscountInvoiced($discountInvoiced = null, $comparison = null)
    {
        if (is_array($discountInvoiced)) {
            $useMinMax = false;
            if (isset($discountInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_INVOICED, $discountInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_INVOICED, $discountInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_INVOICED, $discountInvoiced, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseDiscountInvoiced($baseDiscountInvoiced = null, $comparison = null)
    {
        if (is_array($baseDiscountInvoiced)) {
            $useMinMax = false;
            if (isset($baseDiscountInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_DISCOUNT_INVOICED, $baseDiscountInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseDiscountInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_DISCOUNT_INVOICED, $baseDiscountInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_DISCOUNT_INVOICED, $baseDiscountInvoiced, $comparison);
    }

    /**
     * Filter the query on the amount_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByAmountRefunded(1234); // WHERE amount_refunded = 1234
     * $query->filterByAmountRefunded(array(12, 34)); // WHERE amount_refunded IN (12, 34)
     * $query->filterByAmountRefunded(array('min' => 12)); // WHERE amount_refunded >= 12
     * $query->filterByAmountRefunded(array('max' => 12)); // WHERE amount_refunded <= 12
     * </code>
     *
     * @param     mixed $amountRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByAmountRefunded($amountRefunded = null, $comparison = null)
    {
        if (is_array($amountRefunded)) {
            $useMinMax = false;
            if (isset($amountRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::AMOUNT_REFUNDED, $amountRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($amountRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::AMOUNT_REFUNDED, $amountRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::AMOUNT_REFUNDED, $amountRefunded, $comparison);
    }

    /**
     * Filter the query on the base_amount_refunded column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseAmountRefunded(1234); // WHERE base_amount_refunded = 1234
     * $query->filterByBaseAmountRefunded(array(12, 34)); // WHERE base_amount_refunded IN (12, 34)
     * $query->filterByBaseAmountRefunded(array('min' => 12)); // WHERE base_amount_refunded >= 12
     * $query->filterByBaseAmountRefunded(array('max' => 12)); // WHERE base_amount_refunded <= 12
     * </code>
     *
     * @param     mixed $baseAmountRefunded The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseAmountRefunded($baseAmountRefunded = null, $comparison = null)
    {
        if (is_array($baseAmountRefunded)) {
            $useMinMax = false;
            if (isset($baseAmountRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_AMOUNT_REFUNDED, $baseAmountRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseAmountRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_AMOUNT_REFUNDED, $baseAmountRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_AMOUNT_REFUNDED, $baseAmountRefunded, $comparison);
    }

    /**
     * Filter the query on the row_total column
     *
     * Example usage:
     * <code>
     * $query->filterByRowTotal(1234); // WHERE row_total = 1234
     * $query->filterByRowTotal(array(12, 34)); // WHERE row_total IN (12, 34)
     * $query->filterByRowTotal(array('min' => 12)); // WHERE row_total >= 12
     * $query->filterByRowTotal(array('max' => 12)); // WHERE row_total <= 12
     * </code>
     *
     * @param     mixed $rowTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByRowTotal($rowTotal = null, $comparison = null)
    {
        if (is_array($rowTotal)) {
            $useMinMax = false;
            if (isset($rowTotal['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_TOTAL, $rowTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rowTotal['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_TOTAL, $rowTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_TOTAL, $rowTotal, $comparison);
    }

    /**
     * Filter the query on the base_row_total column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseRowTotal(1234); // WHERE base_row_total = 1234
     * $query->filterByBaseRowTotal(array(12, 34)); // WHERE base_row_total IN (12, 34)
     * $query->filterByBaseRowTotal(array('min' => 12)); // WHERE base_row_total >= 12
     * $query->filterByBaseRowTotal(array('max' => 12)); // WHERE base_row_total <= 12
     * </code>
     *
     * @param     mixed $baseRowTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseRowTotal($baseRowTotal = null, $comparison = null)
    {
        if (is_array($baseRowTotal)) {
            $useMinMax = false;
            if (isset($baseRowTotal['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ROW_TOTAL, $baseRowTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseRowTotal['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ROW_TOTAL, $baseRowTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ROW_TOTAL, $baseRowTotal, $comparison);
    }

    /**
     * Filter the query on the row_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByRowInvoiced(1234); // WHERE row_invoiced = 1234
     * $query->filterByRowInvoiced(array(12, 34)); // WHERE row_invoiced IN (12, 34)
     * $query->filterByRowInvoiced(array('min' => 12)); // WHERE row_invoiced >= 12
     * $query->filterByRowInvoiced(array('max' => 12)); // WHERE row_invoiced <= 12
     * </code>
     *
     * @param     mixed $rowInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByRowInvoiced($rowInvoiced = null, $comparison = null)
    {
        if (is_array($rowInvoiced)) {
            $useMinMax = false;
            if (isset($rowInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_INVOICED, $rowInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rowInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_INVOICED, $rowInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_INVOICED, $rowInvoiced, $comparison);
    }

    /**
     * Filter the query on the base_row_invoiced column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseRowInvoiced(1234); // WHERE base_row_invoiced = 1234
     * $query->filterByBaseRowInvoiced(array(12, 34)); // WHERE base_row_invoiced IN (12, 34)
     * $query->filterByBaseRowInvoiced(array('min' => 12)); // WHERE base_row_invoiced >= 12
     * $query->filterByBaseRowInvoiced(array('max' => 12)); // WHERE base_row_invoiced <= 12
     * </code>
     *
     * @param     mixed $baseRowInvoiced The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseRowInvoiced($baseRowInvoiced = null, $comparison = null)
    {
        if (is_array($baseRowInvoiced)) {
            $useMinMax = false;
            if (isset($baseRowInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ROW_INVOICED, $baseRowInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseRowInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ROW_INVOICED, $baseRowInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ROW_INVOICED, $baseRowInvoiced, $comparison);
    }

    /**
     * Filter the query on the row_weight column
     *
     * Example usage:
     * <code>
     * $query->filterByRowWeight(1234); // WHERE row_weight = 1234
     * $query->filterByRowWeight(array(12, 34)); // WHERE row_weight IN (12, 34)
     * $query->filterByRowWeight(array('min' => 12)); // WHERE row_weight >= 12
     * $query->filterByRowWeight(array('max' => 12)); // WHERE row_weight <= 12
     * </code>
     *
     * @param     mixed $rowWeight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByRowWeight($rowWeight = null, $comparison = null)
    {
        if (is_array($rowWeight)) {
            $useMinMax = false;
            if (isset($rowWeight['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_WEIGHT, $rowWeight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rowWeight['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_WEIGHT, $rowWeight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_WEIGHT, $rowWeight, $comparison);
    }

    /**
     * Filter the query on the base_tax_before_discount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseTaxBeforeDiscount(1234); // WHERE base_tax_before_discount = 1234
     * $query->filterByBaseTaxBeforeDiscount(array(12, 34)); // WHERE base_tax_before_discount IN (12, 34)
     * $query->filterByBaseTaxBeforeDiscount(array('min' => 12)); // WHERE base_tax_before_discount >= 12
     * $query->filterByBaseTaxBeforeDiscount(array('max' => 12)); // WHERE base_tax_before_discount <= 12
     * </code>
     *
     * @param     mixed $baseTaxBeforeDiscount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseTaxBeforeDiscount($baseTaxBeforeDiscount = null, $comparison = null)
    {
        if (is_array($baseTaxBeforeDiscount)) {
            $useMinMax = false;
            if (isset($baseTaxBeforeDiscount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_BEFORE_DISCOUNT, $baseTaxBeforeDiscount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTaxBeforeDiscount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_BEFORE_DISCOUNT, $baseTaxBeforeDiscount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_BEFORE_DISCOUNT, $baseTaxBeforeDiscount, $comparison);
    }

    /**
     * Filter the query on the tax_before_discount column
     *
     * Example usage:
     * <code>
     * $query->filterByTaxBeforeDiscount(1234); // WHERE tax_before_discount = 1234
     * $query->filterByTaxBeforeDiscount(array(12, 34)); // WHERE tax_before_discount IN (12, 34)
     * $query->filterByTaxBeforeDiscount(array('min' => 12)); // WHERE tax_before_discount >= 12
     * $query->filterByTaxBeforeDiscount(array('max' => 12)); // WHERE tax_before_discount <= 12
     * </code>
     *
     * @param     mixed $taxBeforeDiscount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByTaxBeforeDiscount($taxBeforeDiscount = null, $comparison = null)
    {
        if (is_array($taxBeforeDiscount)) {
            $useMinMax = false;
            if (isset($taxBeforeDiscount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_BEFORE_DISCOUNT, $taxBeforeDiscount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxBeforeDiscount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_BEFORE_DISCOUNT, $taxBeforeDiscount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_BEFORE_DISCOUNT, $taxBeforeDiscount, $comparison);
    }

    /**
     * Filter the query on the ext_order_item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByExtOrderItemId('fooValue');   // WHERE ext_order_item_id = 'fooValue'
     * $query->filterByExtOrderItemId('%fooValue%'); // WHERE ext_order_item_id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extOrderItemId The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByExtOrderItemId($extOrderItemId = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extOrderItemId)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extOrderItemId)) {
                $extOrderItemId = str_replace('*', '%', $extOrderItemId);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::EXT_ORDER_ITEM_ID, $extOrderItemId, $comparison);
    }

    /**
     * Filter the query on the locked_do_invoice column
     *
     * Example usage:
     * <code>
     * $query->filterByLockedDoInvoice(1234); // WHERE locked_do_invoice = 1234
     * $query->filterByLockedDoInvoice(array(12, 34)); // WHERE locked_do_invoice IN (12, 34)
     * $query->filterByLockedDoInvoice(array('min' => 12)); // WHERE locked_do_invoice >= 12
     * $query->filterByLockedDoInvoice(array('max' => 12)); // WHERE locked_do_invoice <= 12
     * </code>
     *
     * @param     mixed $lockedDoInvoice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByLockedDoInvoice($lockedDoInvoice = null, $comparison = null)
    {
        if (is_array($lockedDoInvoice)) {
            $useMinMax = false;
            if (isset($lockedDoInvoice['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::LOCKED_DO_INVOICE, $lockedDoInvoice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lockedDoInvoice['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::LOCKED_DO_INVOICE, $lockedDoInvoice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::LOCKED_DO_INVOICE, $lockedDoInvoice, $comparison);
    }

    /**
     * Filter the query on the locked_do_ship column
     *
     * Example usage:
     * <code>
     * $query->filterByLockedDoShip(1234); // WHERE locked_do_ship = 1234
     * $query->filterByLockedDoShip(array(12, 34)); // WHERE locked_do_ship IN (12, 34)
     * $query->filterByLockedDoShip(array('min' => 12)); // WHERE locked_do_ship >= 12
     * $query->filterByLockedDoShip(array('max' => 12)); // WHERE locked_do_ship <= 12
     * </code>
     *
     * @param     mixed $lockedDoShip The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByLockedDoShip($lockedDoShip = null, $comparison = null)
    {
        if (is_array($lockedDoShip)) {
            $useMinMax = false;
            if (isset($lockedDoShip['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::LOCKED_DO_SHIP, $lockedDoShip['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lockedDoShip['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::LOCKED_DO_SHIP, $lockedDoShip['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::LOCKED_DO_SHIP, $lockedDoShip, $comparison);
    }

    /**
     * Filter the query on the price_incl_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByPriceInclTax(1234); // WHERE price_incl_tax = 1234
     * $query->filterByPriceInclTax(array(12, 34)); // WHERE price_incl_tax IN (12, 34)
     * $query->filterByPriceInclTax(array('min' => 12)); // WHERE price_incl_tax >= 12
     * $query->filterByPriceInclTax(array('max' => 12)); // WHERE price_incl_tax <= 12
     * </code>
     *
     * @param     mixed $priceInclTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByPriceInclTax($priceInclTax = null, $comparison = null)
    {
        if (is_array($priceInclTax)) {
            $useMinMax = false;
            if (isset($priceInclTax['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::PRICE_INCL_TAX, $priceInclTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($priceInclTax['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::PRICE_INCL_TAX, $priceInclTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::PRICE_INCL_TAX, $priceInclTax, $comparison);
    }

    /**
     * Filter the query on the base_price_incl_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByBasePriceInclTax(1234); // WHERE base_price_incl_tax = 1234
     * $query->filterByBasePriceInclTax(array(12, 34)); // WHERE base_price_incl_tax IN (12, 34)
     * $query->filterByBasePriceInclTax(array('min' => 12)); // WHERE base_price_incl_tax >= 12
     * $query->filterByBasePriceInclTax(array('max' => 12)); // WHERE base_price_incl_tax <= 12
     * </code>
     *
     * @param     mixed $basePriceInclTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBasePriceInclTax($basePriceInclTax = null, $comparison = null)
    {
        if (is_array($basePriceInclTax)) {
            $useMinMax = false;
            if (isset($basePriceInclTax['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_PRICE_INCL_TAX, $basePriceInclTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($basePriceInclTax['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_PRICE_INCL_TAX, $basePriceInclTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_PRICE_INCL_TAX, $basePriceInclTax, $comparison);
    }

    /**
     * Filter the query on the row_total_incl_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByRowTotalInclTax(1234); // WHERE row_total_incl_tax = 1234
     * $query->filterByRowTotalInclTax(array(12, 34)); // WHERE row_total_incl_tax IN (12, 34)
     * $query->filterByRowTotalInclTax(array('min' => 12)); // WHERE row_total_incl_tax >= 12
     * $query->filterByRowTotalInclTax(array('max' => 12)); // WHERE row_total_incl_tax <= 12
     * </code>
     *
     * @param     mixed $rowTotalInclTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByRowTotalInclTax($rowTotalInclTax = null, $comparison = null)
    {
        if (is_array($rowTotalInclTax)) {
            $useMinMax = false;
            if (isset($rowTotalInclTax['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_TOTAL_INCL_TAX, $rowTotalInclTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rowTotalInclTax['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_TOTAL_INCL_TAX, $rowTotalInclTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::ROW_TOTAL_INCL_TAX, $rowTotalInclTax, $comparison);
    }

    /**
     * Filter the query on the base_row_total_incl_tax column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseRowTotalInclTax(1234); // WHERE base_row_total_incl_tax = 1234
     * $query->filterByBaseRowTotalInclTax(array(12, 34)); // WHERE base_row_total_incl_tax IN (12, 34)
     * $query->filterByBaseRowTotalInclTax(array('min' => 12)); // WHERE base_row_total_incl_tax >= 12
     * $query->filterByBaseRowTotalInclTax(array('max' => 12)); // WHERE base_row_total_incl_tax <= 12
     * </code>
     *
     * @param     mixed $baseRowTotalInclTax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseRowTotalInclTax($baseRowTotalInclTax = null, $comparison = null)
    {
        if (is_array($baseRowTotalInclTax)) {
            $useMinMax = false;
            if (isset($baseRowTotalInclTax['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ROW_TOTAL_INCL_TAX, $baseRowTotalInclTax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseRowTotalInclTax['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ROW_TOTAL_INCL_TAX, $baseRowTotalInclTax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_ROW_TOTAL_INCL_TAX, $baseRowTotalInclTax, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByHiddenTaxAmount($hiddenTaxAmount = null, $comparison = null)
    {
        if (is_array($hiddenTaxAmount)) {
            $useMinMax = false;
            if (isset($hiddenTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_AMOUNT, $hiddenTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hiddenTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_AMOUNT, $hiddenTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_AMOUNT, $hiddenTaxAmount, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseHiddenTaxAmount($baseHiddenTaxAmount = null, $comparison = null)
    {
        if (is_array($baseHiddenTaxAmount)) {
            $useMinMax = false;
            if (isset($baseHiddenTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_AMOUNT, $baseHiddenTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseHiddenTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_AMOUNT, $baseHiddenTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_AMOUNT, $baseHiddenTaxAmount, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByHiddenTaxInvoiced($hiddenTaxInvoiced = null, $comparison = null)
    {
        if (is_array($hiddenTaxInvoiced)) {
            $useMinMax = false;
            if (isset($hiddenTaxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_INVOICED, $hiddenTaxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hiddenTaxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_INVOICED, $hiddenTaxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_INVOICED, $hiddenTaxInvoiced, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseHiddenTaxInvoiced($baseHiddenTaxInvoiced = null, $comparison = null)
    {
        if (is_array($baseHiddenTaxInvoiced)) {
            $useMinMax = false;
            if (isset($baseHiddenTaxInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_INVOICED, $baseHiddenTaxInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseHiddenTaxInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_INVOICED, $baseHiddenTaxInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_INVOICED, $baseHiddenTaxInvoiced, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByHiddenTaxRefunded($hiddenTaxRefunded = null, $comparison = null)
    {
        if (is_array($hiddenTaxRefunded)) {
            $useMinMax = false;
            if (isset($hiddenTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_REFUNDED, $hiddenTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hiddenTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_REFUNDED, $hiddenTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_REFUNDED, $hiddenTaxRefunded, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseHiddenTaxRefunded($baseHiddenTaxRefunded = null, $comparison = null)
    {
        if (is_array($baseHiddenTaxRefunded)) {
            $useMinMax = false;
            if (isset($baseHiddenTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_REFUNDED, $baseHiddenTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseHiddenTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_REFUNDED, $baseHiddenTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_HIDDEN_TAX_REFUNDED, $baseHiddenTaxRefunded, $comparison);
    }

    /**
     * Filter the query on the is_nominal column
     *
     * Example usage:
     * <code>
     * $query->filterByIsNominal(1234); // WHERE is_nominal = 1234
     * $query->filterByIsNominal(array(12, 34)); // WHERE is_nominal IN (12, 34)
     * $query->filterByIsNominal(array('min' => 12)); // WHERE is_nominal >= 12
     * $query->filterByIsNominal(array('max' => 12)); // WHERE is_nominal <= 12
     * </code>
     *
     * @param     mixed $isNominal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByIsNominal($isNominal = null, $comparison = null)
    {
        if (is_array($isNominal)) {
            $useMinMax = false;
            if (isset($isNominal['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::IS_NOMINAL, $isNominal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isNominal['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::IS_NOMINAL, $isNominal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::IS_NOMINAL, $isNominal, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByTaxCanceled($taxCanceled = null, $comparison = null)
    {
        if (is_array($taxCanceled)) {
            $useMinMax = false;
            if (isset($taxCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_CANCELED, $taxCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_CANCELED, $taxCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_CANCELED, $taxCanceled, $comparison);
    }

    /**
     * Filter the query on the hidden_tax_canceled column
     *
     * Example usage:
     * <code>
     * $query->filterByHiddenTaxCanceled(1234); // WHERE hidden_tax_canceled = 1234
     * $query->filterByHiddenTaxCanceled(array(12, 34)); // WHERE hidden_tax_canceled IN (12, 34)
     * $query->filterByHiddenTaxCanceled(array('min' => 12)); // WHERE hidden_tax_canceled >= 12
     * $query->filterByHiddenTaxCanceled(array('max' => 12)); // WHERE hidden_tax_canceled <= 12
     * </code>
     *
     * @param     mixed $hiddenTaxCanceled The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByHiddenTaxCanceled($hiddenTaxCanceled = null, $comparison = null)
    {
        if (is_array($hiddenTaxCanceled)) {
            $useMinMax = false;
            if (isset($hiddenTaxCanceled['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_CANCELED, $hiddenTaxCanceled['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($hiddenTaxCanceled['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_CANCELED, $hiddenTaxCanceled['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::HIDDEN_TAX_CANCELED, $hiddenTaxCanceled, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByTaxRefunded($taxRefunded = null, $comparison = null)
    {
        if (is_array($taxRefunded)) {
            $useMinMax = false;
            if (isset($taxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_REFUNDED, $taxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_REFUNDED, $taxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::TAX_REFUNDED, $taxRefunded, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseTaxRefunded($baseTaxRefunded = null, $comparison = null)
    {
        if (is_array($baseTaxRefunded)) {
            $useMinMax = false;
            if (isset($baseTaxRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_REFUNDED, $baseTaxRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseTaxRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_REFUNDED, $baseTaxRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_TAX_REFUNDED, $baseTaxRefunded, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByDiscountRefunded($discountRefunded = null, $comparison = null)
    {
        if (is_array($discountRefunded)) {
            $useMinMax = false;
            if (isset($discountRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_REFUNDED, $discountRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($discountRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_REFUNDED, $discountRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::DISCOUNT_REFUNDED, $discountRefunded, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseDiscountRefunded($baseDiscountRefunded = null, $comparison = null)
    {
        if (is_array($baseDiscountRefunded)) {
            $useMinMax = false;
            if (isset($baseDiscountRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_DISCOUNT_REFUNDED, $baseDiscountRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseDiscountRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_DISCOUNT_REFUNDED, $baseDiscountRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_DISCOUNT_REFUNDED, $baseDiscountRefunded, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGiftMessageId($giftMessageId = null, $comparison = null)
    {
        if (is_array($giftMessageId)) {
            $useMinMax = false;
            if (isset($giftMessageId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GIFT_MESSAGE_ID, $giftMessageId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($giftMessageId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GIFT_MESSAGE_ID, $giftMessageId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GIFT_MESSAGE_ID, $giftMessageId, $comparison);
    }

    /**
     * Filter the query on the gift_message_available column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftMessageAvailable(1234); // WHERE gift_message_available = 1234
     * $query->filterByGiftMessageAvailable(array(12, 34)); // WHERE gift_message_available IN (12, 34)
     * $query->filterByGiftMessageAvailable(array('min' => 12)); // WHERE gift_message_available >= 12
     * $query->filterByGiftMessageAvailable(array('max' => 12)); // WHERE gift_message_available <= 12
     * </code>
     *
     * @param     mixed $giftMessageAvailable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGiftMessageAvailable($giftMessageAvailable = null, $comparison = null)
    {
        if (is_array($giftMessageAvailable)) {
            $useMinMax = false;
            if (isset($giftMessageAvailable['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GIFT_MESSAGE_AVAILABLE, $giftMessageAvailable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($giftMessageAvailable['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GIFT_MESSAGE_AVAILABLE, $giftMessageAvailable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GIFT_MESSAGE_AVAILABLE, $giftMessageAvailable, $comparison);
    }

    /**
     * Filter the query on the base_weee_tax_applied_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseWeeeTaxAppliedAmount(1234); // WHERE base_weee_tax_applied_amount = 1234
     * $query->filterByBaseWeeeTaxAppliedAmount(array(12, 34)); // WHERE base_weee_tax_applied_amount IN (12, 34)
     * $query->filterByBaseWeeeTaxAppliedAmount(array('min' => 12)); // WHERE base_weee_tax_applied_amount >= 12
     * $query->filterByBaseWeeeTaxAppliedAmount(array('max' => 12)); // WHERE base_weee_tax_applied_amount <= 12
     * </code>
     *
     * @param     mixed $baseWeeeTaxAppliedAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseWeeeTaxAppliedAmount($baseWeeeTaxAppliedAmount = null, $comparison = null)
    {
        if (is_array($baseWeeeTaxAppliedAmount)) {
            $useMinMax = false;
            if (isset($baseWeeeTaxAppliedAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_AMOUNT, $baseWeeeTaxAppliedAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseWeeeTaxAppliedAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_AMOUNT, $baseWeeeTaxAppliedAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_AMOUNT, $baseWeeeTaxAppliedAmount, $comparison);
    }

    /**
     * Filter the query on the base_weee_tax_applied_row_amnt column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseWeeeTaxAppliedRowAmnt(1234); // WHERE base_weee_tax_applied_row_amnt = 1234
     * $query->filterByBaseWeeeTaxAppliedRowAmnt(array(12, 34)); // WHERE base_weee_tax_applied_row_amnt IN (12, 34)
     * $query->filterByBaseWeeeTaxAppliedRowAmnt(array('min' => 12)); // WHERE base_weee_tax_applied_row_amnt >= 12
     * $query->filterByBaseWeeeTaxAppliedRowAmnt(array('max' => 12)); // WHERE base_weee_tax_applied_row_amnt <= 12
     * </code>
     *
     * @param     mixed $baseWeeeTaxAppliedRowAmnt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseWeeeTaxAppliedRowAmnt($baseWeeeTaxAppliedRowAmnt = null, $comparison = null)
    {
        if (is_array($baseWeeeTaxAppliedRowAmnt)) {
            $useMinMax = false;
            if (isset($baseWeeeTaxAppliedRowAmnt['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_ROW_AMNT, $baseWeeeTaxAppliedRowAmnt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseWeeeTaxAppliedRowAmnt['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_ROW_AMNT, $baseWeeeTaxAppliedRowAmnt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_APPLIED_ROW_AMNT, $baseWeeeTaxAppliedRowAmnt, $comparison);
    }

    /**
     * Filter the query on the weee_tax_applied_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByWeeeTaxAppliedAmount(1234); // WHERE weee_tax_applied_amount = 1234
     * $query->filterByWeeeTaxAppliedAmount(array(12, 34)); // WHERE weee_tax_applied_amount IN (12, 34)
     * $query->filterByWeeeTaxAppliedAmount(array('min' => 12)); // WHERE weee_tax_applied_amount >= 12
     * $query->filterByWeeeTaxAppliedAmount(array('max' => 12)); // WHERE weee_tax_applied_amount <= 12
     * </code>
     *
     * @param     mixed $weeeTaxAppliedAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByWeeeTaxAppliedAmount($weeeTaxAppliedAmount = null, $comparison = null)
    {
        if (is_array($weeeTaxAppliedAmount)) {
            $useMinMax = false;
            if (isset($weeeTaxAppliedAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_AMOUNT, $weeeTaxAppliedAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weeeTaxAppliedAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_AMOUNT, $weeeTaxAppliedAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_AMOUNT, $weeeTaxAppliedAmount, $comparison);
    }

    /**
     * Filter the query on the weee_tax_applied_row_amount column
     *
     * Example usage:
     * <code>
     * $query->filterByWeeeTaxAppliedRowAmount(1234); // WHERE weee_tax_applied_row_amount = 1234
     * $query->filterByWeeeTaxAppliedRowAmount(array(12, 34)); // WHERE weee_tax_applied_row_amount IN (12, 34)
     * $query->filterByWeeeTaxAppliedRowAmount(array('min' => 12)); // WHERE weee_tax_applied_row_amount >= 12
     * $query->filterByWeeeTaxAppliedRowAmount(array('max' => 12)); // WHERE weee_tax_applied_row_amount <= 12
     * </code>
     *
     * @param     mixed $weeeTaxAppliedRowAmount The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByWeeeTaxAppliedRowAmount($weeeTaxAppliedRowAmount = null, $comparison = null)
    {
        if (is_array($weeeTaxAppliedRowAmount)) {
            $useMinMax = false;
            if (isset($weeeTaxAppliedRowAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_ROW_AMOUNT, $weeeTaxAppliedRowAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weeeTaxAppliedRowAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_ROW_AMOUNT, $weeeTaxAppliedRowAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED_ROW_AMOUNT, $weeeTaxAppliedRowAmount, $comparison);
    }

    /**
     * Filter the query on the weee_tax_applied column
     *
     * Example usage:
     * <code>
     * $query->filterByWeeeTaxApplied('fooValue');   // WHERE weee_tax_applied = 'fooValue'
     * $query->filterByWeeeTaxApplied('%fooValue%'); // WHERE weee_tax_applied LIKE '%fooValue%'
     * </code>
     *
     * @param     string $weeeTaxApplied The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByWeeeTaxApplied($weeeTaxApplied = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($weeeTaxApplied)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $weeeTaxApplied)) {
                $weeeTaxApplied = str_replace('*', '%', $weeeTaxApplied);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_APPLIED, $weeeTaxApplied, $comparison);
    }

    /**
     * Filter the query on the weee_tax_disposition column
     *
     * Example usage:
     * <code>
     * $query->filterByWeeeTaxDisposition(1234); // WHERE weee_tax_disposition = 1234
     * $query->filterByWeeeTaxDisposition(array(12, 34)); // WHERE weee_tax_disposition IN (12, 34)
     * $query->filterByWeeeTaxDisposition(array('min' => 12)); // WHERE weee_tax_disposition >= 12
     * $query->filterByWeeeTaxDisposition(array('max' => 12)); // WHERE weee_tax_disposition <= 12
     * </code>
     *
     * @param     mixed $weeeTaxDisposition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByWeeeTaxDisposition($weeeTaxDisposition = null, $comparison = null)
    {
        if (is_array($weeeTaxDisposition)) {
            $useMinMax = false;
            if (isset($weeeTaxDisposition['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_DISPOSITION, $weeeTaxDisposition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weeeTaxDisposition['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_DISPOSITION, $weeeTaxDisposition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_DISPOSITION, $weeeTaxDisposition, $comparison);
    }

    /**
     * Filter the query on the weee_tax_row_disposition column
     *
     * Example usage:
     * <code>
     * $query->filterByWeeeTaxRowDisposition(1234); // WHERE weee_tax_row_disposition = 1234
     * $query->filterByWeeeTaxRowDisposition(array(12, 34)); // WHERE weee_tax_row_disposition IN (12, 34)
     * $query->filterByWeeeTaxRowDisposition(array('min' => 12)); // WHERE weee_tax_row_disposition >= 12
     * $query->filterByWeeeTaxRowDisposition(array('max' => 12)); // WHERE weee_tax_row_disposition <= 12
     * </code>
     *
     * @param     mixed $weeeTaxRowDisposition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByWeeeTaxRowDisposition($weeeTaxRowDisposition = null, $comparison = null)
    {
        if (is_array($weeeTaxRowDisposition)) {
            $useMinMax = false;
            if (isset($weeeTaxRowDisposition['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_ROW_DISPOSITION, $weeeTaxRowDisposition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($weeeTaxRowDisposition['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_ROW_DISPOSITION, $weeeTaxRowDisposition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::WEEE_TAX_ROW_DISPOSITION, $weeeTaxRowDisposition, $comparison);
    }

    /**
     * Filter the query on the base_weee_tax_disposition column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseWeeeTaxDisposition(1234); // WHERE base_weee_tax_disposition = 1234
     * $query->filterByBaseWeeeTaxDisposition(array(12, 34)); // WHERE base_weee_tax_disposition IN (12, 34)
     * $query->filterByBaseWeeeTaxDisposition(array('min' => 12)); // WHERE base_weee_tax_disposition >= 12
     * $query->filterByBaseWeeeTaxDisposition(array('max' => 12)); // WHERE base_weee_tax_disposition <= 12
     * </code>
     *
     * @param     mixed $baseWeeeTaxDisposition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseWeeeTaxDisposition($baseWeeeTaxDisposition = null, $comparison = null)
    {
        if (is_array($baseWeeeTaxDisposition)) {
            $useMinMax = false;
            if (isset($baseWeeeTaxDisposition['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_DISPOSITION, $baseWeeeTaxDisposition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseWeeeTaxDisposition['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_DISPOSITION, $baseWeeeTaxDisposition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_DISPOSITION, $baseWeeeTaxDisposition, $comparison);
    }

    /**
     * Filter the query on the base_weee_tax_row_disposition column
     *
     * Example usage:
     * <code>
     * $query->filterByBaseWeeeTaxRowDisposition(1234); // WHERE base_weee_tax_row_disposition = 1234
     * $query->filterByBaseWeeeTaxRowDisposition(array(12, 34)); // WHERE base_weee_tax_row_disposition IN (12, 34)
     * $query->filterByBaseWeeeTaxRowDisposition(array('min' => 12)); // WHERE base_weee_tax_row_disposition >= 12
     * $query->filterByBaseWeeeTaxRowDisposition(array('max' => 12)); // WHERE base_weee_tax_row_disposition <= 12
     * </code>
     *
     * @param     mixed $baseWeeeTaxRowDisposition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByBaseWeeeTaxRowDisposition($baseWeeeTaxRowDisposition = null, $comparison = null)
    {
        if (is_array($baseWeeeTaxRowDisposition)) {
            $useMinMax = false;
            if (isset($baseWeeeTaxRowDisposition['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_ROW_DISPOSITION, $baseWeeeTaxRowDisposition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($baseWeeeTaxRowDisposition['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_ROW_DISPOSITION, $baseWeeeTaxRowDisposition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::BASE_WEEE_TAX_ROW_DISPOSITION, $baseWeeeTaxRowDisposition, $comparison);
    }

    /**
     * Filter the query on the crc_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCrcId(1234); // WHERE crc_id = 1234
     * $query->filterByCrcId(array(12, 34)); // WHERE crc_id IN (12, 34)
     * $query->filterByCrcId(array('min' => 12)); // WHERE crc_id >= 12
     * $query->filterByCrcId(array('max' => 12)); // WHERE crc_id <= 12
     * </code>
     *
     * @param     mixed $crcId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByCrcId($crcId = null, $comparison = null)
    {
        if (is_array($crcId)) {
            $useMinMax = false;
            if (isset($crcId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::CRC_ID, $crcId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($crcId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::CRC_ID, $crcId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::CRC_ID, $crcId, $comparison);
    }

    /**
     * Filter the query on the event_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEventId(1234); // WHERE event_id = 1234
     * $query->filterByEventId(array(12, 34)); // WHERE event_id IN (12, 34)
     * $query->filterByEventId(array('min' => 12)); // WHERE event_id >= 12
     * $query->filterByEventId(array('max' => 12)); // WHERE event_id <= 12
     * </code>
     *
     * @param     mixed $eventId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByEventId($eventId = null, $comparison = null)
    {
        if (is_array($eventId)) {
            $useMinMax = false;
            if (isset($eventId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::EVENT_ID, $eventId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eventId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::EVENT_ID, $eventId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::EVENT_ID, $eventId, $comparison);
    }

    /**
     * Filter the query on the giftregistry_item_id column
     *
     * Example usage:
     * <code>
     * $query->filterByGiftregistryItemId(1234); // WHERE giftregistry_item_id = 1234
     * $query->filterByGiftregistryItemId(array(12, 34)); // WHERE giftregistry_item_id IN (12, 34)
     * $query->filterByGiftregistryItemId(array('min' => 12)); // WHERE giftregistry_item_id >= 12
     * $query->filterByGiftregistryItemId(array('max' => 12)); // WHERE giftregistry_item_id <= 12
     * </code>
     *
     * @param     mixed $giftregistryItemId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGiftregistryItemId($giftregistryItemId = null, $comparison = null)
    {
        if (is_array($giftregistryItemId)) {
            $useMinMax = false;
            if (isset($giftregistryItemId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GIFTREGISTRY_ITEM_ID, $giftregistryItemId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($giftregistryItemId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GIFTREGISTRY_ITEM_ID, $giftregistryItemId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GIFTREGISTRY_ITEM_ID, $giftregistryItemId, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwId($gwId = null, $comparison = null)
    {
        if (is_array($gwId)) {
            $useMinMax = false;
            if (isset($gwId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_ID, $gwId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_ID, $gwId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_ID, $gwId, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwBasePrice($gwBasePrice = null, $comparison = null)
    {
        if (is_array($gwBasePrice)) {
            $useMinMax = false;
            if (isset($gwBasePrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_PRICE, $gwBasePrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBasePrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_PRICE, $gwBasePrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_PRICE, $gwBasePrice, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwPrice($gwPrice = null, $comparison = null)
    {
        if (is_array($gwPrice)) {
            $useMinMax = false;
            if (isset($gwPrice['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_PRICE, $gwPrice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwPrice['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_PRICE, $gwPrice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_PRICE, $gwPrice, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwBaseTaxAmount($gwBaseTaxAmount = null, $comparison = null)
    {
        if (is_array($gwBaseTaxAmount)) {
            $useMinMax = false;
            if (isset($gwBaseTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT, $gwBaseTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBaseTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT, $gwBaseTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT, $gwBaseTaxAmount, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwTaxAmount($gwTaxAmount = null, $comparison = null)
    {
        if (is_array($gwTaxAmount)) {
            $useMinMax = false;
            if (isset($gwTaxAmount['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_TAX_AMOUNT, $gwTaxAmount['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwTaxAmount['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_TAX_AMOUNT, $gwTaxAmount['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_TAX_AMOUNT, $gwTaxAmount, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwBasePriceInvoiced($gwBasePriceInvoiced = null, $comparison = null)
    {
        if (is_array($gwBasePriceInvoiced)) {
            $useMinMax = false;
            if (isset($gwBasePriceInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_PRICE_INVOICED, $gwBasePriceInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBasePriceInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_PRICE_INVOICED, $gwBasePriceInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_PRICE_INVOICED, $gwBasePriceInvoiced, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwPriceInvoiced($gwPriceInvoiced = null, $comparison = null)
    {
        if (is_array($gwPriceInvoiced)) {
            $useMinMax = false;
            if (isset($gwPriceInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_PRICE_INVOICED, $gwPriceInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwPriceInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_PRICE_INVOICED, $gwPriceInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_PRICE_INVOICED, $gwPriceInvoiced, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwBaseTaxAmountInvoiced($gwBaseTaxAmountInvoiced = null, $comparison = null)
    {
        if (is_array($gwBaseTaxAmountInvoiced)) {
            $useMinMax = false;
            if (isset($gwBaseTaxAmountInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_INVOICED, $gwBaseTaxAmountInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBaseTaxAmountInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_INVOICED, $gwBaseTaxAmountInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_INVOICED, $gwBaseTaxAmountInvoiced, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwTaxAmountInvoiced($gwTaxAmountInvoiced = null, $comparison = null)
    {
        if (is_array($gwTaxAmountInvoiced)) {
            $useMinMax = false;
            if (isset($gwTaxAmountInvoiced['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_INVOICED, $gwTaxAmountInvoiced['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwTaxAmountInvoiced['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_INVOICED, $gwTaxAmountInvoiced['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_INVOICED, $gwTaxAmountInvoiced, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwBasePriceRefunded($gwBasePriceRefunded = null, $comparison = null)
    {
        if (is_array($gwBasePriceRefunded)) {
            $useMinMax = false;
            if (isset($gwBasePriceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_PRICE_REFUNDED, $gwBasePriceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBasePriceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_PRICE_REFUNDED, $gwBasePriceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_PRICE_REFUNDED, $gwBasePriceRefunded, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwPriceRefunded($gwPriceRefunded = null, $comparison = null)
    {
        if (is_array($gwPriceRefunded)) {
            $useMinMax = false;
            if (isset($gwPriceRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_PRICE_REFUNDED, $gwPriceRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwPriceRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_PRICE_REFUNDED, $gwPriceRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_PRICE_REFUNDED, $gwPriceRefunded, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwBaseTaxAmountRefunded($gwBaseTaxAmountRefunded = null, $comparison = null)
    {
        if (is_array($gwBaseTaxAmountRefunded)) {
            $useMinMax = false;
            if (isset($gwBaseTaxAmountRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_REFUNDED, $gwBaseTaxAmountRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwBaseTaxAmountRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_REFUNDED, $gwBaseTaxAmountRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_BASE_TAX_AMOUNT_REFUNDED, $gwBaseTaxAmountRefunded, $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByGwTaxAmountRefunded($gwTaxAmountRefunded = null, $comparison = null)
    {
        if (is_array($gwTaxAmountRefunded)) {
            $useMinMax = false;
            if (isset($gwTaxAmountRefunded['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_REFUNDED, $gwTaxAmountRefunded['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($gwTaxAmountRefunded['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_REFUNDED, $gwTaxAmountRefunded['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::GW_TAX_AMOUNT_REFUNDED, $gwTaxAmountRefunded, $comparison);
    }

    /**
     * Filter the query on the qty_returned column
     *
     * Example usage:
     * <code>
     * $query->filterByQtyReturned(1234); // WHERE qty_returned = 1234
     * $query->filterByQtyReturned(array(12, 34)); // WHERE qty_returned IN (12, 34)
     * $query->filterByQtyReturned(array('min' => 12)); // WHERE qty_returned >= 12
     * $query->filterByQtyReturned(array('max' => 12)); // WHERE qty_returned <= 12
     * </code>
     *
     * @param     mixed $qtyReturned The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByQtyReturned($qtyReturned = null, $comparison = null)
    {
        if (is_array($qtyReturned)) {
            $useMinMax = false;
            if (isset($qtyReturned['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_RETURNED, $qtyReturned['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtyReturned['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_RETURNED, $qtyReturned['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_RETURNED, $qtyReturned, $comparison);
    }

    /**
     * Filter the query on the qty_redeemed column
     *
     * Example usage:
     * <code>
     * $query->filterByQtyRedeemed(1234); // WHERE qty_redeemed = 1234
     * $query->filterByQtyRedeemed(array(12, 34)); // WHERE qty_redeemed IN (12, 34)
     * $query->filterByQtyRedeemed(array('min' => 12)); // WHERE qty_redeemed >= 12
     * $query->filterByQtyRedeemed(array('max' => 12)); // WHERE qty_redeemed <= 12
     * </code>
     *
     * @param     mixed $qtyRedeemed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByQtyRedeemed($qtyRedeemed = null, $comparison = null)
    {
        if (is_array($qtyRedeemed)) {
            $useMinMax = false;
            if (isset($qtyRedeemed['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_REDEEMED, $qtyRedeemed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtyRedeemed['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_REDEEMED, $qtyRedeemed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_REDEEMED, $qtyRedeemed, $comparison);
    }

    /**
     * Filter the query on the consultant column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultant('fooValue');   // WHERE consultant = 'fooValue'
     * $query->filterByConsultant('%fooValue%'); // WHERE consultant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByConsultant($consultant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultant)) {
                $consultant = str_replace('*', '%', $consultant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::CONSULTANT, $consultant, $comparison);
    }

    /**
     * Filter the query on the parent_product_id column
     *
     * Example usage:
     * <code>
     * $query->filterByParentProductId(1234); // WHERE parent_product_id = 1234
     * $query->filterByParentProductId(array(12, 34)); // WHERE parent_product_id IN (12, 34)
     * $query->filterByParentProductId(array('min' => 12)); // WHERE parent_product_id >= 12
     * $query->filterByParentProductId(array('max' => 12)); // WHERE parent_product_id <= 12
     * </code>
     *
     * @param     mixed $parentProductId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByParentProductId($parentProductId = null, $comparison = null)
    {
        if (is_array($parentProductId)) {
            $useMinMax = false;
            if (isset($parentProductId['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::PARENT_PRODUCT_ID, $parentProductId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parentProductId['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::PARENT_PRODUCT_ID, $parentProductId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::PARENT_PRODUCT_ID, $parentProductId, $comparison);
    }

    /**
     * Filter the query on the qty_to_redeem column
     *
     * Example usage:
     * <code>
     * $query->filterByQtyToRedeem(1234); // WHERE qty_to_redeem = 1234
     * $query->filterByQtyToRedeem(array(12, 34)); // WHERE qty_to_redeem IN (12, 34)
     * $query->filterByQtyToRedeem(array('min' => 12)); // WHERE qty_to_redeem >= 12
     * $query->filterByQtyToRedeem(array('max' => 12)); // WHERE qty_to_redeem <= 12
     * </code>
     *
     * @param     mixed $qtyToRedeem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByQtyToRedeem($qtyToRedeem = null, $comparison = null)
    {
        if (is_array($qtyToRedeem)) {
            $useMinMax = false;
            if (isset($qtyToRedeem['min'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_TO_REDEEM, $qtyToRedeem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qtyToRedeem['max'])) {
                $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_TO_REDEEM, $qtyToRedeem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::QTY_TO_REDEEM, $qtyToRedeem, $comparison);
    }

    /**
     * Filter the query on the rewards_used_detail column
     *
     * Example usage:
     * <code>
     * $query->filterByRewardsUsedDetail('fooValue');   // WHERE rewards_used_detail = 'fooValue'
     * $query->filterByRewardsUsedDetail('%fooValue%'); // WHERE rewards_used_detail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rewardsUsedDetail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function filterByRewardsUsedDetail($rewardsUsedDetail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rewardsUsedDetail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rewardsUsedDetail)) {
                $rewardsUsedDetail = str_replace('*', '%', $rewardsUsedDetail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SalesFlatOrderItemPeer::REWARDS_USED_DETAIL, $rewardsUsedDetail, $comparison);
    }

    /**
     * Filter the query by a related SalesFlatOrder object
     *
     * @param   SalesFlatOrder|PropelObjectCollection $salesFlatOrder The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesFlatOrderItemQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySalesFlatOrder($salesFlatOrder, $comparison = null)
    {
        if ($salesFlatOrder instanceof SalesFlatOrder) {
            return $this
                ->addUsingAlias(SalesFlatOrderItemPeer::ORDER_ID, $salesFlatOrder->getEntityId(), $comparison);
        } elseif ($salesFlatOrder instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesFlatOrderItemPeer::ORDER_ID, $salesFlatOrder->toKeyValue('PrimaryKey', 'EntityId'), $comparison);
        } else {
            throw new PropelException('filterBySalesFlatOrder() only accepts arguments of type SalesFlatOrder or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SalesFlatOrder relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function joinSalesFlatOrder($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SalesFlatOrder');

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
            $this->addJoinObject($join, 'SalesFlatOrder');
        }

        return $this;
    }

    /**
     * Use the SalesFlatOrder relation SalesFlatOrder object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SalesFlatOrderQuery A secondary query class using the current class as primary query
     */
    public function useSalesFlatOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSalesFlatOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SalesFlatOrder', 'SalesFlatOrderQuery');
    }

    /**
     * Filter the query by a related CoreStore object
     *
     * @param   CoreStore|PropelObjectCollection $coreStore The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SalesFlatOrderItemQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCoreStore($coreStore, $comparison = null)
    {
        if ($coreStore instanceof CoreStore) {
            return $this
                ->addUsingAlias(SalesFlatOrderItemPeer::STORE_ID, $coreStore->getStoreId(), $comparison);
        } elseif ($coreStore instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SalesFlatOrderItemPeer::STORE_ID, $coreStore->toKeyValue('PrimaryKey', 'StoreId'), $comparison);
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
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   SalesFlatOrderItem $salesFlatOrderItem Object to remove from the list of results
     *
     * @return SalesFlatOrderItemQuery The current query, for fluid interface
     */
    public function prune($salesFlatOrderItem = null)
    {
        if ($salesFlatOrderItem) {
            $this->addUsingAlias(SalesFlatOrderItemPeer::ITEM_ID, $salesFlatOrderItem->getItemId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
