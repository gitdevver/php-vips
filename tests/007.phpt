--TEST--
new_from_file supports optional args
--SKIPIF--
<?php if (!extension_loaded("vips")) print "skip"; ?>
--FILE--
<?php 
  $filename = dirname(__FILE__) . "/images/IMG_0073.JPG";
  $image = vips_image_new_from_file($filename, 
	array("shrink" => 8))["out"];
  $width = vips_image_get($image, "width");
  if ($width == 684) {
	echo "pass";
  }
?>
--EXPECT--
pass
