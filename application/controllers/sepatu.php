<?php
class Sepatu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-sepatu');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('nm', 'Nama', 
        'required|min_length[3]', [
            'required' => 'Nama Harus Diisi',
            'min_lenght' => 'Nama terlalu pendek',
        ]);

        $this->form_validation->set_rules('no', 'No Hp', 
        'required|min_length[3]', [
            'required' => 'Nomor Harus diisi',
            'min_lenght' => 'Nomor terlalu pendek'
        ]);

        $this->form_validation->set_rules('merk', 'Merk', 
        'required', [
            'required' => 'Merk Harus diisi',
        ]);

        $this->form_validation->set_rules('uk', 'Ukuran ', 
        'required', [
            'required' => 'Ukuran Sepatu Harus diisi',

        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-sepatu');
        } else {
            $this->load->model('harga');
            $hrg = $this->harga->hrg();
            $data = [
                'nm' => $this->input->post('nm'),
                'no' => $this->input->post('no'),
                'merk' => $this->input->post('merk'),
                'uk' => $this->input->post('uk'),
                'harga' => $hrg,];
                $this->load->view('view-data-sepatu', $data);
            }
    }
}
 
 
          
