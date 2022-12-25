<?php

namespace App\Exceptions;

use Secode\Validation\MandatoryFields;
use Secode\Validation\RequiredParameterExceptionHandler as Handler;
use App\Models\User;

class RequiredParameterExceptionHandler extends Handler
{
    public static function checkParamsForLogin(User $user)
    {
        $mandatoryFields = (new MandatoryFields())
            ->setNotNullFields([
                "username" => $user->getUsername(),
                "password" => $user->getPassword()
            ]);

        self::validateMandatoryFields($mandatoryFields);
    }
}
