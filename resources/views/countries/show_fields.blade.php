<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $country->name }}</p>
</div>

<!-- Currency Field -->
<div class="form-group">
    {!! Form::label('currency', 'Currency:') !!}
    <p>{{ $country->currency }}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $country->code }}</p>
</div>

<!-- Phone Ext Field -->
<div class="form-group">
    {!! Form::label('phone_ext', 'Phone Ext:') !!}
    <p>{{ $country->phone_ext }}</p>
</div>

<!-- Flag Field -->
<div class="form-group">
    {!! Form::label('flag', 'Flag:') !!}
    <p>{{ $country->flag }}</p>
</div>

