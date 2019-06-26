<?php

use Illuminate\Database\Seeder;
use Rooms;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = new SplFileObject('database/seeds/rooms.csv');
      $file->setFlags(SplFileObject::READ_CSV);

      $ary = array();
        foreach($file as $data) {
          array_push($ary, $data);
        }

        array_shift($ary);
        foreach($ary as $data) {
          Rooms::create(
            array(
              'name' => $data[1],
              'price' => $data[2],
              'arrangement' => $data[3],
              'age' => $data[4],
              'address' => $data[5],
              'image' => $data[6],
              'created_at' => $data[7],
              'updated_at' => $data[8],
              'train1' => $data[9],
              'train2' => $data[10],
              'train3' => $data[11]
            )
          );
        }

        // $this->call(UsersTableSeeder::class);
    }
}
