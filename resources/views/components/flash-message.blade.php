@if (session()->has('message'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif
