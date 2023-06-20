@extends('layouts.app')

@section('content')


<div class="plato" id="plato">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h1>Método del plato</h1>
                <p class="small text-uppercase">Proteinas, carbohidratos, verduras</p>
            </div>

            <div class="contenedor-alimentos">

                <div class="exp">
                    <h2>50%: Hortalizas y verduras</h2>
                    <p>Nuetro plato debe de ocupar la mitad de nuestro plato, <br> ya sean cocidas o crudas, y  procurar que
                         haya una <br> buena variedad de productos y de colores. Al menos <br> dos raciones al día de verduras y hortalizas aportan <br> agua,
                          muy pocas calorías y son ricas en vitaminas, antioxidantes, minerales y fibra.  Por ejemplo, 
                          aquí podemos incluir brócoli, zanahoria, cebolla, <br> champiñones, calabaza, tomates, espinacas, 
                          pimientos</p>
                </div>
    
                <div class="exp">
                    <h2>25%: Carbohidratos</h2>
                    <p>Aquí incluyen cereales, legumbres, pasta o pan.  La suma de estos alimentos no debería de superar el 
                        cuarto de tu plato y la hora de elegir “hay que optar por darle prioridad a los cereales integrales 
                        variados, limitando aquellos cereales refinados como el arroz o el pan blanco, ya que tienen un mayor
                         índice glucémico y provocan una mayor repercusión en el control del azúcar en sangre y 
                         en el exceso de peso”, matiza Zugasti. Por ello, puede optarse, por ejemplo, por arroz integral, o quinoa.</p>
                </div>
    
                <div class="exp">
                    <h2>25%: Proteínas animales</h2>
                    <p>En nuestro plato no pueden faltar las proteínas, el método que se aconseja es el consumo de pescados, 
                        aves, legumbres y frutos secos, y en algunas versiones se incluyen los huevos. 
                         “En esta porción del plato hay que dar prioridad a las legumbres como las lentejas, 
                         los garbanzos o las habichuelas, así como a los pescados azules y blancos 
                         y a la carne de ave, acompañadas de algún fruto seco. Además de esto, es recomendable limitar el 
                         consumo de carnes rojas y evitar las carnes procesadas como el bacon o los embutidos”, 
                         explica Zugasti, quien hace hincapié en que el original método del plato de Harvard no 
                         incluía los huevos, aunque éstos sí aparecen en la versión elaborada en el año 2012
                          por la SEEN y la Sociedad Española para el Estudio de la Obesidad (SEEDO). </p>
                </div>
    

            </div>
         <br>


          <div class="info">                       
            <div class="list">
               <label><a href="">Planes de ejercicio</a></label>
            </div>
            <div class="list">
               <label><a href="">Recetas / Dietas</a></label>
           </div>
      </div>


        </div>
    </div>
</div>

<div class="recetas" id="recetas">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h1>Recetas</h1>
                <p class="small text-uppercase">Prueba hacer estas recetas</p>
            </div>
            <p>Segun tus datos personales registrados, esta seria tu</p>

           
            </div>

        </div>
    </div>
</div>









<!-- Modal ensalada de aguacate, huevo y verduras -->
<div class="modal fade" id="aguacate-huevo-verduras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ensalada de aguacate, huevo y vegetales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection