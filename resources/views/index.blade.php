<x-app-layout>
    <!-- Entry Point -->
    <div class="entry">
        <div class="float-right">
            <button type="button" class="btn ripple btn-success active" data-mdb-toggle="modal" data-mdb-target="#add-user-modal">Add User</button>
        </div>

        <div class="users">
            <h4>Users</h4>
            <x-users />
        </div>
    </div>
    <!--// Entry Point -->
</x-app-layout>
