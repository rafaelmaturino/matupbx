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

/**
 * @category  MatuPBX
 * @package   MatuPBX
 * @copyright Copyright (c) 2010 OpenS Tecnologia
 * @author    Rafael Pereira Bozzetti <rafael@opens.com.br>
 *
 */
abstract class Snep_Controller {
    protected function __redirect($url) {
        header("HTTP/1.1 303 See Other");
        header("Location: $url");
        exit(0);
    }
}
