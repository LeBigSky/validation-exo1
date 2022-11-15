@include('layouts.flash')
<section>
<div class="container mt-5">
    <form action="{{ route('store.commentaire') }}" method="POST">
        @csrf  
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nom de l'auteur</label>
        <input type="string" class="form-control" name="nom" id="formGroupExampleInput" value="{{ old('nom') }}">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Text a ajouter</label>
        <input type="text" class="form-control" name="texte" id="formGroupExampleInput" value="{{ old('texte') }}">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Note sur 5</label>
        <input type="number" class="form-control" name="note" id="formGroupExampleInput" value="{{ old('note') }}">
      </div>
      <button type="submit">Ajouter</button>
    </form>
</div>
</section>