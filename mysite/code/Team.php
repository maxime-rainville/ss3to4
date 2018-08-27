<?php
namespace SS\Test\Polymorphic;
use SilverStripe\ORM\DataObject;

class Team extends DataObject {

    private static $table_name = 'Team';

    private static $db = array(
        "Title" => "Varchar"
    );

    private static $has_many = array(
        "Fans" => ZFan::class . ".FanOf"
    );

    private static $default_records = array(
        array(
            'Title' => 'Montreal Expos'
        )
    );
}
