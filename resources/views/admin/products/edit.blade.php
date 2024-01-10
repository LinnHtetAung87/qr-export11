<x-admin>
    @section('title')
        {{ 'Edit Product' }}
    @endsection
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Product</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.product.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>
                    <form class="needs-validation" novalidate action="{{ route('admin.product.update',$data) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <input type="hidden" name="uuid" value="{{ $data->uuid }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="name" value="{{ $data->name }}"
                                            class="form-control" required>
                                        @error('name')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" name="price" id="price" value="{{ $data->price }}"
                                            class="form-control" required>
                                        @error('price')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="submit" class="btn btn-primary float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@section('css')
    <style>

    </style>
@endsection
    @section('js')
        <script>

        </script>
    @endsection
</x-admin>
