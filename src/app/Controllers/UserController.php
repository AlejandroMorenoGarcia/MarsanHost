<?php

namespace App\Controllers;

use App\Class\User;
use App\Interfaces\ControllerInterface;
use App\Models\UserModel;

class UserController implements ControllerInterface
{

    public function index()
    {
        $usuarios = UserModel::getUsers();
        var_dump($usuarios);
    }

    public function show(int $id)
    {
        $usuario = UserModel::getUserById($id);
        var_dump($usuario);
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store()
    {

    }

    public function update(int $id)
    {
        // TODO: Implement update() method.
    }

    public function edit(int $id)
    {
        // TODO: Implement edit() method.
    }

    public function destroy(int $id)
    {
        // TODO: Implement destroy() method.
    }
}