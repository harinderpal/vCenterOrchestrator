<html>
	<head>
	</head>
	<body>
		<?php
		        $vco_server = "10.10.10.10"; //your vco ip
		        $vco_user = "administrator@vsphere.local"; //your vcenter username
		        $vco_pass = "Test#1234"; //your vcenter password
		        $vco = new SoapClient('https://' . $vco_server . ':8281/vmware-vmo-webcontrol/webservice?WSDL');
		        $param = array(username=>$vco_user,password=>$vco_pass);
		        $result = $vco->getAllWorkflows($param);
		 	?>
		<table border=1>
			<tr>
				<td>
				<?php echo "Name"; ?>
				</td>
				<td>
				<?php 
				echo "ID"; 
				?>	
				</td>
				<td>
				<?php echo "Description"; ?>
				</td>
			</tr>
			
		<?php
		        foreach ($result as $item)
		        {
				
		                foreach ($item as $work)
		                { ?>
		                     <tr>
					<td>
						<?php echo $work->name; ?>
					</td>
					<td>
						<?php 
						echo $work->id; 
						?>	
					</td>
					<td>
						<?php echo "$work->description"; ?>
					</td>
				     </tr>
		             <?php   }
		        }
		 
		?>
		</table>
	</body>
</html>