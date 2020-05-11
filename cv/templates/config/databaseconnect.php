
<?php

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=sql283.main-hosting.eu;dbname=u620771931_cvprofile", 'u620771931_amry', 'p3rs0n40444');
        }
        return self::$bdd;
    }
}
?>