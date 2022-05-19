<?php 
   /**
   *Theme Name: iogoos
   *Theme URI: iogoos.com
   *Description: dms
   * Template Name: pricing-calc
   *Version:1.1
   *Author: iogoos
   *Author URI: iogoos.com
   **/
   get_header(); ?>
<!-- main wrapper line -->
<div class="banner_io banner_io2 pricing-calc">
   <?php include 'navigation.php'; ?>
   <!-- ............banner section.................. -->
   <div class="ab_banner pricing_calccc">
      <div class="container">
         <h1>Project Quote Calculator</h1>
          <p id="change_content">Use the sliders below to indicate your needs, then click the "See <br>Pricing" button for a free, instant quote.</p>
                    <div class="tabbb" style="display: none;">
            <h4>Here is your free quote! This quote is an estimate.</h4>
            <div class="est-l">
              <a href="javascript:void(0)" class="another btn blue">Click here for another quote.</a>
            </div>
          </div>
      </div>
   </div>
</div>

<div class="calculator-sec">
    <div class="shapeX shape___1"></div>
    <div class="shapeX shape___2"></div>
    <div class="container">
      <div id="show_form">
        <form id="cms-quote" method="post" action="" class="price-calculator">
        <fieldset class="fldst" id="price_h">
          <div class="row_fldst">
            <label>NUMBER OF PAGES</label>
            <input type="text" name="pages" readonly="readonly" id="Chan_val" value="1 - 10">
            <div class="clearfix show--mobile"></div>
            <div class="leftde ico-l slider-left btn blue icon-arrow-left5" id="pages-slider-left"></div>
            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui_slider_1" id="pages-slider" aria-disabled="false">&nbsp;
              <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
            </div>
            <div class="slider-right btn blue icon-arrow-right5 leftdee ico-r" id="pages-slider-right"></div>
          </div>
          <!-- first-row -->
          <div class="row_fldst">
            <label>STYLE OF DESIGN</label>
            <input type="text" name="style" readonly="readonly" id="Chan_val_2" value="No design needed">
            <div class="clearfix show--mobile"></div>
            <div class="leftde ico-l slider-left btn blue icon-arrow-left5" id="style-slider-left"></div>
            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui_slider_1" id="style-slider" aria-disabled="false">&nbsp;
              <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
            </div>
            <div class="slider-right btn blue icon-arrow-right5 leftdee ico-r" id="style-slider-right"></div>
          </div>
          <!-- second-row -->
          <div class="row_fldst">
            <label>COPYWRITING # OF PAGES</label>
            <input type="text" name="copywriting" readonly="readonly" id="Chan_val_3" value="None">
            <div class="clearfix show--mobile"></div>
            <div class="leftde ico-l slider-left btn blue icon-arrow-left5" id="copywriting-slider-left"></div>
            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui_slider_1" id="copywriting-slider" aria-disabled="false">&nbsp;
              <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
            </div>
            <div class="slider-right btn blue icon-arrow-right5 leftdee ico-r" id="copywriting-slider-right"></div>
          </div>
          <!-- second-row -->
          <div class="row_fldst">
            <label>SEO W/ PLACEMENT GUARANTEE</label>
            <input type="text" name="seo" readonly="readonly" id="Chan_val_4" value="None">
            <div class="clearfix show--mobile"></div>
            <div class="leftde ico-l slider-left btn blue icon-arrow-left5" id="seo-slider-left"></div>
            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui_slider_1" id="seo-slider" aria-disabled="false">&nbsp;
              <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
            </div>
            <div class="slider-right btn blue icon-arrow-right5 leftdee ico-r" id="seo-slider-right"></div>
          </div>
          <!-- second-row -->
          <div class="row_fldst" id="rd">
            <label>RESPONSIVE DESIGN</label>
            <input type="text" name="responsive" readonly="readonly" id="Chan_val_5" value="No">
            <div class="clearfix show--mobile"></div>
            <div class="leftde ico-l slider-left btn blue icon-arrow-left5" id="responsive-slider-left"></div>
            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui_slider_1" id="responsive-slider" aria-disabled="false">&nbsp;
              <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
            </div>
            <div class="slider-right btn blue icon-arrow-right5 leftdee ico-r" id="responsive-slider-right"></div>
          </div>
          <!-- second-row -->
          <div class="row_fldst">
            <label>DATABASE INTEGRATION</label>
            <input type="text" name="database" readonly="readonly" id="Chan_val_6" value="None">
            <div class="clearfix show--mobile"></div>
            <div class="leftde ico-l slider-left btn blue icon-arrow-left5" id="database-slider-left"></div>
            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui_slider_1" id="database-slider" aria-disabled="false">&nbsp;
              <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
            </div>
            <div class="slider-right btn blue icon-arrow-right5 leftdee ico-r" id="database-slider-right"></div>
          </div>
          <!-- second-row -->
          <div class="row_fldst">
            <label>E-COMMERCE FUNCTIONALITY</label>
            <input type="text" name="ecommerce" readonly="readonly" id="Chan_val_7" value="None">
            <div class="clearfix show--mobile"></div>
            <div class="leftde ico-l slider-left btn blue icon-arrow-left5" id="ecommerce-slider-left"></div>
            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui_slider_1" id="ecommerce-slider" aria-disabled="false">&nbsp;
              <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
            </div>
            <div class="slider-right btn blue icon-arrow-right5 leftdee ico-r" id="ecommerce-slider-right"></div>
          </div>
          <!-- second-row -->
          <div class="row_fldst">
            <label>CMS</label>
            <input type="text" name="cms" readonly="readonly" id="Chan_val_8" value="None">
            <div class="clearfix show--mobile"></div>
            <div class="leftde ico-l slider-left btn blue icon-arrow-left5" id="cms-slider-left"></div>
            <div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all ui_slider_1" id="cms-slider" aria-disabled="false">&nbsp;
              <a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 0%;"></a>
            </div>
            <div class="slider-right btn blue icon-arrow-right5 leftdee ico-r" id="cms-slider-right"></div>
          </div>
          <!-- second-row -->
          <div>
            <div class="button-row center see_pricing">
              <input id="calculate" type="submit" class="btn yellow submit show_pricing_table" value="SEE PRICING">
            </div>
            <input type="hidden" name="imahuman" class="imahuman" value="0">
          </div>
        </fieldset>

      </form>
    </div>
    <div class="clearfix">  </div>
    <div class="estm" style="display: none;">
      <div class="container">
        <div class="estimatco" id="price_h2">
          <table id="quote-result">
            <tbody><tr class="top">
              <th colspan="2">&nbsp;</th>
              <th class="low">Low</th>
              <th class="high">High</th>
            </tr>

            <tr><th class="service" id="service_1">Number of pages</th>
              <td class="item" id="qnty">1 - 10</td>
              <td class="low low1" id="nod_1">0</td>
              <td class="high" id="nod_2">0</td>
            </tr><tr><th class="service" id="service_2">Style of design</th>
              <td class="item" id="des_n">No design needed</td>
              <td class="low" id="des_n_1">0</td>
              <td class="high" id="des_n_2">0</td>
            </tr><tr><th class="service" id="service_3">Copywriting # of pages</th>
              <td class="item" id="copy_p">None</td>
              <td class="low" id="copy_p_1">0</td>
              <td class="high" id="copy_p_2">0</td>
            </tr><tr><th class="service" id="service_4">SEO w/ Placement Guarantee</th>
              <td class="item" id="seo_g">None</td>
              <td class="low" id="seo_g_1">0</td>
              <td class="high" id="seo_g_2">0</td>
            </tr><tr><th class="service" id="service_5">Responsive Design</th>
              <td class="item yni" id="res_d">No</td>
              <td class="low" id="res_d_1">0</td>
              <td class="high" id="res_d_2">0</td>
            </tr><tr><th class="service" id="service_6">Database Integration</th>
              <td class="item" id="data_i">None</td>
              <td class="low" id="data_i_1">0</td>
              <td class="high" id="data_i_2">0</td>
            </tr><tr><th class="service" id="service_7">e-Commerce Functionality</th>
              <td class="item" id="eco_f">None</td>
              <td class="low" id="eco_f_1">0</td>
              <td class="high" id="eco_f_2">0</td>
            </tr><tr><th class="service" id="service_8">CMS</th>
              <td class="item" id="cms_d">None</td>
              <td class="low" id="cms_d_1">0</td>
              <td class="high" id="cms_d_2">0</td>
            </tr>
            <tr class="total">
              <th colspan="2" class="cnt">Total Estimated Quote</th>
              <td class="low" id="tot_low">0</td>
              <td class="high" id="tot_high">0</td>
            </tr>
          </tbody></table>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="webfx" style="display: none;">
      <h4>Please complete the web form below for <br>an exact project quote from a unisoft informatic website design strategist.</h4>
      <form action="" method="post">
        <div class="form-group left-textarea">
         <!--    <label for="message"></label> -->
         <textarea name="message" id="page-detail" cols="30" rows="10"></textarea>
       </div>
       <div class="input-right">
        <div class="form-group">
          <!-- <label for="fullName">NAME<span>*</span></label> -->
          <input type="text" class="form-control" placeholder="Please Enter Name" name="fullName" required="">
        </div>
        <div class="form-group">
          <!-- <label for="email">EMAIL<span>*</span></label> -->
          <input type="email" class="form-control" id="email" placeholder="Please Enter Email" name="email" required="">
        </div>
        <div class="form-group">
          <!-- <label for="phone-no">PHONE</label> -->
          <input type="text" class="form-control" placeholder="Please Enter Phone No" name="phone-no">
        </div>
        <div class="form-group form-check">
         <!--  <label for="company">COMPANY </label> -->
         <input class="form-control" type="text" name="company" placeholder="Please Enter Company Name">
       </div>
       <div class="form-btn">
         <button type="submit" class="btn btn-primary">Submit</button>
       </div>
     </div>
   </form>
 </div>
</div>
</div>
<?php get_footer(); ?>