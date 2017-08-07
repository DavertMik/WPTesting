<?php


class PostCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->loginAsAdmin();
    }

    // tests
    public function createAndPublishANewPost(AcceptanceTester $I, \Page\Post $postPage)
    {
        $id = $postPage->createNewPost('My first post' . sq('post'), 'Some Body');
        $I->amOnPage("/?p=$id");
        $I->see('My first post' . sq('post'), 'h1');
        $I->see('Just another WordPress site');
    }

    public function editPost(AcceptanceTester $I, \Page\Post $postPage)
    {
        $firstName = 'JustATitle';
        $I->amGoingTo('create new post for editing');
        $id = $postPage->createNewPost($firstName, 'Some Body');
        $I->expect('it is int the list');
        $postPage->seePostIsInList($firstName);
        $I->amGoingTo('updtae the blogpost');
        $I->amOnPage("/wp-admin/post.php?post=$id&action=edit");
        $I->submitForm('#post', [
            'post_title' => sq('post2'),
            'content' => 'Other Content'
        ], 'save');
        $postPage->seePostIsInList(sq('post2'));
        $postPage->dontSeePostIsInList($firstName);
    }

    public function deletePost(AcceptanceTester $I, \Page\Post $postPage)
    {
        $id = $postPage->createNewPost(sq('post'), 'Some Body');
        $postPage->seePostIsInList(sq('post'));
        $I->amOnPage("/wp-admin/post.php?post=$id&action=edit");
        $I->click('Move to Trash');
        $postPage->dontSeePostIsInList(sq('post'));
    }


}
