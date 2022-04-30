<x-app-layout :title="$name">
    <div id="edit">
        <form class="update-user">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" placeholder="First Name"
                                value="{{ ucwords($users[0]->fname) }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="lname" placeholder="Last Name"
                                value="{{ ucwords($users[0]->lname) }}" required>
                        </div>
                    </div>
                    <input type="hidden" name="user" value="{{ $users[0]->id }}">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email ID"
                                value="{{ $users[0]->email }}"" required>
                    </div>
                </div>
                <div class=" col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number"
                                    value="{{ $users[0]->mobile }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="role" required>
                                    <option value="{{ ucwords($users[0]->type) }}">{{ ucwords($users[0]->type) }}
                                    </option>
                                    <option value="admin">Admin</option>
                                    <option value="super admin">Super Admin</option>
                                    <option value="employee">Employee</option>
                                    <option value="hr admin">HR Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    value="{{ ucwords($users[0]->username) }}" required>
                            </div>
                        </div>

                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                                <tr>
                                    <th>Module Permission</th>
                                    <th>Read</th>
                                    <th>Write</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Super Admin</strong></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="super_read"
                                                @if ($users[0]->is_read != null) checked @endif value="1" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="super_write"
                                                @if ($users[0]->is_write != null) checked @endif value="1" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="super_delete"
                                                @if ($users[0]->is_delete != null) checked @endif value="1" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><strong>Admin</strong></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="admin_read"
                                                @if ($users[0]->is_read != null) checked @endif value="1" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="admin_write"
                                                @if ($users[0]->is_write != null) checked @endif value="1" disabled />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="admin_delete"
                                                @if ($users[0]->is_delete != null) checked @endif value="1" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><strong>Employee</strong></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="employee_read"
                                                @if ($users[0]->is_read != null) checked @endif value="1" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="employee_write"
                                                @if ($users[0]->is_write != null) checked @endif value="1" disabled />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="employee_delete"
                                                @if ($users[0]->is_delete != null) checked @endif value="1" disabled />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td><strong>HR Admin</strong></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="hr_read"
                                                @if ($users[0]->is_read != null) checked @endif value="1" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="hr_write"
                                                @if ($users[0]->is_write != null) checked @endif value="1" disabled />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="hr_delete"
                                                @if ($users[0]->is_delete != null) checked @endif value="1" />
                                            <label class="form-check-label" for="flexCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update User</button>
                    <button type="button" class="btn btn-default cl" data-mdb-dismiss="modal">Close</button>
                </div>
        </form>

    </div>

</x-app-layout>
