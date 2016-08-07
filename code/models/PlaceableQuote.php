<?php
/**
 * Description
 *
 * @package silverstripe
 * @subpackage mysite
 */
class PlaceableQuote extends DataObject
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Quote';

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
        'Title' => 'Text',
        'Quote' => 'Text'
    );

    /**
     * CMS Fields
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab(
            'Root.Main',
            array(
                TextareaField::create(
                    'Quote',
                    _t('Placeable.QUOTE', 'Quote')
                ),
                TextareaField::create(
                    'Title',
                    _t('Placeable.CITATION', 'Cited by')
                )->setRows(1)
            )
        );
        return $fields;
    }
}
