## 1.4.5 release Mar 03, 2015

* Add "Add new row" feature for a column 
* Improve cache 
* Fixes some minor css issues in back-end 
* Fall back no old item moving mega menu
* Improves zo2 hallo template

## 1.4.4 release Feb 06, 2015

* Removes Profile Assignment 
* Fixes conflict issue between Tracking Code & Sticky Menu
* Fixes mega menu's hovering class not removed 
* Fixes minor css issues
* Fixes Rename & Delete Profile functions not worked
* Fixes collapsible issue 
* Fixes search page issue
* Improves the "slide" effect for mega menu
* Improves the justify style for mega menu's adjustment 
* Improves caching
* Update module positions for Zo2 Hallo 
* Upgrade [BootStrap to version 3.3.2](http://blog.getbootstrap.com/2015/01/19/bootstrap-3-3-2-released/)
* [Back-End] Improve Advance Tab for better UX
* Continue to improve & clean up code 

## 1.4.3 release Dec 30, 2014 

* Redesign the back-end UX/UI 
* Backend layout update
	- Use Zo2 Formfield for all template
	- Improve font configurations
	- Improve layout builder
		* Remove some old configurations
		* HTML data generate updated
	- Improve theme presets		
	- Removed some old configs
	- Remove favicon config. Follow Joomla! standard
	- New ajax concept for
		* Profile selector
		* Compile
		* Clear cache
		* Mega menu type		
* Update development mode		
* Upgrade Bootstrap to version 3.3.1 
* Improve responsive / non-responsive process
* Reduces queries to database
* Remove Joomla! 2.5 support
* Remove shortcode
* Improve less code
* Code clean up and improved for performance
* Follow up PSR-2 standard
* Improve mega menu configurations
* Improve logo configurations		
* Improve Fonts option
* Improve Custom CSS feature 
* Redesign Off Canvas Menu style
* Add Custom JS feature 
* Fix multiple language issue 
* Fixed save profile with empty layout
* Fix W3C validator errors


## 1.4.2 release Sep 26, 2014 

* Fix issue can not get layout
* Update Zo2 follow PSA-2 pattern design
* Upgrade Font Awesome Icons to 4.2.0
* Remove timthumb
* Fix RTL language issue
* Add custom css file
* Fixes buildAssets not working in some cases
* Minor css bugs fixing
* Change preset blue color
* Less / Css optimized
* Update Zo2 Hallo information
* Move process code to Model classes. A part of 1.4.3 process to improve Zo2 Structure standard
* Add index.html to all folders
* Clean up some old files that no-longer used
* move Zo2 Framework to subdir /framework than follow up PSR-2 Standard

## 1.4.1 release Sep 05, 2014 

* Fix non-responsive feature issue
* Add confirm box when updating Zo2
* Overridable build asset files in template
* Add new logs system
* Back compatibility with old version
* Fixed profile load system

## 1.4.0 release Aug 20, 2014 

* Make singleton for Zo2Framework class. Prepare for future everything will go over this class
* Zo2Framework
	* Singleton instance of each template ( Still under process of improvement )
	* Zo2Factory class created to use as global Factory
* Move most of configuration into profile. By this way you can easier to create & share you profile
	* Layout
	* Theme
	* MenuConfig
* Profile
	* Menu assignment. Each profile can assign into menu
* Assets
	* Move compile into backend when do save. Speed up frontend loading
* Improve layout builder
	* Improved to make more code clearly & well comment
	* New JDoc for each block: Modules / Component / Message / 3rd
		* 3rd party will allow hook 3rd block into layout without core hacking
	* Make Mega menus & Canvas menus as standard block
	* Improve auto calc for span & offset
* Upgrade to latest bootstrap 
* Misc bugs fixed

## 1.3.10 release Jul 18, 2014 

* Bug fix: the "Close" button was worked wrong

## 1.3.9 release May 30, 2014 

* Add new admin style 
* Fix tracking code issue 
* Add Zo2 Hallo template for Joomla 2.5 
* Add option allowing to enable/disable sticky menu 
* Add option allowing to select background pattern in backend 
* Upgrade Bootstrap to latest version 3.1.1 
* Upgrade FontAwesome Icons to latest version 4.1
* Improve page speed & performance 
* Allow any configs in backend would but default init via json file.
* Failed loading XML file
* Notice: Undefined index: style in /plugins/system/zo2/formfields/layout.php on line 184
* Improve the way we save template
* Fixe many minor issues 

## 1.3.8 release May 12, 2014 

* Fully tested with Joomla 3.3 
* Improve the update system to follow Joomla! updater & By self we do checking in template back-end and install it directly if new version available
* Upgrade Zo2Layout / Controller / Megamenu: Move to libraries with autoloading supported: Controller / Megamenu
* Improved Zo2Layout to reduce declared variables 
* Fixed [#207 After installation of Zo2 this error ocorred](https://github.com/aploss/zo2/issues/207)
* Updated the [blog style](http://demo.zo2framework.org/index.php/en/blog) 
* Fixed minor css issues

## 1.3.7 release Apr 28, 2014 

* Removed social sharing feature. It will be integrated in version 1.4.0 
* Fixed comment issue: when comments are enabled, cant open any pages.
* Improved style switcher: the visitor have to change background pattern when choose the boxed only. 
* Added attention message to warning admin before upgrading framework. 

## 1.3.6 release Apr 22, 2014 

* Moved Style Switcher & Social Shares into Utilities to improve code structure
* New overridden structure with Zo2Path
* Provide new feature: Profile
* Misc bugs fixed

## 1.3.5 release Apr 14, 2014 

* Fixed issue that configured for duplicated template & assigned into menu is not working
* Fixed mega menus issue: it was not working in template manger
* Update backend Overview layout
* Provide backend auto update checking
* Add show/hide Style Selector
* Improve Zo2Template:
    + Provide method to fetch layout files with overridden
    + Moved some core html into Frameworks/html/layouts
* Clean up Zo2 Hallo template
    + Move all variables into $this object
    + Update with new Zo2Template
    + Some json files are ready for overridden


## 1.3.4 release Mar 24, 2014 

* [Activate the previous tab after saving template options](https://github.com/aploss/zo2/issues/108)
* Improve back-end ajax for security validating
* Improve the layout option: With the boxed layout you can choose additional options such as custom background images, patterns and solid colors.
* [Fixed mega menus issue on multiple language site](https://github.com/aploss/zo2/pull/193). Thank to chrislucca for this commit.

## 1.3.3 release Mar 11, 2014 

* [Replace all popup / modal with colorbox by Twitter Bootstrap - Modal](https://github.com/aploss/zo2/issues/162)
* [Add sticky menus](https://github.com/aploss/zo2/issues/161) 
* [Standard all LESS](https://github.com/aploss/zo2/issues/175)
* Added wide/boxed layout option 
* Improved Ajax core

## 1.3.2 release Feb 27, 2014 

* Added Retina logo option: allows you to add the logo for retina resolution 
* Updated the quickstart and zt hallo for Joomla 2.5
* Improved preset setting: allows you easily to add or remove more preset setting 
* Removed shortcode button in the back-end editor: it was hacked the system plugin for adding shortcode button in the editor. 
* Improved mega menus option: The Megamenu was always rendering mainmenu, now renders what admin has choosen in template Megamenu administration. Thank to [chrislucca for this commit](https://github.com/aploss/zo2/pull/192)

## 1.3.1 release Feb 17, 2014 

* Joomla 3.2.2 compatibility #185
* [Joomla 2.5] Layout Builder doesn’t show config icons when hover #191
* Hide component area #174
* Improve logo footer section #178
* Improve Zo2Template class structure #180
* Fix social sharing issue: #176
* Improve Assets#152
* Fixed switch header logo issue #171
* Removed component area when it’s empty #174
* Adding load custom css option: Load Custom CSS – if enabled, custom.css file (in which you can override the default styling of the template) will be loaded in the front-end.
This might be useful when you want to make some changes in the template design. All the CSS placed in this file will not be lost after upgrading the template.

## 1.3.0 release Jan 24, 2014 

* SocialShare: Improve backend to make more clearly
* SocialShare: Fix misc bugs
* Shortcodes: Fix misc bugs
* Assets: Allow load assets via json config file. These assets file can do override in template
* Assets: Improve build & load assets
* Replace Zo2Path by Zo2HelperPath
* Upgrade Font Awesome to version 4.0.3
* Upgrade assets structures
* Remove unneeded files
* Joomla! 2.5 still supported by Framework but temporary close in templates

## 1.2.1 Release Jan 08, 2014

* Adding social sharing button 
* Fixed minor css issues 
* Fixed multiple language issue 

## 1.2.0 Release Dec 30, 2013

* Restructure and improving ZO2 framework
* Allows user to update the framework from the back-end
* Joomla 2.5 compatibility: now Zo2 is compatible with both Joomla 2.5 and Joomla 3.x
* RTL (Right To Left) language supported
* Improved Google Fonts Configuration UI: ajax search and live preview
* Rebuild shortcode function to make it more flexible
* Temporary disable the social sharing button. Social Sharing button will be added in next version 1.2.1

## 1.0.0 Release Dec 10, 2013

* Initial Release