document.addEventListener('DOMContentLoaded', function() {
    var links = document.querySelectorAll('a[data-link]');
    var modal = document.getElementById('myModal');
    var videoPlayer = document.getElementById('videoPlayer');
    var span = document.getElementsByClassName('close')[0];

    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            var dataLinkValue = link.getAttribute('data-link');
            
            // Извлекаем идентификатор видео из URL
            var videoId = dataLinkValue.split('/').pop().split('?')[0];
            videoPlayer.src = 'https://www.youtube.com/embed/' + videoId;
            modal.style.display = 'block';
        });
    });

    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            videoPlayer.src = ''; // Очищаем источник видео
        }
    };
});

let articles = document.querySelectorAll(".search-article");

console.log(articles);

articles.forEach(article => {
    if (article.textContent.toLowerCase().includes("пример страницы")) {
        article.remove();
    }
});