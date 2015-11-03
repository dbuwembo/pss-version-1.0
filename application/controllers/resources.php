<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This class controls viewing provider pages.
 *
 * @author Al Zziwa <azziwa@newwavetech.co.ug>
 * @version 1.0.0
 * @copyright PSS
 * @created 10/30/2015
 */
class Resources extends CI_Controller 
{
	# resources home page
	function index()
	{
		$data = filter_forwarded_data($this);
		$data['documentsList'] = array();
		
		$this->load->view('resources/home', $data);
	}
	
	
	
	# documents lists
	function documents_list()
	{
		$data = filter_forwarded_data($this);
		
		$data['type'] = $data['t'];
		# TODO: Select list based on type passed
		$data['list'] = array();
		
		$this->load->view('resources/details_list', $data);
	}
	
	
	
	
	
	
}

/* End of controller file */