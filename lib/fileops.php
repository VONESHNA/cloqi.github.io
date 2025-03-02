<?php

class Fileops{
    public static function getmixedno($totalchar)
    {
        $abc= array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
        $mixedno = "";
        for($i=0; $i<=$totalchar; $i++)
        {
            $mixedno .= $abc[rand(0,35)];
        }
        return $mixedno;
    }
    public static function filesize($filesize){
        $s=trim($filesize);
        $s>0?$s=1:$s=0;
        return $s;
    }
    public static function filerror($error){
        $e=trim($error);
        $e>0?$e=1:$e=0;
        return $e;
    }
    public static function tmpexists($tmp){
        $t=trim($tmp);
        isset($t) && $t!==''?$t=1:$t=0;
        return $t;
    }
    public static function fileread($read){
        $r=trim($read);
        is_readable($read)?$r=1:$r=0;
        return $r;
    }
    public static function namexists($name){
        $n=trim($name);
        isset($n) && $n!=''?$n=1:$n=0;
        return $n;
    }
    public static function getext($fname){
      return strtolower(pathinfo($fname, PATHINFO_EXTENSION));
    }
    public static function allowedextn($ext, $exts){
        $ext=trim($ext);$exts = $exts;
        in_array($ext,$exts)?$ext=1:$ext=0;
        return $ext;
    }
    public static function getnow(){
        $now=date('B').date('U');
        return $now;
    }
    public static function  getprefix(){
        $now=static::getnow();
        $prefix=$now.strtolower(static::getmixedno(1));
        return $prefix;
    }
    public static function getfname($prefix, $ext){
        $p=trim($prefix);
        $ext=trim($ext);
        $fname=$p.'.'.$ext;
        return $fname;
    }
    public static function shallupload($s,$e,$t,$n,$ext){
        $size=$s;$error=$e;$tmp=$t;$name=$n;$allowedextn=$ext;
        $size>0 && $error!=4 && $tmp==1 && $name==1 && $allowedextn==1?$do=1:$do=0;
        return $do;
    }
    public static function doupload($file,$dir){
        $f=trim($file);$d=trim($dir);
        move_uploaded_file($f,$d)==1?$r=1:$r=0;
        return $r;
    }
    public static function uploadfile($controlname, $extention, $uploadfolder, $prefix) {
             $prefix=trim($prefix);
             $fname=$_FILES[$controlname]['name'];
             $tmp=$_FILES[$controlname]['tmp_name'];
             $size=static::filesize($_FILES[$controlname]['size']);//1
             $error=static::filerror($_FILES[$controlname]['error']);//0
             $tmpexist=static::tmpexists($tmp);//1
             $name= static::namexists($fname);//1
             $read= static::fileread($tmp);//1
             $updir=$uploadfolder;
             $ext= static::getext($fname);
             $allowedextn=static::allowedextn($ext,$extention);//1
             $prefix.=static::getprefix();
             $prefix= $prefix;
             $fname=static::getfname($prefix, $ext);
             $tmpname=$tmp;
             $shallupload=static::shallupload($size,$error,$tmpexist,$name,$allowedextn);
             if($shallupload==1){
                $doupload=static::doupload($tmpname,$updir.$fname);
                $doupload==1?$r=1:$r=0;
                return $fname;
              }else{return 0;}
    }

    public static function uploadfiles($sizes, $tmps, $names, $extns, $updir, $prefix){
        $s=$sizes;$t=$tmps;$n=$names;
        if($s!='' && count($s)>0){
            for($i=0;$i<count($s);$i++){
            $fname=$n[$i];
            $tmp=$t[$i];
            $size=$s[$i];
            $ext=static::getext($fname);
            $allwedextn=static::allowedextn($ext,$extns);
            $prefix.=static::getprefix();
            $fname=static::getfname($prefix, $ext);
            $allwedextn==1?$doupload=static::doupload($tmp,$updir.$fname):$doupload=0;
            $doupload==1?$r=1:$r=0;
            $r==1?$fnames[]=$fname:$fnames=[];
            }
            return $fnames;
        }else{$fnames=[];return $fnames;}

    }
    public static function fileup($control) {//multiple as per need// enctype="multipart/form-data"
        $control='photo';
        $updir = '../uploads/office-bearer/';
        $prefix = 'ofb-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix); 
    }

