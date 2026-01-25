<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Booking Received</title>
</head>
<body style="margin:0;padding:0;background:#0b0b0b;color:#fff;font-family:Arial, Helvetica, sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="max-width:680px;margin:30px auto;border-collapse:collapse">
    <tr>
      <td style="background:#070707;padding:28px 32px;border-radius:12px;border:1px solid rgba(212,175,55,0.12)">
        <table width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td style="padding-bottom:18px">
              <h1 style="margin:0;font-family:'Georgia', serif;color:#D4AF37;font-size:22px">Casa Frangipani</h1>
              <p style="margin:6px 0 0;color:#cfcfcf;font-size:14px">Booking {{ $isCustomer ? 'confirmation' : 'notification' }}</p>
            </td>
          </tr>

          <tr>
            <td style="padding:18px 0;border-top:1px solid rgba(255,255,255,0.03);">
              <p style="margin:0 0 10px;color:#e8e8e8;font-size:15px">Hello{{ $isCustomer ? '' : ' Team' }},</p>
              @if($isCustomer)
                <p style="margin:0 0 12px;color:#cfcfcf;font-size:14px">Thank you for your booking request. We have received your details and will contact you shortly to confirm availability and next steps.</p>
              @else
                <p style="margin:0 0 12px;color:#cfcfcf;font-size:14px">A new booking request has been submitted via the website. Details are below.</p>
              @endif
            </td>
          </tr>

          <tr>
            <td style="padding:12px;background:linear-gradient(180deg,rgba(255,255,255,0.02),transparent);border-radius:8px;margin-top:8px">
              <table width="100%" cellpadding="6" cellspacing="0">
                <tr>
                  <td style="width:40%;color:#D4AF57;font-weight:600">Name</td>
                  <td style="color:#fff">{{ $booking->customer_name ?? $booking->customerName ?? '—' }}</td>
                </tr>
                <tr>
                  <td style="color:#D4AF57;font-weight:600">Phone</td>
                  <td style="color:#fff">{{ $booking->customer_phone ?? $booking->customerPhone ?? '—' }}</td>
                </tr>
                <tr>
                  <td style="color:#D4AF57;font-weight:600">Email</td>
                  <td style="color:#fff">{{ $booking->customer_email ?? $booking->customerEmail ?? '—' }}</td>
                </tr>
                <tr>
                  <td style="color:#D4AF57;font-weight:600">Dates</td>
                  <td style="color:#fff">{{ $booking->check_in ?? '—' }} — {{ $booking->check_out ?? '—' }}</td>
                </tr>
                <tr>
                  <td style="color:#D4AF57;font-weight:600">Guests</td>
                  <td style="color:#fff">{{ $booking->guest_count ?? '—' }}</td>
                </tr>
                <tr>
                  <td style="color:#D4AF57;font-weight:600">Notes</td>
                  <td style="color:#fff">{{ $booking->customer_notes ?? '—' }}</td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td style="padding-top:18px">
              <p style="color:#cfcfcf;font-size:13px;margin:0 0 8px">Reference ID: <span style="color:#fff;font-weight:600">{{ $booking->id ?? 'n/a' }}</span></p>
              <div style="display:flex;gap:10px;align-items:center;margin-top:10px">
                <div style="width:44px;height:44px;border-radius:10px;background:#D4AF57;display:flex;align-items:center;justify-content:center;color:#000;font-weight:700">CF</div>
                <div style="font-size:13px;color:#cfcfcf">We look forward to hosting you at Casa Frangipani. For urgent queries reply to this email or call the number provided above.</div>
              </div>
            </td>
          </tr>

          <tr>
            <td style="padding-top:22px;border-top:1px solid rgba(255,255,255,0.03);">
              <p style="color:#888;font-size:12px;margin:0">© Casa Frangipani — Alibaug</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
