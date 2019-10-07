<div class="row">
    <div class="col-xs-12" align="center" style="margin: 19px 0">
        <h5 style="font-size: 16px; color: #888"><strong>¡Agrega mas productos!:</strong> <br>
            <small style="font-size: 82%; font-weight: bold">(Costo adicional + $<span class="actualExtra" style="font-size: 15px">0</span>)</small>
            <input type="hidden" id="extrasKit" name="extrasKit" value="">
        </h5>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <input type="hidden" name="extraProductsOk" id="extraProductsOk" value="false">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="alert {{$alertDinamicColor}}">
                <p>
                    <b style="font-size: 19px;color: white;">Cajas </b>
                </p>
            </div>
            <div class="cantity" id="cantity-tv" style="text-align: center">
                <a class="btn remove-tv">-</a>
                <span class="total-cajas">0</span>
                <input type="hidden" name="total_cajas" id="total-cajas" value="">
                <a class="btn add-tv">+</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="alert {{$alertDinamicColor}}">
                <p>
                    <b style="font-size: 19px;color: white;">Bolsas </b>
                </p>
            </div>
            <div class="cantity" id="cantity-tv" style="text-align: center">
                <a class="btn remove-tv">-</a>
                <span class="total-bolsas">0</span>
                <input type="hidden" name="total_bolsas" id="total-bolsas" value="">
                <a class="btn add-tv">+</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="alert {{$alertDinamicColor}}">
                <p>
                    <b style="font-size: 19px;color: white;">Plastico burbuja</b>
                </p>
            </div>
            <div class="cantity" id="cantity-tv" style="text-align: center">
                <a class="btn remove-tv">-</a>
                <span class="total-papelBurbuja">0</span>
                <input type="hidden" name="total_papelBurbuja" id="total-papelBurbuja" value="">
                <a class="btn add-tv">+</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="alert {{$alertDinamicColor}}">
                <p>
                    <b style="font-size: 19px;color: white;">Cinta Industral</b>
                </p>
            </div>
            <div class="cantity" id="cantity-tv" style="text-align: center">
                <a class="btn remove-tv">-</a>
                <span class="total-cinta">0</span>
                <input type="hidden" name="total_cinta" id="total-cinta" value="">
                <a class="btn add-tv">+</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="alert {{$alertDinamicColor}}">
                <p>
                    <b style="font-size: 19px;color: white;">Marcadores</b>
                </p>
            </div>
            <div class="cantity" id="cantity-tv" style="text-align: center">
                <a class="btn remove-tv">-</a>
                <span class="total-marcadores">0</span>
                <input type="hidden" name="total_marcadores" id="total-marcadores" value="">
                <a class="btn add-tv">+</a>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="alert {{$alertDinamicColor}}">
                <p>
                    <b style="font-size: 19px;color: white;">Papel Kraft <span class="small">(Metros)</span></b>
                </p>
            </div>
            <div class="cantity" id="cantity-tv" style="text-align: center">
                <a class="btn remove-tv">-</a>
                <span class="total-kraft">0</span>
                <input type="hidden" name="total_papelKraft" id="total-kraft" value="">
                <a class="btn add-tv">+</a>
            </div>
        </div>
    </div>
</div>