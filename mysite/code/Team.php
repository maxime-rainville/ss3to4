<?php

class Team extends DataObject {

    private static $db = array(
        "Title" => "Varchar"
    );

    private static $has_many = array(
        "Fans" => "ZFan.FanOf"
    );

    private static $default_records = array(
        array(
            'Title' => 'Montreal Expos'
        )
    );
}
