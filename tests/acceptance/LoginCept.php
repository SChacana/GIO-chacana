<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

$I->amOnPage('/login/index.php');

$I->fillField('username', 'bastian');
$I->fillField('password', 'Hola.123');
$I->click('loginbtn');
$I->seeLink('Admin Usuario');