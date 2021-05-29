<?php

use Thor\Facades\Filter;

Filter::add('hello', function ($value) {
    echo $value;
});