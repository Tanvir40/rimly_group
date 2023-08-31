<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Panel</title>
    <link rel="shortcut icon" href="{{asset('backend/img/icon.png')}}">
    <link rel="stylesheet" href="{{asset('backend/css/uikit.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">

    <!-- <script src="js/jquery.min.js"></script> -->

    <script src="{{asset('js/jquery.min.js')}}"></script>

    <script src="{{asset('backend/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/uikit.min.js')}}"></script>
    <script src="{{asset('backend/js/uikit-icons.min.js')}}"></script>
    <style type="text/css">
      
      body{background: #ddd;}
      input[type="text"], input[type="password"]{
          border: none;
          border-bottom: 1.5px solid #e2e5e8;
          border-radius: 0;
      }

      .form-control:focus {
        color: none;
        background-color: none;
        border-color: none;
        outline: none;
        box-shadow: none;
      }

    </style>
  </head>
  <body style="background: #ddd;">

    <section class="my-5 p-3 py-5" style="max-width: 450px;margin: auto;">
      <div class="card">
        <div class="card-body">

          <form class="py-4" method="post" action="{{Route('loging.user_loging')}}" id="login" autocomplete="off">
            
            <hr>
            @csrf

            @if(Session::has("login_error"))
               <h6 class="text-center text-danger" id="msg">{{Session::get("login_error")}}</h6>
            @endif
           

            <div class="form-group">
              <label for="email">Phone</label>
              <input type="text" name="email" id="email" class="form-control" required placeholder="Enail address">
              <small id="phone_err" class="form-text" style="color:red;"></small>
            </div>

            <div class="form-group">
              <label  for="password">Password</label>
              <input type="password" required name="password" id="password" class="form-control" placeholder="Password">
              <small id="password_err" class="form-text" style="color:red;"></small>
            </div>
            <div class="form-check my-2">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="chbox" value="true">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>

            <input type="submit" value="Login" class="btn btn-primary">
            

          </form>

        </div>
      </div>

    </section>


    <script type="text/javascript">
      

  /*$("#login").submit(function(){

      if ($('#phone').val() == "") {
        $("#phone_err").text("Field must not be empty.");
        return false;
      }else{
        $("#phone_err").text("");
      }

      if ($('#password').val() == "") {
        $("#password_err").text("Field must not be empty.");
        return false;
      }else{
        $("#password_err").text("");
      }

      if ($('#phone').val() !== "" && $('#password').val() !== "") {

          var form = $("#login").get(0);

          $.ajax({
          url : "{{url('/userlogin')}}",
          method : "post",
          data : new FormData(form),
          processData : false,
          contentType : false,
          success : function(data){
             if ($.trim(data) == 0) {
                $("#msg").text("Phone or pasword no match!");
              }else if($.trim(data) == 2){
                $("#msg").text("Account blocked");
              }else{
                window.location.assign("{{url('/')}}");
              }
          }

        });

      }

      return false;

    });*/


    </script>
  </body>
</html>