<?php


/**
 * Created by PhpStorm.
 * User: maveriks
 * Date: 15/5/17
 * Time: 13:41
 */
class PageViewController {

	private $activePage;

	public function showSectionInTemplate () {

		if (isset($_GET["page"])) {
			$enlacePage = $_GET["page"];
		} else {
			$enlacePage = "index";
		}



	}


}