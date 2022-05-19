<?php
/**
 * The template for displaying all single music and attachments
 *
 * @package Iogoos
 * @subpackage Iogoos
 * @since Iogoos 1.0
 */


get_header(); 

while( have_posts() ) :
    the_post();
    $pod_service = get_post_meta( get_the_ID() );

?>



<!--..................header ending line.......................-->
<div class="handy-pdp banner_io banner_io2">
    <?php include 'navigation.php'; ?>
    <!--banner form-->
    <div class="hb-homebanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner inner1">
                        <h1>
                            <?php echo $pod_service['section1_heading_line1'][0]; ?> <br><span><?php echo $pod_service['section1_heading_line2'][0]; ?></span>
                        </h1>
                        <div class="hb-description">
                            <p class="first_pr"><?php echo $pod_service['section1_description'][0]; ?></p>
                            <div class="handy_check">
                                <div class="check-content">
                                    <h4><?php echo $pod_service['section1_point1'][0]; ?></h4>
                                </div>
                                <div class="check-content">
                                    <h4><?php echo $pod_service['section1_point2'][0]; ?></h4>
                                </div>
                                <div class="check-content">
                                    <h4><?php echo $pod_service['section1_point3'][0]; ?></h4>
                                </div>
                                <div class="check-content">
                                    <h4><?php echo $pod_service['section1_point4'][0]; ?></h4>
                                </div>
                                <div class="check-content">
                                    <h4><?php echo $pod_service['section1_point5'][0]; ?></h4>
                                </div>
                                <div class="check-content">
                                    <h4><?php echo $pod_service['section1_point6'][0]; ?></h4>
                                </div>
                            </div>
                            <div class="check-contentt2">
                                <h5><?php echo $pod_service['section1_last_description'][0]; ?></h5>
                                <div class="bttna">
                                    <a href="<?php echo $pod_service['section1_btn1_url'][0]; ?>"><img class="phone___icon animate"
                                            src="https://www.iogoos.com/wp-content/themes/iogoos/img/phone___icon.webp"
                                            alt="phone icon"><?php echo $pod_service['section1_btn1'][0]; ?></a>
                                    <a href="<?php echo $pod_service['section1_btn2'][0]; ?>"><?php echo $pod_service['section1_btn2'][0]; ?></a>
                                </div>
                            </div>
                            <div class="yearRow">
                                <span><strong><?php echo $pod_service['section1_detail1'][0]; ?></strong> <?php echo $pod_service['section1_detail_title1'][0]; ?></span>
                                <span><strong><?php echo $pod_service['section1_detail2'][0]; ?></strong><?php echo $pod_service['section1_detail_title2'][0]; ?></span>
                                <span><strong><?php echo $pod_service['section1_detail3'][0]; ?></strong><?php echo $pod_service['section1_detail_title3'][0]; ?></span>
                                <span><strong><?php echo $pod_service['section1_detail4'][0]; ?></strong><?php echo $pod_service['section1_detail_title4'][0]; ?></span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="inner inner2">

                        <div class="hb-leftareatitle">
                            <h4>REQUEST A QUOTE NOW!</h4>
                            <p>Get in touch with us and see how your business can benefit.</p>
                        </div>
                        <form method="post" name="frmcontact3" id="frmcontact3" data-hs-cf-bound="true">
                            <div class="form-group">
                                <i class="fa fa-user"></i> <input type="text" placeholder="Full Name" name="name"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-envelope"></i><input type="text" placeholder="Email Address"
                                    name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-mobile"></i><input type="text" placeholder="Phone Number" name="phone"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <i class="fas fa-hands-helping"></i> <select name="your-menu1" class="form-control">
                                    <option value="">I need help with*</option>
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
                            <div class="form-group">
                                <i class="fa fa-globe"></i><select class="form-control" id="country" name="Country">
                                    <option value="">Country</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">Azerbaijan</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">Cape Verde</option>
                                    <option value="Cayman Islands">Cayman Islands</option>
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic
                                        of the</option>
                                    <option value="Cook Islands">Cook Islands</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cote D" ivoire'="">Cote D'Ivoire</option>
                                    <option value="Croatia">Croatia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">Czech Republic</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">Dominican Republic</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">Gibraltar</option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">Greenland</option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">Guadeloupe</option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                    </option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">Kazakhstan</option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Korea, Democratic People" s="" republic="" of'="">Korea, Democratic
                                        People's Republic of</option>
                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                    <option value="Lao People" s="" democratic="" republic'="">Lao People's Democratic
                                        Republic</option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lithuania">Lithuania</option>
                                    <option value="Luxembourg">Luxembourg</option>
                                    <option value="Macao">Macao</option>
                                    <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former
                                        Yugoslav Republic of</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">Marshall Islands</option>
                                    <option value="Martinique">Martinique</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="Mauritius">Mauritius</option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">Montserrat</option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">Netherlands</option>
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                    </option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russian Federation">Russian Federation</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Helena">Saint Helena</option>
                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the
                                        South Sandwich Islands</option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                    <option value="Tajikistan">Tajikistan</option>
                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Timor-Leste">Timor-Leste</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">Turkmenistan</option>
                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                    <option value="United States Minor Outlying Islands">United States Minor Outlying
                                        Islands</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">Uzbekistan</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Viet Nam">Viet Nam</option>
                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                    <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                    <option value="Western Sahara">Western Sahara</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <i class="fas fa-dollar-sign"></i><select name="budget">
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
                            <textarea class="form-control" placeholder="Describe your project"
                                name="message"></textarea>
                            <div class="form_group_cathe chfl">
                                <div data-sitekey="6LeiGE0UAAAAAC1v4Eo10AIXLLSW4tEi60aYhQlZ" class="g-recaptcha">
                                    <div style="width: 304px; height: 78px;">
                                        <div><iframe title="reCAPTCHA"
                                                src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeiGE0UAAAAAC1v4Eo10AIXLLSW4tEi60aYhQlZ&amp;co=aHR0cHM6Ly93d3cuaW9nb29zLmNvbTo0NDM.&amp;hl=en&amp;v=2W_gRz39xX8G13fM-OdyQPlc&amp;size=normal&amp;cb=covrnyjun0fy"
                                                width="304" height="78" role="presentation" name="a-54wpy3cv6zri"
                                                frameborder="0" scrolling="no"
                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                        </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                            class="g-recaptcha-response"
                                            style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                    </div>
                                </div>
                                <span class="choose_file">
                                    <input type="file" id="attach_file" name="attach_file"
                                        accept="image/png, image/jpeg">
                                </span>
                            </div>
                            <div class="formresponse" style="padding:5px;"></div>


                            <div class="orange-heading">
                                <input type="hidden" name="action" value="service_contact_one">
                                <i class="fas fa-location-arrow"></i><input type="submit"
                                    class="form-control btnsubmit1" name="srsubmit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--banner form-->
