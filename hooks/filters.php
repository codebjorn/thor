<?php
/*
|--------------------------------------------------------------------------
| File to store all filters of application
|--------------------------------------------------------------------------
*/
use Thor\Facades\Filter;

Filter::add('hello', function ($value) {
    echo $value;
});