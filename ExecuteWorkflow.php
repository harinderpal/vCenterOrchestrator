<html>
<head>
</head>
<body>

</body>
</html>
<?php
	$WFname=$_POST[WFname];
        $vco_server = "10.10.10.10"; //your vco ip
        $vco_user = "administrator@vsphere.local";
        $vco_pass = "Test#1234";
        $vco_id = "ae09cca3-51f6-4146-ac6c-953e307e4d27";
        $vco_input = (object)array('name'=>'hostname','value'=>'10.10.10.104','type'=>'string');

    
        #$obj->adresse = null;
        #$obj = {name : "hostname", value : "10.134.72.10"};
        var_dump($vco_input);
        $vco = new SoapClient('https://' . $vco_server . ':8281/vmware-vmo-webcontrol/webservice?WSDL');
        $param = (object)array(workflowId=>$vco_id,username=>$vco_user,password=>$vco_pass,workflowInputs=>$vco_input);
        #if($result){ Echo "here2;" }
        $result = $vco->executeWorkflow($param);
        
?>