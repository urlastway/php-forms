<?php

    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $email = $_GET['email'];

    echo "<h1>Messaggio: </h1>
          <p>Nome: $name</p>
          <p>Cognome: $lastname</p>
          <p>email: $email</p>
          <p>Messaggio: $_GET[messagge]<p>";