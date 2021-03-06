<?php $title = 'Register' ?>
<?php $description = 'Hurry Up Print registration page' ?>
<?php require('head.php') ?>

<?php require('header.php'); ?>

<div class="container m2a">
  <div class="row">
    <h4>Register Account</h4>
    <h6>If you have already created an account with us, please login at the
      <a href="/login.php">login page</a>
    </h6>
  </div>
  <div class="row">
    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == 'emptyfields') {
        echo "<span class='err'>Fill out all required fields</span>";
      }
    }
    if (isset($_GET['error'])) {
      if ($_GET['error'] == 'emailtaken') {
        echo "<span class='err'>Email already exists, please login</span>";
      }
    }
    ?>
  </div>

  <div class="row">
    <p> <span class="red-text">* Required fields</span></p>
    <form class="col s12" action="<?php echo htmlspecialchars('/includes/register.inc.php') ?>" method="post">
      <h5>Your Personal Details</h5>
      <div class="col s12 divider mb1"></div>
      <div class="row">
        <div class="input-field col m6 s12">
          <input required type="text" class="validate" placeholder="John" name="first_name" id="first_name" value="<?php
                                                                                                          if (isset($_GET['f_name'])) {
                                                                                                            echo $_GET['f_name'];
                                                                                                          }
                                                                                                          ?>">
          <label for="first_name">First Name <span class="red-text">*</span></label>
        </div>
        <div class="input-field col m6 s12">
          <input required type="text" class="validate" placeholder="Doe" name="last_name" id="last_name" value="<?php
                                                                                                        if (isset($_GET['l_name'])) {
                                                                                                          echo $_GET['l_name'];
                                                                                                        }
                                                                                                        ?>">
          <label for="last_name">Last Name <span class="red-text">*</span></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m6 s12">
          <input required type="email" class="validate" placeholder="johnnyd@email.com" name="email" id="email" value="<?php
                                                                                                              if (isset($_GET['mail'])) {
                                                                                                                echo $_GET['mail'];
                                                                                                              }
                                                                                                              ?>">
          <label for="email">Email <span class="red-text">*</span></label>
        </div>
        <div class="input-field col m6 s12">
          <input required type="tel" class="validate" placeholder="555-123-4567" name="phone" id="phone" value="<?php
                                                                                                        if (isset($_GET['phone'])) {
                                                                                                          echo $_GET['phone'];
                                                                                                        }
                                                                                                        ?>">
          <label for="phone">Telephone <span class="red-text">*</span></label>
        </div>
      </div>
      <h5>Your Address</h5>
      <div class="col s12 divider mb1"></div>
      <div class="row">
        <div class="input-field col s12">
          <input required type="text" placeholder="135 Main St." name="address_1" id="address_1" value="<?php
                                                                                                if (isset($_GET['add1'])) {
                                                                                                  echo $_GET['add1'];
                                                                                                }
                                                                                                ?>">
          <label for="address_1">Address 1 <span class="red-text">*</span></label>
        </div>
        <div class="input-field col s12">
          <input type="text" placeholder="PO Box 112" name="address_2" id="address_2" value="<?php
                                                                                              // echo $_GET['add2'] ;
                                                                                              if (isset($_GET['add2'])) {
                                                                                                echo $_GET['add2'];
                                                                                              }
                                                                                              ?>">
          <label for="address_2">Address 2</label>
        </div>
        <div class="input-field col m6 s12">
          <input required type="text" placeholder="Reno" name="city" id="city" value="<?php
                                                                              if (isset($_GET['city'])) {
                                                                                echo $_GET['city'];
                                                                              }
                                                                              ?>">
          <label for="city">City <span class="red-text">*</span></label>
        </div>
        <div class="input-field col m6 s12">
          <input required type="text" placeholder="89502" name="zip" id="zip" value="<?php
                                                                            if (isset($_GET['zip'])) {
                                                                              echo $_GET['zip'];
                                                                            }
                                                                            ?>">
          <label for="zip">Postal Zip Code <span class="red-text">*</span></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col m6 s12 select-wrapper">
          <select required name="country" id="country">
            <option value="" disabled> --- Please Select --- </option>
            <option value="244">Aaland Islands</option>
            <option value="1">Afghanistan</option>
            <option value="2">Albania</option>
            <option value="3">Algeria</option>
            <option value="4">American Samoa</option>
            <option value="5">Andorra</option>
            <option value="6">Angola</option>
            <option value="7">Anguilla</option>
            <option value="8">Antarctica</option>
            <option value="9">Antigua and Barbuda</option>
            <option value="10">Argentina</option>
            <option value="11">Armenia</option>
            <option value="12">Aruba</option>
            <option value="252">Ascension Island (British)</option>
            <option value="13">Australia</option>
            <option value="14">Austria</option>
            <option value="15">Azerbaijan</option>
            <option value="16">Bahamas</option>
            <option value="17">Bahrain</option>
            <option value="18">Bangladesh</option>
            <option value="19">Barbados</option>
            <option value="20">Belarus</option>
            <option value="21">Belgium</option>
            <option value="22">Belize</option>
            <option value="23">Benin</option>
            <option value="24">Bermuda</option>
            <option value="25">Bhutan</option>
            <option value="26">Bolivia</option>
            <option value="245">Bonaire, Sint Eustatius and Saba</option>
            <option value="27">Bosnia and Herzegovina</option>
            <option value="28">Botswana</option>
            <option value="29">Bouvet Island</option>
            <option value="30">Brazil</option>
            <option value="31">British Indian Ocean Territory</option>
            <option value="32">Brunei Darussalam</option>
            <option value="33">Bulgaria</option>
            <option value="34">Burkina Faso</option>
            <option value="35">Burundi</option>
            <option value="36">Cambodia</option>
            <option value="37">Cameroon</option>
            <option value="38">Canada</option>
            <option value="251">Canary Islands</option>
            <option value="39">Cape Verde</option>
            <option value="40">Cayman Islands</option>
            <option value="41">Central African Republic</option>
            <option value="42">Chad</option>
            <option value="43">Chile</option>
            <option value="44">China</option>
            <option value="45">Christmas Island</option>
            <option value="46">Cocos (Keeling) Islands</option>
            <option value="47">Colombia</option>
            <option value="48">Comoros</option>
            <option value="49">Congo</option>
            <option value="50">Cook Islands</option>
            <option value="51">Costa Rica</option>
            <option value="52">Cote D'Ivoire</option>
            <option value="53">Croatia</option>
            <option value="54">Cuba</option>
            <option value="246">Curacao</option>
            <option value="55">Cyprus</option>
            <option value="56">Czech Republic</option>
            <option value="237">Democratic Republic of Congo</option>
            <option value="57">Denmark</option>
            <option value="58">Djibouti</option>
            <option value="59">Dominica</option>
            <option value="60">Dominican Republic</option>
            <option value="61">East Timor</option>
            <option value="62">Ecuador</option>
            <option value="63">Egypt</option>
            <option value="64">El Salvador</option>
            <option value="65">Equatorial Guinea</option>
            <option value="66">Eritrea</option>
            <option value="67">Estonia</option>
            <option value="68">Ethiopia</option>
            <option value="69">Falkland Islands (Malvinas)</option>
            <option value="70">Faroe Islands</option>
            <option value="71">Fiji</option>
            <option value="72">Finland</option>
            <option value="74">France, Metropolitan</option>
            <option value="75">French Guiana</option>
            <option value="76">French Polynesia</option>
            <option value="77">French Southern Territories</option>
            <option value="126">FYROM</option>
            <option value="78">Gabon</option>
            <option value="79">Gambia</option>
            <option value="80">Georgia</option>
            <option value="81">Germany</option>
            <option value="82">Ghana</option>
            <option value="83">Gibraltar</option>
            <option value="84">Greece</option>
            <option value="85">Greenland</option>
            <option value="86">Grenada</option>
            <option value="87">Guadeloupe</option>
            <option value="88">Guam</option>
            <option value="89">Guatemala</option>
            <option value="256">Guernsey</option>
            <option value="90">Guinea</option>
            <option value="91">Guinea-Bissau</option>
            <option value="92">Guyana</option>
            <option value="93">Haiti</option>
            <option value="94">Heard and Mc Donald Islands</option>
            <option value="95">Honduras</option>
            <option value="96">Hong Kong</option>
            <option value="97">Hungary</option>
            <option value="98">Iceland</option>
            <option value="99">India</option>
            <option value="100">Indonesia</option>
            <option value="101">Iran (Islamic Republic of)</option>
            <option value="102">Iraq</option>
            <option value="103">Ireland</option>
            <option value="254">Isle of Man</option>
            <option value="104">Israel</option>
            <option value="105">Italy</option>
            <option value="106">Jamaica</option>
            <option value="107">Japan</option>
            <option value="257">Jersey</option>
            <option value="108">Jordan</option>
            <option value="109">Kazakhstan</option>
            <option value="110">Kenya</option>
            <option value="111">Kiribati</option>
            <option value="253">Kosovo, Republic of</option>
            <option value="114">Kuwait</option>
            <option value="115">Kyrgyzstan</option>
            <option value="116">Lao People's Democratic Republic</option>
            <option value="117">Latvia</option>
            <option value="118">Lebanon</option>
            <option value="119">Lesotho</option>
            <option value="120">Liberia</option>
            <option value="121">Libyan Arab Jamahiriya</option>
            <option value="122">Liechtenstein</option>
            <option value="123">Lithuania</option>
            <option value="124">Luxembourg</option>
            <option value="125">Macau</option>
            <option value="127">Madagascar</option>
            <option value="128">Malawi</option>
            <option value="129">Malaysia</option>
            <option value="130">Maldives</option>
            <option value="131">Mali</option>
            <option value="132">Malta</option>
            <option value="133">Marshall Islands</option>
            <option value="134">Martinique</option>
            <option value="135">Mauritania</option>
            <option value="136">Mauritius</option>
            <option value="137">Mayotte</option>
            <option value="138">Mexico</option>
            <option value="139">Micronesia, Federated States of</option>
            <option value="140">Moldova, Republic of</option>
            <option value="141">Monaco</option>
            <option value="142">Mongolia</option>
            <option value="242">Montenegro</option>
            <option value="143">Montserrat</option>
            <option value="144">Morocco</option>
            <option value="145">Mozambique</option>
            <option value="146">Myanmar</option>
            <option value="147">Namibia</option>
            <option value="148">Nauru</option>
            <option value="149">Nepal</option>
            <option value="150">Netherlands</option>
            <option value="151">Netherlands Antilles</option>
            <option value="152">New Caledonia</option>
            <option value="153">New Zealand</option>
            <option value="154">Nicaragua</option>
            <option value="155">Niger</option>
            <option value="156">Nigeria</option>
            <option value="157">Niue</option>
            <option value="158">Norfolk Island</option>
            <option value="112">North Korea</option>
            <option value="159">Northern Mariana Islands</option>
            <option value="160">Norway</option>
            <option value="161">Oman</option>
            <option value="162">Pakistan</option>
            <option value="163">Palau</option>
            <option value="247">Palestinian Territory, Occupied</option>
            <option value="164">Panama</option>
            <option value="165">Papua New Guinea</option>
            <option value="166">Paraguay</option>
            <option value="167">Peru</option>
            <option value="168">Philippines</option>
            <option value="169">Pitcairn</option>
            <option value="170">Poland</option>
            <option value="171">Portugal</option>
            <option value="172">Puerto Rico</option>
            <option value="173">Qatar</option>
            <option value="174">Reunion</option>
            <option value="175">Romania</option>
            <option value="176">Russian Federation</option>
            <option value="177">Rwanda</option>
            <option value="178">Saint Kitts and Nevis</option>
            <option value="179">Saint Lucia</option>
            <option value="180">Saint Vincent and the Grenadines</option>
            <option value="181">Samoa</option>
            <option value="182">San Marino</option>
            <option value="183">Sao Tome and Principe</option>
            <option value="184">Saudi Arabia</option>
            <option value="185">Senegal</option>
            <option value="243">Serbia</option>
            <option value="186">Seychelles</option>
            <option value="187">Sierra Leone</option>
            <option value="188">Singapore</option>
            <option value="189">Slovak Republic</option>
            <option value="190">Slovenia</option>
            <option value="191">Solomon Islands</option>
            <option value="192">Somalia</option>
            <option value="193">South Africa</option>
            <option value="194">South Georgia &amp; South Sandwich Islands</option>
            <option value="113">South Korea</option>
            <option value="248">South Sudan</option>
            <option value="195">Spain</option>
            <option value="196">Sri Lanka</option>
            <option value="249">St. Barthelemy</option>
            <option value="197">St. Helena</option>
            <option value="250">St. Martin (French part)</option>
            <option value="198">St. Pierre and Miquelon</option>
            <option value="199">Sudan</option>
            <option value="200">Suriname</option>
            <option value="201">Svalbard and Jan Mayen Islands</option>
            <option value="202">Swaziland</option>
            <option value="203">Sweden</option>
            <option value="204">Switzerland</option>
            <option value="205">Syrian Arab Republic</option>
            <option value="206">Taiwan</option>
            <option value="207">Tajikistan</option>
            <option value="208">Tanzania, United Republic of</option>
            <option value="209">Thailand</option>
            <option value="210">Togo</option>
            <option value="211">Tokelau</option>
            <option value="212">Tonga</option>
            <option value="213">Trinidad and Tobago</option>
            <option value="255">Tristan da Cunha</option>
            <option value="214">Tunisia</option>
            <option value="215">Turkey</option>
            <option value="216">Turkmenistan</option>
            <option value="217">Turks and Caicos Islands</option>
            <option value="218">Tuvalu</option>
            <option value="219">Uganda</option>
            <option value="220">Ukraine</option>
            <option value="221">United Arab Emirates</option>
            <option value="222">United Kingdom</option>
            <option value="223" selected>United States</option>
            <option value="224">United States Minor Outlying Islands</option>
            <option value="225">Uruguay</option>
            <option value="226">Uzbekistan</option>
            <option value="227">Vanuatu</option>
            <option value="228">Vatican City State (Holy See)</option>
            <option value="229">Venezuela</option>
            <option value="230">Viet Nam</option>
            <option value="231">Virgin Islands (British)</option>
            <option value="232">Virgin Islands (U.S.)</option>
            <option value="233">Wallis and Futuna Islands</option>
            <option value="234">Western Sahara</option>
            <option value="235">Yemen</option>
            <option value="238">Zambia</option>
            <option value="239">Zimbabwe</option>
          </select>
          <label for="country">Country <span class="red-text">*</span></label>
        </div>
        <div class="input-field col m6 s12 select-wrapper">
          <select required name="state" id="state">
            <option value="" disabled> --- Please Select --- </option>
            <option value="3613">Alabama</option>
            <option value="3614">Alaska</option>
            <option value="3615">American Samoa</option>
            <option value="3616">Arizona</option>
            <option value="3617">Arkansas</option>
            <option value="3618">Armed Forces Africa</option>
            <option value="3619">Armed Forces Americas</option>
            <option value="3620">Armed Forces Canada</option>
            <option value="3621">Armed Forces Europe</option>
            <option value="3622">Armed Forces Middle East</option>
            <option value="3623">Armed Forces Pacific</option>
            <option value="3624">California</option>
            <option value="3625">Colorado</option>
            <option value="3626">Connecticut</option>
            <option value="3627">Delaware</option>
            <option value="3628">District of Columbia</option>
            <option value="3629">Federated States Of Micronesia</option>
            <option value="3630">Florida</option>
            <option value="3631">Georgia</option>
            <option value="3632">Guam</option>
            <option value="3633">Hawaii</option>
            <option value="3634">Idaho</option>
            <option value="3635">Illinois</option>
            <option value="3636">Indiana</option>
            <option value="3637">Iowa</option>
            <option value="3638">Kansas</option>
            <option value="3639">Kentucky</option>
            <option value="3640">Louisiana</option>
            <option value="3641">Maine</option>
            <option value="3642">Marshall Islands</option>
            <option value="3643">Maryland</option>
            <option value="3644">Massachusetts</option>
            <option value="3645">Michigan</option>
            <option value="3646">Minnesota</option>
            <option value="3647">Mississippi</option>
            <option value="3648">Missouri</option>
            <option value="3649">Montana</option>
            <option value="3650">Nebraska</option>
            <option value="3651" selected >Nevada</option>
            <option value="3652">New Hampshire</option>
            <option value="3653">New Jersey</option>
            <option value="3654">New Mexico</option>
            <option value="3655">New York</option>
            <option value="3656">North Carolina</option>
            <option value="3657">North Dakota</option>
            <option value="3658">Northern Mariana Islands</option>
            <option value="3659">Ohio</option>
            <option value="3660">Oklahoma</option>
            <option value="3661">Oregon</option>
            <option value="3662">Palau</option>
            <option value="3663">Pennsylvania</option>
            <option value="3664">Puerto Rico</option>
            <option value="3665">Rhode Island</option>
            <option value="3666">South Carolina</option>
            <option value="3667">South Dakota</option>
            <option value="3668">Tennessee</option>
            <option value="3669">Texas</option>
            <option value="3670">Utah</option>
            <option value="3671">Vermont</option>
            <option value="3672">Virgin Islands</option>
            <option value="3673">Virginia</option>
            <option value="3674">Washington</option>
            <option value="3675">West Virginia</option>
            <option value="3676">Wisconsin</option>
            <option value="3677">Wyoming</option>
          </select>
          <label for="state">Region / State <span class="red-text">*</span></label>
        </div>
      </div>
      <h5>Your Password</h5>
      <div class="col s12 divider mb1"></div>
      <div class="row">
        <div class="input-field col m6 s12">
          <input required type="password" placeholder="$k8vG3p09aB%77hn2^" name="password" id="password">
          <label for="password">Password <span class="red-text">*</span></label>
        </div>
        <div class="input-field col m6 s12">
          <input required type="password" placeholder="$k8vG3p09aB%77hn2^" name="password-conf" id="password-conf">
          <label for="password-conf">Password Confirm <span class="red-text">*</span></label>
        </div>
      </div>
      <h5>Newsletter <span class="red-text">*</span></h5>
      <div class="col s12 divider mb1"></div>
      <p>
        <input required value="1" id="yes" name="newsletter" type="radio" class="with-gap" <?php if (isset($_GET['nltr'])) {
              if($_GET['nltr'] == "1") {
                echo "checked";
              }
            } ?>>
        <label for="yes">Yes</label>
      </p>
      <p class="mb2">
        <input required value="false" id="no" name="newsletter" type="radio" class="with-gap" <?php if (isset($_GET['nltr'])) {
              if($_GET['nltr'] == "0") {
                echo "checked";
              }
            } ?>>
        <label for="no">No</label>
      </p>
      <h5>Submit Registration</h5>
      <div class="col s12 divider mb1"></div>
      <p class="mb1">
        <input required type="checkbox" name="privacy" id="privacy" <?php if (isset($_GET['privacy'])) {
              if($_GET['privacy'] == "on") {
                echo "checked";
              }
            } ?> >
        <label for="privacy">I have read and agree to the
          <a href="privacy_policy.php">Privacy Policy</a> <span class="red-text">*</span>
        </label>
      </p>
      <input type="text" name="webservice" hidden value="<?php if (isset($_GET['webservice'])) { echo 'true'; } ?>">
      <button
        name="register-submit"
        type="submit"
        class="btn waves-effect waves-light yellow darken-1 black-text">
        Register
      </button>

    </form>
  </div>
</div>

<?php include "footer.php" ?>