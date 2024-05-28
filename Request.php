<?php

class Request
{
    private array $methods = ['get', 'post'];
    public function getMethod(): string
    {
        $currentMethod = strtolower($_SERVER['REQUEST_METHOD']);
        if (!in_array($currentMethod, $this->methods)) {
            header('Location:http://localhost:8080/index.php', true, 302);
            exit;
        }
        return $currentMethod;
    }
    public function render(): void
    {
        $method = $this->getMethod();
        if ($method === 'get' || !empty($name) || !empty($email)) {
            $name = $_GET['name'];
            $email = $_GET['email'];
            echo 'Hello! This is are ' . $method . ' request method';
            echo '<br>';
            echo 'My name is ' . $name;
            echo '<br>';
            echo 'My email is ' . $email;

        } elseif ($method === 'post' || !empty($numberOne) || !empty($numberTwo)) {
            $numberOne = $_POST['number-one'];
            $numberTwo = $_POST['number-two'];
            $summa = $numberOne + $numberTwo;
            echo $numberOne . '+' . $numberTwo . ' = ' . $summa;
        } else {
            echo 'Enter are number';
        }

    }
}
$request = new Request();
$request->render();