<!--short title-->
<div class="hannddy-ggrl">
    <h3>LARAVEL WEBSITE SERVICES </h3>
    <p>Our highly skilled laravel development team leverages our laravel development service and develops fully
        functional custom <br>laravel applications to scale new heights in your business.</p>
    <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/img/img-03.webp" alt="img">
    </div>
</div>
<!--short title-->
<!--six grid-->
<section class="cms_bsd cms_bsd_BG">
    <div class="container">
        <h2 class="text-center">Laravel Development Services <br>for ambitious brands</h2>
        <p class="cl">Our experts PHP Developers team are creative website designers and build dynamic web page
            designs. <br>IOGOOS Solution skilled PHP developers design your dream website with the utmost sincerity.
        </p>
        <div class="row equal equal2">
            <div class="col-lg-4 services_tab">
                <div class="top-bottom-margin">
                    <div class="span-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/CUSTOM-LARAVEL-WEB-DEVELOPMENT_.webp"
                            alt="">
                    </div>
                    <div class="requestQuote">
                        <h3>Custom Laravel Web Development</h3>
                        <p class="text-center">We build tailored-made Laravel web applications integrating the best
                            in class functionalities and features with the help of our highly-skilled Laravel
                            developers.</p>
                        <div class="shopping-hover">

                            <a href="#" class="get_a_quote">Request A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 services_tab">
                <div class="top-bottom-margin">
                    <div class="span-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ENTERPRISE-LARAVEL-APPLICATION_.webp"
                            alt="">
                    </div>
                    <div class="requestQuote">
                        <h3>Laravel Application Development</h3>
                        <p>With the powerful combination of scalable Laravel platform and professional team of
                            Laravel developers at ValueCoders, you will get the top-notch enterprise Laravel
                            applications.</p>
                        <div class="shopping-hover">

                            <a href="#" class="get_a_quote">Request A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 services_tab">
                <div class="top-bottom-margin">
                    <div class="span-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/AI-&-MACHINE-LEARNING-LARAVEL-APPLICATION_.webp"
                            alt="">
                    </div>
                    <div class="requestQuote">
                        <h3>AI & Machine Learning Laravel Application</h3>
                        <p>We have a team of 450+ developers who have 4+ years of experience in machine learning and
                            AI integrated Laravel web applications and future-ready enterprise-grade applications.
                        </p>
                        <div class="shopping-hover">

                            <a href="#" class="get_a_quote">Request A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 services_tab">
                <div class="top-bottom-margin">
                    <div class="span-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ELARAVEL-API-DEVELOPMENT.webp" alt="">
                    </div>
                    <div class="requestQuote">
                        <h3>Laravel API Development</h3>
                        <p>We being a world-class Laravel development company have a decade of experience in
                            creating an API generator package that enables smooth communication with mobile users.
                        </p>
                        <div class="shopping-hover">

                            <a href="#" class="get_a_quote">Request A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 services_tab">
                <div class="top-bottom-margin">
                    <div class="span-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/QUALITY-ASSURANCE-&-TESTING_.webp"
                            alt="">
                    </div>
                    <div class="requestQuote">
                        <h3>Quality Assurance & Testing</h3>
                        <p>Our dedicated Laravel QA team leverages advanced tools and methods to perform the quality
                            assurance and testing, ensuring the solutions to be bug-free.
                        </p>
                        <div class="shopping-hover">

                            <a href="#" class="get_a_quote">Request A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 services_tab">
                <div class="top-bottom-margin">
                    <div class="span-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/MIGRATION-UPGRADATION_.webp" alt="">
                    </div>
                    <div class="requestQuote">
                        <h3>Migration & Upgradation</h3>
                        <p>If you want to migrate or upgrade your existing systems to Laravel web application, then
                            we are here! We can migrate your current systems with the right set of migration
                            technology.
                        </p>
                        <div class="shopping-hover">

                            <a href="#" class="get_a_quote">Request A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--six grid-->
