<?php

/**
 * @file
 * 
 */
function ds_gazette() {
  return array(
    'label' => t('Gazette layout'),
    'regions' => array(
      'left' => t('Left - fixed width'),
      'right' => t('Right - flexible'),
    ),
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (example_layout.png)
    // 'image' => TRUE,
  );
}