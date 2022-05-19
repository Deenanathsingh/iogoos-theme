<div class="popup2-wrapper  request_infoo">
  <div class="popup2-wrapper-content popup2-core-js ">
    <div class="popup2-wrapper-container clearfix popup2-core-container-custom" style="max-width: 680px;">
      <div class="popup2-column popup2-core-column-60 popup2-core-column-first">
        <div class="popup2-column-content-margin popup2-core-js inner-box">
          <div class="popup2-column-content clearfix popup2-core-js ">
            <div class="popup2-core-pbf-element">
              <div class="popup2-contact-form-7-item popup2-core-item-pdlr popup2-core-item-pdb ">
                <div role="form" class="wpcf7 idefault" id="wpcf7-f7281-p2039-o2" lang="en-US" dir="ltr">
                  
                  <form action="#" method="post" class="wpcf7-form" novalidate="novalidate" id="tempform" name="tempform">
                    <div class="row row_1">
                      <div class="col-sm-12"><span class="wpcf7-form-control-wrap your-email">
                        <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Your Email">
                        </span></div>
                    </div>
                    <div class="row row_2">
                      <div class="col-sm-6"><span class="wpcf7-form-control-wrap your-fname">
                        <input type="text" name="your-fname" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Your Name">
                        </span></div>
                      <div class="col-sm-6"><span class="wpcf7-form-control-wrap your-phone">
                        <input type="number" name="your-phone" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number form-control" aria-required="true" aria-invalid="false" placeholder="Phone Number">
                        </span></div>
                    </div>
                    <div class="row row_3">
                      <div class="col-sm-12"><span class="wpcf7-form-control-wrap country-name">
                        <select style="padding:14px;max-width:250px;border:1px solid #757575 !important;background:rgba(232, 232, 232, 0.1) !important;" id="country-name" name="country-name" >
                            <option value="">Country</option>
							<?php
                            $countries=countrylist_array();
							foreach($countries as $k_c=>$val_c){
								echo '<option value="'.$val_c.'">'.$val_c."</option>";
							}
							?>
                            </select>
                        </span></div>
                    </div>
                    <div class="row captchabtn">
                      <div class="col-sm-12">
                        <div class="wpcf7-form-control-wrap">
                          <div data-sitekey="<?php echo SITE_KEY;?>" class="wpcf7-form-control g-recaptcha wpcf7-recaptcha">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                      <input type="hidden" name="action" value="template_contact_form" />
                        <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit">
                        <span class="ajax-loader"></span></div>
                        <div class="screen-reader-response"></div>
                    </div>
                    <div class="close_btnnn">X</div>
                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>