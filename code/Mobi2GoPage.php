<?php

class Mobi2GoPage extends Page{
    private static $db = array(
        'Mobi2GoStoreName' => 'Text',
    );

    private static $description = 'Mobi2Go ordering page';

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $field = new TextField('Mobi2GoStoreName');
        $field->setRightTitle('eg. [store-name].mobi2go.com');

        $fields->addFieldsToTab('Root.Main', $field, 'Metadata');
        $fields->removeFieldFromTab('Root.Main', 'Content');
        return $fields;
    }
}

class Mobi2GoPage_Controller extends Page_Controller {

}