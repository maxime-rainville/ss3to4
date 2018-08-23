<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\CMS\Model\SiteTree;

class Page extends SiteTree
{
    private static $db = array(
    );

    private static $has_one = array(
        'PolyObject' => DataObject::class
    );
}
