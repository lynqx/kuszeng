</div>
  <!-- #content--> 
  
</div>
<!-- #wrapper -->

<div id="footer">
  <div class="container">
    <div class="cols">
      <div class="row">
        <div class="span4">
          <h4>Stay Connected</h4>
          <p> Lagos<br />
            Nigeria <br />
            <br />
            Phone: +234 (0) 803 961 5025 <br />
            kuszeng&#64;yahoo.com <br />
          </p>
          <br />
        </div>
        
        <div class="span5">


  <div class="copyright">&copy; Copyright www.kuszeng.com. <br> All Rights Reserved. Design by <a href="http://www.lynqx.com/" target="_blank" title="Dream Templates">lynqx</a>. </div>

          
          <div class="clr"></div>
        </div>
        
        <div class="span3">
                  
          <div class="social">
            <h4>Stay Connected</h4>
            <a class="soc3" href="http://www.facebook.com/kuszengwork"></a> <a class="soc1" href="#"></a> <a class="soc8" href="#"></a>           
          </div>
          
          <div class="clr"></div>
        </div>
        
      </div>
    </div>
  </div>
  <!-- container cols -->
</div>
<!-- #footer --> 

<!-- Gallery Starts --> 



<!-- Gallery Ends -->
<?php if ($page == 'about' || $page == 'contact' ) { echo '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>'; } ?> 
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script> 
<script type="text/javascript">
function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {carousel.startAuto(0);});
    carousel.buttonPrev.bind('click', function() {carousel.startAuto(0);});
    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {carousel.stopAuto();}, function() {carousel.startAuto();});
};

jQuery(document).ready(function() {
    jQuery('#gallery-carousel').jcarousel({
        auto: 2,
        wrap: 'circular',
        scroll: 1,
        initCallback: mycarousel_initCallback
    });
});
</script> 
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="prettyPhoto/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/menusm.js"></script> 
<script type="text/javascript" src="twitter_tweet/jquery.tweet.js" charset="utf-8"></script> 
<script type="text/javascript" src="js/scripts.js"></script> 
<script type="text/javascript" src="ui_totop/js/jquery.ui.totop.js" charset="utf-8"></script> 
<script type="text/javascript" src="preloader/js/jquery.preloader.js" charset="utf-8"></script> 


<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
		var arr_links = location.href.split('/');
			var length = arr_links.length;
			$('.menu li').each(function () {
				if ($(this).children('a').attr('href') == arr_links[(length-1)]) {
					$(this).addClass('active');
					$(this).children('a').addClass('active');
					$(this).parents('li').addClass('active');
					$(this).parents('li').children('a').addClass('active');
				}
			});
		
      $("a[rel^='prettyPhoto']").prettyPhoto({social_tools:false});
	  
	 $().UItoTop(); 
    
    });
</script> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript">
var gmap;
function initialize() {
    var myOptions = {
   	 zoom: 15,
   	 center: new google.maps.LatLng(37.776685,-122.419538), // google map location to show
   	 mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    gmap = new google.maps.Map(document.getElementById('gmap_contact'),myOptions);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script> 


<script type="text/javascript" src="js/tinynav.min.js"></script> 
<script type="text/javascript">
	$(function () {
		$('#nav').tinyNav({
			active: 'selected',
			header: 'Navigation' 
		});
	});
</script>
</body>
</html>