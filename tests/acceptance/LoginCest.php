<?php
class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function notLoginWithInvalidPassword(AcceptanceTester $I)
    {
        // ARRANGE
        $I->amOnPage('/wp-admin');
        // ACT
        $I->submitForm('#loginform', [
            'log' => 'admin',
            'pwd' => 'admins'
        ]);
        // ASSERT
        $I->seeElement('h1');

        // check for URL to include /login (use seeInCurrentUrl)
        // check for error message on a page
    }
}
