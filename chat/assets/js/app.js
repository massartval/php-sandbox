function getMessages() {
  const requestAjax = new XMLHttpRequest();
  requestAjax.open("GET", "/sandbox/chat/handler.php");

  requestAjax.onload = function () {
    const resultat = JSON.parse(requestAjax.responseText);
    const html = resultat
      .reverse()
      .map(function (message) {
        return `
            <div class="message">
                <span class="date">${message.created_at.substring(11, 16)}</span>
                <span class="author">${message.author}</span> :
                <span class="content">${message.content}</span>
            </div>`;
      })
      .join("");

    const messages = document.querySelector(".messages");

    messages.innerHTML = html;
    messages.scrollTop = messages.scrollHeight;
  };
  requestAjax.send();
}

function postMessage(event) {
  event.preventDefault();

  event.preventDefault();

  const author = document.querySelector("#author");
  const content = document.querySelector("#content");
  //console.log("author");
  //console.log(author);

  const data = new FormData();
  data.append("author", author.value);
  //console.log(author.value);
  data.append("content", content.value);

  const requestAjax = new XMLHttpRequest();
  requestAjax.open("POST", "/sandbox/chat/handler.php?task=write");

  requestAjax.onload = function () {
    content.value = "";
    content.focus();
    getMessages();
  };

  requestAjax.send(data);
}

document.querySelector("form").addEventListener("submit", postMessage);

// const interval = window.setInterval(getMessages, 3000);

getMessages();
