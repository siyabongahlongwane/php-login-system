<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>PHP Sign Up</title>
  </head>
  <body class="full-width">
    <div class="main-container full-height full-width">
      <div
        class="card-wrapper full-height d-flex justify-content-center align-items-center"
      >
        <div class="form-card white-background p-4">
          <h6 class="display-6 mb-3 bold grey-color card-title">SIGN UP</h6>
          <div class="row">
            <div class="col-lg-12">
                <form action="signup.php" method="post">
                    <div class="form-group">
                        <label class="form-label grey-color bold">Name</label>
                        <input
                          name="name"
                          type="text"
                          class="form-control"
                          placeholder="Please Enter Name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-label grey-color bold">Email</label>
                        <input
                          name="email"
                          type="text"
                          class="form-control"
                          placeholder="Please Enter Email"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group remove-margin">
                        <label class="form-label grey-color bold">Password</label>
                        <input
                          name="password"
                          type="text"
                          class="form-control"
                          placeholder="Please Enter Password"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                      <button
                        type="submit"
                        name="signup"
                        class="btn btn-primary pink-background pink-button full-width"
                      >
                        SIGN UP
                      </button>
                    </div>
                </form>
            <div class="col-lg-12 light-grey-color mt-4">
              <div
                class="relative grey-line full-width d-flex justify-content-center align-items-center"
              >
                <span class="absolute or-text white-background">OR</span>
              </div>
            </div>
            <div class="col-lg-12 mt-3">
              <div class="d-flex justify-content-center">
                <div
                  class="d-flex justify-content-center align-items-center navy-border circle mr-3"
                >
                  <i class="fa fa-facebook navy-color icon"></i>
                </div>
                <div
                  class="d-flex justify-content-center align-items-center red-border circle mr-3"
                >
                  <i class="fa fa-google red-color icon"></i>
                </div>
                <div
                  class="d-flex justify-content-center align-items-center navy-border circle"
                >
                  <i class="fa fa-linkedin navy-color icon"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-12 text-center mt-3">
              <small class="bold grey-color"
                >Already a user? <a href="login-page.php">LOGIN</a></small
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
