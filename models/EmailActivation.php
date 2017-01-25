<?php

defined('_JEXEC') or die('Restricted access');

class EmailActivation
{

    const VERIFY_URL = '/user/verify';

    public static function generateVerifyString()
    {
        $verify_string = '';
        for($i = 0; $i < 16; $i++)
        {
            $verify_string .= chr(mt_rand(32, 126));
        }
        return $verify_string;
    }

    public static function sendEmail($email, $verify_string)
    {
            $verify_string = urlencode($verify_string);
            $safe_email = urlencode($email);
            $url = SITE_URL.self::VERIFY_URL;
            $to = $email;

            $subject = "Account activation - LocalBitcoins";

            $message = " 
            <html> 
                <head> 
                    <title>Account activation - LocalBitcoins</title> 
                </head> 
                <body> 
                    <p>For: $email:</p>
                    <p>For activation account click <a href='$url?email=$safe_email&verify_string=$verify_string'>$url?email=$safe_email&verify_string=$verify_string</a></p>
                    <br /> =============== <br /> 
                    <p>Для $email:</p>
                    <p>Пожалуйста, перейдите по следующей ссылке для активации вашего аккаунта:</p>
                    <p><a href='$url?email=$safe_email&verify_string=$verify_string'>$url?email=$safe_email&verify_string=$verify_string</a></p>
                    <p>Ссылка работает 7 дней, если не подтвердить аккаунт в течение этого времени, он будет удалён.</p>
                </body> 
            </html>";

            $headers = "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: Bit Interactive <noreply@bit.team>\r\n";
            mail($to, $subject, $message, $headers);
        }

    public static function sendMessage($topic, $email, $message, $username)
    {
        $message = "From cabinet/support. From $username (answer to $email): $message";
        $headers = 'Content-type: text/html; charset=windows-1251 \r\n';
        
        $topic = iconv('utf-8', 'windows-1251', $topic);
        //$email = urlencode($email);
        $message = iconv('utf-8', 'windows-1251', $message);
        
        return mail(ADMIN_EMAIL, $topic, $message, $headers);
    }
}
