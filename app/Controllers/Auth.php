<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Shield\Models\UserModel;
use App\Models\BorrowerModel;

class Auth extends Controller
{
    public function login()
    {
        $users = new UserModel();
        $borrowers = new BorrowerModel();

        // Get the email and password from the login form
        $credentials = $this->request->getPost(['email_address', 'password']);
        $user = $users->where('email_address', $credentials['email_address'])->first();

        if ($user && password_verify($credentials['password'], $user->password_hash)) {
            // Fetch the borrower record to get the user_type_id
            $borrower = $borrowers->where('email_address', $credentials['email_address'])->first();

            if ($borrower) {
                // Include user_type_id in the session
                session()->set('user', [
                    'id' => $user->id,
                    'email_address' => $user->email_address,
                    'user_type_id' => $borrower->user_type_id, // Add this field
                ]);
            } else {
                // If no borrower record is found, set a default user_type_id (e.g., staff)
                session()->set('user', [
                    'id' => $user->id,
                    'email_address' => $user->email_address,
                    'user_type_id' => 1, // Default to staff
                ]);
            }

            // Redirect based on user type
            return redirect()->to(config('Auth')->loginRedirect());
        }

        // If login fails, redirect back with an error message
        return redirect()->back()->with('error', 'Invalid login credentials.');
    }
}