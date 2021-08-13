<?php
namespace classes\util;

class Verifyer {
    
    public static function verifyNumber($n)
    {
        //if $n passes in validation, so returns itself, otherwise, returns false.
        return filter_var($n, FILTER_VALIDATE_INT) ? $n : false;
    }

    public static function verifyOperator(string $op){
        static $operators = array ("Add", "Subtract", "Multiply", "Divide");

        //If $op is in array, so this method returns itself, otherwise, returns false.
        return in_array($op, $operators) ? $op : false;
    }


}
?>