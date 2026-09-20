/**
 * @requires online_3d_viewer
 * @provides javelin-behavior-aviv-stl-viewer
 *
 */

JX.behavior('aviv-stl-viewer', function (config, statics) {
  var element = JX.$(config.element_id);

  OV.Init3DViewerElements ();
});
