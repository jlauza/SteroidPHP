<?php

use Amp\Loop;

Loop::run (function() use ($model, $view) {
    $data = yield $model->getDataAsync();
    echo $view->render($data);
});