<?php
class database
{
    public function SetUserData($fullname, $cpf, $dataBirth, $card, $email, $password)
    {
        $dbFilePath = "core/db/Users/"; // Substitua pelo caminho correto
    
        //Salva cada variável em suas respectivas propriedades
        $DataToJson = new stdClass();
        $DataToJson->name = $fullname;
        $DataToJson->databirth = $dataBirth;
        $DataToJson->card = $card;
        $DataToJson->email = $email;
        $DataToJson->password = $password;
    
        // Verifica se o diretório para os arquivos dos usuários existe, se não cria
        if (!file_exists($dbFilePath)) {
            mkdir($dbFilePath, 0755, true);
        }
    
        $userFile = "$dbFilePath/$email.json";
    
        // Tenta gravar os dados do usuário no arquivo
        if (file_put_contents($userFile, json_encode($DataToJson)) !== false) {
            return true; // Sucesso ao salvar os dados
        } else {
            return false; // Falha ao salvar os dados
        }
    }

    public function GetUserData($email, $password)
    {
        $dbFilePath = "core/db/Users/";

        if(file_exists("$dbFilePath/$email"))
        {
            file_get_contents("$dbFilePath/$email", json_decode($JsonToData));

            $userEmail = $JsonToData -> email;
            $UserPassword = $JsonToData -> password;

            //o e-mail e senha PRECISAM ser em minúsculos (case-sensitivity)
            if ($email == $userEmail && $password == $UserPassword)
            {
                //Carrega os mesmos dados do arquivo json do usuário, porém não carrega a senha por questões de segurança
                $userData = array($name, $cpf, $dataBirth, $card, $email);
                return $userData;
            }
        }

        else
        {
            return false;
        }

    }

    public function GetRTData()
    {
        $dbFilePath = "core/db/local/db_restaurants.json";

        if(file_exists($dbFilePath))
        {
            file_get_contents($dbFilePath, json_decode($JsonToData));
            return $JsonToData;
        }

        else
        {
            return false;
        }

    }
}
?>