<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Attributes</th>
      </tr>
      </thead>
      <tbody>
      @forelse($products as $product)
      <tr>
        <td>
            {{ $product->name ?? '' }}
        </td>
        <td>
            {{ $product->price ?? '' }}
        </td>
        <td>
            @foreach ($product->properties as $property)
                <b>{{ $property['key'] }}</b>: {{ $property['value'] }}<br />
            @endforeach
        </td>
      </tr>
      @empty
      <p>No categories found</p>
      @endforelse
    </tbody>

  </table> 
</body>
</html>