<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   

/**
 * Description of Payment
 *
 * @author smnsh
 */
class Payment {
    var $paymentID;
    var $transactionNumber;
    var $paymentType;
    var $confirmedBy;
    
    function __construct($paymentID, $transactionNumber, $paymentType, Employee $confirmedBy) {
        $this->paymentID = $paymentID;
        $this->transactionNumber = $transactionNumber;
        $this->paymentType = $paymentType;
        $this->confirmedBy = $confirmedBy;
    }
    
    function getPaymentID() {
        return $this->paymentID;
    }

    function getTransactionNumber() {
        return $this->transactionNumber;
    }

    function getPaymentType() {
        return $this->paymentType;
    }

    function getConfirmedBy() {
        return $this->confirmedBy;
    }



    
}
