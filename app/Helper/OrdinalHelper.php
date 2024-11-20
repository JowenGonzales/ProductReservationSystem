<?php

namespace App\Helper;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class OrdinalHelper
{
    public static function numberFormat($num) {
        return number_format($num, 2, '.', ',');
    }


}
