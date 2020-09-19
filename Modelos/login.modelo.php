<?php
    
    require_once"conexion.php";
    
    class ModeloLogin{



             /* -------------------------------------------------------------------------- */
        /*                            Sleccionar Registros                            */
        /* -------------------------------------------------------------------------- */

        static public function mdlSeleccionarRegistros($tabla,$tabla2,$tabla3,$item,$valor){

            if($item==null && $valor==null){
            $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
          
            $stmt->execute();
            return $stmt-> fetchAll();
            }else{
                $stmt= Conexion::conectar()->prepare("  SELECT * FROM $tabla t1 
                JOIN $tabla2 t2 on t2.Id_Estado=t1.Id_Estado
                JOIN $tabla3 t3 on t3.Id_Rol=t1.Id_Rol
                where $item=:$item");
                $stmt->bindParam(":".$item,$valor,PDO::PARAM_STR);
        
            
                $stmt->execute();
                return $stmt-> fetch();

            }
            $stmt->close();
            $stmt->null;
        }

        static public function mdlSeleccionarPreguntas($tabla){
            $stmt= Conexion::conectar()->prepare("SELECT * FROM $tabla");
          
            $stmt->execute();
            return $stmt-> fetchAll();
            
          

            
            $stmt->close();
            $stmt->null;
        }

      
    }

?>