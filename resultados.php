<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultados</title>
    </head>
    <body>
        <?php
            if (isset($_GET["asignatura"])){
                echo 'Asignatura: '.$_GET["asignatura"].'<br/>';
            }else{
                echo 'No hay asignatura seleccionada<br/>';
            }
            if (isset($_GET["profesor"])){
                echo 'Profesores: <br/>';

            if (is_array($_GET["profesor"])) {
                foreach ($_GET["profesor"] as $profesor){
                    echo '* '.$profesor.'<br/>';
                }
            }else{
                echo '* '.$_GET["profesor"].'<br/>';
            }

} else {
    echo 'No hay profesor seleccionado<br/>';
}
            
            if (!empty($_GET["horas"])){
                echo 'Horas: '.$_GET["horas"].'<br/>';
            }else{
                echo 'No hay hora escrita<br/>';
            }
            if(!empty(trim($_GET["info"]))){
                echo 'Info: '.$_GET["info"].'<br/>';
            }else{
                echo 'No hay información escrita';
            }
            
            echo '<br/><br/><br/><br/>';
            var_dump($_GET);
        ?>
    </body>
</html>