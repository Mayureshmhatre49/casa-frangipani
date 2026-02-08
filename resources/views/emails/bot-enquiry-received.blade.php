<h2>New Villa Enquiry</h2>

<p><strong>Name:</strong> {{ $enquiry->name }}</p>
<p><strong>Phone:</strong> {{ $enquiry->phone }}</p>
<p><strong>Email:</strong> {{ $enquiry->email }}</p>

@if($enquiry->check_in && $enquiry->check_out)
<p><strong>Dates:</strong>
    {{ $enquiry->check_in->format('d M Y') }}
    –
    {{ $enquiry->check_out->format('d M Y') }}
</p>
@endif

<p><strong>Guests:</strong> {{ $enquiry->guests }}</p>
<p><strong>Budget:</strong> {{ $enquiry->budget_range }}</p>
<p><strong>Occasion:</strong> {{ $enquiry->occasion }}</p>

<hr>

<p>
    <small>
        Source: Website Chatbot<br>
        Submitted at: {{ $enquiry->created_at->format('d M Y, h:i A') }}
    </small>
</p>
