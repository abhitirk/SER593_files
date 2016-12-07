# **Installation Instructions** - Curricular Module Versioning
1. Download/copy entire folder to ***/sites/all/modules/custom*** (or */code/sites/all/modules/custom* on the remote server) in the Drupal installation
2. In Drupal, perform the following steps:
	a. Clear caches under *admin/config/development/performance*
	b. Search for module under *admin/modules* with the name "Curricular Module Handling" and activate it
	c. Enable the module and save configuration
	d. Clear caches again as in step (a)
	d. The module link should be visible in the main menu.
	
### Important files in the module directory and their significance:

**curricular_module_handling.module** - Main drupal module file which defines the menu, theme files and hooks

**pending_modules_template.tpl.php** - Template file for "Pending Modules" section of the plugin, calls relevant files and routines

**make_changes_template.tpl.php** - Template file for "Make Changes" section of the plugin, calls relevant files and routines 

**commits_branches_template.tpl.php** - Template file for "Pending Modules" section of the plugin, calls relevant files and routines

**auth.php** - Specifiy access token in this file for using GitHub API (as new access tokens may need to be generated if duplication is detected)



