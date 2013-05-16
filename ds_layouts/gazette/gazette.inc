<?php

/**
 * @file
 * 
 */
function ds_gazette() {
  return array(
    'label' => t('Gazette layout'),
    'regions' => array(
    	'title' => t('Title'),
      'main' => t('Main Text - fixed width'),
      'figure' => t('Figure Image & Caption - flexible'),
    ),
    'css' => TRUE,
    'image' => TRUE,
  );
}