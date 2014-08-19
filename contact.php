<?php 
  $page = 'contact';
  $page_title = 'Contact Us';
  include('includes/header.php'); 
?>



    <div class="container" id="gallery" style="background:none;">
      <div class="row">
        <div class="separator"></div>
        <h1 class="text-center extrabold">Contact Us</h1>
        <div class="separator"></div>
      </div>
      <div class="content_page">
        <div class="row">
          <div class="span8">
            <div class="separator"></div>
            <h2><span>Send  a Letter</span></h2>
            <div class="clr"></div>
            <form class="form-horizontal" action="" method="post" id="contactform_main">
              <div class="control-group">
                <label class="control-label" for="name">Name*</label>
                <div class="controls">
                  <input type="text" id="name" name="name" placeholder="Name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="email">Mobile*</label>
                <div class="controls">
                  <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="message">Message*</label>
                <div class="controls">
                  <textarea id="message" name="message" rows="3" cols="30"></textarea>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" name="submit" value="submit" class="btn span2 btn-grey">Submit</button>
                </div>
              </div>
            </form>
            <div class="clr"></div>
          </div>
          <div class="span4">
            <p>Phone: +234 (0) 803 961 5025 <br />
            kuszeng&#64;yahoo.com <br />
          </p>
            
            
            <!-- DC Facebook Likes Box Start --> 
            <!-- Define your facebook page url: likebox.php?href=http://www.facebook.com/page-or-username -->
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/kuszengwork&width=240&height=258&colorscheme=light&show_faces=true&border_color&stream=false&header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:99%; height:350px;" allowTransparency="true"></iframe>
            <!-- DC Facebook Likes Box End --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clr separator"></div>
  <!-- /content --> 
  
    <?php include('includes/footer.php'); ?>

