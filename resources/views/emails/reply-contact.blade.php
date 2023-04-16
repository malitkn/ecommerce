<div class="table-responsive mb-4">
    <table style="background:#f3f3f3; width:100%;" cellpadding="0" cellspacing="0" border="0">
        <tbody>
        <tr>
            <td style="padding: 50px;">
                <table style="width: 550px;height: 100%;margin: 0 auto" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    <tr style="border-bottom:1px dashed #ddd">
                        <td style="width: 175px;height: 20px;font-family: nunito-regular, sans-serif;font-size: 18px;font-weight: 500;font-style: normal;font-stretch: normal;line-height: 1.11;letter-spacing: normal;text-align: center;color: #001737;padding-bottom: 22px"> {{ $title }}</td>
                    </tr>
                    <tr>
                        <td style="padding-top: 20px;">
                            <img style="float:left;" src="{{ $message->embed(asset('storage/back/images/' . $settings->logo)) }}" alt="Logo">
                            <p style="font-family: nunito-regular, sans-serif;font-size: 13px;font-weight: 500;font-style:
                                  normal;font-stretch: normal;line-height: normal;letter-spacing: normal;color:
                                  #bbb;float:right;margin-top: 10px;"> {{ $settings->description }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border-radius: 10px;background: #fff;padding: 30px 60px 20px 60px;margin-top: 10px;display: block;">
                             {!! $body  !!}
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="width:235px;margin: 20px auto 0 auto;" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    <tr>
                        <td>
                            <table style="float:left;margin-right:15px;" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                <tr>
                                    <td style="background: #e6e6e6;color:#2b80ff;border-radius: 100%;height: 35px;width: 35px; margin-right:20px;">
                                        <img style="display: block;margin: auto;max-width: 8px;"
                                             src="../../../assets/images/email/fb.png" alt="facebook">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table style="float:left;margin-right:15px;" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                <tr>
                                    <td style="background: #e6e6e6;color:#2b80ff;border-radius: 100%;height: 35px;width: 35px; margin-right:20px;">
                                        <img style="display: block;margin: auto;max-width: 15px;"
                                             src="../../../assets/images/email/twitter.png" alt="facebook">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table style="float:left;margin-right:15px;" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                <tr>
                                    <td style="background: #e6e6e6;color:#2b80ff;border-radius: 100%;height: 35px;width: 35px; margin-right:20px;">
                                        <img style="display: block;margin: auto;max-width: 15px;"
                                             src="../../../assets/images/email/youtube.png" alt="facebook">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table style="float:left;margin-right:15px;" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                <tr>
                                    <td style="background: #e6e6e6;color:#2b80ff;border-radius: 100%;height: 35px;width: 35px; margin-right:20px;">
                                        <img style="display: block;margin: auto;max-width: 15px;"
                                             src="../../../assets/images/email/medium.png" alt="facebook">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table style="float:left;" cellpadding="0" cellspacing="0" border="0">
                                <tbody>
                                <tr>
                                    <td style="background: #e6e6e6;color:#2b80ff;border-radius: 100%;height: 35px;width: 35px; margin-right:20px;">
                                        <img style="display: block;margin: auto;max-width: 15px;"
                                             src="../../../assets/images/email/slack.png" alt="facebook">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table style="margin: 20px auto 10px auto;" cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                    <tr>
                        <td style="font-family: nunito-regular, sans-serif;font-size: 14px;font-weight: normal;font-style: normal;font-stretch: normal;line-height: normal;letter-spacing: normal;color: #001737;">
                            Copyright © {{ now()->year . $settings->title }} . All rights reserved.
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>
</div>
