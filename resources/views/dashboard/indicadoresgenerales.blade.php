@extends('dashboard.layout.main')
@section('title')
Artculos
@stop()
@section('seccion')
Indicadores generales
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
<div class="tab">
  <button class="tablinks active" onclick="openCity(event, 'London')">Sesiones</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Segmentacion</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Dispositivos</button>
</div>

<div id="London" class="tabcontent" style="display: block">
  <iframe width="100%" height="1500" src="https://datastudio.google.com/embed/reporting/1H9Eit0XiC_PKEgRlm8iSx0ToIHg9FiHV/page/1M" frameborder="0" style="border:0 ;" ></iframe>
</div>

<div id="Paris" class="tabcontent">
  <iframe width="100%" height="1500" src="https://datastudio.google.com/embed/reporting/1UARUZ_8idg_pEmvZONva-4nr27Cu_pn4/page/56NM" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div id="Tokyo" class="tabcontent">
  <iframe width="100%" height="1500" src="https://datastudio.google.com/embed/reporting/1L_3do0ae1BVUKUcQM0xEbtOGx1LRrtiT/page/ORSM" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
@stop()