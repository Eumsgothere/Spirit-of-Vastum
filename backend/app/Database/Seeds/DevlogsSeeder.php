<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DevlogsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title'   => 'Devlog #0.1 - Finishing Initial Models',
                'date'    => '2026-05-08',
                'content' => 'We have completed the initial models for Spirit of Vastum. The main character Bill, supporting characters, and environmental assets are now in place. This milestone allows us to move forward with gameplay mechanics and level design.',
            ],
            [
                'title'   => 'Devlog #0.2 - Gameplay Foundations',
                'date'    => '2026-05-08',
                'content' => 'Core gameplay systems such as movement, interaction, and waste collection have been implemented. These foundations will be refined as we continue testing and balancing.',
            ],
        ];

        // Insert multiple rows
        $this->db->table('devlogs')->insertBatch($data);
    }
}
