<?php

final class StlViewApplication extends PhabricatorApplication {

  public function getName() {
    return 'STL View';
  }

  public function isLaunchable() {
    return false;
  }

public function getBaseURI()
{
  return '/stlview/';
}

  public function getRoutes() {
    return array(
      '/stlview/' => array(
        'hackjs/(?P<path>.*)' => StlViewHacksController::class,
      ),
    );
  }

}
