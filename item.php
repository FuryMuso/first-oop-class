<?php
//
//error_reporting(E_ALL);
//
//class banana {
//    public $type;
//
//    function squishy() {
//        return 'soft and squishy' . "";
//    }
//
//    function bruised() {
//        return 'brown bananas are icky' . "";
//    }
//}
//
//$yellowFruit = new banana();
//$yellowFruit->type = 'African';
//echo $yellowFruit->squishy();
//echo $yellowFruit->bruised();





error_reporting(E_ALL);

class banana {
    private $type;

    function __construct($type) {
        if (empty($this->type)); {
            $this->type = $type;
        }
    }

    function getType() {
        return 'brown bananas are ' . $this->type;
    }
}

$yellowFruit = new banana('soft and squishy');
echo $yellowFruit->getType();

?>