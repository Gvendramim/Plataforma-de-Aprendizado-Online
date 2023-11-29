<!DOCTYPE html>
<html lang="pt-BR" >
<head>
  <meta charset="UTF-8">
  <title>Plataforma de Aprendizado Online</title>
  <link rel="icon" type="image/x-icon" href="images/pesquisa.png">
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/forms.css">
</head>
<body>
    <div class="col-6 col-12-medium">
      <div class="div-contact" style="width: 350px">
        <h1 style="text-align: center; margin: 15px 0 30px 0;">Entrar</h1>

        <form class="form-contact" action="login-sistema.php" method="POST">
            <label class="entry-label" for="email">Email</label>
            <input class="entry" name="email" id="email" type="email" required>
      
            <label class="entry-label" for="phone">Senha</label>
            <input type="password" name="senha" id="senha" class="entry" required>
            <input class="submit-btn" type="submit" name="submit" id="submit" value="Entrar" style="margin: 20px 0 20px 0;">
        </form>
        <a href="forms.php">Cadrastrar agora!</a>
      </div>
</body>
</html>