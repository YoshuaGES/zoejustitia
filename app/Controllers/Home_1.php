<?php

namespace App\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Home extends BaseController
{
    public function index(): string
    {
        $data = ['session' => $this->session];
        return view('index', $data);
    }

    public function about(): string
    {
        $data = ['session' => $this->session];
        return view('about', $data);
    }

    public function member(): string
    {
        $data = ['session' => $this->session];
        $name = $this->request->getGet('name');
        return view('members/' . $name, $data);
    }

    public function service(): string
    {
        $data = ['session' => $this->session];
        return view('service', $data);
    }

    public function blog(): string
    {
        $filter = $this->request->getGet('filter');
        $data = ['session' => $this->session,
            'show_gl' => $filter == 'general-litigation' || $filter == null,
            'show_lc' => $filter == 'legal-consultation' || $filter == null,
            'show_cl' => $filter == 'corporate-law' || $filter == null
        ];
        return view('blog', $data);
    }

    public function contact(): string
    {
        $data = ['session' => $this->session];
        return view('contact', $data);
    }

    public function blogdetail() {
        $data = ['session' => $this->session];
        $id = $this->request->getGet('id');
        return view('blogdetail/blogdetail_' . $id, $data);
    }

    public function setlocale() {    
        $locale = $this->request->getPost('locale');
        if ($locale) {
            $this->session->set('site_language', $locale);
            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Locale not specified']);
        }
    }


    public function sendemail()
    {
    
        $name = filter_var($this->request->getPost('name'), FILTER_SANITIZE_STRING);
        $email = filter_var($this->request->getPost('email'), FILTER_SANITIZE_EMAIL);
        $subject = filter_var($this->request->getPost('subject'), FILTER_SANITIZE_STRING);
        $service = filter_var($this->request->getPost('service'), FILTER_SANITIZE_STRING);
        $message = filter_var($this->request->getPost('message'), FILTER_SANITIZE_STRING);

        $mail = new PHPMailer(true);
 
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'iix1007.idcloudhost.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info2@cacisicaci.masuk.web.id'; // ubah dengan alamat email Anda
            $mail->Password   = 'I;3kx7kjLADL'; // ubah dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
 
            $mail->SetFrom($email, $name);
            $mail->AddAddress("ayurifanny@gmail.com");
        

            // Isi Email
            $mail->isHTML(true);
            $mail->Subject = $service . "-" . $subject;
            $mail->Body    = $message;
 
            $mail->send();
 
         // Pesan Berhasil Kirim Email/Pesan Error
            session()->setFlashdata('success', 'Selamat, email berhasil terkirim!');
            log_message('error', 'Sukses mengirim email. Error: ' . $mail->ErrorInfo);
            return $this->response->setJSON(['status' => 'success']);
        } catch (Exception $e) {
            session()->setFlashdata('error', "Gagal mengirim email. Error: " . $mail->ErrorInfo);
            log_message('error', 'Gagal mengirim email. Error: ' . $mail->ErrorInfo);
            return $this->response->setJSON(['status' => 'failed']);
        }
    }
    
    // public function sendemail() {
    //     // $mail = new PHPMailer; $mail->IsSMTP(); 
    //     // $mail->SMTPSecure = ‘tls’; $mail->Host = "localhost"; 
    //     // //hostname masing-masing provider email 
    //     // $mail->SMTPDebug = 2; 
    //     // $mail->Port = 587; 
    //     // $mail->SMTPAuth = true; 
    //     // $mail->Username = "admin@namadomain"; //user email 
    //     // $mail->Password = "XXXXX"; //password email 
    //     // $mail->SetFrom("admin@namadomain","Nama pengirim yang muncul"); //set email pengirim 
    //     // $mail->Subject = "Pemberitahuan Email dari Website"; //subyek email 
    //     // $mail->AddAddress("admin@namadomain","Nama penerima yang muncul"); //tujuan email $mail->MsgHTML("Testing…"); 

    //     $email_smtp = \Config\Services::email();
    //     $config["protocol"] = "smtp";
    //     $config["SMTPHost"]  = "mail.zoejustitia.com";
    //     $config["SMTPUser"]  = "info@zoejustitia.com"; 
    //     $config["SMTPPass"]  = "~ehRVFovJ8ug"; 
    //     $config["SMTPPort"]  = 465;
    //     $config["SMTPCrypto"] = "ssl";
    
    //     $email_smtp->initialize($config);
    
    //     $name = filter_var($this->request->getPost('name'), FILTER_SANITIZE_STRING);
    //     $email = filter_var($this->request->getPost('email'), FILTER_SANITIZE_EMAIL);
    //     $subject = filter_var($this->request->getPost('subject'), FILTER_SANITIZE_STRING);
    //     $service = filter_var($this->request->getPost('service'), FILTER_SANITIZE_STRING);
    //     $message = filter_var($this->request->getPost('message'), FILTER_SANITIZE_STRING);
    
    //     $email_smtp->setFrom($email, $name);
    //     $email_smtp->setTo("ayurifanny@gmail.com");
    //     $email_smtp->setSubject($service . "-" . $subject);
    //     $email_smtp->setMessage($message);
    
    //     if($email_smtp->send()) {
    //         return $this->response->setJSON(['status' => 'success']);
    //     } else {
    //         return $this->response->setJSON(['status' => 'fail', 'message' => $email_smtp->printDebugger(['headers'])]);
    //     }
    // }
}
