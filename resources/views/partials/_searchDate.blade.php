<div>
    <h2>Seleziona la data</h2>
    <form action="/" method="get">
        <input type="date" name="date">
        <input type="submit" value="Cerca">
    </form>

    @isset($_GET['date'])
        <h2>Treni in data selezionata</h2>
            @foreach ($trains as $train)
                @if ($train['data_partenza'] == $_GET['date'])
                    <div>
                        <ul>
                            <li>Azienda: <strong> {{$train['azienda']}}</strong></li>
                            <li>Codice treno:<strong> {{$train['codice_treno']}}</strong></li>
                            <li>Carrozze: <strong>{{$train['numero_carrozze']}}</strong></li>
                            <li>Partenza da:<strong>{{$train['stazione_partenza']}}</strong> il: <strong>{{$train['data_partenza']}}</strong> alle: <strong>{{'orario_partenza'}}</strong></li>
                            <li>Arrivo a:<strong>{{$train['stazione_arrivo']}}</strong> il: <strong>{{$train['data_arrivo']}}</strong> alle: <strong>{{'orario_arrivo'}}</strong></li>
                        </ul>
                    </div>
                @endif    
            @endforeach
    @endisset 
</div>        
