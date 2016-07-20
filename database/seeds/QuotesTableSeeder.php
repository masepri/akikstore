<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into quotes (author, type, quote) values (:author, :type, :quote)', [
			'author' => "Mario Teguh",
			'type' => "inspiration",
			'quote' => "Jadilah pria baik-baik."
		]);

		DB::insert('insert into quotes (author, type, quote) values (:author, :type, :quote)', [
			'author' => "Andrie Wongso",
			'type' => "inspiration",
			'quote' => "1000 orang tidak percaya keamampuan kita, tidak masalah."
		]);

		DB::insert('insert into quotes (author, type, quote) values (:author, :type, :quote)', [
			'author' => "Bob Sadino",
			'type' => "inspiration",
			'quote' => "Bergayalah sesuai isi dompetmu."
		]);

		$this->command->info('Berhasil menambah 3 quotes!');
    }
}
