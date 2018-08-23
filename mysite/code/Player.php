<?php
namespace SS\Test\Polymorphic;

use SilverStripe\ORM\DataObject;

class Player extends DataObject {

    private static $table_name = 'Player';

    private static $db = array(
        "Title" => "Varchar"
    );

    private static $has_many = array(
        "Fans" => ZFan::class . ".FanOf"
    );

    private static $default_records = array(
        array('Title' => 'Carey Price')
    );


}
