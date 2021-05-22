<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;
use PHPUnit\TextUI\XmlConfiguration\Php as XmlConfigurationPhp;

class UserController extends Controller
{
    public function index()
    {
        return view('user.user');
    }
}


