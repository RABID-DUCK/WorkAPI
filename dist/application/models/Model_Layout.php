<?php

class Layout{

    protected $token;
    public $last_version = array();
    public $list_Versions;

    protected $data = array(
        'login'=> 'dev_user1',
        'password' => 'SxWHfDDbcu',
    );

    function __construct()
    {
        $this->GetToken();
    }


    public function GetToken(){
        
        $ch = curl_init("http://sandbox1.pl-llc.ru/api/token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->data);
        $res = curl_exec($ch);
        curl_close($ch);
        $object = json_decode($res);
        $token = $object->payload->token;
    
        $this->token = $token;
    }
    
    public function GetLastVersion($id=0){
        $this->GetToken();
        $ch = curl_init("http://sandbox1.pl-llc.ru/api/plunity/get?token=$this->token&id=$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        curl_close($ch);

        $this->last_version = $res;
        return json_decode($res, true);
    }
    
    public function GetListVersions(){
        $this->GetToken();
        $ch = curl_init("http://sandbox1.pl-llc.ru/api/plunity/list?token=$this->token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        curl_close($ch);
        $this->list_Versions = $res;
        return json_decode($res, true);
    }

    public function DownloadLastVersion($id){
        $this->GetToken();
        $url = "http://sandbox1.pl-llc.ru/api/plunity/download?token=$this->token&id=$id";
        $ch = curl_init($url);
        $dir = './';
        $file_name = basename($url);
        $save_file_loc = $dir . $file_name;
        $fp = fopen($save_file_loc, 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);    
        curl_exec($ch);
        curl_close($ch);
    }

    public function AddVersion($major, $minor, $micro, $releaseNote, $platform, $file){
        $this->GetToken();
        $args = array(
            "major" => $major,
            "minor" => $minor,
            "micro" => $micro,
            "releaseNote" =>$releaseNote,
            "platform" => $platform,
            "file" => $file
        );
        $ch = curl_init("http://sandbox1.pl-llc.ru/api/plunity/add?token=$this->token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $args);
        $res = curl_exec($ch);
        curl_close($ch);
    }

    public function EditVersion($id, $major="", $minor="", $micro="", $releaseNote="", $file=""){
        $this->GetToken();
        $args = array(
            "major" => $major,
            "minor" => $minor,
            "micro" => $micro,
            "releaseNote" =>$releaseNote,
            "file" => $file
        );

        $data = array_replace($args, $args);

        $ch = curl_init("http://sandbox1.pl-llc.ru/api/plunity/edit?token=$this->token&id=$id");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $res = curl_exec($ch);
        curl_close($ch);
    }

    public function GetListPlatforms(){
        $ch = curl_init("http://sandbox1.pl-llc.ru/api/shipment/getplatforms");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, true);
    }

}