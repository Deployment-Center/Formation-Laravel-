<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div class="container">
    <div style="margin-top: 40px;">
        <div class="card uper">
            <div class="card-header">
              Modifier la voiture
            </div>

            <div class="card-body">

              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div><br />
              @endif

                <form method="post" action="{{ route('cars.update') }}">
                    <input type="hidden" name="id" value="{{ $car->id }}">
                    <div class="form-group">
                        @csrf
                        @method('PUT')
                        <label for="marque">Marque :</label>
                        <input type="text" class="form-control" name="marque" value="{{ $car->marque }}"/>
                    </div>

                    <div class="form-group">
                        <label for="cases">Prix :</label>
                        <input type="text" class="form-control" name="prix" value="{{ $car->prix }}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </form>
            </div>
          </div>
    </div>
</div>
