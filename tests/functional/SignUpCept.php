<?php
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a Larabook account');

$I->amOnPage('/');
$I->click('Sign Up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('username', 'JohnDoe');
$I->fillField('email', 'john@example.com');
$I->fillField('password', 'demo');
$I->fillField('password_confirmation', 'demo');
$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->see('You are now a Larabook member!');

$I->seeRecord('users', [
	'username' => 'JohnDoe',
	'email'    => 'john@example.com',
]);

$I->assertTrue(Auth::check());