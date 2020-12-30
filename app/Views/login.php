<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<body style="background-image: url(../../public/img/bg_login.jpg);">

   <?php
   $username = [
      'name' => 'username',
      'id' => 'username',
      'value' => null,
      'class' => 'form-control'
   ];

   $password = [
      'name' => 'password',
      'id' => 'password',
      'class' => 'form-control'
   ];

   $session = session();
   $errors = $session->getFlashdata('errors');
   ?>

   <div class="pt-5 d-flex justify-content-center">
      <div class="col-3 bg-light shadow p-3 mb-5 bg-white rounded">
         <h3 class="mt-3 fs-3">Login</h3>
         <?php if ($errors != null) : ?>
            <div class="alert alert-danger" role="alert">
               <h4 class="alert-heading">Terjadi Kesalahan</h4>
               <hr>
               <p class="mb-0">
                  <?php
                  foreach ($errors as $err) {
                     echo $err . '<br>';
                  }
                  ?>
               </p>
            </div>
         <?php endif ?>
         <?= form_open('Auth/login') ?>
         <div class="mt-3 mb-3 g-3">
            <?= form_label("Username", "username") ?>
            <?= form_input($username) ?>
         </div>
         <div class="mb-3">
            <?= form_label("Password", "password") ?>
            <?= form_password($password) ?>
         </div>
         <div class="mb-3">
            <label>
               <a class="fs-6" href="<?= site_url('auth/register') ?>">Create an account?</a>
            </label>
         </div>
         <div class="text-end mt-5">
            <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
         </div>
      </div>

   </div>
</body>

<?= $this->Endsection() ?>