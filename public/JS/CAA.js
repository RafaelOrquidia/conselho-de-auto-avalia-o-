document.getElementById('sidebarToggle').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('closed');
});

document.getElementById('sidebarClose').addEventListener('click', function() {
    document.getElementById('sidebar').classList.add('closed');
});


///
// JavaScript para mostrar e fechar a janela
function showMessage() {
    document.getElementById('messageModal').style.display = "block";
}

function closeMessage() {
    document.getElementById('messageModal').style.display = "none";
}

// Fecha a janela se o usuário clicar fora dela
window.onclick = function(event) {
    const modal = document.getElementById('messageModal');
    if (event.target === modal) {
        modal.style.display = "none";
    }
}