<!--portfolio-->
<div class="top-port-section">
    <div class="container">
        <h4>our Laravel portfolio</h4>
        <div class="upper-text">The power of Laravel framework to develop high-performing, result-oriented Laravel
            applications. Elevate your brand with stunning Laravel Development Services that will drive your
            business forward.</div>
        <div>
            <?php 
				            $portfolio_category="laravel";
							include("common_portfolio.php");
							?>
        </div>
    </div>
</div>
<!--portfolio-->
<!-- delv -->
<div class="delv">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/laravel-development7.webp" alt="img">
                    <h2>Laravel Application Development</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="inner">
                    <h3>Laravel Application Development</h3>
                    <p>IOGOOS laravel development services provide extensive customization to modify the built-in
                        features and functionalities of templates created for a specific business use case. We
                        develop a unique design and user interfaces for website and mobile app development services
                        using the Laravel framework. Laravel is one of the best open-source MVC for web application
                        development. Since 2011, Laravel MVC has emerged as a premium open-source website
                        development framework and allows users to develop a web application, CRM, mobile backend in
                        a hassle-free way. The best part of Laravel MVC is giving the option to write business logic
                        and frontend design separately and develop modular applications.</p>
                    <ul>
                        <li> Web App Development</li>
                        <li>Mobile App Development</li>
                        <li>E-commerce Development</li>
                        <li>Laravel UI/UX - Template development</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mg_midl wow fadeInRight animate">
            <h4 class="get_a_quote">Let's rock with Laravel Development Services.</h4>
        </div>
    </div>
