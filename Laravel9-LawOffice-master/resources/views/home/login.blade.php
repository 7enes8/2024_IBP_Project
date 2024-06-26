<div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login with</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        <div class="error"></div>
                        <div class="form loginBox">

                            <form method="POST" action="{{ route('login') }}" accept-charset="UTF-8">
                                @csrf
                                <x-jet-label for="email" value="{{ __('Email') }}" style="color: black"/>
                                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />

                                <x-jet-label for="password" value="{{ __('Password') }}" style="color: black"/>
                                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                <div class="">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600" style="color: black">{{ __('Remember Me') }}</span>
                                    </label>
                                </div>
                                <x-jet-button class="btn btn-default btn-login" >
                                    {{ __('Log in') }}
                                </x-jet-button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <div class="form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <x-jet-label for="name" value="{{ __('Name') }}" style="color: black"/>
                                <x-jet-input id="name" class="form-control" type="text" name="name" placeholder="Name" :value="old('name')" required autofocus autocomplete="name" />

                                <x-jet-label for="email" value="{{ __('Email') }}" style="color: black"/>
                                <x-jet-input id="email" class="form-control" type="email" name="email" placeholder="Email" :value="old('email')" required />

                                <x-jet-label for="password" value="{{ __('Password') }}" style="color: black"/>
                                <x-jet-input id="password" class="form-control" type="password" name="password" placeholder="Password" required autocomplete="new-password" />

                                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" style="color: black"/>
                                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation"  placeholder="Repeat Password" required autocomplete="new-password" />

                                <x-jet-button class="btn btn-default btn-register">
                                    {{ __('Register') }}
                                </x-jet-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="forgot login-footer">
                            <span>
                                 <a href="javascript: showRegisterForm();">Create An Account</a>
                            </span>
                </div>
                <div class="forgot register-footer" style="display:none">
                    <span>Already have an account ?</span>
                    <a href="javascript: showLoginForm();">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    @charset "UTF-8";

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
    .login .box .social {
        float: none;
        margin: 0 auto 30px;
        text-align: center;
    }

    .login .social .circle{
        background-color: #EEEEEE;
        color: #FFFFFF;
        border-radius: 100px;
        display: inline-block;
        margin: 0 17px;
        padding: 15px;
    }
    .login .social .circle .fa{
        font-size: 16px;
    }
    .login .social .facebook{
        background-color: #455CA8;
        color: #FFFFFF;
    }
    .login .social .google{
        background-color: #F74933;
    }
    .login .social .github{
        background-color: #403A3A;
    }
    .login .facebook:hover{
        background-color: #6E83CD;
    }
    .login .google:hover{
        background-color: #FF7566;
    }
    .login .github:hover{
        background-color: #4D4D4d;;
    }
    .login .forgot {
        color: #797979;
        margin-left: 0;
        overflow: hidden;
        text-align: center;
        width: 100%;
    }
    .login .btn-login, .registerBox .btn-register{
        background-color: #00BBFF;
        border-color: #00BBFF;
        border-width: 0;
        color: #FFFFFF;
        display: block;
        margin: 0 auto;
        padding: 15px 50px;
        text-transform: uppercase;
        width: 100%;
    }
    .login .btn-login:hover, .registerBox .btn-register:hover{
        background-color: #00A4E4;
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
        background-color: #00A4E4;
        color: #FFFFFF;
    }
    .big-register{
        background-color: rgba(0,0,0,.0);
        color: #00bbff;
        border-color: #00bbff;
    }
    .big-register:hover{
        border-color: #00A4E4;
        color:  #00A4E4;
    }
</style>

<script>
    /*
*
* login-register modal
* Autor: Creative Tim
* Web-autor: creative.tim
* Web script: http://creative-tim.com
*
*/
    function showRegisterForm(){
        $('.loginBox').fadeOut('fast',function(){
            $('.registerBox').fadeIn('fast');
            $('.login-footer').fadeOut('fast',function(){
                $('.register-footer').fadeIn('fast');
            });
            $('.modal-title').html('Register with');
        });
        $('.error').removeClass('alert alert-danger').html('');

    }
    function showLoginForm(){
        $('#loginModal .registerBox').fadeOut('fast',function(){
            $('.loginBox').fadeIn('fast');
            $('.register-footer').fadeOut('fast',function(){
                $('.login-footer').fadeIn('fast');
            });

            $('.modal-title').html('Login with');
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

        /*   Simulate error message from the server   */
        shakeModal();
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
