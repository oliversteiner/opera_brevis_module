/**
 * @file
 * Global utilities.
 *
 */
(function($, Drupal) {
  'use strict';

  Drupal.behaviors.opera_brevis_module = {
    attach: function(context) {

          // Open URL for Dashboard
          $('.toolbar-icon-dashboard').on('click', function () {
            window.location = '/admin/dashboard';
          });
        }

  };
})(jQuery, Drupal);
