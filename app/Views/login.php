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

   $url = "https://developers.zomato.com/api/v2.1/restaurant?res_id=18962560&apikey=849d8360846e72f6e210e1dad475fbfa";

   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $responseJson = curl_exec($ch);
   curl_close($ch);

   $json = json_decode($responseJson, true);

   $location = $json['location']['address'];
   // style="position:relative;width:100%;height:100%;"
   ?>
   <div class="container">
      <div class="row ">
         <div class="col-sm-8 " style="padding-top: 150px; padding-right: 75px;">
            <div class="card">
               <div class="card-header">
                  ProgressON
               </div>
               <div class="card-body">
                  <blockquote class="blockquote mb-0">
                     <p>It’s easy to impress me. I don’t need a fancy party to be happy. Just good friends, good food, and good laughs. I’m happy. I’m satisfied. I’m content.</p>
                     <footer class="blockquote-footer pt-2">Maria Sharapova</footer>
                  </blockquote>
               </div>
            </div>
         </div>
         <div class="col-sm-4">
            <div class="pt-5  ">
               <div class="bg-light shadow p-3 mb-5 bg-white rounded">
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
         </div>
      </div>
   </div>
</body>

<?= $this->Endsection() ?>