<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
                registration in Page 
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>    
        <style>
            body{
                background-image: url('./background.jpg')
            }
        </style>
    
    </head>
    
    
<body>    
<section class="vh-100 gradient-custom">
  <div class="container py-1">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div>
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form action="{{route('add')}}" method="POST">
            @csrf
              <div class="row">
                <div class="col-md-12 mb-2">
                  <div class="form-outline">
                  <label class="form-label" for="firstName">First Name</label>
                    <input type="text" id="firstName" value="{{old('txtfname')}}" class="form-control form-control-lg" name="txtfname" require/>                    
                    @error('txtfname')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
               
              </div>

              <div class="row">
                <div class="col-md-12 mb-2">
                  <div class="form-outline">
                  <label class="form-label" for="emailAddress">Email</label>
                    <input type="email" id="emailAddress" value="{{old('txtemail')}}" class="form-control form-control-lg" name="txtemail" require />
                    @error('txtemail')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                </div>

                <div class="row">
                <div class="col-md-6 mb-2">
                  <div class="form-outline">
                  <label class="form-label" >Password :</label>
                    <input type="password" id="pswd" value="{{old('txtpswd')}}" class="form-control form-control-lg" name="txtpswd" require />
                    @error('txtpswd')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
                <div class="col-md-6 mb-2">
                  <div class="form-outline">
                  <label class="form-label">Confirm Password</label>
                    <input type="password" id="cpswd" value="{{old('txtcpswd')}}" class="form-control form-control-lg" name="txtcpswd" require />
                    @error('txtcpswd')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>

                </div>
              </div>


              <div class="row">
                <div class="col-md-6 mb-2 d-flex align-items-center">
                   <div class="form-outline datepicker w-100">
                        <label for="birthdayDate" class="form-label">Birthday</label>
                        <input
                            type="date"
                            class="form-control form-control-lg"
                            id="birthdayDate"
                            name="bod"
                            value="{{old('bod')}}"
                            require
                        />
                    @error('bod')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
                  <div class="col-md-6 mb-2">
                    <label for="country" class="form-label">City</label>
                    <select class="form-select" id="city" name="city" >
                        <option selected>Surat</option>
                        <option >Valsad</option>
                        <option>Pune</option>
                        <option>Vadodara</option>
                        <option>Rajkot</option>
                    </select>
                    @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                
                </div>

               

            </div>

                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>
                  
                  <div class="form-check form-check-inline">
                  <label class="form-check-label" for="femaleGender">Female</label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="femaleGender"
                      value="F"
                      checked
                    />
                    
                  </div>

                  <div class="form-check form-check-inline">
                  <label class="form-check-label" for="maleGender">Male</label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="gender"
                      id="maleGender"
                      value="M"
                    />
                   
                  </div>
                  @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                </div>
              </div>

              <div class="row">
                <div class="row col-12">
                <label class="form-label select-label">Select your hobby ...</label><br/>
                <div class="col-6">
                <input type="checkbox" name="hobby[]" value="Dancing" /> Dancing <br />
                <input type="checkbox" name="hobby[]" value="Listening" /> Listening <br />
                <input type="checkbox" name="hobby[]" value="Singing" /> Singing <br />
                <input type="checkbox" name="hobby[]" value="Internet Surfing" /> Internet Surfing                
                </div>
                   <div class="col-6">
                <input type="checkbox" name="hobby[]" value="Cricket" /> Cricket <br />
                <input type="checkbox" name="hobby[]" value="Watch Tv" /> Watch Tv <br />
                <input type="checkbox" name="hobby[]" value="Play Game" /> Play Game <br />
                <input type="checkbox" name="hobby[]" value="Reading" /> Reading                
                </div>
                @error('hobby')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="mt-4 pt-2">
          
              <div class="mt-4 pt-2">
              <div class="d-grid gap-2 col-12 mx-auto mb-3">
                <button class="btn btn-primary" type="submit" name="submit">register</button></a>
            </div>  
              </div>

            

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </body>
</html>

{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Laravel Project</title>
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
   

    <div class="row g-5">
     
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Registration</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

           

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

           
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Hobby</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Password</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Confirm Password</small>
              <div class="invalid-feedback">
               Password is Required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>

@include('template.footer')
</div>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html> --}}
