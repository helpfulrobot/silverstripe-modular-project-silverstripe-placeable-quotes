<?php
/**
 * Description
 *
 * @package silverstripe
 * @subpackage mysite
 */
class QuotesBlock extends BlockObject
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Quotes';

    /**
     * Plural name for CMS
     * @var string
     */
    private static $plural_name = 'Quotes';

    /**
     * Database fields
     * @var array
     */
    private static $db = array(
        'Title' => 'Text'
    );

    /**
     * Many_many relationship
     * @var array
     */
    private static $many_many = array(
        'Quotes' => 'PlaceableQuote',
    );

    /**
     * {@inheritdoc }
     * @var array
     */
    private static $many_many_extraFields = array(
        'Quotes' => array(
            'Sort' => 'Int'
        )
    );

    /**
     * CMS Page Fields
     * @return FieldList
     */
    public function getCMSPageFields()
    {
        $fields = parent::getCMSPageFields();
        $fields->addFields(
            'Root.Main',
            array(
                GridField::create(
                    'Quotes',
                    _t('Placeable-Quotes.QUOTES', 'Quotess'),
                    $this->Quotes(),
                    GridFieldConfig_RelationEditor::create()
                        ->addComponent(new GridFieldOrderableRows())
                )
            )
        );
        $this->extend('updateCMSPageFields', $fields);
        return $fields;
    }
}
class QuotesBlock_Controller extends BlockObject_Controller
{
    public function init() {
        parent::init();
    }
}
class QuotesBlock_Preset extends BlockObject_Preset
{

}
