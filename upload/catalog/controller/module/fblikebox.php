<?php  
class ControllerModulefblikebox extends Controller {
	protected function index($setting) {
		$this->language->load('module/fblikebox');
		$this->data['heading_title'] = $this->language->get('heading_title');		
		$this->data['fblikeboxcode'] = $this->config->get('fblikebox_code');		
		$this->data['fblikeboxconwid'] = $this->config->get('fblikebox_content_width');
		$this->data['fblikeboxconhei'] = $this->config->get('fblikebox_content_height');
		$this->data['fblikeboxconcon'] = $this->config->get('fblikebox_content_connections');
		$this->data['fblikeboxcolwid'] = $this->config->get('fblikebox_column_width');
		$this->data['fblikeboxcolhei'] = $this->config->get('fblikebox_column_height');
		$this->data['fblikeboxcolcon'] = $this->config->get('fblikebox_column_connections');
		
		if ($this->data['fblikeboxconwid'] < 100) {
			$this->data['fblikeboxconwid'] = 575;
		}
		
		if ($this->data['fblikeboxconhei'] < 100) {
			$this->data['fblikeboxconhei'] = 260;
		}
		
		if ($this->data['fblikeboxconcon'] < 1) {
			$this->data['fblikeboxconcon'] = 12;
		}
		
		if ($this->data['fblikeboxcolwid'] < 100) {
			$this->data['fblikeboxcolwid'] = 180;
		}
		
		if ($this->data['fblikeboxcolhei'] < 100) {
			$this->data['fblikeboxcolhei'] = 420;
		}
		
		if ($this->data['fblikeboxcolcon'] < 1) {
			$this->data['fblikeboxcolcon'] = 20;
		}
		
		$this->data['position'] = $setting['position'];
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/fblikebox.tpl')) {
			$this->template = $this->config->get('config_template') . '/template/module/fblikebox.tpl';
		} else {
			$this->template = 'default/template/module/fblikebox.tpl';
		}		
		$this->render();
	}
}
?>