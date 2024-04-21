<?php

declare(strict_types = 1);

// Your code

function getTransactionFiles(string $dir_path): array{
    $files = [];

    foreach(scandir($dir_path) as $file){
        if (is_dir($file)){
            continue;
        }
        
        $files[] = $dir_path.$file;
        return $files;
    }
}


function getTransactions(string $fileName, ?callable $transactionHandler = null): array {
    if (! file_exists($fileName)){
        trigger_error("File ". $filleName . " doesn't exist.", E_USER_ERROR);
    }

    $file = fopen($fileName, 'r');

    fgetcsv($file); //to hide line with headers

    $transactions = [];

    while(($transaction = fgetcsv($file)) !== false){
        if ($transactionHandler !== null){
            $transaction[] = $transactionHandler($transaction);
        }
        $transactions[] = extractTransaction($transaction);
    }

    return $transactions;
}

function extractTransaction(array $transactionRow): array{
    
    [$date, $checkNumber, $description, $amount] = $transactionRow;

    $amount = (float) str_replace(['$', ','],'', $amount);

    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount
    ];
}

function calculateTotals(array $transactions):array {
    $totals = [
        'netTotal' => 0,
        'totalIncome' => 0,
        'totalExpense' => 0
    ];

    foreach($transactions as $transaction){
       $totals['netTotal'] += $transaction['amount']; 
        if ($transaction['amount'] >= 0){
            $totals['totalIncome']+=$transaction['amount'];
        } else {
            $totals['totalExpense']+=$transaction['amount'];
        }
    }
    
    return $totals;
}