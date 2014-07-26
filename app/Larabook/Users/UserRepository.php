<?php namespace Larabook\Users;

class UserRepository {

	/**
	 * Persist a user
	 *
	 * @param User $user
	 *
	 * @return mixed
	 */
	public function save(User $user)
	{
		return $user->save();
	}

	/**
	 * Get a paginated list of all users
	 *
	 * @param $howMany
	 *
	 * @return mixed
	 */
	public function getPaginated($howMany = 25)
	{
		return User::orderBy('username', 'asc')->paginate($howMany);
	}

	/**
	 * Fetch a user by their username
	 *
	 * @param $username
	 *
	 * @return mixed
	 */
	public function findByUsername($username)
	{
		return User::with('statuses')->whereUsername($username)->first();
	}

}