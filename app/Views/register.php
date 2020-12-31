<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<body style="background-color: aqua;">

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

     $repeatPassword = [
          'name' => 'repeatPassword',
          'id' => 'repeatPassword',
          'class' => 'form-control'
     ];

     $session = session();
     $errors = $session->getFlashdata('errors');

     ?>

     <div class="pt-5 d-flex justify-content-center">
          <div class="col-10 bg-light shadow p-3 mb-5 bg-white rounded">
               <h1 class="mb-3 fs-3">Register</h1>
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
               <?= form_open('Auth/register') ?>
               <div class="mb-3">
                    <?= form_label("Username", "username") ?>
                    <?= form_input($username) ?>
               </div>
               <div class="mb-3">
                    <?= form_label("Password", "password") ?>
                    <?= form_password($password) ?>
               </div>
               <div class="mb-4">
                    <?= form_label("Repeat Password", "repeatPassword") ?>
                    <?= form_password($repeatPassword) ?>
               </div>
               <div class="mb-3">
                    <p class="fs-6">
                         <a href="<?= site_url('auth/login') ?>">Sudah punya akun?</a>
                    </p>
               </div>
               <div class="mb-3 text-end">
                    <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']) ?>
               </div>
               <?= form_close() ?>
          </div>
     </div>
</body>
<?= $this->Endsection() ?>