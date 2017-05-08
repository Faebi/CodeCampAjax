function ajax(url) {
return new Promise((resolve, reject) => {
var xhr = new XMLHttpRequest();
xhr.open('GET', url);
xhr.onload = () => { resolve(xhr.responseText); };
xhr.onerror = () => { reject(xhr.statusCode); };
xhr.send();
});
}

ajax('txt/info.txt')
.then((data) => {
// Bei Erfolg!
})
.catch((error) => {
// Bei einem Fehler...
});
