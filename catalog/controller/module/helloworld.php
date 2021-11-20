<?php
class ControllerModuleHelloworld extends Controller {
	public function index() {

		$this->load->language('module/helloworld');

		$this->document->addStyle('catalog/view/javascript/mt-slider/style.css');
		$this->document->addScript('catalog/view/javascript/mt-slider/js.js');

		$data['hello_world'] = $this->language->get('hello_world');

		$this->load->view('default/template/product/product.tpl', $data);

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/helloworld.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/helloworld.tpl', $data);
		} else {
			return $this->load->view('default/template/module/helloworld.tpl', $data);
		}

	}
}