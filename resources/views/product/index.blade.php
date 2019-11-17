<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-4 pr-5">
                <div class="mb-5">
                    <h4>Color</h4>
                    <select name="color" id="js--colors" class="form-control">
                        <option value="" selected>All</option>
                        @foreach ($colours as $color)
                            <option value="{{ $color }}">{{ $color }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <h4>Price</h4>
                    <div class="d-flex align-items-center">
                        <span class="mr-2">0</span>
                        <input class="w-100" type="range" min="0" max="{{ $max_price }}" step="{{ $max_price/5 }}" id="js--price">
                        <span class="ml-2">{{ $max_price }}</span>
                    </div>
                    <div class="text-center">
                        <span>0</span>
                        <span>to</span>
                        <span id="js--current-max-price"></span>
                    </div>
                </div>
            </div>
    
            <div class="col-8">
                <table class="table" id="products-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Color</th>
                            <th>Price</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>                            
                                <td>{{ $product->color }}</td>                            
                                <td>{{ $product->price }}</td> 
                            </tr>                           
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>