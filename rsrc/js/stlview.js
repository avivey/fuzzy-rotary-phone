/**
 * @requires online_3d_viewer
 * @provides javelin-behavior-aviv-stl-viewer
 *
 */
JX.behavior('aviv-stl-viewer', function (config, statics) {
  var element = JX.$(config.element_id);

  var viewer = new OV.EmbeddedViewer(
    element,
    {
      defaultColor : new OV.RGBColor(48, 213, 220),
    }
  );

  viewer.LoadModelFromUrlList([
    config.stl_uri
  ]);
});
