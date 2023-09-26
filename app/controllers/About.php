<?php

class About extends Controller
{
    public function index($nama = " Rizki",$umur=16, $pekerjaan = "Programmer")
    {
        $data=[
            'nama' => $nama,
            'pekerjaan' => $pekerjaan,
            'umur' => $umur,

        ];
        $data['judul']="about me";
        // $data['nama'] = $nama;
        // $data['pekerjaan'] = $pekerjaan;
        // $data['umur'] = $umur;
        $this->view('templates/header',$data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul']="page me";
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}