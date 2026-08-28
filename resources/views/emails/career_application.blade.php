<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Job Application Received</title>
    <style>
    .img{
        max-height: 200px;
            max-width: 200px;
      }
        @media (max-width: 480px) {
            .info-table td {
                display: block !important;
                width: 100% !important;
                box-sizing: border-box !important;
            }

            .info-label {
                padding-bottom: 2px !important;
            }
        }
    </style>
</head>

<body style="margin:0; padding:0; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;">
    <center>
        <table cellpadding="0" cellspacing="0"
            style="border-spacing:0;border:1px solid #0e2233; background-color:#f5f5f5;padding-top:5px;border-collapse:collapse; max-width:600px; margin:0 auto; width:100%;">
            <tr>
                <td style="padding:0; margin:0;">
                    <img src="https://stambhaconsultants.com/front/images/Main.svg" alt="stambhaconsultants"
                        style="display:block; border:0; width:70%; height:auto; margin: 0 auto;" class="img">
                </td>
            </tr>

            <tr>
                <td align="center" style="padding:20px 20px 10px 20px;">
                    <p style="margin:0; font-size:15px; line-height:22px; color:#333333; text-align:center;">
                        A new candidate has submitted an application through the careers page.<br>
                        Please review the details below and follow up at your earliest convenience.
                    </p>
                </td>
            </tr>

            <tr>
                <td style="padding:10px 20px 20px 20px;">
                    <table cellpadding="0" cellspacing="0"
                        style="border-collapse:collapse; width:100%;border:1px solid #cccccc;">
                        <tr>
                            <th colspan="2"
                                style="background-color:#0a3d62; padding:12px 16px; border:1px solid #0a3d62; text-align:center;">
                                <span style="font-size:16px; font-weight:bold; color:#ffffff;">New Job Application
                                    Received</span>
                            </th>
                        </tr>
                        <tr>
                            <td
                                style="padding:12px 16px; font-size:13px; color:#555555; font-weight:bold; width:35%; border:1px solid #cccccc; vertical-align:top;">
                                Position
                            </td>
                            <td
                                style="padding:12px 16px; font-size:14px; color:#222222; border:1px solid #cccccc; vertical-align:top;">
                                {{ $application->applied_for }}
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="padding:12px 16px; font-size:13px; color:#555555; font-weight:bold; border:1px solid #cccccc; vertical-align:top;">
                                Name
                            </td>
                            <td
                                style="padding:12px 16px; font-size:14px; color:#222222; border:1px solid #cccccc; vertical-align:top;">
                                {{ $application->name }}
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="padding:12px 16px; font-size:13px; color:#555555; font-weight:bold; border:1px solid #cccccc; vertical-align:top;">
                                Email
                            </td>
                            <td
                                style="padding:12px 16px; font-size:14px; border:1px solid #cccccc; vertical-align:top;">
                                <a href="mailto:{{ $application->email }}"
                                    style="color:#0a66c2; text-decoration:none;">{{ $application->email }}</a>
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="padding:12px 16px; font-size:13px; color:#555555; font-weight:bold; border:1px solid #cccccc; vertical-align:top;">
                                Phone
                            </td>
                            <td
                                style="padding:12px 16px; font-size:14px; color:#222222; border:1px solid #cccccc; vertical-align:top;">
                                {{ $application->phone }}
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="padding:12px 16px; font-size:13px; color:#555555; font-weight:bold; border:1px solid #cccccc; vertical-align:top;">
                                Cover Message
                            </td>
                            <td
                                style="padding:12px 16px; font-size:14px; color:#222222; border:1px solid #cccccc; vertical-align:top;">
                                {{ $application->cover_message ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="padding:12px 16px; font-size:13px; color:#555555; font-weight:bold; border:1px solid #cccccc; vertical-align:top;">
                                Attachment
                            </td>
                            <td
                                style="padding:12px 16px; font-size:14px; color:#222222; border:1px solid #cccccc; vertical-align:top;">
                                Resume is attached to this email ({{ strtoupper(pathinfo($application->resume, PATHINFO_EXTENSION)) }})
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td align="center" style="padding:20px;">
                    <p style="margin:0; font-size:14px; line-height:20px; color:#333333; text-align:center;">
                        Thank you for using our portal.<br>
                    </p>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>