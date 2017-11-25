<?php
class addDMS_model extends CI_Model{
function __construct() {
parent::__construct();
}

  public function InsertApplicant($data, $file)
  {
    $data = array(
      'app_uploaded_img' => $file,
      'app_first_name' => $this->input->post('firstname'),
      'app_middle_name' => $this->input->post('middlename'),
      'app_last_name' => $this->input->post('lastname'),
      'app_gender' => $this->input->post('sex'),
      'app_age' => $this->input->post('age'),
      'app_birthdate' => $this->input->post('birthdate'),
      'app_height' => $this->input->post('height'),
      'app_civil_status' => $this->input->post('civilstatus'),
      'app_contact_number' => $this->input->post('contactnumber'),
      'app_address' => $this->input->post('address'),
      'app_religion' => $this->input->post('religion'),
      'app_educational_attainment' => $this->input->post('educational'),
      'app_skills' => $this->input->post('skill'),
      'app_client_assigned' => $this->input->post('clientassigned'),
      'app_referred_by' => $this->input->post('refferedby'),
      'app_sourced_by' => $this->input->post('sourceby'),
      'app_date_applied' => $this->input->post('dateapplied'),
      'app_course' => $this->input->post('course'),
      'app_work_experience' => $this->input->post('workexperience'),
      'app_interview_remarks' => $this->input->post('interviewremarks'),
      'app_pleasing_personality' => $this->input->post('personality'),
      'app_exam_status' => $this->input->post('examstatus'),
      'app_applicant_status' => $this->input->post('applicantstatus')
      );
      $insert = $this->db->insert('tbl_applicant_form', $data);   
      return $insert;
  }

  public function InsertMember($data, $file)
  {
    $data = array(
      'mem_uploaded_img' => $file,
      'mem_id_number' => $this->input->post('idnumber'),
      'mem_first_name' => $this->input->post('firstname'),
      'mem_middle_name' => $this->input->post('middlename'),
      'mem_last_name' => $this->input->post('lastname'),
      'mem_mothers_maiden' => $this->input->post('maidenname'),
      'mem_birthdate' => $this->input->post('birthdate'),
      'mem_address' => $this->input->post('address'),
      'mem_age' => $this->input->post('age'),
      'mem_skills' => $this->input->post('skills'),
      'mem_religion' => $this->input->post('religion'),
      'mem_contact_number' => $this->input->post('contactnumber'),
      'mem_gender' => $this->input->post('sex'),
      'mem_civil_status' => $this->input->post('civilstatus'),
      'mem_client_assigned' => $this->input->post('clientassigned'),
      'mem_field_assignment' => $this->input->post('fieldassignment'),
      'mem_bank_account' => $this->input->post('bankaccount'),
      'mem_membership_type' => $this->input->post('membershiptype'),
      'mem_membership_agreement_status' => $this->input->post('agreementstatus'),
      'mem_date_started' => $this->input->post('datestarted'),
      'mem_date_terminated' => $this->input->post('dateterminated'),
      'mem_educational_attainment' => $this->input->post('educational'),
      'mem_information_sheet' => $this->input->post('informationsheet'),
      'mem_affirmation_status' => $this->input->post('affirmation')

      );
      $insert = $this->db->insert('tbl_member_file_form', $data);   
      return $insert;
  }

  public function InsertDisciplinary($data, $file)
  {
    $data = array(
      'dis_uploaded_img' => $file,
      'dis_id_number' => $this->input->post('idnumber'),
      'dis_first_name' => $this->input->post('firstname'),
      'dis_middle_name' => $this->input->post('middlename'),
      'dis_last_name' => $this->input->post('lastname'),
      'dis_client_assigned' => $this->input->post('clientassigned'),
      'dis_violation' => $this->input->post('violation'),
      'dis_offense' => $this->input->post('offense'),
      );
      $insert = $this->db->insert('tbl_disciplinary_record_form', $data);   
      return $insert;
  }

