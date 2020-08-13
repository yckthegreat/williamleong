<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function overview() {

        return view('backoffice.accounts.overview');
    }

    public function addAccount() {

        return view('backoffice.accounts.create');
    }

    public function editAccount() {
        
        return view('backoffice.accounts.edit');
    }
}
