<?php

use yii\bootstrap\ActiveForm;


?>
<div id="container">


    <?php $form = ActiveForm::begin();
    $form->method = "post";
    ?>
    <?= $form->field($model, 'imageFile')->fileInput()->label('Загрузить отчет') ?>
    <input type="submit" value="Загрузить"><br>
    <?php ActiveForm::end(); ?>


</div>


