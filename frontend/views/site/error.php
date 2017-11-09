<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="error-page">
    <div class="row">

        <div class="offset-md-1 col-md-3 d-flex align-items-center">
            <div class="error-box mx-auto mr-md-0">
                <div class="error-box__wrapper">
                    <div class="heading">404</div>
                    <div class="text">error page</div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="error-msg mt-5 mt-md-0">
                <p class="heading">Oops...</p>
                <p>
                    Somethig went wrong and we cant`t find the page you are looking for. Check your request spelling please and try again.
                </p>
                <p>
                    Or you can go to <a href="/">home page</a> to start all over. Check our <a href="#">excort beauties</a> for sensational experiance.
                </p>
                <p>
                    Ready to moke order? The go <a href="#">booking</a>. Not ready yet? Get in right mood with <a href="/stories">hot stories</a>. Have question or need help - please <a href="#">contact us!</a>
                </p>
            </div>
        </div>
    </div>
</div>

