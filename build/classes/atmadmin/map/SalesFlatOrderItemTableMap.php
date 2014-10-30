<?php



/**
 * This class defines the structure of the 'sales_flat_order_item' table.
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
class SalesFlatOrderItemTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.SalesFlatOrderItemTableMap';

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
        $this->setName('sales_flat_order_item');
        $this->setPhpName('SalesFlatOrderItem');
        $this->setClassname('SalesFlatOrderItem');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('item_id', 'ItemId', 'INTEGER', true, 10, null);
        $this->addForeignKey('order_id', 'OrderId', 'INTEGER', 'sales_flat_order', 'entity_id', true, 10, 0);
        $this->addColumn('parent_item_id', 'ParentItemId', 'INTEGER', false, 10, null);
        $this->addColumn('quote_item_id', 'QuoteItemId', 'INTEGER', false, 10, null);
        $this->addForeignKey('store_id', 'StoreId', 'SMALLINT', 'core_store', 'store_id', false, 5, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', true, null, '0000-00-00 00:00:00');
        $this->addColumn('product_id', 'ProductId', 'INTEGER', false, 10, null);
        $this->addColumn('product_type', 'ProductType', 'VARCHAR', false, 255, null);
        $this->addColumn('product_options', 'ProductOptions', 'LONGVARCHAR', false, null, null);
        $this->addColumn('weight', 'Weight', 'DECIMAL', false, 12, 0);
        $this->addColumn('is_virtual', 'IsVirtual', 'SMALLINT', false, 5, null);
        $this->addColumn('sku', 'Sku', 'VARCHAR', false, 255, null);
        $this->addColumn('name', 'Name', 'VARCHAR', false, 255, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', false, null, null);
        $this->addColumn('applied_rule_ids', 'AppliedRuleIds', 'LONGVARCHAR', false, null, null);
        $this->addColumn('additional_data', 'AdditionalData', 'LONGVARCHAR', false, null, null);
        $this->addColumn('free_shipping', 'FreeShipping', 'SMALLINT', true, 5, 0);
        $this->addColumn('is_qty_decimal', 'IsQtyDecimal', 'SMALLINT', false, 5, null);
        $this->addColumn('no_discount', 'NoDiscount', 'SMALLINT', true, 5, 0);
        $this->addColumn('qty_backordered', 'QtyBackordered', 'DECIMAL', false, 12, 0);
        $this->addColumn('qty_canceled', 'QtyCanceled', 'DECIMAL', false, 12, 0);
        $this->addColumn('qty_invoiced', 'QtyInvoiced', 'DECIMAL', false, 12, 0);
        $this->addColumn('qty_ordered', 'QtyOrdered', 'DECIMAL', false, 12, 0);
        $this->addColumn('qty_refunded', 'QtyRefunded', 'DECIMAL', false, 12, 0);
        $this->addColumn('qty_shipped', 'QtyShipped', 'DECIMAL', false, 12, 0);
        $this->addColumn('base_cost', 'BaseCost', 'DECIMAL', false, 12, 0);
        $this->addColumn('price', 'Price', 'DECIMAL', true, 12, 0);
        $this->addColumn('base_price', 'BasePrice', 'DECIMAL', true, 12, 0);
        $this->addColumn('original_price', 'OriginalPrice', 'DECIMAL', false, 12, null);
        $this->addColumn('base_original_price', 'BaseOriginalPrice', 'DECIMAL', false, 12, null);
        $this->addColumn('tax_percent', 'TaxPercent', 'DECIMAL', false, 12, 0);
        $this->addColumn('tax_amount', 'TaxAmount', 'DECIMAL', false, 12, 0);
        $this->addColumn('base_tax_amount', 'BaseTaxAmount', 'DECIMAL', false, 12, 0);
        $this->addColumn('tax_invoiced', 'TaxInvoiced', 'DECIMAL', false, 12, 0);
        $this->addColumn('base_tax_invoiced', 'BaseTaxInvoiced', 'DECIMAL', false, 12, 0);
        $this->addColumn('discount_percent', 'DiscountPercent', 'DECIMAL', false, 12, 0);
        $this->addColumn('discount_amount', 'DiscountAmount', 'DECIMAL', false, 12, 0);
        $this->addColumn('base_discount_amount', 'BaseDiscountAmount', 'DECIMAL', false, 12, 0);
        $this->addColumn('discount_invoiced', 'DiscountInvoiced', 'DECIMAL', false, 12, 0);
        $this->addColumn('base_discount_invoiced', 'BaseDiscountInvoiced', 'DECIMAL', false, 12, 0);
        $this->addColumn('amount_refunded', 'AmountRefunded', 'DECIMAL', false, 12, 0);
        $this->addColumn('base_amount_refunded', 'BaseAmountRefunded', 'DECIMAL', false, 12, 0);
        $this->addColumn('row_total', 'RowTotal', 'DECIMAL', true, 12, 0);
        $this->addColumn('base_row_total', 'BaseRowTotal', 'DECIMAL', true, 12, 0);
        $this->addColumn('row_invoiced', 'RowInvoiced', 'DECIMAL', true, 12, 0);
        $this->addColumn('base_row_invoiced', 'BaseRowInvoiced', 'DECIMAL', true, 12, 0);
        $this->addColumn('row_weight', 'RowWeight', 'DECIMAL', false, 12, 0);
        $this->addColumn('base_tax_before_discount', 'BaseTaxBeforeDiscount', 'DECIMAL', false, 12, null);
        $this->addColumn('tax_before_discount', 'TaxBeforeDiscount', 'DECIMAL', false, 12, null);
        $this->addColumn('ext_order_item_id', 'ExtOrderItemId', 'VARCHAR', false, 255, null);
        $this->addColumn('locked_do_invoice', 'LockedDoInvoice', 'SMALLINT', false, 5, null);
        $this->addColumn('locked_do_ship', 'LockedDoShip', 'SMALLINT', false, 5, null);
        $this->addColumn('price_incl_tax', 'PriceInclTax', 'DECIMAL', false, 12, null);
        $this->addColumn('base_price_incl_tax', 'BasePriceInclTax', 'DECIMAL', false, 12, null);
        $this->addColumn('row_total_incl_tax', 'RowTotalInclTax', 'DECIMAL', false, 12, null);
        $this->addColumn('base_row_total_incl_tax', 'BaseRowTotalInclTax', 'DECIMAL', false, 12, null);
        $this->addColumn('hidden_tax_amount', 'HiddenTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_hidden_tax_amount', 'BaseHiddenTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('hidden_tax_invoiced', 'HiddenTaxInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('base_hidden_tax_invoiced', 'BaseHiddenTaxInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('hidden_tax_refunded', 'HiddenTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_hidden_tax_refunded', 'BaseHiddenTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('is_nominal', 'IsNominal', 'INTEGER', true, null, 0);
        $this->addColumn('tax_canceled', 'TaxCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('hidden_tax_canceled', 'HiddenTaxCanceled', 'DECIMAL', false, 12, null);
        $this->addColumn('tax_refunded', 'TaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_tax_refunded', 'BaseTaxRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('discount_refunded', 'DiscountRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('base_discount_refunded', 'BaseDiscountRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gift_message_id', 'GiftMessageId', 'INTEGER', false, null, null);
        $this->addColumn('gift_message_available', 'GiftMessageAvailable', 'INTEGER', false, null, null);
        $this->addColumn('base_weee_tax_applied_amount', 'BaseWeeeTaxAppliedAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('base_weee_tax_applied_row_amnt', 'BaseWeeeTaxAppliedRowAmnt', 'DECIMAL', false, 12, null);
        $this->addColumn('weee_tax_applied_amount', 'WeeeTaxAppliedAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('weee_tax_applied_row_amount', 'WeeeTaxAppliedRowAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('weee_tax_applied', 'WeeeTaxApplied', 'LONGVARCHAR', false, null, null);
        $this->addColumn('weee_tax_disposition', 'WeeeTaxDisposition', 'DECIMAL', false, 12, null);
        $this->addColumn('weee_tax_row_disposition', 'WeeeTaxRowDisposition', 'DECIMAL', false, 12, null);
        $this->addColumn('base_weee_tax_disposition', 'BaseWeeeTaxDisposition', 'DECIMAL', false, 12, null);
        $this->addColumn('base_weee_tax_row_disposition', 'BaseWeeeTaxRowDisposition', 'DECIMAL', false, 12, null);
        $this->addColumn('crc_id', 'CrcId', 'INTEGER', false, 10, null);
        $this->addColumn('event_id', 'EventId', 'INTEGER', false, null, null);
        $this->addColumn('giftregistry_item_id', 'GiftregistryItemId', 'INTEGER', false, null, null);
        $this->addColumn('gw_id', 'GwId', 'INTEGER', false, null, null);
        $this->addColumn('gw_base_price', 'GwBasePrice', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_price', 'GwPrice', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_base_tax_amount', 'GwBaseTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_tax_amount', 'GwTaxAmount', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_base_price_invoiced', 'GwBasePriceInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_price_invoiced', 'GwPriceInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_base_tax_amount_invoiced', 'GwBaseTaxAmountInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_tax_amount_invoiced', 'GwTaxAmountInvoiced', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_base_price_refunded', 'GwBasePriceRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_price_refunded', 'GwPriceRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_base_tax_amount_refunded', 'GwBaseTaxAmountRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('gw_tax_amount_refunded', 'GwTaxAmountRefunded', 'DECIMAL', false, 12, null);
        $this->addColumn('qty_returned', 'QtyReturned', 'DECIMAL', true, 12, 0);
        $this->addColumn('qty_redeemed', 'QtyRedeemed', 'DECIMAL', true, 12, null);
        $this->addColumn('consultant', 'Consultant', 'VARCHAR', false, 20, null);
        $this->addColumn('parent_product_id', 'ParentProductId', 'INTEGER', true, null, null);
        $this->addColumn('qty_to_redeem', 'QtyToRedeem', 'INTEGER', false, 50, null);
        $this->addColumn('rewards_used_detail', 'RewardsUsedDetail', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('SalesFlatOrder', 'SalesFlatOrder', RelationMap::MANY_TO_ONE, array('order_id' => 'entity_id', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CoreStore', 'CoreStore', RelationMap::MANY_TO_ONE, array('store_id' => 'store_id', ), 'SET NULL', 'CASCADE');
    } // buildRelations()

} // SalesFlatOrderItemTableMap
