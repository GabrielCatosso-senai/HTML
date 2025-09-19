<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Painel</title>
  <style>
   
   body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
    }
    .sidebar {
      width: 200px;
      background: blue;
      color: white;
      height: 100vh;
      padding: 20px;
    }
    .sidebar h2 {
      text-align: center;
      margin-bottom: 40px;
    }
    .sidebar a {
      display: block;
      color: white;
      padding: 10px;
      margin: 5px 0;
      text-decoration: none;
      border-radius: 5px;
    }
    .sidebar a:hover {
      background: black;
    }
    .content {
      flex: 1;
      background: white;
      padding: 20px;
    }
    .header {
      background: white;
      padding: 15px;
      border-bottom: 1px solid white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .cards {
      display: flex;
      gap: 20px;
      margin-top: 20px;
    }
    .card {
      flex: 1;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      text-align: center;
    }
   

  </style>
</head>
<body>
  <div class="sidebar">
    <h2>Meu Painel</h2>
    <a href="#"> Início</a>
    <a href="#"> Relatórios</a>
    <a href="#"> Usuários</a>
    <a href="#"> Configurações</a>
 
   
    </div>

  <div class="content">
    <div class="header">
      <h1>Bem-vindo!</h1>
     <a href="http://localhost/meusite.com.br/HTML3/Aula2/projeto_01/index.php?msg=Usu%C3%A1rio%20ou%20senha%20inv%C3%A1lidos."class="botao">Sair </a>
         <style>
             .botao {
            display: inline-block;
            padding: 10px 20px;    
            border: 2px solid black;
            border-radius: 8px;  
            background-color: blue;
            color: black;        
            text-decoration: none;
            font-weight: bold;
            }
            .botao:hover {
            background-color: black;
            color: white;
            }
            h1 {
                margin: 0;
                font-size: 20px;
                color: black;
            }
        </style>
    </div>

    <div class="cards">
      <div class="card">
        <h3> Usuários</h3>
        <p>150 cadastrados</p>
      </div>
      <div class="card">
        <h3> Relatórios</h3>
        <p>12 novos</p>
      </div>
      <div class="card">
        <h3> Atividade</h3>
        <p>Online agora: 8</p>
      </div>
    </div>
  </div>
</body>
</html>
