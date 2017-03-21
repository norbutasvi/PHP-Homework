<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/20/2017
 * Time: 4:26 PM
 */

namespace app\classes\magicmethods;

class MagicMethods {

    private $age;
    private $name;
    private $number;
    private $text;
    private $toString;

    public function __construct($text) {
        $this->text = $text;
        echo $text . '<br>';
    }

    public function setMyAge($age) {
        $this->age = $age;
    }

    public function getMyAge() {
        echo 'Your age is: ' . $this->age . '<br>';
    }

    public function __set($name, $value) {
        echo 'I just set my ' . $name . ' to ' . $value . '<br>';
        $this->name = $value;
    }

    public function __get($lastname) {
        echo 'I just asked for my lastname ' . $lastname . '<br>';
    }

    public function __call($name, $parameter) {
        echo 'I just executed __call function with name ' . $name . ' with these parameters:<br>';
        print_r($parameter);
        echo '<br>';
    }

    public static function __callStatic($name, $parameter) {
        echo 'I just executed __callStatic function named ' . $name . ' with parameters ';

        foreach ($parameter as $key) {
            echo $key . ' ';
        }

        echo '<br>';
    }

    public function setToString($toString) {
        $this->toString = $toString;
    }

    public function __toString() {
        return $this->toString;
    }

    public function  __isset($name) {
        echo 'I just executed _isset for undefined ' . $name . '<br>';
    }

    public function __unset($name) {
        echo 'I just executed _unset for undefined ' . $name . '<br>';
    }

    public function __invoke($numberOfKids) {
        $this->number = $numberOfKids;

        return 'Has a number of kids: ' . $this->number . '<br>';
    }

    public function __clone() {
        echo 'Cloned.';
    }

    public function __debugInfo() {
        return [
            'myage' => $this->age
        ];
    }

    public function __destruct() {
        echo 'Destructed.';
    }
}