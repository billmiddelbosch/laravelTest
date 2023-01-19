

<h1>Blade testing</h1>

@php
    $single = 'bill';

    $multiple = array('test1', 'test2');

@endphp




@include('headerComponent')



<br><br>

{{ $single }}

{{ $single == 'test1' ? 'ja' : 'nee'}}

{{count($multiple)}}

@if (count($multiple) <= 1)
    <h2> 0 of 1 <h2>
@else
    <h2> 2 of meer <h2>
@endif


