@extends('master')

@section('title', 'Product - Furnid')

@section('content')
    <style>
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
    </div>
@endsection
