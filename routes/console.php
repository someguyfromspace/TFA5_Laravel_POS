<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('pos:info', function () {
    $this->comment('TFA5 Laravel POS Foundations application is ready.');
})->purpose('Display a short POS application status message');
