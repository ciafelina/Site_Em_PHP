<?php 
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <header>
        <div class="interface">
            <h1>Logue e faça a sua inscrição</h1>
            <i class="bi bi-door-open"></i>
            <nav class="meu-descktop">
                <ul>
                    
                    <li><a href="ofertas.html">Ofertas</a></li>
                    <li><a href="especialidades.php">Especialidades</a></li>
                    <li><a href="index.php">Sobre</a></li>
                    <li><a href="#">Ajuda</a></li>
                </ul>
            </nav>
            <div class="btn-Login">
                <a href="Cadastro-Site.php">
                    <button>Login</button>
                </a>
            </div>
    
        </div>
    </header>

    <main>
        <div class="Conteiner">
            <div class="form-imagem">
                <img src="Imagens/Login.jpg" alt="">
            </div>
            <div class="form">
                <form action="Cadastro.php" method="post" id="forumario">
                    <div class="Fomr-Header">
                        <div class="Title">
                            <h1>Cadastre-se</h1>
                        </div>
                    </div>
                    <div class="Erro-Cadastro">
                    <?php 
                        if(!empty($_SESSION['erro'])){
                            $Erro = $_SESSION['erro'];
                            echo "<p style='color: red; margin-left: 120px; margin-bottom: -40px;'>$Erro</p>";
                            //echo "<p> $Erro </p>";
                            unset($_SESSION['erro']);
                        }
                    ?>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <label for="NomeCompleto">Digite seu Nome Completo</label>
                            <input class="input required" name="NomeCompleto" id="NomeCompleto" type="text" placeholder="Digite seu nome" oninput="NameValido()">
                            <span class="span-require">Seu nome deve conter pelos menso 3 caracteres</span>
                        </div>
                        <div class="input-box">
                            <label for="Email">Digite seu Email</label>
                            <input class="input required" name="Email" id="Email" type="email" placeholder="Digite seu Email" oninput="EmialVerifa()">
                            <span class="span-require">Email invalido, digite um email valido</span>
                        </div>
                        <div class="input-box-s1">
                            <label for="Telefone">Digite seu Telefone</label>
                            <input class="input required" name="Telefone" id="Telefone" type="tel" placeholder="(xx) xxxx-xxxx"  oninput="TelefoneVer()">
                            <span class="span-require">Numero de telefone invalido, digite um telefone    valido</span>
                        </div>
                    </div>
                    <div class="btn-Login-Form">
                        <a href="Login.php">Já tem um Login ?</a>
                    </div>
                    <div class="continue-buton">
                        <button name="submits" id="submits" type="submit">Continuar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
<script>
    const form = document.getElementById('forumario')
    const campos = document.querySelectorAll('.required')
    const spans  = document.querySelectorAll('.span-require')
    const VerEmail = /^\w+([-+.']\w+)*@\w+([-.]\w)*\.\w+([-.]\w+)*$/

    form.addEventListener('submit',function(event){
        event.preventDefault()
        //NameValido()
        //TelefoneVer()
        //EmialVerifa()
        if (NameValido() && TelefoneVer() && EmialVerifa()) {
            form.submit();
        }else{
            NameValido()
            TelefoneVer()
            EmialVerifa()
        }
    })

    function setErro(index){
        campos[index].style.border = '2px solid #e63636'
        spans[index].style.display = 'block'
    }
    function RemoveErro(index){
        campos[index].style.border = ''
        spans[index].style.display = 'none'
    }


    function NameValido(){
        if(campos[0].value.length < 3){
            setErro(0)
            return false
        }else{
            RemoveErro(0)
            return true
        }
    }
    function TelefoneVer(){
        if(campos[2].value.length < 9){
            setErro(2)
            return false
        }else{
            RemoveErro(2)
            return true
        }
    }
    function EmialVerifa(){
        if (!VerEmail.test(campos[1].value))
        {
            setErro(1);
            return false
        }else{
            RemoveErro(1)
            return true
        }
    }
</script>
</html>