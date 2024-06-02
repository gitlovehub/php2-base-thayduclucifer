<?php 

namespace MyNamespace\MyProject\Controllers;

use MyNamespace\MyProject\Common\Controller;
use MyNamespace\MyProject\Common\Helper;
use Rakit\Validation\Validator;

class HomeController extends Controller
{
    public function index() {
        $this->renderClient('home', []);
    }

    public function testValidation() {
        $validator = new Validator;

        // make it
        $validation = $validator->make($_POST, [
            'name'                  => 'required',
            'email'                 => 'required|email',
        ]);

        // then validate
        $validation->validate();

        if ($validation->fails()) {
            // handling errors
            $_SESSION["errors"] = $validation->errors()->firstOfAll();
            header('Location: ' . $_ENV['BASE_URL']);
            exit();
        } else {
            // validation passes
            $_SESSION["success"] = 'All done!';
            header('Location: ' . $_ENV['BASE_URL']);
            exit();
        }
    }
}