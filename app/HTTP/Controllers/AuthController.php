<?php

namespace App\HTTP\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Core\Session;
use App\Models\AuthModel;
use App\Core\Validate;
use App\Core\Application;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class AuthController extends Controller
{
    use Validate;

    private $users;

    public function __construct()
    {
        $this->users = new AuthModel();
    }

    public function login()
    {
        if (Request::isGet()) {
            Controller::render('client/auth/login');
        } else {
            $this->handleLogin();
        }
    }

    public function register()
    {
        if (Request::isGet()) {
            Controller::render('client/auth/register');
        } else {
            $this->handleRegister();
        }
    }

    public function forgot_password()
    {
        if (Request::isGet()) {
            Controller::render('client/auth/forgot_password');
        } else {
            $this->handleForgot();
        }
    }

    public function code()
    {
        if (Request::isGet()) {
            Controller::render('client/auth/confirm_code');
        } else {
            Controller::render('errors/_404');
        }
    }

    // đăng xuât
    public function logout()
    {
        Session::destroy();
        Response::redirect('');
    }

    //============================================
    private function handleLogin()
    {
        self::validateLogin();
        $validate = Request::validate();

        if (!$validate) {
            $this->data['errors'] = Request::errors();
            $this->data['old'] = Request::getFields();
            Controller::render('client/auth/login', $this->data);
        } else {
            $this->processLogin();
        }
    }

    private function processLogin()
    {
        $dataUser = Request::getFields();
        $admin = $this->users::findUserByEmail($dataUser['email']);

        if ($admin && password_verify($dataUser['password'], $admin['password'])) {
            $this->handleSuccessfulLogin($admin);
        } else {
            $this->handleFailedLogin($admin, $dataUser);
        }
    }

    private function handleSuccessfulLogin($admin)
    {
            Application::$app->session->set('user', $admin);
//            Application::$app->session->setFlash('success', 'Đăng nhập thành công!');
            $redirectPath = $admin['role'] == 1 ? 'dashboard' : 'trang-chu';
            Response::redirect($redirectPath);
    }

    private function handleFailedLogin($admin, $dataUser)
    {
        $errorMessage = "!Chú ý: " . ($admin && $admin['email'] == $dataUser['email'] ? 'Sai mật khẩu.' : 'Sai email.');
        Session::setFlash('success', $errorMessage);
        Response::redirect('');
    }

    private function handleRegister()
    {
        self::validateRegister();
        $validate = Request::validate();

        if (!$validate) {
            $this->data['errors'] = Request::errors();
            $this->data['old'] = Request::getFields();
            Controller::render('client/auth/register', $this->data);
        } else {
            $this->processRegister();
        }
    }

    private function processRegister()
    {
        $data = Request::getFields();

        $userData = [
            'name' => $data['fullname'],
            'email' => $data['email'],
            'password' => password_hash($data['password'], PASSWORD_DEFAULT)
        ];

        Session::setFlash('success', 'Đăng ký thành công!');
        $result = $this->users::addAuth($userData);

        if (!$result) {
            Response::redirect('dang-ki');
        }
    }

    // =============== Forgot Password ===============


}