<?php

global $post;

// gets the previous post if it exists
$previous_post = get_adjacent_post( false, '', true );

// if there is a previous post
if ( $previous_post ) {
	// text above the link
	$previous_text = esc_html__( 'Previous Post', 'modern-store' );
	// if there is a title use it, else call it "The Previous Post"
	$previous_title = get_the_title( $previous_post ) ? get_the_title( $previous_post ) : esc_html__( 'The Previous Post', 'modern-store' );
	// get the post link
	$previous_link = get_permalink( $previous_post );
} // if there isn't a previous post
else {
	// text above the link
	$previous_text = esc_html__( 'No Older Posts', 'modern-store' );
	// set the title to return to the blog
	$previous_title = esc_html__( 'Return to Blog', 'modern-store' );
	// link to blog
	$previous_link = home_url();
}

// gets the next post if it exists
$next_post = get_adjacent_post( false, '', false );

// if there is a next post
if ( $next_post ) {
	// text above the link
	$next_text = esc_html__( 'Next Post', 'modern-store' );
	// if there is a title use it, else call it "The next Post"
	$next_title = get_the_title( $next_post ) ? get_the_title( $next_post ) : esc_html__( 'The Next Post', 'modern-store' );
	// get the post link
	$next_link = get_permalink( $next_post );
} // if there isn't a next post
else {
	// text above the link
	$next_text = esc_html__( 'No Newer Posts', 'modern-store' );
	// set the title to return to the blog
	$next_title = esc_html__( 'Return to Blog', 'modern-store' );
	// link to blog
	$next_link = home_url();
}

?>
<nav class="further-reading">
	<div class="previous">
		<span><?php echo esc_html( $previous_text ); ?></span>
		<a href="<?php echo esc_url( $previous_link ); ?>"><?php echo esc_html( $previous_title ); ?></a>
	</div>
	<div class="next">
		<span><?php echo esc_html( $next_text ); ?></span>
		<a href="<?php echo esc_url( $next_link ); ?>"><?php echo esc_html( $next_title ); ?></a>
	</div>
</nav>