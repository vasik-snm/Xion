<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display the login form.
     */
    // Show login form
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Handle the login process.
     */
    public function login(Request $request)
    {
        // Validate input data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve credentials from the request
        $credentials = $request->only('email', 'password');

        // Attempt to find the admin by email
        $admin = AdminModel::where('email', $credentials['email'])->first();

        // Check if admin exists and the password is correct
        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            // Store admin details in session
            $request->session()->put('admin_id', $admin->id);
            $request->session()->put('admin_name', $admin->name);

            // Redirect to the dashboard with a success message
            return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
        }

        // Redirect back to the login page with an error message
        return redirect()->route('admin')->with('error', 'Enter valid email or password...');
    }


    /**
     * Display the admin dashboard.
     */
    public function dashboard()
    {
        $totalContacts = ContactModel::count();


        return view('admin.index', [
            'totalContacts' => $totalContacts
        ]);
    }

    /**
     * Logout the admin user.
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin')->with('success', 'Logged out successfully.');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminModel $adminModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminModel $adminModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminModel $adminModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminModel $adminModel)
    {
        //
    }
}
