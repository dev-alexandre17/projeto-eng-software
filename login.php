<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/Loginn.css">
    <link rel="shortcut icon" href="Imagens/favicon.ico" type="image/x-icon">
</head>
<body>
    <main>
        <h1>Entrar</h1>
        <div class="social-media">
            <a target="Google" href="https://www.google.com.br/">
                <img src="Imagens/ImagensLogin/google.png" alt="Google">
            </a>
            <a target="facebook" href="https://pt-br.facebook.com/login.php/">
                <img src="Imagens/ImagensLogin/facebook.png" alt="Facebook">
            </a>
            <a target="Linkedin" href="https://www.linkedin.com/login/pt">
                <img src="Imagens/ImagensLogin/linkedin.png" alt="Linkedin">
            </a>
        </div>

        <div class="alternative">
            <span>ou</span>
        </div>

        <form action="">

            <label for="email">
                <span>E-mail</span>
                <input type="email" name="password" placeholder="Digite seu E-mail">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" name="password" placeholder="Digite sua Senha" required>
            </label>
            <a target="*" href="Cadastro.html">Cadastrar</a>

            <button type="submit" ><a href="index.html"> Entrar </a></button> 
        </form>
    </main>
    <section class="images">
        <img src="Imagens/ImagensLogin/dslr-camera.png" alt="foto">
        <div class="circle"></div>
    </section>
    
</body>
</html>
<?php
  if (isset($_POST['nome']) && ($_POST['email'])) {
    echo "Dados válidados.";
  }
?>