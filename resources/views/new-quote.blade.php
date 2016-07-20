@extends('master')
@section('body')
{!! Form::open(['url'=>'/quote']) !!}
    <legend>New Quote</legend>
    
    <div class="form-group">
        {!! Form::label('author', 'Author') !!}
        {!! Form::text('author', null, ['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('type', 'Tipe') !!}
        {!! Form::select('type', ['inspiration' => 'Inspirasi', 'motivation' => 'Motivasi'],null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('quote', 'Quote') !!}
        {!! Form::textarea('quote', null, ['class'=>'form-control']) !!}
    </div>
    
    {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}
@stop