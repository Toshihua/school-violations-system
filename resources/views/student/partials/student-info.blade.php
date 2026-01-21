<div class="col-12 col-lg-4 col-xl-3">

    <div class="card mb-4 shadow-sm border-0 rounded-3">
        <div class="card-header border-0 text-white fw-bold py-3 text-center bg-primary">
            Student Profile
        </div>
        <div class="card-body text-center py-4">
            <img src="https://ui-avatars.com/api/?name={{ $user->first_name }}&background=800000&color=fff"
                class="mb-3 shadow-sm border-3 border-light rounded-circle"
                style="width: 100px; height: 100px; object-fit: cover;">

            <h4 class="fw-bold mb-1 fs-5">{{ $user->first_name }} {{ $user->last_name}}</h4>
            <p class="text-danger small fw-bold mb-3">{{ $user->school_id }}</p>

            <div class="bg-light p-2 rounded-2 text-start mx-auto" style="max-width: 100%;">
                <small class="text-muted d-block fw-bold" style="font-size: 10px;">EMAIL</small>
                <span class="small text-truncate d-block">{{ $user->email}}</span>
            </div>
        </div>
    </div>

    <div class="card mb-4 shadow-sm border-0 rounded-3">
        <div class="card-header border-0 text-white fw-bold py-3 bg-primary">
            Quick Stats
        </div>
        <ul class="list-group list-group-flush rounded-3">
            <li class="list-group-item d-flex justify-content-between align-items-center m-1 border-0">
                <span class="d-flex align-items-center">
                    <img src="{{ asset('violation.png') }}" alt="icon" class="me-2" style="width: 18px; height: 18px;">
                    Total Violations
                </span>
                <span class="badge bg-danger rounded-pill px-3">{{ $violationCount }}</span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center m-1 border-0"
                style="background-color: #fff9e6;">
                <span class="fw-bold d-flex align-items-center" style="color: #2c3e50;">
                    <img src="{{ asset('pending.png') }}" alt="icon" class="me-2" style="width: 18px; height: 18px;">
                    Pending
                </span>
                <span class="fw-bold" style="color: #f1c40f; font-size: 18px;">
                    {{ $violationRecords->where('status.status_name', 'In progress')->count() }}
                </span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center m-1 border-0"
                style="background-color: #e6ffed;">
                <span class="fw-bold d-flex align-items-center" style="color: #2c3e50;">
                    <img src="{{ asset('done.png') }}" alt="icon" class="me-2" style="width: 18px; height: 18px;">
                    Resolved
                </span>
                <span class="fw-bold" style="color: #2ecc71; font-size: 18px;">
                    {{ $violationRecords->where('status.status_name', 'Resolved')->count() }}
                </span>
            </li>
        </ul>
    </div>

    <div class="card mb-4 shadow-sm border-0 rounded-3">
        <div class="card-header border-0 text-white fw-bold py-3 bg-primary">
            Recent Violations
        </div>
        <div class="card-body p-2">
            @foreach($violationRecords->take(2) as $record)
            <div class="border rounded p-2 mb-2 bg-light shadow-sm">
                <div class="d-flex justify-content-between align-items-start">
                    <strong class="small d-block text-truncate" style="max-width: 65%;">
                        {{ $record->violationSanction->violation->violation_name }}
                    </strong>
                    <x-status-badge :status="$record->status->status_name" />
                </div>
                <div class="mt-1">
                    <small class="text-muted" style="font-size: 10px;">
                        <i class="bi bi-calendar-event me-1"></i>
                        {{ \Carbon\Carbon::parse($record->created_at)->format('Y-m-d') }}
                    </small>
                </div>
            </div>
            @endforeach
            @if($violationRecords->isEmpty())
            <p class="text-center text-muted small my-2">No recent records.</p>
            @endif
        </div>
    </div>

</div>