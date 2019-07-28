<?php

namespace App\Myclasses;


class PowerMyService implements MyServiceInterface
{
    private $id = -1;
    private $msg = 'no id';
    private $data = ['いちご', 'りんご', 'バナナ', '鶏肉'];

    function __construct()
    {
        $this->setId(rand(0, count($this->data)));
    }

    public function setId($id)
    {
        if($id >= 0 && $id < count($this->data)){
            $this->id = $id;
            $this->msg = "あんた好きなん" . $id . "の" . $this->data[$id] . "やな";
        }
    }

    public function say(){
        return $this->msg;
    }

    public function data(int $id)
    {
        return $this->data[$id];
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function allData()
    {
        return $this->data;
    }
}