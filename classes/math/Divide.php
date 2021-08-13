<?php
namespace classes\math;

class Divide {
    public function divide($n1, $n2) {
        $d = $n1 / $n2;
        if (is_float($d)) {
            return round($d, 2);
        }

        return $d;
    }
}

?>