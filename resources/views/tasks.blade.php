<x-master title="My tasks" body="" >
    <div class="">

        <form action="{{ route('createTask') }} " method="post" class="row">
            @csrf
            <h3 class="mb-3">Taches de {{ Auth::user()->nom_complet }}</h3>
            <div class="mb-3 col-10">
                <input type="text" name="tache_new" id="" class="form-control " placeholder="Your task here">
                @error('tache_new')
                  <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3 col-2">
                <button type="submit" class="btn btn-secondary w-100">+</button>
            </div>
        </form>
      <x-tasks :tasks='$datatasks' body="tasks">

      </x-tasks>
    </div>

</x-master>
