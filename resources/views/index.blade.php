<x-app-layout title="Home">
    <!-- Entry Point -->
    <div class="entry">
        <div class="float-right">
            <button type="button" class="btn ripple btn-success active" data-mdb-toggle="modal"
                data-mdb-target="#add-user-modal">Add User</button>
        </div>

        <div class="users">
            <div class="main">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-3">
                        <h4>List Users</h4>
                    </div>
                    <div class="col-md-5 col-md-offset-5"></div>
                    <div class="col-md-4">
                        <div class="search-table">
                            <input type="search" class="form-control" placeholder="Search...">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div id="data">
                <x-users :users="$users" />
            </div>
        </div>
    </div>
    <!--// Entry Point -->
</x-app-layout>
