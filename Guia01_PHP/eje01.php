<html>
    <head>
        <title>ejemplo 01</title>
        <style type="text/css">
            body{ text-align: center;}
            p {
                color: white;
            }
            .contenedor{
                background-color: green;
                width: 300px;
                text-align: center;
                margin: auto;
                padding: 15px;
                
                
            }
            .contenedor2{
                background-color: gray;
                width: 300px;
                text-align: center;
                margin: auto;
                padding: 15px;
                margin-top: 20px;
                border-radius: 10px;
                border: 2px solid black;
                
            }
            img{
                width: 300px;
                padding: auto;
            }
            .contenedor3{
                text-align: center;
                background-color: #6ec2bd;
                width: 300px;
                text-align: center;
                margin: auto;
                padding: 15px;
                margin-top: 20px;
                border-radius: 10px;
                
            }
            h2{
                color: red;
            }
            .contenedor4{
                background-color: gray;
                padding: 10px;
                width: 200px;
                margin: auto;
                
            }
            :hover.contenedor4 {
                background-color: black;

            }
        </style>
    </head>
    <body>
        <?php
            echo "<div class='contenedor'>";
            echo "<p> INFORMACIÓN</p>";
            echo "</div>";
        ?>
        
        <div class="contenedor2">
        <img src="imagenes/1658841510153.png" alt="php">
        </div>

        <div class="contenedor3">
            <h2>PHP</h2>
        <?php
        
        echo "<div class='contenedor4'>";
        echo "<p> ESPACIO 3 </p>";
        echo "</div>";
        ?>
        </div>


        <section class="contenedor5">
    <h3>HEREDOC PHP</h3>
    <?php
        $pineda = <<<HTML
        <h1>Hola, esto es HEREDOC</h1>
HTML;

        echo $pineda;
    ?>
</section>

    </body>
</html>