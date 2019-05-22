<?php
/**
 * Get paths for assets
 */
class JsonManifest {
  private $manifest = array();

  public function __construct($manifest_path) {
    if (file_exists($manifest_path)) {
      $this->manifest = json_decode(file_get_contents($manifest_path), true);
    }
  }

  public function get() {
    return $this->manifest;
  }

  public function getPath($key = '', $default = null) {
    $collection = $this->manifest;
    if (is_null($key)) {
      return $collection;
    }
    if (isset($collection[$key])) {
      return $collection[$key];
    }
    foreach (explode('.', $key) as $segment) {
      if (!isset($collection[$segment])) {
        return $default;
      } else {
        $collection = $collection[$segment];
      }
    }
    return $collection;
  }
}

function asset_path($filename) {
  $dist_path = get_stylesheet_directory_uri() . '/';
  $directory = dirname($filename) . '/';
  $file = basename($filename);
  static $manifest;

  if (empty($manifest)) {
    $manifest_path = get_stylesheet_directory() . '/build/' . 'manifest.json';
    $manifest = new JsonManifest($manifest_path);
  }

  $file = 'build/' . $directory . $file;

  if (array_key_exists($file, $manifest->get())) {
    return $dist_path . $manifest->get()[$file];
  }

  return $dist_path . $file;
}
