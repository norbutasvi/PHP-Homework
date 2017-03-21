<?php



function __autoload($klase) {
    // $klase kintamaji sudaro pradine direktorija (( dirname(__FILE__) )),
    // taip pat skyriklis DIRECTORY_SEPARATOR, kuris nurodys kuriose, kokiu lygiu direktorijose yra ta klase, nurodyta sios funkcijos pirmame parametre
    // taip pat str_replace tam tikru teksto vietu pakeitimui
    $klase = dirname(__FILE__) . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $klase) . '.php';

    // tikrinam ar norima klase kintamajame $klase egiztuoja;
    if(!file_exists($klase)) {
        echo $klase . ' neegzistuoja.';
    }

    // sekmes atveju autoloadinam klase
    require_once($klase);
}