<?php
class save

{
    public function reservation($email, $eatery, $data, $horario, $pessoas)
    {
        $FilePath = "core/booking/bookingfile.json";
    
        // Carregar o conteúdo atual do arquivo JSON
        $currentData = json_decode(file_get_contents($FilePath), true);

        // Adicionar o novo valor ao array existente
        $currentData[] = array(
            'eatery' => $restaurante,
            'data' => $data,
            'horario' => $horario,
            'pessoas' => $pessoas
        );
    
        // Converter o array em formato JSON
        $jsonData = json_encode($currentData);
    
        // Salvar os dados no arquivo JSON
        file_put_contents($FilePath, $jsonData);
    }

    public function SetReservation()
    {
        $FilePath = "core/booking/bookingfile.json";

        // Carregar o conteúdo atual do arquivo JSON
        $currentData = json_decode(file_get_contents($FilePath), true);

    }
}

?>