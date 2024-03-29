<x-master title="Inscription"  body="form">
    <form action="{{ route('createUser') }}" method="post" class="col-4">
        @csrf
        <h3 class="mb-3">Inscription</h3>
        <div class="mb-2">
          <label for="" class="form-label mb-1 ">Nom complet</label>
          <input type="text" value="{{ old('nom_complet') }}" class="form-control" name="nom_complet" id="">
            @error('nom_complet')
            <small class="form-text text-danger ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-2">
          <label for="" class="form-label mb-1">Email</label>
          <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="">
            @error('email')
            <small class="form-text text-danger ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-2">
          <label for="" class="form-label mb-1">Mot de passe</label>
          <input type="password" value="" class="form-control" name="password" id="">
            @error('password')
            <small class="form-text text-danger ">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-2">
          <label for="" class="form-label mb-1">Confirmation de mot passe</label>
          <input type="password" value="" class="form-control" name="password_confirmation" id="">
        </div>
        <button type="submit" class="btn btn-dark w-100 my-3 ">Inscription</button>

        <center ><a href="/" class="text-muted mt-4 text-center">Annuler</a></center>
    </form>
</x-master>
