<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

<?php function GetUserData($email, $password)
{
    $dbFilePath = "core/db/Users/";

    if (file_exists("$dbFilePath/$email")) {
        $JsonToData = json_decode(file_get_contents("$dbFilePath/$email"));

        $userEmail = $JsonToData->email;
        $UserPassword = $JsonToData->password;

        // Verifique a senha usando password_verify
        if ($email == $userEmail && password_verify($password, $UserPassword)) {
            // Carregue os dados do arquivo JSON do usuário (exceto a senha por razões de segurança)
            $userData = array($JsonToData->name, $JsonToData->cpf, $JsonToData->dataBirth, $JsonToData->card, $JsonToData->email);
            return $userData;
        }
    } else {
        return false;
    }
}
?>
    <main id="container">
        <form method="post" id="login_form">
        <div id="form_header">
            <h1>Login</h1>
            <div id="social_media">
            <a href="#">
                <img src="/frontend/html/login/facebook.png" alt="">                
            </a>

            <a href="#">
                <img src="/frontend/html/login/google.png" alt="Google logo">
            </a>
             </div>
            <div id="inputs">
                <div class="input_box">
                    <label  for="Nome">
                    Nome
                    <div class="input_field">
                    <i class="fa-solid fa-user"></i>
<<<<<<< HEAD:frontend/html/login/login.php
                    <input  type="text" id="Nome" name="Nome" required>
=======
                    <input type="text" id="Nome" name="Nome">
>>>>>>> parent of 3c2d948 (login2):frontend/html/login/login.html
                    </div>
                </label>
             </div>

             <div class="input_box">
                <label for="email">
                    E-mail
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="email" name="email">
                    </div>
                </label>
            </div>

            <div class="input-box">
                <label for="Password">
                    Senha
                    <div class="input-field">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" id="Password" name="Password">
                    </div>
                </label>
                
                <div id="Forgotpassword"></div>
                <a href="#">
                    Esqueceu sua Senha?
                </a>

            </div>
            </div>
        </div>

            <button type="submit" id="login_button">
                Login
            </button>
    </form>
    </main>
</body>


</html>