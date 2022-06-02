<form action="{{route('dashboard.'.$module_name_plural.'.destroy', $row)}}" method="POST" >
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button type="submit"
    onclick="return confirm('Are you sure you want to delete this item?');"
    class="btn btn-danger btn-link btn-sm delete">
        <i class="fa fa-1x fa-trash">delete</i>
    </button>
</form>
