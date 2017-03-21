<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 3/20/2017
 * Time: 4:26 PM
 */

namespace app\classes\magicmethods;

    class MagicMethods2 {
        private $age;
        private $personal_code;

        public function setAge($age) {
            $this->age = $age;
        }

        public function getAge() {
            return $this->age;
        }

        public function setPersonalCode($personalcode) {
            $this->personal_code = $personalcode;
        }

        public function getPersonalCode() {
            return $this->personal_code;
        }

        public function __sleep() {
            return array("age"); // tik age yra serializuojamas
        }

        public function __wakeup() {
            if($this->age == 12) {
                // siuo atveju idealiai istrauktumem personal code duomenis is duombazes
                $this->personal_code = "45215421248";
            }
        }
    }
