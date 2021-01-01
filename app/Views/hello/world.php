<?php
function getUrl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $responseJson = curl_exec($ch);
    curl_close($ch);

    return   json_decode($responseJson, true);
}

$json = getUrl("https://developers.zomato.com/api/v2.1/restaurant?res_id=18962560&apikey=849d8360846e72f6e210e1dad475fbfa");

$location = $json['location']['address'];
$thumb = $json['featured_image'];
$name = $json['name'];
$timings = $json['timings'];
$phone = $json['phone_numbers'];
$url = $json['url'];

$c = getUrl("https://developers.zomato.com/api/v2.1/restaurant?res_id=18477915&apikey=849d8360846e72f6e210e1dad475fbfa");

$geo = $c['location']['address'];
$thumbA = $c['featured_image'];
$nameA = $c['name'];
$timingsA = $c['timings'];
$phoneA = $c['phone_numbers'];
$urlA = $c['url'];

$a = getUrl("https://developers.zomato.com/api/v2.1/restaurant?res_id=18619623&apikey=849d8360846e72f6e210e1dad475fbfa");

$geoB = $a['location']['address'];
$thumbB = $a['featured_image'];
$nameB = $a['name'];
$timingsB = $a['timings'];
$phoneB = $a['phone_numbers'];
$urlB = $a['url'];





?>
<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<!-- Portfolio -->
<section class="portfolio " id="portfolio">
    <div class="container">
        <div class="row pt-4 mb-4">
            <div class="col text-center">
                <hr>
                <h2>Restaurant</h2>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <h2><?= $name; ?></h2>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                    </svg> <?= $timings; ?></p>
                <div class="card">
                    <img class="card-img-top" src="<?= $thumb; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg> <?= $location; ?></p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> <?= $phone; ?></p>
                        <a href="<?= $url; ?>" class="btn btn-primary">Go to Restaurant</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <h2><?= $nameA; ?></h2>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                    </svg> <?= $timingsA; ?></p>
                <div class="card">
                    <img class="card-img-top" src="<?= $thumbA; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg> <?= $geo; ?></p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> <?= $phoneA; ?></p>
                        <a href="<?= $urlA; ?>" class="btn btn-primary">Go to Restaurant</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <h2><?= $nameB; ?></h2>
                <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                    </svg> <?= $timingsB; ?></p>
                <div class="card">
                    <img class="card-img-top" src="<?= $thumbB; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                            </svg> <?= $geoB; ?></p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg> <?= $phoneB; ?></p>
                        <a href="<?= $urlB; ?>" class="btn btn-primary">Go to Restaurant</a>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>
<?= $this->Endsection(); ?>