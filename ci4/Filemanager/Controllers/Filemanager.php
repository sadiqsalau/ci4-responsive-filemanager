<?php namespace Filemanager\Controllers;

class Filemanager extends \App\Controllers\BaseController
{
	public function run()
	{
		$segments = $this->request->uri->getSegments();
		$path = array_slice($segments, 1);

		if(count($path)>1)
		{
			return redirect()->withCookies()->to('/');
		}

		$base = FCPATH . 'filemanager/';


		$file = $base . $path[0];

		if(!is_file($file))
		{
			throw new \CodeIgniter\Exceptions\PageNotFoundException($path[0]);
		}
		
		


		$_SERVER['SCRIPT_NAME'] = '/' . $this->request->uri->getPath();
		$_SERVER['SCRIPT_FILENAME'] = $file;


		session()->start();
		chdir($base);
		
		$this->init($file);
	}

	private function init($file)
	{
		require $file;
	}
}