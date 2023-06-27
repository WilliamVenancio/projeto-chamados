<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="assets/css/main.css">

    <title>Registro de Chamados</title>
</head>
<body>
    
    <main id="container">
    <div class="form-box">
        <div class="left-box">
            <div class="form-header">
                <h1>REGISTRO DE CHAMADOS</h1>
            </div>
            <form action="formulario.php" method="POST">
                <div class="inputsBox">
                    <label for="nome">
                        <i class="fa-solid fa-user"></i>
                        Usuário:
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    </label>
                </div>
                <br><br>
                <div class="inputsBox">
                    <label for="nome">
                        <i class="fa-solid fa-users"></i>
                        Departamento:
                    <input type="text" name="departamento" id="departamento" class="inputUser" required>
                    </label>
                </div>
                <br><br>
                <div class="inputsBox">
                    <label for="email">
                        <i class="fa-solid fa-envelope"></i>
                        E-mail:
                    <input type="email" name="email" id="email" class="inputUser" required>
                    </label>
                </div>
                <br><br>
                <div class="inputsBox">
                    <label for="tel">
                        <i class="fa-solid fa-phone"></i>
                        Telefone:
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    </label>
                </div>
                <br><br>
            </div>
        <div class="right-box">
                <div class="inputsBox">
                    <label for="num equip">
                        <i class="fa-solid fa-computer"></i>
                        Número do Equipamento:
                    <input type="text" name="numequip" id="numequip" class="inputUser" required>
                    </label>
                </div>
                <br><br>
                <div class="inputsBox">
                    <label for="nome equip">
                        <i class="fa-solid fa-note-sticky"></i>
                        Nome do Equipamento:
                    <input type="text" name="nomeequip" id="nomeequip" class="inputUser" required>
                    </label>
                </div>
                <br><br>
                <div class="inputsBox">
                    <label for="problema">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        Descrição do Problema:
                    <input type="text" name="descproblema" id="descproblema" class="inputUser" required>
                    </label>
                </div>
                <br><br>
                <input type="submit" name="submit" class="btn-submit">
            </form>
        </div>
    </div>
    </main>

    <script type="text/javascript" src="assets/js/script.js"></script>

</body>
</html>