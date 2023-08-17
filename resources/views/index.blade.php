<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div class="container">
    <div style="margin-top: 40px;">
        @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div><br />
      @endif
      <a href="{{ route('cars.create')}}" class="btn btn-success">Ajouter</a>

      <table class="table table-striped">

        <thead>
            <tr>
              <td>ID</td>
              <td>Marque</td>
              <td>Prix</td>
              <td colspan="2">Action</td>
            </tr>
        </thead>

        <tbody>
            @foreach($voitures as $voiture)
            <tr>
                <td>{{$voiture->id}}</td>
                <td>{{$voiture->marque}}</td>
                <td>{{$voiture->prix}}</td>
                <td><a href="{{ route('cars.edit', $voiture->id)}}" class="btn btn-primary">Modifier</a></td>
                <td>
                    <form action="{{ route('cars.destroy', $voiture->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</div>
