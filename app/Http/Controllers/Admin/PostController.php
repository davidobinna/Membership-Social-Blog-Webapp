<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function __construct()
   {
      return $this->middleware(['isAdmin', 'auth']);
   }

    public function create()
    {
        return view('admin.posts.create');
    }
}
