<?php

// Set Number of Months to Traverse from current month
$num_months = 12;

// Set Current Month and Year
$current_month = date('Y-m').'-01';
$paySalaries = array();
$paySalaries[] = ('Month Name,Salary Payment Date,Bonus Payment Date');

for ($count = 1; $count <= $num_months; $count++) {    
    $monthnYear = date('Y-m', strtotime($current_month.' + '.$count.' Months')).'-01'; // increase the month by 1
    $salary_date = new DateTime($monthnYear);
    $salary_date->modify('last day of this month');
    switch($salary_date->format('D')){
        case 'Sat': // if last day is Sat reduce a day by 1      
            $salary_date->modify('-1 day');
            $salary_payment_date = $salary_date->format('m-d-Y');            
            break;
        case 'Sun': // if last day is Sun reduce day by 2      
            $salary_date->modify('-2 day');
            $salary_payment_date = $salary_date->format('m-d-Y');            
            break;
        default:
            $salary_payment_date = $salary_date->format('m-d-Y'); // no sat and sun then last day is the salary payment date            
    }
    //set default bonus date
    $bonus_date = date('Y-m', strtotime($current_month.' + '.$count.' Months')).'-15';
    $bonus_date = new DateTime($bonus_date);
    switch($bonus_date->format('D')){
        case 'Sat':            
            $bonus_date->modify('+4 day');
            $bonus_payment_date = $bonus_date->format('m-d-Y'); // if 15th si Sat, increase by 4 days to get next Wed            
            break;
        case 'Sun':            
            $bonus_date->modify('+3 day'); // if 15th is Sun, increase by 3 days to get next Wed
            $bonus_payment_date = $bonus_date->format('m-d-Y');            
            break;
        default:
            $bonus_payment_date = $bonus_date->format('m-d-Y'); // no Sat and Sun, no changes
    }    
    $test = $salary_date->format('M') . "," . $salary_payment_date .",". $bonus_payment_date;
    $paySalaries[]= $test;
}


