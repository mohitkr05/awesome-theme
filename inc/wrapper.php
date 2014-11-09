<?php
/**
 * Theme wrapper
 *
 * @link http://awesome.io/an-introduction-to-the-awesome-theme-wrapper/
 * @link http://scribu.net/wordpress/theme-wrappers.html
 */
function awesome_template_path() {
  return Awesome_Wrapping::$main_template;
}

function awesome_sidebar_path() {
  return new Awesome_Wrapping('templates/sidebar.php');
}

class Awesome_Wrapping {
  // Stores the full path to the main template file
  static $main_template;

  // Stores the base name of the template file; e.g. 'page' for 'page.php' etc.
  static $base;

  public function __construct($template = 'layouts/base.php') {
    $this->slug = basename($template, '.php');
    $this->templates = array($template);

    if (self::$base) {
      $str = substr($template, 0, -4);
      array_unshift($this->templates, sprintf($str . '-%s.php', self::$base));
    }
  }

  public function __toString() {
    $this->templates = apply_filters('awesome_wrap_' . $this->slug, $this->templates);
    return locate_template($this->templates);
  }

  static function wrap($main) {
    self::$main_template = $main;
    self::$base = basename(self::$main_template, '.php');

    if (self::$base === 'index') {
      self::$base = false;
    }

    return new Awesome_Wrapping();
  }
}
add_filter('template_include', array('Awesome_Wrapping', 'wrap'), 99);
