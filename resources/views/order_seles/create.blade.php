@extends('layouts.app')

@section('content')

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-right">
                <h4 class="mt-5 mb-5">{{ trans('order_seles.create') }}</h4>
            </span>

            <div class="btn-group btn-group-sm pull-left" role="group">
                <a href="{{ route('order_seles.order_sele.index') }}" class="btn btn-primary" title="{{ trans('order_seles.show_all') }}">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>
            </div>

        </div>

        <div class="panel-body">
        
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('order_seles.order_sele.store') }}" accept-charset="UTF-8" id="create_order_sele_form" name="create_order_sele_form" class="form-horizontal">
            {{ csrf_field() }}
            @include ('order_seles.form', [
                                        'orderSele' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary pull-left" type="submit" value="{{ trans('order_seles.add') }}">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection



@section('js')
<script >

$(document).ready(function() {

    $('#Produit').change(function(){

        $.get("{{ url('getproduit')}}",
        { option: $(this).val() },
        function(data) {
            $('#price').empty();
            $('#price').val(data.price);
            if(data.cautionnement =='on'){
                $('#cautionnement').empty();
                $('#cautionnement').val(data.price_cautionnement);
                if(data.price_cautionnement ==null){
                    cautionnement = parseInt('0');
            }else{
                cautionnement = parseInt(data.price_cautionnement);
            }
            }else{
                cautionnement = parseInt('0');
            }

    $('#total').empty();
            price = parseInt($('#price').val());
            var total = price  + cautionnement;
            $('#total').val(parseInt(total));



        });


    });

    $('#cautionnement').change(function(){



    $('#total').empty();
            price = parseInt($('#price').val());
            cautionnement = parseInt($('#cautionnement').val());
            var total = price  + cautionnement;
            $('#total').val(parseInt(total));
});


$('#price').change(function(){
   
    $('#total').empty();
            price = parseInt($('#price').val());
            cautionnement = parseInt($('#cautionnement').val());
           var total = price  + cautionnement;
            $('#total').val(parseInt(total));
    console.log(price);

});




});
</script>


@endsection