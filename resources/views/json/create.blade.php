<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <form action="{{ route("product.create") }}" method="POST">
      @csrf
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control form-control-sm">
      </div>
      <div class="form-group">
          <label for="price">Price*</label>
          <input type="number" name="price" class="form-control form-control-sm" step="0.01">
      </div>
      <div class="form-group">
          <label for="properties">Properties</label>
          <div class="row">
              <div class="col-md-2">
                  Key:
              </div>
              <div class="col-md-4">
                  Value:
              </div>
          </div>
          @for ($i=0; $i <= 4; $i++)
          <div class="row">
              <div class="col-md-2" style="margin-bottom: 2px;">
                  <input type="text" name="properties[{{ $i }}][key]" class="form-control form-control-sm" value="{{ old('properties['.$i.'][key]') }}">
              </div>
              <div class="col-md-4">
                  <input type="text" name="properties[{{ $i }}][value]" class="form-control form-control-sm" value="{{ old('properties['.$i.'][value]') }}">
              </div>
          </div>
          @endfor
      </div>
      <div>
          <input class=" btn btn-danger btn-sm" type="submit">
      </div>
  </form> 
</body>
</html>