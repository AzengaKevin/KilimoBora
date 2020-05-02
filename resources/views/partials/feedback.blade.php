@if(session()->has('success_message'))
    <div class="alert alert-success">{{ session('success_message') }}</div>
@endif