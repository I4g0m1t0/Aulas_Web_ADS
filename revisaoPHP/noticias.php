<?php
$titulo = "Notícias do meu site";
include "header.php";
?>
<main>
    <h1>Notícias</h1>
    <div class="container">
        <?php 
            $maximo = 3;
            $i = 0;

            $noticias = [
                "Notícia 1",
                "Notícia 2",
                "Notícia 3",
            ];

            while($i < $maximo){
                echo '<h1>';
                echo $noticias[$i];
                echo '<h1>';
                $i++;
            }

            include __DIR__ . "/config/db.php";
            $sql = "SELECT * from noticias";
            $resultado = $pdo->query($sql);
            while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
                $id = $row['id'];
                echo '<div>';
                echo '<a href="noticia.php?idnot='.$id.'">';
                echo $row['titulo'];
                echo '<a>';
                echo '<div>';
            }

        ?>
    </div>
</main>
<?php
include "footer.php";
?>