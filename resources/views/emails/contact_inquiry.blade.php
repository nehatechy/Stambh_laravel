<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Contact Inquiry Received</title>

    <style>
        .img {
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

<body
    style="margin:0; padding:0; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; background-color:#ffffff;">

    <center>

        <table cellpadding="0" cellspacing="0"
            style="
                border-spacing:0;
                border:1px solid #0e2233;
                background-color:#f5f5f5;
                padding-top:5px;
                border-collapse:collapse;
                max-width:600px;
                margin:0 auto;
                width:100%;
            ">

            <!-- Logo -->
            <tr>
                <td style="padding:0; margin:0;">

                    <img src="https://stambhaconsultants.com/front/images/Main.svg"
                        alt="Stambha Consultants"
                        style="
                            display:block;
                            border:0;
                            width:70%;
                            height:auto;
                            margin:0 auto;
                        "
                        class="img">

                </td>
            </tr>


            <!-- Intro -->
            <tr>
                <td align="center" style="padding:20px 20px 10px 20px;">

                    <p style="
                        margin:0;
                        font-size:15px;
                        line-height:22px;
                        color:#333333;
                        text-align:center;
                    ">

                        A new inquiry has been submitted through the
                        contact page.<br>

                        Please review the details below and follow up
                        with the client at your earliest convenience.

                    </p>

                </td>
            </tr>


            <!-- Inquiry Details -->
            <tr>
                <td style="padding:10px 20px 20px 20px;">

                    <table cellpadding="0" cellspacing="0"
                        class="info-table"
                        style="
                            border-collapse:collapse;
                            width:100%;
                            border:1px solid #cccccc;
                        ">

                        <!-- Header -->
                        <tr>

                            <th colspan="2"
                                style="
                                    background-color:#0a3d62;
                                    padding:12px 16px;
                                    border:1px solid #0a3d62;
                                    text-align:center;
                                ">

                                <span style="
                                    font-size:16px;
                                    font-weight:bold;
                                    color:#ffffff;
                                ">
                                    New Contact Inquiry Received
                                </span>

                            </th>

                        </tr>


                        <!-- Name -->
                        <tr>

                            <td
                                class="info-label"
                                style="
                                    padding:12px 16px;
                                    font-size:13px;
                                    color:#555555;
                                    font-weight:bold;
                                    width:35%;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >
                                Name
                            </td>

                            <td
                                style="
                                    padding:12px 16px;
                                    font-size:14px;
                                    color:#222222;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >
                                {{ $inquiry->full_name }}
                            </td>

                        </tr>


                        <!-- Email -->
                        <tr>

                            <td
                                class="info-label"
                                style="
                                    padding:12px 16px;
                                    font-size:13px;
                                    color:#555555;
                                    font-weight:bold;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >
                                Email
                            </td>

                            <td
                                style="
                                    padding:12px 16px;
                                    font-size:14px;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >

                                <a href="mailto:{{ $inquiry->email }}"
                                    style="
                                        color:#0a66c2;
                                        text-decoration:none;
                                    "
                                >
                                    {{ $inquiry->email }}
                                </a>

                            </td>

                        </tr>


                        <!-- Contact Number -->
                        <tr>

                            <td
                                class="info-label"
                                style="
                                    padding:12px 16px;
                                    font-size:13px;
                                    color:#555555;
                                    font-weight:bold;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >
                                Contact Number
                            </td>

                            <td
                                style="
                                    padding:12px 16px;
                                    font-size:14px;
                                    color:#222222;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >

                                <a href="tel:{{ $inquiry->contact_number }}"
                                    style="
                                        color:#0a66c2;
                                        text-decoration:none;
                                    "
                                >
                                    {{ $inquiry->contact_number }}
                                </a>

                            </td>

                        </tr>


                        <!-- Project Type -->
                        <tr>

                            <td
                                class="info-label"
                                style="
                                    padding:12px 16px;
                                    font-size:13px;
                                    color:#555555;
                                    font-weight:bold;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >
                                Project Type
                            </td>

                            <td
                                style="
                                    padding:12px 16px;
                                    font-size:14px;
                                    color:#222222;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >
                                {{ $inquiry->project_type }}
                            </td>

                        </tr>


                        <!-- Submitted -->
                        <tr>

                            <td
                                class="info-label"
                                style="
                                    padding:12px 16px;
                                    font-size:13px;
                                    color:#555555;
                                    font-weight:bold;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >
                                Submitted
                            </td>

                            <td
                                style="
                                    padding:12px 16px;
                                    font-size:14px;
                                    color:#222222;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >
                                {{ $inquiry->created_at->format('d M Y H:i') }}
                            </td>

                        </tr>


                        <!-- Message -->
                        <tr>

                            <td
                                class="info-label"
                                style="
                                    padding:12px 16px;
                                    font-size:13px;
                                    color:#555555;
                                    font-weight:bold;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                "
                            >
                                Message
                            </td>

                            <td
                                style="
                                    padding:12px 16px;
                                    font-size:14px;
                                    color:#222222;
                                    border:1px solid #cccccc;
                                    vertical-align:top;
                                    line-height:21px;
                                    white-space:normal;
                                    word-break:break-word;
                                "
                            >
                                {!! nl2br(e($inquiry->message)) !!}
                            </td>

                        </tr>

                    </table>

                </td>
            </tr>


            <!-- Footer -->
            <tr>

                <td align="center" style="padding:20px;">

                    <p style="
                        margin:0;
                        font-size:14px;
                        line-height:20px;
                        color:#333333;
                        text-align:center;
                    ">

                        Thank you for using our contact portal.<br>

                        <span style="
                            font-size:12px;
                            color:#777777;
                        ">
                            Stambha Consultants
                        </span>

                    </p>

                </td>

            </tr>

        </table>

    </center>

</body>

</html>