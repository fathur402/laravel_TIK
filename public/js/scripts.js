
document.getElementById('status-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman form default

    // Ambil nilai dari input
    var email = document.getElementById('email').value;
    var ticketNumber = document.getElementById('ticket_number').value;

    // Lakukan validasi atau kirim data ke server
    if (email && ticketNumber) {
        alert('Link akses telah dikirim ke email Anda.');
    } else {
        alert('Harap isi semua field.');
    }
});


    // document.getElementById('topic').addEventListener('change', function() { 
    //     var additionalFields = document.getElementById('additionalFields'); 
    //     var emailUnsriForm = document.getElementById('email_unsri_form'); 
    //     var emailResetForm = document.getElementById('email_reset_form');
    //     var VPNUnsriForm = document.getElementById('vpn_unsri_form');
    //     var internetUnsriForm = document.getElementById('akses_internet_form');
        

       
    //     if (this.value === 'email_unsri', 'reset_unsri', 'vpn_unsri', 'internet_unsri') 
    //         { additionalFields.classList.remove('hidden'); 
    //             emailUnsriForm.classList.remove('hidden'); 
    //             emailResetForm.classList.remove('hidden'); 
    //             VPNUnsriForm.classList.remove('hidden'); 
    //             internetUnsriForm.classList.remove('hidden'); 
    //         } else { 
    //             additionalFields.classList.add('hidden'); 
    //             emailUnsriForm.classList.add('hidden'); 
    //             emailResetForm.classList.add('hidden'); 
    //             VPNUnsriForm.classList.add('hidden'); 
    //             internetUnsriForm.classList.add('hidden'); 
    //         } 
    //     }
    
    // );
           
    document.getElementById('topic').addEventListener('change', function() {
        var additionalFields = document.getElementById('additionalFields');
        var emailUnsriCreateForm = document.getElementById('email_unsri_create_form');
        var emailUnsriResetForm = document.getElementById('email_unsri_reset_form');
        var vpnUnsriForm = document.getElementById('vpn_unsri_form');
        var internetProblemForm = document.getElementById('internet_problem_form');

        // Sembunyikan semua form tambahan terlebih dahulu
        additionalFields.classList.add('hidden');
        emailUnsriCreateForm.classList.add('hidden');
        emailUnsriResetForm.classList.add('hidden');
        vpnUnsriForm.classList.add('hidden');
        internetProblemForm.classList.add('hidden');

        // Tampilkan form yang sesuai dengan opsi yang dipilih
        if (this.value === 'email_unsri_create') {
            additionalFields.classList.remove('hidden');
            emailUnsriCreateForm.classList.remove('hidden');
        } else if (this.value === 'email_unsri_reset') {
            additionalFields.classList.remove('hidden');
            emailUnsriResetForm.classList.remove('hidden');
        } else if (this.value === 'vpn_unsri') {
            additionalFields.classList.remove('hidden');
            vpnUnsriForm.classList.remove('hidden');
        } else if (this.value === 'internet_problem') {
            additionalFields.classList.remove('hidden');
            internetProblemForm.classList.remove('hidden');
        }
    });


        
   

