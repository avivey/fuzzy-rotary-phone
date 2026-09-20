<?php

final class StlViewDocEngine extends PhabricatorDocumentEngine {

  const ENGINEKEY = 'stl.by.aviv';

  public function getViewAsLabel(PhabricatorDocumentRef $ref) {
    return pht('Render as STL solid');
  }


  protected function canRenderDocumentType(PhabricatorDocumentRef $ref) {
    $mime_type = $ref->getMimeType();

    if (!$ref->getFile()) {
      return false;
    }

    switch ($mime_type) {
      case 'model/stl':
        return true;
      case 'text/plain':
        // TODO if starts with `solid `.
        return true;
    }

    return false;
  }

  protected function newDocumentContent(PhabricatorDocumentRef $ref) {

    $raw_stl_uri = $ref->getFile()
      ->getViewURI();

    $element_id = 'stl_viewer_div';

    $container = phutil_tag(
      'div',
      array(
        'class' => 'document-engine-image ',
        'style' => 'height: 600px;',
        'id' => $element_id,
      ));

    Javelin::initBehavior(
      'aviv-stl-viewer',
      array(
        'element_id' => $element_id,
        'stl_uri' => $raw_stl_uri,
      ),
      'stlview');

    return $container;
  }

  protected function getContentScore(PhabricatorDocumentRef $ref) {
    return 0;
  }

}
