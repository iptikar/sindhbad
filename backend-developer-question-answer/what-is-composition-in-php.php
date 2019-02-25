It looks like you are really confused about what "composition" is in OOP.

Composition is an association between two classes, where , for an instance of first class to be instantiated, it is mandatory to provide it with second class. In you particular diagram for Human to exists, it requires a Head. In code it would be:

<?
class Head {
}

class Human {
    private $head;
    public function __construct(Head $head) {
       $this->head = $head;
    }
}

$bob = new Human(new Head);
?>

And that's it. No debug_backtrace() and no singleton anti-pattern required. And, btw, this would look almost exactly the same in Java too, even with the option to have inner classes.

//As for your posted code. This would be wrong:

<?php
if (strcmp($traces[1]['class'], 'Human')) {
    echo "<br>Only human has head"; // Exception can be thrown here
    return NULL;
}
?>
The diagram did not say that only humans have a head. Only that human must have a head to be instantiated. You can also have $skipper = new Dog(new Head);, which would perfectly fine
