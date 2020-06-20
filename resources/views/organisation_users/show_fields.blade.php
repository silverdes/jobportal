<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $organisationUser->user_id }}</p>
</div>

<!-- Organisation Id Field -->
<div class="form-group">
    {!! Form::label('organisation_id', 'Organisation Id:') !!}
    <p>{{ $organisationUser->organisation_id }}</p>
</div>

<!-- Role Field -->
<div class="form-group">
    {!! Form::label('role', 'Role:') !!}
    <p>{{ $organisationUser->role }}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $organisationUser->start_date }}</p>
</div>

<!-- End Date Field -->
<div class="form-group">
    {!! Form::label('end_date', 'End Date:') !!}
    <p>{{ $organisationUser->end_date }}</p>
</div>

