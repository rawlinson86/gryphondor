<form role="search" method="get" id="searchform" class="form-search" action="<?php echo home_url('/'); ?>">
  <label class="hide-text" for="s"><?php _e('Search for:', 'roots'); ?></label>
  <div class="input-append">
		<input type="text" value="" name="s" id="s" class="search-query" placeholder="<?php _e('Search...', 'roots'); ?>">
		<input type="submit" id="searchsubmit" value="<?php _e('Search', 'roots'); ?>" class="btn">
  </div>
</form>