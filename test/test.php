<?php
echo "<pre>";
print_r($_REQUEST);
exit();


echo "<pre>";
print_r($_REQUEST);
exit();

echo "<pre>";
print_r($_REQUEST);
exit();
?>
<?php


include '../magento1924/app/mage.php';
umask(0);
Mage::app(); 

//$postData = Mage::app()->getRequest()->getParams();
//print_r($data);
$postData['transaction_id']=13123123;
$postData['transaction_id']=13123123;
$postData['transaction_id']=13123123;
$postData['test1']=13123123;
$postData['test2']='asdsad';



$data['request_body'] = 'asdasdasd';
$data['transaction_id'] = $postData['transaction_id'];


$logModel = Mage::getModel('sixthcontinent/api_log')->getCollection()
                    ->addFieldToSelect('sixthcontinent_id')                    
                    ->addFieldToFilter('transaction_id','13123123');                    
   

/* $logModel = Mage::getModel('sixthcontinent/api_log')
                    ->setData($data)                    
                    ->save();
 */	
 
echo '<pre>';print_r($logModel); echo '</prE>';
echo $logModel->getId()."<hr>";

echo '<pre>';

print_r($_REQUEST);

?>