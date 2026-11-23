<?php 
/**
 *  This file is part of MatuPBX.
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
 *  This routine update callerid for used module billing and should 
 *  be performed when migrating from versions prior to 3.0 stable release.
 * 
 *  @author : Opens Developers Team
 *  @package : snep
 *  @version : 3.0 - 2016, march
 * 
 */

$conecta = mysqli_connect("localhost", "snep", "sneppass") or print(mysqli_connect_error());
mysqli_select_db($conecta, "snep") or print(mysqli_error($conecta));

$sql = "SELECT callerid,name FROM peers";

$result = mysqli_query($conecta, $sql);
/* Escreve resultados até que não haja mais linhas na tabela */  
while($consulta = mysqli_fetch_array($result)) { 
	
	$nameValue = explode("<", $consulta['callerid']);
	if(count($nameValue) <= 1){
        $new_callerid = $consulta['callerid']. " <".$consulta['name'].">"; 
    }else{
    	$new_callerid = $consulta['callerid'];
    };
	
	$name = $consulta['name'];
	$sql = "UPDATE peers SET callerid = '$new_callerid' WHERE name='$name'";
	       
	mysqli_query($conecta, $sql) or die(mysqli_error($conecta));
	
}; 

mysqli_free_result($result); 
mysqli_close($conecta); 
?>
