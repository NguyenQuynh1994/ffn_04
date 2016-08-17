<div class="form-group">
    {{ Form::label('title', trans('news.post_title')) }}
    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder'=>'Title']) }}

    <div class="col-md-6">
        {{ Form::label('category_id', trans('news.choose_category')) }}
        {{ Form::select('category_id', $catsList, null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('league_id', trans('news.choose_league')) }}
        {{ Form::select('league_id', $leaguesList, null, ['class' => 'form-control']) }}
    </div>

    {{ Form::label('content', trans('news.content')) }}
    {{ Form::textarea('content', isset($post) ? $post->content : null, ['class' => 'summernote form-control', 'id' => 'summernote']) }}

    <div class="form-group col-md-6">
        {{ Form::label('image', trans('news.choose_image')) }}
        {{ Form::file('image', null) }}
    </div>

    <div class="form-group col-md-6" id="publish">
        {{ Form::label('published_at', trans('label.published_at')) }}
        {{ Form::date('published_at') }}
    </div>

    <div class="form-group col-md-6" id="post">
        {{ Form::label('is_post', trans('label.is_post')) }}
        {!! Form::select('is_post', $optionPost, old('is_post'), ['class' => 'form-control']) !!}
    </div>

    {{ Form::hidden('user_id', Auth::user()->id) }}

    <br>
    <div class="form-group col-md-6">
        {{ Form::button($buttonText, ['type' => 'submit', 'class' => 'btn btn-primary btn-sm']) }}
    </div>

</div>
