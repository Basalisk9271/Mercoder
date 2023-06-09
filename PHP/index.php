
<!doctype html>

			

                        <html>
			    <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Login page</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: <a href="../index.php">;
                                }

                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888;
                                }

                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555;
                                } @charset "UTF-8";

.animated {
  -webkit-animation-duration: 1s;
	   -moz-animation-duration: 1s;
	     -o-animation-duration: 1s;
	        animation-duration: 1s;
	-webkit-animation-fill-mode: both;
	   -moz-animation-fill-mode: both;
	     -o-animation-fill-mode: both;
	        animation-fill-mode: both;
}

.animated.hinges {
	-webkit-animation-duration: 2s;
	   -moz-animation-duration: 2s;
	     -o-animation-duration: 2s;
	        animation-duration: 2s;
}

.animated.slow {
	-webkit-animation-duration: 3s;
	   -moz-animation-duration: 3s;
	     -o-animation-duration: 3s;
	        animation-duration: 3s;
}

.animated.snail {
	-webkit-animation-duration: 4s;
	   -moz-animation-duration: 4s;
	     -o-animation-duration: 4s;
	        animation-duration: 4s;
}

@-webkit-keyframes shake {
	0%, 100% {-webkit-transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {-webkit-transform: translateX(-10px);}
	20%, 40%, 60%, 80% {-webkit-transform: translateX(10px);}
}

@-moz-keyframes shake {
	0%, 100% {-moz-transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {-moz-transform: translateX(-10px);}
	20%, 40%, 60%, 80% {-moz-transform: translateX(10px);}
}

@-o-keyframes shake {
	0%, 100% {-o-transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {-o-transform: translateX(-10px);}
	20%, 40%, 60%, 80% {-o-transform: translateX(10px);}
}

@keyframes shake {
	0%, 100% {transform: translateX(0);}
	10%, 30%, 50%, 70%, 90% {transform: translateX(-10px);}
	20%, 40%, 60%, 80% {transform: translateX(10px);}
}

.shake {
	-webkit-animation-name: shake;
	-moz-animation-name: shake;
	-o-animation-name: shake;
	animation-name: shake;
}

.login .modal-dialog{
    width: 350px;
}
.login .modal-footer{
    border-top: 0;
    margin-top: 0px;
    padding: 10px 20px 20px;
}
.login .modal-header {
    border: 0 none;
    padding: 15px 15px 15px;
/*     padding: 11px 15px; */
}
.login .modal-body{
/*     background-color: #eeeeee; */
}
.login .division {
    float: none;
    margin: 0 auto 18px;
    overflow: hidden;
    position: relative;
    text-align: center;
    width: 100%;
}
.login .division .line {
    border-top: 1px solid #DFDFDF;
    position: absolute;
    top: 10px;
    width: 34%;
}
.login .division .line.l {
    left: 0;
}
.login .division .line.r {
    right: 0;
}
.login .division span {
    color: #424242;
    font-size: 17px;
}


.login .forgot {
    color: #797979;
    margin-left: 0;
    overflow: hidden;
    text-align: center;
    width: 100%;
}
.login .btn-login, .teaRegisterBox .btn-register{
    background-color:#ff8413;
    border-color:#ff8413;
    border-width: 0;
    color: #FFFFFF;
    display: block;
    margin: 0 auto;
    padding: 15px 50px;
    text-transform: uppercase;
    width: 100%;
}

.login .btn-login, .stuRegisterBox .btn-register{
    background-color:#ff8413;
    border-color:#ff8413;
    border-width: 0;
    color: #FFFFFF;
    display: block;
    margin: 0 auto;
    padding: 15px 50px;
    text-transform: uppercase;
    width: 100%;
}

.login .btn-login:hover, .teaRegisterBox .btn-register:hover{
    background-color: #cc6600;
    color: #FFFFFF;
}

.login .btn-login:hover, .stuRegisterBox .btn-register:hover{
    background-color: #cc6600;
    color: #FFFFFF;
}

.login .form-control{
    border-radius: 3px;
    background-color: rgba(0, 0, 0, 0.09);
    box-shadow: 0 1px 0px 0px rgba(0, 0, 0, 0.09) inset;
    color: #FFFFFF;
}
.login .form-control:hover{
    background-color: rgba(0,0,0,.16);
}
.login .form-control:focus{
    box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.04) inset;
    background-color: rgba(0,0,0,0.23);
    color: #FFFFFF;
}
.login .box .form input[type="text"], .login .box .form input[type="password"] {
    border-radius: 3px;
    border: none;
    color: #333333;
    font-size: 16px;
    height: 46px;
    margin-bottom: 5px;
    padding: 13px 12px;
    width: 100%;
}


@media (max-width:400px){
    .login .modal-dialog{
        width: 100%;
    }
}

.big-login, .big-register{
    background-color: #00bbff;
    color: #FFFFFF;
    border-radius: 7px;
    border-width: 2px;
    font-size: 14px;
    font-style: normal;
    font-weight: 200;
    padding: 16px 60px;
    text-transform: uppercase;
    transition: all 0.3s ease 0s;
}
.big-login:hover{
    background-color: #cc6600;
    color: #FFFFFF;
}
.big-register{
    background-color: rgba(0,0,0,.0);
    color: #ff8413;
    border-color: #ff8413;
}
.big-register:hover{
    border-color: #cc6600;
    color:  #cc6600;
}
img{
    position: fixed;
    width:100%;
    height:100%;
    top:0;
    left:0;
    object-fit:cover;
}
</style>
                                </head>

                <div class="img">
                    <img src="/mercoder/assets/img/campus.jpeg" class="mx-auto d-block" alt="Your image">
                </div>
				<body className='snippet-body'>
				<?php require "reg.php"; 
				      require "login.php"; ?>

                                <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <a href="" button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="javascript:window.location.href = '../index.php'">&times;</a>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box">
                             <div class="content">


                              
                                <div class="form loginBox">
                                    <form method="POST" action="login.php"  accept-charset="UTF-8">
                                    <input id="loginusername" class="form-control" type="text" placeholder="Username" name="loginusername">
                                    <input id="loginpassword" class="form-control" type="password" placeholder="Password" name="loginpassword">
                                    <input class="btn btn-default btn-login" type="submit" value="Login">
                                    </form>
                                </div>
                             </div>
                        </div>
                        <div class="box">
                            <div class="content stuRegisterBox" style="display:none;">
                             <div class="form">
                                <form method="POST" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
                                <input id="Username" class="form-control" type="text" placeholder="Username" name="username" required>
                                <input id="password" class="form-control" type="password" placeholder="Password" name="password" required>
                                <input id="City" class="form-control" type="text" placeholder="City" name="city" required>
                                <input id="School" class="form-control" type="text" placeholder="School" name="school">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>
                            </div>
                            <div class="content teaRegisterBox" style="display:none;">
                             <div class="form">
                                <form method="POST" html="{:multipart=>true}" data-remote="true" action="" accept-charset="UTF-8">
                                  <input id="Username" class="form-control" type="text" placeholder="Username" name="username" required>
                                  <input id="password" class="form-control" type="password" placeholder="Password" name="password" required>
                                  <input id="Name" class="form-control" type="text" placeholder="Name" name="name" required>
                                  <input id="City" class="form-control" type="text" placeholder="City" name="city" required>
				  <input id="School" class="form-control" type="text" placeholder="School" name="school" required>
				  <input id="ClassCode" class="form-control" type="text" placeholder="Class Code" name="classcode">
                                <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                </form>
                                </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer" style="color:#212529">
                            <span>Create a:
                                 <a href="javascript: showTeacherRegisterForm();"style="color:#ff8413">Teacher account  </a>
                           or    </span>
                            <span>
                                 <a href="javascript: showStudentRegisterForm();" style="color:#ff8413">  Student account</a>
                             </span>
                        </div>
                        <div class="forgot register-footer">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();" style="color:#ff8413" >Login</a>
                        </div>
                    </div>
    		      </div>
		      </div>
		  </div>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>$(document).ready(function(){
        openLoginModal();
    });


function showTeacherRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.teaRegisterBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Teacher Register');
    });
    $('.error').removeClass('alert alert-danger').html('');

}

function showStudentRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.stuRegisterBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Student Register');
    });
    $('.error').removeClass('alert alert-danger').html('');

}

function showLoginForm(){
    $('#loginModal .stuRegisterBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');
        });

        $('.modal-title').html('Login');
    });

    $('#loginModal .teaRegisterBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');
        });

        $('.modal-title').html('Login');
    });
     $('.error').removeClass('alert alert-danger').html('');
}



function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');
    }, 230);

}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');
    }, 230);

}

function loginAjax(){
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");
            } else {
                 shakeModal();
            }
        });
    
}

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){
                $('#loginModal .modal-dialog').removeClass('shake');
    }, 1000 );
}

   </script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>

                                </body>
                            </html>


