<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violation Record Notice</title>
</head>

<body
    style="margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif; line-height: 1.5; color: #333333;">
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f4f4f4;">
        <tr>
            <td align="center" style="padding: 24px 12px;">
                <table role="presentation" cellpadding="0" cellspacing="0" width="100%"
                    style="max-width: 600px; background-color: #ffffff; border-radius: 4px; border: 1px solid #e0e0e0;">
                    <tr>
                        <td align="center" style="padding: 18px 24px; background-color: #800000; color: #ffffff;">
                            <div style="font-size: 20px; letter-spacing: 0.08em; text-transform: uppercase;">
                                <strong>{{ config('app.name') }}</strong>
                            </div>
                        </td>
                    </tr>

                    {{-- Title --}}
                    <tr>
                        <td style="padding: 18px 24px 8px 24px; border-bottom: 1px solid #eeeeee;">
                            <h1 style="margin: 0; font-size: 18px; font-weight: 600; color: #222222;">
                                Disciplinary Violation Recorded</h1>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 16px 24px 8px 24px;">
                            <p style="margin: 0 0 12px; font-size: 14px;">
                                Dear {{ $user->first_name }} {{ $user->last_name }},
                            </p>
                            <p style="margin: 0 0 16px; font-size: 14px;">
                                This email is to formally inform you that a disciplinary
                                violation has been recorded in your student record. The
                                summary of this case is provided below for your
                                reference.
                            </p>
                        </td>
                    </tr>

                    <!-- Details -->
                    <tr>
                        <td style="padding: 0 24px 8px 24px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%"
                                style="border-collapse: collapse; font-size: 13px; border: 1px solid #e0e0e0;">
                                <tr>
                                    <td
                                        style="width: 35%; padding: 10px 12px; background-color: #fafafa; border-bottom: 1px solid #e0e0e0; font-weight: bold; color: #555555;">
                                        Case ID</td>
                                    <td style="padding: 10px 12px; border-bottom: 1px solid #e0e0e0;">{{
                                        $record->formatCaseId() }}</td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 35%; padding: 10px 12px; background-color: #fafafa; border-bottom: 1px solid #e0e0e0; font-weight: bold; color: #555555;">
                                        Violation</td>
                                    <td style="padding: 10px 12px; border-bottom: 1px solid #e0e0e0;">{{
                                        $record->violationSanction->violation->violation_name }}</td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 35%; padding: 10px 12px; background-color: #fafafa; border-bottom: 1px solid #e0e0e0; font-weight: bold; color: #555555;">
                                        Offense count</td>
                                    <td style="padding: 10px 12px; border-bottom: 1px solid #e0e0e0;">{{
                                        $record->violationSanction->no_of_offense }}</td>
                                </tr>
                                <tr>
                                    <td
                                        style="width: 35%; padding: 10px 12px; background-color: #fafafa; font-weight: bold; color: #555555;">
                                        Sanction</td>
                                    <td style="padding: 10px 12px;">{{
                                        $record->violationSanction->sanction->sanction_name }}</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Instructions -->
                    <tr>
                        <td style="padding: 16px 24px 4px 24px;">
                            <p style="margin: 0 0 10px; font-size: 13px;">
                                If you have any questions regarding this case, or if you
                                believe the information above is inaccurate, you are
                                encouraged to make an appeal through our website
                                or visit the Discipline Office
                            </p>
                            <p style="margin: 0 0 10px; font-size: 13px;">
                                You are given <strong>three (3) days</strong> from the date this email is sent to
                                submit an appeal. If you do not file an appeal within this period, the violation will
                                be considered final and you will be <strong>required</strong> to report to the
                                Discipline Office.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 4px 24px 16px 24px;">
                            <p style="margin: 0; font-size: 12px; color: #666666;">
                                You may also review your records by logging in to the
                                system at
                                <span style="color: #800000;">{{ config('app.url') }}</span>
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="padding: 14px 24px 18px 24px; background-color: #fafafa; border-top: 1px solid #e0e0e0; font-size: 11px; color: #777777;">
                            <p style="font-size: 13px; color: #800000;">
                                <strong><em>Mula Sa'yo, Para sa Bayan</em></strong>
                            </p>
                            <p style="margin: 0 0 4px;">This is an automatically generated message from {{
                                config('app.name') }}.</p>
                            <p style="margin: 0;">Please do not reply to this email address.</p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>