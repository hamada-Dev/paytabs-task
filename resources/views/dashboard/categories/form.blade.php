<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input required type="text" name="title" class="form-control" id="exampleFormControlInput1"
                placeholder="enter category name">

            @error('title')
                <small class=" text text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>

    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleFormControlInput1">Code</label>
            <input required type="text" name="code" class="form-control" id="exampleFormControlInput1"
                placeholder="enter category name">

                @error('code')
                <small class=" text text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </small>
            @enderror
        </div>
    </div>


</div>

<div class="row selectBoxGroup">
    <div class="col-md-3">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Choose parent</label>
            <select name="category_id" class="form-control formControlSelect1">
                <option value="0">Parent</option>
                @foreach ($extraData as $id => $title)
                    <option value="{{ $id }}">{{ $title }}</option>
                @endforeach
            </select>
        </div>

    </div>
</div>

<div class="btn-group">
    <button type="submit" class="btn btn-success">Add</button>
</div>

@push('script')
    <script>
        function removeAttrNameFromSelect() {
            $('body #categoryForm .formControlSelect1').attr('name', '');
        }

        $('body').on('change', '#categoryForm select', function() {

            var thisSelect = $(this),
                id = thisSelect.val(),
                val = $.trim(thisSelect.children("option:selected").text()),
                selectOption = '';
            $.ajax({
                url: '{{ route('dashboard.category.child') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                },
                success: function(data) {
                    removeAttrNameFromSelect();
                    thisSelect.parents('.col-md-3').nextAll('div').remove();
                    console.log(data);
                    var blockElement = `
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select name="category_id" class="form-control formControlSelect1" >
                                        <option value="${ id }">${ val }</option>
                                        `;
                    for (var key in data) {
                        blockElement += `<option value="${ key }">${data[key]}</option>`;
                    }

                    blockElement += ` </select>
                                </div>
                            </div>`;


                    $('.selectBoxGroup').append(blockElement);

                }
            });
        });
    </script>
@endpush
