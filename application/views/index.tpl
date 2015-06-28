<!DOCTYPE html>
<html class="st-layout ls-top-navbar ls-bottom-footer hide-sidebar sidebar-r2" lang="en">
  <head>
    <title>{$page->title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
    {include $common_dir|cat:"inc_meta.tpl"}
    {include $common_dir|cat:"inc_styles.tpl"}
  </head>
  <body>
    <!-- Wrapper required for sidebar transitions -->
    <div class="st-container">
	<!-- Fixed navbar -->
	    <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">          
	      {include $common_dir|cat:"header.tpl"}
	    </div> 
	  <!-- sidebar effects OUTSIDE of st-pusher: -->
	  <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->
	  <!-- content push wrapper -->
	  <div class="st-pusher" id="content">
	      <!-- sidebar effects INSIDE of st-pusher: -->
	      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
	      <!-- this is the wrapper for the content -->
	      <div class="st-content">
		  <!-- extra div for emulating position:fixed of the menu -->
		  <div class="st-content-inner">
		     <div class="container">
			  <div class="row status">
			      {include $common_dir|cat:"status.tpl"}
			  </div>
			  <div class="row">
			      {include $content|cat:".tpl"}
			  </div>
			  <div class="row">
			      <hr>
			      <footer>   
				{include $common_dir|cat:"footer.tpl"}
			      </footer>   
			  </div>
		      </div>    
		  
	    	  </div>
	     </div>
	</div>   	    
    </div>
    <!-- /st-container -->
    <!-- Separate Vendor Script Bundles -->
    {include $common_dir|cat:"inc_scripts.tpl"}  
  </body>
</html>
