<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<div class="container">
<div class="mt-20">
    <div style="margin-top: 20px">
        <div class="card uper">
            <div class="card-header">
              Ajouter une Voiture
            </div>

            <div class="card-body">
                @if(session()->get('success'))
                <div class="alert alert-success">
                  {{ session()->get('success') }}
                </div><br />
              @endif


              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div><br />
              @endif

                <form method="post" action="{{ route('cars.store') }}">
          .         @csrf
                    <div class="form-group">
                        <label for="marque">Marque de Voiture:</label>
                        <input type="text" class="form-control" name="marque"/>
                    </div>

                    <div class="form-group">
                        <label for="prix">Prix :</label>
                        <input type="text" class="form-control" name="prix"/>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
                </form>
            </div>
          </div>

    </div>
</div>
</div>
