<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movie App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap");

            * {
                box-sizing: border-box;
            }

            body {
                background-color: #19181E;
                font-family: "Poppins", sans-serif;
                margin: 0;
            }

            header {
                background-color: #101115;
                display: flex;
                justify-content: flex-end;
                padding: 1rem;
            }

            .search {
                background-color: transparent;
                border: 2px solid #22254b;
                border-radius: 50px;
                color: #fff;
                font-family: inherit;
                font-size: 1rem;
                padding: 0.5rem 1rem;
            }

            .search::placeholder {
                color: #7378c5;
            }

            .search:focus {
                background-color: #22254b;
                outline: none;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            .movieSection {
                color: #fff;
                font-family: inherit;
                font-size: 2rem;
                margin: 3rem;

            }
            .movie {
                background-color: #373b69;
                border-radius: 3px;
                box-shadow: 0 4px 5px rgba(0, 0, 0, 0.2);
                overflow: hidden;
                position: relative;
                margin: 1rem;
                width: 300px;
            }

            .movie img {
                width: 100%;
            }

            .movie-info {
                color: #eee;
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0.5rem 1rem 1rem;
                letter-spacing: 0.5px;
            }

            .movie-info h3 {
                margin: 0;
            }

            .movie-info span {
                background-color: #22254b;
                border-radius: 3px;
                font-weight: bold;
                padding: 0.25rem 0.5rem;
            }
            .movie-info span.green {
                color: rgb(39, 189, 39);
            }

            .movie-info span.orange {
                color: orange;
            }

            .movie-info span.red {
                color: rgb(189, 42, 42);
            }

            .overview {
                background-color: #fff;
                padding: 2rem;
                position: absolute;
                max-height: 100%;
                overflow: auto;
                left: 0;
                bottom: 0;
                right: 0;
                transform: translateY(101%);
                transition: transform 0.3s ease-in;
            }

            .overview h3 {
                margin-top: 0;
            }

            .movie:hover .overview {
                transform: translateY(0);
            }

        </style>
        <link rel="stylesheet" type="text/css" href="{{ asset('../css/app.css') }}">    </head>
    <body>
        <header>
            <form id="form">
                <input
                    type="text"
                    id="search"
                    placeholder="Search"
                    class="search"
                />
            </form>
        </header>

        <div class="movieSection">
            Top-rated movies
        </div>

        <div class="row">
            @foreach($topRated as $item)

                <div class="container products">

                    <div class="movie">

                        <img src="https://image.tmdb.org/t/p/w1280{{$item['poster_path']}}"  alt="{{$item['title']}}"/>
                        <div class="movie-info">
                            <h3>{{$item['title']}}</h3>
                            <span class="getClassByRate({{$item['vote_average']}})">{{$item['vote_average']}}</span>
                        </div>
                        <div class="overview">
                            <h3>Overview:</h3>
                            {{$item['overview']}}
                        </div>

                    </div><!-- End row -->
                </div>

            @endforeach
         </div>


        <div class="movieSection">
            Playing now
        </div>

        <div class="row">
            @foreach($playingNow as $item)

                <div class="container products">

                    <div class="movie">

                        <img src="https://image.tmdb.org/t/p/w1280{{$item['poster_path']}}"  alt="{{$item['title']}}"/>
                        <div class="movie-info">
                            <h3>{{$item['title']}}</h3>
                            <span class="getClassByRate({{$item['vote_average']}})">{{$item['vote_average']}}</span>
                        </div>
                        <div class="overview">
                            <h3>Overview:</h3>
                            {{$item['overview']}}
                        </div>

                    </div><!-- End row -->
                </div>

            @endforeach
         </div>

    </body>

        <script type="text/javascript">

            const search = document.getElementById("search");

            // initially get fav movies

            async function getMovies(url) {
                const resp = await fetch(url);
                const respData = await resp.json();

                console.log(respData);

                showMovies(respData.results);
            }

            function getClassByRate(vote) {
                if (vote >= 8) {
                    return "green";
                } else if (vote >= 5) {
                    return "orange";
                } else {
                    return "red";
                }
            }

            form.addEventListener("submit", (e) => {
                e.preventDefault();

                const searchTerm = search.value;

                if (searchTerm) {
                    getMovies(SEARCHAPI + searchTerm);

                    search.value = "";
                }
            });
        </script>
</html>
