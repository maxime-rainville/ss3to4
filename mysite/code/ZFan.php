<?php
namespace SS\Test\Polymorphic;
use SilverStripe\ORM\DataObject;
use SilverStripe\Versioned\Versioned;


class ZFan extends DataObject {

    private static $db = array(
        "Title" => "Varchar"
    );

    private static $table_name = 'ZFan';

    // Generates columns FanOfID and FanOfClass
    private static $has_one = array(
        "FanOf" => DataObject::class
    );

    private static $extensions = array(
        Versioned::class
    );

    public function requireDefaultRecords() {
        parent::requireDefaultRecords();

        $fan1 = self::create();
        $fan1->Title = 'Maxime';
        Team::get()->First()->Fans()->add($fan1);
        $fan1->write();

        $fan1->Title = 'Max';
        $fan1->write();


        $fan2 = self::create();
        $fan2->Title = 'Denis';
        Player::get()->First()->Fans()->add($fan2);
        $fan2->write();

        $fan3 = self::create();
        $fan3->Title = 'Bruno';
        Team::get()->byID(2)->Fans()->add($fan3);
        $fan1->write();

        $fan3->Title = 'Bob';
        $fan3->write();
        $fan3->publishSingle();




    }
}
