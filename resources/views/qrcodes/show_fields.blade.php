

<div class="col-md-6">

    <!-- Product Name Field -->
    <div class="col-sm-12">

        <h3>
            {{ $qrcode->product_name }}
        <br/>
            @if(isset($qrcode->company_name))
                <small>By {!! $qrcode->company_name !!}</small>
            @endif


        </h3>
    </div>

    <!-- Amount Field -->
    <div class="col-sm-12">

        <h4>Amount: $ {{ $qrcode->amount }}</h4>
    </div>

    <!-- Prodcut Url Field -->
    <div class="col-sm-12">
        {!! Form::label('prodcut_url', 'Prodcut Url:') !!}
        <p>
            <a href="{!! $qrcode->prodcut_url !!}" target="_blank">
            {{ $qrcode->prodcut_url }}
            </a>
        </p>
    </div>

    @if($qrcode->user_id == Auth::user()->id || Auth::user()->role_id <3)
   <hr/>
    <!-- User Id Field -->
    <div class="col-sm-12">
        {!! Form::label('user_id', 'User Name:') !!}
        <p>{{ $qrcode->user_id }}</p>
    </div>

    <!-- Website Field -->
    <div class="col-sm-12">
        {!! Form::label('website', 'Website:') !!}
        <p>{{ $qrcode->website }}</p>
    </div>



    <!-- Callback Url Field -->
    <div class="col-sm-12">
        {!! Form::label('callback_url', 'Callback Url:') !!}
        <p>{{ $qrcode->callback_url }}</p>
    </div>




    <!-- Status Field -->
    <div class="col-sm-12">
        {!! Form::label('status', 'Status:') !!}
        <p>
            @if($qrcode->status == 1)
                Active
            @else
                Inactive
            @endif

        </p>
    </div>

    <!-- Create At Field -->
    <div class="col-sm-12">
        {!! Form::label('created_at', 'Created At:') !!}
        <p>{{ $qrcode->created_at }}</p>
    </div>

    <!-- Status Field -->
    <div class="col-sm-12">
        {!! Form::label('updated_at', 'Updated At:') !!}
        <p>{{ $qrcode->updated_at }}</p>
    </div>

</div>
@endif

<div class="col-md-5 float-right">
    <!-- Qrcode Path Field -->
    <div class="col-sm-12">
        {!! Form::label('qrcode_path', 'Scan Qrcode and Pay With Our App:') !!}
        <p></p>
        <img src="{{asset($qrcode->qrcode_path)}}" alt="">
    </div>
</div>

@if($qrcode->user_id == Auth::user()->id || Auth::user()->role_id <3)

<div class="col-xs-12">
    <h3 class="text-center text-info">Transactions done on this Qrcode</h3>

</div>

@include('transactions.table')


@endif
