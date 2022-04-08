<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css Custom -->
    <link rel="stylesheet" href="{{ URL::asset('css/style-register.css') }}" />
    <!-- Boostrap -->
    <title>Register</title>
</head>

<body>
    <!--Halaman Register -->
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </div>

    <div class="login">
        <div class="login_title">
            <center> Register Orchid </center>
        </div>
            <!--Form start-->
            <form action="/register" method="post" class="data-form">
                @csrf
                <div class="login_fields">
                    <div class="login_fields__user">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="color: aliceblue;">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg>
                        </div>
                        <!-- Input Name -->
                        <input class="form-control @error('name') 
                        is-invalid @enderror" placeholder="Name" type="text" name="name" autofocus required value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    
                    <div class="login_fields__user">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-heart" viewBox="0 0 16 16" style="color: aliceblue;"> 
                                <path d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z"/>
                              </svg>
                        </div>
                        <!-- Input Username -->
                        <input class="form-control @error('username') 
                        is-invalid @enderror" placeholder="Username" type="text" name="username" required value="{{ old('username') }}">
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    
                    <div class="login_fields__user">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16" style="color: aliceblue;">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                              </svg>
                        </div>
                        <!-- Input Email -->
                        <input class="form-control @error('email') 
                        is-invalid @enderror" placeholder="name@example.com" type="text" name="email" required value="{{ old('email') }}" id="exampleinputemail">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    
                    <div class="login_fields__password">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16" style="color: aliceblue;" >
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                              </svg>
                        </div>
                        <!-- Input Password -->
                        <input class="form-control @error('password') 
                        is-invalid @enderror" placeholder="Password" type="password" name="password" required value="{{ old('password') }}"></input>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <center><div class="login_fields__submit">
                        <input type="submit" value="Register" name="register">
                        <div class="tulisan" style="color: aliceblue;" >or</div>
                        <p>Alredy have an account? <a type="submit" value="Log in" href="/login" role="button">Log in</a></p>
                        </div>
                    </div></center>
                
                </div>
                <!--Form end-->
            </form>

        <div class="success">
            <h2>Authentication Success</h2>
            <p>Welcome back</p>
        </div>
    </div>
</body>

</html>