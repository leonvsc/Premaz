<?php
    if (isset($_POST['submit']))    {
        // Connect to database
        $servername = "64.225.75.176:3306";
        $username = "premaz";
        $password = 'Z2Y&z7Q57u&9aajwELX$gM%RC';
        $database = 'premaz';

        // Create connection
        $connection_string = new mysqli($servername, $username, $password);

        // Check connection
        if ($connection_string->connect_error)  {
            die("Connection failed: " . $connection_string->connect_error);
        }
        echo "Connected successfully";
        exit()
    }

    // Controle of er lege strings of geen alfanumerieke karakters zijn.
    // Controleert ook of de grootte van de string kleiner is dan drie. Als 1 vandeze checks "true" teruggeeft, dan is de return "Invalid search string" en wordt het script gestopt. 
    if ($searchString === "" || !ctype_alnum($searchString) || $searchString < 3)   {
        echo "Invalid search string";
        exit();
    }

    // Met de onderstaande code wordt SQL injection (voor veiligheid) tegengehouden.
    $searchString = "%searchString%"

    // Query statement 
    $sql = "SELECT * FROM Products WHERE name LIKE ?";

    // Prepareer, zet de variabelen vast en voer de query uit. 
    $prepared_stmt = $connection_string->prepare($sql);
    $prepared_stmt->bind_param('s', $searchString);
    $prepared_stmt->execute();

    // Ophalen van de resultaten 
    $result = $prepared_stmt->get_result();

    if ($result->num_rows === 0) {
        // No match found
        echo "No match found";
        // Kill the script
        exit();

    } else {
        // Process the result(s)
        while ($row = $result->fetch_assoc()) {
            echo "<b>Fruit Name</b>: ". $row['name'] . "<br />";
            echo "<b>Fruit Color</b>: ". $row['color'] . "<br />";

        } // end of while loop
    } // end of if($result->num_rows)

} else { // The user accessed the script directly

    // Tell them nicely and kill the script.
    echo "That is not allowed!";
    exit();
}
    ?>