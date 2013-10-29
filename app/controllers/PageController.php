<?php

	class PageController extends Controller
	{
		public function showIndex()
		{
			return View::make('index');
		}

		public function showFaculty()
		{
			return View::make('faculty');
		}
	}

?>