<?php



/**
 * This class defines the structure of the 'qbc_newsletter_subscriber_history' table.
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
class QbcNewsletterSubscriberHistoryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'atmadmin.map.QbcNewsletterSubscriberHistoryTableMap';

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
        $this->setName('qbc_newsletter_subscriber_history');
        $this->setPhpName('QbcNewsletterSubscriberHistory');
        $this->setClassname('QbcNewsletterSubscriberHistory');
        $this->setPackage('atmadmin');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('history_id', 'HistoryId', 'INTEGER', true, 10, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', true, 10, null);
        $this->addColumn('state', 'State', 'VARCHAR', false, 255, null);
        $this->addColumn('unsubscription_date', 'UnsubscriptionDate', 'VARCHAR', false, 255, null);
        $this->addColumn('subscription_date', 'SubscriptionDate', 'VARCHAR', false, 255, null);
        $this->addColumn('list_id', 'ListId', 'VARCHAR', false, 255, null);
        $this->addColumn('list_name', 'ListName', 'VARCHAR', false, 255, null);
        $this->addColumn('actualized', 'Actualized', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // QbcNewsletterSubscriberHistoryTableMap
