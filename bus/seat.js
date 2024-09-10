document.addEventListener('DOMContentLoaded', () => {
    const seats = document.querySelectorAll('.seat');
    const seatInput = document.getElementById('seatinput');

    seats.forEach(seat => {
        seat.addEventListener('click', () => {
            seats.forEach(s => s.classList.remove('selected'));
            seat.classList.add('selected');
            seatInput.value = seat.id;
        });
    });
});