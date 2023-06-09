@extends('layouts.admin')
@section('content')
<div class="py-3">
    <form action="{{ url('products/update/'.$product->id) }}" method="POST">
        @csrf
        @method('PATCH')
    <div class="mb-3">
        <label for="nameFormControlInput" class="form-label">اسم المنتج</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" >
      </div>
      <div class="mb-3">
        <label for="quantityFormControlInput" class="form-label">كمية المنتج</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
      </div>
      <div class="mb-3">
        <label for="priceFormControlInput" class="form-label">سعر المنتج</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}">
      </div>

      <div class="mb-3">
        <label for="descriptionFormControlTextarea1" class="form-label">وصف المنتج</label>
        <textarea  class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
      </div>
      <div class="mb-3">
        <label for="categoryFormControlTextarea1" class="form-label"> اختر الصنف</label>

        <select class="form-control" name="category_id" id="category">
            <option value="{{ $category_name->id }}">{{ $category_name->name }}</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

        </select>
      </div>
      <div class="mb-3">
        <input type="submit" value="احفظ" class="btn btn-info">

      </div>
    </div>
</form>
@endsection
