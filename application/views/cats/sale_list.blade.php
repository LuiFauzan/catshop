@extends('layouts.index')
@section('container')
    

    <h3 class="text-light">SALES LIST</h3>
    <table class="table table-striped table-hover table-primary">
        <tr>
            <th>No</th>
            <th>Sale ID</th>
            <th>Sale date</th>
            <th>Cat ID</th>
            <th>Cat Name</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer Phone</th>
            <th>Price($)</th>
        </tr>
        <?php $i=1; foreach($sales as $sale){?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$sale->sale_id_082?></td>
            <td><?=$sale->sale_date_082?></td>
            <td><?=$sale->cat_id_082?></td>
            <td><?=$sale->name_082?></td>
            <td><?=$sale->customer_name_082?></td>
            <td><?=$sale->customer_address_082?></td>
            <td><?=$sale->customer_phone_082?></td>
            <td>$<?=$sale->price_082?></td>
           
        </tr>
        <?php } ?>
    </table>
    <a href="<?=site_url('home')?>"class="btn btn-secondary"><i class="bi bi-house"></i>Back</a>
@endsection