<?php (defined('BASEPATH')) or exit('No direct script access allowed');

require APPPATH . "third_party/MX/Controller.php";

class MY_Controller extends MX_Controller
{
	public $keyword;
	public $description;
	function __construct()
	{
		parent::__construct();
		$this->keyword     = 'Nabati, Pinus Merah Abadi, Rnd, Kaldu Sari Nabati';
		$this->description = 'Research and Development Product';
	}
	public function meta_data(&$meta, $title)
	{
		$meta = array(
			'title'       => $title,
			'keyword'     => $this->keyword,
			'description' => $this->description,
		);
	}
	public function template($page, $data = NULL)
	{
		$data['content'] = $this->parser->parse($page, $data, TRUE);
		$data['app']     = modules::run('_partials/PartialsController/app', $data);
		$data['header']  = modules::run('_partials/PartialsController/header', $data);
		$data['sidebar'] = modules::run('_partials/PartialsController/sidebar', $data);
		$this->parser->parse('_partials/master', $data);
	}
}
