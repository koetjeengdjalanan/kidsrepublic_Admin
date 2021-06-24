<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use TCPDF;
use \App\Models\BuyFormModel;
use \App\Models\A1FormModel;
use \App\Models\A2FormModel;
use \App\Models\UsersModel;
use \App\Models\StudentDetailModel;
use \App\Models\InvoiceStatusModel;
use \App\Models\PricelistModel;
use \App\Models\GroupModel;
use \App\Models\FormFileModel;

class Finance extends BaseController
{
    protected $buyForm;
    protected $a1form;
    protected $a2form;
    protected $users;
    protected $studentDetail;
    protected $email_smtp;
    protected $invoiceStatus;
    protected $pricelist;
    protected $group;
    protected $formFile;

    public function __construct()
    {
        $this->buyForm          = new BuyFormModel();
        $this->a1form           = new A1FormModel();
        $this->a2form           = new A2FormModel();
        $this->users            = new UsersModel();
        $this->studentDetail    = new StudentDetailModel();
        $this->invoiceStatus    = new InvoiceStatusModel();
        $this->pricelist        = new PricelistModel();
        $this->group            = new GroupModel();
        $this->formFile         = new FormFileModel();
        $this->email_smtp = \Config\Services::email();
    }

    public function index()
    {
        $pricelist = $this->pricelist->findAll();
        $data = [
            "title" => "Dashboard",
            "pricelist" => $pricelist
        ];
        return view('finance/index', $data);
    }

    public function registration()
    {
        $student = $this->buyForm->getWhere(['status' => 1])->getResultArray();
        $data = [
            'title'   => 'Registration',
            'student' => $student
        ];
        return view('finance/registration', $data);
    }

    public function invoice()
    {
        $students = $this->studentDetail->select('`users`.`id`, `student_details`.`nis`, `student_details`.`name`, `users`.`email`, `users`.`username`, `student_details`.`address`, `student_details`.`city`, `student_details`.`phone`, `invoice_status`.`no_invoice`, `invoice_status`.`status`, `invoice_status`.`created_at`, `invoice_status`.`updated_at`,`auth_groups_users`.`group_id`')
            ->join('users', 'student_details.users_id = users.id', 'RIGHT')
            ->join('invoice_status', 'student_details.nis = invoice_status.student_nis', 'RIGHT')
            ->join('`auth_groups_users`', 'student_details.users_id = auth_groups_users.user_id', 'RIGHT')
            ->where('invoice_status.status !=', '3')
            ->findAll();
        foreach ($students as $key => $value) {
            $price = $this->pricelist->find($value['group_id']);
            $group = $this->group->find($value['group_id']);
            $formFile = $this->formFile->where('users_id', $value['id'])->find();
            $students[$key]['payment'] = $price;
            $students[$key]['group'] = $group;
            $students[$key]['formfile'] = $formFile;
        }
        $data = [
            'title'     => 'Invoice',
            'students'  => $students,
        ];
        return view('finance/invoice', $data);
    }

    public function receipt()
    {
        # code...
        $students = $this->formFile
            ->join('users', 'form_file.users_id = users.id', 'RIGHT')
            ->join('student_details', 'form_file.users_id = student_details.users_id', 'RIGHT')
            ->join('`auth_groups_users`', 'form_file.users_id = auth_groups_users.user_id', 'RIGHT')
            ->where('invoice!=', NULL)
            ->whereNotIn('')
            ->findAll();
        foreach ($students as $key => $value) {
            $group = $this->group->find($value['group_id']);
            $students[$key]['group'] = $group;
        }
        $data = [
            'title' => 'Receipt',
            'students' => $students
        ];
        return view('finance/receipt', $data);
    }

    /**
     * Input data admission
     */

