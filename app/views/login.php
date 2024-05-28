<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="assets/login/images/icons/favicon.ico" />
<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/login/fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">

<meta name="robots" content="noindex, follow">

<body>
<div class="limiter">
<!-- <div class="container-login100" style="background-image: url('assets/login/images/bg-01.jpg');"> -->
<div class="container-login100" style="background-color:#86012b;">
<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
<form class="login100-form validate-form" action="" id="login-form" role="form" method="POST">
<span class="login100-form-title p-b-49">
Login
</span>
<div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
<span class="label-input100">Username</span>
<input class="input100" type="text" id="Username" name="Username" placeholder="Type your username">
<span class="focus-input100" data-symbol="&#xf206;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
<span class="label-input100">Password</span>
<input class="input100" type="password" id="Password" name="Password" placeholder="Type your password">
<span class="focus-input100" data-symbol="&#xf190;"></span>
</div>
<div class="text-right p-t-8 p-b-31">
<a href="#">Forgot password?</a>
</div>
<div class="container-login100-form-btn">
<div class="wrap-login100-form-btn">
<div class="login100-form-bgbtn"></div>
<button class="login100-form-btn" style="background-color:#86012b;">
Login
</button>
</div>
</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/login/vendor/select2/select2.min.js"></script>
<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
<script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<script src="assets/login/js/main.js"></script>

<script src="assets/js/md5.js"></script>

<script>
    $('#Password').on('keypress', function(e) {
        if (e.which == 13) {
            AuthCall();
        }
    });

    $(document).on('keypress', 'input', function(e) {
        if (e.which == 13) {
            e.preventDefault();
            var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
            console.log($next.length);
            if (!$next.length) {
                $next = $('[tabIndex=1]');
            }
            $next.focus();
        }
    });

    $("#login-form").on('submit', function(e) {

        e.preventDefault();
        AuthCall();
    });


    function AuthCall() {

        try {

            var json = new Object();
            json.Username = $("#Username")[0].value;
            json.Password = $("#Password")[0].value;

            var svcdta = new Object();
            svcdta.Module = "Auth";
            svcdta.Page_key = "Login";
            svcdta.JSON = json;

            Authenticate(svcdta);
        } catch (ex) {
            console.log(ex.stack);
            alert(ex.stack);
        }

    }

    var ipaddress;
    $(document).ready(function() {
        sessionStorage.clear();
        localStorage.clear();

        $("#Username")[0].focus();
    });
    var msgToDisplay;



    function clearForm() {
        $("#Username")[0].value = "";
        $("#Password")[0].value = "";
        $("#Username")[0].focus();
    }

    function Authenticate(svcdta) {

        //$.LoadingOverlay("show");
        svcdta.MSC = $.md5(new Date().getDate().toString().padStart(2, "0"));
        var data = JSON.stringify(svcdta);
        $.ajax({
            data: data,
            type: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            async: false,
            url: "index.php",
            success: function showData(arg) {
                onSuccess(arg);
            },
            error: function err(arg) {
                //$.LoadingOverlay("hide");

                console.log(JSON.stringify(arg));

                if (arg.status == 404)
                    alert(arg.statusText);
                else if (arg.status == 0) {
                    alert(arg.statusText);
                } else {

                }
            }
        });
    }


    //on success call
    function onSuccess(rc) {

        //$.LoadingOverlay("hide");
        console.log(JSON.stringify(rc));

        if (rc.return_code) // data was recieved successfully 
        {
            var f = rc.return_data;
            sessionStorage.setItem("Don Bosco Technical_user", f.username);
            sessionStorage.setItem("Don Bosco Technical_session", f.sessionkey);
            window.open(f["nextPage"], '_self');
        } else //data was recieved successfully but was returned by service with error code
        {
            try {
                alert(rc.return_data);
                clearForm();
            } catch (ex) {
                alert(ex.stack);
            }
        }
        //Hideloadingpanle();

    }
</script>

</body>

</html>
