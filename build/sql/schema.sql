
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- core_store_group
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS core_store_group;

CREATE TABLE core_store_group
(
    group_id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    website_id smallint(5) unsigned DEFAULT 0 NOT NULL,
    name VARCHAR(255) NOT NULL,
    root_category_id int(10) unsigned DEFAULT 0 NOT NULL,
    default_store_id smallint(5) unsigned DEFAULT 0 NOT NULL,
    PRIMARY KEY (group_id),
    INDEX IDX_CORE_STORE_GROUP_WEBSITE_ID (website_id),
    INDEX IDX_CORE_STORE_GROUP_DEFAULT_STORE_ID (default_store_id),
    CONSTRAINT FK_CORE_STORE_GROUP_WEBSITE_ID_CORE_WEBSITE_WEBSITE_ID
        FOREIGN KEY (website_id)
        REFERENCES core_website (website_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- core_store
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS core_store;

CREATE TABLE core_store
(
    store_id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    code VARCHAR(32),
    website_id smallint(5) unsigned DEFAULT 0 NOT NULL,
    group_id smallint(5) unsigned DEFAULT 0 NOT NULL,
    name VARCHAR(255) NOT NULL,
    sort_order smallint(5) unsigned DEFAULT 0 NOT NULL,
    is_active smallint(5) unsigned DEFAULT 0 NOT NULL,
    PRIMARY KEY (store_id),
    UNIQUE INDEX UNQ_CORE_STORE_CODE (code),
    INDEX IDX_CORE_STORE_WEBSITE_ID (website_id),
    INDEX IDX_CORE_STORE_IS_ACTIVE_SORT_ORDER (is_active, sort_order),
    INDEX IDX_CORE_STORE_GROUP_ID (group_id),
    CONSTRAINT FK_CORE_STORE_GROUP_ID_CORE_STORE_GROUP_GROUP_ID
        FOREIGN KEY (group_id)
        REFERENCES core_store_group (group_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT FK_CORE_STORE_WEBSITE_ID_CORE_WEBSITE_WEBSITE_ID
        FOREIGN KEY (website_id)
        REFERENCES core_website (website_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- core_website
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS core_website;

CREATE TABLE core_website
(
    website_id smallint(5) unsigned NOT NULL AUTO_INCREMENT,
    code VARCHAR(32),
    name VARCHAR(64),
    sort_order smallint(5) unsigned DEFAULT 0 NOT NULL,
    default_group_id smallint(5) unsigned DEFAULT 0 NOT NULL,
    is_default smallint(5) unsigned DEFAULT 0,
    is_staging TINYINT(1) DEFAULT 0 NOT NULL,
    master_login VARCHAR(40),
    master_password VARCHAR(100),
    visibility VARCHAR(40),
    is_visible VARCHAR(2),
    department VARCHAR(50),
    PRIMARY KEY (website_id),
    UNIQUE INDEX UNQ_CORE_WEBSITE_CODE (code),
    INDEX IDX_CORE_WEBSITE_SORT_ORDER (sort_order),
    INDEX IDX_CORE_WEBSITE_DEFAULT_GROUP_ID (default_group_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- customer_entity
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS customer_entity;

CREATE TABLE customer_entity
(
    entity_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    entity_type_id smallint(5) unsigned DEFAULT 0 NOT NULL,
    attribute_set_id smallint(5) unsigned DEFAULT 0 NOT NULL,
    website_id smallint(5) unsigned,
    email VARCHAR(255),
    group_id smallint(5) unsigned DEFAULT 0 NOT NULL,
    increment_id VARCHAR(50),
    store_id smallint(5) unsigned DEFAULT 0,
    created_at DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL,
    updated_at DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL,
    is_active smallint(5) unsigned DEFAULT 1 NOT NULL,
    disable_auto_group_change smallint(5) unsigned DEFAULT 0 NOT NULL,
    PRIMARY KEY (entity_id),
    UNIQUE INDEX UNQ_CUSTOMER_ENTITY_EMAIL_WEBSITE_ID (email, website_id),
    INDEX IDX_CUSTOMER_ENTITY_STORE_ID (store_id),
    INDEX IDX_CUSTOMER_ENTITY_ENTITY_TYPE_ID (entity_type_id),
    INDEX IDX_CUSTOMER_ENTITY_EMAIL_WEBSITE_ID (email, website_id),
    INDEX IDX_CUSTOMER_ENTITY_WEBSITE_ID (website_id),
    CONSTRAINT FK_CUSTOMER_ENTITY_STORE_ID_CORE_STORE_STORE_ID
        FOREIGN KEY (store_id)
        REFERENCES core_store (store_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT FK_CUSTOMER_ENTITY_WEBSITE_ID_CORE_WEBSITE_WEBSITE_ID
        FOREIGN KEY (website_id)
        REFERENCES core_website (website_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- sales_flat_order
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS sales_flat_order;

CREATE TABLE sales_flat_order
(
    entity_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    state VARCHAR(32),
    status VARCHAR(32),
    coupon_code VARCHAR(255),
    protect_code VARCHAR(255),
    shipping_description VARCHAR(255),
    is_virtual smallint(5) unsigned,
    store_id smallint(5) unsigned,
    customer_id int(10) unsigned,
    base_discount_amount DECIMAL(12,4),
    base_discount_canceled DECIMAL(12,4),
    base_discount_invoiced DECIMAL(12,4),
    base_discount_refunded DECIMAL(12,4),
    base_grand_total DECIMAL(12,4),
    base_shipping_amount DECIMAL(12,4),
    base_shipping_canceled DECIMAL(12,4),
    base_shipping_invoiced DECIMAL(12,4),
    base_shipping_refunded DECIMAL(12,4),
    base_shipping_tax_amount DECIMAL(12,4),
    base_shipping_tax_refunded DECIMAL(12,4),
    base_subtotal DECIMAL(12,4),
    base_subtotal_canceled DECIMAL(12,4),
    base_subtotal_invoiced DECIMAL(12,4),
    base_subtotal_refunded DECIMAL(12,4),
    base_tax_amount DECIMAL(12,4),
    base_tax_canceled DECIMAL(12,4),
    base_tax_invoiced DECIMAL(12,4),
    base_tax_refunded DECIMAL(12,4),
    base_to_global_rate DECIMAL(12,4),
    base_to_order_rate DECIMAL(12,4),
    base_total_canceled DECIMAL(12,4),
    base_total_invoiced DECIMAL(12,4),
    base_total_invoiced_cost DECIMAL(12,4),
    base_total_offline_refunded DECIMAL(12,4),
    base_total_online_refunded DECIMAL(12,4),
    base_total_paid DECIMAL(12,4),
    base_total_qty_ordered DECIMAL(12,4),
    base_total_refunded DECIMAL(12,4),
    discount_amount DECIMAL(12,4),
    discount_canceled DECIMAL(12,4),
    discount_invoiced DECIMAL(12,4),
    discount_refunded DECIMAL(12,4),
    grand_total DECIMAL(12,4),
    shipping_amount DECIMAL(12,4),
    shipping_canceled DECIMAL(12,4),
    shipping_invoiced DECIMAL(12,4),
    shipping_refunded DECIMAL(12,4),
    shipping_tax_amount DECIMAL(12,4),
    shipping_tax_refunded DECIMAL(12,4),
    store_to_base_rate DECIMAL(12,4),
    store_to_order_rate DECIMAL(12,4),
    subtotal DECIMAL(12,4),
    subtotal_canceled DECIMAL(12,4),
    subtotal_invoiced DECIMAL(12,4),
    subtotal_refunded DECIMAL(12,4),
    tax_amount DECIMAL(12,4),
    tax_canceled DECIMAL(12,4),
    tax_invoiced DECIMAL(12,4),
    tax_refunded DECIMAL(12,4),
    total_canceled DECIMAL(12,4),
    total_invoiced DECIMAL(12,4),
    total_offline_refunded DECIMAL(12,4),
    total_online_refunded DECIMAL(12,4),
    total_paid DECIMAL(12,4),
    total_qty_ordered DECIMAL(12,4),
    total_refunded DECIMAL(12,4),
    can_ship_partially smallint(5) unsigned,
    can_ship_partially_item smallint(5) unsigned,
    customer_is_guest smallint(5) unsigned,
    customer_note_notify smallint(5) unsigned,
    billing_address_id INTEGER,
    customer_group_id SMALLINT,
    edit_increment INTEGER,
    email_sent smallint(5) unsigned,
    forced_shipment_with_invoice smallint(5) unsigned,
    payment_auth_expiration INTEGER,
    quote_address_id INTEGER,
    quote_id INTEGER,
    shipping_address_id INTEGER,
    adjustment_negative DECIMAL(12,4),
    adjustment_positive DECIMAL(12,4),
    base_adjustment_negative DECIMAL(12,4),
    base_adjustment_positive DECIMAL(12,4),
    base_shipping_discount_amount DECIMAL(12,4),
    base_subtotal_incl_tax DECIMAL(12,4),
    base_total_due DECIMAL(12,4),
    payment_authorization_amount DECIMAL(12,4),
    shipping_discount_amount DECIMAL(12,4),
    subtotal_incl_tax DECIMAL(12,4),
    total_due DECIMAL(12,4),
    weight DECIMAL(12,4),
    customer_dob DATETIME,
    increment_id VARCHAR(50),
    applied_rule_ids VARCHAR(255),
    base_currency_code VARCHAR(3),
    customer_email VARCHAR(255),
    customer_firstname VARCHAR(255),
    customer_lastname VARCHAR(255),
    customer_middlename VARCHAR(255),
    customer_prefix VARCHAR(255),
    customer_suffix VARCHAR(255),
    customer_taxvat VARCHAR(255),
    discount_description VARCHAR(255),
    ext_customer_id VARCHAR(255),
    ext_order_id VARCHAR(255),
    global_currency_code VARCHAR(3),
    hold_before_state VARCHAR(255),
    hold_before_status VARCHAR(255),
    order_currency_code VARCHAR(255),
    original_increment_id VARCHAR(50),
    relation_child_id VARCHAR(32),
    relation_child_real_id VARCHAR(32),
    relation_parent_id VARCHAR(32),
    relation_parent_real_id VARCHAR(32),
    remote_ip VARCHAR(255),
    shipping_method VARCHAR(255),
    store_currency_code VARCHAR(3),
    store_name VARCHAR(255),
    x_forwarded_for VARCHAR(255),
    customer_note TEXT,
    created_at DATETIME,
    updated_at DATETIME,
    total_item_count smallint(5) unsigned DEFAULT 0 NOT NULL,
    customer_gender INTEGER,
    hidden_tax_amount DECIMAL(12,4),
    base_hidden_tax_amount DECIMAL(12,4),
    shipping_hidden_tax_amount DECIMAL(12,4),
    base_shipping_hidden_tax_amnt DECIMAL(12,4),
    hidden_tax_invoiced DECIMAL(12,4),
    base_hidden_tax_invoiced DECIMAL(12,4),
    hidden_tax_refunded DECIMAL(12,4),
    base_hidden_tax_refunded DECIMAL(12,4),
    shipping_incl_tax DECIMAL(12,4),
    base_shipping_incl_tax DECIMAL(12,4),
    coupon_rule_name VARCHAR(255),
    paypal_ipn_customer_notified INTEGER DEFAULT 0,
    gift_message_id INTEGER,
    groupdeals_coupon_from VARCHAR(255),
    groupdeals_coupon_to VARCHAR(255),
    groupdeals_coupon_to_email VARCHAR(255),
    groupdeals_coupon_message VARCHAR(255),
    base_customer_balance_amount DECIMAL(12,4),
    customer_balance_amount DECIMAL(12,4),
    base_customer_balance_invoiced DECIMAL(12,4),
    customer_balance_invoiced DECIMAL(12,4),
    base_customer_balance_refunded DECIMAL(12,4),
    customer_balance_refunded DECIMAL(12,4),
    bs_customer_bal_total_refunded DECIMAL(12,4),
    customer_bal_total_refunded DECIMAL(12,4),
    gift_cards TEXT,
    base_gift_cards_amount DECIMAL(12,4),
    gift_cards_amount DECIMAL(12,4),
    base_gift_cards_invoiced DECIMAL(12,4),
    gift_cards_invoiced DECIMAL(12,4),
    base_gift_cards_refunded DECIMAL(12,4),
    gift_cards_refunded DECIMAL(12,4),
    gw_id INTEGER,
    gw_allow_gift_receipt INTEGER,
    gw_add_card INTEGER,
    gw_base_price DECIMAL(12,4),
    gw_price DECIMAL(12,4),
    gw_items_base_price DECIMAL(12,4),
    gw_items_price DECIMAL(12,4),
    gw_card_base_price DECIMAL(12,4),
    gw_card_price DECIMAL(12,4),
    gw_base_tax_amount DECIMAL(12,4),
    gw_tax_amount DECIMAL(12,4),
    gw_items_base_tax_amount DECIMAL(12,4),
    gw_items_tax_amount DECIMAL(12,4),
    gw_card_base_tax_amount DECIMAL(12,4),
    gw_card_tax_amount DECIMAL(12,4),
    gw_base_price_invoiced DECIMAL(12,4),
    gw_price_invoiced DECIMAL(12,4),
    gw_items_base_price_invoiced DECIMAL(12,4),
    gw_items_price_invoiced DECIMAL(12,4),
    gw_card_base_price_invoiced DECIMAL(12,4),
    gw_card_price_invoiced DECIMAL(12,4),
    gw_base_tax_amount_invoiced DECIMAL(12,4),
    gw_tax_amount_invoiced DECIMAL(12,4),
    gw_items_base_tax_invoiced DECIMAL(12,4),
    gw_items_tax_invoiced DECIMAL(12,4),
    gw_card_base_tax_invoiced DECIMAL(12,4),
    gw_card_tax_invoiced DECIMAL(12,4),
    gw_base_price_refunded DECIMAL(12,4),
    gw_price_refunded DECIMAL(12,4),
    gw_items_base_price_refunded DECIMAL(12,4),
    gw_items_price_refunded DECIMAL(12,4),
    gw_card_base_price_refunded DECIMAL(12,4),
    gw_card_price_refunded DECIMAL(12,4),
    gw_base_tax_amount_refunded DECIMAL(12,4),
    gw_tax_amount_refunded DECIMAL(12,4),
    gw_items_base_tax_refunded DECIMAL(12,4),
    gw_items_tax_refunded DECIMAL(12,4),
    gw_card_base_tax_refunded DECIMAL(12,4),
    gw_card_tax_refunded DECIMAL(12,4),
    reward_points_balance INTEGER,
    base_reward_currency_amount DECIMAL(12,4),
    reward_currency_amount DECIMAL(12,4),
    base_rwrd_crrncy_amt_invoiced DECIMAL(12,4),
    rwrd_currency_amount_invoiced DECIMAL(12,4),
    base_rwrd_crrncy_amnt_refnded DECIMAL(12,4),
    rwrd_crrncy_amnt_refunded DECIMAL(12,4),
    reward_points_balance_refund INTEGER,
    reward_points_balance_refunded INTEGER,
    reward_salesrule_points INTEGER,
    vendor_username VARCHAR(120),
    vendor_name VARCHAR(120),
    vendor_lastname VARCHAR(120),
    vendor_email VARCHAR(120),
    pos_id VARCHAR(120),
    pos_office VARCHAR(120),
    pos_code VARCHAR(120),
    pos_country VARCHAR(120),
    pos_city VARCHAR(120),
    pos_postal_code VARCHAR(120),
    pos_address VARCHAR(120),
    pos_phone VARCHAR(120),
    customer_identification VARCHAR(20),
    is_gift INTEGER NOT NULL,
    gift_for VARCHAR(255),
    gift_email VARCHAR(255),
    gift_message TEXT,
    gift_citydept VARCHAR(255),
    gift_shipping VARCHAR(255),
    was_payed INTEGER DEFAULT 0,
    gift_for_lastname VARCHAR(255),
    sci_payment_methods VARCHAR(20),
    discount_applied INTEGER(1) DEFAULT 0,
    rewards_applied INTEGER(10) DEFAULT 0,
    stock_before_pol INTEGER DEFAULT 0,
    PRIMARY KEY (entity_id),
    UNIQUE INDEX UNQ_SALES_FLAT_ORDER_INCREMENT_ID (increment_id),
    INDEX IDX_SALES_FLAT_ORDER_STATUS (status),
    INDEX IDX_SALES_FLAT_ORDER_STATE (state),
    INDEX IDX_SALES_FLAT_ORDER_STORE_ID (store_id),
    INDEX IDX_SALES_FLAT_ORDER_CREATED_AT (created_at),
    INDEX IDX_SALES_FLAT_ORDER_CUSTOMER_ID (customer_id),
    INDEX IDX_SALES_FLAT_ORDER_EXT_ORDER_ID (ext_order_id),
    INDEX IDX_SALES_FLAT_ORDER_QUOTE_ID (quote_id),
    INDEX IDX_SALES_FLAT_ORDER_UPDATED_AT (updated_at),
    INDEX sales_order_increment_id (increment_id),
    CONSTRAINT FK_SALES_FLAT_ORDER_CUSTOMER_ID_CUSTOMER_ENTITY_ENTITY_ID
        FOREIGN KEY (customer_id)
        REFERENCES customer_entity (entity_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT FK_SALES_FLAT_ORDER_STORE_ID_CORE_STORE_STORE_ID
        FOREIGN KEY (store_id)
        REFERENCES core_store (store_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- sales_flat_order_item
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS sales_flat_order_item;

CREATE TABLE sales_flat_order_item
(
    item_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    order_id int(10) unsigned DEFAULT 0 NOT NULL,
    parent_item_id int(10) unsigned,
    quote_item_id int(10) unsigned,
    store_id smallint(5) unsigned,
    created_at DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL,
    updated_at DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL,
    product_id int(10) unsigned,
    product_type VARCHAR(255),
    product_options TEXT,
    weight DECIMAL(12,4) DEFAULT 0.0000,
    is_virtual smallint(5) unsigned,
    sku VARCHAR(255),
    name VARCHAR(255),
    description TEXT,
    applied_rule_ids TEXT,
    additional_data TEXT,
    free_shipping smallint(5) unsigned DEFAULT 0 NOT NULL,
    is_qty_decimal smallint(5) unsigned,
    no_discount smallint(5) unsigned DEFAULT 0 NOT NULL,
    qty_backordered DECIMAL(12,4) DEFAULT 0.0000,
    qty_canceled DECIMAL(12,4) DEFAULT 0.0000,
    qty_invoiced DECIMAL(12,4) DEFAULT 0.0000,
    qty_ordered DECIMAL(12,4) DEFAULT 0.0000,
    qty_refunded DECIMAL(12,4) DEFAULT 0.0000,
    qty_shipped DECIMAL(12,4) DEFAULT 0.0000,
    base_cost DECIMAL(12,4) DEFAULT 0.0000,
    price DECIMAL(12,4) DEFAULT 0.0000 NOT NULL,
    base_price DECIMAL(12,4) DEFAULT 0.0000 NOT NULL,
    original_price DECIMAL(12,4),
    base_original_price DECIMAL(12,4),
    tax_percent DECIMAL(12,4) DEFAULT 0.0000,
    tax_amount DECIMAL(12,4) DEFAULT 0.0000,
    base_tax_amount DECIMAL(12,4) DEFAULT 0.0000,
    tax_invoiced DECIMAL(12,4) DEFAULT 0.0000,
    base_tax_invoiced DECIMAL(12,4) DEFAULT 0.0000,
    discount_percent DECIMAL(12,4) DEFAULT 0.0000,
    discount_amount DECIMAL(12,4) DEFAULT 0.0000,
    base_discount_amount DECIMAL(12,4) DEFAULT 0.0000,
    discount_invoiced DECIMAL(12,4) DEFAULT 0.0000,
    base_discount_invoiced DECIMAL(12,4) DEFAULT 0.0000,
    amount_refunded DECIMAL(12,4) DEFAULT 0.0000,
    base_amount_refunded DECIMAL(12,4) DEFAULT 0.0000,
    row_total DECIMAL(12,4) DEFAULT 0.0000 NOT NULL,
    base_row_total DECIMAL(12,4) DEFAULT 0.0000 NOT NULL,
    row_invoiced DECIMAL(12,4) DEFAULT 0.0000 NOT NULL,
    base_row_invoiced DECIMAL(12,4) DEFAULT 0.0000 NOT NULL,
    row_weight DECIMAL(12,4) DEFAULT 0.0000,
    base_tax_before_discount DECIMAL(12,4),
    tax_before_discount DECIMAL(12,4),
    ext_order_item_id VARCHAR(255),
    locked_do_invoice smallint(5) unsigned,
    locked_do_ship smallint(5) unsigned,
    price_incl_tax DECIMAL(12,4),
    base_price_incl_tax DECIMAL(12,4),
    row_total_incl_tax DECIMAL(12,4),
    base_row_total_incl_tax DECIMAL(12,4),
    hidden_tax_amount DECIMAL(12,4),
    base_hidden_tax_amount DECIMAL(12,4),
    hidden_tax_invoiced DECIMAL(12,4),
    base_hidden_tax_invoiced DECIMAL(12,4),
    hidden_tax_refunded DECIMAL(12,4),
    base_hidden_tax_refunded DECIMAL(12,4),
    is_nominal INTEGER DEFAULT 0 NOT NULL,
    tax_canceled DECIMAL(12,4),
    hidden_tax_canceled DECIMAL(12,4),
    tax_refunded DECIMAL(12,4),
    base_tax_refunded DECIMAL(12,4),
    discount_refunded DECIMAL(12,4),
    base_discount_refunded DECIMAL(12,4),
    gift_message_id INTEGER,
    gift_message_available INTEGER,
    base_weee_tax_applied_amount DECIMAL(12,4),
    base_weee_tax_applied_row_amnt DECIMAL(12,4),
    weee_tax_applied_amount DECIMAL(12,4),
    weee_tax_applied_row_amount DECIMAL(12,4),
    weee_tax_applied TEXT,
    weee_tax_disposition DECIMAL(12,4),
    weee_tax_row_disposition DECIMAL(12,4),
    base_weee_tax_disposition DECIMAL(12,4),
    base_weee_tax_row_disposition DECIMAL(12,4),
    crc_id INTEGER(10),
    event_id INTEGER,
    giftregistry_item_id INTEGER,
    gw_id INTEGER,
    gw_base_price DECIMAL(12,4),
    gw_price DECIMAL(12,4),
    gw_base_tax_amount DECIMAL(12,4),
    gw_tax_amount DECIMAL(12,4),
    gw_base_price_invoiced DECIMAL(12,4),
    gw_price_invoiced DECIMAL(12,4),
    gw_base_tax_amount_invoiced DECIMAL(12,4),
    gw_tax_amount_invoiced DECIMAL(12,4),
    gw_base_price_refunded DECIMAL(12,4),
    gw_price_refunded DECIMAL(12,4),
    gw_base_tax_amount_refunded DECIMAL(12,4),
    gw_tax_amount_refunded DECIMAL(12,4),
    qty_returned DECIMAL(12,4) DEFAULT 0.0000 NOT NULL,
    qty_redeemed DECIMAL(12,4) NOT NULL,
    consultant VARCHAR(20),
    parent_product_id INTEGER NOT NULL,
    qty_to_redeem INTEGER(50),
    rewards_used_detail TEXT,
    PRIMARY KEY (item_id),
    INDEX IDX_SALES_FLAT_ORDER_ITEM_ORDER_ID (order_id),
    INDEX IDX_SALES_FLAT_ORDER_ITEM_STORE_ID (store_id),
    INDEX IDX_PRODUCT_ID (product_id),
    CONSTRAINT FK_SALES_FLAT_ORDER_ITEM_ORDER_ID_SALES_FLAT_ORDER_ENTITY_ID
        FOREIGN KEY (order_id)
        REFERENCES sales_flat_order (entity_id)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT FK_SALES_FLAT_ORDER_ITEM_STORE_ID_CORE_STORE_STORE_ID
        FOREIGN KEY (store_id)
        REFERENCES core_store (store_id)
        ON UPDATE CASCADE
        ON DELETE SET NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- personalized_coupons
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS personalized_coupons;

CREATE TABLE personalized_coupons
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    code VARCHAR(255) NOT NULL,
    groupdeals_id int(10) unsigned,
    status int(10) unsigned,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE INDEX code (code)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- coupon_mapping
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS coupon_mapping;

CREATE TABLE coupon_mapping
(
    mapping_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    coupon VARCHAR(255) NOT NULL,
    coupon_md5 VARCHAR(255) NOT NULL,
    expiration_date DATETIME,
    customer_id int(10) unsigned,
    can_send INTEGER(1) DEFAULT 1,
    status INTEGER DEFAULT 1,
    order_id INTEGER(10),
    item_id INTEGER(10),
    payed_for_return INTEGER(10),
    increment_id VARCHAR(50),
    unit INTEGER(5),
    personalized_coupon int(10) unsigned,
    pos_number VARCHAR(50),
    PRIMARY KEY (mapping_id),
    UNIQUE INDEX UNQ_MAPPING (coupon_md5),
    INDEX ORDER_ID (order_id),
    INDEX COUPON (coupon),
    INDEX IDX_CANSEND (can_send),
    INDEX INCREMENT_ID (increment_id),
    INDEX IDX_COUPON_MAPPING_CAN_SEND (can_send),
    INDEX item_id (item_id),
    INDEX unit (unit),
    INDEX fk_personalized_coupons_coupon_mapping (personalized_coupon),
    INDEX coupon_mapping_increment_id (increment_id),
    INDEX coupon_mapping_item_id (item_id),
    INDEX coupon_mapping_unit (unit),
    INDEX coupon_mapping_coupon_md5 (coupon_md5),
    CONSTRAINT fk_coupon_increment_id
        FOREIGN KEY (increment_id)
        REFERENCES sales_flat_order (increment_id)
        ON DELETE CASCADE,
    CONSTRAINT fk_personalized_coupons_coupon_mapping
        FOREIGN KEY (personalized_coupon)
        REFERENCES personalized_coupons (id)
        ON DELETE SET NULL
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- coupon_history
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS coupon_history;

CREATE TABLE coupon_history
(
    history_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    campaign_name VARCHAR(255) NOT NULL,
    coupon_code VARCHAR(255) NOT NULL,
    redemption_date DATETIME,
    value DECIMAL(12,4) NOT NULL,
    merchant_id INTEGER NOT NULL,
    campaign_id VARCHAR(20),
    order_id VARCHAR(20),
    item_id VARCHAR(20),
    processed INTEGER(1) DEFAULT 0,
    unit INTEGER(10),
    PRIMARY KEY (history_id),
    UNIQUE INDEX UNQ_CODE (coupon_code),
    INDEX qbc_coupon_history_order_index (order_id),
    INDEX qbc_coupon_history_campaign_id_index (campaign_id),
    INDEX qbc_coupon_history_code_index (coupon_code)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- merchant_bank_info
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS merchant_bank_info;

CREATE TABLE merchant_bank_info
(
    info_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    bank_country VARCHAR(2),
    account_type VARCHAR(255),
    holder VARCHAR(255),
    bank VARCHAR(255),
    account_number VARCHAR(255),
    currency VARCHAR(3),
    is_fiduciary int(10) unsigned NOT NULL,
    PRIMARY KEY (info_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- groupdeals_merchants
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS groupdeals_merchants;

CREATE TABLE groupdeals_merchants
(
    merchants_id int(11) unsigned NOT NULL AUTO_INCREMENT,
    user_id INTEGER NOT NULL,
    permissions VARCHAR(255) DEFAULT '' NOT NULL,
    name TEXT NOT NULL,
    merchant_logo TEXT NOT NULL,
    description TEXT NOT NULL,
    website TEXT NOT NULL,
    email TEXT NOT NULL,
    facebook TEXT NOT NULL,
    twitter TEXT NOT NULL,
    phone VARCHAR(14),
    mobile TEXT NOT NULL,
    business_hours TEXT NOT NULL,
    address TEXT NOT NULL,
    redeem TEXT NOT NULL,
    paypal_email VARCHAR(255) DEFAULT '' NOT NULL,
    authorize_info TEXT NOT NULL,
    bank_info int(10) unsigned,
    other TEXT NOT NULL,
    status INTEGER NOT NULL,
    nit_number VARCHAR(20),
    agent VARCHAR(255),
    service_provided VARCHAR(255),
    city VARCHAR(255),
    country VARCHAR(2),
    primary_contact TEXT NOT NULL,
    secondary_contact TEXT NOT NULL,
    legal_name VARCHAR(255) NOT NULL,
    branch INTEGER NOT NULL,
    PRIMARY KEY (merchants_id),
    INDEX bank_info (bank_info),
    CONSTRAINT groupdeals_merchants_ibfk_1
        FOREIGN KEY (bank_info)
        REFERENCES merchant_bank_info (info_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_merchants_commercial_names
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_merchants_commercial_names;

CREATE TABLE qbc_merchants_commercial_names
(
    commercial_name_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    merchants_id int(11) unsigned NOT NULL,
    commercial_name VARCHAR(255) DEFAULT '' NOT NULL,
    nit VARCHAR(100),
    use_parent_nit TINYINT(1) DEFAULT 0 NOT NULL,
    bank_account_number VARCHAR(100),
    use_parent_bank_account TINYINT(1) DEFAULT 0 NOT NULL,
    company_description TEXT,
    logo VARCHAR(255) DEFAULT '',
    email VARCHAR(255) DEFAULT '',
    PRIMARY KEY (commercial_name_id),
    INDEX fk_groupdeals_merchants_merchants_id (merchants_id),
    CONSTRAINT fk_groupdeals_merchants_merchants_id
        FOREIGN KEY (merchants_id)
        REFERENCES groupdeals_merchants (merchants_id)
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_merchants_contacts
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_merchants_contacts;

CREATE TABLE qbc_merchants_contacts
(
    contact_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    merchants_id int(11) unsigned NOT NULL,
    name VARCHAR(255),
    surname VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(255),
    job_title VARCHAR(255),
    office_address VARCHAR(255),
    cell_phone VARCHAR(255),
    first_contact TINYINT(1),
    PRIMARY KEY (contact_id),
    INDEX merchants_id (merchants_id),
    CONSTRAINT qbc_merchants_contacts_ibfk_1
        FOREIGN KEY (merchants_id)
        REFERENCES groupdeals_merchants (merchants_id)
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_merchants_locations
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_merchants_locations;

CREATE TABLE qbc_merchants_locations
(
    location_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    commercial_name_id int(10) unsigned NOT NULL,
    address VARCHAR(100) DEFAULT '' NOT NULL,
    city VARCHAR(50) DEFAULT '' NOT NULL,
    phone VARCHAR(20),
    mobile_phone VARCHAR(20),
    image VARCHAR(255),
    status TINYINT(1) DEFAULT 0 NOT NULL,
    contact_name VARCHAR(100) DEFAULT '' NOT NULL,
    google_map_lat VARCHAR(30) DEFAULT '4.598071' NOT NULL,
    google_map_log VARCHAR(30) DEFAULT '-74.075832' NOT NULL,
    service_hour VARCHAR(120) DEFAULT '',
    PRIMARY KEY (location_id),
    INDEX commercial_name_id (commercial_name_id),
    CONSTRAINT qbc_merchants_locations_ibfk_1
        FOREIGN KEY (commercial_name_id)
        REFERENCES qbc_merchants_commercial_names (commercial_name_id)
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_migration_order
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_migration_order;

CREATE TABLE qbc_migration_order
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    ammount DECIMAL(18,2),
    credits_used DECIMAL(18,2),
    netto_ammount DECIMAL(18,2),
    status VARCHAR(50),
    payment_method VARCHAR(50),
    created_datetime DATE,
    document_number INTEGER(10),
    code VARCHAR(20),
    coupon_status VARCHAR(50),
    campaign_sku VARCHAR(20),
    customer_id INTEGER(10),
    redeemed INTEGER(1) DEFAULT 0,
    expired_datetime DATE,
    PRIMARY KEY (id),
    INDEX qbc_migration_order_customer_id (customer_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_newsletter_subscriber_history
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_newsletter_subscriber_history;

CREATE TABLE qbc_newsletter_subscriber_history
(
    history_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    user_id int(10) unsigned NOT NULL,
    state VARCHAR(255),
    unsubscription_date VARCHAR(255),
    subscription_date VARCHAR(255),
    list_id VARCHAR(255),
    list_name VARCHAR(255),
    actualized INTEGER DEFAULT 0 NOT NULL,
    PRIMARY KEY (history_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_pos
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_pos;

CREATE TABLE qbc_pos
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    pos_id VARCHAR(20) NOT NULL,
    office VARCHAR(50),
    code VARCHAR(10),
    country VARCHAR(2),
    city VARCHAR(255),
    postal_code INTEGER(10),
    address VARCHAR(500),
    phone VARCHAR(45),
    PRIMARY KEY (id),
    UNIQUE INDEX pos_id (pos_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_rma
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_rma;

CREATE TABLE qbc_rma
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    order_id VARCHAR(50),
    item_id VARCHAR(10),
    credits VARCHAR(2),
    cash VARCHAR(255),
    transactionIDs INTEGER(10),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sales_discount
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sales_discount;

CREATE TABLE qbc_sales_discount
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    order_id int(10) unsigned NOT NULL,
    PRIMARY KEY (id),
    UNIQUE INDEX order_id (order_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sales_pfr
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sales_pfr;

CREATE TABLE qbc_sales_pfr
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    order_id int(10) unsigned NOT NULL,
    sate VARCHAR(50),
    PRIMARY KEY (id),
    UNIQUE INDEX order_id (order_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_annulment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_annulment;

CREATE TABLE qbc_sci_annulment
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    campaign_id INTEGER(10),
    sell_document VARCHAR(20),
    order_item INTEGER(10),
    order_id INTEGER(10),
    credits DECIMAL(18,2),
    cash DECIMAL(18,2),
    unit INTEGER(5),
    PRIMARY KEY (id),
    INDEX qbc_sci_annulment_order_index (order_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_annulment_doc
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_annulment_doc;

CREATE TABLE qbc_sci_annulment_doc
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    detail VARCHAR(255),
    state VARCHAR(10),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_credit_closure
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_credit_closure;

CREATE TABLE qbc_sci_credit_closure
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    reward_type VARCHAR(20),
    reward_id VARCHAR(10),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_credit_closure_doc
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_credit_closure_doc;

CREATE TABLE qbc_sci_credit_closure_doc
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_Id VARCHAR(10),
    state VARCHAR(20),
    detail TEXT,
    document_id VARCHAR(10),
    doc_position INTEGER(2),
    doc_value DECIMAL(18,2),
    doc_date VARCHAR(20),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_credit_compensation
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_credit_compensation;

CREATE TABLE qbc_sci_credit_compensation
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    reward_type VARCHAR(20),
    delta VARCHAR(20),
    reward_id VARCHAR(10),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_credit_compensation_doc
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_credit_compensation_doc;

CREATE TABLE qbc_sci_credit_compensation_doc
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    state VARCHAR(20),
    detail TEXT,
    document_id VARCHAR(10),
    doc_position INTEGER(2),
    doc_value DECIMAL(18,2),
    doc_date VARCHAR(20),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_credit_construct
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_credit_construct;

CREATE TABLE qbc_sci_credit_construct
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    reward_type VARCHAR(20),
    delta VARCHAR(20),
    reward_id INTEGER(10),
    reward_history_id INTEGER(10),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_credit_construct_doc
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_credit_construct_doc;

CREATE TABLE qbc_sci_credit_construct_doc
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    state VARCHAR(20),
    detail TEXT,
    document_id VARCHAR(10),
    doc_position INTEGER(2),
    doc_value DECIMAL(18,2),
    doc_date VARCHAR(20),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_devolution
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_devolution;

CREATE TABLE qbc_sci_devolution
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    campaign_id INTEGER(10),
    sell_document VARCHAR(20),
    order_item INTEGER(10),
    order_id INTEGER(10),
    credits DECIMAL(18,2),
    cash DECIMAL(18,2),
    coupon VARCHAR(20),
    unit INTEGER(5),
    processed INTEGER(1) DEFAULT 0,
    start_date DATE,
    PRIMARY KEY (id),
    INDEX qbc_sci_devolution_order_index (order_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_devolution_doc
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_devolution_doc;

CREATE TABLE qbc_sci_devolution_doc
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    state VARCHAR(11),
    detail VARCHAR(255),
    document_id VARCHAR(20),
    doc_position VARCHAR(10),
    doc_date DATE,
    doc_value DECIMAL(18,2),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_error
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_error;

CREATE TABLE qbc_sci_error
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    method VARCHAR(50),
    args TEXT,
    error VARCHAR(20),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_offer_closure
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_offer_closure;

CREATE TABLE qbc_sci_offer_closure
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    merchant_id VARCHAR(10),
    campaign_id VARCHAR(10),
    sales_documents TEXT,
    devolution_documents TEXT,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_offer_closure_doc
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_offer_closure_doc;

CREATE TABLE qbc_sci_offer_closure_doc
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    state VARCHAR(20),
    detail TEXT,
    document_id VARCHAR(10),
    doc_position INTEGER(2),
    doc_value DECIMAL(18,2),
    doc_date VARCHAR(20),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_payment
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_payment;

CREATE TABLE qbc_sci_payment
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    order_id VARCHAR(20),
    item_id VARCHAR(20),
    extra_data TEXT,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    unit INTEGER(10),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_payment_doc
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_payment_doc;

CREATE TABLE qbc_sci_payment_doc
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    state VARCHAR(20),
    detail TEXT,
    request_invoice_number VARCHAR(10),
    request_invoice_position INTEGER(2),
    request_invoice_date VARCHAR(20),
    request_invoice_value DECIMAL(18,2),
    financial_document VARCHAR(10),
    commission_payment_number VARCHAR(10),
    compensation_number VARCHAR(10),
    document_id VARCHAR(10),
    doc_position INTEGER(2),
    doc_value DECIMAL(18,2),
    doc_date VARCHAR(20),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_payment_sent
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_payment_sent;

CREATE TABLE qbc_sci_payment_sent
(
    id INTEGER(10) NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    gd_id VARCHAR(50),
    process_date DATE,
    sent_date DATETIME,
    update_date DATETIME,
    status TEXT,
    resend INTEGER(5),
    sap_doc VARCHAR(50),
    sell_date DATE,
    PRIMARY KEY (id),
    INDEX sap_doc (sap_doc)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_rewards_expiration
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_rewards_expiration;

CREATE TABLE qbc_sci_rewards_expiration
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    reward_type VARCHAR(20),
    user_id INTEGER(10),
    expiration DATE,
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_sell
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_sell;

CREATE TABLE qbc_sci_sell
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    order_id VARCHAR(20),
    pos_number VARCHAR(20),
    pos_type VARCHAR(5),
    item_id VARCHAR(20),
    giftcard INTEGER(1) DEFAULT 0,
    processed INTEGER(1) DEFAULT 0,
    unit INTEGER(10) DEFAULT 1,
    rewards_used TEXT,
    is_cancell INTEGER DEFAULT 0,
    PRIMARY KEY (id),
    INDEX qbc_sci_sell_petition_index (petition_id),
    INDEX qbc_sci_sell_item_index (item_id),
    INDEX qbc_sci_sell_order_id_index (order_id),
    INDEX qbc_sci_sales_increment_id (order_id),
    INDEX qbc_sci_sales_item_id (item_id),
    INDEX qbc_sci_sales_unit (unit)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_sell_change_petition
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_sell_change_petition;

CREATE TABLE qbc_sci_sell_change_petition
(
    id INTEGER(10) NOT NULL AUTO_INCREMENT,
    peticion_old VARCHAR(24),
    peticion_new VARCHAR(24),
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_sell_doc
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_sell_doc;

CREATE TABLE qbc_sci_sell_doc
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    state VARCHAR(20),
    detail TEXT,
    document_id VARCHAR(10),
    doc_position INTEGER(2),
    doc_value DECIMAL(18,2),
    doc_date VARCHAR(20),
    PRIMARY KEY (id),
    INDEX qbc_sci_sell_doc_petition_index (petition_id),
    INDEX qbc_sci_sell_doc_document_id_index (document_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_sell_doc_delete
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_sell_doc_delete;

CREATE TABLE qbc_sci_sell_doc_delete
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    petition_id VARCHAR(50),
    state VARCHAR(20),
    detail TEXT,
    document_id VARCHAR(10),
    doc_position INTEGER(2),
    doc_value DECIMAL(18,2),
    doc_date VARCHAR(20),
    PRIMARY KEY (id),
    INDEX qbc_sci_sell_doc_delete_petition_index (petition_id),
    INDEX qbc_sci_sell_doc_delete_document_id_index (document_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_sell_pending
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_sell_pending;

CREATE TABLE qbc_sci_sell_pending
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    item VARCHAR(20),
    unit INTEGER(10),
    status VARCHAR(10) DEFAULT 'PENDING',
    PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_security_customer_login_attempts
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_security_customer_login_attempts;

CREATE TABLE qbc_security_customer_login_attempts
(
    username VARCHAR(256) NOT NULL,
    attempts INTEGER(10),
    PRIMARY KEY (username)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_security_reset_password_history
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_security_reset_password_history;

CREATE TABLE qbc_security_reset_password_history
(
    mail VARCHAR(256) NOT NULL,
    last_send VARCHAR(50),
    PRIMARY KEY (mail)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_subhome
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_subhome;

CREATE TABLE qbc_subhome
(
    entity_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    color VARCHAR(255) DEFAULT 'default' NOT NULL,
    identifier VARCHAR(255) DEFAULT 'default' NOT NULL,
    page_id VARCHAR(255) DEFAULT '1' NOT NULL,
    option_id VARCHAR(255),
    is_visible int(10) unsigned,
    image VARCHAR(255),
    PRIMARY KEY (entity_id),
    UNIQUE INDEX UNQ_QBC_SUBHOME_NAME (name)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- pagosonline
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS pagosonline;

CREATE TABLE pagosonline
(
    pagosonline_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    order_id int(10) unsigned,
    estado_pol int(10) unsigned,
    riesgo int(10) unsigned,
    codigo_respuesta_pol int(10) unsigned,
    ref_pol int(10) unsigned,
    extra_uno VARCHAR(255),
    extra_dos VARCHAR(255),
    medio_pago int(10) unsigned,
    tipo_medio_pago VARCHAR(2),
    cuotas int(10) unsigned,
    valor DECIMAL(14,2),
    iva DECIMAL(14,2),
    valor_adicional DECIMAL(14,2),
    fecha_transaccion DATETIME,
    cus int(10) unsigned,
    banco_pse VARCHAR(25),
    transaccion_id int(10) unsigned,
    usuario_id int(10) unsigned,
    banco_id int(10) unsigned,
    medio_pago_id int(10) unsigned,
    comision_pol VARCHAR(64),
    estado_transaccion VARCHAR(32),
    transaccion_banco_id int(10) unsigned,
    codigo_autorizacion VARCHAR(255),
    email_comprador VARCHAR(255),
    nickname_comprador VARCHAR(255),
    nickname_vendedor VARCHAR(255),
    descripcion VARCHAR(255),
    intentos int(10) unsigned,
    ciclo_pse VARCHAR(64),
    fecha DATETIME,
    moneda VARCHAR(3),
    mensaje_respuesta_pol VARCHAR(64),
    mensaje_error_banco VARCHAR(128),
    codigo_error_banco VARCHAR(64),
    tasa_cambio DECIMAL(14,2),
    ip VARCHAR(32),
    numero_cliente int(10) unsigned,
    pago_recurrente int(10) unsigned,
    numero_visible VARCHAR(16),
    tarjeta_habiente VARCHAR(50),
    franquicia VARCHAR(64),
    direccion_cobro VARCHAR(255),
    ciudad_cobro VARCHAR(25),
    direccion_envio VARCHAR(255),
    ciudad_envio VARCHAR(25),
    telefono VARCHAR(50),
    telefono_oficina VARCHAR(50),
    pais_envio VARCHAR(2),
    pais_cobro VARCHAR(2),
    pse_referencia_uno VARCHAR(128),
    pse_referencia_dos VARCHAR(128),
    pse_referencia_tres VARCHAR(128),
    PRIMARY KEY (pagosonline_id),
    UNIQUE INDEX UNQ_ORDER (order_id),
    INDEX order_id (order_id),
    INDEX pagosonline_increment_id (order_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- pagosonline_response
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS pagosonline_response;

CREATE TABLE pagosonline_response
(
    response_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    code int(10) unsigned,
    label VARCHAR(255),
    PRIMARY KEY (response_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- pagosonline_state
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS pagosonline_state;

CREATE TABLE pagosonline_state
(
    state_id int(10) unsigned NOT NULL AUTO_INCREMENT,
    code int(10) unsigned,
    label VARCHAR(255),
    PRIMARY KEY (state_id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- treasury_types
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS treasury_types;

CREATE TABLE treasury_types
(
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    code VARCHAR(256) NOT NULL,
    description VARCHAR(256) NOT NULL,
    iva int(10) unsigned NOT NULL,
    ica DECIMAL(8,2) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE INDEX UNQ_CODE (code)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- groupdeals
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS groupdeals;

CREATE TABLE groupdeals
(
    groupdeals_id int(11) unsigned NOT NULL AUTO_INCREMENT,
    product_id INTEGER NOT NULL,
    merchant_id INTEGER NOT NULL,
    minimum_qty INTEGER NOT NULL,
    maximum_qty INTEGER NOT NULL,
    target_met_email INTEGER NOT NULL,
    coupon_barcode TEXT NOT NULL,
    coupon_merchant_address INTEGER NOT NULL,
    coupon_merchant_contact INTEGER NOT NULL,
    coupon_expiration_date DATE,
    coupon_price INTEGER NOT NULL,
    coupon_fine_print INTEGER NOT NULL,
    coupon_highlights INTEGER NOT NULL,
    coupon_merchant_description INTEGER NOT NULL,
    coupon_business_hours INTEGER NOT NULL,
    coupon_merchant_logo INTEGER NOT NULL,
    coupon_additional_info TEXT NOT NULL,
    position INTEGER NOT NULL,
    title_long VARCHAR(140) DEFAULT '' NOT NULL,
    title_midium VARCHAR(100) DEFAULT '' NOT NULL,
    title_short VARCHAR(40) DEFAULT '' NOT NULL,
    beneffits TEXT NOT NULL,
    deal_instructions VARCHAR(4096) DEFAULT '' NOT NULL,
    conditions TEXT NOT NULL,
    edition_state int(10) unsigned NOT NULL,
    publication_state int(10) unsigned NOT NULL,
    product_type int(10) unsigned NOT NULL,
    expiration_date VARCHAR(100),
    tcc int(10) unsigned NOT NULL,
    negociation_type int(10) unsigned NOT NULL,
    agreement_type int(10) unsigned NOT NULL,
    buys_per_user int(10) unsigned NOT NULL,
    video_html5 VARCHAR(4096),
    video_flash VARCHAR(4096),
    reference int(10) unsigned NOT NULL,
    payment_id VARCHAR(1024) DEFAULT '' NOT NULL,
    boost_sales int(10) unsigned DEFAULT 0,
    locations VARCHAR(100) DEFAULT '' NOT NULL,
    et_gain FLOAT,
    active_date DATETIME,
    treasury_type int(10) unsigned,
    commercial_name_id int(10) unsigned NOT NULL,
    orders_count int(10) unsigned DEFAULT 0,
    active_offer INTEGER(1) DEFAULT 1,
    is_closed INTEGER(10) DEFAULT 0,
    qty_sold INTEGER DEFAULT 0,
    init_stock INTEGER(10) DEFAULT 0,
    with_personalized_coupons INTEGER(5) DEFAULT 0,
    code_type INTEGER(5) DEFAULT 0,
    PRIMARY KEY (groupdeals_id),
    INDEX fk_treasury_type (treasury_type),
    INDEX product_id (product_id),
    CONSTRAINT fk_treasury_type
        FOREIGN KEY (treasury_type)
        REFERENCES treasury_types (id)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- qbc_sci_closure
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS qbc_sci_closure;

CREATE TABLE qbc_sci_closure
(
    Id INTEGER(20) NOT NULL AUTO_INCREMENT,
    NitAliado VARCHAR(50),
    CampanaId VARCHAR(50),
    Venta VARCHAR(50),
    FechaV DATE,
    ValorV DECIMAL(10,3),
    Devolucion VARCHAR(50),
    FechaD DATE,
    ValorD DECIMAL(10,3),
    PagoAliado VARCHAR(100),
    PorcentajeComision DECIMAL(18,3),
    PorcentajeIVAComision DECIMAL(18,3),
    PRIMARY KEY (Id)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
