<?php 

include_once "config.php";

if(isset($_POST['action'])){
    if(isset($_POST['token']) && $_POST['token'] == $_SESSION['token']){
        switch($_POST['action']){
            case 'access':
                $authC = new AuthController();
    
                $email = strip_tags($_POST['email']);
                $password = strip_tags($_POST['password']);
                
                $authC->login($email, $password);
            break;
        }
    }
}

Class AuthController{
    public function login($email, $password){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://crud.jonathansoto.mx/api/login',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('email' => $email,'password' => $password),
        ));

        #l8&h83&rNY82mc
        #12|QdcAQTNncura74kcm0hiXAhmMTFX3XDVqvcVN3pe

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        if(isset($response->code) && $response->code > 0){
            $_SESSION['userData'] = $response->data;
            header('Location: ' . BASE_PATH . 'public/index.php');
        }
        else{
            header('Location: ' . BASE_PATH . 'public/login.php?error=true');
        }
    }
}

?>