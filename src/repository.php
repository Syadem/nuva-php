<?php
namespace Syadem\Nuva;

class Repository {
  private $data;

  public function __construct($data)
  {
    $this->data = array();
    foreach($data as &$value) {
      $this->data[$value->id] = $value;
    }

  }

  public function find($id){
    // print(var_dump($this->data[$id]));
    return $this->data[$id];
  }
}
