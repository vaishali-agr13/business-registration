    
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
<div style="position: relative; margin-bottom: 20px;">

    <h3 class="mb-4">Business Registrations</h3>
    <a href="/admin/logout" class="logout-btn"
        style="position:absolute; right:0; top:0;">
            ← Log Out
    </a>
</div>

<div class="container-fluid px-4">
    <div class="table-responsive">
<table class="table table-bordered custom-table w-100">

<thead>

<tr>

<th>ID</th>
<th>Email</th>
<th>Personal Phone</th>
<th>Business Type</th>
<th>Action</th>

</tr>

</thead>

<tbody>

@foreach($data as $row)

<tr>

<td>{{$row->id}}</td>
<td>{{$row->email}}</td>
<td>{{$row->personal_phone}}</td>
<td>{{$row->business_type}}</td>

<td>

<a href="/admin/view/{{$row->id}}" class="view-btn">
View
</a>

</td>

</tr>

@endforeach

</tbody>

</table>
</div>
</div>

<style>
    table {
  width: 100% !important;
}

.page-wrapper {
  width: 100%;
}

section {
  width: 100%;
}
    </style>

