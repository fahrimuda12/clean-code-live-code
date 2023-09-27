<?php

namespace Database\Seeders;

use App\Models\MenuModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "nama" => "Sandwich",
                "gambar_menu" => "/assets/img/sandwich.png",
                "harga_menu" => "Rp.15.000",
                "rate" => 5,
                "kkal" => 150,
            ],
            [
                "nama" => "Apel",
                "gambar_menu" => "/assets/img/sandwich.png",
                "harga_menu" => "Rp.15.000",
                "rate" => 5,
                "kkal" => 150,
            ],
            [
                "nama" => "Mangga",
                "gambar_menu" => "/assets/img/sandwich.png",
                "harga_menu" => "Rp.15.000",
                "rate" => 5,
                "kkal" => 150,
            ],
            [
                "nama" => "Markisa",
                "gambar_menu" => "/assets/img/sandwich.png",
                "harga_menu" => "Rp.15.000",
                "rate" => 5,
                "kkal" => 150,
            ],
            [
                "nama" => "Burger",
                "gambar_menu" => "/assets/img/sandwich.png",
                "harga_menu" => "Rp.15.000",
                "rate" => 5,
                "kkal" => 150,
            ]
        ];

        foreach($datas as $data){
            MenuModel::insert([
                "nama_menu" => $data["nama"],
                "gambar_menu" => $data["gambar_menu"],
                "harga_menu" => $data["harga_menu"],
                "rate" => $data["rate"],
                "kkal" => $data["kkal"],
            ]);
        }
    }
}
