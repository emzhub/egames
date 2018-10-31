<?php

namespace App\Http\Controllers;
use App\games;
use App\team;
use App\newgame;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function __construct()
 {
     $this->middleware('auth');
 }
 public function admin()
 {
     return view('admin');
 }

 public function show_Console()
 {
     return view('ControlRoom.Add_Console');
 }
 public function show_Games()
 {
     return view('ControlRoom.Add_Games');
 }
 public function show_Team()
 {
     return view('ControlRoom.Add_Team');
 }
// public function create_industry()
// {
//  return view('ControlRoom.industry');
//
// }
public function save_add_team(Request $request)
{
    #code


     foreach ($request->catname as $cat_name)
        {
          $post = team::create(array(
           'team_id' => mt_rand(13, rand(100, 99999990)),
           'name' => $cat_name
           // 'author' => Auth::user()->id
       ));
        }
        $message ='Post has been successfully added!';
      return redirect()->back()->with('status', $message);
}
public function save_add_game(Request $request)
{
    #code


     foreach ($request->catname as $cat_name)
        {
          $post = games::create(array(
           'game_id' => mt_rand(13, rand(100, 99999990)),
           'name' => $cat_name
           // 'author' => Auth::user()->id
       ));
        }
        $message ='Post has been successfully added!';
      return redirect()->back()->with('status', $message);
}
//
// public function create_sub_industry()
// {
//   $items = industries::all(['ind_id', 'name']);
//    return view('ControlRoom.sub_industry', compact('items',$items));
// }
//
//
public function save_add_console(Request $request)
{
    #code
     foreach ($request->catname as $sub_name)
        {
          $post = newgame::create(array(
           'console_id' => mt_rand(13, rand(100, 99999990)),
           'name' => $sub_name
           // 'author' => Auth::user()->id
       ));
        }
        $message ='Post has been successfully added!';
      return redirect()->back()->with('status', $message);
}



}
