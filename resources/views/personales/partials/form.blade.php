<span class="form-group col-md-4">
    <input id="user_id" type="hidden" name="user_id" value="{{ auth()->user()->id }}" autofocus>
</span>


<div class="form-row">
    <div class="form-group col-md-4">
        <!----- TIPO DOCUMENTO ----->
        <label for="tipo_documento">{{ __('Tipo de Documento') }}<span style="color: #e74a3b;"> (*)</span></label>
        <select id="tipo_documento" class="form-control" name="tipo_documento" autofocus>
            <option selected>DNI</option>
            <option>Carnet de Extranjeria</option>
            <option>Pasaporte</option>
            <option>Cedula de Identidad</option>
            <option>Carnet de solicitante de refugio</option>
            <option>Sin Documento</option>
        </select>
    </div>

    <div class="form-group col-md-4">
        <!----- NUMERO DE DOCUMENTO ----->
        <label for="nro_documento">{{ __('Numero de Documento') }}<span style="color: #e74a3b;"> (*)</span></label>
        <input id="nro_documento" type="text" class="form-control @error('documento') is-invalid @enderror" name="nro_documento" value="{{ old('nro_documento') }}" autofocus>
    </div>

    <div class="form-group col-md-4">
        <!----- NUMERO DE RUC ----->
        <label for="ruc">{{ __('Numero de RUC') }}<span style="color: #e74a3b;"> (*)</span></label>
        <input id="ruc" type="numeric" class="form-control @error('ruc') is-invalid @enderror" name="ruc" value="{{ old('ruc') }}" autofocus>
    </div>
</div>

<div class="form-row">
    <!----- apellido_paterno ----->
    <div class="form-group col-md-4">
        <label for="apellido_paterno">{{ __('Apellido Paterno') }}<span style="color: #e74a3b;"> (*)</span></label>
        <input id="apellido_paterno" type="text" class="form-control @error('apellido_paterno') is-invalid @enderror" name="apellido_paterno" value="{{ old('apellido_paterno') }}" autofocus>
    </div>

    <!----- apellido_materno ----->
    <div class="form-group col-md-4">
        <label for="apellido_materno">{{ __('Apellido Materno') }}<span style="color: #e74a3b;"> (*)</span></label>
        <input id="apellido_materno" type="text" class="form-control @error('apellido_materno') is-invalid @enderror" name="apellido_materno" value="{{ old('apellido_materno') }}" autofocus>
    </div>

    <!----- nombres ----->
    <div class="form-group col-md-4">
        <label for="nombres">{{ __('Nombres') }}<span style="color: #e74a3b;"> (*)</span></label>
        <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" autofocus>
    </div>
</div>

<div class="form-row">
    <!----- fecha_nacimiento ----->
    <div class="form-group col-md-4">
        <label for="fecha_nacimiento">{{ __('Fecha Nacimiento') }}</label>
        <input id="fecha_nacimiento" type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" autofocus>
    </div>
    <!----- edad ----->
    <div class="form-group col-md-2">
        <label for="edad">{{ __('Edad') }}</label>
        <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad" value="0" min="10" max="100" autofocus>
    </div>
    <!----- sexo ----->
    <div class="form-group col-md-3">
        <label for="sexo">{{ __('Sexo') }}</label>
        <select id="sexo" class="form-control" name="sexo">
                    <option>-- Seleccione --</option>
                    <option>Masculino</option>
                    <option>Femenino</option>
        </select>
    </div>
    <!----- civil ----->
    <div class="form-group col-md-3">
        <label for="estado_civil">{{ __('Estado civil') }}</label>
        <select id="estado_civil" type="text" class="form-control" name="estado_civil" value="{{ old('estado_civil') }}" autofocus>
            <option>Soltera/o</option>
            <option>Conviviente</option>
            <option>Casada/o</option>
            <option>Separada/a</option>
            <option>Divorciada/o</option>
            <option>Viuda/o</option>
            <option>Otros</option>
        </select>
    </div>
</div>

