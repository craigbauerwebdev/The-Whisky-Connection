<div class="widget-title">Authors</div>

<?php

$allUsers = get_users('orderby=post_count&order=DESC');

$users = array();

foreach($allUsers as $currentUser)
{
  if(!in_array( 'subscriber', $currentUser->roles ))
  {
    $users[] = $currentUser;
  }
}

foreach($users as $user)
{ ?>
<a href="<?php echo get_author_posts_url( $user->ID ); ?>">
	<div class="author group">
	  <div class="author-avatar" style="background: url(<?php echo esc_attr( get_the_author_meta( 'author-img', $user->ID ) ); ?>); background-size: cover; background-position: center center;"></div>
	  <div class="authorInfo">
	    <h3 class="author-name"><?php echo $user->display_name; ?></h3>
	    <!-- <p class="author-description"><?php //echo esc_attr( get_the_author_meta( 'col-name', $user->ID ) ); ?></p> --> 
	  </div>
	</div>
</a>
<?php
} 