<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Page;
use Illuminate\Http\Request;
use App\Exceptions\PageIsExpiredException;


class PageViewController extends Controller
{
 public function show($id)
 {
     $page = Page::whereIsNotExpired($id);   

     //TODO
     // if($page->isExpired()) throw new PageIsExpiredException;
     return view('admin.pages.single')->with(compact('page'));
 }

}