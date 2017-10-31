<?php

namespace App;


class Cart 
{
    public $items=null;
    public $qty=0;
    public $price=0;

    public function __construct($old){
    	if($old){
    		$this->items= $old->items;
    		$this->qty= $old->qty;
    		$this->price= $old->price;
    	}
    }

    public function add($item,$id){
    	$stored= ['qty'=>0,'price'=>$item->price,'item'=>$item];
    	if($this->items){
    		if(array_key_exists($id, $this->items)){
    			$stored= $this->items[$id];
    		}
    	}

    	$stored['qty']++;
    	$stored['price']= $item->price * $stored['qty'];
    	$this->items= $stored;
    	$this->qty++;
    	$this->price += $item->price;

    }
}
