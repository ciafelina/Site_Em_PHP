<?php 

    session_start();
   
    if( ($_POST['Email'])){

    include_once "connect.php";
    $EmailCliente = $_POST['Email']; 
    $NomeClinte = $_POST['NomeCompleto']; 
    $Telefone = $_POST['Telefone']; 
    $TipoLogin = 'S';  

    $NomeClinte = strtoupper($NomeClinte);


    $SQLCodCli = "select CodCliente from cadastro order by CodCliente desc limit 1";
    $SQlResult = $conn->query($SQLCodCli);


    $row = $SQlResult->fetch_assoc();
    $CodCliente = $row["CodCliente"] + 1;


    $sql = "select EmaiCliente from cadastro where EmaiCliente = '$EmailCliente'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        unset($_SESSION['Email']);
        $_SESSION['erro'] = "Email de  Usúario ja cadastrado, Verifique!!";
        header('location: Cadastro-Site.php');
        exit;
    }else{
        $SQLInsert = "insert into cadastro values ('$CodCliente','$NomeClinte','$EmailCliente','$Telefone','$TipoLogin')";
        $resultInsert = $conn->query($SQLInsert);;
       $_SESSION['Email'] = $EmailCliente;
        header('location: index.php');
        exit; 
    }
    }else{
        header('location: index.php');
        exit; 
    }


    



?>