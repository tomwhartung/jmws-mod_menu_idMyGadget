# jmws_mod_menu_idMyGadget
This repo combines Joomla's mod_menu with the device detection adapter class IdMyGadget to incorporate jQuery Mobile menus when content is served to Phones.

## Status
The initial version of this is complete, and I am using it as the default template for my site [JooMooWebSites.Com](http://joomoowebsites.com/)

#### Demo Site
This module is used for the mobile-friendly menus on [JooMooWebSites.Com](http://joomoowebsites.com/).

#### Demo Article
The [Protostar Tomh Demo](http://joomoowebsites.com/index.php/demos/demos-joomla/joomla-templates/demo-protostar-tomh-idmygadget) article on [JooMooWebSites.Com](http://joomoowebsites.com) shows how mobile-friendly menus look on Desktops.

## Dependencies
To function properly, this code requires installation of code in other repos.

**TODO: Look into using Joomla Composer to manage these dependencies.**

### Required: jmws_idMyGadget_for_joomla
For this module to work properly, the jmws_idMyGadget_for_joomla must be installed.

Note that although jmws_idMyGadget_for_joomla comes with a very simple device detector (detect_mobile_browsers) installed "out of the box," it works best when you add one or more of the more sophisticated third-party device detection tools.

Fret not, however!  You can accomplish much of this by running one or more "git clone" commands.

For information on how to install this required code, see the jmws_idMyGadget_for_joomla README.md file.

### Required: One of the jmws_*_idMyGadget templates
This module works only when used with one of the templates it was written for:

* [jmws_beez3_idMyGadget](https://github.com/tomwhartung/jmws_beez3_idMyGadget)
* [jmws_protostar_idMyGadget](https://github.com/tomwhartung/jmws_protostar_idMyGadget)
* [jmws_protostar_tomh_idMyGadget](https://github.com/tomwhartung/jmws_protostar_tomh_idMyGadget)

## Installation:





## Standard Module Parameters:

None. (jQuery Mobile Theme?)

## Parameters Added by IdMyGadget:

(It would be nice to have the site set up with demos and screen shots, so we can refer to that.)

## Setup

Create a menu like you always do.

### Phone Header Nav

1. Extensions -> Modules
2. New (Green button in upper left corner)
3. Select IdMyGadget Menu for the Module Type
4. Fill in the form as follows:
   * Enter a Title, e.g. "Phone Header Nav Demo"
   * From the Select Menu dropdown, select the menu created previously
   * From the Position dropdown, select "Phone Header Nav [phone-header-nav]
   * Set the Show Sub-menu Items option to "No"
   * When done, click on "Save"
5. Click on the Advanced tab
6. From the Alternative Layout dropdown, select "phoneFooterNav"
7. Click on "Save & Close"


### Phone Footer Nav

1. Extensions -> Modules
2. New (Green button in upper left corner)
3. Select IdMyGadget Menu for the Module Type
4. Fill in the form as follows:
   * Enter a Title, e.g. "Phone Footer Nav Demo"
   * From the Select Menu dropdown, select the menu created previously
   * From the Position dropdown, select "Phone Footer Nav [phone-footer-nav]
   * Set the Show Sub-menu Items option to "No"
   * When done, click on "Save"
5. Click on the Advanced tab
6. From the Alternative Layout dropdown, select "phoneFooterNav"
7. Click on "Save & Close"

### Hamburger Nav

There are two, the left and right are analogous yet separate.

1. Extensions -> Modules
2. New (Green button in upper left corner)
3. Select IdMyGadget Menu for the Module Type
4. Fill in the form as follows:
   * Enter a Title, e.g. "Hamburger Nav Demo"
   * From the Select Menu dropdown, select the menu created previously
   * From the Position dropdown, select "Phone Burger Menu Left [phone-burger-menu-left]" or 
   "Phone Burger Menu Right [phone-burger-menu-right]" as appropriate
   * Set the Show Sub-menu Items option to "No"
   * When done, click on "Save"
5. Click on the Advanced tab
6. From the Alternative Layout dropdown, select "phoneBurgerMenuLeft" or "phoneBurgerMenuRight" as appropriate
7. Click on "Save & Close"

## About IdMyGadget:

For information about the IdMyGadget Device Detection Adapter API&copy;, see the [About-IdMyGadget.md file in this directory](https://github.com/tomwhartung/jmws_mod_menu_idMyGadget/blob/master/ABOUT-IdMyGadget.md).