    public function accept($id)
    {
        $data = ['status' => 2];

        # send email berhasil ke user
        $to_mail = $this->buyForm->select('email')->where('id', $id)->first();
        $this->email_smtp->setFrom("noreply@kidsrepublic.sch.id", "Kids Republic");
        $this->email_smtp->setTo($to_mail);
        $this->email_smtp->setSubject('Register Your Account');
        $this->email_smtp->setMessage('Use this Link <a href="http://101.255.120.81:21280/public/register">Click Here</a> to register your account!');
        if ($this->email_smtp->send()) {
            $this->buyForm->where("id", $id)->set($data)->update();
            return redirect()->to('/finance/registration');
        } else {
            $data = $this->email_smtp->printDebugger(['headers']);
            print_r($data);
        }
    }

    public function denied($id)
    {
        $exists     = $this->buyForm->where('id', $id)->first();
        $dir_path   = 'assets/upload/invoice/';
        if ($exists != null) unlink(base_url($dir_path) . $exists['invoice']);
        $data = ['status' => 0];
        $this->buyForm->where("id", $id)->set($data)->update();

        # Send email gagal ke user
        return redirect()->to('/finance');
    }

    public function acceptReceipt($nis, $email)
    {
        $this->email_smtp->setFrom("noreply@kidsrepublic.sch.id", "Kids Republic");
        $this->email_smtp->setTo($email);
        $this->email_smtp->setSubject('Register Your Account');
        $this->email_smtp->setMessage('Use this Link <a href="http://101.255.120.81:21280/public/register">Click Here</a> to register your account!');
        if ($this->email_smtp->send()) {
            // $this->buyForm->where("id", $id)->set($data)->update();
            $data = [
                'student_nis' => $nis
            ];
            $this->a1form->insert($data);
            return redirect()->to('/finance/receipt');
        } else {
            $data = $this->email_smtp->printDebugger(['headers']);
            print_r($data);
        }
    }
    public function deniedReceipt($nis)
    {
        return view('finance/print/invoice_mail');
    }

