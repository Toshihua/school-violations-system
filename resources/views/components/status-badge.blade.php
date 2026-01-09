<div>
    @if($status == 'In progress')
    <span class="badge bg-info text-uppercase" style="font-size: 12px;">
        In Progress
    </span>
    @elseif($status == 'Under review')
    <span class="badge bg-warning text-dark text-uppercase" style="font-size: 12px;">
        Under Review
    </span>
    @else
    <span class="badge bg-success text-uppercase" style="font-size: 12px;">
        Resolved
    </span>
    @endif
</div>