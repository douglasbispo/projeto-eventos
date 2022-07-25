@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1 class="mb-3">Crie o seu evento</h1>
    <form action="/events" method="POST" class="needs-validation" enctype="multipart/form-data" novalidate>
        @csrf

        <div class="form-group mb-3">
            <label for="image" class="form-label">Imagem do evento:</label>
            <input type="file" name="image" id="image" class="form-control-file" required>
            <div class="valid-feedback">
                Valido
            </div>
            <div class="invalid-feedback">
                Por favor, adicione uma imagem
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="title" class="form-label">Evento</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento..." required>
            <div class="valid-feedback">
                Valido
            </div>
            <div class="invalid-feedback">
                Este campo é de preenchimento obrigatório
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="date" class="form-label">Data do evento</label>
            <input type="date" class="form-control" name="date" id="date" required>
            <div class="valid-feedback">
                Valido
            </div>
            <div class="invalid-feedback">
                Este campo é de preenchimento obrigatório
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="city" class="form-label">Cidade</label>
            <input type="text" class="form-control" name="city" id="city" placeholder="Local do evento..." required>
            <div class="valid-feedback">
                Valido
            </div>
            <div class="invalid-feedback">
                Este campo é de preenchimento obrigatório
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="private" class="form-label">O evento é privado?</label>
            <select name="private" id="private" class="form-control" required>
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="O que vai acontecer no avento..." required></textarea>
            <div class="valid-feedback">
                Valido
            </div>
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
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </div>
    </form>
</div>
@endsection