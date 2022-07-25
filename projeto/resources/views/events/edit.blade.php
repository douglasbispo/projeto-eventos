@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 class="mb-3">Editando: {{ $event->title }}</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="image" class="form-label">Imagem do evento:</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
        </div>

        <div class="form-group mb-3">
            <label for="title" class="form-label">Evento</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento..." value="{{ $event->title }}" required>
            <div class="invalid-feedback">
                Este campo é de preenchimento obrigatório
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="date" class="form-label">Data do evento</label>
            <input type="date" class="form-control" name="date" id="date" value="{{ $event->date->format('Y-m-d') }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="city" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Local do evento..." value="{{ $event->city }}" required>
            <div class="invalid-feedback">
                Este campo é de preenchimento obrigatório
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="private" class="form-label">O evento é privado?</label>
            <select name="private" id="private" class="form-control" required>
                <option value="0">Não</option>
                <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="O que vai acontecer no avento..." required>{{ $event->description }}</textarea>
            <div class="invalid-feedback">
                Este campo é de preenchimento obrigatório
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="items" class="form-label">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>

        <div class="mb-3 text-center">
            <input type="submit" class="btn btn-primary" value="Editar Evento">
        </div>
    </form>
</div>
@endsection