<x-layout>

    <h1 class="mb-4">Update product - {{$product->title}}</h1>
    <form action="/products/{{$product->id}}" method="POST">
        @csrf
        @method('PATCH')

        @if ($message = \Illuminate\Support\Facades\Session::get('error'))
            <div class="alert alert-danger alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" name="title" class="form-control"  value="{{$product->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" value="{{$product->quantity}}">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword2">Price</label>
            <input type="text" name="price" class="form-control" id="exampleInputPassword2" value="{{$product->price}}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</x-layout>
