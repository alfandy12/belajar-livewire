<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
         @livewireStyles
    </head>
   <body>
       <br>
       <br>
       <br>
       @foreach ($products as $product)
         <ul>
             <li>{{$product->name}}</li>
         </ul>
       @endforeach
    {{--    {{$products->links()}} --}}
       <br>
       <br>
       <h3 class="text-center">INI DATA DARI LIVEWIRE</h3>
        @livewire('product.product', ['data' => $data])

        @livewireScripts
    </body>
</html>
