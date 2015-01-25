<?php
  /* Directory Name(s) */
  // change to the directory where you keep the sites
  $dir = array("Users/psuteparuk/www/sites/*");

  /* Top Level Domain */
  $tld = 'dev';

  /*
   * Development tools you want displayed in the top navigation bar. Each item should be
   * an array containing keys 'name' and 'url'.
   */
  $devtools = array(
      array('name' => 'GitHub', 'url' => 'https://github.com/psuteparuk')
    );

  /*
   * Options for sites being displayed. These are completely optional, if you don't set
   * anything there are default options which will take over.
   */
  $siteoptions = array(
      // 'dirname' => 'Display Name',
      // 'dirname' => array('displayname' => 'Display Name', 'adminurl' => 'https://something/admin'),
    );

  /*
   * Directory names of sites you want to hide from the page. If you're using multiple directories
   * in $dir be aware that any directory names in the array below that show up in any of
   * your directories will be hidden.
   */
  $hiddensites = array('home',);
?>