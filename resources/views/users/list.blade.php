<div>{!! link_to('users/create', 'Create User', array('class' => 'btn btn-raised btn-success')) !!}</div>
<br/>
<br/>
@foreach ($users as $user)
  <div>
    <p>{!! $user->id !!}</p>
    <h1>{{$user->name}}</h1>
    <p>{{$user->email}}</p>
    <div>
      @if(Auth::user()->role == 'reader')
      {!! link_to('users/'.$user->id, 'Show', array('class' => 'btn btn-info')) !!}
      @else
    {!! link_to('users/'.$user->id, 'Show', array('class' => 'btn btn-info')) !!}
    {!! link_to('users/'.$user->id.'/edit', 'Edit', array('class' => 'btn btn-warning')) !!}
    {!! Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete')) !!}
      {!! Form::submit('Delete', array('class' => 'btn btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
    {!! Form::close() !!}
    @endif
    </div>
  </div>
@endforeach
