@extends('dashboard.layout.main')
@section('title')
    Dashboard
@stop()
@section('seccion')
Dashboard
@stop()
@section('content')
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        function openDiv(evt, divName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(divName).style.display = "block";
    evt.currentTarget.className += " active";
    google.charts.setOnLoadCallback(drawChartApartaestudioAño);
         google.charts.setOnLoadCallback(drawChartAptoAño);

}


      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChartAño);
      
      
      function drawChartAño() {

        var datakits = google.visualization.arrayToDataTable([
          ['Año', 'Apartaestudios', 'Apartamentos', 'Casas'],
          ['2018', {{$estudio2018}}, {{$apartamento2018}}, {{$casa2018}}],
          ['2017', {{$estudio2017}}, {{$apartamento2017}}, {{$casa2017}}],
        ]);
        var dataciudad = google.visualization.arrayToDataTable([
          ['Año', 'Bogota', 'Medellin', 'Otra'],
          ['2018', {{$ciudad2018}}, {{$ciudad22018}}, {{$ciudad32018}}],
          ['2017', {{$ciudad2017}}, {{$ciudad22017}}, {{$ciudad32017}}],
        ]);
        var datapay = google.visualization.arrayToDataTable([
          ['Año', 'Contra Entrega', 'pse', 'tarjeta de credito', 'baloto'],
          ['2018', {{$contra2018}}, {{$tarjeta2018}}, {{$pse2018}},{{$baloto2018}}],
          ['2017', {{$contra2017}}, {{$tarjeta2017}}, {{$pse2017}},{{$baloto2017}}],
        ]);
        var datahora = google.visualization.arrayToDataTable([
          ['Año', 'Lo quiero ya','Antes de 24 Horas','Gratis'],
          ['2018', {{$ya2018}},{{$gratis2018}},{{$antes242018}}],
          ['2017',  {{$ya2017}},{{$gratis2017}},{{$antes242017}}],
        ]);

                   
       var op1 = {
                     'title':'Kits vendidos',
                     'legend':'bottom',
                       'width':500,
                       'height':500};
        var op2 = {
                     'title':'Kits vendidos por ciudad',
                     'legend':'bottom',
                       'width':500,
                       'height':500};
        var op3 = {
                     'title':'Metodo de pago',
                     'legend':'bottom',
                       'width':500,
                       'height':500,
                       'seriesType': 'bars',
                       'series': {5: {type: 'line'}}
                   };
        var op4 = {
                     'title':'Hora de Entrega',
                     'legend':'bottom',
                       'width':500,
                       'height':500}; 


       
        var kits = new google.visualization.BarChart(document.getElementById('total_div'));
        var ciudad = new google.visualization.ColumnChart(document.getElementById('ciudad_div'));
        var pay = new google.visualization.ComboChart(document.getElementById('metodo_div'));
        var hora = new google.visualization.BarChart(document.getElementById('hora_div'));
        kits.draw(datakits, op1);
        ciudad.draw(dataciudad, op2);
        pay.draw(datapay, op3);
        hora.draw(datahora, op4);
        

        
       

      }


      function drawChartTodo() {

        var datakits = new google.visualization.DataTable();
        datakits.addColumn('string', 'Topping');
        datakits.addColumn('number', 'Slices');
        datakits.addRows([
          ['Apartaestudios', {{$estudio}}],
          ['Apartamentos', {{$apartamento}}],
          ['Casa', {{$casa}}],
        ]);
        var dataciudad= google.visualization.arrayToDataTable([
            ["Ciudad", "Cantidad", { role: "style" } ],
            ["Bogota",  {{$ciudad}}, "#b87333"],
            ["Medellin", {{$ciudad1}}, "silver"],
            ["Otra", {{$ciudad2}}, "gold"],
        ]);
        var datapay = google.visualization.arrayToDataTable([
          ['Forma de pago', 'Cantidad'],
          ['Contra Entrega', {{$contra}}],
          ['PSE',  {{$pse}}],
          ['Tarjeta de credito',  {{$tarjeta}}],
          ['Baloto',  {{$baloto}}],
        ]);
         var datahora = google.visualization.arrayToDataTable([
          ['Hora de Entrega', 'Cantidad',{ role: "style" }],
          ['Lo quiero ya', {{$ya}},'green'],
          ['Antes de 24 Horas',  {{$antes24}},'blue'],
          ['Gratis',  {{$gratis}},'red'],
        ]);

        var op1 = {
                    'title':'Kits vendidos ',
                     'legend':'bottom',
                       'width':500,
                        'is3D':true,
                       'height':500};
        var op2 = {
                     'title':'Kits vendidos por ciudad',
                     'legend':'none',
                       'width':500,
                        'is3D':true,
                       'height':500};
        var op3 = {
                     'title':'Metodo del pago',
                     'legend':'bottom',
                       'width':500,
                        'pieHole': 0.4,
                       'height':500};
        var op4 = {
                     'title':'Hora de Entrega',
                     'legend':'none',
                       'width':500,
                       'height':500};               


        var kits = new google.visualization.PieChart(document.getElementById('total_div'));
        var ciudad = new google.visualization.BarChart(document.getElementById('ciudad_div'));
        var pay = new google.visualization.PieChart(document.getElementById('metodo_div'));
        var hora = new google.visualization.ColumnChart(document.getElementById('hora_div'));
        kits.draw(datakits, op1);
        ciudad.draw(dataciudad, op2);
        pay.draw(datapay, op3);
        hora.draw(datahora, op4);
        

      }


      function drawChartApartaestudio() {

        var dataciudad= google.visualization.arrayToDataTable([
            ["Ciudad", "Cantidad" ],
            ["Bogota",  {{$ciudadApe}}],
            ["Medellin", {{$ciudad1Ape}}],
            ["Otra", {{$ciudad2Ape}}],
        ]);
        var datapay = google.visualization.arrayToDataTable([
          ['Forma de pago', 'Cantidad'],
          ['Contra Entrega', {{$contraAptoes}}],
          ['PSE',  {{$pseAptoes}}],
          ['Tarjeta de credito',  {{$tarjetaAptoes}}],
          ['Baloto',  {{$balotoAptoes}}],
        ]);
         var datahora = google.visualization.arrayToDataTable([
          ['Hora de Entrega', 'Cantidad'],
          ['Lo quiero ya', {{$yaAptoes}}],
          ['Antes de 24 Horas',  {{$antes24Aptoes}}],
          ['Gratis',  {{$gratisAptoes}}],
        ]);

        var op1 = {
                    'title':'Kits vendidos por ciudad',
                     'legend':'bottom',
                       'width':500,
                        'is3D':true,
                       'height':500};
        var op2 = {
                     'title':'Metodo del pago',
                     'legend':'bottom',
                       'width':500,
                        'is3D':true,
                       'height':500};
        var op3 = {
                     'title':'Hora de Entrega',
                     'legend':'bottom',
                       'width':500,
                        'pieHole': 0.4,
                       'height':500};

        var ciudad= new google.visualization.PieChart(document.getElementById('ciudadapartaes_div'));
        var pay = new google.visualization.LineChart(document.getElementById('metodoapartaes_div'));
        var hora = new google.visualization.PieChart(document.getElementById('horaapartaes_div'));
        ciudad.draw(dataciudad, op1);
        pay.draw(datapay, op2);
        hora.draw(datahora, op3);
        

      }

      function drawChartApartaestudioAño() {

        var dataciudad= google.visualization.arrayToDataTable([
            ['Año', 'Bogota', 'Medellin', 'Otra'],
            ['2018', {{$ciudadAptoes2018}}, {{$ciudad2Aptoes2018}}, {{$ciudad3Aptoes2018}}],
            ['2017', {{$ciudadAptoes2017}}, {{$ciudad2Aptoes2017}}, {{$ciudad3Aptoes2017}}],
        ]);
        var datapay = google.visualization.arrayToDataTable([
          ['Año', 'Contra Entrega', 'pse', 'tarjeta de credito', 'baloto'],
          ['2018', {{$contraAptoes2018}}, {{$tarjetaAptoes2018}}, {{$pseAptoes2018}},{{$balotoAptoes2018}}],
          ['2017', {{$contraAptoes2017}}, {{$tarjetaAptoes2017}}, {{$pseAptoes2017}},{{$balotoAptoes2017}}],
        ]);
         var datahora = google.visualization.arrayToDataTable([
          ['Año', 'Lo quiero ya','Antes de 24 Horas','Gratis'],
          ['2018', {{$yaAptoes2018}},{{$gratisAptoes2018}},{{$antes24Aptoes2018}}],
          ['2017',  {{$yaAptoes2017}},{{$gratisAptoes2017}},{{$antes24Aptoes2017}}],
        ]);

        var op1 = {
                    'title':'Kits vendidos por ciudad',
                     'legend':'bottom',
                       'width':500,
                       'height':500};
        var op2 = {
                     'title':'Metodo del pago',
                     'legend':'bottom',
                       'width':500,
                       'height':500};
        var op3 = {
                     'title':'Hora de Entrega',
                     'legend':'bottom',
                       'width':500,
                        'pieHole': 0.4,
                       'height':500};

        var ciudad= new google.visualization.BarChart(document.getElementById('ciudadapartaes_div'));
        var pay = new google.visualization.ColumnChart(document.getElementById('metodoapartaes_div'));
        var hora = new google.visualization.ColumnChart(document.getElementById('horaapartaes_div'));
        ciudad.draw(dataciudad, op1);
        pay.draw(datapay, op2);
        hora.draw(datahora, op3);
        

      }

      function drawChartApto() {

        var dataciudad= google.visualization.arrayToDataTable([
            ["Ciudad", "Cantidad" ],
            ["Bogota",  {{$ciudadApto}}],
            ["Medellin", {{$ciudad1Apto}}],
            ["Otra", {{$ciudad2Apto}}],
        ]);
        var datapay = google.visualization.arrayToDataTable([
          ['Forma de pago', 'Cantidad'],
          ['Contra Entrega', {{$contraApto}}],
          ['PSE',  {{$pseApto}}],
          ['Tarjeta de credito',  {{$tarjetaApto}}],
          ['Baloto',  {{$balotoApto}}],
        ]);
         var datahora = google.visualization.arrayToDataTable([
          ['Hora de Entrega', 'Cantidad'],
          ['Lo quiero ya', {{$yaApto}}],
          ['Antes de 24 Horas',  {{$antes24Apto}}],
          ['Gratis',  {{$gratisApto}}],
        ]);

        var op1 = {
                    'title':'Kits vendidos por ciudad',
                     'legend':'bottom',
                       'width':500,
                        'is3D':true,
                       'height':500};
        var op2 = {
                     'title':'Metodo del pago',
                     'legend':'bottom',
                       'width':500,
                        'is3D':true,
                       'height':500};
        var op3 = {
                     'title':'Hora de Entrega',
                     'legend':'bottom',
                       'width':500,
                        'pieHole': 0.4,
                       'height':500};

        var ciudad= new google.visualization.PieChart(document.getElementById('ciudadapto_div'));
        var pay = new google.visualization.LineChart(document.getElementById('metodoapto_div'));
        var hora = new google.visualization.PieChart(document.getElementById('horaapto_div'));
        ciudad.draw(dataciudad, op1);
        pay.draw(datapay, op2);
        hora.draw(datahora, op3);
        

      }

      function drawChartAptoAño() {

        var dataciudad= google.visualization.arrayToDataTable([
            ['Año', 'Bogota', 'Medellin', 'Otra'],
            ['2018', {{$ciudadApto2018}}, {{$ciudad2Apto2018}}, {{$ciudad3Apto2018}}],
            ['2017', {{$ciudadApto2017}}, {{$ciudad2Apto2017}}, {{$ciudad3Apto2017}}],
        ]);
        var datapay = google.visualization.arrayToDataTable([
          ['Año', 'Contra Entrega', 'pse', 'tarjeta de credito', 'baloto'],
          ['2018', {{$contraApto2018}}, {{$tarjetaApto2018}}, {{$pseApto2018}},{{$balotoApto2018}}],
          ['2017', {{$contraApto2017}}, {{$tarjetaApto2017}}, {{$pseApto2017}},{{$balotoApto2017}}],
        ]);
         var datahora = google.visualization.arrayToDataTable([
          ['Año', 'Lo quiero ya','Antes de 24 Horas','Gratis'],
          ['2018', {{$yaApto2018}},{{$gratisApto2018}},{{$antes24Apto2018}}],
          ['2017',  {{$yaApto2017}},{{$gratisApto2017}},{{$antes24Apto2017}}],
        ]);

        var op1 = {
                    'title':'Kits vendidos por ciudad',
                     'legend':'bottom',
                       'width':500,
                       'height':500};
        var op2 = {
                     'title':'Metodo del pago',
                     'legend':'bottom',
                       'width':500,
                       'height':500};
        var op3 = {
                     'title':'Hora de Entrega',
                     'legend':'bottom',
                       'width':500,
                        'pieHole': 0.4,
                       'height':500};

        var ciudad= new google.visualization.BarChart(document.getElementById('ciudadapto_div'));
        var pay = new google.visualization.ColumnChart(document.getElementById('metodoapto_div'));
        var hora = new google.visualization.ColumnChart(document.getElementById('horaapto_div'));
        ciudad.draw(dataciudad, op1);
        pay.draw(datapay, op2);
        hora.draw(datahora, op3);
        

      }
      


      
      function fechaAptoesOnChange(sel) {
            
      if (sel.value=="1"){
         google.charts.setOnLoadCallback(drawChartApartaestudio);

      }else{
         google.charts.setOnLoadCallback(drawChartApartaestudioAño);

        
        }
      }

      function fechaOnChange(sel) {
            
      if (sel.value=="1"){
        google.charts.setOnLoadCallback(drawChartTodo);
      }else{
         google.charts.setOnLoadCallback(drawChartAño);
        
      }
        }

      function fechaAptoOnChange(sel) {
            
      if (sel.value=="1"){
         google.charts.setOnLoadCallback(drawChartApto);

      }else{
        google.charts.setOnLoadCallback(drawChartAptoAño);

        
        }
      }

      
    </script>
