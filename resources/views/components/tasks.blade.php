@props(['tasks'])
@if (empty(count($tasks)))
<div class="alert alert-danger text-center" role="alert">
    Aucun résultat !
</div>
@endif
@foreach ($tasks as $item)
<form action="{{ route('editTask',$item->id) }}" id="form{{ $item->id }}" method="post">
    @csrf
    @method('put')
    <div class="input-group mb-3">
        <div class="input-group-text">
          <input class="form-check-input mt-0 " onchange="$('#form{{ $item->id }}').submit();" type="checkbox" name="done" value="1" @if($item->done ==1){{ 'checked' }} @endif >
        </div>
        <input type="text" class="form-control @if($item->done ==1){{ 'text-decoration-line-through' }} @endif" onkeyup="$('#form{{ $item->id }}').submit();" name="tache" value="{{ $item->tache }}">
        <button type="submit" class="btn btn-trash" form="delete{{ $item->id }}"><i class="bi bi-trash text-danger"  ></i></button>
    </div>
</form>
<form action="{{ route('deleteTask',$item->id) }}" id="delete{{ $item->id }}" method="post">
    @csrf
    @method('delete')
</form>
@endforeach

