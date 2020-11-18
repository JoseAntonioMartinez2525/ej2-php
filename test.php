<?php
$operacion =$_POST['lista'];

switch ($operacion) {
    case 'sumar': echo $_POST['n1']+$_POST['n2'];
        break;
    case 'restar': echo $_POST['n1']-$_POST['n2'];
        break;
    case 'multiplicar': echo $_POST['n1']*$_POST['n2'];
        break;
    case 'dividir': echo $_POST['n1']/$_POST['n2'];
        break;        
    default:
        # code...
        break;
}
?>
