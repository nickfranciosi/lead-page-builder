{!! csrf_field() !!}

<div class="form-group">
    <label for="recipient_name">Recipient Name:</label>
    <input type="text" class="form-control" id="recipient_name" name="recipient_name" placeholder="First and Last Name">
</div>

<div class="form-group">
    <label for="recipient_email">Recipient Email:</label>
    <input type="text" class="form-control" id="recipient_email" name="recipient_email" placeholder="First and Last Name">
</div>

<div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" name="message" id="message"></textarea>
</div>

<div class="form-group">
    <label for="expires_on">Expire Date:</label>
    <input type="date" name="expires_on" id="expires_on" class="form-control" value="" required="required" title="expires_on">
</div>




<button type="submit" class="btn btn-primary">Submit</button>