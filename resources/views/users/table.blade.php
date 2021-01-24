<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>Name</th>

                <th>Email</th>
                <th>User Level</th>
                @if(Auth::user()->role_id<3)
                <th colspan="3">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{!! route('users.show', [$user->id]) !!}">
                            {{ $user->name }}
                </a>
                </td>
            <td>{{ $user->email }}</td>
                <td>{{ $user->role['name'] }}</td>

                @if(Auth::user()->role_id <3)
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>


                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
