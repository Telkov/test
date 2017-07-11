<?php

class Users
{
    public function index()
    {
        $users = [
            'admin',
            'admin2',
            'admin3',
        ];
        $data['users'] = $users;
        $data['title'] = 'Hello';

        $view = new View();
        $view->render('users/index', $data);
    }

    public function test()
    {
        echo 'testusers';
    }
}