  public function InsertBenefit($data, $file)
  {
    $data = array(
      'ben_uploaded_img' => $file,
      'ben_id_number' => $this->input->post('idnumber'),
      'ben_first_name' => $this->input->post('firstname'),
      'ben_middle_name' => $this->input->post('middlename'),
      'ben_last_name' => $this->input->post('lastname'),
      'ben_sss_no' => $this->input->post('sssnumber'),
      'ben_remarks' => $this->input->post('remarks'),
      'ben_philhealth_no' => $this->input->post('philhealthnumber'),
      'ben_pagibig_no' => $this->input->post('pagibignumber'),
      'ben_date_received' => $this->input->post('datereceived'),
      'ben_claim_type' => $this->input->post('claimtype'),
      'ben_death_claim' => $this->input->post('deathclaim'),
      );
      $insert = $this->db->insert('tbl_benefits_form', $data);   
      return $insert;
  }

  public function InsertInvoice($data, $file)
  {
    $data = array(
      'inv_uploaded_img' => $file,
      'inv_invoice_number' => $this->input->post('invoicenumber'),
      'inv_soa_number' => $this->input->post('soanumber'),
      'inv_client' => $this->input->post('client'),
      'inv_billings_amount' => $this->input->post('billing'),
      'inv_invoice_date' => $this->input->post('invoicedate'),
      'inv_payout_date' => $this->input->post('payoutdate'),
      'inv_period_covered_from' => $this->input->post('periodfrom'),
      'inv_period_covered_to' => $this->input->post('periodto'),
      'inv_date_received_by_coordinator' => $this->input->post('coordinator'),
      'inv_date_received_by_client' => $this->input->post('dateclient'),
      'inv_date_received_by_asiapro' => $this->input->post('asiapro'),
      'inv_drawee_bank' => $this->input->post('draweebank'),
      'inv_check_date' => $this->input->post('checkdate'),
      'inv_check_number' => $this->input->post('checknumber'),
      'inv_check_amount' => $this->input->post('checkamount'),
      'inv_OR_number' => $this->input->post('ornumber'),
      'inv_OR_date' => $this->input->post('ordate'),
      'inv_adjustment_type' => $this->input->post('adjustmenttype'),
      'inv_bank_deposited' => $this->input->post('bankdeposited'),
      );
      $insert = $this->db->insert('tbl_invoices_form', $data);   
      return $insert;
  }

  public function InsertDtr($data, $file)
  {
    $data = array(
      'dtr_uploaded_img' => $file,
      'dtr_id_number' => $this->input->post('idnumber'),
      'dtr_first_name' => $this->input->post('firstname'),
      'dtr_middle_name' => $this->input->post('middlename'),
      'dtr_last_name' => $this->input->post('lastname'),
      'dtr_client' => $this->input->post('client'),
      'dtr_coor_assigned' => $this->input->post('coordinator'),
      'dtr_period_date' => $this->input->post('reservation'),
      'dtr_period_covered_from' => $this->input->post('periodfrom'),
      'dtr_period_covered_to' => $this->input->post('periodto'),
      'dtr_payout_date' => $this->input->post('payoutdate'),
      'dtr_farm_department' => $this->input->post('farm'),
      );
      $insert = $this->db->insert('tbl_dtrs_only_form', $data);   
      return $insert;
  }

  public function InsertLoan($data, $file)
  {
    $data = array(
      'loan_uploaded_img' => $file,
      'loan_id_number' => $this->input->post('idnumber'),
      'loan_first_name' => $this->input->post('firstname'),
      'loan_middle_name' => $this->input->post('middlename'),
      'loan_last_name' => $this->input->post('lastname'),
      'loan_date_received' => $this->input->post('datereceived'),
      'loan_client' => $this->input->post('client'),
      'loan_type_of_loan' => $this->input->post('typesofloan'),
      );
      $insert = $this->db->insert('tbl_loans_form', $data);   
      return $insert;
  }

