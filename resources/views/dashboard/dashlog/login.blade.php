<!doctype html>
<html lang="en">
  <head>
    <title>Admin login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- Pills navs -->
<section class="vh-100" style="background-color: rgba(89, 136, 107, 0.8);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <h3 class="mb-5" > Sign in</h3>

            @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>         
            @endif

            <!-- Add a <form> element to wrap your form elements -->
            <form action="{{ route('adminLogin') }}" method="POST">
              @csrf
              <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email"  class="form-control form-control-lg" id="email" placeholder="name@example.com" required/>
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <!-- Update the password input type to "password" -->
                <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password" required />
             </div>

              <!-- You can add any additional form elements here -->

             <button class="btn btn-lg btn-block text-white" type="submit" style="background-color: #59886b;">Log in</button>
</form>
            <!-- End of the form -->

            <hr class="my-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
</html>