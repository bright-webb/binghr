<x-app-layout title="Home">
    <!-- Entry Point -->
    <div class="entry">
        <div class="float-right">
            <button type="button" class="btn ripple btn-success active" data-mdb-toggle="modal" data-mdb-target="#add-user-modal">Add User</button>
        </div>

        <div class="users">
            <div class="main">

            </div>
            <div id="data">
                <x-users :users="$users"/>
            </div>
        </div>
    </div>
    <!--// Entry Point -->
</x-app-layout>
