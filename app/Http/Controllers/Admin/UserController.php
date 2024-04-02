<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function destroy(string $id)
    {
        $user = User::find($id);
        if ($user->is_admin==0 && $user->email!=Auth::user()->email) {
            $user = User::find($id);
            $user->delete();
            return back()->with('success', 'User deleted successfully');
        } else {
            return back()->with('error', 'You cannot delete Super Admin');
        }
    }
}
