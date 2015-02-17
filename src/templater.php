<?php
namespace xes;
class Templater {

	private $folder;

	public function __construct($folder) {
		$this->folder = $folder;
		echo "Templater loaded\n";
	}

	public function loadModule($template) {
		return new Module($this->folder, $template);
	}
}
?>
