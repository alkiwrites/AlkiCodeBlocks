<?php 


// This function uploads a file to the server, with the same extention given.
//  and also check for an array of permited extentions and check file size limit.
function subirArchivo( $archivo, $nombre , $destino, $extenciones , $limite )
{
   // parseamo lso datos de los archivos
   $nFile  = $archivo['name']; 
   $tnFile = $archivo['tmp_name'];
   $sFile  = $archivo['size'];
   $eFile  = $archivo['error'];
   $tyFile = $archivo['type'];

   $xFile = explode('.' , $nFile);  // explode name
   $acFileEx = strtolower(end($xFile));  // get extend

   if( in_array( $acFileEx , $extenciones) ) // test for extntions
   {
      if( $eFile === 0)  // test for error
      {
           if( $sFile < $limite ) // test for size
           {
              $fNombre  = $nombre . '.' . $acFileEx;  // name  + extention
              $fDestino = $destino . '/' . $fNombre;  // path + fnombre
                $gate = move_uploaded_file( $tnFile ,  $fDestino ); // the move
                if( $gate ) // test
                {
                  return TRUE;  // all good
               } else {
                   return 'error subiendo archivo';
                }
             return 'el arhcivo es demasiado grande';
           }
           return 'error en archivo';
      }
      return 'la extencion no es correcta';
   }
}
// fin de la funciones

?>