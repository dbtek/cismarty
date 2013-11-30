Codeigniter and Smarty Bundle
==============

About
--------------
- [CiSmarty v0.2](https://github.com/dbtek/cismarty/releases "Latest release")
- Cismarty consists of Codeigniter core files, Smarty engine and a few linker files.
- Codeigniter Home: [ellislab.com/codeigniter](http://ellislab.com/codeigniter)
- Smarty Home: [smarty.net](http://www.smarty.net)
- Smarty Crash Course: [smarty.net/crash_course](http://www.smarty.net/crash_course "More than just introduction")

Requirements
---------------------
- PHP version 5.4.x

Technical Information
---------------------
- Smarty is located at *system/libs/smarty*
- CI_Controller class is extended as MY_Controller under *app/core* directory to load Smarty.
- A library file added under *app/libraries* for linking Smarty to Codeigniter.

Installation
----------
- Crate a new project.
- Get cismarty. 
- Copy all files from cismarty to your project directory.
- Make sure the following directories have **write** permission:
    * application/views/templates_c
- Use **Class Controller extends MY_Controller** instead of **Class Controller extends CI_Controller**
	*This is required for smarty to run properly.*

