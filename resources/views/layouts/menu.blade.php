<style>
.fa{
    font-size: 16px;
    margin: 3px 10px;
}

</style>
<li class="{{ Request::is('jobs*') ? 'active' : '' }}">
    <a href="{{ route('jobs.index') }}"><i class="fa fa-list"></i><span>Open Jobs</span></a>
</li>

<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{{ route('accounts.index') }}"><i class="fa fa-user-circle"></i><span>My Account</span></a>
</li>

<li class="{{ Request::is('invitations*') ? 'active' : '' }}">
    <a href="{{ route('invitations.index') }}"><i class="fa fa-bell"></i><span>Invitations</span></a>
</li>


<li class="{{ Request::is('jobs*') ? 'active' : '' }}">
    <a href="{{ route('jobs.index') }}"><i class="fa fa-briefcase"></i><span>My Jobs</span></a>
</li>

<li class="{{ Request::is('organisations*') ? 'active' : '' }}">
    <a href="{{ route('organisations.index') }}"><i class="fa fa-building"></i><span>My Organisations</span></a>
</li>


<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{{ route('skills.index') }}"><i class="fa fa-black-tie"></i><span>My Skills</span></a>
</li>


<!-- Admin Menu Section -->

@if(Auth::user()->role_id <3 )

<li class="header">Admin Panel</li>

<li class="{{ Request::is('accounts*') ? 'active' : '' }}">
    <a href="{{ route('accounts.index') }}"><i class="fa fa-edit"></i><span>Accounts</span></a>
</li>


<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('organisations*') ? 'active' : '' }}">
    <a href="{{ route('organisations.index') }}"><i class="fa fa-edit"></i><span>Organisations</span></a>
</li>


<li class="{{ Request::is('skills*') ? 'active' : '' }}">
    <a href="{{ route('skills.index') }}"><i class="fa fa-edit"></i><span>Skills</span></a>
</li>

<li class="{{ Request::is('jobs*') ? 'active' : '' }}">
    <a href="{{ route('jobs.index') }}"><i class="fa fa-edit"></i><span>All Jobs</span></a>
</li>

<li class="{{ Request::is('invitations*') ? 'active' : '' }}">
    <a href="{{ route('invitations.index') }}"><i class="fa fa-edit"></i><span>All Invitations</span></a>
</li>


<li class="{{ Request::is('countries*') ? 'active' : '' }}">
    <a href="{{ route('countries.index') }}"><i class="fa fa-edit"></i><span>Countries</span></a>
</li>


<li class="{{ Request::is('failedJobs*') ? 'active' : '' }}">
    <a href="{{ route('failedJobs.index') }}"><i class="fa fa-edit"></i><span>Failed Jobs</span></a>
</li>

<!--
<li class="{{ Request::is('organisationUsers*') ? 'active' : '' }}">
    <a href="{{ route('organisationUsers.index') }}"><i class="fa fa-edit"></i><span>Organisation Users</span></a>
</li>
-->

@endif