<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .was-validated {
    width: 90%;          /* Defina uma largura (pode ser em px ou %) */
    max-width: 400px;    /* Garante que o formulário não estique demais em telas grandes */
    margin: 180px auto;   /* 50px de margem em cima/baixo, e 'auto' para centralizar nas laterais */
    padding: 50px;       /* Opcional: Adiciona um respiro interno para estética */
    border: 7px  none #ccc; /* Opcional: Adiciona uma borda para separar visualmente */
    border-radius: 20px;  /* Opcional: Arredonda as bordas */
    font-size: x-large;
    background-color:blue;
    font-style: italic;
    color: aliceblue;
}
 .botao{
  text-align: center;
 }
 body{
  background-image: url("imagens do projeto/foto\ de\ tecnologia.jpg");
 }
  
  </style>
</head>
<body>
  <form action="/action_page.php" class="was-validated">
    <h3>
      TELA DE LOGIN
    </h3>
  <div class="mb-3 mt-3">
    <label for="nome" class="form-label">Seu nome:</label>
    <input type="text" class="form-control" id="uname" placeholder="Digite seu nome" name="nome" required>
    <div class="valid-feedback"></div>
    <div class="invalid-feedback">Por favor, preencha este campo..</div>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Senha:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Digite sua Senha" name="pswd" required>
    <div class="valid-feedback"><div>
    <div class="invalid-feedback">Por favor, preencha este campo.</div>
  </div>
  <div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
    <label class="form-check-label" for="myCheck">Eu concordo com isso.</label>
    <div class="valid-feedback"></div>
    <div class="feedback-inválido">Marque o Checkbox para continuar</div>
  </div>
  <div class="botao">
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
</body>
</html>
