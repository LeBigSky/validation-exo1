@include('layouts.flash')
<section>
  <div class="container">
    <h1>Total des commentaire: {{ $all }}</h1>
    <a href="{{ route('create') }}"><button class="btn btn-warning my-3">Create</button></a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom de l'auteur</th>
            <th scope="col">Texte</th>
            <th scope="col">note</th>
            <th scope="col">Editer</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($commentaires as $com )
          <tr>
            <th scope="row">{{ $com->id }}</th>
            <td>{{ $com->nom }}</td>
            <td>{{ $com->texte }}</td>
            <td>{{ $com->note }}</td>
            <td><a href="/edit/{{ $com->id }}"><button class="btn btn-warning">Edit</button></a></td>
            <td>
              <form action="/delete/{{ $com->id }}" method="POST">
                @csrf
                @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>
</section>