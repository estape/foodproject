<?php
$servername = "127.0.0.1";
$database = "foodproject";
$username = "web";
$password = "QwEr1616@@";

class ConnectToDB
{
    public function connect()
    {
        global $servername, $username, $password, $database;
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        echo "Connected successfully";

        $sql = "INSERT INTO users (name, cpf, data, cardUser) VALUES ('Test', '00000000000', '1234567899876543210')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}

class NewUserData
{

}
?>
