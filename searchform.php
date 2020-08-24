  <form action="<?php echo home_uri('/');?>" action="" method="get" class="online-form">
    <input type="email" name="email" class="form-control" placeholder="Enter your email" required 
    value="<?php echo get_search_query();?>" name="s">
    <button type="submit" class="form-control">Get started</button>
  </form>