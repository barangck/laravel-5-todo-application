@extends('app')
 
@section('content')
    <h2>Projects</h2>
 
    @if ( !$projects->count() )
        You have no projects
    @else
       <!--  <ul class="list-group">
            @foreach( $projects as $project )
                <li class="list-group-item">
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                        <a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a>
                        {!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul> -->
    <div class="table-responsive">          
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th class="col-md-10 proname">Project Name</th>
                <th class="col-md-2 promodi">Modify</th>
              </tr>
            </thead>
            <tbody>
             @foreach( $projects as $project )
                {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                <tr>
                <td><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></td>
                <td class="promodi">{!! link_to_route('projects.edit', 'Edit', array($project->slug), array('class' => 'btn btn-info')) !!} {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}</td>
              </tr>
              {!! Form::close() !!}
             @endforeach
            </tbody>
        </table>
    </div>
    @endif
 
    <p>
        {!! link_to_route('projects.create', 'Create Project') !!}
    </p>
@endsection
 
