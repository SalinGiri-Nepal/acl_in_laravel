<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name','=','User')->first();
        $role_admin = Role::where('name','=','Admin')->first();
        $role_author = Role::where('name','=','Author')->first();

        $user = new User();
        $user->name = 'Salin Giri';
        $user->email = 'salin.giri77@user.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'Sajan Thapa';
        $admin->email = 'salin.giri777@admin.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $author = new User();
        $author->name = 'Suman Limbu';
        $author->email = 'salin.giri77@author.com';
        $author->password = bcrypt('author');
        $author->save();
        $author->roles()->attach($role_author);


    }
}
