@extends('layouts.principal')
@section('content')
<div class="row" style="margin-bottom: 0 !important;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6605219170406!2d-74.80152918564745!3d10.988976192177473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d720a859219%3A0x2d8617b095b73b77!2sCra.+44+%2364-28%2C+Barranquilla%2C+Atl%C3%A1ntico%2C+Colombia!5e0!3m2!1ses!2sve!4v1500857802552" width="100%" height="400" frameborder="0" style="border:0; margin-bottom: -10px !important;" allowfullscreen></iframe>
</div>
<div class="row" style="background: #e9eaed; margin-bottom: 0 !important;">
    <div class="col l4 s12 m12 " >
        <div class=" card-panel">
            <div class="row center">
                <h5>Información de Contacto</h5>
                <div class="divider"></div>
            </div>
            <div class="row">
                <p>Somos "Cerrajería Bululo", ubicados en Carrera 44 #64-28, Barranquilla, Atlántico, Colombia.
                </p>
            </div>
            <div class="row center">
                <h5>Teléfonos</h5>
                <div class="divider"></div>
            </div>
            <div class="row">
                <div class="col l12 m12 s12">
                    <li>+573057970368 (Principal)</li>
                </div>
                <div class="col l12 m12 s12">
                    <li>+573005864202</li>
                </div>
                <div class="col l12 m12 s12">
                    <li>+573003334909</li>
                </div>
                <div class="col l12 m12 s12">
                    <li>+573023182079</li>
                </div>
            </div>
            <div class="row center">
                <h5>Correo Electronico</h5>
                <div class="divider"></div>
            </div>
            <div class="row">
                <div class="col l12 m12 s12">
                    <li>cerrajeriabululo@gmail.com</li>
                </div>
            </div>
        </div>
    </div>
    <div class="col l8 s12 m12">
        <div class=" card-panel">
            <div class="row center">
                <i class="material-icons prefix" style="color: dodgerblue">contacts</i>
                <h3>Contáctanos</h3>
                <div class="divider"></div>
            </div>
            <div class="row">
                @include('alerts.success')
                @include('alerts.errors')
                @include('alerts.request')
            </div>
            <div class="row">
                {!!Form::open(['route'=>'mail.store', 'method' => 'POST'])!!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset class="text-center">
                        <div class="row form-group">
                            <div class="row">
                                <div class="input-field col l12 m12 s12">
                                    <i class="material-icons prefix">assignment_ind</i>
                                    {!!Form::text('name',null,['class' => 'validate'])!!}
                                    <label for="name">Nombre</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    {!!Form::text('email',null,['class' => 'validate'])!!}
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">message</i>
                                {!!Form::textarea('mensaje',null,['class' => 'validate materialize-textarea'])!!}
                                <label for="mensaje">Mensaje</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m10 s10 offset-m1 offset-s1">
                                <button type="submit" class="btn btn-block " style="background: dodgerblue">enviar</button>
                            </div>
                        </div>
                    </fieldset>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>
@stop