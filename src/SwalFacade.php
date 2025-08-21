<?php

namespace DeepakSinghKushwah\LaravelSwal;

use Illuminate\Support\Facades\Facade;

class SwalFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'swal';
    }
}
