@extends('master')

@section('title', 'HOME - Furnid')

@section('content')
    <style>
        .space-content {
            margin-top:50px;
        }
        #subtitle {
            text-shadow:2px 2px #272b2e !important;
            font-family:Poppins Bold !important;
            color:whitesmoke !important;
            font-size: 20;
        }
        .home-tagline{
            margin-top: 30;
            margin-bottom: 30;
            display: flex;
            flex-direction: row;
            justify-content: center;
            background: rgb(60,60,60);
            background: linear-gradient(120deg, rgba(60,60,60,1) 0%, rgba(25,30,33,1) 47%, rgba(59,58,58,1) 100%);
        }
    
        .home-tagline img {
            width:200px;
            height: auto;
        }

        .home-tagline div {
            color: #e3888a;
            font-size: 40px;
            padding-top: 65;
            text-shadow:1px 1px 4px rgba(255, 255, 255, 0.63);
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .product-wrapper {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin: 10px;
        }

        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            width: 300px;
            text-align: center;
            background-color: #fff; /* Adjust background color as needed */
        }

        .product-image {
            max-width: 100%;
            height: auto;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .product-details {
            font-size: 16px;
        }
    </style>

    <div>
        <div class="space-content">
            <!-- content-1 -->
            <div class="home-tagline">
                    <img src="img\logo_furnid\logo.png">
                    <div class="subtitle text-center"> <b>
                        Your Furniture Accompanion</b>
                     </div>
            </div>
            <!-- content-2  -->
            <div class="py-4 x-0"> 
                <a href="product"> 
                    <img src="img\1.png" class="slides-img">
                 </a>
            </div>
    </div>

    <div class="product-container">
        @foreach ($products as $product)
            <div class="product-wrapper">
                <div class="product-card">
                    <img src="{{ $product->image_path }}" alt="{{ $product->product_name }}" class="product-image">
                    <div class="product-details">
                        <h3>{{ $product->product_name }}</h3>
                        <p><strong>Price:</strong> ${{ $product->price }}</p>
                        <p><strong>Stock:</strong> {{ $product->stock }}</p>
                        <p><strong>Series:</strong> {{ $product->series }}</p>
                        <p><strong>Detail:</strong> {{ $product->detail }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection