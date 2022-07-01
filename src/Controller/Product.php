<?php
namespace APP\Controller;

use APP\Model\Validation;
use APP\Model\Product;
use APP\Model\Provider;

require_once '../../vendor/autoload.php';
use APP\Utils\Redirect;
if(empty($_POST)){
    Redirect::redirect(
            type:'error',
            message:'Requisição inválida!!!'

    );
}
$productName = $_POST["name"];
$productQuantity = $_POST["quantity"];
$productCost = $_POST["cost"];
$productProvider = $_POST["provider"];
$barCode = $_POST["barCode"];

$error= array();

if(!Validation::validateName($productName))
{
    array_push($error,'O nome do produto deve conter ao menos 5 caracteres entre letras e números!!!');

}

if(!Validation::validateNumber($productQuantity))
{
    array_push($error,'Aquantidade em estoque deve ser superior à uma unidade!!!');
    
}

if(!Validation::validateNumber($productCost))
{
    array_push($error, 'o custo de aquisição deve ser superior ou igual à R$ 1');
}

if(!Validation::validateBarCode($barCode))
{
    array_push($error, 'o codigo de barra não é válido segundo nossos parâmetros!!!');
}

if($error){
    Redirect::redirect(
        message: $error,
        type: 'warning'
    );
}else{
    $product = new Product(
            name: $productName,
            barCode: $barCode,
            fixedCost : 0.5,
            cost:$productCost,
            tributes: 0.75,
            quantity:$productQuantity,
            provider: new Provider()
    );
   
    Redirect::redirect(
        message:'Produto cadastrado com sucesso!!'
    );
}



?>