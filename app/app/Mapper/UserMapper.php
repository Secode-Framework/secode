<?php

namespace App\Mapper;

use App\Models\User;

class UserMapper
{

    public static function requestToModel()
    {
        $arrayParameters = request()->request->all();
        return self::arrayToModel($arrayParameters);
    }

    public static function arrayToModel($array)
    {
        $user = new User();

        $user->setId($array['id'] ?? null)
            ->setUsername($array['username'] ?? null)
            ->setPassword($array['password'] ?? null);

        return $user;
    }

    public static function modelToArray($user)
    {

        $array = [];
        if ($user) {
            $array = [
                'id' => $user->getId(),
                'username' => $user->getUsername(),
                'password' => $user->getPassword(),
                'estado' => $user->getEstado(),
            ];
        }

        return $array;
    }

    public static function listModelToArray($listaUsuario)
    {

        $listaArray = [];

        foreach ($listaUsuario as $user) {
            $listaArray[] = self::modelToArray($user);
        }

        return $listaArray;
    }
}
