<h1>ChatGPT en Laravel</h1>

<form action="{{ route('chat.sendMessage') }}" method="post">
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