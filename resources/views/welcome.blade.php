@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- DROPDOWN SELECT -->
                <form>

                    <div class="container text-center">
                        <div class="row align-items-center mt-2">
                            <div class="col">
                                <label for="id" class="col-form-label">Je suis</label>
                                <select class="form-select" aria-label="Default select example" id="id" name="id">
                                    <option disabled selected hidden>Sélectionnez...</option>
                                    @foreach($persons as $person)
                                    <option value="{{ $person->id }}">
                                        {{ $person->type }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="id" class="col-form-label">Service</label>
                                <select class="form-select" aria-label="Default select example" id="id" name="id">
                                    <option disabled selected hidden>Sélectionnez...</option>
                                    @foreach($services as $service)
                                    <option value="{{ $service->id }}">
                                        {{ $service->service }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="container text-center">
                        <div class="row align-items-center mt-5">
                            <div class="col">
                                <label for="id" class="col-form-label">Raison de la venue</label>
                                <select class="form-select" aria-label="Default select example" id="id" name="id">
                                    <option disabled selected hidden>Sélectionnez...</option>
                                    @foreach($cadre as $raison)
                                    <option value="{{ $raison->id }}">
                                        {{ $raison->raison }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label for="id" class="col-form-label">Pôle utilisé</label>
                                <select class="form-select" aria-label="Default select example" id="id" name="id">
                                    <option disabled selected hidden>Sélectionnez...</option>
                                    @foreach($pole as $pole)
                                    <option value="{{ $pole->id }}">
                                        {{ $pole->pole }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center py-5">
                        <button type="submit" class="btn btn-primary ">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container align-items-end">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <p class="col-md-4 mb-0 text-body-secondary">&copy; Fablab UNC</p>

              <a href="/"
                  class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                  <img src="logo_fablab.png" width="50" height="50" class="d-inline-block align-top" alt="">
              </a>
          </footer>
      </div>
    </div>
</div>
@endsection
