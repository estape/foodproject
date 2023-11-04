<?php
class database
{
    public function SetUserData($fullname, $cpf, $dataBirth, $card, $email, $password)
    {
        $userFilePath = "core/db/Users/"; // Substitua pelo caminho correto
    
        $DataToJson = new stdClass();
        $DataToJson->name = $fullname;
        $DataToJson->databirth = $dataBirth;
        $DataToJson->card = $card;
        $DataToJson->email = $email;
        $DataToJson->password = $password;
    
        // Verifica se o diretório para os arquivos dos usuários existe, se não cria
        if (!file_exists($userFilePath)) {
            mkdir($userFilePath, 0755, true);
        }
    
        $userFile = "$userFilePath/$cpf.json";
    
        // Tenta gravar os dados do usuário no arquivo
        if (file_put_contents($userFile, json_encode($DataToJson)) !== false) {
            return true; // Sucesso ao salvar os dados
        } else {
            return false; // Falha ao salvar os dados
        }
    }

    public function GetUserData()
    {
        
    }

    public function GetRTName()
    {
        file_get_contents("core/db/Local/db_restaurants.json", $jsonRT);
        $jsonRT = json_decode($DataRT, true);
        $DataRT = new stdClass();
        $name = $DataRT -> name;
        return $name;
    }

    public function GetRTType()
    {
        file_get_contents("/core/db/Local/db_restaurants.json", $jsonRT);
        $jsonRT = json_decode($DataRT, true);
        $DataRT = new stdClass();
        $type = $DataRT -> type;
        return $type;
    }

    public function GetRTAdress()
    {
        file_get_contents("/core/db/Local/db_restaurants.json", $jsonRT);
        $jsonRT = json_decode($DataRT, true);
        $DataRT = new stdClass();
        $address = $DataRT -> adress;
        return $address;
    }

    public function GetRTTel()
    {
        file_get_contents("/core/db/Local/db_restaurants.json", $jsonRT);
        $jsonRT = json_decode($DataRT, true);
        $DataRT = new stdClass();
        $tel = $DataRT -> tel;
        return $tel;
    }

    public function GetRTStars()
    {
        file_get_contents("/core/db/Local/db_restaurants.json", $jsonRT);
        $jsonRT = json_decode($DataRT, true);
        $DataRT = new stdClass();
        $stars = $DataRT -> stars;
        return $stars;
    }
}
?>