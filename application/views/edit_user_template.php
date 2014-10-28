<div class="content">
    <?php if($gender == 'm'):?>
    <!---- Man register form -------------->
    <form action="/post" method="POST" class="ym-form register-form register-form-man edit-form-man">
        <input type="hidden" name="gender" value="man" />
        <input type="hidden" name="edit" value="edit" />
        <div class="ym-fbox">
            <label class="ym-inline" for="email">E-mail</label>
            <input value="{email}" class="" type="text" name="register_email" id="email" placeholder="Please enter your email" />
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
            <input value="{firstname}" class="" type="text" name="first_name" id="first_name" placeholder="First name" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="last_name">Last name</label>
            <input value="{lastname}" class="" type="text" name="last_name" id="last_name" placeholder="Last name" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="last_name">City</label>
            <input value="{region}" id="region2" type="text" name="region" placeholder="City" autocomplete="on">
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="datepicker">BirthDate</label>
            <input value="{bdatemod}" type="text" name="datepicker" id="datepicker-m"/>
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="ismariedr">Marital status</label>
            <select id="ismaried" name="ismaried">
                <option value="" selected="selected" disabled="disabled">Please choose</option>
                <option <?php if($marital == 'Married') echo "selected"; ?> value="y">Married</option>
                <option <?php if($marital == 'Not married') echo "selected"; ?> value="n">Not married</option>
            </select>
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="bodytype">Body Type</label>
            <select id="bodytype" name="bodytype">
                <option value="" selected="selected" disabled="disabled">Please choose</option>
                <option <?php if($bodytype == 'Thin') echo "selected"; ?> value="thin">Thin</option>
                <option <?php if($bodytype == 'Muscular') echo "selected"; ?> value="muscular">Muscular</option>
                <option <?php if($bodytype == 'Thick') echo "selected"; ?> value="thick">Thick</option>
            </select>
        </div>
            <span class="error_registration"></span>
                <div class="ym-fbox register-button-box">
                    <a class="back-link edit-back-link" href="#"><<< Back</a>
                      <a href="#" class="ym-button update-button-m">Update</a>
                </div>
    </form>
    <!---- Man register form --/END--------->
    
    <?php else: ?>
    <!---- Woman register form ------------->
    <form action="/post" method="POST" class="ym-form register-form register-form-woman edit-form-woman">
        <input type="hidden" name="gender" value="woman" />
        <input type="hidden" name="edit" value="edit" />
        <div class="ym-fbox">
            <label class="ym-inline" for="email">E-mail</label>
            <input value="{email}" class="" type="text" name="register_email" id="email" placeholder="Please enter your email" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="password">Password</label>
            <input value="" class="" type="password" name="register_password" id="password" placeholder="Please enter password" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="password">Confirm password</label>
            <input value="" class="" type="password" name="register_password" id="register_password" placeholder="Confirm password" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="first_name">First name</label>
            <input value="{firstname}" class="" type="text" name="first_name" id="first_name" placeholder="First name" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="last_name">Last name</label>
            <input value="{lastname}" class="" type="text" name="last_name" id="last_name" placeholder="Last name" />
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="last_name">City</label>
            <input value="{region}" id="region3" type="text" name="region" placeholder="City" autocomplete="on">
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="datepicker">BirthDate</label>
            <input value="{bdatemod}" type="text" name="datepicker" id="datepicker-woman-edit"/>
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="ismariedr">Marital status</label>
            <select id="ismaried" name="ismaried">
                <option value="" selected="selected" disabled="disabled">Please choose</option>
                <option <?php if($marital == 'Married') echo "selected"; ?> value="y">Married</option>
                <option <?php if($marital == 'Not married') echo "selected"; ?>  value="n">Not married</option>
            </select>
        </div>
            <span class="error_registration"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="breast">Breast</label>
            <input value="{breast}" maxlength="3" class="w-p" type="text" name="breast" id="breast" placeholder="Breast" />
        </div>
            <span class="error_registration women-param-error"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="waist">Waist</label>
            <input value="{waist}" maxlength="3" class="w-p" type="text" name="waist" id="waist" placeholder="Waist" />
        </div>
            <span class="error_registration women-param-error"></span>
        <div class="ym-fbox">
            <label class="ym-inline" for="hips">Hips</label>
            <input value="{hips}" maxlength="3" class="w-p" type="text" name="hips" id="hips" placeholder="Hips" />
        </div>
            <span class="error_registration women-param-error"></span>
                <div class="ym-fbox register-button-box">
                    <a class="back-link edit-back-link" href="#"><<< Back</a>
                      <a href="#" class="ym-button update-button-w">Update</a>
                </div>
    </form>   
    <!---- Woman register form -/END-------->
        <?php endif; ?>
</div>
