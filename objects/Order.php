<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   

/**
 * Description of Order
 *
 * @author smnsh
 */
class Order {
    var $orderID;
    var $customer; // this should be an object
    var $product_list = array(); // this should be a list
    var $orderDate;
    var $deliveryDate;
    var $payment;
    
    
    function __construct($orderID, Customer $customer, Product $product_list, $orderDate, $deliveryDate, Payment $payment) {
        $this->orderID = $orderID;
        $this->customer = $customer;
        $this->product_list = $product_list;
        $this->orderDate = $orderDate;
        $this->deliveryDate = $deliveryDate;
        $this->payment = $payment;
    }
    
    
    function getOrderID() {
        return $this->orderID;
    }

    function getCustomer() {
        return $this->customer;
    }

    function getProduct_list() {
        return $this->product_list;
    }

    function getOrderDate() {
        return $this->orderDate;
    }

    function getDeliveryDate() {
        return $this->deliveryDate;
    }

    function getPayment() {
        return $this->payment;
    }

    function setOrderID($orderID) {
        $this->orderID = $orderID;
    }

    function setCustomer($customer) {
        $this->customer = $customer;
    }

    function setProduct_list($product_list) {
        $this->product_list = $product_list;
    }

    function setOrderDate($orderDate) {
        $this->orderDate = $orderDate;
    }

    function setDeliveryDate($deliveryDate) {
        $this->deliveryDate = $deliveryDate;
    }

    function setPayment($payment) {
        $this->payment = $payment;
    }



    
}
