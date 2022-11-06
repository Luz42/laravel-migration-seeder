<div style="display: flex; justify-content:end; overflow-y:auto; padding: 0 1%;">
    <div style="text-align: end;">
        <h2>Date dei treni</h2>
        <ul style="display:inline-block; padding: 0 1%;">
            @foreach ($trains as $train)            
                <li style="text-decoration: underline;  padding: 1% 0;">{{$train['data_partenza']}}</li>
            @endforeach
        </ul>     
    </div>        
</div>