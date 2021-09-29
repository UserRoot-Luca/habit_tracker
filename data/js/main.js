let box = document.getElementsByClassName('box');
for(let i = 0; i < box.length; i++) {
    box[i].addEventListener("click", (e) => {
        if (e.shiftKey && e.target.getAttribute("data-type") == "true"){
            e.target.setAttribute("data-type", "false");
            e.target.children[2].value = "false";
        } else if (!e.shiftKey && e.target.getAttribute("data-type") == "false") {
            e.target.setAttribute("data-type", "true");
            e.target.children[2].value = "true";
        }

        fetch("./server_actions/edit.php", {
            method: 'post',
            body: JSON.stringify({
                id: e.target.children[0].value, 
                day: e.target.children[1].value, 
                new: e.target.children[2].value
            })
        })
        .then(function(res) { return res.text();})
        // .then(function(data) { console.log(data); })
        .catch(function (error) { console.log(error); });
    })
}


let remuve = document.getElementsByClassName('remuve');
for(let i = 0; i < remuve.length; i++) {
    remuve[i].addEventListener("click", (e) => {
        if (e.shiftKey && e.altKey){
            fetch("./server_actions/remuve.php", {
                method: 'post',
                body: JSON.stringify({
                    id: e.target.getAttribute("data-id")
                })
            })
            .then(function(res) { return res.text();})
            .then(function(data) { /*console.log(data);*/ window.location.replace("./index.php");})
            .catch(function (error) { console.log(error); });
        }
    })
}


if (navigator.userAgent.indexOf("Firefox") != -1) {
    let options_button = document.getElementsByClassName('options_button');
    for(let i = 0; i < options_button.length; i++) 
        options_button[i].children[0].style.height = `${options_button[i].clientHeight}px`;  
}