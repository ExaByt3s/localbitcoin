<?php

class SignupForm
{

    const min_username_length = 5;
    const min_password_length = 6;

    public static function validateInput($username, $email, $phone, $password, $password2, $inputCaptcha)
    {
        $errors = array();
        if(strlen($username) < self::min_username_length)
        {
            $errors[] = 'Имя пользователя должно быть не короче '.self::min_username_length.' символов';
        }
        if(!preg_match('/^[a-z0-9_]+$/i', $username))
        {
            $errors[] = 'Имя пользователя должно содержать только латинские символы и цифры';
        }
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false)
        {
            $errors[] = 'Неверный email';
        }
        if(strlen($password) < 6)
        {
            $errors[] = 'Минимальная длинна пароля - '.self::min_password_length.' символов';
        }
        if($password !== $password2)
        {
            $errors[] = 'Пароли не совпадают';
        }
        if($inputCaptcha != strtolower($_SESSION['rand_code']))
        {
            $errors[] = 'Неверный ввод с картинки';
        }
        if (!$phone || !is_numeric($phone))
        {
            $errors[] = 'Неверно введён телефон';
        }
        if(User::checkEmailExists($email))
        {
            $errors[] = 'Такой email уже зарегистрирован в системе';
        }
        if(User::checkUsernameExists($username))
        {
            $errors[] = 'Такой username уже используется';
        }
        if(!empty($errors))
        {
            return $errors;
        }
        return false;
    }


}
