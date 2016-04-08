<html>
    <head>
    </head>
    <body>
    <form method="post" action="<?php echo $PHP_SELF; ?>">
    	Name <input type="text" name="WFname"><br><br>
    	<input type="submit" name="Button" value="Get Workflow">
    </form>
    </body>
</html>
<?php
	$WFname=$_POST[WFname];
        $vco_server = "10.10.10.10"; //your vco ip
        $vco_user = "administrator@vsphere.local"; //your vcenter username
        $vco_pass = "Test#1234"; //your vcenter password
        $vco_name = $WFname;
        $vco = new SoapClient('https://' . $vco_server . ':8281/vmware-vmo-webcontrol/webservice?WSDL');
        $param = array(workflowName=>$vco_name,username=>$vco_user,password=>$vco_pass);
        $result = $vco->getWorkflowsWithName($param);
        foreach ($result as $item)
                {
                echo $item->name; 
                echo "<br>";
		echo $item->id; 
                echo "<br>Input<br>";
                $count =  count($item->inParameters->item);
                 if($count<2){
                        for($i=0;$i<$count;$i++){
                                echo $item->inParameters->item->name;
                                echo "-----";
                                echo $item->inParameters->item->type;
                                echo "<br>";
                                }
                        }
                else{
                        for($i=0;$i<$count;$i++){
                                echo $item->inParameters->item[$i]->name;
                                echo "-----";
                                echo $item->inParameters->item[$i]->type;
                                echo "<br>";
                                }
                }
                echo "<br>";
                echo "<br>Output<br>";
                $count =  count($item->outParameters->item);
                if($count<2){
                        for($i=0;$i<$count;$i++){
                                echo $item->outParameters->item->name;
                                echo "-----";
                                echo $item->outParameters->item->type;
                                echo "<br>";
                                }
                        }
                else{
                        for($i=0;$i<$count;$i++){
                                echo $item->outParameters->item[$i]->name;
                                echo "-----";
                                echo $item->outParameters->item[$i]->type;
                                echo "<br>";
                                }   
                }

                echo "<br><br>Attributes<br>";
                $count =  count($item->attributes->item);
                if($count<2){
                        for($i=0;$i<$count;$i++){
                                echo $item->attributes->item->name;
                                echo "-----";
                                echo $item->attributes->item->type;
                                echo "<br>";
                                }
                        }
                else{
                        for($i=0;$i<$count;$i++){
                                echo $item->attributes->item[$i]->name;
                                echo "-----";
                                echo $item->attributes->item[$i]->type;
                                echo "<br>";
                                }   
                }
                
                #var_dump($item); 
		}
?>