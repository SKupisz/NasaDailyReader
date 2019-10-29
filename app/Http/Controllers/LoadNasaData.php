<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoadNasaData extends Controller
{
    private $api_key = "0iMIU6pPXL6u9aR7nqcJTjnuT1mVqlSFmO6OoLco";
    public $type = "",$resourceAddress = "",$title = "",$description = "";
    public function giveUsFeedback(){
        $result = file_get_contents("https://api.nasa.gov/planetary/apod?api_key=0iMIU6pPXL6u9aR7nqcJTjnuT1mVqlSFmO6OoLco");
        $json = json_decode($result);
        $this->type = $json->media_type;
        $this->resourceAddress = $json->url;
        $this->title = $json->title;
        $this->description = $json->explanation;
    }
    public function viewerControll(){
        $this->giveUsFeedback();
        $passingData = [$this->type,$this->resourceAddress,$this->title,$this->description];
        return view("viewer")->with("passing",$passingData);
    }
    
}
