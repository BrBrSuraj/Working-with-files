<?PHP
declare(strict_types=1);

$root= dirname(__DIR__ ).DIRECTORY_SEPARATOR;

define('APP_PATH',$root.'app'.DIRECTORY_SEPARATOR);
define('FILES_PATH',$root.'transaction_file'.DIRECTORY_SEPARATOR);
define('VIEWS_PATH',$root.'views'.DIRECTORY_SEPARATOR);

require APP_PATH."App.php";
require APP_PATH . "preety.php";

$files= getTransactionFiles(FILES_PATH);
$transactions = [];
foreach($files as $file){
    $transactions = array_merge($transactions, getTransaction($file));
}

$amounts=amount($transactions);
$expance=expance($amounts);
$income=income($amounts);


require VIEWS_PATH."transaction.php";




?>