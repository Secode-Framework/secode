<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ModelStatus;
use App\Exceptions\RequiredParameterExceptionHandler;
use App\Http\Controllers\Controller;
use App\Mapper\UserMapper;
use App\Models\User;
use App\Service\UserService;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    private UserService $userService;

    public function __construct()
    {
        $this->userService = app(UserService::class);
    }

    public function login(): JsonResponse
    {
        $user = (new User())
            ->setUsername(request('username'))
            ->setPassword(request('password'));

        RequiredParameterExceptionHandler::checkParamsForLogin($user);

        if (!auth()->attempt(['username' => $user->getUsername(), 'password' => $user->getPassword()])) {
            return $this->sendMessageFail(
                "No existen coincidencias entre el usuario y la contraseña"
            );
        } else {
            $user = auth()->user();

            if ($user->getEstado() == ModelStatus::ACTIVO->value) {
                return $this->sendDataSuccessful(
                    (object)[
                        "token" => $user->createToken("API TOKEN")->plainTextToken
                    ],
                    "Se ha iniciado sesión"
                );
            } else {
                return $this->sendMessageFail(
                    "Este usuario está desactivado"
                );
            }
        }
    }

    public function registrar()
    {
        $user = UserMapper::requestToModel();

        $this->userService->guardar($user);

        return $this->sendMessageSuccessful("Se ha registrado correctamente");
    }

    public function checkLogin()
    {
        return response()->json([]);
    }
}

