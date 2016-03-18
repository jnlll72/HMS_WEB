
<div class="container">
   <?php
    $attributes = array("class"=>"form-horizontal","id"=>"form_session");
    echo form_open('SessionController',$attributes);
    ?>
    <!--<form class="form-horizontal">-->
        <fieldset>

            <!-- Form Name -->
            <legend>Connexion</legend>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txt_login">Login : </label>  
                <div class="col-md-5">
                    <input id="txt_login" name="txt_login" type="text" class="form-control input-md" required/>
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="txt_pass">Password : </label>
                <div class="col-md-5">
                    <input id="txt_pass" name="txt_pass" type="password" class="form-control input-md" required/>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <!--<div class="checkbox">
                        <label for="checkboxes-0">
                            <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
                            Se souvenir de moi
                        </label>
                    </div>-->
                    <input type="submit" class="btn btn-primary" value="Connexion"/>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</body>
</html>