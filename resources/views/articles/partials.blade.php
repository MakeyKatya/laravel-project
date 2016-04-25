<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('published_at', 'Publish On:') !!}
            {!! Form::input('date', 'published_at', $article->published_at->format('Y-m-d'), ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('tags', 'Tags') !!}
            {!! Form::select('tags[]', $tags, null, ['id'=>'tags','class' => 'form-control','multiple']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit($submitButtonText ,['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
</div>

@section('footer')
    <script>
    $('#tags').select2({
        placeholder:'Choose a tag',
        tags: true
    });
    </script>
@endsection