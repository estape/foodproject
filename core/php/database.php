<?php
class database
{
    public function NewUserData($fullname, $cpf, $dataBirth, $card)
    {
        // $AllData = "fullname = $fullname\ncpf = $cpf\ndataBirth = $dataBirth\ncard = $card";
        
        // $Path = "core/php/db/Users";
        
        // // Escrever a string em um novo arquivo com o nome "WriteLines.txt".
        // file_put_contents("$Path/$cpf.txt", $AllData);
        $Path = "core/php/db/Users";

        $DataToJson = new stdClass();
        $DataToJson-> name = $fullname;
        $DataToJson-> databirth = $dataBirth;
        $DataToJson-> card = $card;

        $jsonObject = json_decode($DataToJson);
        file_put_contents("$Path/$cpf.json", $jsonObject);
        
    }

    public function LoadRestaurant($id)
    {
        $file = fopen("$id.txt", "r");

        // //Output lines until EOF is reached
        // while(! feof($file)) {
        //   $line = fgets($file);
        //   echo $line. "<br>";
        // }

        // fclose($file);

        
    }
}
?>