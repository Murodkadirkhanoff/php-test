<x-layout>

    <a href="/products/create">Add product</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Total price with VAT</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <th >{{$product->title}}</th>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{ $product->calculate() }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="Post">
                        <a href="/products/{{$product->id}}/edit" class="btn btn-success">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
