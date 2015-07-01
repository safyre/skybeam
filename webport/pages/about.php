<?php
include_once dirname(__FILE__) . '/Content.class.php';
include_once dirname(__FILE__) . '/CommonContents.php';
include_once dirname(__FILE__) . '/../include/functions.php';

class About extends Content {

  public static function populate(Page $page) {

    $page = CommonContents::populate($page);
    $HTMLdir = dirname(__FILE__) . "/../html";

    $page->title = "nafSadh | about";
    $page->description = "about Khan 'Sadh' Mostafa";

    $page->heading1 = "about";
    $page->heading2 = "nafSadh";
    $page->h1color = "darkBlue";
    $page->h2color = "blue";

    //$page->rightCrown = prepareHtml("$HTMLdir/trilink.html", array('rpath'=>$page->rpath));
    //$page->htText = prepareHtml("$HTMLdir/navigpane.html", null);

    $page->pageContent = prepareHtml("$HTMLdir/introduction.html", array('rpath' => $page->rpath));

    return $page;
  }
}
