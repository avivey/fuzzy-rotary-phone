<?php

final class StlViewApplication extends PhabricatorApplication {

  public function getName() {
    return 'STL View';
  }

  public function isLaunchable() {
    return false;
  }

}
