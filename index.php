<?php 
    session_start();
    //var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cantarell&family=Comfortaa:wght@500&family=Gabarito:wght@900&family=Noto+Sans+JP:wght@500&family=Playpen+Sans:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Principal">
        <header>
            <div class="interface">
                <div class="Icoone">
                    <h1>Seja Bem-Vindo</h1>
                </div>
                <nav class="meu-descktop">
                    <ul>
                        <li><a href="ofertas.html">Ofertas</a></li>
                        <li><a href="especialidades.php">Especialidades</a></li>
                        <li><a href="index.php">Sobre</a></li>
                        <li><a href="#">Ajuda</a></li>
                    </ul>
                </nav>
                <div class="btn-Login">
                    <?php if(isset($_SESSION['Email'])){
                        echo "<img class='img-login' style='height: 8%;position: absolute; top:20px; right:60px;transition: .3s;cursor: pointer;' src='Imagens/1361728.png' alt=''>";
                    }else{
                        echo "<a href='Cadastro-Site.php'>
                        <button>Login</button>
                        </a>";
                    }
                    ?>
                </div>
                <div class="Sair-btn">
                    <?php if(isset($_SESSION['Email'])){
                        echo "<button onclick='SairTelaJava()' style = 'padding: 10px 40px; color: white;
                        font-size: 18px;
                        font-weight: 600;
                        background-color: transparent;
                        border: 2px solid rgb(232, 232, 232);
                        border-radius: 30px;
                        cursor: pointer;
                        transition: .3s;'>Sair</button>";
                    }
                    ?>

                </div>
        
            </div>
        </header>
            <div class="helcome">
                <h1>explore a vida que você deseja viver. <br>coloque seu dinheiro para trabalhar</h1>
                <div class="Botao">
                    <button>Entrar em Contato</button>
                </div>
            </div> 
    </div>
    <main>
        <section class="Especialidades"> 
            <div class="interface">
                <h2 class="titulo">ESPECIALIDADES</h2>
                <div class="flex">
                    <div class="Especialidades-box">
                        <i class="bi bi-piggy-bank-fill"></i>   
                        <h3>Especialista financeiro</h3>
                        <p>Explore investimentos lucrativos em nosso site. Diversidade, análises e histórico comprovado. Eduque-se e inicie sua jornada agora!.</p>
                    </div>
                    <div class="Especialidades-box">
                        <i class="bi bi-motherboard"></i>
                        <h3>Tecnologia avançada</h3>
                        <p>Descubra oportunidades de investimento <br>inovadoras em nosso site. Com tecnologia <br>avançada, oferecemos diversidade, análises especializadas e um histórico comprovado. Eduque-se e inicie sua jornada rumo ao futuro financeiro agora!</p>
                    </div>
                    <div class="Especialidades-box">
                        <i class="bi bi-person-arms-up"></i>
                        <h3>Conselho Certo</h3>
                        <p>Explore oportunidades de investimento inovadoras <br>em nosso site, respaldadas pelo <br>Conselho Certo. Com tecnologia avançada, oferecemos diversidade,<br> análises especializadas e um histórico comprovado. Eduque-se e inicie sua jornada rumo ao futuro financeiro agora!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="ImagemFundo2">
        <div class="Texto">
            <h2>ajudando você a conectar os pontos. <br>para que você possa ver como <br>será a vida no futuro</h2>
            <hr> 
            <p>Explore oportunidades de investimento inovadoras em nosso site, <br>com conselhos certos para ajudar você a conectar os pontos. <br>Com tecnologia avançada, oferecemos diversidade, análises <br>especializadas e um histórico comprovado. Eduque-se e inicie sua jornada rumo ao futuro <br>financeiro agora!</p> 
        </div>
    </div>
    <footer class="Fim-Da-Pagina">
        <div class="interface">
            <div class="line-Footer borda">
                <div class="flex">
                    <div class="flex">  
                        <div class="btn-social">
                            <a href="https://github.com/ciafelina?tab=repositories" target="_blank"><button><i class="bi bi-github"></i></button></a>
                            <a href="https://br.linkedin.com" target="_blank"><button><i class="bi bi-linkedin"></i></button></a>
                            <a href="https://www.instagram.com" target="_blank"><button><i class="bi bi-instagram"></i></button></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="line-Footer">
                <p><i class="bi bi-envelope"></i> <a href="mailto:marquesjosethiago@gmail.com">marquesjosethiago@gmail.com</a></p>
            </div>
        </div>
    </footer>
    <script>
        function SairTelaJava(){ 
            window.location.href = 'Sair.php';
        }
        
    </script>
    
</body>
</html>
