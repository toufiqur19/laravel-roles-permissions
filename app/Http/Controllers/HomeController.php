<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
   public function index()
   {
       $permissions = Permission::count();
       $roles = Role::count();
       $users = User::count();
       $articles = Article::count();
       return view('home',compact('articles','users','roles','permissions'));
   }
}
