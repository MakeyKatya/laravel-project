@extends('app')

@section('content')
    <div class="row" >
    <div class="col-sm-10">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>Бешикташ интересуется Вермаленом</h4>
                    <a href="/articles/23"><img src="images/23.jpg" alt="Chania" width="1000" height="700"></a>
                </div>

                <div class="item">
                    <h4>Маротта: Берарди? Мы доверям Сассуоло</h4>
                    <a href="/articles/24"><img src="images/24.jpg" alt="Chania" width="1000" height="700"></a>
                </div>

                <div class="item">
                    <h4>FA решила не наказывать Билича и Кэрролла</h4>
                    <a href="/articles/25"><img src="images/25.jpg" alt="Flower" width="1000" height="700"></a>
                </div>

                <div class="item">
                    <h4>На западе Украины завтра ожидаются снег и заморозки</h4>
                    <a href="/articles/26"><img src="images/26.jpg" alt="Flower" width="1000" height="700"></a>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" ></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" ></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
@endsection
