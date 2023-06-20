<h1>Genera tu dieta</h1>

<form action="{{ route('dieta.sendMessage') }}" method="post">
    @csrf
    <label for="message">Mensaje:</label>
    <input type="text" name="message" id="message" />
    <button type="submit">Enviar</button>
</form>

@if(isset($answer))
    <div>
        <strong>Respuesta:</strong> {{ $answer }}
    </div>
@endif