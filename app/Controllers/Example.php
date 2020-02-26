<?php namespace App\Controllers;

/**
 * My first CI4 Example
 */
class Example extends BaseController
{
	public function index()
	{
        return view('example');
	}

	public function showSomething()
	{
		$validResult = $this->validate([
			'testInput' => "required",
		]);
		if (! $validResult) {
			return $this->index();
		}
		echo 'Your value is ' . $this->request->getVar('testInput');
	}
	//--------------------------------------------------------------------

}
