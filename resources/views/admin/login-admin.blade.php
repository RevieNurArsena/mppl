<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $judul }}</title>
    {{-- Fontawesome Libraries --}}
    <link href="{{ asset('assets/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- General CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="bg-primary mx-3 shadow-sm" style="height: 2px;"></div>
                        <div class="card card-primary rounded-0 border border-light shadow-sm px-2 mx-3">
                            <div class="card-header justify-content-center bg-white border border-light border-start-0 border-end-0">
                                <h3 class="text-primary fw-bold text-center py-3">Login Admin</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="/admin/login" class="needs-validation" novalidate="">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label for="username" class="fs-12">Username</label>
                                        <input id="username" type="text" class="form-control shadow-none" name="username"
                                            tabindex="1" required autofocus>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="d-block">
                                            <label for="password" class="control-label fs-12">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control shadow-none" name="password"
                                            tabindex="2" required>
                                    </div>

                                    <div class="form-group mb-4">
                                        <button type="submit" class="btn btn-primary w-100 shadow-none" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Page Specific JS File -->
</body>

</html>
