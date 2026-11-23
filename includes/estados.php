<?php
/*
 *  This file is part of MatuPBX.
 *  Para território Brasileiro leia LICENCA_BR.txt
 *  All other countries read the following disclaimer
 *
 *  MatuPBX is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  MatuPBX is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with MatuPBX.  If not, see <http://www.gnu.org/licenses/>.
 *
 *  Provide <select> option list for cyties  
 */

$setup = parse_ini_file("setup.conf");
            
$idpais = $_GET['pais'];

$mysqli = mysqli_connect($setup["db.host"], $setup["db.username"], $setup["db.password"], $setup["db.dbname"]);

if (is_numeric($idpais) ) {  // use core_cnl (connection with ITC)
    $result = mysqli_query($mysqli, "SELECT id,name FROM core_state WHERE country_id = ".(int)$idpais);
} else {
    $result = mysqli_query($mysqli, "SELECT id,name FROM core_cnl_city WHERE country = '".mysqli_real_escape_string($mysqli, $idpais)."'");
}
if ($idpais != 1) {
    echo "<option value=28>Others</option>" ;
}else {
    while($row = mysqli_fetch_array($result) ){
        echo "<option value='".$row['id']."'>".$row['name']."</option>";
    }
}


?>