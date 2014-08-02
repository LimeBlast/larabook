<?php
$I = new FunctionalTester($scenario);

$I->am('a larabook user');
$I->wantTo('follow other larabook users');

$I->haveAnAccount(['username' => 'OtherUser']);
$I->signIn();

$I->click('Browse Users');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');
$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');

$I->see('You are following OtherUser');
$I->dontSee('Follow OtherUser');