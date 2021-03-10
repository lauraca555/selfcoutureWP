<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mitema
 */

get_header();
?>

<div id="primary" class="ebook-primary">
		<main id="main" class="site-main-book">

    <header id="tittre-ebook" class="entry-header">
        
        <div id="entry-image"><?php echo do_shortcode("[purchase_link id=\"6272\" text=\"Ajouter au panier\" style=\"button\" color=\"blue\"]");?></div>    
        
    <div class="page-title-cours"><h2 class="entry-title">Ebook: LA COUTURE MODE D'EMPLOI</h2></div>
    
    </header><!-- .entry-header -->
        <div id= "ebook-content" class="entry-content">
    
           
        
        <p>&quot;La couture: mode d'emploi&quot; est une <span class="resume-book">compilation au format pdf d'articles en accès libre sur self&minus;couture.com</span>,<br>enrichie avec plusieurs patrons incluant leur notice de réalisation détaillée.<br> 
        Son format pdf permet son téléchargement pour une consultation hors connexion ou pour son impression papier.   </p>
        <p><a href="https://www.self-couture.com/wp-content/uploads/2019/10/Cours-couture-pdf.jpg"><img title="cours couture pdf" src="https://www.self-couture.com/wp-content/uploads/2019/10/Cours-couture-pdf.jpg" alt="cours couture pdf"></a></p>
        
        <p><span class="resume-book">Destiné aux débutants ou initiés</span>, cet e-book aborde les principales techniques de base indispensables aux couturières et couturiers autodidactes.<br>
Cette méthode vous guidera dans l'apprentissage de la couture avec son organisation en fiches unitaires et son approche très progressive.</p>
       <p><a href="https://www.self-couture.com/wp-content/uploads/2019/10/archives-couture.jpg"><img title="cours couture pdf" src="https://www.self-couture.com/wp-content/uploads/2019/10/archives-couture.jpg" alt="technique couture"></a></p>
        
           
        
            
        <p>Aujourd'hui ce livre électronique contient <span class="resume-book"><?php mitema_numero_fiches(); ?> fiches </span>organisées en <span class="resume-book"><?php mitema_nombre_categories_ebook(); ?> sections</span>. Le sommaire est consultable sur la page <a href="https://www.self-couture.com/la-couture-mode-demploi/">sommaire de l'ebook.</a><br>
            De nouveaux articles et travaux pratiques se rajouteront au fur et à mesure, téléchargeables sans frais supplémentaire depuis votre espace utilisateur.</p>
            
        <p><a href="https://www.self-couture.com/wp-content/uploads/2019/10/tailor-with-sewing-machine-tablet-pc-and-fabric-P4VUDN9.jpg"><img title="cours couture pdf" src="https://www.self-couture.com/wp-content/uploads/2019/10/tailor-with-sewing-machine-tablet-pc-and-fabric-P4VUDN9.jpg" alt="apprendre la couture tablette "></a></p>
            
       
                

         
        <p>Les patrons sont accompagnés de toutes les explications nécessaires (et sans blabla!) qui vous guideront <span class="resume-book">pas à pas</span> pour bien débuter ou progresser.<br>
            Vous pourrez ainsi mettre en &oelig;uvre vos connaissances, et réaliser entièrement des ouvrages à partir des patrons fournis.<br>
        </p>
        <p><a href="https://www.self-couture.com/wp-content/uploads/2019/10/pupurri-technique-couture.jpg"><img title="technique couture" src="https://www.self-couture.com/wp-content/uploads/2019/10/pupurri-technique-couture.jpg" alt="technique couture"></a></p>
       
        <p>Acheter ce livre c'est aussi <span class="resume-book">contribuer au développement de ce site</span>,<br>et me soutenir pour continuer à m'investir à 100% dans cette activité.</p>
         
        <p>&quot;On n'est jamais mieux servi que par soi-même.&quot;<br>Alors, faites le vous-même!<br>DIY</p>
    
</div><!-- .entry-content -->  
 <footer class="entry-footer">
                <div class="separateur-entry-content">
                    <?php mitema_ciseaux()?>
                </div> 
            </footer> <!-- .entry-footer -->

                    </main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer();