<?php
class NewUserData
{
    public $newUser;

    function CreateNewUser($name, $cpf, $data, $cardUser) { 
        $this->newUser = new mysqli($name, $cpf, $data, $cardUser);

        if($this->newUser->connect_error) {
            die ("Conection falied". $this->newUser->connect_error);
        }
    }
}
?>
