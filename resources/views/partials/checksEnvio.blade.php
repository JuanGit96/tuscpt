<div class="form-group radio-gen col-xs-10 col-xs-offset-1 col-lg-6 col-lg-offset-3" >
    <div class="radio-div" id="radios">
        @if($isHoliday || $isWeekend)
            <div class="radio" id="radio1" style="pointer-events: none;">
                <label ><input type="radio" name="optradio" id="inmediata" value="LO QUIERO YA" disabled><span class="radio-span">¡Lo quiero hoy mismo! <span style="color: red">(Opción NO disponible días festivos o fines de semana)</span> <b>se adicionan $5.000 al valor total.</b></span></label>
            </div>
        @else
            <div class="radio" id="radio1">
                <label ><input type="radio" name="optradio" id="inmediata" value="LO QUIERO YA" checked><span class="radio-span">¡Lo quiero hoy mismo! (opción disponible antes de 3:30 pm) <b>se adicionan $5.000 al valor total.</b></span></label>
            </div>
        @endif

        <br>
        <div class="radio" id="radio2">
            <label><input type="radio" name="optradio" id="24Horas" value="ESPERO HASTA 48 HORAS"><span class="radio-span">ENVÍO INCLUIDO  <b>(En 48 horas o antes recibirás tu pedido)</b></span></label>
        </div>
        <br>
        <div class="radio" id="radio3">
            <label><input type="radio" name="optradio" id="pasoPorEllas" value="PasoPorEllas"><span class="radio-span">Paso por mis Cajas, (Puedes pasar de lunes a viernes de 10:00 a.m. a 4:00 p.m.)  <b>¡Ahorrate 15.000 mil!</b>  <a style="color: #7b057e" href="https://goo.gl/maps/SefbZehKM84vQEf96">recibe tu pedido aquí</a></span></label>
        </div>

    </div>
</div>
