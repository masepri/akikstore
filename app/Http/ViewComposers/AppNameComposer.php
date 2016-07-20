<?php namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
class AppNameComposer {
	/**
	* Bind data to the view.
	*
	* @param View $view
	* @return void
	*/

	public function compose(View $view)
	{
		$view->with('app_name', 'Quote App v2.4');
	}
}