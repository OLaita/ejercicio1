<?php

    include 'src/templates/header.tpl.php';
    //include APP.'/login-register.php';

?>

    <main>
    
        <article>
            <h2>LOGIN</h2>
        </article>
    
    </main>

    <form action="../login-register.php" method="post">
    
        Name: <input type="text" name="name"><br>
        Password: <input type="password" name="pass"><br>
        Registrar: <input type="checkbox" name="reg"><br>
        Guardar usuario y contraseña: <input type="checkbox" name="save"><br>
        <input type="submit">

    </form>


<?php

include 'src/templates/footer.tpl.php';

?>