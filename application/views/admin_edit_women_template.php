<div class="content">
    <!---- Women register form ------------->
    <form style="display: block" class="ym-form register-form register-form-woman edit-form-women">
        <input type="hidden" name="gender" value="woman" />
        <div class="ym-fbox">
            <label class="ym-inline" for="email">E-mail</label>
            <input class="" type="text" name="register_email" id="email" placeholder="Please enter your email" />
        </div>
            <span class="error_registration"></span>
        <!--
        <div class="ym-fbox">
            <label class="ym-inline" for="password">Password</label>
            <input class="" type="password" name="register_password" id="password" placeholder="Please enter password" />
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="password">Confirm password</label>
            <input class="" type="password" name="register_password" id="register_password" placeholder="Confirm password" />
        </div>
        -->
        <div class="ym-fbox">
            <label class="ym-inline" for="first_name">First name</label>
            <input class="" type="text" name="first_name" id="first_name" placeholder="First name" />
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="last_name">Last name</label>
            <input class="" type="text" name="last_name" id="last_name" placeholder="Last name" />
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="last_name">City</label>
            <input id="region" type="text" name="region" placeholder="City" autocomplete="on">
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="datepicker">BirthDate</label>
            <input value="12/12/1980" class="datepicker-w-edit" type="text" name="datepicker" id="datepicker-w"/>
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="breast">Breast</label>
            <input maxlength="3" class="w-p" type="text" name="breast" id="breast" placeholder="Breast" />
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="waist">Waist</label>
            <input maxlength="3" class="w-p" type="text" name="waist" id="waist" placeholder="Waist" />
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="hips">Hips</label>
            <input maxlength="3" class="w-p" type="text" name="hips" id="hips" placeholder="Hips" />
        </div>
                <div class="ym-fbox register-button-box">
                    <a onclick="window.history.back(); return false;" class="back-link" href="#"><<< Back</a>
                      <a href="#" class="ym-button register-button">Register</a>
                </div>
    </form>   
    <!---- Women register form -/END-------->
</div>