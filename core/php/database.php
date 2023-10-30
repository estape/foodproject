<?php
class database
{
    public function NewUserData($fullname, $cpf, $dataBirth, $card)
    {
        $Path = "core/php/db/Users";

        $DataToJson = new stdClass();
        $DataToJson-> name = $fullname;
        $DataToJson-> databirth = $dataBirth;
        $DataToJson-> card = $card;

        $jsonUsers = json_encode($DataToJson);
        file_put_contents("$Path/$cpf.json", $jsonUsers);
        
    }

    public function LoadRestaurant($name, $type, $address, $tel, $class)
    {
        file_get_contents("/core/db/Local/db_restaurants.json", $jsonRT);
        $jsonRT = json_decode($DataRT, true);

        if ($DataRT)
        {
            foreach($DataRT as $item)
            {
                
            }
        }
    }
}
?>