<div class="tab">
  <button class="tablinks active" onclick="openDiv(event, 'total')">Total</button>
  <button class="tablinks" onclick="openDiv(event, 'apartaes')">Apartaestudios</button>
  <button class="tablinks" onclick="openDiv(event, 'aparta')">Apartamentos</button>
  <button class="tablinks" onclick="openDiv(event, 'casa')">Casa</button>
</div>

<div id="total" class="tabcontent" style="display: block">
  <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="flip">
                <div class="widget-bg-color-icon card-box front">
                    <div class="bg-icon pull-left">
                        <i class="ti-eye text-warning"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b>{{count($kits)}}</b></h3>
                        <p>Kits Disponibles</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="flip">
                <div class="widget-bg-color-icon card-box front">
                    <div class="bg-icon pull-left">
                        <i class="ti-shopping-cart text-success"></i>
                    </div>
                    <div class="text-right">
                        <h3><b id="widget_count3">{{count($order)}}</b></h3>
                        <p>Kits Vendidos</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="flip">
                <div class="widget-bg-color-icon card-box front">
                    <div class="bg-icon pull-left">
                        <i class="ti-thumb-up text-danger"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b>{{count($article)}}</b></h3>
                        <p>Articulos Publicados</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
               
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="flip">
                <div class="widget-bg-color-icon card-box front">
                    <div class="bg-icon pull-left">
                        <i class="ti-user text-info"></i>
                    </div>
                    <div class="text-right">
                        <h3 class="text-dark"><b>{{count($user)}}</b></h3>
                        <p>Usuarios</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xs-12" >
        <div class="col-lg-6 col-xs-12" style="padding-left: 0px;padding-right: 23px;">
            <div class="col-lg-3 col-xs-12">
                <h4>Filtrar por :</h4>
            </div>
            <div  class="col-lg-6 col-xs-12">
            <select name="pago" onchange="fechaOnChange(this)" class="form-control">
                <option selected value="0">Por año</option>
                <option value="1">Todo</option>
            </select>
            </div>
        </div>
        
    </div>
    <div id="total_div" class="col-lg-6 col-xs-12"></div>
     <div id="ciudad_div" class="col-lg-6 col-xs-12"></div>
     <div id="metodo_div" class="col-lg-6 col-xs-12"></div>
     <div id="hora_div" class="col-lg-6 col-xs-12"></div>
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Ordenes hoy
                            </h3>
                        </div>
                        <div class="panel-body">
                            <?php foreach ($order as $o) : ?>

                                        {{-- {{date_format($o->created_at, 'Y-m-d')}} == {{date('Y-m-d')}} --}}
                                <?php if ( date_format($o->created_at, 'Y-m-d') == date('Y-m-d')) : ?>

                                        <div class="col-sm-6 col-md-6 col-lg-3">
                                            <div class="flip">
                                                <div class="widget-bg-color-icon card-box front">
                                                    <div class="bg-icon pull-left">
                                                        <i class="ti-shopping-cart text-success"></i>
                                                    </div>
                                                    <div class="text-right">
                                                        <h3 class="text-dark"><b>1</b></h3>
                                                        <p>{{$o->name}}</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php else: ?>
                                <?php endif ?>

                            <?php endforeach ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="apartaes" class="tabcontent">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="flip">
                <div class="widget-bg-color-icon card-box front">
                    <div class="bg-icon pull-left">
                        <i class="ti-shopping-cart text-success"></i>
                    </div>
                    <div class="text-right">
                        <h3><b id="widget_count3">{{$estudio}}</b></h3>
                        <p>Kits Vendidos</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
  <div class="col-lg-12 col-xs-12" >
        <div class="col-lg-6 col-xs-12" style="padding-left: 0px;padding-right: 23px;">
            <div class="col-lg-3 col-xs-12">
                <h4>Filtrar por :</h4>
            </div>
            <div  class="col-lg-6 col-xs-12">
            <select name="pago2" onchange="fechaAptoesOnChange(this)" class="form-control">
                <option selected value="0">Por año</option>
                <option value="1">Todo</option>
            </select>
            </div>
        </div>
        
    </div>
    <div id="ciudadapartaes_div" class="col-lg-6 col-xs-12"></div>
    <div id="metodoapartaes_div" class="col-lg-6 col-xs-12"></div>
    <div id="horaapartaes_div" class="col-lg-6 col-xs-12"></div>
  </div>
