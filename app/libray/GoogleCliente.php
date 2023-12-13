<?php 
    namespace app\libray;

use Exception;
use Google\Client;
    use GuzzleHttp\Client as GuzzleClient;
    use Google\Service\Oauth2 as ServiceOauth2;
    use Google\Service\Oauth2\Userinfo;

    class GoogleCliente{


        public readonly Client $Client; 
        private Userinfo $data;


        public function __construct()
        {
                $this->Client = new Client;
        }
        public function init(){

            $guzzleClient = new GuzzleClient(['curl' => [CURLOPT_SSL_VERIFYPEER => False]]);
            $this->Client->setHttpClient($guzzleClient);
            $this->Client->setAuthConfig('credentials.json');
            $this->Client->setRedirectUri('http://localhost/Site-Grande/Login.php');
            $this->Client->addScope('email');
            $this->Client->addScope('profile');
        }

        public function Authorized(){
            if(isset($_GET['code'])){
               $Token =   $this->Client->fetchAccessTokenWithAuthCode($_GET['code']);
               $this->Client->setAccessToken($Token['access_token']);
               $googleService = new ServiceOauth2($this->Client);
               $this->data = $googleService->userinfo->get();
               //var_dump($this->data['email']);

               include "connect.php";

               $NameClient = $this->data['name'];
               $NameClient = strtoupper($NameClient);
                
               $EmailClient = $this->data['email'];
               $_SESSION['Profile'] = $this->data['profile'];
               $_SESSION['email'] = $EmailClient;
               $_SESSION['NomeClinte'] = $NameClient;

               $SQLCodCli = "select CodCliente from cadastro order by CodCliente desc limit 1";
               $SQlResult = $conn->query($SQLCodCli);
           
           
               $row = $SQlResult->fetch_assoc();
               $CodCliente = $row["CodCliente"] + 1;
           
                try{

                    $sqlCons = "select NomeCliente,EmaiCliente from cadastro where NomeCliente = '$NameClient' and EmaiCliente = '$EmailClient'";

                    $Result = $conn->query($sqlCons);

                    if($Result->num_rows > 0){
                        $_SESSION['Email'] = $EmailClient;
                        header('location: index.php');
                        exit;    
                    }else{
                        $sql = "insert into cadastro values ('$CodCliente','$NameClient','$EmailClient','','G')";
                        $resultInsert = $conn->query($sql);
                        $_SESSION['Email'] = $EmailClient;
                        header('location: index.php');
                        exit;
                    }
                } catch (Exception $e){
                    $_SESSION['ErroLogin'] = "Erro no cadastro de Usuario!!";
                    header('location: Login.php');
                    exit;
                }
                

            } 
        }
        public function getData(){
            return $this->data;
        }
        public function generateAuthLink(){

            return $this->Client->createAuthUrl();
        }
    }


?>