<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th, table tr td{
            padding: 5px;
            border: 1px solid #eee; 
        }

        tfoot tr th, tfoot tr td{
            font-size: 20px;
        }

        tfoot tr th, tfoot tr td{
            text-align: right;
        }
        .red{
            color: red;
        } 
        .green{
            color: green;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check</th>
                <th>Desscription</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php if (! empty($transactions)):?>
                <?php foreach($transactions as $transaction):?>
                    <tr>
                        <td><?=formatDate($transaction['date'])?></td>
                        <td><?$transaction['checkNumber']?></td>
                        <td><?=$transaction['description']?></td>
                        <td>
                            <?php if ($transaction['amount']<0):?>
                                <span class="red">
                                    <?=formatDollarAmount($transaction['amount'])?>                                
                                </span>
                            <?php elseif ($transaction['amount']>0): ?> 
                                <span class="green">
                                    <?=formatDollarAmount($transaction['amount'])?>                                
                                </span>
                            <?php else:?>
                                <span>
                                    <?=formatDollarAmount($transaction['amount'])?>                                
                                </span>
                            <?php endif?>
                        </td>
                    </tr>
                <?php endforeach?>
            <?php endif?> 
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total income: </th>
                <td><?=$totals['totalIncome'] ?? 0;?></td>
            </tr>
            <tr>
                <th colspan="3">Total expense: </th>
                <td><?=$totals['totalExpense'] ?? 0;?></td>
            </tr>
            <tr>
                <th colspan="3">Net total: </th>
                <td><?=$totals['netTotal'] ?? 0;?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>

