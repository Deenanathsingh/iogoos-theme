<form class="frmproj" method="post">
  <div class="form-group input_text">
    <input type="text" name="emailaddress" class="emailaddress" placeholder="Enter Your Email Address">
  </div>
  <div class="form-group input_submit">
    <span href="#" class="hvr-sweep-to-right"><input type="button" value="Start Your Project" class="btnprj"></span>
    
  </div>
  <input type="hidden" name="prtabname" class="prtabname" value="<?php echo $tabname?>" />
  <input type="hidden" name="action" value="project_form" />
</form>
<div class="frmerrmsg" style="color:#FF0000;"></div>
