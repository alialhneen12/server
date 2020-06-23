<? header('Content-Type: application/json');

 $response = array();
			 
// هل يوجد تحديث ؟			 
$response['value']=1;
	
// رسالة التنبيه		 	
$response["msg"]="
<b>

مالجديد في التطبيق ؟
<br>
1 - تحديثات في التطبيق  <br>
2-  update 2 ...
</b>
";

// الاصدار الجديد
$response["version"]="2.5";



 echo json_encode($response);




?>