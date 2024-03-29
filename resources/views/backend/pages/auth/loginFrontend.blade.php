
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-6/assets/css/login-6.css">
<!-- Login 6 - Bootstrap Brain Component -->
<section class="bg-primary p-3 p-sm-4 p-xl-3"><br><br>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 col-lg-6 col-md-7">
        <div class="card border-0 shadow-sm rounded-4">
          <div class="card-body p-3 p-sm-4 p-xl-3">
            <div class="row">
              <div class="col-12">
                <div class="mb-4">
                  <h3 class="fw-bold">Log in</h3>
                </div>
              </div>
            </div>
            <form action="{{route('login.submit')}}" method="post">
            @csrf
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                     <input type="text" class="form-control" name="email" placeholder="Your Email" required="required">
                    <label for="email" class="form-label">Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>
                
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-2xl btn-primary" type="submit">Log in now</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <hr class="mt-4 mb-3 border-secondary-subtle">
                <div class="d-flex gap-3 gap-md-4 flex-column flex-md-row justify-content-md-end">
                  <a href="{{ route('registration') }}" class="link-secondary text-decoration-none">Create new account</a>
                  <a href="{{route('password.request')}}" class="link-secondary text-decoration-none">Forgot password</a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <p class="mt-4 mb-3">Or continue with</p>
                <div class="d-flex gap-3 flex-column">
                  <a href="#!" class="btn bsb-btn-xl btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                    </svg>
                    <span class="ms-2 fs-6 text-uppercase">Sign in With Github</span>
                  </a>
                  <a href="#!" class="btn bsb-btn-xl btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                    <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                    </svg>
                    <span class="ms-2 fs-6 text-uppercase">Sign in With Google</span>
                  </a>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><br><br><br><br>
</section>

