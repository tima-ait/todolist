<x-master title="TO DO LIST"  body="form">
    <form action="{{ route('login') }}" method="post" class="col-4">
        @csrf
        <h3 class="mb-2">Connexion</h3>
        <div class="my-3">
          <label for="" class="form-label">Adresse e-mail</label>
          <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="utilisateur@exemple.com">
          @error('email')
          <small  class="form-text text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" name="password" value="" placeholder="******">
          @error('password')
          <small  class="form-text text-danger">{{ $message }}</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-dark w-100">Connexion</button>
        @error('incorrect')
        <center><small  class="form-text text-danger">{{ $message }}</small></center>
        @enderror
        <center class="or_class">OR</center>
        <a href="{{ route('inscription') }}" class="d-block signup text-center mt-2 " >Inscription</a>
    </form>
</x-master>
