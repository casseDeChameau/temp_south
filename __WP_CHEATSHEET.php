//!-- =============================== CHEATSHEET ================================ -->

//*-- 1. Récupérer des informations du site wp -->

<?php bloginfo('stylesheet_directory'); ?>
<?php bloginfo('info_souhaité'); ?>
<?php bloginfo('info_souhaité'); ?>

//? 'stylesheet_directory' : pointer vers le dossier local (img, styles, scripts...)
// todo: rechercher/remplacer dans les fichiers php ("url(", "href=", "src="")-->
//? 'name' : site title, 'description': tagline, 'url': site url, (celle-ci sont dans setting > general)
//todo: voir toutes les bloginfo('$show') disponibles : https://developer.wordpress.org/reference/functions/bloginfo/



//*-- 2. boucle pour les taxonomies -->

<?php foreach (get_the_terms(get_the_ID(), 'nom_taxonomie') as $tax) { //? pour toutes les taxonomies de type
  echo __($tax->name); //? utiliser le nom
} ?>



//*-- 3. boucle pour les posts-->

<?php
$loop = new WP_Query(
  array(
    'post_type' => 'slug-du-post-type', // todo: mettre le slug du posttype cnocerné (va rechercher le type de contenu) 
    'posts_per_page' => -1, //? Affiche tout sans limite (la limite est à 10 normalement)
  )
);
?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>

<!-- mettre le html struturel de la partie répétée ici + partie dynamique récupéré via le post en wp-->

<?php endwhile; //? ferme la boucle while
wp_reset_query(); ?> //? permet l'usage d'une autre boucle ailleurs sans lien




//*-- 4. boucle avec condition et application différenciée du code (application de css diff par ex)

<?php
$loop = new WP_Query(
  array(
    'post_type' => 'post-name',
    'posts_per_page' => -1,
  )
);
$compteur = 0; //? instanciation de la variable
?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
<?php if ($compteur == 0 || $compteur % 3 == 0); ?>
<div class="classname-<?php //? le php est inséré dans le nom de la classe dont la condition détermine la finalité
                        if ($compteur == 0 || $compteur % 3 == 0) { //? condition selon la valeur actuelle de la variable
                          echo "suffixeA"; //? traitement si true
                        } else {
                          echo "suffixeB"; //? traitement si false
                        } ?>">
</div>
<?php
  $compteur++; //? incrémentation de la variable
endwhile;
wp_reset_query(); ?>



//* 5. boucle sur Repeater ACF PRO

//? mettre dans la boucle while du post
<?php
// check if the repeater field has rows of data
if (have_rows('field_name')) :
  // loop through the rows of data
  while (have_rows('field_name')) : the_row();
?>
<!-- html avec usage des subfields -->
<?php endwhile;
endif;
?>



//* 6. Ajouter un widget

<? php
if ( function_exists('register_sidebar') ) {
$sidebar1 = array(
'before_widget' => '<div class="col-md-3 fh5co-widget">',
  'after_widget' => '</div>',
'before_title' => '<h4>',
  'after_title' => '</h4>',
'name' =>__( 'Footer left', 'textdomain' ),
'id' => 'footer-left',
);
$sidebar2 = array(
'before_widget' => '<div class="col-md-3 col-md-push-1 fh5co-footer-links">',
  'after_widget' => '</div>',
'before_title' => '<h4>',
  'after_title' => '</h4>',
'name' =>__( 'Footer center', 'textdomain' ),
'id' => 'footer-center',
);
$sidebar3 = array(
'before_widget' => '<div class="col-md-3 col-md-push-1 fh5co-footer-links">',
  'after_widget' => '</div>',
'before_title' => '<h4>',
  'after_title' => '</h4>',
'name' =>__( 'Footer right', 'textdomain' ),
'id' => 'footer-right',
);
register_sidebar($sidebar1);
register_sidebar($sidebar2);
register_sidebar($sidebar3);
}
?>
<?php dynamic_sidebar('footer-left'); ?>
<?php dynamic_sidebar('footer-center'); ?>
<?php dynamic_sidebar('footer-right'); ?>




//* 7. Ajouter un menu
//?html
<?php wp_nav_menu(); ?>
//? si plusierus
<!-- <?php
  register_nav_menus(array(
    'nom_de_variable' => 'slug_menu',
    'nom_de_variable2' => 'slug_menu2',
  ));
  ?> -->
//? functions
function register_my_menu()
{
register_nav_menu('my_own_menu', __('Mon Menu'));
}
add_action('init', 'register_my_menu');


//* 8. Limiter la taille de l'excerpt
//? dans fonctions
function my_excerpt_length($length){
    return 30;
    }
add_filter('excerpt_length', ‘my_excerpt_length’);


// !-- =============================== WP CLASSICS SELECTEURS ================================ -->

//!! attention, pour avoir une correspondance, doit être bien placé (dans scope concerné ou dans boucle) :
<?php the_permalink(); ?> //? le lien de la page
<?php the_title(); ?> //? titre du post
<?php the_post_thumbnail_url() ?> //? image du post
<?php echo get_the_excerpt(); ?> //? l'aperçu d'un texte (avec echo évite l'ajout d'un p et donc de margin)


//* usage dans apparence (ajout de fonctions)
<?php header_image(); ?> //? dans header



//* usage dans ACF pour tout field créé soi-même
<?php the_field('nom-du-field'); ?>
<?php the_sub_field('nom-subfield'); ?>


//!-- =============================== TIPS ================================ -->
# echo s'utilise avec get_the_... et fonctionne conmme un retrun ; il s'affranchi du style par défaut wp (aout de margin
etc), voir pour chaque fonction concerné s'il y a formatage et sa nature