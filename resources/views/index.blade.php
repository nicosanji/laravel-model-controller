<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <h1 class="text-center display-3 fw-bold mt-5"><i class="fa fa-film px-5"></i>MOVIES<i class="fa fa-film px-5"></i>
        </h1>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-2 my-5">
                @foreach ($movies as $movie)
                    <div class="col my-2">
                        <div class="card bg-dark text-light p-5">
                            <h2 class="bg-primary text-dark text-center rounded position-relative py-1">
                                {{ $movie->original_title }}
                                <span
                                    class="position-absolute top-0 start-0 translate-middle bg-danger text-light rounded fs-5 px-2">{{ $movie->id }}</span>
                            </h2>
                            <h4 class="text-center pb-3 mb-0">{{ $movie->title }}</h4>
                            <div class="d-flex justify-content-between bg-light text-dark rounded px-2 py-1">
                                <p class="mb-0">COUNTRY<i class="fa fa-arrow-right ps-2"></i>
                                </p>
                                <p class="fw-bold mb-0">{{ strtoupper($movie->nationality) }}</p>
                            </div>
                            <div class="d-flex justify-content-between bg-light text-dark rounded px-2 py-1 my-2">
                                <p class="mb-0">ON SALE FROM<i class="fa fa-arrow-right ps-2"></i></p>

                                <p class="fw-bold mb-0">{{ $movie->date }}</p>
                            </div>
                            <div class="d-flex justify-content-between bg-light text-dark rounded px-2 py-1">
                                <p class="mb-0">RATING<i class="fa fa-arrow-right ps-2"></i></p>
                                <p class="fw-bold mb-0">{{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
