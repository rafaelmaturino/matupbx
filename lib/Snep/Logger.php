<?php
/**
 *  This file is part of MatuPBX.
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

require_once("Zend/Log.php");

/**
 * AGI singleton class.
 *
 * @category  MatuPBX
 * @package   MatuPBX
 * @copyright Copyright (c) 2010 OpenS Tecnologia
 * @author    Henrique Grolli Bassotto
 */
class Snep_Logger extends Zend_Log {
    /**
     * Singleton instance.
     *
     * @return Snep_Logger
     */
    protected static $instance;

    /**
     * Returns the singleton instance of this class.
     *
     * @return Snep_Logger
     */
    public static function getInstance() {
        if(!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
}

    protected function __clone() {}
}
