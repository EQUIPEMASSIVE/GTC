
<?php
 require_once 'includes/header.php';
?>


       
        
<br>
   

<main>
    <br>
<div class="container">
        <div class="row">
<?php
    //A qunatidade de noticias a ser exibida a ser exibida
    $quantidade = 3;//Altere a quantidade 
    //a pagina atual
    $pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
    //Calcula a pagina de qual valor será exibido
    $inicio     = ($quantidade * $pagina) - $quantidade;

    //Monta o SQL com LIMIT para exibição dos dados  
    $SQL_B = "SELECT * FROM noticias INNER JOIN categoria ON (noticias.categoria = categoria.id_categoria) WHERE status = '1' ORDER BY  dataPub DESC LIMIT $inicio, $quantidade";


    //Executa o SQL
    $qr  = mysql_query($SQL_B) or die(mysql_error());
    //Percorre os campos da tabela
    while($pusha = mysql_fetch_assoc($qr)){

?>

                <!--First row-->
           
                <div class="col-md-12">
                <!--Card-->
                <div class="card wow fadeIn"  data-wow-delay="0.3s">



                    <!--Card image-->
                    <div class="card collection-card">


                    
                        <img src="cp/imagens/imgnoticia/<?php echo $pusha['imagem']; ?>"  class="img-responsive" alt="Titulo na Notícia"/>  

                        

                            <div class="mask waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block" style="text-align:center">
                        <!--Title-->
                        <h5 class="price"><a href="categoria.php?id=<?php echo $pusha['id_categoria']; ?>"> <span class="badge btn-elegant"> <?php echo $pusha['nome_categoria']; ?></span></h5>   </a>

                        <h1 class="h1-responsive"> <a href="noticia.php?id=<?php echo $pusha['id_noticia']; ?>" style="color: #000" class="card-title"><?php echo $pusha['titulo'];?></h1> </a>
                        

                        <!--Text-->
                        <p style="color: #696969" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="noticia.php?id=<?php echo $pusha['id_noticia']; ?>" class="black-text d-flex flex-row-reverse"><h7 class="waves-effect p-2">Leia mais... <i class="fa fa-chevron-right"></i></h7></a>
                      
                        

                        <span style="color: #C0C0C0" ><i class="fa fa-clock-o" ></i> Publicado dia: <?php echo $pusha['datapub'];?></span>

                        
                    </div>
                    <!--/.Card content-->

                </div>
                <!--/.Card--> <br> <br>
            </div>
            <!--First columnn-->



 <?php } ?> 

        </div> <!--/ Row Main Layout--> 
</div>     <!--/.Container Main Layout--> 
</main>


<!--´CÓDIGO DE PAGINAÇÃO------------------------------------------------------------------------------------------------------------------------------>

<?php
  /**
   * SEGUNDA PARTE DA PAGINAÇÃO
   */
  //SQL para saber o total
  $sqlTotal   = "SELECT id_noticia FROM noticias";
  //Executa o SQL
  $qrTotal    = mysql_query($sqlTotal) or die(mysql_error());
  //Total de Registro na tabela
  $numTotal   = mysql_num_rows($qrTotal);
  //O calculo do Total de página ser exibido
  $totalPagina= ceil($numTotal/$quantidade);
   /**
    * Defini o valor máximo a ser exibida na página tanto para direita quando para esquerda
    */
   $exibir = 3;
   /**
    * Aqui montará o link que voltará uma pagina
    * Caso o valor seja zero, por padrão ficará o valor 1
    */
   $anterior  = (($pagina - 1) == 0) ? 1 : $pagina - 1;
   /**
    * Aqui montará o link que ir para proxima pagina
    * Caso pagina +1 for maior ou igual ao total, ele terá o valor do total
    * caso contrario, ele pegar o valor da página + 1
    */
   $posterior = (($pagina+1) >= $totalPagina) ? $totalPagina : $pagina+1;
   /**
    * Agora monta o Link paar Primeira Página
    * Depois O link para voltar uma página
    */
  /**
    * Agora monta o Link para Próxima Página
    * Depois O link para Última Página
    */
    ?>

    <div id="navegacao">
        <?php
        echo '<a href="?pagina=1">primeira</a> | ';
        echo "<a href=\"?pagina=$anterior\">anterior</a> | ";
    ?>
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)
        echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
  }

  echo '<a href="?pagina='.$pagina.'"><strong>'.$pagina.'</strong></a>';

  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
        echo '<a href="?pagina='.$i.'"> '.$i.' </a>';
  }

   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */

    ?>
    <?php echo " | <a href=\"?pagina=$posterior\">próxima</a> | ";
    echo "  <a href=\"?pagina=$totalPagina\">última</a>";
    ?>

    

<?php require_once 'includes/footer.php'; ?>

