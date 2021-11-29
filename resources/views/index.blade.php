<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <script src="/js/app.js"></script>
    <title>Climatempo</title>
</head>
<body>
    <header class="header-site">
        <div class="container">
            <nav class="navbar navbar-light" style="width: 80%;">
                <div class="row nav-bar">
                    <div class="col-6 col-sm-4 col-md-4">
                        <a class="navbar-brand" href="#">
                            <img id="logo" src="/images/logo-white.png" alt="ClimaTempo" width="120" height="31">
                        </a>
                    </div>
                    <div class="col-6 col-lg-8 col-md-6 col-sm-8">
                        <form class="d-flex nav-search">
                            <input id="idInput" class="form-control me-2 " type="search" placeholder="Pesquisar" aria-label="Pesquisar"><!--onkeypress="alert('oi');-->
                            <img class="search-img" src="/images/icons/search.png" alt="search" width="2%" height="30">
                        </form>
                        <?php 
                            
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
        <div id="mainContent" class="container">
            <div class="container col-12">
                <h2>Previsao para {{ $array[0]->name }}</h2>
                @for($i = 1; $i < count($array); $i++) 
                    <div id="card" class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $array[$i]->date }}</h5>
                            <p class="card-text">{{ $array[$i]->text }}</p>
                        
                        </div>
                        <div class="card-body cardBody2" style="background-color: #dee2e6; width: 100%;">
                            <div class="row card-row1">
                                <div class="col-6">
                                <span><img src="/images/icons/upload.png" alt="maxima">&nbsp;{{ $array[$i]->temperature_max }}&#176;C</span>
                                </div>
                                <div class="col-6">
                                    <span><img src="/images/icons/download.png" alt="minima">&nbsp;{{$array[$i]->temperature_min}}&#176;C</span>
                                </div>
                            </div>
                            <div class="row card-row2">
                                <div class="col-6">
                                    <span><img src="/images/icons/raindrop-close-up.png" alt="umidade">&nbsp;{{$array[$i]->rain_precipitation}}&#176;C</span>
                                </div>
                                <div class="col-6">
                                    <span><img src="/images/icons/umbrella.png" alt="chuva">&nbsp;{{$array[$i]->rain_probability}}&#176;C</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
                
            </div>
        </div>
    <script>
        let input = document.getElementById("idInput");
        console.log(input);
        input.addEventListener("keydown", (e) => {
        
            if (e.keyCode === 13) {
                let url = 'http://localhost:8001/weather/' + input.value;
                let dados = <?php echo json_encode($array); ?>;
                
                location.href = url;

                if (dados != undefined) {
                    e.preventDefault();
                // alert(input.value);
                    document.getElementById("mainContent").style.display="block";    
                    console.log(dados); 
                } else {
                    alert("Algum erro ocorreu.");
                }
                
            }

        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>