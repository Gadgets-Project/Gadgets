<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PopulateUsersFromBorrowers extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $borrowersTable = $db->table('borrowers');
        $usersTable = $db->table('users');

        // Fetch all borrowers
        $borrowers = $borrowersTable->get()->getResult();

        foreach ($borrowers as $borrower) {
            // Check if the user already exists in the users table
            $existingUser = $usersTable->where('id', $borrower->borrower_id)->get()->getFirstRow();

            if ($existingUser) {
                // Skip if the user already exists
                echo "Skipping existing user: {$borrower->borrower_id}\n";
                continue;
            }

            // Insert the borrower into the users table
            $usersTable->insert([
                'id'         => $borrower->borrower_id, // Use borrower_id as the user ID
                //'email_address'      => $borrower->email_address, // Email address
                'username'   => $borrower->email_address, // Use email as username (or customize as needed)
                'status'     => 'active', // Default to active
                'status_message' => null, // Set to null or a default value if not applicable
                'active'     => 1, // Default to 1 (active)
                'last_active' => null, // Set to null if not applicable
                //'password'   => $borrower->password, // Hashed password
                'created_at' => date('Y-m-d H:i:s'), // Current timestamp
                'updated_at' => date('Y-m-d H:i:s'), // Current timestamp
                'deleted_at' => null, // Set to null if not applicable
                'user_type_id' => $borrower->user_type_id, // Borrower's user type
            ]);
        }

        echo "Users table populated successfully.\n";
    }
}