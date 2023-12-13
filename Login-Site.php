<?php 

session_start();
   
    if(($_POST['Email']) && $_POST['NomeCompleto']){
    
    include_once "connect.php";

    $EmailCliente = $_POST['Email']; 
    $NomeClinte = $_POST['NomeCompleto']; 

    $NomeClinte = strtoupper($NomeClinte);

    $sql = "select NomeCliente,EmaiCliente from cadastro where NomeCliente = '$NomeClinte' and EmaiCliente = '$EmailCliente'";

    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $_SESSION['Email'] = $EmailCliente;
        $_SESSION['NomeClinte'] = $NomeClinte;
        header('location: index.php');
        exit;      

    }else{
        $_SESSION['ErroLogin'] = 'Erro Login não encontrado, Verifique!!';
        unset($_SESSION['Email']);
        unset($_SESSION['NomeClinte']);
        header('location: Login.php');
        exit; 
    }
    }
    else{   
    header('location: Login.php');
    exit; 
}
?>