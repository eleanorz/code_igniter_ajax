<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//local host 127.0.0.1

class Posts extends CI_Controller {

	public function index()
	{
		$this->load->model('Gremlin');
		$posts = $this->Gremlin->test();//retrieve all DB
		$view_data = array( //send data results to an array
        'notes' => $posts);
		$this->load->view('posts', $view_data);
        // redirect(base_url('posts', $view_data));      
	}

	public function create()
	{
		// $this->output->enable_profiler(TRUE);
		$this->load->model('Gremlin');
		
		$this->Gremlin->add_test($this->input->post()); //insert comment into database

		$posts = $this->Gremlin->test();//retrieve all DB
		$view_data = array(	//send results to an array to pass to view
        'notes' => $posts);

        redirect(base_url('posts'));//no arguments
        //on methods that are made to process things
        //can also redicrect to method e.g. posts/old_method
        //w ajax would code json element instead    
        //echo json_enc ode($this->view_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */