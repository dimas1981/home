<div class="content">
        <!---- Man register form -------------->
    <form class="ym-form register-form register-form-man edit-form-man">
        <input type="hidden" name="gender" value="man" />
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
            <input value="12/12/1980" type="text" name="datepicker" id="datepicker-m"/>
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="ismariedr">Marital status</label>
            <select id="ismaried" name="ismaried">
                <option value="" selected="selected" disabled="disabled">Please choose</option>
                <option value="y">Married</option>
                <option value="n">Not married</option>
            </select>
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="bodytype">Body Type</label>
            <select id="bodytype" name="bodytype">
                <option value="" selected="selected" disabled="disabled">Please choose</option>
                <option value="thin">Thin</option>
                <option value="muscular">Muscular</option>
                <option value="thick">Thick</option>
            </select>
        </div>
                <div class="ym-fbox register-button-box">
                    <a onclick="window.history.back(); return false;" class="back-link" href="#"><<< Back</a>
                      <a href="#" class="ym-button register-button">Register</a>
                </div>
    </form>
    <!---- Man register form --/END--------->
</div>