</div>

<div id="aparta" class="tabcontent">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-3">
      <div class="flip">
          <div class="widget-bg-color-icon card-box front">
              <div class="bg-icon pull-left">
                  <i class="ti-shopping-cart text-success"></i>
              </div>
              <div class="text-right">
                  <h3><b id="widget_count3">{{$apartamento}}</b></h3>
                  <p>Kits Vendidos</p>
              </div>
              <div class="clearfix"></div>
          </div>
      </div>
    </div>
    <div class="col-lg-12 col-xs-12" >
        <div class="col-lg-6 col-xs-12" style="padding-left: 0px;padding-right: 23px;">
            <div class="col-lg-3 col-xs-12">
                <h4>Filtrar por :</h4>
            </div>
            <div  class="col-lg-6 col-xs-12">
            <select name="pago3" onchange="fechaAptoOnChange(this)" class="form-control">
                <option selected value="0">Por año</option>
                <option value="1">Todo</option>
            </select>
            </div>
        </div>
    </div>
    <div id="ciudadapto_div" class="col-lg-6 col-xs-12"></div>
    <div id="metodoapto_div" class="col-lg-6 col-xs-12"></div>
    <div id="horaapto_div" class="col-lg-6 col-xs-12"></div>
  </div>
</div>

<div id="casa" class="tabcontent">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-3">
      <div class="flip">
          <div class="widget-bg-color-icon card-box front">
              <div class="bg-icon pull-left">
                  <i class="ti-shopping-cart text-success"></i>
              </div>
              <div class="text-right">
                  <h3><b id="widget_count3">{{$casa}}</b></h3>
                  <p>Kits Vendidos</p>
              </div>
              <div class="clearfix"></div>
          </div>
      </div>
    </div>
    <div class="col-lg-12 col-xs-12" >
        <div class="col-lg-6 col-xs-12" style="padding-left: 0px;padding-right: 23px;">
            <div class="col-lg-3 col-xs-12">
                <h4>Filtrar por :</h4>
            </div>
            <div  class="col-lg-6 col-xs-12">
            <select name="pago3" onchange="fechacasaOnChange(this)" class="form-control">
                <option selected value="0">Por año</option>
                <option value="1">Todo</option>
            </select>
            </div>
        </div>
    </div>
    <div id="ciudadcasa_div" class="col-lg-6 col-xs-12"></div>
    <div id="metodocasa_div" class="col-lg-6 col-xs-12"></div>
    <div id="horacasa_div" class="col-lg-6 col-xs-12"></div>
  </div>
</div>
<div class="background-overlay"></div>

    
@stop()

