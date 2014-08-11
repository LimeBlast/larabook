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

	/**
	 * Find a user by their id
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	public function findById($id)
	{
		return User::findOrFail($id);
	}

	/**
	 * Follow a larabook user
	 *
	 * @param integer $userIdToFollow
	 * @param User    $user
	 *
	 * @return mixed
	 */
	public function follow($userIdToFollow, User $user)
	{
		return $user->followedUsers()->attach($userIdToFollow);
	}

	/**
	 * Unfollow a larabook user
	 *
	 * @param integer $userIdToUnfollow
	 * @param User    $user
	 *
	 * @return mixed
	 */
	public function unfollow($userIdToUnfollow, User $user)
	{
		return $user->followedUsers()->detach($userIdToUnfollow);
	}

}