  public function InsertClearance($data, $file)
  {
    $data = array(
      'cle_uploaded_img' => $file,
      'cle_id_number' => $this->input->post('idnumber'),
      'cle_first_name' => $this->input->post('firstname'),
      'cle_middle_name' => $this->input->post('middlename'),
      'cle_last_name' => $this->input->post('lastname'),
      'cle_client' => $this->input->post('client'),
      'cle_date_started' => $this->input->post('datestarted'),
      'cle_last_day_of_work' => $this->input->post('lastwork'),
      'cle_date_applied' => $this->input->post('dateapplied'),
      'cle_date_received_from_member' => $this->input->post('datemember'),
      'cle_date_received_from_mbs' => $this->input->post('datembs'),
      'cle_date_processed_from_finance' => $this->input->post('datefinance'),
      'cle_date_transmitted_to_headoffice' => $this->input->post('dateheadoffice'),
      'cle_other_deductions' => $this->input->post('otherdeductions'),     
      );
      $insert = $this->db->insert('tbl_clearance_waiver_form', $data);   
      return $insert;
  }

  public function InsertQuit($data, $file)
  {
    $data = array(
      'qui_uploaded_img' => $file,
      'qui_id_number' => $this->input->post('idnumber'),
      'qui_first_name' => $this->input->post('firstname'),
      'qui_middle_name' => $this->input->post('middlename'),
      'qui_last_name' => $this->input->post('lastname'),
      'qui_client' => $this->input->post('client'),
      'qui_date_started' => $this->input->post('datestarted'),
      'qui_last_day_of_work' => $this->input->post('lastwork'),
      'qui_date_applied' => $this->input->post('dateapplied'),
      'qui_cv_number' => $this->input->post('cvnumber'),
      'qui_amount' => $this->input->post('amount'),
      'qui_member_type' => $this->input->post('membertype'),
      'qui_claim_thru_spa' => $this->input->post('claim'),    
      );
      $insert = $this->db->insert('tbl_quit_claim_form', $data);   
      return $insert;
  }

  public function InsertLiquidation($data, $file)
  {
    $data = array(
      'liq_uploaded_img' => $file,
      'liq_cv_number' => $this->input->post('cvnumber'),
      'liq_dm_date' => $this->input->post('dmdate'),
      'liq_amount' => $this->input->post('amount'),
      'liq_first_name' => $this->input->post('firstname'),
      'liq_middle_name' => $this->input->post('middlename'),
      'liq_last_name' => $this->input->post('lastname'),
      'liq_client' => $this->input->post('client'),
      'liq_particulars' => $this->input->post('particulars'),
      'liq_date_processed' => $this->input->post('dateprocessed'),   
      );
      $insert = $this->db->insert('tbl_liquidations_form', $data);   
      return $insert;
  }

  public function InsertAnnual($data, $file)
  {
    $data = array(
      'ape_uploaded_img' => $file,
      'ape_id_number' => $this->input->post('idnumber'),
      'ape_first_name' => $this->input->post('firstname'),
      'ape_middle_name' => $this->input->post('middlename'),
      'ape_last_name' => $this->input->post('lastname'),
      'ape_date_of_pe' => $this->input->post('datepe'),
      'ape_laboratory' => $this->input->post('laboratory'),
      'ape_findings' => $this->input->post('findings'),  
      );
      $insert = $this->db->insert('tbl_annual_pe_form', $data);   
      return $insert;
  }

  public function InsertDocument($data, $file)
  {
    $data = array(
      'document' => $file,
      'document_title' => $this->input->post('documenttitle'),
      'document_description' => $this->input->post('description'),
      'types_of_document' => $this->input->post('typesofdocument'),
      'owner' => $this->input->post('owner'),  
      );
      $insert = $this->db->insert('tbl_document', $data);   
      return $insert;
  }

  public function InsertRequest($data, $file)
  {
    $data = array(
      'req_uploaded_img' => $file,
      'req_client_supplier' => $this->input->post('clientsupplier'),
      'req_date_requested' => $this->input->post('daterequested'),
      'req_reference_number' => $this->input->post('referencenumber'),
      'req_check_voucher_number' => $this->input->post('checkvouchernumber'),
      'req_date_issued' => $this->input->post('dateissued'), 
      'req_prepared_by' => $this->input->post('preparedby'), 
      'req_requested_amount' => $this->input->post('requestedamount'), 
      'req_satellite_office' => $this->input->post('satelliteoffice'),
      'req_types_of_loan' => $this->input->post('typesofloan'),    
      );
      $insert = $this->db->insert('tbl_request_for_payments_form', $data);   
      return $insert;
  }
}
?>