<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HashBorrowersPasswords extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('borrowers');

        // Fetch all borrowers with unhashed passwords
        $borrowers = $builder->get()->getResult();

        foreach ($borrowers as $borrower) {
            // Hash the password
            $hashedPassword = password_hash($borrower->password, PASSWORD_DEFAULT);

            // Update the borrower record with the hashed password
            $builder->where('borrower_id', $borrower->borrower_id)
                    ->update(['password' => $hashedPassword]);
        }

        echo "Passwords hashed successfully.\n";
    }
}
