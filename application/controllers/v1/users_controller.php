<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_Controller extends MY_Controller
{
    // uri /api/v1/users
    // return all user
    public function index()
    {
        $faker = Faker\Factory::create();

        $user = new Model\User();
        $user->name = $faker->name;
        $user->save();

        $users = Model\User::result()->all()->to_json();
        echo ($users);
    }
}