document.addEventListener('DOMContentLoaded', function () {
    // Memeriksa apakah elemen chart ada di halaman
    const ctx = document.getElementById('myChart').getContext('2d');
    
    // Data penjualan untuk dua produk (A dan B) pada tanggal 1-30
    const labels = Array.from({ length: 30 }, (_, i) => i + 1); // Membuat array [1, 2, ..., 30]
    const productAData = [12, 15, 13, 18, 14, 20, 25, 18, 22, 16, 12, 19, 24, 30, 18, 21, 15, 20, 30, 25, 22, 20, 15, 18, 30, 28, 26, 22, 19, 21]; // Contoh data untuk produk A
    const productBData = [15, 20, 18, 25, 30, 28, 25, 22, 18, 24, 30, 22, 18, 15, 20, 30, 25, 22, 20, 24, 19, 21, 30, 25, 22, 20, 30, 28, 26, 24]; // Contoh data untuk produk B
    
    // Membuat chart menggunakan Chart.js
    const myChart = new Chart(ctx, {
        type: 'line', // Jenis chart adalah garis (line)
        data: {
            labels: labels, // Menggunakan tanggal 1-30 sebagai label
            datasets: [{
                label: 'Penjualan Produk A',
                data: productAData,
                borderColor: 'rgba(54, 162, 235, 1)', // Warna garis
                borderWidth: 2, // Ketebalan garis
                fill: false // Mengisi area di bawah garis
            }, {
                label: 'Penjualan Produk B',
                data: productBData,
                borderColor: 'rgba(255, 99, 132, 1)', // Warna garis untuk Produk B
                borderWidth: 2,
                fill: false // Mengisi area di bawah garis
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true // Memulai sumbu Y dari 0
                }
            }
        }
    });
});
