<?php

namespace App\Policies;

use App\Enums\PermissionEnum;
use App\Models\Invitation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvitationPolicy
{
	use HandlesAuthorization;

	/**
	 * Determine whether the user can view any models.
	 *
	 * @param  \App\Models\User  $user
	 * @return \Illuminate\Auth\Access\Response|bool
	 */
	public function viewAny(User $user)
	{
		return $user->tokenCan(PermissionEnum::GET_ALL_INVITATIONS);
	}

	/**
	 * Determine whether the user can view the model.
	 *
	 * @param  \App\Models\User  $user
	 * @param  \App\Models\Invitation  $invitation
	 * @return \Illuminate\Auth\Access\Response|bool
	 */
	public function view(User $user, Invitation $invitation)
	{
		return $user->tokenCan(PermissionEnum::GET_SELECTED_INVITATION);
	}

	/**
	 * Determine whether the user can create models.
	 *
	 * @param  \App\Models\User  $user
	 * @return \Illuminate\Auth\Access\Response|bool
	 */
	public function create(User $user)
	{
		return $user->tokenCan(PermissionEnum::ADD_INVITATION);
	}

	/**
	 * Determine whether the user can update the model.
	 *
	 * @param  \App\Models\User  $user
	 * @param  \App\Models\Invitation  $invitation
	 * @return \Illuminate\Auth\Access\Response|bool
	 */
	public function update(User $user, Invitation $invitation)
	{
		return $user->tokenCan(PermissionEnum::UPDATE_INVITATION);
	}

	/**
	 * Determine whether the user can delete the model.
	 *
	 * @param  \App\Models\User  $user
	 * @param  \App\Models\Invitation  $invitation
	 * @return \Illuminate\Auth\Access\Response|bool
	 */
	public function delete(User $user, Invitation $invitation)
	{
		return $user->tokenCan(PermissionEnum::DELETE_INVITATION);
	}

	/**
	 * Determine whether the user can restore the model.
	 *
	 * @param  \App\Models\User  $user
	 * @param  \App\Models\Invitation  $invitation
	 * @return \Illuminate\Auth\Access\Response|bool
	 */
	public function restore(User $user, Invitation $invitation)
	{
		//
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 *
	 * @param  \App\Models\User  $user
	 * @param  \App\Models\Invitation  $invitation
	 * @return \Illuminate\Auth\Access\Response|bool
	 */
	public function forceDelete(User $user, Invitation $invitation)
	{
		//
	}
}
