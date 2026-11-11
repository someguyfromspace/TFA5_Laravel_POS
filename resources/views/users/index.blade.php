@extends('layouts.app')
@section('title', 'User Accounts')
@section('heading', 'User Accounts')
@section('content')
<div class="page-intro compact"><p class="eyebrow accent">TEAM DIRECTORY</p><h1>User <span>Accounts</span></h1><p class="intro">Review the people who have access to the POS workspace.</p></div>
<div class="table-panel"><div class="table-toolbar"><div><h2>All users</h2><p>Sample records · Temporary static PHP array</p></div><span class="count-pill">{{ count($users) }} RECORDS</span></div><div class="table-wrap"><table><thead><tr><th>USER</th><th>ACCOUNT ID</th><th>ROLE</th><th>STATUS</th></tr></thead><tbody>
@forelse ($users as $user)
<tr><td><div class="person-cell"><span class="table-avatar violet-avatar">{{ strtoupper(substr($user['name'], 0, 1)) }}</span><span><strong>{{ $user['name'] }}</strong><small>{{ $user['email'] }}</small></span></div></td><td class="muted-cell">{{ $user['id'] }}</td><td><span class="role-pill">{{ $user['role'] }}</span></td><td><span class="status-badge {{ strtolower($user['status']) }}"><i></i>{{ $user['status'] }}</span></td></tr>
@endforeach
</tbody></table></div><div class="table-foot">Showing {{ count($users) }} sample user accounts</div></div>
@endsection
