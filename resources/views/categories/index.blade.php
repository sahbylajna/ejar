@extends('layouts.app')
@section('css')
<style type="text/css">
 

.conatiner {
    width: 100%;
    height: 500px;
}
.wrap {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
}

.box {
    margin: 10px;
    width: 300px;
 
    text-align: center;
    border-radius: 3px;
    -webkit-transition: 200ms ease-in-out;
    -o-transition: 200ms ease-in-out;
    transition: 200ms ease-in-out;
    -webkit-box-shadow: 0 0 15px rgba(0,0,0,0.3);
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
}
.box:hover {
    margin-bottom: -10px;
    -webkit-box-shadow: 0 0 5px rgba(0,0,0,0.7);
            box-shadow: 0 0 5px rgba(0,0,0,0.7);
}
.box h1 {
    color: #fff;
    padding: 30px;
    margin-top: 100px;
    text-align: center;
    font-weight: 100;
    font-size: 25px;
    background: rgba(0,0,0,0.8);
    -webkit-box-shadow: 0 0 30px rgba(0,0,0,0.7);
            box-shadow: 0 0 30px rgba(0,0,0,0.8);
}

.date h4 {
    color: #fff;
    font-weight: 300;
    text-align: center;
    letter-spacing: 3px;
    text-shadow: 0 0 3px rgba(0,0,0,0.9);
}
.poster {
    width: 130px;
    height:130px;
    margin: 120px auto;
    position: relative;
    border-radius: 100px;
}
.poster h4 {
    top: 16px;
    color: #fff;
    position: relative;
    font-size: 80px;
    text-align: center;
    font-weight: 100;
}
.one {
    background: url('https://source.unsplash.com/900x920');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.two {
    background: url('https://source.unsplash.com/820x900');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.three {
    background: url('https://source.unsplash.com/500x500');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.five {
    background: url('https://source.unsplash.com/550x520');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.six {
    background: url('https://source.unsplash.com/660x630');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.seven {
    background: url('https://source.unsplash.com/700x770');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.eight {
    background: url('https://source.unsplash.com/880x820');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.nine {
    background: url('https://source.unsplash.com/898x820');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.ten {
    background: url('https://source.unsplash.com/8998x920');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.eleven {
    background: url('https://source.unsplash.com/898x960');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.tlv {
    background: url('https://source.unsplash.com/999x888');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.thirteen {
    background: url('https://source.unsplash.com/1000x777');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.ftn {
    background: url('https://source.unsplash.com/2000x777');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.fith {
    background: url('https://source.unsplash.com/2000x1000');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.sith {
    background: url('https://source.unsplash.com/3000x1000');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.sevth {
    background: url('https://source.unsplash.com/9000x9000');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

/* POSTER*/
.p1 {
    background: #2b5876;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #4e4376, #2b5876);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#4e4376), to(#2b5876));
    background: -webkit-linear-gradient(left, #4e4376, #2b5876);
    background: -o-linear-gradient(left, #4e4376, #2b5876);
    background: linear-gradient(to right, #4e4376, #2b5876); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px darkblue;
            box-shadow: 0 0 20px darkblue;
}

.p2 {
    background: #f857a6;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #ff5858, #f857a6);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#ff5858), to(#f857a6));
    background: -webkit-linear-gradient(left, #ff5858, #f857a6);
    background: -o-linear-gradient(left, #ff5858, #f857a6);
    background: linear-gradient(to right, #ff5858, #f857a6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px #fa3380;
            box-shadow: 0 0 20px #fa3380;
}

.p3 {
    background: #4776E6;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #8E54E9, #4776E6);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#8E54E9), to(#4776E6));
    background: -webkit-linear-gradient(left, #8E54E9, #4776E6);
    background: -o-linear-gradient(left, #8E54E9, #4776E6);
    background: linear-gradient(to right, #8E54E9, #4776E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px lightblue;
            box-shadow: 0 0 20px lightblue;
}

.p4 {
    background: #1FA2FF;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#A6FFCB), color-stop(#12D8FA), to(#1FA2FF));
    background: -webkit-linear-gradient(left, #A6FFCB, #12D8FA, #1FA2FF);
    background: -o-linear-gradient(left, #A6FFCB, #12D8FA, #1FA2FF);
    background: linear-gradient(to right, #A6FFCB, #12D8FA, #1FA2FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px skyblue;
            box-shadow: 0 0 20px skyblue;
}


.p5 {
    background: #AA076B;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #61045F, #AA076B);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#61045F), to(#AA076B));
    background: -webkit-linear-gradient(left, #61045F, #AA076B);
    background: -o-linear-gradient(left, #61045F, #AA076B);
    background: linear-gradient(to right, #61045F, #AA076B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px purple;
            box-shadow: 0 0 20px purple;
}

.p6 {
    background: #DA22FF;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #9733EE, #DA22FF);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#9733EE), to(#DA22FF));
    background: -webkit-linear-gradient(left, #9733EE, #DA22FF);
    background: -o-linear-gradient(left, #9733EE, #DA22FF);
    background: linear-gradient(to right, #9733EE, #DA22FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px violet;
            box-shadow: 0 0 20px violet;
}

.p7 {
    background: #02AAB0;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #00CDAC, #02AAB0);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#00CDAC), to(#02AAB0));
    background: -webkit-linear-gradient(left, #00CDAC, #02AAB0);
    background: -o-linear-gradient(left, #00CDAC, #02AAB0);
    background: linear-gradient(to right, #00CDAC, #02AAB0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px lightgreen;
            box-shadow: 0 0 20px lightgreen;
}
.p8 {
    background: #5433FF;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #A5FECB, #20BDFF, #5433FF);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#A5FECB), color-stop(#20BDFF), to(#5433FF));
    background: -webkit-linear-gradient(left, #A5FECB, #20BDFF, #5433FF);
    background: -o-linear-gradient(left, #A5FECB, #20BDFF, #5433FF);
    background: linear-gradient(to right, #A5FECB, #20BDFF, #5433FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px lightblue;
            box-shadow: 0 0 20px lightblue;
}
.p9 {
    background: #2b5876;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #fa3, #fa3380);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#fa3), to(#fa3380));
    background: -webkit-linear-gradient(left, #fa3, #fa3380);
    background: -o-linear-gradient(left, #fa3, #fa3380);
    background: linear-gradient(to right, #fa3, #fa3380); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px #fa3380;
            box-shadow: 0 0 20px #fa3380;
}

.p10 {
    background: #2b5876;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, deepskyblue, lightblue);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(deepskyblue), to(lightblue));
    background: -webkit-linear-gradient(left, deepskyblue, lightblue);
    background: -o-linear-gradient(left, deepskyblue, lightblue);
    background: linear-gradient(to right, deepskyblue, lightblue); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px darkblue;
            box-shadow: 0 0 20px darkblue;
}

.p11 {
    background: #F2994A;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #F2C94C, #F2994A);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#F2C94C), to(#F2994A));
    background: -webkit-linear-gradient(left, #F2C94C, #F2994A);
    background: -o-linear-gradient(left, #F2C94C, #F2994A);
    background: linear-gradient(to right, #F2C94C, #F2994A); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px lightyellow;
            box-shadow: 0 0 20px lightyellow;
}

.p12 {
    background: #A770EF;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#FDB99B), color-stop(#CF8BF3), to(#A770EF));
    background: -webkit-linear-gradient(left, #FDB99B, #CF8BF3, #A770EF);
    background: -o-linear-gradient(left, #FDB99B, #CF8BF3, #A770EF);
    background: linear-gradient(to right, #FDB99B, #CF8BF3, #A770EF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px purple;
            box-shadow: 0 0 20px purple;
}

.p13 {
    background: #f4c4f3;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #fc67fa, #f4c4f3);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#fc67fa), to(#f4c4f3));
    background: -webkit-linear-gradient(left, #fc67fa, #f4c4f3);
    background: -o-linear-gradient(left, #fc67fa, #f4c4f3);
    background: linear-gradient(to right, #fc67fa, #f4c4f3); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px pink;
            box-shadow: 0 0 20px pink;
}
.p14 {
    background: #00c3ff;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #ffff1c, #00c3ff);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#ffff1c), to(#00c3ff));
    background: -webkit-linear-gradient(left, #ffff1c, #00c3ff);
    background: -o-linear-gradient(left, #ffff1c, #00c3ff);
    background: linear-gradient(to right, #ffff1c, #00c3ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px olive;
            box-shadow: 0 0 20px olive;
}
.p15 {
    background: #5614B0;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #DBD65C, #5614B0);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#DBD65C), to(#5614B0));
    background: -webkit-linear-gradient(left, #DBD65C, #5614B0);
    background: -o-linear-gradient(left, #DBD65C, #5614B0);
    background: linear-gradient(to right, #DBD65C, #5614B0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px olive;
            box-shadow: 0 0 20px olive;
}

.p16 {
    background: #fc00ff;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #00dbde, #fc00ff);  /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-gradient(linear, left top, right top, from(#00dbde), to(#fc00ff));
    background: -webkit-linear-gradient(left, #00dbde, #fc00ff);
    background: -o-linear-gradient(left, #00dbde, #fc00ff);
    background: linear-gradient(to right, #00dbde, #fc00ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    -webkit-box-shadow: 0 0 20px olive;
            box-shadow: 0 0 20px olive;
}


/*  FOLLOW*/
.Follow {     background:url("https://pbs.twimg.com/profile_images/959092900708544512/v4Db9QRv_bigger.jpg")no-repeat center / contain;
    width: 50px;
    height: 50px;
    bottom: 9px;
    right: 20px;
    display:block;
    position:fixed;
    border-radius:50%;
    z-index:999;
    animation:  rotation 10s infinite linear;
    }

@-webkit-keyframes rotation {
        from {
                -webkit-transform: rotate(0deg);
        }
        to {
                -webkit-transform: rotate(359deg);
        }
}

</style>
@endsection
@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ trans('categories.model_plural') }}</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('categories.category.create') }}" class="btn btn-success" title="{{ trans('categories.create') }}">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($categories) == 0)
            <div class="panel-body text-center">
                <h4>{{ trans('categories.none_available') }}</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <div class="wrap">
                      @foreach($categories as $category)
                        <div class="box " style="background: url('{{ asset('/ejar/public/images/'.$category->photo)}}');background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
        <div class="date">
            <h4>{{ $category->name }} </h4>
        </div>
        <h1><a href="{{ route('categories.category.edit', $category->id ) }}" style="color: #fff;">{{ $category->name_ar }}</a></h1>
        
    
    </div>
               @endforeach
</div>

               <!--  <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>{{ trans('categories.name') }}</th>
                            <th>{{ trans('categories.name_ar') }}</th>
                            <th>{{ trans('categories.photo') }}</th>


                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->name_ar }}</td>
                            <td><img src="{{ asset('/ejar/public/images/' . $category->photo) }}" style="width: 100px;height: 100px;border-radius:50%;"></td>

                            <td>

                                <form method="POST" action="{!! route('categories.category.destroy', $category->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('categories.category.show', $category->id ) }}" class="btn btn-info" title="{{ trans('categories.show') }}">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('categories.category.edit', $category->id ) }}" class="btn btn-primary" title="{{ trans('categories.edit') }}">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="{{ trans('categories.delete') }}" onclick="return confirm(&quot;{{ trans('categories.confirm_delete') }}&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table> -->

            </div>
        </div>

        <div class="panel-footer">
            {!! $categories->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection