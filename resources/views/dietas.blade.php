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
        </div>
    </div>
</div>

<div class="recetas" id="recetas">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h1>Dieta</h1>
                <p class="small text-uppercase">Genera una dieta especificando tu edad, <br> si padeces de una enfemedad o eres 
                    alérgico a algún alimento</p>
            </div>
            

           
            </div>


            
<form action="{{ route('dieta.sendMessage') }}" method="post">
  @csrf
  <div class="form-dieta">
  <input type="text" name="message" id="message" placeholder="tengo 17 años, genera una dieta tomando en cuenta que tengo diabetes" class="form-control"/>
  <button type="submit" class="btn btn-warning">Generar</button>
</div>
</form>

@if(isset($answer))
  <div>
      <textarea name="respuesta" id="" cols="40" rows="20" disabled>{{ $answer }}</textarea>
  </div>
@endif



        </div>
    </div>
</div>

    
   
<section class="footer">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="boton-footer">
        <p class="d-flex justify-content-center align-items-center">
        
          <a href="{{ url('register')}}"><button type="button" class="btn btn-outline-light btn-rounded">
            Registrate!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
@endsection