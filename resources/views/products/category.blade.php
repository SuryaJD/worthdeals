@extends('layouts.product')

@section('page-area')
    <div class="container pt-4">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-3">
                <livewire:sections.productblock :product="$product"/>
            </div>
            @endforeach
        </div>
    </div>
@endsection 