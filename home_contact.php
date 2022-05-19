<form method="post" name="frmcontact" id="frmcontact" enctype="multipart/form-data">
   <h2 class="seactionHead">Let Discuss Your Project</h2>
   <div class="form-group df">
      <label>
      <input class="form-control" placeholder="Your Name" type="text" id="fname" name="fname">
      </label>
      <label>
      <input class="form-control" placeholder="Your Work E-mail" type="text" id="email" name="email">
      </label>
      <select class="country_list" id="country" name="country" style="margin-left:0px;margin-right:10px;">
         <option value="">Country</option>
         <?php
            $countries=countrylist_array();
            foreach($countries as $k_c=>$val_c){
            echo "<option value='".$val_c."'>".$val_c."</option>";
            }
            ?>
      </select>
      <label>
      <input class="form-control" placeholder="Contact Number" type="text" id="mobile" name="mobile">
      </label>
      <div class="clearfix" style="clear:both;"></div>
      <div class="form-group fg-2">
         <label class="budgetd">
            <select class="Budget" name="budget" id="budget">
               <option value="Budget">Budget</option>
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
         </label>
         <label class="Time-Estimations">
               <select name="your-menu2" class="Time-Estimation">
                  <option value="">Time Estimation*</option>
                  <option value="ASAP">ASAP</option>
                  <option value="4-8 Weeks">4-8 Weeks</option>
                  <option value="8-12 Weeks">8-12 Weeks</option>
                  <option value="12-16 Weeks">12-16 Weeks</option>
                  <option value="16+ Weeks">16+ Weeks</option>
                  <option value="Whatever it takes">Whatever it takes</option>
               </select>
			<!-- 
         <span class="choose_file">
         <input type="file" id="attach_file" name="attach_file" accept="image/webp, image/jpeg">
         </span>
			--> 
         </label>
      </div>
   </div>
   <div class="choose_tech">
      <div class="choose_tchno">
         <h4>What Can we Do for you ?</h4>
         <ul class="worktypelst">
            <li>
               <input type="checkbox" class="wt-1" id="worktype1" name="worktype[]" value="Product Development">
               <label for="worktype1">
               <i class="fas fa-check"></i>
               <img src="<?php echo get_template_directory_uri(); ?>/img/productdevelopment.webp" width="138" height="80" alt="img">
               <span class="span_pop1">Ecommerce</span>
               </label>
            </li>
            <li>
               <input type="checkbox" class="wt-1" id="worktype2" name="worktype[]" value="Web Development">
               <label for="worktype2">
               <i class="fas fa-check"></i>
               <img src="<?php echo get_template_directory_uri(); ?>/img/webdevelopment.webp" width="138" height="80" alt="img">
               <span class="span_pop1">Web Development</span>
               </label>
            </li>
            <li>
               <input type="checkbox" class="wt-1" id="worktype3" name="worktype[]" value="UX/UI Design">
               <label for="worktype3">
               <i class="fas fa-check"></i>
               <img src="<?php echo get_template_directory_uri(); ?>/img/uxuidesign.webp" width="138" height="80" alt="img">
               <span class="span_pop1">UX/UI <br>Design</span>
               </label>
            </li>
            <li>
               <input type="checkbox" class="wt-1" id="worktype4" name="worktype[]" value="Mobile App Development">
               <label for="worktype4">
               <i class="fas fa-check"></i>
               <img src="<?php echo get_template_directory_uri(); ?>/img/mobileapp.webp" width="138" height="80" alt="img">
               <span class="span_pop1">Mobile App Development</span>
               </label>
            </li>
            <li>
               <input type="checkbox" class="wt-1" id="worktype5" name="worktype[]" value="Digital Marketing">
               <label for="worktype5">
               <i class="fas fa-check"></i>
               <img src="<?php echo get_template_directory_uri(); ?>/img/digitalmarketing.webp" width="138" height="80" alt="img">
               <span class="span_pop1">Digital Marketing</span>
               </label>
            </li>
         </ul>
      </div>
   </div>
   <div class="clearfix" style="clear:both;"></div>
   <div class="form-group">
      <label class="comentcoment">
      <textarea placeholder="Your Requirements" id="coment" name="comment" cols="30" rows="8"></textarea>
      </label>
   </div>
   <div class="form_group_cathe chfl" style="float:left;">
      <div data-sitekey="<?php echo SITE_KEY;?>" class="g-recaptcha"></div>
       <span class="choose_file">
         <input type="file" id="attach_file" name="attach_file" accept="image/webp, image/jpeg">
         </span>
   </div>
   <div class="clearfix" style="clear:both;"></div>
   <div class="form_group">
      <div id="formresponse" style="padding:5px;"></div>
      <input type="hidden" name="action" value="contact_form" />
	 <input class="btn btnsubmit" type="submit" name="submit" value="Send Your Request">
   </div>
	
	<div class="numberRow">
<ul>
 <li><span class="__span_icon __span_icon_1"><span class="cont_icon cont_icon_1"></span><span class="blk-no" style="display: block;"> +1-315 215 0919</span></span></li>
 <li><span class="__span_icon __span_icon_3"><span class="cont_icon cont_icon_3"></span><span class="blk-no"> +91-954 000 7839</span></span></li>
 <li><span class="__span_icon __span_icon_2"><span class="cont_icon cont_icon_2"></span><span class="blk-no"> +27-110 839 444</span></span></li>
      </ul>
</div>
	
</form>