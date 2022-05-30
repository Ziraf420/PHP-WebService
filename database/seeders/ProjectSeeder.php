<?php

namespace Database\Seeders;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
                [
                    'nama'=>'Menggambar Pemandangan',
                    'image' => 'https://raw.githubusercontent.com/Sinagafrinaldo/Prak2-PWL-ReactJS/main/src/assets/p1.jpg',

                ],
                [
                    'nama'=>'Memfoto Pemandangan',
                    'image' => 'https://raw.githubusercontent.com/Sinagafrinaldo/Prak2-PWL-ReactJS/main/src/assets/p2.jpg',

                ],
                [
                    'nama'=>'Berenang di Sungai',
                    'image' => 'https://raw.githubusercontent.com/Sinagafrinaldo/Prak2-PWL-ReactJS/main/src/assets/p3.jpg',

                ],
                [
                    'nama'=>'Mencari Ikan di Sungai',
                    'image' => 'https://raw.githubusercontent.com/Sinagafrinaldo/Prak2-PWL-ReactJS/main/src/assets/p4.jpg',

                ],
                [
                    'nama'=>'Memfoto Sungai Lagi',
                    'image' => 'https://raw.githubusercontent.com/Sinagafrinaldo/Prak2-PWL-ReactJS/main/src/assets/p5.jpg',

                ],
                [
                    'nama'=>'Foto Sungai lagi dan lagi',
                    'image' => 'https://raw.githubusercontent.com/Sinagafrinaldo/Prak2-PWL-ReactJS/main/src/assets/p6.jpg',

                ]
            ];
        
            foreach ($data as $data){
                Project::create($data);
            };
    }
}
