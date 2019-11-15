<?php
  global $post;
  $the_author = get_the_author_meta( 'nickname' );
  echo $the_author;
  $args = array( 'posts_per_page' => 3, 'post_type'=> 'post', 'author_name' => $the_author );
  $the_posts = get_posts( $args );
  foreach( $the_posts as $post ) : setup_postdata($post); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endforeach; 
?>