<div class="form-row">
    <!----- Tipo de Direccion ----->
    <div class="form-group col-md-4">
        <label for="tipo_direccion">{{ __('Tipo de Direccion') }}</label>
        <select id="tipo_direccion" class="form-control" name="tipo_direccion">
                    <option>-- Seleccione --</option>
                    <option>Avenida</option>
                    <option>Calle</option>
                    <option>Jiron</option>
                    <option>Nro Dpto</option>
                    <option>Interior</option>
                    <option>Urbanizacion</option>
                    <option>Otro</option>
        </select>
    </div>

    <!----- direccion  ----->
    <div class="form-group col-md-8">
        <label for="direccion">{{ __('Domicilio Legal') }}<span style="color: #e74a3b;"> (*)</span></label>
        <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" autofocus>
    </div>
</div>

<div class="form-row">
    <!----- departamento  ----->
    <div class="form-group col-md-4">
        <label for="">{{ __('Departamento') }}</label>
        <select class="form-control" name="departamento" id="departamento">
                <option value="0">-- Seleccione --</option>
                <option value="">JUNIN</option>
        </select>
    </div>
    <!----- provincia ----->
    <div class="form-group col-md-4">
        <label for="">{{ __('Provincia') }}</label>
        <select class="form-control" name="provincia" id="provincia" onchange="filterCity();">
					<option value="0">-- Seleccione --</option>
					<option value="CHANCHAMAYO">CHANCHAMAYO</option>
					<option value="CHUPACA">CHUPACA</option>
					<option value="CONCEPCION">CONCEPCION</option>
					<option value="HUANCAYO">HUANCAYO</option>
					<option value="JAUJA">JAUJA</option>
					<option value="JUNIN">JUNIN</option>
					<option value="SATIPO">SATIPO</option>
					<option value="TARMA">TARMA</option>
					<option value="YAULI">YAULI</option>
			</select>
    </div>
    <!----- distrito ----->
    <div class="form-group col-md-4">
        <label for="">{{ __('Distrito') }}</label>
        <select class="form-control" name="distrito" id="distrito" disabled>
					<option value="0">-- Seleccione --</option>
					<option data-provincia="CHANCHAMAYO" value="CHANCHAMAYO">CHANCHAMAYO</option>
					<option data-provincia="CHANCHAMAYO" value="PERENE">PERENE</option>
					<option data-provincia="CHANCHAMAYO" value="PICHANAKI">PICHANAKI</option>
					<option data-provincia="CHANCHAMAYO" value="SAN LUIS DE SHUARO">SAN LUIS DE SHUARO</option>
					<option data-provincia="CHANCHAMAYO" value="SAN RAMON">SAN RAMON</option>
					<option data-provincia="CHANCHAMAYO" value="VITOC">VITOC</option>
					<option data-provincia="CHUPACA" value="AHUAC">AHUAC</option>
					<option data-provincia="CHUPACA" value="CHONGOS BAJO">CHONGOS BAJO</option>
					<option data-provincia="CHUPACA" value="CHUPACA">CHUPACA</option>
					<option data-provincia="CHUPACA" value="HUACHAC">HUACHAC</option>
					<option data-provincia="CHUPACA" value="HUAMANCACA CHICO">HUAMANCACA CHICO</option>
					<option data-provincia="CHUPACA" value="SAN JUAN DE ISCOS">SAN JUAN DE ISCOS</option>
					<option data-provincia="CHUPACA" value="SAN JUAN DE JARPA">SAN JUAN DE JARPA</option>
					<option data-provincia="CHUPACA" value="TRES DE DICIEMBRE">TRES DE DICIEMBRE</option>
					<option data-provincia="CHUPACA" value="YANACANCHA">YANACANCHA</option>
					<option data-provincia="CONCEPCION" value="ACO">ACO</option>
					<option data-provincia="CONCEPCION"  value="ANDAMARCA">ANDAMARCA</option>
					<option data-provincia="CONCEPCION"  value="CHAMBARA">CHAMBARA</option>
					<option data-provincia="CONCEPCION"  value="COCHAS">COCHAS</option>
					<option data-provincia="CONCEPCION"  value="COMAS">COMAS</option>
					<option data-provincia="CONCEPCION"  value="CONCEPCION">CONCEPCION</option>
					<option data-provincia="CONCEPCION"  value="HEROINAS">HEROINAS TOLEDO</option>
					<option data-provincia="CONCEPCION"  value="MANZANARES">MANZANARES</option>
					<option data-provincia="CONCEPCION"  value="MARISCAL CASTILLA">MARISCAL CASTILLA</option>
					<option data-provincia="CONCEPCION"  value="MATAHUASI">MATAHUASI</option>
					<option data-provincia="CONCEPCION"  value="MITO">MITO</option>
					<option data-provincia="CONCEPCION"  value="NUEVE DE JULIO">NUEVE DE JULIO</option>
					<option data-provincia="CONCEPCION"  value="ORCOTUNA">ORCOTUNA</option>
					<option data-provincia="CONCEPCION"  value="SAN JOSE DE QUERO">SAN JOSE DE QUERO</option>
					<option data-provincia="CONCEPCION"  value="SANTA ROSA DE OCOPA">SANTA ROSA DE OCOPA</option>
					<option data-provincia="CONCEPCION"  value="SANTO DOMINGO DE ACOBAMBA">SANTO DOMINGO DE ACOBAMBA</option>
					<option data-provincia="HUANCAYO" value="CARHUACALLANGA">CARHUACALLANGA</option>
					<option data-provincia="HUANCAYO" value="CHACAPAMPA">CHACAPAMPA</option>
					<option data-provincia="HUANCAYO" value="CHICCHE">CHICCHE</option>
					<option data-provincia="HUANCAYO" value="CHILCA">CHILCA</option>
					<option data-provincia="HUANCAYO" value="CHONGOS ALTO">CHONGOS ALTO</option>
					<option data-provincia="HUANCAYO" value="CHUPURO">CHUPURO</option>
					<option data-provincia="HUANCAYO" value="COLCA">COLCA</option>
					<option data-provincia="HUANCAYO" value="CULLHUAS">CULLHUAS</option>
					<option data-provincia="HUANCAYO" value="EL TAMBO">EL TAMBO</option>
					<option data-provincia="HUANCAYO" value="HUACRAPUQUIO">HUACRAPUQUIO</option>
					<option data-provincia="HUANCAYO" value="HUALHUAS">HUALHUAS</option>
					<option data-provincia="HUANCAYO" value="HUANCAN">HUANCAN</option>
					<option data-provincia="HUANCAYO" value="HUANCAYO">HUANCAYO</option>
					<option data-provincia="HUANCAYO" value="HUASICANCHA">HUASICANCHA</option>
					<option data-provincia="HUANCAYO" value="HUAYUCACHI">HUAYUCACHI</option>
					<option data-provincia="HUANCAYO" value="INGENIO">INGENIO</option>
					<option data-provincia="HUANCAYO" value="PARIAHUANCA">PARIAHUANCA</option>
					<option data-provincia="HUANCAYO" value="PILCOMAYO">PILCOMAYO</option>
					<option data-provincia="HUANCAYO" value="PUCARA">PUCARA</option>
					<option data-provincia="HUANCAYO" value="QUICHUAY">QUICHUAY</option>
					<option data-provincia="HUANCAYO" value="QUILCAS">QUILCAS</option>
					<option data-provincia="HUANCAYO" value="SAN AGUSTIN">SAN AGUSTIN</option>
					<option data-provincia="HUANCAYO" value="SAN JERONIMO DE TUNAN">SAN JERONIMO DE TUNAN</option>
					<option data-provincia="HUANCAYO" value="SANTO DOMINGO DE ACOBAMBA">SANTO DOMINGO DE ACOBAMBA</option>
					<option data-provincia="HUANCAYO" value="SAÑO">SAÑO</option>
					<option data-provincia="HUANCAYO" value="SAPALLANGA">SAPALLANGA</option>
					<option data-provincia="HUANCAYO" value="SICAYA">SICAYA</option>
					<option data-provincia="HUANCAYO" value="VIQUES">VIQUES</option>
					<option data-provincia="JAUJA" value="ACOLLA">ACOLLA</option>
					<option  data-provincia="JAUJA" value="APATA">APATA</option>
					<option  data-provincia="JAUJA" value="ATAURA">ATAURA</option>
					<option  data-provincia="JAUJA" value="CANCHAYLLO">CANCHAYLLO</option>
					<option  data-provincia="JAUJA" value="CURICACA">CURICACA</option>
					<option  data-provincia="JAUJA" value="EL MANTARO">EL MANTARO</option>
					<option  data-provincia="JAUJA" value="HUAMALI">HUAMALI</option>
					<option  data-provincia="JAUJA" value="HUARIPAMPA">HUARIPAMPA</option>
					<option  data-provincia="JAUJA" value="HUERTAS">HUERTAS</option>
					<option  data-provincia="JAUJA" value="JANJAILLO">JANJAILLO</option>
					<option  data-provincia="JAUJA" value="JAUJA">JAUJA</option>
					<option  data-provincia="JAUJA" value="JULCAN">JULCAN</option>
					<option  data-provincia="JAUJA" value="LEONOR ORDOÑEZ">LEONOR ORDOÑEZ</option>
					<option  data-provincia="JAUJA" value="LLOCLLAPAMPA">LLOCLLAPAMPA</option>
					<option  data-provincia="JAUJA" value="MARCO">MARCO</option>
					<option  data-provincia="JAUJA" value="MASMA">MASMA</option>
					<option  data-provincia="JAUJA" value="MASMA CHICCHE">MASMA CHICCHE</option>
					<option  data-provincia="JAUJA" value="MOLINOS">MOLINOS</option>
					<option  data-provincia="JAUJA" value="MONOBAMBA">MONOBAMBA</option>
					<option  data-provincia="JAUJA" value="MUQUI">MUQUI</option>
					<option  data-provincia="JAUJA" value="MUQUIYAUYO">MUQUIYAUYO</option>
					<option  data-provincia="JAUJA" value="PACA">PACA</option>
					<option  data-provincia="JAUJA" value="PACCHA">PACCHA</option>
					<option  data-provincia="JAUJA" value="PANCAN">PANCAN</option>
					<option  data-provincia="JAUJA" value="PARCO">PARCO</option>
					<option  data-provincia="JAUJA" value="POMACANCHA">POMACANCHA</option>
					<option  data-provincia="JAUJA" value="RICRAN">RICRAN</option>
					<option  data-provincia="JAUJA" value="SAN LORENZO">SAN LORENZO</option>
					<option  data-provincia="JAUJA" value="SAN PEDRO DE CHUNAN">SAN PEDRO DE CHUNAN</option>
					<option  data-provincia="JAUJA" value="SAUSA">SAUSA</option>
					<option  data-provincia="JAUJA" value="SINCOS">SINCOS</option>
					<option  data-provincia="JAUJA" value="TUNAN MARCA">TUNAN MARCA</option>
					<option  data-provincia="JAUJA" value="YAULI">YAULI</option>
					<option  data-provincia="JAUJA" value="YAUYOS">YAUYOS</option>
					<option  data-provincia="JUNIN" value="CARHUAMAYO">CARHUAMAYO</option>
					<option data-provincia="JUNIN" value="CARHUAMAYO">CARHUAMAYO</option>
					<option data-provincia="JUNIN" value="JUNIN">JUNIN</option>
					<option data-provincia="JUNIN" value="ONDORES">ONDORES</option>
					<option data-provincia="JUNIN" value="ULCUMAYO">ULCUMAYO</option>
					<option data-provincia="SATIPO" value="COVIRIALI">COVIRIALI</option>
					<option data-provincia="SATIPO" value="LLAYLLA">LLAYLLA</option>
					<option data-provincia="SATIPO" value="MAZAMARI">MAZAMARI</option>
					<option data-provincia="SATIPO" value="PAMPA HERMOSA">PAMPA HERMOSA</option>
					<option data-provincia="SATIPO" value="PANGOA">PANGOA</option>
					<option data-provincia="SATIPO" value="RIO NEGRO">RIO NEGRO</option>
					<option data-provincia="SATIPO" value="RIO TAMBO">RIO TAMBO</option>
					<option data-provincia="SATIPO" value="SATIPO">SATIPO</option>
					<option data-provincia="SATIPO" value="VIZCATAN DEL ENE">VIZCATAN DEL ENE</option>
					<option data-provincia="TARMA" value="ACOBAMBA">ACOBAMBA</option>
					<option data-provincia="TARMA" value="HUARICOLCA">HUARICOLCA</option>
					<option data-provincia="TARMA" value="HUASAHUASI">HUASAHUASI</option>
					<option data-provincia="TARMA" value="LA UNION">LA UNION</option>
					<option data-provincia="TARMA" value="PALCA">PALCA</option>
					<option data-provincia="TARMA" value="PALCAMAYO">PALCAMAYO</option>
					<option data-provincia="TARMA" value="SAN PEDRO DE CAJAS">SAN PEDRO DE CAJAS</option>
					<option data-provincia="TARMA" value="TAPO">TAPO</option>
					<option data-provincia="TARMA" value="TARMA">TARMA</option>
					<option data-provincia="YAULI" value="CHACAPALPA">CHACAPALPA</option>
					<option data-provincia="YAULI" value="HUAY-HUAY">HUAY-HUAY</option>
					<option data-provincia="YAULI" value="LA OROYA">LA OROYA</option>
					<option data-provincia="YAULI" value="MARCAPOMACOCHA">MARCAPOMACOCHA</option>
					<option data-provincia="YAULI" value="MOROCOCHA">MOROCOCHA</option>
					<option data-provincia="YAULI" value="PACCHA">PACCHA</option>
					<option data-provincia="YAULI" value="SANTA BARBARA DE CARHUACAYAN">SANTA BARBARA DE CARHUACAYAN</option>
					<option data-provincia="YAULI" value="SANTA ROSA DE SACCO">SANTA ROSA DE SACCO</option>
					<option data-provincia="YAULI" value="SUITUCANCHA">SUITUCANCHA</option>
					<option data-provincia="YAULI" value="YAULI">YAULI</option>
			</select>
    </div>
