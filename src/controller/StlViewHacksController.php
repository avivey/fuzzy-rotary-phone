<?php

final class StlViewHacksController extends PhabricatorController {

  public function shouldAllowPublic() {
    return true;
  }

  public function handleRequest(AphrontRequest $request) {

    static $allowed_names = array(
      'webgl_detector.js' => true,
      'CanvasRenderer.js' => true,
      'ie_polyfills.js' => true,
      'load_stl.min.js' => true,
      'OrbitControls.js' => true,
      'parser.min.js' => true,
      'Projector.js' => true,
      'stl_viewer.min.js' => true,
      'three.min.js' => true,
      'TrackballControls.js' => true,
    );

    $path = $request->getURIData('path');

    if (!idx($allowed_names, $path)) {
      return new Aphront404Response();
    }

    $response = new AphrontFileResponse();
    $response->setMimeType('application/javascript');

    $external_root =phutil_get_library_root('stlview').'/../externals/';

    $path = $external_root.$path;
    $response->setContent(file_get_contents($path));

    return $response;
  }

}
