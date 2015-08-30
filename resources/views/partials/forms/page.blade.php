

<div class="form-group">
    <label for="recipient_name">Recipient Name:</label>
    {!! Form::text('recipient_name', null, ['placeholder' => 'First and Last name', 'class' => 'form-control', 'id' => 'recipient_name']) !!}
</div>

<div class="form-group">
    <label for="recipient_email">Recipient Email:</label>
    {!! Form::email('recipient_email', null, ['placeholder' => 'you@whatever.com', 'class' => 'form-control', 'id' => 'recipient_email']) !!}
</div>

<div class="form-group">
    <label for="video_url">Video Url</label>
    {!! Form::text('video_url', null, ['placeholder' => 'path to vimeo or youtube video', 'class' => 'form-control', 'id' => 'video_url']) !!}
</div>

<div class="form-group">
        <label for="message">Message:</label>
      {!! Form::textarea('message', null, ['class' => 'form-control', 'id' => 'message']) !!}
</div>

<div class="form-group">
    <label for="expires_on">Expire Date:</label>
    {!! Form::date('expires_on', null, ['class' => 'form-control', 'id' => 'expires_on']) !!}
</div>




<button type="submit" class="btn btn-primary">Submit</button>