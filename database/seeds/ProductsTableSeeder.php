<?php
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder {
    public function run() {
        $products = ["Accord", "Civic", "City", "CR-V", "Jazz", "Freed", "Mobilio"];
        $descriptions = ["Tipe manual", "Tipe Otomatis"];
        foreach ($products as $product) {
        DB::insert('insert into products (name, description, price, stock, published) values (:name, :description, :price, :stock, :published)', [
        'name' => $product,
        'description' => $descriptions[rand(0,1)],
        'price' => rand(100,800) * 1000000,
        'stock' => rand(10,40),
        'published' => rand(0,1)
        ]);
        }
        $this->command->info('Berhasil menambah mobil!');
    }
}
?>
