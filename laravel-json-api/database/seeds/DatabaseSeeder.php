<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        DB::table('books')->truncate();
        DB::table('authors')->truncate();
        DB::table('genres')->truncate();
        DB::table('publishers')->truncate();
        DB::table('languages')->truncate();
        DB::table('members')->truncate();
        DB::table('member_types')->truncate();
        DB::table('punishments')->truncate();
        Schema::enableForeignKeyConstraints();

        $this->call(UsersSeeder::class);
        $this->call(BooksSeeder::class);
        $this->call(AuthorsSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(PublishersSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(MemberTypeSeeder::class);
        $this->call(PunishmentSeeder::class);
    }
}
