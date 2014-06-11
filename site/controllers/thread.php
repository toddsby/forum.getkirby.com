<?php

return function($site, $pages, $page) {

  $topics = $page->children()->children()->flip()->paginate(50);

  return array(
    'topics'     => $topics,
    'pagination' => $topics->pagination()
  );

};