<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        $username = 'aboo';
        $email = 'josh.xia@163.com';
        return view('article.list', compact('username','email'));
//        return view('article.list')->with('username', $username);

//        return view('article.list', [
//            'username' => 'Josh',
//            'email'    => 'josh.xia@163.comomomom',
//        ]);
    }
}
