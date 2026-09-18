<?php

final class StlViewCelerityResources extends CelerityResourcesOnDisk {

  public function getName() {
    return 'stlview';
  }

  public function getPathToResources() {
    return $this->getPath('../rsrc');
  }

  public function getPathToMap() {
    return $this->getPath('celerity/map.php');
  }

  private function getPath($to_file) {
    return (phutil_get_library_root('stlview')).'/'.$to_file;
  }
}
