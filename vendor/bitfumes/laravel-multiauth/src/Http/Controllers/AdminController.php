<?php

namespace Bitfumes\Multiauth\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class AdminController extends Controller
{
    use AuthorizesRequests;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role:super', ['only'=>'show']);
        $this->adminModel = config('multiauth.models.admin');
    }

    public function index()
    {
        return view('multiauth::admin.home');
    }

    public function show()
    {
        $admins = $this->adminModel::where('id', '!=', auth()->id())->get();
        return view('multiauth::admin.show', compact('admins'));
    }

    public function showChangePasswordForm()
    {
        $user = Admin::find(Auth('admin')->user()->id);
        return view('multiauth::admin.passwords.change', compact('user'));
    }

    public function changePassword(Request $request)
    {

        if(!empty($request->oldPassword)){
        $data = $request->validate([
            'oldPassword'   => 'required',
            'password'      => 'required|confirmed',
        ]);
        auth()->user()->update(['password' => bcrypt($data['password'])]);
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $update = Admin::find(Auth('admin')->user()->id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->save();
        toast('Profile updated successfully', 'success');
        return redirect(route('admin.dashboard'));
    }
}
