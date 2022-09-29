<?php 

if(isset($_POST['action'])){
    switch($_POST['action']){
        case 'access':
            $authC = new AuthController();

            $email = strip_tags($_POST['email']);
            $password = strip_tags($_POST['password']);
            
            $authC->login($email, $password);
        break;
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

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        $response = json_decode($response);

        if(isset($response->code) && $response->code > 0){
            session_start();
            $_SESSION['userData'] = $response->data;
            header("Location:../public/index.php");
        }
        else{
            header("Location:../public/login.php?error=true");
        }
    }
}

?>