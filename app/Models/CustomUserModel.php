<?php

namespace App\Models;

use CodeIgniter\Shield\Models\UserModel;

class CustomUserModel extends UserModel
{
    protected $table = 'auth_users'; // Shield's default table

    /**
     * Override the `findByCredentials` method to check the borrowers table.
     */
    public function findByCredentials(array $credentials)
    {
        // First, check Shield's default auth_users table
        $user = parent::findByCredentials($credentials);

        if ($user) {
            return $user;
        }

        // If not found in auth_users, check the borrowers table
        $borrowersModel = new BorrowerModel();
        $borrower = $borrowersModel->where('email', $credentials['email'])->first();

        if ($borrower) {
            // Map the borrower to a Shield user object
            return (object) [
                'id' => $borrower['id'],
                'email' => $borrower['email'],
                'password_hash' => $borrower['password'], // Ensure this matches Shield's password hashing
                'user_type_id' => $borrower['user_type_id'], // Add custom fields as needed
            ];
        }

        return null; // User not found
    }
}