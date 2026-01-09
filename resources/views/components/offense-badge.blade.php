<div>
    @if($offense == 'First Offense')
    <span class="badge badge-offense-1">FIRST OFFENSE</span>
    @elseif($offense == 'Second Offense')
    <span class="badge badge-offense-2">SECOND OFFENSE</span>
    @elseif($offense == 'Third Offense')
    <span class="badge badge-offense-3">THIRD OFFENSE</span>
    @endif
</div>