@extends('layouts.app')
@section('title','Daftar Reservasi')
@section('content')

 <!-- Css Custom File Link-->
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
<link rel="stylesheet" href="{{ secure_asset('css/responsive-style.css') }}">



<h2 class="text-center res-title mb-4">Daftar Reservasi</h2>

<style>
    .table-wrapper {
    background: #fff;
    border-radius: 14px;
    padding: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.reserv-table {
    width: 100%;
    min-width: 800px;
    border-collapse: collapse;
}

.reserv-table thead th {
    background: #f2f2f2;
    padding: 12px 8px;
    font-weight: 700;
    font-size: 13px;
    border-bottom: 2px solid #ddd;
    white-space: nowrap;
    text-align: left;
}

.reserv-table tbody td {
    padding: 12px 8px;
    vertical-align: middle;
    font-size: 13px;
    border-bottom: 1px solid #eee;
}

.action-btns {
    display: flex;
    gap: 6px;
    flex-wrap: nowrap;
}

.payment-btn {
    padding: 5px 10px;
    font-size: 12px;
    font-weight: 600;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    background: #28a745;
    color: white;
    white-space: nowrap;
}

.payment-btn:hover {
    background: #218838;
}

.edit-btn {
    padding: 5px 10px;
    font-size: 12px;
    font-weight: 600;
    border-radius: 6px;
    border: 1px solid #007bff;
    background: white;
    color: #007bff;
    cursor: pointer;
    white-space: nowrap;
}

.delete-btn {
    padding: 5px 10px;
    font-size: 12px;
    font-weight: 600;
    border-radius: 6px;
    border: 1px solid #dc3545;
    background: white;
    color: #dc3545;
    cursor: pointer;
    white-space: nowrap;
}

/* Mobile Responsive */
@media screen and (max-width: 768px) {
    .table-wrapper {
        padding: 10px;
        border-radius: 10px;
        margin: 0 -5px;
    }

    .reserv-table {
        min-width: 750px;
        font-size: 12px;
    }

    .reserv-table thead th {
        padding: 10px 6px;
        font-size: 11px;
    }

    .reserv-table tbody td {
        padding: 10px 6px;
        font-size: 11px;
    }

    .action-btns {
        gap: 4px;
    }

    .payment-btn,
    .edit-btn,
    .delete-btn {
        padding: 4px 8px;
        font-size: 11px;
    }
}

/* Extra small screens */
@media screen and (max-width: 480px) {
    .table-wrapper {
        padding: 8px;
        margin: 0 -10px;
    }

    .reserv-table {
        min-width: 700px;
    }

    .reserv-table thead th,
    .reserv-table tbody td {
        padding: 8px 4px;
        font-size: 10px;
    }

    .payment-btn,
    .edit-btn,
    .delete-btn {
        padding: 3px 6px;
        font-size: 10px;
    }
}

    /* Modal Styles */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        animation: fadeIn 0.3s ease;
    }

    .modal-overlay.active {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .modal-content {
        background: white;
        border-radius: 12px;
        padding: 0;
        max-width: 500px;
        width: 100%;
        max-height: 90vh;
        overflow-y: auto;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        animation: slideUp 0.4s ease;
    }

    .modal-header {
        background: #28a745;
        padding: 20px;
        border-radius: 12px 12px 0 0;
        color: white;
        position: relative;
    }

    .modal-header h3 {
        margin: 0;
        font-size: 20px;
        font-weight: 700;
    }

    .modal-close {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(255, 255, 255, 0.2);
        border: none;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 18px;
        color: white;
        transition: all 0.3s ease;
    }

    .modal-close:hover {
        background: rgba(255, 255, 255, 0.3);
    }

    .modal-body {
        padding: 25px;
    }

    .payment-info {
        text-align: center;
        margin-bottom: 25px;
    }

    .payment-info h4 {
        font-size: 14px;
        color: #666;
        margin-bottom: 5px;
    }

    .payment-info p {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin: 5px 0;
    }

    .payment-amount {
        font-size: 28px;
        font-weight: 700;
        color: #28a745;
        margin: 10px 0;
    }

    .qr-code-section {
        background: #f8f9fa;
        padding: 25px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 25px;
    }

    .qr-code {
        width: 200px;
        height: 200px;
        margin: 0 auto 15px;
        background: white;
        padding: 15px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .qr-code img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .qr-instruction {
        font-size: 13px;
        color: #666;
        margin-top: 10px;
    }

    .payment-methods {
        margin-top: 25px;
    }

    .payment-methods h4 {
        font-size: 15px;
        font-weight: 700;
        color: #333;
        margin-bottom: 15px;
        text-align: center;
    }

    .payment-options {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .payment-option {
        background: white;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        padding: 15px;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .payment-option:hover {
        border-color: #28a745;
        background: #f8f9fa;
    }

    .payment-option .option-number {
        font-size: 12px;
        color: #666;
        margin-top: 5px;
        font-family: monospace;
    }

    .whatsapp-btn {
        background: #25D366;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        width: 100%;
        margin-top: 15px;
        transition: all 0.3s ease;
    }

    .whatsapp-btn:hover {
        background: #128C7E;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
    }

    /* Confirmation Section */
    .confirmation-section {
        background: #fff3cd;
        border: 2px solid #ffc107;
        border-radius: 8px;
        padding: 20px;
        margin-top: 20px;
        display: none;
        animation: slideDown 0.3s ease;
    }

    .confirmation-section.active {
        display: block;
    }

    .confirmation-section h4 {
        color: #856404;
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 12px;
        text-align: center;
    }

    .checkbox-wrapper {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px;
        background: white;
        border-radius: 6px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .checkbox-wrapper:hover {
        background: #f8f9fa;
    }

    .checkbox-wrapper input[type="checkbox"] {
        width: 20px;
        height: 20px;
        cursor: pointer;
        accent-color: #28a745;
    }

    .checkbox-wrapper label {
        flex: 1;
        cursor: pointer;
        font-size: 13px;
        color: #333;
        font-weight: 500;
        margin: 0;
    }

    .confirm-btn {
        background: #6c757d;
        color: white;
        border: none;
        padding: 14px 20px;
        border-radius: 6px;
        font-size: 15px;
        font-weight: 700;
        cursor: not-allowed;
        width: 100%;
        margin-top: 15px;
        transition: all 0.3s ease;
        opacity: 0.6;
    }

    .confirm-btn.enabled {
        background: #28a745;
        cursor: pointer;
        opacity: 1;
    }

    .confirm-btn.enabled:hover {
        background: #218838;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
    }

    /* Success Modal */
    .success-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 10000;
        justify-content: center;
        align-items: center;
        padding: 20px;
        animation: fadeIn 0.3s ease;
    }

    .success-modal.active {
        display: flex;
    }

    .success-modal-content {
        background: white;
        border-radius: 16px;
        padding: 40px;
        max-width: 400px;
        width: 100%;
        text-align: center;
        animation: bounceIn 0.5s ease;
    }

    .success-icon {
        width: 80px;
        height: 80px;
        background: #28a745;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        animation: scaleUp 0.5s ease;
    }

    .success-icon::before {
        content: '✓';
        color: white;
        font-size: 48px;
        font-weight: 700;
    }

    .success-modal h3 {
        color: #28a745;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .success-modal p {
        color: #666;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .success-details {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        text-align: left;
    }

    .success-details div {
        display: flex;
        justify-content: space-between;
        padding: 5px 0;
        font-size: 13px;
    }

    .success-details div span:first-child {
        color: #666;
    }

    .success-details div span:last-child {
        font-weight: 600;
        color: #333;
    }

    .success-close-btn {
        background: #28a745;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .success-close-btn:hover {
        background: #218838;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .modal-content {
            max-width: 95%;
            margin: 20px;
        }

        .modal-body {
            padding: 20px;
        }

        .payment-options {
            grid-template-columns: 1fr;
        }

        .qr-code {
            width: 180px;
            height: 180px;
        }

        .payment-amount {
            font-size: 24px;
        }

        .success-modal-content {
            padding: 30px 20px;
        }
    }

    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes bounceIn {
        0% {
            opacity: 0;
            transform: scale(0.3);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes scaleUp {
        0% {
            transform: scale(0);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
</style>

@if($reservations->count() == 0)
    <div class="alert alert-info text-center">
        Belum ada reservasi kamar.
    </div>
@endif

<div class="table-wrapper">
    <table class="table reserv-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>HP</th>
                <th>Email</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Kamar</th>
                <th>Harga/Malam</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($reservations as $r)
            <tr>
                <td>{{ $r->guest_name }}</td>
                <td>{{ $r->phone }}</td>
                <td>{{ $r->email }}</td>
                <td>{{ $r->check_in }}</td>
                <td>{{ $r->check_out }}</td>
                <td>{{ $r->room_type }}</td>
                <td>Rp {{ number_format($r->price_per_night,0,',','.') }}</td>
                <td>Rp {{ number_format($r->total_price,0,',','.') }}</td>
                <td>
                    <div class="action-btns">
                        <a href="{{ route('reservations.edit', $r->id) }}" 
                           class="main-btn" style="padding:6px 12px; font-size:13px;">
                           Edit
                        </a>

                        <button class="payment-btn" onclick="openPaymentModal('{{ $r->guest_name }}', {{ $r->total_price }}, '{{ $r->id }}')">
                            Payment
                        </button>

                        <form action="{{ route('reservations.destroy', $r->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus reservasi ini?');"
                              style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button class="secondary-btn" type="submit"
                                    style="padding:6px 12px; font-size:13px;">
                                Delete
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Payment Modal -->
<div class="modal-overlay" id="paymentModal" onclick="closePaymentModal(event)">
    <div class="modal-content" onclick="event.stopPropagation()">
        <div class="modal-header">
            <h3>💳 Payment Details</h3>
            <button class="modal-close" onclick="closePaymentModal()">&times;</button>
        </div>
        <div class="modal-body">
            <div class="payment-info">
                <h4>Total Pembayaran untuk</h4>
                <p id="guestName"></p>
                <div class="payment-amount" id="paymentAmount">Rp 0</div>
            </div>

            <div class="qr-code-section">
                <div class="qr-code">
                    <img src="" id="qrImage" alt="QR Code">
                </div>
                <p class="qr-instruction">📱 Scan QR code untuk konfirmasi pembayaran via WhatsApp</p>
            </div>

            <div class="payment-methods">
                <h4>Pilihan Metode Pembayaran</h4>
                <div class="payment-options">
                    <div class="payment-option">
                        <div style="font-weight: 700; color: #0066cc; font-size: 16px;">BCA</div>
                        <div class="option-number">628601009718505</div>
                    </div>
                    <div class="payment-option">
                        <div style="font-weight: 700; color: #003d7a; font-size: 16px;">Mandiri</div>
                        <div class="option-number">628601009718505</div>
                    </div>
                    <div class="payment-option">
                        <div style="font-weight: 700; color: #ed8b00; font-size: 16px;">BNI</div>
                        <div class="option-number">628601009718505</div>
                    </div>
                    <div class="payment-option">
                        <div style="font-weight: 700; color: #003d7a; font-size: 16px;">BRI</div>
                        <div class="option-number">628601009718505</div>
                    </div>
                    <div class="payment-option">
                        <div style="font-weight: 700; color: #00AA13; font-size: 16px;">GoPay</div>
                        <div class="option-number">085748384770</div>
                    </div>
                    <div class="payment-option">
                        <div style="font-weight: 700; color: #4c3494; font-size: 16px;">OVO</div>
                        <div class="option-number">085748384770</div>
                    </div>
                    <div class="payment-option">
                        <div style="font-weight: 700; color: #108ee9; font-size: 16px;">DANA</div>
                        <div class="option-number">085748384770</div>
                    </div>
                    <div class="payment-option">
                        <div style="font-weight: 700; color: #ee4d2d; font-size: 16px;">ShopeePay</div>
                        <div class="option-number">085748384770</div>
                    </div>
                </div>
            </div>

            <button class="whatsapp-btn" onclick="openWhatsApp()">
                💬 Hubungi Admin via WhatsApp
            </button>

            <!-- Confirmation Section -->
            <div class="confirmation-section" id="confirmationSection">
                <h4>⚠️ Konfirmasi Pembayaran</h4>
                <div class="checkbox-wrapper">
                    <input type="checkbox" id="confirmCheckbox" onchange="toggleConfirmButton()">
                    <label for="confirmCheckbox">
                        Ya, saya sudah menghubungi admin Hotel Al-Meghah via WhatsApp
                    </label>
                </div>
            </div>

            <button class="confirm-btn" id="confirmBtn" onclick="confirmPayment()" disabled>
                🔒 Confirm Payment
            </button>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div class="success-modal" id="successModal">
    <div class="success-modal-content">
        <div class="success-icon"></div>
        <h3>Pesanan Berhasil!</h3>
        <p>Pembayaran Anda telah dikonfirmasi</p>
        
        <div class="success-details">
            <div>
                <span>Nama Tamu:</span>
                <span id="successGuestName"></span>
            </div>
            <div>
                <span>Total Bayar:</span>
                <span id="successAmount"></span>
            </div>
            <div>
                <span>Reservation ID:</span>
                <span id="successReservationId"></span>
            </div>
        </div>

        <p style="font-size: 12px; color: #999;">
            Admin akan segera memproses reservasi Anda
        </p>

        <button class="success-close-btn" onclick="closeSuccessModal()">
            Tutup
        </button>
    </div>
</div>

<script>
    let currentReservationData = {};
    const whatsappNumber = '6285748384770'; // Format internasional tanpa +

    function openPaymentModal(guestName, totalPrice, reservationId) {
        currentReservationData = {
            guestName: guestName,
            totalPrice: totalPrice,
            reservationId: reservationId
        };

        document.getElementById('guestName').textContent = guestName;
        document.getElementById('paymentAmount').textContent = 'Rp ' + totalPrice.toLocaleString('id-ID');
        
        // Generate WhatsApp message
        const whatsappMessage = `Halo Admin Hotel Al-Meghah,%0A%0ASaya ingin konfirmasi pembayaran:%0A- Nama: ${guestName}%0A- Total: Rp ${totalPrice.toLocaleString('id-ID')}%0A- Reservation ID: ${reservationId}%0A%0ATerima kasih!`;
        
        // Generate WhatsApp link
        const whatsappLink = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;
        
        // Generate QR Code untuk WhatsApp link
        document.getElementById('qrImage').src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(whatsappLink)}`;
        
        // Reset confirmation section
        document.getElementById('confirmationSection').classList.remove('active');
        document.getElementById('confirmCheckbox').checked = false;
        document.getElementById('confirmBtn').disabled = true;
        document.getElementById('confirmBtn').classList.remove('enabled');
        document.getElementById('confirmBtn').innerHTML = '🔒 Confirm Payment';
        
        document.getElementById('paymentModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closePaymentModal(event) {
        if (!event || event.target.classList.contains('modal-overlay') || event.target.classList.contains('modal-close')) {
            document.getElementById('paymentModal').classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }

    function openWhatsApp() {
        const whatsappMessage = `Halo Admin Hotel Al-Meghah,%0A%0ASaya ingin konfirmasi pembayaran:%0A- Nama: ${currentReservationData.guestName}%0A- Total: Rp ${currentReservationData.totalPrice.toLocaleString('id-ID')}%0A- Reservation ID: ${currentReservationData.reservationId}%0A%0ATerima kasih!`;
        
        const whatsappLink = `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`;
        
        // Buka WhatsApp
        window.open(whatsappLink, '_blank');
        
        // Tampilkan confirmation section setelah 1 detik
        setTimeout(() => {
            document.getElementById('confirmationSection').classList.add('active');
        }, 1000);
    }

    function toggleConfirmButton() {
        const checkbox = document.getElementById('confirmCheckbox');
        const confirmBtn = document.getElementById('confirmBtn');
        
        if (checkbox.checked) {
            confirmBtn.disabled = false;
            confirmBtn.classList.add('enabled');
            confirmBtn.innerHTML = '✓ Confirm Payment';
        } else {
            confirmBtn.disabled = true;
            confirmBtn.classList.remove('enabled');
            confirmBtn.innerHTML = '🔒 Confirm Payment';
        }
    }

    function confirmPayment() {
        // Close payment modal
        document.getElementById('paymentModal').classList.remove('active');
        
        // Update success modal dengan data
        document.getElementById('successGuestName').textContent = currentReservationData.guestName;
        document.getElementById('successAmount').textContent = 'Rp ' + currentReservationData.totalPrice.toLocaleString('id-ID');
        document.getElementById('successReservationId').textContent = '#' + currentReservationData.reservationId;
        
        // Show success modal
        document.getElementById('successModal').classList.add('active');
        
        // Optional: Auto close after 5 seconds
        setTimeout(() => {
            closeSuccessModal();
        }, 5000);
    }

    function closeSuccessModal() {
        document.getElementById('successModal').classList.remove('active');
        document.body.style.overflow = 'auto';
        
        // Optional: Refresh halaman untuk update data
        // location.reload();
    }

    // Close modal with ESC key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closePaymentModal();
            closeSuccessModal();
        }
    });
</script>

@endsection