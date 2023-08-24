@props(['name' => '', 'date' => ''])
<div class="card m-1">
    <div class="card-body">
        <h5 class="card-title">{{ $name }}</h5>
        {{ $slot }}
    </div>
    <div class="card-footer">
        <small class="text-muted">{{ $date }}</small>
    </div>
</div>
