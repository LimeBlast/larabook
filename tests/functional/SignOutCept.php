<?php
$I = new FunctionalTester($scenario);
$I->am('a Larabook member');
$I->wantTo('login to my Larabook account');

// sign in
$I->signIn();
$I->seeInCurrentUrl('/statuses');
$I->see('Welcome back');
$I->assertTrue(Auth::check());

// sign out
$I->click('Log Out');
$I->seeCurrentUrlEquals('');
$I->see('You have now been logged out');
$I->assertFalse(Auth::check());