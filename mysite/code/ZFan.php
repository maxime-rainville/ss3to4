<?php

class ZFan extends DataObject {

    private static $db = array(
        "Title" => "Varchar"
    );

    // Generates columns FanOfID and FanOfClass
    private static $has_one = array(
        "FanOf" => "DataObject"
    );

    public function requireDefaultRecords() {
        parent::requireDefaultRecords();

        $fan1 = self::create();
        $fan1->Title = 'Maxime';
        Team::get()->First()->Fans()->add($fan1);
        $fan1->write();


        $fan2 = self::create();
        $fan2->Title = 'Denis';
        Player::get()->First()->Fans()->add($fan2);
        $fan2->write();




    }
}
