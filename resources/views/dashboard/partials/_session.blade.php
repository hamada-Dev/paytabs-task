
<div class="row">
    <div class="col-md-12">

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @elseif( session('error') )
        <div class="alert alert-danger">
            {{ session('error') }}
        @endif
    </div>
</div>
