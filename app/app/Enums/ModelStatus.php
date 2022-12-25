<?php

namespace App\Enums;

enum ModelStatus: int
{
    case BAJA = -2;
    case ELIMINADO = -1;
    case NUEVO = 1;
    case ACTIVO = 2;
    case INACTIVO = 3;
    case CERRADO = 4;
    case APROBADO = 5;
    case ENPROCESO = 6;
}
