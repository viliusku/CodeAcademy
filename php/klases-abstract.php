<?php

abstract class AbstractClass {
    // Force Extending class to define this method
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);

    // Common method
    public function printOut() {
        echo $this->getValue() . "\n";
    }
}

//$a = new AbstractClass(); // klaida

class ConcreteClass extends AbstractClass
{
    protected function getValue() {
        return "ConcreteClass";
    }

    public function prefixValue($prefix) {
        echo  "{$prefix}_{$this->getValue()}";
    }
}

$a = new ConcreteClass();
$a->prefixValue('labas');