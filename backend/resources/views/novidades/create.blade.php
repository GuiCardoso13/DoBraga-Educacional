@extends('layouts.app')

@section('content')
<h1 class="mb-4">Nova Novidade</h1>

<form action="{{ route('novidades.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">URL</label>
        <input type="text" name="url" class="form-control">
    </div>
    <button class="btn btn-primary">Salvar</button>
</form>
@endsection