</div>

<div class="delv2">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="inner">
                    <h3>affordable laravel development services</h3>
                    <p>IOGOOS Solution believes in providing affordable Laravel development services for every scale
                        of the industry. we deliver a stronger online presence to every client with our low-cost
                        laravel development services. we are a trusted laravel development company and develop
                        solutions on-demand with customized APIs, integration, and custom dashboards, we explore the
                        bespoke qualities of Laravel to cater to areas like eCommerce, payment, and much more. We
                        also offer a no-obligation quote for our clients so that they can have a look at our
                        services. Fill up your project details on our “Request for Quote” page and we’ll get back to
                        you with detailed information.</p>
                    <ul>
                        <li>Laravel Custom development & integrations</li>
                        <li>Laravel extension development</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="inner">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/laravel-development1.webp" alt="img">
                    <h2>affordable laravel development services</h2>
                </div>
            </div>
        </div>
        <div class="mg_midl wow fadeInLeft animate">
            <h4 class="get_a_quote">Let's rock with Laravel Development Services.</h4>
        </div>
    </div>
</div>
<!--delv-->

<!--contact form-->
<div class="contactForm">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="startWrap">
                    <div class="quate_details">
                        <h2>let's do great things together</h2>
                        <h3 class="num">4.9 / 5.0</h3>
                        <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/star.webp" width="312" height="55"
                            class="img-responsive center-block animate" alt="star rating">
                        <p>By 2000+ customers for 7000+ Web and Mobile App development projects.
                        </p>
                    </div>
                    <div class="networking row">
                        <div class="col-md-2 col-sm-2 col-xs-2 email text-center">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 skype1">
                            <p>Get in touch by email</p>
                            <a href="mailto:contact@iogoos.com">info@iogoos.com</a>
                        </div>
                    </div>
                    <div class="networking row">
                        <div class="col-md-2 col-sm-2 col-xs-2 skype text-center">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10 skype1">
                            <p>Why not give us a call</p>
                            <a href="tel:3152150919">+1-315-215-0919</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <form method="post" name="frmcontact" id="frmcontact" enctype="multipart/form-data"
                    data-hs-cf-bound="true">
                    <h2 class="seactionHead">Let Discuss Your Project</h2>
                    <div class="form-group df">
                        <label>
                            <input class="form-control" placeholder="Your Name" type="text" id="fname" name="fname">
                        </label>
                        <label>
                            <input class="form-control" placeholder="Your Work E-mail" type="text" id="email"
                                name="email">
                        </label>
                        <select class="country_list" id="country" name="country"
                            style="margin-left:0px;margin-right:10px;">
                            <option value="">Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of
                                the</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D" ivoire'="">Cote D'Ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                            </option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People" s="" republic="" of'="">Korea, Democratic
                                People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People" s="" democratic="" republic'="">Lao People's Democratic
                                Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former
                                Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines
                            </option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South
                                Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-Leste">Timor-Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying
                                Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        <label>
                            <input class="form-control" placeholder="Contact Number" type="text" id="mobile"
                                name="mobile">
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
                            </label>
                        </div>
                    </div>
                    <div class="choose_tech">
                        <div class="choose_tchno">
                            <h4>What Can we Do for you ?</h4>
                            <ul class="worktypelst">
                                <li>
                                    <input type="checkbox" class="wt-1" id="worktype1" name="worktype[]"
                                        value="Product Development">
                                    <label for="worktype1">
                                        <i class="fas fa-check"></i>
                                        <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/productdevelopment.webp"
                                            alt="img" class="">
                                        <span class="span_pop1">Ecommerce</span>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" class="wt-1" id="worktype2" name="worktype[]"
                                        value="Web Development">
                                    <label for="worktype2">
                                        <i class="fas fa-check"></i>
                                        <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/webdevelopment.webp"
                                            alt="img" class="">
                                        <span class="span_pop1">Web Development</span>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" class="wt-1" id="worktype3" name="worktype[]"
                                        value="UX/UI Design">
                                    <label for="worktype3">
                                        <i class="fas fa-check"></i>
                                        <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/uxuidesign.webp"
                                            alt="img" class="">
                                        <span class="span_pop1">UX/UI <br>Design</span>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" class="wt-1" id="worktype4" name="worktype[]"
                                        value="Mobile App Development">
                                    <label for="worktype4">
                                        <i class="fas fa-check"></i>
                                        <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/mobileapp.webp"
                                            alt="img" class="">
                                        <span class="span_pop1">Mobile App Development</span>
                                    </label>
                                </li>
                                <li>
                                    <input type="checkbox" class="wt-1" id="worktype5" name="worktype[]"
                                        value="Digital Marketing">
                                    <label for="worktype5">
                                        <i class="fas fa-check"></i>
                                        <img src="https://www.iogoos.com/wp-content/themes/iogoos/img/digitalmarketing.webp"
                                            alt="img" class="">
                                        <span class="span_pop1">Digital Marketing</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix" style="clear:both;"></div>
                    <div class="form-group">
                        <label class="comentcoment">
                            <textarea placeholder="Your Requirements" id="coment" name="comment" cols="30"
                                rows="8"></textarea>
                        </label>
                    </div>
                    <div class="form_group_cathe chfl" style="float:left;">
                        <div data-sitekey="6LeiGE0UAAAAAC1v4Eo10AIXLLSW4tEi60aYhQlZ" class="g-recaptcha">
                            <div style="width: 304px; height: 78px;">
                                <div><iframe title="reCAPTCHA"
                                        src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeiGE0UAAAAAC1v4Eo10AIXLLSW4tEi60aYhQlZ&amp;co=aHR0cHM6Ly93d3cuaW9nb29zLmNvbTo0NDM.&amp;hl=en&amp;v=2W_gRz39xX8G13fM-OdyQPlc&amp;size=normal&amp;cb=41lggfiupfla"
                                        width="304" height="78" role="presentation" name="a-mxama2ueis8n"
                                        frameborder="0" scrolling="no"
                                        sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                </div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response"
                                    class="g-recaptcha-response"
                                    style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                            </div>
                        </div>
                        <span class="choose_file">
                            <input type="file" id="attach_file" name="attach_file" accept="image/png, image/jpeg">
                        </span>
                    </div>
                    <div class="clearfix" style="clear:both;"></div>
                    <div class="form_group">
                        <div id="formresponse" style="padding:5px;"></div>
                        <input type="hidden" name="action" value="contact_form">
                        <input class="btn btnsubmit" type="submit" name="submit" value="Send Your Request">
                    </div>

                    <div class="numberRow">
                        <ul>
                            <li><span class="__span_icon __span_icon_1"><span class="cont_icon cont_icon_1"></span><span
                                        class="blk-no" style="display: block;"> +1-315 215 0919</span></span></li>
                            <li><span class="__span_icon __span_icon_3"><span class="cont_icon cont_icon_3"></span><span
                                        class="blk-no"> +91-954 000
                                        7839</span></span></li>
                            <li><span class="__span_icon __span_icon_2"><span class="cont_icon cont_icon_2"></span><span
                                        class="blk-no"> +27-110 839
                                        444</span></span></li>
                        </ul>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!--contact form-->

<?php endwhile; ?>

<?php get_footer(); ?>