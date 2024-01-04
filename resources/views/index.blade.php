<x-master title="Welcome">
    <form action="{{ route('login') }}" method="post" class="col-4">
        @csrf
        <h3>Login</h3>
        <div class="my-3">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="{{ old('email') }}">
          @error('email')
          <small  class="form-text text-danger">{{ $message }}</small>
          @enderror
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" name="password" value="">
          @error('password')
          <small  class="form-text text-danger">{{ $message }}</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-dark w-100">Se connecter</button>
        @error('incorrect')
        <center><small  class="form-text text-danger">{{ $message }}</small></center>
        @enderror
        <a href="{{ route('inscription') }}" class="d-block text-warning text-center mt-2 " >Inscription</a>
    </form>
</x-master>
