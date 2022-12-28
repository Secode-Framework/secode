<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

interface UserController
{
	function saveUser();


	function listUser();


	function activarUser($id);


	function desactivarUser($id);


	function updateUser($id);


	function findUser($id);


	function deleteUser($id);
}
