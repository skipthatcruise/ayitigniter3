<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ayiti.com</title>
    <link rel="stylesheet" href="<?=base_url('public/css/login.css')?>" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"/>
  </head>
  <body>
    
    <div class="container">
      <div class="left-box">
      </div>
      <div class="image-container">
        <img src="<?=base_url('public/images/login_image.svg')?>" alt="" class="image" />
      </div>
      <div class="form-box">
        <h2>Welcome back!</h2>

        <?php if (session()->getFlashdata('loginError')): ?>
            <div class="alert alert-danger" style="color: red;">
                <?= session()->getFlashdata('loginError'); ?>
            </div>
        <?php endif; ?>


        <form action="<?= site_url('admin/authenticate') ?>" method="post">
          <div class="input-box">
            <input type="text" placeholder="Email" name="email"/>
            <i class="bx bxs-envelope"></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" name = "password"/>
            <i class="bx bxs-lock-alt"></i>
          </div>
          <div class="input-box">
            <button type="submit" class="btn">Sign in</button>
          </div>
        </form>
      </div>
    </div> 

  </body>
</html>
