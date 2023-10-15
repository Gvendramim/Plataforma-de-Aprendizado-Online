<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $genero = $_POST['genero'];
        $conheceu = $_POST['conheceu'];
        $novidades = $_POST['novidades'];

        $result = mysqli_query($conexao, "INSERT INTO user(nome,senha,email,telefone,data_nascimento,genero,conheceu,novidades) 
        VALUES ('$nome','$senha','$email','$telefone','$data_nascimento','$genero','$conheceu','$novidades')");

    }

?>

<!DOCTYPE html>
<html lang="pt-BR" >
<head>
  <meta charset="UTF-8">
  <title>Plataforma de Aprendizado Online</title>
  <link rel="icon" type="image/x-icon" href="/assets/images/pesquisa.png">
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap'>
  <style>
    
        body{
            font-family: sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .div-contact {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-contact {
        display: grid;
        gap: 20px;
        }

        .entry-label {
        font-weight: bold;
        font-size: 16px;
        }

        .entry {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        font-size: 14px;
        }

        .div-entry {
        display: flex;
        gap: 10px;
        align-items: center;
        font-size: 14px;
        }

        .checkbox-label {
        display: flex;
        align-items: center;
        gap: 10px;
        }

        .checkbox-input {
        margin: 0;
        }

        .submit-btn {
        background-color: green;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 16px;
        }

        .submit-btn:hover {
        background-color: #425242;
        }

        @media (max-width: 768px) {
        .form-contact {
            grid-template-columns: 1fr;
        }
        }
  </style>
</head>
<body>
    <div class="col-6 col-12-medium">
        <div class="div-contact">
          <h1 style="text-align: center; padding: 5px 0 50px 0;">Formulário de Cadrastro</h1>

          <form class="form-contact" action="forms.php" method="POST">
              <label class="entry-label" for="name">Nome Completo</label>
              <input class="entry" name="nome" id="nome" type="text" required>
        
              <label class="entry-label" for="email">Email</label>
              <input class="entry" name="email" id="email" type="email" required>
        
              <label class="entry-label" for="phone">Telefone</label>
              <input class="entry" name="telefone" id="telefone" type="tel" required>

              <label class="entry-label" for="phone">Senha</label>
              <input type="password" name="senha" id="senha" class="entry" required>

              <label class="entry-label" for="data_nascimento"><b>Data de Nascimento:</b></label>
              <input class="entry" type="date" name="data_nascimento" id="data_nascimento" required>
        
              <div class="div-entry">
                  <p class="entry-label">Genero</p>
                  <input type="radio" id="feminino" name="genero" value="feminino" required>
                  <label for="feminino">Feminino</label>
                  <br>
                  <input type="radio" id="masculino" name="genero" value="masculino" required>
                  <label for="masculino">Masculino</label>
                  <br>
                  <input type="radio" id="outro" name="genero" value="outro" required>
                  <label for="outro">Outro</label>
              </div>

              <label class="entry-label" for="day-period">Como encontrou a gente?</label>
              <select class="entry" name="conheceu" id="conheceu">
                  <option value="none" name="conheceu" id="conheceu">-- Selecione aqui --</option>
                  <option value="Facebook" name="conheceu" id="conheceu">Facebook</option>
                  <option value="Instagram" name="conheceu" id="conheceu">Instagram</option>
                  <option value="Outros" name="conheceu" id="conheceu">Outros</option>
              </select>
        
              <label for="check-mailing" class="entry-label" id="checkbox">Gostaria de receber nossas novidades por email?
                  <input type="checkbox" name="novidades" id="novidades"></label>
        
              <input class="submit-btn" type="submit" name="submit" id="submit" value="Enviar">
          </form>
        </div>
</body>
</html>