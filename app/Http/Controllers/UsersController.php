<?php
 
namespace App\Http\Controllers;
 
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class UsersController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$user = DB::table('users')->get();
 
    	// mengirim data pegawai ke view index
    	return view('users',['users' => $user]);
 
    }
}