<?php

//	  C o p y r i g h t   S M N   S h u v o 
//	  2 n d   Y e a r   C a p s t o n e   P r o j e c t   

/**
 * Description of Employee
 *
 * @author smnsh
 */
class Employee extends User {
    var $employeeID;
    var $employeeName;
    
    function getEmployeeID() {
        return $this->employeeID;
    }

    function getEmployeeName() {
        return $this->employeeName;
    }

    function setEmployeeID($employeeID) {
        $this->employeeID = $employeeID;
    }

    function setEmployeeName($employeeName) {
        $this->employeeName = $employeeName;
    }


    
}
