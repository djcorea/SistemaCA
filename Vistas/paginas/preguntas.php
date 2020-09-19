<?php 
$preguntas = ControladorLogin::ctrPreguntas();

//echo $preguntas;?>



<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="post">
    
    <?php for($i=0;$i<3;$i++):?>   
    <div class="py-2">
       
    <select name="cmbPeliculas" id="cmbP" class="form-control" style=" text-align-last: center;">
    <option value="" ><?php echo "----PREGUNTA ".($i+1)."----";?>
                                </option>
                       <?php foreach ($preguntas as $key => $value): 
                           // id=<?php echo"Q".($key+1);?>
                           
                               <option value=<?php echo $value["Pregunta"];?>>
                                    <?php echo $value["Pregunta"];?>
                                </option>
                              
                             
        
                    <?php endforeach ?> 
                    </select>
                 
                   <input name="rNombre" type="text" 
                   class="form-control" placeholder=<?php echo "Respuesta";?> id="respuesta"> 
                   
                        </div>
                <?php endfor?>

               
        <button type="submit" class="btn btn-primary" >ACEPTAR</button>
        
    </form>

    
</div>
<script src="./vistas/myapp.js"></script>

