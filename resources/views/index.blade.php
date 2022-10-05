<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>

</head>

<body>
    <nav class="navbar bg-light">
      <h1>Informacion de los Estados</h1>
      <div class="center">
          <form  method="post">
            @csrf
            <select name="estado" >
            <option value="1">Chiapas</option>
            <option value="2">México</option>
            <option value="3">Aguascalientes</option>
            <option value="4">Baja California</option>
            <option value="5">Baja California Sur</option>
            <option value="6">Campeche</option>
            <option value="7">Chihuahua</option>
            <option value="8">Coahuila de Zaragoza</option>
            <option value="9">Colima</option>
            <option value="10">Durango</option>
            <option value="11">Guanajuato</option>
            <option value="12">Guerrero</option>
            <option value="13">Hidalgo</option>
            <option value="14">Jalisco</option>
            <option value="15">Michoacán de Ocampo</option>
            <option value="16">Morelos</option>
            <option value="17">Nayarit</option>
            <option value="18">Nuevo León</option>
            <option value="19">Oaxaca</option>
            <option value="20">Puebla</option>
            <option value="21">Querétaro</option>
            <option value="22">Quintana Roo</option>
            <option value="23">San Luis Potosí</option>
            <option value="24">Sinaloa</option>
            <option value="25">Sonora</option>
            <option value="26">Tabasco</option>
            <option value="27">Tamaulipas</option>
            <option value="28">Tlaxcala</option>
            <option value="29">Veracruz</option>
            <option value="30">Yucatán</option>
            <option value="31">Zacatecas</option>
            </select>
            <button type="submit" class="btn btn-outline-success">Buscar</button>
          </form>
      </div>
   
    </nav>
    <div class="" id="aaa">
    <table class="table" id="info">
      <thead class="thead-dark">
        <tr>
          <th scope="col">id</th>
          <th scope="col">Estado</th>
          <th scope="col">Municipio</th>
          <th scope="col">Presupuestoe</th>
          <th scope="col">Nominal</th>
          <th scope="col">Poblacion </th>
          <th scope="col">Direccion</th>
          <th scope="col">Telefono</th>
          <th scope="col">Partido</th>
          <th scope="col">Circunscripcion</th>
          <th scope="col">Progresista</th>
          <th scope="col">Presidente_id</th>
          <th scope="col">Presidente_nombre</th>
          <th scope="col">Presidente_ap</th>
          <th scope="col">Presidente_am</th>
          <th scope="col">Telefono</th>
          <th scope="col">Genero</th>
          <th scope="col">Partido</th>
          <th scope="col">progresista</th>
          <th scope="col">Id_secretario</th>
          <th scope="col">Secretario_nombre</th>
          <th scope="col">Secretario_ap</th>
          <th scope="col">Secretario_am</th>
          <th scope="col">Telefono</th>
          <th scope="col">Genero</th>
          <th scope="col">Partido</th>
          <th scope="col">Progresista</th>
          <th scope="col">Id</th>
          <th scope="col">Regidor_nombre</th>
          <th scope="col">Regidor_ap</th>
          <th scope="col">Regidor_am</th>
          <th scope="col">Telefono</th>
          <th scope="col">Genero</th>
          <th scope="col">Partido</th>
          <th scope="col">Progresista</th>
        </tr>
    
      </thead>
      <tbody>
      @foreach($datos as $item)
      <thead>
        <tr>
          <td >{{$item['id']}}</td>
          <td>{{$item['estado']}}</td>
          <td>{{$item['municipio']}}</td>
          <td>$_{{$item['presupuestoe']}}</td>
          <td>{{$item['nominal']}}</td>
          <td>{{$item['poblacion']}}</td>
          <td>{{$item['direccion']}}</td>
          <td>{{$item['telefono']}}</td>
          <td>{{$item['partido']}}</td>
          <td>{{$item['circunscripcion']}}</td>         
          <td>{{$item['progresista']}}</td>
          <td>@if(count($item['presidentes']) > 0) {{ $item['presidentes'][0]['id']}} @endif</td>
          <td>@if(count($item['presidentes']) > 0) {{ $item['presidentes'][0]['nombre']}} @endif</td>
          <td>@if(count($item['presidentes']) > 0) {{ $item['presidentes'][0]['ap']}} @endif</td>
          <td>@if(count($item['presidentes']) > 0) {{ $item['presidentes'][0]['am']}} @endif</td>
          <td>@if(count($item['presidentes']) > 0) {{ $item['presidentes'][0]['telefono']}} @endif</td>
          <td>@if(count($item['presidentes']) > 0) {{ $item['presidentes'][0]['genero']}} @endif</td>
          <td>@if(count($item['presidentes']) > 0) {{ $item['presidentes'][0]['partido']}} @endif</td>
          <td>@if(count($item['presidentes']) > 0) {{ $item['presidentes'][0]['progresista']}} @endif</td>
          <td>@if(count($item['secretarios']) > 0) {{ $item['secretarios'][0]['id']}} @endif</td>
          <td>@if(count($item['secretarios']) > 0) {{ $item['secretarios'][0]['nombre']}} @endif</td>
          <td>@if(count($item['secretarios']) > 0) {{ $item['secretarios'][0]['ap']}} @endif</td>
          <td>@if(count($item['secretarios']) > 0) {{ $item['secretarios'][0]['am']}} @endif</td>
          <td>@if(count($item['secretarios']) > 0) {{ $item['secretarios'][0]['telefono']}} @endif</td>
          <td>@if(count($item['secretarios']) > 0) {{ $item['secretarios'][0]['genero']}} @endif</td>
          <td>@if(count($item['secretarios']) > 0) {{ $item['secretarios'][0]['partido']}} @endif</td>
          <td>@if(count($item['secretarios']) > 0) {{ $item['secretarios'][0]['progresista']}} @endif</td>
          <td>@if(count($item['regidores']) > 0) {{ $item['regidores'][0]['id']}} @endif</td>
          <td>@if(count($item['regidores']) > 0) {{ $item['regidores'][0]['nombre']}} @endif</td>
          <td>@if(count($item['regidores']) > 0) {{ $item['regidores'][0]['ap']}} @endif</td>
          <td>@if(count($item['regidores']) > 0) {{ $item['regidores'][0]['am']}} @endif</td>
          <td>@if(count($item['regidores']) > 0) {{ $item['regidores'][0]['telefono']}} @endif</td>
          <td>@if(count($item['regidores']) > 0) {{ $item['regidores'][0]['genero']}} @endif</td>
          <td>@if(count($item['regidores']) > 0) {{ $item['regidores'][0]['partido']}} @endif</td>
          <td>@if(count($item['regidores']) > 0) {{ $item['regidores'][0]['progresista']}} @endif</td>
        </tr>
      </thead>
      @endforeach
    </tbody>
  </table> 
</div>

</body>
<!-- JavaScript Bundle with Popper -->



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>