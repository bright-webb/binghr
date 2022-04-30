<table class="table align-middle mb-0 bg-white">
    <thead class="bg-light">
      <tr>
        <th>Name</th>
        <th></th>
        <th>Create Date</th>
        <th>Role</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @if(count($users)>0)
      @foreach ($users as $user)
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img
                src="/uploads/{{$user->employee_id}}/{{$user->profile_avatar}}"
                alt=""
                style="width: 35px; height: 35px"
                class="rounded-circle"
                />
            <div class="ms-3">
              <p class="fw-bold mb-1">{{ucwords($user->fname.' '.$user->lname)}}</p>
              <p class="text-muted mb-0">{{$user->email}}</p>
            </div>
          </div>
        </td>
        <td>
            <span class="badge @if($user->is_read != NULL && $user->is_write != NULL && $user->is_delete != NULL && strtolower($user->type) == 'super admin')) badge-danger @elseif($user->is_read != NULL && $user->is_write == NULL && $user->is_delete != NULL) badge-primary @elseif($user->is_read != NULL && $user->is_write == NULL && $user->is_delete == NULL || strtolower($user->type) == "employee") badge-warning @elseif($user->is_read != NULL && $user->is_write != NULL && $user->is_delete != NULL && strtolower($user->type) == "hr admin") badge-success @endif d-inline">
                {{ucwords($user->type)}}
            </span>
        </td>

        <td>{{$user->create_date}}</td>
        <td>{{ucwords($user->type)}}
        <td>
          <a href="javascript:void()" class="btn btn-link btn-rounded edit" id="{{$user->id}}">
            <i class="fa fa-pencil"></i>
          </a>
          <a href="javascript:void()" class="btn btn-link btn-rounded delete" id="{{$user->id}}">
            <i class="fa fa-trash"></i>
          </a>
        </td>
      </tr>

      @endforeach
      @else
        <p>No Data</p>
      @endif
    </tbody>
  </table>
