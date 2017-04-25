<section id=""></section>
<section id="widget-ultimas-noticias">
    <h1>Ultimas notícias do Portal</h1>
    
    <ul>
        <?php
           //MOSTRA SIDE BAR DE ULTIMAS NOTICIAS POSTADAS NO PORTAL *UN un
            $SQL_UN = mysql_query("SELECT id_noticia, titulo FROM noticias ORDER BY id_noticia DESC LIMIT 5");

            while($un = mysql_fetch_array($SQL_UN)){


        ?>
        <li><a href="noticia.php?id=<?php echo $un['id_noticia']; ?>"><?php echo $un['titulo']; ?></a></li>
        <?php } ?>
    </ul>
</section>    

<section id="widget-categorias-portal">
    <h1>Todas as Categorias</h1>
    
    <ul>
        
        <?php
        //MOSTRA TODAS AS CATEGORIAS CADASTRADAS NO SITE *CT, ct    
            $SQL_CT = mysql_query("SELECT   id_categoria, nome_categoria FROM categoria ORDER BY id_categoria DESC LIMIT 10");

            while($ct = mysql_fetch_array($SQL_CT)){


        ?>
        <li><a href="categoria.php?id=<?php echo $ct['id_categoria']; ?>"><?php echo $ct['nome_categoria']; ?></a></li>
        <?php } ?>
        

    </ul>
</section