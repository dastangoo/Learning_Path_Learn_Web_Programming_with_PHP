<?php
class Website
{
  public $title = '';
  public $meta = '';
  public $body = '';

  public function docType()
  {
    return '<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.xml "'
           . PHP_EOL
           . '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">' . PHP_EOL;
  }
  public function head()
  {
      return '<head>' . PHP_EOL . $this->title . $this->meta . '</head>' . PHP_EOL;
  }
  public function setTitle($title)
  {
    $this->title = "<title>$title</title>";

  }
  public function setMeta($tags)
  {
    $this->meta .= '<meta ';
    foreach ($tags as $key => $value) {
      $this->meta .= $key . '="' . $value . '" ';
    }
    $this -> meta .= '/>' . PHP_EOL;
  }
  public function setBody()
  {
    $this->body = 'body' . PHP_EOL . $content . '</body>' . PHP_EOL;
  }
  public function render()
  {
    $output = '';
    $output .= $this->docType();
    $output .= $this->head();
    $output .= $this->body;
    $output .= '</html>' . PHP_EOL;
    return $output;
  }
}
