@extends('layouts.app')
@section('title', 'Customer Accounts')
@section('heading', 'Customer Accounts')
@section('content')
<div class="page-intro compact"><p class="eyebrow accent">CUSTOMER DIRECTORY</p><h1>Customer <span>Accounts</span></h1><p class="intro">A quick look at the people connected to your business.</p></div>
<div class="table-panel"><div class="table-toolbar"><div><h2>All customers</h2><p>Sample records · Temporary static PHP array</p></div><span class="count-pill">{{ count($customers) }} RECORDS</span></div><div class="table-wrap"><table><thead><tr><th>CUSTOMER</th><th>ACCOUNT ID</th><th>PHONE</th><th>STATUS</th></tr></thead><tbody>
@forelse ($customers as $customer)
<tr><td><div class="person-cell"><span class="table-avatar">{{ strtoupper(substr($customer['name'], 0, 1)) }}</span><span><strong>{{ $customer['name'] }}</strong><small>{{ $customer['email'] }}</small></span></div></td><td class="muted-cell">{{ $customer['id'] }}</td><td>{{ $customer['phone'] }}</td><td><span class="status-badge {{ strtolower($customer['status']) }}"><i></i>{{ $customer['status'] }}</span></td></tr>
@endforeach
</tbody></table></div><div class="table-foot">Showing {{ count($customers) }} sample customer accounts</div></div>
@endsection
