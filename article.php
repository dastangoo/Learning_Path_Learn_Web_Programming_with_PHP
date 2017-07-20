<?php
/**
 *
 */
class Article
{
  protected $body;
  protected $title;
  function __construct()
  {
    // magically populate properties
  }

  public function getBody() {
    return $this->body;
  }

  public function getTitle() {
    return $this->title;
  }
}
