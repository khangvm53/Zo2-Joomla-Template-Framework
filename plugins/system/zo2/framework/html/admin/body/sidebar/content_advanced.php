<!-- Advanced Tab Pane -->
<div class="tab-pane" id="zo2-advanced">
    <h2><?php echo JText::_('ZO2_ADMIN_SIDEBAR_HEADER_ADVANCED'); ?></h2>
    <button class="btn btn-danger" id="btnClearCache" onClick="zo2.admin.clearCache();
            return false;" data-toggle="button" data-loading-text="Processing..." >Clear cache</button>
    <div class="zo2-divider"></div>

    <!-- Enable RTL -->
    <?php
    echo Zo2Html::field(
            'radio', array(
        'label' => JText::_('ZO2_ADMIN_ENABLE_RTL'),
            ), array(
        'name' => 'jform[params][enable_rtl]',
        'value' => Zo2Factory::get('enable_rtl')
    ));
    ?>
    <!-- Responsive Layout -->
    <?php
    echo Zo2Html::field(
            'radio', array(
        'label' => JText::_('ZO2_ADMIN_RESPONSIVE_LAYOUT'),
            ), array(
        'name' => 'jform[params][responsive_layout]',
        'value' => Zo2Factory::get('responsive_layout')
    ));
    ?>
    <!-- Enable Style Switcher -->
    <?php
    echo Zo2Html::field(
            'radio', array(
        'label' => JText::_('ZO2_ADMIN_ENABLE_STYLE_SWITCHER'),
            ), array(
        'name' => 'jform[params][enable_style_switcher]',
        'value' => Zo2Factory::get('enable_style_switcher')
    ));
    ?>
    <!-- Enable Sticky Menu -->
    <?php
    echo Zo2Html::field(
            'radio', array(
        'label' => JText::_('ZO2_ADMIN_ENABLE_STICKY_MENU'),
            ), array(
        'name' => 'jform[params][enable_sticky_menu]',
        'value' => Zo2Factory::get('enable_sticky_menu')
    ));
    ?>
    <div class="zo2-divider"></div>
    <h2><?php echo JText::_('ZO2_ADMIN_CUSTOM_CSS_JS'); ?></h2>
    <div class="zo2-divider"></div>
    <div class="control-group no-margin no-label">
        <?php
        $value = Zo2Factory::getFramework()->getAssetsFile('zo2/css/custom.css');
        if (strpos($value, '/* Here you can include your additional CSS Styles */') === false) {
            $value = '/* Here you can include your additional CSS Styles */' . PHP_EOL . $value;
        }
        echo Zo2Html::field(
                'textarea', array(
            'label' => 'Custom CSS Styles',
                ), array(
            'name' => 'zo2[custom_css]',
            'rows' => 10,
            'cols' => 20,
            'value' => $value
        ));
        ?>
        <span>Here you can include your additional CSS styles</span>
    </div>
    <div class="control-group no-margin no-label">
        <?php
        $value = Zo2Factory::getFramework()->getAssetsFile('zo2/js/custom.js');
        if (strpos($value, '/* Here you can include your additional Javascript code */') === false) {
            $value = '/* Here you can include your additional Javascript code */' . PHP_EOL . $value;
        }
        echo Zo2Html::field(
                'textarea', array(
            'label' => 'Custom Javascript code',
                ), array(
            'name' => 'zo2[custom_js]',
            'rows' => 10,
            'cols' => 20,
            'value' => $value
        ));
        ?>
        <span>Here you can include your additional JavaScript code</span>
    </div>
    <!-- Tracking Code -->
    <div class="zo2-divider"></div>
    <h2><?php echo JText::_('ZO2_ADMIN_GOOGLE_TRACKING_CODE'); ?></h2>
    <div class="zo2-divider"></div>
    <div class="control-group no-margin no-label">
        <?php
        echo Zo2Html::field(
                'textarea', array(
            'label' => '',
                ), array(
            'name' => 'jform[params][footer_copyright]',
            'rows' => 10,
            'cols' => 20,
            'value' => Zo2Factory::get('footer_copyright')
        ));
        ?>
        <span>Paste your Google Analytics (or other) tracking code here.<br /> This will be added before the closing body tag in the template. <br/> This should be something like<br /> &#60;script&#62;<br />....<br />&#60;/script&#62;</span>
    </div>
    <!-- Compiling -->
    <div class="zo2-divider"></div>
    <div id="zo2-compiling">
        <h2><?php echo JText::_('ZO2_ADMIN_GROUPING_LABEL_COMPILING'); ?></h2>
        <button class="btn btn-primary" id="btnBuildAssets" onClick="zo2.admin.buildAssets();
                return false;" data-toggle="button" data-loading-text="Processing...">Compile</button>
        <div class="zo2-divider"></div>

        <?php
        echo Zo2Html::field(
                'radio', array(
            'label' => JText::_('ZO2_ADMIN_COMPILE_LESS'),
                ), array(
            'name' => 'jform[params][compile_less]',
            'value' => Zo2Factory::get('compile_less'),
            'options' => array(
                array(
                    'label' => JText::_('ZO2_ADMIN_ADVANCED_OPTION')
                ),
                array(
                    'label' => JText::_('ZO2_ADMIN_NO_OPTIMIZE')
                )
            )
        ));
        ?>

        <?php
        echo Zo2Html::field(
                'radio', array(
            'label' => JText::_('ZO2_ADMIN_COMPILE_JS'),
                ), array(
            'name' => 'jform[params][compile_js]',
            'value' => Zo2Factory::get('compile_js'),
            'options' => array(
                array(
                    'label' => JText::_('ZO2_ADMIN_ADVANCED_OPTION')
                ),
                array(
                    'label' => JText::_('ZO2_ADMIN_NO_OPTIMIZE')
                )
            )
        ));
        ?>

        <?php
        echo Zo2Html::field(
                'radio', array(
            'label' => JText::_('ZO2_ADMIN_COMBINE_CSS'),
                ), array(
            'name' => 'jform[params][combine_css]',
            'value' => Zo2Factory::get('combine_css'),
            'options' => array(
                array(
                    'label' => JText::_('ZO2_ADMIN_ADVANCED_OPTION')
                ),
                array(
                    'label' => JText::_('ZO2_ADMIN_NO_OPTIMIZE')
                )
            )
        ));
        ?>

        <?php
        echo Zo2Html::field(
                'radio', array(
            'label' => JText::_('ZO2_ADMIN_COMBINE_JS'),
                ), array(
            'value' => Zo2Factory::get('combine_js'),
            'name' => 'jform[params][combine_js]',
            'options' => array(
                array(
                    'label' => JText::_('ZO2_ADMIN_ADVANCED_OPTION')
                ),
                array(
                    'label' => JText::_('ZO2_ADMIN_NO_OPTIMIZE')
                )
            )
        ));
        ?>
    </div>

    <!-- Developer Option -->
    <div class="zo2-divider"></div>
    <h2><?php echo JText::_('ZO2_ADMIN_DEVELOPMENT_OPTION'); ?></h2>
    <div class="zo2-divider"></div>
    <?php
    echo Zo2Html::field(
            'radio', array(
        'label' => JText::_('ZO2_ADMIN_LOAD_JQUERY'),
            ), array(
        'name' => 'jform[params][load_jquery]',
        'value' => Zo2Factory::get('load_jquery')
    ));
    ?>

    <?php
    echo Zo2Html::field(
            'radio', array(
        'label' => JText::_('ZO2_ADMIN_DEVELOPMENT_MODE'),
            ), array(
        'name' => 'jform[params][development_mode]',
        'value' => Zo2Factory::get('development_mode')
    ));
    ?>

    <?php
    echo Zo2Html::field(
            'radio', array(
        'label' => JText::_('ZO2_ADMIN_DISABLE_MOOTOOLS'),
            ), array(
        'name' => 'jform[params][disable_mootools]',
        'value' => Zo2Factory::get('disable_mootools')
    ));
    ?>


    <!-- Features -->

</div>
