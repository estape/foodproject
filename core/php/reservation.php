<?php
class ReservationClass

{
    public function Setreservation($name, $email, $address, $city, $state, $num,
    $nameCard, $card, $monthCard, $cardYear, $cardCVV)
    {
        $FilePath = "core/booking/bookingfile.json";
    
        // Carregar o conteúdo atual do arquivo JSON
        $currentData = json_decode(file_get_contents($FilePath), true);

        // Adicionar o novo valor ao array existente
        $currentData[] = array(
            'fullname' => $name,
            'email' => $email,
            'address' => $address,
            'city' => $city,
            'state' => $state,
            'number' => $num,
            'card_name' => $nameCard,
            'card' => $card,
            'card_month' => $monthCard,
            'card_year' => $cardYear,
            'card_cvv' => $cardCVV
        );
    
        // Converter o array em formato JSON
        $jsonData = json_encode($currentData);
    
        // Salvar os dados no arquivo JSON
        file_put_contents($FilePath, $jsonData);
    }
}

?>