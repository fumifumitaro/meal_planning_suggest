<?php


namespace App\Http\Controllers\MyPage;


use App\Http\Controllers\Controller;

use Inertia\Inertia;

class EditController extends Controller
{
    public function index(){
        return Inertia::render('MyPage/Edit');
    }
}
