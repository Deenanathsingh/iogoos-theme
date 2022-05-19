<form method="post" name="frmcontact4" id="frmcontact4" enctype="multipart/form-data">
  <div class="ROW_H">
    <div class="form_group">
      <input type="text" name="name" placeholder="Name*">
    </div>
    <div class="form_group m_bottom">
      <input type="text" name="email" placeholder="Email Address*">
    </div>
  </div>
  <div class="ROW_H">
    <div class="form_group">
      <input type="text" name="phone" placeholder="Phone Number*">
    </div>
    <select name="work_type" class="form-control">
      <option value="I need help with*">I need help with*</option>
      <option value="Website Design">Website Design</option>
      <option value="Website Development">Website Development</option>
      <option value="E-Commerce Website">E-Commerce Website</option>
      <option value="Content management System">Content management System</option>
      <option value="Paid Search Marketing">Paid Search Marketing</option>
      <option value="Internet Marketing">Internet Marketing</option>
      <option value="Social Media Marketing">Social Media Marketing</option>
      <option value="Email marketing">Email marketing</option>
      <option value="Graphics Design">Graphics Design</option>
    </select>
  </div>
  <div class="ROW_H">
    <select name="timeline" class="form-control">
      <option value="Time Estimation*">Time Estimation*</option>
      <option value="ASAP">ASAP</option>
      <option value="4-8 Weeks">4-8 Weeks</option>
      <option value="8-12 Weeks">8-12 Weeks</option>
      <option value="12-16 Weeks">12-16 Weeks</option>
      <option value="16+ Weeks">16+ Weeks</option>
      <option value="Whatever it takes">Whatever it takes</option>
    </select>
    <select name="budget" class="form-control">
      <option value="">My Budget is about*</option>
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
  <div class="ROW_HH">
    <div class="full_width">
      <input type="file" name="attach_file" size="40" class="form-control" accept=".pdf,.txt,.docx">
    </div>
  </div>
  <div class="ROW_HH">
    <div class="full_width full_width22">
      <textarea name="message" class="form-control" placeholder="Please Input Message..."></textarea>
    </div>
  </div>
  <div class="row_H">
    <div class="form_group_cathe">
      <div data-sitekey="<?php echo SITE_KEY;?>" class="g-recaptcha"></div>
    </div>
    <div class="formresponse" style="padding:5px;"></div>
    <div class="sbm-btn">
      <input type="hidden" name="action" value="service_contact_two" />
      <input type="submit" class="sbmit btnsubmit2" value="SEND MESSAGE" name="submit2">
      <span>→</span> </div>
  </div>
</form>