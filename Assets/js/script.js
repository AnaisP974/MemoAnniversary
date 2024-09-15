// Retirer l'alerte de déconnexion et détruit définitivement la session
const closeBtn = document.getElementById('close-btn');
const alertLogout = document.getElementById('alert-logout');

closeBtn.onclick = function () {
    // Cacher l'alerte
    alertLogout.classList.add("hidden");

    // Envoyer une requête AJAX pour détruire la session
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../../Traitement/destroy-session.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log("Session destroyed: " + xhr.responseText);
        }
    };

    // Envoyer la requête (sans paramètres supplémentaires dans ce cas)
    xhr.send();
};