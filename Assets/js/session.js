const closeSuccesBtn = document.getElementById('close-succes-btn');
const succesAlert = document.getElementById('succes-alert');

closeSuccesBtn.onclick = function() {
    // Cacher l'alerte
    succesAlert.classList.add("hidden");

    // Envoyer une requête pour supprimer la variable de session
    fetch('../../Traitement/script.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            action: 'unsetSuccess'
        })
    })
            .then(response => response.json())
            .then(data => {
    // Traitement après la réponse, si nécessaire
    console.log(data);
        })
           .catch(error => {
    console.error('Error:', error);
        });
};
