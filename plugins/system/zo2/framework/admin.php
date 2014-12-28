<?php

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
defined('_JEXEC') or die('Restricted access');

if (!class_exists('Zo2Admin')) {

    class Zo2Admin {

        public $template;

        const ZO2DEFAULT_PROFILE = 'default';

        public function __construct() {
            $jVersion = new JVersion();
            require_once __DIR__ . '/depends/' . $jVersion->RELEASE . '/admin.php';

            $model = new Zo2ModelTemplate();

            $framework = Zo2Framework::getInstance();
            $framework->template = new Zo2Template($model->getTemplate(JFactory::getApplication()->input->getInt('id')));
            $framework->profile = new Zo2Profile();
            $framework->profile->loadFile($this->getRequestProfile());
        }

        public function render() {
            // get the JForm object
            $form = JForm::getInstance('zo2form', ZO2PATH_ROOT . '/assets/admin.xml');
            $html = new Zo2Html();
            $html->set('admin', $this);
            $html->set('form', $form);
            return $html->fetch('Zo2://html/admin/layout/default.php');
        }

        public function getRequestProfile() {
            $profileName = JFactory::getApplication()->input->getWord('profile');
            $profileName = self::ZO2DEFAULT_PROFILE;
            $framework = Zo2Framework::getInstance();

            $profileFile[] = $framework->template->getPath() . '/profiles/' . $framework->template->get('id') . '/' . $profileName . '.json';
            $profileFile[] = $framework->template->getPath() . '/profiles/' . $profileName . '.json';
            foreach ($profileFile as $value) {
                if (JFile::exists($value)) {
                    return $value;
                }
            }
            return $framework->template->getPath() . '/profiles/' . self::ZO2DEFAULT_PROFILE . '.json';
        }

    }

}