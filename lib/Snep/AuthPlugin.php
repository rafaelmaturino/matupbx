<?php
/**
 *  This file is part of MatuPBX.
 *  Para território Brasileiro leia LICENCA_BR.txt
 *  All other countries read the following disclaimer
 *
 *  MatuPBX is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Lesser General Public License as
 *  published by the Free Software Foundation, either version 3 of
 *  the License, or (at your option) any later version.
 *
 *  MatuPBX is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Lesser General Public License for more details.
 *
 *  You should have received a copy of the GNU Lesser General Public License
 *  along with MatuPBX.  If not, see <http://www.gnu.org/licenses/lgpl.txt>.
 */

/**
 * Classe para controle de login
 *
 * @see Snep_Auth
 *
 * @category  MatuPBX
 * @package   MatuPBX
 * @copyright Copyright (c) 2011 OpenS Tecnologia
 * @author    Iago Uilian Berndt <iagouilian@gmail.com>
 *
 */
class Snep_AuthPlugin extends Zend_Controller_Plugin_Abstract{

    public function __construct() {}

    /**
     * Verifica se o usuaria esta logado
     */
    public function preDispatch(Zend_Controller_Request_Abstract $request){

    	$auth = Zend_Auth::getInstance();
      $action = $this->getRequest()->getActionName();
      $controller = $this->getRequest()->getControllerName();
      $module = $this->getRequest()->getModuleName();

      if (!$auth->hasIdentity() && ($action != "redefine" && $action != "recuperation")) {
	    	$request->setModuleName("default");
	    	$request->setControllerName("auth");
	    	$request->setActionName("login");
      }
    }

}
