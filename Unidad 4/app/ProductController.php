<?php 
    function getProductos(){
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
?>