<?php

class StaffController extends Controller
{

	public function handleRequest()
	{
		$dev = 1; // only going to be here during migration period
		if ($dev = 1)
		{
			$requested_page = Request::segment(2);
			// dev version: get url to site from database and give link 
			$page = StaffPage::where('pageid', '=', $requested_page)->get();
			Redirect::to($page->url);
			// end dev
		}
		else
		{
			// final 	  : get page ID and return teacher page
			$page = StaffPage::where('pageid', '=', $requested_page)->get();
			// end final
			
		}

	}

}

?>