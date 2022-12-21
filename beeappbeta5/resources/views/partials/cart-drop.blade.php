<link  href="{{asset('css/carro.css')}}" rel="stylesheet">


<div class="card-drop">
@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-3">
                    <img src="/img/{{ $item->attributes->image }}"
                         style="width: 50px; height: 50px;"
                    >
                </div>
                <div class="col-lg-6">
                    <b>{{$item->name}}</b>
                    <br><small>cantidad: {{$item->quantity}}</small>
                </div>
                <div class="col-lg-3">
                    <p>${{ \Cart::get($item->id)->getPriceSum() }}</p>
                </div>
                <hr>
            </div>
        </li>
    @endforeach
    <br>
    <li class="list-group-item">
        <div class="">
            <div class="col-lg-10">
             
                <form action="{{ route('cart.clear') }}" method="POST">
                    <b class="total">Total:</b><b> ${{ \Cart::getTotal()}}</b>
                    {{ csrf_field() }}
                    <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </div>
           
        </div>
    </li>
    <br>
    <div class="row" style="margin: 0px;">
        
        <a class="btn btn-dark btn-sm btn-block" href=""  style="background-color: #222831">
            CONFIRMAR LA COMPRA <i class="fa fa-arrow-right" ></i>
        </a>
        <a class="btn  btn-dark btn-block" href="/.#productos" id="about" style="background-color: orange;">
            CONTINUE EN LA TIENDA <i class="fa fa-arrow-right"></i>
        </a><br>
        
        <a id="ircarrito" href="cart" id="about" style="background-color: rgb(255, 255, 255);">
            IR AL CARRITO <i class="fa fa-arrow-right"></i>
        </a>
    </div>
@else
    <li class="list-group-item">Tu carrito esta vacío</li>
@endif
</div>      