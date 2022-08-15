<?php

require_once("DateTime.php");

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if(trim($name) == ""){
    echo "Non è stato scritto il nome utente";
}else if(strlen(trim($name)) <= 1){
    echo "Il nome utente non è coretto";
}else if(trim($email) == "" || trim($password) == "" || trim($_POST['massege']) == "" ){
    echo "Non sono stati inseriti tutti dati";
}else{
    $password = md5($password);
    echo "<h1>Tutti i Dati</h1>
          <p>Nome: $name</p>
          <p>Email: $email</p>
          <p>Password: $password</p>
         <p>Messaggio: $_POST[massege]<p>";
         
    echo "Data del messaggio: $DateToday";
}