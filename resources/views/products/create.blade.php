<x-layout>

    <h1 class="mb-4">Add product</h1>
    <form action="/products" method="POST">
        @csrf

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
            <input type="text" name="title" class="form-control"  placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Quantity</label>
            <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="quantity">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword2">Price</label>
            <input type="text" name="price" class="form-control" id="exampleInputPassword2" placeholder="price">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save</button>
    </form>
</x-layout>
