<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
   
    public function run()
    {
        Loan::create([
                'id'=>1,
                'car_id' => 1,
                'user' => 'Danish',
                'loan_date' => '2024-06-01',
                'return_date' => '2024-06-07',
                'total_cost' => 100000,
                'status' => 'approved',
        ]);

        Loan::create([
            'id'=>2,
            'car_id' => 2,
            'user' => 'Topik',
            'loan_date' => '2024-09-01',
            'return_date' => '2024-06-08',
            'total_cost' => 200000,
            'status' => 'pending',
    ]);

    Loan::create([
        'id'=>3,
        'car_id' => 3,
        'user' => 'Fayyad',
        'loan_date' => '2024-10-01',
        'return_date' => '2024-11-07',
        'total_cost' => 60000,
        'status' => 'rejected',
]);

Loan::create([
    'id'=>4,
    'car_id' => 4,
    'user' => 'Budi',
    'loan_date' => '2024-06-01',
    'return_date' => '2024-06-07',
    'total_cost' => 100000,
    'status' => 'approved',
]);

Loan::create([
    'id'=>5,
    'car_id' => 5,
    'user' => 'Luhut',
    'loan_date' => '2024-06-01',
    'return_date' => '2025-06-07',
    'total_cost' => 150000,
    'status' => 'approved',
]);

Loan::create([
    'id'=>6,
    'car_id' => 6,
    'user' => 'Bowo',
    'loan_date' => '2024-11-01',
    'return_date' => '2025-06-07',
    'total_cost' => 100000,
    'status' => 'rejected',
]);

Loan::create([
    'id'=>7,
    'car_id' => 7,
    'user' => 'Basarudin',
    'loan_date' => '2024-06-01',
    'return_date' => '2024-06-07',
    'total_cost' => 100000,
    'status' => 'approved',
]);

Loan::create([
    'id'=>8,
    'car_id' => 8,
    'user' => 'Kimberly',
    'loan_date' => '2024-06-01',
    'return_date' => '2024-06-07',
    'total_cost' => 100000,
    'status' => 'approved',
]);


    }
}
