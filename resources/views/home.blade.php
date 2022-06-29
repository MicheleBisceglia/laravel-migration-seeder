@foreach ($trains as $item)
      <ul>
        <li>Azienda: {{$item->company}}</li>
          <li>Stazione di partenza: {{$item->departure_station}}</li><!--da completare-->
          <li>Stazione di arrivo: {{$item->arrival_station}}</li><!--da completare-->
          <li>Orario di partenza: {{$item->arrival_time}}</li>
          <li>Orario di arrivo: {{$item->departure_time}}</li>
          <li>Codice treno: {{$item->train_code}}</li>
          <li>Numero Carrozza: {{$item->wagon_number}}</li>
          <li>In orario: {{$item->on_time}}</li><!--da completare-->
          <li>Cancellato: {{$item->delete}}</li><!--da completare-->
      </ul> 
    @endforeach

  <style>
    ul {
      display: flex;
      flex-wrap: wrap;
      border: 1px solid black;
      padding: 20px;
    }
    li {
      list-style: none;
      width: calc(100% / 4);
      margin: 10px;
    }
  </style>