<?php

/* 
accueil 
*/ 
?> 
<?php

get_header();

?>

<div id="site-accueil">
    <div id="block-cours" class="containers-cours">
        <div id="block-top-cours">
            <div id="cours-banniere">
                
                <?php photocourstop();?>
            </div>  
        </div>    
        <div id="resume-cours">
            <div id="resume-cours-titre">
                    <p>-----  Derniers cours de couture -----</p>
            </div>
             <div class="supercontainer-accueil">
		<?php
		dernierscours ();
                 
		?>
             </div>
        </div>    
        <div id="entreecours">
           <div id="allercours">
               <a href="cours-de-couture"> Voir tous les cours</a>
           </div>    
        </div>    
      
    </div>       
          
    <div id="block-ateliers" class="containers-ateliers"> 
            <div id="block-top-ateliers">
                <div id="ateliers-banniere">
                    <image src="<?php echo get_template_directory_uri(); ?>/images/raw/banniere-ateliers.png"/>
                </div>  
            </div>    
         
        <!-- aqui tiene que ir el bloque con los tres enlaces de los ateliers -->
        <div id="resume-ateliers">
            <div id="resume-ateliers-titre">
                    <p>-----  Derniers ateliers de couture -----</p>
            </div>
             <div class="supercontainer-accueil">
		<?php 
		derniersateliers ();
                
		?>
             </div>
        </div> 
        <!--fin block resume-ateleirs -->
        <div id="entreeateliers">
           <div id="allerateliers">
               <a href="ateliers"> Voir tous les ateliers</a>
           </div>    
        </div> 
    </div>        
    <div id="block-patrons" class="containers-patrons"></div> 
     
</div>    
<?php


get_footer();
