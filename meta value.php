	<?php 
	    $args = array(
	    'post_type' => 'corona',
	    'posts_per_page' => -1,
	    'post_status' => 'publish',
	    'orderby' => 'date',
	    'order' => 'ASC'
	    );

	    $query = new WP_Query( $args );
	    $total = 0;
	    if( $query->have_posts() ){
	    while( $query->have_posts() ){
	    $query->the_post();
	    $price = get_post_meta( $post->ID, '_country_total_case', false );

		foreach ( $price as $item) :
			$ttt += $item;
		echo "<p>$ttt</p>";
		endforeach;    
	    }
	    }
 	?>
