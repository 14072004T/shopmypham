<?php
include_once("model/mProduct.php");
class CProduct{
    public function getAllProduct(){
        $p = new MProduct();
        $table = $p->getAllProduct();
        
        if($table){
            if($table->num_rows>0){
                return $table;
            }
        }else{
            return false;
        }
    }

    public function getAllProductByType($type){
        $p = new MProduct();
        $table = $p->getAllProductByType($type);
        
        if($table){
            if($table->num_rows>0){
                return $table;
            }
        }else{
            return false;
        }
    }

    public function getAllProductByName($name){
        $p = new MProduct();
        $table = $p->getAllProductByName($name);
        
        if($table){
            if($table->num_rows>0){
                return $table;
            }
        }else{
            return false;
        }
    }
    public function getProductById($id){
        $p = new MProduct();
        $product = $p->getProductById($id);
        if($product){
            return $product;
        }else{
            return false;
        }
    }
    public function addProduct($TenSP, $DonGia, $SoLuong, $MaLSP, $HinhAnh, $MoTa){
        $p = new MProduct();
        $kq = $p->addProduct($TenSP, $DonGia, $SoLuong, $MaLSP, $HinhAnh, $MoTa);
        return $kq;
    }
    public function deleteProduct($product_id){
        $p = new MProduct();
        $kq = $p->deleteProduct($product_id);
        return $kq;
    }
    public function updateProduct($product_id, $TenSP, $DonGia, $SoLuong, $MoTa, $MaLSP, $HinhAnh){
        $p = new MProduct();
        $kq = $p->updateProduct($product_id, $TenSP, $DonGia, $SoLuong, $MoTa, $MaLSP, $HinhAnh);
        return $kq;
    }
}



?>