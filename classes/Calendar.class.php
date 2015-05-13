<?php

class Navigation {

	protected $_menu_items = array();
	protected $_links = array();
	protected $_ajax = array();

	public function __construct() {
		$this->_menu_items = array(
			"Home"             => "main.php",
			"Calvin Calendar"  => "calendar.php",
			"Mission Pictures" => "pictures/main.php?dir=mission",
			"Pictures"         => "pictures/main.php",
			"My Wedding"       => "wedding/main.php",
			"Grant"            => "pictures/main.php?dir=grant",
			"Blog"             => "myblog/",
			"Accounts"         => "users/",
			"Contact Me"       => "mailme/"
		);
		$this->_init();
	}

	protected function _init() {
		foreach ($this->_menu_items as $title => $link) {
			$id = "nav-" . str_replace(" ", "", strtolower($title));
			$this->_links[] = "<a id='{$id}' href='#{$id}'>{$title}</a>\n";
			$this->_ajax[] = "$(\"#{$id}\").click(function(){
				$.ajax({url: \"{$link}\", success: function(result){
					$(\"#main-content\").html(result);
				}});
			});";
		}
	}

	public function getLinks() {
		return $this->_links;
	}

	public function getAjax() {
		return $this->_ajax;
	}
}