<?php
if ( (!empty($_POST['name'])) && (!empty($_POST['lastname'])) && (!empty($_POST['birth_date']))) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $birth_date = $_POST['birth_date'];
    $today = new DateTime();
    $b_date_dt = new DateTime($birth_date);

    if($today->format("Y-m-d") > $b_date_dt ->format("Y-m-d")) { 
        header("Location: index.php") ;
        include('db.php');
        $query1 = "INSERT INTO users ( name , lastname, birth_date ) VALUES ('$name','$lastname','$birth_date')";
        $result = $mysqli->query($query1); 
    } else{
        echo "<p>Inserisci una data valida.</p>";
        header("Refresh:3; index.php");
    }
  
} else {
    echo "<p>Oops! Tutti i campi sono obbligatori.</p>";
    header("Refresh:3; index.php");
}

 
?>