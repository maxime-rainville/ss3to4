<?php
namespace SS\Test\Polymorphic;

class HockeyTeam extends Team {

    private static $db = array(
        'Rink' => 'Varchar'
    );

    private static $default_records = array(
        array(
            'Title' => 'Montreal Canadiens',
            'Rink' => 'Centre Bell'
        )
    );
}
