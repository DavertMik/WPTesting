<?php
namespace Page;

class Post
{
    protected $i;

    public function __construct(\AcceptanceTester $I)
    {
        $this->i = $I;
    }

    public function createNewPost($title, $body)
    {
        $this->i->amOnPage('wp-admin/post-new.php');
        $this->i->submitForm('#post', [
            'post_title' => $title,
            'content' => $body
        ], 'publish');
        $this->i->see('Post published');
        return $this->i->grabFromCurrentUrl('~post=(\d+)~');
   }

    public function seePostIsInList($title)
    {
        $this->i->click('All Posts');
        $this->i->see($title, 'table.posts .row-title');
    }

    public function dontSeePostIsInList($title)
    {
        $this->i->click('All Posts');
        $this->i->dontSee($title, 'table.posts .row-title');
   }



}
