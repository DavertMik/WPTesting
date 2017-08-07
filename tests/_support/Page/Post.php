<?php
namespace Page;

class Post
{
    protected $i;

    public function __construct(\AcceptanceTester $I)
    {
        $this->i = $I;
    }

    protected $postId;
    protected $postTitle;


    /**
     * @When I create and publish post :title :content
     *
     * @param $title
     * @param $body
     * @return mixed
     */
    public function createNewPost($title, $body)
    {
        $this->i->amOnPage('wp-admin/post-new.php');
        $this->i->submitForm('#post', [
            'post_title' => $title,
            'content' => $body
        ], 'publish');
        $this->i->see('Post published');
        $this->postTitle = $title;

        return $this->postId = $this->i->grabFromCurrentUrl('~post=(\d+)~');
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

     /**
      * @Then I should see it on site
      */
      public function iShouldSeeItOnSite()
      {
          if (!$this->postId) throw new \Exception("What is it???");
          $this->i->amOnPage('/?p='.$this->postId);
          $this->i->see($this->postTitle, 'h1');
      }

}
