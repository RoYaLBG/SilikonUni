<?php

class Partial {
	
	private $_view;
    
    private $_scripts = array();
    private $_styles = array();
	
	public function __construct(View $view) {
		$this->_view = $view;
	}
	
	public function header() {
		include APPLICATION_PATH . View::FOLDER_PARTIALS . 'header.php';
	}
	
	public function footer() {
		include APPLICATION_PATH . View::FOLDER_PARTIALS . 'footer.php';
	}
	
	/**
	 * 
	 * @return View
	 */
	public function getView() {
		return $this->_view;
	}
    
    public function setScripts($script) {
        $this->_scripts[] = "<script>\n\t".$script."\n</script>";
    }
    
    public function setScriptUrls($url) {
        $this->_scripts[] = "\n".'<script src="' . $url . '"></script>'."\n";
    }
    
    public function setStyles($style) {
        $this->_styles[] = "<style>\n\t".$style."\n</style>";
    }
    
    public function setStylesUrl($url) {
        $this->getView()->setCss('<link href="'.$url.'" rel="stylesheet" />');
    }
    
    public function getStyles() {
        return $this->_styles;
    }
    
    public function getScripts() {
        return $this->_scripts;
    }
}