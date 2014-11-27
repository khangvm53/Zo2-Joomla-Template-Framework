/**
 * Zo2 (http://www.zootemplate.com/zo2)
 * A powerful Joomla template framework
 *
 * @link        http://www.zootemplate.com/zo2
 * @link        https://github.com/cleversoft/zo2
 * @author      ZooTemplate <http://zootemplate.com>
 * @copyright   Copyright (c) 2014 CleverSoft (http://cleversoft.co/)
 * @license     GPL v2
 */

/**
 *
 * @param {type} window
 * @param {type} zo2
 * @param {type} $
 * @returns {undefined}
 */
(function (window, zo2, $) {
    /**
     * Admin preset theme color
     */
    zo2.admin.utilities = {

        /**
         * Element variables
         */
        _elements: {

        },

        /**
         *  Initial events for preset theme
         * @returns {undefined}
         */
        _init: function () {
            this.logoImage();
            this.radioButton();
            this.tabs();
        },

        logoImage: function() {
            $('.logo-type-switcher').on('click', 'button', function () {
                var $this = $(this);
                var $container = $this.closest('.field-logo-container');
                var $buttons = $this.closest('.logo-type-switcher').find('button');
                $buttons.removeClass('active btn-success');
                $this.addClass('active btn-success');

                if ($this.hasClass('logo-type-none')) {
                    $container.find('.logo-image').removeClass('show').fadeOut(300);
                    $container.find('.logo-text').removeClass('show').fadeOut(300);
                }
                else if ($this.hasClass('logo-type-image')) {
                    $container.find('.logo-image').removeClass('show').fadeIn(300);
                    $container.find('.logo-text').removeClass('show').fadeOut(300);
                }
                else if ($this.hasClass('logo-type-text')) {
                    $container.find('.logo-image').removeClass('show').fadeOut(300);
                    $container.find('.logo-text').removeClass('show').fadeIn(300);
                }
                return false;
            });

            $('.field-logo-container').on('click', '.btn-remove-preview', function () {
                var $this = $(this);
                var $container = $this.closest('.field-logo-container');
                var $preview = $container.find('.logo-preview');
                var $input = $container.find('.logoInput');

                $preview.empty();
                return false;
            });
        },

        radioButton: function() {
            /*============For joomla 2.5==============*/
            function radio_button() {
                jQuery('.btn-group label:not(.active)').on("click", function () {
                    var label = jQuery(this);
                    var input = label.prev();

                    if (!input.prop('checked')) {
                        label.closest('.btn-group').find('label').removeClass('btn-success').removeClass('btn-danger').removeClass('btn-primary');
                        if (input.val() == '') {
                            label.addClass('active btn-primary');
                        } else if (input.val() == 0) {
                            label.addClass('active btn-danger');
                        } else {
                            label.addClass('active btn-success');
                        }
                        input.prop('checked', true);
                    }
                });
            }
            // Turn radios into btn-group

            radio_button();

            $('.btn-group label').on("click", function () {
                radio_button();
            });

            $('.btn-group input[checked=checked]').each(function () {
                var label = $(this).next();
                if ($(this).val() == '') {
                    label.addClass('active btn-primary');
                } else if ($(this).val() == 0) {
                    label.addClass('active btn-danger');
                } else {
                    label.addClass('active btn-success');
                }
            });


            $('.btn-group-onoff > button').on('click', function (e) {
                var $this = $(this);
                var $container = $this.closest('.btn-group-onoff');

                $container.find('button').removeClass('active btn-success btn-danger');
                if ($this.hasClass('btn-on'))
                    $this.addClass('active btn-success');
                else
                    $this.addClass('active btn-danger');

                return false;
            });
        },
        tabs: function() {
            // cause joomla does not have bootstrap tabs :|
            $('.zo2-tabs').on('click', 'li a', function () {
                var $this = $(this);
                var $tabs = $this.closest('.zo2-tabs');
                var $actives = $tabs.find('.active');
                $actives.removeClass('active');
                $actives.each(function () {
                    var $activeTab = $('#' + $(this).attr('data-toggle'));
                    $activeTab.removeClass('active');
                });
                $this.addClass('active');
                $('#' + $this.attr('data-toggle')).addClass('active');
            });
        }
    }
    /**
     * Init plugin
     * Put all of your init code into _init
     */
    $(document).ready(function () {
        zo2.admin.utilities._init();
    });
})(window, zo2, zo2.jQuery);