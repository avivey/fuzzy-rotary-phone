/**
 * @provides javelin-behavior-aviv-stl-viewer
 * @javelin
 */

JX.behavior('aviv-stl-viewer', function (config, statics) {
  var element = JX.$(config.element_id);

  new StlViewer(
    element,
    {
      models: [{filename:config.stl_uri}]
    }
  );

});
