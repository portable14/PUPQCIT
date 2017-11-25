<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_superadmin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('superadmin');
	}

	public function Dashboard()
	{
		$this->load->view('Dashboard');
	}

	public function Admin()
	{
		$this->load->view('Admin');
	}

	public function Guest()
	{
		$this->load->view('Guest');
	}

	public function Applicants_Form()
	{
		$this->load->model('queries_model');
		$data['posts'] = $this->queries_model->getApplicants();
		$this->load->view('Applicants Form' , $data);
	}

	public function Disciplinary_Records_Form()
	{
		$this->load->model('queries_model');
		$data['disciplinary'] = $this->queries_model->getDisciplinary();
		$this->load->view('Disciplinary Records Form' , $data);
	}

	public function DTR_Finance()
	{
		$this->load->model('queries_model');
		$data['dtr'] = $this->queries_model->getDtr();
		$this->load->view('DTR (Finance)' , $data);
	}

	public function Invoices_DMS()
	{
		$this->load->model('queries_model');
		$data['invoice'] = $this->queries_model->getInvoice();
		$this->load->view('Invoices-DMS' , $data);
	}

	public function Benefit_Form()
	{
		$this->load->model('queries_model');
		$data['benefit'] = $this->queries_model->getBenefit();
		$this->load->view('Benefit Form' , $data);
	}

	public function Member_File_Form()
	{
		$this->load->model('queries_model');
		$data['member'] = $this->queries_model->getMember();
		$this->load->view('Member File Form' , $data);
	}
	public function Clearance()
	{
		$this->load->model('queries_model');
		$data['clearance'] = $this->queries_model->getClearance();
		$this->load->view('Clearance' , $data);
	}

	public function Liquidations()
	{
		$this->load->model('queries_model');
		$data['liquidation'] = $this->queries_model->getLiquidation();
		$this->load->view('Liquidations' , $data);
	}

	public function Loans()
	{
		$this->load->model('queries_model');
		$data['loan'] = $this->queries_model->getLoan();
		$this->load->view('Loans' , $data);
	}

	public function Quit()
	{
		$this->load->model('queries_model');
		$data['quit'] = $this->queries_model->getQuit();
		$this->load->view('Quit' , $data);
	}

	public function Annual()
	{
		$this->load->model('queries_model');
		$data['annual'] = $this->queries_model->getAnnual();
		$this->load->view('Annual' , $data);
	}

	public function Request()
	{
		$this->load->model('queries_model');
		$data['request'] = $this->queries_model->getRequest();
		$this->load->view('Request' , $data);
	}

	public function Document()
	{
		$this->load->model('queries_model');
		$data['document'] = $this->queries_model->getDocument();
		$this->load->view('Document' , $data );
	}  

	public function Queries()
	{
		$this->load->model('queries_model');
		$data['posts'] = $this->queries_model->getApplicants();
		$data['member'] = $this->queries_model->getMember();
		$data['disciplinary'] = $this->queries_model->getDisciplinary();
		$data['benefit'] = $this->queries_model->getBenefit();
		$data['invoice'] = $this->queries_model->getInvoice();
		$data['dtr'] = $this->queries_model->getDtr();
		$data['loan'] = $this->queries_model->getLoan();
		$data['request'] = $this->queries_model->getRequest();
		$data['clearance'] = $this->queries_model->getClearance();
		$data['quit'] = $this->queries_model->getQuit();
		$data['liquidation'] = $this->queries_model->getLiquidation();
		$data['annual'] = $this->queries_model->getAnnual();
		$this->load->view('Queries' , $data);				
	}

	public function Custom()
	{
		$this->load->view('Customized template');
	}
}
?>
