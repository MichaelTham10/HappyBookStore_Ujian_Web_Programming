<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div>
        <div id="head" class="bg-primary">
            <h1 class="p-5 text-center text-light">HAPPY BOOK STORE</h1>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a class="nav-link text-primary" href="/">Home</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @foreach ($categories as $category)
                        <a class="dropdown-item" href="/category/{{$category->id}}">{{$category->category}}</a>
                      @endforeach
                      
                     
                    </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link text-primary" href="/contact">Contact</a>
                </li>
                
                
              </ul>
              
            </div>
          </nav>
    </div>
    @yield('content')
    <div class="bg-primary p-3 d-flex justify-content-center">
        &copy; Happy Book Store 2021
    </div>
    <script src="/js/app.js"></script>
</body>

</html>