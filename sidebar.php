<aside class="sidebar sidebar-primary widget-area" role="complementary" aria-label="Primary Sidebar" itemscope itemtype="https://schema.org/WPSideBar">
<?php 
	if(is_active_sidebar('sidebar'))
	{
		dynamic_sidebar('sidebar'); 
	}
?>
</aside>