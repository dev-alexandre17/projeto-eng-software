<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/formulario.css" media="screen"/>
    <title> Cadastro </title>
</head>
<body>
    <section class = "formulario">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="box-container">
        <legend>Cadatre-se gratuitamente </legend>
          <br><br>
            <div class="inputBox">
              <input type="text" name="name" id="nome" class="inputUser" required>
              <label for="nome" class="labelInput">Nome</label>
            </div>
            <br><br>
            <div class="inputBox">
              <input type="text" name="email" id="email" class="inputUser" required>
              <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
              <input type="text" name="password" id="senha" class="inputUser" required>
              <label for="senha" class="labelInput">Senha</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="phoneNumber" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
            </div>
            <br>
            <input type="submit" name="enviar" id="submit" value="Send">
        </div>
      </form>
    </section>
    <section class="imagem-formulario">
        <div class="imagem">
            <img src="https://images.pexels.com/photos/2667528/pexels-photo-2667528.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="mulher-preta">
        </div>
    </section>
</body>
</html>
<?php
  $user_name = $_POST["name"];
  $user_email = $_POST["email"];
  $user_password = $_POST["password"];
  $user_phone_numer = $_POST["phoneNumber"];
  if ($user_name == "admin" && $user_email == "admin123@gmail.com" && $user_password == "123" &&
  $user_phone_numer == "(81) 99999-9999") {
    print "<script> type='text/javascript'>alert('Dados válidados com sucesso!');</script>";
  } else { 
    print "<script> type='text/javascript'>alert('Dados inválidos. Tente novamente mais tarde.');</script>";
  }
?>