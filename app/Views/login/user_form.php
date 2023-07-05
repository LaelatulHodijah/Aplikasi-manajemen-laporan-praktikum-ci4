<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <link rel="stylesheet" href="/css/style.css">
   <title>Login Form</title>
</head>

<body>

   <div class="container">
      <div class="row">
         <div class="col-md-4 mx-auto pt-5">
         <div class="card-body border-0">
            <form method="POST" action="<?= base_url('login/login_action'); ?>">
               <div class="form-group">
                  <label for="username">Masukan Username</label>
                  <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                  <small id="usernameHelp" class="form-text text-muted"></small>
               </div>
               <div class="form-group">
                  <label for="password">Masukan Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
               </div>
               <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember Username</label>
               </div>
               <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p>
               <?php if (!empty(session()->getFlashdata('gagal'))) { ?>
                  <div class="alert alert-warning">
                     <?php echo session()->getFlashdata('gagal') ?>
                  </div>
               <?php } ?>
            </p>
         </div>
      </div>
   </div>
</div>

   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   <script src="script.js"></script>
</body>

</html>