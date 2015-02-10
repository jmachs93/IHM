    <section class="titulo-principal-categoria text-center">
        <h2>Temporada Julio - Agosto</h2>
    </section>

    <section class="titulo-categoria text-center">
        <!--
            TITULO DE LA CATEGORIA
        -->
        <div class="container ontainer listado-productos productos-group-cat">
            
            

            <!--
                PRODUCTOS
            -->
          <?php
            $total = $productos->num_rows(); 
            if($total == 0){
                echo "<h1> No hay disponibilidad en este momento </h1>";
            }
            $i = 0;
            for($i =0; $i < $total; $i++):
            $row = $productos->row($i);
         
            if($i % 4 == 0){
                echo "</div>";
                echo "<div class=\"row \">";
            }

         ?>

         <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 producto producto-categoria">
            <div class="empaquetado">
                <div class="etiqueta-nuevo">
                    <span>NUEVO</span>
                </div>
                <a href="#"><figure><img src="<?=$recursos.$row->imagen?>"></figure></a>
                <span class="temporada">Temporada <strong><?= $row->temporada?></strong></span>
                <div class="prenda-stock">
                    <span class="prenda"><?= $row->tipo ?></span>
                    <span class="stock-etiqueta">STOCK</span>
                </div>
                <span class="precio"><?= $row->precio ?></span>
            </div>
        </div>
        <?php endfor; ?>    

      

                

                
           
                </div>

               
            

                

                <!-- PRODUCTO 12 -->
               
          

        <nav>
          <ul class="pagination">
            <li class="disabled"><a href="#"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>
          </ul>
        </nav>
    </section>