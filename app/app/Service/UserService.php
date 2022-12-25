<?php

namespace App\Service;

use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Hash;
use Secode\Validation\InvalidParameterExceptionHandler;

class UserService
{
    private UserRepository $userRepository;

    public function setUserRepository($userRepository)
    {
        if (!isset($this->userRepository)) {
            $this->userRepository = $userRepository;
        }
    }

    public function guardar(User $user)
    {
        self::validarDatosRegistro($user);

        $user->setPassword(Hash::make($user->getPassword()));

        UserRepository::guardar($user);
    }

    public function validarDatosRegistro(User $user): void
    {
        $error = [];

        if (!$user->getUsername()) {
            $error['username'] = "Ingrese el usuario";
        }

        if (!$user->getPassword()) {
            $error['password'] = "Ingrese la contraseña";
        }

        InvalidParameterExceptionHandler::validateThereAreErrors($error);
    }
}