</div>
<span id="option-container" style="visibility: hidden; position:absolute;"></span>

<div class="form-row">
    <!----- telefono ----->
    <div class="form-group col-md-4">
        <label for="telefono">{{ __('Telefono/Celular') }}<span style="color: #e74a3b;"> (*)</span></label>
        <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" autofocus>
    </div>
    <!----- correo ----->
    <div class="form-group col-md-8">
        <label for="correo_electronico">{{ __('Correo electronico') }}<span style="color: #e74a3b;"> (*)</span></label>
        <input id="correo_electronico" type="text" class="form-control @error('correo_electronico') is-invalid @enderror" name="correo_electronico" value="{{ old('correo_electronico') }}" autofocus>
    </div>
</div>

<div class="form-row">
    <!----- colegio ----->
    <div class="form-group col-md-8">
        <label for="colegio">{{ __('Colegio Profesional') }}</label>
        <select id="colegio" class="form-control" name="colegio">
                    <option>-- Seleccione --</option>
                    <option>PERSONAL DE SALUD SIN COLEGIATURA</option>
                    <option>COLEGIO MEDICO DE PERU</option>
                    <option>COLEGIO QUIMICO FARMACEUTICO DEL PERU</option>
                    <option>COLEGIO ODONTOLOGICO DEL PERU</option>
                    <option>COLEGIO DE BIOLOGOS DEL PERU</option>
                    <option>COLEGIO DE OBSTETRICES DEL PERU</option>
                    <option>COLEGIO DE ENFERMEROS DEL PERU</option>
                    <option>COLEGIO DE TRABAJADORES SOCIALES DEL PERU</option>
                    <option>COLEGIO DE PSICOLOGOS DEL PERU</option>
                    <option>COLEGIO TECNOLOGO MEDICO DEL PERU</option>
                    <option>COLEGIO DE NUTRICIONISTAS DEL PERU</option>
                    <option>COLEGIO MEDICO VETERINARIO DEL PERU</option>
                    <option>COLEGIO DE INGENIEROS DEL PERU</option>
        </select>
    </div>
    <!----- registro ----->
    <div class="form-group col-md-4">
        <label for="nro_registro">{{ __('Registro Nro') }}</label>
        <input id="nro_registro" type="number" class="form-control @error('nro_registro') is-invalid @enderror" name="nro_registro" value="0" min="10" max="100" autofocus>
    </div>
</div>

<div class="form-group text-center">
    @csrf
    <input type="submit" value="Guardar Datos Personales" class="btn btn-lg btn-success">
</div>


@section('scripts')
<script>
    function filterCity() {
        var provincia = $("#provincia").find('option:selected').text(); // stores province
        $("#option-container").children().appendTo("#distrito"); // moves <option> contained in #option-container back to their <select>
        var toMove = $("#distrito").children("[data-provincia!='" + provincia + "']"); // selects city elements to move out
        toMove.appendTo("#option-container"); // moves city elements in #option-container
        $("#distrito").removeAttr("disabled"); // enables select
    };
</script>
@endsection
