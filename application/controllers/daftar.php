<?php
class Daftar extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-daftar');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 
        'required|min_length[3]', [
            'required' => 'NIM Harus diisi',
            'min_lenght' => 'NIM terlalu pendek']);
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 
        'required|min_length[3]', [
            'required' => 'Nama Harus diisi',
            'min_lenght' => 'Nama terlalu pendek']);
        $this->form_validation->set_rules('lahir', 'Kode Matakuliah', 
        'required|min_length[3]', [
            'required' => 'Tempat Lahir Harus diisi',
            'min_lenght' => 'Tempat Lahir terlalu pendek']);
        $this->form_validation->set_rules('alamat', 'Kode Matakuliah', 
        'required|min_length[3]', [
            'required' => 'Alamat Harus diisi',
            'min_lenght' => 'Alamat terlalu pendek']);
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-daftar');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'tanggal' => $this->input->post('tanggal'),
                'lahir' => $this->input->post('lahir'),
                'alamat' => $this->input->post('alamat'),];
            $this->load->view('view-data-daftar', $data);
 }
 }
}
