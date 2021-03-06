<?php

/* @var $this yii\web\View */
/* @var $exception Exception */

use yii\helpers\Html;
?>
<div class="site-error">

    <h1><?=Html::encode($exception->statusCode) ?></h1>

    <div class="alert alert-danger">
        <?=$exception->getMessage() ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

</div>
