@section('content')

<body class="antialiased">
    
    <!-- DROPDOWN SELECT -->
    <form>
        <div class="form-group">
            {!! Form::Label('item', 'Item:') !!}
            {!! Form::select('item_id', $items, $selectedID, ['class' => 'form-control']) !!}
        </div>
      <div class="container text-center">
        <div class="row align-items-center mt-2">
          <div class="col-lg">
          <label for="exampleDataList" class="form-label">Je suis</label>
          <select class="form-select" aria-label="Default select example">
            <option value="0" selected disabled>Selectionnez</option>
            <option value="1">étudiant</option>
            <option value="2">Membre du personnel</option>
            <option value="3">Enseignant</option>
            <option value="4">Doctorant</option>
            <option value="5">Autre</option>

          </select>
          </div>
          <div class="col-lg">
          <label for="exampleDataList" class="form-label">Filière/Service</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Filière/Service">
            <datalist id="datalistOptions">
              <option value="San Francisco">
              <option value="New York">
              <option value="Seattle">
              <option value="Los Angeles">
              <option value="Chicago">
            </datalist>
          </div>
        </div>
      </div>

      <div class="container text-center">
        <div class="row align-items-center mt-5">
          <div class="col">
          <label for="exampleDataList" class="form-label">Raison de la venue</label>
          <select class="form-select" >
            <option value="0" selected disabled>Selectionnez</option>
            <option value="1">TP</option>
            <option value="2">Cours</option>
            <option value="3">Perso</option>
            <option value="4">Autre</option>

          </select>
          </div>
          <div class="col">
          <label for="exampleDataList" class="form-label">Pôle utilisé</label>
          <select class="form-select">
            <option value="0" selected disabled>Selectionnez</option>
            <option value="1">Textile(Brodeuse,couture...)</option>
            <option value="2">Electronique</option>
            <option value="3">Fabrication(3D)</option>

          </select>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center py-5">
        <button type="submit" class="btn btn-primary ">Envoyer</button>
      </div>
    </form>

    <div class="container align-items-end">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">&copy; Fablab UNC</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="logo_fablab.png" width="50" height="50" class="d-inline-block align-top" alt="">
      </a>
      </footer>
    </div>
  </body>
  