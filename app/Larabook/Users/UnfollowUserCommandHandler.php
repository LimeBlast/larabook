<?php namespace Larabook\Users;

use Laracasts\Commander\CommandHandler;

class UnfollowUserCommandHandler implements CommandHandler {


	/**
	 * @var UserRepository
	 */
	protected $userRepository;

	public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}


	/**
	 * Handle the command.
	 *
	 * @param object $command
	 *
	 * @return void
	 */
	public function handle($command)
	{
		$user = $this->userRepository->findById($command->userId);

		$this->userRepository->unfollow($command->userIdToUnfollow, $user);
	}

}