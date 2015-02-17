<?php
class Templater {

	private $folder;

	public function __construct($folder) {
		$this->folder = $folder;
	}

	public function loadTemplate($template) {
		return new Template($this->folder, $template);
	}
}
?>
