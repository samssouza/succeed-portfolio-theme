<?php  get_header();?>

<?php 
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); 
    echo get_the_content();
  } 
} 
?>
  
<?php  get_footer()?>

   