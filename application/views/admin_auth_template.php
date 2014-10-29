<div class="content">
    <h4 style="margin-left: 31%;">Admin login</h4>
    <hr>
    <form method="POST" action="/post" class="ym-form login-form admin-login-form">
        <input type="hidden" name="admin" value="auth" />
        <div class="ym-fbox">
            <label class="ym-inline" for="email">E-mail</label>
            <input class="" type="text" name="email" id="email" placeholder="Please enter your email" />
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="password">Password</label>
            <input class="" type="password" name="password" id="password" placeholder="Please enter password" />
        </div>
                <div class="ym-fbox login-button-box">
                      <a href="#" class="ym-button login-button login-button-admin">Login</a>
                </div>
    </form>
    <div class="admin-error-box" id="error-box">
        <ul>
            <!--
            <li>Please enter email</li>
            <li>Please enter password</li>
            <li>No such user</li>
            -->
        </ul>
    </div>
</div>