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
            <h2><span>Get in touch </span></h2>
            <div class="clr"></div>
            <div class="maps_view" style="width:99%; float:left; position:relative; padding: 0.5%;
background: #F4F4F4;
border: 1px solid white; margin-bottom: 15px;">
              <div id="gmap_contact" style="width:100%; height: 100%;"></div>
              <div class="clr"></div>
            </div>
            <div class="separator_small"></div>
            <p>Our friendly customer service representatives are committed to answering all your questions and meeting any need you may have. We'd love to hear from you! Please fill out the form below so we may assist you. </p>
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
                <label class="control-label" for="email">Email*</label>
                <div class="controls">
                  <input type="email" id="email" name="email" placeholder="Email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="url">Website*</label>
                <div class="controls">
                  <input type="text" id="url" name="website" placeholder="Website">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="subject">Subject*</label>
                <div class="controls">
                  <input type="email" id="subject" name="subject" placeholder="Subject">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="message">Message*</label>
                <div class="controls">
                  <textarea id="message" name="message" rows="6" cols="50"></textarea>
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
            <p><br />
              123 Example Way <br />
              San Francisco, CA 94108 <br />
              USA <br />
              <br />
              Phone: (888) 123-4567 <br />
              Fax: (887) 123-4567 <br />
              Email: contact&#64;example.com <br />
              skype: dcodes.net <br />
              <br />
              Mon to Fri: 8:00am - 5:00pm <br />
              <br />
            </p>
            
            <!-- Place this tag where you want the skype button to render --> 
            <!-- Define your skype username: skype:USERNAME --> 
            <a href="skype:DCODES.NET?call"><img src="http://download.skype.com/share/skypebuttons/buttons/call_blue_transparent_70x23.png" style="border: none;" width="70" height="23" alt="Skype Me!" title="Call me with Skype!" /></a> 
            
            <!-- DC Social Icons CSS: Add more social buttons from http://www.dcodes.net/2/docs/social_icons.html  -->
            <link rel="stylesheet" type="text/css" href="http://cdn.dcodes.net/2/social_icons/dc_social_icons.css" />
            <br />
            <br />
            
            <!-- DC Social Icons --> 
            <a class="mail_teeny dc_social_teeny" title="email" href="#">email</a> <a class="skype_teeny dc_social_teeny" title="skype" href="#">skype</a> <a class="facebook_teeny dc_social_teeny" title="facebook" href="#">facebook</a> <a class="twitter_teeny dc_social_teeny" title="twitter" href="#">twitter</a> <a class="linkedin_teeny dc_social_teeny" title="linkedin" href="#">linkedin</a> <a class="googleplus_teeny dc_social_teeny" title="google+" href="#">google+</a> <br />
            <br />
            
            <!-- DC Twitter Count Start --> 
            <!-- Define your twitter username after: ?screen_name= -->
            <iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/follow_button.html?screen_name=TEMPLATEACCESS&show_count=true&show_screen_name=false&lang=en" style="width:240px; height:25px;"></iframe>
            <!-- DC Twitter Count End --> 
            
            <br />
            <br />
            
            <!-- DC Facebook Likes Box Start --> 
            <!-- Define your facebook page url: likebox.php?href=http://www.facebook.com/page-or-username -->
            <iframe src="http://www.facebook.com/plugins/likebox.php?href=http://www.facebook.com/DreamTemplate&width=240&height=258&colorscheme=light&show_faces=true&border_color&stream=false&header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:99%; height:350px;" allowTransparency="true"></iframe>
            <!-- DC Facebook Likes Box End --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clr separator"></div>
  <!-- /content --> 
  
    <?php include('includes/footer.php'); ?>

