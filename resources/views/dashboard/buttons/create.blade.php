<div class="row">
    <div class="col-md-12">
        <div class="card" >
            <div class="card-body">
              <h5 class="card-title">All {{ $module_name_plural }} ( {{  $rows->total() }})</h5>
              <a href="{{route('dashboard.'.$module_name_plural.'.create')}}" class="btn btn-primary">Create {{ $module_name_singular }}</a>
            </div>
          </div>
    </div>
</div>
