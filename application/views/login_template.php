<div class="content">
    <h4 style="margin-left: 31%;">Welcome to dating portal!</h4>
    <form method="POST" action="/post" class="ym-form login-form">
        <input type="hidden" name="login" value="login" />
        <div class="ym-fbox">
            <label class="ym-inline" for="email">E-mail</label>
            <input class="" type="text" name="email" id="email" placeholder="Please enter your email" />
        </div>
        <div class="ym-fbox">
            <label class="ym-inline" for="password">Password</label>
            <input class="" type="password" name="password" id="password" placeholder="Please enter password" />
        </div>
                <div class="ym-fbox login-button-box">
                      <a href="#" class="ym-button login-button login-button-members">Login</a>
                </div>
        <a class="register-link" href="/register">Register</a>
    </form>
    <div id="error-box">
        <ul>

        </ul>
    </div>
</div>