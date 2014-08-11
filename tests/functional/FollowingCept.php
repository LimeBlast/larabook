<?php
$I = new FunctionalTester($scenario);

$I->am('a larabook user');
$I->wantTo('follow other larabook users');

$I->haveAnAccount(['username' => 'OtherUser']);
$I->signIn();

// find the relevent user
$I->click('Browse Users');
$I->click('OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');

// when I follow that user
$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Unfollow OtherUser');

// when i unfollow that user
$I->click('Unfollow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Follow OtherUser');