<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  Ing. Estefan Civera.
 * The Initial Developer of the Original Code is Ing. Estefan Civera.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Settings_AlgDragDropDoc_Index_View extends Settings_Vtiger_Index_View {
	public function process(Vtiger_Request $request) {
                $qualifiedModuleName = $request->getModule(false);
		$module = new AlgDragDropDoc_Module_Model();
		$moduleModel = Settings_AlgDragDropDoc_Module_Model::getInstance();
		$viewer = $this->getViewer($request);
		$viewer->assign('MODULE_MODEL', $moduleModel);
		$viewer->assign('MODULE', $module);
		$viewer->assign('ERROR_MESSAGE', $request->get('error'));
		$viewer->assign('QUALIFIED_MODULE', $qualifiedModuleName);
		$viewer->assign('CURRENT_USER_MODEL', Users_Record_Model::getCurrentUserModel());
		$viewer->view('EditView.tpl', $request->getModule(false));
	}


}


