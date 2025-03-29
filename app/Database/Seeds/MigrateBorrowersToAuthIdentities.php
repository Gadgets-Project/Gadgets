<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MigrateBorrowersToAuthIdentities extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $borrowersTable = $db->table('borrowers');
        $authIdentitiesTable = $db->table('auth_identities');

        // Fetch all borrowers
        $borrowers = $borrowersTable->get()->getResult();

        foreach ($borrowers as $borrower) {
            $existingIdentity = $authIdentitiesTable
                ->where('type', 'email_password')
                ->where('secret', $borrower->email_address)
                ->get()
                ->getFirstRow();

            if ($existingIdentity) {
                // Skip this borrower if the email already exists
                echo "Skipping duplicate email: {$borrower->email_address}\n";
                continue;
            }
            // Insert the borrower into the auth_identities table
            $authIdentitiesTable->insert([
                //'id'           => null, // Set to null for auto-increment
                'user_id'      => $borrower->borrower_id, // Map borrower_id to user_id
                'type'         => 'email_password', // Type of identity
                'name'         => null, // Set to null or a default value if not applicable
                'secret'       => $borrower->email_address, // Email as the identifier
                'secret2'      => $borrower->password, // Hashed password
                'expires'      => null, // Set to null if no expiration is required
                'extra'        => null, // Set to null or add additional data if needed
                'force_reset'  => 0, // Default to 0 (no forced reset)
                'last_used_at' => null, // Set to null if not applicable
                'created_at'   => date('Y-m-d H:i:s'), // Current timestamp
                'updated_at'   => date('Y-m-d H:i:s'), // Current timestamp
            ]);
        }

        echo "Borrowers migrated to auth_identities successfully.\n";
    }
}