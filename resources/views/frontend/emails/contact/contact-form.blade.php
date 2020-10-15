@component('mail::message')

# A New Nurse Service Buying Message

    <strong>Name</strong> {{ $data['customer_name'] }}
    <strong>Email</strong> {{ $data['customer_email'] }}
    <strong>PHN Number</strong> {{ $data['customer_phn'] }}
    <strong>Address</strong> {{ $data['customer_address'] }}
    <strong>Message</strong>
   {{ $data['customer_message'] }}
@endcomponent
