 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
 
	public function index()
	{
		 echo "This is controller ->class PageController.php -> index function ";
	}
	public function aboutus()
	{
		echo "This is controller ->class PageController.php -> aboutus function ";
	}

	public function blog($blog_url= '')
	{
		echo "<code>This is controller ->PageController-><b> blog function</b> <br><br>
		You pass the arguments as follows :$blog_url
		<br><br> http://localhost:8000/blog/value  </code>";

		$this->load->view('blogview');
	}



	public function demo(){
		$this->load->model('StudentModel');
		$title = $this->StudentModel->demo();
		$data['title'] = $title;

		
		// $data['title'] = "hello, i'm kb";
		$data['body'] = "welcome to 7gems";
		$this->load->view('demo',$data);
	}




}

 