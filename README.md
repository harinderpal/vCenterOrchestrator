# vCenterOrchestrator
# Workflow_info.php
Script to fetch all workflows in your environment, result would be workflow name, id and description. 
Change the IP address of VCO and credentials of vCenter server in script.

#WorkflowByName.php
This script searches for particular environment by name. Input is (exact)name of the workflow. It will display all the parameters and attributes which are there in workflow. Change the VCO IP and vCenter server credentials in script.

#ExecuteWorkFlow.php
The Workflow used for this script is "List all Storage adapters". The input is hostname which is hardcoded in script. For this you will have to modify the workflow, the input is in string form which was converted to vcenter host object inside the workflow. This script will just trigger the workflow. It does not wait for workflow to complete.
