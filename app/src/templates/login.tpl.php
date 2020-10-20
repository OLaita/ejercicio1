<?php

    include 'src/templates/header.tpl.php';

?>

    <main>
    
        <article>
            <h2>LOGIN</h2>
        </article>
    
    </main>

    <form action="src/databaseController/login-register.php" method="post">
    
        Name: <input type="text" name="name"><br>
        Password: <input type="text" name="pass"><br>
        Registrar: <input type="checkbox" name="reg"><br>
        Guardar usuario y contraseña: <input type="checkbox" name="save"><br>
        <input type="submit">

    </form>


<?php

include 'src/templates/footer.tpl.php';

?>