<?php
require_once("classes/util/Verifyer.php");
require_once("classes/util/Requirer.php");
use classes\util\Verifyer;
use classes\util\Requirer;


$firstNumber = Verifyer::verifyNumber($_POST['n1']);
$secondNumber = Verifyer::verifyNumber($_POST['n2']);
$operator = Verifyer::verifyOperator($_POST['operator']);

if ($firstNumber === false || $secondNumber === false){
    echo 'Invalid arguments passed in this operation. Please, comeback and try again with valid values in number fields.';
    require_once("./index.php");
    die;
}

if ($operator === false) {
    echo 'Invalid operator. Please, comeback and try again with a valid operator.';
    require_once("./index.php");
    die;
}



//list files in selected class directory, in this case, list all files from 'math' classes;
$dir = Requirer::listClassDirectory("math");

switch ($operator) {
    case 'Add':
        Requirer::requireClassFile("math", $operator);
        
        $result = new classes\math\Add();
        echo 'Add result: ' . $firstNumber . " + " . $secondNumber . " = " . $result->add($firstNumber, $secondNumber);
        break;
        
    case 'Subtract':
        Requirer::requireClassFile("math", $operator);
        
        $result = new classes\math\Subtract();
        echo 'Subtract result: ' . $firstNumber . " - " . $secondNumber . " = " . $result->subtract($firstNumber, $secondNumber);
        break;
        
    case 'Multiply':
        Requirer::requireClassFile("math", $operator);
        
        $result = new classes\math\Multiply();
        echo 'Multiply result: ' . $firstNumber . " * " . $secondNumber . " = " . $result->multiply($firstNumber, $secondNumber);
        break;
        
    case 'Divide':
        Requirer::requireClassFile("math", $operator);
        
        $result = new classes\math\Divide();
        echo 'Divide result: ' . $firstNumber . " / " . $secondNumber . " = " . $result->divide($firstNumber, $secondNumber);
        break;
        
    default:
        # code...
        break;
}

require_once("./index.php");










$get = array($firstNumber,$secondNumber,$operator);
function mostra(array $itens) {
    echo '<pre>';
    foreach ($itens as $item){
        echo 'Item: ' . $item . PHP_EOL . "\n";
    }
    echo '</pre>';
}
?>