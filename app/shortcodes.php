<?php namespace MapShort;

/** @var \Herbert\Framework\Shortcode $shortcode */

$shortcode->add(
  'gmap',
  function($lat='-6.1753924', $long='106.8271528')
  {
    $zoom = 9900;
    $width = 800;
    $height= 250;
    $url = 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d'.$zoom.'!2d'.$long.'!3d'.$lat.'!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1407089338193';
    $iframe = '<iframe src="'.$url.'" width="'.$width.'" height="'.$height.'" frameborder="0" style="border:0"></iframe>';
    return $iframe;
  } 
);