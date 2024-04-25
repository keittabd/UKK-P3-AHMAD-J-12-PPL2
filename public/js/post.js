function saveTitle() {
    // Dapatkan nilai dari textarea
    var title = document.getElementById('titleTextarea').value;

    // Kirim nilai ke server menggunakan AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/save-title', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Respon sukses dari server
                console.log('Title berhasil disimpan ke database');
            } else {
                // Respon gagal dari server
                console.error('Gagal menyimpan title ke database');
            }
        }
    };
    xhr.send(JSON.stringify({ title: title }));
}

