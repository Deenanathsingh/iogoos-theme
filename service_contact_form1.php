<form method="post" name="frmcontact3" id="frmcontact3">
   <div class="form-group">
      <input type="text" placeholder="Full Name" name="name" class="form-control">
   </div>
   <div class="form-group">
      <input type="text" placeholder="Email Address" name="email" class="form-control">
   </div>
   <div class="form-group">
      <input type="text" placeholder="Phone Number" name="phone" class="form-control">
   </div>
   <div class="form-group">
      <select class="form-control" id="country" name="Country" >
         <option value="">Country</option>
         <?php
            $countries=countrylist_array();
            foreach($countries as $k_c=>$val_c){
            echo "<option value='".$val_c."'>".$val_c."</option>";
            }
            ?>
      </select>
   </div>
   <div class="form-group">
      <select name="budget">
         <option value="">Budget</option>
         <option value="$0-$500">$0-$500</option>
         <option value="$500-$1000">$500-$1,000</option>
         <option value="$1000-$1500">$1,000-$1,500</option>
         <option value="$1500-$2500">$1,500-$2,500</option>
         <option value="$2500-$4500">$2,500-$4,500</option>
         <option value="$4500-$7000">$4,500-$7,000</option>
         <option value="$7000-$10000">$7,000-$10,000</option>
         <option value="$10000-$15000">$10,000-$15,000</option>
         <option value="$15000-$25000">$15,000-$25,000</option>
         <option value="$25000-$50000">$25,000-$50,000</option>
         <option value="$50000+">$50,000+</option>
         <option value="not sure">not sure</option>
      </select>
   </div>
   <textarea class="form-control" placeholder="Describe your project" name="message"></textarea>
   <div class="form_group_cathe">
      <div data-sitekey="<?php echo SITE_KEY;?>" class="g-recaptcha"></div>
   </div>
   <div class="formresponse" style="padding:5px;"></div>
   <div class="orange-heading">
      <input type="hidden" name="action" value="service_contact_one" />
      <input type="submit" class="form-control btnsubmit1" name="srsubmit">
   </div>
</form>