<?php 

if(isset($_POST['action'])){
    switch($_POST['action']){
        case 'create':
            $productC = new ProductController();

            $name = strip_tags($_POST['name']);
            $slug = preg_replace('/\s+/', '-', strtolower(strip_tags($_POST['name'])));
            $brand_id = strip_tags($_POST['brand_id']);
            $features = strip_tags($_POST['features']);
            $description = strip_tags($_POST['description']);
            
            $productC->create($name, $slug, $brand_id, $features, $description);
        break;
    }
}

Class ProductController{
    public function create($name, $slug, $brand_id, $features, $description){
        var_dump($name);
        var_dump($slug);
        var_dump($brand_id);
        var_dump($features);
        var_dump($description);

        session_start();
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://crud.jonathansoto.mx/api/products',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('name' => $name,'slug' => $slug,'description' => $description,'features' => $features,'brand_id' => $brand_id,'cover'=> null),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $_SESSION['userData']->token
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        if(isset($response->code) && $response->code > 0){
            header("Location:../public/index.php?success=true");
        }
        else{
            echo 'Error';
            header("Location:../public/index.php?error=true");
        }
    }

    public function getProductos(){
        $curl = curl_init();
                    
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://crud.jonathansoto.mx/api/products',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['userData']->token,
                'Cookie: XSRF-TOKEN=eyJpdiI6Im1PUVJmZ3IxUTNFU3ZPT3dKRGIzeEE9PSIsInZhbHVlIjoiQWN6RFhncFRCc0JsYmlkUW1wcWVmY3VZdHVoU1N2ZGlDYVpRN2FSNGx3K3JXdkowTm9uNnEzZ1JvcFhOTm9IY3VXZkpUYXpCc0srcVl0NTNZNndvZzgvTy8wRWoySzA4Rm9jR3FiZTA5eUlheThhTzJUb1l3b0pTUWp6VEdDR1kiLCJtYWMiOiIwMThiYTAyZTJiYzliYzMzMThmYjgxNTVhMzRlYzg1MWZjMTk3ODk2N2IyNmE5NzdjM2ExMDVjNWVmZGRkYzE0IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IlpvT0hpSHB1M0VTNjhtM3QvMElFelE9PSIsInZhbHVlIjoiN1VCRHpNTCtkUkFXSUF4UnVRbWdLUDcxMDFTRDRjb2tlRVVxMVk3cW9jcy92SlZKUUJSVTA1QTZ0Um1CSXZnMDVEN3QwcmlLaTNqdXhmOG9EbjU5ejFVdkNndzFWa0Z6TldMWmtNQ0pOb1dNaDlQaGp5TDRpMXBZT2ZCV1RMbzEiLCJtYWMiOiI5N2U2NzY5NjZlM2ExNzczZGIxZDNhNTc1YmFiOTA0ZDQxZWQwNzU0NTE5NDY1MTM5MTRiOGE5ODliYTE0ZmEwIiwidGFnIjoiIn0%3D'
            ),
            ));

            $response = curl_exec($curl);
            $productos = json_decode($response)->data;
            curl_close($curl);

            return $productos;
    }
}
?>