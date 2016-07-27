@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>
            {{ trans('general/message.whoops') }}
        </strong>
        {{ trans('general/message.input_errors') }}
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
