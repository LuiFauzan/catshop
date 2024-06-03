@extends('layouts.index')
@section('container')
<div>
    <h3 class="text-center fw-bolder text-light">CATS LIST</h3>
    {{-- {{ session()->flashdata('msg') }} --}}
    <a href="{{ site_url('cats/add') }}" class="btn btn-outline-light"><i class="bi bi-plus-circle"></i> Add new cat</a>
    <table class="table table-primary table-striped table-hover text-center mt-2">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Type</th>
                <th>Gender</th>
                <th>Age (month)</th>
                <th>Cat Photo</th>
                <th>Price($)</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        @foreach($cats as $cat)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $cat->name_082 }}</td>
            <td>{{ $cat->type_082 }}</td>
            <td>{{ $cat->gender_082 }}</td>
            <td>{{ $cat->age_082 }}</td>
            <td>
                <img src="{{ base_url('/uploads/cats/'.$cat->catphoto_082) }}" width="50">
                <a href="{{ site_url('cats/changephoto/'.$cat->id_082) }}" class="btn btn-dark"><i class="bi bi-arrow-repeat"></i> Change Photo</a>
            </td>
            <td>{{ $cat->price_082 }}</td>
            <td><a href="{{ site_url('cats/edit/'.$cat->id_082) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a></td>
            <td><a href="{{ site_url('cats/delete/'.$cat->id_082) }}" onclick="return confirm('Are you sure???')" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a></td>
            <td>
                @if($cat->sold_082 == 1)
                    <p class="btn btn-outline-secondary fw-bold text-dark disabled">SOLD</p>
                @else
                    <a href="{{ site_url('cats/sale/'.$cat->id_082) }}" class="btn btn-success"><i class="bi bi-currency-dollar"></i> Sale</a>
                @endif
            </td>
        </tr>
        @endforeach
        
    </table>
    <p></p>
    <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center align-items-center">
        <?php echo $pagina; ?>
    </ul>
    </nav>
    <a class="btn btn-secondary" href="{{ site_url('home') }}"><i class="bi bi-house"></i> Back</a>
</div>
@endsection