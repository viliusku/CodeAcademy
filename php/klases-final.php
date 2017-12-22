<?php

final class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }

    // Here it doesn't matter if you specify the function as final or not
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

$a = new baseClass();
$a->test();

//class ChildClass extends BaseClass {} // duos klaida

class OtherClass {
    // Here it doesn't matter if you specify the function as final or not
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

class ChildClass extends OtherClass { // klaida nes yra final funkcija
    public function moreTesting(){
        echo 'Labas';
    }
}