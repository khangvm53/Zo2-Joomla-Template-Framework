<?php

/**
 * Zo2 (http://www.zootemplate.com/zo2)
 * A powerful Joomla template framework
 *
 * @link        http://www.zootemplate.com/zo2
 * @link        https://github.com/cleversoft/zo2
 * @author      Duc Nguyen <ducntv@gmail.com>
 * @author      Viet Vu <me@jooservices.com>
 * @copyright   Copyright (c) 2014 CleverSoft (http://cleversoft.co/)
 * @license     GPL v2
 */
defined('_JEXEC') or die('Restricted Access');

/**
 * This file will use to init / register current template with ZO2 framework
 */
if (!class_exists('Zo2Framework'))
    die('Zo2Framework not found');

$framework = Zo2Framework::getInstance();

$this->zo2 = new JRegistry;
$this->zo2->framework = $framework;
$this->zo2->template = new Zo2Template();
$this->zo2->layout = $framework->layout;
$this->zo2->utilities = Zo2Utilities::getInstance();

$framework->getTemplateLayouts();