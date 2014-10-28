<div class="content">
    <div style="margin-top: -45px;" class="ym-fbox ym-form ym-form-gender">
            <span class="ym-label ym-label-span">Gender</span>
            <div class="ym-fbox-wrap gender-box-wrap">
                <div class="gender-box">
                    <input checked="checked" type="radio" name="vote" id="r-man" />
                    <label for="r-man">Man</label>
                </div>
                <div id="gender-box" class="gender-box">
                    <input type="radio" name="vote" id="r-woman" />
                    <label for="r-woman">Woman</label>
                </div>
            </div>
   </div>
    <!---- Man register form -------------->
    <form method="POST" action="/post" class="ym-form register-form register-form-man">
        <input type="hidden" name="gender" value="man" />
        <div class="ym-fbox">
            <label class="ym-inline" for="email">E-mail</label>
            <input value="" class="" type="email" name="register_email" id="email" placeholder="Please enter your email" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="password">Password</label>
            <input class="" type="password" name="register_password" id="password" placeholder="Please enter password" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="password">Confirm password</label>
            <input class="" type="password" name="register_password" id="register_password" placeholder="Confirm password" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="first_name">First name</label>
            <input class="" type="text" name="first_name" id="first_name" placeholder="First name" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="last_name">Last name</label>
            <input class="" type="text" name="last_name" id="last_name" placeholder="Last name" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="last_name">City</label>
            <input class="region" id="region1" type="text" name="region" placeholder="City" autocomplete="on">
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="datepicker">BirthDate</label>
            <input value="12/12/1980" type="text" name="datepicker" id="datepicker-m"/>
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="ismariedr">Marital status</label>
            <select id="ismaried" name="ismaried">
                <option value="" selected="selected" disabled="disabled">Please choose</option>
                <option value="y">Married</option>
                <option value="n">Not married</option>
            </select>
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="bodytype">Body Type</label>
            <select id="bodytype" name="bodytype">
                <option value="" selected="selected" disabled="disabled">Please choose</option>
                <option value="thin">Thin</option>
                <option value="muscular">Muscular</option>
                <option value="thick">Thick</option>
            </select>
        </div>
            <span class="error_registration"></span>
                <div class="ym-fbox register-button-box">
                    <a class="back-link" href="/"><<< Back</a>
                      <a href="#" class="ym-button register-button">Register</a>
                </div>
    </form>
    <!---- Man register form --/END--------->
    
    
    
    <!---- Women register form ------------->
     <form method="POST" action="/post" class="ym-form register-form register-form-woman">
        <input type="hidden" name="gender" value="woman" />
        <div class="ym-fbox">
            <label class="ym-inline" for="email">E-mail</label>
            <input class="" type="text" name="register_email" id="email" placeholder="Please enter your email" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="password">Password</label>
            <input class="" type="password" name="register_password" id="password" placeholder="Please enter password" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="password">Confirm password</label>
            <input class="" type="password" name="register_password" id="register_password" placeholder="Confirm password" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="first_name">First name</label>
            <input class="" type="text" name="first_name" id="first_name" placeholder="First name" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="last_name">Last name</label>
            <input class="" type="text" name="last_name" id="last_name" placeholder="Last name" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="last_name">City</label>
            <input class="region" id="region" type="text" name="region" placeholder="City" autocomplete="on">
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="datepicker">BirthDate</label>
            <input value="12/12/1980" type="text" name="datepicker" id="datepicker-w"/>
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="ismariedr">Marital status</label>
            <select id="ismaried" name="ismaried">
                <option value="" selected="selected" disabled="disabled">Please choose</option>
                <option value="y">Married</option>
                <option value="n">Not married</option>
            </select>
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="breast">Breast</label>
            <input maxlength="3" class="w-p" type="text" name="breast" id="breast" placeholder="Breast" />
        </div>
            <span class="error_registration women-param-error"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="waist">Waist</label>
            <input maxlength="3" class="w-p" type="text" name="waist" id="waist" placeholder="Waist" />
        </div>
            <span class="error_registration women-param-error"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="hips">Hips</label>
            <input maxlength="3" class="w-p" type="text" name="hips" id="hips" placeholder="Hips" />
        </div>
            <span class="error_registration women-param-error"></span>
                <div class="ym-fbox register-button-box">
                    <a class="back-link" href="/"><<< Back</a>
                      <a href="#" class="ym-button register-button">Register</a>
                </div>
    </form>   
    <!---- Women register form -/END-------->
</div>
