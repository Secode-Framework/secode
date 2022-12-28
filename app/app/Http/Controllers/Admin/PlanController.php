<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

interface PlanController
{
	function savePlan();


	function listPlan();


	function activarPlan($id);


	function desactivarPlan($id);


	function updatePlan($id);


	function findPlan($id);


	function deletePlan($id);
}
