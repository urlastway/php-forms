<?php
    require_once("variables/VariablesAbout.php");
    require_once("style/style.php");   
    require_once("blocks/header.php")
?>

<body>
    <div class="container">
        <h1>About Content</h1>
        <h2>Spedisci un messaggio tramite "GET"</h2>
        <!--FORM-->
        <form action="check_get.php" method="GET">
            <input type="text" name="name" placeholder="Il tuo Nome" class="form-control mt-2">
            <input type="text" name="lastname" placeholder="Il tuo Cognome" class="form-control mt-2">
            <input type="email" name="email" placeholder="Il tuo email" class="form-control mt-2">
            <textarea name="messagge" placeholder="Il tuo messaggio" class="form-control mt-2"></textarea>
            <input type="submit" value="Send" class="btn btn-success mt-2">
        </form>
    </div>
</body>

<?php 
    require_once("blocks/footer.php")
?>