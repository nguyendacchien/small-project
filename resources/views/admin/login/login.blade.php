<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{asset('login/css.css')}}" rel="stylesheet" />

</head>
<body>
<div class="overlay">
    <!-- LOGN IN FORM by Omar Dsoky -->
    <form method="post" action="{{route('admin.login')}}">
        @csrf
        <!--   con = Container  for items in the form-->
        <div class="con">
            <!--     Start  header Content  -->
            <header class="head-form">
                <h2>Log In</h2>
                <!--     A welcome message or an explanation of the login form -->
                <p>login here using your username and password</p>
            </header>
            <!--     End  header Content  -->
            <br>
            <div class="field-set">

                <!--   user name -->
                <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
                <!--   user name Input-->
                <input class="form-input" id="txt-input" type="email" placeholder="@UserName" name="email">

                <br>

                <!--   Password -->

                <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
                <!--   Password Input-->
                <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" >

                <!--      Show/hide password  -->
                <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>


                <br>
                <!--        buttons -->
                <!--      button LogIn -->
                <button class="log-in"> Log In </button>
            </div>

            <!--   other buttons -->
            <div class="other">
                <!--      Forgot Password button-->
                <button class="btn submits frgt-pass">Forgot Password</button>
                <!--     Sign Up button -->
                <button class="btn submits sign-up">Sign Up
                    <!--         Sign Up font icon -->
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </button>
                <!--      End Other the Division -->
            </div>

            <!--   End Conrainer  -->
        </div>

        <!-- End Form -->
    </form>
</div>
{{--<script>--}}
{{--    $("#login-button").click(function(event){--}}
{{--        event.preventDefault();--}}

{{--        $('form').fadeOut(500);--}}
{{--        $('.wrapper').addClass('form-success');--}}
{{--    });--}}
{{--</script>--}}

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('login/js.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>
