Hi {{ $name }}
<p>Please click the link below to complete registration</p>
{{ route('confirmation', $token) }}