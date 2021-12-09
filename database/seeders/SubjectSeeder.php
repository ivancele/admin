<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjects = [
            'English HL' => 'en-hl',
            'English FAL' => 'en-fal',
            'English SAL' => 'en-sal',
            'Afrikaans HL' => 'af-hl',
            'Afrikaans FAL' => 'af-fal',
            'Afrikaans SAL' => 'af-sal',
            'IsiZulu HL' => 'zu-hl',
            'IsiZulu FAL' => 'zu-fal',
            'IsiZulu SAL' => 'zu-sal',
            'Physical Sciences' => 'physics-sc',
            'Life Sciences' => 'life-sc',
            'Agricultural Sciences' => 'agric-sc',
            'Mathematics' => 'maths',
            'Mathematical Literacy' => 'maths-lit',
            'Geography' => 'geog',
            'History' => 'hist',
            'Tourism' => 'tour',
            'Life Orientation' => 'life-or',
        ];

        foreach ($subjects as $subject => $code) {
            Subject::create([
                'name' => $subject,
                'code' => $code,
            ]);
        }
    }
}
