<?php 
class People {
    public $id;
    public $name;
    public $eyecolour;

    public function display() {
        echo "Id: {$this->id} name: {$this->name} eyecolour: {$this->eyecolour} <br>";
    }

    public static function get() {
        $result = self::db()->prepare("select * from people limit 1");
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'People');
        $result->execute();
        return $result->fetch();
    }

    public static function getall() {
        $result = self::db()->prepare("select * from people");
        $result->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,'People');
        $result->execute();
        return $result->fetchAll();
    }

    public static function db() {
        return new PDO("mysql:host=127.0.0.1;dbname=mydb", 'root', '', array(PDO::ATTR_PERSISTENT => true));
    }
}


$person = People::get();
$person->display();
$all_people = People::getall();

foreach($all_people as $single_person) {
    //$single_person is an instance of People
    $single_person->display();
}
 ?>