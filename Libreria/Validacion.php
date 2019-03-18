<?php

abstract class  Validacion
{   
    

        
    // VALIDANDO ENTEROS
    // CERO Y MENOS CERO NO SON ENTEROS VALIDOS
    public function validarEnteros($entero, $min, $max){
    
        $rango = array (
            "options" => array
            ( "min_range" => $min, "max_range" => $max)
        );
 
        filter_var($entero, FILTER_VALIDATE_INT, $rango) ? $resultado = TRUE : $resultado = FALSE;
        return $resultado;
    }
 
    // VALIDANDO BOLEANOS
    // RETORNA TRUE PARA 1, TRUE, ON, YES
    // EN OTROS CASOS RETORNARA FALSE
    public function validarBoleanos($boleano){
        filter_var($boleano, FILTER_VALIDATE_BOOLEAN) ? $resultado = TRUE : $resultado = FALSE;
        return $resultado;
    }
 
    // VALIDANDO NUMEROS DE PUNTO FLOTANTE (DECIMALES)
    public function validarFlotante($flotante){
    
        $separador = array('options' => array('decimal' => ','));
        
        // si se quiere usar un numero con miles y punto flotante (1.238,32) se usa esta condicion
        // (!filter_var($flotante, FILTER_VALIDATE_FLOAT,  array('options' => array('decimal' => ','), 'flags' => FILTER_FLAG_ALLOW_THOUSAND)))
        filter_var($flotante, FILTER_VALIDATE_FLOAT, $separador) ? $resultado = TRUE : $resultado = FALSE;
        return $resultado;
    }
    
    //Function for Validate the Fields Empty or with spaces
    public function ValidateEmpty($campo)
    {
        if(!empty($campo) || $campo != "" or $campo != null )
        {
            $resultado = true;
        } else{
            $resultado = false;
        }
        return $resultado;
    }

    public function validarDosCampos($campo1, $valor, $validar, $campo2){
        if(isset($campo1) && $campo1 == $valor){
            switch($validar){
                case 'FILTER_VALIDATE_BOOLEAN':
                    filter_var($campo2, FILTER_VALIDATE_BOOLEAN) ? $resultado = TRUE : $resultado = FALSE;
                break;
                case 'FILTER_VALIDATE_EMAIL':
                    filter_var($campo2, FILTER_VALIDATE_EMAIL) ? $resultado = TRUE : $resultado = FALSE;
                break;
                case 'FILTER_VALIDATE_FLOAT':
                    $separador = array('options' => array('decimal' => ','));
                    filter_var($campo2, FILTER_VALIDATE_FLOAT, $separador) ? $resultado = TRUE : $resultado = FALSE;
                break;
                case 'FILTER_VALIDATE_INT':
                    filter_var($campo2, FILTER_VALIDATE_INT) ? $resultado = TRUE : $resultado = FALSE;
                break;
                case 'FILTER_VALIDATE_IP':
                    filter_var($campo2, FILTER_VALIDATE_IP) ? $resultado = TRUE : $resultado = FALSE;
                break;
                case 'FILTER_VALIDATE_REGEXP':
                    filter_var($contenido, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^M(.*)/"))) ? $resultado = TRUE : $resultado = FALSE;
                break;
                case 'FILTER_VALIDATE_URL':
                    filter_var($url, FILTER_VALIDATE_URL) ? $resultado = TRUE : $resultado = FALSE;
                break;
                default:
                    $resultado = FALSE;
                break;
            }
        }else{
            $resultado = FALSE;
        }
        return $resultado;
    }
   /* $expresion = '/^M(.*)/';
    si se le pasa una cadena de texto que comience con M el resultado sera positivo
*/
    public function ValidarExpRegular($contenido, $expresion){
        
        // para pasarle las opciones al filtro
        $opcion = array("options" => array("regexp" => $expresion));

        filter_var($contenido, FILTER_VALIDATE_REGEXP, $opcion) ? $resultado = TRUE : $resultado = FALSE;
        return $resultado;
    }   
}