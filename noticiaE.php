  <?php require_once 'includes/header.php';  ?>


<br>


<main>

<body style="background-color:white">
    
        <!--Main layout-->
                <div class="container"> 
                        <div class="row-fluid">   

             


                            <!--Section: Blog v.4-->
                            <section class="section section-blog-fw">

                <?php

                    $id_rn = $_GET["id"];
                    $SQL_RN = mysql_query("SELECT * FROM eventos WHERE id_evento='$id_rn'") or die(mysql_error());

                        while ($rn = mysql_fetch_array($SQL_RN)) {
                            $data = explode("-", $rn["dataPub"]);
                            $dataEX = $data[2]."/".$data[1]."/".$data[0];

                            $meses=$Array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

                  echo $dataE [2] . " de " . $meses [$dataE - 1] . " de " . $dataE [0];
                        

                ?>


            <br>           
                 <!--Main column-->
                <div class="col-lg-12">

                    <!--First row-->
                    <div class="row wow fadeIn" data-wow-delay="0.4s">
                        <div class="col-md-12">

                            <!--Product Card-->
                            <div class="product-wrapper" >
                         <br>  
                    <h1 class="h1-responsive" > <a href="index.php" style="color: #000" class="text-center"><strong><?php echo $rn['titulo'];?></h1> </a></strong>
                         
                        
                   
                      Publicado dia:<span style="color: #09f" >  <?php echo $dataEX; ?> &nbsp&nbsp  </span>
                      <!--Por:<span style="color: #09f" >  <?php echo $rn["autorPub"]; ?> &nbsp&nbsp  </span> -->


                     

                    

                 </p>
    


                    <!--Card image-->
                    <div class="card collection-card" style="max-width: 600px; max-height: 400px; ">


                    
                        <img src="fotos/<?php echo $rn['imagem']; ?>"  class="img-responsive" alt="Titulo na Notícia"/>  

                        

                            
                    
                    </div>
                    <!--/.Card image-->

                                <br><br><br>
                                                                        
                                <hr>
                                <!--Texto-->
                                <divs>    
                                <p class="text-justify"><?php echo $rn["conteudo"]; ?></p>
                                </div>     

                           

                            </div>
                            <!--Product-->

                        </div>
                    </div>
                    <!--/.First row-->  


<hr>  <br> <br> <br><br> <br> <br><br> <br> 






   


<br> <br> <br><br>




<div id="disqus_thread"></div>
<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
var disqus_config = function () {
this.page.url = 'http://www.guiatecnologico.tk/noticiaE.php?id=<?php echo $id_rn; ?>';
this.page.identifier = '<?php echo $rn['titulo'];?>';
};
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://guiatecnologico.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>      

 <?php } ?>




<br> <br> <br><br>




                </div>
                <!--/.Main column-->

            </div>
        </div>
        <!--/.Main layout-->

 


</h1></div></div></div></div></section></div></div>



</body>




</main>

<?php require_once 'includes/footer.php'; ?>
