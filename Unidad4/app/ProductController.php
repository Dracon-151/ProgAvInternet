<?php 
include_once "config.php";

if(isset($_POST['action'])){
    if(isset($_POST['token']) && $_POST['token'] == $_SESSION['token']){
        switch($_POST['action']){
            case 'create':
                $productC = new ProductController();

                $name = strip_tags($_POST['name']);
                $slug = preg_replace('/\s+/', '-', strtolower(strip_tags($_POST['name'])));
                $brand_id = strip_tags($_POST['brand_id']);
                $features = strip_tags($_POST['features']);
                $description = strip_tags($_POST['description']);
                
                $target_path = BASE_PATH . "public/img/products/";
                $target_path = $target_path . basename( $_FILES['productImage']['name']); 
                if(move_uploaded_file($_FILES['productImage']['tmp_name'], $target_path)) {
                    
                    $productC->create($name, $slug, $brand_id, $features, $description, $target_path);
                } else{
                    echo "Ha ocurrido un error, trate de nuevo!";
                }
                
            break;
            case 'update':
                $productC = new ProductController();

                $name = strip_tags($_POST['name']);
                $slug = preg_replace('/\s+/', '-', strtolower(strip_tags($_POST['name'])));
                $brand_id = strip_tags($_POST['brand_id']);
                $features = strip_tags($_POST['features']);
                $id = strip_tags($_POST['id']);
                $description = strip_tags($_POST['description']);
                
                $productC->update($name, $slug, $brand_id, $features, $description, $id);
                
            break;
            case 'delete':
                $productC = new ProductController();
                
                $id = strip_tags($_POST['id']);
            
                $productC->delete($id);
                
            break;
        }
    }
}

Class ProductController{
    public function create($name, $slug, $brand_id, $features, $description, $image){
    
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
        CURLOPT_POSTFIELDS => array('name' => $name,'slug' => $slug,'description' => $description,'features' => $features,'brand_id' => $brand_id,'cover'=> new CURLFILE($image)),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $_SESSION['userData']->token
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        if(isset($response->code) && $response->code > 0){
            header('Location: ' . BASE_PATH . 'index?success=true');
        }
        else{
            echo 'Error';
            header('Location: ' . BASE_PATH . 'index?error=true');
        }
    }

    public function update($name, $slug, $brand_id, $features, $description, $id){
    
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://crud.jonathansoto.mx/api/products',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'PUT',
          CURLOPT_POSTFIELDS => 'name='. $name .'&slug=' . $slug . '&description='. $description .'&features='. $features .'&brand_id='. $brand_id .'&id='. $id,
          CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $_SESSION['userData']->token,
            'Content-Type: application/x-www-form-urlencoded',
            ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);

       $response = json_decode($response);

        if(isset($response->code) && $response->code > 0){
            header('Location: ' . BASE_PATH . 'index?success=true');
        }
        else{
            echo 'Error';
            header('Location: ' . BASE_PATH . 'index?error=true');
        }
    }

    public function delete($id){
        

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://crud.jonathansoto.mx/api/products/'.$id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $_SESSION['userData']->token
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        $_SESSION['action'] = $response->data;
        
        if(isset($response->code) && $response->code > 0){
            return true;
        }
        else{
            return false;
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
            ),
            ));

            $response = curl_exec($curl);
            $productos = json_decode($response)->data;
            curl_close($curl);

            return $productos;
    }

    public function getBrands(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://crud.jonathansoto.mx/api/brands',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $_SESSION['userData']->token,
            ),
        ));

        $response = curl_exec($curl);

        $brands = json_decode($response)->data;
        curl_close($curl);

        return $brands;

        curl_close($curl);
    }

    public function getProductoDetails($slug){
        $curl = curl_init();
                
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://crud.jonathansoto.mx/api/products/slug/' . $slug,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer ' . $_SESSION['userData']->token,
        ),
        ));

        $response = curl_exec($curl);
        $producto = json_decode($response)->data;
        curl_close($curl);

        return $producto;
    }
}
?>