
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Modal Login Form</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

    <style>
        #login-modal{
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-color: rgba(0, 0, 0, 0.6);
  z-index: 100;
  /* display: flex; */
  display: none;
  justify-content: center;
  align-items: center;
}

.modal{
  background-color: #e6ecf0;
  padding: 10px 0 20px 0;
  border-radius: 10px;
  width: 450px;
  text-align: center;
}

.top-form{
  display: flex;
  justify-content: flex-end;
}

.top-form .close-modal{
  cursor: pointer;
  padding: 0 20px;
  font-size: 20px;
}

.login-form h2{
  letter-spacing: 2px;
  margin-top: 10px;
  margin-bottom: 30px;
}

.login-form form input{
  width: 75%;
  margin-bottom: 20px;
  padding: 12px 12px;
  box-sizing: border-box;
  border: 1px solid #d0d5d8;
  border-radius: 3px;
}

.login-form form button{
  padding: 12px 0px;
  width: 75%;
  background-color: #5dca88;
  border: 0;
  border-radius: 3px;
  color: white;
  margin: 10px auto;
  cursor: pointer;
}
    </style>
</head>
<body>
    <button id="login-show">Login</button>

  <div id="login-modal">
    <div class="modal">
      <div class="top-form">
        <div class="close-modal">
          &#10006;
        </div>
      </div>
      <div class = "login-form">
        <h2>Login With Email</h2>
        <form action="#">
          <input class="form-control" type="text" placeholder="Email">
          <input class="form-control" type="password" placeholder="Password">
          <button type = "button" class = "submit-btn">Login</button>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(function() {

      $('#login-show').click(function() {
        $('#login-modal').fadeIn().css("display", "flex");
      });

      $('.close-modal').click(function() {
        $('#login-modal').fadeOut();
      });
    });
  </script>
</body>
</html>