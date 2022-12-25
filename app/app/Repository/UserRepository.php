<?php

namespace App\Repository;

use App\Enums\ModelStatus;
use App\Models\User;

class UserRepository
{
    public static function guardar(User $user)
    {
        if (!$user->getEstado()) {
            $user->setEstado(ModelStatus::ACTIVO);
        }

        if ($user->getId() > 0) {
            $user->exists = true;
        }

        $user->registrar();
    }

    public static function findById(int $id)
    {
        return User::findById($id);
    }

    public static function getBySearch(string $query)
    {
        return User::where('search', 'like', '%' . $query . '%')->get();
    }

    public static function getAll()
    {
        return User::All();
    }
}
