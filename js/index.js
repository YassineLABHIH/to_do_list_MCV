// Recuperation du select pour le tri
    const orderOption = document.getElementById('order');

// Soumission du formulaire a chaque changement
    orderOption.addEventListener('change', () => {
        
        const url = new URL(window.location.href);
        url.searchParams.set('order', orderOption.value);
        window.location.href =  url.href;

    })