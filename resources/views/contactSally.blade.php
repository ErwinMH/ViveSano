@extends('layouts.app')

@section('content')


<div class="contact" id="contact">
<section class="section gray-bg" id="contactus">
    <style>
        .py-4 {
        padding-top: 0 !important;
        padding-bottom: 1.5rem !important;
      }
    
      </style>
      
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title">
                    <h2>Contactanos</h2>
                    <p class="small text-uppercase">Envia un mensaje y mantente en contactos con nuestros profesionales</p>
                </div>
            </div>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-md-7 col-lg-8 m-15px-tb">
                <div class="contact-form">
                     <form action="/" method="post" class="contactform contact_form" id="contact_form">
                        <div class="returnmessage valid-feedback p-15px-b" data-success="Your message has been received, We will contact you soon."></div>
                        <div class="empty_notice invalid-feedback p-15px-b"><span>Please Fill Required Fields</span></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="name" type="text" placeholder="Profesional. Ejemplo: 1" class="form-control"> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="email" type="text" placeholder="Tu nombre" class="form-control">  
                                </div>
                            </div>
                         
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="message" placeholder="Mensaje" class="form-control" rows="3"></textarea> 
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send">
                                    <a id="send_message" class="px-btn theme" href=""><span>Enviar</span> <i class="arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 m-15px-tb">
                <p class="small text-uppercase">Coloca el numero de la persona en el formulario. <strong>Si quieres contactar a Sally COLOCA 1</strong></p>

                <div class="contact-name">
                    <h5>Profesionales</h5>

                    <p>1: Sally Perez - Nutriologa</p>
                    <p>2: Emma Rivers - Nutricionista</p>
                    <p>3: Daniel Roma - Coach </p>

                </div>
              
                
                
            </div>
        </div>
    </div>
</section>
</div>

@endsection
