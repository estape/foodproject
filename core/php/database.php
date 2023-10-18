<?php
$fullName;
$cpf;
$dataBirth;
$card;

class NewUserData
{
    // Adicione um construtor para a classe
    public function __construct($fullName, $cpf, $dataBirth, $card)
    {
        $filename = $cpf . ".txt";  // Use o valor de CPF para nomear o arquivo
        $myfile = fopen($filename, "w") or die("Unable to open file!");

        $txt = "fullname=" . $fullName . "\n" . "cpf=" . $cpf . "\n" . "databirth=" . $dataBirth . "\n" . "card=" . $card;
        fwrite($myfile, $txt);
        fclose($myfile);
    }
}
?>
