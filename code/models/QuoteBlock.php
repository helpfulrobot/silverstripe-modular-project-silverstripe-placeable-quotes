<?php
/**
 * Description
 *
 * @package silverstripe
 * @subpackage mysite
 */
class QuoteBlock extends BlockObject
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Quote';

    /**
     * Database fields
     * @var array
     */
    private static $db = array(
        'Quote' => 'Text',
        'Citation' => 'Text'
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
                    'Citation',
                    _t('Placeable.CITATION', 'Cited by')
                )->setRows(1)
            )
        );
        return $fields;
    }
}
class QuoteBlock_Controller extends BlockObject_Controller
{
    public function init() {
        parent::init();
    }
}
class QuoteBlock_Preset extends BlockObject_Preset
{
    /**
     * Singular name for CMS
     * @var string
     */
    private static $singular_name = 'Quote Preset';
}
