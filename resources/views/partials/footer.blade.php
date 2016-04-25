<footer >
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-4" align="center">
                <h3><span class="glyphicon glyphicon-eject" ></span>
                <a href="" data-slide="prev">Up</a>
                </h3>
            </div>
            <div class="col-sm-4" align="center">
                <h2><span class="glyphicon glyphicon-home"></span>
                    <a href="/articles">Home</a>
                </h2>
            </div>
            <div class="col-sm-4" align="center" >
                <h3>
                    @if (Auth::guest())
                        <span class="glyphicon glyphicon-log-in"></span><a href="{{ url('/login') }}"> Login</a>
                    @else
                        <span class="glyphicon glyphicon-log-out"></span><a href="{{ url('/logout') }}"> Logout</a>
                    @endif
                </h3>
            </div>

            </div>
        </div>
    </div>

</footer>