        public static function categoryimageup($control) {//multiple as per need
        $control=$control;
        $updir = '../uploads/category/';
        $prefix = 'category-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix); 
    }


    public static function productimageup($control) {//multiple as per need
        $control=$control;
        $updir = '../uploads/product/';
        $prefix = 'product-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix); 
    }

    

        public static function sabha_karykarnifileup($control) {//multiple as per need
        $control='photo';
        $updir = '../uploads/sabha_karykarni/';
        $prefix = 'skk-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix); 
    }

    public static function deletesabha_karykarnifile($file){
        $f=trim($file);
        $dir='../uploads/sabha_karykarni/';
        $target=$dir.$f;
        file_exists($target)?unlink($target):'';

    }
        public static function marriage_regfileup($control) {//multiple as per need
        $control='pic';
        $updir = './uploads/marriage_reg/';
        $prefix = 'marriage_reg-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix); 
    }

    //add by arru

        public static function marriage_regfileupbyadmin($control) {//multiple as per need
        $control='pic';
        $updir = '../uploads/marriage_reg/';
        $prefix = 'marriage_reg-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix); 
    }


    public static function member_regfileup($control) {//multiple as per need
        $control='pic';
        $updir = './uploads/member_reg/';
        $prefix = 'member_reg-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix); 
    }
    public static function member_profileup($control) {//multiple as per need
        $control='image';
        $updir = './uploads/member_pmnt/';
        $prefix = 'member_reg_pmnt-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix); 
    }
    // here end


    public static function member_regfileupbyadmin($control) {//multiple as per need
        $control='pic';
        $updir = '../uploads/member_reg/';
        $prefix = 'member_reg-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix); 
    }
    public static function member_profileupbyadmin($control) {//multiple as per need
        $control='image';
        $updir = '../uploads/member_pmnt/';
        $prefix = 'member_reg_pmnt-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix); 
    }
    public static function ppfileup() {//multiple as per need
        $control='photo';
        $updir = '../uploads/past-president/';
        $prefix = 'pp-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix);
        
    }
    public static function fpmfileup() {//multiple as per need
        $control='photo';
        $updir = '../uploads/former-patron-member/';
        $prefix = 'fpm-';
        $extention=['png','jpg', 'jpeg'];
        return  static::uploadfile($control, $extention, $updir, $prefix);
        
    }
    public static function picturefileup() {//multiple as per need
        $control='photo';
        $updir = '../uploads/pictures/';
        $prefix = 'pe-';
        $extention=['png','jpg', 'jpeg'];
        $f=$control;
        $names=$_FILES[$f]['name'];
        $tmps=$_FILES[$f]['tmp_name'];
        $sizes=$_FILES[$f]['size'];
        $i=0;
        for($i=0;$i<count($sizes);$i++){
          if($sizes[$i]>0 && $tmps[$i]!='' && $names[$i]!=''){
            $finalsizes[]=$sizes[$i];
            $finaltmps[]=$tmps[$i];
            $finalnames[]= $names[$i];
          }
        }
        if(isset($finalsizes) && isset($finaltmps) && isset($finaltmps) && $finalsizes!='' && $finaltmps!='' && $finalsizes!=''){
        (count($finalsizes) == count($finaltmps)) && (count($finalnames)==count($finaltmps)) && (count($finalsizes)==count($finalnames)) && count($finalnames)>0 && count($finalsizes)>0 && count($finaltmps)>0?$up=1:$up=0;
        if($up==1){return  static::uploadfiles($finalsizes, $finaltmps, $finalnames, $extention, $updir, $prefix);}
        }else{$up=0;}
        if($up==0){$ups=[];return $ups;}
        
    }
    public static function fileup2() {//multiple as per need
        return  static::uploadfile();
        
    }
    public static function fileup3() {//multiple as per need
        return  static::uploadfile();
        
    }
    public static function fileup4() {//multiple as per need
        return  static::uploadfile();
        
    }
}

?>