<?php
 require_once 'includes/header.php';
?>



       

<div style="min-height: 50px;">
        <!-- Jssor Slider Begin -->
        
        <!-- ================================================== -->
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1000px; height: 500px; overflow: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%; background-color: rgba(0, 0, 0, .7);"></div>
            <!-- Slides Container -->
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1000px; height: 450px; overflow: hidden;">
                <?php    
                   //Na ordem do recente para o ultimo
                          
                             $SQL_B = mysql_query("SELECT * FROM noticias  INNER JOIN categoria ON(noticias.categoria = categoria.id_categoria)WHERE status='1'  ORDER BY id_noticia DESC LIMIT 5");//aqui sao mostradas somente a noticia pelo nome da categoria.
                            while ($bn = mysql_fetch_array($SQL_B)) {
                            
                ?>
       
            <div>
                <a href="noticia.php?id=<?php echo $bn['id_noticia']; ?>" ><img src="cp/imagens/imgnoticia/<?php echo $bn['imagem']; ?>" alt="Postagem 1"/>

                <div  style="position: absolute; top: 300px; left: 40px;"><!--nome do titulo da noticia por id-->
                  <h1 style="font-size: 50px; text-align: left; text-shadow: 2px 2px 4px rgba(0,0,0,.7); "> 
                    <div href="noticia.php?id=<?php echo $bn['id_noticia']; ?>" style="color: #f0f0fa; display:inline; text-decoration: none;"   onmouseover="this.style.color='#D8D8D8'" onmouseout="this.style.color='#f0f0fa'"><?php echo $bn['titulo'];?></div>
                    <div>
                  </h1>
                </div>


                <div  style="position: absolute; top: 250px; left: 40px;"><!--texto slider categoria da noticia por id-->
                  <h1 style="font-size: 35px; text-align: center; text-shadow: 1px 1px 2px rgba(0,0,0,.7);"> 
                    <b><div href="noticia.php?id=<?php echo $bn['id_noticia']; ?>" style="color: greenyellow; text-shadow: 1px 1px 2px rgba(0,0,0,.7);"><?php echo $bn['nome_categoria'];?></div></b>  
                    <div>
                  </h1>
                </div>

                </a>

                
            </div>
            
            <?php } ?>
            </div>
            
            <!--#region Bullet Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-bullet-navigator.html -->
            <style>
                /* jssor slider bullet navigator skin 21 css */
                /*
                .jssorb21 div           (normal)
                .jssorb21 div:hover     (normal mouseover)
                .jssorb21 .av           (active)
                .jssorb21 .av:hover     (active mouseover)
                .jssorb21 .dn           (mousedown)
                */
                .jssorb21 {
                    position: absolute;
                }
                .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                    position: absolute;
                    /* size of bullet elment */
                    width: 19px;
                    height: 19px;
                    text-align: center;
                    margin-top: 30px;
                    line-height: 19px;
                    color: white;
                    font-size: 12px;
                    background: url(img/b21.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb21 div { background-position: -5px -5px; }
                .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
                .jssorb21 .av { background-position: -65px -5px; }
                .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            <!--#endregion Bullet Navigator Skin End -->
            
            <!--#region Arrow Navigator Skin Begin -->
            <!-- Help: https://www.jssor.com/development/slider-with-arrow-navigator.html -->
            <style>
                /* jssor slider arrow navigator skin 21 css */
                /*
                .jssora21l                  (normal)
                .jssora21r                  (normal)
                .jssora21l:hover            (normal mouseover)
                .jssora21r:hover            (normal mouseover)
                .jssora21l.jssora21ldn      (mousedown)
                .jssora21r.jssora21rdn      (mousedown)
                */
                .jssora21l, .jssora21r {
                    display: block;
                    position: absolute;
                    /* size of arrow element */
                    width: 55px;
                    height: 55px;
                    cursor: pointer;
                    background: url(img/a21.png) center center no-repeat;
                    overflow: hidden;
                }
                .jssora21l { background-position: -3px -33px; }
                .jssora21r { background-position: -63px -33px; }
                .jssora21l:hover { background-position: -123px -33px; }
                .jssora21r:hover { background-position: -183px -33px; }
                .jssora21l.jssora21ldn { background-position: -243px -33px; }
                .jssora21r.jssora21rdn { background-position: -303px -33px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="https://www.jssor.com">Bootstrap Carousel</a>
        </div>
        <!-- Jssor Slider End -->
    </div>

        
<br>
   

<main>
    <br>
<div class="container">
        <div class="row-fluid">
         <button class="btn btn-warning btn-rounded" style="position: fixed; z-index: 98; top: 85%; margin-left: 85%; border-radius: 30px; padding: 10px; background-color: greenyellow;"><a href="#"><i class="fa fa-arrow-up" style="color: #000000;"></i></a></button>
<?php
    //A qunatidade de noticias a ser exibida a ser exibida
    $quantidade = 8;//Altere a quantidade 
    //a pagina atual
    $pagina     = (isset($_GET['pagina'])) ? (int)$_GET['pagina'] : 1;
    //Calcula a pagina de qual valor será exibido
    $inicio     = ($quantidade * $pagina) - $quantidade;
    //Monta o SQL com LIMIT para exibição dos dados  
    $SQL_B = "SELECT * FROM noticias INNER JOIN categoria ON (noticias.categoria = categoria.id_categoria) WHERE status = '1' ORDER BY  id_noticia DESC LIMIT $inicio, $quantidade";
    //Executa o SQL
    $qr  = mysql_query($SQL_B) or die(mysql_error());
    //Percorre os campos da tabela
    while($pusha = mysql_fetch_assoc($qr)){
?>

                <!--First row-->
            




                <div class="col-md-6">
                <!--Card-->
                <div class="card-block" style="min-height: 400px; max-width: auto; background-color: white; padding-bottom: 10px;">


                    <!--Card image-->
                    <div class="card-block">  
                     
                      <div class="view overlay hm-zoom"><!--codigo para por nome da categoria em cima da imagem da noticia-->
                               <a href="noticia.php?id=<?php echo $pusha['id_noticia']; ?>" >                              
                              <img class="img-fluid" src="cp/imagens/imgnoticia/<?php echo $pusha['imagem']; ?>" alt="Postagem 1"/>
                               
                              
                      

                            <div  style="position: absolute; top: -20px; left: 0px;"><!--texto categoria da noticia por id-->
                              <h1 style="font-size: 20px; text-align: left; text-shadow: 3px 3px 4px rgba(0,0,0,.7); background-color: rgba(0,0,0,1.5); padding: 3px;"> 

                                <b><div href="noticia.php?id=<?php echo $pusha['id_categoria']; ?>" style="color: greenyellow; text-shadow: 1px 1px 2px rgba(0,0,0,.7);"><span><?php echo $pusha['nome_categoria'];?></div></b></span> <!--nome da categoria em cima da imagem-->
                             <div>
                              </h1>
                            </div>
                             </a>

                
                        </div>


                       
                    </div >
                    <!--/.Card image-->

                    <!--Card content-->
                    <div class="card-block" style="text-align:center">
                        <!--Title-->
                        <!--h5 class="price"><a href="categoria.php?id=<?php //echo $pusha['id_categoria']; ?>"> <span class="badge btn-elegant"> <?php //echo $pusha['nome_categoria']; ?></span></a></h5>--> 
                              
                <span style="color: #C0C0C0" ><i class="fa fa-clock-o" ></i> Publicado dia: <?php echo $pusha['datapub'];?></span>
                        <h1 class="card-title"> <a href="noticia.php?id=<?php echo $pusha['id_noticia']; ?>" style="color: #000"><?php echo $pusha['titulo'];?></a></h1> 
                                                
                        <!--Text-->
                       
                        <!--<a href="noticia.php?id=<?php echo $pusha['id_noticia']; ?>" class="black-text d-flex flex-row-reverse"><h7 class="waves-effect p-2">Leia mais... <i class="fa fa-chevron-right"></i></h7></a>-->
                      
                        

                        

                        
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




     



<!--Pagination dark -->
<nav id="navegacao" style="text-align: center;">
    <ul class="pagination pg-dark">



        <!-- ABRE COMENTARIO   primeira paginA
        <li class="page-item active">
        <a  class="page-link" href=< PHP ECH0 "\"?pagina=1\">PRIMEIRA PAGINA</a>"
        ?>
        </li>
             FECHA COMENTARIO-->


          <!--Pagina anterior << -->
        <li class="page-item">
        <a  class="page-link" href=<?php echo "\"?pagina=$anterior\">&laquo;</a>";
        ?>
        </li>
        

         
         
        <?php
         /**
    * O loop para exibir os valores à esquerda
    */
   for($i = $pagina-$exibir; $i <= $pagina-1; $i++){
       if($i > 0)
        echo '<li class="page-item"><a class="page-link" href="?pagina='.$i.'">'.$i.' </a></li>';
  }


  echo '<li class="page-item active"><a class="page-link" href="?pagina='.$pagina.'">'.$pagina.'</a></li>';


  for($i = $pagina+1; $i < $pagina+$exibir; $i++){
       if($i <= $totalPagina)
        echo '<li class="page-item"><a class="page-link" href="?pagina='.$i.'">'.$i.' </a></li>';
  }
   /**
    * Depois o link da página atual
    */
   /**
    * O loop para exibir os valores à direita
    */
    ?>





          <!--Proxima Pagina -->
        <li class="page-item">
        <a  class="page-link" href=<?php echo "\"?pagina=$posterior\">&raquo;</a>";
        ?>    
        </li>


                <!--ABRECOMENTARIO  ultima pagina 
        <li class="page-item active">
        <a  class="page-link" href=< PHP ECH0 "\"?pagina=$totalPagina\">ULTIMAPAGINA</a>" 
        ?>
        </li>
             FECHACOMENTARIO-->


    </ul>
</nav>

<!--/Pagination Dark-->





</main>
<?php require_once 'includes/footer.php'; ?>
