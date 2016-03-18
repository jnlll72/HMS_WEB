
<div class="container">
    <?php
    $attributes = array("class"=>"form-horizontal","id"=>"form_inscription");
    echo form_open('UsersController',$attributes);
    ?>
    <!--<form class="form-horizontal">-->
    <fieldset>

        <!-- Form Name -->
        <legend>Inscription</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="txt_login">Login : </label>  
            <div class="col-md-5">
                <input id="txt_login" name="txt_login" type="text" class="form-control input-md" required/>
            </div>
        </div>

        <!-- Email input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="txt_email">Email : </label>  
            <div class="col-md-5">
                <input id="txt_email" name="txt_email" type="email" class="form-control input-md" required/>
            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="txt_pass">Password : </label>
            <div class="col-md-5">
                <input id="txt_pass" name="txt_pass" type="password" class="form-control input-md" required/>
            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="txt_confirm_pass">Confirm password : </label>
            <div id="confirm_success" class="col-md-5">
                <input id="txt_confirm_pass" name="txt_confirm_pass" type="password" class="form-control input-md" required/>
            </div>
        </div>

        <!-- Input submit -->
        <div class="form-group">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input id="btn_submit" type="submit" class="btn btn-primary" value="Inscription"/>
            </div>
        </div>

    </fieldset>
    </form>
</div>
</body>
</html>