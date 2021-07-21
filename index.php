<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .navbar {
        padding: 10px 0 10px 0;
        box-shadow: 0px 10px 2px 0px #D65600;
      }
      .card-login {
        padding: 50px 0 0 0;
        width: 450px;
        margin: 80 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" style="color: #D65600; font-size: 25px" href="#">
        <img src="logo.png" width="40" height="40"  class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              <h2 style="color: #D65600">Login</h2>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit" style="color: #D65600; font-size: 25px;">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>