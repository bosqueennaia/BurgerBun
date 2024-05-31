<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Burger Bun</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="\burgerbun\assets\css\style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="\burgerbun\assets\css\font-awesome.min.css" type="text/css" media="all">

</head>

<body>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Welcome to Burger Bun</h1>
                    <p class="sub-para">Create an account to get access to view the burger bun!</p>
            <?php if(session()->getFlashData('success')) { ?>
                <div class="alert alert-success">
                    <?= session()->get('success') ?>
                </div>
            <?php } ?>

            <?php if(session()->getFlashdata('errors')) { ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('errors') ?>
                </div>
            <?php } ?>
            <form action="/register" method="post">
              <h1>Register</h1>
              <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="Enter name" required>
              </div>
              <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter email" required>
              </div>
              <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Enter password" required>
              </div>
              <button type="submit" class="btn btn-primary">Register</button>
              </form>
              </div>

              <div class="d-flex align-items-center">

                <p class="text-center">Already have an account? <a href="/login">Login here.</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    
  </body>
  <script>
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const passwordConfirmationInput = document.getElementById('password_confirmation');
    const submitBtn = document.getElementById('submit-btn');

    function validateForm() {
      if (nameInput.value.trim() === '' || emailInput.value.trim() === '' || passwordInput.value.trim() === '' || passwordConfirmationInput.value.trim() === '') {
        submitBtn.disabled = true;
      } else if (!emailInput.value.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
        submitBtn.disabled = true;
      } else if (passwordInput.value !== passwordConfirmationInput.value) {
        submitBtn.disabled = true;
      } else {
        submitBtn.disabled = false;
      }
    }

    nameInput.addEventListener('input', validateForm);
    emailInput.addEventListener('input', validateForm);
    passwordInput.addEventListener('input', validateForm);
    passwordConfirmationInput.addEventListener('input', validateForm);
  </script>
</html>