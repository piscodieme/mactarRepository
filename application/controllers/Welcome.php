<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->load->helper('url', 'form', 'date','email');
		$this->load->library('session');
		
		$this->load->library('form_validation');
		
	}
	public function index()
	{
		$this->load->view('connexion');
	}

	public function registration_page()
	{
		$this->load->view('inscription');
	}

	public function registration()
	{
		$this->load->helper('email');
		$this->load->library('email');

		/* recuperatrion de parametres */
		$format = "Y-m-d H:i:s";
		
		$data_user = array(
			"nom_complet" => $this->input->post("username"),
			"num_tel" => $this->input->post("user_tel"),
			"email" => $this->input->post("user_email"),
			"password" => md5($this->input->post("user_password")),
			"ville" => $this->input->post("user_ville"),
			"role" => $this->input->post("user_role"),
			"date_registration" => date($format),
			"vérifié" => 0,
			"verification_key" => 0,
			
		);

		/* recuperation de parametres */
		$from = 'babadieme94@gmail.com';
		

		$config['newline'] = "\r\n"; //You must use double quotes on this one
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com'; //Change for your specific needs
		$config['smtp_port'] = 587; //Change for your specific needs
		$config['smtp_user'] = 'babadieme94@gmail.com'; //Change for your specific needs
		$config['smtp_pass'] = 'pisco2209'; //Change for your specific needs
		$config['charset'] = 'iso-8859-1';
		$config['mailtype'] = 'text'; //This can be set as 'html' too
		
		$this->email->initialize($config);

		$this->email->from('babadieme94@gmail.com', 'baba');
		$this->email->to('dieme.baba-saidou@ugb.edu.sn ');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email confirmation');
		$this->email->set_newline("\r\n");
		if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
        
		$this->email->print_debugger();
	
		
	/*	$this->email->initialize($config);
		$this->email->set_mailtype('html');
		$this->email->from($from);
		$this->email->to('dieme.baba-saidou@ugb.edu.sn');
		$this->email->subject('sent from mactar application');
		$this->email->message($emailContent);
		//$this->email->message(str_replace("{content}",
		//$this->email_text(),
		//$this->email_view())
	//);
	$this->email->send();
		if($this->email->send())
		{
			echo "E-mail has been sent: Thanks";
		}*/
	}

	public function email_text(){
		return '<h2> hello bro mba lepp nice  email message message a revoir</h2>';
	}
	public function email_view(){
		return'	
				<body id="page-top">
					
					
					<div class="container">
						<br>
						<div class="card bg-light container" style="max-width: 400px;">
							<article class="card-body mx-auto" style="max-width: 400px;">
							<span style="font-size: 15px; color:#00ff00">{content}</span>
								
							</article>
						</div> <!-- card.// -->
					</div>
					<!--container end.//-->
				
				</body>
				
				';
	}

}
