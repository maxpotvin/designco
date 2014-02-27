<?php
//Ajout du support pour la vignette d'image (intégré à WordPress) add_theme_support( 'post-thumbnails');
set_post_thumbnail_size( 150, 150 ); // Taille désirée
?>
<?php
    //Ajout du support pour la vignette d'image (intégré à WordPress)
    add_theme_support( 'post-thumbnails');
    set_post_thumbnail_size( 150, 150 ); // Taille désirée

	// Permet d'enlever les "raccourcis" du contenu de l'article
	add_filter('the_content', 'strip_shortcodes');

	// Adaptation du code présenté au
	// http://wordpress.stackexchange.com/questions/2393/how-can-i-alter-the-gallery-markup
	// Prend l'ensemble des images attachées à l'article et crée une liste
	function afficher_gallerie($size = 'thumbnail', $limit = '0', $offset = '0') {
	    global $post;
	    $thumb_id = get_post_thumbnail_id($post->ID); //Récupérer le code du "thumbnail" d'article
	    $images = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
	    if ($images) {
	        $num_of_images = count($images);
	        if ($offset > 0) : $start = $offset--; else : $start = 0; endif;
	        if ($limit > 0) : $stop = $limit+$start; else : $stop = $num_of_images; endif;
	        $i = 0;
	        $content = "";
	        foreach ($images as $image) {
	            if ($start <= $i and $i < $stop) {
	            $img_title = $image->post_title;   // title.
	            $img_description = $image->post_content; // description.
	            $img_caption = $image->post_excerpt; // caption.
	            $img_url = wp_get_attachment_url($image->ID); // url of the full size image.
	            $preview_array = image_downsize( $image->ID, $size );
	            $img_preview = $preview_array[0]; // thumbnail or medium image to use for preview.
	            if($image->ID != $thumb_id){ //Toutes les images sauf le thumbnail
	                $content .= "<li>";
	                $content .= "<a href=\"$img_url\"><img src=\"$img_preview\" alt=\"$img_caption\" title=\"$img_title\"></a>";
	                $content .= "</li>";
	            }
	            }
	            $i++;
	        }
	        echo "<ul class='wp-custom-gallery'>".$content."</ul>";
	    }
	}
	
	$args = array(
		'posts_per_page'   => 5,
		'offset'           => 0,
		'category'         => '',
		'orderby'          => 'post_date',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'post',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'post_status'      => 'publish',
		'suppress_filters' => true );

	//Fonction pour remplacer le [...] du excerpt par un texte plus intuitif
	function new_excerpt_more($output) {
	    return '<a href="'. get_permalink() . '">' . '...Lire la suite de l\'article intitulé ' . the_title('', '', false).'</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

