<?PHP
declare(strict_types=1);


function getTransactionFiles($dirPath){
$files=[];
    foreach(scandir($dirPath) as $file){
        if(is_dir($file)){
            continue;
        }
        $files[]=$dirPath.$file;
    }
    return $files;

}

function getTransaction($filename){

    if(!file_exists($filename)){
        echo "file not fount as ".$file;
    }

    $fh=fopen($filename,'r');
    fgetcsv($fh);
    $transactions=[];

   
    while(($transaction=fgetcsv($fh))!==false){
        $transactions[]= createKeyValuePair($transaction);

    }
    return $transactions;
}


function createKeyValuePair($transaction){
    [$date,$number,$transaction,$amount]=$transaction;
    $amount=str_replace([',','$'],'',$amount);
     return   [
            'date'=>$date,
            'num'=>$number,
            'transaction'=>$transaction,
            'amount'=>$amount,
        
        ];

}

function amount($transaction){
    $expen=[];
   foreach($transaction as $trans){
    $expen[]= $trans['amount'];
   }
return ($expen);
   

}


function expance($amount)
{

    $array_size=count($amount);
    $total_expance=0;
    for($i=0; $i<$array_size; $i++){
        if($amount[$i]<0){
            $total_expance
                = $total_expance + $amount[$i];
        }
         
    }
    return $total_expance;
}


function income($amount)
{
    $array_size = count($amount);
    $total_income = 0;
    for ($i = 0; $i < $array_size; $i++) {
        if ($amount[$i] >= 0) {
            $total_income
                = $total_income + $amount[$i];
        }
    }
    return $total_income;
}


?>