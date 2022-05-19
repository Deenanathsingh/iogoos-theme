<div class="cntaine">
   <div class="socialmedia">
      <div class="socialmedia-icons"><a href="#"><i class="fab fa-facebook"></i></a></div>
      <div class="socialmedia-icons"><a href="#"><i class="fab fa-twitter"></i></a></div>
      <div class="socialmedia-icons"><a href="#"><i class="fab fa-instagram"></i></a></div>
      <div class="socialmedia-icons"><a href="#"><i class="fab fa-linkedin"></i></a></div>
   </div>
   <p class="p2">Let's Start with an Email...</p>
   <div class="row_form">
      <div class="form service_form">
         <form method="post" name="frmcontact2" id="frmcontact2">
            <div class="ROW_W ROW_W1">
               <div class="form_group">
                  <input type="text" name="name" placeholder="Name*">
               </div>
               <div class="form_group m_bottom">
                  <input type="text" name="email" placeholder="Email Address*">
               </div>
            </div>
            <div class="ROW_W width_fuuull">
               <div class="form_group">
                  <input type="text" name="phone" placeholder="Phone Number*">
               </div>
            </div>
            <div class="ROW_W">
               <div class="full_width">
                  <textarea name="message" placeholder="Please Input Message..."></textarea> 
               </div>
            </div>
            <div class="row_w">
               <div class="form_group_cathe">
                  <div data-sitekey="<?php echo SITE_KEY;?>" class="g-recaptcha"></div>
               </div>
               <input type="hidden" name="action" value="common_contact_form" />
               <div id="formresponse" style="padding:5px;"></div>
               <div class="sbm-btn">
                  <input type="submit" class="sbmit btnsubmit" value="SEND" name="submit">
                  <span>→</span>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>