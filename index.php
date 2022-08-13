<?php
    require_once("variables/VariablesHome.php");
    require_once("style/style.php"); 
    require_once("blocks/header.php");
?>

<body>
    <div class="container mt-4">
        <h1>Home Content</h1>
        <form action="check_post.php" method="POST">
            <input type="text" name="username" placeholder="Nome del utente" class="form-control mt-2">
            <input type="email" name="email" placeholder="Email" class="form-control mt-2">
            <input type="password" name="password" placeholder="Password" class="form-control mt-2">
            <textarea name="massege" placeholder="Massege" class="form-control mt-2"></textarea>
            <input type="submit" value="Send" class="btn btn-success mt-2">
        </form>
    </div>
</body>


<?php 
    require_once("blocks/footer.php");
?>