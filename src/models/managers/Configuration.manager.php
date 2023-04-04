<?php
class Configuration
{
	protected $vars = array(),
		$rootPath;

	// SETTERS //	
	public function setRootPath()
	{
		$this->rootPath = 'https://' . $_SERVER['HTTP_HOST'];
	}

	// CONSTRUCTEUR //
	public function __construct()
	{
		$this->rootPath();
	}

	// GETTERS //
	public function rootPath()
	{
		return $this->rootPath;
	}
	// AUTRES FONCTIONS //
	public function getConfigData($var)
	{
		if (!$this->vars) {
			$xml = new \DOMDocument;
			$xml->load(__DIR__ . '/../../Config/data.xml');
			$elements = $xml->getElementsByTagName('define');
			foreach ($elements as $element) {
				$this->vars[$element->getAttribute('var')] = $element->getAttribute('value');
			}
		}
		if (isset($this->vars[$var])) {
			return $this->vars[$var];
		}
		return null;
	}
}
