@extends('layout.app')

@section('content')
     <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Typography </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Typography</li>
                </ol>
              </nav>
            </div>
            <div class="row">
                    <form class="row g-3">
                        <div class="col-md-4">
                          <label for="validationServer01" class="form-label">First name</label>
                          <input type="text" class="form-control is-valid" id="validationServer01" value="Mark" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationServer02" class="form-label">Last name</label>
                          <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                          <div class="valid-feedback">
                            Looks good!
                          </div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationServerUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend3">@</span>
                            <input type="text" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                              Please choose a username.
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <label for="validationServer03" class="form-label">City</label>
                          <input type="text" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            Please provide a valid city.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationServer04" class="form-label">State</label>
                          <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                          </select>
                          <div id="validationServer04Feedback" class="invalid-feedback">
                            Please select a valid state.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationServer05" class="form-label">Zip</label>
                          <input type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                          <div id="validationServer05Feedback" class="invalid-feedback">
                            Please provide a valid zip.
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="validationServer05" class="form-label">Zip</label>
                          <input type="text" class="form-control" id="validationServer05" aria-describedby="validationServer05Feedback" required>
                          {{--  <div id="validationServer05Feedback" class="invalid-feedback">
                            Please provide a valid zip.
                          </div>  --}}
                        </div>
                        <div class="col-12">
                          <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                      </form>
                </div>
            </div>
          </div>  
        </div>
        <!-- main-panel ends -->

@stop();


