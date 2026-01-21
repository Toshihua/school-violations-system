<?php

namespace App\Services;

use App\Models\ViolationRecord;
use App\Models\ViolationSanction;
use Illuminate\Support\Facades\Mail;

class ViolationService
{
    /**
     * Get the next offense count of the student on a specific violation
     */
    public function countViolationOfStudent($user_id, $violation_id)
    {
        $max_offenses = $this->getMaxOffense($violation_id);

        $violation_count = $this->getCurrentOffenseCount($user_id, $violation_id);

        if ($violation_count < $max_offenses) {
            $violation_count = $violation_count + 1;
            return $violation_count;
        }

        return $violation_count;
    }

    /**
     * Determine the sanction of a violation based on the rulebook using their offense count
     */
    public function determineViolationSanction($violation_id, $violation_count)
    {
        $vio_sanct_id = ViolationSanction::where('violation_id', $violation_id)
            ->where('no_of_offense', $violation_count)
            ->get('id')
            ->first()
            ->id;

        return $vio_sanct_id;
    }

    /**
     * Get the maximum offense of a violation
     */
    private function getMaxOffense($violation_id)
    {
        return ViolationSanction::where('violation_id', $violation_id)->orderBy('no_of_offense', 'desc')->get()->first()->no_of_offense;
    }

    /**
     * Determine the current offense count of a student on a specific violation
     */
    private function getCurrentOffenseCount($user_id, $violation_id)
    {
        $record = ViolationRecord::join('violation_sanctions', 'violation_records.vio_sanct_id', '=', 'violation_sanctions.id')
            ->where('violation_records.user_id', $user_id)
            ->where('violation_sanctions.violation_id', $violation_id)
            ->latest('no_of_offense')
            ->get()
            ->first();

        return $record->no_of_offense ?? 0;
    }

    /**
     * Send Email for Violation
     */
    public function sendViolationEmail(ViolationRecord $record, $mailable)
    {
        // Ensure related data and user email are available
        $record->loadMissing(['status', 'user', 'violationSanction.violation', 'violationSanction.sanction', 'appeal']);

        $user = $record->user;

        if (! $user || ! $user->email) {
            return;
        }

        Mail::to('joshua123.jdr@gmail.com')->send($mailable);
    }
}
