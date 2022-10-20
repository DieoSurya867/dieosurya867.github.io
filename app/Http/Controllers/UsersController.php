<?php
 
namespace App\Http\Controllers;
 
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = users::all();


        return view('index', compact('user'));
    }

}