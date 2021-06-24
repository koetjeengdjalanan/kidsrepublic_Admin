<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data['title'] = "Dashboard Admin";
        return view('admin', $data);
    }

    public function sendmail_test()
    {
        $to = $this->request->getVar('email');
        // dd($to);
        // $subject = $this->request->getVar('subject');
        // $message = $this->request->getVar('message');

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        function generate_string($input, $strength = 16)
        {
            $input_length = strlen($input);
            $random_string = '';
            for ($i = 0; $i < $strength; $i++) {
                $random_character = $input[mt_rand(0, $input_length - 1)];
                $random_string .= $random_character;
            }

            return $random_string;
        }
        $code = generate_string($permitted_chars, 16);
        $email_smtp = \Config\Services::email();
        // $email_smtp_smtp_config = array(
        //     'protocol' => 'mail',
        //     'charset' => 'utf-8',
        //     'mailType' => 'html'
        // );
        // $emai->initialize($email_smtp_config);
        $email_smtp->setTo($to);
        $email_smtp->setFrom("noreply@kidsrepublic.sch.id", "Kids Republic");

        $email_smtp->setSubject("Hi From kids Republic!");
        $body = view('mail/annotations.php');
        // $email_smtp->SetMessage("Please pay your total sum of Rp. 123123123,- To Kr and submit your reciept with this code = " . $code);
        $email_smtp->SetMessage($body);

        if ($email_smtp->send()) {
            session()->setFlashdata('success', 'success');
            return redirect()->to(base_url());
        } else {
            $data = $email_smtp->printDebugger(['headers']);
            print_r($data);
        }
    }
}
