let box = document.getElementsByClassName('box');
for(let i = 0; i < box.length; i++) {
    box[i].addEventListener("click", (e) => {
        if (e.shiftKey && e.target.getAttribute("data-type") == "true"){
            e.target.setAttribute("data-type", "false");
            for (let j = 0; j < e.target.children.length; j++) {
                if (e.target.children[j].getAttribute("name") == 'check')
                e.target.children[j].value = "false";
            }
            document.getElementById('edit').submit();
        } else if (e.target.getAttribute("data-type") == "false") {
            e.target.setAttribute("data-type", "true");
            for (let j = 0; j < e.target.children.length; j++) {
                if (e.target.children[j].getAttribute("name") == 'check')
                e.target.children[j].value = "true";
            }
            document.getElementById('edit').submit();
        }
  })
}