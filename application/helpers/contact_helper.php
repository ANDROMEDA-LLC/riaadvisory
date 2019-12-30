
<?php

function sendEmail($to_email, $name, $message) {
    $ci = get_instance();
    $config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'ali.osman0386@gmail.com',
        'smtp_pass' => 'usvmgvxvfmvyinqr',
        'mailtype' => 'html',
        'charset' => 'utf-8',
    );
    $ci->load->library('email', $config);
    $ci->email->set_newline("\r\n");
    $ci->email->from($to_email, $name);
    $ci->email->to('ali.osman0386@gmail.com');
    $ci->email->subject('You have a new email from riaadvisory.com');
    $ci->email->message($message);

    if ($ci->email->send()) {
        return true;
    } else {
        return false;
    }
}
