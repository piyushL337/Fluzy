<form role="search" method="get" action="<?php echo home_url('/'); ?>" class="my-search-form">
	<div class="input-group">
		<input type="search" class="form-control fy-sc-in" placeholder="Search in this Site" value="<?php echo get_search_query() ?>" name="s" title="Search" />
		<span class="input-group-btn">
			<button class="btn btn-default fy-sc-bt" type="submit"> <i class="fa fa-search" aria-hidden="true"></i> </button>
		</span>
	</div>
</form>