# CI4-Responsive Manager

This is ported for codeigniter-4 and you must have a running and working ci4-setup.
You can port it to a different framework if you are an expert.

**Steps**

- Add Filemanager to 'app/Config/Autoload.php' e.g

  ```php
  	'Filemanager' => ROOTPATH . 'modules/Filemanager'
  ```
- copy the contents of 'public' folder to yours.

- edit the .htaccess file

- Follow the remaining steps at: https://www.responsivefilemanager.com/#documentation-section

With this you can apply filters to every request made to /filemanager/*.php