    public function print($nis)
    {
        # Ambil data siswa dan biaya enrollment
        $students = $this->studentDetail->select('`users`.`id`, `student_details`.`nis`, `student_details`.`name`, `users`.`email`, `users`.`username`, `student_details`.`address`, `student_details`.`city`, `student_details`.`phone`, `invoice_status`.`no_invoice`, `invoice_status`.`status`, `invoice_status`.`updated_at`,`auth_groups_users`.`group_id`')
            ->join('users', 'student_details.users_id = users.id', 'RIGHT')
            ->join('invoice_status', 'student_details.nis = invoice_status.student_nis', 'RIGHT')
            ->join('`auth_groups_users`', 'student_details.users_id = auth_groups_users.user_id', 'RIGHT')
            ->where('nis', $nis)
            ->first();
        $price = $this->pricelist->find($students['group_id']);
        $students['payment'] = $price;
        $data = ["students" => $students];
        # Dimasukan kedalam view data tersebut untuk dicetak nantinya
        $body = view('finance/print/test_invoice', $data);

        # Set pdfnya
        /**
         * 
         * Output Cheatsheet
         * I: send the file inline to the browser (default).
         * D: send to the browser and force a file download with the name given by name.
         * F: save to a local server file with the name given by name.
         * S: return the document as a string (name is ignored).
         * FI: equivalent to F + I option
         * FD: equivalent to F + D option
         * E: return the document as base64 mime multi-part email attachment (RFC 2045)
         */
        $pdf = new TCPDF('landscape', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Kids Republic');
        $pdf->SetTitle('Invoice Enrollment Fees');
        $pdf->SetSubject('Invoice');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetMargins(5, 3, 5);
        $pdf->SetHeaderMargin(0);
        $pdf->SetFooterMargin(0);
        $pdf->AddPage();
        $pdf->writeHTML($body, true, false, true, false, '');
        $this->response->setContentType('application/pdf');
        $pdf->Output('invoice.pdf', 'I');
        exit;
    }

    public function send($nis, $to)
    {
        # Ambil data siswa dan biaya enrollment
        $students = $this->studentDetail->select('`users`.`id`, `student_details`.`nis`, `student_details`.`name`, `users`.`email`, `users`.`username`, `student_details`.`address`, `student_details`.`city`, `student_details`.`phone`, `invoice_status`.`no_invoice`, `invoice_status`.`status`, `invoice_status`.`updated_at`,`auth_groups_users`.`group_id`')
            ->join('users', 'student_details.users_id = users.id', 'RIGHT')
            ->join('invoice_status', 'student_details.nis = invoice_status.student_nis', 'RIGHT')
            ->join('`auth_groups_users`', 'student_details.users_id = auth_groups_users.user_id', 'RIGHT')
            ->where('nis', $nis)
            ->first();
        $price = $this->pricelist->find($students['group_id']);
        $students['payment'] = $price;
        $data = ["students" => $students];

        # Dimasukan kedalam view data tersebut untuk dicetak nantinya

        # buat ngedit aktifin return $body nya
        // return $body;

        # Buat attachment pdf di emailnya
        // $dompdf = new Dompdf();
        // $options = $dompdf->getOptions();
        // // dd($options);
        // $dompdf->setBasePath("/var/www/html/public");
        // $options->setIsHtml5ParserEnabled(true);
        // $options->setIsPhpEnabled(true);
        // $options->setIsRemoteEnabled(true);
        // $options->setChroot("/var/www/html/public");
        // $dompdf->setOptions($options);
        // $dompdf->loadHTML($body);
        // $dompdf->setPaper('A4', 'potrait');
        // $dompdf->render();
        // // return $dompdf->stream("", array("Attachment" => false));
        // $pdfs = $dompdf->output();

        # Dimasukan kedalam view data tersebut untuk dicetak nantinya
        $body = view('finance/print/test_invoice', $data);

        # Set pdfnya
        /**
         * 
         * Output Cheatsheet
         * I: send the file inline to the browser (default).
         * D: send to the browser and force a file download with the name given by name.
         * F: save to a local server file with the name given by name.
         * S: return the document as a string (name is ignored).
         * FI: equivalent to F + I option
         * FD: equivalent to F + D option
         * E: return the document as base64 mime multi-part email attachment (RFC 2045)
         */
        $pdf = new TCPDF('landscape', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Kids Republic');
        $pdf->SetTitle('Invoice Enrollment Fees');
        $pdf->SetSubject('Invoice');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $pdf->writeHTML($body, true, false, true, false, '');
        $result = $pdf->Output('invoice.pdf', 'S');

        // $body = view('finance/print/invoice_regist', $data);
        // return $body;
        // $this->email_smtp->setMailType('html');
        $this->email_smtp->setPriority(1);
        // $this->email_smtp->setHeader('MIME-Version', '1.0; charset=utf-8');
        // $this->email_smtp->setHeader('Content-type', 'text/html');
        $this->email_smtp->setTo($to);
        $this->email_smtp->setFrom("noreply@kidsrepublic.sch.id", "Kids Republic");
        $this->email_smtp->setSubject("Invoice Registration from Kids Republic!");
        $this->email_smtp->attach($result, 'attachment', 'invoice.pdf', 'application/pdf');
        $this->email_smtp->SetMessage($body);
        // dd($this->email_smtp);


        if ($this->email_smtp->send()) {
            $data = ['status' => 1];
            $this->invoiceStatus->where("student_nis", $nis)->set($data)->update();
            session()->setFlashdata('success', 'success');
            return redirect()->to('/finance/invoice');
        } else {
            $data = $this->email_smtp->printDebugger(['headers']);
            print_r($data);
        }
    }

    public function verif($nis)
    {
        $data = ['status' => 3];
        $this->invoiceStatus->where("student_nis", $nis)->set($data)->update();
        $data = [
            'student_nis' => $nis
        ];
        $this->a1form->insert($data);
        return redirect()->to('/finance/invoice');
    }

    public function unverif($nis)
    {
        $data = ['status' => 1];
        $this->invoiceStatus->where("student_nis", $nis)->set($data)->update();
        return redirect()->to('/finance/invoice');
    }

    public function updatePrice()
    {
        foreach ($this->request->getVar() as $key => $value) {
            if ($key == "csrf_test_name") continue;
            if ($key === "pma_lang") break;
            $data[$key] = $value;
        }
        $data['updated_by'] = user()->username;
        $this->pricelist->save($data);
        session()->setFlashdata('success', 'success');
        return redirect()->to('/finance');
    }
}
