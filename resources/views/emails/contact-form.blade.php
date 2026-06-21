<x-mail::message>
# 🚀 New Contact Message

<div style="background: #151415; border: 1px solid #272627; border-radius: 12px; padding: 24px; margin: 20px 0;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 10px 0; border-bottom: 1px solid #272627; width: 100px; vertical-align: top;">
                <strong style="color: #d8fe00;">Name</strong>
            </td>
            <td style="padding: 10px 0; border-bottom: 1px solid #272627; color: #ffffff;">
                {{ $data['name'] }}
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 0; border-bottom: 1px solid #272627; vertical-align: top;">
                <strong style="color: #d8fe00;">Email</strong>
            </td>
            <td style="padding: 10px 0; border-bottom: 1px solid #272627;">
                <a href="mailto:{{ $data['email'] }}" style="color: #ffffff; text-decoration: none;">{{ $data['email'] }}</a>
            </td>
        </tr>
        <tr>
            <td style="padding: 10px 0; vertical-align: top;">
                <strong style="color: #d8fe00;">Subject</strong>
            </td>
            <td style="padding: 10px 0; color: #ffffff; font-weight: 600;">
                {{ $data['subject'] }}
            </td>
        </tr>
    </table>
</div>

<div style="background: #151415; border: 1px solid #272627; border-radius: 12px; padding: 24px; margin: 20px 0;">
    <h4 style="color: #d8fe00; margin: 0 0 12px 0; font-size: 14px;">MESSAGE</h4>
    <p style="color: #c0c0c0; line-height: 1.7; margin: 0; white-space: pre-wrap;">{{ $data['message'] }}</p>
</div>

<x-mail::button :url="'mailto:' . $data['email']">
✉️ Reply to {{ $data['name'] }}
</x-mail::button>

<hr style="border: none; border-top: 1px solid #272627; margin: 24px 0;">

<p style="text-align: center; color: #666; font-size: 12px;">
    This message was sent from your portfolio contact form<br>
    &copy; {{ date('Y') }} Shabian Arsyl Yonanta
</p>
</x-mail::message>
